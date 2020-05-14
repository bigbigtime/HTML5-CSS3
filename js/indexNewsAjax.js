
$.ajax({
    url: "./data/newsCategory.php",    //请求的url地址
    dataType: "json",   //返回格式为json
    async: false, //请求是否异步，默认为异步，这也是ajax重要特性
    cache: false, // 是否读取缓存
    timeout: 5000,  //设置超时
    data: JSON.stringify({
        module: 'news'
    }),    //参数值
    headers: { 
        'Content-Type': "application/json; charset=utf-8"
    }, 
    type: "POST",   //GET\POST
    success: function(req) {//请求成功时处理
        let tagMenu = document.getElementsByClassName('tab-menu')[0];
        let data = req.data
        let menuHtml = ''
        data.forEach((item, index) => {
            let className = ''
            if(index === 0) { className = 'current'; }
            menuHtml += `<a data-request="false" href="javascript: void(0);" onclick="loadNewsData({_this: this, id: ${item.id}, index: ${index}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
        })
        // 菜单
        tagMenu.innerHTML = menuHtml
        // 默认读了第一个分类的数据
        loadNewsData({_this: tagMenu.children[0], id: data[0].id, index: 0})
    },
    error: function(res) {
        //请求出错处理
    }
});

function loadNewsData(params){
    // 获取request标识，判断是否已请求成功数据，true为请求成功，false未请求
    let getRequest = params._this.getAttribute('data-request')
    // 获取内容区域
    let tabContentWrap = document.getElementById('tab-content-wrap').children;
    // 获取分类菜单
    let aItem = document.getElementsByClassName('tab-menu')[0].children;
    // 显示指定的内容区域
    for(let i = 0; i < tabContentWrap.length; i++){
        tabContentWrap[i].style.display = 'none'
    }
    tabContentWrap[params.index].style.display = 'block'
    // 分类高光
    // 清除所有的高光
    for(let i = 0; i < aItem.length; i++){ aItem[i].className = '' }
    // 当前栏目高光
    params._this.className = 'current';
    // 请求数据
    if(getRequest === 'true') { return false }
    $.ajax({
        url: "./data/indexNews.php",    //请求的url地址
        dataType: "json",   //返回格式为json
        timeout: 5000,  //设置超时
        data: JSON.stringify({
            categoryId: params.id
        }),    //参数值
        headers: { 
            'Content-Type': "application/json; charset=utf-8"
        }, 
        type: "POST",   //GET\POST
        success: function(req) {//请求成功时处理
            let data = req.data
            let itemHtml = `<div class="row-container gutter-15 index-news-list padding-top-73 padding-bottom-102"><div class="row-wrap">`
            data.forEach(item => {
                let time = item.time.split(' ');
                itemHtml += `<div class="col-item-3"><div class="item">
                                <div class="img-cover" style="background-image: url(${item.imgUrl})">
                                    <img src="images/blank/indexNews.png" alt="${item.title}" width="100%">
                                </div>
                                <div class="figure-content padding-top-24">
                                    <h4 class="title">${item.title}</h4>
                                    <time datatime="${item.time}" pubtime="${time[0]}">${time[0]}</time>
                                    <i class="line"></i>
                                    <p class="dec">${item.dec}</p>
                                    <a href="" class="link-more">
                                        查看更多
                                        <i class="iconfont icon-jiantou_xiangyou_o"></i>
                                    </a>
                                </div>
                            </div></div>`
            })
            itemHtml += `</div></div>`
            tabContentWrap[params.index].innerHTML = itemHtml
            //请求成功修改标识
            params._this.setAttribute('data-request', 'true')
        },
        error: function(res) {
            //请求出错处理
        }
    });
}