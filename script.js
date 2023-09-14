const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      if (entry.target.classList.contains('test-span')) {
        entry.target.classList.add('scroll-title-animation');
      } else if (entry.target.classList.contains('studio-span')) {
        entry.target.classList.add('studio-title-animation');
      } else if (entry.target.classList.contains('nuages')) {
        entry.target.classList.add('place-title-animation');
      }

  const video = document.getElementById('parallax-video');
  new simpleParallax(video, {
    orientation: 'up', //orientation
    scale: 3, // Échelle (augmente la taille de l'image parallaxe)
    overflow: true, // Dépassement (permet au parallaxe de déborder)
    maxTransition: 3000,
    transition: 'cubic-bezier(0,0,0,1)',
  });

      // Mettez à jour la propriété CSS "--rotate" pour accélérer l'animation
      document.documentElement.style.setProperty("--rotate", "15s");
    } else {
      // Lorsque l'élément sort de la vue
      // Rétablissez la propriété CSS "--rotate" à sa valeur initiale
      document.documentElement.style.setProperty("--rotate", "3s");
    }
  });
});

observer.observe(document.querySelector('.test-span'));
observer.observe(document.querySelector('.studio-span'));
observer.observe(document.querySelector('.nuages'));




  // parallaxes


  // swiper
  const mySwiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 2000,
    autoplay: {
      delay: 300,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  
  })

 // menu
const sidenav = document.getElementById("mySidenav");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.style.display = "block"; // Ouvre le menu en plein écran
}

function closeNav() {
  sidenav.style.display = "none"; // Ferme le menu en le déplaçant hors de l'écran
}

// Contrôle si on scroll sur la fenêtre
window.addEventListener("scroll", () => {
  // Si on scroll, cela accélère la rotation des fleurs
  var vertical = -1;
  setInterval(function () {
    if (window.scrollY != vertical) {
      vertical = window.scrollY;
      root.style.setProperty("--rotate", "3s");
    } else {
      root.style.setProperty("--rotate", "15s");
    }
  }, 500);
});
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const background = document.querySelector('.banner__background');
  const logo = document.querySelector('.banner__logo');
  
  // Déplacez l'image de fond vers le haut en fonction du défilement
  background.style.transform = `translateY(-${scrollTop}px)`;
  
  // Ajustez la position du logo pour le maintenir fixe
  logo.style.transform = `translate(-50%, calc(-50% + ${scrollTop}px))`;
});