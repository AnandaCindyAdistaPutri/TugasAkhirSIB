<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">


  <style type="text/css">
      body{
      .login_wrapper{
        margin-top: 0
      }
      .form-login{
        background: #fffe;
        margin: 55px;
        padding: 40px
      }
    </style>
</head>
  <body class="d-flex align-items-center">
    
    <div class="col-md-12 d-xs-none text-center">
          </br>
           </br>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12"></div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-12">
              <div class="animate form-login">
                <section class="">
                  <form class="form-horizontal" action="<?php echo site_url().'/admin/register/simpan_pengguna'?>" method="post" enctype="multipart/form-data">
                    <h1 class="text-dark text-center"> Registrasi Akun Arkatama Store</h1>
                    <div class="modal-body">       
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10">
                              <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                              <input type="email" name="xemail" class="form-control" id="inputEmail3" placeholder="Email" required>
                          </div>
                      </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-2 control-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                             <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                  <label for="inlineRadio1"> Laki-Laki </label>
                              </div>
                              <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                  <label for="inlineRadio2"> Perempuan </label>
                              </div>
                          </div>
                      </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-2 control-label">Username</label>
                          <div class="col-sm-10">
                              <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                              <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword4" class="col-sm-2 control-label">Ulangi Password</label>
                          <div class="col-sm-10">
                              <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-2 control-label">Level</label>
                          <div class="col-sm-10">
                              <select class="form-control" name="xlevel" required>
                                  <option value="1">Administrator</option>
                                  <option value="2">Author</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputUserName" class="col-sm-2 control-label">Foto</label>
                          <div class="col-sm-10 ">
                              <input type="file" name="filefoto" required/>
                          </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url()?>/Administrator" class="btn btn-default btn-flat"> Kembali</a>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan"> Simpan</button>
                    </div>
                    </form>
                </section>
              </div>
            </div>
          </div>
          
        </div>
  </body>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
