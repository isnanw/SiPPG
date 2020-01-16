    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="login-form-bg h-100">
      <div class="container h-100">
        <div class="row justify-content-center h-100">
          <div class="col-xl-6">
            <div class="form-input-content">
              <div class="card login-form mb-0">
                <div class="card-body pt-5">

                  <a class="text-center" href="">
                    <h4><?= $title ?></h4>
                  </a>

                  <form class="mt-5 mb-5 login-input">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password1">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Repeat Password" name="password2">
                    </div>
                    <button class="btn login-form__btn submit w-100">Sign in</button>
                  </form>
                  <p class="mt-5 login-form__footer">Have account <a href="<?= base_url('auth') ?>" class="text-primary">Sign Up </a> now</p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>