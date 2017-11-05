<html>
<head>
    <title>Instagram</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width">
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
        require_once "dblink.php";
        foreach ($data as $outerValue): 
            $urid = $outerValue['urid'];
            $user->execute();
            $urList = $user->fetch(PDO::FETCH_ASSOC);

            $commid = (int)$outerValue['commid'];
            $comm->execute();
            $commList = $comm->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="content signup_box">
                <div class="user_box">
                    <div class="profile">
                        <span class="prof_pic"><img src="<?= $urList['uricon'] ?>" alt=""
                                                    style="width:30px; height:30px;"></span>
                        <div class="prof_name"><?= $urList['urname'] ?></div>
                    </div>
                </div>
                <div class="picture"><img src="<?= $outerValue['contopic'] ?>" alt=""></div>
                <div class="other">
                    <div class="react_box">
                        <div class="react_btn">
                            <input type="checkbox" name="heart" id="heart" class="check_btn"/>
                            <label for="heart" class="sprite_btn heart_btn"></label>
                            <input type="checkbox" name="comm" id="comm" class="check_btn"/>
                            <label for="comm" class="sprite_btn comm_btn"></span>
                        </div>
                        <a href="#">좋아요
                            <?php require "like.php"; ?>개</a>
                    </div>
                    <div class="main_text">
                        <?php if ($outerValue['mt']): ?>
                            <p>
                                <a href="#" class="prof_name"><?= $urList['urname'] ?></a>
                                <?= $outerValue['mt'] ?>
                                <a href="#" class="ext_btn">문구 더 보기</a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="comment_box">
                        <?php if (count($commList) > 4): ?>
                            <div class="ext_btn">댓글 모두 보기</div>
                        <?php endif; ?>
                        <div class="comment">
                            <ul class="comm_li">
                                <?php if ($commList) {
                                    $k = 0;
                                    foreach ($commList as $innerValue){
                                        echo '
                      <li>
                        <p class="comm_text">
                          <a class="prof_name">' . $innerValue['comname'] . '</a>' . $innerValue['comcont'] . '
                        </p>
                      </li>
                      ';
                                        $k++;
                                        if ($k >= 4) {
                                            break;
                                        }
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="posted_date">
                            <?php require "date.php"; ?>
                        </div>
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
