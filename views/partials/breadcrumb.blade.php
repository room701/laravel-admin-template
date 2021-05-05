<ul class="breadcrumb breadcrumb-sm">
  <li class="breadcrumb-item"><a href="{{ config('admin-view.home', '/') }}"><i class="zwicon-home text-lg"></i></a></li>

  @foreach ($viewParams->get('breadcrumb', null) as $page => $url)
    <li class="breadcrumb-item"><a href="{{ $url }}" data-fetch-url>{{ $page }}</a></li>
  @endforeach

  <li class="breadcrumb-item">{{ \Arr::get($viewParams, 'page.name', '') }}</li>
</ul>
