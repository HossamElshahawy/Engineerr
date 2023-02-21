<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>اضف منشور</title>
    <link rel="apple-touch-icon" href="{{asset('dashbord/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashbord/app-assets/images/logo/favicon.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/font.css')}}">
 <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/pages/page-profile.css')}}">
 <!-- END: Page CSS-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>

            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>


                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">  {{Auth::user()->name}}
                    </div><span class="avatar"><img class="round" src="{{asset('storage/profile_photo/'.Auth::user()->image)}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>

                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize" href="{{route('social.home')}}"><i class="me-50 " data-feather="user"></i> الصفحه الرئيسيه</a>

                </div>
            </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo">
                    <img src="{{asset('dashbord/app-assets/images/logo/logosm.svg')}}"  height="40" viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >

                        <h2 class="brand-text  font " style="font-size: medium; color:#058f00 ;"> انا مهندس</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item fontSize"><a class="d-flex align-items-center " href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الصفحه الرئيسيه</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">

                        <li class="active fontSize"><a class="d-flex align-items-center " href="{{url('/')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">الرئيسيه</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الكورسات والمقالات </span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الدورات و المقالات</span></a>
                    <ul class="menu-content">
                        <li class=" fontSize"><a class="d-flex align-items-center " href="{{route('home_elms')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">الدورات</span></a>
                        </li>

                        <li><a class="d-flex align-items-center fontSize" href="{{route('all.artical')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">المقالات</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('all.magazines')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details"> المجلات</span></a>
                        </li>
                    </ul>
                </li>

                <!-- <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">التواصل الاجتماعي</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="User">اعدادات التواصل الاجتماعي</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">الحسابات المحظوره</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">توثيق الحسابات </span></a>
                        </li>
                    </ul>
                </li> -->




        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">


            </div>
            <div class="content-body">
                <div id="user-profile">
                    <!-- profile header -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title font">اضافه منشور </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form method="POST" action="{{route('CreatePost')}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                            <div class="col-12">

                                            <div class="mb-1">
                                                <textarea class="form-control font" id="exampleFormControlTextarea1" rows="3" placeholder="بماذا تفكر ؟" name="body" value="{{old('title')}}"></textarea>
                                            </div>
                                            <div class="input-group mb-3 color">
                                                <label class="input-group-text font color" for="inputGroupFile01">اختر</label>
                                                <input  type="file" name="photo" class="form-control color" id="inputGroupFile01">
                                            </div>

                                            <button type="submit" class="btn btn-success waves-effect waves-float waves-light font"> اضف منشور</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src=" {{asset('dashbord/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src=" {{asset('dashbord/app-assets/js/core/app-menu.js')}}"></script>
    <script src=" {{asset('dashbord/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src=" {{asset('dashbord/app-assets/js/scripts/pages/page-profile.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
