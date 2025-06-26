<div>
    <div
        class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
        <img src="{{ $product->getThumbnailUrl() }}" alt=""
             class="pointer-events-none object-cover group-hover:opacity-75">
        <a href="{{ route('products.show', $product->slug) }}" type="button" class="absolute inset-0 focus:outline-none">
            <span class="sr-only">View details for {{ $product->title }}</span>
        </a>
    </div>
    <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">{{ $product->title }}</p>
    <p class="pointer-events-none block text-sm font-medium text-gray-500">-</p>
</div>
