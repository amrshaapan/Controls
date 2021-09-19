<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            margin: 0;
            /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; */
            /* font-size: 24px; */
            font-weight: 400;
            line-height: 1.5;
            color: #000000 !important;
            text-align: left;
            background-color: #fff;
        }

        @media print {
            @page {
                size: auto;
            }
        }

    </style>
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-print-none">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            طباعة الكشوف
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                            <router-link to="/print_committ_second">
                                <span class="dropdown-item">كشوف مناداة دور ثانى</span>
                            </router-link>
                            <router-link to="/print_student_by_school"><span class="dropdown-item">كشوف المراجعة</span>
                            </router-link>
                            <router-link to="/print_student_by_school"><span class="dropdown-item">كشوف ترصيد ارقام
                                    الجلوس</span>
                            </router-link>
                            <router-link to="/abs"><span class="dropdown-item">كشوف مراجعة الغياب</span>
                            </router-link>
                            <router-link to="/total"><span class="dropdown-item">كشوف مراجعة رصد الدرجات</span>
                            </router-link>
                            <router-link to="/checkSubjectgropuCount"><span class="dropdown-item">كشوف مراجعة عدد الورق
                                </span>
                            </router-link>
                            <router-link to="/print_subject_student"><span class="dropdown-item">نتيجة الراسبون A3
                                </span>
                            </router-link>
                            <router-link to="/SubjectStudents_A4"><span class="dropdown-item">نتيجة الراسبون A4
                                </span>
                            </router-link>
                            <router-link to="/CreateSittingStudents"><span class="dropdown-item">طباعة رقم الجلوس الدور
                                    الثانى
                                </span>
                            </router-link>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            طباعة النتيجة
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">



                            <router-link to="/print_final"><span class="dropdown-item">طباعة النتيجة الرقمية
                                </span>
                            </router-link>
                            <router-link to="/print_final_school"><span class="dropdown-item"> طباعة النتيجة الرقمية
                                    للمدارس
                                </span>
                            </router-link>
                            <router-link to="/print_stecker_A4_1_2"><span class="dropdown-item">طباعة ستيكر
                                    الشهادة</span>
                            </router-link>
                            <router-link to="/natega_success_2"><span class="dropdown-item">طباعة نتيجة الناجحون
                                    الدور الثانى</span>
                            </router-link>
                            <router-link to="/print_natega_faill_2"><span class="dropdown-item">طباعة نتيجة الراسبون
                                    الدور الثانى</span>
                            </router-link>
                        </div>
                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            طباعة الملصقات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <router-link to="/print_label_school"><span class="dropdown-item">ملصق المظروف للمدرسة
                                </span>
                            </router-link>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- <div class="d-print-none">


            <router-link to="/count"><span class="pcoded-mtext">بيان عدد الطلبة بالمدارس</span>
            </router-link>
            <router-link to="/count_committe_schools"><span class="pcoded-mtext">بيان عدد الطلبة باللجان</span>
            </router-link>
            ||
            <router-link to="/abs"><span class="pcoded-mtext">بيان عدد الطلبة باللجان</span>
            </router-link>
            <router-link to="/total"><span class="pcoded-mtext">total</span>
            </router-link>
            <router-link to="/check_student_query"><span class="pcoded-mtext">check-Student</span>
            </router-link>
            <router-link to="/print_student_by_school"><span class="pcoded-mtext">كشوف مراجعة</span>
            </router-link>
            <router-link to="/print_committ_second"><span class="pcoded-mtext">كشوف مناداة الدور الثانى</span>
            </router-link>
            <router-link to="/print_stecker_A4_1_2"><span class="pcoded-mtext">شهادات</span>
            </router-link>
        </div> --}}

        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script> --}}
</body>

</html>
