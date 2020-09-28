<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/js/bundle.js" defer></script>
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body id="body" <?php body_class(); ?>>
<header>

<div id="ll">
<?php get_template_part( 'template-parts/mobilenav', 'page' ); ?>
</div>

    <div class="topbar container">
      <div class="topbar__logo" id="logo">
        <a class="topbar__url" href="<?php echo home_url(); ?>"></a>
      </div>
      <div class="topbar__middle">
        <div class="topbar__hotline  topbar__middle-item">
          <p class="topbar__desc topbar__align-right">Infolinia pn-pt 7:30-15:00:</p>
          <p class="topbar__number topbar__align-right"> <svg class="topbar__icon" viewBox="0 0 100 100">
              <title>phone-call</title>
              <path
                d="M78.959 61.946c-2.047-2.132-4.517-3.271-7.134-3.271-2.596 0-5.086 1.119-7.218 3.25l-6.669 6.648c-0.549-0.296-1.097-0.57-1.625-0.844-0.76-0.38-1.477-0.739-2.089-1.119-6.247-3.968-11.925-9.139-17.37-15.829-2.638-3.335-4.411-6.142-5.699-8.991 1.731-1.583 3.335-3.229 4.896-4.812 0.591-0.591 1.182-1.203 1.773-1.794 4.432-4.432 4.432-10.173 0-14.605l-5.762-5.762c-0.654-0.654-1.33-1.33-1.963-2.005-1.266-1.309-2.596-2.659-3.968-3.926-2.047-2.026-4.496-3.103-7.070-3.103s-5.065 1.076-7.176 3.103c-0.021 0.021-0.021 0.021-0.042 0.042l-7.176 7.239c-2.702 2.702-4.242 5.994-4.58 9.814-0.507 6.163 1.309 11.904 2.702 15.66 3.419 9.223 8.527 17.771 16.146 26.931 9.244 11.038 20.367 19.755 33.073 25.897 4.854 2.3 11.334 5.023 18.573 5.487 0.443 0.021 0.908 0.042 1.33 0.042 4.875 0 8.97-1.752 12.178-5.234 0.021-0.042 0.063-0.063 0.084-0.106 1.097-1.33 2.364-2.533 3.693-3.82 0.908-0.865 1.836-1.773 2.744-2.723 2.089-2.174 3.187-4.707 3.187-7.303 0-2.617-1.119-5.129-3.25-7.239zM86.515 84.171c-0.021 0-0.021 0.021 0 0-0.823 0.886-1.667 1.688-2.575 2.575-1.372 1.309-2.765 2.68-4.073 4.221-2.132 2.279-4.643 3.356-7.936 3.356-0.317 0-0.654 0-0.971-0.021-6.268-0.401-12.094-2.849-16.462-4.939-11.946-5.783-22.435-13.993-31.152-24.398-7.197-8.674-12.009-16.695-15.196-25.306-1.963-5.255-2.68-9.35-2.364-13.212 0.211-2.469 1.161-4.517 2.913-6.268l7.197-7.197c1.034-0.971 2.132-1.499 3.208-1.499 1.33 0 2.406 0.802 3.081 1.477 0.021 0.021 0.042 0.042 0.063 0.063 1.287 1.203 2.512 2.448 3.799 3.778 0.654 0.675 1.33 1.351 2.005 2.047l5.762 5.762c2.237 2.237 2.237 4.306 0 6.543-0.612 0.612-1.203 1.224-1.815 1.815-1.773 1.815-3.461 3.504-5.298 5.15-0.042 0.042-0.084 0.063-0.106 0.106-1.815 1.815-1.477 3.588-1.097 4.791 0.021 0.063 0.042 0.127 0.063 0.19 1.499 3.63 3.609 7.049 6.817 11.123l0.021 0.021c5.825 7.176 11.967 12.769 18.742 17.053 0.865 0.549 1.752 0.992 2.596 1.414 0.76 0.38 1.477 0.739 2.089 1.119 0.084 0.042 0.169 0.106 0.253 0.148 0.718 0.359 1.393 0.528 2.089 0.528 1.752 0 2.849-1.097 3.208-1.456l7.218-7.218c0.718-0.718 1.857-1.583 3.187-1.583 1.309 0 2.385 0.823 3.039 1.541 0.021 0.021 0.021 0.021 0.042 0.042l11.629 11.629c2.174 2.153 2.174 4.369 0.021 6.606z">
              </path>
              <path
                d="M53.97 23.787c5.53 0.929 10.553 3.546 14.563 7.556s6.606 9.033 7.556 14.563c0.232 1.393 1.435 2.364 2.807 2.364 0.169 0 0.317-0.021 0.485-0.042 1.562-0.253 2.596-1.731 2.343-3.292-1.14-6.691-4.306-12.79-9.139-17.623s-10.933-7.999-17.623-9.139c-1.562-0.253-3.018 0.781-3.292 2.322s0.739 3.039 2.3 3.292z">
              </path>
              <path
                d="M99.811 44.112c-1.878-11.017-7.070-21.042-15.048-29.020s-18.003-13.17-29.020-15.048c-1.541-0.274-2.997 0.781-3.271 2.322-0.253 1.562 0.781 3.018 2.343 3.292 9.835 1.667 18.805 6.332 25.939 13.444 7.134 7.134 11.777 16.104 13.444 25.939 0.232 1.393 1.435 2.364 2.807 2.364 0.169 0 0.317-0.021 0.485-0.042 1.541-0.232 2.596-1.71 2.322-3.25z">
              </path>
            </svg> +48 12 424 70 00</p>
        </div>
        <div class="topbar__registration  topbar__align-right topbar__middle-item">
          <p class="topbar__desc topbar__align-right">Zarejestruj się online</p>
          <p class="topbar__number topbar__align-right">
            <svg class="topbar__icon" viewBox="0 0 32 32">
              <title>at</title>
              <path
                d="M27.34 4.034c-2.737-2.506-6.399-4.041-10.419-4.041-0.163 0-0.326 0.003-0.488 0.008l0.024-0.001c-0.097-0.002-0.211-0.003-0.326-0.003-4.403 0-8.397 1.752-11.323 4.596l0.004-0.004c-2.967 2.774-4.815 6.711-4.815 11.080 0 0.121 0.001 0.242 0.004 0.362l-0-0.018c-0.001 0.064-0.002 0.141-0.002 0.217 0 4.316 1.749 8.223 4.578 11.051l0 0c2.966 2.929 7.044 4.739 11.545 4.739 0.283 0 0.565-0.007 0.845-0.021l-0.039 0.002c3.324-0.009 6.48-0.717 9.332-1.985l-0.147 0.058c0.708-0.305 1.195-0.997 1.195-1.803 0-0.26-0.051-0.509-0.143-0.736l0.005 0.013c-0.298-0.721-0.995-1.22-1.81-1.22-0.283 0-0.551 0.060-0.794 0.168l0.012-0.005c-2.252 1.033-4.881 1.65-7.651 1.684l-0.012 0c-0.21 0.013-0.456 0.021-0.703 0.021-3.35 0-6.373-1.399-8.516-3.645l-0.004-0.005c-2.024-2.189-3.265-5.127-3.265-8.355 0-0.055 0-0.111 0.001-0.166l-0 0.008c-0.003-0.097-0.004-0.211-0.004-0.326 0-3.328 1.34-6.343 3.51-8.534l-0.001 0.001c2.11-2.192 5.070-3.554 8.347-3.554 0.083 0 0.167 0.001 0.25 0.003l-0.012-0c0.090-0.003 0.196-0.004 0.303-0.004 2.935 0 5.611 1.109 7.632 2.931l-0.010-0.009c1.983 1.745 3.228 4.289 3.228 7.124 0 0.075-0.001 0.15-0.003 0.225l0-0.011c0.004 0.091 0.006 0.199 0.006 0.306 0 1.771-0.556 3.413-1.504 4.759l0.018-0.026c-0.634 1.104-1.752 1.87-3.056 2.008l-0.017 0.002c-0.574 0-0.862-0.307-0.862-0.925 0.007-0.632 0.047-1.246 0.119-1.85l-0.008 0.081 1.214-9.928h-4.173l-0.268 0.973c-0.935-0.803-2.157-1.294-3.494-1.301h-0.002c-0.007-0-0.015-0-0.023-0-2.060 0-3.904 0.931-5.131 2.395l-0.008 0.010c-1.341 1.549-2.158 3.584-2.158 5.81 0 0.129 0.003 0.257 0.008 0.385l-0.001-0.018c-0.007 0.129-0.010 0.28-0.010 0.431 0 2.096 0.722 4.024 1.931 5.548l-0.014-0.018c1.069 1.381 2.726 2.263 4.589 2.265h0c1.661-0.003 3.14-0.784 4.090-1.998l0.009-0.011c0.769 1.17 2.075 1.932 3.56 1.932 0.077 0 0.154-0.002 0.23-0.006l-0.011 0c2.587-0.024 4.878-1.266 6.331-3.18l0.014-0.020c1.667-1.997 2.679-4.591 2.679-7.422 0-0.101-0.001-0.202-0.004-0.302l0 0.015c0-0.038 0.001-0.084 0.001-0.129 0-3.835-1.689-7.276-4.364-9.618l-0.015-0.013zM17.717 19.055c-0.569 0.876-1.531 1.455-2.631 1.486l-0.005 0c-0.743-0.016-1.379-0.455-1.679-1.086l-0.005-0.012c-0.409-0.733-0.649-1.608-0.649-2.54 0-0.067 0.001-0.133 0.004-0.199l-0 0.010c-0.004-0.077-0.006-0.168-0.006-0.259 0-1.115 0.339-2.152 0.92-3.011l-0.012 0.019c0.479-0.741 1.297-1.228 2.23-1.24l0.002-0c0.816 0.005 1.548 0.361 2.054 0.923l0.002 0.002c0.561 0.605 0.905 1.417 0.905 2.31 0 0.058-0.001 0.115-0.004 0.172l0-0.008c0 0.016 0 0.035 0 0.055 0 1.276-0.423 2.452-1.136 3.398l0.010-0.014z">
              </path>
            </svg>e-rejestracja</p>
        </div>
        <div class="topbar__fontsize topbar__middle-item">
          <div>
            <span class="topbar__fontsize_small">a</span>
            <span class="topbar__fontsize_medium">a</span>
            <span class="topbar__fontsize_big">a</span>
          </div>

        </div>
        <div class="topbar__contrast topbar__middle-item">
          <p>Kontrast strony: &nbsp;
            <span class="topbar__contrast-item topbar__contrast-item_1">a</span>
            <span class="topbar__contrast-item topbar__contrast-item_2">a</span>
            <span class="topbar__contrast-item topbar__contrast-item_3">a</span>
          </p>
        </div>
      </div>
      <div class="topbar__right">
        <div class="topbar__links">
          <a class="topbar__link" href="#"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/bip.png" alt="BIP" title="BIP"></a>
          <a class="topbar__link" href="#"><img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/images/en_gb.svg" alt="BIP" title="English version"></a>
          <a class="topbar__link" href="#">
            <svg class="topbar__yt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <title>YouTube</title>
              <path
                d="M30.366 8.502c-0.346-1.285-1.359-2.298-2.644-2.644-2.348-0.642-11.738-0.642-11.738-0.642s-9.39 0-11.738 0.618c-1.26 0.346-2.298 1.384-2.644 2.669-0.618 2.347-0.618 7.216-0.618 7.216s0 4.893 0.618 7.216c0.346 1.285 1.359 2.298 2.644 2.644 2.372 0.643 11.738 0.643 11.738 0.643s9.39 0 11.738-0.618c1.285-0.346 2.298-1.359 2.644-2.644 0.618-2.348 0.618-7.216 0.618-7.216s0.025-4.893-0.618-7.24zM12.994 20.215v-8.995l7.809 4.497z">
              </path>
            </svg>
          </a>
          <a class="topbar__link" href="#">
            <svg class="topbar__fb" class="social-profiles-icons__icon social-profiles-icons__icon--fb"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <title>Facebook</title>
              <path d="M18 11v-4c0-1.104 0.896-2 2-2h2v-5h-4c-3.314 0-6 2.686-6 6v5h-4v5h4v16h6v-16h4l2-5h-6z"></path>
            </svg>
          </a>

        </div>
        <button id="menuTrigger" class="topbar__button topbar__menu">
          <p>
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg></p>
        </button>
        <button id="searchTrigger" class="topbar__button">
          <p><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></p>
        </button>
      </div>
    </div>
   <hr class="topbar__hr">
  <div class="navwrapper"> <?php
        wp_nav_menu( array( 
            'theme_location' => 'main-menu-desktop', 
            'container_class' => 'nav-menu',
            'menu_class'     => 'nav-menu',
            'depth'           => 0 )); 
    ?></div>
   

       
 
  </header>