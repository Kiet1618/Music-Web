<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');
        include 'header.php' 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./base.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="Radio.css">
    <link rel="stylesheet" href="CaNhan.css">
    <link rel="stylesheet" href="KhamPha.css">
    <link rel="stylesheet" href="./resonsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./upload.css">
</head>
<body>

    <div class="main">
        <!--Phần left của web-->
        <div class="main__slide">
            <div class="slide--bar">
                <img src="./image/logo.png" alt="">
                <ul>
                    <li class="li-option activeLi">
                        <i class="fa-solid fa-blog"></i><span>Cá Nhân</span>
                    </li>
                    <li class="li-option">
                        <i class="fa-duotone fa-radio"></i><span>Khám Phá</span>
                    </li>
                    <li class="li-option">
                        <i class="fa-solid fa-star"></i><span>Radio</span>
                    </li>
                    <li class="li-option">
                        <i class="fa-solid fa-headphones-simple"></i><span>Thể Loại</span>
                    </li>
                    <li class="li-option">
                        <i class="fa-solid fa-film"></i><span>MV</span>
                    </li>
                </ul>
                <div class="login">
                    <p>Nghe nhạc không quảng cáo cùng kho nhạc VIP</p>
                    <button class="login">NÂNG CẤP VIP</button>
                </div>
            </div>       
        </div>
        
        <!--header của web-->
        <div class="main__header">
            <!--next prev-->
            <div class="header__option">
                <div class="option--search">
                    <div class="right--block">
                        <div class="control--icon left-block-option enable--btn">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="control--icon left-block-option">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>                       
                    </div>
                    <!--Thanh tim kiem-->
                    <div class="midle--block">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search"  placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
                    </div>
                    <!--3 icons-->
                    <div class="left--block">
                        <div class="left-block-option">
                            <label for="left-block-option">
                                <i class="fa-regular fa-upload"></i>
                            </label>
                        </div>
                        <div class="left-block-option">
                            <i class="fa-regular fa-gear"></i>
                        </div>
                        <div class="left-block-user left-block-option ">
                            <div class="avatar--block">
                                <img class="avatar" onclick="location.href='ajax.php?action=logout'" src="./uploads/icon_logout.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Code cái phần cần code ở dưới dòng này dùm. Cám ơn :))-->     
            <div class="cn">
                <div>
                    <div class="app__user--info">
                        <div class="app__user--action">
                            <button class="app__user--buy">Nhập code VIP</button>
                        </div>
                        <div>
                        <img src="./uploads/user_iconpng.png" alt="" class="app__user--img">
                        <span class="app__user--name" ><b><?php echo ucwords($_SESSION['login_firstname']) ?></b></span>
                        </div>
                    </div>

                    <ul class="nav-ul">
                        <li class="active">Tổng quan</li>
                        <li>Bài hát</li>
                        <li>Playlist</li>
                        <li>Album</li>
                        <li>MV</li>
                        <li>Nghệ sĩ</li>
                        <li>Tải lên</li>
                    </ul>

                    <div class="container">              
                        <div class="container__header">
                            <a href="#" class="list__genre--header music" ><h2>Bài Hát</h2></a>
                            <button class="btn--play-all"><i class="fa-solid fa-play"></i>Phát tất cả</button>
                        </div>

                        <div class="container__music">
                            <!--RIGHT-->
                            <div class="container__music--right">
                                <img class="right-img" src="./image/pic1.jpg" alt="">
                            </div>
                            <!--LEFT-->
                            <div class="container__music--left" >
                        </div>          
                    </div>

                    <!-- PLAYLIST -->
                    <div class="list__genre">
                        <a href="#" class="list__genre--header playlist">PLAYLIST</a>
                        <div class="list__genre--bar">
                            <div class="create--playlis list__genre--music">
                                <div class="create--playlis--block">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Tạo playlist mới</span>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist1.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>V-Pop: The A-List</h3>
                                <p>
                                    Zing MP3
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist2.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Rồi tới luôn</h3>
                                <p>
                                    <a href="">Nal</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist3.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Nhạc Quốc Tế</h3>
                                <p>
                                    <a href="">Zing MP3</a>  
                                
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist4.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những bản hit của RAP VIỆT</h3>
                                <p>
                                    <a href="">Vie Chanel</a>  
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ALBUM -->
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">ALBUM</a>
                        <div class="list__genre--bar">
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album1.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                                <h3>Mở Đầu Hoàn Hảo</h3>
                                <p>
                                    <a href="">AMEE</a>,  
                                    <a href="">ERIK</a>, 
                                    <a href="">Hoàng Duyên</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album2.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>V-Pop: The A-List</h3>
                                <p>
                                    <a href="">Bích Phương</a>,  
                                    <a href="">ERIK</a>, 
                                    <a href="">Hoàng Thùy Linh</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album3.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                                <p>
                                    <a href="">Quân A.P</a>,  
                                    <a href="">Changg</a>, 
                                    <a href="">Hoàng Duyên</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album4.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Nhạc Trẻ Gây Nghiện</h3>
                                <p>
                                    <a href="">AMEE</a>,  
                                    <a href="">Quân A.P</a>,
                                    <a href="">ERIK</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album5.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>HIT-MAKER: Nổi Bật</h3>
                                <p>
                                    <a href="">LyLy</a>,  
                                    <a href="">Rin9</a>, 
                                    <a href="">Anh Tú</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- MV -->
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">MV</a>
                        <div class="list__genre--bar">
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv1.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">11:54</div>

                                    
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist1.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Một Bước Yêu Vạn Dặm Đau</h3>
                                        <p>
                                            <a href="">Mr. Siro</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv2.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">03:54</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist2.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Simple Love</h3>
                                        <p>
                                            <a href="">Obito</a>,
                                            <a href="">Seachains</a>,
                                            <a href="">Davis</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv3.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:33</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist3.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Lời Yêu Ngây Dại</h3>
                                        <p>
                                            <a href="">Kha</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <!-- NGHE SI -->
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">NGHỆ SĨ</a>
                        <div class="list__genre--bar">
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist1.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                                
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist2.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist3.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist4.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist5.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="baihat none">
                    <div class="container__header">
                        <h2>Bài Hát</h2>
                        <button class="btn--play-all"><i class="fa-solid fa-play"></i>Phát tất cả</button>
                    </div>
                    <div class="dsbaihat"></div>
                   
                    </div>
                </div>

                <div class="playlistt none">
                    <div class="list__genre">
                        <a href="#" class="list__genre--header playlist">PLAYLIST</a>
                        <div class="list__genre--bar flex--wrap">
                            <div class="create--playlis list__genre--music">
                                <div class="create--playlis--block">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Tạo playlist mới</span>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist1.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>V-Pop: The A-List</h3>
                                <p>
                                    <a href="">Zing MP3</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist2.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Rồi tới luôn</h3>
                                <p>
                                    <a href="">Nal</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist3.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Nhạc Quốc Tế</h3>
                                <p>
                                    <a href="">Zing MP3</a>  
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist4.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những bản hit của RAP VIỆT</h3>
                                <p>
                                    <a href="">Vie Chanel</a>  
                                </p>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist5.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Top 100 Bài Hát Nhạc Trẻ Hay Nhất</h3>
                                <p>
                                    <a href="">Zing MP3</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist6.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những bản nhạc Dance hay nhất</h3>
                                <p>
                                    <a href="">EDM</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist7.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Em hát ai nghe</h3>
                                <p>
                                    <a href="">Orange</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist8.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Chill cùng Đen Vâu</h3>
                                <p>
                                    <a href="">Đen Vâu</a> 
                                </p>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist9.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những bản hit hay nhất của Sơn Tùng MTP</h3>
                                <p>
                                    <a href="">Sơn Tùng MTP</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist10.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Thế Giới V-Pop Vol. 3</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist11.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>BodyTalk</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist12.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Playlist Này Chill Phết</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div>
                           
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist15.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những Bài Hát Hay Của Mr. Siro</h3>
                                <p>
                                    <a href="">Mr. Siro</a>   
                                </p>
                            </div> 
                            
                            
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist16.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Top EDM Songs Of 2018</h3>
                                <p>
                                    <a href="">Zing MP3</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist17.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Giai Điệu Và Trào Lưu Gây Sốt</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist18.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Những Bài Hát Hay Nhất Của HKT</h3>
                                <p>
                                    <a href="">HKT</a> 
                                </p>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist19.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>100% Gây Nghiện</h3>
                                <p>
                                    <a href="">Zing MP3</a>
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist20.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Nhạc Việt Được Nghe Nhiều Nhất</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/playlist/playlist21.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Dance Việt Hay Nhất</h3>
                                <p>
                                    <a href="">Zing MP3</a> 
                                </p>
                            </div> 
                        </div>
                    </div>

                </div>

                <div class="albumm none">
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">ALBUM</a>
                        <div class="list__genre--bar flex--wrap">
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album1.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                                <h3>Golden Hour</h3>
                                 
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album2.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Boycold (Mini Album)</h3>
                                
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album3.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Red</h3>
                               
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album4.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Người Yêu Cũ (Gửi Cho Anh 2) (Mini Album)</h3>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album5.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Querencia (Mini Album)</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album6.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Justice (Mini Album)</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album7.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Teenage Dream</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album8.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>The Off Season</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album9.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>The Album</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album10.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Random Access Memories</h3>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album11.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Map of the Soul: 7</h3>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album12.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Chromatica</h3>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album13.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>My Turn</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album14.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Meet the Woo 2</h3>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img">
                                    <img src="./image/album/album15.jpg" alt="">
                                    <div class="list__genre--icon">

                                        <div class="icon-block">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <div class="icon-block">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                </div>
                            <h3>Lemonade</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mvv none">
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">MV</a>
                        <div class="list__genre--bar flex--wrap">
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv1.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">11:54</div>
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist1.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Một Bước Yêu Vạn Dặm Đau</h3>
                                        <p>
                                            <a href="">Mr. Siro</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv2.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">03:54</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist2.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Simple Love</h3>
                                        <p>
                                            <a href="">Obito</a>,
                                            <a href="">Seachains</a>,
                                            <a href="">Davis</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv3.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:33</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist3.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Lời Yêu Ngây Dại</h3>
                                        <p>
                                            <a href="">Kha</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv4.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:18</div>
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist4.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">24H</h3>
                                        <p>
                                            <a href="">LyLy</a>,
                                            <a href="">Magazine</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv5.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">05:45</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist5.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Nước Mắt Em Lau Bằng Tình Yêu Mới</h3>
                                        <p>
                                            <a href="">Da LAB</a>,
                                            <a href="">Tóc Tiên</a> 
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv6.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">05:02</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist6.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Yêu Đơn Phương</h3>
                                        <p>
                                            <a href="">OnlyC</a>,
                                            <a href="">Karik</a> 
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv7.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:06</div>
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist7.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Phía Sau Em</h3>
                                        <p>
                                            <a href="">BinZ</a>,
                                            <a href="">Kay Trần</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv8.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">03:52</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist8.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Mình Yêu nhau đi</h3>
                                        <p>
                                            <a href="">Bích Phương</a> 
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv9.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:41</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist9.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Đừng Về Trễ (Acoustic Version)</h3>
                                        <p>
                                            <a href="">Sơn Tùng MTP</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv10.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">03:43</div>
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist10.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Hơn Cả Yêu</h3>
                                        <p>
                                            <a href="">Đức Phúc</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv11.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:01</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist11.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Vì Yêu Cứ Đâm Đầu</h3>
                                        <p>
                                            <a href="">Min</a>,
                                            <a href="">JustaTee</a>,
                                            <a href="">Đen Vâu</a> 
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv12.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">04:36</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist12.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Sao Anh Chưa Về Nhà</h3>
                                        <p>
                                            <a href="">AMEE</a>,
                                            <a href="">Ricky Star</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv13.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">03:43</div>
                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist13.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">Bigcityboi</h3>
                                        <p>
                                            <a href="">BinZ</a>,
                                            <a href="">Touliver</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="list__genre--music mv">
                                <div class="list__genre--img">
                                    <img src="./image/mv/mv14.jpg" alt="">
                                    <div class="list__genre--icon">
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="mv--time">06:28</div>

                                </div>
                                <div class="mv-info">
                                    <div class="img-mv-info">
                                        <img src="./image/mvartist/artist14.jpg" alt="" class="img-info">
                                    </div>
                                    <div class="mv-info-block">
                                        <h3 class="h3-link">
                                            Em Không Sai Chúng Ta Sai</h3>
                                        <p>
                                            <a href="">ERIK</a> 
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="artistt none">
                    <div class="list__genre">
                        <a href="#" class="list__genre--header">NGHỆ SĨ</a>
                        <div class="list__genre--bar flex--wrap">
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist1.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>BinZ</h4>
                                    <h8>265k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist2.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Phương Ly</h4>
                                    <h8>77k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist3.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>AMEE</h4>
                                    <h8>317k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist4.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>MCK</h4>
                                    <h8>52k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div> 
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist5.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Sơn Tùng MTP</h4>
                                    <h8>2.1M follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist6.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Mr. Siro</h4>
                                    <h8>325k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist7.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Han Sara</h4>
                                    <h8>111k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist8.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Bích Phương</h4>
                                    <h8>363k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist9.jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Soobin</h4>
                                    <h8>214k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                            <div class="list__genre--music">
                                <div class="list__genre--img artist--img">
                                    <img src="./image/avaartist/artist10 (1).jpg" alt="" >
                                </div>
                                <div class="flw-info">
                                    <h4>Chi Dân</h4>
                                    <h8>48k follower</h8>
                                    <button class="flw--btn">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="upload none">
                    <form method="POST" action="/listings" enctype="multipart/form-data">
                        <div class="flex">
                            <div class="flex-block">
                                <div class="mb-6">
                                    <input type="text" name="title"
                                    placeholder="Tên bài hát" value="" />
                                </div>
                
                                <div class="mb-6">
                                    <label class="lb" for="tags">
                                        Song topic
                                    </label>
                                    <input type="text" name="tags"
                                    placeholder="Thể loại nhạc" value="" />
                                </div>
                                
                                <div class='mb-6'>
                                    <label class="lb" for="description" >
                                        Song description
                                    </label>
                                    <textarea name="description" rows="10"
                                        placeholder="Tác giả, thông tin"></textarea>
                                    </div>
                            </div>
                
                
                            <div class="flex-block flex-fix">
                    
                                <div class="mb-6">
                                    <label class="lb" for="logo lb">
                                        Poster
                                    </label>
                                    <input class="ipt" type="file" name="logo" style="cursor: pointer;"/>
                        
                                </div>
                
                                <div class="mb-6">
                                    <label class="lb" for="song">
                                        Song
                                    </label>
                                    <input class="ipt" type="file"  name="song" style="cursor: pointer;"/>
                            
                                </div>
                                
                            </div>
                        </div>
                
                        <div class="ctl">
                            <button class="btn-ctl">
                                Create
                            </button>
                    
                            <button class="btn-ctl">
                
                                <a class="a-back" href="/"> Back </a>
                            </button>
                        </div>
                
                      
                        
                    </form>
                </div>
            </div>

            <div class="srcollbar kp none">
                <div class="slider__container">
                    
                    <div class="slider__container--img">
                        <img src="./image/banner1.jpg" alt="">
                    </div>
                    <div class="slider__container--img">
                        <img src="./image/banner2.jpg" alt="">
                    </div>
                    <div class="slider__container--img">
                        <img src="./image/banner3.jpg" alt="">
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">Có Thể Bạn Muốn Nghe</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1.jpg" alt="">
                                <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Mở Đầu Hoàn Hảo</h3>
                            <p>
                                <a href="">AMEE</a>,  
                                <a href="">ERIK</a>, 
                                <a href="">Hoàng Duyên</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>V-Pop: The A-List</h3>
                            <p>
                                <a href="">Bích Phương</a>,  
                                <a href="">ERIK</a>, 
                                <a href="">Hoàng Thùy Linh</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                            <p>
                                <a href="">Quân A.P</a>,  
                                <a href="">Changg</a>, 
                                <a href="">Hoàng Duyên</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Nhạc Trẻ Gây Nghiện</h3>
                            <p>
                                <a href="">AMEE</a>,  
                                <a href="">Quân A.P</a>,
                                <a href="">ERIK</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>HIT-MAKER: Nổi Bật</h3>
                            <p>
                                <a href="">LyLy</a>,  
                                <a href="">Rin9</a>, 
                                <a href="">Anh Tú</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">Lựa Chọn Hôm Nay</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1 (3).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                               
                            </div>
                            <h3>Đóa Hồng Nhạc Việt</h3>
                            <p>
                                Những đóa hồng tạo nên dấu ấn trên thị trường âm nhạc Việt Nam 
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2 (3).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>V-Pop Rising</h3>
                            <p>
                                Những tài năng Gen Z của V-Pop đáng nghe nhất hôm nay
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3 (3).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Everyday EDM</h3>
                            <p>
                                Khởi động mỗi ngày với những ca khúc EDM sôi động
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4 (3).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>K-Pop Newbie</h3>
                            <p>
                                Những hạt giống tiềm năng của K-Pop thế hệ mới
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5 (3).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Anime Now</h3>
                            <p>
                                Nhạc Anime hot nhất ở thời điểm hiện tại có ngay tại đây
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">XONE's CORNER</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1 (4).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>New Releases</h3>
                            <p>
                                Những ca khúc tạo nên xu hướng âm nhạc mới!
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2 (4).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Today's Electronic</h3>
                            <p>
                                Cuồng nhiệt, đầy mê hoặc với giai điệu Electronic
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3 (4).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>XONE's Picks</h3>
                            <p>
                                Top ca khúc XONE chọn riêng cho hôm nay
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4 (4).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Lany's Flavour</h3>
                            <p>
                                Thưởng thức âm nhạc từ nghệ sỹ bạn yêu thích
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5 (4).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Asia Tune</h3>
                            <p>
                                Bài hát tuyển chọn cho người chơi hệ châu Á
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <div class="suggest--singer">
                        <div class="song--info suggest">  
                            <div class="img ">
                                <img class="suggest--singer-img" src="./image/suggest-singer.jpg" alt="">                                   
                            </div>                 
                            <div class="song">
                                <span class="song--name  suggest">VÌ BẠN ĐÃ NGHE</span>
                                <br>
                                <a class="song--actor  suggest">SƠN TÙNG MTP</a>
                            </div>
                        </div>
                    </div>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/pic1.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Muộn rồi mà sao còn</h3>
                            <p>
                                <a href="">Sơn Tùng MTP</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/pic2.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Chạy ngay đi</h3>
                            <p>
                                <a href="">Sơn Tùng MTP</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/pic9.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Có chắc yêu là đây</h3>
                            <p>
                                <a href="">Sơn Tùng MTP</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/pic7.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Chúng ta của hiện tại</h3>
                            <p>
                                <a href="">Sơn Tùng MTP</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/pic8.jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Hãy trao cho anh</h3>
                            <p>
                                <a href="">Sơn Tùng MTP</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <div class="suggest--singer">
                        <div class="song--info suggest">  
                            <div class="img ">
                                <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                            </div>                 
                            <div class="song">
                                <span class="song--name  suggest">BẠN ĐÃ NGHE NHIỀU</span>
                                <br>
                                <a class="song--actor  suggest">Hip-Hop</a>
                            </div>
                        </div>
                    </div>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1 (5).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Today's Rap Hits</h3>
                            <p>
                                <a href="">Drake</a>, 
                                <a href="">Lil Nas X</a>, 
                                <a href="">Kanye West</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2 (5).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Rap Việt Cũ Mà Hay</h3>
                            <p>
                                <a href="">Rhymastic</a>, 
                                <a href="">LK</a>, 
                                <a href="">Yanbi</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3 (5).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Rap Việt Cực Chất</h3>
                            <p>
                                <a href="">ICD</a>, 
                                <a href="">16</a>, 
                                <a href="">Tage</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4 (5).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Rap Việt Kết Hợp Cực Chất</h3>
                            <p>
                                <a href="">Tlinh</a>, 
                                <a href="">Phan Ann</a>, 
                                <a href="">G5R Squad</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5 (5).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                        <h3>Rap Việt Thả Thính Hay Nhất</h3>
                            <p>
                                <a href="">OSAD</a>,
                                <a href="">Obito</a>,
                                <a href="">HIEUTHUHAI</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">Mixtape yêu thích</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1.jfif" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Soobin</a>,  
                                <a href="">BinZ</a>, 
                                <a href="">MCK</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2.jfif" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Jack</a>,  
                                <a href="">Uyên Linh</a>, 
                                <a href="">Tino</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3.jfif" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">MCK</a>,  
                                <a href="">Tlinh</a>, 
                                <a href="">Khắc Hưng</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4.jfif" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Rhymastic</a>,  
                                <a href="">Phương Ly</a>, 
                                <a href="">Touliver</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5.jfif" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Hương Ly</a>,  
                                <a href="">Trúc Nhân</a>, 
                                <a href="">Hiền Hồ</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">Nhạc Mới Mỗi Ngày</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1 (1).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Bích Phương</a>,  
                                <a href="">Nguyên Hà</a>, 
                                <a href="">Đức Phúc</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2 (1).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Jeremy Zucker</a>,  
                                <a href="">Lil Nas X</a>, 
                                <a href="">Nicki Minaj</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3 (1).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Key</a>,  
                                <a href="">CL</a>, 
                                <a href="">aespa</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4 (1).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Trình Hưởng</a>,  
                                <a href="">PANTHEPACK</a>, 
                                <a href="">Sunnee Dương Vân Tình</a>
                            </p>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5 (1).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <a href="">Duongg</a>,  
                                <a href="">Starry Night</a>, 
                                <a href="">Charles Huỳnh</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="list__genre">
                    <a href="#" class="list__genre--header">TOP 100</a>
                    <div class="list__genre--bar">
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist1 (2).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Top 100 Nhạc Dance Việt Nam Hay Nhất</h3>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist2 (2).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Top 100 Bài Hát Nhạc Trẻ Hay Nhất</h3>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist3 (2).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Top 100 Pop Âu Mỹ Hay Nhất</h3>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist4 (2).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Top 100 EDM Hay Nhất</h3>
                        </div> 
                        <div class="list__genre--music">
                            <div class="list__genre--img">
                                <img src="./image/playlist5 (2).jpg" alt="">
                                 <div class="list__genre--icon">

                                    <div class="icon-block">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    <div class="icon-block">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Top 100 Nhạc Hàn Quốc Hay Nhất</h3>
                        </div>
                    </div>
                </div>

                <div class="sponer">ĐỐI TÁC ÂM NHẠC</div>

                <div class="footer">
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand1.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand2.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand3.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand4.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand5.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand6.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand7.png" alt="">
                    </div>
                    <div class="footer__brand-container">
                        <div class="background--img"></div>
                        <img src="./image/brand8.png" alt="">
                    </div>
                </div>
            </div>

            <div class="srcollbar radio none">
                <div class="row__radio">
                    <div class="row__radio--header">
                        <div>Radio Nổi Bật</div>
                        <div class="right--block">
                            <div class="control--icon left-block-option enable--btn">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="control--icon left-block-option">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>                       
                        </div>
                    </div>
                    <div class="row__radio--block">
                        <div class="row__radio--playlist">
                            <div class="row__radio--img">
                                <div class="border">
                                    <img class="img-main" src="./image/pic1.jpg" alt="">   
                                    <div class="list__genre--icon border-icon">                        
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>                                  
                                    </div>  
                                </div>                          
                                <div class="row__radio--live">LIVE</div> 
                                <img src="./image/pic1.jpg" alt="" class="ava">   
                                    
                            </div>
                            <div class="row__radio--title">
                                <a href="">Xone Radio</a>
                            </div>
                            <div class="row__radio--viewer">
                                <p>476 đang nghe</p>
                            </div>
                        </div>
 
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>

                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         
                     </div>
                </div>
                
 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">Nghe lại</span>
                                 <br>
                                 <a class="song--actor  suggest">Xone Radio</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
                 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">PODCAST</span>
                                 <br>
                                 <a class="song--actor  suggest">Vietcetera</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
     
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">NGHE LẠI</span>
                                 <br>
                                 <a class="song--actor  suggest">On Air</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="srcollbar theloai none">
                <div class="row__radio">
                    <div class="row__radio--header">
                        <div>Radio Nổi Bật</div>
                        <div class="right--block">
                            <div class="control--icon left-block-option enable--btn">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="control--icon left-block-option">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>                       
                        </div>
                    </div>
                    <div class="row__radio--block">
                        <div class="row__radio--playlist">
                            <div class="row__radio--img">
                                <div class="border">
                                    <img class="img-main" src="./image/pic1.jpg" alt="">   
                                    <div class="list__genre--icon border-icon">                        
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>                                  
                                    </div>  
                                </div>                          
                                <div class="row__radio--live">LIVE</div> 
                                <img src="./image/pic1.jpg" alt="" class="ava">   
                                    
                            </div>
                            <div class="row__radio--title">
                                <a href="">Xone Radio</a>
                            </div>
                            <div class="row__radio--viewer">
                                <p>476 đang nghe</p>
                            </div>
                        </div>
 
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>

                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         
                     </div>
                </div>
                
 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">Nghe lại</span>
                                 <br>
                                 <a class="song--actor  suggest">Xone Radio</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
                 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">PODCAST</span>
                                 <br>
                                 <a class="song--actor  suggest">Vietcetera</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
     
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">NGHE LẠI</span>
                                 <br>
                                 <a class="song--actor  suggest">On Air</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="srcollbar musicvideo none">
                <div class="row__radio">
                    <div class="row__radio--header">
                        <div>Radio Nổi Bật</div>
                        <div class="right--block">
                            <div class="control--icon left-block-option enable--btn">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="control--icon left-block-option">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>                       
                        </div>
                    </div>
                    <div class="row__radio--block">
                        <div class="row__radio--playlist">
                            <div class="row__radio--img">
                                <div class="border">
                                    <img class="img-main" src="./image/pic1.jpg" alt="">   
                                    <div class="list__genre--icon border-icon">                        
                                        <div class="icon-block">
                                            <i class="fa-solid fa-play"></i>
                                        </div>                                  
                                    </div>  
                                </div>                          
                                <div class="row__radio--live">LIVE</div> 
                                <img src="./image/pic1.jpg" alt="" class="ava">   
                                    
                            </div>
                            <div class="row__radio--title">
                                <a href="">Xone Radio</a>
                            </div>
                            <div class="row__radio--viewer">
                                <p>476 đang nghe</p>
                            </div>
                        </div>
 
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>

                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         <div class="row__radio--playlist">
                             <div class="row__radio--img">
                                 <div class="border">
                                     <img class="img-main" src="./image/pic1.jpg" alt="">   
                                     <div class="list__genre--icon border-icon">                        
                                         <div class="icon-block">
                                             <i class="fa-solid fa-play"></i>
                                         </div>                                  
                                     </div>  
                                 </div>                          
                                 <div class="row__radio--live">LIVE</div> 
                                 <img src="./image/pic1.jpg" alt="" class="ava">   
                                     
                             </div>
                             <div class="row__radio--title">
                                 <a href="">Xone Radio</a>
                             </div>
                             <div class="row__radio--viewer">
                                 <p>476 đang nghe</p>
                             </div>
                         </div>
                         
                     </div>
                </div>
                
 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">Nghe lại</span>
                                 <br>
                                 <a class="song--actor  suggest">Xone Radio</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
                 
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">PODCAST</span>
                                 <br>
                                 <a class="song--actor  suggest">Vietcetera</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Kết Hợp Cực Chất</h3>
                             <p>
                                 <a href="">Tlinh</a>, 
                                 <a href="">Phan Ann</a>, 
                                 <a href="">G5R Squad</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Thả Thính Hay Nhất</h3>
                             <p>
                                 <a href="">OSAD</a>,
                                 <a href="">Obito</a>,
                                 <a href="">HIEUTHUHAI</a>
                             </p>
                         </div>
                     </div>
                 </div>
     
                 <div class="list__genre">
                     <div class="suggest--singer">
                         <div class="song--info suggest">  
                             <div class="img ">
                                 <img class="suggest--singer-img" src="./image/suggest2.jpg" alt="">                                   
                             </div>                 
                             <div class="song">
                                 <span class="song--name  suggest">NGHE LẠI</span>
                                 <br>
                                 <a class="song--actor  suggest">On Air</a>
                             </div>
                         </div>
                     </div>
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Today's Rap Hits</h3>
                             <p>
                                 <a href="">Drake</a>, 
                                 <a href="">Lil Nas X</a>, 
                                 <a href="">Kanye West</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cũ Mà Hay</h3>
                             <p>
                                 <a href="">Rhymastic</a>, 
                                 <a href="">LK</a>, 
                                 <a href="">Yanbi</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3 (5).jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Rap Việt Cực Chất</h3>
                             <p>
                                 <a href="">ICD</a>, 
                                 <a href="">16</a>, 
                                 <a href="">Tage</a>
                             </p>
                         </div> 
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
 
                 <div class="list__genre">
                     <div class="list__genre--bar">
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist1.jpg" alt="">
                                 <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                             <h3>Mở Đầu Hoàn Hảo</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist2.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>V-Pop: The A-List</h3>
                             <p>
                                 <a href="">Bích Phương</a>,  
                                 <a href="">ERIK</a>, 
                                 <a href="">Hoàng Thùy Linh</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist3.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Tỏ Tình Nhẹ Nhàng Thôi</h3>
                             <p>
                                 <a href="">Quân A.P</a>,  
                                 <a href="">Changg</a>, 
                                 <a href="">Hoàng Duyên</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist4.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>Nhạc Trẻ Gây Nghiện</h3>
                             <p>
                                 <a href="">AMEE</a>,  
                                 <a href="">Quân A.P</a>,
                                 <a href="">ERIK</a>
                             </p>
                         </div> 
                         <div class="list__genre--music">
                             <div class="list__genre--img">
                                 <img src="./image/playlist5.jpg" alt="">
                                  <div class="list__genre--icon">
 
                                     <div class="icon-block">
                                         <i class="fa-solid fa-heart"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-play"></i>
                                     </div>
                                     <div class="icon-block">
                                         <i class="fa-solid fa-ellipsis"></i>
                                     </div>
                                 </div>
                             </div>
                         <h3>HIT-MAKER: Nổi Bật</h3>
                             <p>
                                 <a href="">LyLy</a>,  
                                 <a href="">Rin9</a>, 
                                 <a href="">Anh Tú</a>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>

             
        </div>
    </div>

    <!--Navbar Bottom-->
    <div class="main__bottom">
            <!--left bottom-->
        <div class="popup">
            <div class="playlist--song bottom--playlist--song">
                <div class="song--info ">  
                    <div class="img play">
                        <img class="play-img" src="" alt="">
                    </div>                 
                    <div class="song">
                        <marquee scrollamount="5" class="song--name play"></marquee>
                        <br>
                        <a class="song--actor play"></a>
                    </div>
                </div>
                <div class="song--icon">
                    <div class="song--favor">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="song--option">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
            </div>
            <!--midle bottom-->
            <div class="player-control-block ">  
                <div class="player-control-top">
                <div class="btn-control random">
                    <i class="fa-solid fa-shuffle"></i>
                </div> 
                <div class="btn-control prev">
                    <i class="fa-solid fa-backward-step "></i>
                </div> 
                <div class="btn-control btn-toggle">
                    <i class="fas fa-pause icon-pause"></i>
                    <i class="fas fa-play icon-play"></i>
                </div> 
                <div class="btn-control next">
                    <i class="fa-solid fa-forward-step"></i>
                </div> 
                <div class="btn-control repeat">
                    <i class="fa-solid fa-repeat"></i>
                </div> 
                </div>
                <div class="player-control-bottom">
                    <span class="tracktime">00:00</span>
                    <input id="progress--main" class="progress play" type="range" value="0" step="1" min="0" max="100">
                    <audio id="audio" src=""></audio>
                    <div class="progress__track song--track">
                        <div class="progress__track-update" style="width: 100%;"></div>
                    </div>
                    <span class="durationtime">10:33</span>
                </div>
            </div>
            <!--right bottom-->
            <div class="player-volume">
                <div class="btn-volume">
                    <i class="fa-solid fa-video"></i>
                </div>
                <div class="btn-volume none "style="font-size: 18px;">
                    <i class="fa-solid fa-volume-xmark"></i>
                </div>
                <div class="btn-volume">
                    <i class="fa-solid fa-volume-high"></i>
                </div>

                <input type="range" class="volume__range progress" value="100" step="0" min="0" max="100">
                <div class="progress__track volume--track">
                    <div class="progress__track-update" style="width: 18%;"></div>
                </div>
            </div>
        </div>

        <div class="player__popup none">
            <div class="header__popup">
                <div class="header__popup--logo">
                    <img src="./image/logo.png" alt="">
                </div>
                <div class="header__popup--list">
                    <ul>
                        <li>Danh sach phat</li>
                        <li>Karaoke</li>
                        <li>Loi bai hat</li>
                    </ul>
                </div>
    
                <div class="header__popup--back">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
    
            </div>
        </div>
    
    </div>

    <script type="text/javascript" src="app.js"></script>
</body>
    
</html>