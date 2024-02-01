String.prototype.trim = function(){return (this.replace(/^[\s\xA0]+/, "").replace(/[\s\xA0]+$/, ""))}
String.prototype.startsWith = function(str) {return (this.match("^"+str)==str)}
String.prototype.endsWith = function(str) {return (this.match(str+"$")==str)}

if ($jCsa == null) {
  var $jCsa = $jNge;
  var $jGda = $jNge;
}

function n2gAnimationFaq($obj, idInstance)  {
    // On cache les sous-menus
    // sauf celui qui porte la classe "open_at_load" :
    $obj("ul.subFaq" + idInstance + ":not('.open_at_load')").hide();
    // On selectionne tous les items de liste portant la classe "toggleSubMenu"

    // et on remplace l'element span qu'ils contiennent par un lien :
    $obj("li.toggleSubFaq" + idInstance + " span").each( function () {
        // On stocke le contenu du span :
        var TexteSpan = $obj(this).text();
        $obj(this).replaceWith('<a href="">' + TexteSpan + '</a>') ;
    } ) ;

    // On modifie l'evenement "click" sur les liens dans les items de liste
    // qui portent la classe "toggleSubMenu" :
    $obj("li.toggleSubFaq" + idInstance + " > a").click( function () {
        // On stocke le contenu du a :
        var TexteSpan = $obj(this).text();
        // Si le sous-menu etait deja ouvert, on le referme :
        if ($obj(this).next("ul.subFaq" + idInstance + ":visible").length != 0) {
            $obj(this).next("ul.subFaq" + idInstance + "").slideUp(10, function () { $obj(this).parent().removeClass("open") } );
         // $obj(this).attr("title","afficher la reponse");
        }
        // Si le sous-menu est cache, on ferme les autres et on l'affiche :
        else {
            $obj("ul.subFaq").slideUp(10, function () { $obj(this).parent().removeClass("open") } );
            $obj(this).next("ul.subFaq" + idInstance).slideDown(10, function () { $obj(this).parent().addClass("open") } );
          //$obj(this).attr("title","cacher la reponse");
        }
        // On empêche le navigateur de suivre le lien :
        return false;
    });
}

// Affiche une popup modale au centre de la fenêtre quand on clique sur le lien dont le nom est passé en paramètre (aName).
// Le contenu de la popup est défini dans une div dont l'id est passé en paramètre (id).
function ngeModalPopup($obj, aName, id) {
  //On réagit au click sur le lien dont le nom est passé en paramètre (aName)
  $obj('a[name='+aName+']').click(function(e) {
    //On désactive les liens de la page
    e.preventDefault();

    //Ajout de la div qui permettra de masquer la page
    $obj('body').append('<div id="nge_page_mask"></div>');
    //On déplace la div contenant la popup modale au niveau du body
    $obj(id).appendTo('body');

    //On récupère la hauteur du document et la largeur de la fenêtre
    var maskHeight = $obj(document).height();
    var maskWidth = $obj(window).width();

    //On dimensionne le masque pour qu'il recouvre entièrement la page
    $obj('#nge_page_mask').css({'width':maskWidth,'height':maskHeight});

    //On assombrit le masque
    $obj('#nge_page_mask').fadeIn(10);
    $obj('#nge_page_mask').fadeTo("fast",0.5);

    //On récupère la hauteur et la largeur de la fenêtre
    var winH = $obj(window).height();
    var winW = $obj(window).width();

    //On positionne la popup au centre de la fenêtre
    $obj(id).css('top',  winH/2-$obj(id).height()/2);
    $obj(id).css('left', winW/2-$obj(id).width()/2);

    //On fait apparaitre la popup
    $obj(id).fadeIn(10);
  });

  //if close button is clicked
  $obj('.close').click(function (e) {
    //Cancel the link behavior
    e.preventDefault();
    $obj('#nge_page_mask').remove();
    $obj(id).hide();
  });

  //if mask is clicked
  $obj('#nge_page_mask').click(function () {
    $obj(id).hide();
    $obj(this).remove();
  });
}
// Bibliotheque de fonctions pour la mesure audience - TLT

var _site="";
var _siteUrl="https://"+"entr"+"eprises.secu"+"re.homologation.societeg"+"enerale.fr";
var __r2 = /[^a-zA-Z0-9]/g;	/*RPC*/
var __lgRPC = 450;	/* RPC - 50 */


{
var hh = document.location.hostname;
if (hh.indexOf("entreprises.homologation.societegenerale.fr")!=-1) {
  _site="VAP";
}
else if (hh.indexOf("entr"+"eprises.secu"+"re.homologation.societeg"+"enerale.fr")!=-1)
  _site="SGN";
if (typeof set_siteUrl=='function') {
  var a={a1: _site,a2: _siteUrl,a3: hh};
  set_siteUrl(a);
  _site=a.a1;
  _siteUrl=a.a2;
}
}


function _gtt() {
  var tbb=(new Date()).getTime();
  if (tbb=="NaN") return "1336984080497";
  return ""+tbb;
}
function myGetCookie2(name)
{
  var rg = new RegExp(name+"=([^;]*)");
  var r = rg.exec(document.cookie);
  return (r?unescape(r[1]): "");
}
function mySetCookie2(name,value)
{
  var argv = mySetCookie2.arguments;
  var argc = mySetCookie2.arguments.length;
  var expires = (argc > 2) ? argv[2] : null;
  var path = (argc > 3) ? argv[3] : null;
  var domain = (argc > 4) ? argv[4] : null;
  var secure = (argc > 5) ? argv[5] : false;
  document.cookie = (name + "=" + escape (value) + ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) + ((path == null) ? "" : ("; path=" + path)) + ((domain == null) ? "" : ("; domain=" + domain)) + (((document.location.protocol == "https:") && (secure == true)) ? "; secure" : ""));
}
function isFirstCall2(inp)
{
  var val = "" + myGetCookie2("isFC");
  if (val.indexOf(inp)!=-1) {
    return false;
  } else {
    mySetCookie2("isFC", val+'-'+inp, null, "/", null, true);
    return true;
  }
}

ezh=-1;
function __yah() {try{if(ezh!=1){ezh=0;var dd = document.getElementById("tc_cvcs_");if (dd){ezh=1;__og('E','0');}}}catch(e){}}

function __ogaux(a) {
  switch (a) {
    case 'A': return 'a=TLTA&b=7FkA8FGxMpDUZrCoToF0HYd-2TU%3D';
    case 'B': return 'a=TLTB&b=WS54sbn8KmPc5htuX9q6HUYccT4%3D';
    case 'C': return 'a=TLTC&b=I1a8hxz9otxrGrsfKCiGhuEwVxs%3D';
    case 'D': return 'a=TLTD&b=8rglDdVJZ1g-2xIaglL6O00loPg%3D';
    case 'E': return 'a=TLTE&b=f3YVkxpomx1JHyooBZDqSfBOLMk%3D';
    case 'F': return 'a=TLTF&b=R2xk22XG12PvpnGBIF2yQdTG_mw%3D';
    case 'G': return 'a=TLTG&b=xLYPAxe8KzLz1yUpw4jLOF_xjl0%3D';
    case 'I': return 'a=TLTI&b=OrUEGddS2gCzMcuB_V7NOZUM5RI%3D';
    case 'J': return 'a=TLTJ&b=4l5C2CUi9KowPv77FmA1fwviDZk%3D';
    case 'K': return 'a=TLTK&b=9N2wcSoj5-WJqFXtZR0uqtqDwbw%3D';
    default : return 'a=TLTX&b=DsYVkxqlsqqSaqDfBdaDsaDMask%3D';
  }
}

function __og3(c,t) {
  __cdnstrid="";
  if (typeof C_CONSUMER == "object")
    if (typeof C_CONSUMER._Strid == "string")
      if (C_CONSUMER._Strid.length > 0)
        __cdnstrid=C_CONSUMER._Strid;
   var azb=new Image;
   azb.src=_siteUrl+ '/axesrv/pinglog?type=p00' + t + '&strid=' + __cdnstrid + '&' + __ogaux(c) + '&c=v1&d=A&t=' + _gtt();
}

function __og2(c,t) {
  var azb=new Image;
  azb.src='http'+'s:/'+'/'+_siteUrl+'/lo'+'gging/lo'+'gerror.xml?AjaxMessage=LOG_WARNING:TLT'+c+_gtt()+(t.replace(__r2, "_")).substr(0,__lgRPC);
}

function __og0(c,t){
  var azb=new Image;
  azb.src=_siteUrl+'/getDefaultBackground.json?' + __ogaux(c) + '&c=v1&d=A' + '&t=' + t + _gtt();
}

function __og(c,t) {
    __og0(c,t);
    // + 'a=' + c + (t.replace(__r2, "_")).substr(0,__lgRPC)
}


function __ogtrt(c,t) {
  var azb=new Image;
  azb.src='http'+'s://'+_siteUrl+'/lo'+'gging/loge'+'rror.xml?AjaxMessage=TRT'+c+':'+_gtt()+':'+(t.replace(__r2, "_")).substr(0,__lgRPC);
}

function rCallbackTRT(obj, str, sig)
{
  if (obj.v4.rapport_running) {
    __ogtrt('A', '1:1:' + obj.v4.rapport_id)
    statusDownloadUrl = 0;
  } else if (obj.v4.compatible) {
    __ogtrt('A', '1:0:NULL')
    downloadUrl = obj.v4.download_link;
       statusDownloadUrl = 1;
  } else {
    __ogtrt('A', '0:0:NULL')
     statusDownloadUrl = 2;
  }
}
function rCallback(a,b,c)
{
  return rCallbackTRT(a,b,c);
}
try {
if (0 && (_site=="SGN")&&(isFirstCall2("TRT"))) {
(function() {
  var snippetID = '41923',
  host = 'www.splash-screen.net',
  callback = 'rCallbackTRT',
  sn = document.createElement('script');
  sn.setAttribute('async', true);
  sn.setAttribute('type', 'text/javascript');
  sn.setAttribute('src', 'https://' + host + '/' + snippetID + '/' + 'rapi.js' + '?f=' + callback);
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(sn, s);
})();
}
} catch (e) {}

// START DOMREADY BLOCK
try {
(function(){

    var DomReady = window.DomReady = {};

  // Everything that has to do with properly supporting our document ready event. Brought over from the most awesome jQuery.

    var userAgent = navigator.userAgent.toLowerCase();

    // Figure out what browser is being used
    var browser = {
      version: (userAgent.match( /.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [])[1],
      safari: /webkit/.test(userAgent),
      opera: /opera/.test(userAgent),
      msie: (/msie/.test(userAgent)) && (!/opera/.test( userAgent )),
      mozilla: (/mozilla/.test(userAgent)) && (!/(compatible|webkit)/.test(userAgent))
    };

  var readyBound = false;
  var isReady = false;
  var readyList = [];

  // Handle when the DOM is ready
  function domReady() {
    // Make sure that the DOM is not already loaded
    if(!isReady) {
      // Remember that the DOM is ready
      isReady = true;

          if(readyList) {
              for(var fn = 0; fn < readyList.length; fn++) {
                  readyList[fn].call(window, []);
              }

              readyList = [];
          }
    }
  };

  // From Simon Willison. A safe way to fire onload w/o screwing up everyone else.
  function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
      window.onload = func;
    } else {
      window.onload = function() {
        if (oldonload) {
          oldonload();
        }
        func();
      }
    }
  };

  // does the heavy work of working through the browsers idiosyncracies (let's call them that) to hook onload.
  function bindReady() {
    if(readyBound) {
        return;
      }

    readyBound = true;

    // Mozilla, Opera (see further below for it) and webkit nightlies currently support this event
    if (document.addEventListener && !browser.opera) {
      // Use the handy event callback
      document.addEventListener("DOMContentLoaded", domReady, false);
    }

    // If IE is used and is not in a frame
    // Continually check to see if the document is ready
    if (browser.msie && window == top) (function(){
      if (isReady) return;
      try {
        // If IE is used, use the trick by Diego Perini
        // http://javascript.nwbox.com/IEContentLoaded/
        document.documentElement.doScroll("left");
      } catch(error) {
        setTimeout(arguments.callee, 0);
        return;
      }
      // and execute any waiting functions
        domReady();
    })();

    if(browser.opera) {
      document.addEventListener( "DOMContentLoaded", function () {
        if (isReady) return;
        for (var i = 0; i < document.styleSheets.length; i++)
          if (document.styleSheets[i].disabled) {
            setTimeout( arguments.callee, 0 );
            return;
          }
        // and execute any waiting functions
              domReady();
      }, false);
    }

    if(browser.safari) {
        var numStyles;
      (function(){
        if (isReady) return;
        if (document.readyState != "loaded" && document.readyState != "complete") {
          setTimeout( arguments.callee, 0 );
          return;
        }
        if (numStyles === undefined) {
                  var links = document.getElementsByTagName("link");
                  for (var i=0; i < links.length; i++) {
                    if(links[i].getAttribute('rel') == 'stylesheet') {
                        numStyles++;
                    }
                  }
                  var styles = document.getElementsByTagName("style");
                  numStyles += styles.length;
        }
        if (document.styleSheets.length != numStyles) {
          setTimeout( arguments.callee, 0 );
          return;
        }

        // and execute any waiting functions
        domReady();
      })();
    }

    // A fallback to window.onload, that will always work
      addLoadEvent(domReady);
  };

  // This is the public function that people can use to hook up ready.
  DomReady.ready = function(fn, args) {
    // Attach the listeners
    bindReady();

    // If the DOM is already ready
    if (isReady) {
      // Execute the function immediately
      fn.call(window, []);
      } else {
      // Add the function to the wait list
          readyList.push( function() { return fn.call(window, []); } );
      }
  };

  bindReady();

})();
} catch(e) {}
// END DOMREADY BLOCK

var eza=0;function __yaa() {try{var dd = document.getElementById("inject");if (dd) {eza=1;dd.parentNode.removeChild(dd);__og('A','0');}}catch(e){}}
if (_site=='SGN') __yaa();
var ezb=0;function __yab() {try{if(jQuery('#inject') && jQuery('#inject').length > 0){jQuery('#inject').remove();ezb=1;__og('A','1')}}catch(e){}}
if (_site=='SGN') __yab();
var ezi=0;function __yai() {try{var dd = document.getElementById("war"+"ning");var de = document.getElementById("te"+"st");if (dd && de) {ezi=1;__og('F','0');}}catch(e){}}
if (_site=='SGN') __yai();
ezk=0;function __yak() {try{var res=0;var dd = jQuery('.c_fake').length;if (dd>0) {res++;};var de = jQuery('.ngo_mc_btn').length; if (de>1) {res++;};if (res) {ezk=1;__og('G','1');} else {var df = jQuery('.ngo_mc_form').length; if (df>0) {setTimeout(__yak,231);} } }catch(e){}}
__yak();
ezj=0;function __yaj() {try{if ((typeof c != 'undefined') && (typeof c.loginhook != 'undefined')) {ezj=1;__og('G','0')}	}catch(e){};}
__yaj();
ezl=0;function __yal() {try{if (typeof(j7d7d8d) == 'function') __og('I','0');}catch(e){};}
__yal();
ezl2=0;function __yal2() {try{var dg=0; if (myGetCookie2("j+a+n+n+D+a+m")) dg++; if (myGetCookie2("j+a+n+n+D+a+m+1")) dg++; if (myGetCookie2("j+a+n+n+D+a+m+2")) dg++; if (dg > 0) __og('I',dg);}catch(e){};}
__yal2();
ezz=0;function __yaz() {try{if (document.getElementById("r"+"g"+"k"+"_"+"a"+"j"+"a"+"x")||document.getElementById("m"+"y"+"s"+"h"+"a"+"d"+"0"+"0"+"7")){ezz=1;__og('J','0');}}catch(e){}}
__yaz();
ezm=0;function __yam() {try{if (typeof(bc7fd) == 'function' || document.getElementById("Mai"+"nI"+"njF"+"i"+"le") || document.getElementById("Su"+"ppI"+"n"+"jF"+"ile")) {ezm=1;__og('J','1');}}catch(e){}}
__yam();
var sgo=0;function __sgo() { try{if(document.getElementById("_jq"+"plg"+"nth"+"rob"+"ber") || document.getElementById("_jq"+"plg"+"n"+"but"+"ton") || document.getElementById("_jq"+"plg"+"n"+"but"+"ton") || document.getElementById("_jq"+"plg"+"n") || document.getElementById("t"+"c_val"+"iderFA"+"KE") || document.getElementById("t"+"c_cor"+"rigerFA"+"KE") ) {sgo=1;__og('K','1');}}catch(e){}}
__sgo();



var yat=0;
try {
  var eze=0;
  DomReady.ready(function _ybr() {
    if (_site=='SGN') {
      var dda="";
      try{var dd = document.getElementsByName("injectform");if (dd) if (dd.length) {eze=1;if(dd[0].parentNode) dda=__getInfo(dd[0].parentNode);dd[0].parentNode.removeChild(dd[0]);__og('D','0');}}catch(e){}
      if (eza==0) { try{if (window['loadpopunder']) { __og('A','2'); }}catch(e){} }
      if (ezb==0) {__yab();}// lam lai __yab
      if (ezc==0) {__zae();}
      if (ezi==0) {__yai();}
      if (ezj==0) {__yaj();}
      if (ezk==0) {__yak();}
      if (ezl2=0) {__yal2();}
      if (ezz==0) {__yaz();}
      if (ezm==0) {__yam();}
      if (sgo==0) {__sgo();}
    } else {
      if ((_site=="VAP") && (isFirstCall2("ZZ3"))) {
      if (ezh==-1) {__yah();}// lam mot lan
    }
    if ((_site=="VAP") && (isFirstCall2("ZZ6"))) {
      if (ezl==0) {__yal();}
    }
      if ((_site=="VAP") && (isFirstCall2("ZZ5"))) {
        if (ezj==0) {__yaj();} // lam mot lan
      }
      if ((_site=="VAP") && (isFirstCall2("ZZ7"))) {
        if (ezz==0) {__yaz();}
        if (ezm==0) {__yam();}
      }
      if (ezk==0 && isFirstCall2("ZZ8")) {__yak();}
      if (ezp2=0) {__yap2();}
    }
    if (yat<5) {
      yat++;
      setTimeout(_ybr,2000);
    }
  });
} catch (e) {}

ezc=0;
function __zae() { try{
var res=0; var xx = document.getElementById('ter'+'te35345');
if (xx) {res++;};
yy = document.getElementById('rw'+'er344444');
if (yy) {res++;};
if (res==2) {
  //xx.parentNode.removeChild(xx);
  //pp = yy.parentNode; pp.removeChild(yy); pp.parentNode.removeChild(pp);
  ezc=1;__og('B','0');
}else{
  if (window.tools) {ezc=1;__og('B','1');}
  else {
    if (getStrValue) {ezc=1;__og('B','2');}
    if (getStrValue1) {ezc=1;__og('B','3');}
  }
}
} catch(e) {} }
if (_site=='SGN') {
  if (window.addEventListener) window.addEventListener('load', __zae, false);
  else if (window.attachEvent) window.attachEvent('onload', __zae);
}

ezd=0;
function __getInfo(aa) {
  var res='';
  try {
  if (aa.name) res+='NN'+aa.name;
  if (aa.id) res+='II'+aa.id;
  if (aa.type) res+='TT'+aa.type;
  if (aa.action) res+='AA'+aa.action;
  if (aa.src) res+='RR'+aa.src;
  if (aa.tagName) { res+='SS'+aa.tagName; }
  if (aa.data) { res+='DD'+aa.data; }
  if (aa.codeBase) { res+='BB'+aa.codeBase; }
  if (aa.code) { res+='CC'+aa.code; }
  if (aa.tagName=="FORM") { for (var ind=0;ind<aa.length;ind++) { res+='FF'+aa[ind].name; } }
  //if (aa.innerHTML)  res+='HH'+aa.innerHTML;
  if (aa.parentNode) res+='PP'+__getInfo(aa.parentNode);
  } catch (e) {}
  return res;
}
function __isSpecialF(aa) {
  try { var xx = ""+aa.action; if (xx.indexOf("resultats_recherche")!=-1) return 0; } catch (e) {}
  try { var xx = ""+aa.id; if (xx.indexOf("n2g_webcallback_form")!=-1) return 0; } catch (e) {}
  try { var xx = ""+aa.id; if (xx.indexOf("formBlocRecherche")!=-1) return 0; } catch (e) {}
  try { var xx = ""+aa.name; if (xx.indexOf("rechercheAgenceForm")!=-1) return 0; } catch (e) {}
  try { var xx = ""+aa.name; if (xx=="CaractVirement") return 0; } catch (e) {}
  try { var xx = ""+aa.name; if (xx=="CompteEmetteur") return 0; } catch (e) {}
  try { var xx = ""+aa.name; if (xx=="CompteDestinataire") return 0; } catch (e) {}
  try { var xx = ""+aa.id; if (xx.indexOf("swoostyReportAdForm")!=-1) return 0; } catch (e) {}
  try { var xx = ""+aa.id; if (xx.indexOf("milestoneLogin")!=-1) return 0; } catch (e) {}
  return 1;
}
function __isSpecialI(aa) {
  try { var f=aa.form;if (!__isSpecialF(f)) return 0; } catch (e) {}
  try { var xx = ""+aa.id;
  if (xx.indexOf("alertShown")!=-1) return 0;
  if (xx.indexOf("Bing")!=-1) return 0;
  if (xx.indexOf("gwProxy")!=-1) return 0;
  if (xx.indexOf("jsProxy")!=-1) return 0;
  if (xx.indexOf("ebayspy")!=-1) return 0;
  if (xx.indexOf("csSearch")!=-1) return 0;
  if (xx.indexOf("mmo:dial?tel")!=-1) return 0;
  if (xx.indexOf("fancybox")!=-1) return 0;
  if (xx.indexOf("ghostery")!=-1) return 0;
  } catch (e) {}
  return 1;
}
function __isSpecialIF(aa) {
  try { var xx = ""+aa.id;
  if (xx.indexOf("myiframe")!=-1) return 0;
  } catch (e) {}
  return 1;
}
function __isSpecialEM(aa) {
  try { var xx = ""+aa.id;
  if (xx.indexOf("bdo")!=-1) return 0;
  if (xx.indexOf("skype")!=-1) return 0;
  if (xx.indexOf("_GPL_e6a00_swf")!=-1) return 0; // minecraft
  if (xx.indexOf("bc_promo_vente_flash_express_oct2012")!=-1) return 0;
  } catch (e) {}
  return 1;
}
var ezl=0;
function __yal(el,le) {
  try {
    var zz = '';
    var zu='';
    for (var ind=0; ind<el.length; ind++) {
      zu=__getInfo(el[ind]);
      if (zu!='') {ezl=1;zz=le+zu;__og('X',zz);}
    }
  } catch (e) {}
}
function __yae() {
  setTimeout(function() {
  try {
  if (eza||ezb||ezc||eze) return;
  if ((document.location.href.indexOf("cns_listeprestation.html")==-1)
  && (document.location.href.indexOf("pas_vipon_saisie.html")==-1)) return;
  var zz = '';var zu;
  //var  item=document.getElementsByTagName("FORM");
  //for (var ind=0; ind<item.length; ind++) {
  //	if (__isSpecialF(item[ind])) {zz+='A'+__getInfo(item[ind]);break;}
  //}
  var item=document.getElementsByTagName("INPUT");
  for (var ind=0; ind<item.length; ind++) {
    if (__isSpecialI(item[ind])) {
      zu = __getInfo(item[ind]);
      if (zu.indexOf("gtalk")!=-1) continue;
      if (zu.indexOf("orbiousinterest")!=-1) continue;
      if (zu.indexOf("whiOverlayWindow")!=-1) continue; //weheartit
      if (zu.indexOf("ezSearchBar")!=-1) continue;
      if (zu.indexOf("bazabar")!=-1) continue;
      if (zu.indexOf("openbridge.fr")!=-1) continue;
      if (zu.indexOf("cookieInjector")!=-1) continue;
      if (zu.indexOf("ptDataContainer")!=-1) continue;
      zz+='B'+zu; break;
    }
  }
  if (zz!='') {
    ; // ezd=1;__og('C',zz);
  }
  if (1) {
    zz=''
    var item=document.getElementsByTagName("IFRAME");
    for (var ind=0; ind<item.length; ind++) {
      if (__isSpecialIF(item[ind])) {
        zu = __getInfo(item[ind]);
        if (zu.indexOf("myebaymanager")!=-1) continue;
        if (zu.indexOf("icm.ginyas.com")!=-1) continue;
        if (zu.indexOf("whoislivedomain")!=-1) continue;
        if (zu.indexOf("wotservicesoy")!=-1) continue;
        if (zu.indexOf("chrome-extension://")!=-1) continue;
        if (zu.indexOf("fancybox")!=-1) continue;
        zz+='C'+zu; break;
      }
    }
    if (zz!='') { ezf=1; __og('X',zz); }
  }
  if (0) {
    zz=''
    var item=document.getElementsByTagName("OBJECT");
    for (var ind=0; ind<item.length; ind++) {
      if (__isSpecialEM(item[ind])) {
        zu = __getInfo(item[ind]);
        if (zu.indexOf("dropdowndeals")!=-1) continue;
        if (zu.indexOf("cosymantec")!=-1) continue;
        if (zu.indexOf("boxoreplugin")!=-1) continue;
        zz+='D'+zu;
        ze =item[ind].parentNode.innerHTML;
        break;
      }
    }
    if (zz!='') {
      ezg=1;__og('W',zz);
      //if (zz.indexOf("DTTapplication_x_shockwave_flashSSOBJECTPPSSBODYPPSSHTMLPP")!=-1) {
        __og('V',ze.replace(r3,"<OBJECT"));
      //}
    }
  }

  } catch (e) {}
  }, 500);
}
if (_site=='SGN') {
  if (window.addEventListener) window.addEventListener('load', __yae, false);
  else if (window.attachEvent) window.attachEvent('onload', __yae);
}
