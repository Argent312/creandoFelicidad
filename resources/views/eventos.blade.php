@extends('layouts.app')
@section('content')

<div class="eventos">
    <div class="head">
        <h2>Eventos "CREANDO FELICIDAD"</h2>
        <p>Se parte de nuestros proximos eventos, siguenos para conocer mas sobre todos los nuevos proyectos
            que estaremos trayendo.
        </p>
    </div>

    <div class="body">
        <h3><b>PROXIMOS</b></h3>

        <div class="evento">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <br><br>
                    <h4>"Evento de Prueba" Apoyando a los perritos en la casa "ADOPTAME"</h4>
                    <time datetime="">26 de Diciembre 2024</time><br>
                    <a href="#">Conocer más</a>
                </div>
                <div class="imagen-evento col-md-4 col-xs-12">
                    <img width="70%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="evento" loading="lazy">
                </div>
            </div>
        </div>
        <br><br>

        <div class="evento">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <br><br>
                    <h4>"Evento de Prueba" Apoyando a los perritos en la casa "ADOPTAME"</h4>
                    <time datetime="">26 de Diciembre 2024</time><br>
                    <a href="#">Conocer más</a>
                </div>
                <div class="imagen-evento col-md-4 col-xs-12">
                    <img width="70%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="evento" loading="lazy">
                </div>
            </div>
        </div>

        <br><br><br><br><br>
        <h3><b>ANTERIORES</b></h3>
        <div class="evento-antes">
            <div class="row justify-content-evenly">
                <div class="evento col-md-4 col-xs-12">
                    <h4>"Evento de Prueba" Apoyando a los perritos en la casa "ADOPTAME"</h4>
                    <img width="70%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="evento" loading="lazy">
                    <br>
                    <time datetime="">26 de Diciembre 2024</time><br>
                    <a href="#">Conocer más</a>
                </div>
                <div class="evento col-md-4 col-xs-12">
                    <h4>"Evento de Prueba" Apoyando a los perritos en la casa "ADOPTAME"</h4>
                    <img width="70%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="evento" loading="lazy">
                    <br>
                    <time datetime="">26 de Diciembre 2024</time><br>
                    <a href="#">Conocer más</a>
                </div>
                <div class="evento col-md-4 col-xs-12">
                    <h4>"Evento de Prueba" Apoyando a los perritos en la casa "ADOPTAME"</h4>
                    <img width="70%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="evento" loading="lazy">
                    <br>
                    <time datetime="">26 de Diciembre 2024</time><br>
                    <a href="#">Conocer más</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection