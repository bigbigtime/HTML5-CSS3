<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>手把手撸码前端</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./js/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./font/iconfont/iconfont.css">
</head>
<body>
    <!--头部-->
    <?php include('header.php');?>
    <!--幻灯片 start-->
    <div id="slide-wrap">
        <div class="slide-content">
            <ul class="clearfix">
                <li><img src="images/img.jpg" alt="手把手撸码前端" width="100%"/></li>
                <li><img src="images/img.jpg" alt="手把手撸码前端" width="100%"/></li>
                <li><img src="images/img.jpg" alt="手把手撸码前端" width="100%"/></li>
            </ul>
        </div>
        <ul class="slide-nav">
            <a href="javascript: void(0);" class="current"></a>
            <a href="javascript: void(0);"></a>
            <a href="javascript: void(0);"></a>
        </ul>
        <span class="slide-prev"><i class="iconfont icon-jiantou3"></i></span>
        <span class="slide-next"><i class="iconfont icon-jiantou"></i></span>
    </div>
    <!--幻灯片 end-->
    <div class="container">
        <!--朗朗口腔 start-->
        <section>
            <header>
                <div class="main-column padding-top-90 padding-bottom-70">
                    <h3>朗朗口腔</h3>
                    <p>
                        呵护牙齿健康  创造美好未来
                        <span></span>
                        care for teeth to create a better future
                    </p>
                </div>
            </header>
            <div class="info-list">
                <div id="infowListWrap"></div>
                <a href="" class="more-link">查看更多</a>
            </div>
        </section>
        <!--朗朗口腔 end-->

        <!--朗朗公益 start-->
        <section class="welfare">
            <header>
                <div class="main-column padding-top-53 padding-bottom-53">
                    <h3>朗朗公益</h3>
                    <p>
                        呵护牙齿健康  创造美好未来
                        <span></span>
                        care for teeth to create a better future
                    </p>
                </div>
            </header>
            <div class="welfare-wrap" id="welfareWrap"></div>
        </section>
        <!--朗朗公益 end-->
    </div>
    <!--医生模块 start-->
    <section class="doctor">
        <header class="hide">
            <div>
                <h3>朗朗医生</h3>
                <p>
                    呵护牙齿健康  创造美好未来
                    <span></span>
                    care for teeth to create a better future
                </p>
            </div>
        </header>
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic005.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic005.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic005.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div> -->
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
            <div class="p-r"><div class="swiper-pagination doctor-swiper-pagination"></div></div>
        </div>
    </section>
    <!--医生模块 end-->

    <!--资讯动态 start-->
    <div class="container">
        <section>
            <header>
                <div class="main-column padding-top-90 padding-bottom-40">
                    <h3>资讯动态</h3>
                    <p>
                        呵护牙齿健康  创造美好未来
                        <span></span>
                        care for teeth to create a better future
                    </p>
                </div>
            </header>
            <ul class="tab-menu"></ul>
            <!--行业动态-->
            <div id="tab-content-wrap">
                <div id="industry"></div>
                <!--朗朗资讯-->
                <div id="information" style="display: none;"></div>
                <!--媒体报道-->
                <div id="media" style="display: none;"></div>
                <!--公益活动-->
                <div id="welfare" style="display: none;"></div>
            </div>

            
        </section>
    </div>
    <!--资讯动态 end-->


    <?php include('footer.php');?>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper/js/swiper.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/indexNewsAjax.js"></script>
    <script src="js/doctorSwiper.js"></script>
    <script>
        loadingMsg({
            id: 'infowListWrap',
            message: '加载中'
        })
        $.ajax({
            url: "./data/index.php",    //请求的url地址
            dataType: "json",   //返回格式为json
            async: false, //请求是否异步，默认为异步，这也是ajax重要特性
            cache: false, // 是否读取缓存
            data: {
                categoryId: 123456
            },    //参数值
            type: "POST",   //GET\POST
            beforeSend: function() {},
            success: function(req) {//请求成功时处理
                let infoListWrap = document.getElementById('infowListWrap');
                // 判断数据是否存在
                if(!req.data || req.data.length === 0){ 
                    loadingMsg({
                        wrap: 'infowListWrap',
                        message: '当前数据为空'
                    })
                    return false
                }
                // 处理数据
                let ul = '<ul>'
                req.data.forEach(item => {
                    ul += `<figure>
                        <a href="newsDetail.php?id=${item.id}">
                        <img src="${item.imgUrl}" alt="${item.title}">
                        <figcaption>${item.title}</figcaption>
                        <p>${item.dec}</p>
                        </a>
                    </figure>`
                })
                ul += '</ul>'
                // 请求成功后，处理视图DOM渲染
                infoListWrap.innerHTML = ul
            },
            complete: function() {},
            error: function() {
                //请求出错处理
            }
        });

        $.ajax({
            url: "./data/index.php",    //请求的url地址
            dataType: "json",   //返回格式为json
            async: false, //请求是否异步，默认为异步，这也是ajax重要特性
            cache: false, // 是否读取缓存
            data: {
                module: 'welfare',
                categoryId: 10000
            },    //参数值
            type: "POST",   //GET\POST
            beforeSend: function() {},
            success: function(req) {//请求成功时处理
                let data = req.data
                let html = ''
                let welfareWrap = document.getElementById('welfareWrap');
                // 处理第一个
                html += `<div class="row">
                    <div class="content-flex">
                        <div class="content-flex-big">
                            <img src="${data[0].imgUrl}" alt="${data[0].title}">
                        </div>
                        <div class="content-flex-small" style="background-color: #${data[0].bgColor};">
                            <div class="content-dec">
                                <h4 class="title">${data[0].title}</h4>
                                <time datatime="${data[0].date}" pubdate="${data[0].date}">${data[0].date}</time>
                                <i class="line"></i>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`
                
                req.data.forEach((item, index) => {
                    if(index != 0) {
                        html += `
                        <div class="row">
                            <div class="content-flex">
                                <div class="content-flex-big ${item.color}" style="background-color: #${item.bgColor};">
                                    <div class="content-dec">
                                        <h4 class="title">${item.title}</h4>
                                        <time datatime="${item.date}" pubdate="${item.date}">${item.date}</time>
                                        <i class="line"></i>
                                        <p class="dec">${item.dec}</p>
                                        <a href="" class="link-more">
                                            查看更多
                                            <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-flex-small">
                                    <img src="${item.imgUrl}" alt="${item.title}">
                                </div>
                            </div>
                        </div>`
                    }
                })
                welfareWrap.innerHTML = html
                
            },
            complete: function() {},
            error: function() {
                //请求出错处理
            }
        });
    </script>
</body>
</html>