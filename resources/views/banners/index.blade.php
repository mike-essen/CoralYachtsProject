@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>Yachts</h1>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card p-2 mt-1">
                    <p class="mb-0 text-center"><a href="banners/create">@lang('content.new-banner')</a></p>
                </div>
            </div>
        </div>
        <hr class="mb-5">

        <div class="row">
            @foreach($banners as $banner)
                <div class="col-sm-12 col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item mb-5">
                            <h2>{{ $banner->title }}</h2>
                            <p>URL: {{ $banner->url }}</p>
                            <p>@lang('content.yacht_description'): {{ $banner->description }}</p>
                            <p>@lang('content.yacht_price'): {{ $banner->price }}</p>
                            <p>@lang('content.yacht_width'): {{ $banner->width }}</p>
                            <p>Banner: </p><img class="img-fluid max_width_banner" src="{{asset('/storage/' . $banner->image_nl)}}">
                            <p class="mb-0"><a
                                    href="{{ url('/banners/' . $banner->id) }}">@lang('content.edit-banner')</a></p>
                            <form action="/banners/{{ $banner->id }}" method="POST">
                                @method('DELETE')
                                {{ csrf_field() }}

                                <button class="btn btn-danger btn-sm mb-0 mt-2" type="submit"
                                        onclick="return confirmDelete{{ $banner->id }}();">@lang('content.delete-banner')
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

            @endforeach

        </div>
    </div>
    <hr>

    @foreach ($banners as $banner)
        <script type="text/javascript">
            function confirmDelete{{ $banner->id }}() {
                if (confirm('@lang('content.confirm-delete-banner')')) {
                    $("#deleteForm{{ $banner->id }}").submit();
                } else {
                    return false;
                }
            }
        </script>
    @endforeach
@endsection
