<ul class="ferry-breadcrumb ferry-breadcrumb-sm">
  <li class="ferry-breadcrumb-item">
    <a href="{{ config('admin-ferry.home', '/') }}" data-fetch-url class="flex items-center"><i class="fa-solid fa-house text-gray-500"></i></a>
  </li>

  @if ($viewParams->get('breadcrumb', null))
    @foreach ($viewParams->get('breadcrumb') as $page => $url)
      @if ($url)
        <li class="ferry-breadcrumb-item"><a href="{{ $url }}" data-fetch-url>{{ $page }}</a></li>
      @else
        <li class="ferry-breadcrumb-item">{{ $page }}</li>
      @endif
    @endforeach
  @endif

  <li class="ferry-breadcrumb-item">{{ \Arr::get($viewParams, 'page.name', '') }}</li>
</ul>
