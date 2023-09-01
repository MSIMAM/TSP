<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    {{--================= all styles links links ==============--}}
    <link rel="stylesheet" href="{{asset('styles/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/plugins/toastr/toatr.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/assets/maincss/vidstyle.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/toastr.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('styles/core.css')}}"> --}}
    {{-- @notifyCss --}}
    {{--================= end style links ==============--}}
    <title></title>
</head>
<body>

    @include('notify::components.notify')
    {{-- @include('sweetalert::alert') --}}


</body>
</html>
