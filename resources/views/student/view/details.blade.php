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
        .contain-details{
          
          width: 70vw;
          height: 70vh;
          border: 1px solid rgb(216, 215, 215);
          border-top-left-radius: 30%;
          border-bottom-right-radius: 30%;
          -webkit-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
      -moz-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
      -o-box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3);
      box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.3); 
      display: flex;
      flex-direction: row;
        }
        h3{
         
        }

        .contain-details .profile-image-style{
         width: 200px;
        }
        .contain-details .profile-image-style img{
         height: 200px;
        }
        .course-name{
         
        
        }
        .course{
        
        }
        .right-details{
          margin: 10px 40px;
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
    <div class="contain-details">
      <div class="profile-image-style">
        <img src="{{ asset('images/lms-units.jpeg') }}"/>
      </div>
      <div class="right-details">
        <p class="course-name">My Course:</p> 
        <p class="course">Bachelar of Science in {{ $course->course_name }}</p>
        <p class="course-name">Course code:</p> 
        <p class="course"> {{ $course->course_code }}</p>
        <p class="course-name">Department:</p> 
        <p class="course"> {{ $course->department_name }}</p>
        <p class="course-name">School:</p> 
        <p class="course"> {{ $course->school_name }}</p>
      </div>
        
    </div>
   </div>  
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
