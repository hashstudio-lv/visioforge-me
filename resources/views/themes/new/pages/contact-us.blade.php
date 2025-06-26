@extends("themes.new.layouts.app")

@section("content")
    <div class="inner-banner-three xsm:p-0 p-[30px] text-center sm:p-0 md:p-0 lg:p-0">
        <div
            class="bg-wrapper xsm:p-[120px_0_50px] relative z-[1] bg-[url({{ asset("assets2/images/assets/bg-16.svg") }})] bg-cover bg-[top_center] bg-no-repeat p-[150px_0_108px] text-center sm:p-[120px_0_50px] md:p-[120px_0_50px]"
            style="background-image:url({{ asset("assets2/images/assets/bg-17.svg") }}"
        >
            <div class="container">
                <div class="title-style-five">
                    <h2
                        class="main-title xsm:text-[35px] text-[72px] font-bold leading-[1.25em] text-black sm:text-[35px] md:text-[35px] lg:text-[50px] 2xl:text-[58px]">
                        {{ __("Contact Us") }}</h2>
                </div>
                <p
                    class="xsm:text-[18px] xsm:mt-5 mt-[30px] text-[20px] sm:mt-5 sm:text-[18px] md:mt-5 md:text-[18px] lg:mt-5 lg:text-[18px]">
                    {{ __("Get our all info and also can message us directly from here") }}</p>
            </div>

            <div class="container">
                <div
                    class="contact-section-two xsm:mt-[60px] xsm:p-[40px_20px_50px] mt-20 rounded-[20px] bg-white p-[60px_80px_85px] text-left shadow-[0px_35px_70px_rgba(0,104,31,0.05)] sm:mt-[60px] sm:p-[40px_20px_50px] md:mt-[60px] md:p-[40px_20px_50px] lg:mt-[60px] lg:p-[40px_20px_50px]">
                    <div class="mx-[-12px] flex flex-wrap">
                        <div class="w-full max-w-full flex-[0_0_auto] px-[12px] lg:w-7/12 xl:w-7/12">
                            <div class="form-style-three xsm:mb-[60px] wow fadeInLeft sm:mb-[60px] md:mb-[60px]">
                                <form
                                    id="contact-form"
                                    x-data="{
                                        name: '',
                                        email: '',
                                        message: '',
                                    
                                        resultMessage: '',
                                    
                                        get isSubmitAllow() {
                                            const isAllExist = this.name.length > 0 && this.email.length > 0 && this.message.length > 0;
                                            const isValidEmail = (/.+@.+\..+/i).test(this.email);
                                    
                                            return isAllExist && isValidEmail;
                                        },
                                    
                                        handleSubmit() {
                                            this.resultMessage = 'Thank you! Form has been submitted.';
                                    
                                            this.name = '';
                                            this.email = '';
                                            this.message = '';
                                        },
                                    }"
                                    x-on:submit.prevent="handleSubmit"
                                    data-toggle="validator"
                                >
                                    <div class="messages"></div>
                                    <div class="controls mx-[-12px] flex flex-wrap">
                                        <div class="w-full max-w-full flex-[0_0_auto] px-[12px]">
                                            <div class="input-group-meta form-group mb-[35px]">
                                                <label
                                                    for="name"
                                                    class="mb-[7px] block text-[14px] text-[rgba(0,0,0,0.5)]"
                                                >Name*</label>
                                                <input
                                                    id="name"
                                                    x-model="name"
                                                    class="placeholder:text-grey-500 h-[60px] w-full rounded-lg border-2 border-solid border-black py-0 pl-5 pr-[5px] text-[17px] text-black"
                                                    type="text"
                                                    placeholder="Your name"
                                                    name="name"
                                                    required="required"
                                                    data-error="Name is required."
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="w-full max-w-full flex-[0_0_auto] px-[12px]">
                                            <div class="input-group-meta form-group mb-10">
                                                <label
                                                    for="email"
                                                    class="mb-[7px] block text-[14px] text-[rgba(0,0,0,0.5)]"
                                                >Email*</label>
                                                <input
                                                    id="email"
                                                    x-model="email"
                                                    class="placeholder:text-grey-500 h-[60px] w-full rounded-lg border-2 border-solid border-black py-0 pl-5 pr-[5px] text-[17px] text-black"
                                                    type="email"
                                                    placeholder="your@email.com"
                                                    name="email"
                                                    required="required"
                                                    data-error="Valid email is required."
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full flex-[0_0_auto] px-[12px]">
                                            <div class="input-group-meta form-group mb-[30px]">
                                                <textarea
                                                    x-model="message"
                                                    class="placeholder:text-grey-500 h-[165px] w-full max-w-full rounded-lg border-2 border-solid border-black py-[15px] pl-5 pr-[5px] text-[17px] text-black"
                                                    placeholder="Your message*"
                                                    name="message"
                                                    required="required"
                                                    data-error="Please,leave us a message."
                                                ></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full flex-[0_0_auto] px-[12px]">
                                            <button
                                                x-bind:disabled="!isSubmitAllow"
                                                class="btn-one xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_25px] relative block w-full rounded-[5px] bg-black px-8 py-0 text-[14px] font-medium uppercase leading-[50px] text-white transition-all duration-[0.3s] ease-[ease-in-out] hover:bg-[var(--prime-one)] hover:text-white disabled:pointer-events-none disabled:opacity-50 sm:p-[0_25px] sm:text-[15px] sm:leading-[48px] md:p-[0_25px] md:text-[15px] md:leading-[48px]"
                                            >
                                                Send Message
                                            </button>
                                        </div>

                                        <template x-if="resultMessage.length > 0">
                                            <div class="mt-2 px-[12px]">
                                                <p x-text="resultMessage"></p>
                                            </div>
                                        </template>
                                    </div>
                                </form>
                            </div> <!-- /.form-style-three -->
                        </div>
                        <div
                            class="wow fadeInRight !ml-auto w-full max-w-full flex-[0_0_auto] px-[12px] lg:w-5/12 xl:w-4/12">
                            <div class="address-block-three xsm:mb-10 mb-[70px] mt-5 flex sm:mb-10 md:mb-10 lg:mb-10">
                                <div class="icon mt-[7px] w-[35px]"><img
                                        class="ml-auto"
                                        src="{{ asset("assets2/images/icon/icon_161.svg") }}"
                                    ></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5
                                        class="title xsm:text-[20px] mb-2 text-[26px] sm:text-[20px] md:text-[20px] lg:text-[20px]">
                                        {{ __("Our Address") }}</h5>
                                    <p
                                        class="xsm:text-[16px] mb-0 text-[18px] leading-[1.65em] text-[#878787] sm:text-[16px] md:text-[16px] lg:text-[16px]">
                                        {{ "71-75 Shelton Street," }} <br>{{ __("Covent Garden, London") }}</p>
                                </div>
                            </div> <!-- /.address-block-three -->
                            <div class="address-block-three xsm:mb-10 mb-[70px] flex sm:mb-10 md:mb-10 lg:mb-10">
                                <div class="icon mt-[7px] w-[35px]"><img
                                        class="ml-auto"
                                        src="{{ asset("assets2/images/icon/icon_162.svg") }}"
                                    ></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5
                                        class="title xsm:text-[20px] mb-2 text-[26px] sm:text-[20px] md:text-[20px] lg:text-[20px]">
                                        {{ __("Contact Info") }}</h5>
                                    <p
                                        class="xsm:text-[16px] mb-0 text-[18px] leading-[1.65em] text-[#878787] sm:text-[16px] md:text-[16px] lg:text-[16px]">
                                        {{ __("Open a chat or give us call at") }} <br><a
                                            href="tel:310.841.5500"
                                            class="call xsm:text-[18px] mt-[3px] text-[22px] text-[color:var(--prime-two)] hover:underline sm:text-[18px] md:text-[18px] lg:text-[18px]"
                                        >+48123456789</a></p>
                                </div>
                            </div> <!-- /.address-block-three -->
                            <div class="address-block-three flex">
                                <div class="icon mt-[7px] w-[35px]"><img
                                        class="ml-auto"
                                        src="{{ asset("assets2/images/icon/icon_163.svg") }}"
                                    ></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5
                                        class="title xsm:text-[20px] mb-2 text-[26px] sm:text-[20px] md:text-[20px] lg:text-[20px]">
                                        {{ __("Support") }}</h5>
                                    <p
                                        class="xsm:text-[16px] mb-0 text-[18px] leading-[1.65em] text-[#878787] sm:text-[16px] md:text-[16px] lg:text-[16px]">
                                        {{ __("Message us to") }} <br><a
                                            href="#"
                                            class="webaddress text-black underline hover:underline"
                                        >info@shortsy.art</a></p>
                                </div>
                            </div> <!-- /.address-block-three -->
                        </div>
                    </div>
                </div> <!-- /.contact-section-two -->
            </div> <!-- /.container -->
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.inner-banner-three -->
@endsection
