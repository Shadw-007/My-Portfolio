/*======== menu icon navbar ========= */
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');

};


/*======== Scroll sections active link ========= */
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');




window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });

  /*======== Sitcky navbar ========= */
  let header = document.querySelector(".header");

  header.classList.toggle("sticky", window.scrollY > 100);

  /*======== remove menu icon navbar when navbar link is clicked ========= */

    menuIcon.classList.remove("bx-x");
    navbar.classList.remove("active");


};


 /*======== dark/ light mode toggle ========= */

 let darkModeIcon = document.querySelector('#darkMode-icon');

 darkModeIcon.onclick = () => {
    darkModeIcon.classList.toggle('bx-sun');
    document.body.classList.toggle('dark-mode');
 };

/*======== scroll reveal ========= */
 ScrollReveal({ 
    // reset: true,
    distance: '80px', 
    duration: 2000,
    delay: 100
});

ScrollReveal().reveal('.content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img img, .edu-exp-img img, .skills-content .progress, .services-container, .portfolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.content h1, .about-img img', { origin: 'left'});
ScrollReveal().reveal('.content h3, .content p, .about-content', { origin: 'right' });