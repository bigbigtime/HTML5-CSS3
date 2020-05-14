// 获取滚动范围的对象
let slideWrap = document.getElementById('slide-wrap');
// 获取滚动的对象 [div]
let slideContent = slideWrap.getElementsByClassName('slide-content')[0];
// 获取图片对象[li, li, li].length
let liItem = slideContent.getElementsByTagName('li');
// 获取分页的按钮对象[a, a, a]
let aItem = slideWrap.getElementsByClassName('slide-nav')[0].getElementsByTagName('a');
// next按钮
let nextButton = slideWrap.getElementsByClassName('slide-next')[0];
let prevButton = slideWrap.getElementsByClassName('slide-prev')[0];
// 获取可视区宽度
let viewWidth = document.documentElement.clientWidth || document.body.clientWidth
// 当前的索引
let currentIndex = 0;
// 滚动关开标记
let flag = false
// 标记定时器
let flagTimer = null
// 自动播放的定时器
let autoTimer = null

// 设置滚动对象的宽度
slideContent.style.width = viewWidth * liItem.length +'px'
// 设置图片对象的宽度
for(let i = 0; i < liItem.length; i++){
    liItem[i].style.width = viewWidth +'px'
}
// 分页按钮的点击事件
// 谁触发的事件，this就指向谁
for(let i = 0; i < aItem.length; i++){
    aItem[i].onclick = function(){
        currentIndex = i
        slide(i)
    }
}
// 执行自动播放
autoPlay()
slideWrap.onmouseenter = function(){
    clearInterval(autoTimer)
}
slideWrap.onmouseleave = function(){
    if(autoTimer) { clearInterval(autoTimer) }
    autoPlay()
}
// nextButton事件
nextButton.onclick = function(){
    if(flag) { return false }
    flag = true
    next()
}
// prevButton事件
prevButton.onclick = function(){
    if(flag) { return false }
    flag = true
    prev()
}
// 自动播放
function autoPlay(){
    autoTimer = setInterval(function(){
        next()
    }, 5000)
}
// next
function next(){
    currentIndex++
    if(currentIndex == aItem.length) { currentIndex = 0 }
    slide(currentIndex)
}
// prev
function prev(){
    currentIndex--
    if(currentIndex < 0) { currentIndex = aItem.length - 1 }
    slide(currentIndex)
}

// 分页按钮高光切换
function toogleHigh(){
    for(let k = 0; k < aItem.length; k++) {
        aItem[k].className = ''
    }
    // [a, a, a]
    aItem[currentIndex].className = 'current'
}

// 滚动
function slide(number){
    let left = number * viewWidth;
    slideContent.style.left = -left + 'px'
    // 开启定时器
    flagTimer = setTimeout(function(){
        flag = false
        clearTimeout(flagTimer)
    }, 1000)
    toogleHigh()
}

/**
 * 0: 0 * viewWidth= 0
 * 1: 1 * viewWidth= 1903
 * 2: 2 * viewWidth= 3806
 * 3: 3 * viewWidth= 5709
 */