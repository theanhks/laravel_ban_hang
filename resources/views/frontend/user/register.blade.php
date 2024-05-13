@extends('frontend.layout')
@section('title', 'Trang chủ')
@section('content')
  <div id="right_ok">
     <div class="modal-content">
          <div class="modal-header">
              <p class="modal-title">Đăng ký</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form class="form-user-popup validation-user" method="post" action="account/dang-ky.html" enctype="multipart/form-data">
                  <label>Họ tên</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control text-sm" name="ten" placeholder="Nhập họ và tên" required="">
                  </div>
                  <label>Tài khoản</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control text-sm" name="username" placeholder="Nhập tài khoản" required="">
                  </div>
                  <label>Mật khẩu</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control text-sm" name="password" placeholder="Mật khẩu" required="">
                  </div>
                  <label>Nhập lại mật khẩu</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      <input type="password" class="form-control text-sm" name="renew_pass" placeholder="Nhập lại mật khẩu" required="">
                  </div>
                  <label>Giới tính</label>
                  <div class="input-group input-user">
                      <div class="radio-user custom-control custom-radio">
                          <input type="radio" id="nam-dk" name="sex" class="custom-control-input" value="1" required="">
                          <label class="custom-control-label" for="nam-dk">Nam</label>
                      </div>
                      <div class="radio-user custom-control custom-radio">
                          <input type="radio" id="nu-dk" name="sex" class="custom-control-input" value="0" required="">
                          <label class="custom-control-label" for="nu-dk">Nữ</label>
                      </div>
                  </div>
                  <label>Email</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                      <input type="email" class="form-control text-sm" name="email" placeholder="Nhập email của bạn - Không bắt buộc">
                  </div>
                  <label>Điện Thoại </label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-phone-square"></i></div>
                      <input type="number" class="form-control text-sm" name="dienthoai" placeholder="Nhập số điện thoại" required="">
                  </div>
                  <label>Địa chỉ</label>
                  <div class="input-group input-user">
                      <div class="input-group-text"><i class="fa fa-map"></i></div>
                      <input type="text" class="form-control text-sm" name="diachi" placeholder="Nhập địa chỉ" required="">
                  </div>
                  <div class="button-user">
                      <input type="submit" class="btn btn-primary btn-block" name="registration-user" value="Đăng ký">
                  </div>
              </form>
              <div class="footer-form-register mb-3">
                  Bạn đã có tài khoản? <a class="cursor-pointer" data-bs-target="#popup-login" data-bs-toggle="modal" data-bs-dismiss="modal" title="ĐĂNG NHẬP">Đăng nhập</a>
              </div>
          </div>
      </div>
  </div>
@endsection