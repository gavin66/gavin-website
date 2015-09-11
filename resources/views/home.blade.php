@extends('app')

@section('content')
    <div class="container">
        <div class="content">
            <section class=""></section>
            <nav class="pagination"></nav>
        </div>
    </div>
@stop

@section('js')
    <script src="//cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="{{ asset('/js/spare/messages_zh.min.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            //初始化表单验证
//            loginValidator.init();
        });

        //表单验证
        var loginValidator = function() {
            var handleSubmit = function() {
                $('#form-login').validate({
                    debug:true,
                    errorElement : 'span',
                    errorClass : 'help-block',
                    focusInvalid : false,
                    rules : {
                        email : {
                            required : true
                        },
                        password : {
                            required : true
                        }
                    },
//                        messages : {
//                            email : {
//                                required : "Username is required."
//                            },
//                            password : {
//                                required : "Password is required."
//                            }
//                        },
                    highlight : function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    success : function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                        $(element).remove();
                    },
                    errorPlacement : function(error, element) {
                        element.parent('div').append(error);
                    },
                    submitHandler : function(form) {
                        $.post("auth/login",gApp.getFormParams($('#form-login')),function(data){
                            alert(data);
                        },"text");
                    }
                });

                $('#form-login input').keypress(function(event) {
                    if (event.which == 13) {
                        if ($('#form-login').validate().form()) {
                            $('#form-login').submit();
                        }
                        return false;
                    }
                });

                $('#login_commit').click(function(){
                    $('#form-login').submit();
                });
            }
            return {
                init : function() {
                    handleSubmit();
                }
            };

        }();
    </script>
@stop