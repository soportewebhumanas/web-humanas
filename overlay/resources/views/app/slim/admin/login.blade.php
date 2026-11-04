<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Facultad de Ciencias Humanas | Admin</title>
        <meta content="Admin Dashboard" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="../images/logo_ico.ico">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../adm_assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="../adm_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../adm_assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../adm_assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>


    <body>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <!-- <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="30" alt="logo"></a> -->
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Bienvenido</h4>
                        

                        <form class="form-horizontal m-t-30" action="/admin/login" method="post">

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email">
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <!-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberme">
                                        <label class="custom-control-label" for="rememberme">Recordarme</label>
                                    </div> -->
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Iniciar sesión</button>
                                </div>
                            </div>

                            <!-- <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div> -->
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center text-light">
                <p>¿No tenes cuenta? <a href="mailto:contacto@ruralsalliquelo.com.ar" class="font-500 font-14 text-info font-secondary"> Contactar </a> </p>
                <p>© 2020 Facultad de Ciencias Humanas - UNLPam</p>
            </div>

        </div>

        <!-- jQuery  -->
        <script src="../adm_assets/js/jquery.min.js"></script>
        <script src="../adm_assets/js/bootstrap.bundle.min.js"></script>
        <script src="../adm_assets/js/modernizr.min.js"></script>
        <script src="../adm_assets/js/waves.js"></script>
        <script src="../adm_assets/js/jquery.slimscroll.js"></script>
        <script src="../adm_assets/js/jquery.nicescroll.js"></script>
        <script src="../adm_assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="../adm_assets/plugins/morris/morris.min.js"></script>
        <script src="../adm_assets/plugins/raphael/raphael-min.js"></script>


        <!-- App js -->
        <script src="../adm_assets/js/app.js"></script>

    </body>
</html>