@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>{{ $banner->title }}</h1>
            </div>
        </div>
        <hr class="mb-0">

        <form method="POST" action="{{ url('/banners/' . $banner->id) }}" enctype="multipart/form-data">
            @method('PATCH')
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group form-material">
                    <label class="form-control-label" for="title">@lang('content.banner-title')</label>
                    <input type="text" class="form-control" id="title" value="{{ $banner->title }}" name="title" required="required" required="required" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="image_nl">Yacht IMG</label><br>
                    <input type="file" class="" id="image_nl" value="{{asset('/storage/' . $banner->image_nl)}}" onchange="previewFileNl(this)" name="image_nl" autocomplete="off"/>
                    <img id="previewImgNl" style="max-width:500px;margin-top:20px;"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="url">@lang('content.banner-url')</label>
                    <input type="text" class="form-control" id="url" value="{{ $banner->url }}" name="url" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="description">Yacht @lang('content.yacht_description')</label>
                    <input type="text" class="form-control" id="description" value="{{ $banner->description }}" name="description" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="width">@lang('content.banner-width')</label><br>
                    <small>
                        @lang('content.best-results')<br>
                        1/3 @lang('content.format'): 360px x 350px<br>
                        2/3 @lang('content.format'): 750px x 350px<br>
                        3/3 @lang('content.format'): 1110px x 350px<br>
                    </small>
                    <select name="width" id="width" class="form-control" required="required">
                        <option value="" hidden>@lang('content.make-selection')</option>
                        <option value="1/3" @if($banner->width == '1/3') selected @endif>1/3 @lang('content.width')</option>
                        <option value="2/3" @if($banner->width == '2/3') selected @endif>2/3 @lang('content.width')</option>
                        <option value="3/3" @if($banner->width == '3/3') selected @endif>3/3 @lang('content.width')</option>
                    </select>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="price">Yacht @lang('content.yacht_price')</label>
                    <input type="text" class="form-control" id="price" value="{{ $banner->price }}" name="price" required="required" autocomplete="off"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">@lang('content.save-banner')</button>
        </form>
        <hr>
    </div>

    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="application/javascript">
        function previewFileNl(input){
            var file=$("input[id=image_nl]").get(0).files[0];
            console.log(file);
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function (){
                    $('#previewImgNl').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script type="application/javascript">
        function previewFileEn(input){
            var file=$("input[id=image_en]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function (){
                    $('#previewImgEn').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
