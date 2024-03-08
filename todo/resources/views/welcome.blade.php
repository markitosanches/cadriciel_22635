@extends('layouts.app')
@section('title', trans('lang.text_welcome'))
@section('content')
<div class="row justify-content-center my-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="display-6 text-center">@lang('lang.text_welcome_title')</h1>
            </div>
            <div class="card-body">
                <p>@lang('lang.text_welcome_paragraph')</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('task.index')}}" class="btn btn-primary">@lang('lang.text_welcome_btn')</a>
            </div>
        </div>
    </div>
</div>
@endsection
