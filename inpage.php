<html>
<head>
  <title>Instagram</title>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="inp_css.css">
  <style>
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
