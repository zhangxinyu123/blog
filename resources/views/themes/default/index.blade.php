@extends('themes.default.layouts')

@section('header')
    <title>{{ systemConfig('title','Enda Blog') }} -Powered By  {{ systemConfig('subheading','Enda Blog') }}</title>
    <meta name="keywords" content="{{ systemConfig('seo_key') }}" />
    <meta name="description" content="{{ systemConfig('seo_desc') }}">
@endsection

@section('content')
<section class="banner">
    <div class="collection-head">
        <div class="container">
            <div class="collection-title">
                <h1 class="collection-header">驴爱吃山楂</h1>
                <div class="collection-info">
                    <span class="meta-info">
                        风吹凉一杯茶，夕阳跑赢了老马，回头看雪染白长头发，少年被风吹大，容颜未改心有疤！
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.banner -->
<section class="container content">
    <div class="columns">
        <div class="column two-thirds" >
            <ol class="repo-list">
                @if(!empty($articleList))
                    @foreach($articleList['data'] as $article)
                        <li class="repo-list-item">
                            <h3 class="repo-list-name">
                                <a href="{{ route('article.show',array('id'=>$article->id)) }}" title="{{ $article->title }}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="repo-list-description">
                                {{ strCut(conversionMarkdown($article->content),80) }}
                            </p>
                            <p class="repo-list-meta">
                                <span class="octicon octicon-calendar"></span>{{ $article->created_at->format('Y-m-d') }}
                            </p>
                        </li>
                    @endforeach
                @endif
            </ol>
        </div>
        <div class="column one-third">
            @include('themes.default.right')
        </div>
    </div>
    <div class="pagination text-align">
        <nav>
           {!! $articleList['page']->render($page) !!}
        </nav>
    </div>
    <!-- /pagination -->
</section>
<!-- /section.content -->

@endsection