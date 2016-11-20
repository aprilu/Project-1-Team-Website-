function play() {
	var audio = document.getElementById("song");
	audio.play();
}

function stop () {
	var audio = document.getElementById("song");
	audio.pause();
}
var imageIndex = 6; 
var total =9;

function displayPics(x) {

	var currPic = document.getElementById('slidePics');
	imageIndex = imageIndex + x;
	if (imageIndex> 9) {
		imageIndex =6;
	}
	if (imageIndex<6) {
		imageIndex = 9;
	}
	
	currPic.src = "images/image" + imageIndex + ".jpg";
}


