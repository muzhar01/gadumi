var E=(a,r)=>()=>(r||a((r={exports:{}}).exports,r),r.exports);var I=E((b,c)=>{/*!
 * imagesLoaded PACKAGED v4.1.4
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */(function(a,r){typeof define=="function"&&define.amd?define("ev-emitter/ev-emitter",r):typeof c=="object"&&c.exports?c.exports=r():a.EvEmitter=r()})(typeof window<"u"?window:globalThis,function(){function a(){}var r=a.prototype;return r.on=function(h,d){if(h&&d){var i=this._events=this._events||{},o=i[h]=i[h]||[];return o.indexOf(d)==-1&&o.push(d),this}},r.once=function(h,d){if(h&&d){this.on(h,d);var i=this._onceEvents=this._onceEvents||{},o=i[h]=i[h]||{};return o[d]=!0,this}},r.off=function(h,d){var i=this._events&&this._events[h];if(i&&i.length){var o=i.indexOf(d);return o!=-1&&i.splice(o,1),this}},r.emitEvent=function(h,d){var i=this._events&&this._events[h];if(i&&i.length){i=i.slice(0),d=d||[];for(var o=this._onceEvents&&this._onceEvents[h],u=0;u<i.length;u++){var p=i[u],m=o&&o[p];m&&(this.off(h,p),delete o[p]),p.apply(this,d)}return this}},r.allOff=function(){delete this._events,delete this._onceEvents},a}),function(a,r){typeof define=="function"&&define.amd?define(["ev-emitter/ev-emitter"],function(h){return r(a,h)}):typeof c=="object"&&c.exports?c.exports=r(a,require("ev-emitter")):a.imagesLoaded=r(a,a.EvEmitter)}(typeof window<"u"?window:globalThis,function(a,r){function h(t,e){for(var n in e)t[n]=e[n];return t}function d(t){if(Array.isArray(t))return t;var e=typeof t=="object"&&typeof t.length=="number";return e?v.call(t):[t]}function i(t,e,n){if(!(this instanceof i))return new i(t,e,n);var s=t;return typeof t=="string"&&(s=document.querySelectorAll(t)),s?(this.elements=d(s),this.options=h({},this.options),typeof e=="function"?n=e:h(this.options,e),n&&this.on("always",n),this.getImages(),p&&(this.jqDeferred=new p.Deferred),void setTimeout(this.check.bind(this))):void m.error("Bad element for imagesLoaded "+(s||t))}function o(t){this.img=t}function u(t,e){this.url=t,this.element=e,this.img=new Image}var p=a.jQuery,m=a.console,v=Array.prototype.slice;i.prototype=Object.create(r.prototype),i.prototype.options={},i.prototype.getImages=function(){this.images=[],this.elements.forEach(this.addElementImages,this)},i.prototype.addElementImages=function(t){t.nodeName=="IMG"&&this.addImage(t),this.options.background===!0&&this.addElementBackgroundImages(t);var e=t.nodeType;if(e&&l[e]){for(var n=t.querySelectorAll("img"),s=0;s<n.length;s++){var f=n[s];this.addImage(f)}if(typeof this.options.background=="string"){var g=t.querySelectorAll(this.options.background);for(s=0;s<g.length;s++){var y=g[s];this.addElementBackgroundImages(y)}}}};var l={1:!0,9:!0,11:!0};return i.prototype.addElementBackgroundImages=function(t){var e=getComputedStyle(t);if(e)for(var n=/url\((['"])?(.*?)\1\)/gi,s=n.exec(e.backgroundImage);s!==null;){var f=s&&s[2];f&&this.addBackground(f,t),s=n.exec(e.backgroundImage)}},i.prototype.addImage=function(t){var e=new o(t);this.images.push(e)},i.prototype.addBackground=function(t,e){var n=new u(t,e);this.images.push(n)},i.prototype.check=function(){function t(n,s,f){setTimeout(function(){e.progress(n,s,f)})}var e=this;return this.progressedCount=0,this.hasAnyBroken=!1,this.images.length?void this.images.forEach(function(n){n.once("progress",t),n.check()}):void this.complete()},i.prototype.progress=function(t,e,n){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!t.isLoaded,this.emitEvent("progress",[this,t,e]),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,t),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&m&&m.log("progress: "+n,t,e)},i.prototype.complete=function(){var t=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emitEvent(t,[this]),this.emitEvent("always",[this]),this.jqDeferred){var e=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[e](this)}},o.prototype=Object.create(r.prototype),o.prototype.check=function(){var t=this.getIsImageComplete();return t?void this.confirm(this.img.naturalWidth!==0,"naturalWidth"):(this.proxyImage=new Image,this.proxyImage.addEventListener("load",this),this.proxyImage.addEventListener("error",this),this.img.addEventListener("load",this),this.img.addEventListener("error",this),void(this.proxyImage.src=this.img.src))},o.prototype.getIsImageComplete=function(){return this.img.complete&&this.img.naturalWidth},o.prototype.confirm=function(t,e){this.isLoaded=t,this.emitEvent("progress",[this,this.img,e])},o.prototype.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},o.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},o.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},o.prototype.unbindEvents=function(){this.proxyImage.removeEventListener("load",this),this.proxyImage.removeEventListener("error",this),this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},u.prototype=Object.create(o.prototype),u.prototype.check=function(){this.img.addEventListener("load",this),this.img.addEventListener("error",this),this.img.src=this.url;var t=this.getIsImageComplete();t&&(this.confirm(this.img.naturalWidth!==0,"naturalWidth"),this.unbindEvents())},u.prototype.unbindEvents=function(){this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},u.prototype.confirm=function(t,e){this.isLoaded=t,this.emitEvent("progress",[this,this.element,e])},i.makeJQueryPlugin=function(t){t=t||a.jQuery,t&&(p=t,p.fn.imagesLoaded=function(e,n){var s=new i(this,e,n);return s.jqDeferred.promise(p(this))})},i.makeJQueryPlugin(),i})});export default I();