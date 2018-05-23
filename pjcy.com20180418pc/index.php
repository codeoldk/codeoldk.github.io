<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>首页</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="css/common.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="top">
            <div class="container">
                破镜重圆公司--中国挽回爱情行业领导机构！
                <span class="top-nav">
                    <a href="">微信评估</a>
                    <a href="">爱情百科</a>
                    <a href="">在线咨询</a>
                    <a href="">网站地图</a>
                </span>
            </div>
        </div>
        <div class="header-logo container">
            <h1 class="logo">
                <a href="/" alt="深圳市破镜重圆文化传播有限公司" title="深圳市破镜重圆文化传播有限公司"></a>
            </h1>
            <span class="cctv-logo"></span>
            <span class="contact"></span>
            <span class="contact"></span>
        </div>
        <div class="header-nav container">
            <a href="">首页</a>
            <a href="">挽回爱情</a>
            <a href="">挽救婚姻</a>
            <a href="">追求真爱</a>
            <a href="">专家团队</a>
            <a href="">媒体报道</a>
            <a href="">成功案例</a>
            <a href="">情感咨询</a>
            <a href="">关于我们</a>
        </div>
        <div class="sidai"></div>
    </div>
    <div class="float-window">
        <div class="ask-advice">
            <a href="">
                <div class="small"></div>
                <img src="./imgs/float-window-advice.png" >
            </a>
        </div> 
    </div>
    <div class="banner">
        <a href="" class="slide"></a>
        <a href="" class="slide"></a>
        <a href="" class="slide"></a>
        <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="float-window">
        <div class="test-float-window">
            <div><img src="./imgs/index/test-float-window-small.png"></div>
            <div><a href=""><img src="./imgs/index/test-float-window.png"><p><span>673823</span>完成评估，获得免费咨询</p></a></div>
        </div>  
    </div>
    <div class="section2">
        <img class="container" src="./imgs/index/section2.png" />
    </div>
    <div class="section-media">
        <div class="mediapicture">
            <video controls poster="./imgs/index/mediacover.jpg" class="media">
                <source src="./video/media.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <?php
$viewSuccessCase = function()
{
    $hunyin = [
        // 10月
        -2 => '<li>10月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>10月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>10月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>10月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 11月
        -1 => '<li>11月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>11月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>11月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>11月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 12月
        0  => '<li>12月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>12月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>12月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>12月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        1  => '<li>1月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
        <li>1月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
        <li>1月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
        <li>1月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        2  => '<li>2月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>2月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>2月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>2月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        3  => '<li>3月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>3月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>3月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>3月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        4  => '<li>4月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>4月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>4月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>4月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        5  => '<li>5月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>5月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>5月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>5月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        6  => '',
        7  => '',
        8  => '',
        9  => '',
        10 => '',
        11 => '',
        12 => '',
    ];
    $aiqing = [
        // 10月
        -2 => '<li>10月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>10月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>10月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>10月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 11月
        -1 => '<li>11月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>11月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>11月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>11月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 12月
        0  => '<li>12月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>12月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>12月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>12月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        1  => '<li>1月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
        <li>1月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
        <li>1月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
        <li>1月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        2  => '<li>2月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>2月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>2月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>2月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        3  => '<li>3月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>3月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>3月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>3月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        4  => '<li>4月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>4月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>4月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>4月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        5  => '<li>5月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>5月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>5月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>5月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        6  => '',
        7  => '',
        8  => '',
        9  => '',
        10 => '',
        11 => '',
        12 => '',
    ];
    $zhenai = [
        // 10月
        -2 => '<li>10月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>10月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>10月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>10月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 11月
        -1 => '<li>11月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>11月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>11月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>11月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        // 12月
        0  => '<li>12月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>12月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>12月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>12月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        1  => '<li>1月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
        <li>1月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
        <li>1月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
        <li>1月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        2  => '<li>2月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>2月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>2月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>2月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        3  => '<li>3月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>3月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>3月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>3月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        4  => '<li>4月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>4月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>4月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>4月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        5  => '<li>5月1号&nbsp;&nbsp;&nbsp;&nbsp;王女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>
            <li>5月3号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功分离小三</li>
            <li>5月4号&nbsp;&nbsp;&nbsp;&nbsp;胡先生&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老婆</li>
            <li>5月15号&nbsp;&nbsp;&nbsp;&nbsp;李女士&nbsp;&nbsp;&nbsp;&nbsp;成功挽回老公</li>',
        6  => '',
        7  => '',
        8  => '',
        9  => '',
        10 => '',
        11 => '',
        12 => '',
    ];
    $month = date('n', time());
    // 获取前三个月
    return [
        implode('', array_slice($hunyin, $month - 1, 3)),
        implode('', array_slice($aiqing, $month - 1, 3)),
        implode('', array_slice($zhenai, $month - 1, 3)),
    ];
};
    list($hunyinScrollInfo, $aiqingScrollInfo, $zhenaiScrollInfo) = $viewSuccessCase();
?>
    <div class="yewu">
        <div class="bigtitle container"></div>
        <div class="yewu-container">
            <ul class="controls list-style-none">
                <li class="btn active"></li>
                <li class="btn"></li>
                <li class="btn"></li>
            </ul>
            <div class="slide yiduiyi">
                <div class="hunyin">
                    <div class="symbol">
                        成功<span>6</span><span>7</span><span>3</span><span>4</span><span>6</span>例
                    </div>
                    <div class="button">
                        <a href="" class="btn"></a>
                        <a href="" class="btn"></a>
                    </div>
                    <div class="scroll-info">
                        <div class="top-shadow mask"></div>
                        <div class="main-info">
                            <ul class="list-style-none">
                                <?php echo $hunyinScrollInfo; ?>
                            </ul>
                        </div>
                        <div class="bottom-shadow mask"></div>
                    </div>
                </div>
                <div class="aiqing">
                    <div class="symbol">
                        成功<span>4</span><span>8</span><span>2</span><span>4</span><span>5</span>例
                    </div>
                    <div class="button">
                        <a href="" class="btn"></a>
                        <a href="" class="btn"></a>
                    </div>
                    <div class="scroll-info">
                        <div class="top-shadow mask"></div>
                        <div class="main-info">
                            <ul class="list-style-none">
                                <?php echo $aiqingScrollInfo; ?>
                            </ul>
                        </div>
                        <div class="bottom-shadow mask"></div>
                    </div>
                </div>
                <div class="zhenai">
                    <div class="symbol">
                        成功<span>3</span><span>5</span><span>5</span><span>8</span><span>3</span>例
                    </div>
                    <div class="button">
                        <a href="" class="btn"></a>
                        <a href="" class="btn"></a>
                    </div>
                    <div class="scroll-info">
                        <div class="top-shadow mask"></div>
                        <div class="main-info">
                            <ul class="list-style-none">
                                <?php echo $zhenaiScrollInfo; ?>
                            </ul>
                        </div>
                        <div class="bottom-shadow mask"></div>
                    </div>
                </div>
            </div>
            <div class="slide jiaoxue">
                <div>
                    <img src="./imgs/index/yewu-jiaoxue-zhuiqiu.jpg">
                    <div class="content-list list-style-none">
                        <ul>
                            <li>• 追求基础课程</li>
                            <li>• 吸引力建设</li>
                            <li>• 恋爱等级提升</li>
                            <li>• 约会法则</li>
                            <li>• 关系升级指南</li>
                            <li>&nbsp;&nbsp;......</li>
                        </ul>
                        <div class="zixunbtn">
                            <a href="">男性咨询按钮</a>
                            <a href="">女性咨询按钮</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./imgs/index/yewu-jiaoxue-lianai.jpg">
                    <div class="content-list list-style-none">
                        <ul>
                            <li>• 恋爱基础课程</li>
                            <li>• 矛盾化解</li>
                            <li>• 情敌防治学</li>
                            <li>• 最佳相处模式</li>
                            <li>• 婚前注意事项</li>
                            <li>&nbsp;&nbsp;......</li>
                        </ul>
                        <div class="zixunbtn">
                            <a href="">男性咨询按钮</a>
                            <a href="">女性咨询按钮</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./imgs/index/yewu-jiaoxue-hunyin.jpg">
                    <div class="content-list list-style-none">
                        <ul>
                            <li>• 婚姻基础课程</li>
                            <li>• 婆媳关系</li>
                            <li>• 恩爱模型</li>
                            <li>• 小三防治</li>
                            <li>• 角色定位</li>
                            <li>&nbsp;&nbsp;......</li>
                        </ul>
                        <div class="zixunbtn">
                            <a href="">男性咨询按钮</a>
                            <a href="">女性咨询按钮</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./imgs/index/yewu-jiaoxue-peixun.jpg">
                    <div class="content-list list-style-none">
                        <ul>
                            <li>• 分析师课程</li>
                            <li>• 导师课程</li>
                            <li>• 专家课程</li>
                            <li>• 总监课程</li>
                        </ul>
                        <div class="zixunbtn">
                            <a href="">男性咨询按钮</a>
                            <a href="">女性咨询按钮</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide zhichi">
                <img src="./imgs/index/yewu-zhichi.png">
            </div>
            <div class="bgbuchang"></div>
        </div>
    </div>
    <div class="cctv-specialist">
        <div class="bigtitle container"></div>
        <p class="description">行业唯一受邀担任CCTV情感专家团队</p>
        <div class="show-container poster-main container carousel">
            <ul class="poster-list list-style-none">
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist1.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist2.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist3.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist4.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist5.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist6.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist7.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist8.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist9.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist10.jpg"/>
                </li>
                <li class="poster-item">
                    <img src="./imgs/index/cctv-specialist11.jpg"/>
                </li>
            </ul>
            <div class="btn poster-prev-btn"><span></span></div>
            <div class="btn poster-next-btn"><span></span></div>
        </div>
    </div>
    <div class="bigtitle teacher-title"></div>
    <div class="teacher">
        <ul class="detail-list list-style-none">
            <li class="active">
                <img src="./imgs/index/teachers/teacher1.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher2.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher3.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher4.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher5.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher6.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher7.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher8.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher9.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher10.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
            <li>
                <img src="./imgs/index/teachers/teacher11.png" alt="" class="person-photo" />
                <div class="symbol">
                    <img src="./imgs/index/teachers/symbol1.jpg" />
                </div>
                <div class="detail">
                    <h5>康纳 <span>婚姻挽回行业创始人</span></h5>
                    <p>培训出国内第一批实战挽回爱情导师</p>
                    <p>创立了“二次吸引学”、“情感操控学”等行业技术标杆</p>
                    <p>多次受邀参与CCTV《乡约》节目担任情感专家</p>
                    <p>曾登上《北京晚报》、《南方日报》、《South China</p>
                </div>
            </li>
        </ul>
        <div class="preview container">
            <div class="btn btn-prev"></div>
            <div class="thumb-list">
                <ul class="list-style-none">
                    <li teacher="1">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher1.png" class="thumb">
                    </li>
                    <li teacher="2">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher2.png" class="thumb">
                    </li>
                    <li teacher="3">
                        <img src="./imgs/index/teachers/teacher3.png" class="thumb">
                    </li>
                    <li teacher="4">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher4.png" class="thumb">
                    </li>
                    <li teacher="5">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher5.png" class="thumb">
                    </li>
                    <li teacher="6">
                        <img src="./imgs/index/teachers/teacher6.png" class="thumb">
                    </li>
                    <li teacher="7">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher7.png" class="thumb">
                    </li>
                    <li teacher="8">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher8.png" class="thumb">
                    </li>
                    <li teacher="9">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher9.png" class="thumb">
                    </li>
                    <li teacher="10">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher10.png" class="thumb">
                    </li>
                    <li teacher="11">
                        <p class="cctv-symbol"></p>
                        <img src="./imgs/index/teachers/teacher11.png" class="thumb">
                    </li>
                </ul>
            </div>
            <div class="btn btn-next"></div>
        </div>
    </div>
    <div class="bigtitle media-title"></div>
    <div class="media-container">
        <ul class="bignewspaper container list-style-none">
            <li style="top:56px;left: 143px;z-index: 1;"><a href=""><img src="./imgs/index/newspapers/newspaper1.jpg"><span></span></a></li>
            <li style="top:213px;left: 175px;z-index: 2;"><a href=""><img src="./imgs/index/newspapers/newspaper2.jpg"><span></span></a></li>
            <li style="top:90px;left: 510px;z-index: 3;"><a href=""><img src="./imgs/index/newspapers/newspaper3.jpg"><span></span></a></li>
            <li style="top: 133px;left: 133px;z-index: 4;"><a href=""><img src="./imgs/index/newspapers/newspaper4.jpg"><span></span></a></li>
            <li style="top: 44px;left: 312px;z-index: 5;"><a href=""><img src="./imgs/index/newspapers/newspaper5.jpg"><span></span></a></li>
            <li style="top: 325px;left: 284px;z-index: 6;"><a href=""><img src="./imgs/index/newspapers/newspaper6.jpg"><span></span></a></li>
            <li style="top: 62px;left: 496px;z-index: 7;"><a href=""><img src="./imgs/index/newspapers/newspaper7.jpg"><span></span></a></li>
            <li style="top: 47px;left: 670px;z-index: 8;"><a href=""><img src="./imgs/index/newspapers/newspaper8.jpg"><span></span></a></li>
            <li style="top: 66px;left: 838px;z-index: 9;"><a href=""><img src="./imgs/index/newspapers/newspaper9.jpg"><span></span></a></li>
            <li style="top: 302px;left: 476px;z-index: 10;"><a href=""><img src="./imgs/index/newspapers/newspaper10.jpg"><span></span></a></li>
            <li style="top: 288px;left: 834px;z-index: 11;"><a href=""><img src="./imgs/index/newspapers/newspaper11.jpg"><span></span></a></li>
            <li style="top: 229px;left: 707px;z-index: 12;"><a href=""><img src="./imgs/index/newspapers/newspaper12.jpg"><span></span></a></li>
        </ul>
        <div class="small-newspaper container">
            <div class="btn prev-btn"></div>
            <div class="thumb-box">
                <ul>
                    <li bignewspaper="1">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb1.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="2">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb2.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="3">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb3.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="4">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb4.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="5">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb5.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="6">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb6.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="7">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb7.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="8">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb8.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="9">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb9.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="10">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb10.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="11">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb11.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                    <li bignewspaper="12">
                        <a href=""><img src="./imgs/index/newspapers/newspaper-thumb12.jpg" />
                        <p></p>
                        <div class="cover"><span></span></div></a>
                    </li>
                </ul>
            </div>
            <div class="btn next-btn"></div>
        </div>
    </div>
    <div class="case-title bigtitle"></div>
    <div class="success-case">
        <div class="case-container container">
            <ul class="case-list list-style-none">
                <li style="top: 70px; left: 95px;" class="small">
                    <img src="./imgs/index/case/case1.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case1.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 168px; left: 22px;" class="small">
                    <img src="./imgs/index/case/case2.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case2.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 235px; left: 107px;">
                    <img src="./imgs/index/case/case3.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case3.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 355px; left: 42px;" class="small">
                    <img src="./imgs/index/case/case4.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case4.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 383px; left: 201px;">
                    <img src="./imgs/index/case/case5.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case5.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 335px; left: 368px;" class="large active">
                    <img src="./imgs/index/case/case6.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case6.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 414px; left: 503px;" class="small">
                    <img src="./imgs/index/case/case7.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case7.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 333px; left: 623px;">
                    <img src="./imgs/index/case/case8.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case8.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 382px; left: 781px;">
                    <img src="./imgs/index/case/case9.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case9.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 409px; left: 940px;">
                    <img src="./imgs/index/case/case10.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case10.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 294px; left: 970px;">
                    <img src="./imgs/index/case/case11.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case11.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 173px; left: 1071px;" class="large">
                    <img src="./imgs/index/case/case12.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case12.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
                <li style="top: 77px; left: 967px;" class="small">
                    <img src="./imgs/index/case/case13.jpg" />
                    <div class="case-detail">
                        <img src="./imgs/index/case/case13.jpg" />
                        <div class="case">
                            <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                            <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                            <a href="" class="lg-gold">查看详情</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="case-detail">
                <img src="./imgs/index/case/case6.jpg" />
                <div class="case">
                    <h6>感谢破镜重圆公司，帮我挽回老公的心</h6>
                    <p>我和老公当初是朋友介绍在一起的。刚结婚的时候，我们还是很甜蜜。他平均每个星期都会给我一个惊喜，有时是下班给我带朵花，有时是带我去一些聚会玩，虽然都是很平常的事情，但每次我都很开心，很满足...</p>
                    <a href="" class="lg-gold">查看详情</a>
                </div>
            </div>
        </div>
    </div>
    <div class="huanjing">
        <div class="hj-container">
            <div class="bigtitle"></div>
            <div class="hj-box">
                <ul class="controls list-style-none">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
                <img src="./imgs/index/office-guangzhou.jpg" class="slide">
                <img src="./imgs/index/office-shenzhen.jpg" class="slide">
                <img src="./imgs/index/office-zhaoqing.jpg" class="slide">
            </div>
        </div>
        <div class="style-buchang"></div>
    </div>
    <div class="datashare">
        <div class="title smalltitle container">
            <span></span>
            <span>资料分享</span>
            <span></span>
        </div>
        <div class="data-container container">
            <ul class="controls list-style-none container">
                <li class="active">婚姻资料 <span class="sanjiao"></span></li>
                <li>恋爱资料 <span class="sanjiao"></span></li>
                <li>挽回资料 <span class="sanjiao"></span></li>
                <li>案例分享 <span class="sanjiao"></span></li>
                <li>外遇防治 <span class="sanjiao"></span></li>
            </ul>
            <div class="slide">
                <div class="type-list">
                    <img src="./imgs/index/datashare/hunyin1.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/hunyin2.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/hunyin3.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
            </div>
            <div class="slide">
                <div class="type-list">
                    <img src="./imgs/index/datashare/lianai1.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/lianai2.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/lianai3.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
            </div>
            <div class="slide">
                <div class="type-list">
                    <img src="./imgs/index/datashare/wanhui1.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/wanhui2.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/wanhui3.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
            </div>
            <div class="slide">
                <div class="type-list">
                    <img src="./imgs/index/datashare/anli1.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/anli2.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/anli3.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
            </div>
            <div class="slide">
                <div class="type-list">
                    <img src="./imgs/index/datashare/waiyv1.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/waiyv2.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
                <div class="type-list">
                    <img src="./imgs/index/datashare/waiyv3.jpg" />
                    <div class="article-list">
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                        <a href="">【求爱艺术】 分手后该怎么办</a>
                    </div>
                    <a class="more">查看更多&gt;&gt;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="information">
        <div class="title smalltitle container">
            <span></span>
            <span>资讯中心</span>
            <span></span>
        </div>
        <div class="container">
            <div class="content-box shadow">
                <div class="first">
                    <img src="./imgs/index/information.jpg" />
                    <div>
                        <h5>法国姑娘登《乡约》觅偶 情感专家支招洋妞怎么追</h5>
                        <p>昨天，第八届粤港万人相亲节在广东东莞观音山国家森林公园举行。央视相亲节目《乡约》栏目组再次走进观音山，组织了一场别样的“中外相亲”</p>
                        <a href="" class="seemore">[查看详情]</a>
                    </div>
                </div>
                <ul class="list-style-none">
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                </ul>
                <ul class="list-style-none">
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                    <li>
                        <p>企业活动 | 2015-32-02</p>
                        <h6><a href="">法国姑娘登《乡约》觅偶 情感专家支招洋妞.</a></h6>
                    </li>
                </ul>
                <a href="" class="seemore">查看更多&gt;&gt;</a>
            </div>
            <div class="oq shadow">
                <h5>常见问题</h5>
                <div class="question-list">
                    <div class="mask top"></div>
                    <ul class="list-style-none">
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                        <li>
                            <p class="q">
                                <span>问：</span><span>我感觉TA对我的感情越来越淡了，你们    帮助我挽回之后，我们...</span>
                            </p>
                            <p class="a">
                                <span>答：</span><span>相对于挽回，长期关系处理更是我们的优势，我们的导师每一.....</span>
                            </p>
                        </li>
                    </ul>
                    <div class="mask bottom"></div>
                </div>
                <a href="" class="seemore">查看更多&gt;&gt;</a>
            </div>
        </div>
    </div>
    <div class="hzlm">
        <div class="title smalltitle container">
            <span></span>
            <span>合作栏目</span>
            <span></span>
        </div>
        <div class="lm-container container">
            <div class="btn prev-btn"></div>
            <div class="lm-list">
                <ul>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu1.jpg" />
                        <p>CCTV乡约</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu2.jpg" />
                        <p>法治中国</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu3.jpg" />
                        <p>完美约会</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu4.jpg" />
                        <p>社会纵横</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu5.jpg" />
                        <p>今日一线</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu6.jpg" />
                        <p>法治时空</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu7.jpg" />
                        <p>新闻晚高峰</p>
                    </li>

                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu8.jpg" />
                        <p>城市发现</p>
                    </li>

                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu9.jpg" />
                        <p>睩睩生活圈</p>
                    </li>

                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu10.jpg" />
                        <p>城市话题</p>
                    </li>

                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu11.jpg" />
                        <p>郑州大民生</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu12.jpg" />
                        <p>新闻故事会</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu13.jpg" />
                        <p>今日关注</p>
                    </li>
                    <li>
                        <img src="./imgs/index/hezuolanmu/hezuolanmu14.jpg" />
                        <p>都市路路通</p>
                    </li>
                </ul>
            </div>
            <div class="btn next-btn"></div>
        </div>
    </div>
    <div class="bottom-nav">
        <div class="container">
            <a href="">首页</a>
            <a href="">挽回爱情</a>
            <a href="">挽救婚姻</a>
            <a href="">追求真爱</a>
            <a href="">成功案例</a>
            <a href="">媒体报道</a>
            <a href="">常见问题</a>
            <a href="">情感咨询</a>
            <a href="">关于我们</a>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="pinpai"></div>
            <div class="website">
                <a href="">联系电话：400-040-1399</a>
                <a href="">破镜重圆官方网站：www.vippua.com</a>
                <a href="">挽回学院网站：www.puaok.com </a>
                <a href="">疑爱答网站：www.yiaida.com</a>
                <a href="">地址：</a>
            </div>
            <div class="qrcode">
                <div>
                    <img src="./imgs/qrcode-weixin">
                    <p>官方微信公众号</p>
                </div>
                <div>
                    <img src="./imgs/qrcode-weibo">
                    <p>官方微博</p>
                </div>
                <div>
                    <img src="./imgs/qrcode-connor">
                    <p>康纳微博</p>
                </div>
            </div>
            <div class="hr"></div>
            <p class="copyright">镜重圆版权所有&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;粤ICP备13023379号</p>
            <div class="link">友情链接: 
                <a href="">北京晚报</a>
                <a href="">深圳晚报</a>
                <a href="">纽约时报</a>
                <a href="">南华早报</a>
                <a href="">新快报</a>
                <a href="">羊城晚报</a>
                <a href="">南方日报</a>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>