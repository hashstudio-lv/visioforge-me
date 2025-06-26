@extends("themes.itsol.layouts.app")

@section("content")
    <section class="section bg-n8">
        <div class="container">
            <div class="mx-auto mb-10 max-w-[921px] text-center lg:mb-[60px]">
                <h5 class="h5 text-primary mb-5">{{ __('Got a Question?') }}</h5>
                <h2 class="h2 text-title mb-5">{{ __('We are Here to Answer It!') }}</h2>
                <p class="text-para">
                    {{ __('Please send us information about your project. One of our project managers shall evaluate your project requirements and give you a formal proposal. Detailed information will help us evaluate your project accurately.') }}
                </p>
            </div>
            <div class="grid grid-cols-12 items-center gap-6">
                <div class="order-1 col-span-12 lg:col-span-6">
                    <ul>
                        <li>
                            <a
                                class="border-n6 group flex items-center justify-between border-b px-4 py-8 duration-300 lg:py-12">
                                <div>
                                    <h4 class="h4 text-title  mb-4">{{ __('Our Address') }}</h4>
                                    <p class="text-para ">{{ __(env('COMPANY_ADDRESS')) }}</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a
                                class="border-n6 group flex items-center justify-between border-b px-4 py-8 duration-300 lg:py-12"
                            >
                                <div>
                                    <h4 class="h4 text-title mb-4">{{ __('Company Details') }}</h4>
                                    <p class="text-para">NIP: {{ env('COMPANY_NIP') }}</p>
                                    <p class="text-para">REGON: {{ env('COMPANY_REGON') }}</p>
                                    <p class="text-para">KRS: {{ env('COMPANY_KRS') }}</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a
                                class="hover:bg-primary group flex items-center justify-between px-4 py-8 duration-300 lg:py-12"
                                href="mailto:info@visioforge.me"
                            >
                                <div>
                                    <h4 class="h4 text-title group-hover:text-n8 mb-4">{{ __('Support') }}</h4>
                                    <p class="text-primary group-hover:text-n8">{{ __(env('COMPANY_EMAIL')) }}</p>
                                </div>
                                <span
                                    class="bg-primary text-n8 group-hover:bg-secondary flex items-center justify-center rounded-full p-2"
                                >
                                    <i class="ti ti-chevron-right text-[24px]"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="order-2 col-span-12 lg:col-span-6">
                    <form
                        class="bg-primary md:spy40px rounded-2xl px-3 py-10 sm:px-4"
                        x-data="{
                            name: '',
                            email: '',
                            message: '',
                            resultMessage: '',

                            get isSubmitAllowed() {
                                return this.name.length > 0 &&
                                    this.email.length > 0 &&
                                    this.message.length > 0 &&
                                    /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email);
                            },

                            async handleSubmit() {
                                if (!this.isSubmitAllowed) return;

                                this.resultMessage = @js(__('Thank you! Form has been submitted.'));
                                this.name = '';
                                this.email = '';
                                this.message = '';
                            }
                        }"
                        @submit.prevent="handleSubmit"
                    >
                        <h3 class="text-n8 mb-6 text-center text-3xl font-bold md:text-left">
                            {{ __("Contact us!") }}
                        </h3>

                        <div class="col-span-2 mb-4 md:col-span-1">
                            <input
                                type="text"
                                x-model="name"
                                placeholder="Name*"
                                class="border-n5 text-n8 focus:border-n7 w-full rounded-[30px] border bg-transparent px-7 py-3 focus:outline-none"
                                required
                            />
                        </div>

                        <div class="col-span-2 mb-4 md:col-span-1">
                            <input
                                type="email"
                                x-model="email"
                                placeholder="Email*"
                                class="border-n5 text-n8 focus:border-n7 w-full rounded-[30px] border bg-transparent px-7 py-3 focus:outline-none"
                                required
                            />
                        </div>

                        <div class="col-span-2 mb-4">
                            <textarea
                                x-model="message"
                                placeholder="Let us know what you need"
                                rows="4"
                                class="border-n5 text-n8 focus:border-n7 w-full rounded-[30px] border bg-transparent px-7 py-3 focus:outline-none"
                                required
                            ></textarea>
                        </div>

                        <div
                            x-show="resultMessage"
                            x-text="resultMessage"
                            class="text-n8 mb-4 text-center"
                        ></div>

                        <div class="col-span-2 mt-4 flex justify-center md:mt-7">
                            <button
                                type="submit"
                                class="btn border-yellow bg-yellow px-12 disabled:pointer-events-none disabled:opacity-50"
                                :disabled="!isSubmitAllowed"
                            >
                                <span>{{ __("Submit") }}</span>
                                <span
                                    x-show="isLoading"
                                    class="flex items-center"
                                >
                                    <svg
                                        class="-ml-1 mr-2 h-5 w-5 animate-spin text-white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <circle
                                            class="opacity-25"
                                            cx="12"
                                            cy="12"
                                            r="10"
                                            stroke="currentColor"
                                            stroke-width="4"
                                        ></circle>
                                        <path
                                            class="opacity-75"
                                            fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                        ></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
