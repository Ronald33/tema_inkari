<?php
get_header();
get_template_part('page-header');
?>

<div class="container my-5 py-5 z-depth-1 page-section">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left white-text">

        <style>
        .map-container {
            height: 200px;
            position: relative;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        </style>

        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d568.7679019544395!2d-71.49339700982007!3d-16.46545221109989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9143b4bc4d492c0d%3A0x72b75c34855452fe!2sObservatorio%20de%20la%20NASA%2C%20Characato%2004012!5e0!3m2!1ses!2spe!4v1635182758160!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--Google Maps-->

        <!--Grid row-->
        <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

            <h3 class="font-weight-bold">Contactenos</h3>

            <p class="">
                El equipo Inkari ofrece una guía a aquellos investigadores interesados en hacer uso del Cluster, para este fin, puede contactar directamente con nosotros.
            </p>

            <p><span class="font-weight-bold mr-2">Email:</span><a href="">inkari.unsa@gmail.com</a></p>
            <p><span class="font-weight-bold mr-2">Phone:</span><a href="">+51 957 296 226</a></p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

            <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-md-6">

                <!-- Material outline input -->
                <div class="md-form md-outline mb-0">
                <input type="text" id="form-first-name" class="form-control">
                <label for="form-first-name">Nombre(s)</label>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">

                <!-- Material outline input -->
                <div class="md-form md-outline mb-0">
                <input type="text" id="form-last-name" class="form-control">
                <label for="form-last-name">Apellidos</label>
                </div>

            </div>
            <!--Grid column-->

            </div>
            <!--Grid row-->

            <!-- Material outline input -->
            <div class="md-form md-outline mt-3">
            <input type="email" id="form-email" class="form-control">
            <label for="form-email">E-mail</label>
            </div>

            <!-- Material outline input -->
            <div class="md-form md-outline">
            <input type="text" id="form-subject" class="form-control">
            <label for="form-subject">Asunto</label>
            </div>

            <!--Material textarea-->
            <div class="md-form md-outline mb-3">
            <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
            <label for="form-message">Mensaje</label>
            </div>

            <button type="submit" disabled class="btn btn-info btn-sm ml-0">Enviar<i class="far fa-paper-plane ml-2"></i></button>

        </div>
        <!--Grid column-->

        </div>
        <!--Grid row-->


    </section>
    <!--Section: Content-->


</div>



<?php
get_footer();
?>