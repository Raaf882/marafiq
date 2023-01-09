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

  @extends('layouts.app')

  
  <section class="vh-10" style="text-align: right" >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-header">إنشاء المرفق</div>
              <div class="row g-0">
                {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="{{asset("img/logo.png")}}"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div> --}}
                <div class="">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form action="{{route('store-data')}}" method="post" enctype="multipart/form-data">
                      @csrf 
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0" style="color: #198754; text-align:  center;">إنشاء المرفق</span>
                      </div>
                      <div class="form-outline mb-4">
                        <label for="name" class="form-label">اسم المرفق</label>  
                        <input type="text" id="name" name="name" class="form-control" >
                      </div>
            

                     {{--   <input type="radio" id="stage" name="roomType" >
                       <label for="stage">المسرح</label>
     
                     <input type="radio" id="stidum" name="roomType">
                       <label for="stidum">الملعب</label>
                     <input type="radio" id="hall" name="stidum">
                       <label for="hall">قاعة</label> --}}
     
                     <!-- event desc -->
                     <div class="form-outline mb-4">
                       <label for="description" class="form-label">وصف المرفق</label>
                       <textarea name="description" id="description" cols="60" rows="3" class="form-control"></textarea>
                     </div>
                     <div class="form-outline mb-4">
                     <label for="description" class="form-label">وصف تفصيلي المرفق</label>
                     <textarea name="desc_details" id="desc_details" cols="60" rows="6" class="form-control"></textarea>
                     </div>
                     <div class="form-outline mb-4">
                      <label for="price" class="form-label"><span>السعر</span></label>
                      <input type="number" id="price" name="price" min="100" step="20"class="form-control">
                     </div>
                     <div class="form-outline mb-4">
                      <label class="form-label">Choose Images</label>
                      <input type="file"  name="image" class="form-control">
     
                      <label class="form-label">Choose Images</label>
                      <input type="file"  name="img[]" class="form-control" multiple >
                     </div>
                     
                       {{--   <label for="cource">عدد الحضور تقريبا</label>
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
                         {{-- <p class="title">التواريخ المتاحة </p> 
                         <input type="date" id="date" >
                         <label for="date">اضافة تاريخ</label><br><br> --}} 
                          <button type="submit" class="btn btn-primary btn btn-white btn-lg btn-block"
                           type="button" style="color:white; background-color: #198754">اضافة مرفق</button>
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