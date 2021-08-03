<header id="header" class="flex items-center justify-between w-full h-14 fixed top-0 left-0 z-19 lg:z-25 px-4 lg:px-5 bg-white border-b border-solid border-gray-200 shadow-sm lg:shadow">

  <button class="lg:hidden flex items-center text-gray-500 text-2xl" onclick="window.admin.helpers.toggleNavSidebar(); event.stopPropagation();" type="button">
    <i class="eva eva-menu-outline"></i>
  </button>

  @php
    $homeLink = config('admin-ferry.home');
    $homeLink = Route::has($homeLink) ? route($homeLink) : $homeLink;
  @endphp

  <div class="p-brand absolute lg:static flex items-center left-1/2 z-5 transform -translate-x-1/2 lg:translate-x-0 min-w-max text-base lg:text-xl tracking-wider text-center lg:text-left">
    <a href="{{ $homeLink }}" data-fetch-url class="p-brand-name">{{ config('admin-ferry.name', '後台') }}</a>
    @if (! \App::environment('production'))
      <span class="text-sm bg-red-400 text-white ml-2.5 px-2 py-1 rounded-full leading-none">測試</span>
    @endif
  </div>

  {{-- header-toolbar --}}
  <div class="header-toolbar flex flex-wrap content-center text-gray-700 space-x-3">
    @includeIf(config('admin-ferry.header-toolbar-view'))
  </div>

</header>
