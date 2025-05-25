<x-app-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="section-hero" aria-label="section" data-bgimage="url({{ asset('assets/images/background/21.jpg') }}) bottom" data-bgimage-alt="url({{ asset('assets/images/background/21-alt.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="spacer-double"></div>
                        <h1>Generate Effective Emails <span class="text-gradient">Instantly</span></h1>
                        <p class="lead">
                            AI-powered email creation tailored to your business and communication needs.
                        </p>
                        <div class="spacer-10"></div>
                        <form action="{{ route('orders.generate-email') }}" id="form_search_big" method="get">
                            <div class="position-relative">
                                <input class="form-control" id="prompt" name="prompt" placeholder="Search for email type or provide details" type="text" /> <button type="submit" id="btn-submit"><i class="fa fa-search"></i></button>
                                <div class="clearfix"></div>
                                <div class="spacer-10"></div>
                                <small><strong>Examples:</strong>
                                    "Cold email for a potential client"
                                    "Marketing campaign announcement"
                                    "Follow-up email after a business meeting"
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Top Up Your Wallet') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Securely fund your wallet to unlock premium AI-driven business insights, financial models, and investment strategies.') }}
                                </p>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Generate and Customize Emails') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Create AI-powered emails tailored to your business and communication needs. From cold outreach to newsletters—craft compelling messages in minutes.') }}
                                </p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">{{ __('Manage Your Emails') }}</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">
                                    {{ __('Easily access, edit, and send your AI-generated emails from one centralized dashboard, optimizing engagement and efficiency.') }}
                                </p>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-fun-facts">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <span class="p-title invert">Our Impact</span><br>
                        <h2>
                            AI-Powered Emails in Numbers
                        </h2>
                        <div class="small-border sm-left"></div>
                        <p>Boosting communication with AI-generated emails that drive engagement, conversions, and efficiency.</p>
                    </div>

                    <div class="col-md-8 offset-md-1">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="10" data-speed="3000">0</span>m+</h3>
                                    <h5 class="id-color">AI-generated emails sent.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="1" data-speed="3000">0</span>s</h3>
                                    <h5 class="id-color">Time to generate a personalized email.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="95" data-speed="3000">0</span>%</h3>
                                    <h5 class="id-color">Improved response rates.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="50" data-speed="3000">0</span>+</h3>
                                    <h5 class="id-color">Custom email templates available.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="100" data-speed="3000">0</span>k+</h3>
                                    <h5 class="id-color">Businesses trust our AI for email automation.</h5>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                <div class="de_count">
                                    <h3><span class="timer" data-to="80" data-speed="3000">0</span>%</h3>
                                    <h5 class="id-color">Reduction in manual email workload.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
