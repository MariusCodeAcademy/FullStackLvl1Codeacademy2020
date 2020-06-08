var bodyWrapper = document.getElementById("body-wrapper");

// Start project modal
var modal = document.getElementById("start-project__modal");
var modalButton = document.getElementById("start-project");
var modalClose = document.getElementById("start-project__x");

modalButton.onclick = function() {
    modal.style.display = "block";
    bodyWrapper.style.display = "none";
}
modalClose.onclick = function() {
    modal.style.display = "none";
    bodyWrapper.style.display = "block";
}