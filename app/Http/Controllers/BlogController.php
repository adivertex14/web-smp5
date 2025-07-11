<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
// use Intervention\Image\ImageManagerStatic as Image; // Hapus atau komentari baris ini
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Dflydev\DotAccessData\Data;

use Intervention\Image\ImageManager; // Pastikan ini diimpor dengan benar

class BlogController extends Controller
{
    //fungsi index
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    // halaman create
    public function create()
    {
        return view('admin.blog.create');
    }

    // fungsi store
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ], [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ]);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->move(public_path('artikel'), $fileName);

        //Artikel
        $storage = "storage/content-artikel"; // Pastikan path ini benar dan dapat diakses
        $dom = new \DOMDocument();

        #untuk menonaktifkan kesalahan libxml standar dan memungkinkan kesalahan pengguna
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        #menghapus buffer kesalahan libxml
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        // --- Perubahan di sini untuk Intervention Image ---
        // Inisialisasi ImageManager dengan driver GD (atau imagick jika diinstal)
        $manager = new ImageManager('GD'); // Default driver GD
        // Jika Anda ingin menggunakan driver Imagick, pastikan sudah terinstal:
        // $manager = new ImageManager(new \Intervention\Image\Drivers\Imagick\Driver());

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];

                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");

                // Decode base64 string
                $srcClean = preg_replace('/^data:image\/\w+;base64,/', '', $src);
                $imageData = base64_decode($srcClean);

                // Menggunakan objek $manager untuk memproses gambar
                $image = $manager->read($imageData)->resize(1440, 720);

                // Simpan gambar dengan format yang sesuai
                switch ($mimetype) {
                    case 'jpeg':
                    case 'jpg':
                        $image->toJpeg(100)->save(public_path($filePath));
                        break;
                    case 'png':
                        $image->toPng(9)->save(public_path($filePath));
                        break;
                    case 'webp':
                        $image->toWebp(90)->save(public_path($filePath));
                        break;
                    default:
                        return back()->with('error', 'Format gambar tidak didukung.');
                }

                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        // Simpan data ke database
        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil disimpan');
    }

    // halaman edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }

    // fungsi update
    public function update(Request $request, $id)
    {
        $artikel = Blog::find($id);

        // Validasi
        $imageRule = $request->hasFile('image') ? 'required|image|max:1000|mimes:jpg,jpeg,png,webp' : 'nullable';
        $request->validate([
            'judul' => 'required',
            'image' => $imageRule,
            'desc' => 'required|min:20',
        ], [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ]);

        // Handle gambar baru jika diupload
        $fileName = $artikel->image; // Default ke gambar lama
        if ($request->hasFile('image')) {
            if (File::exists(public_path('artikel/' . $artikel->image))) {
                File::delete(public_path('artikel/' . $artikel->image));
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('artikel'), $fileName);
        }

        // Proses deskripsi berisi gambar dari Summernote
        $storage = "artikel/content-artikel"; // Pastikan path ini benar
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        // --- Perubahan di sini untuk Intervention Image ---
        // Inisialisasi ImageManager dengan driver GD (atau imagick jika diinstal)
        $manager = new ImageManager('GD'); // Default driver GD
        // Jika Anda ingin menggunakan driver Imagick, pastikan sudah terinstal:
        // $manager = new ImageManager(new \Intervention\Image\Drivers\Imagick\Driver());

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // Pastikan hanya memproses gambar base64 yang baru diunggah
            if (preg_match('/data:image/', $src) && !preg_match('/^' . preg_quote(asset('artikel/content-artikel'), '/') . '/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");

                // Decode base64 string
                $srcClean = preg_replace('/^data:image\/\w+;base64,/', '', $src);
                $imageData = base64_decode($srcClean);

                // Menggunakan objek $manager untuk memproses gambar
                $image = $manager->read($imageData)->resize(1440, 720);

                // Simpan gambar dengan format yang sesuai
                switch ($mimetype) {
                    case 'jpeg':
                    case 'jpg':
                        $image->toJpeg(100)->save(public_path($filePath));
                        break;
                    case 'png':
                        $image->toPng(9)->save(public_path($filePath));
                        break;
                    case 'webp':
                        $image->toWebp(90)->save(public_path($filePath));
                        break;
                    default:
                        // Handle mime type yang tidak dikenal jika perlu
                        return back()->with('error', 'Format gambar tidak dikenali.');
                }

                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        // Update DB
        $artikel->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'Data berhasil diupdate');
    }

    // fungsi delete
    public function destroy($id)
    {
        $artikel = Blog::find($id);
        if (File::exists(public_path('artikel/' . $artikel->image))) {
            File::delete(public_path('artikel/' . $artikel->image));
        }
        $artikel->delete();

        return redirect(route('blog'))->with('success', 'Data berhasil dihapus');
    }
}
