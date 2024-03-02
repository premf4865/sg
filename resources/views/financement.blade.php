<!DOCTYPE html><html lang="fr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script charset="UTF-8" src="js/n2g_secu.js"></script>
    <script type="text/javascript">frame_shield();</script>
    <title>Financement</title>
        <meta name="title" content="Financement">
        <meta name="keywords" content="SG, SG pro, SG PROFESSIONNEL, société générale professionnel, Société Générale, entreprise,&nbsp;société générale, entreprise,&nbsp;sogecashnet, Sogecashnet, Sg particulier, Société générale particulier">
        <meta property="og:title" content="Financement">
        <meta property="og:url" content="#">
    <meta name="twitter:card" content="summary">
<meta charset="utf-8"><meta name="viewport" content="initial-scale=1, maximum-scale=1, viewport-fit=cover"><link rel="icon" type="image/x-icon" href="favicon.ico">

    <script type="text/javascript">
if (typeof userSegments === "undefined") {
    var userSegments = [];
}
if (typeof userSegmentNames === "undefined") {
    var userSegmentNames = [];
}

    userSegments.push("S--1470891196-0000000000000000000000RCRD");

    userSegments.push("S-1291998658-00000000000000000000000RCRD");

    userSegments.push("S-1609544352-00000000000000000000000RCRD");

    userSegmentNames.push("0");

    userSegmentNames.push("Desktop");

    userSegmentNames.push("Clients_Generiques");
</script>
<link href="css/print.min.css" rel="stylesheet" type="text/css" media="print">
            <link href="css/index.min.css" rel="stylesheet" type="text/css">
                <script type="text/javascript">
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) {
            return parts.pop().split(";").shift();
        }
        return "";
    }

    function setValue(defaultVal, val) {
        if (val == null || val.trim() === '') {
            return defaultVal
        }
        return val;
    }


    function setValueBoolean(defaultVal, val) {
        if (val == null || val.trim() === '') {
            return defaultVal
        }
        return val == 1;
    }

    function addAdditionalParams(tc_vars) {
        try {
            var additionals = ""
            additionals = additionals.replace(/'/g, "").replace(/"/g, '')
            const params = additionals.split(',')
            for (var i = 0; i < params.length; i++) {
                const param = params[i].split(':')
                tc_vars[param[0].trim()] = param[1].trim()
            };
        } catch (e) {
        }
    }
    function getTechnicalUrl() {
        var parser = document.createElement("a");
        parser.href = document.querySelector('meta[property="og:url"]').content;
        var technical_url = parser.href.replace(parser.protocol +'//'+ parser.hostname,'');
        return technical_url
    }

    function getEnvRelease(){
        var urlEnv = window.location.href;
        if(urlEnv.indexOf("sg.fr") > -1){
            return "sg";
        }else{
            return "societe-generale";
        }
    }

    const empty = "";
    //const version = "V3";
    var tc_vars = {
        "page_section": setValue(empty, ""),
        "page_category_1": "",
        "page_category_2": "",
        "page_category_3": "",
        "page_name": "financement",
        "page_type": setValue(empty, ""),
        "page_noload": false,
        "no_load": false,
        "product_category_1": setValue(empty, ""),
        "product_category_2": setValue(empty, ""),
        "product_category_3": setValue(empty, ""),
        "product_category_4": setValue(empty, ""),
        "product_category_5": setValue(empty, ""),
        "product_name_trade": setValue(empty, ""),
        "product_target": setValue(empty, ""),
        "env_channel": setValue("website", ""),
        "env_market": setValue("entreprises", ""),
        "env_work": "production",
        "user_is_identified": false,
        "user_is_supervisor" : false,
        "env_is_private": setValueBoolean(false, ""),
        "page_technical_url": getTechnicalUrl(),
        "user_bank":setValue(empty, ""),
        "env_domain":getEnvRelease()
    };
    addAdditionalParams(tc_vars);

    var xiti_xtn2 = "";
    var xtn2 = "";



    var sasInf = document.getElementById('sas_user_info');
    if (sasInf) {
        var sasHtml = sasInf.innerHTML;
        try {
            var sasJs = JSON.parse(sasHtml.trim());
            if (sasJs && sasJs.IdStat && sasJs["user-info-firstname"] && sasJs["user-info-lastname"]) {
                tc_vars["user_id"] = sasJs.IdStat;
                tc_vars["user_is_logged"] = true;


            } else {
                tc_vars["user_is_logged"] = false;

            }
            if(sasJs && sasJs["user-info-sup"]==="true" ){
                tc_vars["user_is_supervisor"] = true;

            }else{
                tc_vars["user_is_supervisor"] = false;

            }

        } catch (e) {
            tc_vars["user_is_logged"] = false;

        }
    } else {
        tc_vars["user_is_logged"] = false;

    }
</script>
<script type="text/javascript">
// Duration in milliseconds to wait while the Kameleoon application file is loaded
var kameleoonLoadingTimeout = 1000;

window.kameleoonQueue = window.kameleoonQueue || [];
window.kameleoonStartLoadTime = new Date().getTime();
if (! document.getElementById("kameleoonLoadingStyleSheet") && ! window.kameleoonDisplayPageTimeOut)
{
    var kameleoonS = document.getElementsByTagName("script")[0];
    var kameleoonCc = "* { visibility: hidden !important; background-image: none !important; }";
    var kameleoonStn = document.createElement("style");
    kameleoonStn.type = "text/css";
    kameleoonStn.id = "kameleoonLoadingStyleSheet";
    if (kameleoonStn.styleSheet)
    {
        kameleoonStn.styleSheet.cssText = kameleoonCc;
    }
    else
    {
        kameleoonStn.appendChild(document.createTextNode(kameleoonCc));
    }
    kameleoonS.parentNode.insertBefore(kameleoonStn, kameleoonS);
    window.kameleoonDisplayPage = function(fromEngine)
    {
        if (!fromEngine)
        {
            window.kameleoonTimeout = true;
        }
        if (kameleoonStn.parentNode)
        {
            kameleoonStn.parentNode.removeChild(kameleoonStn);
        }
    };
    window.kameleoonDisplayPageTimeOut = window.setTimeout(window.kameleoonDisplayPage, kameleoonLoadingTimeout);
}

(function ()
{
window.kameleoonQueue = window.kameleoonQueue || [];

kameleoonQueue.push(['Data.setCustomData', 'user_is_logged', tc_vars.user_is_logged]);
kameleoonQueue.push(['Data.setCustomData', 'user_is_identified', tc_vars.user_is_identified]);
kameleoonQueue.push(['Data.setCustomData', 'env_channel', tc_vars.env_channel]);
kameleoonQueue.push(['Data.setCustomData', 'env_market', tc_vars.env_market]);
kameleoonQueue.push(['Data.setCustomData', 'env_work', tc_vars.env_work]);
kameleoonQueue.push(['Data.setCustomData', 'env_is_private', tc_vars.env_is_private]);

var pageName = [];
var pageCategory1 = tc_vars.page_category_1;
var pageCategory2 = tc_vars.page_category_2;
var pageCategory3 = tc_vars.page_category_3;

if (pageCategory1)
    pageName.push(pageCategory1);

if (pageCategory2)
    pageName.push(pageCategory2);

if (pageCategory3)
    pageName.push(pageCategory3);

pageName.push(tc_vars.page_name);

kameleoonQueue.push(['Data.setCustomData', 'page_name', pageName.join("::")]);
kameleoonQueue.push(['Data.setCustomData', 'page_type', tc_vars.page_type]);
})();
</script><script charset="UTF-8" src="js/head-section-async_testing-main_17030893010000.js" async=""></script><script>
if (!window.cmsConstants) window.cmsConstants = {};

window.cmsConstants.LOGGER_SERVICE_END_POINT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER = "error";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT = "debug";

window.cmsConstants.LOGGER_SERVICE_END_POINT_DEFAULT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER_DEFAULT = "ERROR";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT_DEFAULT = "ERROR";
</script><script charset="UTF-8" src="js/init-configs.js"></script>
                    <script charset="UTF-8" src="js/dca_portail_global.js"></script>
                    <script charset="UTF-8" src="js/public-dca.js"></script>
                    <script charset="UTF-8" src="js/gda.public.js"></script>
                    <script charset="UTF-8" src="js/vendor.min.js"></script>
            <script charset="UTF-8" src="js/index.min.js"></script>
            <script charset="UTF-8" src="js/public-tms.js"></script>
                    </head>
<body>
    <button class="dcw_skip" onclick="scrollToElement('go-navigation');">Aller au menu principal</button>
<button class="dcw_skip" onclick="scrollToElement('go-content');">Aller au contenu</button>
<header role="banner" class="rsp_header header-deco js-header-lhs-no-auth">
<nav class="rsp_nav rsp_nav--above" style="z-index: 11;">
    <ul class="rsp_nav__list">
        <li class="dcw_dropdown dcw_dropdown_button js-dropdown-light">
    <button class="rsp_dropdown rsp_btn--toggle js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" type="button" data-bs-toggle="dropdown" aria-controls="id_menu_deroulant">
    Entreprises
    <svg class="dcw_dropdown_icon_arrow" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#arrow-dropdown"></use></svg>
</button>

<ul class="dcw_dropdown_list toggle_content" id="id_menu_deroulant">
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;banque-privee&quot;})"><span>Banque Privée</span></a>
        </li>
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;particuliers&quot;})"><span>Particuliers</span></a>
        </li>
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;professionnels&quot;})"><span>Professionnels</span></a>
        </li>
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;associations&quot;})"><span>Associations</span></a>
        </li>
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;économie-publique&quot;})"><span>Économie publique</span></a>
        </li>
        <li class="rsp_dropdown_item">
            <a class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;decouvrir-sg&quot;})"><span>Découvrir SG</span></a>
        </li>
</ul>
</li>        <li class="rsp_nav__item rsp_nav__item--push-right" data-channelid="">
        <a href="{{ route('login') }}" class="rsp_nav__link" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;centres-d-affaires&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-localisation"></use></svg><span>Centres d'affaires</span></a>
    </li>
    <li class="rsp_nav__item" data-channelid="32e2654d31c94710VgnVCM10000057f440c0RCRD">
        <a href="{{ route('login') }}" class="rsp_nav__link" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;aide-et-contacts&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-urgence"></use></svg><span>Contacts</span></a>
    </li>
    <li class="rsp_nav__item" data-channelid="5efa74ecc6d70510VgnVCM100000867440c0RCRD">
        <a href="{{ route('login') }}" class="rsp_nav__link" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;securite&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#fonc-moyens-securite"></use></svg><span>Sécurité</span></a>
    </li>
</ul>
</nav>
<div class="rsp_header__wrapper-nav">
    <button class="rsp_btn rsp_btn--burger js-header-burger" aria-controls="menuMobile" aria-expanded="false">
<svg class="picto-menu  v-align-middle" aria-label="ouvrir le menu" aria-labelledby="picto-menu" role="img" viewBox="0 0 24 26" height="26" width="24"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-burger-menu"></use></svg>
<svg class="picto-close v-align-middle" aria-label="fermer le menu" aria-labelledby="picto-menu" role="img" viewBox="0 0 20 20" height="20" width="20"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-burger-close"></use></svg>
</button>
























  <a href="/" class="rsp_header__logo-mob" title="SG - Aller à l'accueil" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::logo-entreprises'})">
  <svg role="img" aria-label="Logo SG - C'est vous l'avenir" focusable="false" height="48" width="197" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 140.2 34.1" style="enable-background:new 0 0 140.2 34.1; xml:space=" preserve"="">
    <style type="text/css">
      .st0{fill:none;}
      .st1{fill:#E60028;}
      .st2{fill:#FFFFFF;}
    </style>
    <rect x="-10.1" y="-9.8" class="st0" width="160.2" height="53.9"></rect>
    <g>
      <path d="M73,12.1c0-2.2,1.7-3.7,4-3.7c1.3,0,2.4,0.5,3.1,1.4l-1.3,1.2c-0.5-0.5-1-0.8-1.7-0.8c-1.2,0-2,0.8-2,2.1   c0,1.2,0.8,2.1,2,2.1c0.7,0,1.2-0.3,1.7-0.8l1.3,1.2c-0.7,0.9-1.8,1.4-3.1,1.4C74.7,15.9,73,14.3,73,12.1z"></path>
      <path d="M82.9,9.1c0,0.3,0,0.5-0.3,1.2l-0.7,1.5h-1.2l0.5-1.7c-0.4-0.2-0.6-0.5-0.6-1C80.5,8.4,81,8,81.7,8   C82.4,8,82.9,8.4,82.9,9.1z"></path>
      <path d="M89.6,14.1v1.6h-5.8V8.5h5.7v1.6h-3.6v1.2h3.2v1.5h-3.2v1.3H89.6z"></path>
      <path d="M90.2,15.1l0.7-1.5c0.6,0.4,1.5,0.7,2.4,0.7c0.8,0,1.2-0.2,1.2-0.6c0-1.1-4.1-0.3-4.1-3c0-1.3,1.1-2.3,3.2-2.3   c0.9,0,1.9,0.2,2.6,0.6l-0.6,1.5c-0.7-0.4-1.4-0.6-2-0.6c-0.9,0-1.2,0.3-1.2,0.6c0,1.1,4.1,0.3,4.1,2.9c0,1.3-1.1,2.3-3.2,2.3   C92.1,15.9,90.9,15.5,90.2,15.1z"></path>
      <path d="M99.1,10.1h-2.2V8.5h6.5v1.6h-2.2v5.6h-2V10.1z"></path>
      <path d="M114.6,8.5l-3.1,7.2h-2l-3.1-7.2h2.2l2,4.7l2-4.7H114.6z"></path>
      <path d="M114.3,12.1c0-2.2,1.7-3.7,4-3.7c2.3,0,4,1.6,4,3.7s-1.7,3.7-4,3.7C116,15.9,114.3,14.3,114.3,12.1z M120.3,12.1   c0-1.2-0.9-2.1-1.9-2.1c-1.1,0-1.9,0.8-1.9,2.1s0.9,2.1,1.9,2.1C119.4,14.2,120.3,13.4,120.3,12.1z"></path>
      <path d="M123.5,12.5v-4h2v3.9c0,1.2,0.5,1.7,1.4,1.7c0.8,0,1.4-0.5,1.4-1.7V8.5h2v4c0,2.2-1.3,3.4-3.4,3.4   C124.8,15.9,123.5,14.7,123.5,12.5z"></path>
      <path d="M131.1,15.1l0.7-1.5c0.6,0.4,1.5,0.7,2.4,0.7c0.8,0,1.2-0.2,1.2-0.6c0-1.1-4.1-0.3-4.1-3c0-1.3,1.1-2.3,3.2-2.3   c0.9,0,1.9,0.2,2.6,0.6l-0.6,1.5c-0.7-0.4-1.4-0.6-2-0.6c-0.9,0-1.2,0.3-1.2,0.6c0,1.1,4.1,0.3,4.1,2.9c0,1.3-1.1,2.3-3.2,2.3   C133,15.9,131.8,15.5,131.1,15.1z"></path>
      <path d="M73.3,18.5h2v5.6h3.4v1.6h-5.5V18.5z"></path>
      <path d="M80.7,19.2c0,0.3,0,0.5-0.3,1.2l-0.7,1.5h-1.2l0.5-1.7c-0.4-0.2-0.6-0.5-0.6-1c0-0.7,0.5-1.2,1.2-1.2   C80.2,18,80.7,18.5,80.7,19.2z"></path>
      <path d="M85.9,24.4h-3l-0.6,1.4h-2.1l3.2-7.2h2l3.2,7.2h-2.1L85.9,24.4z M85.3,22.9l-0.9-2.3l-0.9,2.3H85.3z"></path>
      <path d="M95.2,18.5l-3.1,7.2h-2L87,18.5h2.2l2,4.7l2-4.7H95.2z"></path>
      <path d="M101.7,24.2v1.6h-5.8v-7.2h5.7v1.6H98v1.2h3.2v1.5H98v1.3H101.7z"></path>
      <path d="M109.7,18.5v7.2H108l-3.2-3.8v3.8h-2v-7.2h1.7l3.2,3.8v-3.8H109.7z"></path>
      <path d="M111.1,18.5h2v7.2h-2V18.5z"></path>
      <path d="M117.6,23.8h-1.1v1.9h-2v-7.2h3.3c2,0,3.2,1,3.2,2.7c0,1.1-0.5,1.8-1.4,2.3l1.6,2.3H119L117.6,23.8z M117.7,20.2h-1.1v2.1   h1.1c0.8,0,1.3-0.4,1.3-1.1C118.9,20.5,118.5,20.2,117.7,20.2z"></path>
    </g>
    <g>
      <path d="M9.1,15.6l1.3,0.3c3.2,0.7,4.6,2.1,4.6,4.6c0,3.1-2.3,4.8-6.6,4.8H2.8v-3.3c1.9,0.4,3.8,0.6,5.5,0.6c2.5,0,3.7-0.7,3.7-1.9   c0-1.3-0.6-1.7-3.4-2.3l-1.3-0.3c-3.2-0.6-4.6-2.1-4.6-4.6C2.7,10.6,5,8.9,9,8.9h5.1v3.3c-1.8-0.4-3.3-0.6-4.9-0.6   c-2.2,0-3.5,0.7-3.5,1.9C5.7,14.7,6.4,15.1,9.1,15.6z M31.3,17.1v8.2H26c-6,0-9.4-3-9.4-8.2c0-5.2,3.5-8.2,9.4-8.2h4.1v3.2   c-1.4-0.3-2.9-0.5-4.2-0.5c-3.8,0-6.1,2-6.1,5.5c0,3.4,2.3,5.4,6.1,5.4h2.5l0-5.4H31.3z"></path>
    </g>
    <rect x="38.2" y="3" class="st1" width="28.3" height="12.8"></rect>
    <rect x="38.2" y="18.5" width="28.3" height="12.8"></rect>
    <rect x="38.2" y="15.7" class="st2" width="28.3" height="2.8"></rect>
  </svg>
</a>
<a href="/" class="rsp_header__logo-desktop ml-m" title="SG - Aller à l'accueil" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::logo-entreprises'})">
  <svg role="img" aria-label="Logo SG - C'est vous l'avenir" focusable="false" height="55" width="230" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 140.2 34.1" style="enable-background:new 0 0 140.2 34.1;" xml:space="preserve">
    <style type="text/css">
      .st0{fill:none;}
      .st1{fill:#E60028;}
      .st2{fill:#FFFFFF;}
    </style>
    <rect x="-10.1" y="-9.8" class="st0" width="160.2" height="53.9"></rect>
    <g>
      <path d="M73,12.1c0-2.2,1.7-3.7,4-3.7c1.3,0,2.4,0.5,3.1,1.4l-1.3,1.2c-0.5-0.5-1-0.8-1.7-0.8c-1.2,0-2,0.8-2,2.1   c0,1.2,0.8,2.1,2,2.1c0.7,0,1.2-0.3,1.7-0.8l1.3,1.2c-0.7,0.9-1.8,1.4-3.1,1.4C74.7,15.9,73,14.3,73,12.1z"></path>
      <path d="M82.9,9.1c0,0.3,0,0.5-0.3,1.2l-0.7,1.5h-1.2l0.5-1.7c-0.4-0.2-0.6-0.5-0.6-1C80.5,8.4,81,8,81.7,8   C82.4,8,82.9,8.4,82.9,9.1z"></path>
      <path d="M89.6,14.1v1.6h-5.8V8.5h5.7v1.6h-3.6v1.2h3.2v1.5h-3.2v1.3H89.6z"></path>
      <path d="M90.2,15.1l0.7-1.5c0.6,0.4,1.5,0.7,2.4,0.7c0.8,0,1.2-0.2,1.2-0.6c0-1.1-4.1-0.3-4.1-3c0-1.3,1.1-2.3,3.2-2.3   c0.9,0,1.9,0.2,2.6,0.6l-0.6,1.5c-0.7-0.4-1.4-0.6-2-0.6c-0.9,0-1.2,0.3-1.2,0.6c0,1.1,4.1,0.3,4.1,2.9c0,1.3-1.1,2.3-3.2,2.3   C92.1,15.9,90.9,15.5,90.2,15.1z"></path>
      <path d="M99.1,10.1h-2.2V8.5h6.5v1.6h-2.2v5.6h-2V10.1z"></path>
      <path d="M114.6,8.5l-3.1,7.2h-2l-3.1-7.2h2.2l2,4.7l2-4.7H114.6z"></path>
      <path d="M114.3,12.1c0-2.2,1.7-3.7,4-3.7c2.3,0,4,1.6,4,3.7s-1.7,3.7-4,3.7C116,15.9,114.3,14.3,114.3,12.1z M120.3,12.1   c0-1.2-0.9-2.1-1.9-2.1c-1.1,0-1.9,0.8-1.9,2.1s0.9,2.1,1.9,2.1C119.4,14.2,120.3,13.4,120.3,12.1z"></path>
      <path d="M123.5,12.5v-4h2v3.9c0,1.2,0.5,1.7,1.4,1.7c0.8,0,1.4-0.5,1.4-1.7V8.5h2v4c0,2.2-1.3,3.4-3.4,3.4   C124.8,15.9,123.5,14.7,123.5,12.5z"></path>
      <path d="M131.1,15.1l0.7-1.5c0.6,0.4,1.5,0.7,2.4,0.7c0.8,0,1.2-0.2,1.2-0.6c0-1.1-4.1-0.3-4.1-3c0-1.3,1.1-2.3,3.2-2.3   c0.9,0,1.9,0.2,2.6,0.6l-0.6,1.5c-0.7-0.4-1.4-0.6-2-0.6c-0.9,0-1.2,0.3-1.2,0.6c0,1.1,4.1,0.3,4.1,2.9c0,1.3-1.1,2.3-3.2,2.3   C133,15.9,131.8,15.5,131.1,15.1z"></path>
      <path d="M73.3,18.5h2v5.6h3.4v1.6h-5.5V18.5z"></path>
      <path d="M80.7,19.2c0,0.3,0,0.5-0.3,1.2l-0.7,1.5h-1.2l0.5-1.7c-0.4-0.2-0.6-0.5-0.6-1c0-0.7,0.5-1.2,1.2-1.2   C80.2,18,80.7,18.5,80.7,19.2z"></path>
      <path d="M85.9,24.4h-3l-0.6,1.4h-2.1l3.2-7.2h2l3.2,7.2h-2.1L85.9,24.4z M85.3,22.9l-0.9-2.3l-0.9,2.3H85.3z"></path>
      <path d="M95.2,18.5l-3.1,7.2h-2L87,18.5h2.2l2,4.7l2-4.7H95.2z"></path>
      <path d="M101.7,24.2v1.6h-5.8v-7.2h5.7v1.6H98v1.2h3.2v1.5H98v1.3H101.7z"></path>
      <path d="M109.7,18.5v7.2H108l-3.2-3.8v3.8h-2v-7.2h1.7l3.2,3.8v-3.8H109.7z"></path>
      <path d="M111.1,18.5h2v7.2h-2V18.5z"></path>
      <path d="M117.6,23.8h-1.1v1.9h-2v-7.2h3.3c2,0,3.2,1,3.2,2.7c0,1.1-0.5,1.8-1.4,2.3l1.6,2.3H119L117.6,23.8z M117.7,20.2h-1.1v2.1   h1.1c0.8,0,1.3-0.4,1.3-1.1C118.9,20.5,118.5,20.2,117.7,20.2z"></path>
    </g>
    <g>
      <path d="M9.1,15.6l1.3,0.3c3.2,0.7,4.6,2.1,4.6,4.6c0,3.1-2.3,4.8-6.6,4.8H2.8v-3.3c1.9,0.4,3.8,0.6,5.5,0.6c2.5,0,3.7-0.7,3.7-1.9   c0-1.3-0.6-1.7-3.4-2.3l-1.3-0.3c-3.2-0.6-4.6-2.1-4.6-4.6C2.7,10.6,5,8.9,9,8.9h5.1v3.3c-1.8-0.4-3.3-0.6-4.9-0.6   c-2.2,0-3.5,0.7-3.5,1.9C5.7,14.7,6.4,15.1,9.1,15.6z M31.3,17.1v8.2H26c-6,0-9.4-3-9.4-8.2c0-5.2,3.5-8.2,9.4-8.2h4.1v3.2   c-1.4-0.3-2.9-0.5-4.2-0.5c-3.8,0-6.1,2-6.1,5.5c0,3.4,2.3,5.4,6.1,5.4h2.5l0-5.4H31.3z"></path>
    </g>
    <rect x="38.2" y="3" class="st1" width="28.3" height="12.8"></rect>
    <rect x="38.2" y="18.5" width="28.3" height="12.8"></rect>
    <rect x="38.2" y="15.7" class="st2" width="28.3" height="2.8"></rect>
  </svg>
</a>



<nav class="rsp_nav" role="navigation" aria-label="navigation principale">
        <a id="go-navigation" tabindex="-1"></a>
        <ul class="rsp_nav__list js-nav-desktop">
                  <li data-channelid="fe1b6ce60f41f410VgnVCM100000877440c0RCRD" class="rsp_nav__item js-mainnav-link ml-auto">
     <a class="rsp_nav__link" href="/financement" data-element-label="financement" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;financement&quot;})">Financement</a>
  </li>
  <li data-channelid="ea68e1376ff3f410VgnVCM100000877440c0RCRD" class="rsp_nav__item js-mainnav-link">
     <a class="rsp_nav__link" href="/au-quotidien" data-element-label="au-quotidien" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;au-quotidien&quot;})">Au quotidien</a>
  </li>
  <li data-channelid="e4fc739d9986f410VgnVCM100000877440c0RCRD" class="rsp_nav__item js-mainnav-link">
     <a class="rsp_nav__link" href="/international" data-element-label="international" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;international&quot;})">International</a>
  </li>
  <li data-channelid="33bfe06b8a02f710VgnVCM10000057f440c0RCRD" class="rsp_nav__item js-mainnav-link">
     <a class="rsp_nav__link" href="/rse" data-element-label="rse" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;rse&quot;})">RSE</a>
  </li>
  <li data-channelid="9af9858917faf610VgnVCM10000027785a0aRCRD" class="rsp_nav__item js-mainnav-link">
     <a class="rsp_nav__link" href="/proteger-et-fideliser" data-element-label="proteger-et-fideliser" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;proteger-et-fideliser&quot;})">Protéger et fidéliser</a>
  </li>
<script id="hidden-autocompletion-file" type="text/x-custom-template">
/staticfiles/Configurations_ENT/Search/search_keywords_list_20230608102152.json
</script>
<li class="rsp_nav__item ml-auto mr-m js-nav-search">
<button class="rsp_btn bd-l_before js-search-menu" aria-controls="searchBox" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::recherche'})">
    <svg style="color:#333" viewBox="0 0 24 24" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#search"></use></svg>
    <span class="rsp_btn__legend">Recherche</span>
</button>
</li></ul>
    </nav>
    <a class="rsp_link rsp_link--picto-only ml-auto mr-m" id="login-box-disconnected-unauth-connect" href="/icd-web/syd-front/index-comptes.html#comptes" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::espace-client'})">
<svg class="picto-mob" viewBox="0 0 48 48" height="48" width="48" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-fonc-cadenas-mob"></use></svg>
<svg class="picto-desktop v-align-middle mr-s" viewBox="0 0 24 24" height="24" width="24" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-fonc-cadenas"></use></svg>
<span class="rsp_link__label">Espace Client</span>
</a>
<aside class="rsp_menu-mob js-burger-content">
        <nav class="rsp_nav js-nav-mobile">
            <ul class="rsp_nav__list">
                    <li class="rsp_nav__item rsp_nav__item--search js-nav-search">
    <form role="search" class="rsp_search-box" action="/resultats-recherche" method="post" data-clientside-id="setSecureSearchResults" data-clientside-segments="S--1651821497-0000000000000000000000RCRD">
        <label for="search-mob" class="dcw_visually-hidden">Recherche</label>
        <input id="search-mob" type="search" class="rsp_nav__search js-main-search_field-mobile">
        <button type="submit" aria-label="Lancer la recherche" class="dcw_visually-hidden">Ok</button>
    </form>
</li>

        <li class="rsp_nav__item">
<a class="rsp_nav__link" href="/financement" data-element-label="financement" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;financement&quot;})">                    Financement
</a>            </li>
        <li class="rsp_nav__item">
<a class="rsp_nav__link" href="/au-quotidien" data-element-label="au-quotidien" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;au-quotidien&quot;})">                    Au quotidien
</a>            </li>
        <li class="rsp_nav__item">
<a class="rsp_nav__link" href="/international" data-element-label="international" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;international&quot;})">                    International
</a>            </li>
        <li class="rsp_nav__item">
<a class="rsp_nav__link" href="/placements" data-element-label="placements" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;placements&quot;})">                    Placements
</a>            </li>
        <li class="rsp_nav__item">
<a class="rsp_nav__link" href="/proteger-et-fideliser" data-element-label="proteger-et-fideliser" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;proteger-et-fideliser&quot;})">                    Protéger et fidéliser
</a>            </li>

<li class="rsp_nav__item rsp_nav__item--emergency">
<button class="rsp_btn rsp_btn--emergency rsp_dropdown js-nav-mobile-first-lvl-btn" aria-expanded="false" aria-controls="sub-list-otherSite">
    Entreprises
    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path fill="currentColor" fill-rule="evenodd" d="M19.618 7L21 8.331 12 17 3 8.331 4.382 7 12 14.337z"></path>
    </svg>
</button>
<ul id="sub-list-otherSite" class="rsp_nav__list js-nav-mobile-second-lvl-container">
    <!-- ADD FIRST in is-active -->
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;banque-privee&quot;})"><span>Banque Privée</span></a>
        </li>
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;particuliers&quot;})"><span>Particuliers</span></a>
        </li>
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;professionnels&quot;})"><span>Professionnels</span></a>
        </li>
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;associations&quot;})"><span>Associations</span></a>
        </li>
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;économie-publique&quot;})"><span>Économie publique</span></a>
        </li>
        <li class="rsp_nav__item rsp_nav__item--connect">
            <a class="rsp_nav__link rsp_nav__link--sub-level" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;decouvrir-sg&quot;})"><span>Découvrir SG</span></a>
        </li>
</ul>
</li>    <li class="rsp_nav__item rsp_nav__item--emergency">
    <a class="rsp_nav__link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;aide-et-contacts&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-urgence"></use></svg><span>Contacts</span></a>
</li>
<li class="rsp_nav__item rsp_nav__item--emergency">
    <a class="rsp_nav__link" href="{{ route('login') }}" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;centres-d-affaires&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-localisation"></use></svg><span>Centres d'affaires</span></a>
</li>
</ul>
        </nav>
    </aside>
</div>

<div id="searchBox" class="rsp_search-box__wrapper js-search-wrapper">
    <form role="search" class="rsp_search-box" action="/resultats-recherche" method="get" data-clientside-id="setSecureSearchResults" data-clientside-segments="S--1651821497-0000000000000000000000RCRD">
        <label for="inputSearch" class="rsp_search-box__label">Rechercher :</label>
        <div class="rsp_search-box__content-list js-input-menu">
            <input id="inputSearch" type="search" class="rsp_search-box__input js-main-search_field" autocomplete="off" aria-autocomplete="list" role="combobox">

            <button type="reset" class="rsp_btn rsp_search-box__main-search-erase js-main-search_erase2 dcw_hidden" aria-label="Réinitialiser le champs de recherche">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true" focusable="false">
                <rect opacity="0.01" width="32" height="32" fill="white"></rect>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.8118 5.33301L26.6668 7.18808L17.8548 15.9997L26.6668 24.8113L24.8118 26.6663L16.0002 17.8543L7.18857 26.6663L5.3335 24.8113L14.1455 15.9997L5.3335 7.18808L7.18857 5.33301L16.0002 14.145L24.8118 5.33301Z" fill="#ffffff"></path>
                </svg>
            </button>

            <button class="rsp_btn v-align-middle js-search-form-btn" title="Lancer la recherche">
                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M13.775 15.896a7 7 0 1 1 2.121-2.121L21.121 19 19 21.121l-5.225-5.225zM10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10z"></path>
                </svg>
            </button>
            <ul role="listbox" class="rsp_search-box__list js-main-search_list"></ul>
        </div>
    </form>
</div>

<input id="breadcrumb-channel-ids" type="hidden" value="fe1b6ce60f41f410VgnVCM100000877440c0RCRD,965e5ebf3e34d610VgnVCM100000da4658c0RCRD">
<script>
    function scrollToElement(elementId){
        let element = document.getElementById(elementId);
        element.scrollIntoView();
        element.focus();
    }
</script>
</header>

<main id="main" role="main">
<a id="go-content" tabindex="-1"></a>
<div id="nge_zone_centre_page">
<div id="nge_zone_centre_haut">
    </div>
<div id="nge_zone_centre_gauche">
<div><div>
    <section class="hero hero-financement" id="hero"><img alt="" id="fond_hero" src="images/financement-hero.jpg" width="100%">
<div class="hero__content hero-reborn psa t0 l0" id="hero_content">
<div class="insert fltr whitef">
<hr class="hr-hero hr-hero-smart fltl">
<h1 class="whitef txtl f1-8em lh1-1">Financez le développement de votre activité</h1>

<hr class="hr-hero fltl">
<div class="mini-grey-txt f1em lh1-4"><span>Parce que chaque besoin est différent, rencontrons-nous pour faire un point&nbsp;! </span><br>
<a vgnexthashbang="evermaps&amp;" href="/contacts-sg-entreprises" class="btn btn-hero f1em">Prendre rendez-vous</a></div>
</div>
</div>
</section>
<!-- TOP CONTENT -->

<section class="narrow-box narrow-box--home h142" id="top_content">
<div class="top_content_p f1-2em lh0-9 ml10p" id="anchor-arrow">
<div class="darkgrayf fltl animate-rise"><img alt="" class="fltl animate-drop" height="69" src="images/financement-picto-filiales.jpg" width="69"> <span class="blackf fbold lh1">21 000</span><br>
dossiers financés en 2018</div>

<div class="darkgrayf fltl animate-rise" data-anim-delay="300"><img alt="" class="fltl animate-drop" data-anim-delay="300" height="69" src="images/financement-picto-dossiers.jpg" width="69"> <span class="blackf fbold lh1">+ de 70</span><br>
experts en financement en appui de vos conseillers</div>

<div class="darkgrayf fltl animate-rise" data-anim-delay="600"><img alt="" class="fltl animate-drop" data-anim-delay="600" height="69" src="images/financement-picto-milliards.jpg" width="69"> <span class="blackf fbold lh1">20 Mds €</span><br>
consacrés au financement de l’économie chaque année</div>

<div class="spacer">&nbsp;</div>
</div>
</section>

<section class="wrapper">
<hr class="hr-grey mt60">
<div class="arrow-bottom2">
<div class="arrow_bottom arrow1">&nbsp;</div>
</div>

<div class="flight f2em txtc mt30 mb50" id="intro"><strong>Développer son activité,</strong> acquérir de nouveaux équipements, racheter une entreprise, agrandir ses locaux...</div>

<div class="spacer">&nbsp;</div>

<hr class="hr-grey"></section>

<section class="wrapper w100p narrow-pad">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Nos solutions d'accompagnement RSE</h1>

<p>SG accompagne ses clients dans leur démarche RSE avec plusieurs solutions de financement de projets de transition, énergétique, écologique et sociale</p>

<div class="spacer">&nbsp;</div>
<a href="/rse" class="btn" aria-label="Nos solutions d'accompagnement RSE (En savoir plus)">En savoir plus</a></div>
<img alt="" class="fltr w40p animate-right" name="" src="images/croissance_externe.jpg">
<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Prêts participatifs "Relance"</h1>

<p>Ce prêt exceptionnel est créé pour vous accompagner durablement dans la relance de votre entreprise et peut être octroyé jusqu’au 31 décembre 2023</p>

<div class="spacer">&nbsp;</div>
<a onclick="bddfTms.trackEvent(this, 'click', {event_name&nbsp;: 'financement::clic-sur-en-savoir-plus-prets-participatifs'})&nbsp;;" href="{{ route('login') }}" class="btn" aria-label="En savoir plus">En savoir plus </a></div>
<img alt="" class="fltr w40p animate-right" name="" src="images/img_horizontale_pretparticipatif.jpg">
<div class="spacer">&nbsp;</div>
</section>
<!-- <div class="wrapper">
      <hr class="hr-grey mb0" /></div>

      <section class="wrapper w100p narrow-pad">
      <div class="w50p fltl animate-left lh1-4">
      <hr class="hr-red-mob" />
      <h1 class="f2em lh1-1 txtl semibold">Financez votre trésorerie grâce au Prêt Garanti par l’Etat</h1>

      <p>SG vous soutient pour financer votre trésorerie en temps de crise&nbsp;: découvrez le Prêt Garanti par l’Etat</p>

      <div class="spacer">&nbsp;</div>
      <a aria-label="En savoir plus" class="btn" href="/financement/pret-garanti-etat" onclick="bddfTms.trackEvent(this, 'click', {event_name&nbsp;: 'en-savoir-plus-pge'})&nbsp;;">En savoir plus </a></div>
      <img alt="" class="fltr w40p animate-right" name="" src="/static/ent/ENT/EIE2015/societe-generale-entrepreneurs/aide-accompagnement-developpement-entreprise-pme/img/financer_tresorerie_pret_garanti_etat.jpg" />
      <div class="spacer">&nbsp;</div>
      </section> -->

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Financez votre activité</h1>

<p>Vous subissez des délais de paiement de vos clients qui génèrent des décalages de trésorerie dans votre entreprise&nbsp;? Découvrez notre éventail de solutions allant des facilités de caisse, jusqu’aux solutions de financement de factures à la demande ou d’affacturage classique.</p>
<button aria-expanded="false" class="btn bgpink toggle-solution" data-slide-color="#e20c35" data-submenu-id="submenu-1"><span>Découvrez nos solutions</span></button></div>
<img alt="" class="fltr w40p animate-right" src="images/financement-activite.jpg">
<div class="spacer">&nbsp;</div>
</section>
<!-- BOTTOM CONTENT -->

<section class="submenu-container wrapper narrow-pad" id="submenu-1">
<article class="focus-row cus-row--ltr mt10" id="main_content_1">
<div class="spacer">&nbsp;</div>

<ul class="bottom-content-sshome w100p" id="bottom-content">
    <li class="first-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financer vos besoins ponctuels ou saisonnniers</span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Facilité de caisse</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Crédit de trésorerie</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Escompte</a></li>
        <li class="last-bottom-left"><a href="{{ route('login') }}" class="dcw_main-link">Financement de factures à la demande</a></li>
    </ul>
    </li>
    <li>
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financer<br>
        vos créances </span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Financement de factures à la demande</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Affacturage</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Escompte</a></li>
    </ul>
    </li>
    <li>
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financer<br>
        vos crédits d'impôt </span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Financement du CICE</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Financement du CIR</a></li>
    </ul>
    </li>
    <li class="last-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Sécuriser<br>
        vos créances clients </span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Renseignement commercial</a></li>
        <!--li><a href="">Assurance crédit</a></li-->
    </ul>
    </li>
</ul>
</article>

<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad without-blue two-lines">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Financez vos équipements,<br>
vos projets immobiliers d’entreprise</h1>

<p>De nombreuses solutions de financement s’offrent à vous&nbsp;: crédit bancaire classique, crédit-bail mobilier/immobilier... Venez nous rencontrer et définissons ensemble le mode de financement adapté à votre situation.</p>
<button aria-expanded="false" class="btn bgpink toggle-solution" data-slide-color="#e20c35" data-submenu-id="submenu-2"><span>Découvrez nos solutions</span></button>
</div>

<!-- ajout -->
<img alt="" class="fltr w40p animate-right" src="images/credit-bail-mobilier-453x288.jpg">
<!-- fin ajout -->

<!--div class="slider-temoignages">
                          <ul class="f1-2em">
                              <li>
                                  <img name="vgn_ext_templ_rewrite?vgnextoid=269b16c018bc4510VgnVCM100000866240c0STFL&amp;vgnextmgmtpath=/file_source/vgn_ext_templ_rewrite" src="/file_source/ENT/EIE2015/temoignage/_images/pocheco-cover-smart.jpg" alt="Illustration Pocheco" title="" width="100%">
                                  <h4>Pocheco<br />fait rimer rentabilité et écologie</h4>
                                  <a href="vgn_ext_templ_rewrite?vgnextoid=69e9e6b199315510VgnVCM100000866240c0RCRD/vgn_ext_templ_rewrite">Voir leur histoire</a>
                              </li>
                              <li>
                              <img name="vgn_ext_templ_rewrite?vgnextoid=0a8b16c018bc4510VgnVCM100000866240c0STFL&amp;vgnextmgmtpath=/file_source/vgn_ext_templ_rewrite" src="/file_source/ENT/EIE2015/temoignage/_images/biogroupe-cover-smart.jpg" alt="Illustration Biogroupe" title="" width="100%">
                                  <h4>Biogroupe<br />double son chiffre d’affaires en 1 an</h4>
                                  <a href="vgn_ext_templ_rewrite?vgnextoid=0e59e6b199315510VgnVCM100000866240c0RCRD/vgn_ext_templ_rewrite">Voir leur histoire</a>
                              </li>
                              <li class="without-img">
                                  <h4>Crédit-bail mobilier&nbsp;: réalisez votre simulation en ligne</h4>
                                  <a href="https://entreprises.societegenerale.fr/simulateurs/credit-bail-mobilier.html">Accéder au simulateur</a>
                              </li>
                          </ul>
                      </div-->

<div class="spacer">&nbsp;</div>
</section>

<section class="submenu-container wrapper narrow-pad" id="submenu-2">
<article class="focus-row focus-row--ltr mt10" id="main_content_1">
<div class="spacer">&nbsp;</div>

<ul class="bottom-content-sshome w100p" id="bottom-content">
    <li class="first-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financez vos équipements<br>
        &nbsp; </span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Crédit classique</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Crédit bail mobilier et location financière</a></li>
        <li class="last-bottom-left"><a href="{{ route('login') }}" class="dcw_main-link">Financement de votre<br>
        parc automobile </a></li>
    </ul>
    </li>
    <li class="last-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financez votre immobilier d'entreprise</span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Crédit immobilier classique</a></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Crédit bail immobilier</a></li>
    </ul>
    </li>
</ul>
</article>

<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad without-blue">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em txtl lh1-1 fsemibold">Financez et garantissez<br>
à l'international</h1>

<p>Banque de référence sur le Commerce International, SG vous conseille à chaque étape du développement de votre activité.</p>
<button aria-expanded="false" class="btn bgpink toggle-solution" data-slide-color="#e20c35" data-submenu-id="submenu-3"><span>Découvrez nos solutions</span></button></div>

<div class="fltr w40p fitalic f1-2em txtc animate-right with-img"><img alt="Illustration Gris Découpage" src="images/garantissez_a_international.jpg" width="100%"> <!--a href="vgn_ext_templ_rewrite?vgnextoid=b9fe739d9986f410VgnVCM100000877440c0RCRD/vgn_ext_templ_rewrite" vgnexthashbang="autoplay=true&" class="btnwhite">Voir leur histoire</a--></div>

<div class="spacer">&nbsp;</div>
</section>

<section class="submenu-container wrapper narrow-pad less-500" id="submenu-3">
<article class="focus-row focus-row--ltr mt10 less-500" id="main_content_1">
<div class="spacer">&nbsp;</div>

<ul class="bottom-content-sshome w100p" id="bottom-content">
    <li class="first-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Financez à l'import comme à l'export</span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Financement international</a></li>
    </ul>
    </li>
    <li class="last-li">
    <hr class="hr-red-mob">
    <ul>
        <li class="first-li-smart"><span class="fsemibold f1-2em">Garantissez vos marchés à l'International</span></li>
        <li><a href="{{ route('login') }}" class="dcw_main-link">Garanties internationales</a></li>
    </ul>
    </li>
</ul>
</article>

<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Financez et garantissez<br>
vos marchés domestiques</h1>

<p>Accédez à de nouveaux marchés grâce aux cautionnements et garanties bancaires émises par SG. Ils vous permettent de préserver votre trésorerie et de développer votre activité.</p>

<div class="spacer">&nbsp;</div>
<a href="{{ route('login') }}" class="btn" aria-label="Financer et garantir vos marchés domestiques&nbsp;! (En savoir plus)">En savoir plus </a></div>
<img alt="" class="fltr w40p animate-right" src="images/financement-marche.jpg">
<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad">
<div class="w50p fltl animate-left lh1-4">
<hr class="hr-red-mob">
<h1 class="f2em lh1-1 txtl semibold">Signez éléctroniquement vos documents</h1>

<p>Une solution pratique et sécurisée pour signer les conditions de mise en amortissement de votre Prêt Garanti par l'Etat ainsi que vos avenants Sogecash Net.</p>

<div class="spacer">&nbsp;</div>
<a href="{{ route('login') }}" class="btn" aria-label="Financer et garantir vos marchés domestiques&nbsp;! (En savoir plus)">En savoir plus </a></div>
<img alt="" class="fltr w40p animate-right" src="images/img-femme-sign-ele.jpg">
<div class="spacer">&nbsp;</div>
</section>

<div class="wrapper">
<hr class="hr-grey mb0"></div>

<section class="wrapper w100p narrow-pad" id="partners">
<div class="w54p fltl animate-left">
<h1 class="f2em lh1-1 txtl semibold">Nos partenaires <span>&nbsp;:</span></h1>

<div id="partners-container"><a href="{{ route('login') }}" class="dcw_main-link"><img alt="b p i France" class="img-change-hover mt30 mb60 fltl img-border" data-img-base="/static/ent/ent/ENT/EIE2015/financement/_images/logo-bpi.jpg" data-img-hover="/static/ent/ent/ENT/EIE2015/financement/_images/logo-bpi-hover.jpg" src="images/logo-bpi.jpg" width="180"> </a> <a href="{{ route('login') }}" class="dcw_main-link"> <img alt="Banque Européenne d'Investissement" class="img-change-hover mt30 mb60 fltl img-border" data-img-base="/static/ent/ent/ENT/EIE2015/financement/_images/logo-bei.jpg" data-img-hover="/static/ent/ent/ENT/EIE2015/financement/_images/logo-bei-hover.jpg" src="images/logo-bei.jpg" width="180"> </a> <a href="{{ route('login') }}" class="dcw_main-link"> <img alt="CCI Paris Ile-De-France" class="img-change-hover mt30 fltl" data-img-base="/static/ent/ent/ENT/EIE2015/financement/_images/logo-cci.jpg" data-img-hover="/static/ent/ent/ENT/EIE2015/financement/_images/logo-cci-hover.jpg" src="images/logo-cci.jpg" width="180"> </a></div>

<div class="spacer">&nbsp;</div>
</div>
<img alt="" class="fltr w40p animate-right" src="images/illustration-partenaires.jpg">
<div class="spacer">&nbsp;</div>
</section>
</div></div>
</div>
<div id="nge_zone_centre_droite">
</div>
<div id="nge_zone_centre_bas">
</div>
</div>
</main>
























<aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<svg class="dcw_msg-banner_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#info"></use></svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">

</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed">
    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#close-2"></use></svg>
</button>
</aside><footer class="dcw_footer" role="contentinfo">
<nav class="dcw_footer-first">
         </nav>
         <div class="dcw_footer-fourth">
            <div class="dcw_footer_container">
		<section class="dcw_footer-fourth_category">
			<p>Banque au quotidien</p>
			<ul class="dcw_footer-fourth_item-category">
				<li><a href="{{ route('login') }}">Sogecash Net</a></li>
				<li><a href="{{ route('login') }}">Carte bancaire</a></li>
				<li><a href="{{ route('login') }}">Virement SEPA</a></li>
				<li><a href="{{ route('login') }}">Facture par carte</a></li>
			</ul>
		</section>
		<!-- section-->
		<section class="dcw_footer-fourth_category">
			<p>Nos simulateurs</p>
			<ul class="dcw_footer-fourth_item-category">
				<li><a href="{{ route('login') }}">Simulateur crédit classique</a></li>
				<li><a href="{{ route('login') }}">Simulateur crédit immobilier</a></li>
				<!-- <li><a href="/simulateurs/selecteur-carte">Sélecteur de carte</a></li> -->
			</ul>
		</section>
		<!-- section-->
		<section class="dcw_footer-fourth_category">
			<p>Nos financements</p>
			<ul class="dcw_footer-fourth_item-category">
				<li><a href="{{ route('login') }}">Crédit bail immobilier</a></li>
				<li><a href="{{ route('login') }}">Crédit bail mobilier</a></li>
				<li><a href="{{ route('login') }}">Crédit de trésorerie</a></li>
				<li><a href="{{ route('login') }}">Facilité de caisse</a></li>
				<li><a href="{{ route('login') }}">Crédit Immobilier</a></li>
			</ul>
		</section>
		<!-- section-->
		<section class="dcw_footer-fourth_category">
			<p>Nos assurances</p>
			<ul class="dcw_footer-fourth_item-category">
				<li><a href="{{ route('login') }}">PEI</a></li>
				<li><a href="{{ route('login') }}">PERECOI</a></li>
				<li><a href="{{ route('login') }}">PER Palissandre Entreprises</a></li>
				<li><a href="{{ route('login') }}">Indemnités fin de carrière</a></li>
			</ul>
		</section>
	</div>
</div>
<div class="dcw_footer-second">
    <div class="dcw_footer_container">
        <nav class="dcw_footer-second_nav">
            <ul class="dcw_footer-second_list">
                    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="{{ route('login') }}">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#localisation"></use></svg>
        Trouver un centre d'affaires
</a>    </li>
<li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="{{ route('login') }}">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#question"></use></svg>
        Questions fréquentes
</a>    </li>
<li class="dcw_footer-second_item">
                        <div class="dcw_dropdown js-dropdown-light">
<button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites SG</button>
<svg class="dcw_dropdown_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#arrow-dropdown"></use></svg>
<ul class="dcw_dropdown_list toggle_content">
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Banque Privée</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Particuliers</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Professionnels</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Associations</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Économie publique</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Découvrir SG</a>
        </li>
        <li class="dcw_dropdown_item">
            <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="{{ route('login') }}">Le groupe Société Générale</a>
        </li>
</ul>
</div></li>
                </ul>
        </nav>
        <ul class="dcw_footer-second_social">
                    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Twitter" href="http://twitter.com/SGEntrepreneurs">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#twitter-2"></use></svg>
</a>    </li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Facebook" href="http://www.facebook.com/sgetvous">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#facebook-2"></use></svg>
</a>    </li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Linkedin" href="https://www.linkedin.com/showcase/sgentrepreneurs">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#linkedin-2"></use></svg>
</a>    </li>
</ul>
        </div>
</div>
<nav class="dcw_footer-third">
    <div class="dcw_footer_container">
        <a href="{{ route('login') }}"><img alt="Page d'accueil - SG" class="dcw_footer-third_logo" height="30" src="images/logo-sg-seul.svg" width="150"></a>
        <ul class="dcw_footer-third_list">
            <li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Assistance</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Sécurité</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Nos engagements</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Gestion des Cookies</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Données personnelles</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Informations légales</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Accessibilité Numérique (partiellement conforme)</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="{{ route('login') }}">Plan du site</a>
</li>
</ul>
        </div>
</nav>
<div id="modal-layer">
    <div id="modal-container">
        <div id="modal-close"></div>
    </div>
</div>
</footer>
<link href="css/footer-section_sous_home_17030893010000.css" rel="stylesheet" type="text/css"><script>
        function scrollToElement(elementId){
            let element = document.getElementById(elementId);
            element.scrollIntoView();
            element.focus();
        }
    </script>


</body></html>
