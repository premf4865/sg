










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
(function(b,c){if(window.gdaPublicStarted){return false}window.gdaPublicStarted=true;var d=swmConfOverride;b.swmAutoInit=true;var a=d.baseUrl+"/swm/resources/js/swm.public.js";if(typeof define==="function"&&define.amd){define([a],c)}else{function e(){function f(h){var g=new XMLHttpRequest();g.open("GET",h,false);g.send("");var i=document.createElement("script");i.type="text/javascript";i.text="//@ sourceURL="+h+"\n"+g.responseText;document.getElementsByTagName("head")[0].appendChild(i)}f(a)}e();c()}})(this,function(){var a=window;var b=swmConfOverride;gda_consts={};gda_consts.niveauSensibilite={};gda_consts.niveauSensibilite.NORMAL=0;gda_consts.niveauSensibilite.PEU_SENSIBLE=50;gda_consts.niveauSensibilite.SENSIBLE=100;gda_consts.niveauSensibilite.TRES_SENSIBLE=200;mode={};mode.callback="callback";mode.redirect="redirect";mode.display="display";a.gda_add_conf=function(d){return swmApi.addConf.apply(this,arguments)};a.gda_check_sign=function(d){d.actionLevel=typeof d.action_level==="undefined"?d.actionLevel:d.action_level;return swmApi.checkSign(d)};a.gda_check_tel=function(){throw new Error("gda_check_tel non disponible use gda_check_sign")};a.gda_secure=function(){throw new Error("gda_secure non disponible use gda_secure_json")};a.logout=function(){swmApi.logout.apply(this,arguments)};a.gda_sign_json_error=function(d){return swmApi.errorSign(d)};a.gda_secure_json=function(d){return swmApi.sign(d)};a.gda_record_vk=function(){throw new Error("_gda_record_vk non disponible use gda_record_vk_json")};a.gda_record_vk_json=function(d){d.callback=d.callback||d.success;return swmApi.record(d)};a.getDateDerniereConnexion=function(){return swmApi.getDateDerniereConnexion()};a.getCanalDerniereConnexion=function(){return swmApi.getCanalDerniereConnexion()};a.getDroits=function(){return swmApi.getDroits()};a.isStockageJetonActif=function(d){return swmApi.isStockageJetonActif(d)};a.setStockageJetonActif=function(d){return swmApi.setStockageJetonActif(d)};a.getIdStat=function(){return swmApi.getIdStat()};a.changeCodeSecret=function(e,f,d){return swmApi.changeCodeSecret(e,f,d)};function c(){a.gda_add_conf({ajaxFilterRegExp:/.*/})}c()});