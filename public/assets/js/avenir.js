try {

  class controlPanels {
    #items

    constructor(elts) {
      this.#items = elts
    }

    accordionClic() {
      this.#items.forEach(accordion => {

        if (accordion.classList.contains('stl_accordion-header')) {

          accordion.addEventListener('click', (e) => toggleAccordion(accordion))

          accordion.addEventListener('keydown', function (e) {
            if (e.key == "Enter" || e.key == " ") {
              toggleAccordion(accordion)
            }
          })
        }
      })
    }

  }

  const toggleAccordion = function (elt) {

    let parent = elt.parentElement
    const header = parent.querySelector('.stl_accordion-header')
    const content = parent.querySelector('.stl_accordion-content')

    var vHeader = header.getAttribute('aria-expanded');
    var nHeader = vHeader === 'true' ? 'false' : 'true'
    header.setAttribute('aria-expanded', nHeader)


    if (nHeader === 'true') {
      parent.className += ' stl_accordion-item-active'
      content.className += ' stl_accordion-content-active'
    } else {
      parent.classList.remove('stl_accordion-item-active');
      content.classList.remove('stl_accordion-content-active');
    }

  }

  addEventListener('load', function () {
    /**
     * @type {HTMLElement}
     */
    const items = document.querySelectorAll(".stl_accordion[role=tablist]");
    items.forEach(item => {
      const allItems = Array.from(item.querySelectorAll('.stl_accordion-header'))
      const panels = new controlPanels(allItems)
      panels.accordionClic()
    })
  })
} catch (error) {
  console.log(error);
}

      // Tabs
        "use strict";
        (function () {

            var mediaQueries = window.matchMedia("(max-width:500px)");


            var tabsNav = document.querySelectorAll(".tabs-nav");
            var tabContent = document.querySelector(".stl_tabs-content-no-animated");

            // Init Tab
            initTab();

            tabsNav.forEach(function (tab) {
                tab.addEventListener("click", moveElt);
            })

            function moveElt(event) {
                event.preventDefault()

                // if (event.target.classList.contains('stl_tabs-tab-active')) {
                //     console.log(event.target);
                // }

                if (event.target.attributes.role.nodeValue == "tab" || !undefined) {
                    // Moving Line
                    var currentTab = document.getElementById(event.target.id);
                    var currentPos = currentTab.offsetLeft - currentTab.parentNode.offsetLeft;
                    var currentWidth = currentTab.offsetWidth;
                    var tabsLine = event.target.parentElement.nextElementSibling;
                    tabsLine.style.cssText = "display:block;transform: translate3d(" + currentPos + "px, 0px, 0px); width: " + currentWidth + "px;";
                    // Tab Active
                    verifClass(".stl_tabs-tab", "stl_tabs-tab-active");
                    currentTab.classList.add("stl_tabs-tab-active");
                    // ARIA
                    currentTab.setAttribute("aria-selected", "true");
                    currentTab.setAttribute("tabindex", "0");
                    // TABS CONTENT
                    activePane(event.target.id)

                    // if (mediaQueries.matches) {
                    //     var tabsNav = event.target.parentNode.parentElement;
                    //     centerTabs(tabsNav)
                    // }
                }
                


                 event.target.removeEventListener('click', moveElt)

            }
            
            

            function centerTabs(elt) {

                var tabs = elt.querySelectorAll('.stl_tabs-tab')
                var centerPos = 0

                var activeTabIndex = Array.from(tabs).findIndex(tab => tab.classList.contains('stl_tabs-tab-active'))

                for (let index = 0; index < activeTabIndex; index++) {
                    centerPos += tabs[index].offsetWidth;
                }

                var containerW = elt.offsetWidth
                var tabsNavW = elt.scrollWidth
                var isLastTab = activeTabIndex === tabs.length - 1

                var translateX;

                // var translateX = isLastTab ? containerW - tabsNavW : (containerW - tabs[activeTabIndex].offsetWidth) /  2 - centerPos;
       

                if(isLastTab) {
                    translateX = containerW - tabsNavW
                } else {
                    translateX = ((containerW - tabs[activeTabIndex].offsetWidth) /  2 - centerPos) - 50
                }

                
       
                if (activeTabIndex !== 0) {
                    elt.style.transform = "translate3d(" + translateX  + "px, 0, 0)"
                } else {
                    elt.style.transform = "translate3d(0, 0, 0)"
                }

                
            }
            
            function verifClass(className, classRemove) {
                var allClass = document.querySelectorAll(className);
                for (var i = 0; i < allClass.length; i++) {
                    if (allClass[i].classList.contains(classRemove)) {
                        allClass[i].classList.remove(classRemove);
                        // ARIA
                        allClass[i].setAttribute("aria-selected", "false");
                        allClass[i].setAttribute("tabindex", "-1");
                    }
                }
            }
            function initTab() {
                tabsNav.forEach(function (tab) {
                    var tabsLine = tab.nextElementSibling
                    var allClass = Array.prototype.slice.call(tab.querySelectorAll(".stl_tabs-tab"))

                    for (var i = 0; i < allClass.length; i++) {
                        if (allClass[i].classList.contains("stl_tabs-tab-active")) {
                            var getId = allClass[i].getAttribute("id");
                            var currentPos = allClass[i].offsetLeft - allClass[i].parentNode.offsetLeft;
                            var currentWidth = allClass[i].offsetWidth;
                            tabsLine.style.cssText = "display:block;transform: translate3d(" + currentPos + "px, 0px, 0px); width: " + currentWidth + "px;";
                            allClass[i].setAttribute("aria-selected", "true");
                        }
                    }
                })


            }
            function activePane(currentTab) {

                var allPane = [].slice.call(document.querySelectorAll(".stl_tabs-tabpane"));

                var isFirstItemActive = allPane[0].classList.contains('stl_tabs-tabpane-active')

                var previousActiveIndex = Array.from(allPane).findIndex(item => item.classList.contains('stl_tabs-tabpane-active'))

                for (var i = 0; i < allPane.length; i++) {
                    var getId = allPane[i].getAttribute("aria-labelledby");

                    if (getId == currentTab) {
                        if (allPane[i].classList.contains("stl_tabs-tabpane-inactive")) {
                            allPane[i].classList.remove("stl_tabs-tabpane-inactive");
                            allPane[i].classList.add("stl_tabs-tabpane-active");
                        }
                            allPane[i].style = "";
                            allPane[i].setAttribute("aria-hidden", "false");
                            allPane[i].setAttribute("tabindex", "0");
                        if (i > previousActiveIndex) {


                            allPane[i].classList.contains('slide-from-left') ? 
                                allPane[i].classList.replace('slide-from-left','slide-from-right') 
                            :   allPane[i].classList.add('slide-from-right')
                        } else {

                            allPane[i].classList.contains('slide-from-right') ? 
                                allPane[i].classList.replace('slide-from-right','slide-from-left')
                            :   allPane[i].classList.add('slide-from-left')
                        }

                        
                    } else {
                        if (allPane[i].classList.contains("stl_tabs-tabpane-active")) {
                            allPane[i].classList.add("stl_tabs-tabpane-inactive");
                            allPane[i].classList.remove("stl_tabs-tabpane-active");
                        }
                        allPane[i].style = "visibility: hidden";
                        allPane[i].setAttribute("aria-hidden", "true");
                        allPane[i].setAttribute("tabindex", "-1");
                    }

                }
            }
        })();


// AUTO TAG
"use strict";!function(){class AutoPDM{constructor(sectionNode){this.rootEl=sectionNode,this.currentSection(this.rootEl)}currentSection(el){const _thisSection=el;let activeUrl=!1;if(detectDca(_thisSection))return;const listlink=Array.from(_thisSection.getElementsByTagName("a")),listbutton=Array.from(_thisSection.getElementsByTagName("button"));[...listlink,...listbutton].forEach(link=>{const _thisLink=link;_thisLink.hasAttribute("data-bouton")&&!_thisLink.getAttribute("onclick")||_thisLink.hasAttribute("data-bouton")&&!_thisLink.getAttribute("onclick").includes("bddfTms")?_thisLink.addEventListener("click",(function(e){let zone,sujet,bouton;if("#recette-pdm"===window.location.hash&&e.preventDefault(),_thisSection.hasAttribute("data-zone")?zone=replaceCarSpec(_thisSection.getAttribute("data-zone")):_thisSection.querySelector("[data-zone]")&&(zone=replaceCarSpec(returnValueAttribute(_thisSection.querySelector("[data-zone]"),"data-zone"))),_thisLink.querySelector("[data-sujet]"))_thisSection.querySelector("[data-parent]")?(_thisLink.parentNode.querySelector(".stl_title")!==_thisLink.querySelector(".stl_title")&&("stl_title"===_thisLink.parentNode.firstChild.nextSibling.classList[0]?sujet=replaceCarSpec(returnValueAttribute(_thisLink.parentNode.querySelector("[data-sujet]"),"data-sujet")):"stl_card"===_thisLink.parentNode.firstChild.nextSibling.classList[0]||(sujet=replaceCarSpec(returnValueAttribute(_thisLink.parentNode.querySelector("[data-sujet]"),"data-sujet")))),bouton=replaceCarSpec(returnValueAttribute(_thisLink.querySelector("[data-sujet]"),"data-sujet"))):(sujet=replaceCarSpec(returnValueAttribute(_thisLink.querySelector("[data-sujet]"),"data-sujet")),_thisLink.querySelector("span.stl_btn")?bouton=replaceCarSpec(_thisLink.querySelector("span.stl_btn").innerText):_thisLink.querySelector("span.stl_link")&&(bouton=replaceCarSpec(_thisLink.querySelector("span.stl_link").innerText)));else{if(0===_thisSection.querySelectorAll("a.stl_card").length&&_thisSection.querySelector("[data-sujet]"))if(_thisSection.querySelector("[data-parent]")){const elParent=detectParent(_thisLink);null!==elParent&&(sujet=replaceCarSpec(returnValueAttribute(elParent.querySelector(".stl_title"),"data-sujet")))}else sujet=replaceCarSpec(returnValueAttribute(_thisSection.querySelector("[data-sujet]"),"data-sujet"));"pdf"===_thisLink.href.split(".").at(-1)?(activeUrl=!0,bouton=replaceCarSpec(returnValueAttribute(_thisLink,"data-bouton"))):bouton=replaceCarSpec(returnValueAttribute(_thisLink,"data-bouton"))}sendTracking(zone,sujet,bouton,activeUrl)})):_thisLink.hasAttribute("data-bouton")&&_thisLink.getAttribute("onclick")&&"#recette-pdm"===window.location.hash&&(_thisLink.style.cssText="border:2px dashed #ffc100; position:relative;",_thisLink.addEventListener("click",(function(e){e.stopPropagation()})))})}}const sendTracking=function(zone,sujet,bouton,activeUrl){let clickGlobal_v1,clickGlobal_v2;const sectionRecette=document.querySelector(".showCode");zone?sujet?clickGlobal_v1="hero-banner"===zone?tc_vars.page_name+"::"+zone+"-"+sujet+"::clic-sur-"+bouton:tc_vars.page_name+"::"+zone+"::"+sujet+"::clic-sur-"+bouton:!0===activeUrl?clickGlobal_v2=tc_vars.page_name+"::"+zone+"::telecharger-"+bouton:clickGlobal_v1=tc_vars.page_name+"::"+zone+"::clic-sur-"+bouton:clickGlobal_v1=tc_vars.page_name+"::"+sujet+"::clic-sur-"+bouton,sectionRecette&&(sectionRecette.innerHTML="",zone&&(sectionRecette.innerHTML+="$zone::"+zone+"<br/>"),sujet&&(sectionRecette.innerHTML+="$sujet::"+sujet+"<br/>"),!0===activeUrl?bouton&&(sectionRecette.innerHTML+="$bouton::telecharger-"+bouton+"<br/>"):bouton&&(sectionRecette.innerHTML+="$bouton::clic-sur-"+bouton+"<br/>"),sectionRecette.innerHTML+=!0===activeUrl?"<br/>EVENTNAME : "+clickGlobal_v2:"<br/>EVENTNAME : "+clickGlobal_v1),!0===activeUrl?bddfTms.trackEvent(this,"file_download",{event_name:clickGlobal_v2}):bddfTms.trackEvent(this,"click",{event_name:clickGlobal_v1})},returnValueAttribute=function(elt,attr){return elt.getAttribute(attr).length>0?elt.getAttribute(attr):elt.innerText},detectParent=function(link){for(let index=0;index<10;index++){const parent=getParentNode(link,index);if(parent.hasAttribute("data-parent"))return parent;if("stl_section"===parent.classList[0])return null}},detectDca=function(link){for(let index=0;index<10;index++){const parent=getParentNode(link,index);if(parent.hasAttribute("data-dca-id"))return parent;if("body"===parent.localName||void 0===parent)return!1}},getParentNode=function(element,level=1){for(;level-- >0;)if(!(element=element.parentNode))return null;return element},replaceCarSpec=function(str){str=str.toLowerCase();const from="àáäâèéëêìíïîòóöôùúüûñç·/_,;",to="aaaaeeeeiiiioooouuuunc-----";for(let i=0,l=from.length;i<l;i++)str=str.replace(new RegExp(from.charAt(i),"gi"),to.charAt(i));return str=str.replace(/€+/gi,"-euros").replace(/%+/gi,"-pourcent").replace(/['’]/gi,"-").replace(/[(]/gi,"-").replace(/[)]/gi,"").replace(/\.\.\./gi,"-").replace(/[^a-z0-9 -]/gi,"").replace(/^\s+|\s+$/gi,"").replace(/\s+/gi,"-").replace(/:+/gi,"").replace(/--+/gi,"-")},modeRecette=function(){const ifProd=window.location.origin.split(".").includes("pprd");if("#recette-pdm"===window.location.hash&&!0===ifProd){const wrapper=document.createElement("section");wrapper.classList.add("showCode"),wrapper.style.cssText="display: flex; padding: 1rem; font-size: 14px; text-align: center; width: 100%; min-height: 0px; height: auto; background: white; position: fixed; bottom: 0px; left: 0px; z-index: 1000; box-shadow: rgba(0, 0, 0, 0.12) 8px -3px 9px 0px; font-weight: 600; justify-content: center; opacity: .95;",document.body.appendChild(wrapper)}};addEventListener("load",event=>{const sections=document.querySelectorAll(".stl_section");sections.forEach(elSection=>{new AutoPDM(elSection)}),modeRecette()})}();
// DATA COMP
"use strict";!function(){class AutoUrl{constructor(sectionNode){"webview"===tc_vars.env_channel&&(this.rootEl=sectionNode,this.currentUrl(this.rootEl))}currentUrl(el){const _thisEl=el;_thisEl.addEventListener("click",(function(event){this.hasAttribute("data-ouvrirnav")?(event.preventDefault(),natif.ouvrirNavigateur(verifHost(this.getAttribute("href")))):this.hasAttribute("data-debranchement")?(event.preventDefault(),natif.debranchement("999",this.getAttribute("href"),"GET","appelant")):this.hasAttribute("data-webview")&&(event.preventDefault(),this.getAttribute("data-webview").length>1&&(window.location.href=this.getAttribute("data-webview")))}))}}const verifHost=function(url){return url.includes("http")?url:"https://particuliers.sg.fr"+url},hashInfo="#recette-pdm"===window.location.hash;hashInfo||addEventListener("load",event=>{const urlCardLink=document.querySelectorAll(".stl_card, .stl_link, .stl_btn");urlCardLink.forEach(elSection=>{new AutoUrl(elSection)})})}();
