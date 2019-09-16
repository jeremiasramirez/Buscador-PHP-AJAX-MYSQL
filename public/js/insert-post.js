function createMsj(){
		if(!document.getElementById("alert")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "alert--success medium");
			msj.setAttribute("id", "alert");
			msj.textContent = "Agregado correctamente";

			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				if(document.getElementById("alert")){
					document.getElementById("alert").remove();
				}
			}, 3000);
 	}
}
(function processData(){

	let btnSendSearch = document.getElementById("form__post__send");
	let dataValueName = document.getElementById("name-post");
	let dataValuePrice = document.getElementById("price-post");
	let dataValueDistribuitor = document.getElementById("distribuitor-post");
 
	if(btnSendSearch && dataValueName && dataValuePrice && dataValueDistribuitor){
		
		btnSendSearch.addEventListener("click", (e)=>{

		e.preventDefault();

			let http = new XMLHttpRequest();
				http.open("POST", "../views/insert-post.php", 1);

				http.addEventListener("load", (e)=>{
				 
					
					if(http.readyState==4){
						createMsj();
						setTimeout(()=>{
							dataValueName.value="";
							dataValuePrice.value="";
							dataValueDistribuitor.value="";
						}, 3000);
					}
					
				})

					 
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

