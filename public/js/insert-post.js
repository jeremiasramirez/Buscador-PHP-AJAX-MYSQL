function createMsj(msjerror){
		if(!document.getElementById("alert")){

			let msj = document.createElement("p");
			msj.setAttribute("id", "alert");
			msj.style.position = 'absolute'
			msj.style.padding = '1em'
			msj.style.left = '0px';
			msj.style.top = '55px';
		 

			if(msjerror==1){

				msj.setAttribute("class", "btn--rm medium");
				msj.textContent = "Error al agregar";
			}
			else{
				msj.setAttribute("class", "alert--success medium");
				msj.textContent = "Agregado correctamente";
			}


			document.body.insertAdjacentElement("beforebegin", msj);
				setTimeout(()=>{

					if(document.getElementById("alert")){
						document.getElementById("alert").remove();
					}

				}, 3000);
 	}
}
function emptyCamp(){
		if(!document.getElementById("alert")){
			let msj = document.createElement("p");
				msj.setAttribute("class", "btn--rm medium");
				msj.setAttribute("id", "alert");
				msj.textContent = "No pueden haber campos vacios";
				document.body.insertAdjacentElement("beforebegin", msj);

				setTimeout(()=>{
					if(document.getElementById("alert")){
						document.getElementById("alert").remove();
					}
				}, 3000);
 	}
}
(function insertData(){

	let btnSendSearch = document.getElementById("form__post__send");
	let dataValueName = document.getElementById("name-post");
	let dataValuePrice = document.getElementById("price-post");
	let dataValueDistribuitor = document.getElementById("distribuitor-post");
 
	if(btnSendSearch && dataValueName&& dataValuePrice && dataValueDistribuitor){
	 
		btnSendSearch.addEventListener("click", (e)=>{

		e.preventDefault();

			let http = new XMLHttpRequest();
				http.open("POST", "../views/insert-post.php", 1);
		if(dataValueName.value != "" && dataValuePrice.value != "" && dataValueDistribuitor.value != ""){
			
				http.addEventListener("load", (e)=>{
				  
 
					if(http.readyState==4){

						createMsj(http.responseText);
						setTimeout(()=>{

							dataValueName.value="";
							dataValuePrice.value="";
							dataValueDistribuitor.value="";

						}, 3000);
					}
					


				})
		}
	 

					 
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 	
		http.send(`name=${dataValueName.value}&price=${dataValuePrice.value}&distribuitor=${dataValueDistribuitor.value}`);
		 
		 
	 	// if(dataValueName.value != "" && dataValuePrice.value != "" && dataValueDistribuitor.value != ""){
	 	// }
	 	// else{
	 		// console.log("value empty :(");
	 	// }


		}, false);
	}
	 



})()

