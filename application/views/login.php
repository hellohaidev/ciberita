<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/bootstrap.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin/blue.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

    <div class="login-box">

        <div class="login-logo">
            <a href="../../index2.html"><b>Login</b>Page</a>
        </div>
        
        <div class="login-box-body">
            <p class="login-box-msg">Default Username : admin, Password : admin</p>

            <form action="../../index2.html" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <i class="fas fa-user fa-2x form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <i class="fas fa-lock fa-2x form-control-feedback"></i>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>

                </div>
            </form>

        </div>

    </div>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/js/admin/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/js/admin/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/js/admin/icheck.min.js"></script>
    <script>
    $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>
</html>