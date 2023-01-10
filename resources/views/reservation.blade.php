<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>Payment</title>
</head>


<body>
    @extends('header')


    @extends('layouts.app')

  
    <section class="vh-10" style="text-align: right" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="card-header"> انهاء الحجز</div>
                <div class="row g-0">
                  {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{asset("img/logo.png")}}"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div> --}}
                  <div class="">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <form action="{{route('reservation')}}" method="POST">
                            @csrf 
                            <div class="d-flex align-items-center mb-3 pb-1">
                              <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                              <span class="h1 fw-bold mb-0" style="color: #198754; text-align:  center;"> انهاء الحجز</span>
                            </div>
                                <div class="form-outline mb-4">
                                <label class="">نوع الحدث</label>
                                <br />
                                <label class="form-label" for="event_type">Event</label>
                                <input type="radio"  id="event_type" name="event_type" value="event">

                                <label class="form-label" for="camp">Camp</label>
                                <input type="radio" id="event_type" name="event_type" value="camp">

                                <label class="form-label" for="cource">Cuorces</label>
                                <input type="radio" id="event_type" name="event_type" value="cource">    
                                </div>
                               <div class="form-outline mb-4">
                                <label class="form-label">وصف الحدث </label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="3"></textarea>
                                </div>
                               <div class="form-outline mb-4">
                                <label class="form-label">وصف تفصيلي </label>
                                <textarea name="desc_details" class="form-control" id="desc_details" cols="30" rows="3"></textarea>
                                </div>
                              <!-- event desc -->
                                <div class="form-outline mb-4">
                                <label class="form-label"> عدد الحضور</label>
                                <br />
                             <label for="50" class="form-label">50</label>
                              <input type="radio" class="" id="50" name="geust_NO" value="50">
                              
                              <label for="100" class="form-label">100</label>
                              <input type="radio" class="" id="100" name="geust_NO" value="100">
                              
                              <label for="150" class="form-label">150</label>
                              <input type="radio" class="" id="150" name="geust_NO" value="150">
                              
                              <label for="200" class="form-label">200</label>
                              <input type="radio" class="" id="200" name="geust_NO" value="200">
                             </div>
                              
                              <!-- event time -->
                              {{-- <p class="title">الاوقات المتاحة </p> --}}
                              {{-- <input type="radio" id="morning" name="time" value="morning">
                                <label for="morning"> صباحا 8 - 2 ظهرا</label>
                              <input type="radio" id="evening" name="time" value="evening">
                                <label for="evening"> صباحا 8 - 2 ظهرا</label>
                              <input type="radio" id="allday" name="time" value="allday">
                                <label for="allday"> صباحا 8 - 2 ظهرا</label> --}}
                                  <!-- date time
                                  <p class="title">التواريخ المتاحة </p>
                                  <input type="radio" id="morning" name="time" value="morning">
                                    <label for="morning"> صباحا 8 - 2 ظهرا</label>
                                  <input type="radio" id="evening" name="time" value="evening">
                                    <label for="evening"> صباحا 8 - 2 ظهرا</label>
                                  <input type="radio" id="allday" name="time" value="allday">
                                    <label for="allday"> صباحا 8 - 2 ظهرا</label> -->
                                  <div class="form-outline mb-4">
                                    <p class="title">السعر</p>
                                    {{ $building->price }}  ر.س
                                   </div>

                                   <div class="form-outline mb-4">
                                    <label class="title">الدفع</label>
                                    <br />
                                      <label for="visa" class="form-label"><img src="{{asset("img/visa2.png")}}" class="logo text-sm text-gray-700 underline" alt="visa"></label>
                                      <input type="radio" class="" id="visa" name="pay_method" value="1">
                                       <label for="mastercard" class=""><img src="{{asset("img/credit-card.png")}}" class="logo text-sm text-gray-700 underline" alt="mastercard"></label>
                                      <input type="radio" class="" id="mastercard" name="pay_method" value="0">
                                  </div>
                                  
                                  <button class="btn btn-primary btn btn-white btn-lg btn-block"
                                   style="color:white; background-color: #198754" type="submit">حجز</button>
                          </form>
              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    

</body>

</html>