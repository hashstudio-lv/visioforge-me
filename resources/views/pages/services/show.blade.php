@extends('layouts.dashboard')

@section('dashboard-title')
    {{ $service->name() }}
@endsection

@section('dashboard-content')
    <div
        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5 max-h-137.5 overflow-auto">
        <div
            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                {{ $service->name() }}
            </h2>
        </div>


        @if($service == \App\Enums\Service::TEXT_TO_PNG)
            @livewire('imagine-text-to-png')
        @elseif($service == \App\Enums\Service::TEXT_TO_IMAGE)
            @livewire('imagine-text-to-image')
        @elseif($service == \App\Enums\Service::BACKGROUND_REMOVER)
            @livewire('background-remover')
        @elseif($service == \App\Enums\Service::IMAGE_UPSCALE)
            @livewire('image-upscale')
        @elseif($service == \App\Enums\Service::AI_BACKGROUND)
            @livewire('imagine-ai-background')
        @elseif($service == \App\Enums\Service::GENERATE_EMAIL)
            @livewire('email-generate')
        @elseif($service == \App\Enums\Service::GENERATE_AGREEMENT)
            @livewire('agreement-generate')
        @endif
    </div>
@endsection
