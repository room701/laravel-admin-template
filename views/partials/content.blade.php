{{--  <div class="loader"><span class="loader-inner"></span></div>  --}}

<div id="loader" class="loader-wrapper flex justify-center items-center mt-12 lg:mt-16 lg:ml-60">
  <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-300 h-9 w-9"></div>
</div>

<section id="content-container-wrapper" class="is-show flex-grow mt-12 lg:mt-16 lg:ml-60 p-5 pb-20 lg:px-10 lg:pt-5 lg:pb-24">

  <main id="content-container" class="space-y-5">
    @includeWhen($viewParams->get('breadcrumb'. null), 'admin-view::partials.breadcrumb')

    {!! $content !!}
  </main>

</section>
