@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($banners as $banner)
                <div class="col-sm-12 col-md-4 {{ \loginportal\Banner::defineCorrectWidth($banner->width)  }}">
                    <a href="{{ $banner->url }}">
                        <img class="img-fluid"
                             @if (Config::get('app.locale') == 'en')
                             src="{{asset('/storage/' . $banner->image_en)}}"></a>

                    @elseif (Config::get('app.locale') == 'nl')
                        src="{{asset('/storage/' . $banner->image_nl)}}"></a>
                    @endif
                </div>
            @endforeach
        </div>
        <hr>
        <div class="container">
            <div class="row">

                @foreach($environments as $environment)
                    <div class="col-sm-12 col-md-4 loadCard">
                        <div class="card mt-5 card-shadow">
                            <div class="card-body">
                                <h3>{{ $environment->title }}</h3>
                                @if (Config::get('app.locale') == 'en')
                                    <p>{{ $environment->description_en }}</p>
                                @elseif (Config::get('app.locale') == 'nl')
                                    <p>{{ $environment->description_nl }}</p>
                                @endif
                                <p class="mb-0"><a href="{{ url($environment->url) }}" target="_blank">@lang('content.login')</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        @if(count($environments) > 6)
        <div class="under_services mt-5">
            <a href="#" id="loadMore">@lang('content.load-more')</a><br><br>
        </div>
        @endif
    </div>

    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="application/javascript">
        $(function () {
            $(".loadCard").slice(0, 6).show();
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $(".loadCard:hidden").slice(0, 3).slideDown();
                if ($(".loadCard:hidden").length == 0) {
                    $("#loadMore").hide();
                }
            });
        });
    </script>


@endsection
@section('footer')
    @include('footer')
@endsection
