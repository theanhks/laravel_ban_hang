<html><head>
    <title>:: Thông Báo ::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="REFRESH" content="4; url={{ route('index') }}">
    <meta name="robots" content="noodp,noindex,nofollow">
</head>

<body>

    <div id="alert">
        <img width="64px" src="images/icon/success.png">
        <div class="title">Thông báo</div>
        <div class="message">
            @if (isset($message))
                {!! $message !!} 
            @else 
                Tên đăng nhập hoặc mật khẩu không chính xác <br> Hoặc tài khoản của bạn chưa được xác nhận từ Quản trị website !
            @endif
        </div>
        <div class="rlink" style="font-size: 18px;">(<a href="{{ route('index') }}" style=" color: #015364; text-decoration: none;">Click vào đây nếu không muốn đợi lâu</a>)</div>
        <img src="images/icon/progress_bar.gif" alt="">
    </div>


<style>
    body {
        background: #eee
    }

    #alert {
        background: #fff;
        padding: 40px;
        margin: 30px auto;
        border-radius: 3px;
        -webkit-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.3);
        -moz-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.3);
        box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.3);

        width: 350px;
        margin-top: 100px;

        text-align: center;

    }

    #alert .message {
        color: #FF0000
    }

    #alert .rlink {
        font-size: 14px;
        margin-top: 10px;
        border-top: 1px solid #ccc;
        padding-top: 10px;
    }


    #alert .title {
        text-transform: uppercase;
        font-weight: bold;
        margin: 10px;
    }
</style></body></html>