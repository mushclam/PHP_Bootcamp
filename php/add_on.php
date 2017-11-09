<?php
class Add_on{
  public function like($likenum){
      if ($likenum >= 1000) {
        $upper = floor($likenum / 1000);
        $lower = $likenum - ($upper * 1000);
        if ($lower < 100) {
            echo $upper . ',0' . $lower;
        } else {
            echo $upper . ',' . $lower;
        }
    } else {
        echo $likenum;
    }
  }

  public function date($date){
    date_default_timezone_set("Asia/Seoul");
    $today = date("Y-m-d H:i:s");
    $todayDate = date_create($today);
    $postedDate = $date;
    $postedDateForm = date_create($postedDate);
    $dateDiff = date_diff($todayDate, $postedDateForm);
    if($dateDiff->y > 0){
        echo $dateDiff->y."년 전";
    } else{
        if($dateDiff->m > 0){
            echo $dateDiff->m."달 전";
        } else{
            if($dateDiff->d > 0){
                echo $dateDiff->d."일 전";
            } else{
                if($dateDiff->h > 0){
                    echo $dateDiff->h."시간 전";
                } else{
                    if($dateDiff->i > 0){
                        echo $dateDiff->i."분 전";
                    } else{
                        if($dateDiff->s > 0){
                            echo $dateDiff->s."초 전";
                        } else{
                            echo 'Wrong date';
                        }
                    }
                }
            }
        }
    }
  }
}
?>
