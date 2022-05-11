<ul class="p-breadcrumb p-breadcrumb-sm">
  <li class="p-breadcrumb-item">
    <a href="{{ config('admin-ferry.home', '/') }}" data-fetch-url class="flex items-center"><i class="fa-solid fa-house text-gray-500"></i></a>
  </li>

  @if ($viewParams->get('breadcrumb', null))
    @foreach ($viewParams->get('breadcrumb') as $page => $url)
      <li class="p-breadcrumb-item"><a href="{{ $url }}" data-fetch-url>{{ $page }}</a></li>
    @endforeach
  @endif

  <li class="p-breadcrumb-item">{{ \Arr::get($viewParams, 'page.name', '') }}</li>
</ul>
