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
  <link rel="stylesheet" href="{{ admin_asset('/css/vendor/eva-icons/eva-icons.css') }}">
  <link rel="stylesheet" href="{{ admin_asset('/js/vendor/noty/lib/noty.css') }}">
  <link rel="stylesheet" href="{{ admin_asset('/js/vendor/noty/lib/themes/sunset.css') }}">
  <link rel="stylesheet" href="{{ admin_asset_mix('/css/dist/app.css') }}?v={{ date('Ymd_hi') }}">

  {{--  scripts  --}}
  <script src="{{ admin_asset('/js/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ admin_asset('/js/vendor/noty/lib/noty.min.js') }}"></script>
  <script src="{{ admin_asset('/js/vendor/htmx/htmx.min.js') }}"></script>
  <script src="{{ admin_asset('/js/vendor/vue/vue.js') }}"></script>
  <script type="module" defer src="{{ admin_asset_mix('/js/dist/app.js') }}"></script>

  @stack('head')
</head>

<body class="flex flex-col h-screen bg-gray-100 text-gray-600 tracking-wider font-normal antialiased">

  @include('admin-ferry::partials.header')

  @include('admin-ferry::partials.nav')

  @include('admin-ferry::partials.content')

  <button onclick="window.admin.helpers.goTop()" class="p-unit-gotop" type="button"><i class="eva eva-arrow-upward-outline"></i></button>

  @include('admin-ferry::partials.scripts')

</body>
</html>
