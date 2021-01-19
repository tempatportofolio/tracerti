var modal=document.getElementById("modalMy");

var img = document.getElementById("img");
var modalImg=document.getElementById("imgMy");

img.onclick=function() {
    modal.style.display="block";
    modalImg.src=this.src;
}

var span=document.getElementsByClassName("close")[0];
span.onclick=function() {
    modal.style.display="none"
}