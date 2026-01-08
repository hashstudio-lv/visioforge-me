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
                            {{ __('Cookie policy') }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a href="https://visioforge.me/en" class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Home') }} <i class="icofont-simple-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Cookie policy') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
            <h5 class="mb-3">{{ __('Last Updated: January 08, 2026') }}</h5>

            <p>{{ __('Welcome to Visio Forge! We utilize cookies and similar technologies to enhance your experience with our AI image generation platform. This Cookie Policy ("Policy") explains how we use cookies and how you can manage them. By continuing to use our site, you accept these terms. For questions, contact us:') }}</p>

            <p>{{ config('app.company.name') }} | {{ __('Phone: +48 123 456 789') }}</p>
            <p>{{ __('Legal Address:') }} {{ config('app.company.address') }}</p>
            <p>{{ __('Email:') }} <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a></p>

            <h3 class="mb-3 mt-5">{{ __('What Are Cookies?') }}</h3>
            <p>{{ __('Cookies are small text files stored on your device when you use our platform. They help remember your preferences (like login details and AI tool settings) and optimize your creative workflow.') }}</p>
            <p>{{ __('We use both first-party cookies (placed by us) and third-party cookies (from services like analytics providers) to improve functionality and understand how users interact with our AI features.') }}</p>
            <p>
                {{ __('Learn more at') }}
                <a href="https://www.aboutcookies.org" target="_blank">aboutcookies.org</a>
                {{ __('or') }}
                <a href="https://www.allaboutcookies.org" target="_blank">allaboutcookies.org</a>.
            </p>

            <h3 class="mb-3 mt-5">{{ __('Types of Cookies We Use') }}</h3>
            <p>{{ __('Our platform uses these cookie categories:') }}</p>

            <ul>
                <li>
                    <strong>{{ __('Essential Cookies:') }}</strong>
                    {{ __('Required for core functions like account security, payment processing, and AI image generation. These cannot be disabled.') }}
                </li>
                <li>
                    <strong>{{ __('Optional Cookies:') }}</strong>
                    {{ __('Enhance your experience and include:') }}
                    <ul>
                        <li>
                            <strong>{{ __('Preference Cookies:') }}</strong>
                            {{ __('Remember your AI settings (e.g., style preferences, output formats).') }}
                        </li>
                        <li>
                            <strong>{{ __('Analytics Cookies:') }}</strong>
                            {{ __('Help us understand feature usage to improve our AI models.') }}
                        </li>
                        <li>
                            <strong>{{ __('Advertising Cookies:') }}</strong>
                            {{ __('Show relevant promotions for our premium features (opt-out available below).') }}
                        </li>
                    </ul>
                </li>
            </ul>

            <h3 class="mb-3 mt-5">{{ __('Managing Your Cookie Preferences') }}</h3>
            <p>{{ __('Control cookies through your browser settings:') }}</p>
            <ul>
                <li><a href="https://support.google.com/chrome/answer/95647" target="_blank">Google Chrome</a></li>
                <li><a href="https://support.microsoft.com/en-us/topic/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank">Microsoft Edge</a></li>
                <li><a href="https://support.mozilla.org/en-US/kb/clear-cookies-and-site-data-firefox" target="_blank">Firefox</a></li>
                <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank">Safari</a></li>
                <li><a href="https://support.apple.com/en-us/HT201265" target="_blank">Safari Mobile</a></li>
                <li><a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank">Opera</a></li>
            </ul>
            <p>
                {{ __('To opt out of Google Analytics:') }}
                <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">{{ __('Click here') }}</a>
            </p>

            <h3 class="mb-3 mt-5">{{ __('Cookies &amp; Your Personal Data') }}</h3>
            <p>
                {{ __('Some cookies may process technical data (like IP addresses) to personalize your AI experience. We comply with GDPR and other privacy regulations. See our') }}
                <a href="/privacy-policy" class="link">{{ __('Privacy Policy') }}</a>
                {{ __('for details.') }}
            </p>

            <h3 class="mb-3 mt-5">{{ __('Cookie Retention Period') }}</h3>
            <p>{{ __('Session cookies expire when you close your browser. Persistent cookies remain for up to 24 months unless deleted manually.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Updates to This Policy') }}</h3>
            <p>{{ __('We may update this Policy as our AI services evolve. Significant changes will be announced on our platform.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('Contact Us') }}</h3>
            <p>
                {{ __('For cookie-related inquiries:') }}
                <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a>
            </p>
        </div>
    </main>
@endsection