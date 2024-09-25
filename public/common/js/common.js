/*
 * rollover.js
 */
(function($){
	$.fn.rollovers = function(o) {
		o = $.extend({
			onfile     : '_on',
			selectfile : '_select'
		}, o || {});
		
		return this.each(function(i) {
			var e = $(this);
			var src = e.attr('src');
			var ftype = src.substring(src.lastIndexOf('.'), src.length);
			var onsrc = src.replace(ftype, o.onfile + ftype);
			var selectsrc = src.replace(ftype, o.selectfile + ftype);
			var PreLoad = new Array();
			
			if(!src.match(o.onfile+ftype) && !src.match(o.selectfile+ftype)){
				PreLoad[i] = new Image();
				PreLoad[i].src = onsrc;
				
				e.hover(function(){
					e.attr('src', onsrc);
				}, function(){
					e.attr('src', src);
				});
			}
		});
	};
})(jQuery);


/**
 * scrollsmoothly.js
 * Copyright (c) 2008 KAZUMiX
 * http://d.hatena.ne.jp/KAZUMiX/
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 */
(function(){
	var easing = 0.2;
	var targetSettingY = 0;
	var interval = 20;
	var d = document;
	var targetX = 0;
	var targetY = 0;
	var targetHash = '';
	var scrolling = false;
	var splitHref = location.href.split('#');
	var currentHref_WOHash = splitHref[0];
	var incomingHash = splitHref[1];
	var prevX = null;
	var prevY = null;
	
	addEvent(window, 'load', init);
	
	function init(){
		setOnClickHandler();
		if(incomingHash){
			if(window.attachEvent && !window.opera){
				setTimeout(function(){ scrollTo(0,0); setScroll('#'+incomingHash); }, 50);
			}else{
				scrollTo(0, 0);
				setScroll('#'+incomingHash);
			}
		}
	}
	
	function addEvent(eventTarget, eventName, func){
		if(eventTarget.addEventListener){
			eventTarget.addEventListener(eventName, func, false);
		}else if(window.attachEvent){
			eventTarget.attachEvent('on'+eventName, function(){ func.apply(eventTarget); });
		}
	}
	
	function setOnClickHandler(){
		var links = d.links;
		for(var i=0; i<links.length; i++){
			var link = links[i];
			var splitLinkHref = link.href.split('#');
			if(currentHref_WOHash == splitLinkHref[0] && d.getElementById(splitLinkHref[1])){
				if(!splitLinkHref[1].match(/^tab/)){
					addEvent(link, 'click', startScroll);
				}
			}
		}
	}
	
	function startScroll(event){
		if(event){
			event.preventDefault();
		}else if(window.event){
			window.event.returnValue = false;
		}
		setScroll(this.hash);
	}
	
	function setScroll(hash){
		var targetEle = d.getElementById(hash.substr(1));
		if(!targetEle) return;
		var ele = targetEle;
		var x = 0;
		var y = 0;
		while(ele){
			x += ele.offsetLeft;
			y += ele.offsetTop;
			ele = ele.offsetParent;
		}
		targetX = x;
		targetY = y + targetSettingY;
		targetHash = hash;
		if(!scrolling){
			scrolling = true;
			scroll();
		}
	}
	
	function scroll(){
		var currentX = d.documentElement.scrollLeft||d.body.scrollLeft;
		var currentY = d.documentElement.scrollTop||d.body.scrollTop;
		var vx = (targetX - currentX) * easing;
		var vy = (targetY - currentY) * easing;
		var nextX = currentX + vx;
		var nextY = currentY + vy;
		
		if((Math.abs(vx) < 1 && Math.abs(vy) < 1) || (prevX === currentX && prevY === currentY)){
			scrollTo(targetX, targetY);
			scrolling = false;
			prevX = prevY = null;
			return;
		}else{
			scrollTo(parseInt(nextX), parseInt(nextY));
			prevX = currentX;
			prevY = currentY;
			var scope = this;
			setTimeout(function(){ scroll.apply(scope) }, interval);
		}
	}
}());


function checkDevice(ua, ver){
	var device = 'pc';
	if((ua.indexOf('iphone') > 0 && ua.indexOf('ipad') == -1) || ua.indexOf('ipod') > 0 || (ua.indexOf('android') > 0 && ua.indexOf('mobile') > 0)) {
		device = 'sp';
	}else if(ua.indexOf('ipad') > 0 || ua.indexOf('android') > 0){
		device = 'tb';
	}else{
		device = 'pc';
	}
	return device;
}


$(function(){
	var ua = window.navigator.userAgent.toLowerCase(),
		ver = window.navigator.appVersion.toLowerCase(),
		device = checkDevice(ua,ver);
	
	$('body').addClass(device);
	
	if(device == 'pc'){
		$('.rollover').rollovers();
	}
});
