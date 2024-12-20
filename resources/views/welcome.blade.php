@extends('layouts.app')
@section('content')
<div class="welcome">

    <div class="row head">
        <div class="col-md-2 col-xs-12">
            <br><br>
            <img class="" src="{!! asset('imagenes/logo.png') !!}" alt="Logotipo Fundacion" loading="lazy">
        </div>
        <div class="col-md-8 col-xs-12">
            <h2>NUESTRA MISIÓN</h2>
            <h2>¡Alcanzando Sueños Juntos!</h2>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div class="row misionvision ">
            <div class="col-md-6 col-xs-12">
                <h3>MISIÓN</h3>
                <hr>
                <p>Promover la integración de grupos vulnerables, a través de programas socio culturales, educativos y de salud, en alianza con diversas organizaciones de la sociedad civil, para mejorar la calidad de vida.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3>VISIÓN</h3>
                <hr>
                <p>Ser un modelo de organización preparada, para
                proponer programas innovadores, con igualdad
                de oportunidades para las personas con
                discapacidad y grupos vulnerables, sin importar
                su condición social, política o religiosa.</p>
            </div>
        </div>
    </div>
    
    <div class="valores">
        <h3><svg xmlns="http://www.w3.org/2000/svg" height="40" width="121.5" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>Nosotros</h3>
        <hr>
        <div class="row">
            <div class="col-md-1 col-xs-1">
            </div>
            <div class="col-md-5 col-xs-12">
            <br><br>
                <h6>
                    Fundada en 2024 por el empresario <b> Espinosa Espinosa</b> cantante oficial de 
                    <b>Dragon Ball</b> y Ceo de la empresa de hits imobiliarios con mayor crecimiento 
                    <b>REAL CAPITAL</b>. <br>
                    Esta enfocada en apoyar las causas sociales de mayor impacto en nuestro pais,
                    beneficiando a mujeres, niños, emprendedores, perritos y mucho mas... <br>
                    Nuestros valores y dedicacion se ven reflejados en todo lo que hacemos, y juntos
                    llegaremos a donde mas se necesita
                </h6>
            </div>
            <div class="col-md-5 col-xs-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img width="90%" class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="Carousel Fundacion" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img width="90%" class="" src="{!! asset('imagenes/collage2.jpg') !!}" alt="Carousel Fundacion" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img width="90%" class="" src="{!! asset('imagenes/collage3.jpg') !!}" alt="Carousel Fundacion" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="valores">
        <h3><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M116.7 33.8c4.5-6.1 11.7-9.8 19.3-9.8l240 0c7.6 0 14.8 3.6 19.3 9.8l112 152c6.8 9.2 6.1 21.9-1.5 30.4l-232 256c-4.5 5-11 7.9-17.8 7.9s-13.2-2.9-17.8-7.9l-232-256c-7.7-8.5-8.3-21.2-1.5-30.4l112-152zm38.5 39.8c-3.3 2.5-4.2 7-2.1 10.5l57.4 95.6L63.3 192c-4.1 .3-7.3 3.8-7.3 8s3.2 7.6 7.3 8l192 16c.4 0 .9 0 1.3 0l192-16c4.1-.3 7.3-3.8 7.3-8s-3.2-7.6-7.3-8L301.5 179.8l57.4-95.6c2.1-3.5 1.2-8.1-2.1-10.5s-7.9-2-10.7 1L256 172.2 165.9 74.6c-2.8-3-7.4-3.4-10.7-1z"/></svg>Valores</h3>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <h4>  
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="112.5" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M160 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l50.7 0L9.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L256 109.3l0 50.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128c0-17.7-14.3-32-32-32L160 0zM576 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM448 208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM400 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm128 0a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM272 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM144 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM576 336a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-48-80a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                    <br>
                    Prosperidad
                    </h4>
                <p>Trabajamos para
                    mejorar las condiciones de vida y
                    crear oportunidades sostenibles
                    para el bienestar de todos.
                </p>
            </div>
            <div class="col-md-3 col-xs-6">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="112.5" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M320 0a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm44.7 164.3L375.8 253c1.6 13.2-7.7 25.1-20.8 26.8s-25.1-7.7-26.8-20.8l-4.4-35-7.6 0-4.4 35c-1.6 13.2-13.6 22.5-26.8 20.8s-22.5-13.6-20.8-26.8l11.1-88.8L255.5 181c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l27.9-23.6C271.3 104.8 295.3 96 320 96s48.7 8.8 67.6 24.7l27.9 23.6c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.4-33.8 2.8l-19.8-16.7zM40 64c22.1 0 40 17.9 40 40l0 40 0 80 0 40.2c0 17 6.7 33.3 18.7 45.3l51.1 51.1c8.3 8.3 21.3 9.6 31 3.1c12.9-8.6 14.7-26.9 3.7-37.8l-15.2-15.2-32-32c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l32 32 15.2 15.2c0 0 0 0 0 0l25.3 25.3c21 21 32.8 49.5 32.8 79.2l0 78.9c0 26.5-21.5 48-48 48l-66.7 0c-17 0-33.3-6.7-45.3-18.7L28.1 393.4C10.1 375.4 0 351 0 325.5L0 224l0-64 0-56C0 81.9 17.9 64 40 64zm560 0c22.1 0 40 17.9 40 40l0 56 0 64 0 101.5c0 25.5-10.1 49.9-28.1 67.9L512 493.3c-12 12-28.3 18.7-45.3 18.7L400 512c-26.5 0-48-21.5-48-48l0-78.9c0-29.7 11.8-58.2 32.8-79.2l25.3-25.3c0 0 0 0 0 0l15.2-15.2 32-32c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-32 32-15.2 15.2c-11 11-9.2 29.2 3.7 37.8c9.7 6.5 22.7 5.2 31-3.1l51.1-51.1c12-12 18.7-28.3 18.7-45.3l0-40.2 0-80 0-40c0-22.1 17.9-40 40-40z"/></svg>
                    <br>
                    Empoderamiento
                </h4>
                <p>
                    Inspiramos a las
                    personas a desarrollar su potencial,
                    brindándoles herramientas
                </p>
            </div>
            <div class="col-md-3 col-xs-6">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="112.5" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M208 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM123.7 200.5c1-.4 1.9-.8 2.9-1.2l-16.9 63.5c-5.6 21.1-.1 43.6 14.7 59.7l70.7 77.1 22 88.1c4.3 17.1 21.7 27.6 38.8 23.3s27.6-21.7 23.3-38.8l-23-92.1c-1.9-7.8-5.8-14.9-11.2-20.8l-49.5-54 19.3-65.5 9.6 23c4.4 10.6 12.5 19.3 22.8 24.5l26.7 13.3c15.8 7.9 35 1.5 42.9-14.3s1.5-35-14.3-42.9L281 232.7l-15.3-36.8C248.5 154.8 208.3 128 163.7 128c-22.8 0-45.3 4.8-66.1 14l-8 3.5c-32.9 14.6-58.1 42.4-69.4 76.5l-2.6 7.8c-5.6 16.8 3.5 34.9 20.2 40.5s34.9-3.5 40.5-20.2l2.6-7.8c5.7-17.1 18.3-30.9 34.7-38.2l8-3.5zm-30 135.1L68.7 398 9.4 457.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L116.3 441c4.6-4.6 8.2-10.1 10.6-16.1l14.5-36.2-40.7-44.4c-2.5-2.7-4.8-5.6-7-8.6zM550.6 153.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L530.7 224 384 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l146.7 0-25.4 25.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l80-80c12.5-12.5 12.5-32.8 0-45.3l-80-80z"/></svg>
                    <br>
                    Liderazgo
                </h4>
                <p>
                    Promovemos la toma de
                    decisiones conscientes y
                    responsables para impactar
                    positivamente en la sociedad.
                </p>
            </div>
            <div class="col-md-3 col-xs-6">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="111.25" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#74C0FC" d="M7.8 207.7c-13.1-17.8-9.3-42.8 8.5-55.9L142.9 58.5C166.2 41.3 194.5 32 223.5 32L384 32l160 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-36.8 0-44.9 36c-22.7 18.2-50.9 28-80 28L304 224l-16 0-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0 16 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-120.6 0L63.7 216.2c-17.8 13.1-42.8 9.3-55.9-8.5zM382.4 160c0 0 0 0 0 0l.9 0c-.3 0-.6 0-.9 0zM568.2 304.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 453.5c-23.4 17.2-51.6 26.5-80.7 26.5L192 480 32 480c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l36.8 0 44.9-36c22.7-18.2 50.9-28 80-28l78.3 0 16 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0-16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l120.6 0 119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 352c0 0 0 0 0 0l-.9 0c.3 0 .6 0 .9 0z"/></svg>
                    <br>
                    Compartir
                </h4>
                <p>
                    Creemos en la
                    solidaridad y en la importancia de
                    dar para construir comunidades
                    más unidas y fuertes.
                </p>
            </div>
        </div>
    </div>


    <div class="beneficiados">
        <h3>Beneficiados</h3>
        <div class="row">
            <div class="col-md-1 col-xs-6">
            </div>
            <div class="col-md-3 col-xs-6">
                <p><span>+500</span><br> eventos realizados</p>
            </div>
            <div class="col-md-4 col-xs-6">
                <p><span>+100</span><br> niños apadrinados</p>
            </div>
            <div class="col-md-3 col-xs-6">
                <p><span>+10,000</span><br> mujeres capacitadas</p>
            </div>
            <div class="col-md-1 col-xs-6">
            </div>
            <div class="col-md-1 col-xs-6">
            </div>
            <div class="col-md-3 col-xs-6">
                <p><span>+200</span><br> hectáreas de tierra agrícola</p>
            </div>
            <div class="col-md-4 col-xs-6">
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" height="40" width="111.25" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224 24l0 56-56 0c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l56 0 0 56c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-56 56 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-56 0 0-56c0-13.3-10.7-24-24-24L248 0c-13.3 0-24 10.7-24 24zM559.7 392.2c17.8-13.1 21.6-38.1 8.5-55.9s-38.1-21.6-55.9-8.5L392.6 416 272 416c-8.8 0-16-7.2-16-16s7.2-16 16-16l16 0 64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0-16 0-78.3 0c-29.1 0-57.3 9.9-80 28L68.8 384 32 384c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l160 0 160.5 0c29 0 57.3-9.3 80.7-26.5l126.6-93.3zm-367-8.2l.9 0c0 0 0 0 0 0c-.3 0-.6 0-.9 0z"/></svg>
                <p>Apoyo a niños quemados .</p>
            </div>
            <div class="col-md-3 col-xs-6">
                <p><span>+10,000</span><br> emprendedores capacitados</p>
            </div>
            <div class="col-md-1 col-xs-6">
            </div>
        </div>
    </div>

    <br><br>
    <div class="valores">
        <h3><svg xmlns="http://www.w3.org/2000/svg" height="40" width="18.75" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM96 136c0-13.3 10.7-24 24-24c137 0 248 111 248 248c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-110.5-89.5-200-200-200c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24c83.9 0 152 68.1 152 152c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-57.4-46.6-104-104-104c-13.3 0-24-10.7-24-24zm0 120a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>Eventos</h3>
        <hr>   
    </div>
    <div class="row eventos">
            <div class="col-md-3 col-xs-6">
                <img class="" src="{!! asset('imagenes/collage1.jpg') !!}" alt="Logotipo Fundacion" loading="lazy">
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="" src="{!! asset('imagenes/collage2.jpg') !!}" alt="Logotipo Fundacion" loading="lazy">
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="" src="{!! asset('imagenes/collage3.jpg') !!}" alt="Logotipo Fundacion" loading="lazy">
            </div>
            <div class="col-md-3 col-xs-6">
                <img class="" src="{!! asset('imagenes/collage4.jpg') !!}" alt="Logotipo Fundacion" loading="lazy">
            </div>
        </div> 
</div>
@endsection