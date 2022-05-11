<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('admin-ferry.name', '後台') }}</title>

  {{--  favicon  --}}
  @forelse(config('admin-ferry.favicons') as $favicon)
    <link rel="icon" type="{{ $favicon['type'] }}" sizes="{{ $favicon['size'] }}" href="{{ $favicon['path'] }}">
  @empty
  @endforelse

  {{--  stylesheets  --}}
  {{-- <link rel="stylesheet" href="{{ admin_asset('/css/vendor/eva-icons/eva-icons.css') }}"> --}}
  <link rel="stylesheet" href="{{ admin_asset_mix('/css/dist/app.css') }}">

  @stack('head')
</head>

<body class="text-gray-600 tracking-wider font-normal antialiased">

  @yield('content')

</body>
</html>
