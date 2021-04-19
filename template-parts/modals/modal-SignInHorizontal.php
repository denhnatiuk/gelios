<?php
/**
* template for modal SignIn Horizontal
*/
?>

<!-- Signin: Horizontal  -->
<div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card card-row">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(/assets/photo-1.jpg);">

            <!-- Image (placeholder) -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"></path></svg>
            </div>

          </div>
          <div class="col-12 col-md-6">
            <div class="card-body">

              <!-- Close -->
              <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSigninHorizontalTitle">
                Sign In
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSigninHorizontalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSigninHorizontalPassword">
                    Enter your password
                  </label>
                  <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Enter your password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign in
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Don't have an account yet? <a href="https://landkit.goodthemes.co/signin-illustration.html">Sign up</a>.
              </p>

            </div>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div>
