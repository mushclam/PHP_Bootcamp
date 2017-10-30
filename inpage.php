<html>
<head>
  <title>Instagram</title>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width">
  <link rel="stylesheet" href="stylesheet.css">
  <style>
    header{
      display: flex;
      flex-direction: row;
      flex-grow: 0;
      flex-shrink: 0;
      justify-content: center;
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 76px;
      border-bottom: 1px solid #e6e6e6;
      background-color: #fff;
      z-index: 3;
    }
    .head_area{
      width:100%;
      max-width: 1010px;
      padding: 26px 40px;

      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    .sprite_btn{
      background-image: url('img/sprite_core.png');
      background-repeat: no-repeat;
    }

    .inst_logo{
      flex-direction: row;
    }
    .fav_logo{
      background-image: url('img/sprite_core.png');
      background-repeat: no-repeat;
      background-position: -177px 0;
      height: 35px; width: 176px;
    }
    .search_cont{
      flex: 0 1 auto;
      width: 215px; min-width: 125px;
    }
    .search{
      border: 1px solid #dbdbdb;
      border-radius: 3px;
      font-size: 14px;
      outline: none;
      padding: 3px 10px 3px 26px;
      line-height: 18px;
      height: 28px;
    }
    .search_cover{
      font-size: 14px;
      background: #fafafa;
      width: 100%; height: 100%;
      border: 1px solid #dbdbdb;
      border-radius: 3px;
      color: #999;
      cursor: text;
      font-weight: 300;
      left: 0;
      padding: 7px;
      position: absolute;
      text-align: center;
      top: 0;
      z-index: 2;
      justify-content: center;
      flex-direction: row;
    }
    .search_btn{
      background-image: url('img/sprite_core.png');
      background-repeat: no-repeat;
      background-position: -137px -210px;
      height: 10px; width: 10px;
      z-index: 2;
      display: inline-block;
      margin-top: 3px;
      margin-right: 6px;
      vertical-align: baseline;
    }
    .search_txt{
      display: inline-block;
      line-height: 18px;
    }

    .ico_box{
      flex-direction: row ;
      justify-content: space-between;
      width: 132px;
    }
    .reco{
      background-position: -387px -104px;
      height: 24px; width: 24px;
    }
    .alarm{
      background-position: -338px -336px;
      height: 24px; width: 24px;
    }
    .ur_detail{
      background-position: -287px -179px;
      height: 24px; width: 24px;
    }

    .main{
      top: 76px;
      height: 100%;
    }
    .container{
      max-width: 600px;
      width: 100%;
      padding-top: 60px;
      margin: 0 auto;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }
    .content{
      width: 100%;
      padding-top: 0;
      justify-content: flex-start;
      border-radius: 3px;
      margin-bottom: 15px;
    }
    .profile{
      flex-direction: row;
      align-items: center;
      padding: 16px;
      padding-right: 40px;
      justify-content: flex-start;
    }
    .prof_pic{
      height: 30px; width: 30px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 10px;
    }
    .prof_name{
      display: inline-block;
      font-size: 13px;
      font-weight: 600;
      margin-right: 6px;
    }
    .picture{
      width: 100%; max-height: 600px;
      overflow: hidden;
    }
    .picture>img{
      width: 100%;
    }
    .other{
      padding: 0 16px;

    }
    .react_box{
      padding-top: 16px;
    }
    .react_btn{
      flex-direction: row;
      justify-content: flex-start;
    }
    .heart_btn{
      height: 24px; width: 24px;
      background-position: -208px -336px;
      margin-right: 16px;
    }
    .comm_btn{
      height: 24px; width: 24px;
      background-position: -355px -263px;
    }
    .react_box>a{
      color: #262626;
      font-weight: 600;
      font-size: 14px;
      margin: 8px 0;
    }
    .main_text{
      flex-direction: row;
      justify-content: flex-start;
      margin-bottom: 8px;
    }
    .main_text>p{
      font-size: 14px;
      margin-right: 10px;
    }
    .ext_btn{
      font-size: 14px;
      color: #999;
    }
    .comment_box>.ext_btn{
      margin-bottom: 8px;
    }
    .comm_li>li{
      margin-bottom: 8px;
      flex-direction: row;
      align-items: center;
    }
    .comm_text{
      font-size: 15px;
      display: inline-block;
    }
    .posted_date{
      font-size: 12px;
      color: #999;
    }
    .more_detail{
      position: absolute;
      top: 0; right: 10px;
      height: 60px;
    }
    .detail_btn{
      background-color: #fff;
      border: 0;
      padding: 6px;
      cursor: pointer;
    }
    .dot{
      background-position: -276px -115px;
      height: 16px; width: 16px;
    }
  </style>
</head>
<body>
  <header>
    <div class="head_area">
      <div class="inst_logo">
        <span class="fav_logo"></span>
      </div>
      <div class="search_box">
        <div class="search_cont">
          <input type="text" class="search" placeholder="검색">
          <span class="zoom"></span>
          <div class="search_cover">
            <span class="sprite_btn search_btn"></span>
            <span class="search_txt">검색</span>
          </div>
        </div>
      </div>
      <div class="ico_box">
        <div class="sprite_btn reco"></div>
        <div class="sprite_btn alarm"></div>
        <div class="sprite_btn ur_detail"></div>
      </div>
    </div>
  </header>
  <div class="main">
    <div class="container">
      <?php
      $uricon = ['img/up1.jpg', 'img/up2.jpg', 'img/up2.jpg', 'img/up3.jpg'];
      $urname = ['23yearsold_official', 'coolcatanice', 'coolcatanice', 'thanksbooks'];
      $contpic = ['img/us1.jpg', 'img/us2.jpg', 'img/us3.jpg', 'img/us4.jpg '];
      $likenum = [23, 35];
      for($i = 0; $i < count($uricon); $i++){
        echo '
          <div class="content signup_box">
            <div class="user_box">
              <div class="profile">
                <span class="prof_pic"><img src="'.$uricon[$i].'" alt="" style="width:30px; height:30px;"></span>
                <div class="prof_name">'.$urname[$i].'</div>
              </div>
              <span class="more_detail">
                <button class="detail_btn">
                  <span class="dot sprite_btn"></span>
                </button>
              </span>
            </div>
            <div class="picture"><img src="'.$contpic[$i].'" alt=""></div>
            <div class="other">
              <div class="react_box">
                <div class="react_btn">
                  <span class="sprite_btn heart_btn"></span>
                  <span class="sprite_btn comm_btn"></span>
                </div>
                <a href="#">좋아요 '.$likenum[$i].'개</a>
              </div>
              <div class="main_text">
                <div class="prof_name">23yearsold_official</div>
                <p>본문</p>
                <div class="ext_btn">문구 더 보기</div>
              </div>
              <div class="comment_box">
                <div class="ext_btn">댓글 모두 보기</div>
                <div class="comment">
                  <ul class="comm_li">
                    <li>
                      <div class="prof_name">test</div>
                      <div class="comm_text">test</div>
                    </li>
                    <li>
                      <div class="prof_name">test</div>
                      <div class="comm_text">test</div>
                    </li>
                    <li>
                      <div class="prof_name">test</div>
                      <div class="comm_text">test</div>
                    </li>
                    <li>
                      <div class="prof_name">test</div>
                      <div class="comm_text">test</div>
                    </li>
                  </ul>
                </div>
                <div class="posted_date">6일 전</div>
                <div class="mkcomment"></div>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>
</body>
</html>
