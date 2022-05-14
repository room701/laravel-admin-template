<!DOCTYPE html>
<html lang="zh-Hant-TW">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('admin-ferry.name', '後台') }}</title>

  {{--  favicon  --}}
  @forelse(config('admin-ferry.favicons') as $favicon)
    <link rel="icon" type="{{ $favicon['type'] }}" sizes="{{ $favicon['size'] }}" href="{{ $favicon['path'] }}">
  @empty
  @endforelse

  @include('admin-ferry::partials.assets')

  @stack('head')
</head>

<body>

  @include('admin-ferry::partials.loader')

  @include('admin-ferry::partials.header')

  @include('admin-ferry::partials.nav')

  @include('admin-ferry::partials.content')

  <button onclick="window.admin.helpers.goTop()" class="c-gotop" type="button"><i class="eva eva-arrow-upward-outline"></i></button>

  @include('admin-ferry::partials.scripts')

</body>
</html>
