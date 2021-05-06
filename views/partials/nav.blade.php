<nav :class="{ 'is-open': sidebar.isShow }"
  @click.away="sidebar.isShow = false"
  x-cloak
  class="p-nav"
>

  @foreach (config('admin-view.nav', null) as $name => $link)
    {{-- 單層選單 --}}
    @if (is_string($link))
      <a href="{{ Route::has($link) ? route($link) : '/' }}"
         data-fetch-url
         class="p-nav-item"
         :class="{ 'is-active': sidebar.active == '{{ Route::has($link) ? route($link) : null }}' }"
      >
        {{ $name }}
      </a>
    @endif

    {{-- 雙層選單 --}}
    @if (is_array($link))
      <div x-data="{ open: false }"
        @load.window="
          setTimeout(function() {
            open = $el.querySelectorAll('.is-active').length > 0;
            console.log($el.querySelectorAll('.is-active').length > 0)
          }, 400);
        "
        :class="{ 'is-open': open }"
        class="p-nav-set"
      >

        <div @click="open = ! open" class="p-nav-item">
          {{ $name }}
          <svg class="p-nav-item-append-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
          </svg>
        </div>

        <div class="p-nav-submenu">
          @foreach ($link as $name => $link)
            <a href="{{ Route::has($link) ? route($link) : '/' }}"
               data-fetch-url
               class="p-nav-item"
               :class="{ 'is-active': $parent.sidebar.active == '{{ Route::has($link) ? route($link) : null }}' }"
            >
              {{ $name }}
            </a>
          @endforeach
        </div>

      </div>
    @endif
  @endforeach

</nav>
