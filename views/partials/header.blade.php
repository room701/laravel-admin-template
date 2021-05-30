<header id="header" class="flex items-center justify-between w-full h-12 lg:h-14 fixed top-0 left-0 z-19 lg:z-25 px-5 lg:px-8 bg-white border-b border-solid border-gray-200 shadow-sm lg:shadow">

  <button class="lg:hidden text-gray-700 text-2xl" @click.stop.prevent="showSideBar"><i class="zwicon-hamburger-menu"></i></button>

  <div class="p-brand absolute lg:static left-1/2 z-5 transform -translate-x-1/2 lg:translate-x-0 mx-auto min-w-min max-w-xl lg:w-64 lg:-ml-8 text-xl lg:text-2xl tracking-wider text-center">
    <a href="{{ config('admin-view.home') }}" data-fetch-url class="p-brand-name">ADMIN</a>
  </div>

  <div class="flex flex-wrap content-center space-x-4">
    <div class="flex flex-wrap justify-end content-center space-x-3">

      <a href="javascript:void(0)" class="text-gray-400 text-2xl"><i class="zwicon-mail"></i></a>

      <dropdown-set>
        <dropdown-item name="Profile" href="#"></dropdown-item>
        <dropdown-item name="Logout" href="#"></dropdown-item>
      </dropdown-set>

    </div>
  </div>

</header>

{{-- vue component template --}}
<script id="header-dropdown-set" type="text/x-template">
  <div class="relative">
    <a @click.stop.prevent="isOpen = ! isOpen" href="javascript:void(0)" class="text-gray-700 text-2xl"><i class="zwicon-user"></i></a>

    <!-- 關閉用遮罩 -->
    <div v-show="isOpen" @click="isOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

    <!-- 子選單外框 -->
    <div v-show="isOpen" class="absolute z-20 right-0 mt-2.5 w-48 bg-white shadow border border-gray-100 border-solid">

      <!-- 子選單置入 -->
      <slot></slot>

    </div>
  </div>
</script>

{{-- vue component template --}}
<script id="header-dropdown-item" type="text/x-template">
  <a :href="href" class="block px-5 py-3 text-sm text-gray-600 hover:bg-blue-400 hover:text-white">
   @{{ name }}
  </a>
</script>
