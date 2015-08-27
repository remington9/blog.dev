@extends('layouts.master')

@section('content')

    @forelse ($posts as $key => $value)
        <div>
            <div>
                <div>
                    <a class="ads-href" href="{{{action('PostsController@show', $value->id)}}}">
                   <strong><u>{{{ $value->title }}}</u></strong>
                   </a>
                    <ul>
                        @if(strlen($value->body) > 60)
                        {{{ substr($value->body, 0, 164) . "..." }}}
                        @endif
                    </ul>
                </div>
            </div><br>
        </div>
    @empty
        <h1>No results for your search. =(</h1>
    @endforelse

    {{ $posts->links() }}

@stop