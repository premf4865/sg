(self.webpackChunk=self.webpackChunk||[]).push([[7457],{47457:function(e,t,n){"use strict";var a=n(2891);function u(){var e=a(n(49081));return u=function(){return e},e}n(79398)(t,"__esModule",{value:!0}),t.default=void 0;var r,o=a(n(97521)),l=a(n(90807)),i=a(n(47122)),c=a(n(82202)),d=a(n(7972)),s=a(n(18550)),f=n(29045),h={},b={},w={};function p(e){if(e){var t=c.default.publicKeyCredentialToJSON(e),n={webauthn_id:e.id,webauthn_rawid:t.rawId,webauthn_type:e.type,webauthn_authenticator_data:t.response.authenticatorData,webauthn_client_data:t.response.clientDataJSON,webauthn_signature:t.response.signature,webauthn_user_handle:t.response.userHandle};o.default.post(i.default.getUrl(l.default.urls.webauthn.loginResponse),n).done((function(e){!function(e){e?e.commun.statut===l.default.statut.NOK?b.nextProcedure():d.default.handleResponseSuccess(e,b.originalJsonSas,b.callBack,b.nextProcedure):b.callBack(e)}(e)})).fail(b.nextProcedure)}else b.nextProcedure()}function g(){o.default.get(i.default.getUrl(l.default.urls.webauthn.loginInfo)).done((function(e){var t;if(e.commun.statut!==l.default.statut.NOK){var n=c.default.buildRequest(e.donnees),a={};a.challenge=n.challenge,a.allowCredentials=[],(0,u().default)(t=n.allowCredentials).call(t,(function(e,t,n){a.allowCredentials[t]={},a.allowCredentials[t].id=c.default.decode(n[t].id),a.allowCredentials[t].type=n[t].type})),navigator.credentials?navigator.credentials.get({publicKey:a}).then((function(e){return p(e)})).catch(b.nextProcedure):b.nextProcedure()}else b.nextProcedure()})).fail(b.nextProcedure)}r=function(e){h.$container.html(e);var t=(0,o.default)("#swm-authent-webauthn");(0,f.isModePage)()||(t.removeClass("swm_authent"),i.default.floatingPopup((0,o.default)(".auth-content"))),h.$popin=t,h.$popin.html((0,o.default)((0,s.default)())),(0,o.default)("#swm_btn-validate").swmvclick(g),(0,o.default)("#swm_btn-cancel").swmvclick(b.nextProcedure),h.$container.show()},w.handleAuthent=function(e,t,n){return i.default.setModuleCssClass("webauthn"),b.callBack=e,b.nextProcedure=n,b.originalJsonSas=t,i.default.loadPageConnexion((function(){h.$container=(0,o.default)("#swmModulesAuth"),o.default.ajax({url:i.default.getUrl(l.default.urls.initWebauthn),swmIntercept:!1,success:function(e){return r(e)},error:i.default.showErrorPopin})})),!0};t.default=w},82202:function(e,t,n){"use strict";var a,u=n(2891),r=n(79398);function o(){var e=u(n(14591));return o=function(){return e},e}function l(){var e=u(n(49081));return l=function(){return e},e}n(85006),n(31372),n(18363),n(6925),n(72966),n(3378),n(61456),n(372),n(71112),n(13364),n(33056),n(75890),n(11570),n(72686),n(21657),n(2991),n(64),n(25943),n(56591),n(75204),n(51543),n(61016),n(83002),n(29163),n(83939),n(81394),n(8124),n(16573),n(47704),n(80986),r(t,"__esModule",{value:!0}),t.default=void 0;var i={},c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_",d=new Uint8Array(256);(0,l().default)(a=c.split("")).call(a,(function(e,t){d[e.charCodeAt(0)]=t})),i.encode=function(e){var t,n=new Uint8Array(e),a=n.length,u="";for(t=0;t<a;t+=3)u+=c[n[t]>>2],u+=c[(3&n[t])<<4|n[t+1]>>4],u+=c[(15&n[t+1])<<2|n[t+2]>>6],u+=c[63&n[t+2]];return a%3==2?u=u.substring(0,u.length-1):a%3==1&&(u=u.substring(0,u.length-2)),u},i.decode=function(e){var t,n,a,u,r,o=.75*e.length,l=e.length,i=0,c=new Uint8Array(o);for(t=0;t<l;t+=4)n=d[e.charCodeAt(t)],a=d[e.charCodeAt(t+1)],u=d[e.charCodeAt(t+2)],r=d[e.charCodeAt(t+3)],c[i++]=n<<2|a>>4,c[i++]=(15&a)<<4|u>>2,c[i++]=(3&u)<<6|63&r;return c.buffer},i.buildRequest=function(e){return e.challenge=i.decode(e.challenge),e.user&&e.user.id&&(e.user.id=i.decode(e.user.id)),e},i.publicKeyCredentialToJSON=function(e){if(e instanceof Array)return(0,o().default)(e).call(e,(function(e){return i.publicKeyCredentialToJSON(e)}));if(e instanceof ArrayBuffer)return i.encode(e);if(e instanceof Object){var t={};for(var n in e)t[n]=i.publicKeyCredentialToJSON(e[n]);return t}return e};t.default=i},18550:function(e){e.exports=function(e){return'<h3><strong>Authenfication par Cl&eacute; de S&eacute;curit&eacute;</strong></h3><p> Pour acc&eacute;der &agrave; votre espace client, vous devez utiliser votre cl&eacute; de s&eacute;curit&eacute;.</p><p class="swm-margin_bottom-big-m"> Cliquez sur le bouton &laquo; <strong>Continuer</strong> &raquo; pour d&eacute;clencher la demande d\'authenfication :</p><footer class="swm-button-wrapper"> <button id="swm_btn-validate" class="swm_button-arrondi swm_button-principal swm_btn-disable" aria-label="Continuer la connexion">Continuer</button> <button id="swm_btn-cancel" class="swm_button-arrondi swm_button-secondaire" aria-label="abandonner la connexion">Abandonner</button></footer>'}}}]);