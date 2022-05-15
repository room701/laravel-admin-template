<templat id="vue-ferry-nav">
  <nav @click.stop
      class="ferry-nav"
      :class="{ 'is-open': sidebar.isShow }"
  >

    <button class="ferry-nav-close"
            onclick="window.admin.helpers.toggleNavSidebar(false); event.stopPropagation();"
            type="button"
    >
      <i class="fa-solid fa-xmark"></i>
    </button>

    @foreach (config('admin-ferry.nav', null) as $name => $link)

      {{-- 單層選單 --}}
      @if (is_string($link))
        @php $link = Route::has($link) ? route($link) : $link; @endphp
        <ferry-nav-item name="{{ $name }}" href="{{ $link }}"></ferry-nav-item>
      @endif

      {{-- 雙層選單 --}}
      @if (is_array($link))
        <ferry-nav-dropdown name="{{ $name }}">
          @foreach ($link as $name => $link)
            @php $link = Route::has($link) ? route($link) : '/'; @endphp
            <ferry-nav-item name="{{ $name }}" href="{{ $link }}"></ferry-nav-item>
          @endforeach
        </ferry-nav-dropdown>
      @endif

    @endforeach

  </nav>
</templat>

{{-- vue component template --}}
<script id="ferry-nav-item-template" type="text/x-template">
  <a :href="href"
     data-fetch-url
     class="ferry-nav-item"
     :class="{ 'is-active': isActive }"
  >
    @{{ name }}
  </a>
</script>

{{-- vue component template --}}
<script id="ferry-nav-dropdown-template" type="text/x-template">
  <div :class="{ 'is-open': isOpen }" class="ferry-nav-dropdown">

    <div @click="isOpen = ! isOpen" class="ferry-nav-item">
      @{{ name }}
      <svg class="ferry-nav-item-append-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </div>

    <div class="ferry-nav-submenu">
      <slot></slot>
    </div>

  </div>
</script>
