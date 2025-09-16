$(document).ready(function() {
    document.addEventListener('mouseover', () => {
        let strId = event.target.dataset["id"];

        switch (strId) {
            case "musicCard":
                musicPlayIconManipulationAdd(event);
                break;
            default:
                break;
        }
    });

    // document.addEventListener('mousemove', () => {
    //     let strId = event.target.dataset["id"];

    //     switch (strId) {
    //         case "musicProgress":
    //             musicProgressManipulation();
    //         default:
    //             break;
    //     }
    // });

    document.addEventListener('mouseout', () => {
        let strId = event.target.dataset["id"];

        switch (strId) {
            case "musicCard":
                musicPlayIconManipulationRemove(event);
                break;

            default:
                break;
        }
    });

    document.addEventListener('click', () => {
        let strId = event.target.dataset['id'];

        switch (strId) {
            case "musicNext":
                manipulationTabMusic("next");
                break;
            case "musicPrev":
                manipulationTabMusic("prev");
                break;
            case "playControllMusic":
                playPauseMusic(event);
                break;
            case "topArtistNext":
                manipulationTabTopArtist("next");
                break;
            case "topArtistPrev":
                manipulationTabTopArtist("prev");
                break;

            default:
                break;
        }
    });

    let progress = document.getElementById('musicProgres');
    progress.onchange = (e) => {
        let song = document.getElementById("musicPlayer");
        let ctrlMusic = document.getElementById('playControllMusic');
        song.play();
        song.currentTime = progress.value;
        ctrlMusic.classList.remove('bi-play-fill');
        ctrlMusic.classList.add('bi-pause-fill');
    }

    const initial = () => {
        let song = document.getElementById("musicPlayer");
        let progress = document.getElementById('musicProgres');
        let finishDuration = document.getElementById('musicTimeFinish');
        song.onloadedmetadata = () => {
            progress.max = song.duration;
            progress.value = song.currentTime;
            var min =Math.floor(Math.floor(song.duration) / 60);
            var sec = Math.floor(song.duration) % 60;
            finishDuration.innerHTML = min + ":" + sec;
        }
    }

    initial();
    var duration;
    const musicDurationProggress = () => {
        let isFirstPlay = document.getElementById('isMusicFirstPlay').value;
        let song = document.getElementById('musicPlayer');
        let ctrlMusic = document.getElementById('playControllMusic');
        console.log(isFirstPlay)

        if (isFirstPlay == true){
            duration = "0:00";

            let durationInterval = setInterval(() => {
                let audioCurrentTime = song.currentTime;
                var min =  Math.floor(audioCurrentTime / 60);
                var sec =  Math.floor(audioCurrentTime - min * 60);

                if (sec < 10) {
                    sec = "0" + sec;
                }

                duration = min + ":" + sec;
                musicTimeStart.innerHTML = duration;
            }, 500);

            let finishDuration = document.getElementById('musicTimeFinish');

            let finisDurationMusic = setInterval(() => {
                if (duration == finishDuration.textContent){
                    clearInterval(durationInterval);
                    ctrlMusic.classList.add('bi-play-fill');
                    ctrlMusic.classList.remove('bi-pause-fill');
                    document.getElementById('isMusicFirstPlay').value = 1;
                    musicTimeStart.innerHTML = "0:00";
                    clearInterval(finisDurationMusic);
                }
            }, 500);
        }
    }

    const musicProgressManipulation = () => {
        let slider = document.getElementById('musicProgres');
        let val = slider.value;
        let color = "linear-gradient(to right, #3572EF " +333+"px, #474747 0px)";

        slider.style.background = color;

    }

   const manipulationTabMusic = (action) => {
        let elms = document.getElementsByClassName('music-tabs');
        let currentIndex = 0;
        let manipulationIndex = 0;
        elms  = Array.from(elms);

        elms.forEach((elm, i) => {
            if (elm.classList.contains('d-block')){
                currentIndex = i;
            }
        });

        if (action == "next"){
            if (elms[currentIndex + 1] != undefined){
                manipulationIndex = currentIndex + 1;
            } else {
                manipulationIndex = 0;
            }
        } else {
             if (elms[currentIndex - 1] != undefined){
                manipulationIndex = currentIndex - 1;
            } else {
                manipulationIndex = 0;
            }
        }


        elms[currentIndex].classList.remove('d-block');
        elms[currentIndex].classList.add('d-none');
        elms[manipulationIndex].classList.remove('d-none');
        elms[manipulationIndex].classList.add('d-block');

        let btnPrev = document.getElementById('musicPrev');
        if (manipulationIndex != 0){
            btnPrev.classList.remove('d-none');
            btnPrev.classList.add('d-block');
        }else {
            btnPrev.classList.remove('d-block');
            btnPrev.classList.add('d-none');
        }
   }

   const manipulationTabTopArtist = (action) => {
        if(action == "next"){
            let pos = $("#topArtist").scrollLeft() + 200;
            $("#topArtist").animate({
                scrollLeft: pos
            }, 500);
        } else {
            let pos = $("#topArtist").scrollLeft() - 200;
            $("#topArtist").animate({
                scrollLeft: pos
            }, 500);
        }
   }

    const musicPlayIconManipulationAdd = (e) => {
        let elm = searchElm(e);
        if (elm.classList.contains('d-none')){
            elm.classList.remove('d-none');
            elm.classList.add('d-block');
        }
    }

    const musicPlayIconManipulationRemove = (e) => {
        let elm = searchElm(e);

        if (elm.classList.contains('d-block')){
            elm.classList.remove('d-block');
            elm.classList.add('d-none');
        }
    }

    var isPause = false;
    const playPauseMusic = (e) => {
        let song = document.getElementById("musicPlayer");
        let ctrlMusic = document.getElementById('playControllMusic');
        let progress = document.getElementById('musicProgres');

        if (ctrlMusic.classList.contains("bi-play-fill")){
            song.play();
            ctrlMusic.classList.remove('bi-play-fill');
            ctrlMusic.classList.add('bi-pause-fill');

            if (song.play()){
                setInterval(() => {
                    progress.value = Math.round(song.currentTime);
                    // musicProgressManipulation();
                }, 500);
                musicDurationProggress();
                document.getElementById('isMusicFirstPlay').value = false;
            }

        }else {
            song.pause();
            ctrlMusic.classList.remove('bi-pause-fill');
            ctrlMusic.classList.add('bi-play-fill');
        }
    }

    const searchElm = (e) => {
        let elm = e.target;


        if (!elm.classList.contains('music-card')){
            var isLoop = true;
            while (isLoop) {
                elm = elm.parentElement;
                if (elm.classList.contains('music-card')){
                    isLoop = false;
                }
            }
        }

        let elm2 = elm.childNodes[1];
        let elm3 = elm2.childNodes[3];

        return elm3;
    }


    // const searchSVG = () => {
    //     const elms = document.getElementsByTagName('svg');
    //     // debugger
    //     Array.from(elms).forEach(elm => {
    //         if (elm.dataset['id'] != undefined){
    //             let path = elm.firstElementChild;
    //             if (path != undefined){
    //                 path.setAttribute('data-id', elm.dataset["id"]);
    //             }
    //         }
    //     })
    // }

    // searchSVG();

})
