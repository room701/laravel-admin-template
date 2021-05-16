<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  {{--  favicon  --}}
  <link rel="icon" type="image/x-icon" href="{{ admin_asset('/img/favicon-icons/favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ admin_asset('/img/favicon-icons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ admin_asset('/vendor/laravel-admin-template/img/favicon-icons/favicon-16x16.png') }}">
  {{--  stylesheets  --}}
  <link rel="stylesheet" href="{{ admin_asset('/img/icons/zwicon/zwicon.css') }}">
  <link rel="stylesheet" href="{{ admin_asset_mix('/css/dist/app.css') }}">
  {{--  scripts  --}}
  <script type="module" defer src="{{ admin_asset_mix('/js/dist/app.js') }}"></script>
</head>

<body x-data="rootAlpineInstance()"
  x-init="init"
  x-cloak
  :class="{ 'overflow-hidden': sidebar.isShow }"
  class="flex flex-col h-screen bg-gray-100 text-gray-600 tracking-wider font-normal antialiased"
>

  @include('admin::partials.header')

  @include('admin::partials.nav')

  @include('admin::partials.content')

  <button @click="helpers.goTop()" class="p-unit-gotop" type="button"><i class="zwicon-arrow-up"></i></button>

</body>
</html>
