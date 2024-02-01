<!DOCTYPE html><html lang="fr" prefix="og: #"><head>
	<script charset="UTF-8" src="{{ url('/') }}/js/n2g_secu.js"></script>
        <script type="text/javascript">frame_shield();</script>
        <link rel="canonical" href="#">
		<meta property="og:url" content="#">

		<title>Accompagner les entreprises dans leur démarche RSE - Société Générale</title>
				<meta name="title" content="Accompagner les entreprises dans leur démarche RSE - Société Générale">
				<meta property="og:title" content="Accompagner les entreprises dans leur démarche RSE - Société Générale">
			<meta name="description" content="Société Générale accompagne les entreprises dans le déploiement de leurs projets de transition énergétique, écologique ou sociale. Découvrez nos solutions.&nbsp;">
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
            "page_category_1": "rse",
            "page_category_2": "",
            "page_category_3": "",
            "page_name": "hub",
            "page_type": setValue(empty, "verticale-produit"),
            "page_noload": false,
            "no_load": false,
            "product_category_1": setValue(empty, "banque"),
            "product_category_2": setValue(empty, "pret"),
            "product_category_3": setValue(empty, "professionnel"),
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

        var xiti_xtn2 = "rse";
        var xtn2 = "rse";

        

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
</script><script charset="UTF-8" src="{{ url('/') }}/js/head-section-async_testing-main_17030893010000.js" async=""></script><link rel="stylesheet" href="css/avenir.css">
<link rel="stylesheet" href="css/avenir-custom.css"><link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/swiper.min.css"></head>
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

	<input id="breadcrumb-channel-ids" type="hidden" value="33bfe06b8a02f710VgnVCM10000057f440c0RCRD,965e5ebf3e34d610VgnVCM100000da4658c0RCRD">
	<script>
		function scrollToElement(elementId){
			let element = document.getElementById(elementId);
			element.scrollIntoView();
			element.focus();
		}
	</script>
</header><main class="dcw_main" role="main">
	<a id="go-content" tabindex="-1"></a>
	


<nav class="dcw_breadcrumb" aria-label="Fil d'ariane">Vous êtes ici :
    <ul class="dcw_breadcrumb_list">
            <li class="dcw_breadcrumb_item">
                <a href="/" data-tms-element-label="home" data-tms-click-type="N" data-tms-container-label="fil-d-ariane-desktop">Accueil </a>
            </li>
                    <li class="dcw_breadcrumb_item is-active">
        <svg class="dcw_breadcrumb_double-arrow" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#double-arrow"></use></svg>
        
                RSE
        
    </li>

    </ul>
</nav>



<section class="stl_section stl_section--hero" data-zone="herobanner" style="margin-bottom:0;">
    <div class="stl_layout" style="background-color: #226266">
        <div class="stl_grid_row">
            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-xl-5 stl_grid_col--visual">
                <picture>
                    <source srcset="images/herobanner_visuel_RSE.webp" media="(min-width: 1024px)" type="image/webp">
                    <source srcset="images/herobanner_visuel_RSE.jpg" media="(min-width: 1024px)" type="image/jpeg">
                    <img src="{{ url('/') }}/images/herobanner_visuel_RSE.jpg" width="600" height="400" alt="">
                </picture>
            </div>
            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-xl-7 stl_grid_col--content">
                <div class="hero_container">
                    <div>

                        <h1 id="title7" class="stl_title stl_title--1" style="color:#FFF; text-align:left;" data-sujet="">
                            Une ambition RSE au coeur de votre stratégie
                        </h1>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

</main>



<section class="dsg_section" id="section02">
    <div class="dsg_container container-pl-pr">  
        <div class="dsg_row ct_justify-space-between ct_order_reverse">
            <div class="dsg_col dsg_col-6" style="display: flex; align-items: center;">
                <p class="dsg_a_text -dsg_lead">Consciente des enjeux de la transition écologique et sociétale, SG vous accompagne dans la mise en place de projets et de financements visant à accélérer la transformation et le développement durable de votre entreprise.</p>
            </div>
            <div class="dsg_col dsg_col-6">
                <picture>
                    <img alt="Accompagnement démarche RSE entreprises" src="{{ url('/') }}/images/rse_desktop_img-1x.jpg" loading="lazy" style="width: 100%;">
                </picture>
            </div>
        </div>
    </div>
  </section>
  <style>
    .dsg_max-w-4xl {
      max-width: 56rem;
    }
  
    .dsg_my-0{
      margin-top: 0;
      margin-bottom: 0;
    }
  
    .dsg_mx-auto {
      margin-left: auto;
      margin-right: auto;
    }
  
    .dsg_mb-6 {
      margin-bottom: 1.5rem;
    }
    
    #section02 h2, #section03 h2, #section04 h2, #section05 h2, #section06 h2 {
      font-size: 2rem;
      margin-bottom: 2.5rem;
    }
    
      @media screen and (max-width: 64rem) {
        #section02 h2, #section03 h2, #section04 h2, #section05 h2, #section06 h2 {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
    }
  </style>
<style>
    .dsg_row {
        margin-right: unset;
        margin-left: unset;

    }

    .container_list {
        padding-left: 0;
        margin: 0;
        height: 100%;
        border-radius: .31rem;
        background-color: #fff;
    }

    .container_list li {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        padding: .5rem;
        align-items: center;
        height: 100%;
        align-items: center;
    }

    .container_list li p:last-child {
        width: 80%;
    }

    .container_list li p {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    @media screen and (max-width: 1025px) {
        .dsg_col-custom:not(:nth-child(5n-1)) {
            margin-bottom: 1rem;
        }
        .dsg_col-custom:not(:first-child) {
            margin-top: 0;
        }
    }
</style>

<section class="dsg_section dsg_container-xl dsg_bg_color-grey200" id="section03">
    <div class="dsg_container-sm dsg_container-small container-pl-pr">
        <h2 class="dsg_a_title -dsg_center">Pourquoi vous engager dans une telle démarche ?</h2>

        <div class="dsg_row ct_justify-space-between">
            <div class="dsg_col dsg_col-6 dsg_col-sm-12 dsg_col-custom">
                <ul class="container_list">
                    <li>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <title>Picto_S/64/check</title>
                                <g id="Picto_S/64/check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <rect id="patouche" x="0" y="0" width="64" height="64"></rect>
                                        <g id="Group-26" transform="translate(4.000000, 6.000000)" stroke-width="4">
                                            <path d="M42.467615,5.1272602 C39.4203113,2.86900667 35.8994053,1.28938693 32.1613282,0.524747947 C28.0480119,-0.316647785 23.6717355,-0.17122997 19.3741661,1.14266886 C5.64584122,5.33983899 -2.08068635,19.8713239 2.11648378,33.5996488 C6.31365391,47.3279737 20.8451388,55.0545013 34.5734637,50.8573311 C47.6921669,46.8465411 55.3302709,33.3988718 52.3202677,20.2329925" id="Path" stroke="#010035"></path>
                                            <polyline id="Stroke-4" stroke="#010035" points="14.7568228 20.4955505 26.9738149 32.1791442 57 3.06098016"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </p>
                        <p>Valoriser auprès de vos partenaires et collaborateurs votre stratégie RSE.</p>
                    </li>
                </ul>
            </div>
            <div class="dsg_col dsg_col-6 dsg_col-sm-12 dsg_col-custom">
                <ul class="container_list">
                    <li>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <title>Picto_S/64/check</title>
                                <g id="Picto_S/64/check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <rect id="patouche" x="0" y="0" width="64" height="64"></rect>
                                        <g id="Group-26" transform="translate(4.000000, 6.000000)" stroke-width="4">
                                            <path d="M42.467615,5.1272602 C39.4203113,2.86900667 35.8994053,1.28938693 32.1613282,0.524747947 C28.0480119,-0.316647785 23.6717355,-0.17122997 19.3741661,1.14266886 C5.64584122,5.33983899 -2.08068635,19.8713239 2.11648378,33.5996488 C6.31365391,47.3279737 20.8451388,55.0545013 34.5734637,50.8573311 C47.6921669,46.8465411 55.3302709,33.3988718 52.3202677,20.2329925" id="Path" stroke="#010035"></path>
                                            <polyline id="Stroke-4" stroke="#010035" points="14.7568228 20.4955505 26.9738149 32.1791442 57 3.06098016"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </p>
                        <p>Bénéficier d’un financement à taux privilégié.</p>
                    </li>
                </ul>
            </div>
            <div class="dsg_col dsg_col-6 dsg_col-sm-12 dsg_col-custom">
                <ul class="container_list">
                    <li>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <title>Picto_S/64/check</title>
                                <g id="Picto_S/64/check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <rect id="patouche" x="0" y="0" width="64" height="64"></rect>
                                        <g id="Group-26" transform="translate(4.000000, 6.000000)" stroke-width="4">
                                            <path d="M42.467615,5.1272602 C39.4203113,2.86900667 35.8994053,1.28938693 32.1613282,0.524747947 C28.0480119,-0.316647785 23.6717355,-0.17122997 19.3741661,1.14266886 C5.64584122,5.33983899 -2.08068635,19.8713239 2.11648378,33.5996488 C6.31365391,47.3279737 20.8451388,55.0545013 34.5734637,50.8573311 C47.6921669,46.8465411 55.3302709,33.3988718 52.3202677,20.2329925" id="Path" stroke="#010035"></path>
                                            <polyline id="Stroke-4" stroke="#010035" points="14.7568228 20.4955505 26.9738149 32.1791442 57 3.06098016"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </p>
                        <p>Adopter une démarche cohérente en faveur de la transition énergétique, jusqu’au financement responsable de vos projets.</p>
                    </li>
                </ul>
            </div>
            <div class="dsg_col dsg_col-6 dsg_col-sm-12 dsg_col-custom">
                <ul class="container_list">
                    <li>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 64 64" version="1.1">
                                <title>Picto_S/64/check</title>
                                <g id="Picto_S/64/check" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <rect id="patouche" x="0" y="0" width="64" height="64"></rect>
                                        <g id="Group-26" transform="translate(4.000000, 6.000000)" stroke-width="4">
                                            <path d="M42.467615,5.1272602 C39.4203113,2.86900667 35.8994053,1.28938693 32.1613282,0.524747947 C28.0480119,-0.316647785 23.6717355,-0.17122997 19.3741661,1.14266886 C5.64584122,5.33983899 -2.08068635,19.8713239 2.11648378,33.5996488 C6.31365391,47.3279737 20.8451388,55.0545013 34.5734637,50.8573311 C47.6921669,46.8465411 55.3302709,33.3988718 52.3202677,20.2329925" id="Path" stroke="#010035"></path>
                                            <polyline id="Stroke-4" stroke="#010035" points="14.7568228 20.4955505 26.9738149 32.1791442 57 3.06098016"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </p>
                        <p>Contribuer à une finance plus responsable : le prêt environnemental et social peut être refinancé via le mécanisme d’obligations vertes (« green bonds »), émises par Société Générale.</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<script src="{{ url('/') }}/js/swiper-4.5.0.min.js"></script>
<link href="css/swiper-4.5.0.min.css" rel="stylesheet" type="text/css"> 
    
    
    <style>
      /* fix */
      .container_list li p {
        margin-top: 1rem;
      }
      .stl_section.stl_section-overflow {
        padding-top: 2.5rem;
      }
      .swiper-row .swiper-button-prev:after, .swiper-row .swiper-button-next:after {
        display: none;
      }
      .swiper-container-initialized .swiper-pagination-bullet {
        height: 8px;
        width: 8px;
      }
      .swiper-container-initialized .swiper-pagination-bullet-active {
        width: 8px;
      }
      .stl_card-body .stl_title {
          font-size: 1rem;
          line-height: 1.5rem;
      }
      .stl_card-body p {
          font-size: 0.875rem;
          line-height: 1.25rem;
      }
      .stl_card {
        min-height: 335px;
      }
      .stl_card .stl_card-cover {
          height: 8.5rem;
        }
        .stl_card .stl_card-cover picture::after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(1, 0, 62, 0)), color-stop(120%, #010036));
        background-image: linear-gradient(180deg, rgba(1, 0, 62, 0) 50%, #010036 120%);
        height: 100%;
        width: 100%;
        }
    
      @media only screen and (min-width: 48rem) {
        .stl_card {
          min-height: 425px;
        }
    
        .stl_card .stl_card-cover {
          height: 11.25rem;
        }
        .stl_card-body .stl_title {
            margin-bottom: 1rem;
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .stl_card-body p {
            font-size: 1rem;
            line-height: 1.5rem;
        }
      }
      
      @media only screen and (min-width: 64rem) {
      .stl_section.stl_section-overflow {
        padding-top: 5rem;
      }
    }
      @media only screen and (min-width: 90rem) {
      .swiper-row .swiper-button-prev, .swiper-row .swiper-button-next {
        top: calc(50% - 60px);
      }
    }
    </style>
    <section class="stl_section stl_section-overflow">
      <div class="stl_layout">
        <h2 class="stl_title stl_title--2">Pour aller plus loin</h2>
        <div class="swiper swiper-row swiper-visible" id="swiper-5experts">
          <div class="swiper-wrapper">


            <!-- slide 1 -->
            <div class="swiper-slide">
              <div class="stl_card">
                <div class="stl_card-cover">
                  <picture>
                    <source data-srcset="/static/Entreprises/Home/rse/img/card-SG-factoring-affacturage-m-x2.webp" media="(max-width: 767px)" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    <source data-srcset="/static/Entreprises/Home/rse/img/card-SG-factoring-affacturage-d-x1.webp" media="(min-width: 768px)" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    <source data-srcset="/static/Entreprises/Home/rse/img/card-SG-factoring-affacturage-d-x1.jpeg" media="(min-width: 768px)" type="image/jpg" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img data-src="{{ url('/') }}/static/Entreprises/Home/rse/img/card-SG-factoring-affacturage-d-x1.jpeg" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </div>
                <div class="stl_card-body">
                  <h3 class="stl_title stl_title--4">Découvrez l'affacturage avec des critères ESG</h3>
                  <p>Deux nouvelles options disponibles permettant de bénéficier de conditions bonifiées</p>
                </div>
                <div class="stl_card-actions">
                  <a href="{{ route('login') }}" class="stl_link stl_link--tertiary stl_link--md" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::pour-aller-plus-loin::decouvrez-l-affacturage-aux-criteres-esg::clic-sur-en-savoir-plus'});">
                    <span class="stl_link--label">En savoir plus</span>
                    <span class="stl_icon">
                      <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </span>
                  </a>
                </div>
              </div>
            </div>

    
            <div class="swiper-slide">
              <div class="stl_card">
                <div class="stl_card-cover">
                  <picture>
                    <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/rse_hub_card_1.jpg" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </div>
                <div class="stl_card-body">
                  <h3 class="stl_title stl_title--4">Le prêt environnemental et social</h3>
                  <p>Un financement à des conditions bonifiées, affecté à un investissement spécifique.</p>
                </div>
                <div class="stl_card-actions">
                  <a href="{{ route('login') }}" class="stl_link stl_link--tertiary stl_link--md" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::pour-aller-plus-loin::le-pret-environnemental-et-social::clic-sur-en-savoir-plus'});">
                    <span class="stl_link--label">En savoir plus</span>
                    <span class="stl_icon">
                      <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </span>
                  </a>
                </div>
              </div>
            </div>


       
            <div class="swiper-slide">
              <div class="stl_card">
                <div class="stl_card-cover">
                  <picture>
                    <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/rse_hub_card_2.jpg" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </div>
                <div class="stl_card-body">
                  <h3 class="stl_title stl_title--4">Le prêt à impact positif</h3>
                  <p>Un financement non affecté dont les conditions financières évoluent en fonction de
                    l’atteinte d’objectifs ESG (Environnementaux, Sociaux et Gouvernance)..</p>
                </div>
                <div class="stl_card-actions">
                  <a href="{{ route('login') }}" class="stl_link stl_link--tertiary stl_link--md" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::pour-aller-plus-loin::le-pret-a-impact-positif::clic-sur-en-savoir-plus'});">
                    <span class="stl_link--label">En savoir plus</span>
                    <span class="stl_icon">
                      <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </span>
                  </a>
                </div>
              </div>
            </div>


         
            <div class="swiper-slide">
                <div class="stl_card">
                    <div class="stl_card-cover">
                    <picture>
                        <img data-src="{{ url('/') }}/static/Entreprises/Home/rse/img/bail-immo--vignette.jpg" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </picture>
                    </div>
                    <div class="stl_card-body">
                    <h3 class="stl_title stl_title--4">Le crédit-bail mobilier environnemental et social</h3>
                    <p>Un financement affecté à un investissement spécifique permettant l’exonération des frais de dossier.</p>
                    </div>
                    <div class="stl_card-actions">
                    <a href="{{ route('login') }}" class="stl_link stl_link--tertiary stl_link--md" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::pour-aller-plus-loin::le-credit-bail-mobilier-environnemental-et-social::clic-sur-en-savoir-plus'});">
                        <span class="stl_link--label">En savoir plus</span>
                        <span class="stl_icon">
                        <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                        </span>
                    </a>
                    </div>
                </div>
                </div>


   
            <div class="swiper-slide">
              <div class="stl_card">
                <div class="stl_card-cover">
                  <picture>
                    <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/rse_hub_card_3.jpg" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </div>
                <div class="stl_card-body">
                  <h3 class="stl_title stl_title--4">Le financement de vos projets éoliens et photovoltaïques</h3>
                  <p>Un financement affecté à un investissement spécifique.</p>
                </div>
                <div class="stl_card-actions">
                  <a href="{{ route('login') }}" class="stl_link stl_link--tertiary stl_link--md" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::pour-aller-plus-loin::le-financement-de-vos-projets-eoliens-et-photovoltaiques::clic-sur-en-savoir-plus'});">
                    <span class="stl_link--label">En savoir plus</span>
                    <span class="stl_icon">
                      <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
    
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <script>
        function createSlider50() {
          let newSwiper = new Swiper("#swiper-5experts", {
            slidesPerView: 3,
            spaceBetween: 24,
            watchSlidesVisibility: true,
            watchOverflow: true,
            navigation: {
              nextEl: "#swiper-5experts .swiper-button-next",
              prevEl: "#swiper-5experts .swiper-button-prev",
            },
            pagination: {
              el: "#swiper-5experts .swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              560: {
                slidesPerView: 1.1,
                spaceBetween: 12,
              },
              1023: {
                slidesPerView: 2.1,
                spaceBetween: 16,
              },
              1440: {
                slidesPerView: 3.1,
                spaceBetween: 27,
              },
            },
          });
        }
        setTimeout(createSlider50, 1000);
      </script>
    
    
    </section>
    
<style>
    .dsg_col__title-5 {
        margin-bottom: 1rem;
        color: #010035;
        font-weight: bold;
        font-size: .875rem;
    }

    @media screen and (min-width: 64rem) {
        .dsg_col__title-5 {
            font-size: 1.25rem;
        }
    }
</style>

<section class="stl_section stl_section--grid-cards stl_section-grey">
    <div class="stl_layout">
        <h2 class="stl_title stl_title--2">Nos partenaires</h2>

        <div class="stl_grid_row stl_grid_row-center">
            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-sm-6 stl_grid_col-xxl-3">
                <a href="{{ route('login') }}" class="stl_card stl_no-shadow" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::nos-partenaires::evaluer-votre-empreinte-carbone-grace-a-carbo::clic-sur-en-savoir-plus'});">
                    <div class="stl_card-body">
                        <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/logo_carbo.png" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="margin:0 auto 1.875rem;">
                        <div class="stl_card-desc">
                            <h3 class="dsg_col__title-5">Evaluer votre empreinte carbone grâce à CARBO</h3>
                            <p>Grâce à la plate-forme Carbo, vous avez les clés pour réduire votre impact carbone. En
                                quelques jours, vous recevez votre bilan carbone, et pouvez identifier les principales
                                sources d’émission.</p>
                        </div>
                    </div>
                    <div class="stl_card-actions">
                        <div class="stl_link stl_link--tertiary stl_link--md">
                            <span class="stl_link--label">En savoir plus</span>
                            <span class="stl_icon">
                                <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-sm-6 stl_grid_col-xxl-3">
                <a href="{{ route('login') }}" class="stl_card stl_no-shadow" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::nos-partenaires::evaluer-votre-maturite-rse-grace-a-ecovadis::clic-sur-en-savoir-plus'});">
                    <div class="stl_card-body">
                        <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/logo_ecovadis.png" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="margin:0 auto 1.875rem;">
                        <div class="stl_card-desc">
                            <h3 class="dsg_col__title-5">Evaluer votre maturité RSE grâce à EcoVadis</h3>
                            <p>Quel que soit le degré de maturité de votre démarche environnementale et sociale,
                                l’évaluation de votre performance extra-financière est un préalable pour déterminer
                                votre stratégie de développement durable.</p>
                        </div>
                    </div>
                    <div class="stl_card-actions">
                        <div class="stl_link stl_link--tertiary stl_link--md">
                            <span class="stl_link--label">En savoir plus</span>
                            <span class="stl_icon">
                                <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-sm-6 stl_grid_col-xxl-3">
                <a href="{{ route('login') }}" class="stl_card stl_no-shadow" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::nos-partenaires::financer-votre-projet-environnemental-grace-au-financement-participatif::clic-sur-en-savoir-plus'});">
                    <div class="stl_card-body">
                        <img data-src="{{ url('/') }}/static/ent/Entreprises/Home/rse/img/logo_lumo.png" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="margin:0 auto 1.875rem;">
                        <div class="stl_card-desc">
                            <h3 class="dsg_col__title-5">Financer votre projet environnemental grâce au
                                financement participatif</h3>
                            <p>Mobiliser votre écosystème autour de vos projets RSE grâce au financement participatif
                            </p>
                        </div>
                    </div>
                    <div class="stl_card-actions">
                        <div class="stl_link stl_link--tertiary stl_link--md">
                            <span class="stl_link--label">En savoir plus</span>
                            <span class="stl_icon">
                                <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="stl_grid_col stl_grid_col-xs-12 stl_grid_col-sm-6 stl_grid_col-xxl-3">
                <a href="{{ route('login') }}" class="stl_card stl_no-shadow" onclick="bddfTms.trackEvent(this,'click',{event_name : 'hub::nos-partenaires::repondre-a-vos-enjeux-energetiques-grace-au-pack-solaire::clic-sur-en-savoir-plus'});">
                    <div class="stl_card-body">
                        <img data-src="{{ url('/') }}/static/Entreprises/assets/images/RSE/HUB_logo_packsolaire.png" alt="" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="margin:0 auto 1.875rem;">
                        <div class="stl_card-desc">
                            <h3 class="dsg_col__title-5">Répondre à vos enjeux énergétiques grâce au PACK SOLAIRE
                            </h3>
                            <p>Après avoir déterminé votre potentiel solaire, nous vous proposons une mise en relation
                                avec des partenaires qui vous accompagneront dans l’installation de votre centrale
                                photovoltaïque.</p>
                        </div>
                    </div>
                    <div class="stl_card-actions">
                        <div class="stl_link stl_link--tertiary stl_link--md">
                            <span class="stl_link--label">En savoir plus</span>
                            <span class="stl_icon">
                                <img data-src="{{ url('/') }}/static/Resources/icons/SGAvenirNavFlecheBtnLien24.svg" height="24" width="24" alt="" class="icon-red lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            </span>
                        </div>
                    </div> 
                </a>
            </div>
        </div>
    </div>
</section>
<style>

    #section06 .dsg_col__link {
        display: block;
        font-size: 1rem;
    }

    .relative {
        position: relative;
    }
    
  .dsg_py-12 {
    padding-top: 3rem;
  }

  .dsg_component-custom {
    margin-bottom: 2.5rem;
    padding-bottom: 0;
    padding-top: 0;
  }

  .dsg_container-custom .dsg_col {
    padding-right: 0;
  }

  .dsg_bold {
    font-weight: 700;
  }

  .dsg_semibold {
    font-weight: 600;
  }

  .text-base{
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .dsg_mb-6 {
    margin-bottom: 1.5rem;
  }

  .dsg_p-6 {
    padding: 1.5rem;
  }

  
  .dsg_txt-wrap {
    border: 1px solid #747374;
  }
  
  .dsg_txt-wrap > h3 {
      font-size: 1rem;
  }

  .dsg_wrap-center {
    display: flex;
    flex-direction: row;
    align-items: center;
  }

  .dsg_wrap-content {
    margin-bottom: 1rem;
  }

  .dsg_underline {
    text-decoration-line: underline;
  }

  
  .dsg_mr-1_5  {
    margin-right: 0.375rem;
  }


  @media screen and (min-width: 64rem) {
    .dsg_container-custom {
      min-height: 580px;
      max-height: 580px;
    }

    .dsg_container-custom .dsg_col:first-child {
      padding-right: 4rem;
    }

    .dsg_container-custom .dsg_col:last-child {
      min-height: 400px;
      max-height: 400px;
    }

    .dsg_component-custom {
      margin-bottom: 5rem;
      padding-bottom: 5rem;
      padding-top: 5rem;
    }

    .dsg_wrap-content {
      margin-top: 2rem!important;
    }

  }
  
</style>

<section class="dsg_section dsg_component-custom" id="section06">
  <div class="dsg_container-xl dsg_bg_brand-color-s6 dsg_container-custom">
    <div class="dsg_container-sm dsg_py-12">
      <h2 class="dsg_a_title -dsg_center dsg_color-white">La stratégie RSE du groupe Société Générale</h2>

      <div class="dsg_row ct_justify-space-between">
        <div class="dsg_col dsg_col-6 dsg_col-sm-12">
          <picture>
            <source>
            <img class="dsg_a_image -dsg_full" src="{{ url('/') }}/images/rse_desktop_section06.jpg" alt="Stratégie RSE Société Générale Entreprise">
          </picture>
        </div>
        <div class="dsg_col dsg_col-6 dsg_col-sm-12">
          <p class="dsg_color-white dsg_a_text">
            Le développement économique ne se conçoit plus sans progrès environnemental et social. 
            Il appartient aussi aux grandes entreprises de proposer les prochains modèles vertueux, ceux qui encouragent les transformations positives du monde. <br>
            Société Générale est pleinement consciente de la responsabilité de son métier de banquier. 
            Notre Groupe a un rôle moteur pour contribuer à construire des modèles de développement plus écologiques et inclusifs, et permettre l’émergence de nouveaux moteurs de croissance durable.
          </p>
          <div class="dsg_wrap-content dsg_p-6 dsg_txt-wrap">
            <h3 class="dsg_color-white font-semibold dsg_mb-6 ">Retrouvez tous nos engagements:</h3>
            <a href="{{ route('login') }}" class="dsg_col__link relative" style="bottom: 0;" onclick="window.bddfTms.trackEvent(this,'click', {event_name: 'hub::la-strategie-rse-du-groupe-societe-generale::clic-sur-en-savoir-plus'});">
                En savoir plus
            </a>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- vidéo YT avec consentements (iframe)-->

<style>
	@media only screen and (max-width:500px) {
		.dcw_player_container {
			padding: 1em 1em 1em 1em !important;
		}

		.dcw-text-resize {
			font-size: 29px !important;
		}
	}

	@media only screen and (max-width:1024px) {
		#title_yt_pro {
			font-size: 1.25rem;
			margin-bottom: 2rem;
		}
	}

	#title_yt_pro {
		font-size:2rem;
	}

	.resize-container-youtube {
		max-width: 1000Px;
		display: block;
		margin: 0 auto;
	}

	.container-youtube {
		overflow: hidden;
		padding-bottom: 56.25%;
		position: relative;
		height: 0;
		/*  max-width: 792px;
  margin: 0 auto; */
	}

	.container-youtube video {
		position: absolute;
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
	}
</style>



<div style="padding: 2.375rem; text-align: center; padding-bottom: 80px;" id="video-5experts-pro" class="dcw_player_container">
	<h2 id="title_yt_pro" class="dsg_a_title -dsg_center -dsg_mt-14 -dsg_mb-10" style="margin-bottom: 30px;">Découvrez en vidéo comment financer son projet de transition énergétique</h2>

	<div class="resize-container-youtube">
		<div class="container-youtube">
			<video controls="">
				 <source src="media/media_mp4_MD_2.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</div>


<section class="dsg_section dsg_bg_color-grey200" aria-labelledby="titrePrendreRDV" role="region">
  <div class="dsg_container-sm container-pl-pr">
      <h2 class="dsg_a_title -dsg_center">Besoin d’en savoir plus&nbsp;?</h2>
      <p class="dsg_a_text -dsg_lead -dsg_center">Votre chargé d’affaires est à votre disposition pour vous accompagner.</p>
    </div>
</section>
<nav class="dcw_breadcrumb-mobile" aria-label="Fil d'ariane">
  <ul class="dcw_breadcrumb-mobile_list">
        <li class="dcw_breadcrumb-mobile_item">
            <a href="/" data-tms-element-label="home" data-tms-click-type="N" data-tms-container-label="fil-d-ariane-desktop">Accueil </a>
                    </li><li class="dcw_breadcrumb-mobile_item">
        <svg class="dcw_breadcrumb-mobile_corner" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#corner"></use></svg>
        
            <a href="/" data-tms-element-label="home" data-tms-click-type="N" data-tms-container-label="fil-d-ariane-mobile">

                Home
        
            </a>
    </li>
            <li class="dcw_breadcrumb-mobile_item is-active">
        <svg class="dcw_breadcrumb-mobile_corner" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#corner"></use></svg>
        

                RSE
        
    </li>


        
  </ul>
</nav>


















	
	
		

	


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
			<a href="{{ route('login') }}"><img alt="Page d'accueil - SG" class="dcw_footer-third_logo" height="30" src="{{ url('/') }}/images/logo-sg-seul.svg" width="150"></a>
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
<script>
    if (!window.cmsConstants) window.cmsConstants = {};

    window.cmsConstants.LOGGER_SERVICE_END_POINT = "/extrestcontent/logBigData";
    window.cmsConstants.LOGGER_LEVEL_MIN_SERVER = "error";
	window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT = "debug";

	window.cmsConstants.LOGGER_SERVICE_END_POINT_DEFAULT = "/extrestcontent/logBigData";
	window.cmsConstants.LOGGER_LEVEL_MIN_SERVER_DEFAULT = "ERROR";
	window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT_DEFAULT = "ERROR";
</script><script charset="UTF-8" src="{{ url('/') }}/js/init-configs.js"></script>
                        <script charset="UTF-8" src="{{ url('/') }}/js/dca_portail_global.js"></script>
                        <script charset="UTF-8" src="{{ url('/') }}/js/public-dca.js"></script>
                        <script charset="UTF-8" src="{{ url('/') }}/js/gda.public.js"></script>
                        <script charset="UTF-8" src="{{ url('/') }}/js/vendor.min.js"></script>
                <script charset="UTF-8" src="{{ url('/') }}/js/index.min.js"></script>
                <script charset="UTF-8" src="{{ url('/') }}/js/public-tms.js"></script>
                        <script type="text/javascript" src="{{ url('/') }}/js/avenir.js"></script><link href="css/footer-section_simulateurs_17030893010000.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="{{ url('/') }}/js/lazysizes.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/lazyload-safari-hack.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/swiper.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/main.js"></script>
</body></html>