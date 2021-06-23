<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('admin-view.name', '後台') }}</title>

  {{--  favicon  --}}
  <link rel="icon" type="image/x-icon" href="{{ admin_asset('/img/favicon-icons/favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ admin_asset('/img/favicon-icons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ admin_asset('/vendor/laravel-admin-template/img/favicon-icons/favicon-16x16.png') }}">

  {{--  stylesheets  --}}
  <link rel="stylesheet" href="{{ admin_asset('/fonts/icons/zwicon/zwicon.css') }}">
  {{-- <link rel="stylesheet" href="{{ admin_asset_mix('/css/vendor/vendor.css') }}"> --}}
  <link rel="stylesheet" href="{{ admin_asset_mix('/css/dist/app.css') }}">

  {{--  scripts  --}}
  {{--  --}}

  @stack('head')
</head>

<body class="text-gray-600 tracking-wider font-normal antialiased">

  @yield('content')

</body>
</html>
