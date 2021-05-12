<section id="content-container-wrapper" class="is-show flex-grow mt-12 lg:mt-14 lg:ml-60 p-5 pb-20 lg:px-10 lg:pt-5 lg:pb-24 transition duration-1000 opacity-100">

  <main id="content-container" class="space-y-5">
    @includeWhen($viewParams->get('breadcrumb'. null), 'admin-view::partials.breadcrumb')

    {!! $content !!}
  </main>

</section>
