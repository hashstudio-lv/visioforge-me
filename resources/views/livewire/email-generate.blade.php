<div>
    @if (!empty($email))
        <div>
            {!! nl2br(e($email)) !!}
        </div>
        <div class="mt-5">
            <a
                href="{{ $order->url }}"
                download
                target="_blank"
                class="md:text-size-15 text-whiteColor bg-primaryColor border-primaryColor px-25px py-15px hover:text-primaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor inline-block rounded border text-sm"
            >
                {{ __('Download') }}
            </a>
            <a
                href="{{ route('services.show', 'generate-email') }}"
                class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor inline-block whitespace-nowrap rounded border"
            >
                {{ __('Generate another one') }}
            </a>
        </div>
    @else
        <label class="mb-10px block font-bold">{{ __('Templates') }}</label>

        <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-3">
            @foreach ([
                [
                    'title' => __('Sales & Marketing'),
                    'items' => [['title' => __('Cold Outreach to Potential Client'), 'value' => 'Cold Outreach to Potential Client'], ['title' => __('Follow-Up After Sales Call'), 'value' => 'Follow-Up After Sales Call'], ['title' => __('Product Demo Invitation'), 'value' => 'Product Demo Invitation'], ['title' => __('Upsell Email to Existing Customer'), 'value' => 'Upsell Email to Existing Customer'], ['title' => __('Promotional Offer Announcement'), 'value' => 'Promotional Offer Announcement']],
                ],
                [
                    'title' => __('Customer & Support'),
                    'items' => [['title' => __('Order Confirmation Email'), 'value' => 'Order Confirmation Email'], ['title' => __('Shipping Delay Notification'), 'value' => 'Shipping Delay Notification'], ['title' => __('Refund Process Update'), 'value' => 'Refund Process Update'], ['title' => __('Troubleshooting Response Email'), 'value' => 'Troubleshooting Response Email'], ['title' => __('Satisfaction Survey Request'), 'value' => 'Satisfaction Survey Request']],
                ],
                [
                    'title' => __('Internal & HR'),
                    'items' => [['title' => __('New Employee Welcome Email'), 'value' => 'New Employee Welcome Email'], ['title' => __('Performance Review Request'), 'value' => 'Performance Review Request'], ['title' => __('Internal Policy Update Notice'), 'value' => 'Internal Policy Update Notice'], ['title' => __('Team Meeting Agenda Email'), 'value' => 'Team Meeting Agenda Email'], ['title' => __('Remote Work Approval Email'), 'value' => 'Remote Work Approval Email']],
                ],
            ] as $group)
                <div>
                    <h4
                        class="leading-1 text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mb-10px text-sm font-semibold uppercase">
                        {{ $group['title'] }}</h4>
                    <ul>
                        @foreach ($group['items'] as $item)
                            <li
                                class="py-10px border-borderColor dark:border-borderColor-dark flex items-center justify-between border-b">
                                <label
                                    class="text-contentColor dark:text-contentColor-dark leading-1.8 flex cursor-pointer items-center space-x-2 text-sm font-medium"
                                >
                                    <input
                                        type="radio"
                                        name="template"
                                        value="{{ $item['value'] }}"
                                        wire:model.live="template"
                                        class="text-primaryColor"
                                    >
                                    <span class="text-contentColor ml-2 text-sm">{{ $item['title'] }}</span>
                                </label>
                            </li>
                        @endforeach
                    </ul>

                </div>
            @endforeach
        </div>

        <div class="mb-25px">
            <label
                class="mb-10px block font-bold"
                for="input-prompt"
            >{{ __('Enter key details for your email...') }}</label>
            <textarea
                id="input-prompt"
                rows="5"
                wire:model.live="prompt"
                placeholder=""
                class="@if ($balance <= 0) cursor-not-allowed @endif text-contentColor dark:text-contentColor-dark border-borderColor dark:border-borderColor-dark placeholder:text-placeholder w-full rounded border bg-transparent pl-5 pt-5 text-sm font-medium placeholder:opacity-80 focus:outline-none"
                @if ($balance <= 0) disabled @endif
            ></textarea>
        </div>

        @if ($balance <= 0)
            <div class="flex flex-col items-center justify-center">
                <div class="mt-4">
                    {{ __("You don't have enough VFT to make the purchase. Please make a deposit.") }}
                </div>

                <div class="mt-5">
                    <a
                        href="{{ route('deposits.create') }}"
                        class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor inline-block whitespace-nowrap rounded border"
                    >
                        {{ __('Make a deposit') }}
                    </a>
                </div>
            </div>
        @else
            <button
                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border-primaryColor hover:text-primaryColor hover:bg-whiteColor dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark group inline-block w-full rounded border"
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
