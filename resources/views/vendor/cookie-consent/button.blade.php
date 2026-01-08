<form action="{!! $url !!}" {!! $attributes !!}>
    @csrf
    <button type="submit" class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor inline-block whitespace-nowrap rounded border w-full">
        <span class="{!! $basename !!}__label">{{ $label }}</span>
    </button>
</form>
