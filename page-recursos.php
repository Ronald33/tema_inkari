<?php
get_header();
get_template_part('page-header');
?>

<div class="container my-5 p-5 z-depth-1 page-section">


<!--Section: Content-->
<section class="white-text">

    <!-- Section heading -->
    <!-- <h2 class="text-center font-weight-bold mb-4 pb-2">Why is it so great?</h2> -->
    <!-- Section description -->
    <p class="text-center lead grey-text mx-auto mb-5">
        Desde el lanzamiento de Inkari, diversos recursos han surgido, varios de ellos producto de las charlas o cursos realizados, a continuación se lista algunos de los recursos mencionados.
    </p>

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 text-center">
        <img class="img-fluid" src="<?=get_template_directory_uri();?>/images/rack.png" alt="Sample image" />
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Características de software y Hardware</h5>
            <p class="grey-text">
                <a href="https://drive.google.com/file/d/1yRzXWIJd4IEwXms42aML7FSTv6sevvKb/view?usp=sharing" target="_blank">Click para acceder</a>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->


        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Comandos básicos de Linux</h5>
            <p class="grey-text">
                <a href="https://drive.google.com/file/d/1GNoLqch8b9hVeWc5ujzDejW8h4uZx0-k/view?usp=sharing" target="_blank">Click para acceder</a>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Uso básico de Inkari</h5>
            <p class="grey-text">
                <a href="https://drive.google.com/file/d/1SvTR5xqY2uGLoZ1kfJyLjvnTxJ28N8Z6/view?usp=sharing" target="_blank">Click para acceder</a>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Charla Julio 2021</h5>
            <p class="grey-text">
                <a href="<?=get_page_link(24);?>" target="_blank">Click para acceder</a>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Migración de PBS a SLURM</h5>
            <p class="grey-text">
                <a href="<?=get_page_link(32);?>" target="_blank">Click para acceder</a>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
            <i class="fas fa-star-of-life mt-1"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
            <h5 class="font-weight-bold mb-3">Archivo</h5>
            <p class="grey-text">
                <ul>
                    <li>
                        <a href="<?=get_page_link(39);?>" target="_blank">Proyectos</a>
                    </li>
                    <li>
                        <a href="<?=get_page_link(44);?>" target="_blank">Informes</a>
                    </li>
                </ul>
            </p>
        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!--Grid column-->

    </div>
    <!-- Grid row -->

</section>
<!--Section: Content-->


</div>

<?php
get_footer();
?>