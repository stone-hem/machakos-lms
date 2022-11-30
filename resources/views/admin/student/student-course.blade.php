<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/table.css') }}">
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
  @include('layouts.admin.sidebar')
  @section('admin-sidebar')
    
  @endsection
  <section class="home-section">
    @include('layouts.admin.admin-nav')
    @section('admin-nav')

    @endsection
    <div class="push-down">
     {{-- <div class="top-divide">
        <a href="" class="view-pdf">View Pdf</a>
        <a href="{{ url('') }}" class="view-pdf">Filter Students</a>
      </div> --}}
      <table>
        <caption>Select The Course to filter Students</caption>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Select</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($course as $item)
          <tr>
            <td data-label="Unit">{{ $item->course_name }}</td>
            <td data-label="Amount"><a href="{{ url('admin/student/course/get/'.$item->id) }}"  class="edit-table">Select</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
