@extends('app')

@section('css')
    <link href="//cdn.bootcss.com/summernote/0.6.16/summernote.min.css" rel="stylesheet">
@stop

@section('content')
    <div id="summernote"></div>
@stop

@section('js')
    <script src="//cdn.bootcss.com/summernote/0.6.16/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true,                 // set focus to editable area after initializing summernote
            });
        });

    </script>
@stop