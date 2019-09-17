function messageDeleted(){
 
		let msj = document.createElement("p");
			msj.setAttribute("class", "alert--success");
			msj.setAttribute("id", "alert");
			msj.textContent = "Eliminado correctamente";
			msj.style.position = 'absolute'
			msj.style.top = '60px'
			msj.style.left = '30px'
			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				if(document.getElementById("alert")){
					document.getElementById("alert").remove();
				}
			}, 500);

	 
}
function chargedSuccess(){
 	if(!document.getElementById("alert")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "alert--success");
			msj.setAttribute("id", "alert");
			msj.textContent = "Cargados correctamente";

			document.body.insertAdjacentElement("beforebegin", msj);
			setTimeout(()=>{
				if(document.getElementById("alert")){
					document.getElementById("alert").remove();
				}
			}, 3000);
 	}

	 
}
function chargedData(){
 	if(!document.getElementById("charged")){
		let msj = document.createElement("p");
			msj.setAttribute("class", "alert--success medium");
			msj.setAttribute("id", "charged");
			msj.textContent = "Cargando..";
		 
			 
			document.body.insertAdjacentElement("beforebegin", msj);
 	}
	 

	 
}

(function processData(){

	let btnSendSearch = document.getElementById("form__search__product__btn__send");
	let dataValue = document.getElementById("name__product--js");

	if(btnSendSearch && dataValue){
		
		dataValue.addEventListener("keyup", (e)=>{
			let valueStr = String(e.target.value)
		 
			if( (valueStr.length >= 3) && !(valueStr.length == "")){


			e.preventDefault();


			let http = new XMLHttpRequest();
				 chargedData();
				http.open("POST", "data/index.php", 1);
				 
				http.addEventListener("load", (e)=>{
			 	

				let containerProductFrontend = document.getElementById("data");
					containerProductFrontend.innerHTML="";

					 
				containerProductFrontend.innerHTML = e.target.responseText
		 	
 


//process deleting element

				  var x = document.querySelectorAll(".deleting");
					 
					if(x){

					 for(let i=0; i<x.length; i++){

					 	 x[i].addEventListener("click", (e)=>{
				 			e.preventDefault()
				 
					 	 	
					 	 let httpDel = new  XMLHttpRequest();
					 	 	httpDel.open("POST","views/delete-view.php");


					 	 	httpDel.addEventListener("load", (e)=>{
					 	 		// console.log(h)
					 	 		if(httpDel.readyState==4){
					 	 			//removiendo elemento del dom al ser eliminado del server
					 	 			document.getElementById("tr__product__find").remove()
					 	 			messageDeleted()
					 	 		 
					 	 		}
					 	 	
					 	 	})

					 	httpDel.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

						httpDel.send(`id=${x[i].id}`);

					 	 }, false);
					 }
				}
 			 



 				



				 
				if(http.readyState==4){
					setTimeout(()=>{
					 

					if(document.getElementById("charged")){document.getElementById("charged").remove()}
						 
							// chargedSuccess()
						 

					}, 2000)
				}
			 
				})

			 
			http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					

			http.send(`data=${dataValue.value}`);
		}
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


 