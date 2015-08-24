@extends('layouts.master')

@section('content')

    @foreach ($posts as $key => $value)
        <div>
            <div>
                <div>
                    <a class="ads-href" href="{{{action('PostsController@show', $value->id)}}}">
                   <strong><u>{{{ $value->title }}}</u></strong>
                   </a>
                    <ul>
                        <li>{{{ $value->body }}}</li>
                    </ul>
                </div>
            </div><br>
        </div>
    @endforeach

    {{ $posts->links() }}

@stop