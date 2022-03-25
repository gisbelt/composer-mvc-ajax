<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
       <?php $head->Heading(); ?>
    
    </head>
    <body>
        <!-- Menú -->
        <?php require_once "content/component/initComponent.php"; ?>
        <!-- Menú -->

        <!-- Slider  -->
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
                <div class="col-12">
                    
                    <div id="carouselId" class="carousel slide " data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="assets/img/imagen1.jpg" alt="First slide" style="width: 100%; height: 450px;">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="assets/img/imagen2.jpg" alt="Second slide" style="width: 100%; height: 450px;">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="assets/img/imagen3.jpg" alt="Third slide" style="width: 100%; height: 450px;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <br><br>

                </div>
                
            <!-- </div> Row -->
        <!-- </div> Container-->
        <!-- Slider  -->        
        

        <!-- ********************************* -->

        <h1 class="display-4 text-center">Noticias</h1>
        <p class="text-center">Información sobre la plataforma</p>
        <div class="centrado">
            <button class="btn btn-info" id="actualizarNoticias">Actualizar</button>
        </div>  
        
        <!-- ********************************* -->
        
        
        <br>
        <div class="container">
            <div class="row noticias-row">
                <?php foreach ($noticias as $noti) { ?>
                <div class="col-md-4">
                    <table class="table table-borderless table-light table-inverse table-responsive' height='350' ">
                        <tbody class="table-body">
                            <tr class='align-middle'>
                                <td scope="row">
                                    <img class="card-img-top img-fluid" id="img-noticias" src="assets/img/<?php echo $noti->imagen ?>" alt="">
                                </td>
                            </tr>
                            <tr class='align-middle'>
                                <td scope="row">
                                    <h5 class="card-title text-dark text-center m-0">
                                        <?php echo $noti->titulo ?>
                                    </h5>
                                </td>
                            </tr>
                            <tr class='align-middle'>
                                <td scope="row">
                                    <h6 class="card-title text-center">
                                        <?php echo $noti->descripcion ?>                                        
                                    </h6>
                                    <div class='centrado'>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <button type="submit" name="" id="" class="btn btn-info" style="margin-top: 10px;">Ver más</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php } ?>

            </div> <!-- Row -->
        </div> <!-- Container -->
        <br><br>
        
        
        <!-- ********************************* -->
        
        
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap-notify.js"></script>
        <script src="assets/js/local.js"></script>
        <!-- Bootstrap JavaScript Libraries -->

        <script type="text/javascript">
            // Notificaciones 
            function myFunction() {
                $.ajax({
                url: "?url=notificaciones",
                type: "POST",
                processData:false,
                success: function(data){
                    var h4_notificaciones = $('#h4-notificaciones');
                    var notification_latest = $('#notification-latest');
                    $("#notification-count").remove();                  
                    $("#notification-latest").show();
                    $("#notification-latest").html(data);
                    notification_latest.append(h4_notificaciones);
                },
                error: function(){}           
                });
            }
            
        </script>
    </body>

    <footer>
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 bg-info">
            <!-- primary|secondary|success|danger|warning|info|light|dark|link -->
            <!-- Left -->
            <div class="me-5">
                <span class="default">Mantente conectado con nosotros en las redes sociales</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="default me-4">
                <i class="bi bi-facebook-f"></i>
                </a>
                <a href="" class="default me-4">
                <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="default me-4">
                <i class="bi bi-google"></i>
                </a>
                <a href="" class="default me-4">
                <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="default me-4">
                <i class="bi bi-linkedin"></i>
                </a>
            </div>
            <!-- Right -->        
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Uptaeb</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                        Universidad Politécnica Territorial del estado Lara Andrés Eloy Blanco
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Dirección</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p> Av. Los Horcones, Av. La Salle, Barquisimeto 3001, Lara</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Redes Sociales</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p> <a href="#" class="bi bi-twitter" style="text-decoration: none;"> Twitter</a> </p>
                        <p> <a href="#" class="bi bi-instagram" style="text-decoration: none;"> Instagram</a> </p>
                        <p> <a href="#" class="bi bi-facebook" style="text-decoration: none;"> Facebook</a> </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contacto</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                        <p><i class="fas fa-envelope mr-3"></i>educacionmediadaticl@uptaeb.edu.ve</p>
                        <p><i class="fas fa-phone mr-3"></i> +58 444 5555</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-white" href="http://upaebvirtual.edu.ve/web/"> UPTAEB</a>
        </div>
        <!-- Copyright -->

    </footer>


</html>