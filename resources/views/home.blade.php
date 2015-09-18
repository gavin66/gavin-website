@extends('app')

@section('content')
    <div class="container content">
        <div class="">
            <section class="">
                <article class="bulletin" itemscope itemtype="" >
                    <header class="bulletin-header">
                        <h1 class="bulletin-title"><a class="post-title-link" itemprop="url" href="">Metrics 是个什么鬼 之入门教程</a></h1>
                        <div class="bulletin-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="bulletin-body">
                        <p class="description" itemprop="description"> HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。
                            HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。
                        </p>
                        <div class="bulletin-link-full">
                            <span>
                                <a class="" href="" rel="contents">阅读全文 »</a>
                            </span>
                        </div>
                    </div>
                </article>
            </section>
            <nav class="paging">
                <a class="prev pull-left" rel="prev" href="/page/2/" ><span class="glyphicon glyphicon-chevron-left"></span></a>
                <span class="page-number current">1</span>
                <a class="page-number" href="/page/2/">2</a>
                <span class="space">…</span>
                <a class="page-number" href="/page/7/">7</a>
                <a class="next pull-right" rel="next" href="/page/2/"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </nav>
        </div>
        <aside id="sidebar" class="sidebar" data-status="closed">
            <div class="sidebar-inner">
                <section class="site-overview">
                    <div class="author motion-element" itemscope itemprop="author" itemtype="http://schema.org/Person">
                        <img class="img-responsive img-thumbnail" src="{{asset('/img/portrait.jpg')}}" alt="Gavin" itemprop="portrait">
                        <p class="author-name" itemprop="name">Gavin</p>
                    </div>
                    <p class="description motion-element" itemprop="description" >
                        青春是一场大雨。即使感冒了,还盼望回头再淋它一次！
                    </p>
                    <nav class="state motion-element" >
                        <div class="state-item">
                            <a href="/archives">
                                <span class="state-item-count">55</span>
                                <span class="state-item-name">日志</span>
                            </a>
                        </div>
                        <div class="state-item">
                            <a href="/categories">
                                <span class="state-item-count">5</span>
                                <span class="state-item-name">分类</span>
                            </a>
                        </div>
                    </nav>
                    {{--<div class="rss motion-element">--}}
                        {{--<a href="/atom.xml">RSS</a>--}}
                    {{--</div>--}}
                    <div class="contact motion-element">
                        <span class="">
                            <a href="https://github.com/gavin66" target="_blank">GitHub</a>
                          </span>
                          <span class="">
                            <a href="https://twitter.com/jarkwu" target="_blank">Twitter</a>
                          </span>
                          <span class="">
                            <a href="https://twitter.com/jarkwu" target="_blank">Facebook</a>
                          </span>
                          <span class="">
                            <a href="https://twitter.com/jarkwu" target="_blank">Google+</a>
                          </span>
                          <span class="">
                            <a href="http://weibo.com/wuchong1014" target="_blank">Weibo</a>
                          </span>
                          <span class="">
                            <a href="http://www.zhihu.com/people/jark" target="_blank">ZhiHu</a>
                          </span>
                    </div>
                </section>
            </div>
        </aside>
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