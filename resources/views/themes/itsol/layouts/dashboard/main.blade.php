@extends('themes.itsol.layouts.app')

@section('content')
<section
    class="mt-[71px] bg-cover bg-no-repeat md:mt-[87px] xl:mt-0"
    style="background-image: url('{{ asset('/assets3/images/banner-bg.png') }}')"
>
    <div class="bg-primary bg-opacity-40 py-[52px]">
        <div class="container text-n8 flex justify-between items-center">
            <div>
                <div class="mb-5">
                    {{ __('Balance: :balance SVT', ['balance' => auth()->user()->balance]) }}
                </div>

                <div>
                    <h3 class="h3 mb-2.5">
                        @yield('dashboard-title')
                    </h3>
                    <ul class="flex flex-wrap items-center gap-2">
                        @foreach ([
                            ['title' => __('Dashboard'), 'url' => route('dashboard'), 'is_active' => request()->routeIs('dashboard')],
                            ['title' => __('Deposits'), 'url' => route('deposits.index'), 'is_active' => request()->routeIs('deposits.index')],
                        ] as $link)
                            <li>
                                <a
                                    href="{{ $link['url'] }}"
                                    @class([
                                        "hover:underline",
                                        "underline" => $link['is_active'],
                                    ])
                                >
                                    {{ $link['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div>
                @yield('dashboard-title-additional')
            </div>
        </div>
    </div>
</section>

@hasSection('dashboard-under-content')
    <section class="bg-n8">
        <div class="mt-[30px] container grid-cols-12 gap-6 xl:grid">
            <div class="xxl:col-span-4 col-span-5"></div>
            <div class="max-xl:smt60px xxl:col-span-8 col-span-7">
                @yield('dashboard-under-content')
            </div>
        </div>
    </section>
@endif

<div class="mt-[30px] mb-[220px] container grid-cols-12 gap-6 xl:grid">
    <div class="xxl:col-span-4 col-span-5">
        <div class="sticky top-20">
            <div class="sp30px flex flex-col gap-3 rounded-[30px] bg-[#F7F7FC] lg:gap-5">
                @foreach ([
                    ['title' => __('Orders'), 'url' => route('dashboard'), 'active' => request()->routeIs('dashboard')],
                    ['title' => __('Deposits'), 'url' => route('deposits.index'), 'active' => request()->routeIs('deposits.*')],
                    ['title' => __('Text to Image'), 'url' => route('services.show', 'text-to-image'), 'active' => request()->routeIs('services.show') && request()->route('slug') == 'text-to-image'],
                    ['title' => __('Text to PNG'), 'url' => route('services.show', 'text-to-png'), 'active' => request()->routeIs('services.show') && request()->route('slug') == 'text-to-png'],
                    ['title' => __('Background Remover'), 'url' => route('services.show', 'background-remover'), 'active' => request()->routeIs('services.show') && request()->route('slug') == 'background-remover'],
                    ['title' => __('Image Upscale'), 'url' => route('services.show', 'image-upscale'), 'active' => request()->routeIs('services.show') && request()->route('slug') == 'image-upscale'],
                    ['title' => __('AI Background'), 'url' => route('services.show', 'ai-background'), 'active' => request()->routeIs('services.show') && request()->route('slug') == 'ai-background'],
                ] as $link)
                    <a
                        href="{{ $link['url'] }}"
                        @class([
                            'hover:text-secondary duration-300',
                            'text-secondary font-medium' => $link['active']
                        ])
                    >
                        {{ $link['title'] }}
                    </a>

                    @if (! $loop->last)
                        <div class="h-px w-full bg-[#D4D4EB]"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="max-xl:smt60px xxl:col-span-8 col-span-7">
        @yield('dashboard-content')
    </div>
</div>
</section>
@endsection
