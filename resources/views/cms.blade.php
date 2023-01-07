<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Payment</title>
</head>

<body>
    @extends('header')
    <section>
        <div class="container payment">
            <h1> انشاء مرفق</h1>
            <form action="" method="post">
                <!-- @csrf -->
              
                <p class="title">نوع المرفق</p>

                  <input type="radio" id="stage" name="roomType" >
                  <label for="stage">المسرح</label>

                <input type="radio" id="stidum" name="roomType">
                  <label for="stidum">الملعب</label>
                <input type="radio" id="hall" name="stidum">
                  <label for="hall">قاعة</label>

                <!-- event desc -->
                <p class="title">وصف المرفق </p><br>

                <textarea name="roomDesc" id="roomtDesc" cols="60" rows="3"></textarea><br><br>
                <p class="title">وصف  تفصيلي للمرفق </p><br>

                <textarea name="roomDescdetails" id="roomDescdetails" cols="60" rows="6"></textarea><br><br>
                 <label for="post">ارفاق صورة رئيسية</label> <input type="file" name="post" id="post">
              
                 <label for="images">ارفاق صور تفصيلية</label> <input type="file" name="images" id="images">
              <br><br>
                
                    <label for="cource">عدد الحضور تقريبا</label>
                  <select name="geustNo" >
                      <option value="over-20">أكثر من 20</option>
                      <option value="over-50">أكثر من 50</option>
                      <option value="over-100">أكثر من 100</option>
                      <option value="over-1000">أكثر من 1000</option>
                  </select>

                <!-- event time -->
                <p class="title">الاوقات المتاحة </p>
           
                <input type="checkbox" name="morning" id="morning" value="morning">
                  <label for="morning"> صباحا 8 - 2 ظهرا</label>
                <input type="checkbox" id="evening" name="evening" value="evening">
                  <label for="evening"> صباحا 8 - 2 ظهرا</label>
                <input type="checkbox" id="allday" name="allday" value="allday">
                  <label for="allday"> صباحا 8 - 2 ظهرا</label>
                  {{-- date time --}}
                    <p class="title">التواريخ المتاحة </p> 
                    <input type="date" id="date" >
                    <label for="date">اضافة تاريخ</label><br><br>
           <button type="submit" class="btn">اضافة مرفق</button>
            </form>
        </div>
    </section>

</body>

</html>