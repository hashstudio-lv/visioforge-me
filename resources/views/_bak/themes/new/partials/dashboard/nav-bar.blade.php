<div
    class="service-category mb-10 pt-[25px] pb-5 px-[25px] rounded-[10px] border-2 border-solid border-black">
    <div class="font-bold">{{ __('Balance') }}:</div>
    <h4 class="mb-8">{{ auth()->user()->balance }} SAT</h4>

    @foreach([
        [
            'title' => 'Profile',
            'items' => [
                ['url' => route('services.show', ''), 'title' => __('Orders')],
                ['url' => route('deposits.index'), 'title' => __('Deposits')]
            ]
        ],
        [
            'title' => 'Generation',
            'items' => [
                ['url' => route('services.show', 'text-to-image'), 'title' => __('Text to Image')],
                ['url' => route('services.show', 'text-to-png'), 'title' => __('Text to PNG')]
            ]
        ],
        [
            'title' => 'Editing',
            'items' => [
                ['url' => route('services.show', 'background-remover'), 'title' => __('Background Remover')],
                ['url' => route('services.show', 'image-upscale'), 'title' => __('Image Upscale')],
//                ['url' => route('services.show', 'ai-resize'), 'title' => __('AI Resize')],
                ['url' => route('services.show', 'ai-background'), 'title' => __('AI Background')]
            ]
        ],
    ] as $group)
        <h4 class="text-black 2xl:text-[22px] lg:text-[22px] md:text-[22px] sm:text-[22px] xsm:text-[22px] @if(!$loop->first) mt-[30px] @endif">
            {{ $group['title'] }}
        </h4>
        @if(!empty($group['items']))
            <ul class="mb-0 pl-0 list-none ">
                @foreach($group['items'] as $item)
                    <li class="">
                        <a
                           class="text-[18px] block leading-[41px] text-[color:var(--text-color)] transition-all duration-[0.3s] ease-[ease-in-out] hover:text-[color:var(--prime-ten)]",
                           href="{{ $item['url'] }}"
                        >
                            {{ $item['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    @endforeach
</div>
