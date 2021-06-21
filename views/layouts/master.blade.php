<!DOCTYPE html>
<html lang="zh-Hant-TW">
@include('admin::partials.head')

<body class="flex flex-col h-screen bg-gray-100 text-gray-600 tracking-wider font-normal antialiased">

  @include('admin::partials.header')

  @include('admin::partials.nav')

  @include('admin::partials.content')

  <button onclick="helpers.goTop()" class="p-unit-gotop" type="button"><i class="zwicon-arrow-up"></i></button>

  @include('admin::partials.scripts')

</body>
</html>
