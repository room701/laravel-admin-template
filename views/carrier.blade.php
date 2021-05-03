@extends('admin-view::layouts.master')

@section('content')

  @includeWhen($viewParams->get('breadcrumb'. null), 'admin-view::partials.breadcrumb')

  {!! $content !!}

@endsection
