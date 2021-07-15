{{-- <a href="javascript:void(0)" class="text-2xl"><i class="zwicon-mail"></i></a> --}}

<x-admin::header.dropdown icon-class="text-2xl" :items="
  [
    ['name' => '登出', 'link' => route('auth.logout')],
  ]
">
  <i class="zwicon-user"></i>
</x-admin::header.dropdown>
