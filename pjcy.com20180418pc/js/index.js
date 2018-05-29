/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-04-18 18:23:07
 * @version $Id$
 */
// 随机数函数
Math.rand = function(n, m) {
    var len = m - n;
    return Math.floor(Math.random() * len + n);
};
// 浮窗跳动咨询人数跳动
var askTimes = Math.ceil((Date.parse( new Date()) - 1524315499000) / 10000);
$('.float-window .test-float-window span')[0].innerHTML = parseInt($('.float-window .test-float-window span')[0].innerHTML) + askTimes;
$('.float-window .test-float-window').mouseover(function(){
    var floatWindowAskTimer, _this = this;
    var floatWindowAskFunc = function() {
        $('span', _this)[0].innerHTML++;
    }
    floatWindowAskTimer = setInterval(floatWindowAskFunc, 80);
    setTimeout(function(){
        clearInterval(floatWindowAskTimer);
    }, 600);    
});
// 普通轮播图
$('.banner').slide({control: '.banner ul li', time: 4000});
$('.yewu .yewu-container').slide({control: '.yewu .yewu-container .controls li'});
// 旋转木马轮播
;(function($){
    var Caroursel = function (caroursel){
        var self = this;
        this.caroursel = caroursel;
        this.posterList = caroursel.find(".poster-list");
        this.posterItems = caroursel.find(".poster-item");
        this.firstPosterItem = this.posterItems.first();
        this.lastPosterItem = this.posterItems.last();
        this.prevBtn = this.caroursel.find(".poster-prev-btn");
        this.nextBtn = this.caroursel.find(".poster-next-btn");
        //默认参数
        this.setting = {
            "width":1000,
            "height":270,
            "posterWidth":640,
            "posterHeight":270,
            "scale":0.8,
            "speed":1000,
            "isAutoplay":true,
            "dealy":1000
        }
        //自定义参数与默认参数合并
        $.extend(this.setting,this.getSetting())
        //设置第一帧位置
        this.setFirstPosition();
        //设置剩余帧的位置
        this.setSlicePosition();
        //旋转
        this.rotateFlag = true;
        this.prevBtn.bind("click",function(){
            if(self.rotateFlag){
                self.rotateFlag = false;
                self.rotateAnimate("left")
            }
        });
        this.nextBtn.bind("click",function(){
            if(self.rotateFlag){
                self.rotateFlag = false;
                self.rotateAnimate("right")
            }
        });
        if(this.setting.isAutoplay){
            this.autoPlay();
            this.caroursel.hover(function(){clearInterval(self.timer)},function(){self.autoPlay()})
        }
    };
    Caroursel.prototype = {
        autoPlay:function(){
          var that = this;
          this.timer =  window.setInterval(function(){
              that.prevBtn.click();
          },that.setting.dealy)
        },
        rotateAnimate:function(type){
            var that = this;
            var zIndexArr = [];
            if(type == "left"){//向左移动
                this.posterItems.each(function(){
                   var self = $(this),
                    prev = $(this).next().get(0)?$(this).next():that.firstPosterItem,
                    width = prev.css("width"),
                    height = prev.css("height"),
                    zIndex = prev.css("zIndex"),
                    opacity = prev.css("opacity"),
                    left = prev.css("left"),
                    top = prev.css("top");
                    zIndexArr.push(zIndex);
                    self.animate({
                        "width":width,
                        "height":height,
                        "left":left,
                        "opacity":opacity,
                        "top":top,
                    },that.setting.speed,function(){
                        that.rotateFlag = true;
                    });
                });
                this.posterItems.each(function(i){
                    $(this).css("zIndex",zIndexArr[i]);
                });
            }
            if(type == "right"){//向右移动
                this.posterItems.each(function(){
                    var self = $(this),
                    next = $(this).prev().get(0)?$(this).prev():that.lastPosterItem,
                        width = next.css("width"),
                        height = next.css("height"),
                        zIndex = next.css("zIndex"),
                        opacity = next.css("opacity"),
                        left = next.css("left"),
                        top = next.css("top");
                        zIndexArr.push(zIndex);
                    self.animate({
                        "width":width,
                        "height":height,
                        "left":left,
                        "opacity":opacity,
                        "top":top,
                    },that.setting.speed,function(){
                        that.rotateFlag = true;
                    });
                });
                this.posterItems.each(function(i){
                    $(this).css("zIndex",zIndexArr[i]);
                });
            }
        },
        setFirstPosition:function(){
            this.caroursel.css({"width":this.setting.width,"height":this.setting.height});
            this.posterList.css({"width":this.setting.width,"height":this.setting.height});
            var width = (this.setting.width - this.setting.posterWidth) / 2;
            //设置两个按钮的样式
            // this.prevBtn.css({"width":width , "height":this.setting.height,"zIndex":Math.ceil(this.posterItems.size()/2)});
            // this.nextBtn.css({"width":width , "height":this.setting.height,"zIndex":Math.ceil(this.posterItems.size()/2)});
            this.firstPosterItem.css({
                "width":this.setting.posterWidth,
                "height":this.setting.posterHeight,
                "left":width,
                "zIndex":Math.ceil(this.posterItems.length/2),
                "top":this.setVertialType(this.setting.posterHeight)
            });
        },
        setSlicePosition:function(){
            var _self = this;
            var sliceItems = this.posterItems.slice(1),
                level = Math.floor(this.posterItems.length/2),
                leftItems = sliceItems.slice(0,level),
                rightItems = sliceItems.slice(level),
                posterWidth = this.setting.posterWidth,
                posterHeight = this.setting.posterHeight,
                Btnwidth = (this.setting.width - this.setting.posterWidth) / 2,
                gap = Btnwidth/level,
                containerWidth = this.setting.width;
            //设置左边帧的位置
            var i = 1;
            var leftWidth = posterWidth;
            var leftHeight = posterHeight;
            var zLoop1 = level;
            leftItems.each(function(index,item){
                leftWidth = leftWidth * _self.setting.scale;
                leftHeight = leftHeight*_self.setting.scale;
                $(this).css({
                    "width":leftWidth,
                    "height":leftHeight,
                    "left": Btnwidth - i*gap,
                    "zIndex":zLoop1--,
                    "opacity":1/(i-0.99),
                    "top":_self.setVertialType(leftHeight)
                });
                i++;
            });
            //设置右面帧的位置
            var j = 1;
            var zLoop2 = level;
            var rightWidth = posterWidth;
            var rightHeight = posterHeight;
            rightItems.each(function(index,item){
                rightWidth = rightWidth * _self.setting.scale;
                rightHeight = rightHeight * _self.setting.scale;
                $(this).css({
                    "width":rightWidth,
                    "height":rightHeight,
                    "left": containerWidth - ( Btnwidth - j*gap + rightWidth),
                    "zIndex":zLoop2--,
                    "opacity":1/(j-0.99),
                    "top":_self.setVertialType(rightHeight)
                });
                j++;
            });
        },
        getSetting:function(){
            var settting = this.caroursel.data("setting");
            if(settting.length > 0){
                return JSON.parse(settting);
            }else{
                return {};
            }
        },
        setVertialType:function(height){
            var algin = this.setting.algin;
            if(algin == "top") {
                return 0
            }else if(algin == "middle"){
                return (this.setting.posterHeight - height) / 2
            }else if(algin == "bottom"){
                return this.setting.posterHeight - height
            }else {
                return (this.setting.posterHeight - height) / 2
            }
        }
    }
    Caroursel.init = function (caroursels){
        caroursels.each(function(index,item){
            new Caroursel($(this));
        })  ;
    };
    window["Caroursel"] = Caroursel;
})(jQuery)
// 横向滚动
$.fn.extend({
    textScroll: function(params) {
        var opt = {
            // 滚动速度
            speed: 60,
        };
        this.each(function(){
            var $this = $(this);
            // 获取高度
            opt.height = this.clientHeight;

            $this.css('position', 'relative');
            $this.children().css('position', 'absolute');
            // 内容复制
            $this.children().append($this.children().html());
            this.textScrollOption = opt;

            var scrollEvent = function() {
                var _this = $this.children().eq(0);
                var top = parseInt(_this.css('top'));
                if (top <= $this[0].textScrollOption.height * -1) {
                    top = 0;
                }
                top -= 1;
                _this.css('top', top);
            }
            // 滚动
            this.textScrollTimer = setInterval(scrollEvent, opt.speed);

            $this.hover(function(){
                // 停止滚动
                clearInterval(this.textScrollTimer);
            }, function(){
                // 继续滚动
                this.textScrollTimer = setInterval(scrollEvent, this.textScrollOption.speed);
            });
        });
    }
});
$('.yewu .main-info').marquee({
    direction: "up", // 方向
    speed: 20,  // 滚动速度   , 
    duplicated: true, // 持续滚动
    gap: 0, // 连接间隙
    pauseOnHover: true, // 移入暂停
    duration: 10,
    startVisible: true,
});
// 旋转木马轮播
var carouselParms = {
    "width":1044,         //旋转木马的宽度
    "height":351,         //旋转木马的高度
    "posterWidth":536,    //当前显示的图片的宽度
    "posterHeight":351,   //当前显示的图片的高度
    "scale":0.85,          //缩放值
    "algin":"middle",     //对齐方式
    "speed":300,       //动画速度
    "isAutoplay":0,  //自动播放
    "dealy":4000        //延迟时间
};
Caroursel.init($('.carousel').data('setting', JSON.stringify(carouselParms)));

$mq = new supperSlider($('.teacher .preview ul'), true);
$('.teacher .preview .btn-prev').click(function(){
    $mq.prev(159);
});
$('.teacher .preview .btn-next').click(function(){
    $mq.next(159);
});
$('.teacher .preview ul li').mouseover(function(){
    var number = $(this).attr('teacher') || 1;
    $('.teacher .detail-list li').removeClass('active').eq(number-1).addClass('active');
    $(window).trigger('scroll.lazyload');
});
// 媒体报道移入浮动
$('.media-container li').hover(function(){
    $(this).css('z-index', $(this).css('z-index') * 20).addClass('active');
}, function(){
    $(this).css('z-index', $(this).css('z-index') / 20).removeClass('active');
});
$np = new supperSlider($('.small-newspaper ul'), true);
$('.small-newspaper .prev-btn').click(function(){
    $np.prev(153);
});
$('.small-newspaper .next-btn').click(function(){
    $np.next(153);
});
// 成功案例
$('.case-container').slide({control: '.case-container .case-list li',lazyload:true});
// 办公环境
$('.hj-box').slide({control: '.hj-box ul li',lazyload:true});
// 资料分享
$('.datashare .data-container').slide({control: '.data-container ul li',lazyload:true});
// 常见问题
$('.information .oq .question-list ul').marquee({
    direction: "up", // 方向
    speed: 8,  // 滚动速度   , 
    duplicated: true, // 持续滚动
    gap: 0, // 连接间隙
    pauseOnHover: true, // 移入暂停
    duration: 10,
    startVisible: true,
});
// 合作栏目
$md = new supperSlider($('.lm-container .lm-list ul'), true);
$('.lm-container .prev-btn').click(function(){
    $md.prev(138);
});
$('.lm-container .next-btn').click(function(){
    $md.next(138);
});

$('img[data-original], .lazyload').lazyload({
    threshold: 480,
    failure_limit: 17
});