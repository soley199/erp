<!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div class="auth-wrapper d-flex no-block justify-content-center align-items-center ">
        <div class="auth-box   border-secondary">
          <div id="loginform">
            <div class="text-center pt-3 pb-3">
              <span class="db"
                ><img src="./views/assets/images/icono.png" alt="logo" width="300px" height="300px" /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal mt-3" method="POST">
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                        <i class="mdi mdi-account fs-4"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="ingrUsuario" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" required/>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                        <i class="mdi mdi-lock fs-4"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg" name="ingrPass"  placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1" required=""/>
                  </div>
                </div>
              </div>
              <div class="row border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="">
                      <button class="btn btn-primary float-end text-white" type="submit">Login</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario()
              ?>
            </form>
          </div>
        </div>
      </div>