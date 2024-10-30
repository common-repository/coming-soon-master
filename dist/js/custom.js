function loadFile(filename){
	hideAnotherFile(filename);
	jQuery('#'+filename).show();	
}

function hideAnotherFile(file){
	var files = ['dashboard','templates','seo','logo','countdown','button','styling','aboutus','contact','newsletter','subscription','social','copyright','products','help'];
	var file = [file];
	var diff = [];
	jQuery.grep(files, function(el) {
			if (jQuery.inArray(el, file) == -1) diff.push(el);
			for(var i=0;i<=diff.length;i++){
				jQuery('#'+diff[i]).hide();
			}
	});
}

jQuery(document).ready(function(){
	jQuery( "#wpcontent" ).prepend( '<div id="csm-preloader-wrap"><div class="sk-fading-circle"><div class="sk-circle1 sk-circle"></div><div class="sk-circle2 sk-circle"></div><div class="sk-circle3 sk-circle"></div><div class="sk-circle4 sk-circle"></div><div class="sk-circle5 sk-circle"></div><div class="sk-circle6 sk-circle"></div><div class="sk-circle7 sk-circle"></div><div class="sk-circle8 sk-circle"></div><div class="sk-circle9 sk-circle"></div><div class="sk-circle10 sk-circle"></div><div class="sk-circle11 sk-circle"></div><div class="sk-circle12 sk-circle"></div></div></div>' );
});