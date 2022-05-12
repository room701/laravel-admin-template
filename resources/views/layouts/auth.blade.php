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

  @if (! env('IS_VITE_DEV'))
    {{-- vite production mode --}}
    @php
      $assetsDistPath = '/vendor/laravel-admin-ferry/dist';
      $manifest = json_decode(
        file_get_contents(public_path($assetsDistPath) . '/manifest.json')
      , true);
    @endphp
    <link rel="stylesheet" href="{{ $assetsDistPath }}/{{ $manifest['index.html']['css'][0] }}" />
    <script type="module" src="{{ $assetsDistPath }}/{{ $manifest['index.html']['file'] }}"></script>
  @else
    {{-- vite dev mode --}}
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <link rel="stylesheet" href="http://localhost:3000/resources/css/app.css" />
    <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
  @endif

  @stack('head')
</head>

<body class="text-gray-600 tracking-wider font-normal antialiased">

  @include('admin-ferry::partials.loader')

  @yield('content')

</body>
</html>
