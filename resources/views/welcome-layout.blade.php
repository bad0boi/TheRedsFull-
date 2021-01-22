<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Ryan Kearney , B00709595 , COM559-->



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--SCRIPTS-->
    <script src="{{ asset('js/app.js') }}" defer></script> <!--Initially from the layouts.app-->
    <!--STYLING-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!--Initially from the layouts.app-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="css/default.css" rel="stylesheet"/>
    <link href="css/fonts.css" rel="stylesheet"/>


    <style>

        html, body {
            /*background-color: #f7f7f7;*/
            background-image: url("/images/index-bcg.svg");
            background-repeat: no-repeat;
            position: center;
            background-size: cover;
            color: #ffffff;
            font-family: 'Open Sans', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .news-container {
            background-color: #ffffff;
            padding: 5%;
            margin: 5%;
        }

        input {
            ont-size: 13px;
            height: 25px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 300px;
            border: none;
            outline: none;
            border-bottom: 1px solid #B1B1B1;
            color: black;
            font-weight: bold;
            background: rgba(0,0,0,0);
            opacity: 0.5;
            transition: 0.2s ease;
        }




        p { color: #000000;}

        #welcomeInfo {
            font-family: 'Open Sans', sans-serif;
            color: #ffffff;
            font-size: 15px;
            text-align: center;
            max-height: 50px;


        }

        #logRegContainer {
            color: black;

        }

        h1, h2, h3 {
            color: black;

        }


        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;

        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: black;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .proto-logo {
            background-image: url("resources/imgs/logo3.png");
        }


    </style>


</head>
<body>
@yield('welcome')
@yield('content')

</body>
</html>
