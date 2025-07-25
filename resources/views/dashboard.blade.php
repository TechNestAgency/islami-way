<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets') }}"
    data-template="front-pages-no-customizer">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="Most Powerful & Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->
    <title>Quran Way</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page.css')}}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-landing.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css"/>
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/front-config.js')}}"></script>
    <style>
        #enrolls-table {
            border-collapse: collapse; /* This is needed to display borders around cells */
        }

        #enrolls-table th, #enrolls-table td {
            border: 1px solid #d2d2d2; /* Change this to your preferred border style */
        }
    </style>
</head>

<body>
<script src="{{asset('assets/vendor/js/dropdown-hover.js')}}"></script>
<script src="{{asset('assets/vendor/js/mega-dropdown.js')}}"></script>


<div data-bs-spy="scroll" class="scrollspy-example">
    <div class="d-flex align-items-center justify-content-center">
        <img src="{{asset('logo.png')}}" style="width: 15%">
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <h3>طلبات التسجيل</h3>
    </div>
    <div class="d-flex align-items-center justify-content-center container">
        <table id="enrolls-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Message</th>
                <th>Student Age</th>
                <th>Student Gender</th>
                <th>Teacher Gender</th>
                <th>Package</th>
                <th>Days</th>
                <th>Date & Time</th>
            </tr>
            </thead>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
        <script>
            $(function() {
                $('#enrolls-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('enrolls') }}', // Update this to the route for fetching enrolls data
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'course', name: 'course' },
                        { data: 'message', name: 'message' },
                        { data: 'student_age', name: 'student_age' },
                        { data: 'student_gender', name: 'student_gender' },
                        { data: 'teacher_gender', name: 'teacher_gender' },
                        { data: 'package', name: 'package' },
                        { data: 'days', name: 'days' },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            render: function(data, type, row) {
                                return new Date(data).toLocaleString();
                            }
                        },
                    ]
                });
            });
        </script>
    </div>



</div>

<!-- / Sections:End -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/front-main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/front-page-landing.js')}}"></script>
</body>
</html>
