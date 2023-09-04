<!------------Design By Pradeep Singh Tomar----------->
<style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">


.testim {
		width: 100%;
		position: relative; /* for fixed*/ */
		top: 50%;
		-webkit-transform: translatey(-50%);
		-moz-transform: translatey(-50%);
		-ms-transform: translatey(-50%);
		-o-transform: translatey(-50%);
		transform: translatey(-50%);
}

.testim .wrap {
    position: relative;
    width: 100%;
    height: 170px;
}

.testim .arrow {
    display: block;
    position: absolute;
    color: #333;
    cursor: pointer;
    font-size: 2em;
    top: 50%;
    -webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
    -webkit-transition: all .3s ease-in-out;    
    -ms-transition: all .3s ease-in-out;    
    -moz-transition: all .3s ease-in-out;    
    -o-transition: all .3s ease-in-out;    
    transition: all .3s ease-in-out;
    padding: 5px;
    z-index: 22222222;
}

.testim .arrow:before {
		cursor: pointer;
}

.testim .arrow:hover {
    color: green;
}
    

.testim .arrow.left {
    left: 70px;
}

.testim .arrow.right {
    right: 70px;
}

.testim .dots {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 60px;
    left: 0;
    display: none;
    z-index: 3333;
		height: 12px;
}

.testim .dots .dot {
    list-style-type: none;
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 1px solid green;
    margin: 0 10px;
    cursor: pointer;
    -webkit-transition: all .5s ease-in-out;    
    -ms-transition: all .5s ease-in-out;    
    -moz-transition: all .5s ease-in-out;    
    -o-transition: all .5s ease-in-out;    
    transition: all .5s ease-in-out;
		position: relative;
}

.testim .dots .dot.active,
.testim .dots .dot:hover {
    background: green;
    border-color: green;
}

.testim .dots .dot.active {
    -webkit-animation: testim-scale .5s ease-in-out forwards;   
    -moz-animation: testim-scale .5s ease-in-out forwards;   
    -ms-animation: testim-scale .5s ease-in-out forwards;   
    -o-animation: testim-scale .5s ease-in-out forwards;   
    animation: testim-scale .5s ease-in-out forwards;   
}
    
.testim .cont {
    position: relative;
		overflow: hidden;
}

.testim .cont > div {
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0 0 0 0;
    opacity: 0;
}

.testim .cont > div.inactive {
    opacity: 1;
}
    

.testim .cont > div.active {
    position: relative;
    opacity: 1;
}
    

.testim .cont div .img img {
    display: block;
    width: 110px;
    height: 110px;
    margin: auto;
    border-radius: 50%;
}

.testim .cont div h2 {
    color: green;
    font-size: 2em;
    margin: 15px 0;
}

.testim .cont div p {
    font-size: 1.15em;
    color: #333;
    width: 60%;
    margin: auto;
}

.testim .cont div.active .img img {
    -webkit-animation: testim-show .5s ease-in-out forwards;            
    -moz-animation: testim-show .5s ease-in-out forwards;            
    -ms-animation: testim-show .5s ease-in-out forwards;            
    -o-animation: testim-show .5s ease-in-out forwards;            
    animation: testim-show .5s ease-in-out forwards;            
}

.testim .cont div.active h2 {
    -webkit-animation: testim-content-in .4s ease-in-out forwards;    
    -moz-animation: testim-content-in .4s ease-in-out forwards;    
    -ms-animation: testim-content-in .4s ease-in-out forwards;    
    -o-animation: testim-content-in .4s ease-in-out forwards;    
    animation: testim-content-in .4s ease-in-out forwards;    
}

.testim .cont div.active p {
    -webkit-animation: testim-content-in .5s ease-in-out forwards;    
    -moz-animation: testim-content-in .5s ease-in-out forwards;    
    -ms-animation: testim-content-in .5s ease-in-out forwards;    
    -o-animation: testim-content-in .5s ease-in-out forwards;    
    animation: testim-content-in .5s ease-in-out forwards;    
}

.testim .cont div.inactive .img img {
    -webkit-animation: testim-hide .5s ease-in-out forwards;            
    -moz-animation: testim-hide .5s ease-in-out forwards;            
    -ms-animation: testim-hide .5s ease-in-out forwards;            
    -o-animation: testim-hide .5s ease-in-out forwards;            
    animation: testim-hide .5s ease-in-out forwards;            
}

.testim .cont div.inactive h2 {
    -webkit-animation: testim-content-out .4s ease-in-out forwards;        
    -moz-animation: testim-content-out .4s ease-in-out forwards;        
    -ms-animation: testim-content-out .4s ease-in-out forwards;        
    -o-animation: testim-content-out .4s ease-in-out forwards;        
    animation: testim-content-out .4s ease-in-out forwards;        
}

.testim .cont div.inactive p {
    -webkit-animation: testim-content-out .5s ease-in-out forwards;    
    -moz-animation: testim-content-out .5s ease-in-out forwards;    
    -ms-animation: testim-content-out .5s ease-in-out forwards;    
    -o-animation: testim-content-out .5s ease-in-out forwards;    
    animation: testim-content-out .5s ease-in-out forwards;    
}

@-webkit-keyframes testim-scale {
    0% {
        -webkit-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -webkit-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -webkit-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -webkit-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-moz-keyframes testim-scale {
    0% {
        -moz-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -moz-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -moz-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -moz-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-ms-keyframes testim-scale {
    0% {
        -ms-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -ms-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -ms-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -ms-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-o-keyframes testim-scale {
    0% {
        -o-box-shadow: 0px 0px 0px 0px #eee;
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        -o-box-shadow: 0px 0px 10px 5px #eee;        
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        -o-box-shadow: 0px 0px 10px 5px #ea830e;        
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        -o-box-shadow: 0px 0px 0px 0px #ea830e;        
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@keyframes testim-scale {
    0% {
        box-shadow: 0px 0px 0px 0px #eee;
    }

    35% {
        box-shadow: 0px 0px 10px 5px #eee;        
    }

    70% {
        box-shadow: 0px 0px 10px 5px #ea830e;        
    }

    100% {
        box-shadow: 0px 0px 0px 0px #ea830e;        
    }
}

@-webkit-keyframes testim-content-in {
    from {
        opacity: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -webkit-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-moz-keyframes testim-content-in {
    from {
        opacity: 0;
        -moz-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -moz-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-ms-keyframes testim-content-in {
    from {
        opacity: 0;
        -ms-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -ms-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@-o-keyframes testim-content-in {
    from {
        opacity: 0;
        -o-transform: translateY(100%);
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        -o-transform: translateY(0);        
        transform: translateY(0);        
    }
}

@keyframes testim-content-in {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    
    to {
        opacity: 1;
        transform: translateY(0);        
    }
}

@-webkit-keyframes testim-content-out {
    from {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -webkit-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-moz-keyframes testim-content-out {
    from {
        opacity: 1;
        -moz-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -moz-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-ms-keyframes testim-content-out {
    from {
        opacity: 1;
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        -ms-transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@-o-keyframes testim-content-out {
    from {
        opacity: 1;
        -o-transform: translateY(0);
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
        transform: translateY(-100%);        
    }
}

@keyframes testim-content-out {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    
    to {
        opacity: 0;
        transform: translateY(-100%);        
    }
}

@-webkit-keyframes testim-show {
    from {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
}

@-moz-keyframes testim-show {
    from {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
}

@-ms-keyframes testim-show {
    from {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
}

@-o-keyframes testim-show {
    from {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
}

@keyframes testim-show {
    from {
        opacity: 0;
        transform: scale(0);
    }
    
    to {
        opacity: 1;
        transform: scale(1);       
    }
}

@-webkit-keyframes testim-hide {
    from {
        opacity: 1;
        -webkit-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
    }
}

@-moz-keyframes testim-hide {
    from {
        opacity: 1;
        -moz-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -moz-transform: scale(0);
        transform: scale(0);
    }
}

@-ms-keyframes testim-hide {
    from {
        opacity: 1;
        -ms-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -ms-transform: scale(0);
        transform: scale(0);
    }
}

@-o-keyframes testim-hide {
    from {
        opacity: 1;
        -o-transform: scale(1);       
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        -o-transform: scale(0);
        transform: scale(0);
    }
}

@keyframes testim-hide {
    from {
        opacity: 1;
        transform: scale(1);       
    }
    
    to {
        opacity: 0;
        transform: scale(0);
    }
}

@media all and (max-width: 300px) {
	body {
		font-size: 14px;
	}
}

@media all and (max-width: 500px) {
	.testim .arrow {
		font-size: 1.5em;
	}
	
	.testim .cont div p {
		line-height: 25px;
	}

}
</style>

<div class="center">
    <h2 class="center-text">অভিন্দন</h2>
</div>
<section id="testim" class="testim">
         <div class="testim-cover" style="padding-top: 50px;">
            <div class="wrap">
                
                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <br>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">                    
                    <div class="active">
                        <div class="img"><img src="pHomeContent/pic/210x220-img-1.jpg"></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p class="comments">পৃথিবী আজ হাতের মুঠোয়। প্রণয়ী পাঠাগার অনলাইনে ব্যস্ত থাকা সকল বাঙালি মানুষের জন্য একটি উন্মুক্ত পাঠাগার। যখন-তখন, যেখান-সেখান থেকে অনলাইনে বই পড়তে পারবেন। এমন উদ্দেশ্যকে সামনে নিয়ে বাঙলা সাহিত্যের সংগ্রহশালা তৈরির পেছনে এক ঝাক সেচ্ছাসেবক নির্বিঘে; কাজ কলে চলছেন। তাদের অক্লান্ত পরিশ্রমকে আরও বেগবান, সাফল্যমন্ডিত </p>                    
                    </div>

                    <div>
                        <div class="img"><img src="pHomeContent/pic/210x220-img-2.jpg" alt=""></div>
                        <h2>Mr. Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="pHomeContent/pic/210x220-img-3.jpg" alt=""></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="pHomeContent/pic/210x220-img-4.jpg" alt=""></div>
                        <h2>Lorem De Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="pHomeContent/pic/210x220-img-5.jpg" alt=""></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                </div>
                <br>
                <br>
                <div class="center"><a href="{{url('congratulation-all')}}">সকল অভিন্দন দেখুন</a></div>
            </div>
        </div>
</div>


<script>
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
</script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
