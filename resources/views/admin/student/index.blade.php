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
     <div class="top-divide">
        <a href="{{ url('pdf/students') }}" class="view-pdf" target="blank">View Pdf</a>
        <a href="{{ url('admin/reports/courses') }}" class="view-pdf">Filter Students</a>
      </div>
      <table>
        <caption>Students</caption>
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Registration Number</th>
            <th scope="col">Contact</th>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            {{-- <th scope="col">Action</th>
            <th scope="col">Action</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($student as $item)
          <tr>
            <td data-label="Unit">{{ $item->student_name }}</td>
            <td data-label="Code">{{ $item->student_email }}</td>
            <td data-label="Course">{{ $item->student_reg }}</td>
            <td data-label="Department">{{ $item->student_contact }}</td>
            <td data-label="Department">{{ $item->student_id }}</td>
            <td data-label="School" style="width: 40px; height:40px;"><img src="{{ asset('storage/'.$item->student_image) }}" alt="" style="width: 100%"></td>
            {{-- <td data-label="Amount"><a href="{{ url('admin/student/edit') }}"  class="edit-table">Edit</a></td>
            <td data-label="Period"><a href="" class="remove-table">Remove</a></td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
