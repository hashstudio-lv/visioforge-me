@extends('themes.itsol.layouts.app')

@section('content')
    <div
        class="relative z-10 overflow-x-hidden bg-light pt-30 max-lg:pb-20 lg:min-h-screen lg:max-xxl:pt-52 xxl:pt-52 xxxl:pt-52">
        <div class="container">
            <div class="grid-cols-12 items-center gap-5 max-lg:flex max-lg:flex-col-reverse sm:gap-8 lg:grid">
                <div class="relative z-10 col-span-12 lg:col-span-7">
                    <h4 class="h4 mb-2.5 text-primary">
                        {{ __('Create. Enhance. Transform.') }}
                    </h4>
                    <h1 class="h1 mb-2.5">
                        {{ __('Build the future with Smart AI') }}
                    </h1>
                    <p class="h5 mb-10 max-w-[750px] text-[#5A5F96]">
                        {{ __('Turn ideas into breathtaking visuals—instantly. Whether you need AI-generated art or professional-grade photo edits, our tools deliver stunning results with zero hassle.') }}
                    </p>
                    <div class="flex flex-wrap gap-5 xl:gap-6">
                        <a href="{{ route('pages.image-generation') }}" class="btn-primary">
                            <span>{{ __('Image Generation') }}</span>
                            <span class="flex items-center justify-center rounded-full bg-white p-1 text-title">
                                <i class="ti ti-chevron-right">
                                </i>
                            </span>
                        </a>

                        <a href="{{ route('pages.image-editing') }}" class="btn-primary">
                            <span>{{ __('Image Editing') }}</span>
                            <span class="flex items-center justify-center rounded-full bg-white p-1 text-title">
                                <i class="ti ti-chevron-right">
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <div class="relative z-10">
                        <img
                            src="{{ asset('/assets3/images/home-12-hero.png') }}"
                            alt="Robot Image"
                            class="4xl:max-w-[unset]"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-primary">
        <div class="container grid-cols-12 items-center gap-6 max-lg:flex max-lg:flex-col lg:grid lg:gap-10">
            <div class="pb-xl-0 col-span-7 max-lg:order-2 xxl:col-span-6">
                <span class="h5 lh-1 relative isolate inline-block font-semibold text-secondary">
                    {{ __('Transform Ideas Into Visuals – Instantly.') }}
                </span>
                <h2 class="h2 mb-5 mt-5 text-n8">
                    {{ __('AI-Powered Image Generation & Editing – Create Stunning Visuals in Seconds.') }}
                </h2>
                <p class="text-n8">
                    {{ __('We Offer Cutting-Edge AI Image Services – From Instant Generation to Professional Editing & Enhancement') }}
                </p>
                <div class="grid items-center justify-between gap-4 smt60px md:max-lg:grid-cols-2 xl:grid-cols-2 xl:gap-6">
                    <div
                        class="flex items-center gap-4 rounded-md bg-[#3821C5] px-5 py-2.5">
                        <i class="ti ti-circle-check-filled text-[24px] text-secondary"></i>
                        <span class="font-medium text-n8">
                            {{ __('Instant Image Generation') }}
                        </span>
                    </div>
                    <div
                        class="flex items-center gap-4 rounded-md bg-[#3821C5] px-5 py-2.5">
                        <i class="ti ti-circle-check-filled text-[24px] text-secondary"></i>
                        <span class="font-medium text-n8">
                            {{ __('Professional Photo Editing') }}
                        </span>
                    </div>
                    <div
                        class="flex items-center gap-4 rounded-md bg-[#3821C5] px-5 py-2.5">
                        <i class="ti ti-circle-check-filled text-[24px] text-secondary"></i>
                        <span class="font-medium text-n8">
                            {{ __('Style Customization') }}
                        </span>
                    </div>
                    <div
                        class="flex items-center gap-4 rounded-md bg-[#3821C5] px-5 py-2.5">
                        <i class="ti ti-circle-check-filled text-[24px] text-secondary"></i>
                        <span class="font-medium text-n8">
                            {{ __('Background Editing') }}
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-6 spt40px">
                    <a
                        href="{{ route('pages.image-generation') }}"
                        class="btn-white"
                    >
                        {{ __('Image Generation') }}
                        <span class="flex items-center justify-center rounded-full bg-primary p-2 text-n8">
                            <i class="ti ti-chevron-right text-[18px]"></i>
                        </span>
                    </a>
                    <a
                        href="{{ route('pages.image-editing') }}"
                        class="flex items-center gap-1 rounded-full border border-n8 !py-4 px-5 text-n8 duration-300 hover:bg-n8 hover:text-primary"
                    >
                        {{ __('Image Editing') }}
                        <i class="ti ti-arrow-narrow-right text-[20px]"></i>
                    </a>
                </div>
            </div>
            <div class="col-span-5 my-auto max-lg:order-1 xxl:col-span-6">
                <img src="{{ asset('/assets3/images/data-solutions-image.png') }}" alt="Data Solution Section Image" />
            </div>
        </div>
    </section>

    <section
        class="relative overflow-x-hidden bg-n8 pb-[30px] pt-[60px] after:absolute after:bottom-0 after:left-0 after:w-full after:bg-primary lg:pt-[120px] xl:after:h-[60%]"
    >
        <div class="container relative z-[1]">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-6 lg:text-right">
                    <h5 class="h5 mb-5 text-primary">
                        {{ __('More than just images') }}
                    </h5>
                    <h2 class="h2 mb-5 text-title">
                        {{ __('We blend AI with human creativity.') }}
                    </h2>
                    <a
                        class="btn-white shrink-0 overflow-hidden"
                        href="{{ route('pages.image-generation') }}"
                    >
                        {{ __('Image Generation') }}
                        <span class="text flex rounded-full bg-primary p-1 text-n8">
                            <i class="ti ti-chevron-right text-[24px]"> </i>
                        </span>
                    </a>

                    <div class="mt-10 grid grid-cols-2 gap-6 lg:mt-[60px]">
                        <div class="col-span-2 md:col-span-1">
                            <img
                                alt="img"
                                loading="lazy"
                                width="306"
                                height="313"
                                decoding="async"
                                data-nimg="1"
                                class="w-full rounded-2xl"
                                src="{{ asset('/assets3/images/image_1_thumb.jpg') }}"
                                style="color: transparent"
                            />
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <img
                                alt="img"
                                loading="lazy"
                                width="306"
                                height="313"
                                decoding="async"
                                data-nimg="1"
                                class="w-full rounded-2xl"
                                src="{{ asset('/assets3/images/image_2_thumb.jpg') }}"
                                style="color: transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-12 grid grid-cols-2 gap-6 lg:col-span-6">
                    <div class="col-span-2 flex flex-col justify-center md:col-span-1">
                        <img
                            alt="img"
                            loading="lazy"
                            width="306"
                            height="387"
                            decoding="async"
                            data-nimg="1"
                            class="mb-6 w-full rounded-2xl"
                            src="{{ asset('/assets3/images/image_3_thumb.jpg') }}"
                            style="color: transparent"
                        />
                            <img
                                alt="img"
                                loading="lazy"
                                width="306"
                                height="387"
                                decoding="async"
                                data-nimg="1"
                                class="w-full rounded-2xl"
                                src="{{ asset('/assets3/images/image_4_thumb.jpg') }}"
                                style="color: transparent"
                        />
                    </div>
                    <div class="col-span-2 flex flex-col justify-center md:col-span-1">
                        <img
                            alt="img"
                            loading="lazy"
                            width="306"
                            height="313"
                            decoding="async"
                            data-nimg="1"
                            class="mb-6 w-full rounded-2xl"
                            src="{{ asset('/assets3/images/image_5_thumb.jpg') }}"
                            style="color: transparent"
                        />
                        <img
                            alt="img"
                            loading="lazy"
                            width="306"
                            height="387"
                            decoding="async"
                            data-nimg="1"
                            class="w-full rounded-2xl"
                            src="{{ asset('/assets3/images/image_6_thumb.jpg') }}"
                            style="color: transparent"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-3 bg-n8 spb120px mt-10">
        <div class="px-0">
          <div class="container mx-auto mb-10 max-w-[838px] text-center lg:mb-14">
            <h5 class="h5 relative isolate mb-5 flex justify-center text-primary">{{ __('The Opinions of Our Clients') }}</h5>
            <h2 class="h2 mb-4 text-title">
                {{ __("Check what's our client say about us.") }}
            </h2>
            <p class="mx-auto mb-10 max-w-2xl lg:mb-14">
                {{ __('Don\'t just take our word for it—here\'s what creators like you are saying about our AI image generation and editing tools.') }}
            </p>
          </div>
          <div class="swiper customer-home3-swiper">
            <div class="swiper-wrapper">
                @foreach ([
                    ['name' => __('Emily R.'), 'job' => __('E-Commerce Store Owner'), 'text' => __('The AI-generated product images saved us thousands on photoshoots! The quality is so realistic, and we can create hundreds of variations in minutes. Our conversion rates jumped by 30%—absolutely worth it!')],
                    ['name' => __('Daniel T.'), 'job' => __('Freelance Artist'), 'text' => __('As an illustrator, I use this tool daily for concept art. The AI understands my prompts perfectly, and the editing features let me refine details in seconds. It’s like having an assistant who never sleeps!')],
                    ['name' => __('Priya K.'), 'job' => __('Social Media Director'), 'text' => __('I went from struggling with visuals to posting stunning, on-brand graphics every day. The background removal and style transfer tools are lifesavers. Now, our engagement is through the roof!')],
                    ['name' => __('Jake L.'), 'job' => __('YouTube Creator'), 'text' => __('I used to waste hours editing thumbnails—now I generate eye-catching images in one click. The AI even suggests improvements! My subscribers keep asking who my designer is… little do they know it’s AI!')],
                    ['name' => __('Jessica H.'), 'job' => __('Nova Creative Team'), 'text' => __('We onboarded this for client projects, and the results blew us away. Fast edits, brand-consistent generations, and happy clients. It’s now our secret weapon for scaling creative work.')],
                ] as $review)
                    <div class="swiper-slide p-3">
                        <div class="rounded-[20px] border border-transparent bg-n8 p-4 shadow-[0px_4px_32px_0px_rgba(0,0,0,0.05)] duration-300 hover:border-primary hover:shadow-none lg:px-[30px] lg:py-10">
                            <div class="flex gap-1 text-yellow3">
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                                <i class="ti ti-star-filled"></i>
                            </div>
                            <p class="py-4">
                                {{ $review['text'] }}
                            </p>
                            <hr class="text-gray" />
                            <div class="flex items-center gap-4 pt-4">
                                <div class="shrink-0 rounded-full border-2 border-[#BDB1FF] bg-light p-1">
                                    <span class="user__img rounded-circle">
                                        <img src="{{ asset('/assets3/images/team-1.webp') }}" width="50" height="50" alt="{{ $review['name'] }}" class="rounded-full border-2 border-primary" />
                                    </span>
                                    </div>
                                    <div class="flex-grow-1">
                                    <h5 class="h5 mb-1 font-semibold">{{ $review['name'] }}</h5>
                                    <p class="sm-text">{{ $review['job'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </section>

      <section class="section relative bg-primary bg-top bg-no-repeat">
        <img src="{{ asset('/assets3/images/video-section-left.png') }}" alt="Image" class="absolute bottom-[30%] left-0 hidden xxl:block" />
        <img src="{{ asset('/assets3/images/video-section-right.png') }}" alt="Image" class="absolute bottom-[30%] right-0 hidden xxl:block" />
        <div class="container relative z-20">
          <div class="mx-auto max-w-[700px] text-center">
            <h2 class="h2 mb-4 text-white">
                {{ __("Let these metrics highlight our power and seamless workflow.") }}
            </h2>
          </div>
          <div class="grid grid-cols-1 gap-4 spt60px sm:grid-cols-2 md:grid-cols-3 lg:gap-6">
            <div class="flex flex-col items-center rounded-2xl bg-white/10 py-4 text-center shadow-box1 spx32px">
              <h2 class="h2 mb-2 flex items-center text-secondary"><span class="odometer" data-counter-value="150">0</span> K+</h2>
              <p class="text-white">{{ __('AI-Generated Images Delivered') }}</p>
            </div>
            <div class="flex flex-col items-center rounded-2xl bg-white/10 py-4 text-center shadow-box1 spx32px">
              <h2 class="h2 mb-2 flex items-center text-secondary"><span class="odometer" data-counter-value="50">50</span> K+</h2>
              <p class="text-white"> {{ __('Transparent PNGs Created') }}</p>
            </div>
            <div class="flex flex-col items-center rounded-2xl bg-white/10 py-4 text-center shadow-box1 spx32px">
              <h2 class="h2 mb-2 flex items-center text-secondary"><span class="odometer" data-counter-value="99.9">0</span> %</h2>
              <p class="text-white">{{ __('Successful Edit Accuracy Rate') }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="container grid-cols-2 flex-col gap-6 spy120px max-lg:flex lg:grid">
        <div class="">
          <h5 class="h5 mb-5 text-primary">
            {{ __('Questions & Answers') }}
          </h5>
          <h2 class="h2 mb-4 text-title">
            {{ __('Any Questions? Find here.') }}
          </h2>
          <p class="mb-7 text-para">
            {{ __('Don\'t find your answer here? just send us a message for any question.') }}
          </p>

          <a
            href="{{ route('pages.show', 'contact-us') }}"
            class="btn-primary border-primary bg-primary"
          >
            {{ __('Contact Us') }}

            <span class="flex items-center justify-center rounded-full bg-n8 p-1 text-primary">
              <i class="ti ti-chevron-right"></i>
            </span>
          </a>
        </div>
        <div class="flex flex-col gap-4">
          <!-- single faq -->
          @foreach ([
            ['question' => __('What can I do with your AI image generation service?'), 'answer' => __('You can create stunning, high-quality images simply by describing what you want. The AI transforms your text prompts into unique visuals for any purpose—whether for personal projects, marketing, or creative exploration.')],
            ['question' => __('How easy is it to generate images with your tool?'), 'answer' => __('Extremely easy—just type a description of what you want, and the AI handles the rest. No design skills or technical knowledge is required to get professional-looking results in seconds.')],
            ['question' => __('Can I customize the generated images?'), 'answer' => __('Absolutely. You can refine your prompts, adjust styles, and tweak details to get exactly the look you want. The AI adapts to your creative vision.')],
            ['question' => __('Are there any limits on how I can use the images?'), 'answer' => __('You’re free to use generated images for both personal and commercial projects, including social media, ads, and presentations—as long as the content follows ethical guidelines.')],
            ['question' => __('What makes your AI image generation different?'), 'answer' => __('Our service prioritizes quality, speed, and versatility, ensuring you get visually impressive results tailored to your needs—without compromising on creativity or control.')],
          ] as $aq)
            <div class="appear-downd py-4 shadow-[0px_8px_30px_0px_rgba(86,58,255,0.10)] spx32px sm:py-5">
                <div class="faq-accordion flex cursor-pointer items-center justify-between gap-2 duration-300 sm:gap-6">
                <div class="flex items-center gap-4">
                    <div>
                    <img src="{{ asset('/assets3/images/faq-ans.png') }}" alt="Image" />
                    </div>
                    <h6 class="h6 font-semibold">
                        {{ $aq['question'] }}
                    </h6>
                </div>
                <div class="flex size-8 shrink-0 items-center justify-center rounded-full bg-primary leading-none text-n8 duration-300">
                    <i class="ti ti-chevron-right text-[24px] duration-300"></i>
                </div>
                </div>
                <div class="h-0 overflow-hidden duration-300">
                <p class="l-text mt-4 opacity-80">
                    {{ $aq['answer'] }}
                </p>
                </div>
            </div>
          @endforeach
        </div>
      </section>

      <section class="mx-3 mt-[71px] pb-14 pt-14 md:mt-[87px] lg:pb-[120px] lg:pt-28 xl:mt-0">
        <div
            class="container flex justify-center text-center rounded-2xl bg-primary bg-right-bottom bg-no-repeat px-2.5 py-7 sm:px-5 lg:p-10 xl:px-[60px] xl:py-20"
        >
          <div class="col-span-12 flex flex-col items-center text-n8 lg:col-span-8">
            <h5 class="h5 mb-5 text-secondary">
                {{ __('Getting started') }}
            </h5>
            <h2 class="h2 mb-5">
                {{ __('Unlock the Full Power of AI Image Generation & Editing') }}
            </h2>
            <p class="mb-10 lg:text-2xl">
                {{ __('Your blank canvas is waiting... Let AI be your brush!') }}
            </p>
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
                action="{{ route('login') }}"
                class="flex w-full items-center gap-4 rounded-2xl bg-n8 p-2.5 lg:max-w-[670px]"
            >
              <div class="flex w-full items-center gap-2">
                <i class="ti ti-search text-[24px] text-para"></i>

                <input
                    x-model="email"
                    name="email"
                    type="text"
                    class="w-full bg-transparent text-n2 focus:outline-none"
                    placeholder="{{ __('Your email') }}"
                />
              </div>

              <button
                    x-cloak
                    x-bind:disabled="! isSubmitAllow"
                    type="submit"
                    class="disabled:pointer-events-none disabled:opacity-50 btn-primary shrink-0 rounded-2xl px-4 py-2.5 font-normal md:px-7"
              >
                    {{ __('Sign in') }}
              </button>
            </form>

            <p
                class="!m-0 pt-5">
                {{ __('Already a member?') }}

                @auth
                    <a
                        href="{{ route('dashboard') }}"
                        class="text-black underline text-white hover:text-[#0a58ca]"
                    >
                        {{ __('Dashboard.') }}
                    </a>
                @endauth

                @guest
                    <a
                        href="{{ route('login') }}"
                        class="text-black underline text-white hover:text-[#0a58ca]"
                    >
                        {{ __('Sign in.') }}
                    </a>
                @endguest
            </p>
          </div>
        </div>
      </section>
@endsection
