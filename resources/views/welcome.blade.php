@include('layouts.navbar')

<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tierra del Fuego Film Commission</title>
		<meta name="description" content="Slider Revolution Example" />
		<meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
		<meta name="author" content="ThemePunch" />
		<meta name="viewport" content="width=device-width, initial-scale=1">


		     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        
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



		<!-- LOAD JQUERY LIBRARY -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

                <!-- LOADING FONTS AND ICONS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">


		<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css">
		<!-- REVOLUTION LAYERS STYLES -->
<style>.tp-caption.Creative-SubTitle,.Creative-SubTitle{color:#cdb083;font-size:14px;line-height:14px;font-weight:400;font-style:normal;font-family:Lato;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:2px}.tp-caption.Creative-Title,.Creative-Title{color:#ffffff;font-size:70px;line-height:70px;font-weight:400;font-style:normal;font-family:Playfair Display;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.Creative-Button,.Creative-Button{color:#cdb083;font-size:13px;line-height:13px;font-weight:400;font-style:normal;font-family:Lato;text-decoration:none;background-color:#000000;border-color:#cdb083;border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:2px}.tp-caption.Creative-Button:hover,.Creative-Button:hover{color:rgba(205,176,131,1.00);text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(205,176,131,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}</style>

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
			

<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background:#1f1d24;padding:0px;">
<!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
	<div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
<ul>	<!-- SLIDE  -->
    <li data-index="rs-2" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
        <img src="assets/contacto-ancho.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- BACKGROUND VIDEO LAYER -->
		<div class="rs-background-video-layer" 
			data-forcerewind="on" 
			data-volume="mute" 
			data-videowidth="100%" 
			data-videoheight="100%" 
			data-videomp4="assets/aff9a-Ushuaia---Argentina-Drone-footage-Video-4k.mp4" 
            data-videopreload="auto" 
			data-videoloop="loop" 
			data-aspectratio="16:9" 
			data-autoplay="true" 
			data-autoplayonlyfirsttime="false" 
></div>
		<!-- LAYER NR. 1 -->
		<div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" 
			 id="slide-2-layer-1" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
						data-fontweight="['100','100','400','400']"
			data-width="full"
			data-height="full"
			data-whitespace="nowrap"
 
            data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
            data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5;background-color:rgba(18,12,20,0.75);"> </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3" 
			 id="slide-2-layer-4" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-178','-178','-168','-141']" 
						data-width="1"
			data-height="100"
			data-whitespace="nowrap"
 
            data-type="shape" 
			data-responsive_offset="on" 
			data-responsive="off"
            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 6;background-color:rgb(0,0,0);"> </div>

		<!-- LAYER NR. 3 -->
		<div class="tp-caption Creative-SubTitle   tp-resizeme rs-parallaxlevel-2" 
			 id="slide-2-layer-3" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-91','-91','-81','-64']" 
						data-fontsize="['14','14','14','12']"
			data-lineheight="['14','14','14','12']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
            data-type="text" 
			data-responsive_offset="on" 

            data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 7; white-space: nowrap; color: rgba(205,176,131,1); letter-spacing: ;"> </div>

		<!-- LAYER NR. 4 -->
		<div class="tp-caption Creative-Title   tp-resizeme rs-parallaxlevel-1" 
			 id="slide-2-layer-2" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" 
						data-fontsize="['70','70','50','40']"
			data-lineheight="['70','70','55','45']"
			data-width="['none','none','none','320']"
			data-height="none"
			data-whitespace="nowrap"
 
            data-type="text" 
			data-responsive_offset="on" 

            data-frames='[{"delay":2550,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
            data-textAlign="['center','center','center','center']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 8; white-space: nowrap; color: rgba(255,255,255,1); letter-spacing: ;font-family:Lato;">Tierra del Fuego<br/>
Film Commission </div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-3" 
			 id="slide-2-layer-5" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['137','137','119','100']" 
						data-width="1"
			data-height="100"
			data-whitespace="nowrap"
 
            data-type="shape" 
			data-responsive_offset="on" 
			data-responsive="off"
            data-frames='[{"delay":2900,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 9;background-color:rgb(0,0,0);"> </div>

		<!-- LAYER NR. 6 -->
		<div class="tp-caption Creative-Button rev-btn  rs-parallaxlevel-15" 
			 id="slide-2-layer-6" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['top','top','top','top']" data-voffset="['694','611','689','540']" 
						data-fontweight="['400','500','500','500']"
			data-color="['rgb(255,255,255)','rgba(205,176,131,1)','rgba(205,176,131,1)','rgba(205,176,131,1)']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
 
            data-type="button" 
			data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/inicio","delay":""}]'
			data-responsive_offset="on" 
			data-responsive="off"
            data-frames='[{"delay":3850,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(205,176,131,1);bc:rgba(205,176,131,1);"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[15,15,15,15]"
            data-paddingright="[50,50,50,50]"
            data-paddingbottom="[15,15,15,15]"
            data-paddingleft="[50,50,50,50]"

            style="z-index: 10; white-space: nowrap; color: #ffffff; letter-spacing: ;background-color:transparent;border-color:rgba(0,0,0,0.25);border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Ingresar </div>
	</li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
</div><!-- END REVOLUTION SLIDER -->
		<script type="text/javascript">
			            var revapi2,
			tpj;
(function() {
    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

    function onLoad() {
        if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
				if(tpj("#rev_slider_2_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_2_1");
				}else{
					revapi2 = tpj("#rev_slider_2_1").show().revolution({
						sliderType:"standard",
jsFileLocation:"//revolution/revslider/public/assets/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						parallax: {
							type:"3D",
							origo:"slidercenter",
							speed:1000,
                          speedbg:0,
                          speedls:0,
							levels:[2,4,6,8,10,12,14,16,45,50,47,48,49,50,0,50],
							ddd_shadow:"off",
							ddd_bgfreeze:"on",
							ddd_overflow:"hidden",
							ddd_layer_overflow:"visible",
							ddd_z_correction:100,
						},
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "60px",
						disableProgressBar:"on",
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
