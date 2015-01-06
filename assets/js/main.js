var baseurl = $("#baseurl").data("baseurl");

function close_modal()
{
	$(".xno-modal-window").toggleClass("visible");
}

function open_modal()
{
	$(".xno-modal-window").toggleClass("visible");
}

$(document).ready(function(){

	var video = document.getElementById('background-video');
	video.addEventListener('click',function(){
	  video.play();
	},false);

});