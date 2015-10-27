@extends('app')

@section('css')
    <link href="//cdn.bootcss.com/summernote/0.6.16/summernote.min.css" rel="stylesheet">
@stop

@section('content')
    <button id="fetch" type="button">ªÒ»°</button>
    <button id="fill" type="button">ÃÓ≥‰</button>

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

            function sendFile(file) {
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
                        $('#summernote').summernote('editor.insertImage',url);
                    }
                });
            }


            $('#fetch').click(function(){
                console.log(encodeURIComponent($('#summernote').code()));
            });

            var str = "%3Cp%3E%E6%88%91%E5%93%88%E5%93%88%20'%E6%81%A9'%3C%2Fp%3E%3Cp%3E%22%E6%98%" +
                    "AF%E5%90%97%22%3C%2Fp%3E%3Cp%3E%E6%81%A9%20%3Cspan%20style%3D%22background-color%" +
                    "3A%20yellow%3B%22%3E%E6%98%AF%E7%9A%84%3C%2Fspan%3E%3C%2Fp%3E%3Col%3E%3Cli%3E%3Cspan%20sty" +
                    "le%3D%22background-color%3A%20rgb(255%2C%20255%2C%200)%3B%22%3E%E9%A2%9D%3C%2Fspan%3E%3C%2F" +
                    "li%3E%3Cli%3E%3Cspan%20style%3D%22background-color%3A%20rgb(255%2C%20255%2C%200)%3B%22%3E%E7%" +
                    "9A%84%3C%2Fspan%3E%3C%2Fli%3E%3Cli%3E%3Cspan%20style%3D%22background-color%3A%20rgb(255%2C%2" +
                    "0255%2C%200)%3B%22%3E%E6%98%AF%3C%2Fspan%3E%3C%2Fli%3E%3C%2Fol%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E%3Cp" +
                    "%3E%E6%98%AF%E5%A3%AB%E5%A4%A7%E5%A4%AB7!%40%23%24%25%5E%26amp%3B*()%3C%2Fp%3E";
            $('#fill').click(function(){
                $('#summernote').code(decodeURIComponent(str));
            });


        });

    </script>
@stop