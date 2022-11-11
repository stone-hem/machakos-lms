<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Machakos lms</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/checks.css') }}">
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
            <h3>Check The units to allocate for {{ $lecturer->lecturer_name }}</h3>
            <form method="POST" action="{{ url('admin/lecturer/unit/allocate/' . $lecturer->id) }}"
                enctype="multipart/form-data">
                @csrf
                @if (session()->has('message'))
                    <div class="success-here">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @foreach ($unit as $item)
                    <label class="checkbox-container">{{ $item->unit_name }}
                        <input type="checkbox" checked="checked" value={{ $item->id }} name="units[]">
                        <span class="checkmark"></span>
                    </label>
                @endforeach
                <div class="button-group" style="display: flex;">
                    <button type="submit">Submit Units</button>
                    @if (session()->has('success'))
                    <div class="success-here">
                        {{ session()->get('success') }}
                    </div>
                @endif
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('script/script.js') }}"></script>

</body>

</html>
