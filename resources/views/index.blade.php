<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords" content="小哈虎，网站开发，app开发，微信开发" />
    <meta name="description" content="">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/ui/jquery-1.8.2.min.js') }}"></script>
    <script src="{{ asset('js/ui/switch.js') }}"></script>
    <script src="{{ asset('js/ui/js.js') }}"></script>
    <style>
        html{overflow: hidden;}
    </style>
</head>
<body>
<!-- <div class="fixed_r">
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div> -->
<div class="head">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="小哈虎科技经验丰富,公司专注于高品质网站建设,网站制作,企业网站建设,App开发，微信公众号、小程序开发,提供权威专业的互联网品牌网站建设与策划,鼎力为客户提供优质的建站服务"/>
    </a>
    <ul>
        <li><a href="{{ url('/') }}" class="active">首页<br /><span>首页</span></a></li>
        <li class="nav_num1"><a>服务<br /><span>服务</span></a></li>
        <li class="nav_num2"><a>案例<br /><span>案例</span></a></li>
        <li class="nav_num4"><a>需求<br /><span>x需求</span></a></li>
        <li class="nav_num3"><a>动态<br /><span>动态</span></a></li>
        <li class="nav_num5"><a>客户<br /><span>客户</span></a></li>
        <li class="nav_num6"><a>联系<br /><span>联系</span></a></li>
        <li class="nav_num7"><a href="{{ url('/forums') }}">社区<br /><span>社区</span></a></li>
    </ul>
    <div class="hotline">
        <img src="{{ asset('images/telb.png') }}" alt="" />
        <span>18052976059</span>
    </div>
    <div class="xiangying_nav"></div>
</div>
<script>
    $('.head ul li a').hover(function(){
        $(this).stop().animate({'margin-top':'-30px'},200)
    },function(){
        $(this).stop().animate({'margin-top':'0px'},200)
    })
</script>
<div class=" header">
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/logow.png') }}" alt="小哈虎科技网站建设经验丰富,公司专注于高品质网站建设,北京网站制作,企业网站建设,提供权威专业的互联网品牌网站建设与策划,鼎力为客户提供优质的建站服务"/>
    </a>
    <ul>
        <li><a href="{{ url('/') }}" class="active">首页<br /><span>首页</span></a></li>
        <li class="nav_num1"><a>服务<br /><span>服务</span></a></li>
        <li class="nav_num2"><a>案例<br /><span>案例</span></a></li>
        <li class="nav_num4"><a>需求<br /><span>需求</span></a></li>
        <li class="nav_num3"><a>动态<br /><span>动态</span></a></li>
        <li class="nav_num5"><a>客户<br /><span>客户</span></a></li>
        <li class="nav_num6"><a>联系<br /><span>联系</span></a></li>
        <li class="nav_num7"><a href="{{ url('/forums') }}">社区<br /><span>社区</span></a></li>
    </ul>
    <div class="hotline">
        <img src="{{ asset('images/telw.png') }}" alt="" />
        <span>18052976059</span>
    </div>
    <div class="xiangying_nav"></div>
</div>

<script>
    $(function(){
        $('.xiangying_nav').toggle(
                function(){
                    $('.head ul,.header ul').css('right','0')
                },
                function(){
                    $('.head ul,.header ul').css('right','-67px')
                }
        )
    })
    $('.header ul li a').hover(function(){
        $(this).stop().animate({'margin-top':'-30px'},200)
    },function(){
        $(this).stop().animate({'margin-top':'0px'},200)
    })
</script>
<div class="num_box">
    <div class="num" id="num_0">
        <div class="mask">
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul><li></li><li></li><li></li></ul>
                </div>
                <div class="bd">
                    <ul>

                        <li class="banner1">
                            <div class="fangan" id="a3">
                                <hgroup>
                                    <h3><span>Enterprise Brand Solutions</span></h3>
                                    <h2><span>企业品牌全方位解决方案</span></h2>
                                    <h6></h6>
                                    <h4><span>网站开发 - App开发 - 网站定制 - 微信开发</span></h4>
                                    <h5><a href="list-case.html">更多</a></h5>
                                </hgroup>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="fengxian" id="a1">
                                    <div>
                                        <img src="{{ asset('images/fengxian.png') }}" alt="" />
                                        <hgroup>
                                            <h3>零风险保证</h3>
                                            <h2>设计--满意为止</h2>
                                            <h4>Satisfied Web Design</h4>
                                        </hgroup>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="banner3">
                            <div class="six" id="a2">
                                <div>
                                    <img src="{{ asset('images/six2.png') }}" alt="" class="sixb" />
                                    <img src="{{ asset('images/six1.png') }}" alt="" class="sixa" />
                                    <hgroup>
                                        <h3>全方位服务<br />灵活掌握项目进程</h3>
                                        <h2>6对1</h2>
                                        <h4>环绕形团队 专业图文上传<br />Six To One Service &amp; Upload Data
                                        </h4>
                                    </hgroup>
                                </div>
                            </div>
                            <div class="another">

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <script src="{{ asset('js/ui/jquery.SuperSlide.2.1.1.js')}}"></script>
            <script type="text/javascript">
                // 轮播
                $(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true,
                    startFun:function(i,c){
                        del();
                        // switch(i){
                        //       case 0:
                        //           break;
                        //       case 1:
                        //           $("#a1").addClass('animation1');
                        //           break;
                        //       case 2:
                        //           $("#a2").addClass('animation2');
                        //           break;
                        //       case 3:
                        //           $(".banner1 #a3").addClass('animation3');
                        //           break;
                        //       default:break;
                        //     }
                        switch(i){
                            case 0:
                                $(".banner1 #a3").addClass('animation3');
                                break;
                            case 1:
                                $("#a1").addClass('animation1');
                                break;
                            case 2:
                                $(".banner3 #a2").addClass('animation2');
                                $(".banner3 .another").addClass('animation2_1');
                                break;
                            default:break;
                        }
                    }
                });
            </script>
            <script src="{{ asset('js/ui/jquery.easing.min.js')}}" type="text/javascript"></script>
            <script src="{{ asset('js/ui/banner-1.js')}}"></script>
        </div>
    </div>
    <div class="num" id="num_1">
        <div class="server">
            <ul class="server_ul">
                <li>
                    <div class="server_cont">
                        <div class="server_img server_img1">
                            <img src="{{ asset('images/diannao1.png') }}" alt="" class="sho"/>
                            <img src="{{ asset('images/diannao.png') }}" alt="" class="hid"/>
                        </div>
                        <p>企业官网</p>
                        <div class="server_intro">
                            打造高端网站与客户游览体验相
                            结合的网站。
                        </div>
                    </div>
                    <div class="server_mask">
                        <div class="server_mask_div"></div>
                    </div>
                    <img src="{{ asset('images/serv1.png') }}" alt="" />
                </li>
                <li>
                    <div class="server_cont">
                        <div class="server_img server_img2">
                            <img src="{{ asset('images/weixin.png') }}" alt=""  class="sho"/>
                            <img src="{{ asset('images/weixin1.png') }}" alt="" class="hid"/>
                        </div>
                        <p>营销型网站</p>
                        <div class="server_intro">
                            数十项搜索引擎优化指标，
                            让网站变成营销利器
                        </div>
                    </div>
                    <div class="server_mask">
                        <div class="server_mask_div"></div>
                    </div>
                    <img src="{{ asset('images/serv2.png') }}" alt="" />
                </li>
                <li>
                    <div class="server_cont">
                        <div class="server_img server_img3">
                            <img src="{{ asset('images/pingban.png') }}" alt=""  class="sho"/>
                            <img src="{{ asset('images/pingban1.png') }}" alt="" class="hid"/>
                        </div>
                        <p>手机网站</p>
                        <div class="server_intro">
                            抢占移动互联网，
                            领先竞争对手
                        </div>
                    </div>
                    <div class="server_mask">
                        <div class="server_mask_div"></div>
                    </div>
                    <img src="{{ asset('images/serv3.png') }}" alt="" />
                </li>
                <li>
                    <div class="server_cont">
                        <div class="server_img">
                            <img src="{{ asset('images/dp.png') }}" alt=""  class="sho"/>
                            <img src="{{ asset('images/dp1.png') }}" alt="" class="hid"/>
                        </div>
                        <p>H5/响应式</p>
                        <div class="server_intro">
                            一站适配PC/IPAD/手机，
                            引领潮流。
                        </div>
                    </div>
                    <div class="server_mask">
                        <div class="server_mask_div"></div>
                    </div>
                    <img src="{{ asset('images/serv4.png') }}" alt="" />
                </li>
                <li>
                    <div class="server_cont">
                        <div class="server_img">
                            <img src="{{ asset('images/pingban.png') }}" alt=""  class="sho"/>
                            <img src="{{ asset('images/pingban1.png') }}" alt="" class="hid"/>
                        </div>
                        <p>App开发</p>
                        <div class="server_intro">
                            安卓、IOS原生App开发，为您
                            的品牌不懈努力。
                        </div>
                    </div>
                    <div class="server_mask">
                        <div class="server_mask_div"></div>
                    </div>
                    <img src="{{ asset('images/serv3.png') }}" alt="" />
                </li>
            </ul>
        </div>
    </div>
    <script>
        $('.server ul li').hover(function(){
            $(this).find('.server_mask').stop().animate({height:'100%'},'slow')
        },function(){
            $(this).find('.server_mask').stop().animate({height:'0%'})
        })
    </script>
    <div class="num" id="num_2">
        <div class="case">
            <div class="case-top width_1000">
                <div class="case-top-left">
                    <p class="case-top-left-top">Our Works</p>
                    <p class="case-top-left-bottom">有追求，有坚持</p>
                </div>
                <div class="case-top-right">
                    <span></span><sup>+</sup>
                </div>
            </div>
            <div class="case_ul_wrap">
                <ul class="case_ul">
                    <li>
                        <a href="">
                            <div class="show">
                                <img src="{{ asset('images/icons.png') }}" alt="" />
                            </div>
                            <img src="{{ asset('images/case01.jpg') }}" alt="" />
                            <div class="auto">
                                <h4>鄂尔多斯双丰羊毛</h4>
                                <span>上市公司、官方网站、欧美风格</span>
                                <div class="auto_mask"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="case_ul">
                    <li>
                        <a href="">
                            <div class="show">
                                <img src="{{ asset('images/icons.png') }}" alt="" />
                            </div>
                            <img src="{{ asset('images/case02.jpg') }}" alt="" />
                            <div class="auto">
                                <h4>鄂尔多斯双丰羊毛</h4>
                                <span>上市公司、官方网站、欧美风格</span>
                                <div class="auto_mask"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="case_ul">
                    <li>
                        <a href="">
                            <div class="show">
                                <img src="{{ asset('images/icons.png') }}" alt="" />
                            </div>
                            <img src="{{ asset('images/case03.jpg') }}" alt="" />
                            <div class="auto">
                                <h4>鄂尔多斯双丰羊毛</h4>
                                <span>上市公司、官方网站、欧美风格</span>
                                <div class="auto_mask"></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="teachshow xiangying_anli">
                <div id="teach" class="mr_frbox1">
                    <img class="mr_frBtnL prev" src="{{ asset('images/prev.png') }}">
                    <div class="mr_frUl1">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="show">
                                        <img src="{{ asset('images/icons.png') }}" alt="" />
                                    </div>
                                    <img src="{{ asset('images/case03.jpg') }}" alt="" />
                                    <div class="auto">
                                        <h4>鄂尔多斯双丰羊毛</h4>
                                        <span>上市公司、官方网站、欧美风格</span>
                                        <div class="auto_mask"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="show">
                                        <img src="{{ asset('images/icons.png') }}" alt="" />
                                    </div>
                                    <img src="{{ asset('images/case01.jpg') }}" alt="" />
                                    <div class="auto">
                                        <h4>鄂尔多斯双丰羊毛</h4>
                                        <span>上市公司、官方网站、欧美风格</span>
                                        <div class="auto_mask"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="show">
                                        <img src="{{ asset('images/icons.png') }}" alt="" />
                                    </div>
                                    <img src="{{ asset('images/case02.jpg') }}" alt="" />
                                    <div class="auto">
                                        <h4>鄂尔多斯双丰羊毛</h4>
                                        <span>上市公司、官方网站、欧美风格</span>
                                        <div class="auto_mask"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <img class="mr_frBtnR next" src="{{ asset('images/next.png') }}">
                </div>
            </div>
            <script language="javascript">
                jQuery(".mr_frbox1").slide({titCell:"",mainCell:".mr_frUl1 ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
            </script>





            <div class="case-bottm"><a href="" style="display:block;width:100%;height:100%;"></a></div>
        </div>
    </div>
    <div class="num" id="num_3">

        <div class="fangan">
            <hgroup>
                <h5><a href="">提交项目需求</a></h5>
            </hgroup>
        </div>
    </div>
    <script language="javascript">
        jQuery(".mr_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
    </script>
    <div class="num" id="num_4">
        <div class="news">
            <div class="news-cont width_1000">
                <div class="title news-title" >
                    <img src="{{ asset('images/news.png') }}" alt=""/>
                </div>
            </div>
            <div class="news-list">
                <a href="">
                    <img src="{{ asset('images/news1.jpg') }}" alt="" />
                    <div>
                        <span>09/<sub>Oct</sub></span>
                        <p>新闻标题</p>
                    </div>
                </a>
                <a href="">
                    <img src="{{ asset('images/news2.jpg') }}" alt="" />
                    <div>
                        <span>09/<sub>Oct</sub></span>
                        <p>新闻标题</p>
                    </div>
                </a>
                <a href="">
                    <img src="{{ asset('images/news3.jpg') }}" alt="" />
                    <div>
                        <span>09/<sub>Oct</sub></span>
                        <p>新闻标题</p>
                    </div>
                </a>
                <a href="">
                    <img src="{{ asset('images/news4.jpg') }}" alt="" />
                    <div>
                        <span>09/<sub>Oct</sub></span>
                        <p>新闻标题</p>
                    </div>
                </a>
                <a href="">
                    <img src="{{ asset('images/news5.jpg') }}" alt="" />
                    <div>
                        <span>09/<sub>Oct</sub></span>
                        <p>新闻标题</p>
                    </div>
                </a>
            </div>
            <div class="case-bottm"><a href="" style="display:block;width:100%;height:100%;"></a></div>
        </div>
    </div>
    <div class="num" id="num_5">
        <div class="cust">
            <div class="title cust-title width_1000">
                <img src="{{ asset('images/cust.png') }}" alt="" />
            </div>
            <div class="pic-cont">
                <!-- <div id="teach" class="mr_frbox ml_frbox">
                  <img class="mr_frBtnL prev" src="{{ asset('images/prev.png') }}">
                  <div class="mr_frUl">
                    <ul>
                      <li>
                        <img src="{{ asset('images/cust1.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust2.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust3.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('images/cust4.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust5.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust6.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('images/cust7.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust8.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust9.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('images/cust10.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust11.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust12.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('images/cust13.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust14.jpg') }}" alt="" />
                        <img src="{{ asset('images/cust15.jpg') }}" alt="" />
                      </li>
                    </ul>
                    </div>
                    <img class="mr_frBtnR next" src="{{ asset('images/next.png') }}">
                </div> -->
                <div class="v_out v_out_p">
                    <div class="prev"><a href="javascript:void(0)"></a></div>
                    <div class="v_show">
                        <div class="v_cont">
                            <ul>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo2.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo3.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo4.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo5.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo6.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo7.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo8.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo9.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo10.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo11.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo12.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo13.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo14.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo15.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo16.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo17.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo18.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo19.jpg') }}" alt="" />
                    </span>
                    <span>
                      <img src="{{ asset('images/logo20.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <script type="text/javascript" src="{{ asset('js/ui/gundong.js')}}"></script>
                        <script language="javascript">
                            jQuery(".ml_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5});
                            // $('.pic-cont ul li span').hover(function(){
                            //   $(this).children().first().hide().siblings().show();
                            // },function(){
                            //   $(this).children().first().show().siblings().hide();
                            // })
                        </script>
                        <div class="v_cont1">
                            <ul>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo2.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo3.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo4.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo5.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo6.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo7.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo8.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo9.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo10.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo11.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo12.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo13.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo14.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo15.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo16.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo17.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo18.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo19.jpg') }}" alt="" />
                    </span>
                                    </div>
                                    <div>
                    <span>
                      <img src="{{ asset('images/logo20.jpg') }}" alt="" />
                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <script type="text/javascript" src="{{ asset('js/ui//gundong1.js')}}"></script>
                        <script language="javascript">
                            jQuery(".ml_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5});
                        </script>
                    </div>
                    <div class="next"><a href="javascript:void(0)"></a> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="num" id="num_6">
        <div class="cont">
            <div class="cont-cont width_1000">
                <div class="title cust-title">
                    <img src="{{ asset('images/cont.png') }}" alt="" />
                </div>
                <div class="cont-left">
                    <div class="connect">
                        <img src="{{ asset('images/connect.png') }}" alt="" />
                        <div>
                            电话<br />
                            18052976059 / 13074627460
                        </div>
                    </div>
                    <div class="address">
                        <img src="{{ asset('images/address.png') }}" alt="" />
                        <div>
                            地址<br />
                            江苏省南京市金陵科技学院
                        </div>
                    </div>
                    <div class="email">
                        <img src="{{ asset('images/email.png') }}" alt="" />
                        <div>
                            邮箱<br />
                            support@xiaohahu.com
                        </div>
                    </div>
                    <div class="email">
                        <img src="{{ asset('images/email.png') }}" alt="" />
                        <div>
                            微信<br />
                            18052976059
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 联系侧拉 -->
    <div class="xuanfu rel">
        <div class="xf_top">
            <div class="xf_top_k rel" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=340605572&site=qq&menu=yes','_blank')">
                <img src="{{ asset('images/xftb1.png') }}" height="26" width="29" class="xftb db auto abs trans_fast">
                <div class="xf_top_k_nr abs">
                    <div class="xf_top_k1">
                        <div class="xf_topknrr abs xf_nr1">
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=340605572&site=qq&menu=yes" target="_blank">在线咨询</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xf_top_k rel">
                <img src="{{ asset('images/xftb2.png') }}" height="26" width="29" class="xftb db auto abs trans_fast">
                <div class="xf_top_k_nr abs">
                    <div class="xf_top_k1">
                        <div class="xf_topknrr abs xf_nr2">
                            18052976059<br>13074627460
                        </div>
                    </div>
                </div>
            </div>
            <div class="xf_top_k rel">
                <img src="{{ asset('images/xftb3.png') }}" height="26" width="29" class="xftb db auto abs trans_fast">
                <div class="xf_top_k_nr abs">
                    <div class="xf_top_k1 xf_nr3">

                        <div class="xf_topknrr abs xf_nr3">
                            <img src="{{ asset('images/ewm.png') }}" height="96" width="96" class="abs xf_ewm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="xf_top_k rel">
                <img src="{{ asset('images/xftb4.png') }}" height="26" width="29" class="xftb db auto abs trans_fast">
                <div class="xf_top_k_nr abs">
                    <div class="xf_top_k1">
                        <div class="xf_topknrr abs xf_nr1">
                            <span class="fhtop">返回顶部</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xf_bot abs">
            <div>
                <div class="abs trans_fast"></div>
            </div>
        </div>
    </div>






</div>
<input type="hidden" value="0" class="ddw">
<input type="hidden" value="0" class="ddw2">
<script type="text/javascript" src="{{ asset('js/ui/scroll.js')}}" ></script>
<script type="text/javascript" src="{{ asset('js/ui/jquery.mousewheel.js')}}" ></script>
<script src="http://s96.cnzz.com/z_stat.php?id=1000178010&web_id=1000178010" language="JavaScript"></script>
</body>
</html>