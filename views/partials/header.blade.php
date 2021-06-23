<header id="header" class="flex items-center justify-between w-full h-14 fixed top-0 left-0 z-19 lg:z-25 px-5 lg:px-8 bg-white border-b border-solid border-gray-200 shadow-sm lg:shadow">

  <button class="lg:hidden text-gray-700 text-2xl" onclick="window.helpers.toggleNavSidebar(); event.stopPropagation();" type="button"><i class="zwicon-hamburger-menu"></i></button>

  <div class="p-brand absolute lg:static left-1/2 z-5 transform -translate-x-1/2 lg:translate-x-0 mx-auto min-w-min max-w-xl lg:w-64 lg:-ml-8 text-xl lg:text-2xl tracking-wider text-center">
    <a href="{{ config('admin-view.home') }}" data-fetch-url class="p-brand-name">ADMIN</a>
  </div>

  <div class="flex flex-wrap content-center space-x-4">

    @includeIf(config('admin-view.header-toolbar-view'))

    <input id="toolbar-dropdown-tolggler" type="checkbox" class="hidden">
    <div class="toolbar-dropdown relative">
      <label for="toolbar-dropdown-tolggler" class="text-gray-700 text-2xl cursor-pointer">
        <i class="zwicon-user"></i>
      </label>

      <!-- 關閉用遮罩 -->
      <div class="hidden fixed inset-0 h-full w-full z-10"
           onclick="document.getElementById('toolbar-dropdown-tolggler').checked = false;"
      ></div>

      <!-- 子選單外框 -->
      <div class="hidden absolute z-20 right-0 mt-2.5 w-48 bg-white shadow border border-gray-100 border-solid">
        <a href="#" class="block px-5 py-3 text-sm text-gray-600 hover:bg-blue-400 hover:text-white">
          Profile
        </a>
      </div>
    </div>

  </div>

</header>
