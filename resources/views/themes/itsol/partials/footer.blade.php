<footer
    class="bg-primary spt120px"
    style="background-image: url(&quot;{{ asset("/assets3/images/footer-1-bg.png") }}&quot;); background-size: cover; background-repeat: no-repeat"
>
    <div class="pt-10 xl:pt-0">
        <div>
            <div class="container">
                <div class="text-n8 grid grid-cols-12 gap-4 gap-y-8 pb-14 lg:pb-[120px]">
                    <div class="col-span-12 md:order-1 md:col-span-6 xl:col-span-3">
                        <a
                            href="{{ route("home") }}"
                            class="h4 mb-6 inline-block"
                        >
                            {{ env("APP_NAME") }}
                        </a>
                        <p class="mb-6 text-lg">
                            {{ __("We transform images with AI—creating, enhancing and automating visuals for your business. Generate stunning artwork, perfect photos, and streamline workflows with intelligent algorithms.") }}
                        </p>
                        <div class="flex gap-2">
                            <a
                                href="{{ env("SOCIAL_NETWORK_FACEBOOK") }}"
                                class="border-n6 bg-primary/10 text-n8 hover:bg-n8 hover:text-primary flex items-center justify-center rounded-full border p-2 duration-300 md:p-3"
                            >
                                <i class="ti ti-brand-facebook text-[24px]"></i>
                            </a>
                            <a
                                href="{{ env("SOCIAL_NETWORK_X") }}"
                                class="border-n6 bg-primary/10 text-n8 hover:bg-n8 hover:text-primary flex items-center justify-center rounded-full border p-2 duration-300 md:p-3"
                            >
                                <i class="ti ti-brand-x text-[24px]"></i>
                            </a>
                            <a
                                href="{{ env("SOCIAL_NETWORK_INSTAGRAM") }}"
                                class="border-n6 bg-primary/10 text-n8 hover:bg-n8 hover:text-primary flex items-center justify-center rounded-full border p-2 duration-300 md:p-3"
                            >
                                <i class="ti ti-brand-instagram text-[24px]"></i>
                            </a>
                            <a
                                href="{{ env("SOCIAL_NETWORK_YOUTUBE") }}"
                                class="border-n6 bg-primary/10 text-n8 hover:bg-n8 hover:text-primary flex items-center justify-center rounded-full border p-2 duration-300 md:p-3"
                            >
                                <i class="ti ti-brand-youtube text-[24px]"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:order-3 md:col-span-4 xl:col-span-2">
                        <h5 class="h5 mb-5 font-semibold lg:mb-7">{{ __("Links") }}</h5>
                        <ul class="flex flex-col gap-1">
                            @foreach ([["url" => route("home"), "title" => __("Home")], ["url" => route("products.index"), "title" => __("Creatives")], ["url" => route("pages.image-generation"), "title" => __("Image Generation")], ["url" => route("pages.image-editing"), "title" => __("Image Editing")], ["url" => route("pages.show", "contact-us"), "title" => __("Contact Us")]] as $item)
                                <li>
                                    <a
                                        href="{{ $item["url"] }}"
                                        class="text-n8 hover:text-secondary text-lg duration-300"
                                    >
                                        {{ $item["title"] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:order-4 md:col-span-4 xl:col-span-2">
                        <h5 class="h5 mb-5 font-semibold lg:mb-7">{{ __("Services") }}</h5>
                        <ul class="flex flex-col gap-1">
                            @foreach ([
        [
            "title" => __("Background Remover"),
            "url" => route("services.show", \App\Enums\Service::BACKGROUND_REMOVER->value),
        ],
        [
            "title" => __("Image Upscale"),
            "url" => route("services.show", \App\Enums\Service::IMAGE_UPSCALE->value),
        ],
        [
            "title" => __("Text to Image"),
            "url" => route("services.show", \App\Enums\Service::TEXT_TO_IMAGE->value),
        ],
        [
            "title" => __("Text to PNG"),
            "url" => route("services.show", \App\Enums\Service::TEXT_TO_PNG->value),
        ],
        [
            "title" => __("AI Background"),
            "url" => route("services.show", \App\Enums\Service::AI_BACKGROUND->value),
        ],
    ] as $service)
                                <li>
                                    <a
                                        href="{{ $service["url"] }}"
                                        class="text-n8 hover:text-secondary text-lg duration-300"
                                    >
                                        {{ $service["title"] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:order-5 md:col-span-4 xl:col-span-2">
                        <h5 class="h5 mb-5 font-semibold lg:mb-7">
                            {{ __("Languages") }}
                        </h5>
                        <ul class="flex flex-col gap-1">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if($localeCode !== 'lv')
                                    <li>
                                        <a
                                            class="text-n8 hover:text-secondary text-lg capitalize duration-300"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                        >
                                            {{ $properties["native"] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:order-2 xl:order-5 xl:col-span-3">
                        <h5 class="h5 mb-5 font-semibold lg:mb-7">
                            {{ __("Getting Started") }}
                        </h5>
                        <p class="mb-5 text-lg">
                            {{ __("Unlock the Full Power of AI Image Generation & Editing") }}
                        </p>
                        <div class="flex flex-col items-start gap-5">
                            <form
                                x-data="{
                                    email: '',

                                    get isSubmitAllow() {
                                        const isAllExist = this.email.length > 0;
                                        const isValidEmail = (/.+@.+\..+/i).test(this.email);

                                        return isAllExist && isValidEmail;
                                    },
                                }"
                                method="GET"
                                action="{{ route("login") }}"
                            >
                                <input
                                    x-model="email"
                                    name="email"
                                    type="text"
                                    class="border-n4 focus:border-n6 mb-5 w-full rounded-lg border bg-transparent p-3 focus:outline-none"
                                    placeholder="{{ __("Enter your email address") }}"
                                    required
                                />
                                <button
                                    x-bind:disabled="!isSubmitAllow"
                                    class="btn-white px-12 disabled:pointer-events-none disabled:opacity-50"
                                >
                                    <i class="ti ti-send"></i>
                                    {{ __("Sign In") }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-n3 text-n8 container border-t py-4 text-lg lg:py-[30px]">
            <div class="grid grid-cols-12 items-center gap-6">
                <div class="col-span-12 lg:col-span-6">
                    <p class="text-center lg:text-start">
                        {{ __("Copyright") }}
                        {{ now()->format("Y") }}
                        <a
                            href="{{ route("home") }}"
                            class="hover:text-secondary duration-300 hover:underline"
                        >
                            {{ env("APP_NAME") }}
                        </a>
                        {{ __("All Rights Reserved.") }}
                    </p>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <ul class="divide-n8 flex flex-wrap justify-center divide-x lg:justify-end">
                        @foreach ([["url" => route("pages.show", "terms-and-conditions"), "title" => __("Terms & Conditions")], ["url" => route("pages.show", "privacy-policy"), "title" => __("Privacy Policy")], ["url" => route("pages.show", "cookie-policy"), "title" => __("Cookie Policy")]] as $item)
                            <li>
                                <a
                                    href="{{ $item["url"] }}"
                                    class="text-n8 hover:text-secondary inline-block px-3 text-lg duration-300"
                                >
                                    {{ $item["title"] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-n3 text-n8 container border-t py-4 text-lg lg:py-[30px]">
            <div class="flex items-center justify-between">
                <div>
                    {{ env("COMPANY_ADDRESS") }} {{ env("COMPANY_PHONE") }}
                </div>

                <div>
                    <div class="flex items-center gap-3">
                        <div>
                            <img
                                src="{{ asset("/assets3/images/visa_brandmark.png") }}"
                                alt="Visa"
                                style="width: 3rem;"
                            >
                        </div>
                        <img>

                        <div>
                            <img
                                src="{{ asset("/assets3/images/mastercard_brandmark.png") }}""
                                alt="Mastercard"
                                style="width: 3rem"
                                alt="3DS"
                                style="width: 5rem;"
                            >
                        </div>
                        <div>
                            <img
                                src="{{ asset("/assets3/images/footer-logo.png") }}"
                                alt="3DS"
                                style="width: 5rem;"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
