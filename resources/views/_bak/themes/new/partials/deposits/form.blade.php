<div class="contact-section-two text-left border-2 border-solid border-black lg:mt-[60px] md:mt-[60px] sm:mt-[60px] xsm:mt-[60px]  shadow-[0px_35px_70px_rgba(0,104,31,0.05)] p-[60px_80px_85px] lg:p-[40px_20px_50px] md:p-[40px_20px_50px] sm:p-[40px_20px_50px] xsm:p-[40px_20px_50px] rounded-[20px] bg-white">
    <div class="flex flex-wrap mx-[-12px]">
        <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
            <div class="form-style-three md:mb-[60px] sm:mb-[60px] xsm:mb-[60px]  wow fadeInLeft">
                <form
                    x-data="{
                        name: '',
                        email: @js(request()->input('email', '')),
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
                                    class=" w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-gray-500"
                                    type="text"
                                    placeholder="Your Name"
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
                                <label for="email" class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]"  >Email*</label>
                                <input
                                    x-model="email"
                                    class=" w-full h-[60px] text-black text-[17px] pl-5 pr-[5px] py-0 rounded-lg border-2 border-solid border-black placeholder:text-gray-500"
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
                                    class=" w-full max-w-full h-[165px] text-black text-[17px] pl-5 pr-[5px] py-[15px] rounded-lg border-2 border-solid border-black placeholder:text-gray-500"
                                    placeholder="Your message here"
                                    name="message"
                                    required="required"
                                    data-error="Please, leave us a message."
                                ></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="w-full flex-[0_0_auto] px-[12px] max-w-full">
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
    </div>
</div>