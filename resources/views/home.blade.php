@extends('app')

@section('content')
    <div class="container" id="containerContent">
        <div class="content">
            <section class="">
                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">Metrics 是个什么鬼 之入门教程</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p> HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
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
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">使用Redis和SQLAlchemy对Scrapy Item去重并存储</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>半年前我就有幸拜读了@Easy的《程序员跳槽全攻略》电子书，当时趁着限免机智地入手了。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">HBase 集群安装部署</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。
                            HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">使用Scrapy定制可动态配置的爬虫</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>半年前我就有幸拜读了@Easy的《程序员跳槽全攻略》电子书，当时趁着限免机智地入手了。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">Spark On YARN 集群安装部署</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。
                            HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">Spark 下操作 HBase（1.0.0 新 API）</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>半年前我就有幸拜读了@Easy的《程序员跳槽全攻略》电子书，当时趁着限免机智地入手了。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>

                <article class="post post-type-normal" itemscope itemtype="" >
                    <header class="post-header">
                        <h1 class="post-title"><a class="post-title-link" itemprop="url" href="">编程方式下运行 Scrapy spider</a></h1>
                        <div class="post-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="post-body">
                        <p>HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。
                            HBase经过七年发展，终于在今年2月底，发布了 1.0.0 版本。这个版本提供了一些让人激动的功能，
                            并且，在不牺牲稳定性的前提下，引入了新的API。虽然 1.0.0 兼容旧版本的 API，不过还是应该尽早地来熟悉下新版API。
                            并且了解下如何与当下正红的 Spark 结合，进行数据的写入与读取。鉴于国内外有关 HBase 1.0.0 新 API 的资料甚少，故作此文。
                            本文将分两部分介绍，第一部分讲解使用 HBase 新版 API 进行 CRUD 基本操作；
                            第二部分讲解如何将 Spark 内的 RDDs 写入 HBase 的表中，反之，HBase 中的表又是如何以 RDDs 形式加载进 Spark 内的。</p>
                        <div class="post-more-link">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>
            </section>
            <nav class="pagination">
                <span class="page-number current">1</span>
                <a class="page-number" href="/page/2/">2</a>
                <span class="space">…</span>
                <a class="page-number" href="/page/7/">7</a>
                <a class="extend next" rel="next" href="/page/2/">»</a>
            </nav>
        </div>
        <aside id="sidebar" class="sidebar" style="">
            <div class="sidebar-inner">
                <section class="site-overview">
                    <div class="site-author motion-element" itemprop="author" itemscope="" itemtype="http://schema.org/Person" style="opacity: 1; display: block; transform: translateX(0px);">
                        <img class="site-author-image" src="/images/default_avatar.jpg" alt="WuChong" itemprop="image">
                        <p class="site-author-name" itemprop="name">WuChong</p>
                    </div>
                    <p class="site-description motion-element" itemprop="description" style="opacity: 1; display: block; transform: translateX(0px);">伍翀的个人技术博客</p>
                    <nav class="site-state motion-element" style="opacity: 1; display: block; transform: translateX(0px);">
                        <div class="site-state-item site-state-posts">
                            <a href="/archives">
                                <span class="site-state-item-count">49</span>
                                <span class="site-state-item-name">日志</span>
                            </a>
                        </div>

                        <div class="site-state-item site-state-categories">
                            <a href="/categories">
                                <span class="site-state-item-count">12</span>
                                <span class="site-state-item-name">分类</span>
                            </a>
                        </div>

                        <div class="site-state-item site-state-tags">
                            <a href="/tags">
                                <span class="site-state-item-count">51</span>
                                <span class="site-state-item-name">标签</span>
                            </a>
                        </div>

                    </nav>
                    <div class="feed-link motion-element" style="opacity: 1; display: block; transform: translateX(0px);">
                        <a href="/atom.xml" rel="alternate">
                            <i class="menu-item-icon icon-next-feed"></i>
                            RSS
                        </a>
                    </div>
                    <div class="links-of-author motion-element" style="opacity: 1; display: block; transform: translateX(0px);">
              <span class="links-of-author-item">
                <a href="https://github.com/wuchong" target="_blank">GitHub</a>
              </span>
              <span class="links-of-author-item">
                <a href="https://twitter.com/jarkwu" target="_blank">Twitter</a>
              </span>
              <span class="links-of-author-item">
                <a href="http://weibo.com/wuchong1014" target="_blank">Weibo</a>
              </span>
              <span class="links-of-author-item">
                <a href="https://www.douban.com/people/wuchong1014" target="_blank">DouBan</a>
              </span>
              <span class="links-of-author-item">
                <a href="http://www.zhihu.com/people/jark" target="_blank">ZhiHu</a>
              </span>
                    </div>

                    <div class="cc-license motion-element" itemprop="license" style="opacity: 1; display: block; transform: translateX(0px);">
                        <a href="http://creativecommons.org/licenses/by-nc-sa/4.0" class="cc-opacity" target="_blank">
                            <img src="/images/cc-by-nc-sa.svg" alt="Creative Commons">
                        </a>
                    </div>
                    <div class="links-of-author motion-element" style="opacity: 1; display: block; transform: translateX(0px);">
                        <p class="site-author-name">Links</p>
              <span class="links-of-author-item">
              <a href="http://zipperary.com/" target="_blank">Zippera's Blog</a>
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