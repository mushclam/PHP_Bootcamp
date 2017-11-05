<?php if ($outerValue['likenum'] >= 1000) {
    $upper = floor($outerValue['likenum'] / 1000);
    $lower = $outerValue['likenum'] - ($upper * 1000);
    if ($lower < 100) {
        echo $upper . ',0' . $lower;
    } else {
        echo $upper . ',' . $lower;
    }
} else {
    echo $outerValue['likenum'];
}
?>