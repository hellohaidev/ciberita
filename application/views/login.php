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
        <?php if ($this->session->flashdata('errors')): ?>

        <?php echo $this->session->flashdata('errors'); ?>

        <?php endif; ?>



        <?php if ($this->session->flashdata('login_failed')): ?>

        <?php echo $this->session->flashdata('login_failed'); ?>

        <?php endif; ?>

        <?php if ($this->session->flashdata('no_access')): ?>

        <?php echo $this->session->flashdata('no_access'); ?>

        <?php endif; ?>
            <p class="login-box-msg">Default Username : admin, Password : admin</p>

            <?php echo form_open('index.php/Login/access') ?>
                <div class="form-group has-feedback">

                    <?php 
                        $data = array(
                            'class' => 'form-control',
                            'name' => 'username',
                            'placeholder' => 'Username'
                        );
                    ?>
                    <?php echo form_input($data) ?>
                    <i class="fas fa-user fa-2x form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">

                    <?php 

                        $data = array(
                            'class'=>'form-control',
                            'name' => 'password',
                            'placeholder' => 'Password'
                        );
                    ?>
                    <?php echo form_input($data) ?>
                    <i class="fas fa-lock fa-2x form-control-feedback"></i>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <?php 

                            $data = array(
                                'class' => 'btn btn-primary btn-block btn-flat',
                                'value' => 'Login'
                            );
                        ?>
                        <?php echo form_submit($data) ?>
                    </div>
                </div>
            <?php echo form_close() ?>

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