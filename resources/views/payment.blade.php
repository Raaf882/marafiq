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
    <section>
        <div class="container payment">
            <h1>انهاء الحجز</h1>
            <form action="" method="post">
                <!-- @csrf -->
              
                <p class="title">نوع الحدث</p>

                  <input type="radio" id="events" name="eventType" value="event">
                  <label for="event">event</label>

                <input type="radio" id="camp" name="eventType" value="camp">
                  <label for="camp">event</label>
                <input type="radio" id="cource" name="eventType" value="cource">
                  <label for="cource">cuorces</label>

                <!-- event desc -->
                <p class="title">وصف الحدث </p>

              <textarea name="eventDesc" id="eventDesc" cols="30" rows="3"></textarea>
              
                  <label for="cource">عدد الحضور تقريبا</label>
                <select name="geustNo" >
                    <option value="over-20">Over 20</option>
                    <option value="over-50">Over 50</option>
                    <option value="over-100">Over 100</option>
                    <option value="over-1000">Over 1000</option>
                </select>

                <!-- event time -->
                <p class="title">الاوقات المتاحة </p>
                <input type="radio" id="morning" name="time" value="morning">
                  <label for="morning"> صباحا 8 - 2 ظهرا</label>
                <input type="radio" id="evening" name="time" value="evening">
                  <label for="evening"> صباحا 8 - 2 ظهرا</label>
                <input type="radio" id="allday" name="time" value="allday">
                  <label for="allday"> صباحا 8 - 2 ظهرا</label>
                    <!-- date time
                    <p class="title">التواريخ المتاحة </p>
                    <input type="radio" id="morning" name="time" value="morning">
                      <label for="morning"> صباحا 8 - 2 ظهرا</label>
                    <input type="radio" id="evening" name="time" value="evening">
                      <label for="evening"> صباحا 8 - 2 ظهرا</label>
                    <input type="radio" id="allday" name="time" value="allday">
                      <label for="allday"> صباحا 8 - 2 ظهرا</label> -->


                    <p class="title">الدفع</p>
                    <input type="radio" id="visa" name="payment" value="visa">
                      <label for="payment">Visa</label>
                    <input type="radio" id="mastercard" name="paymeny" value="mastercard">
                      <label for="payment">  Master card</label>
                    <button class="btn" type="submit">حجز</button>
            </form>
        </div>
    </section>

</body>

</html>