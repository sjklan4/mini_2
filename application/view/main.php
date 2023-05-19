<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/tour.css">
</head>
<body>
    <div class="container position-relative">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <h1><img src="/application/view/imgfile/title2.PNG" class="title_img"></h1>
          </div>
          <div class="col-5 d-flex justify-content-center">
            <form action="https://search.naver.com/search.naver" method="GET">
                <div class="mx-quto input-group mt-5">
                    <mx-auto>
                        <input name="query" type="text" class="form-control" placeholder="검색어 입력" aria-label="search" aria-describedby="button-addon2">
                    </mx-auto>
                    <button class="btn btn-outline-dark" type="submit" id="button-addon2">SEARCH</button>
                </div>
            </form>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="my_menu">
                <!-- <img src="/application/view//imgfile/booking.PNG" class="menu_img">
                <img src="/application/view//imgfile/mymenu.PNG" class="menu_img"> -->
                
                <?php if(!isset($_SESSION[_STR_LOGIN_ID])){ ?>
                  <button type="button" class="btn btn-light"  onclick="location.href ='/user/login'">로그인</button>
                  <button type="button" class="btn btn-light"  onclick="location.href ='/user/regist'">회원가입</button>
                <?php } else{?>
                  <?php echo "안녕하세요".$_SESSION[_STR_LOGIN_ID]."님" ?>
                  <button type="button" class="btn btn-light"  onclick="location.href ='/user/logout'">로그아웃</button>
                  <button type="button" class="btn btn-light"  onclick="location.href ='/memberinfo/memberinfo'">내정보</button>
                  <?php }?>
            </div>
          </div>
        </div>
      </div>
      <!-- <a href="/user/regist">회원가입2</a> -->
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">해외</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">항공</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">전세버스</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact" aria-selected="false">국내</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact" aria-selected="false">호텔</button>
        </li>
      </ul>
      <div class="tab-content justify-content-center" id="myTabContent">
        <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab">
            <a href="">동남아</a>
            <a href="">일본</a>
            <a href="">중국</a>
            <a href="">대만</a>
            <a href="">유럽</a>
        </div>
        <div class="tab-pane fade justify-content-center text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <a href="">대한항공</a>
            <a href="">아시아나</a>
            <a href="">스타얼라이언스</a>
            <a href="">제주항공/에어부산</a>
        </div>
        <div class="tab-pane fade justify-content-center text-center" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <a href="">test</a>
            <a href="">test</a>
            <a href="">test</a>
        </div>
        <div class="tab-pane fade justify-content-center text-center" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
            <a href="">test</a>
            <a href="">test</a>
            <a href="">test</a>
        </div>
        <div class="tab-pane fade justify-content-center text-center" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
            <a href="">test</a>
            <a href="">test</a>
            <a href="">test</a>
        </div>
    </div>


      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/application/view//imgfile/swissmt.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/application/view//imgfile/eruogrees.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/application/view//imgfile/K2mt.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      

    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          Link with href
        </a>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Button with data-bs-target
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
        </div>
      </div>

    <div class="parent">
 

        <div class="card" style="width: 19rem; float : none; margin:0 auto ;"  >
            <img src="/application/view//imgfile/pagein/danag.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/kor1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/kor3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/kor5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/northeuro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/northeuro2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/northeuro3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card" style="width: 19rem; float : none; margin:0 auto ;">
            <img src="/application/view//imgfile/pagein/northeuro3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
     
    </div>
    <div class= "submain">
      <div class = "conten_img">
        <img src="/application/view/imgfile/japanosaka.jpg" class = "event_img">
          <div class = "submain_word">
            <strong class = "tit">
                  환율 떨어 졌다!
                  <br>
                  떠나자!
                  <br>
                  바다 건너로!
            </strong>
            <br>
            <span class = "label_txt">여기 버튼 넣자</span>
            <br>
            <span class = "label_txt">여기 버튼 넣자</span>
            <br>
            <span class = "label_txt">여기 버튼 넣자</span>
          </div>
      </div>

      <div class = "submain_list">
          <ul class = "submenu_list">
            <li class = "submenu_li">
              <div class = "submenu_img">
                <img src="/application/view/imgfile/pagein/kor1.jpg" alt="">
              </div>
              <div class = "submenu_h1">
                  <h1>여행제목</h1>
                  <h2>여행지 내용부분</h2>
              </div>
          </li>
            <li class = "submenu_li">
            <div class = "submenu_img">
                <img src="/application/view/imgfile/pagein/danag.jpg" alt="">
              </div>
              <div class = "submenu_h1">
                  <h1>여행제목</h1>
                  <h2>여행지 내용부분</h2>
              </div>
            </li>
            <li class = "submenu_li">
            <div class = "submenu_img">
                <img src="/application/view/imgfile/pagein/kor3.jpg" alt="">
              </div>
              <div class = "submenu_h1">
                  <h1>여행제목</h1>
                  <h2>여행지 내용부분</h2>
              </div>
            </li>
            <li class = "submenu_li">
            <div class = "submenu_img">
                <img src="/application/view/imgfile/pagein/kor1.jpg" alt="">
              </div>
              <div class = "submenu_h1">
                  <h1>여행제목</h1>
                  <h2>여행지 내용부분</h2>
              </div>
            </li>
          </ul>
      </div>
    </div>



<?php require_once(_PATH_FOOTER) ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>      
</body>
</html>