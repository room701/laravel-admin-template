<nav :class="{ 'is-open': sidebar.isShow }"
  @click.away="sidebar.isShow = false"
  x-cloak
  class="p-nav"
>

  @foreach (config('admin-view.nav', ['測試' => 'admin.index']) as $name => $route)
    <a class="p-nav-item"
      href="{{ Route::has($route) ? route($route) : 'javascript:void(0)' }}"
      :class="{ 'is-active': sidebar.active == 'table' }"
      data-fetch-url="{{ Route::has($route) ? route($route) : '/' }}"
    >
      {{ $name }}
    </a>
  @endforeach

  {{--  <div x-data="{ open: false }"
    x-init="() => { open = $el.querySelectorAll('.is-active').length > 0; }"
    :class="{ 'is-open': open }"
    class="p-nav-set"
  >
    <div @click="open = ! open" :class="{ 'is-active': $parent.sidebar.active == 'submenu1' }" class="p-nav-item">
      二維選單
      <svg class="p-nav-item-append-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </div>
    <div class="p-nav-submenu">
      <a class="p-nav-item"
        href="/submenu"
        :class="{ 'is-active': $parent.sidebar.active == 'submenu' }"
      >
        Shopify
      </a>
      <a class="p-nav-item"
        href="/submenu"
        :class="{ 'is-active': $parent.sidebar.active == 'submenu-1' }"
      >
        Slack
      </a>
      <a class="p-nav-item"
        href="/submenu"
        :class="{ 'is-active': $parent.sidebar.active == 'submenu-2' }"
      >
        Zapier
      </a>
    </div>
  </div>  --}}

</nav>
