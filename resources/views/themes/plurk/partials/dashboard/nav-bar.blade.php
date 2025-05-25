<ul class="flex flex-col sm:flex-row gap-3 sm:gap-6 overflow-auto" data-aos="fade-up" data-aos-duration="800">
    @foreach([
        ['route' => 'orders.text-to-video', 'label' => __('Text to Video')],
        ['route' => 'orders.image-to-video', 'label' => __('Image to Video')],
        ['route' => 'orders.background-remover', 'label' => __('Background Remover')],
        ['route' => 'orders.image-upscale', 'label' => __('Image Upscale')],
    ] as $item)
        <li class="@if(request()->route()->getName() === $item['route']) bg-primary text-white shadow-md @endif">
            <a href="{{ route($item['route']) }}"
               class="btn inline-block px-6 py-3 rounded-md bg-gray-100 dark:bg-gray-800 hover:bg-primary hover:text-white transition-colors duration-300 font-mulish font-medium @if(request()->route()->getName() === $item['route']) text-white @else text-gray-600 dark:text-gray-300 @endif">
                {{ $item['label'] }}
            </a>
        </li>
    @endforeach
</ul>