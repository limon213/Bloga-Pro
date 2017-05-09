<?php

function xl_preloader_markup() {
    echo '<div class="preloader-box">
            <div class="sk-folding-cube">
              <div class="sk-cube1 sk-cube"></div>
              <div class="sk-cube2 sk-cube"></div>
              <div class="sk-cube4 sk-cube"></div>
              <div class="sk-cube3 sk-cube"></div>
            </div>
          </div>';
}
add_action('body_begin', 'xl_preloader_markup');

function xl_preloader_style() {
    global $xlt_option;

    ?>

    <style type="text/css">
        .preloader-box {
            position: fixed;
            background: <?php echo $xlt_option['xl_preloader_bg_color'] ? $xlt_option['xl_preloader_bg_color'] : '#2980b9'?>;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99999999999;
            text-align: center;
            display: flex;
            align-items: center;
        }
        .sk-folding-cube {
            margin: 20px auto;
            width: 40px;
            height: 40px;
            position: relative;
            -webkit-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
        }

        .sk-folding-cube .sk-cube {
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        .sk-folding-cube .sk-cube:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: <?php echo $xlt_option['xl_preloader_color'] ? $xlt_option['xl_preloader_color'] : '#fff'?>;
            -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
            animation: sk-foldCubeAngle 2.4s infinite linear both;
            -webkit-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }
        .sk-folding-cube .sk-cube2 {
            -webkit-transform: scale(1.1) rotateZ(90deg);
            transform: scale(1.1) rotateZ(90deg);
        }
        .sk-folding-cube .sk-cube3 {
            -webkit-transform: scale(1.1) rotateZ(180deg);
            transform: scale(1.1) rotateZ(180deg);
        }
        .sk-folding-cube .sk-cube4 {
            -webkit-transform: scale(1.1) rotateZ(270deg);
            transform: scale(1.1) rotateZ(270deg);
        }
        .sk-folding-cube .sk-cube2:before {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }
        .sk-folding-cube .sk-cube3:before {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        .sk-folding-cube .sk-cube4:before {
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }
        @-webkit-keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }

        @keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }
    </style>

    <?php

}
add_action('wp_head', 'xl_preloader_style');
