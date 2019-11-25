 <?php Flasher::flash(); ?>
<!-- Bootstrap CSS -->
<link href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/libs/css/style.css">
<link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
<style>
html,
body {
height: 100%;
}
body {
display: -ms-flexbox;
display: flex;
-ms-flex-align: center;
align-items: center;
padding-top: 40px;
padding-bottom: 40px;
}
.splash-container{
margin-top: 100px;
}
</style>

<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="<?= BASEURL; ?>/adminSources/index.html"><img class="logo-img" src="<?= BASEURL; ?>/adminSources/assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/login/checklogin" method="POST">
                
                <div class="form-group">
                    <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" required name="username">
                    <p class="nama" style="font-size: 12px; color: red;"></p>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" required name="password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
