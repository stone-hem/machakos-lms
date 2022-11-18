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
    @include('layouts.lecturer.sidebar')
    @section('lecturer-sidebar')
      
    @endsection
    <section class="home-section">
        @include('layouts.lecturer.nav')
        @section('lecturer-nav')
        @endsection    
        <div class="push-down">

            <div class="form-style-10">
                <h1>Upload Content!<span>{{ $unit->unit_name }}!</span></h1>
                <form method="POST" action="{{ url('lecturer/my-units/store/' . $unit->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if (session()->has('message'))
                        <div class="success-here">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="section"><span>1</span>Content Name & Description</div>
                    <div class="inner-wrap">
                        <label>Name <input type="text" name="content_name"
                                value="{{ old('content_name') }}" /></label>
                        <label> Description
                            <textarea name="description">{{ old('description') }}</textarea>
                        </label>
                        @error('content_name')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                        @error('description')
                            <div class="errors-here">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="section"><span>2</span>File Upload</div>
                    <div class="inner-wrap">
                        <label>Upload File<input type="file" name="filename" /></label>
                        @error('filename')
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
