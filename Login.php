    
    <div id="colorlib-contact">
      <div class="container">
        <div class="row">
          
        <form class="login" action="<?php echo base_url('web/aksi_login'); ?>" method="post" >
          <div class="col-md-10 col-md-offset-1 animate-box"><br><br>
            <h2><center>Login Admin</center></h2><hr><hr><br>
            <?php //echo form_open_multipart('web/aksi_login')?>
             <h>Masukkan Username sesuai yang diberikan Sistem untuk keamanan</h><br><br>
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="username">Username</label><br>
                  <input type="text" name="username" class="form-control" placeholder="Username" required=""> 
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="password">Password</label><br>
                  <input type="password" name="password" class="form-control" placeholder="Password " required="">
                </div>
              </div><br><br>

              <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary" name="daftar" >
              </div>
            </form>   
          </div>
        </div>
      </div>
    </div>
    <div id="map" class="colorlib-map"></div>
