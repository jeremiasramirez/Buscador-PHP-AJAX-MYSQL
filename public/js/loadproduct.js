
function chargedSuccess(){
	setTimeout(()=>{

	 	if(!document.getElementById("alert")){
			let msj = document.createElement("p");
				msj.setAttribute("class", "alert--success");
				msj.setAttribute("id", "alert");
				msj.style.position = 'absolute'
				msj.style.left = '0px';
				msj.style.top = '55px';
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
//not important
function chargedData(){
 	if(!document.getElementById("charged")){
	  
			setTimeout(()=>{
				if(document.getElementById("charged")){
					document.getElementById("charged").remove();
				}
			}, 3000);
 	}
}
function chargedAwait(){
 	// if(!document.getElementById("charged")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "btn--yes min");
			msj.setAttribute("id", "chargedAwait");
			msj.textContent = "Preparando..";
			msj.style.position = 'absolute'
			msj.style.padding = '1em'
			msj.style.left = '0px';
			msj.style.top = '55px';
		 
			 
			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				let chargedAwaits = document.getElementById("chargedAwait");
				let spinner = document.getElementById("spinner");

				if(chargedAwaits && spinner){
					chargedAwaits.remove();
					spinner.remove();
				}
			 
			}, 3000);
 	// }
}

(function loadData(){ 
		 
			let http = new XMLHttpRequest();
				http.open("GET", "/buscador/data/alldata.php", 1);

				//not important
				 chargedData()

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


 