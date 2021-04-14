@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>@lang('content.new-banner')</h1>
            </div>
        </div>
        <hr class="mb-0">

        <form method="POST" action="/banners" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group form-material">
                    <label class="form-control-label" for="title">@lang('content.banner-title')</label>
                    <input type="text" class="form-control" id="title" name="title" required="required" required="required" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="image_nl">Yacht IMG</label><br>
                    <input type="file" class="" id="image_nl" onchange="previewFileNl(this)" name="image_nl" required="required" autocomplete="off"/>
                    <img id="previewImgNl" style="max-width:500px;margin-top:20px;"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="url">@lang('content.banner-url')</label>
                    <input type="text" class="form-control" id="url" name="url" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="description">Yacht @lang('content.yacht_description')</label>
                    <input type="text" class="form-control" id="description" name="description" autocomplete="off"/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="price">Yacht @lang('content.yacht_price')</label>
                    <input type="text" class="form-control" id="price" name="price" autocomplete="off"/>
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
