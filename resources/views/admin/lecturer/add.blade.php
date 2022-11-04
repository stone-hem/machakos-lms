<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/form.css') }}">
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

      <div class="form-style-10">
        <h1>New Lecturer!<span>Register a new lecturer now!</span></h1>
        <form>
            <div class="section"><span>1</span>First Name & Address</div>
            <div class="inner-wrap">
                <label>Your Full Name <input type="text" name="field1" /></label>
                <label>Address <textarea name="field2"></textarea></label>
            </div>
        
            <div class="section"><span>2</span>Email & Phone</div>
            <div class="inner-wrap">
                <label>Email Address <input type="email" name="field3" /></label>
                <label>Phone Number <input type="text" name="field4" /></label>
            </div>
        
            <div class="section"><span>3</span>Passwords</div>
                <div class="inner-wrap">
                <label>Password <input type="password" name="field5" /></label>
                <label>Confirm Password <input type="password" name="field6" /></label>
            </div>
            <div class="button-section">
             <input type="submit" name="Sign Up" />
             <span class="privacy-policy">
             <input type="checkbox" name="field7">You agree to our Terms and Policy. 
             </span>
            </div>
        </form>
        </div>

    </div>
  </section>
 <script src="{{ asset('script/script.js') }}"></script>

</body>
</html>
