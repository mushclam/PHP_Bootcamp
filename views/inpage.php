<html>
<head>
    <title>Instagram</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/inp_css.css">
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
        <?php foreach ($post as $outerValue): ?>
            <div class="content signup_box">
                <div class="user_box">
                    <div class="profile">
                        <span class="prof_pic"><img src="<?= $outerValue['uricon'] ?>" alt=""
                                                    style="width:30px; height:30px;"></span>
                        <div class="prof_name"><?= $outerValue['urname'] ?></div>
                    </div>
                </div>
                <div class="picture"><img src="<?= $outerValue['contopic'] ?>" alt=""></div>
                <div class="other">
                    <div class="react_box">
                        <div class="react_btn">
                            <input type="checkbox" name="heart" id="heart" class="check_btn"/>
                            <label for="heart" class="sprite_btn heart_btn"></label>
                            <input type="checkbox" name="comm" id="comm" class="check_btn"/>
                            <label for="comm" class="sprite_btn comm_btn"></label>
                        </div>
                        <a href="#">좋아요
                            <?php $addOn->like($outerValue['likenum']); ?>개</a>
                    </div>
                    <div class="main_text">
                        <?php if ($outerValue['mt']): ?>
                            <p>
                                <a href="#" class="prof_name"><?= $outerValue['urname'] ?></a>
                                <?= $outerValue['mt'] ?>
                                <a href="#" class="ext_btn">문구 더 보기</a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="comment_box">
                        <?php include "php/comment.php"; ?>
                        <div class="posted_date">
                            <?php $addOn->date($outerValue['date']);; ?>
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
