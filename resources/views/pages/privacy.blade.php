@extends('layouts.app')

@section('content')
    <main class="bg-transparent">
        <section>
            <div class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5">
                <div>
                    <img class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
                        src="https://visioforge.me/assets/images/herobanner/herobanner__1.png" alt="">
                    <img class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                        src="https://visioforge.me/assets/images/herobanner/herobanner__2.png" alt="">
                    <img class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                        src="https://visioforge.me/assets/images/herobanner/herobanner__3.png" alt="">
                    <img class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                        src="https://visioforge.me/assets/images/herobanner/herobanner__5.png" alt="">
                </div>
                <div class="container">
                    <div class="text-center">
                        <h1 class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3">
                            {{ __('Privacy policy') }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a href="https://visioforge.me/en" class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Home') }} <i class="icofont-simple-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Privacy policy') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
            <h5 class="mb-3">{{ __('Last Updated: January 08, 2026') }}</h5>

            <p>
                {!! __('At :company_name ("we", "us", "our"), we are committed to protecting the privacy of our users ("you", "your"). This Privacy Policy explains how we collect, use, share, and safeguard your personal information when you use our AI image generation platform at visioforge.me (the "Website"). By accessing our services, you consent to the data practices described in this policy.',
                    ['company_name' => config('app.company.name')]) !!}
            </p>

            <h3 class="mb-3 mt-5">{{ __('Information We Collect') }}</h3>
            <p>{{ __('We collect information you provide directly, such as your email address during account registration or when subscribing to updates. Our system also automatically gathers technical data including your IP address, device information, and usage patterns through cookies and analytics tools like Google Analytics to improve our services.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Use of Your Information') }}</h3>
            <p>{{ __('Your email address is used for account management, service notifications, and product updates. We analyze technical data to enhance platform security, optimize AI performance, and improve user experience. Analytics help us understand feature usage and identify areas for improvement.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Third-Party Service Providers') }}</h3>
            <p>{{ __('We partner with trusted third-party payment processors to handle transactions securely. When making purchases, you\'ll be directed to their platforms to complete payments. These providers manage your payment details according to their own privacy policies - we never store credit card information on our servers.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Sharing of Your Information') }}</h3>
            <p>{{ __('We do not sell your personal data to marketers. Your information may be shared with: (1) essential service providers (e.g., payment processors, analytics platforms); (2) legal authorities when required by law; or (3) to protect the rights and safety of our platform and users. Any shared data is limited to what\'s necessary for the specific purpose.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Data Security') }}</h3>
            <p>{{ __('We implement industry-standard security measures including encryption and access controls to protect your information. While we strive to protect your data, no online transmission is 100% secure. You are responsible for keeping your login credentials confidential.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Privacy Policy Updates') }}</h3>
            <p>{{ __('We may update this policy periodically to reflect changes in our practices or legal requirements. The updated version will be posted here with a new "Last Updated" date. We recommend reviewing this policy regularly to stay informed.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Contact Us') }}</h3>
            <p>
                {{ __('For any privacy-related inquiries or requests regarding your personal data, please contact our team at') }}
                <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a>.
                {{ __('We\'re committed to addressing your concerns promptly and transparently.') }}
            </p>
        </div>
    </main>
@endsection