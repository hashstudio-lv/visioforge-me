@if ($paginator->hasPages())
    <div
        class="flex justify-between items-center"
    >
        <a
            @class([
                "btn btn-primary",
                "opacity-50 pointer-events-none" => $paginator->currentPage() === $paginator->firstItem(),
            ])
            href="{{ $paginator->previousPageUrl() }}"
        >
            <span class="flex items-center justify-center rounded-full bg-white p-1 text-title">
                <i class="ti ti-chevron-left">
                </i>
            </span>

            {{ __('Previous page') }}
        </a>

        <a
            @class([
                "btn btn-primary",
                "opacity-50 pointer-events-none" => ! $paginator->hasMorePages(),
            ])
            href="{{ $paginator->nextPageUrl() }}"
        >
            {{ __('Next page') }}

            <span class="flex items-center justify-center rounded-full bg-white p-1 text-title">
                <i class="ti ti-chevron-right">
                </i>
            </span>
        </a>
</div>
@endif
