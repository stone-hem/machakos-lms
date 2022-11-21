<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms </title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/unit-table.css') }}">
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
      <div class="container">
        <h2>{{ $unit->unit_name }}</h2>
          <table class="rwd-table">
            <tbody>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>File view</th>
              </tr>
              @foreach ($unit_content as $item)
              <tr>
                <td data-th="Name">
                 {{$item->name}}
                </td>
                <td data-th="Description">
                  {{$item->description}}
                </td>
                <td data-th="File">
                  <a href="{{ url('student/my-units/content/'.$item->id) }}">
                  <button style="background: rgb(83, 188, 83); padding:6px 8px; border:none;color:white;">View</button>
                </a>
               
              </tr>
              @endforeach
             
            </tbody>
          </table>
          <h4>developed by I</h4>
        </div>
    </div>
  
  </section>

  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
