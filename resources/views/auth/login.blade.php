<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Iniciar Sesión | GauRiv Compra y Venta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistema de Compras y Ventas - GauRiv" name="description" />
    <meta content="GauRiv" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <script src="{{ asset('assets/js/layout.js') }}"></script>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                @include('svgs.shape')
            </div>
        </div>

        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="{{ url('/') }}" class="d-inline-block auth-logo">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo GauRiv" height="50">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Sistema de Compras y Ventas - GauRiv</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">¡Bienvenido de nuevo!</h5>
                                    <p class="text-muted">Inicia sesión para continuar en GauRiv Compra y Venta.</p>
                                </div>

                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        {{-- Correo electrónico --}}
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                required
                                                autofocus
                                                placeholder="Ingresa tu correo">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        {{-- Contraseña --}}
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="{{ route('password.request') }}" class="text-muted">¿Olvidaste tu contraseña?</a>
                                            </div>
                                            <label class="form-label" for="password">Contraseña</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password"
                                                    class="form-control pe-5 @error('password') is-invalid @enderror"
                                                    name="password"
                                                    id="password"
                                                    required
                                                    placeholder="Ingresa tu contraseña">

                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                        type="button"
                                                        id="password-addon">
                                                    <i class="ri-eye-fill align-middle"></i>
                                                </button>
                                            </div>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        {{-- Recordarme --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="auth-remember-check">Recordarme</label>
                                        </div>

                                        {{-- Botón de ingreso --}}
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Ingresar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- Registro opcional --}}
                        <div class="mt-4 text-center">
                            <p class="mb-0">¿No tienes cuenta?
                                <a href="{{ route('register') }}" class="fw-semibold text-primary text-decoration-underline"> Regístrate </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JS principales -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- Efectos visuales -->
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>

    <!-- Inicialización de login (mostrar/ocultar contraseña) -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.getElementById("password");
            const toggleBtn = document.getElementById("password-addon");
            const icon = toggleBtn.querySelector("i");

            toggleBtn.addEventListener("click", function () {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    icon.classList.remove("ri-eye-fill");
                    icon.classList.add("ri-eye-off-fill"); // cambia a icono de ojo tachado
                } else {
                    passwordInput.type = "password";
                    icon.classList.remove("ri-eye-off-fill");
                    icon.classList.add("ri-eye-fill"); // vuelve al ojo normal
                }
            });
        });
    </script>


</body>

</html>
