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
                            {{ __('Terms and conditions') }}
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a href="https://visioforge.me/en" class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Home') }} <i class="icofont-simple-right"></i>
                                </a>
                            </li>
                            <li>
                                <span class="text-lg text-blackColor2 dark:text-blackColor2-dark">
                                    {{ __('Terms and conditions') }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
            <h5 class="mb-3 mt-5">{{ __('Last Updated: January 08, 2026') }}</h5>

            <p>
                {!! __('Welcome to https://visioforge.me (the "Website"), operated by :company_name, a company incorporated in Poland under NIP: :company_nip, REGON: :company_regon, KRS: :company_krs, with its registered office at :company_address ("we", "us", "our", the "Company"). These Terms and Conditions (the "Terms", the "Agreement") govern your access to and use of our AI image generation and editing services (the "Platform"), forming a binding contract between you ("you", "your", "user", "customer") and the Company. For any inquiries, please contact us at :company_email.',
                    [
                        'company_name'    => config('app.company.name'),
                        'company_nip'     => config('app.company.nip', '5273164602'),
                        'company_regon'   => config('app.company.regon', '541742501'),
                        'company_krs'     => config('app.company.krs', '0001173280'),
                        'company_address' => config('app.company.address'),
                        'company_email'   => config('app.company.email'),
                    ]) !!}
            </p>

            <p>{{ __('Please read these Terms carefully before using our AI services. If you disagree with any provision, you must immediately cease using the Platform.') }}</p>

            <p>{{ __('By accessing or purchasing through our Website, you agree to be bound by these Terms, our Privacy Policy, and all incorporated policies (collectively, the "Terms of Use"). Review our Privacy Policy to understand our data practices. We disclaim responsibility for third-party websites linked from our Platform.') }}</p>

            <p>
                {{ __('For inquiries regarding these Terms, contact us at') }}
                <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a>.
            </p>

            <h3 class="mb-3 mt-5">{{ __('1. Modifications') }}</h3>
            <p>{{ __('1.1 We may modify any aspect of the Platform without notice. Regular review of these Terms is your responsibility. Continued use after changes constitutes acceptance. The "Last Updated" date reflects revisions. Disagreeing with changes requires immediate discontinuation of service.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('2. Services') }}</h3>
            <p>{{ __('2.1 Account termination results in permanent deletion of all AI-generated content without possibility of restoration or refund.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('3. Eligibility Criteria') }}</h3>
            <p>{{ __('3.1 You must use our AI services lawfully in compliance with all regulations. Minimum age requirement is 18 years or your jurisdiction\'s age of majority.') }}</p>
            <p>{{ __('3.2 Using our Platform confirms your legal capacity to form binding contracts.') }}</p>
            <p>{{ __('3.3 Service is unavailable in restricted regions including: Afghanistan, Cuba, Iran, North Korea, Syria, Russia, Belarus, Crimea, Donetsk, Luhansk, Myanmar, Central African Republic, China, DR Congo, Lebanon, Libya, Mali, Nicaragua, Somalia, Sudan, Venezuela, Yemen, and Zimbabwe. This list may be updated.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('4. Your Account') }}</h3>
            <p>{{ __('4.1 The agreement commences upon account registration, requiring submission of personal data for storage in our systems.') }}</p>
            <p>{{ __('4.2 We may refuse registration for violations, fraud concerns, unverifiable identity, or duplicate accounts.') }}</p>
            <p>{{ __('4.3 One account per user permitted. Previous banned accounts must be resolved before creating new ones.') }}</p>
            <p>{{ __('4.4 You bear full responsibility for all account activities. Credential sharing is prohibited. Report unauthorized access immediately.') }}</p>
            <p>{{ __('4.5 We may suspend accounts for suspected inaccuracies or Terms violations.') }}</p>
            <p>{{ __('4.6 We\'re not liable for damages from unauthorized account use.') }}</p>
            <p>{{ __('4.7 We may suspend access without notice for threats to service, rights violations, or legal breaches.') }}</p>
            <p>{{ __('4.8 Inactive accounts (30+ days) may be deactivated with data deletion.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('5. User Conduct') }}</h3>
            <p>{{ __('5.1 Service use must comply with these Terms and laws. Prohibited activities include:') }}</p>
            <ul>
                <li>{{ __('Accessing services from prohibited jurisdictions;') }}</li>
                <li>{{ __('Reverse engineering or modifying our AI technology;') }}</li>
                <li>{{ __('Unauthorized distribution or commercialization;') }}</li>
                <li>{{ __('Commercial/political use without permission;') }}</li>
                <li>{{ __('Disrupting service operations;') }}</li>
                <li>{{ __('Using automated data collection tools;') }}</li>
                <li>{{ __('Impersonation or false affiliations;') }}</li>
                <li>{{ __('Uploading harmful or illegal content;') }}</li>
                <li>{{ __('Harassment or discriminatory behavior;') }}</li>
                <li>{{ __('Interfering with others\' use.') }}</li>
            </ul>
            <p>{{ __('5.2 We may remove content or disable access for violations without notice.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('6. Compliance Procedures') }}</h3>
            <p>
                {{ __('6.1 You agree to comply with all Terms and policies. Report violations to') }}
                <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a>
                {{ __('including:') }}
            </p>
            <ul>
                <li>{{ __('Detailed violation explanation;') }}</li>
                <li>{{ __('Content location (URL);') }}</li>
                <li>{{ __('Your contact information;') }}</li>
                <li>{{ __('Good faith statement.') }}</li>
            </ul>
            <p>{{ __('6.2 Enforcement may include warnings, content removal, restrictions, or bans.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('7. Transactions') }}</h3>
            <p>{{ __('7.1 All transactions process in EUR (converted from other currencies at current rates).') }}</p>
            <p>{{ __('7.2 Purchases require payment details including card information and addresses.') }}</p>
            <p>{{ __('7.3 Prices are displayed in EUR unless specified otherwise.') }}</p>
            <p>{{ __('7.4 Use only approved payment methods. Purchases confirm authorization and accuracy.') }}</p>
            <p>{{ __('7.5 We may reject orders for availability issues, pricing errors, or payment problems.') }}</p>
            <p>{{ __('7.6 Delivery information emails sent to your registered address. Allow 14 days for delivery. Unfulfillable orders will be refunded.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('8. Virtual Financial Token (VFT)') }}</h3>
            <p>{{ __('8.1 Definition and Purpose.') }}</p>
            <p>{{ __('8.1.1 The Platform utilizes an internal virtual accounting unit called the Virtual Financial Token (“VFT”).') }}</p>
            <p>{{ __('8.1.2 VFT is not a cryptocurrency, digital asset, security token, or financial instrument as defined under applicable law. It is a non-transferable, non-tradable unit of account, used solely for internal transactional and operational purposes within the Platform.') }}</p>
            <p>{{ __('8.1.3 The use of VFT allows for efficient internal accounting, balance management, service consumption and user interaction with Platform features.') }}</p>

            <p>{{ __('8.2 Valuation and Exchange Rate.') }}</p>
            <p>{{ __('8.2.1 VFT is pegged to the euro (EUR) at a fixed exchange rate of 1 VFT = 1 EUR.') }}</p>
            <p>{{ __('8.2.2 This fixed rate is used exclusively within the Platform to determine user balances and transactional amounts.') }}</p>
            <p>{{ __('8.2.3 Deposits made by a user are automatically converted to VFT on a 1:1 basis. Users can view their balance in VFT, which reflects the corresponding EUR value.') }}</p>

            <p>{{ __('8.3 Legal Status of VFT.') }}</p>
            <p>{{ __('8.3.1 VFT is not legal tender, electronic money, or a payment instrument under EU Directive 2009/110/EC or any other applicable regulatory framework.') }}</p>
            <p>{{ __('8.3.2 VFT does not grant ownership rights, voting rights, dividends, or any form of participation in the governance or equity of the Platform or its parent company.') }}</p>
            <p>{{ __('8.3.3 VFT cannot be sold, transferred, exchanged, pledged, or used outside the scope of the Platform.') }}</p>
            <p>{{ __('8.3.4 The existence and use of VFT do not imply any speculative, investment, or financial activity.') }}</p>

            <p>{{ __('8.4 Use of VFT Within the Platform.') }}</p>
            <p>{{ __('8.4.1 Users may use their VFT balance for any permitted activities or services available on the Platform, including but not limited to:') }}</p>
            <ul>
                <li>{{ __('Accessing digital services or products') }}</li>
                <li>{{ __('Making internal purchases') }}</li>
            </ul>

            <h3 class="mb-3 mt-5">{{ __('9. Refunds') }}</h3>
            <p>{{ __('9.1 Refund eligibility includes:') }}</p>
            <ul>
                <li>{{ __('Unresolved technical issues after 5 business days;') }}</li>
                <li>{{ __('Confirmed unauthorized charges;') }}</li>
                <li>{{ __('Verified billing errors;') }}</li>
                <li>{{ __('Fraudulent activity.') }}</li>
            </ul>
            <p>{{ __('9.2 EEA/UK/Swiss consumers may cancel digital purchases within 14 days.') }}</p>
            <p>{{ __('9.3 Cancellation rights waived if content access begins during this period.') }}</p>
            <p>
                {{ __('9.4 Submit cancellation requests to') }}
                <a href="mailto:{{ config('app.company.email') }}" class="link">{{ config('app.company.email') }}</a>.
            </p>
            <p>{{ __('9.5 Valid cancellations receive full refunds within 14 days (may extend to 30 days). Refunds issued via original payment method without fees.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('10. Intellectual Property Rights') }}</h3>
            <p>{{ __('10.1 All Platform content (text, graphics, images, code, etc.) belongs to the Company or licensors, protected by copyright and trademark laws.') }}</p>
            <p>{{ __('10.2 Unauthorized use of trademarks displayed on the Platform is prohibited.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('11. Indemnification') }}</h3>
            <p>{{ __('11.1 You agree to defend and indemnify the Company against all claims arising from: (i) your Platform use; (ii) Terms violations; (iii) third-party rights infringement.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('12. Disclaimer') }}</h3>
            <p>{{ __('12.1 The Platform is provided "as is" without warranties of accuracy, reliability, or availability. We disclaim all implied warranties to the fullest extent permitted by law.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('13. Limitation of Liability') }}</h3>
            <p>{{ __('13.1 We\'re not liable for indirect, incidental, special, or consequential damages from Platform use.') }}</p>
            <p>{{ __('13.2 Platform use is at your own risk, including third-party content interactions.') }}</p>
            <p>{{ __('13.3 Our maximum liability is limited to amounts paid by you in the preceding 6 months.') }}</p>

            <h3 class="mb-3 mt-5">{{ __('14. Governing Law and Dispute Resolution') }}</h3>
            <p>{{ __('14.1 These Terms are governed by Polish law, with disputes resolved in Polish courts. This doesn\'t affect your consumer rights under local laws.') }}</p>
            <p>
                {{ __('14.2 EEA/Swiss users may utilize the EU ODR platform') }}
                (<a href="http://ec.europa.eu/consumers/odr" class="link">http://ec.europa.eu/consumers/odr</a>).
            </p>

            <h3 class="mb-3 mt-5">{{ __('15. Miscellaneous') }}</h3>
            <p>{{ __('15.1 Not enforcing Terms provisions doesn\'t waive our rights. Waivers require written form.') }}</p>
            <p>{{ __('15.2 No employment or partnership relationship is created by these Terms.') }}</p>
            <p>{{ __('15.3 These Terms represent the complete agreement, superseding all prior communications.') }}</p>
            <p>{{ __('15.4 The Agreement continues until terminated by either party. Termination doesn\'t affect pre-existing rights. Surviving provisions remain effective.') }}</p>
        </div>
    </main>
@endsection