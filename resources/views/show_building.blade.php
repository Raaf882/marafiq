<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style')}}">
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
                <div class="card services-page--card">
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
                        <a href="{{route('building-details')}}" class="btn">تفاصيل اكثر</a>
                    </div>

                </div>
                <div class="card services-page--card">
                    <div class="services-page--img">
                        <img src="{{asset("img/stadium1.jpg")}}" alt="">
                    </div>
                    <div class="services-page--content">
                        <div class="services-page--desc">
                            <p class="title">المسرح</p>
                            <p class="desc">يستضيف المسرح احتفالاتكم وفعالياتكم بمرافق وخدمات تلبي دميع احتياجاتكم
                                <br><span>خدمة اضافية لهذه الباقة(موقف سيارة )</span>
                            </p>
                        </div>
                        <a href="{{route('building-details')}}" class="btn">تفاصيل اكثر</a>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="rooms container">
                <h1>مرافقنا</h1>
                <div class="rooms-cards">

                    <div class="rooms-card card">
                        <img src="{{asset("img/room1.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    <div class="rooms-card card">
                        <img src="{{asset("img/room2.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    <div class="rooms-card card">
                        <img src="{{asset("img/room3.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    <div class="rooms-card card">
                        <img src="{{asset("img/room4.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    <div class="rooms-card card ">
                        <img src="{{asset("img/room5.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>
                    <div class="rooms-card card">
                        <img src="{{asset("img/IMG_9637.jpg")}}" alt="" class="rooms-img">
                        <div class="rooms-desc">
                            <p class="title">القاعات</p>
                            <p> العديد من القاعات التفاعلية بمساحات مختلفة لجميع احتياجاتكم <br><br></p>
                            <a href="{{route('building-details')}}" class="btn rooms-btn">تفاصيل اكثر</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </body>
    @extends('footer')


</html>