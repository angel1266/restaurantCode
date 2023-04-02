<?php if(isset($_GET["pc"])){Session::set('host_pc', 'PC0'.$_GET["pc"]);} ?>
<div id="wrapper-1" style="display: block;">
    <link href="<?php echo URL; ?>public/css/style.min.css" id="theme" rel="stylesheet">
    <div class="row auth-wrapper gx-0">
        <div class="col-lg-4 col-xl-3 bg-info auth-box-2 on-sidebar" style="background-image:url(<?php echo URL; ?>public/images/background/bg.jpg);">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7 col-lg-12 col-xl-9">
                        <a href="javascript:void(0)" class="text-center db"><img src="<?php echo URL; ?>public/images/logo-facperu.png" width='60%' /></a>
                        <h2 class="text-white mt-4 fw-light">SISTEMA ADMINISTRATIVO DE<span class="font-weight-medium text-warning"> RESTAURANTES</span></h2>
                        <p class="op-5 text-white fs-4 mt-4">Gesti&oacute;n realmente f&aacute;cil para hacer crecer tu negocio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-9 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center w-100 mt-1 mt-lg-0">
                <div class="col-lg-6 col-xl-3 col-md-7">
                    <div class="px-2 my-4" >
                        <a class="btn btn-primary btn-lg btn-block" href="<?php echo URL; ?>multimozo">Multi Camarero</a>
                    </div>
                    <div class="card" id="loginform">
                        <div class="card-body">
                            <h3>Bienvenido!</h3>
                            <p class="text-muted fs-4">Ingrese sus datos de acceso</p>
                            <form class="form-horizontal mt-4 pt-4" id="frm-login" role="form" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-input-bg" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off">
                                    <label for="usuario">Usuario</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control form-input-bg" name="password" id="password" placeholder="*****" autocomplete="off">
                                    <label for="password">Contrase&ntilde;a</label>
                                </div>
                                <div class="d-flex align-items-stretch button-group mt-4 pt-2">
                                    <button type="submit" class="btn btn-warning btn-block btn-lg px-4">Continuar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.text-warning {
    color: #ea5b5d; !important;
}
.btn-warning {
    color: #fff !important;
    background-color: #ea5b5d; !important;
    border-color: #ea5b5d; !important;
    box-shadow: 0 1px 0 rgb(255 255 255 / 15%);
}
.btn-warning:hover, .btn-warning.disabled:hover {
    background: #ea5b5d; !important;
    color: #ffffff !important;
    -webkit-box-shadow: 0 14px 26px -12px rgb(234 91 93 / 42%), 0 4px 23px 0 rgb(0 0 0 / 12%), 0 8px 10px -5px rgb(234 91 93 / 20%);
    box-shadow: 0 14px 26px -12px rgb(234 91 93 / 42%), 0 4px 23px 0 rgb(0 0 0 / 12%), 0 8px 10px -5px rgb(234 91 93 / 20%);
    border: 1px solid #ea5b5d; !important;
}
@media (max-width: 767px) {

    .auth-wrapper .auth-box-2 {
    padding: 15px 25px 0px 25px;
}
}


</style>