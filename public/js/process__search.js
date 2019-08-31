(function processData(){

	let btnSendSearch = document.getElementById("form__search__product__btn__send");
	let dataValue = document.getElementById("name__product--js");

	if(btnSendSearch && dataValue){
		
		dataValue.addEventListener("keyup", (e)=>{

		e.preventDefault();

			let http = new XMLHttpRequest();
				http.open("POST", "data/index.php", 1);

				http.addEventListener("load", (e)=>{

				let containerProductFrontend = document.getElementById("data");
					containerProductFrontend.innerHTML="";


				containerProductFrontend.innerHTML = e.target.responseText


				})

			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			http.send(`data=${dataValue.value}`);

		}, false);
	}
	if(btnSendSearch && dataValue){
		
		btnSendSearch.addEventListener("click", (e)=>{

		e.preventDefault();

			let http = new XMLHttpRequest();
				http.open("POST", "data/index.php", 1);

				http.addEventListener("load", (e)=>{

				let containerProductFrontend = document.getElementById("data");
					containerProductFrontend.innerHTML="";


				containerProductFrontend.innerHTML = e.target.responseText


				})

			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 
			http.send(`data=${dataValue.value}`);

		}, false);
	}

})()

