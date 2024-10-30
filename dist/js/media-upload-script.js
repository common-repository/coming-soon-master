jQuery(document).ready(function(jQuery){
  
	var media_uploader = null;

	jQuery('.csm_image_uploader').click(function(e) {
	   
		showImg = jQuery(this).prev('img');
		uploadID = jQuery(this).next('input');
		removebutton = jQuery(this).next().next();
		
			
	   media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			library: { 
			  type: 'image' // limits the frame to show only images
		   },
			multiple: false
		});

		media_uploader.on("insert", function(){
			var json = media_uploader.state().get("selection").first().toJSON();

			var image_url = json.url;
			 jQuery(uploadID).val(image_url);
			 showImg.attr('src',image_url);
			 showImg.show();
			 removebutton.show();
			var image_caption = json.caption;
			var image_title = json.title;
		});

		media_uploader.open();
	});
	
	jQuery('.csm_av_uploader').click(function(e) {
	   
		uploadID = jQuery(this).prev('input');
			
	   media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: false
		});

		media_uploader.on("insert", function(){
			var json = media_uploader.state().get("selection").first().toJSON();

			var image_url = json.url;
			 jQuery(uploadID).val(image_url);
			var image_caption = json.caption;
			var image_title = json.title;
		});

		media_uploader.open();
	});
	
});

jQuery(document).ready(function(jQuery){
	
	jQuery('.url-tab .btn:eq(1)').on('click', function(){

		var $imageupload = jQuery(this).closest('.imageupload');
		var $urlTab = $imageupload.find('.url-tab');

		resetUrlTab($urlTab);
	});

	jQuery('.url-tab .btn').on('click', function(){

		var $imageupload = jQuery(this).closest('.imageupload');
		var $urlTab = $imageupload.find('.url-tab');
		var $urlTabButton = $imageupload.find('.panel-heading .btn:eq(1)');
		var $submitUrlButton = $urlTab.find('.btn:eq(0)');
		
		submitImageUrl($urlTab);
	});
	
	jQuery('.file-tab .file_img_remove').on('click', function(){
		var $imageupload = jQuery(this).closest('.imageupload');
		var $fileTab = $imageupload.find('.file-tab');

		resetFileTab($fileTab);
	});

	jQuery('.panel-heading .btn').on('click', function(){
		
		var $imageupload = jQuery(this).closest('.imageupload');
		var $fileTab = $imageupload.find('.file-tab');
		var $fileTabButton = $imageupload.find('.panel-heading .btn:eq(0)');
		var $urlTab = $imageupload.find('.url-tab');
		var $urlTabButton = $imageupload.find('.panel-heading .btn:eq(1)');
		var $submitUrlButton = $urlTab.find('.btn:eq(0)');
		
		var $selectedTab = jQuery(this).text();
		
		if($selectedTab == "File"){
			showFileTab($fileTab);
		}else{
			showUrlTab($urlTab)
		}
	});
	
});	

/* Show Image Tab */
function showFileTab($fileTab) {
	var $imageupload = $fileTab.closest('.imageupload');
	var $fileTabButton = $imageupload.find('.panel-heading .btn:eq(0)');

	if (!$fileTabButton.hasClass('active')) {
		var $urlTab = $imageupload.find('.url-tab');

		// Change active tab buttton.
		$imageupload.find('.panel-heading .btn:eq(1)').removeClass('active');
		$fileTabButton.addClass('active');

		// Hide URL tab and show file tab.
		$urlTab.hide();
		$fileTab.show();
		//resetUrlTab($urlTab);
	}
}

/* Reset File Tab */
function resetFileTab($fileTab) {
    $fileTab.find('.alert').remove();
	$fileTab.find('img').hide();
    $fileTab.find('.btn:eq(1)').hide();
    $fileTab.find('input').val('');
}


/* Show URL Tab */
function showUrlTab($urlTab) {
    var $imageupload = $urlTab.closest('.imageupload');
    var $urlTabButton = $imageupload.find('.panel-heading .btn:eq(1)');

    if (!$urlTabButton.hasClass('active')) {
        var $fileTab = $imageupload.find('.file-tab');

        // Change active tab button.
        $imageupload.find('.panel-heading .btn:eq(0)').removeClass('active');
        $urlTabButton.addClass('active');

        // Hide file tab and show URL tab.
        $fileTab.hide();
        $urlTab.show();
        //resetFileTab($fileTab);
    }
}

/* Reset URL Tab */
function resetUrlTab($urlTab) {
	$urlTab.find('.alert').remove();
	$urlTab.find('img').remove();
	$urlTab.find('.btn:eq(1)').hide();
	$urlTab.find('input').val('');
}

/* Call When Click on Preview Button on URL Tab */
function submitImageUrl($urlTab) {
    var $urlInput = $urlTab.find('input[type="text"]');
    var $submitUrlButton = $urlTab.find('.btn:eq(0)');
    var $removeUrlButton = $urlTab.find('.btn:eq(1)');

    $urlTab.find('.alert').remove();
    $urlTab.find('img').remove();
    $removeUrlButton.hide();

    var url = $urlInput.val();
    if (!url) {
        $urlTab.prepend(getAlertHtml('Please enter an image URL.'));
        return;
    }

    $urlInput.prop('disabled', true);
    $submitUrlButton.prop('disabled', true);
    
    isValidImageUrl(url, function(isValid, message) {
        if (isValid) {
            // Submit URL value.
            $urlTab.find('input[type="hidden"]').val(url);

            // Show thumbnail and remove button.
            jQuery(getImageThumbnailHtml(url)).insertAfter($submitUrlButton.closest('.input-group'));
            $removeUrlButton.css('display', 'inline-block');
        }
        else {
            $urlTab.prepend(getAlertHtml(message));
        }

        $urlInput.prop('disabled', false);
        $submitUrlButton.prop('disabled', false);
    });
}

function getAlertHtml(message) {
    var html = [];
    html.push('<div class="alert alert-danger alert-dismissible">');
    html.push('<button type="button" class="close" data-dismiss="alert">');
    html.push('<span>&times;</span>');
    html.push('</button>' + message);
    html.push('</div>');
    return html.join('');
}

/* Return HTML of Image Thumbnail */
function getImageThumbnailHtml(src) {
    return '<img src="' + src + '" alt="Image preview" class="thumbnail" style="max-width: 250px; max-height: 250px; margin: 10px 0;">';
}

/* Return Entered URL Extension */
function getFileExtension(path) {
    return path.substr(path.lastIndexOf('.') + 1).toLowerCase();
}

/* Check Enter Image URL is Valid Or Not */  
function isValidImageUrl(url, callback) {
    var timer = null;
    var timeoutMs = 3000;
    var timeout = false;
    var image = new Image();
	var allowedFormats = [ 'jpg', 'jpeg', 'png', 'gif' ];
	
    image.onload = function() {
        if (!timeout) {
            window.clearTimeout(timer);

            // Strip querystring (and fragment) from URL.
            var tempUrl = url;
            if (tempUrl.indexOf('?') !== -1) {
                tempUrl = tempUrl.split('?')[0].split('#')[0];
            }

            // Check image format by file extension.
            var fileExtension = getFileExtension(tempUrl);
            if (jQuery.inArray(fileExtension, allowedFormats) > -1) {
                callback(true, 'Image URL is valid.');
            }
            else {
                callback(false, 'File type is not allowed.');
            }
        }
    };

    image.onerror = function() {
        if (!timeout) {
            window.clearTimeout(timer);
            callback(false, 'Image could not be found.');
        }
    };

    image.src = url;

    // Abort if image takes longer than 3000ms to load.
    timer = window.setTimeout(function() {
        timeout = true;
        image.src = '???'; // Trigger error to stop loading.
        callback(false, 'Loading image timed out.');
    }, timeoutMs);
}