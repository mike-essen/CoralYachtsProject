@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>{{ $environment->title }}</h1>
            </div>
        </div>
        <hr class="mb-0">

        <form method="POST" action="{{ url('/environments/' . $environment->id) }}">
            @method('PATCH')
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group form-material">
                    <label class="form-control-label" for="title">@lang('content.environment-newtitle')</label>
                    <input type="text" class="form-control" value="{{ $environment->title }}" id="title" name="title" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="description_en">@lang('content.environment-newdescription_en')</label>
                    <input type="text" class="form-control" value="{{ $environment->description_en }}" id="description_en" name="description_en" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="description_nl">@lang('content.environment-newdescription_nl')</label>
                    <input type="text" class="form-control" value="{{ $environment->description_nl }}" id="description_nl" name="description_nl" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="url">@lang('content.environment-newurl')</label>
                    <input type="text" class="form-control" value="{{ $environment->url }}" id="url" name="url" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="order">@lang('content.environment-neworder')</label>
                    <input type="number" class="form-control" value="{{ $environment->order }}" id="order" name="order" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="category">@lang('content.environment-newcategory')</label>
                    <select name="category" id="category" class="form-control" required="required">
                        <option value="public" @if($environment->category == 'public') selected @endif>Public</option>
                        <option value="private" @if($environment->category == 'private') selected @endif>Private</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">@lang('content.save-environment')</button>
        </form>
        <hr>
    </div>
@endsection
