

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const songName = $('.song--name.play')
const songActor = $('.song--actor.play')
const songImage = $('.play-img')
const audio = $('#audio')
const playBtn = $('.btn-control.btn-toggle')
const player = $('.btn-toggle')
const currentTime = $('.tracktime')
const durationTime = $('.durationtime')
const progress = $('.progress.play')
const progressVolume = $('.volume__range.progress')
const prevBtn = $('.btn-control.prev')
const nextBtn = $('.btn-control.next')
const randomBtn = $('.btn-control.random')
const repeatBtn = $('.btn-control.repeat')
const left = $('.container__music--left')
const volumee = $('.volume__range')
const playAll = $('.btn--play-all')
const liOption = $$('.li-option')
const ulNav = $$('.nav-ul li')
const dsbaihat = $('.dsbaihat')
const audioo = $('.audio')
/*xu ly chuyen anh o container__header--right-align*/
var rightImage = $('.right-img')
var indexImage = 0
var countLove = 0
function changeImage() {

    var arrayImage = [
        "./image/pic1.jpg",
        "./image/pic2.jpg",
        "./image/pic3.jpg",
        "./image/pic4.jpg",
    ];

    rightImage.src = arrayImage[indexImage];
    indexImage++;
    if(indexImage == arrayImage.length -1 ) {
        indexImage = 0;
    }
    
}

setInterval(changeImage, 5000)

/*xu ly playlist*/

const containerLeft = $('.container__music--left')
const containerPlaylist = $('.container__music--playlist')
const playlist = {
    currentIndex: 0,
    isPlaying: false,
    isRandom: false,
    isRepeat: false,
    songs:    [
        {
            name: 'Muộn rồi mà sao còn',
            singer: 'Sơn Tùng MT-P',
            path: './music/song1.mp3',
            image: './image/pic1.jpg'
        },
        {
            name: 'There"s no one at all',
            singer: 'Sơn Tùng MT-P',
            path: './music/song7.mp3',
            image: './image/pic1.jpg'
        },
        {
            name: 'Chạy ngay đi',
            singer: 'Sơn Tùng MT-P',
            path: './music/song2.mp3',
            image: './image/pic2.jpg'
        },
        {
            name: 'Ngày đầu tiên',
            singer: 'Đức Phúc',
            path: './music/song3.mp3',
            image: './image/pic3.jpg'
        },
        {
            name: 'Hôm nay tui buồn',
            singer: 'Cường SadBoiz',
            path: './music/song4.mp3',
            image: './image/pic4.jpg'
        },
        {
            name: 'There"s no one at all',
            singer: 'Sơn Tùng MT-P',
            path: './music/song7.mp3',
            image: './image/pic1.jpg'
        },
        {
            name: 'Chạy về với anh',
            singer: 'Erik',
            path: './music/song5.mp3',
            image: './image/pic5.jpg'
        },
        {
            name: 'Gặp nhưng không ở lại',
            singer: 'Hiền Hồ',
            path: './music/song6.mp3',
            image: './image/pic6.jpg'
        },
        {
            name: 'Muộn rồi mà sao còn',
            singer: 'Sơn Tùng MT-P',
            path: './music/song1.mp3',
            image: './image/pic1.jpg'
        },
        {
            name: 'There"s no one at all',
            singer: 'Sơn Tùng MT-P',
            path: './music/song7.mp3',
            image: './image/pic1.jpg'
        },
        {
            name: 'Chạy ngay đi',
            singer: 'Sơn Tùng MT-P',
            path: './music/song2.mp3',
            image: './image/pic2.jpg'
        },
        {
            name: 'Ngày đầu tiên',
            singer: 'Đức Phúc',
            path: './music/song3.mp3',
            image: './image/pic3.jpg'
        },
        {
            name: 'Hôm nay tôi buồn',
            singer: 'Bảo Anh',
            path: './music/song4.mp3',
            image: './image/pic4.jpg'
        },
        {
            name: 'Chạy về với anh',
            singer: 'Erik',
            path: './music/song5.mp3',
            image: './image/pic5.jpg'
        },
    ],
    render: function () {
        const htmls = this.songs.map((song, index) => {
            return `
            <div class="playlist-song ${index === this.currentIndex ? 'active' : ''}" data-index="${index}">

            <div class="song-info">
                <div class="img">
                    <img src="${song.image}" alt="">
                </div> 
            
                <div class="song">
                    <span class="song--name">${song.name}</span>
                    <br>
                    <span class="song--actor">${song.singer}</span>
                </div>
            </div>
            
            <span class="song-time">
               
            </span>

            <div class="song-icon">
                <div class="song-favor">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="song-option">
                  <i class="fa-solid fa-ellipsis"></i>
                </div>
            </div>
        </div>
            `
        })
        containerLeft.innerHTML = htmls.join('')
        dsbaihat.innerHTML = htmls.join('')
    },

    handleEvents: function () {
        //cho cai CD quay
        const songImageAnimation = songImage.animate([{
            transform: 'rotate(360deg)'
        }],{
            duration: 10000,
            iterations: Infinity
        })
        songImageAnimation.pause()

        //Xu ly nut play/pause
        const _this = this
        playBtn.onclick = function () {
            if(_this.isPlaying) {
                _this.isPlaying = false
                audio.pause()
                player.classList.remove('playing')
                songImageAnimation.pause()
            } else {
                _this.isPlaying = true
                audio.play()
                player.classList.add('playing')
                songImageAnimation.play()
            }
        }

        //Xu ly progress
        audio.ontimeupdate = function() {
            setTimeout(function() {
                if(audio.duration) {
                    const progressPercent = Math.floor(audio.currentTime / audio.duration * 100)
                    progress.value = progressPercent
                }
            },2000)

            var minCurrent = (audio.currentTime / 60).toFixed(0)
            var secCurrent = (audio.currentTime % 60).toFixed(0)
            var minDuration = (audio.duration / 60).toFixed(0)
            var secDuration = (audio.duration % 60).toFixed(0)
            var secC = ''
            var minC =''
            var secD = ''
            var minD = ''
            if(secCurrent<10) {
                secC = `0${secCurrent}`
            } else {
                secC = `${secCurrent}`
            }
            if(minC<10) {
                minC = `0${minCurrent}`
            } else {
                minC = `${minCurrent}`
            }
            currentTime.innerText = `${minC}:${secC}`

            if(secDuration<10) {
                secD = `0${secDuration}`
            } else {
                secD = `${secDuration}`
            }

            if(minD<10) {
                minD = `0${minDuration}`
            } else {
                minD = `${minDuration}`
            }
          

            durationTime.innerText = `${minD}:${secD}`
           
           
        }


        //xu ly nut trong progress
        progress.onchange = function(e) {
            const seekTime = e.target.value * audio.duration / 100
            audio.currentTime = seekTime 
        }

        volumee.onchange = function(e) {
            const seekVol = e.target.value
            audio.volume = seekVol / 100
        }

        

        prevBtn.onclick = function() {
            if(_this.isRandom) {
                _this.playRandomSong()
            } else {
                _this.prevSong()
            }
            player.classList.add('playing')
            audio.play()
            _this.render()
            _this.scrollToActiveSong()
        }

        nextBtn.onclick = function() {
            if(_this.isRandom) {
                _this.playRandomSong()
            } else {
                _this.nextSong()
            }
            player.classList.add('playing')
            audio.play()
            _this.render()
            _this.scrollToActiveSong()
        }

        randomBtn.onclick = function() {
            _this.isRandom = !_this.isRandom
            randomBtn.classList.toggle('active', _this.isRandom)
        }

        repeatBtn.onclick = function() {
            _this.isRepeat = !_this.isRepeat
            repeatBtn.classList.toggle('active', _this.isRepeat)
        }
 
        audio.onended = function() {
            if(_this.isRepeat) {
                audio.play()
            } else {
                nextBtn.click()
            }
        }  

        left.onclick = function(e) {
            const songNode = e.target.closest('.playlist-song:not(.active)')
            if(songNode || e.target.closest('.song-favor') || e.target.closest('.song-option'))
                if(songNode) {
                    _this.currentIndex = Number(songNode.getAttribute('data-index'))             
                    _this.loadCurrentSong()
                    _this.render()
                    audio.play()
                    
                } else if( e.target.closest('.song-favor')) {                 
                    e.target.closest('.song-favor').onclick = function() {
                        e.target.closest('.song-favor').classList.toggle('love')
                    }
                   
                } else {
                   
                }
                   
        }

        dsbaihat.onclick = function(e) {
            const songNode = e.target.closest('.playlist-song:not(.active)')
            if(songNode || e.target.closest('.song-favor') || e.target.closest('.song-option'))
                if(songNode) {
                    _this.currentIndex = Number(songNode.getAttribute('data-index'))             
                    _this.loadCurrentSong()
                    _this.render()
                    audio.play()
                    
                } else if( e.target.closest('.song-favor')) {                 
                    e.target.closest('.song-favor').onclick = function() {
                        e.target.closest('.song-favor').classList.toggle('love')
                    }
                   
                } else {
                   
                }
                   
        }

       
        
        playAll.onclick = function() {
            _this.currentIndex = 0          
            _this.loadCurrentSong()
            _this.render()
            audio.play()
        }
    },

    //Lay song dau tien
    defineProperties: function () {
        Object.defineProperty(this, 'currentSong', {
            get: function () {
                return this.songs[this.currentIndex]
            }
        })
    }, 
    scrollToActiveSong:function () {
        setTimeout(function () {
            $('.playlist-song.active').scrollIntoView({
                behavior: 'smooth',

            })

        },500)
    },
    
    //render du lieu
    loadCurrentSong: function() {      
        songName.textContent = this.currentSong.name
        songActor.textContent = this.currentSong.singer
        $('.img.play img').src=this.currentSong.image
        audio.src = this.currentSong.path
    },
    
    //xu ly next, previous
    nextSong: function () {
        this.currentIndex++;
        if(this.currentIndex >= this.songs.length - 1) {
            this.currentIndex = 0
        }
        this.loadCurrentSong()
    },

    prevSong: function () {
        this.currentIndex--;
        if(this.currentIndex < 0) {
            this.currentIndex = this.songs.length - 1
        }
        this.loadCurrentSong()
    },

    playRandomSong: function() {
        let newIndex
        do {
            newIndex = Math.floor(Math.random() * this.songs.length)
        } while (newIndex == this.currentIndex)

        this.currentIndex = newIndex
        this.loadCurrentSong()
    },

    playRepeatSong: function () {
        if(_this.isRepeat) {
            audio.play()
        } else {
            nextBtn.click()
        }
    },

    start: function() {
        //dinh nghia cac thuoc tinh cho Object
        this.defineProperties()

        //xu ly code
        this.handleEvents()

        //tai thong tin bai hat dau tien vao UI vao ung dung
        this.loadCurrentSong()

        //render du lieu
        this.render()
    }
}

playlist.start()


$$('.fa-solid.fa-heart').forEach((icon, index) => {
    icon.addEventListener('click',() => {
        if(icon.className == 'fa-solid fa-heart love'){
            countLove = 0
        } else {
            countLove += 1
        }
        icon.classList.toggle('love')
    })})

$$('.flw--btn').forEach((status, index) => {
    status.addEventListener('click',() => {
        if(status.textContent == 'Followed'){
            status.textContent = 'Follow'
            status.classList.remove('flw--btn--active')
        } else {
            status.textContent = 'Followed'    
            status.classList.add('flw--btn--active')
        }
   
    })
})

$$('.btn-volume')[2].onclick = function() {
    $$('.btn-volume')[1].classList.remove('none')
    $$('.btn-volume')[2].classList.add('none')
    audio.volume = 0
    volumee.value = 0   
}

$$('.btn-volume')[1].onclick = function() {
    $$('.btn-volume')[2].classList.remove('none')
    $$('.btn-volume')[1].classList.add('none')
    audio.volume = 1
    volumee.value = 100    
}

const liArray = [$('.cn'), $('.srcollbar.kp'),  $('.srcollbar.radio'),  $('.srcollbar.theloai'), $('.srcollbar.musicvideo')]

function activeLi(j) {
    liOption[j].onclick = function() {
        for(let i = 0; i < liOption.length; i++) {              
            liOption[i].classList.remove('activeLi')
            liOption[j].classList.add('activeLi')
            liArray[i].classList.add('none')
            liArray[j].classList.remove('none')
        }
    }
}

activeLi(0)
activeLi(1)
activeLi(2)
activeLi(3)
activeLi(4)

const navArray = [$('.container'), $('.baihat'), $('.playlistt'), $('.albumm'), $('.mvv'), $('.artistt'), $('.upload')]

function activeNav(j) {
    ulNav[j].onclick = function() {
        for(let i = 0; i < ulNav.length; i++) {              
            ulNav[i].classList.remove('active')
            ulNav[j].classList.add('active')
            navArray[i].classList.add('none')
            navArray[j].classList.remove('none')
        }
    }
}

activeNav(0)
activeNav(1)
activeNav(2)
activeNav(3)
activeNav(4)
activeNav(5)
activeNav(6)

//    function active(liOption, liArray) {
//        for(let i = 0; i < liOption.length; i++) {
//            if(liOption[i].onclick) {
//                console.log(i)
//            }
//        }
//    }

//    active(liOption, liArray)

    // liOption[0].onclick = () => {
    //     $('.cn').classList.remove('none')
    //     $('.srcollbar.kp').classList.add('none')
    //     $('.srcollbar.radio').classList.add('none')
    //     liOption[0].classList.add('activeLi')
    //     liOption[1].classList.remove('activeLi')
    //     liOption[2].classList.remove('activeLi')
    //     liOption[3].classList.remove('activeLi')
    //     liOption[4].classList.remove('activeLi')

    // }

// liOption[1].onclick = () => {
//     $('.cn').classList.add('none')
//     $('.srcollbar.kp').classList.remove('none')
//     $('.srcollbar.radio').classList.add('none')
//     liOption[0].classList.remove('activeLi')
//     liOption[1].classList.add('activeLi')
//     liOption[2].classList.remove('activeLi')
//     liOption[3].classList.remove('activeLi')
//     liOption[4].classList.remove('activeLi')
// }



// liOption[2].onclick = () => {
//     $('.cn').classList.add('none')
//     $('.srcollbar.kp').classList.add('none')
//     $('.srcollbar.radio').classList.remove('none')
//     liOption[0].classList.remove('activeLi')
//     liOption[1].classList.remove('activeLi')
//     liOption[2].classList.add('activeLi')
//     liOption[3].classList.remove('activeLi')
//     liOption[4].classList.remove('activeLi')
// }

// liOption[3].onclick = () => {

//     liOption[0].classList.remove('activeLi')
//     liOption[1].classList.remove('activeLi')
//     liOption[2].classList.remove('activeLi')
//     liOption[3].classList.add('activeLi')
//     liOption[4].classList.remove('activeLi')
// }

// liOption[4].onclick = () => {

//     liOption[0].classList.remove('activeLi')
//     liOption[1].classList.remove('activeLi')
//     liOption[2].classList.remove('activeLi')
//     liOption[3].classList.remove('activeLi')
//     liOption[4].classList.add('activeLi')
// }


// ulNav[0].onclick = () => {
//     ulNav[0].classList.add('active')
//     ulNav[1].classList.remove('active')
//     ulNav[2].classList.remove('active')
//     ulNav[3].classList.remove('active')
//     ulNav[4].classList.remove('active')
//     ulNav[5].classList.remove('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.remove('none')
//     $('.baihat').classList.add('none')
//     $('.playlistt').classList.add('none')
//     $('.albumm').classList.add('none')
//     $('.mvv').classList.add('none')
//     $('.artistt').classList.add('none')
    
// }

// ulNav[1].onclick = () => {
//     ulNav[0].classList.remove('active')
//     ulNav[1].classList.add('active')
//     ulNav[2].classList.remove('active')
//     ulNav[3].classList.remove('active')
//     ulNav[4].classList.remove('active')
//     ulNav[5].classList.remove('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.add('none')
//     $('.baihat').classList.remove('none')
//     $('.playlistt').classList.add('none')
//     $('.albumm').classList.add('none')
//     $('.mvv').classList.add('none')
//     $('.artistt').classList.add('none')
    
// }

// ulNav[2].onclick = () => {
//     ulNav[0].classList.remove('active')
//     ulNav[1].classList.remove('active')
//     ulNav[2].classList.add('active')
//     ulNav[3].classList.remove('active')
//     ulNav[4].classList.remove('active')
//     ulNav[5].classList.remove('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.add('none')
//     $('.baihat').classList.add('none')
//     $('.playlistt').classList.remove('none') 
//     $('.albumm').classList.add('none')
//     $('.mvv').classList.add('none')
//     $('.artistt').classList.add('none')
// }

// ulNav[3].onclick = () => {
//     ulNav[0].classList.remove('active')
//     ulNav[1].classList.remove('active')
//     ulNav[2].classList.remove('active')
//     ulNav[3].classList.add('active')
//     ulNav[4].classList.remove('active')
//     ulNav[5].classList.remove('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.add('none')
//     $('.baihat').classList.add('none')
//     $('.playlistt').classList.add('none')
//     $('.albumm').classList.remove('none') 
//     $('.mvv').classList.add('none')
//     $('.artistt').classList.add('none')
// }

// ulNav[4].onclick = () => {
//     ulNav[0].classList.remove('active')
//     ulNav[1].classList.remove('active')
//     ulNav[2].classList.remove('active')
//     ulNav[3].classList.remove('active')
//     ulNav[4].classList.add('active')
//     ulNav[5].classList.remove('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.add('none')
//     $('.baihat').classList.add('none')
//     $('.playlistt').classList.add('none')
//     $('.albumm').classList.add('none')
//     $('.mvv').classList.remove('none')
//     $('.artistt').classList.add('none')
// }

// ulNav[5].onclick = () => {
//     ulNav[0].classList.remove('active')
//     ulNav[1].classList.remove('active')
//     ulNav[2].classList.remove('active')
//     ulNav[3].classList.remove('active')
//     ulNav[4].classList.remove('active')
//     ulNav[5].classList.add('active')
//     ulNav[6].classList.remove('active')
//     $('.container').classList.add('none')
//     $('.baihat').classList.add('none')
//     $('.playlistt').classList.add('none')
//     $('.albumm').classList.add('none')
//     $('.mvv').classList.add('none')
//     $('.artistt').classList.remove('none')
// }




