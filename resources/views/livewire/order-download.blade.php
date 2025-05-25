<div>
    @if($order->count == 0)
        <div>{{ __('Your limit for generating 10 images has been reached.') }}.</div>
    @else
        <div class="form-group">
            <label for="format">
                {{ __('Format') }}:
            </label>

            <select wire:model="format" class="form-control">
                @foreach(\App\Services\ImageService::AVAILABLE_FORMATS as $format)
                    <option value="{{ $format }}">{{ ".{$format}" }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="size">
                {{ __('Size') }}:
            </label>

            <select wire:model="size" class="form-control">
                @foreach(\App\Services\ImageService::AVAILABLE_SIZES as $key => $size)
                    <option value="{{ $key }}">{{ "{$size['width']}x{$size['height']}" }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="size">
                {{ __('Prompt') }}:
            </label>
            <textarea rows="5" wire:model="prompt" class="form-control"></textarea>
        </div>

        <button class="btn-main btn-fullwidth"
                wire:click="download"
                wire:loading.attr="disabled"
                wire:loading.remove>
            {{ __('Generate') }}
        </button>

        <div class="text-center mt-1 text-sm">{{ __(':count generations left', ['count' => $order->count]) }}</div>

        <div class="mt-3" wire:loading>
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
