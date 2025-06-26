<div>
    <div class="form-group mb-2">
        <label for="format">
            {{ __('Format') }}:
        </label>

        <select
            wire:model="format"
            class="form-control"
            @if ($balance <= 0) disabled @endif
        >
            @foreach (\App\Services\ImageService::AVAILABLE_FORMATS as $format)
                <option value="{{ $format }}">{{ ".{$format}" }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-2">
        <label for="size">
            {{ __('Size') }}:
        </label>

        <select
            wire:model="size"
            class="form-control"
            @if ($balance <= 0) disabled @endif
        >
            @foreach (\App\Services\ImageService::AVAILABLE_SIZES as $key => $size)
                <option value="{{ $key }}">{{ "{$size['width']}x{$size['height']}" }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-2">
        <label for="size">
            {{ __('Your title') }}:
        </label>
        <input
            type="text"
            wire:model="title"
            class="form-control"
            @if ($balance <= 0) disabled @endif
        >
    </div>

    <div class="form-group">
        <label for="size">
            {{ __('Your request') }}:
        </label>
        <textarea
            rows="5"
            wire:model="prompt"
            class="form-control"
            @if ($balance <= 0) disabled @endif
        ></textarea>
    </div>

    @if ($balance <= 0)
        <div class="mt-4">
            {{ __("You don't have enough ART to make the purchase. Please make a deposit.") }}
        </div>

        <div class="mt-3">
            <a
                href="{{ route('deposits.create') }}"
                class="btn-main btn-wallet"
            >
                {{ __('Make a deposit') }}
            </a>
        </div>
    @else
        <button
            class="btn-main btn-fullwidth mt-4"
            wire:click="download"
            wire:loading.attr="disabled"
            wire:loading.remove
        >
            {{ __('Generate') }}
        </button>

        <div
            class="mt-3"
            wire:loading
        >
            <span>{{ __('Loading... Please wait while your files are being prepared.') }}</span>
        </div>
    @endif

    <script>
        window.addEventListener('fileDownload', event => {
            const downloadUrl = event.detail;
            console.log(downloadUrl[0]);
            const link = document.createElement('a');
            link.href = downloadUrl;
            // link.download = true;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>
</div>
