<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      .table {
              display: table;
              width: 100%;
              border-collapse: collapse;
          }
  
          .table .tr {
              display: table-row;
              border: 1px solid #ddd;
          }
  
          .table .tr:first-child {
              font-weight: bold;
              border-bottom: 2px solid #ddd;
          }
  
          .table .tr:nth-child(even) {
              background-color: #F9F9F9;
          }
  
          .table .tr .td {
              display: table-cell;
              padding: 8px;
              border-left: 1px solid #ddd;
          }
  
          .table .tr .td:first-child {
              border-left: 0;
          }
  
          /* Not necessary for table styling */
          .div-table,
          .table-tag {
              float: left;
              margin: 2em;
          }
  
          .div-table .title,
          .table-tag .title {
              text-align: center;
              padding-bottom: 0.5em;
          }
          .center-report{
            width: 90%;
              display: flex;
              align-items: center;
              justify-content: center;
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

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Schools</div>
            <div class="number">{{ $schools }}</div>
           
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Departments</div>
            <div class="number">{{ $departments }}</div>
          
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Courses</div>
            <div class="number">{{ $courses }}</div>
         
          </div>
      
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Units</div>
            <div class="number">{{ $units }}</div>
         
          </div>
       
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="center-report">
            <div class="div-table">
                <div class="title">Departments and Lectures</div>
                <div class="table">
                    <div class="tr">
                        <div class="td">Department</div>
                        <div class="td">Total</div>
                        <div class="td">Share Type</div>
                        <div class="td">Total</div>
                    </div>
                    <div class="tr">
                      <div class="td">Loan Type</div>
                      <div class="td">Total</div>
                      <div class="td">Share Type</div>
                      <div class="td">Total</div>
                  </div>
                </div>
            </div>
        </div>
        </div>
        <div class="top-sales box">
          <div class="div-table">
            <div class="title">Departments and Lectures</div>
            <div class="table">
                <div class="tr">
                    <div class="td">Department</div>
                    <div class="td">Lectureres</div>
                   
                </div>
                <div class="tr">
                  @foreach ($total_lecturer as $item)
                  <div class="td">Loan Type</div>
                  @endforeach
              </div>
              
              
            </div>
        </div>
        </div>
      </div>
    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
