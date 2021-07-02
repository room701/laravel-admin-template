@props([
  'message',
  'wrapperClass' => '',
])

<div class="flex items-center bg-indigo-50 border-t-4 border-indigo-600 px-4 py-4 text-indigo-600 font-semibold shadow-sm {{ $wrapperClass }}">
  {{-- <svg class="h-8 w-8 text-indigo-600 mr-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
  </svg> --}}

  <i class="zwicon-checkmark-circle text-5xl mr-6"></i>

  @if (is_string($message))
    {{ $message }}
  @else
    <ul class="list-disc list-inside">
      @foreach ($message as $item)
        <li>{{ $item }}</li>
      @endforeach
    </ul>
  @endif

</div>
