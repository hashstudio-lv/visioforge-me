<x-app-layout>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="subheader" data-bgimage="url(images/background/subheader.jpg) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1>{{ __('Contact us') }}</h1>
                            <p>
                                {{ __('We value your thoughts and inquiries. Let us know how we can assist you or improve our services.') }}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-sm-30">
                        <div class="nft__item p-5">
                            <h3>{{ __('Do you have any question?') }}</h3>

                            <form name="contactForm" id="contact_form" class="form-border" method="post"
                                  action="email.php">
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="{{ __('Your Name') }}"/>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control"
                                           placeholder="{{ __('Your Email') }}"/>
                                </div>

                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                           placeholder="{{ __('Your Phone') }}"/>
                                </div>

                                <div class="field-set">
                                    <textarea name="message" id="message" class="form-control"
                                              placeholder="{{ __('Your Message') }}"></textarea>
                                </div>

                                <div class="spacer-half"></div>

                                <div id="submit">
                                    <input type="submit" id="send_message" value="{{ __('Submit Form') }}" class="btn btn-main"/>
                                </div>
                                <div id="mail_success" class="success">{{ __('Your message has been sent successfully.') }}</div>
                                <div id="mail_fail" class="error">{{ __('Sorry, error occured this time sending your message.') }}
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="nft__item p-5 mb-4">
                            <h3>Office</h3>
                            <address class="s1 mb-0">
                                <div>MEGA DIGITS LTD (15299525)</div>
                                <div>Hm Revenue And Customs, Victoria Street, Grimsby, England, DN31 1DB</div>
                                <div><a href="mailto:info@assistantedit.com">info@assistantedit.com</a></div>
                            </address>
                        </div>
                        <div class="nft__item p-5">
                            <h3>{{ __('Socials') }}</h3>

                            <div class="mt-4">
                                <div class="social-icons" style="background-size: cover;">
                                    <a href="https://instagram.com/assistantedit_com/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                    <a href="https://x.com/assistantedit_"><i class="fa fa-twitter fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- content close -->
</x-app-layout>
