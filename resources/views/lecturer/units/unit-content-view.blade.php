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
      <h3 style="text-align: center;">{{ $unit->unit_name }}, {{ $unit_content->name }}</h3>

      {{-- <iframe src="{{ asset('storage/'.$unit_content->filepath) }}" width="1000px" height="500px"> --}}
        <object data="{{ asset('storage/'.$unit_content->filepath) }}" width="1000px" height="550px" type="application/pdf" 
          style="border:8px solid paleturquoise;padding:1px; border-radius:8px;"
          >Pdf not found</object>
    </div>
  </section>
  <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
