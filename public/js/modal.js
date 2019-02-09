// Get the modal
var modalArchitecture = document.getElementById('myModalArchitecture');
var credits = document.getElementById("Credits");
var help = document.getElementById("Help");
// Get the button that opens the modal

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 

function show_architecture(){
    modalArchitecture.style.display = "block";
}
function show_credits(){
    credits.style.display = "block";
}
function show_help(){
    help.style.display = "block";
}

function close_span(){
    modalArchitecture.style.display = "none";
    credits.style.display="none";
    help.style.display="none";
}

