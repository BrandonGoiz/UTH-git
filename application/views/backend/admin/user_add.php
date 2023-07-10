<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo $page_title; ?> </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-3"><?php echo get_phrase('Formulario para agregar alumno o coach'); ?></h4>

                <form class="required-form" action="<?php echo site_url('admin/users/add'); ?>" enctype="multipart/form-data" method="post">
                    <div id="progressbarwizard">
                        <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                            <li class="nav-item">
                                <a href="#basic_info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-face-profile mr-1"></i>
                                    <span class="d-none d-sm-inline"><?php echo get_phrase('Información general'); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#login_credentials" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-lock mr-1"></i>
                                    <span class="d-none d-sm-inline"><?php echo get_phrase('login_credentials'); ?></span>
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a href="#social_information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-wifi mr-1"></i>
                                    <span class="d-none d-sm-inline"><?php echo get_phrase('social_information'); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#payment_info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-currency-usd mr-1"></i>
                                    <span class="d-none d-sm-inline"><?php echo get_phrase('payment_info'); ?></span>
                                </a>
                            </li>-->
                            <li class="nav-item">
                                <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                    <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                    <span class="d-none d-sm-inline"><?php echo get_phrase('finish'); ?></span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content b-0 mb-0">

                            <div id="bar" class="progress mb-3" style="height: 7px;">
                                <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
                            </div>

                            <div class="tab-pane" id="basic_info">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="first_name"><?php echo get_phrase('first_name'); ?><span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="last_name"><?php echo get_phrase('last_name'); ?><span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="tipo_usuario"><?php echo get_phrase('Tipo de usuario:'); ?></label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                                    <option value="alumno">Alumno</option>
                                                    <option value="coach">Coach</option>
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="edad"><?php echo get_phrase('Edad:'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="edad" name="edad"  onkeyup="frecuenciaCardiacaMaxima()">
                                            </div>
                                        </div>
                                        
                                        
                                       
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="ciudad_nacimiento"><?php echo get_phrase('Ciudad de nacimiento:'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ciudad_nacimiento" name="ciudad_nacimiento">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="ciudad_residencia"><?php echo get_phrase('Ciudad de residencia:'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ciudad_residencia" name="ciudad_residencia">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="nivel_educativo"><?php echo get_phrase('Nivel educativo:'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nivel_educativo" name="nivel_educativo">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="sexo"><?php echo get_phrase('Sexo:'); ?></label>
                                            <div class="col-md-9">
                                                <select id="sexo" name ="sexo" class="form-control">
                                                    <option value="Masculino"> Masculino</option>
                                                    <option "Femenino"> Femenino</option>
                                                </select>
                                            </div>
                                        </div>  
                                        
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="linkedin_link"><?php echo get_phrase('Comentarios'); ?></label>
                                            <div class="col-md-9">
                                                <textarea name="biography" id = "summernote-basic" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="user_image"><?php echo get_phrase('user_image'); ?></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="user_image" name="user_image" accept="image/*" onchange="changeTitleOfImageUploader(this)">
                                                        <label class="custom-file-label" for="user_image"><?php echo get_phrase('choose_user_image'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <div class="tab-pane" id="login_credentials">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="email"><?php echo get_phrase('email'); ?><span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="password"><?php echo get_phrase('password'); ?><span class="required">*</span></label>
                                            <div class="col-md-9">
                                                <input type="password" id="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <div class="tab-pane" id="social_information">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="facebook_link"> <?php echo get_phrase('facebook'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="facebook_link" name="facebook_link" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="twitter_link"><?php echo get_phrase('twitter'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="twitter_link" name="twitter_link" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="linkedin_link"><?php echo get_phrase('linkedin'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="linkedin_link" name="linkedin_link" class="form-control">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane" id="payment_info">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="facebook_link"> <?php echo get_phrase('paypal_client_id'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="paypal_client_id" name="paypal_client_id" class="form-control">
                                                <small><?php echo get_phrase("required_for_instructor"); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="paypal_secret_key"> <?php echo get_phrase('paypal_secret_key'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="paypal_secret_key" name="paypal_secret_key" class="form-control">
                                                <small><?php echo get_phrase("required_for_instructor"); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="stripe_public_key"><?php echo get_phrase('stripe_public_key'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="stripe_public_key" name="stripe_public_key" class="form-control">
                                                <small><?php echo get_phrase("required_for_instructor"); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label class="col-md-3 col-form-label" for="stripe_secret_key"><?php echo get_phrase('stripe_secret_key'); ?></label>
                                            <div class="col-md-9">
                                                <input type="text" id="stripe_secret_key" name="stripe_secret_key" class="form-control">
                                                <small><?php echo get_phrase("required_for_instructor"); ?></small>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                            <div class="tab-pane" id="finish">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                            <h3 class="mt-0"><?php echo get_phrase('thank_you'); ?> !</h3>

                                            <p class="w-75 mb-2 mx-auto"><?php echo get_phrase('you_are_just_one_click_away'); ?></p>

                                            <div class="mb-3">
                                                <button type="button" class="btn btn-primary" onclick="checkRequiredFields()" name="button"><?php echo get_phrase('submit'); ?></button>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <ul class="list-inline mb-0 wizard text-center">
                                <li class="previous list-inline-item">
                                    <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-left-bold"></i> </a>
                                </li>
                                <li class="next list-inline-item">
                                    <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-right-bold"></i> </a>
                                </li>
                            </ul>

                        </div> <!-- tab-content -->
                    </div> <!-- end #progressbarwizard-->
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div>
</div>
<script>
    function fScore_V02max()
    {
        //SCORE 10 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 41)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 40)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 36.9)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 35.7)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 31.4)
        {
            $('#score_v02max').val(10)
        }
        
        //SCORE 9 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 37 && $('#lectura_v02max').val() <= 41)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 35.7 && $('#lectura_v02max').val() <= 39.9)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 32.9 && $('#lectura_v02max').val() <= 36.9)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 31.5 && $('#lectura_v02max').val() <= 35.6)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 30.2 && $('#lectura_v02max').val() <= 31.4)
        {
            $('#score_v02max').val(9)
        }
        
        //SCORE 8 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 33 && $('#lectura_v02max').val() <= 37)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 31.5 && $('#lectura_v02max').val() <= 35.6)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 29 && $('#lectura_v02max').val() <= 32.9)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 27 && $('#lectura_v02max').val() <= 31.4)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 24.5 && $('#lectura_v02max').val() <= 30.2)
        {
            $('#score_v02max').val(8)
        }
        
        //SCORE 7 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 29 && $('#lectura_v02max').val() <= 32.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 27 && $('#lectura_v02max').val() <= 31.4)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 24.5 && $('#lectura_v02max').val() <= 28.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 22.8 && $('#lectura_v02max').val() <= 26.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 20.2 && $('#lectura_v02max').val() <= 24.4)
        {
            $('#score_v02max').val(7)
        }
        
        //SCORE 6 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 24 && $('#lectura_v02max').val() <= 28.9)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 22.8 && $('#lectura_v02max').val() <= 26.9)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 21 && $('#lectura_v02max').val() <= 24.4)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 20.2 && $('#lectura_v02max').val() <= 22.7)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 15.7 && $('#lectura_v02max').val() <= 20.1)
        {
            $('#score_v02max').val(6)
        }
        
        
        
        //SCORE < 6 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() <= 23)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() <= 22.8)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() <= 21)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() <= 20.2)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() <= 17.5)
        {
            $('#score_v02max').val(5)
        }
        
        //-------------------------------------------
        //SCORE 10 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 52.4)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 49.4)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 48)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 45.3)
        {
            $('#score_v02max').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 44.2)
        {
            $('#score_v02max').val(10)
        }
        
        //SCORE 9 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 46.5 && $('#lectura_v02max').val() <= 52.4)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 45 && $('#lectura_v02max').val() <= 49.4)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 43.8 && $('#lectura_v02max').val() <= 44)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 41 && $('#lectura_v02max').val() <= 45.3)
        {
            $('#score_v02max').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 36.5 && $('#lectura_v02max').val() <= 44.1)
        {
            $('#score_v02max').val(9)
        }
        
        //SCORE 8 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 42.5 && $('#lectura_v02max').val() <= 46.4)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 41 && $('#lectura_v02max').val() <= 44.9)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 39 && $('#lectura_v02max').val() <= 43.7)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 35.8 && $('#lectura_v02max').val() <= 40.9)
        {
            $('#score_v02max').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 32.3 && $('#lectura_v02max').val() <= 36.4)
        {
            $('#score_v02max').val(8)
        }
        
        //SCORE 7 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 29 && $('#lectura_v02max').val() <= 32.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 27 && $('#lectura_v02max').val() <= 31.4)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 24.5 && $('#lectura_v02max').val() <= 28.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 22.8 && $('#lectura_v02max').val() <= 26.9)
        {
            $('#score_v02max').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 20.2 && $('#lectura_v02max').val() <= 24.4)
        {
            $('#score_v02max').val(7)
        }
        
        //SCORE 6 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() >= 36.4 && $('#lectura_v02max').val() <= 42.4)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() >= 35.5 && $('#lectura_v02max').val() <= 40.9)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() >= 33.6 && $('#lectura_v02max').val() <= 38.9)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() >= 31 && $('#lectura_v02max').val() <= 35.7)
        {
            $('#score_v02max').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() >= 26.1 && $('#lectura_v02max').val() <= 32.2)
        {
            $('#score_v02max').val(6)
        }
        
        
        
        //SCORE < 6 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 20 && $('#edad').val() <= 29 && $('#lectura_v02max').val() <= 33)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 30 && $('#edad').val() <= 39 && $('#lectura_v02max').val() <= 31.5)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 49 && $('#lectura_v02max').val() <= 30.2)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 50 && $('#edad').val() <= 59 && $('#lectura_v02max').val() <= 26)
        {
            $('#score_v02max').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#lectura_v02max').val() <= 20.5)
        {
            $('#score_v02max').val(5)
        }
    }
    
    function fScore_p_reposo()
    {
        //SCORE 10 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 59)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 59)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        
        //SCORE 9 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 61 && $('#lectura_p_reposo').val() <= 65)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 61 && $('#lectura_p_reposo').val() <= 65)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        
        //SCORE 8 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 66 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 66 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        
        //SCORE 7 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 72)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 72)
        {
            $('#score_p_reposo').val(7)
        }
        
        //SCORE 6 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 81)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 73 && $('#lectura_p_reposo').val() <= 76)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 78)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 77)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 77)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 73 && $('#lectura_p_reposo').val() <= 76)
        {
            $('#score_p_reposo').val(6)
        }
        
        //SCORE 5 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 82)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 77)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 79)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        
        //SCORE 10 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 59)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 59)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 54 && $('#lectura_p_reposo').val() <= 60)
        {
            $('#score_p_reposo').val(10)
        }
        
        //SCORE 9 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 61 && $('#lectura_p_reposo').val() <= 65)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 61 && $('#lectura_p_reposo').val() <= 65)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 60 && $('#lectura_p_reposo').val() <= 64)
        {
            $('#score_p_reposo').val(9)
        }
        
        //SCORE 8 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 66 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 66 && $('#lectura_p_reposo').val() <= 69)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 65 && $('#lectura_p_reposo').val() <= 68)
        {
            $('#score_p_reposo').val(8)
        }
        
        //SCORE 7 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 72)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 70 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 73)
        {
            $('#score_p_reposo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 69 && $('#lectura_p_reposo').val() <= 72)
        {
            $('#score_p_reposo').val(7)
        }
        
        //SCORE 6 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 81)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 73 && $('#lectura_p_reposo').val() <= 76)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 78)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 77)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 74 && $('#lectura_p_reposo').val() <= 77)
        {
            $('#score_p_reposo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 73 && $('#lectura_p_reposo').val() <= 76)
        {
            $('#score_p_reposo').val(6)
        }
        
        //SCORE 5 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_p_reposo').val() >= 82)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_p_reposo').val() >= 77)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_p_reposo').val() >= 79)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() <= 65 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_p_reposo').val() >= 78)
        {
            $('#score_p_reposo').val(5)
        }
        
        var cardio = 0;
        cardio = (parseFloat($('#score_p_reposo').val()) + parseFloat($('#score_p_arterial').val()))/2;
        $('#score_cardio').val(cardio);
    }
    
    function fScore_bolt()
    {
        //SCORE 10 AMBOS
        if($('#lectura_bolt').val() >= 40 && $('#lectura_bolt').val() <= 50)
        {
            $('#score_bolt').val(10)
        }
        //SCORE 9 AMBOS
        if($('#lectura_bolt').val() >= 30 && $('#lectura_bolt').val() <= 40)
        {
            $('#score_bolt').val(9)
        }
        //SCORE 8 AMBOS
        if($('#lectura_bolt').val() >= 25 && $('#lectura_bolt').val() <= 30)
        {
            $('#score_bolt').val(8)
        }
        //SCORE 7 AMBOS
        if($('#lectura_bolt').val() >= 17 && $('#lectura_bolt').val() <= 25)
        {
            $('#score_bolt').val(7)
        }
        //SCORE 6 AMBOS
        if($('#lectura_bolt').val() == 17 )
        {
            $('#score_bolt').val(6)
        }
        //SCORE 5 AMBOS
        if($('#lectura_bolt').val() < 16)
        {
            $('#score_bolt').val(5)
        }
    }
    
    function fScore_pct_muscular()
    {
        //SCORE 10 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 35.4)
        {
            $('#score_pct_musculo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 35.2)
        {
            $('#score_pct_musculo').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 35)
        {
            $('#score_pct_musculo').val(10)
        }
        
        //SCORE 9 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 33.5 && $('#lectura_pct_musculo').val() <= 35.3)
        {
            $('#score_pct_musculo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 33.3 && $('#lectura_pct_musculo').val() <= 35.1)
        {
            $('#score_pct_musculo').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 33 && $('#lectura_pct_musculo').val() <= 34.9)
        {
            $('#score_pct_musculo').val(9)
        }
        
        //SCORE 8 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 30.3 && $('#lectura_pct_musculo').val() <= 33.4)
        {
            $('#score_pct_musculo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 30.1 && $('#lectura_pct_musculo').val() <= 33.2)
        {
            $('#score_pct_musculo').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 30 && $('#lectura_pct_musculo').val() <= 33)
        {
            $('#score_pct_musculo').val(8)
        }
        
        //SCORE 7 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 27.5 && $('#lectura_pct_musculo').val() <= 30.2)
        {
            $('#score_pct_musculo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 27.3 && $('#lectura_pct_musculo').val() <= 30)
        {
            $('#score_pct_musculo').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 27.1 && $('#lectura_pct_musculo').val() <= 29.1)
        {
            $('#score_pct_musculo').val(7)
        }
        
        //SCORE 6 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 24.3 && $('#lectura_pct_musculo').val() <= 27.4)
        {
            $('#score_pct_musculo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 24.1 && $('#lectura_pct_musculo').val() <= 27.2)
        {
            $('#score_pct_musculo').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 23.9 && $('#lectura_pct_musculo').val() <= 27)
        {
            $('#score_pct_musculo').val(6)
        }
        
        //SCORE 5 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() <= 24.2)
        {
            $('#score_pct_musculo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() <= 24)
        {
            $('#score_pct_musculo').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() <= 23.8)
        {
            $('#score_pct_musculo').val(5)
        }
        
        //SCORE 10 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 44.1)
        {
            $('#score_pct_musculo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 35.2)
        {
            $('#score_pct_musculo').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 35)
        {
            $('#score_pct_musculo').val(10)
        }
        
        //SCORE 9 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 42 && $('#lectura_pct_musculo').val() <= 44)
        {
            $('#score_pct_musculo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 33.3 && $('#lectura_pct_musculo').val() <= 35.1)
        {
            $('#score_pct_musculo').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 33 && $('#lectura_pct_musculo').val() <= 34.9)
        {
            $('#score_pct_musculo').val(9)
        }
        
        //SCORE 8 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 39.4 && $('#lectura_pct_musculo').val() <= 41.9)
        {
            $('#score_pct_musculo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 30.1 && $('#lectura_pct_musculo').val() <= 33.2)
        {
            $('#score_pct_musculo').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 30 && $('#lectura_pct_musculo').val() <= 33)
        {
            $('#score_pct_musculo').val(8)
        }
        
        //SCORE 7 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 36.7 && $('#lectura_pct_musculo').val() <= 39.3)
        {
            $('#score_pct_musculo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 27.3 && $('#lectura_pct_musculo').val() <= 30)
        {
            $('#score_pct_musculo').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 27.1 && $('#lectura_pct_musculo').val() <= 29.1)
        {
            $('#score_pct_musculo').val(7)
        }
        
        //SCORE 6 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() >= 33.3 && $('#lectura_pct_musculo').val() <= 36.6)
        {
            $('#score_pct_musculo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() >= 24.1 && $('#lectura_pct_musculo').val() <= 27.2)
        {
            $('#score_pct_musculo').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() >= 23.9 && $('#lectura_pct_musculo').val() <= 27)
        {
            $('#score_pct_musculo').val(6)
        }
        
        //SCORE 5 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 39 && $('#lectura_pct_musculo').val() <= 33.2)
        {
            $('#score_pct_musculo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 40 && $('#edad').val() <= 59 && $('#lectura_pct_musculo').val() <= 24)
        {
            $('#score_pct_musculo').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 60 && $('#edad').val() <= 80 && $('#lectura_pct_musculo').val() <= 23.8)
        {
            $('#score_pct_musculo').val(5)
        }
        
        var promedioCorporal = 0;
        promedioCorporal = (parseFloat($('#score_pct_musculo').val()) + parseFloat($('#score_pct_grasa').val()))/2;
        $('#score_c_corporal').val(promedioCorporal);
    }
    
    function fScore_pct_grasa()
    {
        //SCORE 10 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 9 && $('#lectura_pct_grasa').val() <= 13)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 10 && $('#lectura_pct_grasa').val() <= 14)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 10 && $('#lectura_pct_grasa').val() <= 14)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 11 && $('#lectura_pct_grasa').val() <= 16)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 12 && $('#lectura_pct_grasa').val() <= 18)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 15 && $('#lectura_pct_grasa').val() <= 20)
        {
            $('#score_pct_grasa').val(10)
        }
        //SCORE 9 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 14 && $('#lectura_pct_grasa').val() <= 18)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 15 && $('#lectura_pct_grasa').val() <= 21)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 15 && $('#lectura_pct_grasa').val() <= 22)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 16 && $('#lectura_pct_grasa').val() <= 23)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 19 && $('#lectura_pct_grasa').val() <= 24)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 21 && $('#lectura_pct_grasa').val() <= 25)
        {
            $('#score_pct_grasa').val(9)
        }
        //SCORE 8 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 19 && $('#lectura_pct_grasa').val() <= 23)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 22 && $('#lectura_pct_grasa').val() <= 24)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 23 && $('#lectura_pct_grasa').val() <= 25)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 24 && $('#lectura_pct_grasa').val() <= 26)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 25 && $('#lectura_pct_grasa').val() <= 27)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 26 && $('#lectura_pct_grasa').val() <= 28)
        {
            $('#score_pct_grasa').val(8)
        }
        //SCORE 7 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 24 && $('#lectura_pct_grasa').val() <= 28)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 25 && $('#lectura_pct_grasa').val() <= 29)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 26 && $('#lectura_pct_grasa').val() <= 30)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 27 && $('#lectura_pct_grasa').val() <= 31)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 28 && $('#lectura_pct_grasa').val() <= 30)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 29 && $('#lectura_pct_grasa').val() <= 31)
        {
            $('#score_pct_grasa').val(7)
        }
        //SCORE 6 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 29 && $('#lectura_pct_grasa').val() <= 34)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 30 && $('#lectura_pct_grasa').val() <= 35)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 31 && $('#lectura_pct_grasa').val() <= 36)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 31 && $('#lectura_pct_grasa').val() <= 36)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 31 && $('#lectura_pct_grasa').val() <= 36)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 32 && $('#lectura_pct_grasa').val() <= 37)
        {
            $('#score_pct_grasa').val(6)
        }
        //SCORE 5 MUJER
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 35)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 36)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 37)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 37)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 37)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Femenino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 38)
        {
            $('#score_pct_grasa').val(5)
        }
        
        //SCORE 10 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 3 && $('#lectura_pct_grasa').val() <= 8)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 4 && $('#lectura_pct_grasa').val() <= 10)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 5 && $('#lectura_pct_grasa').val() <= 11)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 6 && $('#lectura_pct_grasa').val() <= 12)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 7 && $('#lectura_pct_grasa').val() <= 14)
        {
            $('#score_pct_grasa').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 10 && $('#lectura_pct_grasa').val() <= 16)
        {
            $('#score_pct_grasa').val(10)
        }
        //SCORE 9 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 9 && $('#lectura_pct_grasa').val() <= 11)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 11 && $('#lectura_pct_grasa').val() <= 13)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 12 && $('#lectura_pct_grasa').val() <= 14)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 13 && $('#lectura_pct_grasa').val() <= 15)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 15 && $('#lectura_pct_grasa').val() <= 20)
        {
            $('#score_pct_grasa').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 17 && $('#lectura_pct_grasa').val() <= 21)
        {
            $('#score_pct_grasa').val(9)
        }
        //SCORE 8 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 12 && $('#lectura_pct_grasa').val() <= 18)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 14 && $('#lectura_pct_grasa').val() <= 19)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 15 && $('#lectura_pct_grasa').val() <= 19)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 16 && $('#lectura_pct_grasa').val() <= 20)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 21 && $('#lectura_pct_grasa').val() <= 24)
        {
            $('#score_pct_grasa').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 22 && $('#lectura_pct_grasa').val() <= 26)
        {
            $('#score_pct_grasa').val(8)
        }
        //SCORE 7 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 19 && $('#lectura_pct_grasa').val() <= 22)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 20 && $('#lectura_pct_grasa').val() <= 23)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 20 && $('#lectura_pct_grasa').val() <= 24)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 21 && $('#lectura_pct_grasa').val() <= 25)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 25 && $('#lectura_pct_grasa').val() <= 29)
        {
            $('#score_pct_grasa').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 27 && $('#lectura_pct_grasa').val() <= 30)
        {
            $('#score_pct_grasa').val(7)
        }
        //SCORE 6 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 23 && $('#lectura_pct_grasa').val() <= 25)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 24 && $('#lectura_pct_grasa').val() <= 26)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 25 && $('#lectura_pct_grasa').val() <= 27)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 26 && $('#lectura_pct_grasa').val() <= 29)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 29 && $('#lectura_pct_grasa').val() <= 31)
        {
            $('#score_pct_grasa').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 31 && $('#lectura_pct_grasa').val() <= 33)
        {
            $('#score_pct_grasa').val(6)
        }
        //SCORE 5 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 18 && $('#edad').val() <= 25 && $('#lectura_pct_grasa').val() >= 26)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 26 && $('#edad').val() <= 35 && $('#lectura_pct_grasa').val() >= 27)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 36 && $('#edad').val() <= 45 && $('#lectura_pct_grasa').val() >= 28)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 46 && $('#edad').val() <= 55 && $('#lectura_pct_grasa').val() >= 29)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 56 && $('#edad').val() < 65 && $('#lectura_pct_grasa').val() >= 31)
        {
            $('#score_pct_grasa').val(5)
        }
        if($('#sexo').val() == "Masculino" && $('#edad').val() >= 65 && $('#lectura_pct_grasa').val() >= 33)
        {
            $('#score_pct_grasa').val(5)
        }
        
        var promedioCorporal = 0;
        promedioCorporal = (parseFloat($('#score_pct_musculo').val()) + parseFloat($('#score_pct_grasa').val()))/2;
        $('#score_c_corporal').val(promedioCorporal);
        
    }
    
    function sumaTotal()
    {
        var sumaTotal = 0;
        var health_score = 0;
        sumaTotal = parseFloat($('#score_v02max').val()) + parseFloat($('#score_cardio').val()) + parseFloat($('#score_bolt').val()) + parseFloat($('#score_c_corporal').val()) + parseFloat($('#score_fuerza').val());
        $('#total').val(sumaTotal);
        health_score = parseFloat($('#total').val())*2;
        $('#health_score').val(health_score);
    }
    
    function frecuenciaCardiacaMaxima()
    {
        var frecuencia = 0;
        frecuencia = 220 - parseFloat($('#edad').val());
        $('#frecuencia_cardiaca').val(frecuencia);
    }
    
    function fScore_fuerza_agarre()
    {
        //SCORE 10 MUJER
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() >= 38)
        {
            $('#score_fuerza_agarre').val(10)
        }
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() >= 34 && $('#lectura_fuerza_agarre').val() <= 37)
        {
            $('#score_fuerza_agarre').val(9)
        }
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() >= 30 && $('#lectura_fuerza_agarre').val() <= 33)
        {
            $('#score_fuerza_agarre').val(8)
        }
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() >= 26 && $('#lectura_fuerza_agarre').val() <= 29)
        {
            $('#score_fuerza_agarre').val(7)
        }
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() >= 23 && $('#lectura_fuerza_agarre').val() <= 25)
        {
            $('#score_fuerza_agarre').val(6)
        }
        if($('#sexo').val() == "Femenino" && $('#lectura_fuerza_agarre').val() <= 22)
        {
            $('#score_fuerza_agarre').val(5)
        }
        
        //SCORE 10 HOMBRE
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() >= 64)
        {
            $('#score_fuerza_agarre').val(10)
        }
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() >= 56 && $('#lectura_fuerza_agarre').val() < 64)
        {
            $('#score_fuerza_agarre').val(9)
        }
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() >= 52 && $('#lectura_fuerza_agarre').val() <= 55)
        {
            $('#score_fuerza_agarre').val(8)
        }
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() >= 48 && $('#lectura_fuerza_agarre').val() <= 51)
        {
            $('#score_fuerza_agarre').val(7)
        }
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() >= 44 && $('#lectura_fuerza_agarre').val() <= 47)
        {
            $('#score_fuerza_agarre').val(6)
        }
        if($('#sexo').val() == "Masculino" && $('#lectura_fuerza_agarre').val() <= 43)
        {
            $('#score_fuerza_agarre').val(5)
        }
        
        var fuerza = 0;
        fuerza = (parseFloat($('#score_sit_rais').val()) + parseFloat($('#score_fuerza_agarre').val()))/2;
        $('#score_fuerza').val(fuerza);
        sumaTotal();
    }
    
    function fScore_presion_arterial()
    {
        if($('#lectura_p_arterial1').val() > 115 && $('#lectura_p_arterial1').val() < 125 && $('#lectura_p_arterial2').val() > 70 && $('#lectura_p_arterial2').val() < 85)
        {
            $('#score_p_arterial').val(10)
        }
        if($('#lectura_p_arterial1').val() > 110 && $('#lectura_p_arterial1').val() <= 115 && $('#lectura_p_arterial2').val() > 60 && $('#lectura_p_arterial2').val() <= 70)
        {
            $('#score_p_arterial').val(9)
        }
        if($('#lectura_p_arterial1').val() >= 108 && $('#lectura_p_arterial1').val() <= 110 && $('#lectura_p_arterial2').val() >= 58 && $('#lectura_p_arterial2').val() <= 60)
        {
            $('#score_p_arterial').val(8)
        }
        if(($('#lectura_p_arterial1').val() > 125 || $('#lectura_p_arterial1').val() < 108) && ($('#lectura_p_arterial2').val() > 85 || $('#lectura_p_arterial2').val() < 58))
        {
            $('#score_p_arterial').val(7)
        }
    }
    
    
</script>