@extends('layouts.base')

@section('app-body')
    <div class="banner-profile">
        <div class="container">
            <div class="profile-detail row row-cols-3">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="profile-none-pict">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <img src="" alt="" class="profile-picture d-none">
                </div>
                <div class="col user-desc-detail">
                    <h2 class="user-name">
                        John Doe
                    </h2>
                    <div class="user-detail">
                        <span>Followers : 1</span>
                        <span>Following : 2</span>
                    </div>
                    <button class="btn btn-primary btn-edit-profile">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-7">
                <div class="card-music-profile card-add">
                    <div class="header-card">
                        <p class="title-card">Your Music</p>
                        <div class="action-header">
                            <button class="btn btn-primary">
                                Add Music
                            </button>
                            <div class="tab-btn-section d-none">
                                <button class="tab-btn-prev d-none" data-id="musicPrev" id="musicPrev">
                                    <i class="bi bi-caret-right" data-id="musicPrev"></i>
                                </button>
                                <button class="tab-btn-next" data-id="musicNext" id="musicNext">
                                    <i class="bi bi-caret-right" data-id="musicNext"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="music-tabs d-block">
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
                            <div class="music-card-detail-profile" data-id="musicCard">
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
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card-music-profile card-album">
                    <p class="title-card">Your Album</p>
                </div>
                 <div class="card-music-profile card-playlist">
                    <p class="title-card">Your Playlist</p>
                </div>
            </div>
        </div>
    </div>
@endsection
