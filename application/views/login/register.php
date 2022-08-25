<!DOCTYPE html>
<<<<<<< HEAD
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory EDP | Sign Up</title>
  <link rel="shortcut icon" href="<?=base_url('assets/img/rsia_family.jpeg')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Anton|Baloo+Bhai|Be+Vietnam|Black+Ops+One|Carter+One|Fascinate+Inline|Fredoka+One|Modak|Oleo+Script|Paytone+One|Righteous|Russo+One|Ubuntu|Ultra&display=swap"
    rel="stylesheet">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#" style="font-family: 'Black Ops One', cursive;">Inventory</a>
    </div>

    <div class="card shadow">
      <div class="card-body register-card-body">
        <h4 class="login-box-msg" style="font-family: 'Modak', cursive;">Daftar</h4>
        <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong><br> <?= $this->session->flashdata('msg');?>
        </div>
        <?php } ?>

        <?php if($this->session->flashdata('msg_terdaftar')){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success</strong><br> <?= $this->session->flashdata('msg_terdaftar');?>
        </div>
        <?php } ?>

        <?php if(validation_errors()){ ?>
        <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong><br> <?= validation_errors(); ?>
        </div>
        <?php } ?>

        <form action="<?= base_url('register/proses_register')?>" class="login" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" id="username" class="form-control" style="font-family: 'Be Vietnam', sans-serif;"
              placeholder="Username" autofocus required="">
              <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" style="font-family: 'Be Vietnam', sans-serif;"
              placeholder="Email" autofocus required="">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" style="font-family: 'Be Vietnam', sans-serif;"
              placeholder="Password" autofocus required="">
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control"
              style="font-family: 'Be Vietnam', sans-serif;" placeholder="Confirm password" autofocus required="">
              <?= form_error('confirm_password', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <a href="<?= base_url('login'); ?>" class="text-center" style="font-family: 'Carter One', cursive;">Sign
                In</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"
                style="font-family: 'Carter One', cursive;">Sign Up</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
=======
<html >
<head>
  <meta charset="UTF-8">
  <title>Inventory EDP | Sign Up</title>
	<link rel="shortcut icon" href="<?=base_url('assets/img/rsia_family.jpeg')?>">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url(assets/img/fam.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
	background: url("assets/img/fam.jpg") no-repeat center center fixed;
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: #bb2424;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #bb2424;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #bb2424;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">
  <form action="<?= base_url('register/proses_register')?>" class="login" method="post">

    <p class="title"><i class="fa fa-user-plus" aria-hidden="true"></i> Daftar</p>
    <?php if($this->session->flashdata('msg')){ ?>
      <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong><br> <?= $this->session->flashdata('msg');?>
     </div>
    <?php } ?>

    <?php if($this->session->flashdata('msg_terdaftar')){ ?>
      <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success</strong><br> <?= $this->session->flashdata('msg_terdaftar');?>
     </div>
    <?php } ?>

    <?php if(validation_errors()){ ?>
    <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong><br> <?= validation_errors(); ?>
   </div>
  <?php } ?>

    <input type="text" name="username" placeholder="Username" autofocus required=""/>

    <i class="fa fa-user"></i>
    <input type="email" name="email" placeholder="Email" autofocus required=""/>

    <i class="fa fa-user"></i>
    <input type="password" name="password" placeholder="Password" required=""/>

    <i class="fa fa-key"></i>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required=""/>

    <i class="fa fa-key"></i>

    <?= anchor(base_url('login'),'Sign In') ?><br>

    <!-- <a href="#">Forgot your password?</a> -->

    <button>
      <!-- <i class="spinner"></i> -->
      <span class="state"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</span>
    </button>

  </form>
  <!-- <footer><a target="blank" href="http://unsadacoder.or.id">UnsadaCoder.or.id</a></footer> -->
  </p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
>>>>>>> 3be6f91dfde298de5f65865ce6ea2be0989d0555
</body>
</html>
