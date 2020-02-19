<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="{{mix('css/app.css')}}}">
    <link rel="stylesheet" href="{{mix('css/ui.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>

        Laravel

    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-dashboard" />


    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, now ui dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
    <meta name="description" content="Now UI Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Now Ui Dashboard by Creative Tim">
    <meta itemprop="description" content="Now UI Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/75/opt_nudp_thumbnail.jpg">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Now Ui Dashboard by Creative Tim">

    <meta name="twitter:description" content="Now UI Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/75/opt_nudp_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Now Ui Dashboard by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/now-ui-dashboard/examples/dashboard.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/75/opt_nudp_thumbnail.jpg"/>
    <meta property="og:description" content="Now UI Dashboard is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />

</head>

<body class="">
    @include('nabvar')

    <div class="main-panel" id="main-panel">
        @yield('content')
        
<script src="{{mix('js/app.js')}}}"></script>
<script src="{{mix('js/ui.js')}}}"></script>

</body>
