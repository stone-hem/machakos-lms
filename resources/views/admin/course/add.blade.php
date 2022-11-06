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
            top: 70px;
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
                <h1>New Course!<span>{{ $department->department_name }}</span></h1>
                <form method="POST" action="{{ url('admin/course/store/'.$department->id) }}" enctype="multipart/form-data">
                    @csrf
                    @if (session()->has('message'))
                        <div class="success-here">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="section"><span>1</span>Name & Code</div>
                    <div class="inner-wrap">
                        <label>Course name <input type="text" name="course_name"
                                value="{{ old('course_name') }}" /></label>
                        @error('course_name')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        <label>Course code <input type="text" name="course_code"
                                value="{{ old('course_code') }}" /></label>
                        @error('course_code')
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
