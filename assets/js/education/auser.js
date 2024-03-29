// start jquery
$(document).ready(function() {

	var ucours_ts = new Swiper(".ucours_ts", {
		slidesPerView: "auto",
		navigation: { prevEl: ".ucours_tnext", },
	});




   // add user
	$('.add_user_btn').click(function(){
		$('.add_user').addClass('pop_bl_act');
		$('#html').addClass('ovr_h');
	})
	$('.add_user_back').click(function(){
		$('.add_user').removeClass('pop_bl_act');
		$('#html').removeClass('ovr_h');
	})


	$('.form_btn_i').click(function(){
		if ($('.cn_mail').hasClass('dsp_n') == true) {
			$('.cn_mail').removeClass('dsp_n')
			$('.cn_phone').addClass('dsp_n')
		} else {
			$('.cn_mail').addClass('dsp_n')
			$('.cn_phone').removeClass('dsp_n')
		}
		$('.form_btn_i').toggleClass('form_btn_act');
	})

	// 
	$('.add_user_send').on('click', function(){
		var phone = $('.phone')
		var mail = $('.mail')
		var cours_id = $(this).attr('data-cours-id')
		var pack = $('.pack').attr('data-val')

		if (phone.attr('data-sel') == 1) {
			$.ajax({
				url: "/education/course/users/get.php?add_user",
				type: "POST",
				dataType: "html",
				data: ({
					phone: phone.attr('data-val'),
					cours_id: cours_id,
					// pack: pack,
				}),
				beforeSend: function(){ },
				error: function(data){ console.log(data) },
				success: function(data){
					if (data == 'add') location.reload();
					else if (data == 'yes') mess('У этого пользователя уже есть доступ')
					else if (data == 'error') mess('СМС не дошло, возможно закончились деньги в СМС центре')
					console.log(data)
				},
			})
		} else if (mail.attr('data-sel') == 1) {
			$.ajax({
				url: "/education/course/users/get.php?add_umail",
				type: "POST",
				dataType: "html",
				data: ({
					mail: mail.attr('data-val'),
					cours_id: cours_id,
					pack: pack,
				}),
				beforeSend: function(){ },
				error: function(data){ console.log(data) },
				success: function(data){
					if (data == 'add') location.reload();
					else if (data == 'yes') mess('У этого пользователя уже есть доступ')
					console.log(data)
				},
			})
		} else mess('Напишите номер ученика')
	})




	// 
	$('html').on('click', '.uc_uibo', function() {
		if ($(this).parent().hasClass("uc_uibs_act")	!= true) {
			$('.uc_uibo').parent().removeClass("uc_uibs_act");
			$(this).parent().addClass("uc_uibs_act");
		} else $('.uc_uibo').parent().removeClass("uc_uibs_act");
	})

	// user del
	$('.user_del').on('click', function(){
		var btn = $(this)
		$.ajax({
			url: "/education/course/users/get.php?user_del",
			type: "POST",
			dataType: "html",
			data: ({ id:btn.attr('data-id') }),
			success: function(data){
				if (data == 'yes') {
					mess('Удалено')
					btn.parent().parent().parent().remove()
				} else console.log(data)
			},
			beforeSend: function(){ },
			error: function(data){ console.log(data) }
		})
	})

	// user access
	$('.user_access').on('click', function() {
		var btn = $(this)
		$.ajax({
			url: "/education/course/users/get.php?user_access_on",
			type: "POST",
			dataType: "html",
			data: ({ id:btn.attr('data-id') }),
			success: function(data){
				if (data == 'yes') {
					mess('Доступ разрешен')
					btn.children('.slider-v3').addClass('slider_act')
				} else {console.log(data)}
			},
			beforeSend: function(){},
			error: function(data){console.log(data)}
		})
	})
		
	// 
	$('html').on('click', '.pass_ress', function() {
		btn = $(this)
		$.ajax({
			url: "/education/course/users/get.php?pass_ress",
			type: "POST",
			dataType: "html",
			data: ({ id: btn.attr('data-id') }),
			success: function(data){
				if (data == 'yes') {
					copytext('Номер: ' + btn.attr('data-login') + ' Пароль: 123456')
				} else {console.log(data)}
			},
			beforeSend: function(){},
			error: function(data){ console.log(data) }
		})
	})

	// sms send
	$('.sms_send').on('click', function(){
		var btn = $(this)
		$.ajax({
			url: "/education/course/users/get.php?sms_send",
			type: "POST",
			dataType: "html",
			data: ({ id:btn.attr('data-id') }),
			success: function(data){
				if (data == 'yes') {
					mess('СМС отправлено')
				} else {console.log(data)}
			},
			beforeSend: function(){ },
			error: function(data){ console.log(data) }
		})
	})
	
	// sms send all
	// $('.sms_send_all').on('click', function(){
	// 	var btn = $(this)
	// 	$.ajax({
	// 		url: "/user/item/users/get.php?sms_send_all",
	// 		type: "POST",
	// 		dataType: "html",
	// 		data: ({ id:btn.attr('data-id') }),
	// 		success: function(data){
	// 			if (data == 'yes') {
	// 				mess('Отправлено всем')
	// 			} else {console.log(data)}
	// 		},
	// 		beforeSend: function(){ mess('Отправка') },
	// 		error: function(data){ console.log(data) }
	// 	})
	// })

	// 
	$('.cours_user_search_in').on('input', function () {
		$.ajax({
			url: "/education/course/users/search.php?user_search",
			type: "POST",
			dataType: "html",
			data: ({
            result: $('.cours_user_search_in').val(),
            id: $('.cours_user_search_in').data('id'),
         }),
			success: function(data){
				$('.uc_uc').html(data)
            $('.lazy_img').lazy({effect:"fadeIn",effectTime:300,threshold:0})
				// console.log(data)
			},
			beforeSend: function(){ },
			error: function(data){ console.log(data) }
		})
	})




}) // end jquery