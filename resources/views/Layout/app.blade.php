<!DOCTYPE html>
<html lang="en-US"><!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">

    <!-- Title -->
    <title>Medicalpress | Just another Website</title>

    <!-- Define a viewport to mobile devices to use - telling the browser to assume that the page is as wide as the device (width=device-width) and setting the initial page zoom level to be 1 (initial-scale=1.0) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon-new.png">

    <!-- Google Web Font -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,800,900,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Include the bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" media="all">
    <!-- Flexslider stylesheet -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="all">
    <!-- Animations stylesheet -->
    <link rel="stylesheet" href="{{asset('css/animations.css')}}" type="text/css" media="all">
    <!-- Awesome Font stylesheet -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css" media="all">
    <!-- Datepciker stylesheet -->
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}" type="text/css" media="all">
    <!-- Swipebox stylesheet -->
    <link rel="stylesheet" href="{{asset('css/swipebox.css')}}" type="text/css" media="all">
    <!-- meanmenu stylesheet -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}" type="text/css" media="all">
    <!-- Include the site main stylesheet -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css" media="all">
    <!-- Include the site ressponsive  stylesheet -->
    <link rel="stylesheet" href="{{asset('css/custom-responsive.css')}}" type="text/css" media="all">


    <!--[if lt IE 9]>
{{--<!--    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->--}}
{{--<!--    <script src="js/respond.min.js"></script>-->--}}
    <![endif]-->
</head>

<body>
@include('Layout.header')

@yield('content')



<a href="#top" id="scroll-top"></a>

<script type='text/javascript' id='quick-js'></script>
<script type='text/javascript' src='{{asset('js/jquery-2.2.3.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.flexslider-min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.swipebox.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.isotope.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.appear.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.ui.core.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.ui.datepicker.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.validate.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.form.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.autosize.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.meanmenu.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.velocity.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery-twitterFetcher.js')}}'></script>
<script type='text/javascript' src='{{asset('js/respond.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery-migrate-1.2.1.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/custom.js')}}'></script>

</body>
</html>
