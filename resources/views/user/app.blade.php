<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>محافظة شمال سيناء( الكنترول )</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <meta name="csrf-token" content="LtvD5R6Tu98hPHn1chzg5RuRYtLSsuETDcqn3XC6">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">


    {{-- <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet"> --}}


    <link rel="icon" href="{{ asset('front-end/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href=" https://printjs-4de6.kxcdn.com/print.min.css" type="image/x-icon">



    {{-- <link href="../../../fonts.googleapis.com/css3b0a.css?family=Open+Sans:400,600,800" rel="stylesheet"> --}}

    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/css/bootstrap_rtl.css')}}"> --}}

    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/pages/prism/prism.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/assets/pages/chart/radial/css/radial.css') }}">

</head>
<style>
    .pcoded[theme-layout="vertical"][vertical-placement="right"][vertical-nav-type="expanded"][vertical-effect="shrink"] .pcoded-content {
        margin-right: 0px !important;
    }

</style>
{{-- <style>
    * {
        font-family: 'Tajawal', sans-serif !important;
    }

</style> --}}

<body>
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header d-print-none">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu"></i>
                            </a>
                            <a href="../index.html">
                                {{-- <img class="img-fluid" src="{{ asset('front-end/assets/images/logo.png') }}" --}}
                                {{-- alt="Theme-Logo" /> --}}
                                Control
                            </a>
                            <a class="mobile-options">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>

                        <div class="navbar-container">
                            <ul class="nav-left">
                                <li class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-addon search-close"><i
                                                    class="feather icon-x"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon search-btn"><i
                                                    class="feather icon-search"></i></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="feather icon-maximize full-screen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-bell"></i>
                                            <span class="badge bg-c-pink">5</span>
                                        </div>
                                        <ul class="show-notification notification-view dropdown-menu"
                                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius"
                                                        src="{{ asset('front-end/assets/images/avatar-4.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Amr Badawy</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer
                                                            elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius"
                                                        src="{{ asset('front-end/assets/images/avatar-3.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Joseph William</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer
                                                            elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius"
                                                        src="{{ asset('front-end/assets/images/avatar-4.jpg') }}"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Sara Soudein</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer
                                                            elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-message-square"></i>
                                            <span class="badge bg-c-green">3</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ asset('front-end/assets/images/avatar-4.jpg') }}"
                                                class="img-radius" alt="User-Profile-Image">
                                            <span>Amr Badawy</span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu"
                                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="#!">
                                                    <i class="feather icon-settings"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="feather icon-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="feather icon-mail"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html">
                                                    <i class="feather icon-lock"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-normal-sign-in.html">
                                                    <i class="feather icon-log-out"></i> Logout
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-main-container">
                    {{-- <div class="d-print-none" style="height: 56px">6565656565656565656565656565</div> --}}
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar d-print-none">
                            <div class="pcoded-inner-navbar main-menu">
                                {{-- <div class="pcoded-navigatio-lavel">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="../index.html">
                                                    <span class="pcoded-mtext">Default</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="dashboard-crm.html">
                                                    <span class="pcoded-mtext">CRM</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dashboard-analytics.html">
                                                    <span class="pcoded-mtext">Analytics</span>
                                                    <span class="pcoded-badge label label-info ">NEW</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu  ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Page layouts</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-mtext">Vertical</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-static.html">
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-header-fixed.html">
                                                            <span class="pcoded-mtext">Header Fixed</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-compact.html">
                                                            <span class="pcoded-mtext">Compact</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-sidebar.html">
                                                            <span class="pcoded-mtext">Sidebar Fixed</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-mtext">Horizontal</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-horizontal-static.html" target="_blank">
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-fixed.html" target="_blank">
                                                            <span class="pcoded-mtext">Fixed layout</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon.html" target="_blank">
                                                            <span class="pcoded-mtext">Static With Icon</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon-fixed.html" target="_blank">
                                                            <span class="pcoded-mtext">Fixed With Icon</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-bottom.html">
                                                    <span class="pcoded-mtext">Bottom Menu</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <router-link to="/test">test</router-link>

                                                <a href="box-layout.html" target="_blank">
                                                    <span class="pcoded-mtext">Box Layout</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="menu-rtl.html" target="_blank">
                                                    <span class="pcoded-mtext">RTL</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="navbar-light.html">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Navigation</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                            <span class="pcoded-mtext">Widget</span>
                                            <span class="pcoded-badge label label-danger">100+</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="widget-statistic.html">
                                                    <span class="pcoded-mtext">Statistic</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="widget-data.html">
                                                    <span class="pcoded-mtext">Data</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="widget-chart.html">
                                                    <span class="pcoded-mtext">Chart Widget</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul> --}}
                                <div class="pcoded-navigatio-lavel">اعمال المراجعات</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                            <span class="pcoded-mtext">استلام اﻻستمارات</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class="">
                                                <router-link to="/review"> <span class="pcoded-mtext">مراجعة
                                                        اﻻستمارة</span>
                                                </router-link>
                                            </li>
                                            <li class="">
                                                <router-link to="/checkSubjectFail"> <span class="pcoded-mtext">مراجعة
                                                        تظلم</span>
                                                </router-link>
                                            </li>
                                            <li class="">
                                                <a href="chart-c3.html">
                                                    <span class="pcoded-mtext">طباعة محضر اﻻستلام</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>

                                <div class="pcoded-navigatio-lavel">المطبوعات</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                            <span class="pcoded-mtext">مطبوعات الكنترول</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <router-link to="/printCommitt" target="_blank"><span
                                                        class="pcoded-mtext">رصد رقم الجلوس</span>
                                                </router-link>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                            <span class="pcoded-mtext">مطبوعات اللجان</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class=" ">
                                                <a href="x-editable.html">
                                                    <span class="pcoded-mtext">X-Editable</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>

                                <div class="pcoded-navigatio-lavel">اعمال رصد الدرجات</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                            <span class="pcoded-mtext">رصد درجات المواد</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">

                                                <router-link to="/subject"><span class="pcoded-mtext">رصد جميع
                                                        المواد</span>
                                                </router-link>


                                            </li>
                                            <li class=" ">

                                                <router-link to="/student_abs"><span class="pcoded-mtext">رصد غياب
                                                        الطلاب</span>
                                                </router-link>


                                            </li>

                                        </ul>
                                    </li>

                                    <!-- <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                                        <span class="pcoded-mtext">Handson Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.html">
                                                <span class="pcoded-mtext">Appearance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.html">
                                                <span class="pcoded-mtext">Data Operation</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.html">
                                                <span class="pcoded-mtext">Rows Columns</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.html">
                                                <span class="pcoded-mtext">Columns Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.html">
                                                <span class="pcoded-mtext">Cell Features</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.html">
                                                <span class="pcoded-mtext">Cell Types</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.html">
                                                <span class="pcoded-mtext">Integrations</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.html">
                                                <span class="pcoded-mtext">Rows Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.html">
                                                <span class="pcoded-mtext">Utilities</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.html">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Editable Table</span>
                                    </a>
                                </li> -->
                                </ul>

                                <div class="pcoded-navigatio-lavel">اعدادات البرنامج</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                            <span class="pcoded-mtext">اعدادات الترقيم</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="auth-normal-sign-in.html" target="_blank">
                                                    <span class="pcoded-mtext">رقم الجلوس</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <router-link to="/Re_number"><span class="pcoded-mtext">
                                                        الرقم السرى</span>
                                                </router-link>

                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                        <span class="pcoded-mtext">Maintenance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.html">
                                                <span class="pcoded-mtext">Error</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.html">
                                                <span class="pcoded-mtext">Comming Soon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.html">
                                                <span class="pcoded-mtext">Offline UI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">User Profile</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="timeline.html">
                                                <span class="pcoded-mtext">Timeline</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="timeline-social.html">
                                                <span class="pcoded-mtext">Timeline Social</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-profile.html">
                                                <span class="pcoded-mtext">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-card.html">
                                                <span class="pcoded-mtext">User Card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">E-Commerce</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="product.html">
                                                <span class="pcoded-mtext">Product</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-list.html">
                                                <span class="pcoded-mtext">Product List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-edit.html">
                                                <span class="pcoded-mtext">Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-detail.html">
                                                <span class="pcoded-mtext">Product Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-cart.html">
                                                <span class="pcoded-mtext">Product Card</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-payment.html">
                                                <span class="pcoded-mtext">Credit Card Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                        <span class="pcoded-mtext">Email</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.html">
                                                <span class="pcoded-mtext">Compose Email</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.html">
                                                <span class="pcoded-mtext">Inbox</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.html">
                                                <span class="pcoded-mtext">Read Mail</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Email Template</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="/extra-pages/email-templates/email-welcome.html">
                                                        <span class="pcoded-mtext">Welcome Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/extra-pages/email-templates/email-password.html">
                                                        <span class="pcoded-mtext">Reset Password</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/extra-pages/email-templates/email-newsletter.html">
                                                        <span class="pcoded-mtext">Newsletter Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/extra-pages/email-templates/email-launch.html">
                                                        <span class="pcoded-mtext">App Launch</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="/extra-pages/email-templates/email-activation.html">
                                                        <span class="pcoded-mtext">Activation Code</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                </ul>

                            </div>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 ">
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">

                                    <!-- Main-body start -->
                                    <div class="main-body">
                                        <div class="page-wrapper">
                                            <!-- Page-header start -->
                                            <div class="page-header horizontal-layout-icon menu-rtl">
                                                <div class="row ">

                                                    <div class="col-lg-12">
                                                        <div class="col-sm-12 col-xl-12 m-b-30">

                                                            {{-- start content --}}

                                                            @yield('content')
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Page-header end -->

                                            <!-- Page body start -->

                                            <!-- Page body end -->
                                        </div>
                                    </div>
                                    <!-- Main-body end -->

                                    <!-- <div id="styleSelector">

                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-print-none">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>








    <script type="text/javascript" src="{{ asset('front-end/bower_components/jquery/dist/jquery.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/jquery-ui/jquery-ui.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/popper.js/dist/umd/popper.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('front-end/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('front-end/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/assets/pages/prism/custom-prism.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/i18next/i18next.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('front-end/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('front-end/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('front-end/bower_components/jquery-i18next/jquery-i18next.min.js') }}">
    </script>
    <script src="{{ asset('front-end/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/menu/menu-rtl.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/assets/js/script.js') }}"></script>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
</body>











</html>
