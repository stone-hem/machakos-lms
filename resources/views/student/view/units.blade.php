<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms </title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/cards.css') }}">
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
    <ul class="cards">
      <li>
        <a href="" class="card">
          <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
              <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">kim Cattrall</h3>
                <span class="card__status">3 hours ago</span>
              </div>          
            </div>
            <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
          </div>
        </a>
      </li>    
    </ul>
   </div>  
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
