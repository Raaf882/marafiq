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


    <section>
        <div class="container payment">
            <h1>انهاء الحجز</h1>
            <form action="{{route('reservation')}}" method="POST">
              @csrf 
              
                <p class="title">نوع الحدث</p>

                  <input type="radio" id="event_type" name="event_type" value="event">
                  <label for="event_type">event</label>

                <input type="radio" id="event_type" name="event_type" value="camp">
                  <label for="camp">event</label>
                <input type="radio" id="event_type" name="event_type" value="cource">
                  <label for="cource">cuorces</label>
                <p class="title">وصف الحدث </p>


                <textarea name="description" id="description" cols="30" rows="3"></textarea><br>


                <!-- event desc -->
                <p class="title">وصف تفصيلي </p>

              <textarea name="desc_details" id="desc_details" cols="30" rows="3"></textarea><br>
              
              
                <p class="title"> عدد الحضور</p>

                <input type="radio" id="50" name="geust_NO" value="50">
                <label for="50">50</label>

              <input type="radio" id="100" name="geust_NO" value="100">
                <label for="100">100</label>
              <input type="radio" id="200" name="geust_NO" value="200">
                <label for="200">200</label>

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
                    <p class="title">السعر</p>


                    <p class="title">الدفع</p>
                    <input type="radio" id="visa" name="pay_method" value="1">
                      <label for="visa">Visa</label>
                    <input type="radio" id="mastercard" name="pay_method" value="0">
                      <label for="mastercard">  Master card</label>
                    <button class="btn" type="submit">حجز</button>
            </form>
        </div>
    </section>

</body>

</html>