//JS Code by NaasCraft
$( document ).ready (function() {

	//***********************************************************
	//* Animations d'introduction et mise en forme préliminaire *
	//***********************************************************
	$(".frenchPage").hide();
	
	$(".tabContent").hide();
    $(".tabSubContent").hide();
	$(".verticalLine").hide();
	$(".tabSpecs").hide();
	$(".logos").hide();
	
	$("#mainLogo").hide().delay(400).fadeIn(1000).delay(400).animate({
		left: "-=32.1%"
	}, 800);

    $("#secondLogo").hide().delay(2300).fadeIn(800);

    $(".tabz").hide().delay(2800).slideDown(400);
	
	//******************************************
	//* Définition des fonctions de transition *
	//******************************************
	
	//transition de la main page vers un onglet spécifique (défini par tabClass)
	function transitionMainToTab(tabClass) {
		$('#debugBox').addClass("animated");
        $("#"+tabClass).addClass("selectedTab");
        $("#secondLogo").stop(true,true).fadeOut(600).queue(function(){
            $("#mainLogo").animate({
                left: "7%",
                top: "10%",
                width: "10%"
            });
            $(this).dequeue();
        }).delay(400).queue(function(){
            $("#mainLogo").fadeOut(2000);
            switch (tabClass) {
                case "tab1":
                	$("#logoBlue").fadeIn(2000);
                	break;
                case "tab2":
                	$("#logoRed").fadeIn(2000);
                	break;
                case "tab3":
                	$("#logoOrange").fadeIn(2000);
                	break;
                case "tab4":
                	$("#logoGray").fadeIn(2000);
                	break;
            }
            $(this).dequeue();
        }).delay(600).queue(function(){
            $("."+tabClass).fadeIn(1000);
            $(".tabSpecs."+tabClass+" .tabItems .itemName.item1").addClass("selectedSubTab");
            $(".tabContent."+tabClass+" .tabSubContent.item1").fadeIn(1000).queue(function(){
				$('#debugBox').removeClass("animated");
				$(this).dequeue();
			});;
            $(this).dequeue();
        });
    }

	//transition entre deux onglets spécifiques (définis par tabClassBefore et tabClassAfter)
    function transitionTabtoTab(tabClassBefore, tabClassAfter) {
		$('#debugBox').addClass("animated");
        $("#"+tabClassBefore).removeClass("selectedTab");
        $("#"+tabClassAfter).addClass("selectedTab");

        $("."+tabClassBefore).stop(true,true).fadeOut(1000).queue(function () {
            $("."+tabClassAfter).stop(true,true).fadeIn(1000);
			$(".tabSpecs."+tabClassAfter+" .tabItems .itemName.item1").addClass("selectedSubTab");
            $(".tabSpecs."+tabClassBefore+" .tabItems .itemName").removeClass("selectedSubTab");
            $(".tabContent."+tabClassBefore+" .tabSubContent").hide();
            $(".tabContent."+tabClassAfter+" .tabSubContent.item1").fadeIn(1000).queue(function(){
				$('#debugBox').removeClass("animated");
				$(this).dequeue();
			});
            $(this).dequeue();
        });

        switch (tabClassBefore) {
            case "tab1":
				$("#logoBlue").stop(true,true).fadeOut(2000);
				break;
			case "tab2":
				$("#logoRed").stop(true,true).fadeOut(2000);
				break;
			case "tab3":
				$("#logoOrange").stop(true,true).fadeOut(2000);
				break;
			case "tab4":
				$("#logoGray").stop(true,true).fadeOut(2000);
				break;
		}

		switch (tabClassAfter) {
			case "tab1":
				$("#logoBlue").fadeIn(2000);
				break;
			case "tab2":
				$("#logoRed").fadeIn(2000);
				break;
			case "tab3":
				$("#logoOrange").fadeIn(2000);
				break;
			case "tab4":
				$("#logoGray").fadeIn(2000);
				break;
		}
	}

	//choix du mode de transition entre onglets suivant si l'onglet est déjà sélectionné ou non et permettant la détection des éléments concernés
	function decideTabAction(element) {
		if ( element.hasClass("selectedTab") ) {
			console.log("this tab is already selected");
		} else {
			if ( document.getElementsByClassName("selectedTab")[0] ) {
				transitionTabtoTab(document.getElementsByClassName("selectedTab")[0].id, element[0].id);
				console.log("there is another selected tab, so let's do a tab "+element[0].id+" to tab "+document.getElementsByClassName("selectedTab")[0].id+" transition");
			} else {
				transitionMainToTab(element[0].id);
				console.log("there is no selected tab, so let's do a main to tab transition, to the tab id : " + element[0].id);
			}
		}
	}
	
	//transition entre sous-onglets (subTabBefore, subTabAfter) au sein d'un onglet précisé (tabClass)
	function transitionSubTabs(tabClass, subTabBefore, subTabAfter) {
		$('#debugBox').addClass("animated");
		var beforeSubTab = $(".tabSpecs."+tabClass+" .tabItems .itemName."+subTabBefore);
		var afterSubTab = $(".tabSpecs."+tabClass+" .tabItems .itemName."+subTabAfter);

		beforeSubTab.removeClass("selectedSubTab");
		afterSubTab.addClass("selectedSubTab");

		$(".tabContent."+tabClass+" .tabSubContent."+subTabBefore).stop(true,true).fadeOut(600).queue(function(){
			$(".tabContent."+tabClass+" .tabSubContent."+subTabAfter).stop(true,true).fadeIn(600).queue(function(){
				$('#debugBox').removeClass("animated");
				$(this).dequeue();
			});
			$(this).dequeue();
		});
	}

	//choix du mode de transition entre sous-onglets ...
	function decideSubTabAction(element) {
		if ( element.hasClass("selectedSubTab") ) {
			console.log("already selected");
		} else {
			var tabClass = element.parent().parent()[0].className.split(/\s+/)[1];
			var subTabBefore = document.getElementsByClassName("selectedSubTab")[0].className.split(/\s+/)[2];
			var subTabAfter = element[0].className.split(/\s+/)[2];
			console.log(document.getElementsByClassName("selectedSubTab"));
			console.log("transition in "+tabClass+" from "+subTabBefore+" to "+subTabAfter);
			transitionSubTabs(tabClass, subTabBefore, subTabAfter);
		}
	}

	//transition d'un onglet donné vers la main page.
	function transitionTabtoMain(tabClass) {
		$('#debugBox').addClass("animated");
		$("#"+tabClass).removeClass("selectedTab");
		$("#mainLogo").stop(true,true).fadeIn(2000);
		console.log("step 1 : mainLogo fades in and tabLogo fades out");
		switch (tabClass) {
			case "tab1":
				$("#logoBlue").stop(true,true).fadeOut(2000);
				break;
			case "tab2":
				$("#logoRed").stop(true,true).fadeOut(2000);
				break;
			case "tab3":
				$("#logoOrange").stop(true,true).fadeOut(2000);
				break;
			case "tab4":
				$("#logoGray").stop(true,true).fadeOut(2000);
				break;
			}
		$("."+tabClass).stop(true,true).fadeOut(1000).delay(1000).queue(function(){
			$("#mainLogo").animate({
				width: "7.75%",
				top: "35%",
				left: "14%"
			},800);
			$(this).dequeue();
		}).delay(800).queue(function(){
			$("#secondLogo").fadeIn(800).queue(function(){
				$('#debugBox').removeClass("animated");
				$(this).dequeue();
			});
			$(this).dequeue();
		});
	}

	//choix d'un mode de transition d'un onglet vers la main page.
	function decideBackAction(element) {
		var logoName = element[0].id;
		switch (logoName) {
			case "logoBlue":
				transitionTabtoMain("tab1");
				break;
			case "logoRed":
				transitionTabtoMain("tab2");
				break;
			case "logoOrange":
				transitionTabtoMain("tab3");
				break;
			case "logoGray":
				transitionTabtoMain("tab4");
				break;
		}
	}
	
	//*******************************************************************************
	//* Attribution des eventListeners aux différents éléments du DOM correspondants *
	//*******************************************************************************
	
	$("#ukFlag").click(function(){
		if (!$("#ukFlag").hasClass("selectedLang")) {
			$('#frFlag').removeClass("selectedLang");
			$('#ukFlag').addClass("selectedLang");
			$('.frenchPage').fadeOut(500).queue(function() {
				$('.englishPage').fadeIn(500);
				$(this).dequeue();
			});
		}
	});
	
	$("#frFlag").click(function(){
		if (!$("#frFlag").hasClass("selectedLang")) {
			$('#ukFlag').removeClass("selectedLang");
			$('#frFlag').addClass("selectedLang");
			$('.englishPage').fadeOut(500).queue(function() {
				$('.frenchPage').fadeIn(500);
				$(this).dequeue();
			});
		}
	});
	
	$(".tabz").click(function(){
		if (!$('#debugBox').hasClass("animated")) {
			var element = $(this);
			decideTabAction(element);
		}
	});

	$(".itemName.std").click(function(){
		if (!$('#debugBox').hasClass("animated")) {
			var element = $(this);
			decideSubTabAction(element);
		}
	});

	$(".logos").click(function(){
		if (!$('#debugBox').hasClass("animated")) {
			var element = $(this);
			decideBackAction(element);
		}
	});
				
	$(".itemName.mod1").click(function(){
		if (!$('#debugBox').hasClass("animated")) {
			$("#debugBox").addClass("animated");
			var subTabBefore = document.getElementsByClassName("selectedSubTab")[0].className.split(/\s+/)[2];
			$(".tab2 ."+subTabBefore).removeClass("selectedSubTab");
			$(".tab2.tabSpecs .tabItems .itemName.item2").addClass("selectedSubTab");
			$(".tabContent.tab2 .tabSubContent."+subTabBefore).stop(true,true).fadeOut(600).queue(function(){
				$("#puzzleUnsolved, #puzzleSolved, .tab2 .item2 .partOne, .tab2 .item2 .partTwo").hide();
				$(".tab2 .item2").show();
				$("#puzzleUnsolved, .tab2 .item2 .partOne").fadeIn(1000).delay(400).queue(function(){
					$("#puzzleSolved").fadeIn(8000); 
					$(".tab2 .item2 .partTwo").fadeIn(1000).queue(function(){
						$('#debugBox').removeClass("animated");
						$(this).dequeue();
					});
					$(this).dequeue();
				});
				$(this).dequeue();
			});
		}
	});
});