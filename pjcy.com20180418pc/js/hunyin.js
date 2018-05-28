/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-04-18 18:23:07
 * @version $Id$
 */
// 不幸婚姻
var unfortunateMarriageObject = $('.unfortunate_marriage li');
var unfortunateMarriageTimer = setInterval(function(){
    var o = unfortunateMarriageObject.filter('.active').next();
    if (!o.length) {
        o = unfortunateMarriageObject.first();
    }
    unfortunateMarriageFunc(o);
}, 3000);
var unfortunateMarriageFunc = function(o) {
    $(o).addClass('active').siblings('li').removeClass('active');
}
unfortunateMarriageObject.hover(function(){
    unfortunateMarriageFunc(this);
    clearInterval(unfortunateMarriageTimer);
}, function(){
    unfortunateMarriageTimer = setInterval(function(){
        var o = unfortunateMarriageObject.filter('.active').next();
        if (!o.length) {
            o = unfortunateMarriageObject.first();
        }
        unfortunateMarriageFunc(o);
    }, 3000);
});
// 错误方法
$('.mistake_method .slide-box').slide({control: '.mistake_method .control li', time: 3000, lazyload:true});
// 为行业提供材料
$('.offer-content .opus .item').slide({control: '.offer-content .opus .control li', time: 3000,lazyload:true});
// 导师滚动
$tutor = new supperSlider($('.team .tutor-list ul'), true);
$('.team .tutor-list .prev-btn').click(function(){
    $tutor.prev(180);
});
$('.team .tutor-list .next-btn').click(function(){
    $tutor.next(180);
});
// 感谢信切换
$('.client-thanks .letter').slide({control: '.client-thanks .letter .control li', time: 3000,lazyload:true});
// 锦旗
$jinqi = new supperSlider($('.client-present .container div ul'), true);
$('.client-present .container .prev-btn').click(function(){
    $jinqi.prev(286);
});
$('.client-present .container .next-btn').click(function(){
    $jinqi.next(215);
});
$('img[data-original], .lazyload').lazyload({
    threshold: 400,
    failure_limit: 25
});