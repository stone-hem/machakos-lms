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
  @include('layouts.lecturer.sidebar')
  @section('lecturer-sidebar')
    
  @endsection
  <section class="home-section">
 
    @include('layouts.lecturer.nav')
    @section('lecturer-nav')
      
    @endsection

    <div class="push-down">
      <div class="card-category-2">
            
        <span class="category-name">My Units</span> <br/><br/>     
        <ul>
          @foreach ($lec_unit as $item)
          <li>
            <div class="img-card iCard-style2">
                <div class="card-content">
                    <div class="card-image">
                        <span class="card-caption">{{ $item->course_name }}</span>
                        <img src="{{ asset('images/lms-units.jpeg') }}"/>
                    </div>
                    
                    <span class="card-title">{{ $item->unit_name }}</span>
                    
                    <div class="card-text">
                        <p>
                          The code for this unit is {{ $item->unit_code }}
                        </p>
                    </div>
                    
                </div>
                
                <div class="card-link">
                    <a href="#" title="Access Content"><span>Access</span></a>
                </div>
            </div>                    
        </li> 
          @endforeach
              
        </ul>
    </div>
    </div>
  
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
