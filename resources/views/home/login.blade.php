@extends('layoutsPagina.plantillaPagina')


@section('contenido')   {{-- Iniciamos la seccion blade --}}

    {{-- LOGIN --}}
    <section class="loginReg ">
        <!-- Main content -->
        <div class="container pb-5">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Ingresar</h5>
                            <form class="form-signin" action="{{route('acceso')}}" method="post">
                                @csrf
                                @if(Session::has('message'))
                                {!! Session::get('message') !!}
                                @endif
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Correo electronico" autofocus>
                                    <label for="inputEmail">DNI O EMAIL</label>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="login">iniciar sesión</button>
                                <hr class="my-4">


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- END LOGIN --}}


@endsection {{-- Finalizamos la seccion blade --}}
