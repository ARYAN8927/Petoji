const navbar = document.getElementById("navbar");
const navbarLinks = navbar.getElementsByClassName("navbar_link");

for (let i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function() {
    navbar.classList.add("navbar_active");
  });
}
