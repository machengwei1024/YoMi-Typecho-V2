function otherFunction(){

var search_btn = document.getElementById("search-btn");
var search_input = document.getElementById("search-input");
var header_search = document.getElementById("header-search");
	search_btn.onclick = function(){
		if (header_search.style.top == "65px") {
			search_btn.style.transform = "rotate(0deg)";
			header_search.style.top = "0";
		}else{
			search_btn.style.transform = "rotate(360deg)";
			header_search.style.top = "65px";
			search_input.focus();
		}
	}
	var navbar_btn = document.getElementById("navbar-btn");
	var header_vertical = document.getElementById("header-vertical");
	var vertical_close = document.getElementById("vertical-close");
	var mask = document.getElementById("mask");
	navbar_btn.onclick = function(){
		navbar_btn.style.transform = "rotate(90deg)";
		header_vertical.style.left = "0";
		mask.style.display = "block";
	}
	vertical_close.onclick = mask.onclick = function(){
		navbar_btn.style.transform = "rotate(0deg)";
		header_vertical.style.left = "-400px";
		mask.style.display = "none";
	}
    var weixin = document.getElementById("weixin");    
    var weixin_img = document.getElementById("weixin-img");
    weixin.onmousemove = function(){
            weixin_img.style.display = "block";
    }
    weixin.onmouseout = function(){
            weixin_img.style.display = "none";
    }
var btn = document.getElementById("top"); 
		var clientheight = document.documentElement.clientHeight;
		var timer = null;
		var isTop = true;   
		window.onscroll = function(){
			var osTop = document.documentElement.scrollTop || document.body.scrollTop;
			if (osTop >= clientheight * 0.2) {	
				btn.style.display = "block";	
			}else{
				btn.style.display = "none";	
			}
			if (!isTop) {
				clearInterval(timer);
			}
		}
			btn.onclick = function(){
			timer = setInterval(function(){
				var osTop = document.documentElement.scrollTop || document.body.scrollTop;
				var ispeed = Math.floor(-osTop / 10);
				document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed;
				isTop = true;
				if (osTop <= 0) {
					clearInterval(timer);
				}
			},10)
		}
}