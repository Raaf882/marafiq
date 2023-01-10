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
                        @foreach($building->images as $img)
                        <div class="panel active" style="background-image: url({{ asset('img/')."/".$img->imageFile }})">

                        </div>
                        @endforeach
                    
                    </div>
                  
                    <div class="booking-content">
                        <p class="title">{{$building->name}}</p>
                        <p>{{ $building->desc_details }}</p>
                        <p>{{ $building->price }}</p>
                        <div class="more-content">
                            <div class="more-content-i">
                                <i class="ri-map-pin-fill">الموقع</i>
                                <i class="ri-fullscreen-line">المساحة</i>
                            </div>
                            <a class="btn submit" href="{{route('showReservation')}}"> احجز الان</a>
                        </div>
                    </div>
            
                </div>
            </div>
        </section>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
@extends('footer')

</html>