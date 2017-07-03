@extends('layouts.app')

@section('content')

<div class="main_col">
    <div class="row no-margin top_area">
        <div class="layoutHeader">
            <div class="title">
                <div id="workoutsTitle">
                    WORKOUTS<span class="result_count">{{ $total_count }} RESULTS</span>
                </div>
            </div>            
        </div>
    </div>  

    <div class="x_panel workout_panel" style="margin-bottom: 70px;">
        <div class="pager" style="margin: 0px">                
            @foreach($workouts as $workout)
            <div class="col-md-3 col-sm-6 video-card">
                <div class="card-inner">
                    <div class="video-thumbnail">
                        <a href="{{ route('workout', ['id' => $workout['workout_id']]) }}">
                            <img src="{{ asset("images/dashboard/" . $workout['thumbnail']) }}">
                        </a>
                        <a class="player_play_btn" href="#"></a>
                        <span class="label_new">new</span>
                        <span class="player_duration">{{ $workout['minutes'] }} min</span>
                    </div>
                    
                    <div class="video_meta clearfix">
                        <div class="title_desc">
                            <a href="{{ route('workout', ['id' => $workout['workout_id']]) }}">
                                <h6 class="title">{{ $workout['name'] }}</h6>
                            </a>
                            <p class="description">
                                {{ $workout['description'] }}
                            </p>
                        </div>
                        <div class="video_poses clearfix">
                            <div class="contain">
                                @foreach($workout['relations'] as $relation)
                                    @if($relation['has_tutorial']) 
                                    <div class="pose has-tutorial">
                                        <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                                            {{ $relation['relation_name'] }}
                                            <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                        </a>
                                    </div>
                                    @else
                                    <div class="pose">
                                        <a href="{{ route('workout', ['id' => $relation['relation_id']]) }}">
                                            {{ $relation['relation_name'] }}
                                            <img src="{{ asset('images/common/icon-video.svg') }}" style="max-width: 12px">
                                        </a>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>
    </div>    
    
    <div class="pagination-container">
        <div class="subcontainer">
            {{ $links }} 
        </div>
    </div>
</div>


@extends('layouts.right')
@section('login_content')

@endsection

@endsection
