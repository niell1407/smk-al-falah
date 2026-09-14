@extends('layouts.app')

@section('title', 'Login Admin | SMK Al Falah Tanjungjaya')

@section('content')

<section class="py-5" style="background: #eaf6fc; min-height: 80vh;">

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">

                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center"
                                 style="
                                    width: 70px;
                                    height: 70px;
                                    border-radius: 20px;
                                    background: #eaf6fc;
                                 ">

                                <i class="bi bi-shield-lock-fill fs-2"
                                   style="color: #176b9d;">
                                </i>

                            </div>

                            <h2 class="fw-bold" style="color: #123b57;">
                                Login Admin
                            </h2>

                            <p class="text-secondary mb-0">
                                SMK Al Falah Tanjungjaya
                            </p>

                        </div>

                        @if($errors->any())

                            <div class="alert alert-danger rounded-3">
                                {{ $errors->first() }}
                            </div>

                        @endif

                        <form action="{{ route('admin.login.process') }}"
                              method="POST">

                            @csrf

                            <div class="mb-3">

                                <label class="form-label fw-semibold">
                                    Email
                                </label>

                                <input type="email"
                                       name="email"
                                       class="form-control rounded-3"
                                       value="{{ old('email') }}"
                                       placeholder="Masukkan email admin"
                                       required>

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Password
                                </label>

                                <input type="password"
                                       name="password"
                                       class="form-control rounded-3"
                                       placeholder="Masukkan password"
                                       required>

                            </div>

                            <button type="submit"
                                    class="btn btn-primary w-100 rounded-pill py-2">

                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                Masuk sebagai Admin

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection