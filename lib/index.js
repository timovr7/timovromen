const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});


document.querySelectorAll('.scroll-bar').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default link behavior
    const targetId = btn.getAttribute('data-target');
    const target = document.getElementById(targetId);
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
