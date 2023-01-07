<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>مرافق</title>
</head>

<body>
    @extends('header')

    <body>

        <section>

            <div class="container ">
                <h1> تفاصيل الحجز</h1>
                <div class="card">
                    <div class="container-pic">
                        <div class="panel active" style="background-image: url('/img/logo.png')">

                        </div>
                        <div class="panel"
                            style="background-image: url('https://images.unsplash.com/photo-1572276596237-5db2c3e16c5d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">

                        </div>
                        <div class="panel"
                            style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80')">

                        </div>
                        <div class="panel"
                            style="background-image: url('https://images.unsplash.com/photo-1551009175-8a68da93d5f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80')">

                        </div>
                        <div class="panel"
                            style="background-image: url('https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">

                        </div>
                    </div>
                    <div class="booking-content">
                        <p class="title">المسرح</p>
                        <p>Lorem ipsum dolor,Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora pariatur,
                            quidem consequuntur est deserunt aperiam placeat. Quam repellendus, aliquam totam cumque
                            assumenda, ut minima consectetur, voluptatibus ad nihil libero quis! sit amet consectetur
                            adipisicing elit. Assumenda ratione eius dolorem sequi, vero atque minima repudiandae,
                            corporis
                            accusantium commodi doloribus, at molestias enim hic quo rerum quos qui ut!</p>
                        <div class="more-content">
                            <div class="more-content-i">
                                <i class="ri-map-pin-fill">الموقع</i>
                                <i class="ri-fullscreen-line">المساحة</i>
                            </div>
                            <a class="btn submit" href=""> احجز الان</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
@extends('footer')

</html>