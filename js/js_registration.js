function showAlert() {
	let datefield = document.getElementById("date");
	const adate = datefield.value;
	var myText = "Congratulations! Your Zoion experience has been set for delivery on "+adate+".";
	alert(myText);
}
/*************************/
document.addEventListener("DOMContentLoaded", function(){
	let mybutton = document.getElementById("myBtn");
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
});