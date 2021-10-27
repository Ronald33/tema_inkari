<?php
get_header();
get_template_part('carousel');
?>

<!-- Nuestros servicios -->

<div class="container mt-5">


    <!-- Section: Block Content -->
    <section class="dark-grey-text text-center">

        <h3 class="text-center font-weight-bold mb-4 pb-2 text-white">Nuestros servicios</h3>
        <!-- <p class="text-center text-muted w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p> -->

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mb-4 wow animated rotateIn">

                <!-- Card -->
                <div class="card card-image bg-centered" style="background-image: url(<?=get_template_directory_uri();?>/images/cursos.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded">
                        <div>
                            <!-- <h6 class="pink-text">
                                <i class="fas fa-chart-pie"></i>
                                <strong> Marketing</strong>
                            </h6> -->
                            <h3 class="py-3 font-weight-bold">
                                <strong>Cursos</strong>
                            </h3>
                            <hr class="bg-white" />
                            <p class="pb-3">
                                Dirigidos a todos los interesados en hacer uso del supercomputador, se ofrece una introduccion y una guia basica para accesar a Inkari.
                            </p>
                            <!-- <a class="btn btn-pink btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a> -->
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 mb-4 wow animated rotateIn">

                <!-- Card -->
                <div class="card card-image bg-centered" style="background-image: url(<?=get_template_directory_uri();?>/images/cuentas.png);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded">
                        <div>
                            <!-- <h6 class="pink-text">
                                <i class="fas fa-chart-pie"></i>
                                <strong> Marketing</strong>
                            </h6> -->
                            <h3 class="py-3 font-weight-bold">
                                <strong>Cuentas</strong>
                            </h3>
                            <hr class="bg-white" />
                            <p class="pb-3">
                                Es necesario que el futuro usuario de Inkari tenga una cuenta de aceso. Con tal fin primero debera llenar un formulario de Registro.
                            </p>
                            <!-- <a class="btn btn-pink btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a> -->
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 mb-4 wow animated rotateIn">

                <!-- Card -->
                <div class="card card-image bg-centered" style="background-image: url(<?=get_template_directory_uri();?>/images/orientacion.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded">
                        <div>
                            <!-- <h6 class="pink-text">
                                <i class="fas fa-chart-pie"></i>
                                <strong> Marketing</strong>
                            </h6> -->
                            <h3 class="py-3 font-weight-bold">
                                <strong>Orientación</strong>
                            </h3>
                            <hr class="bg-white" />
                            <p class="pb-3">
                                Es necesario que el proyecto cumpla algunos requisitos para el uso adecuado del cluster, para obtener una guia contactenos.
                            </p>
                            <!-- <a class="btn btn-pink btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a> -->
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Block Content -->


</div>

<!-- Nuestros servicios -->

<!-- Paginas asociadas -->

<div class="container my-5">
    <section class="text-center">
        <h3 class="text-center font-weight-bold mb-4 pb-2 text-white">Páginas asociadas</h3>

        <div class="row">

            <div class="col-md-3 wow animated rubberBand">
                <div class="view overlay">
                    <img src="<?=get_template_directory_uri();?>/images/logo_iaapp.png" class="img-fluid w-100 " alt="smaple image" />
                    <div class="mask flex-center rgba-green-strong">
                        <p class="white-text">Instituto Astronómico Aeroespacial Pedro Paulet</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 wow animated tada">
                <div class="view overlay">
                    <img src="<?=get_template_directory_uri();?>/images/logo_unsa.jpg" class="img-fluid w-100 " alt="smaple image" />
                    <div class="mask flex-center rgba-green-strong">
                        <p class="white-text">Universidad Nacional de San Agustín</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 wow animated tada">
                <div class="view overlay">
                    <img src="<?=get_template_directory_uri();?>/images/logo_citesoft.png" class="img-fluid w-100 " alt="smaple image" />
                    <div class="mask flex-center rgba-green-strong">
                        <p class="white-text">CiTeSoft</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 wow animated tada">
                <div class="view overlay">
                    <img src="<?=get_template_directory_uri();?>/images/logo_capds.png" class="img-fluid w-100 " alt="smaple image" />
                    <div class="mask flex-center rgba-green-strong">
                        <p class="white-text">Centro de Adquisición y <br/>Procesamiento de Datos <br/>Satelitales</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>

<!-- End Paginas asociadas -->

<?php
get_footer();
?>