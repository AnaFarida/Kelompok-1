
			</div>
	    <section class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(<?= BASEURL; ?>/homeSources/images/laptop4.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">REPAIRME</h1>
		            <!--<h2>Tempat Perbaikan HandPhone dan Laptop Terpercaya</h2>-->
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>


 <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?= BASEURL; ?>/models/Login_model.php" method="post">
            <h2 class="form-signin-heading">RepairMe</h2>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>