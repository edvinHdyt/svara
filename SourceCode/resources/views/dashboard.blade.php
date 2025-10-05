@extends('layouts.base')

@section('app-body')
<div class="weekly-banner">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-sm-6 mt-4 banner-information">
                <p class="title-banner">
                    Weekly Tranding
                </p>
                <div class="body-banner">
                    <h3>
                        Satu Bulan
                    </h3>
                    <div class="detail-artis">
                        <span>Bernadya</span>
                        <span>120 Millions Play</span>
                    </div>
                    <button class="btn btn-listen">
                        <i class="bi bi-play-circle-fill"></i>
                        Listen Now
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 mt-4 d-flex justify-content-end">
                <img class="picture-music" src="{{asset('image/music-profile/SatuBulan.jpeg')}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="top-artis">
                    <div class="section-card-header">
                                <p class="title-card">Top Artists</p>
                                <div class="tab-btn-section">
                                     <button class="tab-btn-prev" data-id="topArtistPrev" id="topArtistPrev">
                                        <i class="bi bi-caret-right" data-id="topArtistPrev"></i>
                                    </button>
                                    <button class="tab-btn-next" data-id="topArtistNext">
                                        <i class="bi bi-caret-right" data-id="topArtistNext"></i>
                                    </button>
                                </div>
                            </div>
                    <div class="d-flex top-artists" id="topArtist">
                        @php
                            $i = 0;
                        @endphp
                        @for($i = 0; $i < 8; $i++)
                        <div class="artis-card me-5">
                            <img class="picture-artist" src="{{asset('image/music-profile/kanye-west.jpg')}}" alt="">
                            <span>{{$i}}</span>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-3">
                         <div class="musics">
                            <div class="section-card-header">
                                <p class="title-card">Music For You</p>
                                <div class="tab-btn-section">
                                     <button class="tab-btn-prev d-none" data-id="musicPrev" id="musicPrev">
                                        <i class="bi bi-caret-right" data-id="musicPrev"></i>
                                    </button>
                                    <button class="tab-btn-next" data-id="musicNext" id="musicNext">
                                        <i class="bi bi-caret-right" data-id="musicNext"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="music-tabs d-block">
                                @for($i = 0; $i < 4; $i++)
                                    <div class="music-card mb-3" data-id="musicCard">
                                        <div class="music-card-picture">
                                            <img src="{{asset('image/music-profile/aku-milikmu.jpeg')}}" alt="" data-id="musicCard">
                                            <div class="d-none" id="bgMusicPictHover" data-id="musicCard">
                                                <div class="background-picture-hover"></div>
                                                <div class="play-icon">
                                                    <i class="bi bi-play-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="music-card-detail" data-id="musicCard">
                                            <p class="music-title" data-id="musicCard">
                                                Aku Milikmu
                                            </p>
                                            <span class="singer-name" data-id="musicCard">
                                                Dewa 19
                                            </span>
                                        </div>
                                        <div class="additional-card-music-detail" data-id="musicCard">
                                            <p class="music-duration" data-id="musicCard">4:32</p>
                                            <i class="bi bi-three-dots-vertical" data-id="musicCard"></i>

                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="music-tabs d-none">
                                @for($i = 0; $i < 4; $i++)
                                    <div class="music-card mb-3" data-id="musicCard">
                                        <div class="music-card-picture">
                                            <img src="{{asset('image/music-profile/aku-milikmu.jpeg')}}" alt="" data-id="musicCard">
                                            <div class="d-none" id="bgMusicPictHover" data-id="musicCard">
                                                <div class="background-picture-hover"></div>
                                                <div class="play-icon">
                                                    <i class="bi bi-play-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="music-card-detail" data-id="musicCard">
                                            <p class="music-title" data-id="musicCard">
                                                Roman Picisan
                                            </p>
                                            <span class="singer-name" data-id="musicCard">
                                                Dewa 19
                                            </span>
                                        </div>
                                        <div class="additional-card-music-detail" data-id="musicCard">
                                            <p class="music-duration" data-id="musicCard">4:32</p>
                                            <i class="bi bi-three-dots-vertical" data-id="musicCard"></i>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="music-tabs d-none">
                                @for($i = 0; $i < 4; $i++)
                                    <div class="music-card mb-3" data-id="musicCard">
                                        <div class="music-card-picture">
                                            <img src="{{asset('image/music-profile/aku-milikmu.jpeg')}}" alt="" data-id="musicCard">
                                            <div class="d-none" id="bgMusicPictHover" data-id="musicCard">
                                                <div class="background-picture-hover"></div>
                                                <div class="play-icon">
                                                    <i class="fa-solid fa-play"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="music-card-detail" data-id="musicCard">
                                            <p class="music-title" data-id="musicCard">
                                                Risalah Hati
                                            </p>
                                            <span class="singer-name" data-id="musicCard">
                                                Dewa 19
                                            </span>
                                        </div>
                                        <div class="additional-card-music-detail" data-id="musicCard">
                                            <p class="music-duration" data-id="musicCard">4:32</p>
                                            <i class="fa-solid fa-ellipsis-vertical" data-id="musicCard"></i>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="genres me-3">
                            <p class="title-card">
                                Genres
                            </p>
                            <div class="d-flex flex-wrap justify-content-between">
                                @for($i = 0; $i < 10; $i++)
                                <div class="genre" style="background-color: pink">
                                    <p>Lofi</p>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card-room-music">
                    <div class="card-room-music-body">
                        <img src="{{asset('image/music-profile/aku-milikmu.jpeg')}}" alt="" class="played-music-picture d-none" id="pictMusicPlayedRoom">
                        <div class="no-played-music-picture">
                            <i class="bi bi-music-note-beamed"></i>
                        </div>
                        <div class="played-music-detail">
                            <p class="music-title" id="cardRoomMusicTitle">
                                No music is played
                            </p>
                            <span class="artist" id="cardRoomArtist"></span>
                            <div class="played-music-action">
                                <div class="played-music-prev">
                                    <i class="bi bi-fast-forward-fill"></i>
                                </div>
                                <div class="played-music-play" data-id="playControllMusic">
                                    <i class="bi bi-play-fill" data-id="playControllMusic" id="playControllMusic"></i>
                                </div>
                                <div class="played-music-next">
                                    <i class="bi bi-fast-forward-fill"></i>
                                </div>
                            </div>
                            <div class="music-duration">
                                <div class="music-time">
                                    <span class="start" id="musicTimeStart">0:00</span>
                                    <span class="finish" id="musicTimeFinish">0:00</span>
                                </div>
                                <input type="range" name="" id="musicProgres" class="music-progress" data-id="musicProgress" value="0">
                                <audio controls id="musicPlayer" class="d-none">
                                    <source type="audio/mpeg" id="musicSource">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="card-room-music-footer">
                        <div class="queue-section">
                            Queue
                        </div>
                        <div class="lyrics-section">
                            Lyrics
                        </div>
                        <div class="related-section">
                            Related
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<input type="hidden" id="isMusicFirstPlay" value="1">
@endsection
