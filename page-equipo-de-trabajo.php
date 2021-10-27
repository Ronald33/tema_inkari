<?php
get_header();
get_template_part('page-header');
?>

<div class="container my-5 page-section py-5">

    <!--Section: Content-->
    <section class="team-section text-center">

        <!-- Section description -->
        <p class="text-muted w-responsive mx-auto white-text mb-5">
            El Equipo de trabajo de Inkari, esta a cargo de supervisar el buen funcionamiento del Cluster, así como también motivar a los investigadores a hacer uso de este.
        </p>

        <!-- Grid row -->
        <div class="row text-center">

            <!-- Grid column -->
            <div class="col-md-6">
                <div class="avatar mx-auto">
                    <img src="<?=get_template_directory_uri()?>/images/anonymous.png" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold white-text my-4">Ronald Darwin Apaza Veliz</h4>
                <h6 class="white-text mb-3"><strong>Administrador</strong></h6>
                <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email waves-effect waves-light">
                    <i class="fas fa-envelope"></i>
                </a>
                <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-whatsapp waves-effect waves-light">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git waves-effect waves-light">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
                <div class="avatar mx-auto">
                    <img src="<?=get_template_directory_uri()?>/images/anonymous.png" class="rounded z-depth-1-half" alt="Sample avatar">
                </div>
                <h4 class="font-weight-bold white-text my-4">Dr. Pablo Raul Yanyachi</h4>
                <h6 class="white-text mb-3"><strong>Encargado  del Software y Hardware</strong></h6>
                <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email waves-effect waves-light">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->

</div>

<?php
get_footer();
?>