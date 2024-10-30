var $ = jQuery.noConflict();
(function ($, csm_a, csm_b, csm_c) {
  'use strict';
  var html_obj = $('html'),
  csmvarx6 = $('body'),
  csmvarx7 = [
    0.77,
    0,
    0.175,
    1
  ],
  is_mobile,
  is_desktop,
  csmvarxa;
  var csmvarxb = {
    ready: function () {
      csmvarxb.fn_viewportFix();
      csmvarxb.fn_deviceDetect();
      csmvarxb.fn_info();
      csmvarxb.fn_mfp();
      csmvarxb.fn_subscribeForm();
      csmvarxb.fn_countdown();
      csmvarxb.fn_siteBg();
      csmvarxb.fn_overlay();
      csmvarxb.fn_flatColor();
      csmvarxb.fn_smoothScroll();
    },
    scroll: function () {
    },
    resize: function () {
    },
    load: function () {
      csmvarxb.fn_siteLoader();
      csmvarxb.fn_scrollbar()
    },
    fn_viewportFix: function () {
      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var csmvarxc = csm_a.createElement('style');
        csmvarxc.appendChild(csm_a.createTextNode('@-ms-viewport{width:auto!important}'));
        csm_a.querySelector('head').appendChild(csmvarxc)
      }
    },
    fn_deviceDetect: function () {
      if (html_obj.hasClass('desktop')) {
        html_obj.addClass('is-desktop');
        is_mobile = false;
        is_desktop = true
      } else {
        html_obj.addClass('is-mobile');
        is_mobile = true;
        is_desktop = false
      };
      if (html_obj.hasClass('ie9')) {
        csmvarxa = true
      }
    },
    fn_siteLoader: function () {
      var site_loader = $('.site-loader');
      var site_loader_spinner = $('.site-loader-spinner');
      var site_loader_text = $('.site-loader-text');
      site_loader_spinner.velocity({
        top: '-=60px',
        opacity: 0
      }, {
        delay: 800,
        duration: 1500,
        easing: csmvarx7
      });
      site_loader_text.velocity({
        top: '+=60px',
        opacity: 0
      }, {
        delay: 800,
        duration: 1500,
        easing: csmvarx7
      });
      site_loader.velocity('fadeOut', {
        delay: 800,
        duration: 1500,
        easing: csmvarx7,
        complete: function () {
          $(this).remove();
          csmvarx6.addClass('is-loaded');
          $(csm_a).trigger('is-loaded');
          $('.animate').each(function () {
            var csmvarx12 = $(this),
            csmvarx13 = csmvarx12.attr('data-animate'),
            csmvarx14 = 0;
            if (csmvarx12.attr('data-animate-delay')) {
              csmvarx14 = csmvarx12.attr('data-animate-delay')
            };
            csmvarx12.velocity('transition.' + csmvarx13, {
              visibility: 'visible',
              delay: csmvarx14,
              duration: 1000
            })
          })
        }
      })
    },
    fn_smoothScroll: function () {
      var csmvarx15;
      $('a[href^=#]').not(csmvarx15).on('click', function (csmvarx16) {
        var csmvarx17 = $($(this).not('[data-toggle="mfp-modal"]').attr('href')),
        csmvarx18 = $('.section-wrap'),
        csmvarx19 = 1500;
        csmvarx16.preventDefault();
        if (csmvarx17.length) {
          if (csm_c.is('<md')) {
            csmvarx17.velocity('stop').velocity('scroll', {
              duration: csmvarx19,
              easing: csmvarx7
            })
          } else {
            if ($(this).data('toggle') != 'info') {
              if (csmvarx18.hasClass('mCustomScrollbar')) {
                csmvarx18.mCustomScrollbar('scrollTo', csmvarx17, {
                  scrollInertia: csmvarx19,
                  scrollEasing: easeOut
                })
              } else {
                csmvarx17.velocity('stop').velocity('scroll', {
                  container: csmvarx18,
                  duration: csmvarx19,
                  easing: csmvarx7
                })
              }
            }
          }
        }
      })
    },
    fn_info: function () {
      var is_readButton = $('[data-toggle="info"]'),
      is_closeButton = $('[data-dismiss="info"]');
      $('body').addClass('info-out');
      is_readButton.on('click', function () {
        if (csm_c.is('>sm')) {
          $('body').removeClass('info-out').addClass('info-in')
        }
      });
      is_closeButton.on('click', function () {
        if (csm_c.is('>sm')) {
          $('body').removeClass('info-in').addClass('info-out')
        }
      })
    },
    fn_scrollbar: function () {
      var csmvarx1c = $('.scroll-yx'),
      csmvarx1d = $('.scroll-y'),
      csmvarx1e = $('.scroll-x');
      if (!is_mobile && csm_c.is('>sm')) {
        csmvarx1c.mCustomScrollbar({
          axis: 'yx',
          scrollInertia: 120,
          mouseWheel: {
            disableOver: [
              '.scroll-x'
            ]
          }
        });
        csmvarx1d.mCustomScrollbar({
          axis: 'y',
          scrollInertia: 120,
          callbacks: {
            whileScrolling: function () {
            },
            onTotalScrollBack: function () {
            }
          }
        });
        csmvarx1e.mCustomScrollbar({
          axis: 'x',
          scrollInertia: 120
        })
      } else {
        csmvarx1c.add(csmvarx1d).add(csmvarx1e).mCustomScrollbar('destroy')
      }
    },
    fn_countdown: function () {
      var countdown = $('#countdown');
      if (_countdown_toggle) {
        if (countdown.length) {
		  $('body').addClass('countdown-on');
          countdown.countDown({
            targetDate: {
              'day': _countdown_date[2],
              'month': _countdown_date[1],
              'year': _countdown_date[0],
              'hour': _countdown_time[0],
              'min': _countdown_time[1],
              'sec': 0
            },
            omitWeeks: true
          })
        }
      } else {
        $('body').addClass('countdown-off');
        countdown.remove()
      }
    },
    fn_mfp: function () {
      var is_subsPopupButton = $('[data-mfp-type="inline"]');
      is_subsPopupButton.magnificPopup({
        midClick: true,
        removalDelay: 150,
        preloader: false,
        callbacks: {
          beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-mfp-effect')
          }
        }
      })
    },
	fn_subscribeForm: function () {
	  var $subscribeForm = $('#subscribeForm');
	  var $fromControl = $subscribeForm.find('.form-control');
	  var $notify = $subscribeForm.find('.form-notify');
	  $fromControl.each(function () {
		$(this).on('focus', function () {
		  $(this).parent('.form-group').addClass('focus');
		}).on('blur', function () {
		  $(this).parent('.form-group').removeClass('focus');
		})
	  });
	  $subscribeForm.validate({
		onclick: false,
		onfocusout: false,
		onkeyup: false,
		rules: {
          email: {
            required: true,
            email: true
          }
        },
		errorPlacement: function (error, element) {
			// Enter your errorPlacement code here
		},
		highlight: function (element) {
		  $(element).parent('.form-group').addClass('error');
		},
		unhighlight: function (element) {
		  $(element).parent('.form-group').removeClass('error');
		},
		submitHandler: function (form) {
			jQuery('#subsSpinner').addClass('spinner');
		  $.ajax({
			type: 'POST',
			dataType: 'json',
			url: ajaxurl,
			data: $subscribeForm.serialize(),
			success: function(data) {
				jQuery('#subsSpinner').removeClass('spinner');
			  if(data.status=="subscribed"){
				$notify.html('<i class="fa fa-check-square success"></i> ' + _success_subs_text ).show();
			  }else if(data.status=="0"){
                var email = $('#subscribeEmail').val();
				$subscribeForm.validate().resetForm();
				$subscribeForm[0].reset();
				$subscribeForm.find('.error').removeClass('error');
				$subscribeForm.find('button').blur();
				$notify.html('<i class="fa fa-warning danger"></i> Mail Send Failed.').show();
			  }
			},
			error: function (xhr, ajaxOptions, thrownError) {
			  $notify.html('<i class="fa fa-warning danger"></i> An error occurred. Please try again later.').show()
			}
		  })
		},
		invalidHandler: function (form, validator) {
		  var errors = validator.numberOfInvalids();
		  if (errors) {
			var message  = errors == 1 ? '<i class="fa fa-warning danger"></i>You missed 1 field. It has been highlighted.' : '<i class="fa fa-warning danger"></i>You missed ' + errors + ' fields. They have been highlighted.';
		   $notify.html(message).show()
		  }
		}
	  })
	},
    fn_siteBg: function () {
      if (is_mobile) {
        if (_bg_style_mobile === 0) {
          $('body').addClass('site-bg-color')
        };
        if (_bg_style_mobile == 2) {
           csmvarxb.fn_siteBgImg()
        }
      } else {
        if (_bg_style_desktop === 0) {
          $('body').addClass('site-bg-color')
        };
        if (_bg_style_desktop == 2) {
          csmvarxb.fn_siteBgImg()
        }
      }
    },
    fn_overlay: function () {
      var site_bg_overlay = $('.site-bg-overlay');
      if (_site_bg_overlay_toggle) {
       $('body').addClass('is-site-bg-overlay');
        site_bg_overlay.css('background-color', _site_bg_overlay_color);
		site_bg_overlay.css('opacity', _site_bg_overlay_opacity)
      }
    },
    fn_flatColor: function () {
      var site_bg = $('.site-bg');
      if (_bg_style_desktop === 0 || _bg_style_desktop == 1) {
        $('.is-desktop').find(site_bg).css('background-color', _bg_color)
      };
      if (_bg_style_mobile === 0 || _bg_style_mobile == 1) {
        $('.is-mobile').find(site_bg).css('background-color', _bg_color)
      }
    },
    fn_siteBgImg: function () {
	  $('body').addClass('is-site-bg-img');
    }
  };
  $(function () {
	csmvarxb.ready();
	$(window).on('scroll', function () {
	  csmvarxb.scroll()
	});
	$(window).on('resize', function () {
	  csmvarxb.resize()
	});
	$(window).on('load', function () {
	 csmvarxb.load()
	})
  });
  $(csm_b).on('resize', csm_c.changed(function () {
    if (csm_c.is('<md')) {
	  $('.scroll-y').mCustomScrollbar('destroy')
    } else {
      if (!$('body').hasClass('mCustomScrollbar') || $('body').hasClass('mCS_destroyed')) {
        csmvarxb.fn_scrollbar()
      }
    }
  }))
}) (jQuery, document, window, ResponsiveBootstrapToolkit)