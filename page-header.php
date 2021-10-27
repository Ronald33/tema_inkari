<div class="page-header">
    <div class="page-header-bg h-100" style="background-image: url(<?=get_template_directory_uri();?>/images/page-header-bg.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                    <h2 class="h1 text-white"><?=get_the_title();?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header-bc w-100">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active"><?=get_the_title();?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>