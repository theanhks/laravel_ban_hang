<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <link id="favicon" rel="shortcut icon" href="upload/hinhanh/logovietsun7893100x44-2880_40x40.png" type="image/x-icon" />

    <title>HTS VIET NAM</title>
    <meta name="description" content="linh kiện máy hàn
bo mạch máy hàn
phụ kiện hàn
phụ kiện ngành hàn
">
    <meta name="keywords" content="linh kiện máy hàn">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="google" content="notranslate" />
    <meta name='revisit-after' content='1 days' />
    <meta name="ICBM" content="">
    <meta name="geo.position" content="">
    <meta name="geo.placename" content="Vĩnh Lộc A, H. Bình Chánh, TP.HCM">
    <meta name="author" content="CÔNG TY TNHH XNK MẶT TRỜI VIỆT">


    <meta property="og:url" content="https://linhkienmayhan.vn:443/" /><meta property="og:type" content="website" /><meta property="og:title" content="CÔNG TY TNHH XNK MẶT TRỜI VIỆT" /><meta property="og:description" content="linh kiện máy hàn
bo mạch máy hàn
phụ kiện hàn
phụ kiện ngành hàn
" /><meta property="og:image" content="https://linhkienmayhan.vn/upload/hinhanh/logovietsun7893100x44-2880_40x40.png" />    <!-- Dublin Core-->
    <link rel="schema.DC" href="https://purl.org/dc/elements/1.1/">
    <meta name="DC.title" content="linh kiện máy hàn">
    <meta name="DC.identifier" content="https://linhkienmayhan.vn/">
    <meta name="DC.description" content="linh kiện máy hàn
bo mạch máy hàn
phụ kiện hàn
phụ kiện ngành hàn
">
    <meta name="DC.subject" content="linh kiện máy hàn">
    <meta name="DC.language" scheme="UTF-8" content="vi">

    <!--Geo Meta Tags-->
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="">
    <meta name="geo.placename" content="Vĩnh Lộc A, H. Bình Chánh, TP.HCM">
    <meta name="ICBM" content="">
    <meta name="author" content="linh kiện máy hàn">

    <!-- Thẻ Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="linh kiện máy hàn" />
    <meta name="twitter:description" content="linh kiện máy hàn
bo mạch máy hàn
phụ kiện hàn
phụ kiện ngành hàn
" />
    <!-- Thẻ Canonical -->
    <link rel="canonical" href="https://linhkienmayhan.vn:443/" />

    <meta name="viewport" content="width=1300">
    <script language="javascript" type="text/javascript" src="{{ asset('js/jquery-2.1.4.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/ddsmoothmenu-v.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/ddsmoothmenu.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/muangay.css')}}">
    <link rel="stylesheet" href="{{ asset('css/hts.css')}}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('js/owl_carousel/assets/owl.carousel.css')}}" />
    <script type="text/javascript" src="{{ asset('js/ddsmoothmenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/owl_carousel/owl.carousel.min.js')}}"></script>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/owl_carousel/assets/owl.carousel.css')}}" />
    <script type="text/javascript" src="{{ asset('js/ddsmoothmenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/owl_carousel/owl.carousel.min.js')}}"></script>
    <link href="{{ asset('fontawesome/fontawesome-all.css')}}" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('js/slick.css')}}" />
    <script type="text/javascript" src="{{ asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.js')}}"></script>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '523010816023969', // Set YOUR APP ID
                channelUrl: 'https://linhkienmayhan.vn/xuly_login.php', // Channel File
                status: true, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true // parse XFBML
            });
        };

        function Login_dn() {
            FB.login(function(response) {
                if (response.authResponse) {
                    getUserInfo_dn();
                    return false;
                } else {
                    console.log('User cancelled login or did not fully authorize.');
                }
            }, {
                scope: 'email'
            });
        }

        function getUserInfo_dn() {
            FB.api('/me?fields=id,name,email,gender,picture{url}', function(response) {
                response.type = "submit";
                $.post("xuly_login.php", response, function(data) {
                    window.location.href = 'https://linhkienmayhan.vn';
                });
            });
        }

        function Logout() {
            FB.logout(function() {
                document.location.reload();
            });
        }
        // Load the SDK asynchronously
        (function(d) {
            var js, id = 'facebook-jssdk',
                ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement('script');
            js.id = id;
            js.async = true;
            js.src = "//connect.facebook.net/en_US/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
    </script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function parseJwt(token) {
            var base64Url = token.split('.')[1];
            var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));

            return JSON.parse(jsonPayload);
        };

        function handleCredentialResponse(response) {
            var profile = parseJwt(response.credential);
            $gg_id = profile.iat;
            $gg_name = profile.name;
            $gg_img = profile.picture;
            $gg_email = profile.email;
            $.ajax({
                type: "POST",
                data: {
                    'id': $gg_id,
                    'name': $gg_name,
                    'img': $gg_img,
                    'email': $gg_email
                },
                url: 'https://linhkienmayhan.vn/xuly_login.php',
                success: function(msg) {

                    window.location.href = 'https://linhkienmayhan.vn';
                    return false;

                    // if(msg.error== 1){
                    //   console.log('Something Went Wrong!');
                    // }else{
                    //   window.location.href='';
                    //   return false;
                    // }
                }
            });
        }
        window.onload = function() {
            google.accounts.id.initialize({
                client_id: "190405275296-jh2o6m5lseali6afvt2bbqb8rs792hk8.apps.googleusercontent.com", //client_id
                callback: handleCredentialResponse,
            });
            google.accounts.id.renderButton(
                document.getElementById("login_gg"), {
                    theme: "outline",
                    size: "large"
                } // customization attributes
            );
        }
    </script>

    <script>
        $().ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 150) {
                    $("#main_menu").css({
                        "position": "fixed",
                        'z-index': 60
                    });
                } else {
                    $("#main_menu").css({
                        "position": "relative",
                        'z-index': 50
                    });
                }
            });
        });
    </script>

    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 14px;
            line-height: 1.5;
            background-color: ;
            background-attachment: fixed;
            height: 100%;
            background-color: #f8f8f8;
        }
    </style>
    <address class="vcard" style='display: none'>
        <span class="org">CÔNG TY TNHH XNK MẶT TRỜI VIỆT</span>,
        <span class="adr">Vĩnh Lộc A, H. Bình Chánh, TP.HCM</span>
        <span class="street-address">Vĩnh Lộc A, H. Bình Chánh, TP.HCM</span>,
        <span class="locality"></span>,
        <span class="postal-code"></span>,
        <span class="country-name">Việt Nam</span>.
        <span class="tel">07 74 74 74 33</span>
    </address>

</head>
