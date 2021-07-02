<ul class="p-breadcrumb p-breadcrumb-sm">
  <li class="p-breadcrumb-item"><a href="{{ config('admin-view.home', '/') }}" data-fetch-url><i class="zwicon-home text-lg"></i></a></li>

  @if ($viewParams->get('breadcrumb', null))
    @foreach ($viewParams->get('breadcrumb') as $page => $url)
      <li class="p-breadcrumb-item"><a href="{{ $url }}" data-fetch-url>{{ $page }}</a></li>
    @endforeach
  @endif

  <li class="p-breadcrumb-item">{{ \Arr::get($viewParams, 'page.name', '') }}</li>
</ul>
