<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}"/>
    <!-- Loading Bootstrap -->
    <link href="{{ asset('assets/admin/css/backend.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/login.css') }}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="login-wrapper">
        <div class="login-screen">
            <div class="well">
                <div class="login-form">
                    <img id="profile-img" class="profile-img-card" src="{{ asset('assets/admin/img/avatar.png') }}"/>
                    <p id="profile-name" class="profile-name-card"></p>

                    <form action="{{ route('admin.login') }}" method="post" id="login-form">
                        <div id="errtips" class="hide"></div>
                        {{ csrf_field() }}
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"
                                                                 aria-hidden="true"></span></div>
                            <input type="text" class="form-control" id="pd-form-username" placeholder="用户名"
                                   name="username" autocomplete="off" value="" data-rule="用户名:required;username"/>
                        </div>

                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"
                                                                 aria-hidden="true"></span></div>
                            <input type="password" class="form-control" id="pd-form-password" placeholder="密码"
                                   name="password" autocomplete="off" value="" data-rule="密码:required;password"/>
                        </div>

                        <div class="form-group">
                            <label class="inline" for="keeplogin">
                                <input type="checkbox" name="keeplogin" id="keeplogin" value="1"/>
                                保持会话 </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">登 录</button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="copyright"><a href="javascript:void(0)">Powered By DHCMS</a></p>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/require.min.js') }}"
        data-main="{{ asset('assets/js/require-backend.min.js') }}"></script>
</body>
</html>