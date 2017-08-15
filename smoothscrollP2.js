var navbar = document.querySelector("section");
	if (window.scrollTo) {
		navbar.addEventListener("click", 
			function(e) {
				var smooth = document.getElementById(e.target.href.split("#")[1]);
				window.scroll({top: smooth.offsetTop, 
				behavior: 'smooth'});
		});
}
