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
        <a href="" class="view-pdf">View Pdf</a>
        <a href="{{ url('admin/school/create') }}"><div class="circle"></div></a>
      </div>
      <table>
        <caption>Schools</caption>
        <thead>
          <tr>
            <th scope="col">School name</th>
            <th scope="col">School Unique String</th>
            <th scope="col">Date created</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($school as $item)
          <tr>
            <td data-label="School Name">{{ $item->school_name }}</td>
            <td data-label="String">{{ $item->school_string }}</td>
            <td data-label="Date Created">{{ $item->created_at->toDayDateTimeString() }}</td>
            <td data-label="Action"><a href="{{ url('admin/school/edit/'.$item->id) }}"  class="edit-table">Edit</a></td>
            <td data-label="Action"><a href="" class="remove-table">Remove</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
