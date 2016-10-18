@extends('layouts.master')

@section('content')

    @if($posts['articles'])
        @if($posts['status'] == 'ok')
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Select the News Category you wish to view</h3>
                </div>
                <div class="panel-body">
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <div class="col-sm-4">
                                <a class="modal-toggler btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg" data-category="{{ $category }}">{{ $category }}</a><span> </span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            @foreach($posts['articles'] as $article)
                <div>
                    <div>
                        <div>
                            <a class="ads-href" href="{{ $article['url'] }}">
                                <strong><u>{{ $article['title'] }}</u></strong>
                            </a>
                            <ul>
                                @if(strlen($article['description']) > 164)
                                    {{{ substr($article['description'], 0, 164) . "..." }}}
                                @else
                                    {{ $article['description'] }}
                                @endif
                            </ul>
                            <img src="{{ $article['urlToImage'] }}" class="img-responsive" alt="">
                            <u><i>{{ $article['author'] }}</i> {{ substr($article['publishedAt'], 0, 10) }}</u>
                        </div>
                    </div><br>
                </div>
            @endforeach
        @else
            <div></div>
        @endif
    @else
        @forelse ($posts as $key => $value)
            <div>
                <div>
                    <div>
                        <a class="ads-href" href="{{{action('PostsController@show', $value->id)}}}">
                       <strong><u>{{{ $value->title }}}</u></strong>
                       </a>
                        <ul>
                            {{{ substr($value->body, 0, 164) . "..." }}}
                        </ul>
                        <a class="ads-href" href="posts/?user={{{ $value->user->first_name }}}">
                       <u>{{{ $value->user->first_name }}}</u>
                       </a>
                    </div>
                </div><br>
            </div>
        @empty
            <h1>No results for your search. =(</h1>
        @endforelse
        {{ $posts->links() }}
    @endif

    <!-- Large modal -->
    <button type="button" class="btn btn-primary" >Large modal</button>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document" style="width:'auto'; height:'auto';max-height:'100%'">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <div id='modalRow' class='row'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
        $(document).ready(function () {
            $('.modal-toggler').on('click', function(){
                ('category');
                $.ajax({
                    url: 'https://newsapi.org/v1/sources?category=' + $(this).data('category'),
                    dataType: 'json',
                    success: function (data){

                        var sourcesArray = data.sources;
                        var sources = '';
                        $.each(sourcesArray, function( i, val){

                                sources += '<div class="col-sm-4 well"><a href="/posts/source/'+ val.id +'" ><img src="' + val.urlsToLogos.small + '" alt="' + val.name +'" class="img-responsive center-block"></a></div>'
                        });
                        $('#modalRow').html(sources + "<style>#modalRow .col-sm-4:nth-child(3n+1) {clear: left;}</style>" );
                        $('.modal-header').html("<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button><h2 class='text-center text-capitalize modal-title'>" + sourcesArray[0]['category'] + "</h2>")
                        $('.bs-example-modal-lg').modal('handleUpdate');
                    }

                })


            });


        });

    </script>
@stop