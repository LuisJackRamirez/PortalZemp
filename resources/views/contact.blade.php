@extends('layout_comude')

@section('title', 'Contacto')

@section('content')
    <!-- Contacto -->
    <div class="container fs-4">
        <div class="row">
            <div class="container card align-items-center my-3">
                <img src="{{ asset('images/comude.png') }}" height="115" width="115" alt="comude" >
                <h1 class="card-title text-center">Contáctanos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="container card">
                    <form>
                        <div class="row my-3">
                            <!--      Sección de formulario      -->
                            <div class="col-5">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="InputName" class="form-label">Nombre Completo:</label>
                                        <input type="text" class="form-control" id="InputName" aria-describedby="NombreCompleto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="InputEmail" class="form-label">Correo Electrónico:</label>
                                        <input type="email" class="form-control" id="InputEmail" aria-describedby="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="InputPhone" class="form-label">Número Telefónico:</label>
                                        <input type="text" class="form-control" id="InputPhone" aria-describedby="NumeroTelefonico">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="InputInfo" class="form-label">Información adicional:</label>
                                        <textarea class="form-control" id="InputInfo" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class='container text-center'>
                                    <button type="submit" class="btn text-center btn-primary mb-4 fs-4">Enviar</button>
                                </div>
                            </div>
                            <div class="col-5 mx-3">
                                <div class="row"><span><i class="bi bi-house icon"></i>Centro Zempoala, Hgo. C.P. 43838 &copy; 2021</span></div>
                                <div class="row"><span><i class="bi bi-phone icon"></i>12 34 56 78 90 Lunes a Viernes de 10:00 A.M. a 18:00 P.M.</span></div>
                                <div class="row"><span><i class="bi bi-envelope icon"></i>mail@mail.com</span></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <p class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.211912835018!2d-98.67039144841243!3d19.91547288654622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1baaff34c5089%3A0xe2604d70f850e68a!2sPresidencia%20Municipal%20de%20Zempoala!5e0!3m2!1ses-419!2smx!4v1651424880848!5m2!1ses-419!2smx" style="border:0; width: 100%; height: 600px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>

    </div>


@endsection
