$(document).ready(function () {

  // ---------------------- HEADER -----------------------
  const scrollHeader = () => {
    const header = document.getElementById('header')
    window.scrollY >= 300 ? header.classList.add('active') : header.classList.remove('active')
  }
  window.addEventListener('scroll', scrollHeader)

  // ------------------- BURGER MENU ---------------------
  const body = document.querySelector('body'),
        burgerMenu = document.querySelector('#burger-menu'),
        burgerOpen = document.querySelector('#burger-open'),
        burgerClose = document.querySelector('#burger-close'),
        burgerLinks = document.querySelectorAll('.nav-list>li>a, .nav-menu>a');
  burgerOpen.addEventListener('click', () => {
    burgerMenu.classList.add('show');
    body.classList.add('dis-scroll');
  })
  burgerClose.addEventListener('click', () => {
    burgerMenu.classList.remove('show');
    body.classList.remove('dis-scroll');
  })
  burgerLinks.forEach(n => n.addEventListener('click', () => {
    burgerMenu.classList.remove('show');
    body.classList.remove('dis-scroll');
  }))


  // ------------------- ACCORDIONS ---------------------
  const accordionItems = document.querySelectorAll('.accordion-item')
  accordionItems.forEach((item) => {
    const accordionHeader = item.querySelector('.accordion-header')
    accordionHeader.addEventListener('click', () => {
      const openItem = document.querySelector('.accordion-open')
      toggleItem(item)
      if (openItem && openItem !== item) {
        toggleItem(openItem)
      }
    })
  })
  const toggleItem = (item) => {
    const accordionContent = item.querySelector('.accordion-content')
    if (item.classList.contains('accordion-open')) {
      accordionContent.removeAttribute('style')
      item.classList.remove('accordion-open')
    } else {
      accordionContent.style.height = accordionContent.scrollHeight + 'px'
      item.classList.add('accordion-open')
    }
  }

});