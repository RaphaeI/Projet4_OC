document.querySelector("button").onclick = function(e){
	e.preventDefault();
	let nav = document.querySelector("nav")
	nav.classList.toggle("upToDown");
}