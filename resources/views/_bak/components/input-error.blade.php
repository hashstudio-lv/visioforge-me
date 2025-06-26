@props(['messages'])

@if (sizeof($messages))
    <div {{ $attributes->merge(['class' => 'text-sm text-danger']) }}>
        {{ $messages[0] }}
    </div>
@endif
