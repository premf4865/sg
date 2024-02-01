function setVideo() {
  if ($jNge2("#hero")) {
    $jNge2("#hero").css("overflow", "hidden").prepend('<video id="hero_video" style="height:0;width:100%;" height="0" class="video-js vjs-default-skin" controls="controls"><source src="' + $jNge2("#hero").attr("data-video") + '" type="video/mp4" /></video>');
    $jNge2("#hero_video").bind("ended", function() {
      $jNge2("#hero_video").remove();
      resetHeroHeight();
    });
    $jNge2("#hero_video")[0].play();
    vid_h = $jNge2("#hero_video").innerWidth() / 1.7777777777;
    setHeroHeight();
  }
}
function setHeroHeight() {
  if ($jNge2("#hero")) {
    hero_h = $jNge2("#hero").outerHeight();
    $jNge2("#top_content").animate({
      marginTop : 0
    });
    $jNge2("#hero_content h1, .picto-play, #hero_content .insert").animate({
      opacity : 0
    });
    $jNge2("#hero, #hero_video").animate({
        height : vid_h
    }, 800, "easeOutExpo");
  }
}
function resetHeroHeight() {
  if ($jNge2("#hero")) {
    $jNge2("#hero_content h1, .picto-play, .insert").animate({
        opacity : 0.4
    });
    $jNge2("#top_content").animate({
        marginTop : -22
    });
    $jNge2("#hero").animate({
        height : hero_h
    }, 800, "easeOutExpo");
  }
}
function centerModal() {
  if (document.getElementById("modal-container") && $jNge("#modal-container")) {
    var e = document.getElementById("modal-container");
    var t = $jNge("#modal-container");
    t.css("left", (device_width - e.offsetWidth) / 2);
    t.css("top", (device_height - e.offsetHeight) / 2);
  }
}
function onResize() {
  device_height = $jNge2(window).height();
  device_width = $jNge2(window).width();
  centerModal();
}
function onSkroll(e$$0) {
  if (doc_height = $jNge2(document).height(), e$$0 = "undefined" != typeof e$$0 ? e$$0 : 0.7, 800 > device_height) {
    var t$$0 = e$$0 + 0.1
  } else {
    if (device_height > 1150) {
      t$$0 = e$$0 + 0.3;
    } else {
      t$$0 = e$$0 + 0.2;
    }
  }
  var i = $jNge2(document).scrollTop();
  $jNge2(".animate-right, .animate-left, .animate-appear").each(function() {
    var e = $jNge2(this).offset().top;
    if (i >= e - device_height * t$$0 || device_height * t$$0 > e) {
      if ("true" == this.getAttribute("data-anim")) {
        scrollAnim($jNge2(this));
      }
    }
  });
  $jNge2(".animate-rise").each(function() {
    var t = $jNge2(this).offset().top;
    if (i >= t - device_height * e$$0 || device_height * e$$0 > t) {
      if ("true" == this.getAttribute("data-anim")) {
        scrollAnim($jNge2(this));
      }
    }
  });
  $jNge2(".animate-drop").each(function() {
    var t = $jNge2(this).offset().top;
    if (i >= t - device_height * e$$0 || device_height * e$$0 > t) {
      if ("true" == this.getAttribute("data-anim")) {
        scrollAnim($jNge2(this));
      }
    }
  });
  $jNge2(".animate-expand-height").each(function() {
    var e = $jNge2(this).offset().top;
    if (i >= e - device_height * t$$0 || device_height * t$$0 > e) {
      if ("true" == this.getAttribute("data-anim")) {
        scrollAnim($jNge2(this));
      }
    }
  });
}
function scrollAnim(e) {
  var t = 0;
  if ($jNge2(e)[0].getAttribute("data-anim-delay") && (t = $jNge2(e)[0].getAttribute("data-anim-delay")), e.hasClass("animate-drop")) {
    var i = $jNge2(e).css("marginTop").replace("px", "");
    e.delay(t).animate({
      marginTop : parseFloat(i) + 40,
      opacity : 1
    }, 800, "easeOutExpo");
  }
  if (e.hasClass("animate-rise")) {
    i = $jNge2(e).css("marginTop").replace("px", "");
    var a = parseFloat(i) - 60;
    e.delay(t).animate({
      marginTop : a,
      opacity : 1
    }, 800, "easeOutExpo");
  }
  if (e.hasClass("animate-left")) {
    i = $jNge2(e).css("marginLeft").replace("px", "");
    e.delay(t).animate({
      marginLeft : parseFloat(i) + 70,
      opacity : 1
    }, 800, "easeOutExpo");
  }
  if (e.hasClass("animate-right")) {
    i = $jNge2(e).css("marginRight").replace("px", "");
    e.delay(t).animate({
      marginRight : parseFloat(i) + 70,
      opacity : 1
    }, 800, "easeOutExpo");
  }
  if (e.hasClass("animate-appear") && e.delay(t).animate({
    opacity : 1
  }, 2E3, "easeOutExpo"), e.hasClass("animate-expand-height")) {
    var n = $jNge2.parseJSON(e[0].getAttribute("data-sizes"));
    e.delay(t).animate({
      height : n.end,
      opacity : 1
    }, 3E3, "easeOutExpo");
  }
  e.attr("data-anim", false);
}
function slideMenu() {
  var e = $jNge2(document).scrollTop();
  if (e > 140) {
    $jNge2("#f-menu").css({position : "fixed", top : 0, "z-index" : 20});
    if(window.location.hostname == "entreprises.secure.societegenerale.fr") {
        $jNge2(".wrapper-menu-fraude").css({position : "fixed", top : 0, "z-index" : 20});
    }else {
        $jNge2(".wrapper-menu-fraude").css({position : "fixed", top : 62, "z-index" : 20});
    }
    $jNge2("main").css("marginTop", "86px");
    $jNge2("#f-menu #flip-cell #contact-cell").css("background", "#ed1a3a");
    $jNge2("#f-menu #flip-cell #contact-cell a").css("color", "#fff");
  } else {
    $jNge2("#f-menu").css({position : "relative", top : 0});
    $jNge2(".wrapper-menu-fraude").css({position : "relative", top : 0});
    $jNge2("main").css("marginTop", "0px");
    $jNge2("#f-menu #flip-cell #contact-cell").css("background", "none");
    $jNge2("#f-menu #flip-cell #contact-cell a").css("color", "#000");
  }
  doc_height = $jNge2(document).height();
  if ($jNge2(document).scrollTop() + device_height > doc_height - 560) {
    $jNge2("#warning").css({position : "absolute",bottom : "0px","z-index" : "20"});
  } else {
    $jNge2("#warning").css({position : "fixed",bottom : 0,top : "initial"});
  }
}
function isIE() {
  return-1 != navigator.userAgent.toLowerCase().indexOf("msie") ? parseInt(navigator.userAgent.toLowerCase().split("msie")[1]) : false;
}
function isFF() {
  return-1 != navigator.userAgent.indexOf("Firefox") ? parseInt(navigator.userAgent.split("Firefox/")[1]) : false;
}
function getInheritedProp(e, t) {
  return "" != e.css(t) ? e.css(t) : getInheritedProp(e.parent(), t);
}
function forEach(e, t) {
  var i = Object.keys(e);
  var a = 0;
  for (;a < i.length;a++) {
    t(e[i[a]], i[a], a, e);
  }
}
function req(e$$0, t$$0, i) {
  var a = "";
  if (isRSet(t$$0)) {
    forEach(t$$0, function(e, t) {
      a += "&" + t + "=" + e;
    });
  }
  var n = new XMLHttpRequest;
  n.open("POST", e$$0, true);
  n.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  n.send(a);
  n.onreadystatechange = function() {
    if (4 === n.readyState) {
      if (n.status >= 200 && n.status < 400) {
        i(n.responseText, e$$0, t$$0);
      } else {
        i(false);
      }
    }
  };
}
function file_exists(e, t) {
  var i = this.window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest;
  if (!i) {
    throw new Error("XMLHttpRequest not supported");
  }
  return i.open("HEAD", e, false), i.send(null), 200 == i.status && t(), false;
}
function isRSet(e) {
  return void 0 != e && ("" != e && "null" != e) ? true : false;
}
function loadError(e) {
  throw new URIError("The script " + e.target.src + " is not accessible.");
}
function importScript(e, t) {
  var i = document.createElement("script");
  i.type = "text/javascript";
  i.onerror = loadError;
  if (t) {
    i.onload = t;
  }
  document.body.insertBefore(i, document.body.firstChild);
  i.src = e;
}
function insertCss(e) {
  var t = document.createElement("link");
  t.setAttribute("href", e);
  t.setAttribute("rel", "stylesheet");
  t.setAttribute("type", "text/css");
  document.getElementsByTagName("head").item(0).appendChild(t);
}
function getHashVals() {
  var e$$0 = window.location.hash.replace("#", "");
  if (e$$0) {
    var t = {};
    return forEach(e$$0.split(";"), function(e) {
      var i = e.split("=");
      t[i[0]] = i[1];
    }), t;
  }
  return false;
}
function getCookie(e) {
  var t = "; " + document.cookie;
  var i = t.split("; " + e + "=");
  return 2 == i.length ? i.pop().split(";").shift() : void 0;
}
function setCookie(e, t, i) {
  if (i) {
    var a = new Date;
    a.setTime(a.getTime() + 24 * i * 60 * 60 * 1E3);
    var n = "; expires=" + a.toGMTString();
  } else {
    n = "";
  }
  document.cookie = e + "=" + t + n + "; path=/";
}
function isCertif() {
  if ("true" == getCookie("CERTIF")) {
    return true;
  }
  var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
  for (var i = 0; i < hashes.length; i++) {
    hash = hashes[i].split('=');
    if ("certif" == hash[0]) {
      return true;
    }
  }
  return false;
}
if (!Object.keys) {
  Object.keys = function() {
    var hasOwnProperty = Object.prototype.hasOwnProperty;
    var hasDontEnumBug = !{
      toString : null
    }.propertyIsEnumerable("toString");
    var dontEnums = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"];
    var dontEnumsLength = dontEnums.length;
    return function(obj) {
      if (typeof obj !== "object" && (typeof obj !== "function" || obj === null)) {
        throw new TypeError("Object.keys called on non-object");
      }
      var result = [];
      var prop;
      var i;
      for (prop in obj) {
        if (hasOwnProperty.call(obj, prop)) {
          result.push(prop);
        }
      }
      if (hasDontEnumBug) {
        i = 0;
        for (;i < dontEnumsLength;i++) {
          if (hasOwnProperty.call(obj, dontEnums[i])) {
            result.push(dontEnums[i]);
          }
        }
      }
      return result;
    };
  }();
}
var device_height = 0;
var device_width = 0;
var doc_height = 0;
var hero_h = 0;
var vid_h = 0;
var isff = isFF();
var isie = isIE();
var panel_open = 0;
var doc_h = 0;
var url_hash = window.location.hash;
var hash_vals = getHashVals();
var version = 1;
history.navigationMode = "compatible", /*(!getCookie("version") || getCookie("version") > version) && (setCookie("version", version, 1), window.location.reload(true)),*/ isie && (9 > isie && (Object.keys || (Object.keys = function(e) {
  var t = [];
  var i;
  for (i in e) {
    if (e.hasOwnProperty(i)) {
      t.push(i);
    }
  }
  return t;
}), "undefined" == typeof console && (console = function() {
  this.log = function() {
  };
}))), $jNge2(document).ready(function() {
  device_height = $jNge2(window).height();
  device_width = $jNge2(window).width();
  $jNge2("#nge_page").css("width", device_width);
  $jNge2(window).bind("scroll", function() {
    slideMenu();
  });
  $jNge2("#warning #close-warning").click(function() {
    $jNge2("#warning").css("display", "none");
  });
  if (isCertif()) {
    $jNge2("#connect").attr("href", "https://entreprises.certif.societegenerale.fr/");
    $jNge2("#connect img").attr("alt", "Connexion certifi\u00c3\u00a9e");
  }
  $jNge2("#menu_trigger_btn").click(function() {
    if (0 == panel_open) {
      $jNge2("#menu_trigger_btn").addClass("active");
      $jNge2("#mob_panel").animate({
        right : 0
      });
      panel_open = 1;
    } else {
      $jNge2("#menu_trigger_btn").removeClass("active");
      $jNge2("#mob_panel").animate({
        right : "-100%"
      });
      panel_open = 0;
    }
  });
/*
  // Soulignement des liens desktop dans Header et Footer
  if (window.matchMedia("(min-width: 960px)").matches) {
    $jNge2("#menu li a, #domain_switcher li a, footer ul.underlink li a").mouseenter(function() {
      if (!$jNge(this).parent().hasClass("active")) {
        $jNge2(this).prepend('<span class="underliner" style="background-color:' + getInheritedProp($jNge2(this), "color") + ';"></span>');
        $jNge2(this).find(".underliner").animate({
          width : "100%"
        }, 300, "easeOutExpo");
      }
    }).mouseleave(function() {
      $jNge2(this).find(".underliner").animate({
        width : "0%"
      }, 300, "easeOutExpo", function() {
        $jNge2(this).remove();
      });
    });
  }
    
// Désactiver effet hover sur mobile  
if (window.matchMedia("(min-width: 960px)").matches) {
  $jNge2(".btn").mouseenter(function() {
    if (0 == $jNge2(this).find("span").length) {
      $jNge2(this).html("<span>" + $jNge2(this).html() + "</span>");
    }
    var e = "";
    if ($jNge2(this)[0].getAttribute("data-slide-color")) {
      e = "background-color:" + $jNge2(this)[0].getAttribute("data-slide-color") + ";";
    }
    $jNge2(this).prepend('<i class="btn-slide" style="' + e + '"></i>');
    $jNge2(this).find(".btn-slide").animate({
      width : "100%"
    }, 300, "easeOutExpo");
  }).mouseleave(function() {
    $jNge2(this).find(".btn-slide").animate({
      width : "0"
    }, 300, "easeOutExpo", function() {
      $jNge2(this).remove();
    });
  });
}
   */
  $jNge2(".submenu-container").slideToggle();
  $jNge2(".toggle-solution").attr("data-tab-state", 0);
  $jNge2(".toggle-solution").click(function() {
    var e = $jNge2("#" + $jNge2(this)[0].getAttribute("data-submenu-id"));
    if (e.slideToggle(), 0 == $jNge2(this).attr("data-tab-state")) {
      $jNge2("html,body").animate({
        scrollTop : $jNge2(this).offset().top - device_height / 2
      });
      var t = $jNge2(this);
      t.find("i").css("backgroundPosition", "0px -3px").attr("data-tab-state", 1).attr("aria-expanded", "true").parents(".narrow-pad").animate({
        paddingBottom : "6px"
      });
    } else {
      $jNge2(this).find("i").css("backgroundPosition", "0px -39px").attr("data-tab-state", 0).attr("aria-expanded", "false").parents(".narrow-pad").animate({
        paddingBottom : "70px"
      });
    }
  });
  $jNge2(".img-change-hover").mouseenter(function() {
    $jNge2(this).attr("src", $jNge2(this).attr("data-img-hover"));
  }).mouseleave(function() {
    $jNge2(this).attr("src", $jNge2(this).attr("data-img-base"));
  });
  $jNge2(".submit-btn").removeAttr("onclick").unbind("click");
  $jNge2(".submit-btn").click(function(e) {
    e.preventDefault();
    if ($jNge2("#contact-cell").is(":visible")) {
      $jNge2("#contact-cell").hide();
      $jNge2("#input-cell").animate({
        width : 240
      });
    } else {
      if ("" == $jNge2("#search").val()) {
        $jNge2("#contact-cell").show();
        $jNge2("#input-cell").stop(true, false).animate({
          width : 42
        });
      } else {
        $jNge2("#formBlocRecherche").submit();
      }
    }
  });
  if (isff) {
    if (4 > isff) {
      insertCss("/static/ent/ent/ENT/EIE2015/_assets/styles/ff3.css");
    }
  }
  if (8 == isie) {
    insertCss("/static/ent/ent/ENT/EIE2015/_assets/styles/ie8.css");
  }
  if (7 == isie) {
    insertCss("/static/ent/ent/ENT/EIE2015/_assets/styles/ie7.css");
  }
  current_url = document.location.href;
  var e$$0 = current_url.split("/");
  current_page = e$$0[e$$0.length - 1];
  var t$$0 = current_page.split("?");
  if (current_file = t$$0[0], "CED" == current_file.substr(0, 3) && insertCss("/static/ent/ent/ENT/EIE2015/_assets/styles/opcvm.css"), window.location.href.getHParam("autoplay")) {
    var i$$0 = $jNge2("#fond_hero");
    i$$0.load(setVideo);
    if (i$$0[0].complete) {
      i$$0.load();
    } else {
      "";
    }
  }
  $jNge2("a[href*=#]:not([href=#])").click(function() {
    if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
      var e = $jNge2(this.hash);
      if (e = e.length ? e : $jNge2("[name=" + this.hash.slice(1) + "]"), e.length) {
        return $jNge2("html,body").animate({
          scrollTop : e.offset().top + 70
        }, 1E3), false;
      }
    }
  });
  $jNge2("#domain_switcher li a").bind("click", function() {
    document.location = this.href;
  });
  if(window.location.hostname == "entreprises.secure.societegenerale.fr") {
      $jNge2('.mini-grey-txt a').attr("href", "https://entreprises.secure.societegenerale.fr/contactez_nous/information-produits-services");
  }
    
  /* Changement de lien HERO pour mobile */
  //if (window.matchMedia("(max-width: 960px)").matches) {
  //  $jNge2('.mini-grey-txt a, .url-contact-mobile').attr("href", "https://import-export.societegenerale.fr/fr");
  //}
    
  $jNge2("#domain_switcher #self").bind("click", function() {
    if (isIE()) {
      if (isIE()) {
        if (-1 != $jNge2("#domain_switcher").css("backgroundPositionY").indexOf("-10")) {
          $jNge2("#domain_switcher").animate({
            height : 26
          }, 300, "easeOutExpo", function() {
            $jNge2("#domain_switcher").css("backgroundPositionY", "10px");
          });
        } else {
          $jNge2("#domain_switcher").css("backgroundPositionY", "-10px");
          $jNge2("#domain_switcher").animate({
            height : 138
          }, 300, "easeOutExpo");
        }
      }
    } else {
      if (-1 != $jNge2("#domain_switcher").css("backgroundPosition").indexOf("-10")) {
        $jNge2("#domain_switcher").animate({
          height : 26
        }, 300, "easeOutExpo", function() {
          $jNge2("#domain_switcher").css("backgroundPosition", "120px 10px");
        });
      } else {
        $jNge2("#domain_switcher").css("backgroundPosition", "120px -10px");
        $jNge2("#domain_switcher").animate({
          height : 138
        }, 300, "easeOutExpo");
      }
    }
  });
  $jNge2("#search-agency-post").submit(function(e) {
    e.preventDefault();
    var t = $jNge2("#search-agency-input").val();
    if ("" != t) {
      var i = t.length;
      var a = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/;
      if (5 == i || 1 == a.test(t)) {
        $jNge("#modal-container").css({
          left : (device_width - 790) / 2,
          top : (device_height - 535) / 2,
          height : 535,
          width : 790
        });
        $jNge2("#modal-content").remove();
        $jNge2("#modal-container").append('<iframe width="770" height="515" class="modal-iframe" id="modal-content" src="https://fc1.1bis.com/societegenerale3/?path=eie&rdv=0&cp=' + t + '" />');
        $jNge("#modal-layer").css("display", "block");
      }
    }
  });
  $jNge2("#modal-layer, #modal-close").click(function() {
    $jNge2("#modal-layer").fadeOut();
  });
  $jNge2(".opopin").click(function(e) {
    if (e.preventDefault(), $jNge2(this).attr("data-content") && $jNge2(this).attr("data-type")) {
      var t = $jNge("#modal-container");
      var i = $jNge2(this).attr("data-type");
      var a = $jNge2(this).attr("data-content");
      var n = {};
      switch($jNge2(this).attr("data-sizes") ? n = JSON.parse($jNge2(this).attr("data-sizes")) : (n.width = 600, n.height = 400), $jNge2("#modal-content").remove(), i) {
        case "image":
          t.append('<img class="modal-img" id="modal-content" src="' + a + '" alt="" />');
          break;
        case "iframe":
          t.append('<iframe class="modal-iframe" style="height:100%;width:100%;" id="modal-content" src="' + a + '" />');
          break;
        case "html":
          t.append('<div class="modal-html" id="modal-content">' + a + "</div>");
      }
      $jNge2("#modal-content").ready(function() {
        t.animate({
          width : n.width,
          height : n.height
        }, 1, centerModal);
        $jNge2("#modal-layer").fadeIn();
      });
    }
  });
  if ($jNge2("#hero")[0]) {
    if ($jNge2("#hero")[0].getAttribute("data-video")) {
      hero_h = $jNge2("#hero").outerHeight();
      if (isIE() && isIE() < 9) {
        $jNge2("#hero").click(function(e) {
          if ("SPAN" != e.target.nodeName) {
            if ("I" != e.target.nodeName) {
              e.preventDefault();
              if (0 == $jNge2("#hero").find("iframe").length) {
                j_hero = $jNge2("#hero");
                hero_h = j_hero.innerHeight();
                vid_h = document.getElementById("fond_hero").offsetWidth / 1.7777777777;
                j_hero.prepend('<button id="close-flash">&#215;</button><iframe id="hero_video" class="player" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" src="' + j_hero.attr("data-flash-video") + '" frameborder="0" width="100%" height="0"><noframes><h2>Veuillez mettre \u00c3  jour votre navigateur afin de visionner ce contenu vid\u00c3\u00a9o<h2></noframes></iframe>');
                $jNge2("#hero_video").load(function() {
                  setHeroHeight();
                });
                $jNge2("#close-flash").click(function() {
                    $jNge2("#hero_video").animate({
                      height : 0
                    }, 400, "easeOutExpo", function() {
                        resetHeroHeight();
                        $jNge2("#hero_video, #close-flash").remove();
                    });
                });
              }
            }
          }
        });
      } else {
        $jNge2("#hero").css("cursor", "pointer");
        $jNge2("#hero_content").append('<div class="picto-play"><img src="/static/ent/ent/ENT/EIE2015/_assets/images/picto-play.png" alt="" /></div>');
        if (window.location.href.getHParam("autoplay")) {
          $jNge2("#hero_content h1, .picto-play, #hero_content .insert").animate({
            opacity : 0
          });
        }
        $jNge2("#hero").click(function(e) {
          if ("SPAN" != e.target.nodeName) {
            if ("I" != e.target.nodeName) {
              e.preventDefault();
              $jNge2("#hero_content").css("display", "none");
              if (0 == $jNge2("#hero").find("video").length) {
                setVideo();
                $jNge2("img#hero-infos, .hero__content").css("display", "none");
              } else {
                if ($jNge2("#hero_video")[0].paused) {
                  setHeroHeight();
                  $jNge2("#hero_video")[0].play();
                } else {
                  $jNge2("#hero_video")[0].pause();
                  $jNge2("#hero_content").css("display", "block");
                  if (window.matchMedia("(min-width: 960px)").matches) {
                      resetHeroHeight();
                  }
                }
              }
            }
          }
        });
      }
    }
  }
  if (0 == isie || isie > 8) {
    $jNge2(".animate-right, .animate-left, .animate-drop, .animate-rise, .animate-appear").each(function() {
      if (!$jNge2(this).is("[data-anim]")) {
        this.setAttribute("data-anim", "true");
      }
    });
    $jNge2(".animate-drop").each(function() {
      var e = $jNge2(this).css("margin-top").replace("px", "");
      if (!isRSet(e)) {
        e = 0;
      }
      parseFloat(e) - 60;
      $jNge2(this).css({
        "margin-top" : e - 40,
        opacity : 0
      });
    });
    $jNge2(".animate-rise").each(function() {
      var e = $jNge2(this).css("margin-top").replace("px", "");
      if (!isRSet(e)) {
        e = 0;
      }
      var t = parseFloat(e) + 60;
      $jNge2(this).css({
        "margin-top" : t,
        opacity : 0
      });
    });
    $jNge2(".animate-left").each(function() {
      var e = $jNge2(this).css("margin-left").replace("px", "");
      if (!isRSet(e)) {
        e = 0;
      }
      var t = parseFloat(e) - 70;
      $jNge2(this).css({
        "margin-left" : t,
        opacity : 0
      });
    });
    $jNge2(".animate-right").each(function() {
      var e = $jNge2(this).css("margin-right").replace("px", "");
      if (!isRSet(e)) {
        e = 0;
      }
      var t = parseFloat(e) - 70;
      $jNge2(this).css({
        "margin-right" : t,
        opacity : 0
      });
    });
    $jNge2(".animate-expand-height").each(function() {
      var e = $jNge2.parseJSON($jNge2(this)[0].getAttribute("data-sizes"));
      $jNge2(this).css({
        height : e.start,
        opacity : 0,
        overflow : "hidden"
      });
    });
    $jNge2(".animate-appear").css({
      opacity : 0
    });
    slideMenu();
    onSkroll(1);
    $jNge2(window).bind("scroll", function() {
      onSkroll();
    });
    $jNge2(window).bind("resize", function() {
      onResize();
    });
  }
}), String.prototype.addHParam = function(e, t) {
  return this.split("#").length <= 1 ? this + "#" + e + "=" + t : this + ";" + e + "-" + t;
}, String.prototype.getHParam = function(e) {
  return this.split("#").length <= 1 ? "" : this.HChainToArr()[e];
}, String.prototype.HChainToArr = function(e$$0) {
  var t$$0 = this.split("#")[1].split(";");
  var i = {};
  return forEach(t$$0, function(e) {
    var t = e.split("=");
    i[t[0]] = t[1];
  }), i;
};

$jNge2(function() {
  if(window.matchMedia("(max-width: 641px)").matches) {
      $jNge2('.social').insertAfter('.agence');

      $jNge2('.link-toggle').click(function() {
          $jNge2('#'+$jNge2(this)[0].getAttribute('data-content-id')).slideToggle(function() {
              if($jNge2(this).is(":visible")) {
                  $jNge2(this).prev().addClass('active');
              }else {
                  $jNge2(this).prev().removeClass('active');
              }
          });
      });
  }
})