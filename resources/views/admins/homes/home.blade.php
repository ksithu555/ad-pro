<x-admin-layout>
    <!--== Header Start ==-->
    <section class="white-bg pt-120">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Header</span>
                    </a>
                </div>
                <div class="col-md-7">
                    <x-message-box></x-message-box>
                </div>
                <div class="col-md-3" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.header') }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.headers') }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row mt-10">
                <!--== Top Header Start ==-->
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
                                    <div class="title-div white-color default-bg all-padding-50">
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
                                    <div class="title-div white-color default-bg all-padding-50">
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
                                    <div class="title-div white-color default-bg all-padding-50">
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
                                    <div class="title-div white-color default-bg all-padding-50">
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
                                    <div class="title-div white-color default-bg all-padding-50">
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
                <!--== Top Header End ==-->
            </div>
        </div>
    </section>
    <!--== Header End ==-->
    <!--== Sections Start ==-->
    <section class="grey-bg">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2 text-left">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Sections</span>
                    </a>
                </div>
                {{-- <div class="col-md-10">
                    <div style="text-align: right;">
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                            href="{{ route('admin.add.top.section') }}">
                            <i class="fa-icon-plus-square"></i> 追加
                        </a>
                        <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                            href="{{ route('admin.edit.top.sections') }}">
                            <i class="fa-icon-pencil-square"></i> 編集
                        </a>
                    </div>
                </div> --}}
            </div>
            <hr class="dark-bg">
        </div>
    </section>
    {{-- @php
        $bgKey = 0;
    @endphp --}}
    {{-- @foreach ($sections as $section)
        @php
            if ($bgKey % 2 == 0) {
                $sectionBg = 'white-bg';
            } else {
                $sectionBg = 'grey-bg';
            }
            $bgKey++;
        @endphp --}}
    {{-- @if ($section->type == 'Box01') --}}
    {{-- Box 01 Start --}}
    {{-- <section class="{{ $sectionBg }} pt-0 pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                    <div class="feature-box text-center mb-50 feature-box-rounded wow fadeInUp center-feature" data-wow-delay="0.1s">
                        <span class="font-100px default-color font-700">
                            <span class="dark-color">
                                {{ substr($topBoxBlock->icon, 0, 1) }}
                            </span>
                            {{ substr($topBoxBlock->icon, 1) }}
                        </span>
                        <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                        <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{-- Box 01 End --}}
    {{-- @elseif ($section->type == 'Box02') --}}
    {{-- Box 02 Start --}}
    {{-- <section class="{{ $sectionBg }} pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50 service-box-style-01">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                  <div class="feature-box text-center mb-50 feature-box-rounded center-feature border-radius-10">
                    <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                    <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                    <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{-- Box 02 End --}}
    {{-- @elseif ($section->type == 'Box03') --}}
    {{-- Box 03 Start --}}
    {{-- <section class="{{ $sectionBg }} pb-0">
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-2">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Section</span>
                    </a>
                </div>
                <div class="col-md-10" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.add.top.section.top.block', $section->id) }}">
                        <i class="fa-icon-plus-square"></i> 追加
                    </a>
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.top.section.top.blocks', $section->id) }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h2 class="font-700">{{ $section->title }}</h2>
                    <hr class="dark-bg center_line bold-line">
                    <h4>{!! nl2br($section->body) !!}</h4>
                </div>
            </div>
            <div class="row mt-50 service-box-style-03">
                @foreach ($section->topBoxBlocks as $topBoxBlock)
                @php
                    $count = $section->topBoxBlocks->count();
                    if ($count == 1) {
                        $col = 12;
                    } elseif ($count == 2) {
                        $col = 6;
                    } else {
                        $col = 4;
                    }
                @endphp
                <div class="col-md-{{ $col }} col-sm-{{ $col }} col-xs-12">
                    <div class="flipper">
                        <div class="text-center mb-50 main-box">
                          <div class="box-front height-300px white-bg">
                            <div class="content-wrap">
                              <i class="{{ $topBoxBlock->icon }} font-40px default-color"></i>
                              <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                              <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                            </div>
                          </div>
                          <div class="box-back height-300px default-bg">
                            <div class="content-wrap white-color">
                              <i class="{{ $topBoxBlock->icon }} font-40px"></i>
                              <h4 class="mt-0 font-600">{{ $topBoxBlock->title }}</h4>
                              <p class="font-400">{!! nl2br($topBoxBlock->body) !!}</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    {{-- Box 03 End --}}
    {{-- @endif --}}
    {{-- @endforeach --}}
    <!--== Sections End ==-->
    <!--== Footer Start ==-->
    @php
        $footerText = $footers->where('type', 'text')->first();
        $usefulFooters = $footers->where('type', 'useful');
        $contactUs = $footers->where('type', 'contact')->first();
        $contactDetails = [];

        if ($contactUs && $contactUs->text) {
            $contactDetails = explode('|', $contactUs->text);
        }
        $copyRight = $footers->where('type', 'copyRight')->first();
        $logo = $footers->where('type', 'logo')->first();
    @endphp
    <section>
        <div class="container">
            <hr class="dark-bg">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn margin-left-auto margin-right-auto display-table-sm">
                        <span style="font-size: 18px;">Footer</span>
                    </a>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <a class="btn btn-md btn-dark-outline btn-square margin-left-auto margin-right-auto display-table-sm"
                        href="{{ route('admin.edit.footers') }}">
                        <i class="fa-icon-pencil-square"></i> 編集
                    </a>
                </div>
            </div>
            <hr class="dark-bg">
            <div class="row mt-10">
                <!--== Footer Start ==-->
                <footer class="footer dark-block">
                    <div class="footer-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-5">
                                    <div class="widget widget-text">
                                    <div class="logo logo-footer">
                                        <a href="#">
                                        @if ($logo)
                                        <img class="logo logo-display" src="{{ asset('assets/images/all/' . $logo->text) }}" alt="">
                                        @endif
                                        </a>
                                    </div>
                                    @if ($footerText)
                                    <p>{!! nl2br($footerText->text) !!}</p>
                                    @endif
                                    </div>
                                </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Useful Links</h5>
                                    @if ($usefulFooters)
                                    <ul>
                                        @foreach ($usefulFooters as $useful)
                                        <li><a href="{{ $useful->url }}">{{ $useful->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="widget widget-links">
                                    <h5 class="widget-title">Contact Us</h5>
                                    <div class="widget-links">
                                        @if ($contactDetails)
                                        <ul>
                                            @foreach ($contactDetails as $contact)
                                            <li>{{ $contact }}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    @if ($copyRight)
                                    <div class="copy-right text-left">{{ $copyRight->text }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <ul class="social-media">
                                        @php
                                            $socialFooters = $footers->where('type', 'social');
                                        @endphp
                                        @foreach ($socialFooters as $social)
                                        <li><a href="{{ $social->url }}" class="icofont icofont-social-{{ $social->name }}"></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--== Footer End ==-->
            </div>
        </div>
    </section>
    <!--== Footer End ==-->

    <script>
        function adjustFontSize() {
            // Get the width of the window
            const windowWidth = window.innerWidth;

            // Calculate the font size based on the window width
            let fontSize = windowWidth * 0.06;

            // Apply the calculated font size to the title element
            // Function to apply font size if element exists
            function applyFontSize(elementId) {
                const element = document.getElementById(elementId);
                if (element) {
                    element.style.fontSize = fontSize + 'px';
                }
            }

            // Apply font size to multiple elements if they exist
            applyFontSize('slide-82-layer-4');
            applyFontSize('slide-83-layer-4');
            applyFontSize('slide-84-layer-4');
            applyFontSize('slide-85-layer-4');
            applyFontSize('slide-86-layer-4');
        }

        // Run the function when the window is resized
        window.addEventListener('resize', adjustFontSize);

        // Run the function on initial load
        window.addEventListener('load', adjustFontSize);
    </script>
    <script>
        function adjustDivText() {
            const whiteColorDivs = document.querySelectorAll('.title-div');
            const windowWidth = window.innerWidth;

            whiteColorDivs.forEach(function(div) {
                // Ensure text does not overflow the div
                div.style.wordWrap = 'break-word';
                div.style.overflow = 'hidden';
                div.style.textOverflow = 'ellipsis';
                div.style.whiteSpace = 'normal';
                div.style.boxSizing = 'border-box'; // Include padding in width

                // Optionally, you can set the max-width dynamically based on the viewport width
                if (windowWidth <= 480) {
                    div.style.minWidth = windowWidth * 0.3 + 'px';
                } else if (windowWidth <= 768) {
                    div.style.minWidth = windowWidth * 0.5 + 'px';
                } else {
                    div.style.minWidth = windowWidth * 0.7 + 'px';
                }
                div.style.maxWidth = windowWidth + 'px';
            });
        }

        // Run the function when the window is resized
        window.addEventListener('resize', adjustDivText);

        // Run the function on initial load
        window.addEventListener('load', adjustDivText);
    </script>
</x-admin-layout>