@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>New Environment</h1>
            </div>
        </div>
        <hr class="mb-0">

        <form method="POST" action="/environments">

            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group form-material">
                    <label class="form-control-label" for="title">@lang('content.environment-title')</label>
                    <input type="text" class="form-control" id="title" name="title" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="description">@lang('content.environment-description_nl')</label>
                    <input type="text" class="form-control" id="description" name="description" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="url">@lang('content.environment-url')</label>
                    <input type="url" class="form-control" id="url" name="url" required="required" autocomplete="off" placeholder=""/>
                </div>
                <div class="form-group form-material">
                    <label class="form-control-label" for="category">@lang('content.environment-category')</label>
                    <select name="category" id="category" class="form-control" required="required">
                        <option value="" hidden>Select Category</option>
                        <option value="public">Online</option>
                        <option value="private">Offline</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">@lang("content.save-environment")</button>
        </form>
        <hr>
    </div>
@endsection
