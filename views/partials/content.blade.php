<div id="loader" class="loader-wrapper flex justify-center items-center mt-12 lg:mt-16 lg:ml-60">
  <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-300 h-9 w-9"></div>
</div>

<section id="content-container-wrapper" class="is-show flex-grow mt-12 lg:mt-16 lg:ml-60 px-4 py-5 pb-0 lg:px-10 lg:pb-24">

  <main id="content-container" class="space-y-4 lg:space-y-default">
    @includeWhen($viewParams->get('breadcrumb'), 'admin::partials.breadcrumb')

    @if ($title = \Arr::get($viewParams, 'page.name', null))
      <h1 class="text-3xl lg:text-4xl text-gray-900 font-bold">{{ $title }}</h1>
    @endif

    {!! $viewContent !!}
  </main>

</section>
