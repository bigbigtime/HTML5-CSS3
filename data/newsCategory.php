<?php
$dataItem = null;
$dataItem = array(
    array(
        'id' => 1,
        'categoryName' => '行业动态',
        'type' => 'industry'
    ),
    array(
        'id' => 2,
        'categoryName' => '朗朗资讯',
        'type' => 'information'
    ),
    array(
        'id' => 3,
        'categoryName' => '媒体报道',
        'type' => 'media'
    ),
    array(
        'id' => 4,
        'categoryName' => '公益活动',
        'type' => 'welfare'
    )
);

$result = array(
    'resCode' => 0,
    'data' => $dataItem,
    'message' => 'OK'
);
exit(json_encode($result));
?>