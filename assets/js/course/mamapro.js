


















$(document).ready(function() {











	// timer
	function progress(timeleft, timetotal, $element) {
		var progressBarWidth = timeleft * $element.width() / timetotal;
		$element.find('.countdown__bar-animated').animate({ width: progressBarWidth }, 500);
		var minutes = ("0" + Math.floor(timeleft/60)).slice(-2);
		var seconds = ("0" + timeleft%60).slice(-2);
		if (timeleft > 0) {
	 		$element.find('.countdown__bar-time').html(minutes + ":"+ seconds);
		} else {
	 		$element.find('.countdown__bar-time').html("00:00");
		}
		if(timeleft > 0) {
		   setTimeout(function() {
		      progress(timeleft - 1, timetotal, $element);
		   }, 1000);
		}
	};
	var timerBar = $('.countdown__bar');
	var timerTime = timerBar.data('time');
	var pageID = timerBar.data('page-id');
	var visitStart = localStorage.getItem(pageID);
	if(visitStart === null) {
		var visitStart = Date.parse(new Date());
		localStorage.setItem(pageID, Date.parse(new Date()));
	}
	var visitEnd = +visitStart + timerTime*1000;
	var timeleft = (visitEnd - Date.parse(new Date())) / 1000;
	progress(timeleft, timerTime, timerBar);



   







	// 
	$('.faq-a').each(function(){$(this).height($(this).children('.faq-ah').height())})
	$('.faq-a').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('faq-act') == true) {
			$(this).removeClass('faq-act')
			$(this).height($(this).children('.faq-ah').height())
		} else {
			$(this).addClass('faq-act')
			$(this).height($(this).children('.faq-text').height() + $(this).children('.faq-ah').height() + 20)
		}
	});



   $('.blo8_ciqi').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('blo8_ciqi_act') == false) {
         $(this).siblings('.blo8_ciqi').removeClass('blo8_ciqi_act')
         $(this).addClass('blo8_ciqi_act')
         $(this).parent().siblings('.blo8_cin').html($(this).attr('data-name'))
      }
	});

   $('.btn_mrf').on('click', function() {
      $('.btn_mrf').toggleClass('form_im_toggle_act')
      $('.blo8_c78').toggleClass('blo8_c_mrf')
	});






   $('.btn_ukl').click(function () { 
      $('#html').addClass('ovr_h')
      $('.oko').addClass('oko_act')
      if ($('.blo8_c').hasClass('blo8_c_mrf') && !$(this).hasClass('btn_cm')) $('.oko_s_name span').html($(this).attr('data-price2') + ' тенге')
      else $('.oko_s_name span').html($(this).attr('data-price') + ' тенге')
      $('.lazy_card').lazy({bind:"event",delay:0,effect:"fadeIn",effectTime:300,threshold:0})
   });
   $('.oko_close').click(function () { 
      $('.oko').removeClass('oko_act')
      $('#html').removeClass('ovr_h')
   });




   $('.lz_o7').lazy({effect:"fadeIn",effectTime:500,threshold:0})

   var blo7_Swiper = new Swiper(".blo7_Swiper", {
      effect: "creative",
      speed: 600,
      resistanceRatio: 0,
      grabCursor: !0,
      parallax: !0,
      creativeEffect: {
         limitProgress: 3,
         perspective: !0,
         shadowPerProgress: !0,
         prev: {
            shadow: !0,
            translate: ["-15%", 0, -200]
         },
         next: {
            translate: ["calc(100% + 20px)", 0, 0]
         }
      },
      on:{slideChange:function(){$('.lz_o7').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
      pagination: {
         el: ".o7_pagination",
         dynamicBullets: true,
      },
   });



















	// СМС +
	$('.orderSend').on('click', function() {

		var phone = $('.phone')

		if (phone.attr('data-sel') != 1) mess('Введите свой данный')
		else {
			$.ajax({
				url: "/config/send.php?mess",
				type: "POST",
				dataType: "html",
				data: ({ 
               phone:phone.val()
               // phone:phone.attr('data-val')
            }),
            beforeSend: function(){ mess('Жіберілуде..') },
				error: function(data){ mess('Қате..') },
				success: function(data){
					if (data == 'yes') { 
						mess('Сәтті жіберілді')
						phone.val('')
						phone.attr('data-sel', 0)

                  setTimeout(function() { 
                     $(location).attr('href', "https://t.me/+2NBCF9-abdM5NGEy");
                  }, 1000);

					} else mess('Сайтты қайта жүктеп, <br> әрекетті қайталаңыз')
					console.log(data);
				},
			})
		}
	})



















})



   const player_o7 = new Plyr(".player_o7",{
      fullscreen: {iosNative: true},
      controls: ['play-large'],
      poster: '/assets/img/result/chrome_0oD9KqL9vH.jpg',
   });

