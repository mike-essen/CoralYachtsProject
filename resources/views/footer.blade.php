<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <p class="footer_title">@lang('content.latest-news')</p>
                <hr class="footer_hr">
                @foreach($newsitems as $newsitem)
                    <div class="post">
                        <div class="post-head">
                            <p class="newsfeed">> <a class="feed_title"
                                                     @if (Config::get('app.locale') == 'en')
                                                        href="{{ url(str_replace('https://www.validsign.nl/', 'https://www.validsign.nl/en/', $newsitem['link'])) }}"
                                                     @else
                                                        href="{{ url($newsitem['link']) }}"
                                                     @endif
                                                     target="_blank">{{ substr($newsitem['title'], 0, 120) . '...' }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-sm-12 col-md-6">
                <p class="footer_title">@lang('content.upcoming-events')</p>
                <hr class="footer_hr">
                @foreach($importantdates as $importantdate)
                    <div class="post">
                        <div class="post-head">
                            <p class="newsfeed">> <a class="feed_title"
                                                     @if (Config::get('app.locale') == 'en')
                                                     href="{{ url(str_replace('https://www.validsign.nl/', 'https://www.validsign.nl/en/', $importantdate['link'])) }}"
                                                     @else
                                                     href="{{ url($importantdate['link']) }}"
                                                     @endif
                                                     target="_blank">{{ substr($importantdate['title'], 0, 120) . '...' }}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
