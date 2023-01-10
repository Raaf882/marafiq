<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>عرض المرافق</title>
</head>

<body>
    </head>

    <body>
@extends('header')


        <section>
            <div class="services-page container">
                <h1>خدمات مميزة</h1>
                <div class="card services-page--card" data-aos="fade-left" data-aos-duration="1000">
                    <div class="services-page--img">
                        <img src="{{asset("img/stage1.jpg")}}" alt="">
                    </div>
                    <div class="services-page--content">
                        <div class="services-page--desc">

                            <p class="title">المسرح</p>
                            <p class="desc">يستضيف المسرح احتفالاتكم وفعالياتكم بمرافق وخدمات تلبي دميع احتياجاتكم
                                <br><span>خدمة اضافية لهذه الباقة(موقف سيارة )</span>
                            </p>
                        </div>
                   
                    </div>

                </div>
                <div class="card services-page--card" data-aos="fade-left" data-aos-duration="1000">
                    <div class="services-page--img">
                        <img src="{{asset("img/stage8.jpg")}}" alt="">
                    </div>
                    <div class="services-page--content">
                        <div class="services-page--desc">

                            <p class="title">المتحف</p>
                            <p class="desc"> يستضيف المتحف عروضكم وانشطتكم احتفالاتكم وفعالياتكم بمرافق وخدمات تلبي دميع احتياجاتكم
                                <br><span>خدمة اضافية لهذه الباقة(موقف سيارة )</span>
                            </p>
                        </div>
           
                    </div>

                </div>
                <div class="card services-page--card" data-aos="fade-left" data-aos-duration="2000">
                    <div class="services-page--img">
                        <img src="{{asset("img/stadium1.jpg")}}" alt="">
                    </div>
                    <div class="services-page--content">
                        <div class="services-page--desc">

                            <p class="title">الملعب</p>
                            <p class="desc">يتيح لكم ممارسة التمارين او الالعاب الرياضيه او اقامة الحفلات او غيرها من العروض والمناسبات في الهواء الطلق  
                                <br><span>خدمة اضافية لهذه الباقة(موقف سيارة )</span>
                            </p>
                        </div>
                 
                    </div>

                </div>
                
                
            </div>
        </section>
        <section>
            <div class="rooms container">
                <h1 data-aos="fade-down" data-aos-duration="1000">مرافقنا</h1>
                <div class="rooms-cards">
                    @foreach($building ?? '' as $room)
                    <div class="rooms-card card">
                        <img src="{{$room->image}}" alt="" class="rooms-img">
                    @foreach($buildings as $room)
                    <div class="rooms-card card" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('img/')."/".$room->image }}" alt="" class="rooms-img">

                        <div class="rooms-desc">
                            <p class="title">{{$room->name}}</p>
                            <p>{{$room->description}}<br><br></p>
                            <a href="{{route('show-details',$room->id)}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    @endforeach
         

                </div>

            </div>
        </section>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
    </body>
    @extends('footer')


</html>