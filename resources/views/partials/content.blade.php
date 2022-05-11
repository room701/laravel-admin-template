<section id="content-container-wrapper" class="is-show flex-grow mt-14 lg:ml-52 px-4 py-4 pb-0 lg:px-6 lg:py-6 lg:pb-24">

  <main id="content-container" class="space-y-4 lg:space-y-default">
    @includeWhen($viewParams->get('breadcrumb', null) !== false, 'admin-ferry::partials.breadcrumb')

    @if ($title = \Arr::get($viewParams, 'page.name', null))
      <div class="w-max flex items-center">
        <div class="border-t border-indigo-600 w-6 lg:w-10 h-0 mr-5 lg:mr-7 lg:ml-1.5"></div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl text-gray-700 font-light">{{ $title }}</h1>
      </div>
    @endif

    {!! $viewContent !!}
  </main>

</section>
