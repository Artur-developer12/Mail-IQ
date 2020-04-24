
let form = document.querySelector('.form');
let formBtn = document.querySelector('.form-btn');

formBtn.onclick = function(){
	const AskAge     = form.age.value;
	const AskClothes = form.clothes.value;
	const AskTrends  = form.trends.value;

	if (AskAge == '' || AskClothes == '' || AskTrends == '') {
		message('ошибка', 'ответьте на все вопросы');
	}
	else{
		$("#exampleModalCenter").modal("show");

		form.onsubmit = function(e){
			e.preventDefault();
			let error = false;
			let sendModal = document.querySelector('#exampleModalCenter');

			const name = sendModal.querySelector('#name');
			const email = sendModal.querySelector('#email');

			if (name.value == '') {
				error = true;
				name.style.border = '1px solid red';
			}
			else{
				error = false;
				name.style.border = '1px solid #ced4da';
			}

			if (email.value == '') {
				error = true;
				email.style.border = '1px solid red';
			}
			else{
				error = false;
				email.style.border = '1px solid #ced4da';
			}


			if (error == false) {
		 		$(sendModal).modal("hide");
		 		$.ajax({
		 			url: 'check.php',
		 			type: 'post',
		 			cache: false,
		 			data:{
		 				'AskAge': AskAge,
		 				'AskClothes': AskClothes,
		 				'AskTrends': AskTrends,
		 				'name': name.value,
		 				'email': email.value,
		 			},
		 			dataType: 'html',
		 			beforeSend: function(){
		 				$(formBtn).prop("disabled", true);
		 			},
		 			success: function(data){
		 				$(formBtn).prop("disabled", false);
		 				$(form).trigger('reset');
		 				if (!data) {
		 					message('ошибка', 'данные не пришли');
		 					return
		 				}
		 				if (data == 1) {
		 					message('результат', 'успешно');
		 				}
		 				if (data == 0){
		 					message('результат', 'ошибка');
		 				}
		 			},
		 		});
			}
		}
	}
}


function message(title, body){
	let myModal = document.querySelector('#myModal');
	myModal.querySelector('.modal-title').innerHTML = title;
	myModal.querySelector('.modal-body').innerHTML = body;
	$(myModal).modal("show");
}

