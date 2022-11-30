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
        .circle{
         margin-left: 50%;
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
        <a href="{{ url('pdf/departments') }}" class="view-pdf">View Pdf</a>
        <a href="{{ url('admin/department/create') }}"><div class="circle"></div></a>
      </div>
      <table>
        <caption>Departments</caption>
        <thead>
          <tr>
            <th scope="col">School</th>
            <th scope="col">Department</th>
            <th scope="col">Date Created</th>
            <th scope="col">New Course</th>
            <th scope="col">New Lecturer</th>
            {{-- <th scope="col">Action</th>
            <th scope="col">Action</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($department as $item)
          <tr>
            <td data-label="School">{{ $item->school_name }}</td>
            <td data-label="Department">{{ $item->department_name }}</td>
            <td data-label="Date">{{ $item->created_at->toDayDateTimeString() }}</td>
            <td data-label="Action"><a href="{{ url('admin/course/create/'.$item->id) }}"><div class="circle" title='new course'></div></a></td>
            <td data-label="Action"><a href="{{ url('admin/lecturer/create/'.$item->id) }}"><div class="circle" title='new lecturer'></div></a></td>
            {{-- <td data-label="Action"><a href="{{ url('admin/department/edit') }}"  class="edit-table">Edit</a></td>
            <td data-label="Action"><a href="" class="remove-table">Remove</a></td> --}}
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
