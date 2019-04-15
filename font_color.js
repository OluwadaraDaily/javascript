function addFontSize(){
	var text = document.getElementById("text");
	var style = window.getComputedStyle(text, null).getPropertyValue('font-size');
	var size = parseInt(style);
	console.log(size);
	text.style.fontSize = (size + 2) + 'px';
}

function lessFontSize(){
	var text = document.getElementById("text");
	var style = window.getComputedStyle(text, null).getPropertyValue('font-size');
	var size = parseInt(style);
	text.style.fontSize = (size - 2) + 'px';
}

function textColor(color) {
	var text = document.getElementById("text");
	text.style.color = color.value;				
}

function backgroundColor(color) {
	var text = document.getElementById("text");
	text.style.backgroundColor = color.value;

}