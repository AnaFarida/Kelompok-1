 <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?= BASEURL; ?>/login/proses" method="post">
            <h2 class="form-signin-heading">Log in</h2>
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
        </div> <!-- /container -->