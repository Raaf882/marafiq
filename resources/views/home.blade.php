<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>مرافق</title>
</head>

<body>
    </head>

    <body>
@extends('header')


        <!-- home section -->
        <section id="home" style="background-color: #FAFBFA;">
            <div class=" home container">

                <div class="home-content">
                    <h1 class="heading">مرافق للتأجير </h1>
                    <p class="title"><b>مساحات </b>استثنائية-لفعاليات حصرية </p>
                    <a class="btn submit" href="{{url('/show_building')}}"> احجز الان</a>
                </div>
                <div class="home-img">
                    <img src="img/home-img.png" alt="home image">
                </div>
            </div>
        </section>

        <script src="main.js"></script>
        <!-- about us -->
        <section id="about">
            <div class="aboutUs container">

                <div class="aboutUs-card">
                    <h1>من نحن</h1>
                    <p>نقدم العديد من المرافق المتنوعة والحديثة المتاحة للحجز والاستئجار اصنعوا مساحاتكم هنا حيث نضمن
                        راحتكم مع العديد من الخدمات </p>

                    <a class="btn submit" href="{{url ('/show_building')}}"> احجز الان</a>
                </div>
                <div class="video-card card">
                    <img src="/img/logo.png" alt="">
                </div>
            </div>
        </section>
        <!-- services -->
        <section id="service">
            <div class="services container">
                <h1>نقدم لكم</h1>
                <div class="services-cards">
                    <div class="service-card card">
                        <i class="ri-lightbulb-flash-line"></i>
                        <p>مرافق عالمية وملاعب</p>
                    </div>
                    <div class="service-card card">
                        <i class="ri-lightbulb-flash-line"></i>
                        <p>مرافق عالمية وملاعب</p>
                    </div>
                    <div class="service-card card">
                        <i class="i-s ri-lightbulb-flash-line"></i>
                        <p><b>مرافق عالمية وملاعب</b> </p>
                    </div>
                </div>
                <p class="title">مرافق عالمية لأفكار استثنائية</p>
                <a class="btn submit" href="{{url('/show_building')}}"> احجز الان</a>
            </div>
        </section>
    </body>


</html>