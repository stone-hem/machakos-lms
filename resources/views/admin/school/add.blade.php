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
                <h1>New School!<span>Register a new school now!</span></h1>
                <form method="POST" action="{{ url('admin/school/store') }}" enctype="multipart/form-data">
                    @csrf
                    @if (session()->has('message'))
                        <div class="success-here">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="section"><span>1</span>Name & Identifier</div>
                    <div class="inner-wrap">
                        <label>School name <input type="text" name="school_name"  value="{{ old('school_name') }}"/></label>
                        @error('school_name')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        <label>School Letter <input type="text" name="school_letter" value="{{ old('school_letter') }}"/></label>
                        @error('school_letter')
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
