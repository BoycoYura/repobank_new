<!DOCTYPE html>
<!--suppress ALL -->
<html>
<head>
    <meta charset="utf-8"/>
    <title>{{$gnl->title}} | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="{{ asset('assets/user/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/css/style-responsive.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/css/style-responsive.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/user/css/theme/default.css') }}" rel="stylesheet" id="theme"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}"/>

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/user/plugins/pace/pace.min.js') }}"></script>

    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>

<body style="background-image: url('{{ asset($background) }}');">

<div id="page-loader" class="fade in"><span class="spinner"></span></div>

<div id="page-container" class="fade page-sidebar-fixed page-header-fixed" style="">
<div class="top-right-admin-part">
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="tokens-info-coin">BTC: <span class="cion-value">{{$btc_coin}}</span></li>
                <li class="tokens-info-coin">ETH: <span class="cion-value">{{$etch_coin}}</span></li>
                <li class="tokens-info">
                    <p class="balance-text">Your balance <span>0</span> Tokens
<!--                         <select name="" id="">
                            <option value="">
                                <p> BTC</p>
                            </option>

                            <option value="">
                                <p><span>0</span> ETH</p>
                            </option>

                            <option value="">
                                <p><span>0</span> USD</p>
                            </option>
                        </select> -->
                    </p>
                </li>
                
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle drop-link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="icon-settings-first">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1C4.58 1 1 4.58 1 9s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 2.75c1.24 0 2.25 1.01 2.25 2.25S10.24 8.25 9 8.25 6.75 7.24 6.75 6 7.76 3.75 9 3.75zM9 14.5c-1.86 0-3.49-.92-4.49-2.33C4.62 10.72 7.53 10 9 10c1.47 0 4.38.72 4.49 2.17-1 1.41-2.63 2.33-4.49 2.33z"/></svg>
                        </span>
                        <span class="username username-hide-on-mobile">
                            {{{ isset(Auth::user()->email) ? Auth::user()->email : "" }}}
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-user drop-settings">
                    <a class="drop-link open-link">
                        <span class="icon-settings">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/></svg>
                        </span>
                        <span>Customizer</span>
                    </a>
                    <div class=" drop-settings-inner close-drop">
                        <div>
                            <p class="scheme-title">Color scheme</p>

                            @include('partials.customizer')

                        </div>
                    </div>
                </li>
            </ul>
        </div>
</div>
    @include('layouts.sidebar')
    <div id="content" class="content">
        @include('layouts.alert')
        @yield('content')
    </div>

    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="fa fa-angle-up"></i></a>
</div>
@yield('scripts')

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('assets/user/plugins/jquery/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/user/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('assets/user/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('assets/user/plugins/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/user/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
{{--<script src="{{ asset('assets/user/js/dashboard.min.js') }}"></script>--}}
<script src="{{ asset('assets/user/js/apps.min.js') }}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
//        Dashboard.init();
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');

</script>

<script>

    $(".customize-items .item img").click(function () {
        console.log(".customize-items .item img click");

        var bg_code;
        var image;
        bg_code = $(this).attr('src');
        image = $(this).attr('alt');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        console.log("ajax here", bg_code);
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/home/background-update',
            data: {
                "background": image
            },
            success:function(response) {
//                alert(response);
            }
        });

        $(".pace-done").css("background", 'url(' + bg_code + ')');
    });


    $(".open-link").click(function () {
        $(".drop-settings-inner").toggleClass("open-drop");
        $(".drop-settings-inner").toggleClass("close-drop");

        $(".drop-settings").toggleClass("active-cast");


        $(".open-drop").animate({right: 0}, 1000);
        $(".close-drop").animate({right: -350}, 1000);
    });


        $(".page-sidebar-menu").after("<span class='mobile-menu-btn'>&#8251</span>");

        $(".mobile-menu-btn").click(function () {
            $(".page-sidebar.navbar-collapse.collapse").toggleClass("open-menu");
            $(".page-sidebar.navbar-collapse.collapse").toggleClass("close-menu");

            $(".open-menu").animate({left: 0}, 1000);
            $(".close-menu").animate({left: -450}, 1000);
        });
</script>
</body>
</html>
