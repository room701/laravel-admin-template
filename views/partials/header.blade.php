<header class="flex items-center justify-between w-full h-12 lg:h-14 fixed top-0 left-0 z-19 lg:z-25 px-5 lg:px-8 bg-white border-b border-solid border-gray-200 shadow-sm lg:shadow">
  <button class="lg:hidden text-gray-700 text-2xl" @click.stop="sidebar.isShow = true"><i class="zwicon-hamburger-menu"></i></button>

  <div class="p-brand absolute lg:static left-1/2 z-5 transform -translate-x-1/2 lg:translate-x-0 mx-auto min-w-min max-w-xl lg:w-64 lg:-ml-8 text-xl lg:text-2xl tracking-wider text-center">
    <a href="/" class="p-brand-name">ADMIN</a>
  </div>

  <div class="flex flex-wrap content-center space-x-4">
    <div class="flex flex-wrap justify-end content-center space-x-3">
      <a href="javascript:void(0)" class="text-gray-400 text-2xl"><i class="zwicon-mail"></i></a>

      <!-- dropdown component -->
      <div x-data="{ dropdownOpen: false }" class="relative">
        <a @click.prevent="dropdownOpen = !dropdownOpen" href="#" class="text-gray-700 text-2xl"><i class="zwicon-user"></i></a>

        <!-- 關閉用 -->
        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div x-show="dropdownOpen" class="absolute z-20 right-0 mt-2.5 w-48 bg-white shadow border border-gray-100 border-solid">
          <a href="#" class="block px-5 py-3 text-sm text-gray-600 hover:bg-blue-400 hover:text-white">
            Profile
          </a>
          <a href="#" class="block px-5 py-3 text-sm text-gray-600 hover:bg-blue-400 hover:text-white">
            Settings
          </a>
          <a href="#" class="block px-5 py-3 text-sm text-gray-600 hover:bg-blue-400 hover:text-white">
            Sign Out
          </a>
        </div>
      </div>
      <!-- /dropdown component -->

    </div>
  </div>
</header>
