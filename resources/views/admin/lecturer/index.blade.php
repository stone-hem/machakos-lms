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
        <a href="{{ url('admin/lecturer/create') }}"><div class="circle"></div></a>
      </div>
      <table>
        <caption>Lectures</caption>
        <thead>
          <tr>
            <th scope="col">Account</th>
            <th scope="col">Due Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Period</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Account">Visa - 3412</td>
            <td data-label="Due Date">04/01/2016</td>
            <td data-label="Amount">$1,190</td>
            <td data-label="Period">03/01/2016 - 03/31/2016</td>
          </tr>
          <tr>
            <td scope="row" data-label="Account">Visa - 6076</td>
            <td data-label="Due Date">03/01/2016</td>
            <td data-label="Amount">$2,443</td>
            <td data-label="Period">02/01/2016 - 02/29/2016</td>
          </tr>
          <tr>
            <td scope="row" data-label="Account">Corporate AMEX</td>
            <td data-label="Due Date">03/01/2016</td>
            <td data-label="Amount">$1,181</td>
            <td data-label="Period">02/01/2016 - 02/29/2016</td>
          </tr>
          <tr>
            <td scope="row" data-label="Acount">Visa - 3412</td>
            <td data-label="Due Date">02/01/2016</td>
            <td data-label="Amount">$842</td>
            <td data-label="Period">01/01/2016 - 01/31/2016</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
