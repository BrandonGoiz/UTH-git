<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title;; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo $page_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <br><br><br><br>
                        <h2 class="header-title mb-3" style="text-align:center;"><?php echo get_phrase('Contáctanos'); ?></h2>
        
                        <form class="required-form" action="<?php echo site_url('home/enviar_contacto'); ?>" enctype="multipart/form-data" method="post">
                            
                                    <div class="tab-pane" id="basic_info">
                                        <div class="row">
                                            <div class="col-12">
                                                <div style="text-align:right;" class="form-group row mb-2">
                                                    <label class="col-md-2 col-form-label" for="nombre"><?php echo get_phrase('Nombre:'); ?><span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                    </div>
                                                </div>
                                                <div style="text-align:right;" class="form-group row mb-2">
                                                    <label class="col-md-2 col-form-label" for="email"><?php echo get_phrase('Email:'); ?><span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="email" name="email" required>
                                                    </div>
                                                </div>
                                                <div style="text-align:right;" class="form-group row mb-2">
                                                    <label class="col-md-2 col-form-label" for="motivo"><?php echo get_phrase('Motivo:'); ?><span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="motivo" name="motivo" required>
                                                    </div>
                                                </div>
                                                <div style="text-align:right;" class="form-group row mb-2">
                                                    <label class="col-md-2 col-form-label" for="mensaje"><?php echo get_phrase('Mensaje:'); ?><span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                        <textarea name="mensaje" id = "mensaje" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                        </form>
                        
                        <center><b style="color:red;">En caso de quererte comunicar  puedes enviar un email a: abrahamtrinidad015@gmail.com </b></center>
        
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>
        </div>
    </div>
</section>
