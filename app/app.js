!function(e){var n={};function t(o){if(n[o])return n[o].exports;var a=n[o]={i:o,l:!1,exports:{}};return e[o].call(a.exports,a,a.exports,t),a.l=!0,a.exports}t.m=e,t.c=n,t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:o})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(t.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var a in e)t.d(o,a,function(n){return e[n]}.bind(null,a));return o},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=0)}([function(e,n,t){e.exports=t(3)},function(e,n,t){},function(e,n){!function(e,n,t){function o(e,n){return typeof e===n}function a(e){var n=u.className,t=l._config.classPrefix||"";if(f&&(n=n.baseVal),l._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}l._config.enableClasses&&(n+=" "+t+e.join(" "+t),f?u.className.baseVal=n:u.className=n)}function i(e,n){if("object"==typeof e)for(var t in e)c(e,t)&&i(t,e[t]);else{var o=(e=e.toLowerCase()).split("."),r=l[o[0]];if(2==o.length&&(r=r[o[1]]),void 0!==r)return l;n="function"==typeof n?n():n,1==o.length?l[o[0]]=n:(!l[o[0]]||l[o[0]]instanceof Boolean||(l[o[0]]=new Boolean(l[o[0]])),l[o[0]][o[1]]=n),a([(n&&0!=n?"":"no-")+o.join("-")]),l._trigger(e,n)}return l}var r=[],A=[],s={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout((function(){n(t[e])}),0)},addTest:function(e,n,t){A.push({name:e,fn:n,options:t})},addAsyncTest:function(e){A.push({name:null,fn:e})}},l=function(){};l.prototype=s,l=new l;var c,u=n.documentElement,f="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;c=o(e,"undefined")||o(e.call,"undefined")?function(e,n){return n in e&&o(e.constructor.prototype[n],"undefined")}:function(n,t){return e.call(n,t)}}(),s._l={},s.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),l.hasOwnProperty(e)&&setTimeout((function(){l._trigger(e,l[e])}),0)},s._trigger=function(e,n){if(this._l[e]){var t=this._l[e];setTimeout((function(){var e;for(e=0;e<t.length;e++)(0,t[e])(n)}),0),delete this._l[e]}},l._q.push((function(){s.addTest=i})),l.addAsyncTest((function(){function e(e,n,t){function o(n){var o=!(!n||"load"!==n.type)&&1==a.width;i(e,"webp"===e&&o?new Boolean(o):o),t&&t(n)}var a=new Image;a.onerror=o,a.onload=o,a.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],t=n.shift();e(t.name,t.uri,(function(t){if(t&&"load"===t.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)}))})),function(){var e,n,t,a,i,s;for(var c in A)if(A.hasOwnProperty(c)){if(e=[],(n=A[c]).name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(a=o(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)1===(s=e[i].split(".")).length?l[s[0]]=a:(!l[s[0]]||l[s[0]]instanceof Boolean||(l[s[0]]=new Boolean(l[s[0]])),l[s[0]][s[1]]=a),r.push((a?"":"no-")+s.join("-"))}}(),a(r),delete s.addTest,delete s.addAsyncTest;for(var d=0;d<l._q.length;d++)l._q[d]();e.Modernizr=l}(window,document)},function(e,n,t){"use strict";t.r(n);t(1);t(2);!function(){document.querySelectorAll("[data-animar]").forEach(e=>{if(e.getBoundingClientRect().top<window.innerHeight)return e.classList.add("animar");window.addEventListener("scroll",n=>{const t=.85*window.innerHeight;e.getBoundingClientRect().top<t&&e.classList.add("animar")})});const e=document.querySelectorAll("[data-anima-tempo]");window.setTimeout(()=>{e.forEach(e=>{e.classList.add("animar")})},500)}(),function(){const e=document.querySelector('[data-menu="button"]'),n=document.querySelector('[data-menu="menu"]');if(!e||!n)return null;e.addEventListener("click",t=>{t.preventDefault(),n.classList.toggle("ativo"),e.classList.toggle("ativo")})}(),function(){const e=document.querySelectorAll(".teste .wpcf7-list-item");e.forEach(e=>{const n=document.createElement("div");n.classList.add("my-checkbox"),e.appendChild(n)}),e.forEach(n=>{n.addEventListener("click",()=>{e.forEach(e=>{e.classList.remove("ativo")}),n.classList.add("ativo")})})}()}]);