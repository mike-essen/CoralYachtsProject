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
                    <label class="form-control-label" for="description">@lang('content.environment-description_nl')</label>
                    <input type="text" class="form-control" value="{{ $environment->description }}" id="description" name="description" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="url">@lang('content.environment-newurl')</label>
                    <input type="text" class="form-control" value="{{ $environment->url }}" id="url" name="url" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="category">@lang('content.environment-newcategory')</label>
                    <select name="category" id="category" class="form-control" required="required">
                        <option value="public" @if($environment->category == 'public') selected @endif>Online</option>
                        <option value="private" @if($environment->category == 'private') selected @endif>Offline</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">@lang('content.save-environment')</button>
        </form>
        <hr>
    </div>
@endsection
