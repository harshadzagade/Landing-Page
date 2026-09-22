// SFX & Prosthetics Landing Page Interactivity & Parallax Motion Trends
document.addEventListener('DOMContentLoaded', () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  // 1. Scroll-Driven Reveal Observer
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const elementsToReveal = document.querySelectorAll(
    '.section-title, .section-subtitle, .bento-card, .gallery-card, .faculty-card-modern, .jumbotron-banner-box, .lead-form-box, .hero-form-card, .module-visual-banner, .faq-card-item'
  );

  elementsToReveal.forEach((el, idx) => {
    el.classList.add('reveal-on-scroll');
    const delayClass = `delay-${(idx % 4) + 1}`;
    el.classList.add(delayClass);
    revealObserver.observe(el);
  });

  // 2. Premium parallax layers and ambient depth
  const parallaxItems = [
    ...document.querySelectorAll('.hero-left-content, .hero-right-form, .bento-img-box, .gallery-img-wrapper, .module-visual-img, .faculty-image-wrap')
  ];
  const parallaxBanners = document.querySelectorAll('.jumbotron-banner-box');
  const hero = document.querySelector('.hero');
  let ticking = false;

  const updateParallax = () => {
    if (prefersReducedMotion) return;

    const scrollY = window.scrollY;

    if (hero && scrollY < window.innerHeight * 1.25) {
      hero.style.setProperty('--hero-parallax-y', `${scrollY * 0.16}px`);
      hero.style.setProperty('--hero-plate-y', `${scrollY * -0.06}px`);
    }

    parallaxBanners.forEach(banner => {
      const rect = banner.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        const progress = (window.innerHeight - rect.top) / (window.innerHeight + rect.height);
        const offset = (progress - 0.5) * 36;
        banner.style.setProperty('--banner-parallax-y', `${offset}px`);
      }
    });

    parallaxItems.forEach((item, index) => {
      const rect = item.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        const speed = index % 2 === 0 ? -14 : 12;
        const progress = (rect.top + rect.height / 2 - window.innerHeight / 2) / window.innerHeight;
        item.style.setProperty('--parallax-y', `${progress * speed}px`);
      }
    });

    ticking = false;
  };

  const requestParallaxUpdate = () => {
    if (!ticking) {
      window.requestAnimationFrame(updateParallax);
      ticking = true;
    }
  };

  updateParallax();
  window.addEventListener('scroll', requestParallaxUpdate, { passive: true });
  window.addEventListener('resize', requestParallaxUpdate);

  // 3. Build reference-style accordion UI from existing curriculum content
  const curriculumSection = document.querySelector('#curriculum');
  const curriculumNav = document.querySelector('.curriculum-tabs-nav');
  const curriculumButtons = [...document.querySelectorAll('.curriculum-tab-btn')];
  const curriculumPanes = [...document.querySelectorAll('.curriculum-pane')];

  if (curriculumSection && curriculumNav && curriculumPanes.length && !curriculumSection.querySelector('.course-modules-accordion')) {
    const accordion = document.createElement('div');
    accordion.className = 'course-modules-accordion';

    curriculumPanes.forEach((pane, index) => {
      const tabButton = curriculumButtons[index];
      const moduleLabel = tabButton?.querySelector('small')?.textContent.trim() || `MODULE ${String(index + 1).padStart(2, '0')}`;
      const visualBanner = pane.querySelector('.module-visual-banner');
      const moduleKicker = visualBanner?.querySelector('span')?.textContent.trim() || moduleLabel;
      const moduleTitle = visualBanner?.querySelector('h3')?.textContent.trim() || tabButton?.textContent.replace(moduleLabel, '').trim() || moduleLabel;
      const moduleDesc = visualBanner?.querySelector('p')?.textContent.trim() || '';
      const image = visualBanner?.querySelector('img');
      const syllabusCards = [...pane.querySelectorAll('.syllabus-card')];

      const card = document.createElement('div');
      card.className = `course-module-card${index === 0 ? ' active' : ''}`;
      card.dataset.module = String(index + 1);

      card.innerHTML = `
        <div class="module-card-header" role="button" tabindex="0" aria-expanded="${index === 0 ? 'true' : 'false'}">
          <div class="module-header-left">
            <span class="module-index-badge"></span>
            <h3 class="module-header-title"></h3>
            <h4 class="module-header-subhead"></h4>
            ${moduleDesc ? '<p class="module-header-desc"></p>' : ''}
          </div>
          <div class="module-header-right">
            <button class="module-toggle-action-btn" type="button">
              <span>${index === 0 ? 'Close Details' : 'Know more details'}</span>
              <i class="fa-solid ${index === 0 ? 'fa-chevron-up' : 'fa-chevron-down'}"></i>
            </button>
            <div class="module-chevron-circle"><i class="fa-solid fa-chevron-down"></i></div>
          </div>
        </div>
        <div class="module-card-body">
          <div class="module-split-layout">
            <div class="module-detail-left">
              ${moduleDesc ? '<p class="module-full-desc"></p>' : ''}
              <h4 class="module-topics-heading"></h4>
              <ul class="module-topics-list"></ul>
            </div>
            ${image ? '<div class="module-featured-img-box"><img></div>' : ''}
          </div>
        </div>
      `;

      card.querySelector('.module-index-badge').textContent = moduleLabel;
      card.querySelector('.module-header-title').textContent = moduleKicker;
      card.querySelector('.module-header-subhead').textContent = moduleTitle;
      card.querySelector('.module-topics-heading').textContent = moduleKicker;

      const headerDesc = card.querySelector('.module-header-desc');
      const fullDesc = card.querySelector('.module-full-desc');
      if (headerDesc) headerDesc.textContent = moduleDesc;
      if (fullDesc) fullDesc.textContent = moduleDesc;

      const cardImage = card.querySelector('.module-featured-img-box img');
      if (cardImage && image) {
        cardImage.src = image.getAttribute('src');
        cardImage.alt = image.getAttribute('alt') || moduleTitle;
      }

      const topicsList = card.querySelector('.module-topics-list');
      syllabusCards.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = item.innerHTML;
        topicsList.appendChild(li);
      });

      card.classList.add('reveal-on-scroll', `delay-${(index % 4) + 1}`);
      revealObserver.observe(card);
      accordion.appendChild(card);
    });

    curriculumNav.before(accordion);
    curriculumNav.hidden = true;
    curriculumPanes.forEach(pane => {
      pane.hidden = true;
      pane.classList.remove('active');
    });

    const moduleCards = [...accordion.querySelectorAll('.course-module-card')];
    moduleCards.forEach(card => {
      const header = card.querySelector('.module-card-header');
      const toggleBtn = card.querySelector('.module-toggle-action-btn');

      const setButton = (targetCard, isOpen) => {
        const btn = targetCard.querySelector('.module-toggle-action-btn');
        const cardHeader = targetCard.querySelector('.module-card-header');
        if (btn) {
          btn.innerHTML = isOpen
            ? '<span>Close Details</span> <i class="fa-solid fa-chevron-up"></i>'
            : '<span>Know more details</span> <i class="fa-solid fa-chevron-down"></i>';
        }
        cardHeader?.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      };

      const toggleCard = () => {
        const isActive = card.classList.contains('active');
        moduleCards.forEach(otherCard => {
          if (otherCard !== card) {
            otherCard.classList.remove('active');
            setButton(otherCard, false);
          }
        });
        card.classList.toggle('active', !isActive);
        setButton(card, !isActive);
      };

      header?.addEventListener('click', toggleCard);
      header?.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          toggleCard();
        }
      });
      toggleBtn?.addEventListener('click', e => {
        e.stopPropagation();
        toggleCard();
      });
    });
  }

  // 4. 3D Tilt Micro-Interaction with live specular glare
  const tiltCards = document.querySelectorAll('.bento-card, .faculty-card-modern, .hero-form-card, .gallery-card, .lead-form-box, .course-module-card, .faq-card-item');

  tiltCards.forEach(card => {
    card.classList.add('interactive-card');

    if (!card.querySelector('.card-glare')) {
      const glare = document.createElement('span');
      glare.className = 'card-glare';
      glare.setAttribute('aria-hidden', 'true');
      card.appendChild(glare);
    }

    if (!canHover || prefersReducedMotion) return;

    let tiltFrame = null;
    let targetTiltX = 0;
    let targetTiltY = 0;
    let currentTiltX = 0;
    let currentTiltY = 0;
    let glareX = '50%';
    let glareY = '50%';

    const animateTilt = () => {
      currentTiltX += (targetTiltX - currentTiltX) * 0.18;
      currentTiltY += (targetTiltY - currentTiltY) * 0.18;
      card.style.setProperty('--tilt-x', `${currentTiltX.toFixed(3)}deg`);
      card.style.setProperty('--tilt-y', `${currentTiltY.toFixed(3)}deg`);
      card.style.setProperty('--glare-x', glareX);
      card.style.setProperty('--glare-y', glareY);

      if (Math.abs(targetTiltX - currentTiltX) > 0.01 || Math.abs(targetTiltY - currentTiltY) > 0.01) {
        tiltFrame = window.requestAnimationFrame(animateTilt);
      } else {
        tiltFrame = null;
      }
    };

    card.addEventListener('pointermove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      targetTiltX = ((y - centerY) / centerY) * -2.8;
      targetTiltY = ((x - centerX) / centerX) * 2.8;
      glareX = `${x}px`;
      glareY = `${y}px`;

      card.classList.add('is-tilting');
      if (!tiltFrame) {
        tiltFrame = window.requestAnimationFrame(animateTilt);
      }
    });

    card.addEventListener('pointerleave', () => {
      card.classList.remove('is-tilting');
      targetTiltX = 0;
      targetTiltY = 0;
      if (!tiltFrame) {
        tiltFrame = window.requestAnimationFrame(animateTilt);
      }
    });
  });

  // 5. Magnetic button lift for primary CTAs
  const magneticButtons = document.querySelectorAll('.btn-primary, .btn-gold');
  magneticButtons.forEach(button => {
    if (!canHover || prefersReducedMotion) return;

    button.addEventListener('pointermove', (e) => {
      const rect = button.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width - 0.5) * 10;
      const y = ((e.clientY - rect.top) / rect.height - 0.5) * 8;
      button.style.setProperty('--magnet-x', `${x}px`);
      button.style.setProperty('--magnet-y', `${y}px`);
    });

    button.addEventListener('pointerleave', () => {
      button.style.setProperty('--magnet-x', '0px');
      button.style.setProperty('--magnet-y', '0px');
    });
  });

  // 6. Mobile Navigation Toggle
  const navToggle = document.getElementById('navToggle');
  const navLinks = document.getElementById('navLinks');

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
      navLinks.classList.toggle('mobile-open');
      const icon = navToggle.querySelector('i');
      if (icon) {
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-xmark');
      }
    });
  }

  // Close mobile nav on click
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      if (navLinks && navLinks.classList.contains('mobile-open')) {
        navLinks.classList.remove('mobile-open');
        const icon = navToggle?.querySelector('i');
        if (icon) {
          icon.classList.add('fa-bars');
          icon.classList.remove('fa-xmark');
        }
      }
    });
  });


  // 7. Curriculum Tabs Switcher
  const tabBtns = document.querySelectorAll('.curriculum-tab-btn');
  const tabPanes = document.querySelectorAll('.curriculum-pane');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', function () {

      const targetId = this.getAttribute('data-tab');
      const targetPane = document.getElementById(targetId);

      // Remove active from all buttons
      tabBtns.forEach(button => {
        button.classList.remove('active');
      });

      // Hide all modules
      tabPanes.forEach(pane => {
        pane.classList.remove('active');
      });

      // Active clicked button
      this.classList.add('active');

      // Show selected module
      if (targetPane) {
        targetPane.classList.add('active');
      }

    });
  });

  // 8. Form Submission Handling
  const handleFormSubmit = (formElement) => {
    if (!formElement) return;

    formElement.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = formElement.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
      }

      setTimeout(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<i class="fa-solid fa-check"></i> Enquiry Received!';
          submitBtn.style.background = '#2ec4b6';
        }

        setTimeout(() => {
          alert('Thank you for your enquiry! The admissions team from MET × ABC Academy will contact you shortly.');
          formElement.reset();
          if (submitBtn) {
            submitBtn.innerHTML = originalText;
            submitBtn.style.background = '';
          }
        }, 1200);
      }, 1000);
    });
  };

  const heroForm = document.getElementById('heroLeadForm');
  const pageForm = document.getElementById('pageContactForm');

  handleFormSubmit(heroForm);
  handleFormSubmit(pageForm);

  // 9. Lightbox for Student Gallery
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxClose = document.getElementById('lightboxClose');
  const galleryCards = document.querySelectorAll('.gallery-card');

  galleryCards.forEach(card => {
    card.addEventListener('click', () => {
      const img = card.querySelector('img');
      if (img && lightboxModal && lightboxImg) {
        lightboxImg.src = img.src;
        lightboxModal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  if (lightboxClose && lightboxModal) {
    lightboxClose.addEventListener('click', () => {
      lightboxModal.classList.remove('active');
      document.body.style.overflow = '';
    });

    lightboxModal.addEventListener('click', (e) => {
      if (e.target === lightboxModal) {
        lightboxModal.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  // 10. Header & Mobile Bar Scroll Observers
  const navbar = document.querySelector('.navbar');
  const mobileBar = document.querySelector('.mobile-sticky-bar');

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    if (scrollY > 60) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }

    if (scrollY > 500) {
      mobileBar?.classList.add('visible');
    } else {
      mobileBar?.classList.remove('visible');
    }
  });

  // 11. Reference-style WebGL ambient particle background
  if (!prefersReducedMotion && typeof THREE !== 'undefined') {
    const bgCanvas = document.getElementById('webgl-bg-canvas');

    if (bgCanvas) {
      const bgScene = new THREE.Scene();
      const bgCamera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
      bgCamera.position.z = 80;

      const bgRenderer = new THREE.WebGLRenderer({
        canvas: bgCanvas,
        alpha: true,
        antialias: true
      });
      bgRenderer.setSize(window.innerWidth, window.innerHeight);
      bgRenderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));

      const particleCount = 120;
      const particleGeo = new THREE.BufferGeometry();
      const positions = new Float32Array(particleCount * 3);
      const colors = new Float32Array(particleCount * 3);
      const palette = [
        new THREE.Color(0xE31E24),
        new THREE.Color(0xD4AF37),
        new THREE.Color(0x94A3B8)
      ];

      for (let i = 0; i < particleCount; i += 1) {
        positions[i * 3] = (Math.random() - 0.5) * 160;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 160;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 120;

        const color = palette[Math.floor(Math.random() * palette.length)];
        colors[i * 3] = color.r;
        colors[i * 3 + 1] = color.g;
        colors[i * 3 + 2] = color.b;
      }

      particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
      particleGeo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

      const particleMat = new THREE.PointsMaterial({
        size: 2.5,
        vertexColors: true,
        transparent: true,
        opacity: 0.55
      });

      const particleSystem = new THREE.Points(particleGeo, particleMat);
      bgScene.add(particleSystem);

      let mouseX = 0;
      let mouseY = 0;

      window.addEventListener('mousemove', e => {
        mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
        mouseY = (e.clientY / window.innerHeight - 0.5) * 2;
      }, { passive: true });

      const animateBg = () => {
        window.requestAnimationFrame(animateBg);
        particleSystem.rotation.y += 0.0012;
        particleSystem.rotation.x += 0.0006;
        bgCamera.position.x += (mouseX * 5 - bgCamera.position.x) * 0.05;
        bgCamera.position.y += (-mouseY * 5 - bgCamera.position.y) * 0.05;
        bgRenderer.render(bgScene, bgCamera);
      };

      animateBg();

      window.addEventListener('resize', () => {
        bgCamera.aspect = window.innerWidth / window.innerHeight;
        bgCamera.updateProjectionMatrix();
        bgRenderer.setSize(window.innerWidth, window.innerHeight);
      });
    }
  }

});
