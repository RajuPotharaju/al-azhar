<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="description" content="">
        <link rel="canonical" href="http://www.alazharhospitals.com/" />
        <title>{{ config('app.name', 'Al Azhar Hospital - Riyadh, KSA') }}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/imgs/favicon.ico')}}">
        <meta property="og:type" content="article" />
    
        <!-- META: TITLE OF YOUR POST OR PAGE -->
        <meta property="og:title" content="" /> 
    
        <!-- META: DESCRIPTION OF PAGE CONTENT -->
        <meta property="og:description" content="DESCRIPTION OF PAGE CONTENT" />
        <meta property="og:image" content="{{asset('public/imgs/logo.png')}}" />
        <meta property="og:url" content="http://www.alazharhospitals.com/" />
        <meta property="og:site_name" content="Al Azhar Hospital" />
    
    
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Cairo:300,400,700|Tajawal:300,400,700&amp;subset=arabic" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/fonts/flaticon/font/flaticon.css')}}">

        <!-- Laravel Javascript Validation -->
        <script type="text/javascript" src="{{ asset('public/js/jsvalidation.js')}}"></script>
<body>
        @include('layouts.header')
        @include('layouts.nav')
            <!-- Page Content -->
    <section class="p-0">
        <div class="section-container container">
            <div class="section-banner section-about text-white">
                <div class="section-overlay"></div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Al Azhar Hospital Profile</h1>
                        <h4 class="section-para">About Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-head">
                        <h2>About Al Azhar Hospital</h2>
                    </div>
                    <div class="para pt-4">
                        <p>Al Azhar General Hospital is utilizing the national healthcare delivery system entrusted with the provision of preventive and curative healthcare for the Kingdom's population.</p>
                        <p>It is situated in Riyadh City, Central Region of Saudi Arabia. Certified for fifty (50) beds, the institution serves the people of Riyadh and its neighboring towns.</p>
                        <p>The institution's plan for providing patient care was developed in collaboration with organizational leaders and department directors/heads. Development of the plan involved consideration of the following:</p>
                        
                        <ul>
                            <li>the units, areas, and departments of the organization involved in the provision of patient care;</li>
                            <li>the methods/processes used in each units, area, or department to identify patient's care needs;</li>
                            <li>the staffing requirement in each unit, area, or department to provide for patient's needs;</li>
                            <li>the process used for assisting and acting on positive and negative staffing variances; and</li>
                            <li>the plan for improving the quality of care in the unit, area, or department.</li>
                            <li>The organization's plan for providing patient care will be reviewed at least annually, and as necessary, revised. Significant changes in patient care needs or the findings from performance improvement activities may necessitate review and revision of the plan. The plan will be integrated with the organization's budget process.</li>
                        </ul> 
                    </div>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="page-image mt-5">
                        <img src="https://via.placeholder.com/400x500" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page Content -->
            @include('layouts.footer')
</body>

</html>
