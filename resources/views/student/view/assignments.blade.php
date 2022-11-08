<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms </title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        .push-down{
            position: absolute;
            top: 90px;
            margin: 0px 30px;
        }
     </style>
   </head>
<body>
 @include('layouts.student.sidebar')
 @section('student-sidebar')
   
 @endsection
  <section class="home-section">
   @include('layouts.student.nav')
   @section('student-nav')
     
   @endsection
   <div class="push-down">
   <h3>Assignments</h3>
   </div>  
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
