$(document).ready(function() {
	
	activateSiteTabs();
	activateSiteRows();
	tooltip();
	fancybox();
	datepicker();
	
	
	$( ".state" ).on( "click", function() {
		var activeId = $(this).attr("id");
		$('.stateMessageBoxContainer').slideDown("slow");
	});
	
/*$('.nav').on('click', 'li', function(){
    $('.nav li a').removeClass('active');
    $(this).addClass('active');
});*/

	
	
});


function startSite() {
	console.log('startSite fired');
	$('#startMrf').animate({ opacity: 'toggle' }, 200, function() {
		$('#startMrfFieldContainer').show();
		$('#startMrfFieldContainer .go').show();
		$('#startMrfField').animate({width:'toggle'},350);
	});
}

function addMessageToNotes() {
	$('#leaveMessage').animate({ opacity: 'toggle' }, 200, function() {
		$('#makePost').slideDown('slow');
	});
}

function openStateMessage() {
	$('.stateMessageContainer').slideDown( "slow");
}

function closeStateMessage() {
	$('.stateMessageContainer').slideUp( "slow");
}

function showAlert(e) {
	alert('Deze functionaliteit is nog niet geïmplementeerd in deze versie van dit product');
	e.preventDefault();
}

function fancybox() {
	$('.fancybox').fancybox({
		arrows : false
	});
}

function tooltip() {
	$('[data-toggle="tooltip"]').tooltip(); 
}

function activateSiteTabs() {
	console.log('tabs fired');
	
	$("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
}

function activateSiteRows() {
	console.log('active site rows fired (This function has to be written with php)');
	$(".clickable-row").click(function() {
        window.document.location = $(this).data('url');
    });
}

function datepicker() {
	$('.siteField .datepicker').datepicker({
		format: 'dd-mm-yyyy',
		
	}).on('changeDate', function(e){
		$(this).datepicker('hide');
	});	
}

function closeStateMessage() {
	$('.stateMessageBoxContainer').slideUp("slow");
}
