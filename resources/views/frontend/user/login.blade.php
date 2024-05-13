@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
  <div id="right_ok">
     <div class="modal-content">
          <div class="modal-header">
              <p class="modal-title">Đăng nhập</p>
          </div>
          <div class="modal-body">
              <form class="form-user-popup" method="post" action="account/dang-nhap.html" enctype="multipart/form-data">
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control text-sm" name="username" placeholder="Nhập tài khoản" required="">
                  </div>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control text-sm" name="password" placeholder="Mật khẩu" required="">
                  </div>
                  <div class="button-user d-flex align-items-center justify-content-between">
                      <input type="submit" class="btn btn-primary" name="login-user" value="Đăng nhập">
                      <a data-bs-target="#popup-forget" data-bs-toggle="modal" data-bs-dismiss="modal" class="cursor-pointer" title="Quên mật khẩu">Quên mật khẩu</a>
                  </div>
                  <div class="row mb-2">
                      <div class="col-6">
                          <a href="javascript:" id="login_gg"><div class="S9gUrf-YoZ4jf" style="position: relative;"><div></div><iframe src="https://accounts.google.com/gsi/button?theme=outline&amp;size=large&amp;client_id=190405275296-jh2o6m5lseali6afvt2bbqb8rs792hk8.apps.googleusercontent.com&amp;iframe_id=gsi_800604_443194&amp;as=Ezm3BgpTq53tzMoMPUZR4A" allow="identity-credentials-get" id="gsi_800604_443194" title="Sign in with Google Button" style="display: block; position: relative; top: 0px; left: 0px; height: 44px; width: 202px; border: 0px; margin: -2px -10px;"></iframe></div></a>
                      </div>
                      <div class="col-6">
                          <a href="javascript:Login_dn();"> <img class="rounded" src="images/signin_face.png" height="40" alt="Facebook"></a>
                      </div>
                  </div>
                  <div class="note-user">
                      <span>Bạn chưa có tài khoản ! </span>
                      <a data-bs-target="#popup-register" data-bs-toggle="modal" data-bs-dismiss="modal" class="cursor-pointer" title="Đăng ký tại đây">Đăng ký tại đây</a>

                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection