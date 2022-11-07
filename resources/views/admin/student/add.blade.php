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
        .push-down {
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
                <h1>New Student!<span>{{ $course->course_name }}!</span></h1>
                <form method="POST" action="{{ url('admin/student/store/' . $course->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (session()->has('message'))
                        <div class="success-here">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="section"><span>1</span>Name & Address</div>
                    <div class="inner-wrap">
                        <label>Student Full Name <input type="text" name="student_name"
                                value="{{ old('student_name') }}" /></label>
                        <label> Student Address
                            <textarea name="address">{{ old('address') }}</textarea>
                        </label>
                        @error('student_name')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        @error('address')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="section"><span>2</span>Email & Phone</div>
                    <div class="inner-wrap">
                        <label>Student Email <input type="email" name="email" value="{{ old('email') }}" /></label>
                        <label>Phone Number <input type="text" name="phone" value="{{ old('phone') }}" /></label>
                        @error('email')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        @error('phone')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="section"><span>3</span>Id Number and Image</div>
                    <div class="inner-wrap">
                        <label>Id Number <input type="text" name="id_number"
                                value="{{ old('id_number') }}" /></label>
                        <label>Student Photo<input type="file" name="student_photo" /></label>
                        @error('id_number')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        @error('student_photo')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="button-section">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <script src="{{ asset('script/script.js') }}"></script>

</body>

</html>
