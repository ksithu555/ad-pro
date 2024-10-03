<x-guest-layout>
    <!--== Top Header Start ==-->
    {{-- <section class="pt-0 pb-0 dark-block">
        <div class="service-slider-2 slick height-650px" style="margin-bottom: 0px;">
            @foreach ($headers as $header)
            <div class="slide">
                <div class="slide-img height-650px" style="background:url({{ asset('assets/images/all/' . $header->image) }}) center center / cover scroll no-repeat;"></div>
                <div class="hero-text-wrap height-650px">
                    <div class="hero-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="white-color default-bg all-padding-50">
                                        <h3 class="font-700">{{ $header->title }}</h3>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section> --}}
    <!--== Top Header End ==-->
    <!--== Header06 Start ==-->
    <section class="pt-0 pb-0 transition-none">
        <div id="rev_slider_28_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="parallax-zoom-slices" data-source="gallery" style="background:#000000;padding:0px;">
          <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
              <div id="rev_slider_28_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>	<!-- SLIDE  -->
                @php
                    $counter = 0;
                @endphp

                @foreach ($headers as $header)
                @if ($counter < 5)
                @if ($counter == 0)
                <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-12-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/all/' . $header->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-13"
                        data-x="['left','left','left','left']" data-hoffset="['250','171','39','17']"
                        data-y="['top','top','top','top']" data-voffset="['779','693','847','630']"
                        data-fontweight="['100','600','600','600']"
                        data-width="['493','490','490','312']"
                        data-height="['216','222','222','293']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="['141','81','48','19']"
                        data-y="['top','top','top','top']" data-voffset="['254','215','270','211']"
                        data-fontweight="['100','600','600','600']"
                        data-width="['281','257','140','75']"
                        data-height="['345','343','250','127']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="['687','574','469','301']"
                        data-y="['top','top','top','top']" data-voffset="['248','223','281','208']"
                        data-width="['338','308','140','94']"
                        data-height="['621','602','787','542']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-12"
                        data-x="['left','left','left','left']" data-hoffset="['851','688','551','355']"
                        data-y="['top','top','top','top']" data-voffset="['149','141','222','162']"
                        data-width="['339','329','226','77']"
                        data-height="['809','662','867','569']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":450,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['-54','-22','-4','-23']"
                        data-y="['top','top','top','top']" data-voffset="['195','174','242','187']"
                        data-width="['396','278','133','90']"
                        data-height="['762','664','779','564']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-14"
                        data-x="['left','left','left','left']" data-hoffset="['992','835','644','413']"
                        data-y="['top','top','top','top']" data-voffset="['104','95','156','119']"
                        data-width="['756','404','242','150']"
                        data-height="['810','787','1038','654']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":550,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-15"
                        data-x="['left','left','left','left']" data-hoffset="['-424','-195','-215','-131']"
                        data-y="['top','top','top','top']" data-voffset="['119','138','208','170']"
                        data-width="['606','253','253','160']"
                        data-height="['762','668','829','670']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-16"
                        data-x="['left','left','left','left']" data-hoffset="['822','737','534','340']"
                        data-y="['top','top','top','top']" data-voffset="['459','385','536','350']"
                        data-width="['953','501','502','325']"
                        data-height="['464','431','661','400']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":650,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-82-layer-17"
                        data-x="['left','left','left','left']" data-hoffset="['952','862','643','408']"
                        data-y="['top','top','top','top']" data-voffset="['588','498','676','449']"
                        data-width="['873','404','405','366']"
                        data-height="['462','401','571','343']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="60"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-82-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                        
                    </div>
    
                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-82-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-fontsize="['120','120','70','40']"
                        data-lineheight="['110','90','80','50']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                        
                    </div>
    
                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-82-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 16; white-space: nowrap; font-size: 70px; font-weight: 600; color: #BF0731 ; letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                        <div class="white-color default-bg all-padding-50">
                            {!! nl2br($header->title) !!}
                        </div>
                    </div>
                </li>
                @elseif ($counter == 1)
                <!-- SLIDE  -->
                <li data-index="rs-83" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-13-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #1a1336">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/all/' . $header->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-83-layer-7"
                        data-x="['left','left','left','left']" data-hoffset="['113','122','40','-95']"
                        data-y="['top','top','top','top']" data-voffset="['-137','27','78','54']"
                        data-width="['973','809','809','573']"
                        data-height="['433','256','256','233']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-83-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="['26','-10','-133','-139']"
                        data-y="['top','top','top','top']" data-voffset="['252','194','190','256']"
                        data-fontweight="['100','600','600','600']"
                        data-width="['413','413','413','279']"
                        data-height="['437','437','437','336']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-83-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['550','486','395','240']"
                        data-y="['top','top','top','top']" data-voffset="['351','334','377','348']"
                        data-width="['380','252','252','159']"
                        data-height="['404','309','309','291']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-83-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="['708','588','481','312']"
                        data-y="['top','top','top','top']" data-voffset="['245','207','252','251']"
                        data-width="['403','403','403','273']"
                        data-height="['178','178','178','157']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-83-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 14; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                        
                    </div>
    
                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-83-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-fontsize="['120','120','70','40']"
                        data-lineheight="['110','90','80','50']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                        
                    </div>
    
                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-83-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 11; white-space: nowrap; font-size: 70px; font-weight: 600; color: #BF0731 ; letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                        <div class="white-color default-bg all-padding-50">
                            {!! nl2br($header->title) !!}
                        </div>
                    </div>
                </li>
                @elseif ($counter == 2)
                <!-- SLIDE  -->
                <li data-index="rs-85" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-14-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px rgba(0, 0, 0, 0.15)">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/all/' . $header->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-85-layer-1"
                        data-x="['right','left','left','left']" data-hoffset="['664','213','102','-169']"
                        data-y="['top','top','top','top']" data-voffset="['254','203','228','223']"
                        data-width="['1202','253','253','372']"
                        data-height="['939','824','819','493']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"x:25px;y:-25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:-3;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-85-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="['627','519','404','247']"
                        data-y="['top','top','top','top']" data-voffset="['409','308','344','309']"
                        data-width="['818','413','413','491']"
                        data-height="['775','437','437','374']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":250,"speed":2000,"frame":"0","from":"x:-25px;y:-25px;sX:1.1;sY:1.1;opacity:0;","to":"o:1;rZ:-2;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 22 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-85-layer-7"
                        data-x="['left','left','left','left']" data-hoffset="['621','519','403','248']"
                        data-y="['top','top','top','top']" data-voffset="['-247','-110','41','27']"
                        data-width="['1279','294','214','235']"
                        data-height="['618','370','254','243']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":300,"speed":2000,"frame":"0","from":"x:-25px;y:25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:3;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 23 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-85-layer-15"
                        data-x="['right','right','right','left']" data-hoffset="['663','560','423','-648']"
                        data-y="['top','top','top','top']" data-voffset="['-415','22','40','27']"
                        data-width="['970','776','776','850']"
                        data-height="['578','146','146','158']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":350,"speed":2000,"frame":"0","from":"x:25px;y:25px;sX:1;sY:1;opacity:0;","to":"o:1;rZ:2;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 24 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-85-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                        
                    </div>
    
                    <!-- LAYER NR. 25 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-85-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-fontsize="['120','120','70','40']"
                        data-lineheight="['110','90','80','50']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                        
                    </div>
    
                    <!-- LAYER NR. 26 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-85-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 11; white-space: nowrap; font-size: 70px; font-weight: 600; color: #BF0731 ; letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                        <div class="white-color default-bg all-padding-50">
                            {!! nl2br($header->title) !!}
                        </div>
                    </div>
                </li>
                @elseif ($counter == 3)
                <!-- SLIDE  -->
                <li data-index="rs-84" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-15-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #373344">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/all/' . $header->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 27 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-84-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="['762','-10','-133','-139']"
                        data-y="['top','top','top','top']" data-voffset="['553','194','190','256']"
                        data-width="['388','413','413','279']"
                        data-height="['196','437','437','336']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 28 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-84-layer-7"
                        data-x="['left','left','left','left']" data-hoffset="['607','122','40','-95']"
                        data-y="['top','top','top','top']" data-voffset="['17','27','78','54']"
                        data-width="['445','809','809','573']"
                        data-height="['434','256','256','233']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":250,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 29 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-84-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['318','486','395','240']"
                        data-y="['top','top','top','top']" data-voffset="['358','334','377','348']"
                        data-width="['320','252','252','159']"
                        data-height="['436','309','309','291']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 30 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-84-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="['85','588','481','312']"
                        data-y="['top','top','top','top']" data-voffset="['283','207','252','251']"
                        data-width="['291','403','403','273']"
                        data-height="['179','178','178','157']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="50"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 31 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-84-layer-9"
                        data-x="['left','left','left','left']" data-hoffset="['378','588','481','312']"
                        data-y="['top','top','top','top']" data-voffset="['20','207','252','251']"
                        data-width="['165','403','403','273']"
                        data-height="['235','178','178','157']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="70"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 32 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-84-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                        
                    </div>
    
                    <!-- LAYER NR. 33 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-84-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-fontsize="['120','120','70','40']"
                        data-lineheight="['110','90','80','50']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                        
                    </div>
    
                    <!-- LAYER NR. 34 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-84-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 11; white-space: nowrap; font-size: 70px; font-weight: 600; color: #BF0731 ; letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                        <div class="white-color default-bg all-padding-50">
                            {!! nl2br($header->title) !!}
                        </div>
                    </div>
                </li>
                @elseif ($counter == 4)
                <!-- SLIDE  -->
                <li data-index="rs-86" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="assets/images/slides/home-bg-16-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/all/' . $header->image) }}"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
    
                    <!-- LAYER NR. 35 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-86-layer-6"
                        data-x="['left','left','left','left']" data-hoffset="['612','77','-51','-139']"
                        data-y="['top','top','top','top']" data-voffset="['427','225','288','256']"
                        data-width="['379','413','413','279']"
                        data-height="['400','437','437','336']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;fg:0;","to":"o:1;fb:0px;fg:100%;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fg:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-blendmode="lighten"
    
                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);">
                    <div class="rs-looped rs-wave"  data-speed="2" data-angle="0" data-radius="2px" data-origin="50% 50%"> </div></div>
    
                    <!-- LAYER NR. 36 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-86-layer-7"
                        data-x="['left','left','left','left']" data-hoffset="['607','122','40','-31']"
                        data-y="['top','top','top','top']" data-voffset="['17','27','78','59']"
                        data-width="['445','809','809','573']"
                        data-height="['434','256','256','233']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":250,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Elastic.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-blendmode="lighten"
    
                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);">
                        <div class="rs-looped rs-pendulum"  data-easing="Power1.easeInOut" data-startdeg="-1" data-enddeg="1" data-speed="2" data-origin="50% 50%"> </div></div>
    
                    <!-- LAYER NR. 37 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-86-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['318','472','319','123']"
                        data-y="['top','top','top','top']" data-voffset="['358','409','465','386']"
                        data-width="['320','252','252','159']"
                        data-height="['436','309','309','291']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="5"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":300,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Elastic.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-blendmode="lighten"
    
                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 38 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-86-layer-5"
                        data-x="['left','left','left','left']" data-hoffset="['474','588','481','224']"
                        data-y="['top','top','top','top']" data-voffset="['234','207','252','403']"
                        data-width="['398','403','403','273']"
                        data-height="['180','178','178','157']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":350,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;","to":"o:1;fb:0px;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-blendmode="lighten"
    
                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
    
                    <!-- LAYER NR. 39 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                        id="slide-86-layer-9"
                        data-x="['left','left','left','left']" data-hoffset="['284','379','329','130']"
                        data-y="['top','top','top','top']" data-voffset="['102','245','324','276']"
                        data-width="['403','403','403','273']"
                        data-height="['349','178','178','157']"
                        data-whitespace="nowrap"
    
                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":300,"frame":"0","from":"sX:0;sY:0;opacity:0;fb:30px;fg:0;","to":"o:1;fb:0px;fg:100%;","ease":"Bounce.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fg:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-blendmode="lighten"
    
                        style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);">
                        <div class="rs-looped rs-wave"  data-speed="2" data-angle="0" data-radius="3px" data-origin="50% 50%"> </div></div>
    
                    <!-- LAYER NR. 40 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-86-layer-2"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 9; white-space: nowrap; font-size: 35px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100); letter-spacing: ;font-family: 'Montserrat', sans-serif;text-transform:uppercase;">
                        
                    </div>
    
                    <!-- LAYER NR. 41 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-86-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-fontsize="['120','120','70','40']"
                        data-lineheight="['110','90','80','50']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 15; white-space: nowrap; font-size: 100px; line-height: 90px; font-weight: 700; color: rgba(255,255,255,100); letter-spacing: px;font-family: 'Montserrat', sans-serif;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">
                        
                    </div>
    
                    <!-- LAYER NR. 42 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-86-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
    
                        data-type="text"
                        data-responsive_offset="on"
    
                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
    
                        style="z-index: 11; white-space: nowrap; font-size: 70px; font-weight: 600; color: #BF0731 ; letter-spacing: ;font-family: 'Montserrat', sans-serif;">
                        <div class="white-color default-bg all-padding-50">
                            {!! nl2br($header->title) !!}
                        </div>
                    </div>
                </li>
                @endif
                @php
                    $counter++;
                @endphp
                @endif
                @endforeach
            </ul>
          <div class="tp-bannertimer" style="height: 3px; background: rgba(255,255,255,0.25);"></div>	</div>
        </div>
    </section>
    <!--== Header06 End ==-->
    
    <!--== Sections Start ==--> 
    <!--== Boxed Icons Style 04 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">こんなお悩みありませんか？</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-laptop font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">WEBの広告</h4>
                            <p class="font-400">ウェブの広告ページを作成したいが、専門知識がなく、他社に制作を依頼してしまう！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-tools-2 font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">高品質素材</h4>
                            <p class="font-400">ホームページやチラシの作成に利用できる高品質の画像がなかなか見つからない！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-anchor font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">営業のツール</h4>
                            <p class="font-400">パートナー会社を簡単に開拓できる無料の営業ツールがなかなか見つからない！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-icon text-center">
                        <i class="icon-beaker font-50px default-color"></i>
                        <div class="title-section">
                            <h4 class="mt-0 font-600">情報の発信</h4>
                            <p class="font-400">自社商品とサービスを会員に向け発信できる無料のサイトがなかなか見つからない！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Boxed Icons Style 04 End ==-->

    <!--== Service Boxes Style 01 Start ==-->
    <section class="grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">ADPROでこんなことができます！</h4>
                </div>
            </div>
            <div class="row mt-0 service-box-style-01">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-magic font-40px default-color"></i>
                        <h4 class="mt-0 font-600">広告ページ制作と公開</h4>
                        <p class="font-400 mt-20">ソフトウェア知識が全くなくても、簡単に広告ページを作成しウェブに公開できます！</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-globe-alt font-40px default-color"></i>
                        <h4 class="mt-0 font-600">商談機能の無料利用</h4>
                        <p class="font-400 mt-20">無料の商談メッセンジャー機能を無制限で利用できるので、協力会社を見つけられます！</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                        <i class="icofont icofont-headphone-alt font-40px default-color"></i>
                        <h4 class="mt-0 font-600">情報広場の無料利用</h4>
                        <p class="font-400 mt-20">無料の情報発信機能を利用し自社商品とサービスをADPRO会員に向け発信できます！</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Service Boxes Style 01 End ==-->

    <!--== Testimonails Style 03 Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">利用者の声</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="slick testimonial">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <img class="img-responsive img-circle text-center" src="{{ asset('assets/images/clients/com01.png') }}" alt="avatar-1"/>
                                <p class="mt-20 line-height-26 font-14px">ソフトウェア開発知識がなくても、簡単に広告ページを作成しウェブに公開しました！</p>
                                <h5 class="font-700 mb-0">A社</h5>
                                <span class="default-color font-14px">SEO Manager</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <img class="img-responsive img-circle text-center" src="{{ asset('assets/images/clients/com02.png') }}" alt="avatar-2"/>
                                <p class="mt-20 line-height-26 font-14px">無料の商談のメッセンジャー機能を使って条件に合う協力会社を複数社見つけました！</p>
                                <h5 class="font-700 mb-0">B社</h5>
                                <span class="default-color font-14px">Head of Product</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!--== Slide ==-->
                        <div class="testimonial-item">
                            <div class="testimonial-content"> <img class="img-responsive img-circle" src="{{ asset('assets/images/clients/com03.png') }}" alt="avatar-1"/>
                                <p class="mt-20 line-height-26 font-14px">無料の情報発信機能を利用し弊社商品とサービス情報を発信し注目を集めました！</p>
                                <h5 class="font-700 mb-0">C社</h5>
                                <span class="default-color font-14px">CEO / Founder</span>
                                <ul class="social-default-no-border mt-20 mb-20">
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="https://x.com/" target="_blank" class="twitter"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonails Style 03 End ==-->

    <!--== Accordion Style 01 Start ==-->
    <section class="grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">選ばれる理由</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-8 col-sm-12 centerize-col">
                    <div class="panel-group accordion-style-01" id="accordion-style">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question1" aria-expanded="false" class="collapsed">
                                    <div class="panel-title text-uppercase">
                                        会員の企業情報を完全無料で検索できます。<span class="pull-right"><i class="ion-android-remove"></i></span> 
                                    </div>
                                </a> 
                            </div>
                            <div id="question1" class="panel-collapse collapse in" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    会員になると会員の企業情報を完全無料で検索できます。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question2" aria-expanded="false" class="collapsed">
                                    <div class="panel-title text-uppercase">
                                        ビジネスマッチング機能が完全無料で利用できます。<span class="pull-right"><i class="ion-android-add"></i></span>
                                    </div>
                                </a> 
                            </div>
                            <div id="question2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    商談のメッセンジャー機能を完全無料でご利用いただけます。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question3" aria-expanded="false" class="collapsed">
                                <div class="panel-title text-uppercase">
                                    情報広場機能を完全無料で利用できます。<span class="pull-right"><i class="ion-android-add"></i></span>
                                </div>
                                </a>
                            </div>
                            <div id="question3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    セミナー、交流会、募集、販売、購入などの案件情報掲載を完全無料でご利用いただけます。<br>
                                    買い手、売り手とも完全無料です。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question4" aria-expanded="false" class="collapsed">
                                <div class="panel-title text-uppercase">
                                    広告ページの制作が誰でも簡単にできます。<span class="pull-right"><i class="ion-android-add"></i></span>
                                </div>
                                </a> 
                            </div>
                            <div id="question4" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    IT知識が全くない方でも簡単に広告ページの制作と公開が可能です。
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion-style" href="#question5" aria-expanded="false" class="collapsed">
                                <div class="panel-title text-uppercase">
                                    素材のダウンロードができます。<span class="pull-right"><i class="ion-android-add"></i></span>
                                </div>
                                </a> 
                            </div>
                            <div id="question5" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    プロが制作した高品質の素材（画像、ロゴ等）のダウンロードができます。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Accordion Style 01 End ==--> 

    <!--== Portfolio Start ==-->
    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">最新の広告</h4>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-md-12">
                    <div id="portfolio-gallery" class="cbp">
                        @foreach ($advertisements as $advertisement)
                        <div class="cbp-item col-md-4 col-sm-6 with-spacing text-center">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('assets/images/all/' . $advertisement->main_image) }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap dark">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" 
                                                class="cbp-l-caption-buttonLeft" rel="nofollow" target="_blank">
                                                <i class="ion-android-arrow-forward"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title dark-color font-500 text-uppercase">{{ $advertisement->name }}</div>
                            <div class="cbp-l-grid-projects-desc default-color font-14px">
                                <span class="company-name" style="font-weight: bold;">
                                    <i class="fa fa-building"></i> {{ $advertisement->user->company_name }}
                                </span>
                                <span class="date" style="color: #999; margin-left: 10px;">
                                    <i class="fa fa-calendar"></i> {{ $advertisement->created_at->format('Y-m-d') }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Portfolio End ==-->
    <!--== Sections End ==-->

    <!--== Call to Actions Style 03 Start ==-->
  <section class="default-bg">
    <div class="container">
        <div class="row mt-30">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 centerize-col text-center white-color">
              <h5 class="text-uppercase font-600 mb-30 font-40px">ソフトウェア開発知識が全くなくても誰でも簡単に広告ページを作成しウェブに公開できます！</h5>
              <a class="btn btn-md btn-light-outline btn-circle" href="{{ route('user.show.login') }}">さあ、今すぐ始めましょう！</a>
            </div>
        </div>
    </div>
  </section>
  <!--== Call to Actions Style 03 End ==-->
</x-guest-layout>