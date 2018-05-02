function clicked() {
	alert("Clicked!");
}

function changeColor() {
	
	// get the input from the user and store it into textbox
	var textbox = document.getElementById('textColor');
	// grab the first element div to work with
	var div = document.getElementById('firstdiv');
	// use the value of the texbox from the user and store it into color
	var color = textbox.value;
	
	//Use the Dom to style the div with the user input
	div.style.backgroundColor = color;
}

$(document).ready(function(){
    $("button").click(function(){
        $("thirddiv").fadeIn();
    });
});
