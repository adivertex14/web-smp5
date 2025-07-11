@extends('layout.layout')

@section('konten')
    <section style="margin-top: 100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <h3 class="fw-bold mb-3 text-center">Halaman Login Admin</h3>

                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Masukkan E-mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="formgroup mb-3">
                            <label for="">Masukkan Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary align-items-center">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
