@extends('layouts.main')
@section('titulo', 'Iniciar sesión')
@section('contenido')

<body style="background-image: linear-gradient(120deg,#FCD6E3,#A9ECE9); background-attachment: fixed; height: 50%">
    <!-- <div style="height: 100%;" id="centrar"> -->
        <div class="container my-5" >
            <div class="row" id="centrar">
                <div class="col-lg-8" id="centrar">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-7" id="centrar">
                                <div class="container-fluid">
                                    <div class="card-body ml-3 mr-0">
                                        <form class="align-items-center" style="color: #757575;" action="{{ route('login') }}" method="post">
                                        {!! csrf_field() !!}
                                            <div class="form-row mb-3 mt-3 text-center">
                                                <div class="col-lg-12">
                                                    <h2 class="font-weight-bold black-text"><i class="fas fa-paw animated tada infinite "></i> BIENVENIDO</h2>	
                                                    <p class="text-center grey-text my-0" style="font-size: 15px;">
                                                        Ingresa tus credenciales para iniciar sesión.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-row mt-3 mb-4">
                                                <div class="col-lg-12" >
                                                    <label for="email">Ingresa tu correo</label>
                                                    <input name="email" class="form-control validate" type="email">
                                                </div>
                                                <div class="col-lg-12 mt-2" >
                                                    <label for="password">Ingresa tu contraseña</label>
                                                    <input name="password" class="form-control validate" type="password">
                                                </div>
                                            </div>
                                            <!-- Sign up button -->
                                            <div class="md-form my-0 text-center" id="btnLogin">
                                                <button type="submit" class="btn">Iniciar sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5" id="centrar">
                                <div class="card-body contact h-100 white-text" style="background-color: black;">
                                    <div class="container text-left">
                                        <h3 class="my-4 pb-2">¿NUEVO POR AQUÍ?</h3>
                                        <p  style="font-size: 15px;">
                                            Registra tu cuenta de usuario, para unirte a nuestra familia, con ello podras:
                                        </p>
                                        <li><i class="fas fa-check white-text"></i> Registrar a tu mascota</li>
                                        <li><i class="fas fa-check white-text"></i> Contratar un plan de cuidados personalizados</li>
                                        <li><i class="fas fa-check white-text"></i> Disfrutar de los beneficios de la cobertura de tu plan</li>
                                        <!-- Sign up button -->
                                        <div class="md-form" id="btnRegistrar">
                                            <a  class="btn" href="{{url('/register')}}">Registrarse</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div>     -->
</body>

@endsection