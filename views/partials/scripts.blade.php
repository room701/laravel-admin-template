@stack('scripts')

@if (config('admin-ferry.scripts-view'))
  @include(config('admin-ferry.scripts-view'))
@endif
