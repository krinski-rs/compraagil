/**
 * 
 */
$(document).ready(function() {
    //$('div.window').
    
    
	$(".window").bind('afterShow',function(){
	    var $this = $(this);
	    
	    $.ajax({
	        method: "POST",
	        url: "localidades/view"
	    }).done(function( html ) {
	        $this.append( html );
	    });
	    
    });
});

