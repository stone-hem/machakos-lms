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
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form {
  margin:20px auto;
  width:300px
}
input {
  margin-bottom:6px;
  padding:10px;
  width: 100%;
  border:1px solid #CCC
}
button {
  padding:10px;
  background-color: dodgerblue;
}
label {
  cursor:pointer
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
      <div>Register A New Lecturer</div>

<form id='login-form' action="" method='post'>
  <input type="text" placeholder="First Name.." required>
  <input type="text" placeholder="Last Name.." required>
  <input type="email" placeholder="Last Name.." required>
  <input type="text" placeholder="Id Number.." required>
  <input type="text" placeholder="Kra Pin.." required>
  <input type="text" placeholder="Phone Number.." required>
  <button type='submit'>Register</button>
</form>

    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
