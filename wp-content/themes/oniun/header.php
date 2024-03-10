<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="container-fluid p-0">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center h-100 p-0">
            <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-between align-items-center">
              <a class="navbar-brand" href="https://oniun.com.br/index.php">
                <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/oniunIcon.svg" alt="Oniun ícone" />
              </a>
              <button class="navbar-toggler" onclick="background()" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <svg id='svgClose' width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z" />
                </svg>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Serviços</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="https://oniun.com.br/servicos-de-software.php">Serviços de Software</a>
                      <a class="dropdown-item" href="https://oniun.com.br/servicos-de-contabilidade.php">Serviços de Contabilidade</a>
                      <a class="dropdown-item" href="https://oniun.com.br/servicos-de-dp.php">Serviços de DP</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://oniun.com.br/empresa.php">Sobre Nós</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://oniun.com.br/contato.php">Contato</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link whats" href="https://api.whatsapp.com/send?phone=5546991388001&text=Olá!+Gostaria+de+conversar+com+alguém+da+equipe+Oniun.">
                      <img src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/whatsIcon.svg" class="whatsAppIcon" alt="whatsApp ícone" />
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid topH">
      <div class="container h-100">
        <div class="top_header d-flex justify-content-center align-items-center">
          <nav class="navbar navbar-expand-lg w-100 d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="https://oniun.com.br/blog/">
              <img id="home_icon" src="https://oniun.com.br/blog/wp-content/themes/oniun/assets/images/blog_home/home.png" alt="Oniun ícone" />
            </a>
            
            <!-- <div class="navbar-header">
              
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavBlog" aria-controls="navbarNavBlog" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div> -->

            <div class="d-flex justify-content-start" id="navbarNavBlog">

              <?php
              if (has_nav_menu('top')) {
                wp_nav_menu(array(
                  'theme_location' => 'top',
                  'container' => false,
                  'fallback_cb' => false,
                  'menu_class' => 'nav navbar-nav'
                ));
              }
              ?>
            </div>
          </nav>
        </div>
        <div class="search_header">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </header>