@include('layouts.navbar')

<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Overexposure Transition - Slider Revolution</title>
        <meta name="description" content="Slider Revolution Example" />
        <meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
        <meta name="author" content="ThemePunch" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

                <!-- LOADING FONTS AND ICONS -->
        <link href="http://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">


        <link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="css/settings.css">
            

               <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Black Dashboard') }}</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('black') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('black') }}/css/theme.css" rel="stylesheet" />



        <!-- REVOLUTION LAYERS STYLES -->
<style>


</style>
<style></style>
                <style type="text/css">#rev_slider_3_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_3_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:30px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_3_1 .uranus.tparrows:hover:before{opacity:0.75}</style>
                

        <!-- ADD-ONS CSS FILES -->
        
        <!-- ADD-ONS JS FILES -->
        
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>

        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>


        <script type="text/javascript">function setREVStartSize(e){                                    
            try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                    
            }catch(d){console.log("Failure at Presize of Slider:"+d)}                        
        };</script>
    </head>

    <body style="margin: 0; padding: 0">
            

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="overexposure-transition" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
    <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
<ul>    <!-- SLIDE  -->
    <li data-index="rs-3" data-transition="brightnesscross" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/100x50_TREN-DEL-FIN-6-1-820x546.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="assets/dummy.png"  alt=""  data-lazyload="assets/TREN-DEL-FIN-6-1-820x546.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <div id="rrzm_3" class="rev_row_zone rev_row_zone_middle" style="z-index: 11;">

        <!-- LAYER NR. 1 -->
        <div class="tp-caption   rs-parallaxlevel-4" 
             id="slide-3-layer-7" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 2 -->
        <div class="tp-caption  " 
             id="slide-3-layer-8" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[20,20,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; width: 100%;">
        <!-- LAYER NR. 3 -->
        <div class="tp-caption   tp-resizeme" 
             id="slide-3-layer-2" 
             data-x="['left','left','left','left']" data-hoffset="['0','53','53','42']" 
             data-y="['top','top','top','top']" data-voffset="['0','123','123','122']" 
                        data-letterspacing="['5','5','5','3']"
            data-width="none"
            data-height="none"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[24,28,21,21]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: normal; font-size: 17px; line-height: 24px; font-weight: 400; color: #000000; letter-spacing: 5px; display: block;font-family:Oswald;text-transform:uppercase;"> </div>

        <!-- LAYER NR. 4 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-3-layer-1" 
             data-x="['left','left','left','left']" data-hoffset="['0','50','50','40']" 
             data-y="['top','top','top','top']" data-voffset="['0','170','170','167']" 
                        data-fontsize="['60','50','40','40']"
            data-lineheight="['90','75','60','60']"
            data-fontweight="['700','400','400','400']"
            data-letterspacing="['15','15','10','7']"
            data-width="['100%','100%','561','401']"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":1990,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[30,31,26,26]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; min-width: 100%; max-width: 100%; white-space: normal; font-size: 60px; line-height: 90px; font-weight: 700; color: #e5452b; letter-spacing: 15px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(0,0,0,0.26);">Tierra del Fuego Film Commission  </div>

        <!-- LAYER NR. 5 -->
        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
             id="slide-3-layer-3" 
             data-x="['left','left','left','left']" data-hoffset="['0','53','53','42']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','498','373']" 
                        data-width="50"
            data-height="1"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="shape" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"sX:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9; display: block;background-color:rgb(0,0,0);"> </div>
                </div>

        <!-- LAYER NR. 6 -->
        <div class="tp-caption  " 
             id="slide-3-layer-9" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 10; width: 100%;">                </div>
            </div>

        <!-- LAYER NR. 7 -->
        <div class="tp-caption   rs-parallaxlevel-5" 
             id="slide-3-layer-10" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 11; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 8 -->
        <div class="tp-caption  " 
             id="slide-3-layer-11" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 12; width: 100%;">                </div>

        <!-- LAYER NR. 9 -->
        <div class="tp-caption  " 
             id="slide-3-layer-12" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[20,20,0,0]"

            style="z-index: 13; width: 100%;">
        <!-- LAYER NR. 10 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-3-layer-4" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','814','633']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','410','298']" 
                        data-fontsize="['35','14','14','14']"
            data-lineheight="['40','30','30','30']"
            data-width="100%"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,40,40]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[40,40,40,40]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 14; min-width: 100%; max-width: 100%; white-space: normal; font-size: 35px; line-height: 40px; font-weight: 400; color: #000000; letter-spacing: 3px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(255,255,255,0.4);">su principal objetivo será  fomentar la inversión y desarrollar el sector productivo cinematográfico audiovisual local. </div>

        <!-- LAYER NR. 11 -->
        <a class="tp-caption rev-btn  tp-resizeme rs-parallaxlevel-14" 
 href="/nosotros" target="_blank"           id="slide-3-layer-5" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','53','42']" 
             data-y="['top','top','bottom','bottom']" data-voffset="['0','600','53','42']" 
                        data-width="none"
            data-height="none"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="button" 
            data-actions=''
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;fbr:0%;","to":"o:1;fbr:100;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"opacity:0;fbr:0%;","ease":"Power4.easeInOut"},{"frame":"hover","speed":"500","ease":"Power3.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,50,50]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,50,50]"

            style="z-index: 15; white-space: normal; font-size: 15px; line-height: 60px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 5px; display: inline-block;font-family:Oswald;text-transform:uppercase;background-color:rgb(229,69,43);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">MÁS INFORMACIÓN </a>
                </div>
            </div>
        </div>
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-4" data-transition="brightnesscross" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/100x50_Parque-Nacional-Tierra-del-Fuego-Ushuaia.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="assets/dummy.png"  alt=""  data-lazyload="assets/Parque-Nacional-Tierra-del-Fuego-Ushuaia.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <div id="rrzm_4" class="rev_row_zone rev_row_zone_middle" style="z-index: 10;">

        <!-- LAYER NR. 12 -->
        <div class="tp-caption   rs-parallaxlevel-4" 
             id="slide-4-layer-7" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 13 -->
        <div class="tp-caption  " 
             id="slide-4-layer-8" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[20,20,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; width: 100%;">
        <!-- LAYER NR. 14 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-4-layer-1" 
             data-x="['left','left','left','left']" data-hoffset="['0','50','50','40']" 
             data-y="['top','top','top','top']" data-voffset="['0','170','170','167']" 
                        data-fontsize="['50','50','40','40']"
            data-lineheight="['80','75','60','60']"
            data-fontweight="['700','400','400','400']"
            data-letterspacing="['15','15','10','7']"
            data-width="['100%','100%','561','401']"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":1990,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[30,31,26,26]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; min-width: 100%; max-width: 100%; white-space: normal; font-size: 50px; line-height: 80px; font-weight: 700; color: #e5452b; letter-spacing: 15px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(255,255,255,0.4);">Guía Audiovisual de Profesionales y Empresas
 </div>

        <!-- LAYER NR. 15 -->
        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
             id="slide-4-layer-3" 
             data-x="['left','left','left','left']" data-hoffset="['0','53','53','42']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','498','373']" 
                        data-width="50"
            data-height="1"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="shape" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"sX:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; display: block;background-color:rgb(0,0,0);"> </div>
                </div>

        <!-- LAYER NR. 16 -->
        <div class="tp-caption  " 
             id="slide-4-layer-9" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9; width: 100%;">                </div>
            </div>

        <!-- LAYER NR. 17 -->
        <div class="tp-caption   rs-parallaxlevel-5" 
             id="slide-4-layer-10" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 18 -->
        <div class="tp-caption  " 
             id="slide-4-layer-11" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 11; width: 100%;">                </div>

        <!-- LAYER NR. 19 -->
        <div class="tp-caption  " 
             id="slide-4-layer-12" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[20,20,0,0]"

            style="z-index: 12; width: 100%;">
        <!-- LAYER NR. 20 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-4-layer-4" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','814','633']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','410','298']" 
                        data-fontsize="['25','14','14','14']"
            data-lineheight="['40','30','30','30']"
            data-width="100%"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,40,40]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[40,40,40,40]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 13; min-width: 100%; max-width: 100%; white-space: normal; font-size: 25px; line-height: 40px; font-weight: 400; color: #000000; letter-spacing: 3px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(255,255,255,0.54);">Una plataforma de consulta y difusión online de los recursos técnicos y humanos de la actividad audiovisual de la provincia. Está  orientada tanto a profesionales como a productoras y empresas que desean  encontrar u ofrecer servicios. </div>

        <!-- LAYER NR. 21 -->
        <div class="tp-caption rev-btn  tp-resizeme rs-parallaxlevel-14" 
             id="slide-4-layer-5" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','53','42']" 
             data-y="['top','top','bottom','bottom']" data-voffset="['0','600','53','42']" 
                        data-width="none"
            data-height="none"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="button" 
            data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/guiaaudiovisual","delay":""}]'
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;fbr:0%;","to":"o:1;fbr:100;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"opacity:0;fbr:0%;","ease":"Power4.easeInOut"},{"frame":"hover","speed":"500","ease":"Power3.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,50,50]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,50,50]"

            style="z-index: 14; white-space: normal; font-size: 15px; line-height: 60px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 5px; display: inline-block;font-family:Oswald;text-transform:uppercase;background-color:rgb(229,69,43);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Guía Audiovisual </div>
                </div>
            </div>
        </div>
    </li>
    <!-- SLIDE  -->
    <li data-index="rs-5" data-transition="brightnesscross" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="assets/100x50_51111-tierra-del-fuego-asumira-en-el-ente-patagonia.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="assets/dummy.png"  alt=""  data-lazyload="assets/51111-tierra-del-fuego-asumira-en-el-ente-patagonia.jpg" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <div id="rrzm_5" class="rev_row_zone rev_row_zone_middle" style="z-index: 10;">

        <!-- LAYER NR. 22 -->
        <div class="tp-caption   rs-parallaxlevel-4" 
             id="slide-5-layer-7" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 23 -->
        <div class="tp-caption  " 
             id="slide-5-layer-8" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[20,20,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6; width: 100%;">
        <!-- LAYER NR. 24 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-5-layer-1" 
             data-x="['left','left','left','left']" data-hoffset="['0','50','50','40']" 
             data-y="['top','top','top','top']" data-voffset="['0','170','170','167']" 
                        data-fontsize="['60','50','40','40']"
            data-lineheight="['80','75','60','60']"
            data-fontweight="['700','400','400','400']"
            data-letterspacing="['15','15','10','7']"
            data-width="['100%','100%','561','401']"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+290","split":"chars","splitdelay":0.05,"speed":1990,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[30,31,26,26]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; min-width: 100%; max-width: 100%; white-space: normal; font-size: 60px; line-height: 80px; font-weight: 700; color: #e5452b; letter-spacing: 15px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(255,255,255,0.41);">Guía de Locaciones </div>

        <!-- LAYER NR. 25 -->
        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
             id="slide-5-layer-3" 
             data-x="['left','left','left','left']" data-hoffset="['0','53','53','42']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','498','373']" 
                        data-width="50"
            data-height="1"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="shape" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1490","speed":2000,"frame":"0","from":"sX:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; display: block;background-color:rgb(0,0,0);"> </div>
                </div>

        <!-- LAYER NR. 26 -->
        <div class="tp-caption  " 
             id="slide-5-layer-9" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9; width: 100%;">                </div>
            </div>

        <!-- LAYER NR. 27 -->
        <div class="tp-caption   rs-parallaxlevel-5" 
             id="slide-5-layer-10" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="row" 
            data-columnbreak="2" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,30,30]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,30,30]"

            style="z-index: 10; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
        <!-- LAYER NR. 28 -->
        <div class="tp-caption  " 
             id="slide-5-layer-11" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 11; width: 100%;">                </div>

        <!-- LAYER NR. 29 -->
        <div class="tp-caption  " 
             id="slide-5-layer-12" 
             data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']" 
             data-y="['top','top','top','top']" data-voffset="['100','100','100','100']" 
                        data-width="none"
            data-height="none"
            data-whitespace="nowrap"
 
            data-type="column" 
            data-responsive_offset="on" 
            data-responsive="off"
            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="50%"
 data-verticalalign="top"
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[20,20,0,0]"

            style="z-index: 12; width: 100%;">
        <!-- LAYER NR. 30 -->
        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14" 
             id="slide-5-layer-4" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','814','633']" 
             data-y="['top','top','top','top']" data-voffset="['0','440','410','298']" 
                        data-fontsize="['40','14','14','14']"
            data-lineheight="['50','30','30','30']"
            data-width="100%"
            data-height="none"
            data-whitespace="normal"
 
            data-type="text" 
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
            data-margintop="[0,0,40,40]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[40,40,40,40]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 13; min-width: 100%; max-width: 100%; white-space: normal; font-size: 40px; line-height: 50px; font-weight: 400; color: #000000; letter-spacing: 3px; display: block;font-family:Oswald;text-transform:uppercase;background-color:rgba(255,255,255,0.42);">Plataforma de consulta de los lugares disponibles para ser utilizados en una producción audiovisual </div>

        <!-- LAYER NR. 31 -->
        <a class="tp-caption rev-btn  tp-resizeme rs-parallaxlevel-14" 
 href="/locaciones" target="_blank"          id="slide-5-layer-5" 
             data-x="['left','left','left','left']" data-hoffset="['0','540','53','42']" 
             data-y="['top','top','bottom','bottom']" data-voffset="['0','600','53','42']" 
                        data-width="none"
            data-height="none"
            data-whitespace="['normal','nowrap','nowrap','nowrap']"
 
            data-type="button" 
            data-actions=''
            data-responsive_offset="on" 

            data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;fbr:0%;","to":"o:1;fbr:100;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","to":"opacity:0;fbr:0%;","ease":"Power4.easeInOut"},{"frame":"hover","speed":"500","ease":"Power3.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
            data-margintop="[0,0,0,0]"
            data-marginright="[0,0,0,0]"
            data-marginbottom="[0,0,0,0]"
            data-marginleft="[0,0,0,0]"
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[50,50,50,50]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[50,50,50,50]"

            style="z-index: 14; white-space: normal; font-size: 15px; line-height: 60px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 5px; display: inline-block;font-family:Oswald;text-transform:uppercase;background-color:rgb(229,69,43);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Locaciones </a>
                </div>
            </div>
        </div>
    </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="height: 10px; background: rgba(229,69,43,1);"></div>   </div>
</div><!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
                        var revapi3,
            tpj;
(function() {
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

    function onLoad() {
        if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
                if(tpj("#rev_slider_3_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_3_1");
                }else{
                    revapi3 = tpj("#rev_slider_3_1").show().revolution({
                        sliderType:"standard",
jsFileLocation:"//revolution/revslider/public/assets/js/",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:12000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
                            onHoverStop:"off",
                            arrows: {
                                style:"uranus",
                                enable:true,
                                hide_onmobile:false,
                                hide_onleave:false,
                                tmp:'',
                                left: {
                                    h_align:"right",
                                    v_align:"bottom",
                                    h_offset:60,
                                    v_offset:10
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"bottom",
                                    h_offset:10,
                                    v_offset:10
                                }
                            }
                        },
                        responsiveLevels:[1240,1024,778,480],
                        visibilityLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[868,768,960,720],
                        lazyType:"smart",
                        parallax: {
                            type:"scroll",
                            origo:"slidercenter",
                            speed:400,
                          speedbg:1500,
                          speedls:1000,
                            levels:[5,10,15,20,25,30,35,40,60,46,-10,-15,-20,-25,-30,55],
                        },
                        shadow:0,
                        spinner:"off",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
    }; /* END OF revapi call */
     }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
        </script>
        

        </body>
</html>
