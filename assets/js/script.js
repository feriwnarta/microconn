function myFunction(x) {
  if (x.matches) {
    var navbar = document.getElementById("navbar");
    // If media query matches
    navbar.classList.add("fixed-top");
  } else {
    var navbar = document.getElementById("navbar");
    navbar.classList.add("bg-white");
    navbar.classList.add("fixed-top");
  }
}
var x = window.matchMedia("(min-width: 992px)");
myFunction(x); // Call listener function at run time
// x.addListener(myFunction); // Attach listener function on state changes
