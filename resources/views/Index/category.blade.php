@extends('app')
@section('content')
    <div id="left">
        <h1 class="title">{{ $genres[$category] }}</h1>
        <h4 class="desc margin-less"></h4>
        <div class="l-category box">
            <ul class="content">
                @foreach($novels as $novel)
                <li><a href="/author/{{ $novel->author_id }}" title="{{ $novel->author->name }}" class="cate-li-right">{{ $novel->author->name }}</a>
                    <a class="c-title" href="/book/{{ $novel->id }}" title="Destroyed">{{ $novel->name }}</a>
                </li>
                @endforeach
            </ul>
            <div class="pagination">
                {!! $novels->render() !!}
                {{--<ul class="pg-ul">--}}
                    {{--<li>Page »</li>--}}
                    {{--<li><a class="active">1</a></li>--}}
                    {{--<li><a href="http://ebook12.com/280406-adventure.htm?start=30">2</a></li>--}}
                    {{--<li><a href="http://ebook12.com/280406-adventure.htm?start=30">&gt;</a></li>--}}
                {{--</ul>--}}
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!--/ left -->
    <!-- right -->
    @include('common.right')
    <div class="clr"></div>
@stop