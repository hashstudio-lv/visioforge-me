<x-app-layout>
    <div class="no-bottom " id="content">
        <div id="top"></div>
        <section id="subheader" data-bgimage="url({{ asset('assets/images/background/25.jpg') }}) bottom" data-bgimage-alt="url({{ asset('assets/images/background/25-alt.jpg') }}) bottom">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ $page->title }}</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section aria-label="section">
            <div class="container">
                {!! $page->content !!}
            </div>
        </section>
    </div>
</x-app-layout>
