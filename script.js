const names = ["Web Developer","Web Desining","PHP Developer"]; // Add your names here
let index = 0;

function displayNextName() {
    document.getElementById("nameDisplay").textContent = names[index];
    index = (index + 1) % names.length; // Cycle through names
}

// Initial call to display the first name
displayNextName();
// Change name every 2 seconds (2000 milliseconds);
setInterval(displayNextName, 2000);