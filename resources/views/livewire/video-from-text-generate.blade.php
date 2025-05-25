<div>
    <div class="rounded-3xl bg-white px-4 py-12 dark:bg-gray-dark lg:px-8">
        @if($externalId && !$isVideoReady)
            <div wire:poll.3s="checkVideoStatus">
                <p>{{ __('Video is being generated...') }}</p>
            </div>
        @endif

        @if($isVideoReady)
            <div class="flex flex-col justify-center items-center">
                <video autoplay controls width="400">
                    <source src="{{ $videoStatus['video']['url']['generation'][0] ?? '' }}" type="video/mp4">
                </video>

                <a href="{{ $videoStatus['video']['url']['generation'][0] }}" download target="_blank" class="mt-10 btn bg-primary px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                    {{ __('Download Video') }}
                </a>
            </div>
        @endif

        @if(!$externalId)
            <div class="relative">
                <label for=""
                       class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">{{ __('Model') }}</label>
                <select class="h-14 w-full appearance-none rounded-[20px] border-2 border-gray/20 bg-transparent py-3 font-semibold outline-none ltr:pl-4 ltr:pr-10 rtl:pr-4 rtl:pl-10">
                    <option class="text-black">
                        Imagegine V2
                    </option>
                    <option class="text-black">
                        Imagegine V1
                    </option>
                    <option class="text-black">
                        Kling 1.6 SD
                    </option>
                    <option class="text-black">
                        Kling 1.6 Pro
                    </option>
                </select>
            </div>
            <div class="relative mt-10">
                <label for=""
                       class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Style</label>
                <select class="h-14 w-full appearance-none rounded-[20px] border-2 border-gray/20 bg-transparent py-3 font-semibold outline-none ltr:pl-4 ltr:pr-10 rtl:pr-4 rtl:pl-10">
                    <option class="text-black">1:1</option>
                    <option class="text-black">9:16</option>
                    <option class="text-black">16:9</option>
                </select>
            </div>
            <div class="relative mt-10">
                <label for=""
                       class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">{{ __('Style') }}</label>
                <select class="h-14 w-full appearance-none rounded-[20px] border-2 border-gray/20 bg-transparent py-3 font-semibold outline-none ltr:pl-4 ltr:pr-10 rtl:pr-4 rtl:pl-10">
                    <option class="text-black">
                        {{ __('3D Render') }}
                    </option>
                    <option class="text-black">
                        {{ __('Cartoon') }}
                    </option>
                    <option class="text-black">
                        {{ __('Comic') }}
                    </option>
                    <option class="text-black">
                        {{ __('Japanese') }}
                    </option>
                    <option class="text-black">
                        {{ __('Illustration') }}
                    </option>
                </select>
            </div>
            <div class="relative mt-10">
                <input type="text" name="prompt"
                       wire:model="prompt"
                       class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12">
                <label for=""
                       class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">{{ __('Prompt') }}</label>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white">
                    <path d="M1 11.467V18.9267C1 19.7652 1.96993 20.2314 2.6247 19.7076L5.45217 17.4456C5.8068 17.1619 6.24742 17.0073 6.70156 17.0073H16C18.7614 17.0073 21 14.7687 21 12.0073V6.00732C21 3.2459 18.7614 1.00732 16 1.00732H6C3.23858 1.00732 1 3.2459 1 6.00732V7.62225"
                          stroke="currentColor" stroke-width="1.8"
                          stroke-linecap="round"></path>
                    <circle cx="6.05005" cy="9.05713" r="1.25"
                            fill="currentColor"></circle>
                    <circle cx="11.05" cy="9.05713" r="1.25"
                            fill="currentColor"></circle>
                    <circle cx="16.05" cy="9.05713" r="1.25"
                            fill="currentColor"></circle>
                </svg>
            </div>
            @if($balance <= 0)
                <div class="text-center mt-10">
                    <div>
                        {{ __("You don't have enough ART to make the purchase. Please make a deposit.") }}
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('deposits.create') }}" class="btn-main btn-wallet">
                            {{ __('Make a deposit') }}
                        </a>
                    </div>
                </div>
            @else
                <div wire:loading>
                    <span>{{ __('Video is being generated...') }}</span>
                </div>

                @if(!$externalId)
                    <div class="mt-10 text-center ltr:lg:text-right rtl:lg:text-left">
                        <button class="btn bg-primary px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary"
                                wire:click="submit"
                                wire:loading.attr="disabled"
                                wire:loading.remove>
                            {{ __('Generate') }}
                        </button>
                    </div>
                @endif
            @endif
        @endif
    </div>
</div>
