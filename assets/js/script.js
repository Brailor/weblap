function modalFunc(elem){
// Megszerezzük a modalt
var modal = document.getElementById('myModal');

// Megszerezzük a képet és belerakjuk a modalba, a caption az img alt textje lesz
var img = elem;
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// <span> element, ami majd bezárja a modalt
var span = document.getElementsByClassName("close")[0];

// Kattintásra bezárul a modal
span.onclick = function() { 
    modal.style.display = "none";
		}
	}
// megváltoztatja a hátteret meg a szöveget minden oldalon
function changeBg(image, title, sub){
	var bgImage = document.getElementById('intro_header');
	var bgTitle = document.getElementById('intro_title');
	var bgSub = document.getElementById('intro_sub');
	bgImage.style = "background-image: url(" + image + ")"; 
	console.log(title);
	bgTitle.innerHTML = title;
	bgSub.innerHTML = sub;
	
}	
function error(message){
	alert(message);
}
/*
<script>
var image = "assets/img/.jpg"; var title=""; var sub= ""
changeBg(image,title,sub);
</script> 
*/

function error(message){
	alert(message);
}