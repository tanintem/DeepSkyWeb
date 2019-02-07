// Get the modal
var modalArchitecture = document.getElementById('myModalArchitecture');

// Get the button that opens the modal
var btn = document.getElementById("Solution");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

function show_architecture(){
    modalArchitecture.style.display = "block";
}

function close_span(){
    modalArchitecture.style.display = "none";
}

