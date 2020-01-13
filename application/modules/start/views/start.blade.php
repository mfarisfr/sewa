<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sekolah Teladan | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{base_url('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{base_url('assets/dist/css/adminlte.min.cs')}}s">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{base_url('start/cek')}}" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="NIK" name="nik">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
<!-- 
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="{{base_url('user')}}" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Tampil User
        </a>
        <a href="{{base_url('admin')}}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
  </div>
</div>

<script src="{{base_url('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{base_url('assets/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
