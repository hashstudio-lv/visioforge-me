<div>
    <div class="form-style-three md:mb-[60px] sm:mb-[60px] xsm:mb-[60px] wow fadeInLeft">
        @if($result)
            <div class="flex flex-col justify-center">
                <a href="{{ $result }}" download target="_blank">
                    <img src="{{ $result }}" alt="">
                </a>
                <div class="mt-10 flex justify-center">
                    <a href="{{ $result }}" download target="_blank"
                       class="tran3s text-[17px] font-medium btn-three mb-[25px] ml-[.5rem] !mr-[1rem] text-white leading-[52px] relative transition-all duration-[0.3s] ease-[ease-in-out] p-[0_40px] rounded-[28px] bg-[var(--prime-two)] hover:bg-[#090F32] md:p-[0_35px] md:leading-[48px] sm:p-[0_35px] sm:leading-[48px] xsm:p-[0_35px] xsm:leading-[48px] lg:text-[15px] md:text-[15px] sm:text-[15px] xsm:text-[15px]">
                        {{ __('Download') }}
                    </a>
                </div>
            </div>
        @else
            <div wire:loading>
                <span>{{ __('Image is being generated...') }}</span>
            </div>
            <div wire:loading.remove>
                <div class="flex flex-wrap mx-[-12px] controls">
                    <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                        <div class="input-group-meta form-group mb-[30px]">
                            <label class="block text-[14px] text-[rgba(0,0,0,0.5)] mb-[7px]">{{ __('Prompt') }}*</label>
                            <textarea
                                class=" w-full max-w-full h-[165px] text-black text-[17px] pl-5 pr-[5px] py-[15px] rounded-lg border-2 border-solid border-black placeholder:text-black"
                                name="prompt"
                                wire:model="prompt"></textarea>
                            @error('prompt')
                            <div class="help-block with-errors">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full  flex-[0_0_auto] px-[12px] max-w-full">
                        @if($balance <= 0)
                            <div class="text-center mt-10">
                                <div>
                                    {{ __("You don't have enough ART to make the purchase. Please make a deposit.") }}
                                </div>

                                <div class="mt-3">
                                    <a href="{{ route('deposits.create') }}" class="btn-main btn-wallet">
                                        {{ __('Make a deposit') }}
                                    </a>
                                </div>
                            </div>
                        @else
                            <div wire:loading>
                                <span>{{ __('Video is being generated...') }}</span>
                            </div>

                            <button
                                class="btn-one font-medium w-full uppercase text-[14px] block text-white leading-[50px] relative transition-all duration-[0.3s] ease-[ease-in-out] px-8 py-0 rounded-[5px] bg-black hover:bg-[var(--prime-one)] hover:text-white md:leading-[48px] md:text-[15px] md:p-[0_25px] sm:leading-[48px] sm:text-[15px] sm:p-[0_25px] xsm:leading-[48px] xsm:text-[15px] xsm:p-[0_25px]"
                                wire:click="submit"
                                wire:loading.attr="disabled"
                                wire:loading.remove>
                                {{ __('Submit') }}
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
