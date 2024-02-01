	var n2g_affiche_nb_da_attente_active = true;
	var idDivMem;
	var nb_da = -1;
	
	$jNge(function() {
		if (idDivMem != undefined) {
			if($jNge('#nge_menu_vertical_3n').is(':visible')){
				n2g_get_nb_da_attente(n2g_display_html_nb_da_attente,idDivMem);
				$jNge('#'+idDivMem).closest('.nge_toggleSubMenu_niv1').find('span.toggle').bind("click", function(){
					n2g_update_html_nb_da_attente($jNge(this),nb_da,idDivMem);
				});
			}
		}
		if($jNge("a[title='Gestion Secure Access']").length == 0){
			$jNge("a:contains('Gestion de la sécurité')").closest('.nge_toggleSubMenu_niv2').hide();
		}
	});

	function n2g_get_nb_da_attente(displayFunction, idDiv){
		var req;
		
		if ((typeof XMLHttpRequest) && (typeof XMLHttpRequest != 'undefined')) {
		//		/* IE7, Gecko, Opera, AppleWebKit, ... */
			req = new XMLHttpRequest();
		}
		else {
			try {
				/* MSIE */
				req = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch (e) {
				try {
					/* MSIE (old fashioned) */
					req = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e) {
					alert("Votre navigateur ne supporte pas la technologie XMLHttpRequest, merci de le mettre " +
					unescape("%E0") + " jour.");
					return;
				}
			}
		}
		
		req.onreadystatechange = function(){
			/* Result loaded? (state 4) */
			if (req.readyState == 4) {
				if (req.status != 200 || req.responseXML == null || req.responseXML == undefined
				  || req.responseXML.firstChild == null || req.responseXML.firstChild == undefined
				  || req.responseXML.getElementsByTagName("nbDemActivAttente") == null
				  || req.responseXML.getElementsByTagName("nbDemActivAttente")[0].firstChild == null) {
					nb_da = -1;
				} else {
					nb_da = req.responseXML.getElementsByTagName("nbDemActivAttente")[0].firstChild.nodeValue;
				}
				if (displayFunction != null) {
					displayFunction(nb_da, idDiv);
				}
			}
		}
		var now = new Date();
		req.open("GET", "/gax-web/gax/gax-pending-activation-requests-count.html", true);
		req.send(null);
	}

	function n2g_display_html_nb_da_attente(nbDA, idDiv) {
		var intNbDA = parseInt(nbDA);
		var strNbDA = null;
		var elem = null;
		var elemNiv1 = $jNge('#'+idDiv).closest('.nge_toggleSubMenu_niv1');
		var elemNiv2 = $jNge('#'+idDiv).closest('.nge_toggleSubMenu_niv2');
		
		var elemCompteur = document.getElementById(idDiv);
		
		if(!elemNiv1.find('.nge_subMenu_niv2').is(":visible")){
			elem = elemNiv1.find('span a')[0];
			elemNiv1.find('span a span').remove();
			elemNiv2.find('span a span').remove();
			$jNge(elemCompteur).find('span').remove();
		}
		else if(!elemNiv2.find('.nge_subMenu_niv3').is(":visible")){
			elem = elemNiv2.find('span a')[0];
			elemNiv1.find('span a span').remove();
			elemNiv2.find('span a span').remove();
			$jNge(elemCompteur).find('span').remove();
		}
		else {
			elem = elemCompteur;
			elemNiv1.find('span a span').remove();
			elemNiv2.find('span a span').remove();
			$jNge(elemCompteur).find('span').remove();
		}
		if(intNbDA > 0) {
			if(intNbDA >= 100) {
				strNbDA = "99+";
			} else {
				strNbDA = intNbDA.toString();
			}
			if(typeof elem!="undefined"){
				elem.innerHTML += '<span class="n2g_compteur">'+strNbDA+'</span>';
			}
		}
	
	}
	function n2g_update_html_nb_da_attente(element,nbDA, idDiv) {
		var intNbDA = parseInt(nbDA);
		var strNbDA = null;
		var elem = null;
		var elemNiv1 = $jNge('#'+idDiv).closest('.nge_toggleSubMenu_niv1');
		var elemNiv2 = $jNge('#'+idDiv).closest('.nge_toggleSubMenu_niv2');
		
		var elemCompteur = document.getElementById(idDiv);

		if(element.closest('li').hasClass("nge_toggleSubMenu_niv1")){
			if(elemNiv1.find('.nge_subMenu_niv2').is(":visible")){
				elem = elemNiv1.find('span a')[0];
				elemNiv1.find('span a span').remove();
				elemNiv2.find('span a span').remove();
				$jNge(elemCompteur).find('span').remove();
			}
			else if(!elemNiv2.find('.nge_subMenu_niv3').is(":visible")){
				if(elemNiv2.hasClass("open")){
					elem = elemCompteur;
					elemNiv1.find('span a span').remove();
					elemNiv2.find('span a span').remove();
					$jNge(elemCompteur).find('span').remove();
				}
				else {
					elem = elemNiv2.find('span a')[0];
					elemNiv1.find('span a span').remove();
					elemNiv2.find('span a span').remove();
					$jNge(elemCompteur).find('span').remove();
				}
			}
			else {
				elem = elemCompteur;
				elemNiv1.find('span a span').remove();
				elemNiv2.find('span a span').remove();
				$jNge(elemCompteur).find('span').remove();
			}
		}
		else if(element.closest('li').hasClass("nge_toggleSubMenu_niv2")){
			if(elemNiv2.find('.nge_subMenu_niv3').is(":visible")){
				elem = elemNiv2.find('span a')[0];
				elemNiv1.find('span a span').remove();
				elemNiv2.find('span a span').remove();
				$jNge(elemCompteur).find('span').remove();
			}
			else{
				elem = elemCompteur;
				elemNiv1.find('span a span').remove();
				elemNiv2.find('span a span').remove();
				$jNge(elemCompteur).find('span').remove();
			}
		}
		
		if(intNbDA > 0) {
			if(intNbDA >= 100) {
				strNbDA = "99+";
			} else {
				strNbDA = intNbDA.toString();
			}
			if(typeof elem!="undefined"){
				elem.innerHTML += '<span class="n2g_compteur">'+strNbDA+'</span>';
			}
		}
	}
	
	function n2g_affiche_nb_da_attente(idDiv) {
		idDivMem = idDiv;
	}
