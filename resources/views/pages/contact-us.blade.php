@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <section>
            <div
                class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5"
            >
                <div>
                    <img
                        class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
                        src="{{ asset('assets/images/herobanner/herobanner__1.png') }}"
                        alt=""
                    ><img
                        class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                        src="{{ asset('assets/images/herobanner/herobanner__2.png') }}"
                        alt=""
                    ><img
                        class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                        src="{{ asset('assets/images/herobanner/herobanner__3.png') }}"
                        alt=""
                    >

                    <img
                        class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                        src="{{ asset('assets/images/herobanner/herobanner__5.png') }}"
                        alt=""
                    >
                </div>
                <div class="container">
                    <div class="text-center">
                        <h1
                            class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3"
                        >
                            {{ __('Contact Us') }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a
                                    href="{{ route('login') }}"
                                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                                >{{ __('Home') }} <i class="icofont-simple-right"></i
                                    ></a>
                            </li>
                            <li>
                                <span class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Contact Us') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- address section -->
        <section>
            <div class="container">
                <div
                    class="flex justify-center pt-100px pb-20"
                >
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                        <!-- mail -->
                        <div
                            class="pt-15px pr-35px pb-25px pl-5 lg:pt-10 lg:pb-10 lg:pl-35px transition-all duration-300 border border-borderColor dark:border-borderColor-dark shadow-address hover:shadow-address-hover hover:-translate-y-5px flex items-center gap-5 lg:gap-30px"
                        >
                        <div>
                            <svg
                                width="64"
                                height="64"
                                viewBox="0 0 64 64"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <g clip-path="url(#clip0_342_4736)">
                                    <rect width="64" height="64" fill="white"></rect>
                                    <path
                                        d="M63.6998 20.3413L54.4316 13.7947V4.23233C54.3387 3.28509 53.609 2.52481 52.6663 2.39346H12.0633C11.1207 2.52495 10.3908 3.28509 10.2979 4.23233V13.7211L0.662001 20.3411C0.280316 20.6182 0.0385768 21.048 0 21.518V56.4572C0.125304 57.4162 0.879946 58.171 1.83888 58.2961H62.8907C63.6998 58.2961 63.994 57.3399 63.994 56.4572V21.5181C63.994 21.0768 64.0675 20.6354 63.6998 20.3413ZM54.4316 17.3254L60.7575 21.6651L54.4316 26.4463V17.3254ZM13.2402 5.33572H51.4894V28.7267L32.3647 43.1437L13.24 28.7267V5.33572H13.2402ZM10.2979 17.2519V26.52L3.97201 21.6653L10.2979 17.2519ZM2.94226 24.681L23.5381 40.2749L2.94226 54.1771V24.681ZM6.47302 55.354L26.0389 42.1875L31.2615 46.1595C31.5571 46.388 31.9177 46.5168 32.2912 46.5272C32.5855 46.5272 32.7326 46.3801 33.0267 46.1595L38.4698 41.9667L58.2565 55.354H6.47302ZM61.0518 53.6623L40.8974 40.1278L61.0518 24.681V53.6623Z"
                                        fill="#5F2DED"
                                    ></path>
                                    <path
                                        d="M20.5961 14.898H27.2161C28.0287 14.898 28.6873 14.2394 28.6873 13.4269C28.6873 12.6144 28.0287 11.9557 27.2161 11.9557H20.5961C19.7836 11.9557 19.125 12.6144 19.125 13.4269C19.125 14.2394 19.7836 14.898 20.5961 14.898Z"
                                        fill="#5F2DED"
                                    ></path>
                                    <path
                                        d="M20.5961 21.5181H44.1342C44.9467 21.5181 45.6053 20.8595 45.6053 20.047C45.6053 19.2345 44.9467 18.5759 44.1342 18.5759H20.5961C19.7836 18.5759 19.125 19.2345 19.125 20.047C19.125 20.8595 19.7836 21.5181 20.5961 21.5181Z"
                                        fill="#5F2DED"
                                    ></path>
                                    <path
                                        d="M45.6052 26.667C45.6052 25.8545 44.9466 25.1959 44.1341 25.1959H20.5961C19.7836 25.1959 19.125 25.8545 19.125 26.667C19.125 27.4796 19.7836 28.1382 20.5961 28.1382H44.1342C44.9466 28.1382 45.6052 27.4796 45.6052 26.667Z"
                                        fill="#5F2DED"
                                    ></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_342_4736">
                                        <rect width="64" height="64" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="">
                            <h3
                                class="text-2xl font-semibold text-blackColor dark:text-blackColor-dark leading-38px"
                            >
                                {{ __('Mail address') }}
                            </h3>
                            <p
                                class="text-size-13 lg:text-size-15 text-contentColor dark:text-contentColor-dark leaing-5"
                            >
                                {{ env('COMPANY_EMAIL') }}
                            </p>
                        </div>
                    </div>
                    <!-- office -->
                    <div
                        class="pt-15px pr-35px pb-25px pl-5 lg:pt-10 lg:pb-10 lg:pl-35px transition-all duration-300 border border-borderColor dark:border-borderColor-dark shadow-address hover:shadow-address-hover hover:-translate-y-5px flex items-center gap-5 lg:gap-30px"
                    >
                        <div>
                            <svg
                                width="46"
                                height="60"
                                viewBox="0 0 46 60"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M38.8868 48.524C37.0927 47.7314 34.7762 47.0908 32.1029 46.6396C32.883 45.8918 33.6807 45.0921 34.4804 44.2431C37.6741 40.8522 40.2225 37.3879 42.0549 33.9461C44.3712 29.5951 45.5457 25.2656 45.5457 21.0781C45.5457 9.45565 35.3298 0 22.7728 0C10.2159 0 0 9.45565 0 21.0781C0 25.2656 1.17445 29.5951 3.49082 33.9462C5.32315 37.388 7.87156 40.8523 11.0653 44.2432C11.8649 45.0922 12.6627 45.8919 13.4428 46.6397C10.7695 47.0909 8.45303 47.7315 6.65891 48.5241C3.24665 50.0313 2.53032 51.7517 2.53032 52.9295C2.53032 54.4209 3.64479 56.5425 8.95365 58.1805C12.6637 59.3252 17.5714 59.9556 22.7728 59.9556C27.9743 59.9556 32.882 59.3252 36.592 58.1805C41.9009 56.5425 43.0154 54.4209 43.0154 52.9295C43.0154 51.7517 42.299 50.0313 38.8868 48.524V48.524ZM2.53032 21.0781C2.53032 10.747 11.6111 2.34201 22.7728 2.34201C33.9346 2.34201 43.0154 10.747 43.0154 21.0781C43.0154 29.7724 37.3572 37.6156 32.6106 42.6642C28.5331 47.0012 24.4062 50.0812 22.7728 51.236C21.1391 50.0808 17.0122 47.0008 12.9351 42.6644C8.18848 37.6156 2.53032 29.7724 2.53032 21.0781V21.0781ZM35.7918 55.9588C32.333 57.0258 27.7095 57.6135 22.7728 57.6135C17.8362 57.6135 13.2127 57.0258 9.75386 55.9588C6.28973 54.89 5.06063 53.6589 5.06063 52.9295C5.06063 51.713 8.35776 49.6179 15.6671 48.6818C16.7496 49.6341 17.7575 50.463 18.6383 51.157C17.2962 51.5861 16.4471 52.2208 16.4471 52.9295C16.4471 54.2235 19.2797 55.2715 22.7728 55.2715C26.2659 55.2715 29.0986 54.2235 29.0986 52.9295C29.0986 52.2208 28.2495 51.5861 26.9074 51.157C27.7882 50.463 28.7961 49.6341 29.8786 48.6818C37.1879 49.6179 40.4851 51.713 40.4851 52.9295C40.4851 53.6589 39.256 54.89 35.7918 55.9588Z"
                                    fill="#5F2DED"
                                ></path>
                                <path
                                    d="M40.485 21.0781C40.485 12.0384 32.5393 4.68402 22.7728 4.68402C13.0062 4.68402 5.06055 12.0384 5.06055 21.0781C5.06055 30.1178 13.0062 37.4722 22.7728 37.4722C32.5393 37.4722 40.485 30.1178 40.485 21.0781ZM7.59086 21.0781C7.59086 13.3298 14.4015 7.02603 22.7728 7.02603C31.1441 7.02603 37.9547 13.3298 37.9547 21.0781C37.9547 28.8264 31.1441 35.1302 22.7728 35.1302C14.4015 35.1302 7.59086 28.8264 7.59086 21.0781Z"
                                    fill="#5F2DED"
                                ></path>
                                <path
                                    d="M24.0389 29.2752C24.0389 29.9219 24.6053 30.4462 25.3041 30.4462H30.3647C31.0635 30.4462 31.6299 29.9219 31.6299 29.2752V23.4202H34.1602C34.6855 23.4202 35.1561 23.1198 35.3427 22.6653C35.5293 22.2109 35.3932 21.6969 35.0006 21.3739L23.6142 12.0059C23.1348 11.6115 22.4126 11.6115 21.9332 12.0059L10.5468 21.3739C10.1542 21.6969 10.0181 22.2109 10.2047 22.6653C10.3913 23.1198 10.862 23.4202 11.3873 23.4202H13.9177V29.2752C13.9177 29.9219 14.4841 30.4462 15.1828 30.4462H20.2435C20.9422 30.4462 21.5086 29.9219 21.5086 29.2752V25.7622H24.0389V29.2752ZM20.2435 23.4202C19.5447 23.4202 18.9783 23.9444 18.9783 24.5912V28.1042H16.448V22.2491C16.448 21.6024 15.8816 21.0781 15.1828 21.0781H14.715L22.7738 14.4478L30.8326 21.0781H30.3647C29.666 21.0781 29.0996 21.6024 29.0996 22.2491V28.1042H26.5692V24.5912C26.5692 23.9444 26.0028 23.4202 25.3041 23.4202H20.2435Z"
                                    fill="#5F2DED"
                                ></path>
                            </svg>
                        </div>
                        <div class="">
                            <h3
                                class="text-2xl font-semibold text-blackColor dark:text-blackColor-dark leading-38px"
                            >
                                {{ __('Office address') }}
                            </h3>
                            <p
                                class="text-size-13 lg:text-size-15 text-contentColor dark:text-contentColor-dark leaing-5"
                            >
                                {{ env('COMPANY_ADDRESS') }}
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- comment form section -->
        <section>
            <div class="container pb-100px">
                <div x-data="{
                    formData: { name: '', email: '', message: '' },
                    isLoading: false,
                    isSuccess: false,
                    error: null,
                    async submitForm() {
                        this.isLoading = true;
                        this.error = null;
                        try {
                            const url = @js(route('contact.store'));
                            const response = await fetch(url, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': {{ Js::from(csrf_token()) }}
                                },
                                body: JSON.stringify({
                                    name: this.formData.name,
                                    email: this.formData.email,
                                    message: this.formData.message,
                                })
                            });
                            const json = await response.json();
                            if (json.success) {
                                this.isSuccess = true;
                                this.formData = { name: '', email: '', message: '' };
                            } else {
                                this.isSuccess = false;
                                if (json.errors) {
                                    const firstErrorKey = Object.keys(json.errors)[0];
                                    this.error = json.errors[firstErrorKey].toString();
                                } else if (json.message) {
                                    this.error = json.message;
                                } else {
                                    this.error = 'An error occurred.';
                                }
                            }
                        } catch (e) {
                            this.error = 'An unexpected error occurred.';
                            this.isSuccess = false;
                        } finally {
                            this.isLoading = false;
                        }
                    }
                }" x-cloak>
                    <form @submit.prevent="submitForm"
                          class="contact-form p-5 md:p-70px md:pt-90px border border-borderColor2 dark:border-transparent dark:shadow-container"
                          data-aos="fade-up"
                    >
                        <div x-show="!isSuccess">
                            <div class="mb-10">
                                <h4 class="text-size-23 md:text-size-44 font-bold leading-10 md:leading-70px text-blackColor dark:text-blackColor-dark"
                                    data-aos="fade-up">
                                    {{ __('Drop us a line') }}
                                </h4>
                                <p data-aos="fade-up"
                                   class="text-size-13 md:text-base leading-5 md:leading-30px text-contentColor dark:text-contentColor-dark">
                                    {{ __('Your email address will not be used for any marketing purposes. Required fields are marked.') }}
                                </p>
                            </div>

                            <!-- Example input (keep yours as-is) -->
                            <div class="grid grid-cols-1 xl:grid-cols-2 mb-30px gap-30px">
                                <div class="relative" data-aos="fade-up">
                                    <input id="name" name="name" x-model="formData.name" required type="text" placeholder=@js(__("Enter your name*"))
                                           class="w-full pl-26px h-15 rounded border"/>
                                </div>
                                <div class="relative" data-aos="fade-up">
                                    <input id="email" name="email" x-model="formData.email" required type="email" placeholder=@js(__("Enter Email Address*"))
                                           class="w-full pl-26px h-15 rounded border"/>
                                </div>
                            </div>

                            <div class="relative" data-aos="fade-up">
                                <textarea id="message" name="message" x-model="formData.message" required placeholder=@js(__("Enter your Message here"))
                                          class="w-full pt-3 pl-26px rounded border" rows="5"></textarea>
                            </div>

                            <template x-if="error">
                                <div class="mt-30px text-red-600" x-text="error"></div>
                            </template>

                            <div class="mt-30px" data-aos="fade-up">
                                <button type="submit" :disabled="isLoading"
                                        class="text-white bg-primaryColor px-6 py-2 rounded hover:bg-white hover:text-primaryColor border border-primaryColor">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                        <div x-show="isSuccess" class="mt-10 p-5 bg-green-100 text-green-800 rounded text-center">
                            {{ __('Thank you! Your message has been received.') }}
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
