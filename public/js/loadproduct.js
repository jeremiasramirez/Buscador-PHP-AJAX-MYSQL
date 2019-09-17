 
function chargedSuccess(){
	setTimeout(()=>{

	 	if(!document.getElementById("alert")){
			let msj = document.createElement("p");
				msj.setAttribute("class", "alert--success medium");
				msj.setAttribute("id", "alert");
				msj.textContent = "Cargados correctamente";

				document.body.insertAdjacentElement("beforebegin", msj);
				setTimeout(()=>{
					if(document.getElementById("alert")){
						document.getElementById("alert").remove();
					}
				}, 3600);
	 	}

	}, 4000)
	 
}
function chargedData(){
 	if(!document.getElementById("charged")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "btn--yes medium");
			msj.setAttribute("id", "charged");
			msj.textContent = "Cargando";
		 
			 
			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				if(document.getElementById("charged")){
					document.getElementById("charged").remove();
				}
			}, 3000);
 	}
}function chargedAwait(){
 	// if(!document.getElementById("charged")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "btn--yes medium");
			msj.setAttribute("id", "chargedAwait");
			msj.textContent = "Terminando";
		 
			 
			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				if(document.getElementById("chargedAwait")){
					document.getElementById("chargedAwait").remove();
				}
			}, 3000);
 	// }
}

(function loadData(){ 
		 
			let http = new XMLHttpRequest();
				 chargedData();
				http.open("GET", "/buscador/data/index.php", 1);
				 
				http.addEventListener("load", (e)=>{
			 	

				let containerProductFrontend = document.getElementById("data");
					containerProductFrontend.innerHTML="";

					 
				containerProductFrontend.innerHTML = e.target.responseText
			
		 	if(http.readyState === 4){	
		 		let interval = setInterval(()=>{
					if(interval >= 2){
						clearInterval(interval);
						chargedAwait()
						chargedSuccess()
					}
				}, 1)
	 			setTimeout(()=>{
					if( document.getElementById("charged")){
						document.getElementById("charged").remove();
					}
				}, 3000);
		 	}
 				
					 	 	
				})
		http.send();
 
 

})()


 