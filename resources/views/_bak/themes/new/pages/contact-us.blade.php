@extends('themes.new.layouts.app')

@section('content')
    <div class="inner-banner-three text-center p-[30px] lg:p-0 md:p-0 sm:p-0 xsm:p-0">
        <div class="bg-wrapper text-center bg-cover relative z-[1] p-[150px_0_108px] md:p-[120px_0_50px]  sm:p-[120px_0_50px]  xsm:p-[120px_0_50px] bg-[url({{ asset('assets2/images/assets/bg-16.svg') }})] bg-no-repeat bg-[top_center]" style="background-image:url({{ asset('assets2/images/assets/bg-17.svg') }}">
            <div class="container">
                <div class="title-style-five">
                    <h2 class="main-title text-black font-bold text-[72px] leading-[1.25em] 2xl:text-[58px] lg:text-[50px] md:text-[35px] sm:text-[35px] xsm:text-[35px]">Contact Us</h2>
                </div>
                <p class="text-[20px]  lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px] mt-[30px]  lg:mt-5 md:mt-5 sm:mt-5 xsm:mt-5 ">Get our all info and also can message us directly from here</p>
            </div>

            <div class="container">
                <div class="contact-section-two text-left  mt-20  lg:mt-[60px] md:mt-[60px] sm:mt-[60px] xsm:mt-[60px]  shadow-[0px_35px_70px_rgba(0,104,31,0.05)] p-[60px_80px_85px] lg:p-[40px_20px_50px] md:p-[40px_20px_50px] sm:p-[40px_20px_50px] xsm:p-[40px_20px_50px] rounded-[20px] bg-white">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] px-[12px] max-w-full">
                            <div class="form-style-three md:mb-[60px] sm:mb-[60px] xsm:mb-[60px]  wow fadeInLeft">
                                <form
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
                                    id="contact-form"
                                    data-toggle="validator"
                                >
                                    <div class="messages"></div>
                                    <div class="flex flex-wrap mx-[-12px] controls">
                                        <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                                            <div class="input-group-meta form-group mb-[35px] ">
                                                <label for="name" class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]"  >Name*</label>
                                                <input
                                                    x-model="name"
                                                    class="w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-grey-500"
                                                    type="text"
                                                    placeholder="Your name"
                                                    id="name"
                                                    name="name"
                                                    required="required"
                                                    data-error="Name is required."
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                                            <div class="input-group-meta form-group mb-10 ">
                                                <label for="email" class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]">Email*</label>
                                                <input
                                                    x-model="email"
                                                    class="w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-grey-500"
                                                    type="email"
                                                    placeholder="your@email.com"
                                                    id="email"
                                                    name="email"
                                                    required="required"
                                                    data-error="Valid email is required."
                                                >
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                                            <div class="input-group-meta form-group mb-[30px]">
                                                <textarea
                                                    x-model="message"
                                                    class="w-full max-w-full h-[165px] text-black text-[17px] pl-5 pr-[5px] py-[15px] rounded-lg border-2 border-solid border-black placeholder:text-grey-500"
                                                    placeholder="Your message*"
                                                    name="message"
                                                    required="required"
                                                    data-error="Please,leave us a message."
                                                ></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                                            <button
                                                x-bind:disabled="! isSubmitAllow"
                                                class="disabled:pointer-events-none disabled:opacity-50 btn-one font-medium w-full uppercase text-[14px] block text-white leading-[50px] relative transition-all duration-[0.3s] ease-[ease-in-out] px-8 py-0 rounded-[5px] bg-black hover:bg-[var(--prime-one)] hover:text-white md:leading-[48px] md:text-[15px] md:p-[0_25px] sm:leading-[48px] sm:text-[15px] sm:p-[0_25px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_25px]"
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
                        <div class="xl:w-4/12 lg:w-5/12 w-full flex-[0_0_auto] px-[12px] max-w-full !ml-auto wow fadeInRight">
                            <div class="address-block-three flex mb-[70px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 mt-5">
                                <div class="icon w-[35px] mt-[7px]"><img class=" ml-auto" src="{{ asset('assets2/images/icon/icon_161.svg') }}"></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5 class="title text-[26px] mb-2 lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">Our Address</h5>
                                    <p class=" text-[18px] leading-[1.65em] text-[#878787] mb-0 lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px]">71-75 Shelton Street, <br>Covent Garden, London</p>
                                </div>
                            </div> <!-- /.address-block-three -->
                            <div class="address-block-three flex mb-[70px] lg:mb-10 md:mb-10 sm:mb-10 xsm:mb-10 ">
                                <div class="icon w-[35px] mt-[7px]"><img class=" ml-auto" src="{{ asset('assets2/images/icon/icon_162.svg') }}"></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5 class="title text-[26px] mb-2 lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">Contact Info</h5>
                                    <p class=" text-[18px] leading-[1.65em] text-[#878787] mb-0 lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px]">Open a chat or give us call at <br><a href="tel:310.841.5500" class="call text-[22px] text-[color:var(--prime-two)] mt-[3px] hover:underline lg:text-[18px] md:text-[18px] sm:text-[18px] xsm:text-[18px]">+48123456789</a></p>
                                </div>
                            </div> <!-- /.address-block-three -->
                            <div class="address-block-three flex">
                                <div class="icon w-[35px] mt-[7px]"><img class=" ml-auto" src="{{ asset('assets2/images/icon/icon_163.svg') }}"></div>
                                <div class="text w-[calc(100%_-_35px)] pl-[30px]">
                                    <h5 class="title text-[26px] mb-2 lg:text-[20px] md:text-[20px] sm:text-[20px] xsm:text-[20px]">Support</h5>
                                    <p class=" text-[18px] leading-[1.65em] text-[#878787] mb-0 lg:text-[16px] md:text-[16px] sm:text-[16px] xsm:text-[16px]">Message us to <br><a href="#" class="webaddress text-black underline hover:underline">info@shortsy.art</a></p>
                                </div>
                            </div> <!-- /.address-block-three -->
                        </div>
                    </div>
                </div> <!-- /.contact-section-two -->
            </div> <!-- /.container -->
        </div> <!-- /.bg-wrapper -->
    </div> <!-- /.inner-banner-three -->
@endsection
