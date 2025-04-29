<!doctype html>
<html lang="en">


<head>
<?php include 'includes/css-links.php' ?>

  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.documentElement.classList.remove("dark");
    } 
  </script>

  <style>
    .dashboard__chart--box__inner {
        height: 317px;
        padding-left: 0px;
    }
    .sold-out__progress-bar__field {
    max-width: 200px;
    width: 100%;
}
  </style>

</head>

<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->
    <div class="dashboard__page--wrapper">
        <!-- Start Offcanvas header menu -->
        <?php include 'includes/offcanvas.php'; ?>
        <!-- End Offcanvas header menu -->

        <!-- Start serch box area -->
        <div class="predictive__search--box">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button"><svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
            </button>
        </div>
        <!-- End serch box area -->

        <!-- Dashboard sidebar -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- Dashboard sidebar .\ -->

        <div class="page__body--wrapper" id="dashbody__page--body__wrapper">
            <!-- Start header area -->
            <header class="header__section">
                <div class="main__header d-flex justify-content-between align-items-center">
                    <div class="header__left d-flex align-items-center">
                        <a class="collaps__menu" href="javascript:void(0)"><svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 16.5999L7.0667 11.1666C6.42503 10.5249 6.42503 9.4749 7.0667 8.83324L12.5 3.3999" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.5 16.5999L13.0667 11.1666C12.425 10.5249 12.425 9.4749 13.0667 8.83324L18.5 3.3999" stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <div class="offcanvas__header--menu__open ">
                            <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                                <span class="visually-hidden">Offcanvas Menu Open</span>
                            </a>
                        </div>
                        <div class="search__box">
                            <form class="search__box--form laptop__hidden" action="#">
                                <input class="search__box--input__field" placeholder="Search for ...." type="text">
                                <span class="search__box--icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.79171 8.74992C6.97783 8.74992 8.75004 6.97771 8.75004 4.79159C8.75004 2.60546 6.97783 0.833252 4.79171 0.833252C2.60558 0.833252 0.833374 2.60546 0.833374 4.79159C0.833374 6.97771 2.60558 8.74992 4.79171 8.74992Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.16671 9.16659L8.33337 8.33325" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </form>
                            <button class="search__btn--field hidden__btn" type="submit"><svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_46_1375)">
                                <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"></path>
                                <path d="M19.762 18.6124L15.1007 13.9511C14.7831 13.6335 14.2687 13.6335 13.9511 13.9511C13.6335 14.2684 13.6335 14.7834 13.9511 15.1007L18.6124 19.762C18.7711 19.9208 18.979 20.0002 19.1872 20.0002C19.395 20.0002 19.6031 19.9208 19.762 19.762C20.0796 19.4446 20.0796 18.9297 19.762 18.6124Z" fill="currentColor"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_46_1375">
                                <rect width="20" height="20" fill="currentColor"></rect>
                                </clipPath>
                                </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="main__logo logo-desktop-block">
                           <a class="main__logo--link" href="dashboard.php">
                                <img class="main__logo--img desktop light__logo" src="assets/img/logo/nav-log.png" alt="logo-img">
                                <img class="main__logo--img desktop dark__logo" src="assets/img/logo/nav-log-white.png" alt="logo-img">
                                <img class="main__logo--img mobile" src="assets/img/logo/logo-mobile.png" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header__right d-flex align-items-center">
                        <div class="main__menu d-none d-xl-block">
                            <nav class="main__menu--navigation">
                                <ul class="main__menu--wrapper d-flex">
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="../index.php"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 0L0 4.125V11H3.72581V8.59381C3.72581 7.64165 4.51713 6.87506 5.5 6.87506C6.48287 6.87506 7.27419 7.64165 7.27419 8.59381V11H11V4.125L5.5 0Z" fill="#16A34A"/>
                                            </svg>
                                             Home 
                                        </a>
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="../listing.php"> Listing 
                                        </a>  
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="my-properties.php"> Properties </a>  
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="dashboard.php"> Dashboard 
                                        </a>  
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header__nav-bar__wrapper d-flex align-items-center">
                            <ul class="nav-bar__menu d-flex">
                                <li class="nav-bar__menu--items laptop_d-block">
                                    <a class="nav-bar__menu--icon search__open--btn" href="javascript:void(0)" data-offcanvas><svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_46_1375)">
                                        <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"></path>
                                        <path d="M19.762 18.6124L15.1007 13.9511C14.7831 13.6335 14.2687 13.6335 13.9511 13.9511C13.6335 14.2684 13.6335 14.7834 13.9511 15.1007L18.6124 19.762C18.7711 19.9208 18.979 20.0002 19.1872 20.0002C19.395 20.0002 19.6031 19.9208 19.762 19.762C20.0796 19.4446 20.0796 18.9297 19.762 18.6124Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_46_1375">
                                        <rect width="20" height="20" fill="currentColor"></rect>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                        <span class="visually-hidden">Search</span> 
                                    </a>
                                </li>
                                <li class="nav-bar__menu--items">
                                    <a class="nav-bar__menu--icon" href="#" id="light__to--dark">
                                        <svg class="light--mode__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.99992 15.4166C12.9915 15.4166 15.4166 12.9915 15.4166 9.99992C15.4166 7.00838 12.9915 4.58325 9.99992 4.58325C7.00838 4.58325 4.58325 7.00838 4.58325 9.99992C4.58325 12.9915 7.00838 15.4166 9.99992 15.4166Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15.9501 15.9501L15.8417 15.8417M15.8417 4.15841L15.9501 4.05008L15.8417 4.15841ZM4.05008 15.9501L4.15841 15.8417L4.05008 15.9501ZM10.0001 1.73341V1.66675V1.73341ZM10.0001 18.3334V18.2667V18.3334ZM1.73341 10.0001H1.66675H1.73341ZM18.3334 10.0001H18.2667H18.3334ZM4.15841 4.15841L4.05008 4.05008L4.15841 4.15841Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <svg  class="dark--mode__icon"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"></path></svg>
                                        <span class="visually-hidden">Dark Light</span> 
                                    </a>
                                </li>
                                
                                <li class="nav-bar__menu--items">
                                    <a class="nav-bar__menu--icon" href="chat.php"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1667 7.50008C14.1667 10.7251 11.3667 13.3334 7.91675 13.3334L7.14175 14.2667L6.68342 14.8168C6.29175 15.2834 5.54174 15.1834 5.28341 14.6251L4.16675 12.1667C2.65008 11.1001 1.66675 9.40842 1.66675 7.50008C1.66675 4.27508 4.46675 1.66675 7.91675 1.66675C10.4334 1.66675 12.6084 3.05842 13.5834 5.05842C13.9584 5.80009 14.1667 6.62508 14.1667 7.50008Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.3333 10.7167C18.3333 12.625 17.3499 14.3167 15.8333 15.3834L14.7166 17.8417C14.4583 18.4 13.7083 18.5084 13.3166 18.0334L12.0833 16.55C10.0666 16.55 8.2666 15.6583 7.1416 14.2667L7.9166 13.3333C11.3666 13.3333 14.1666 10.725 14.1666 7.50001C14.1666 6.62501 13.9583 5.80002 13.5833 5.05835C16.3083 5.68335 18.3333 7.98333 18.3333 10.7167Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.83325 7.5H9.99992" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>    
                                        <span class="visually-hidden">Chat</span>                                         
                                    </a>
                                </li>
                                <li class="nav-bar__menu--items">
                                    <a class="nav-bar__menu--icon position-relative" href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0167 2.42505C7.25841 2.42505 5.01674 4.66672 5.01674 7.42505V9.83338C5.01674 10.3417 4.80007 11.1167 4.54174 11.55L3.58341 13.1417C2.99174 14.125 3.40007 15.2167 4.48341 15.5834C8.07507 16.7834 11.9501 16.7834 15.5417 15.5834C16.5501 15.2501 16.9917 14.0584 16.4417 13.1417L15.4834 11.55C15.2334 11.1167 15.0167 10.3417 15.0167 9.83338V7.42505C15.0167 4.67505 12.7667 2.42505 10.0167 2.42505Z" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"/>
                                        <path d="M11.5584 2.6667C11.3001 2.5917 11.0334 2.53337 10.7584 2.50003C9.95843 2.40003 9.19176 2.45837 8.4751 2.6667C8.71676 2.05003 9.31676 1.6167 10.0168 1.6167C10.7168 1.6167 11.3168 2.05003 11.5584 2.6667Z" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.5166 15.8833C12.5166 17.2583 11.3916 18.3833 10.0166 18.3833C9.33327 18.3833 8.69993 18.1 8.24993 17.65C7.79993 17.2 7.5166 16.5666 7.5166 15.8833" stroke="currentColor" stroke-miterlimit="10"/>
                                        </svg> 
                                        <span class="nav-bar__notification--badge"></span> 
                                        <span class="visually-hidden">Notification</span>                                            
                                    </a>
                                </li>
                            </ul>
                            <div class="header__user--profile">
                                <a class="header__user--profile__link d-flex align-items-center" href="#">
                                    <img class="header__user--profile__thumbnail" src="assets/img/dashboard/nav-author-thumb.png" alt="img">
                                    <span class="header__user--profile__name">Rimon Ali</span>
                                    <span class="header__user--profile__arrow"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.9994 4.97656L10.1244 0.851563L11.3027 2.0299L5.9994 7.33323L0.696067 2.0299L1.8744 0.851563L5.9994 4.97656Z" fill="currentColor" fill-opacity="0.5"/>
                                        </svg>
                                    </span>
                                </a>
                                <div class="dropdown__user--profile">
                                    <ul class="user__profile--menu">
                                        <li class="user__profile--menu__items"><a class="user__profile--menu__link" href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="user-2" class="lucide lucide-user-2 inline-block size-4 ltr:mr-2 rtl:ml-2"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg> My Profile</a></li>

                                        <li class="user__profile--menu__items"><a class="user__profile--menu__link position-relative" href="chat.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="mail" class="lucide lucide-mail inline-block size-4 ltr:mr-2 rtl:ml-2"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> Inbox <span class="profile__messages--count">12</span> </a></li>

                                        <li class="user__profile--menu__items"><a class="user__profile--menu__link" href="settings.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Account Settings </a></li>
                                    </ul>
                                    <div class="dropdown__user--profile__footer">
                                        <a class="user__profile--log-out__btn" href="../sign-up.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="log-out" class="lucide lucide-log-out inline-block size-4 ltr:mr-2 rtl:ml-2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg> Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End header area -->
            <main class="main__content_wrapper">
                <!-- dashboard container -->
                <div class="dashboard__container d-flex">
                    <div class="main__content--left">
                        <div class="main__content--left__inner">
                            <!-- Currency section -->
                            <div class="currency__section mb-30">
                                <div class="currency__column4 swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="currency__card">
                                                <h3 class="currency__card--title"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.18542 7.50511C5.18542 8.03457 5.59481 8.46032 6.09697 8.46032H7.12313C7.55979 8.46032 7.91459 8.08916 7.91459 7.6252C7.91459 7.12849 7.69626 6.94837 7.37422 6.83374L5.73126 6.26061C5.40922 6.14599 5.19089 5.97132 5.19089 5.46916C5.19089 5.01066 5.54567 4.63403 5.98234 4.63403H7.00851C7.51067 4.63403 7.92006 5.05978 7.92006 5.58924" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.55005 4.09375V9.00625" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.0083 6.54989C12.0083 9.56289 9.56301 12.0082 6.55001 12.0082C3.53701 12.0082 1.09167 9.56289 1.09167 6.54989C1.09167 3.53689 3.53701 1.09155 6.55001 1.09155" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.27917 1.63745V3.82078H11.4625" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.0083 1.09155L9.27917 3.82072" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>
                                                    Total income</h3>
                                                <span class="currency__card--amount">$1,579,00.87</span>
                                                <div class="currency__card--footer">
                                                    <span class="currency__weekly">Last week</span>
                                                    <span class="currency__increase "><svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.71978 0.111888L0.115159 2.63983C0.0408097 2.712 -1.83231e-07 2.80817 -1.78748e-07 2.91073C-1.7426e-07 3.01339 0.0408684 3.10951 0.115159 3.18167L0.351692 3.41119C0.425924 3.4833 0.525076 3.52302 0.630795 3.52302C0.736455 3.52302 0.838949 3.4833 0.913181 3.41119L2.43599 1.93643L2.43599 6.62183C2.43599 6.83308 2.60638 7 2.8241 7L3.15849 7C3.3762 7 3.56378 6.83308 3.56378 6.62183L3.56378 1.91969L5.09509 3.41114C5.16944 3.48324 5.26589 3.52296 5.37161 3.52296C5.47721 3.52296 5.57507 3.48324 5.64936 3.41114L5.88513 3.18162C5.95948 3.10946 6 3.01333 6 2.91067C6 2.80812 5.95896 2.71194 5.88461 2.63978L3.28004 0.11183C3.20546 0.0394972 3.10589 -0.000281947 3.00006 2.72989e-06C2.89387 -0.000225194 2.79425 0.0394977 2.71978 0.111888Z" fill="currentColor"></path>
                                                        </svg>
                                                        10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="currency__card">
                                                <h3 class="currency__card--title"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.84687 7.39605C9.61762 7.61984 9.48662 7.94189 9.51937 8.28576C9.5685 8.87526 10.1089 9.30647 10.6984 9.30647H11.7355V9.95601C11.7355 11.0859 10.813 12.0083 9.68312 12.0083H3.41696C2.28708 12.0083 1.36462 11.0859 1.36462 9.95601V6.28256C1.36462 5.15269 2.28708 4.23022 3.41696 4.23022H9.68312C10.813 4.23022 11.7355 5.15269 11.7355 6.28256V7.06856H10.6329C10.3272 7.06856 10.0488 7.18863 9.84687 7.39605Z" stroke="#1D74FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M1.36462 6.77369V4.27926C1.36462 3.62972 1.76308 3.05111 2.36896 2.82186L6.70287 1.18436C7.37971 0.927818 8.10567 1.43 8.10567 2.15596V4.23012" stroke="#1D74FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.3133 7.62533V8.74978C12.3133 9.04999 12.0732 9.29559 11.7675 9.30651H10.6977C10.1082 9.30651 9.56778 8.8753 9.51865 8.2858C9.4859 7.94193 9.6169 7.61988 9.84615 7.39609C10.0481 7.18867 10.3265 7.0686 10.6322 7.0686H11.7675C12.0732 7.07952 12.3133 7.32512 12.3133 7.62533Z" stroke="#1D74FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.8208 6.55005H7.64163" stroke="#1D74FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                
                                                </span> Balance</h3>
                                                <span class="currency__card--amount">$157900</span>
                                                <div class="currency__card--footer">
                                                    <span class="currency__weekly">Last week</span>
                                                    <a class="currency__withdrawal" href="#">Withdrawal</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="currency__card">
                                                <h3 class="currency__card--title"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.95461 7.00001C8.95461 8.08104 8.08104 8.95461 7.00001 8.95461C5.91897 8.95461 5.04541 8.08104 5.04541 7.00001C5.04541 5.91897 5.91897 5.04541 7.00001 5.04541C8.08104 5.04541 8.95461 5.91897 8.95461 7.00001Z" stroke="#16A34A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.99998 11.5152C8.92728 11.5152 10.7235 10.3795 11.9738 8.41402C12.4652 7.64419 12.4652 6.35022 11.9738 5.5804C10.7235 3.61488 8.92728 2.47925 6.99998 2.47925C5.07268 2.47925 3.27641 3.61488 2.02613 5.5804C1.53475 6.35022 1.53475 7.64419 2.02613 8.41402C3.27641 10.3795 5.07268 11.5152 6.99998 11.5152Z" stroke="#16A34A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                
                                                </span> Total Views</h3>
                                                <span class="currency__card--amount">57907</span>
                                                <div class="currency__card--footer">
                                                    <span class="currency__weekly">Last week</span>
                                                    <span class="currency__increase "><svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.71978 0.111888L0.115159 2.63983C0.0408097 2.712 -1.83231e-07 2.80817 -1.78748e-07 2.91073C-1.7426e-07 3.01339 0.0408684 3.10951 0.115159 3.18167L0.351692 3.41119C0.425924 3.4833 0.525076 3.52302 0.630795 3.52302C0.736455 3.52302 0.838949 3.4833 0.913181 3.41119L2.43599 1.93643L2.43599 6.62183C2.43599 6.83308 2.60638 7 2.8241 7L3.15849 7C3.3762 7 3.56378 6.83308 3.56378 6.62183L3.56378 1.91969L5.09509 3.41114C5.16944 3.48324 5.26589 3.52296 5.37161 3.52296C5.47721 3.52296 5.57507 3.48324 5.64936 3.41114L5.88513 3.18162C5.95948 3.10946 6 3.01333 6 2.91067C6 2.80812 5.95896 2.71194 5.88461 2.63978L3.28004 0.11183C3.20546 0.0394972 3.10589 -0.000281947 3.00006 2.72989e-06C2.89387 -0.000225194 2.79425 0.0394977 2.71978 0.111888Z" fill="currentColor"/>
                                                        </svg>
                                                        10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="currency__card">
                                                <h3 class="currency__card--title"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.82505 3.90805C9.7923 3.9026 9.75409 3.9026 9.72134 3.90805C8.96809 3.88076 8.36768 3.26397 8.36768 2.4998C8.36768 1.71926 8.99538 1.09155 9.77592 1.09155C10.5565 1.09155 11.1842 1.72472 11.1842 2.4998C11.1787 3.26397 10.5783 3.88076 9.82505 3.90805Z" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.26296 7.88181C10.0108 8.00735 10.835 7.87635 11.4135 7.48881C12.1832 6.97572 12.1832 6.13514 11.4135 5.62206C10.8295 5.23452 9.99437 5.10351 9.24658 5.23451" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.25854 3.90805C3.29129 3.9026 3.3295 3.9026 3.36225 3.90805C4.1155 3.88076 4.71591 3.26397 4.71591 2.4998C4.71591 1.71926 4.08821 1.09155 3.30767 1.09155C2.52712 1.09155 1.89941 1.72472 1.89941 2.4998C1.90487 3.26397 2.50529 3.88076 3.25854 3.90805Z" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M3.82082 7.88181C3.07303 8.00735 2.24882 7.87635 1.67024 7.48881C0.900611 6.97572 0.900611 6.13514 1.67024 5.62206C2.25428 5.23452 3.0894 5.10351 3.83719 5.23451" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.55015 7.98545C6.5174 7.97999 6.47919 7.97999 6.44644 7.98545C5.69319 7.95816 5.09277 7.34136 5.09277 6.5772C5.09277 5.79665 5.72048 5.16895 6.50102 5.16895C7.28156 5.16895 7.90927 5.80211 7.90927 6.5772C7.90382 7.34136 7.3034 7.96361 6.55015 7.98545Z" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M4.96174 9.70493C4.19212 10.218 4.19212 11.0586 4.96174 11.5717C5.83507 12.1557 7.26516 12.1557 8.13849 11.5717C8.90812 11.0586 8.90812 10.218 8.13849 9.70493C7.27062 9.12635 5.83507 9.12635 4.96174 9.70493Z" stroke="#EF4545" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                
                                                </span> Visitor Reviews</h3>
                                                <span class="currency__card--amount">7900</span>
                                                <div class="currency__card--footer">
                                                    <span class="currency__weekly">Last week</span>
                                                    <span class="currency__decrease color-accent-2"><svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.71978 6.88811L0.115159 4.36017C0.0408097 4.288 -1.83231e-07 4.19183 -1.78748e-07 4.08927C-1.7426e-07 3.98661 0.0408684 3.89049 0.115159 3.81833L0.351692 3.58881C0.425924 3.5167 0.525076 3.47698 0.630795 3.47698C0.736455 3.47698 0.838949 3.5167 0.913181 3.58881L2.43599 5.06357L2.43599 0.378168C2.43599 0.166917 2.60638 1.13929e-07 2.8241 1.23445e-07L3.15849 1.38062e-07C3.3762 1.47578e-07 3.56378 0.166917 3.56378 0.378168L3.56378 5.08031L5.09509 3.58886C5.16944 3.51676 5.26589 3.47704 5.37161 3.47704C5.47721 3.47704 5.57507 3.51676 5.64936 3.58886L5.88513 3.81838C5.95948 3.89054 6 3.98667 6 4.08933C6 4.19188 5.95896 4.28806 5.88461 4.36022L3.28004 6.88817C3.20546 6.9605 3.10589 7.00028 3.00006 7C2.89387 7.00023 2.79425 6.9605 2.71978 6.88811Z" fill="currentColor"/>
                                                        </svg>                                                    
                                                        01%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="currency__card">
                                                <h3 class="currency__card--title"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.18542 7.50511C5.18542 8.03457 5.59481 8.46032 6.09697 8.46032H7.12313C7.55979 8.46032 7.91459 8.08916 7.91459 7.6252C7.91459 7.12849 7.69626 6.94837 7.37422 6.83374L5.73126 6.26061C5.40922 6.14599 5.19089 5.97132 5.19089 5.46916C5.19089 5.01066 5.54567 4.63403 5.98234 4.63403H7.00851C7.51067 4.63403 7.92006 5.05978 7.92006 5.58924" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M6.55005 4.09375V9.00625" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.0083 6.54989C12.0083 9.56289 9.56301 12.0082 6.55001 12.0082C3.53701 12.0082 1.09167 9.56289 1.09167 6.54989C1.09167 3.53689 3.53701 1.09155 6.55001 1.09155" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.27917 1.63745V3.82078H11.4625" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.0083 1.09155L9.27917 3.82072" stroke="#9E38FF" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>
                                                    Total income</h3>
                                                <span class="currency__card--amount">$1,579,00.87</span>
                                                <div class="currency__card--footer">
                                                    <span class="currency__weekly">Last week</span>
                                                    <span class="currency__increase "><svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.71978 0.111888L0.115159 2.63983C0.0408097 2.712 -1.83231e-07 2.80817 -1.78748e-07 2.91073C-1.7426e-07 3.01339 0.0408684 3.10951 0.115159 3.18167L0.351692 3.41119C0.425924 3.4833 0.525076 3.52302 0.630795 3.52302C0.736455 3.52302 0.838949 3.4833 0.913181 3.41119L2.43599 1.93643L2.43599 6.62183C2.43599 6.83308 2.60638 7 2.8241 7L3.15849 7C3.3762 7 3.56378 6.83308 3.56378 6.62183L3.56378 1.91969L5.09509 3.41114C5.16944 3.48324 5.26589 3.52296 5.37161 3.52296C5.47721 3.52296 5.57507 3.48324 5.64936 3.41114L5.88513 3.18162C5.95948 3.10946 6 3.01333 6 2.91067C6 2.80812 5.95896 2.71194 5.88461 2.63978L3.28004 0.11183C3.20546 0.0394972 3.10589 -0.000281947 3.00006 2.72989e-06C2.89387 -0.000225194 2.79425 0.0394977 2.71978 0.111888Z" fill="currentColor"></path>
                                                        </svg>
                                                        10%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Currency section .\ -->

                            <!-- Sales Report section -->
                            <div class="sales__report--section">
                                <div class="sales__report--heading d-flex align-items-center justify-content-between mb-30">
                                    <h2 class="sales__report--heading__title">Sales Report</h2>
                                    <div class="sales__report--short-by select">
                                        <select class="sales__report--short-by__select">
                                            <option selected value="1">Sort By</option>
                                            <option value="2">Today</option>
                                            <option value="3">Yesterday</option>
                                            <option value="4">Last 7 Days</option>
                                            <option value="5">This Month</option>
                                            <option value="6">Last Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sales__report--table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sales by</th>
                                                <th>Property name</th>
                                                <th>Sales Type</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="sales__report--author d-flex align-items-center">
                                                        <img class="sales__report--author__thumb" src="assets/img/dashboard/sales-report-thumb.png" alt="img">
                                                        <h3 class="sales__report--author__name">Lafayette, California</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Lafayette, California</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Sale</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">$5447.00</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--status paid">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sales__report--author d-flex align-items-center">
                                                        <img class="sales__report--author__thumb" src="assets/img/dashboard/sales-report-thumb2.png" alt="img">
                                                        <h3 class="sales__report--author__name">Lafayette, California</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Lafayette, California</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Rent</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">$5447.00</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--status pending">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sales__report--author d-flex align-items-center">
                                                        <img class="sales__report--author__thumb" src="assets/img/dashboard/sales-report-thumb3.png" alt="img">
                                                        <h3 class="sales__report--author__name">Lafayette, California</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Lafayette, California</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Sale</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">$5447.00</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--status paid2">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sales__report--author d-flex align-items-center">
                                                        <img class="sales__report--author__thumb" src="assets/img/dashboard/sales-report-thumb4.png" alt="img">
                                                        <h3 class="sales__report--author__name">Lafayette, California</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Lafayette, California</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Ren</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">$5447.00</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--status paid3">Paid</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="sales__report--author d-flex align-items-center">
                                                        <img class="sales__report--author__thumb" src="assets/img/dashboard/sales-report-thumb5.png" alt="img">
                                                        <h3 class="sales__report--author__name">Lafayette, California</h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Lafayette, California</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">Sale</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--body__text">$5447.00</span>
                                                </td>
                                                <td>
                                                    <span class="sales__report--status pending2">Pending</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Sales Report section .\ -->
                        </div>
                    </div>
                    <div class="main__content--right">
                      <!-- View Statistics -->
                        <div class="dashboard__chart--box mb-30">
                            <h2 class="dashboard__chart--title">View Statistics</h2>
                            <div class="dashboard__chart--box__inner">
                                  <canvas id="myChart"></canvas>

                            </div>
                        </div>
                        <!-- Sold out by region -->
                        <div class="dashboard__sold-out__by-region d-flex mb-30">
                            <div class="sold-out__box">
                                <div class="sold-out__box--header d-flex align-items-center justify-content-between">
                                    <h3 class="sold-out__box--title">Sold out</h3>
                                    <div class="sold-out__box--header__right position-relative">
                                        <button class="sold-out__user--btn " aria-label="share button" type="button" aria-expanded="true" data-bs-toggle="dropdown">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="9" cy="9" r="9" fill="#BDBDBD"/>
                                                <rect x="7.5" y="7" width="2.99999" height="7.99999" rx="1.5" fill="white"/>
                                                <rect x="7.5" y="3" width="2.99999" height="2.99999" rx="1.5" fill="white"/>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                            <li><a data-bs-toggle="modal" href="#">Weekly</a></li>
                                            <li><a data-bs-toggle="modal" href="#">Monthly</a></li>
                                            <li><a data-bs-toggle="modal" href="#">Yearly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sold-out__progress-bar">
                                    <div class="sold-out__progress-bar__field position-relative">
                                        <canvas id="ChartDoughnut"></canvas>
                                    </div>
                                </div> 
                            </div>
                            <div class="sales__region--box">
                                <h3 class="sold-out__box--title mb-15">Sales By Region</h3>
                                <div class="dashboard__map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7458458383303!2d90.40609787592845!3d23.792063087174412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79ee1521387%3A0x10a2edf1f08ac145!2sCanada%20Visa%20Application!5e0!3m2!1sen!2sbd!4v1714386178402!5m2!1sen!2sbd"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Recent Activity -->
                        <div class="recent__activity--box">
                            <div class="recent__activity--header d-flex align-items-center justify-content-between mb-25">
                                <h2 class="recent__activity--title">Recent Activity</h2>
                                <select class="recent__activity--select">
                                    <option value="1">View All</option>
                                    <option value="1">1 Weekly</option>
                                    <option value="1">1 Monthly</option>
                                    <option value="1">This Yearly</option>
                                </select>
                            </div>
                            <ul class="recent__activity--message">
                                <li class="recent__activity--message__list one d-flex justify-content-between">
                                    <div class="recent__activity--message__content">
                                        <p class="recent__activity--message__desc">Your listing <span>Luxury Family Home</span> has been approved!.</p>
                                    </div>
                                    <span class="recent__activity--message__time">4:45PM</span>
                                </li>
                                <li class="recent__activity--message__list two d-flex justify-content-between">
                                    <div class="recent__activity--message__content">
                                        <p class="recent__activity--message__desc">Kathy Brown left a review on <span>Renovated Apartment</span></p>
                                        <p class="recent__activity--message__desc2">Lorem ipsum, dolor sit amet.</p>
                                    </div>
                                    <span class="recent__activity--message__time">Today</span>
                                </li>
                                <li class="recent__activity--message__list three d-flex justify-content-between">
                                    <div class="recent__activity--message__content">
                                        <p class="recent__activity--message__desc">Someone favorites your <span>Gorgeous Villa Bay</span> View listing!</p>
                                    </div>
                                    <span class="recent__activity--message__time">20 hrs</span>
                                </li>
                                <li class="recent__activity--message__list four d-flex justify-content-between">
                                    <div class="recent__activity--message__content">
                                        <p class="recent__activity--message__desc">Replied to new <span>support</span> request</p>
                                    </div>
                                    <span class="recent__activity--message__time">4:45PM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- dashboard container .\ -->

                <!-- Start footer section -->
                <?php include 'includes/footer.php' ?>
                <!-- End footer section -->
            </main>
        </div>

        
    </div>
    <!-- ======= All JS here ======== -->
     <?php include 'includes/js-links.php' ?>

  
</body>

</html>