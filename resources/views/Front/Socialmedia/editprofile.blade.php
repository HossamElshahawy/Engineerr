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
    <title>انا مهندس - لوحه التحكم</title>
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
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <!-- END: Page CSS-->

 <!-- END: Page CSS-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/app-assets/css-rtl/custom-rtl.css')}}app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashbord/assets/css/style-rtl.css')}}assets/css/style-rtl.css">
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
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                 </ul>

            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{auth()->user()->name}}
                        </div><span class="avatar"><img class="round" src="{{asset('storage/profile_photo/'.$profile->image)}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item fontSize  " href="page-profile.html"><i class="me-50 " data-feather="user"></i> الصفحه الرئيسيه</a>

                </div>
            </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{asset('dashbord')}}app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="https://avatars.githubusercontent.com/u/106048522?v=4" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">   {{auth()->user()->name}}</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow color" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo">
                    <img src="{{asset('dashbord/app-assets/images/logo/logosm.svg')}}"  height="40" viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >

                        <h2 class="brand-text  font " style="font-size: medium; color:#058f00 ;"> انا مهندس</h2>
                        </span></a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item fontSize"><a class="d-flex align-items-center " href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">الصفحه الرئيسيه</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                    <ul class="menu-content">

                        <li class="active fontSize"><a class="d-flex align-items-center " href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">لوحه التحكم</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">الكورسات والمقالات </span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="compass"></i><span class="menu-title text-truncate" data-i18n="Email">الدورات و المقالات</span></a>
                    <ul class="menu-content">
                        <li class=" fontSize"><a class="d-flex align-items-center " href="../lms/courses.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">الدورات</span></a>
                        </li>

                        <li><a class="d-flex align-items-center fontSize" href="../lms/blogs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">المقالات</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="../lms/blogs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details"> المجلات</span></a>
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
                <li class=" navigation-header "><span data-i18n="Apps &amp; Pages" class="font">  حول الموقع </span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item fontSize"><a class="d-flex align-items-center" href="#"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="User">   حول الموقع</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="../lms/terms_and_conditions.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">الشروط والاحكام  </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="../lms/privacy-policy.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">سياسه الخصوصيه </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="../lms/pricing_table.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> خطط الاسعار</span></a>
                        </li>


                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">


            </div>
            <div class="col-12 font">
                <ul class="nav nav-pills mb-2">
                    <!-- account -->
                    <li class="nav-item">
                        <a class="nav-link active" href="page-account-settings-account.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="fw-bold">اعدادات الحساب</span>
                        </a>
                    </li>
                    <!-- security -->
                    <li class="nav-item">
                        <a class="nav-link" href="edits_security_profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock font-medium-3 me-50"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <span class="fw-bold">الامان</span>
                        </a>
                    </li>
 
                </ul>


                <!-- profile -->
                <div class="card font">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">البيانات الشخصيه</h4>
                    </div>
                    <form action="{{route('update_profile',$profile->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="card-body py-2 my-25">
                        <!-- header section -->

                            <div class="d-flex">
                                <img src="{{asset('storage/profile_photo/'.$profile->image)}}" name="image" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                <!-- upload and reset button -->
                                <div class="d-flex align-items-end mt-75 ms-1">
                                    <div>
                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">رفع</label>
                                        <input type="file" name="image" id="account-upload" hidden="" accept="image/*">

                                        <p class="mb-0">نحن ندعم صيغ : png, jpg, jpeg.</p>
                                    </div>
                                </div>
                            </div>

                        <div class="d-flex">
                            <img src="{{asset('storage/cover_photo/'.$profile->profile_cover)}}" name="profile_cover" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                            <!-- upload and reset button -->
                            <div class="d-flex align-items-end mt-75 ms-1">
                                <div>
                                    <label for="account-upload2" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">رفع</label>
                                    <input type="file" name="profile_cover" id="account-upload2" hidden="" accept="image/*">

                                    <p class="mb-0">نحن ندعم صيغ : png, jpg, jpeg.</p>
                                </div>
                            </div>
                        </div>




                            <!--/ header section -->

                            <!-- form -->


                            <form class="validate-form mt-2 pt-50" novalidate="novalidate">
                                <div class="row">

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="facebook">facebook </label>
                                        <input type="text" class="form-control" name="facebook"  value="{{old('facebook',$profile->facebook)}}">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="twitter">twitter </label>
                                        <input type="text" class="form-control" name="twitter"  value="{{old('twitter',$profile->twitter)}}">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="linkedin">linkedin </label>
                                        <input type="text" class="form-control" name="linkedin"  value="{{old('linkedin',$profile->linkedin)}}">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="job">مكان العمل</label>
                                        <input type="text" class="form-control" id="job" name="job" value="{{old('job',$profile->job)}}">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="phone">رقم الهاتف</label>
                                        <input type="text" class="form-control account-number-mask"  name="phone"  value="{{old('phone',$profile->phone)}}">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="city">العنوان</label>
                                        <input type="text" class="form-control"  name="city" value="{{old('city',$profile->city)}}">
                                    </div>



                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">حفظ التغيرات</button>
                                        {{--                                    <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">حذف</button>--}}
                                    </div>
                                </div>
                            </form>


                        <!--/ form -->
                    </div>
                    </form>

                </div>

                <!-- deactivate account  -->

                </div>
                <!--/ profile -->
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
    </div>
</body>
<!-- END: Body-->

</html>
