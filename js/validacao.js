function valida() {
var pattend=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
var email= document.getElementById('ttmail').value;
var senha= document.getElementById('ttsenha').value;
var form=document.getElementById('form');
		if (email=="") {
				document.getElementById('ttmail').classList.add("default");

			}else if (email.match(pattend)) {
				document.getElementById('ttmail').classList.remove("default");
				document.getElementById('ttmail').classList.add("valid");
				document.getElementById('ttmail').classList.remove("invalid");

			}else{
				document.getElementById('ttmail').classList.remove("default");
				document.getElementById('ttmail').classList.remove("valid");
				document.getElementById('ttmail').classList.add("invalid");
				
			} 

if (senha=="") {
				document.getElementById('ttsenha').classList.add("default");

			}else if (senha.length<6) {
				document.getElementById('ttsenha').classList.remove("default");
				document.getElementById('ttsenha').classList.add("invalid");
				document.getElementById('ttsenha').classList.remove("valid");
			}else{
				document.getElementById('ttsenha').classList.remove("default");
				document.getElementById('ttsenha').classList.remove("invalid");
				document.getElementById('ttsenha').classList.add("valid");
}


}

