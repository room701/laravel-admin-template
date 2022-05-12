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
    <script type="module" src="{{ $assetsDistPath }}/{{ $manifest['index.html']['file'] }}"></script>
    <link rel="stylesheet" href="{{ $assetsDistPath }}/{{ $manifest['index.html']['css'][0] }}" />
  @else
    {{-- vite dev mode --}}
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <script type="module" src="http://localhost:3000/index.html"></script>
  @endif

  {{-- Fontawasome --}}
  <link rel="stylesheet" href="/vendor/laravel-admin-ferry/static/fonts/fontawasome/@fortawesome/fontawesome-free/css/all.min.css">

  @stack('head')
</head>

<body class="flex flex-col h-screen bg-gray-100 text-gray-600 tracking-wider font-normal antialiased">

  @include('admin-ferry::partials.loader')

  @include('admin-ferry::partials.header')

  @include('admin-ferry::partials.nav')

  @include('admin-ferry::partials.content')

  <button onclick="window.admin.helpers.goTop()" class="p-unit-gotop" type="button"><i class="eva eva-arrow-upward-outline"></i></button>

  @include('admin-ferry::partials.scripts')

</body>
</html>
