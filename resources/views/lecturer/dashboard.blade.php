<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms </title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  @include('layouts.lecturer.sidebar')
  @section('lecturer-sidebar')
    
  @endsection
  <section class="home-section">
 
    @include('layouts.lecturer.nav')
    @section('lecturer-nav')
      
    @endsection
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Something</div>
            <div class="number"></div>
           
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Something</div>
            <div class="number"></div>
          
          </div>
  
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Something</div>
            <div class="number"></div>
         
          </div>
      
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Something</div>
            <div class="number"></div>
         
          </div>
       
        </div>
      </div>
  
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Graphical content</div>
         
         
        </div>
        <div class="top-sales box">
          <div class="title">Summary</div>
         
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
