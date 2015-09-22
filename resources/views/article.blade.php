@extends('app')

@section('css')
    <link href="{{ asset('/css/lib/summernote.css') }}" rel="stylesheet">
@stop

@section('content')
    <div id="summernote">Hello Summernote</div>
@stop

@section('js')
    <script src="{{ asset('/js/lib/summernote.min.js') }}"></script>
@stop