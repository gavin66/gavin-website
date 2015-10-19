@extends('app')

@section('css')
    <link href="//cdn.bootcss.com/summernote/0.6.16/summernote.min.css" rel="stylesheet">
@stop

@section('content')
    <div id="summernote"></div>
@stop

@section('js')

    <script src="//cdn.bootcss.com/summernote/0.6.16/summernote.min.js"></script>
    <script src="{{ asset('/js/lib/summernote-zh-CN.js') }}"></script>
    <script>
        $(function(){
            $('#summernote').summernote({
                lang:'zh-CN',
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: true,
                onImageUpload:function(files){
                    sendFile(files[0]);
                }
            });

            function sendFile(file,editor,welEditable) {
                var data = new FormData();
                data.append("file", file);
                $.ajax({
                    url: "ajax/save-image",
                    data: data,
                    method: "post",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
//                        editor.insertImage(welEditable, url);
                        $('#summernote').summernote('editor.insertImage',url);
                    }
                });
            }
        });

    </script>
@stop