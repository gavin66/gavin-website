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
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: true,
                onImageUpload:function(files, editor, welEditable){
                    sendFile(files[0],editor,welEditable);
                }
            });
        });

        function sendFile(file,editor,welEditable) {
            var data = new FormData();
            data.append("image", file);
            $.ajax({
                url: "ajax/save-image",
                data: data,
                method: "post",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }

    </script>
@stop