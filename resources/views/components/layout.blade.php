<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Default')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('fonts/Lora/Lora-VariableFont_wght.ttf') }}" />
    <!-- Moyasar Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.5.6/moyasar.css"> --}}
    <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
    @stack('styles')

</head>
<body>
{{$slot}}


<script src="{{ url('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{ url('js/all.min.js')}}" ></script>
<script src="{{ url('js/sweetalert.min.js')}}" ></script>
<script src="{{ url('js/main.js')}}" ></script>
@stack('scripts')
</body>
</html>
