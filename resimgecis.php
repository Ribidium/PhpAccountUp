<?php
?>
<div id="slider1_container" style="position: relative; top: 0px; left: 0px; min-width: 300px;
        height: 300px; ">

        <!-- Slides Container -->
        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; min-width: 1102px; height: 300px;
            overflow: hidden;">
            <div><img data-u="image" src="resimler/002.jpg" /></div>
            <div><img data-u="image" src="resimler/003.jpg" /></div>
            <div><img data-u="image" src="resimler/004.jpg" /></div>
            <div><img data-u="image" src="resimler/005.jpg" /></div>
            <div><img data-u="image" src="resimler/006.jpg" /></div>
            <div><img data-u="image" src="resimler/007.jpg" /></div>
            <div><img data-u="image" src="resimler/008.jpg" /></div>
        </div>

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
        <style>
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
        <!--#endregion Arrow Navigator Skin End -->
    </div>