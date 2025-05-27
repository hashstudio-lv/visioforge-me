<div>
    @if(!empty($email))
        <div>
            {!! nl2br(e($email)) !!}
        </div>
        <div>
            <a href="{{ route('orders.generate-email') }}" class="btn-main btn-fullwidth mt-4">
                {{ __('Generate another one') }}
            </a>
        </div>
    @else
        <div class="mb-25px">
            <label class="text-contentColor dark:text-contentColor-dark mb-10px block"
                   for="input-prompt">{{ __('Your prompt') }}</label>
            <textarea rows="5" wire:model.live="prompt" id="input-prompt"
                      class="@if($balance <= 0) cursor-not-allowed @endif w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      @if($balance <= 0) disabled @endif></textarea>
        </div>

        @if($balance <= 0)
            <div class="flex flex-col justify-center items-center">
                <div class="mt-4">
                    {{ __("You don't have enough VFT to make the purchase. Please make a deposit.") }}
                </div>

                <div class="mt-5">
                    <a href="{{ route('deposits.create') }}" class="whitespace-nowrap text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                        {{ __('Make a deposit') }}
                    </a>
                </div>
            </div>
        @else
            <button class="btn-main btn-fullwidth mt-4"
                    wire:click="download"
                    wire:loading.attr="disabled"
                    wire:loading.remove>
                {{ __('Generate') }}
            </button>

            <div class="mt-3" wire:loading>
                <span>{{ __('Loading... Please wait while your files are being prepared.') }}</span>
            </div>
        @endif
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
