@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1>@lang("content.pages")</h1>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card p-2 mt-1">
                    <p class="mb-0 text-center"><a href="environments/create">@lang('content.new-environment')</a></p>
                </div>
            </div>
        </div>
        <hr class="mb-0">

        <div class="row">
            @foreach($environments as $environment)
                <div class="col-sm-12 col-md-12">
                    <div class="card mt-5 card-shadow">
                        <div class="card-body">
                            <h3 class="mb-0">{{ $environment->title }}</h3>
                            <small>{{ $environment->category }}</small><br><br>
                            <small>@lang('content.description_nl')</small>
                            <p class="mt-2">{{ $environment->description }}</p>
                            <p class="mb-0"><a href="{{ url('/environments/' . $environment->id) }}">@lang('content.edit-environment')</a></p>
                            <form action="/environments/{{ $environment->id }}" method="POST">
                                @method('DELETE')
                                {{ csrf_field() }}

                                <button class="btn btn-danger btn-sm mb-0 mt-2" type="submit" onclick="return confirmDelete{{ $environment->id }}();">@lang('content.delete-environment')</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <hr>

    @foreach ($environments as $environment)
        <script type="text/javascript">
            function confirmDelete{{ $environment->id }}() {
                if (confirm('@lang('content.confirm-delete')')) {
                    $( "#deleteForm{{ $environment->id }}" ).submit();
                } else {
                    return false;
                }
            }
        </script>
    @endforeach
@endsection
