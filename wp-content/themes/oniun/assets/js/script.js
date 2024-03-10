// Header
setTimeout(() => {

  let dropDown = document.querySelector('.nav-item.dropdown');
  let dropDownMenu = document.querySelector('.dropdown-menu');
  let dropDownToggle = document.querySelector('.nav-link.dropdown-toggle');
  let navbar = document.querySelector('.navbar-expand-lg.navbar-light');
  let navShow = document.getElementById('navbarNav');
  let span = document.querySelector('span.navbar-toggler-icon');
  let btnToggle = document.querySelector('button.navbar-toggler');
  let svgClose = document.getElementById('svgClose');

  if (screen.width <= 1024) {
    var background = () => {
      if (navShow.classList.contains('show')) {
        setTimeout(() => {
          navbar.classList.remove('backGroundBlue');
          svgClose.style.display = 'none';
          span.style.display = 'flex';
        }, 400);
      } else {
        span.style.display = 'none';
        svgClose.style.display = 'flex';
        navbar.classList.add('backGroundBlue');
      }
    }

  } else if (screen.width > 1024) {

    dropDown.addEventListener('mouseover', () => {
      dropDown.classList.add('show');
      dropDownMenu.classList.add('show');
      dropDownToggle.setAttribute('aria-expanded', 'true');
      let dropDownMenuShow = document.querySelector('.dropdown-menu.show');
      dropDownMenuShow.addEventListener('mouseout', () => {
        dropDown.classList.remove('show');
        dropDownMenu.classList.remove('show');
        dropDownToggle.setAttribute('aria-expanded', 'false');
      });
      let dropDownShow = document.querySelector('.nav-item.dropdown.show');
      dropDownShow.addEventListener('mouseout', () => {
        dropDown.classList.remove('show');
        dropDownMenu.classList.remove('show');
        dropDownToggle.setAttribute('aria-expanded', 'false');
      });
    });

    console.log(window.location.href);

    var url = window.location.href;
    var n = url.indexOf('Oniun/') + 6;
    var n1 = url.length;
    var paginaAtiva = url.slice(n, n1);
    console.log(paginaAtiva);
  }

  let article = document.querySelectorAll('article');
  let i = 0;
  article.forEach((e) => {
    console.log(e);
    e.setAttribute('id', 'article-' + i++);
  });
  console.log(article);


  let sec = document.querySelector('.post_content');
  let num = sec.clientHeight + 300;
  console.log(num);
  if(paginaAtiva.contains('//localhost/wordpress/index.php/category/')) {
    document.querySelector('section').style.height = 'auto';
  } else {
    document.querySelector('section').style.height = num+'px';
  }
 

}, 100);

setTimeout(() => {
  let div = document.querySelector('.col-sm-9.col-md-9.col-lg-9.col-xl-9.img');
  let div2 = document.querySelector('.col-sm-3.col-md-3.col-lg-3.col-xl-3.txt');
  let p = document.querySelector('p.leiamais');
  if(div.innerHTML == '\n      ') {
    div.style.display = 'none';
    div2.style.flex = '0 0 100%';
    div2.style.maxWidth = '100%';
    document.querySelector('article').style.width = '100%';
    

    console.log(window.location.href);

    var url = window.location.href;
    var n = url.indexOf('Oniun/') + 6;
    var n1 = url.length;
    var paginaAtiva = url.slice(n, n1);
    console.log(paginaAtiva);
    if(paginaAtiva == '//localhost/wordpress/index.php/categorias/' || paginaAtiva == '//localhost/wordpress/index.php/e-book/' || paginaAtiva == '//localhost/wordpress/index.php/videos/') {

      p.style.display = 'none';
      document.querySelector('.post_title').style.padding = '0px';
    }
  }
}, 100);

// endHeader;