@extends('themes.plurk.layouts.app')

@section('content')
    <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
        @include('themes.plurk.partials.dashboard.hero')

        {{--
        <div id="deposit" style="display: none" class="w-[960px] max-w-full bg-white p-4 dark:bg-gray-dark"></div>
        <button type="button" data-fancybox data-src="#deposit"
                class="group flex items-center gap-2.5 mt-2">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="#47BDFF" class="size-6" width="30" height="30">
                    <path
                        d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z"/>
                </svg>
            </span>
            <span class="uppercase text-white duration-200 group-hover:text-primary">
                {{ __('Deposit') }}
            </span>
        </button>
        --}}

        <div class="py-14 md:py-[100px]">
            <div class="container space-y-8">
                <div>
                    @include('themes.plurk.partials.dashboard.nav-bar')
                </div>
                <div class="flex flex-col items-center justify-between sm:flex-row">
                    <div class="heading text-center ltr:sm:text-left rtl:sm:text-right mb-0">
                        <h4>
                            {{ __('Image to Video') }}
                        </h4>
                    </div>
                </div>

                <div class="rounded-3xl bg-white px-4 py-12 dark:bg-gray-dark lg:px-8" x-data="{ loading: false }">
                    @livewire('video-from-image-generate')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>
@endpush
