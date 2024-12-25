const header = document.querySelector('header');
const ourHouseSection = document.querySelector('#our-house');

// Event listener untuk mendeteksi scroll
window.addEventListener('scroll', () => {
  const sectionTop = ourHouseSection.getBoundingClientRect().top;
  
  if (sectionTop <= 50) { // Sesuaikan dengan posisi yang diinginkan
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
