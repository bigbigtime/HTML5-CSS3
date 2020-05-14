<?php
$categoryId = $_POST['categoryId'];
$module = isset($_POST['module']);
$dataItem = null;
if($categoryId == 123456){
    $dataItem = array(
        array(
            'id' => 10,
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/1f2d1g23d1r65awe1fdf.jpg',
            'title' => '郎朗口腔',
            'dec' => '诊所内设有典雅舒适、风格各异的独立诊疗室，如奇趣可爱的儿童诊室、适应女性需求的Hello Kitty'
        ),
        array(
            'id' => 11,
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/8w4d6f11vds1fasd1f3dsf.jpg',
            'title' => '舒适的就诊环境',
            'dec' => '诊所内设有典雅舒适、风格各异的独立诊疗室，如奇趣可爱的儿童诊室、适应女性需求的...'
        ),
        array(
            'id' => 12,
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/45df1dd21f3ae1ds1fd1fdsf.jpg',
            'title' => '郎朗口腔',
            'dec' => '朗朗口腔拥有全球先进口腔诊疗技术，引进国外多款高端的齿科诊疗设备。包括：德国进口种植机...'
        )
    );
}

/**朗朗公益 */
if($module == 'welfare' && $categoryId == 10000) {
    $dataItem = array(
        array(
            'id' => 10,
            'date' => '2016-09-17',
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/23dsf1sd1f21sdf3.jpg',
            'title' => '爱能养老院活动',
            'dec' => '',
            'color' => '',
            'bgColor' => 'eae9e4'
        ),
        array(
            'id' => 11,
            'date' => '2016-09-17',
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/2d1f651df1df1asfdfas.jpg',
            'title' => '美吉姆早教义诊活动',
            'dec' => '在“牙齿健康从娃娃抓起”大型美吉姆公益义诊活动现场，参与活动的朗朗口腔辽宁分公司儿童口腔专家王阳有着丰富的临床治疗经验，包括儿童龋病、儿童口腔外科、儿童错颌畸形早期矫治等，囊括了儿童口腔健康的各个方面。王医生现场对孩子们进行了细致的口腔检查',
            'color' => '',
            'bgColor' => 'ffffff'
        ),
        array(
            'id' => 12,
            'date' => '2016-09-17',
            'imgUrl' => 'http://www.web-jshtml.cn/data/upload/ds4af654d1f32adsf2we1f2dsf.jpg',
            'title' => '商业城公益捐赠活动',
            'dec' => '朗朗口腔辽宁分公司于2016年9月17日在沈阳核心商圈中街商业城举办公益助残捐赠活动，本次共计为辽宁省残疾人福利基金会捐助善款184500元，朗朗口腔辽宁分公司CEO张显威、总经理杜忠华、原省委宣传部副部长葛本亮、辽宁省残联秘书长胡雅菊、商业城总经理刘丽',
            'color' => 'color-white',
            'bgColor' => 'e03854'
        )
    );
}

$result = array(
    'resCode' => 0,
    'data' => $dataItem,
    'message' => 'OK'
);
exit(json_encode($result));
?>