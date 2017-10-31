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
      padding-bottom: 0;
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
      color: #262626;
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

    .check_btn{
      display: none;
    }
    .heart_btn{
      height: 24px; width: 24px;
      background-position: -208px -336px;
      margin-right: 16px;
      cursor: pointer;
    }
    #heart:checked ~ label:first-of-type{
      height: 24px; width: 24px;
      background-position: -182px -336px;
      margin-right: 16px;
      cursor: pointer;
    }
    .comm_btn{
      height: 24px; width: 24px;
      background-position: -355px -263px;
      cursor: pointer;
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
      align-items: center;
      margin-bottom: 8px;
    }
    .main_text>p{
      font-size: 14px;
      line-height: 18px;
      margin-right: 10px;
      vertical-align: baseline;
    }
    .ext_btn{
      font-size: 14px;
      color: #999;
      line-height: 18px;
    }
    .comment_box>.ext_btn{
      margin-bottom: 8px;
    }
    .comm_li>li{
      margin-bottom: 6px;
      flex-direction: row;
      align-items: center;
    }
    .comm_text{
      font-size: 14px;
      display: inline-block;
    }
    .posted_date{
      margin-bottom: 4px;
      font-size: 10px;
      color: #999;
    }
    .more_detail{
      position: absolute;
      bottom: 0; right: 10px;
      height: 52px;
      top: auto;
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

    .mkcomment{
      border-top: 1px solid #e6e6e6;
      padding: 16px 0;
      padding-right: 26px;
      margin-top: 4px;
      font-size: 14px;
      line-height: 18px;
      min-height: 56px;
      flex-shrink: 0;
    }
    .mkcomm_s_box{
      border: 0;
      width: 100%;
      font-family: 'Arial';
      color: #262626;
      background: 0 0;
      height: 18px;
      max-height: 80px;
      outline: none;
      padding: 0;
      resize: none;
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
      $post = [
        0 => [
          'uricon' => 'img/up4.jpg',
          'urname' => 'type4graphic',
          'contopic' => 'img/us5.jpg',
          'likenum' => '8,096',
          'mt' => '',
          'comm' => [
            'goohagooha' => '😐',
            'ji1.e' => '@ru.cha_ng 💗',
            'kim.chacha' => '후',
            'nl3163' => '와!! 공감 만프로!',
            'mimini_k' => '허......'
          ],
          'date' => '4시간 전'
        ],
        1 => [
          'uricon' => 'img/up2.jpg',
          'urname' => 'coolcatanice',
          'contopic' => 'img/us2.jpg',
          'likenum' => '45',
          'mt' => '#이봄 @konglalala',
          'comm' => [
            'khj_ngj' => '저희도 먼저 말걸어주셔서 엄청 감사했어요 ㅎㅎㅎ. 응 그라 시집 제가 구매한 첫 시집이네요! 눈에 마음에 잘 새기고 있습니당~',
            'coolcatanice' => '@khj_ngj 앗앗앗 정말요? 오마이갓 첫시집이시라니...먼가 부끄러워지네요 모쪼록 마음에 위안이 되는 글이길 바랄게요^^감사합니다',
            'hh.dal' => '너무 감사했습니다! 작가님 덕분에 즐겁게 참여했어요~~😌',
            'coolcatanice' => '@hh.dal 제가 좀 부산스럽고 어수선쟁이라 사고안난게 다행이에요..꼭 어딘가 부서지고 질질흘리고 다녀서 ㅋㅋㅋ',
            '0320cherry' => '예쁘당.....!!!!!^♡♡♡^',
            'konglalala' => '감사합니다!'
          ],
          'date' => '8시간 전'
        ],
        2 => [
          'uricon' => 'img/up2.jpg',
          'urname' => 'coolcatanice',
          'contopic' => 'img/us3.jpg',
          'likenum' => '48',
          'mt' => '#회사부적응퇴사불가능 #호송 #호송송 #류호우 @hosongsong #류호우 @ryuhowoo',
          'comm' => [
            'hosongsong' => '와우 포스팅 감사합니다요 ㅎㅎㅎ',
            'coolcatanice' => '@hosongsong 출근중이신가봐요~~오늘도 화이팅하시길 바랍니다! 저도 꼰대세대이긴하지만 너희때는 어떠니?라고 묻는 사람이 될게요^^~~~',
            'ryuhowoo' => '감사합니다🙏🏻'
          ],
          'date' => '16시간 전'
        ],
        3 => [
          'uricon' => 'img/up3.jpg',
          'urname' => 'thanksbooks',
          'contopic' => 'img/us4.jpg',
          'likenum' => '112',
          'mt' => '[입고 안내] 매거진 <부엌>을 발행하는 로우프레스에서 1년에 2번, 다양한 도시와 사람들을 통해 지속 가능한 삶에 대해 탐구하는 로컬 다큐멘터리 매거진을 만들었습니다. <나우 매거진> 창간호의 주제는',
          'comm' => [],
          'date' => '4일 전'
        ]
      ];
      foreach($post as $ov): ?>

          <div class="content signup_box">
            <div class="user_box">
              <div class="profile">
                <span class="prof_pic"><img src="<?= $ov['uricon'] ?>" alt="" style="width:30px; height:30px;"></span>
                <div class="prof_name"><?= $ov['urname'] ?></div>
              </div>

            </div>
            <div class="picture"><img src="<?= $ov['contopic'] ?>" alt=""></div>
            <div class="other">
              <div class="react_box">
                <div class="react_btn">
                  <input type="checkbox" name="heart" id="heart" class="check_btn"/>
                  <label for="heart" class="sprite_btn heart_btn" ></label>
                  <input type="checkbox" name="comm" id="comm" class="check_btn"/>
                  <label for="comm" class="sprite_btn comm_btn"></span>
                </div>
                <a href="#">좋아요 <?= $ov['likenum'] ?>개</a>
              </div>
              <div class="main_text">
              <?php if($ov['mt']): ?>
                <p>
                  <a href ="#" class="prof_name"><?= $ov['urname'] ?></a>
                  <?= $ov['mt'] ?>
                  <a href ="#" class="ext_btn">문구 더 보기</a>
                </p>
              <?php endif; ?>
              </div>
              <div class="comment_box">
              <?php if(count($ov['comm'])>4): ?>
                <div class="ext_btn">댓글 모두 보기</div>
              <?php endif; ?>
                <div class="comment">
                  <ul class="comm_li">
                  <?php if($ov['comm']){
                    $k = 0;
                    foreach($ov['comm'] as $k => $iv){
                      echo '
                      <li>
                        <p class="comm_text">
                          <a class="prof_name">'.$k.'</a>'.$iv.'
                        </p>
                      </li>
                      ';
                      $k++;
                      if($k>=4){
                        break;
                      }
                    }
                  } ?>
                  </ul>
                </div>
                <div class="posted_date"><?= $ov['date'] ?></div>
                <div class="mkcomment">
                  <form class="mkcomm_b_box">
                    <textarea class="mkcomm_s_box" placeholder="댓글 달기..." style="height:18px;"></textarea>
                  </form>
                </div>
              </div>
              <span class="more_detail">
                <button class="detail_btn">
                  <span class="dot sprite_btn"></span>
                </button>
              </span>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
