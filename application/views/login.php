<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin - SISPENDAKUR</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>
        body { background: #e9ecef; font-family: 'Source Sans Pro', Arial, sans-serif; }
        .login-wrap { width: 360px; max-width: 92%; margin: 8vh auto 0; }
        .login-box  { background: #fff; box-shadow: 0 0 1px rgba(0,0,0,.13), 0 1px 3px rgba(0,0,0,.2); }
        .login-head { background: #008000; color: #fff; text-align: center; padding: 10px 0 12px;
                      font-size: 2rem; text-transform: uppercase; }
        .login-body { padding: 20px; }
        .login-body p.msg { text-align: center; font-weight: 700; color: #555; margin-bottom: 20px; }
        .login-foot { background: #008000; height: 14px; }
        .login-body .form-control { height: calc(1.5em + .75rem + 2px); border-radius: .25rem; font-size: 1rem; }
        .login-body .input-group-text { background: #fff; color: #6c757d; border-left: 0; }
        .login-body .form-control { border-right: 0; }
        .btn-login { background: #007bff; border-color: #007bff; color: #fff; font-weight: 600; }
        .btn-login:hover { background: #0069d9; color: #fff; }
    </style>
</head>
<body>

<div class="login-wrap">
    <div class="login-box">
        <div class="login-head">Login Admin</div>

        <div class="login-body">
            <p class="msg">Masukkan Username dan Password</p>

            <form action="<?= base_url('login/aksi_login'); ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember">
                            <label class="custom-control-label font-weight-bold" for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="login" value="Login" class="btn btn-login btn-block">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="login-foot"></div>
    </div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
