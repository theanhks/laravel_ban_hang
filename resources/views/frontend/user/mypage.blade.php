@extends('frontend.layout')
@section('title', 'Mypage')
@section('content')
  <div id="right_ok">
     <div class="modal-content">
        <div class="modal-header">
            <p class="modal-title">Thông tin cá nhân</p>
        </div>
        <div class="modal-body">
            <form class="form-user-popup validation-user" method="post" action="{{ route('auth.update') }}">
            	@csrf
                <label>Họ tên</label>
                <div class="input-group input-user">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control text-sm" name="name" placeholder="Nhập họ tên" value="{{ old('name', $user->name) }}" required>
                </div>
                <label>Tài khoản</label>
                <div class="input-group input-user">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control text-sm" name="username" value="{{ old('username', $user->username) }}" readonly required>
                </div>
                <label>Giới tính</label>
                <div class="input-group input-user">
                    <div class="radio-user custom-control custom-radio">
                        <input type="radio" id="nam-tt" name="gender" class="custom-control-input" @if (old('username', $user->gender) == 'male') checked @endif value="male" required>
                        <label class="custom-control-label" for="nam-tt">Nam</label>
                    </div>
                    <div class="radio-user custom-control custom-radio">
                        <input type="radio" id="nu-tt" name="gender" class="custom-control-input" @if (old('username', $user->gender) == 'female') checked @endif value="female" required>
                        <label class="custom-control-label" for="nu-tt">Nữ</label>
                    </div>
                </div>
                <label>Email</label>
                <div class="input-group input-user">
                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                    <input type="email" class="form-control text-sm" name="email" placeholder="Nhập email" value="{{ old('email', $user->email ?? '') }}" >
                </div>
                <label>Điện Thoại </label>
                <div class="input-group input-user">
                    <div class="input-group-text"><i class="fa fa-phone-square"></i></div>
                    <input type="number" class="form-control text-sm" name="phone" placeholder="Nhập điện thoại" value="{{ old('phone', $user->phone) }}" required>
                </div>
                <label>Địa chỉ</label>
                <div class="input-group input-user">
                    <div class="input-group-text"><i class="fa fa-map"></i></div>
                    <input type="text" class="form-control text-sm" name="address" placeholder="Nhập địa chỉ" value="{{ old('address', $user->address) }}" required>
                </div>
                <div class="button-user">
                    <input type="submit" class="btn btn-primary btn-block" name="info-user" value="Cập nhật">
                </div>
            </form>
        </div>
    </div>
  </div>
@endsection