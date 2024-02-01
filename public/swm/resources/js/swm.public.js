










window.swmConfOverride = {
	"version": "23.3.4",
	"firm": "BDDF",
	"market": "ENT",
	"isNGIM": true,
	"isCookieless": false,
	"media": "WEB_INT",
	"swmEnv": "prod",
	"isProspect": false,
	"isCarteAffaires": false,
    "codeClientEtoileNgim": "",
	"defaultUrl": "\/icd-web\/syd-front\/index-comptes.html",
	
	
	"isSASAuth": false,
	
	"isSupervision": false,
	"logLocal": false,
	"logNiveau": "error",
    "staticBaseUrl": "/icd/static/swm/resources/version/23.3.4",
    "baseUrl": "",
	"styles": [],
	"isDebug": false,
	
	
};


swmConfOverride.styles = ["/icd/static/swm/resources/version/23.3.4/assets/markets/BDDF/ENT/INT/style.css"];
(function(a,b){if(typeof define==="function"&&define.amd){if(typeof swmAutoInit==="undefined"){swmAutoInit=false}define(["jquery"],b)}else{if(typeof swmAutoInit==="undefined"){swmAutoInit=true}var c=a.jQueryForSwm||a.jQuery;b(c)}})(this,function(g){if(window&&typeof window.swmApi!=="undefined"){return window.swmApi}var m={};var p;var s=false;var i=false;var b={getJetonCallback:[],iStockageJetonActifCallback:[],ajaxFilter:[]};var f={};m.consts={};m.consts.niveauSensibilite={};m.consts.niveauSensibilite.NORMAL={value:0};m.consts.niveauSensibilite.SENSIBLE={value:100};m.consts.niveauSensibilite.TRES_SENSIBLE={value:200};if(typeof swmConfOverride!=="undefined"){m.version=swmConfOverride.version}m.loadSwm=function(){r("The method swm.loadSwm is deprecated, please use swm.init instead.");m.init.apply(m,arguments)};m.init=function(u){var v={mainJsPath:"/js/swm.main.js",swmMain:undefined};q(v,u);function w(){m.config=p.config;m.$=p.$;s=false;i=true;o();c("swm.available",p)}m.addConf({onAuthent:v.onAuthent,onBack:v.onBack,onClose:v.onClose,onConnecting:v.onConnecting,onInitDone:v.onInitDone,onLoadingError:v.onLoadingError,onLogout:v.onLogout,ajaxFilterRegExp:v.ajaxFilterRegExp,ajaxFilterJquery:v.ajaxFilterJquery,baseUrl:v.baseUrl});if(!i){p=v.swmMain;if(typeof p!=="undefined"){setTimeout(w,0)}else{j("swm.init",function(x){p=x;w()});if(!s){s=true;var t;if(typeof swmConfOverride!=="undefined"&&swmConfOverride.staticBaseUrl){t=(v.baseUrl||"")+swmConfOverride.staticBaseUrl+v.mainJsPath}else{t="/swm/resources/version/"+m.version+v.mainJsPath}k(t,function(){c("swm.loadingError")})}}}else{c("swm.available",p)}};if(window.swmAutoInit){j("swm.loaded",m.init)}window.swmAutoInit=undefined;m.ajaxFilter=function(u,t){if(p){u.ajaxFilterJquery=u.ajaxFilterJquery||g||p.$;if(u.ajaxFilterRegExp){u.ajaxFilterJquery.ajax=p.filterAjaxRequests(u).overridedAjax;if(typeof t==="function"){t()}}return u.ajaxFilterJquery.ajax}else{a("ajaxFilter",[u,t])}};m.onLogout=function(t){j("swm.logout",t)};m.onClose=function(t){j("swm.close",t);j("swm.closeKeyboard",t)};m.onConnecting=function(t){j("swm.connecting",t)};m.onBack=function(t){j("swm.back",t)};m.onLogoutError=function(t){j("swm.logout.error",t)};m.onAuthent=function(t){j("swm.postchgtnivauth",t)};m.setStockageJetonActif=function(t){t=t==true;if(p){p.data.setStockageJetonActif(t)}else{h("setStockageJetonActif",t)}};m.isStockageJetonActif=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.isStockageJetonActif())},0)}else{a("iStockageJetonActifCallback",t);return undefined}}};m.getJeton=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.getJeton())},0)}else{a("getJetonCallback",t);return undefined}}};m.getIdStat=function(){if(p){return p.data.getIdStat()}return undefined};m.sign=function(t,v){if(p){return p.sign(t,v)}else{var u={getData:function(){return new Error("Signature non prÃªte public.")}};h("sign",{params:[t,v],promise:u});if(typeof t==="string"){return u}}};m.triggerSwmLogout=function(){if(p){return p.triggerSwmLogout()}else{return new Error("triggerSwmLogout non prÃªte public.")}};m.record=function(t){if(p){return p.record(t)}else{h("record",arguments)}};m.checkSign=function(t){if(p){return p.checkSign(t)}else{h("checkSign",arguments)}};m.gda_handleResponse=function(w,u,v,t){if(p){return p.gda_handleResponse(w,u,v,t)}else{return undefined}};m.errorSign=function(t){var u={};u.success=t.success;u.actionLevel=t.action_level||t.actionLevel||0;u.jetonTransaction=t.context||t.jetonTransaction;u.error=t.error;u.isMessageRequired=t.isMessageRequired;u.callback=t.callback;if(p){return p.errorSign(u)}else{h("errorSign",arguments)}};m.getDateDerniereConnexion=function(){if(p){return p.data.getDateDerniereConnexion()}return undefined};m.getCanalDerniereConnexion=function(){if(p){return p.data.getCanalDerniereConnexion()}return undefined};m.getDroits=function(){if(p){return p.data.getDroits()}return undefined};m.logout=function(){if(p){p.logout.apply(m,arguments)}else{h("logout",arguments)}};m.logoutSupervision=function(){r("The method swmApi.logoutSupervision is deprecated, please use swmApi.logout instead.");m.logout()};m.resetAuthentData=function(){if(p){p.data.resetAuthentData.apply(m,arguments)}else{h("resetAuthentData",arguments)}};m.isAuthenticated=function(){if(p){return p.isAuthenticated()}return false};m.authent=function(u,t,v){if(p){t=t||function(w){if(f.preSuccess==="function"){f.preSuccess(w,function(){f.success(w)})}else{f.success(w)}};v=v||f.error;return p.authent(u,t,v)}else{h("authent",[u,t,v])}return false};m.setDefaultAuthentCallbacks=function(t){f.preSuccess=t.preSuccess||f.preSuccess;f.success=t.success||f.success;f.error=t.error||f.error};m.changeCodeSecret=function(t,u){if(p){return p.changeCodeSecret(t,u)}else{h("changeCodeSecret",[t,u])}return false};m.addConf=function(t){t.onAuthent&&j("swm.postchgtnivauth",t.onAuthent);t.onLogout&&j("swm.logout",t.onLogout);t.onBack&&j("swm.back",t.onBack);t.onClose&&j("swm.close",t.onClose);t.onConnecting&&j("swm.connecting",t.onConnecting);t.onLoadingError&&j("swm.loadingError",t.onLoadingError);t.onAjaxFilterReady&&j("swm.onResponseFilterReady",t.onAjaxFilterReady);if(t.ajaxFilterRegExp){var u={ajaxFilterRegExp:t.ajaxFilterRegExp,ajaxFilterJquery:t.ajaxFilterJquery,ajaxFilterAxios:t.ajaxFilterAxios};m.ajaxFilter(u,t.onAjaxFilterReady)}if(t.baseUrl){d(t.baseUrl)}if(typeof p!="undefined"){t.onInitDone&&t.onInitDone()}else{t.onInitDone&&j("swm.available",t.onInitDone)}};function d(t){if(p){p.config.baseUrl=t}else{h("setBaseUrl",[t])}}function h(t,u){b[t]=u;!s&&!i&&m.init()}function a(t,u){b[t].push(u);!s&&!i&&m.init()}function n(t){return t&&Object.prototype.toString.call(t)==="[object Array]"}function o(){for(var v in b){if(v==="iStockageJetonActifCallback"||v==="getJetonCallback"){for(var u in b[v]){m.hasOwnProperty(v)&&typeof m[v]==="function"&&m[v](u)}}else{if(v==="signature"){var w=m[v].apply(m,b[v].params);if(typeof w==="object"){b.signature.promise.getData=w}}else{if(v==="setBaseUrl"){d.apply(m,b.setBaseUrl)}else{if(n(b[v])){for(var t in b[v]){b[v].hasOwnProperty(t)&&m[v].apply(m,b[v][t])}}else{m[v].apply(m,b[v])}}}}}b={getJetonCallback:[],iStockageJetonActifCallback:[]}}function c(t,v){var u=document.createEvent("Event");u.initEvent(t,true,true);u.data=v;document.dispatchEvent(u);var x=window.self!==window.top;if(x){try{top.document.dispatchEvent(u)}catch(w){}}}g&&(g.fn.triggerExternal=c);function j(u,v){var t=function(w){if(typeof v==="function"){v(w.data)}};document.removeEventListener(u,t);document.addEventListener(u,t)}function k(u,v){if(g&&typeof g.Deferred!=="undefined"){var t=l(u);g.when(t).fail(v)}else{e(u,v)}}function l(v){var t=g.Deferred(),u=document.createElement("script");u.async="async";u.type="text/javascript";u.src=v;u.onload=u.onreadystatechange=function(x,w){if(!u.readyState||/loaded|complete/.test(u.readyState)){if(w){t.reject()}else{t.resolve()}}};u.onerror=function(){t.reject()};g("head")[0].appendChild(u);return t.promise()}function e(u,v){var t=document.createElement("script");t.async=false;t.src=u;t.type="text/javascript";t.onerror=v;t.charset="UTF-8";document.getElementsByTagName("head")[0].appendChild(t)}function r(u){try{console&&typeof console.warn==="function"&&console.warn("[SWM] "+u)}catch(t){}}function q(u,t){if(t){for(var v in t){if(t.hasOwnProperty(v)){u[v]=t[v]}}}return u}setTimeout(function(){c("swm.loaded",m)},0);window.swmApi=m;return m});