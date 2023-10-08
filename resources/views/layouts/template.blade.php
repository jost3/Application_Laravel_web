<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>City Tours-Agencia de turismo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
             header{
                height: 60vh;
                background-size: cover; /* Para que la imagen se ajuste al tamaño del elemento */
                background-position: center; /* Puedes ajustar la posición según tus preferencias */
                background-image: url('{{asset('img/principal.jpg')}}');
            }
            .masthead-heading{
                color:white;
                position: absolute;
                top:30%;
            }
            .masthead-subheading{
                color:white;
                position: absolute;
                top:40%;
            }
            .page-section{
                background-color: #2c3e50;

            }
            .page-section-heading{
                color:white;
            }
            .page-section-heading{
                color:white;
            }
            .logo{
                max-width: 100%;
                height: 7vh;
                width: 9%;
                position: absolute; /* Activa la posición absoluta */
                left: 0; /* Alinea el elemento a la izquierda */
                opacity: 0.5;
            }
            .navbar-toggler{
                background-color:#dc3545;
            }

        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">AGENCIA DE TURISMO</a>
                <button class="navbar-toggler text-uppercase font-weight-bold  text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Lugares</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">¿Quienes somos?</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Reservacion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->

                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">City Tours</h1><br><br>
                <!-- Icon Divider-->
                <p class="masthead-subheading font-weight-light mb-0">"Déjate llevar por la magia de los viajes y descubre nuevos horizontes junto a nosotros."</p>
                <!-- Masthead Subheading-->

            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase mb-0">Lugares</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                @yield('content')

                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section  text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">¿Quienes somos?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">somos un equipo apasionado de expertos en turismo que se dedican a brindarte experiencias inolvidables en algunas de las ciudades más fascinantes del mundo. Nos enorgullece ser tu guía confiable para descubrir los secretos mejor guardados, las joyas culturales y los tesoros escondidos de cada destino que visitamos. Nuestro compromiso es ofrecerte viajes llenos de emoción, descubrimiento y conexión con las comunidades locales</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Somos más que una empresa de turismo; somos amantes de las ciudades y estamos aquí para asegurarnos de que tu viaje sea memorable en todos los sentidos. ¡Únete a nosotros en esta emocionante aventura para descubrir el corazón de las ciudades que amamos!"</p></div>
                </div>
                <!-- About Section Button-->

            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase  mb-0">Reservacion</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="{{ route('reservar.store') }}" method="POST">
                            {{ csrf_field() }}
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombres</label>
                                @error('name')
                                <small class="text-danger">
                                    <strong>Campo obligatorio:</strong>
                                </small>
                                @enderror
                                <div class="invalid-feedback" data-sb-feedback="name:required">Campo obligatorio</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                @error('email')
                                <small class="text-danger">
                                    <strong>Campo obligatorio:</strong>
                                </small>
                                @enderror
                                <div class="invalid-feedback" data-sb-feedback="email:required">Campo obligatorio.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">No es valido este email.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Numero de telfono</label>
                                @error('phone')
                                <small class="text-danger">
                                    <strong>Campo obligatorio:</strong>
                                </small>
                                @enderror
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Campo obligatorio</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."  data-sb-validations="required"></input>
                                <label for="message">Lugar</label>
                                @error('message')
                                <small class="text-danger">
                                    <strong>Campo obligatorio:</strong>
                                </small>
                                @enderror
                                <div class="invalid-feedback" data-sb-feedback="message:required">Campo obligatorio.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">RESRVACION COMPLETADA</div>
                                   
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Reservar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Hubicacion</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/?locale=es_LA"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/?lang=es"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/?original_referer=https%3A%2F%2Fpe.linkedin.com%2F"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://dribbble.com/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Información para tu viaje:</h4>
                        <p class="lead mb-0">
                        Clima y Pronóstico del Tiempo
                            <a href="https://www.gob.pe/senamhi">Visitar</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Derechos reservados City Tours 2023</small></div>
        </div>
        <!-- Portfolio Modals-->


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Espera a que el documento esté completamente cargado

        var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
        var confirmSubmitButton = document.getElementById('confirmSubmitButton');
        var contactForm = document.getElementById('contactForm');

        // Captura el evento de clic en el botón "Enviar" de la ventana modal
        confirmSubmitButton.addEventListener('click', function() {
            // Envía el formulario
            contactForm.submit();
        });

        // Captura el evento de envío del formulario
        contactForm.addEventListener('submit', function(event) {
            // Muestra la ventana modal de Bootstrap
            confirmationModal.show();

            // Previene el envío automático del formulario
            event.preventDefault();
        });
    });
</script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de enviar tu reservación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary"id="confirmSubmitButton" >Enviar</button>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
