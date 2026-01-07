const carouselElement = document.querySelector('#mainCarousel');
const buttonsSlide = document.querySelectorAll('.carrossel-buttons button');

carouselElement.addEventListener('slide.bs.carousel', (e) => {
  const indexActive = e.to;
  buttonsSlide.forEach((btn) => btn.classList.remove('active-button'));
  if (buttonsSlide[indexActive]) {
    buttonsSlide[indexActive].classList.add('active-button');
  }
});

buttonsSlide.forEach((button) => {
  button.addEventListener('click', () => {
    buttonsSlide.forEach((button) => button.classList.remove('active-button'));
    button.classList.add('active-button');
  });
});
