@extends('admin::layouts.auth')

@section('content')

  <div class="lg:flex items-center justify-center">

    {{-- heading set --}}
    <div class="hidden lg:flex flex-1 h-screen lg:w-1/2 items-center justify-center bg-gray-100 bg-gradient-to-b from-indigo-50 to-gray-100">
      <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
        <h1 class="text-8xl text-indigo-600 font-extralight tracking-wider">{{ $heading }}</h1>
      </div>
    </div>

    <div class="w-full lg:w-1/2">

      {{-- logo set --}}
      <div class="flex justify-center lg:justify-start items-center bg-indigo-100 lg:bg-white py-10 px-10 lg:max-w-lg mx-auto">
        <div class="flex items-center">
          <svg class="w-10 text-indigo-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
            <style>
              .st0{fill:none;stroke:currentColor;stroke-width:20;stroke-linecap:round;stroke-miterlimit:3;}
            </style>
            <g transform="matrix( 1, 0, 0, 1, 0,0)">
              <g>
                <path id="Layer0_0_1_STROKES" class="st0" d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8"/>
              </g>
            </g>
          </svg>
        </div>
        <div class="text-2xl text-indigo-800 ml-2 font-semibold">
          {{ config('admin-view.name', '後台') }}登入
        </div>
      </div>

      {{-- form set --}}
      <div class="mt-24 lg:mt-14 mb-14 px-10 lg:max-w-lg mx-auto">
        {{-- <h2 class="text-center text-4xl text-indigo-900 font-semibold lg:text-left xl:text-5xl xl:text-bold">登入</h2> --}}

        @if ($errors->any())
          <x-admin::alert.error-2 :errors="$errors" wrapper-class="mb-10" />
        @endif

        <form action="{{ $submitUrl }}" method="POST">

          @csrf

          <div>
            <div class="text-sm font-bold text-gray-500">Email</div>
            <input name="email" type="email" class="w-full text-lg px-0 py-1 border-0 border-b border-gray-300 focus:outline-none focus:border-indigo-500" >
          </div>
          <div class="mt-8">
            <div class="flex justify-between items-center">
              <div class="text-sm font-bold text-gray-500">密碼</div>
              <div>
                <a href="{{ $passwordResetUrl }}" class="text-xs font-semibold text-indigo-600 hover:text-indigo-800
                cursor-pointer">忘記密碼</a>
              </div>
            </div>
            <input name="password" type="password" class="w-full text-lg px-0 py-1 border-0 border-b border-gray-300 focus:outline-none focus:border-indigo-500">
          </div>
          <div class="mt-10">
            <button class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full font-semibold focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-md">
              登入
            </button>
          </div>
        </form>
        {{-- <div class="mt-12 text-sm font-semibold text-gray-700 text-center">
          Don't have an account ? <a class="cursor-pointer text-indigo-600 hover:text-indigo-800">Sign up</a>
        </div> --}}
      </div>

    </div>

  </div>

@endsection
