const nav = document.getElementById('nav');
if (nav) {
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  });
}

const carousel = document.getElementById('carousel');
const nextBtn = document.getElementById('next'); 
const prevBtn = document.getElementById('prev');

if (carousel && nextBtn && prevBtn) {
  nextBtn.onclick = () => carousel.scrollBy({ left: 260, behavior: 'smooth' });
  prevBtn.onclick = () => carousel.scrollBy({ left: -260, behavior: 'smooth' });
}

function openLightbox(item) {
  const lightbox = document.getElementById('lightbox');
  if (!lightbox) return;

  const lightboxImg = document.getElementById('lightbox-img');
  const lightboxName = document.getElementById('lightbox-name');
  const lightboxPrice = document.getElementById('lightbox-price');

  lightboxImg.src = item.dataset.img;
  lightboxImg.alt = item.dataset.name;
  lightboxName.textContent = item.dataset.name;
  lightboxPrice.textContent = item.dataset.price;
  lightbox.classList.add('open');
}

function closeLightbox() {
  const lightbox = document.getElementById('lightbox');
  if (lightbox) lightbox.classList.remove('open');
}

const lightboxEl = document.getElementById('lightbox');
if (lightboxEl) {
  lightboxEl.addEventListener('click', (e) => {
    if (e.target === lightboxEl) closeLightbox();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
  });
}