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
        <label class="font-bold mb-10px block">{{ __('Templates') }}</label>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6" x-data="{ selected: '' }">
            @foreach([
    [
        'title' => 'Sales & Marketing',
        'items' => [
            ['title' => 'Cold Outreach to Potential Client', 'value' => 'Cold Outreach to Potential Client'],
            ['title' => 'Follow-Up After Sales Call', 'value' => 'Follow-Up After Sales Call'],
            ['title' => 'Product Demo Invitation', 'value' => 'Product Demo Invitation'],
            ['title' => 'Upsell Email to Existing Customer', 'value' => 'Upsell Email to Existing Customer'],
            ['title' => 'Promotional Offer Announcement', 'value' => 'Promotional Offer Announcement'],
        ]
    ],
    [
        'title' => 'Customer & Support',
        'items' => [
            ['title' => 'Order Confirmation Email', 'value' => 'Order Confirmation Email'],
            ['title' => 'Shipping Delay Notification', 'value' => 'Shipping Delay Notification'],
            ['title' => 'Refund Process Update', 'value' => 'Refund Process Update'],
            ['title' => 'Troubleshooting Response Email', 'value' => 'Troubleshooting Response Email'],
            ['title' => 'Satisfaction Survey Request', 'value' => 'Satisfaction Survey Request'],
        ]
    ],
    [
        'title' => 'Internal & HR',
        'items' => [
            ['title' => 'New Employee Welcome Email', 'value' => 'New Employee Welcome Email'],
            ['title' => 'Performance Review Request', 'value' => 'Performance Review Request'],
            ['title' => 'Internal Policy Update Notice', 'value' => 'Internal Policy Update Notice'],
            ['title' => 'Team Meeting Agenda Email', 'value' => 'Team Meeting Agenda Email'],
            ['title' => 'Remote Work Approval Email', 'value' => 'Remote Work Approval Email'],
        ]
    ]
] as $group)
                <!-- Sales & Marketing -->
                <div>
                    <h4 class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mb-10px">{{ $group['title'] }}</h4>
                    <ul>
                        @foreach($group['items'] as $item)
                            <li class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
{{--                                <p class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">--}}
{{--                                    Instructor:--}}
{{--                                </p>--}}
{{--                                <p class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">--}}
{{--                                    D. Willaim--}}
{{--                                </p>--}}
                                <label class="flex items-center space-x-2 cursor-pointer text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                    <input type="radio" name="template" value="{{ $item['value'] }}" x-model="selected"
                                           class="text-primaryColor">
                                    <span class="text-sm text-contentColor ml-2">{{ $item['title'] }}</span>
                                </label>
                            </li>

                        @endforeach
                    </ul>

                </div>
            @endforeach
        </div>

        <div class="mb-25px">
            <label class="font-bold mb-10px block"
                   for="input-prompt">{{ __('Enter key details for your email...') }}</label>
            <textarea rows="5" wire:model.live="prompt" id="input-prompt"
                      placeholder=""
                      class="@if($balance <= 0) cursor-not-allowed @endif w-full pt-5 pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      @if($balance <= 0) disabled @endif></textarea>
        </div>

        @if($balance <= 0)
            <div class="flex flex-col justify-center items-center">
                <div class="mt-4">
                    {{ __("You don't have enough VFT to make the purchase. Please make a deposit.") }}
                </div>

                <div class="mt-5">
                    <a href="{{ route('deposits.create') }}"
                       class="whitespace-nowrap text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                        {{ __('Make a deposit') }}
                    </a>
                </div>
            </div>
        @else
            <button
                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
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
