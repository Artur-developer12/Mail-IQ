
let form = document.querySelector('.form');
let formBtn = document.querySelector('.form-btn');

formBtn.onclick = function(){

 	let error = false
	const AskAge     = form.age.value;
	const AskClothes = form.clothes.value;
	const AskTrends  = form.trends.value;

	if (AskAge == '' || AskClothes == '' || AskTrends == '') {
 		error = true;
	}

	if (error == true) {
		message('ошибка', 'ответьте на все вопросы');

	}
	else{
		$("#exampleModalCenter").modal("show");

	}


	form.onsubmit = function(e){
		e.preventDefault();
		let error = false;
		let sendModal = document.querySelector('#exampleModalCenter');

		const name = sendModal.querySelector('#name').value;
		const email = sendModal.querySelector('#email').value;

		if (name == '') {
			error = true;
			sendModal.querySelector('#name').style.border = '1px solid red';
		}
		else{
			error = false;
			sendModal.querySelector('#name').style.border = '1px solid #ced4da';
		}

		if (email == '') {
			error = true;
			sendModal.querySelector('#email').style.border = '1px solid red';
		}
		else{
			error = false;
			sendModal.querySelector('#email').style.border = '1px solid #ced4da';
		}


		if (error == false) {
	 		$(sendModal).modal("hide");
	 		$.ajax({
	 			url: 'send.php',
	 			type: 'post',
	 			cache: false,
	 			data:{
	 				'AskAge': AskAge,
	 				'AskClothes': AskClothes,
	 				'AskTrends': AskTrends,
	 				'name': name,
	 				'email': email,
	 			},
	 			dataType: 'html',
	 			beforeSend: function(){
	 				$(formBtn).prop("disabled", true);
	 			},
	 			success: function(data){
	 				$(formBtn).prop("disabled", false);
	 				console.log(data);
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


function message(title, body){
	let myModal = document.querySelector('#myModal');
	let modal_title = myModal.querySelector('.modal-title').innerHTML = title;
	let modal_body = myModal.querySelector('.modal-body').innerHTML = body;
	$("#myModal").modal("show");
}

