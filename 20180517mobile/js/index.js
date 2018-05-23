/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-04-18 18:23:07
 * @version $Id$
 */
var swiper = new Swiper('.box.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
});
// 评论内容显示和隐藏
$('.evaluation li').click(function(){
    var firstspan = $('.content span:first', this);
    if (firstspan.css('display') == 'none') {
        // 隐藏
        firstspan.show();
        $('.content span:last', this).hide();
    } else {
        // 显示
        firstspan.hide();
        $('.content span:last', this).show();
    }
});
var tutorSlide = new Swiper('.tutor .swiper-container', {
    slidesPerView: 'auto',
    navigation: {
        nextEl: '.tutor .swiper-button-next',
        prevEl: '.tutor .swiper-button-prev',
    },
    loop: true,
});
$('.tutor .swiper-wrapper>li').click(function(){
    var index = $(this).data('swiper-slide-index');
    $('.tutor .t .detail>li').css('display', 'none').eq(index).css('display', 'block');
});
// logo报纸显隐藏
$('.newspaper-logo div').click(function(){
    $(this).parent().siblings('.newspaper-detail').show().find('img').attr('src', './imgs/newspapers/'+$(this).data('newspaper'));
});
$('.newspaper-detail').click(function(){$(this).hide();});
var mediaSlide = new Swiper('.media .swiper-container', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.media .swiper-button-next',
        prevEl: '.media .swiper-button-prev',
    },
    pagination: {
        el: '.zixun .page',
        clickable: true,
        bulletClass: 'bullet',
        bulletActiveClass: 'active',
        renderBullet: function(i, n) {
            return '<li class="'+n+'"><div></div></li>';
        }
      },
    loop: true,
});
var covenSlide = new Swiper('.coenv .swiper-container', {
    spaceBetween: 10,
    pagination: {
        el: '.coenv .page',
        clickable: true,
        bulletClass: 'bullet',
        bulletActiveClass: 'active',
        renderBullet: function(i, n) {
            return '<li class="'+n+'"><div></div></li>';
        }
      },
    loop: true,
});
// 浮动窗口
setTimeout(function(){
    var dialog = $('.float-window .dialog').show();
    dialog.children('.close').click(function(){
        dialog.hide();
        setTimeout(function(){
            dialog.show();
        }, 10000);
    });
}, 500);