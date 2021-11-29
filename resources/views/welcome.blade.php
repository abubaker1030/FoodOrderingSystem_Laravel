<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Welcome
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<main class="l-main">
    <!--===== HOME =====-->
    <section class="home" id="home">
        <div class="home__container bd-grid">
            <div class="home__img">
                <img src="assets/img/img1.png" alt="" data-speed="-2" class="move">
                <img src="assets/img/img2.png" alt="" data-speed="2" class="move">
                <img src="assets/img/img3.png" alt="" data-speed="2" class="move">
                <img src="assets/img/img4.png" alt="" data-speed="-2" class="move">
                <img src="assets/img/img5.png" alt="" data-speed="-2" class="move">
                <img src="assets/img/img6.png" alt="" data-speed="2" class="move">
            </div>

            <div class="home__data">
                <h2>Food<br> ManagementOrdering System</h2>
                <p class="home__description">Let's help discover the best food.</p>
                <a href="/login" class="home__button">Admin Dashboard</a>
                <a href="/customerlogin" class="home__button">Customer Dashboard</a>
            </div>
        </div>
    </section>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="{{asset('admin/js/jquery.min.js')}}" defer></script>
<script src="{{asset('admin/js/popper.min.js')}}" defer></script>
<script src="{{asset('admin/js/bootstrap-material-design.min.js')}}" defer></script>
<script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}" defer></script>

@yield('script')


</html>
