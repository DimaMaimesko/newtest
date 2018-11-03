@extends('layouts.app')

@section('content')

    <h3>Album {{$album->name}}</h3>
    <div class="row">
        @if(count($albums) > 0)
            <?php
            $colcount = count($photos);
            $i = 1;
            ?>
            <div id="albums">
                <div class="row text-center">
                    @foreach($photos as $photo)
                        @if($i == $colcount)
                            <div class='col-4'>
                                <a href="">
                                    <img class="img-thumbnail" src="storage/album_covers/{{$photo->photo}}" alt="{{$photo->name}}">
                                </a>
                                <br>
                                <h4>{{$album->name}}</h4>
                                @else
                                    <div class='col-4'>
                                        <a href="">
                                            <img class="img-thumbnail" src="storage/album_covers/{{$photo->photo}}" alt="{{$photo->photo}}">
                                        </a>
                                        <br>
                                        <h4>{{$photo->photo}}</h4>
                                        @endif
                                        @if($i % 3 == 0)
                                    </div></div><div class="row text-center">
                                @else
                            </div>
                        @endif
                        <?php $i++; ?>
                    @endforeach
                </div>
            </div>
        @else
            <p>No Albums To Display</p>


    </div>



@endsection