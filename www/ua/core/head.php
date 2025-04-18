<?
//
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?=$title?></title>
        <link rel="stylesheet preload" as="style" href="<?=URL?>/css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="<?=URL?>/css/icomoon.css" />
        <link rel="stylesheet preload" as="style" href="<?=URL?>/css/libs.min.css" />
        <link rel="icon" href="<?=URL?>/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="<?=URL?>/css/<?=$css_name?>.min.css" />
          <meta property="og:title" content="<?=$title?>">
<meta property="og:description" content="<?=$desc?>">
<meta property="og:image" content="<?=URL?>/img/daf.png">
<meta name="description" content="<?=$desc?>">
<meta name="keywords" content="<?=$key?>">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MRVBWRJB');</script>
<!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRVBWRJB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header class="header" data-page="home2">
            <div class="header_panel">
                <div class="container d-flex justify-content-center justify-content-md-between align-items-center">
                    <span class="header_panel-logo">
                        <a class="logo d-inline-flex align-items-center" href="<?=URL?>/ua/">
                            <span class="logo_media">
                                <svg width="56px" height="37px" viewBox="0 0 56 37" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g fill="currentColor" transform="translate(0.000000, -0.000000)">
                                            <g transform="translate(0.000000, 0.000000)">
                                                <path
                                                    d="M37.9730366,0 L56,18.5 L37.9730366,37 L20.0419919,18.5 L25.8616371,12.5121359 L23.0545408,9.458807 L14.4823984,18.5 L30.1911192,35 L28,37 L23.0545408,32 L18.195333,37 L0,18.5 L18.195333,0 L36.0014273,18.5 L30.1911192,24.6483396 L32.9085797,27.4399418 L41.6203395,18.5 L25.8616371,2.43040321 L28,0 L32.9085797,5.20234095 L37.9730366,0 Z M17.9818927,4.43392989 L4.64144645,18.5147247 L17.9818927,32.5955195 L21.0810871,29.6079919 L10.1321127,18.5 L21.0810871,7.28442361 L17.9818927,4.43392989 Z M37.7101843,4.43392989 L35.2883953,7.44356982 L46.1323481,18.5 L35.2883953,29.7451953 L37.7101843,32 L51.3914285,18.5147247 L37.7101843,4.43392989 Z M28,14.5941371 L24.4227574,18.5 L28,22.3996382 L31.7636086,18.5147247 L28,14.5941371 Z"
                                                ></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="logo_text">ФОП Єгоров Д.В.</span>
                        </a>
                    </span>
                    <div class="header_panel-links">
                        <a class="header_panel-links_link btn btn--regular" href="<?=URL?>/calculator/ua">Калькулятор тарифів</a>
                        <a class="header_panel-links_link btn btn--regular bordered" href="mail:<?=EMAIL?>"><?=EMAIL?></a>
                    </div>
                </div>
            </div>
            <nav class="header_nav">
                <div class="container d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between flex-lg-row-reverse">
                    <a class="header_nav-tel h5" href="tel:+380674105077">+38 (067) 410-50-77</a>
                    <a
                        class="header_nav-trigger"
                        href="#"
                        id="headerTrigger"
                        data-bs-toggle="collapse"
                        data-bs-target="#headerMenu"
                        aria-controls="headerMenu"
                    >
                        <svg
                            width="100%"
                            height="100%"
                            enable-background="new 0 0 32 32"
                            viewBox="0 0 32 32"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="m29.5625 5.3092h-27.125c-1.06854 0-1.9375.86896-1.9375 1.9375s.86896 1.9375 1.9375 1.9375h27.125c1.06812 0 1.9375-.86896 1.9375-1.9375s-.86938-1.9375-1.9375-1.9375z"
                                fill="currentColor"
                            />
                            <path
                                d="m29.5625 14.0625h-27.125c-1.06854 0-1.9375.86896-1.9375 1.9375s.86896 1.9375 1.9375 1.9375h27.125c1.06812 0 1.9375-.86896 1.9375-1.9375s-.86938-1.9375-1.9375-1.9375z"
                                fill="currentColor"
                            />
                            <path
                                d="m29.562 22.816h-27.125c-1.0685 0-1.9375 0.8689-1.9375 1.9375 0 1.0685 0.86896 1.9375 1.9375 1.9375h27.125c1.0681 0 1.9375-0.86896 1.9375-1.9375 0-1.0686-0.86938-1.9375-1.9375-1.9375z"
                                fill="currentColor"
                            />
                        </svg>
                    </a>
                    <div class="header_nav-wrapper collapse" id="headerMenu">
                        <ul class="header_nav-menu d-flex flex-column flex-lg-row" style="gap: 55px;">
                             <li class="header_nav-menu_item">
                                <a class="nav-item nav-link" href="<?=URL?>/ua/" data-page="home">Головна</a>
                            </li>
                          
                            <li class="header_nav-menu_item">
                                <a class="nav-item nav-link" href="<?=URL?>/about/ua" data-page="about">Про нас</a>
                            </li>
                            <li class="header_nav-menu_item dropdown">
                                <a
                                    class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center"
                                    href="<?=URL?>/services/ua"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#servicesMenu"
                                    data-trigger="dropdown"
                                    aria-expanded="false"
                                    aria-controls="servicesMenu"
                                    data-page="services"
                                >
                                    Послуги
                                    <i class="icon-caret-down-solid icon"></i>
                                </a>
                                <div class="dropdown-menu collapse" id="servicesMenu">
                                    <ul class="dropdown-list">
                                        <li class="list-item" data-main="true">
                                            <a class="dropdown-item nav-item" data-page="services/ua" href="<?=URL?>/services/ua" data-main="true">
                                                Послуги
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="service" href="<?=URL?>/transportation_bulk_cargo/ua">Перевезення насипних вантажів</a>
                                        </li>
                                         <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="service" href="<?=URL?>/transportation_liquid_cargo/ua">Перевезення наливних вантажів</a>
                                        </li>
                                         <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="service" href="<?=URL?>/transportation_complete_cargo/ua">Перевезення комплектних вантажів</a>
                                        </li>
                                         <li class="list-item">
                                            <a class="dropdown-item nav-item" data-page="service" href="<?=URL?>/transportation_project_cargo/ua">Проектні перевезення</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                      <li class="header_nav-menu_item">
                                <a class="nav-item nav-link" href="<?=URL?>/calculator/ua" data-page="<?=URL?>/calculator/ua">Калькулятор</a>
                            </li>
                            <li class="header_nav-menu_item">
                                <a class="nav-item nav-link" href="<?=URL?>/contacts/ua" data-page="<?=URL?>/contacts/ua">Контакти</a>
                            </li>
                          <li class="header_nav-menu_item dropdown">
    <a
        class="nav-link nav-item dropdown-toggle d-inline-flex align-items-center"
        href="#"
        data-bs-toggle="collapse"
        data-bs-target="#blogMenu"
        data-trigger="dropdown"
        aria-expanded="false"
        aria-controls="blogMenu"
        data-page="blog"
    >
       <img src="https://cdn-icons-png.flaticon.com/512/3735/3735393.png" alt="Ukrainian" style="width: 25px; margin-right: 8px;" />
         Мова
        <i class="icon-caret-down-solid icon"></i>
    </a>
    <div class="dropdown-menu collapse" id="blogMenu">
        <ul class="dropdown-list">
            <li class="list-item">
                <a class="dropdown-item nav-item d-flex align-items-center" data-page="post" href="<?=LangUrl(null,'ua');?>">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/2560px-Flag_of_Russia.svg.png" alt="Russian" style="width: 20px; margin-right: 8px;" />Російський
                </a>
            </li>
            <li class="list-item">
                <a class="dropdown-item nav-item d-flex align-items-center" data-page="post" href="<?=LangUrl('ua');?>">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/2560px-Flag_of_Ukraine.svg.png" alt="Ukrainian" style="width: 20px; margin-right: 8px;" />Український
                </a>
            </li>
        </ul>
    </div>
</li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>