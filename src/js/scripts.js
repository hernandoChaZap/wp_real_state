window.addEventListener('scroll', () => {
  let scrollnav = document.querySelector('.scrollnav');
  scrollnav.classList.toggle('down', window.scrollY > 50)
});
