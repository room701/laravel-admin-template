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

  @if(! env('IS_VITE_DEV'))
    @php
      $assetsDistPath = '/vendor/laravel-admin-ferry/dist';
      $manifest = json_decode(
        file_get_contents(public_path($assetsDistPath) . '/manifest.json')
      , true);
    @endphp
    <script type="module" src="{{ $assetsDistPath }}/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    <link rel="stylesheet" href="{{ $assetsDistPath }}/{{ $manifest['resources/js/app.js']['css'][0] }}" />

    {{-- vite production mode --}}
    {{-- @php
      $assetsDistPath = '/vendor/laravel-admin-ferry/dist';
      $manifest = json_decode(
        file_get_contents(public_path($assetsDistPath) . '/manifest.json')
      , true);

      $mainScript = $manifest['resources/js/app.js'];
      $mainScriptFile = $mainScript['file']; // 單一檔案
      $imports = $mainScript['imports']; // array
      $styles = $mainScript['css']; // array
    @endphp

    <script type="module" src="{{ $assetsDistPath }}/{{ $mainScript['file'] }}"></script>

    @foreach ($imports as $import)
      <script type="module" src="{{ $assetsDistPath }}/{{ $import }}"></script>
    @endforeach

    @foreach ($styles as $style)
      <link rel="stylesheet" href="{{ $assetsDistPath }}/{{ $style }}" />
    @endforeach --}}
  @else
    {{-- vite dev mode --}}
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
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
