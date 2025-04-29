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

</head>

<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->
    <div class="dashboard__page--wrapper">
        <!-- Start Offcanvas header menu -->
        <?php include 'includes/offcanvas.php' ?>
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
        <?php include 'includes/sidebar.php' ?>
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
                                             <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                                <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                            </svg>
                                        </a>
                                        <ul class="sub__menu">
                                            <li class="sub__menu--items"><a href="../index.php" class="sub__menu--link">Home - One</a></li>
                                            <li class="sub__menu--items"><a href="../index-2.php" class="sub__menu--link">Home - Two</a></li>
                                            <li class="sub__menu--items"><a href="../index-3.php" class="sub__menu--link">Home - Three</a></li>
                                            <li class="sub__menu--items"><a href="../index-4.php" class="sub__menu--link">Home - Four</a></li>
                                            <li class="sub__menu--items"><a href="../index-5.php" class="sub__menu--link">Home - Five</a></li>
                                        </ul>
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="../listing.php"> Listing 
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                                <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                            </svg>
                                        </a>  
                                        <ul class="sub__menu">
                                            <li class="sub__menu--items"><a href="../listing.php" class="sub__menu--link">Listing Left Sidebar</a></li>
                                            <li class="sub__menu--items"><a href="../listing-right-sidebar.php" class="sub__menu--link">Listing Right Sidebar</a></li>
                                            <li class="sub__menu--items"><a href="../listing.php" class="sub__menu--link">Listing Grig</a></li>
                                            <li class="sub__menu--items"><a href="../listing-list.php" class="sub__menu--link">Listing List</a></li>
                                            <li class="sub__menu--items"><a href="../listing-details.php" class="sub__menu--link">Listing Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="my-properties.php"> Properties </a>  
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="dashboard.php"> Dashboard 
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                                <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                            </svg>
                                        </a>  
                                        
                                        <ul class="sub__menu">
                                            <li class="sub__menu--items"><a href="dashboard.php" class="sub__menu--link">Dashboard</a></li>
                                            <li class="sub__menu--items"><a href="create-listing.php" class="sub__menu--link">Creat Listing</a></li>
                                            <li class="sub__menu--items"><a href="chat.php" class="sub__menu--link">Chats</a></li>
                                            <li class="sub__menu--items"><a href="my-favorites.php" class="sub__menu--link">My Favorites</a></li>
                                            <li class="sub__menu--items"><a href="my-properties.php" class="sub__menu--link">My Properties</a></li>
                                            <li class="sub__menu--items"><a href="my-package.php" class="sub__menu--link">My Package</a></li>
                                            <li class="sub__menu--items"><a href="profile.php" class="sub__menu--link">My Profile</a></li>
                                            <li class="sub__menu--items"><a href="reviews.php" class="sub__menu--link">Reviews</a></li>
                                            <li class="sub__menu--items"><a href="saved-search.php" class="sub__menu--link">Saved Search</a></li>
                                            <li class="sub__menu--items"><a href="settings.php" class="sub__menu--link">Setting</a></li>
                                        </ul>
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="../blog.php">News 
                                        </a>
                                    </li>
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="#"> Pages 
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                                <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                            </svg>
                                        </a>  
                                        
                                        <ul class="sub__menu">
                                            <li class="sub__menu--items"><a href="../about.php" class="sub__menu--link">About Us</a></li>
                                            <li class="sub__menu--items"><a href="../contact.php" class="sub__menu--link">Contact Us</a></li>
                                            <li class="sub__menu--items"><a href="../project.php" class="sub__menu--link">Project</a></li>
                                            <li class="sub__menu--items"><a href="../project-details.php" class="sub__menu--link">Project Details</a></li>
                                            <li class="sub__menu--items"><a href="../services-details.php" class="sub__menu--link">Services Details</a></li>
                                            <li class="sub__menu--items"><a href="../login.php" class="sub__menu--link">Login</a></li>
                                            <li class="sub__menu--items"><a href="../sign-up.php" class="sub__menu--link">Sing Up</a></li>
                                            <li class="sub__menu--items"><a href="../404.php" class="sub__menu--link">Error 404</a></li>
                                        </ul>
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
                                <li class="nav-bar__menu--items header__apps--menu position-relative">
                                    <a class="nav-bar__menu--icon apps__menu--icon" href="#">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3333 7.10008V3.31675C18.3333 2.14175 17.8 1.66675 16.475 1.66675H13.1083C11.7833 1.66675 11.25 2.14175 11.25 3.31675V7.09175C11.25 8.27508 11.7833 8.74175 13.1083 8.74175H16.475C17.8 8.75008 18.3333 8.27508 18.3333 7.10008Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.3333 16.475V13.1083C18.3333 11.7833 17.8 11.25 16.475 11.25H13.1083C11.7833 11.25 11.25 11.7833 11.25 13.1083V16.475C11.25 17.8 11.7833 18.3333 13.1083 18.3333H16.475C17.8 18.3333 18.3333 17.8 18.3333 16.475Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.75008 7.10008V3.31675C8.75008 2.14175 8.21675 1.66675 6.89175 1.66675H3.52508C2.20008 1.66675 1.66675 2.14175 1.66675 3.31675V7.09175C1.66675 8.27508 2.20008 8.74175 3.52508 8.74175H6.89175C8.21675 8.75008 8.75008 8.27508 8.75008 7.10008Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.75008 16.475V13.1083C8.75008 11.7833 8.21675 11.25 6.89175 11.25H3.52508C2.20008 11.25 1.66675 11.7833 1.66675 13.1083V16.475C1.66675 17.8 2.20008 18.3333 3.52508 18.3333H6.89175C8.21675 18.3333 8.75008 17.8 8.75008 16.475Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="visually-hidden">Apps icon</span>                                      
                                    </a>
                                    <div class="dropdown__related--apps">
                                        <h3 class="dropdown__apps--title">Related Apps</h3>
                                        <ul class="dropdown__apps--menu">
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/figma.png" alt="icon">
                                                    Figma
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/github.png" alt="icon">
                                                    GitHub
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/dribbble.png" alt="icon">
                                                    Dribbble
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/powerpoint.png" alt="icon">
                                                    Power Point
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/sketch.png" alt="icon">
                                                    Sketch
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/dropbox.png" alt="icon">
                                                    Dropbox
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/google.png" alt="icon">
                                                    Google
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/mail_chimp.png" alt="icon">
                                                    Mail Chimp
                                                </a>
                                            </li>
                                            <li class="dropdown__apps--menu__items">
                                                <a class="dropdown__apps--menu__link" href="#">
                                                    <img src="assets/img/icon/google-docs.png" alt="icon">
                                                    Docs
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown__apps__footer">
                                            <a class="solid__btn dropdown__apps--view__all" href="#">View All Apps</a>
                                        </div>
                                    </div>
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

                                        <li class="user__profile--menu__items"><a class="user__profile--menu__link position-relative" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="gem" class="lucide lucide-gem inline-block size-4 ltr:mr-2 rtl:ml-2"><path d="M6 3h12l4 6-10 13L2 9Z"></path><path d="M11 3 8 9l4 13 4-13-3-6"></path><path d="M2 9h20"></path></svg>  Upgrade <span class="profile__upgrade--badge">Pro</span> </a></li>

                                        <li class="user__profile--menu__items"><a class="user__profile--menu__link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>  Taskboard </a></li>
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
                <div class="dashboard__container dashboard__profile--container">
                    <div class="profile__heading mb-30">
                        <h2 class="profile__heading--title">My Profile</h2>
                        <p class="profile__heading--desc">We are glad to see you again!</p>
                    </div>
                    <div class="dashboard__profile--wrapper">
                        <div class="profile__sticky--thumbnail position-relative">
                            <img src="assets/img/dashboard/profile-sticky-thumbpng.png" alt="">
                            <a class="profile__edit--btn" href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_222_1260)">
                                <path d="M6.47428 2.24498L5.97601 1.68443V1.68443L6.47428 2.24498ZM11.5257 2.24498L12.024 1.68443V1.68443L11.5257 2.24498ZM11.3639 2.10115L10.8656 2.6617L11.3639 2.10115ZM6.6361 2.10115L7.13437 2.6617V2.6617L6.6361 2.10115ZM3.04581 15.7837L3.48664 15.177L3.04581 15.7837ZM2.21619 14.9541L2.82295 14.5133L2.21619 14.9541ZM15.7838 14.9541L15.1771 14.5133L15.7838 14.9541ZM14.9542 15.7837L14.5134 15.177L14.9542 15.7837ZM15.75 5.9886V9.7499H17.25V5.9886H15.75ZM9.75 15.7499H8.25V17.2499H9.75V15.7499ZM2.25 9.7499V5.9886H0.75V9.7499H2.25ZM10.8656 2.6617L11.0274 2.80554L12.024 1.68443L11.8622 1.54059L10.8656 2.6617ZM6.97255 2.80554L7.13437 2.6617L6.13783 1.54059L5.97601 1.68443L6.97255 2.80554ZM4.4887 3.7499C5.40436 3.7499 6.28818 3.41387 6.97256 2.80554L5.97601 1.68443C5.56621 2.04869 5.03699 2.2499 4.4887 2.2499V3.7499ZM11.0274 2.80554C11.7118 3.41387 12.5956 3.7499 13.5113 3.7499V2.2499C12.963 2.2499 12.4338 2.04869 12.024 1.68443L11.0274 2.80554ZM11.8622 1.54059C10.2299 0.0896604 7.77012 0.0896602 6.13783 1.54059L7.13437 2.6617C8.19834 1.71596 9.80166 1.71596 10.8656 2.6617L11.8622 1.54059ZM8.25 15.7499C6.82714 15.7499 5.82025 15.7489 5.04373 15.6647C4.28125 15.5821 3.83036 15.4267 3.48664 15.177L2.60497 16.3905C3.247 16.8569 3.99205 17.0596 4.88216 17.156C5.75823 17.2509 6.86056 17.2499 8.25 17.2499V15.7499ZM0.75 9.7499C0.75 11.1393 0.748971 12.2417 0.843887 13.1177C0.940324 14.0078 1.14296 14.7529 1.60942 15.3949L2.82295 14.5133C2.57323 14.1695 2.41777 13.7187 2.33516 12.9562C2.25103 12.1797 2.25 11.1728 2.25 9.7499H0.75ZM3.48664 15.177C3.23196 14.9919 3.00799 14.7679 2.82295 14.5133L1.60942 15.3949C1.88698 15.777 2.22294 16.1129 2.60497 16.3905L3.48664 15.177ZM15.75 9.7499C15.75 11.1728 15.749 12.1797 15.6648 12.9562C15.5822 13.7187 15.4268 14.1695 15.1771 14.5133L16.3906 15.3949C16.857 14.7529 17.0597 14.0078 17.1561 13.1177C17.251 12.2417 17.25 11.1393 17.25 9.7499H15.75ZM9.75 17.2499C11.1394 17.2499 12.2418 17.2509 13.1178 17.156C14.0079 17.0596 14.753 16.8569 15.395 16.3905L14.5134 15.177C14.1696 15.4267 13.7188 15.5821 12.9563 15.6647C12.1798 15.7489 11.1729 15.7499 9.75 15.7499V17.2499ZM15.1771 14.5133C14.992 14.7679 14.768 14.9919 14.5134 15.177L15.395 16.3905C15.7771 16.1129 16.113 15.777 16.3906 15.3949L15.1771 14.5133ZM17.25 5.9886C17.25 3.92377 15.5761 2.2499 13.5113 2.2499V3.7499C14.7477 3.7499 15.75 4.7522 15.75 5.9886H17.25ZM2.25 5.9886C2.25 4.7522 3.2523 3.7499 4.4887 3.7499V2.2499C2.42387 2.2499 0.75 3.92377 0.75 5.9886H2.25ZM5.25 9.7499C5.25 11.821 6.92893 13.4999 9 13.4999V11.9999C7.75736 11.9999 6.75 10.9925 6.75 9.7499H5.25ZM9 13.4999C11.0711 13.4999 12.75 11.821 12.75 9.7499H11.25C11.25 10.9925 10.2426 11.9999 9 11.9999V13.4999ZM12.75 9.7499C12.75 7.67883 11.0711 5.9999 9 5.9999V7.4999C10.2426 7.4999 11.25 8.50726 11.25 9.7499H12.75ZM9 5.9999C6.92893 5.9999 5.25 7.67883 5.25 9.7499H6.75C6.75 8.50726 7.75736 7.4999 9 7.4999V5.9999Z" fill="currentColor"/>
                                <path d="M12.75 6C12.75 6.41421 13.0858 6.75 13.5 6.75C13.9142 6.75 14.25 6.41421 14.25 6C14.25 5.58579 13.9142 5.25 13.5 5.25C13.0858 5.25 12.75 5.58579 12.75 6Z" fill="currentColor"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_222_1260">
                                <rect width="18" height="18" fill="currentColor"/>
                                </clipPath>
                                </defs>
                                </svg>
                                 Edit</a>
                        </div>
                        <div class="profile__main--content d-flex justify-content-between align-items-center">
                            <div class="profile__author d-flex align-items-center">
                                <div class="profile__author--thumbnail position-relative">
                                    <img src="assets/img/dashboard/profile-author.png" alt="img">
                                    <a class="profile__author--instagram__icon" href="https://www.instagram.com/" target="_blank"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_222_1256)">
                                        <path d="M5.39524 1.87078L5.06305 1.49707L5.06305 1.49707L5.39524 1.87078ZM9.60476 1.87078L9.93695 1.49707V1.49707L9.60476 1.87078ZM9.46992 1.75091L9.13774 2.12462V2.12462L9.46992 1.75091ZM5.53008 1.75091L5.86226 2.12462V2.12462L5.53008 1.75091ZM2.53817 13.1531L2.83206 12.7485L2.53817 13.1531ZM1.84682 12.4617L2.25133 12.1678L1.84682 12.4617ZM13.1532 12.4617L12.7487 12.1678L13.1532 12.4617ZM12.4618 13.1531L12.1679 12.7485L12.4618 13.1531ZM13.25 4.99046V8.12488H14.25V4.99046H13.25ZM8.125 13.2499H6.875V14.2499H8.125V13.2499ZM1.75 8.12488V4.99046H0.75V8.12488H1.75ZM9.13774 2.12462L9.27258 2.24448L9.93695 1.49707L9.8021 1.37721L9.13774 2.12462ZM5.72742 2.24448L5.86226 2.12462L5.1979 1.37721L5.06305 1.49707L5.72742 2.24448ZM3.74058 2.99988C4.47302 2.99988 5.17999 2.73109 5.72742 2.24448L5.06305 1.49707C4.69867 1.82097 4.2281 1.99988 3.74058 1.99988V2.99988ZM9.27258 2.24448C9.82001 2.73109 10.527 2.99988 11.2594 2.99988V1.99988C10.7719 1.99988 10.3013 1.82097 9.93695 1.49707L9.27258 2.24448ZM9.8021 1.37721C8.48921 0.210201 6.51079 0.210201 5.1979 1.37721L5.86226 2.12462C6.79626 1.2944 8.20374 1.2944 9.13774 2.12462L9.8021 1.37721ZM6.875 13.2499C5.69207 13.2499 4.84504 13.2492 4.18964 13.1782C3.54361 13.1082 3.14335 12.9747 2.83206 12.7485L2.24428 13.5576C2.75445 13.9282 3.35081 14.0932 4.08193 14.1724C4.80369 14.2506 5.71435 14.2499 6.875 14.2499V13.2499ZM0.75 8.12488C0.75 9.28553 0.749314 10.1962 0.827512 10.9179C0.906724 11.6491 1.07166 12.2454 1.44231 12.7556L2.25133 12.1678C2.02517 11.8565 1.89169 11.4563 1.82169 10.8102C1.75069 10.1548 1.75 9.30781 1.75 8.12488H0.75ZM2.83206 12.7485C2.60922 12.5866 2.41324 12.3907 2.25133 12.1678L1.44231 12.7556C1.6659 13.0633 1.93654 13.334 2.24428 13.5576L2.83206 12.7485ZM13.25 8.12488C13.25 9.30781 13.2493 10.1548 13.1783 10.8102C13.1083 11.4563 12.9748 11.8565 12.7487 12.1678L13.5577 12.7556C13.9283 12.2454 14.0933 11.6491 14.1725 10.9179C14.2507 10.1962 14.25 9.28553 14.25 8.12488H13.25ZM8.125 14.2499C9.28565 14.2499 10.1963 14.2506 10.9181 14.1724C11.6492 14.0932 12.2456 13.9282 12.7557 13.5576L12.1679 12.7485C11.8566 12.9747 11.4564 13.1082 10.8104 13.1782C10.155 13.2492 9.30793 13.2499 8.125 13.2499V14.2499ZM12.7487 12.1678C12.5868 12.3907 12.3908 12.5866 12.1679 12.7485L12.7557 13.5576C13.0635 13.334 13.3341 13.0633 13.5577 12.7556L12.7487 12.1678ZM14.25 4.99046C14.25 3.33881 12.9111 1.99988 11.2594 1.99988V2.99988C12.3588 2.99988 13.25 3.89109 13.25 4.99046H14.25ZM1.75 4.99046C1.75 3.89109 2.64121 2.99988 3.74058 2.99988V1.99988C2.08893 1.99988 0.75 3.33881 0.75 4.99046H1.75ZM4.5 8.12488C4.5 9.78173 5.84315 11.1249 7.5 11.1249V10.1249C6.39543 10.1249 5.5 9.22945 5.5 8.12488H4.5ZM7.5 11.1249C9.15685 11.1249 10.5 9.78173 10.5 8.12488H9.5C9.5 9.22945 8.60457 10.1249 7.5 10.1249V11.1249ZM10.5 8.12488C10.5 6.46802 9.15685 5.12488 7.5 5.12488V6.12488C8.60457 6.12488 9.5 7.02031 9.5 8.12488H10.5ZM7.5 5.12488C5.84315 5.12488 4.5 6.46802 4.5 8.12488H5.5C5.5 7.02031 6.39543 6.12488 7.5 6.12488V5.12488Z" fill="currentColor"/>
                                        <path d="M10.625 5C10.625 5.34518 10.9048 5.625 11.25 5.625C11.5952 5.625 11.875 5.34518 11.875 5C11.875 4.65482 11.5952 4.375 11.25 4.375C10.9048 4.375 10.625 4.65482 10.625 5Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_222_1256">
                                        <rect width="15" height="15" fill="currentColor"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="profile__author--content">
                                    <h3 class="profile__author--title">Danish Heilium</h3>
                                    <span class="profile__author--subtitle">Ui/Ux Designer</span>
                                </div>
                            </div>
                            <div class="profile__info d-flex">
                                <ul class="profile__info--wrapper">
                                    <li class="profile__info--list">
                                        <h3 class="profile__info--title">EMAIL</h3>
                                        <a class="profile__info__text" href="mailto:example@example.com">Example@gmail.com</a>
                                    </li>
                                    <li class="profile__info--list">
                                        <h3 class="profile__info--title">PHONE</h3>
                                        <a class="profile__info__text" href="tel:+1234567898">: (+123) 456-7898</a>
                                    </li>
                                </ul>
                                <ul class="profile__info--wrapper">
                                    <li class="profile__info--list">
                                        <h3 class="profile__info--title">BIRTHDAY</h3>
                                        <span class="profile__info__text">20 August</span>
                                    </li>
                                    <li class="profile__info--list">
                                        <h3 class="profile__info--title">LOCATION</h3>
                                        <span class="profile__info__text">Barisal, Bangladesh</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="profile__counterup d-flex align-items-center" id="funfactId">
                                <div class="profile__counterup--items">
                                    <span class="profile__counterup--number" > <span class="js-counter" data-count="259">259</span></span>
                                    <span class="profile__counterup--text"> Posts</span>
                                </div>
                                <div class="profile__counterup--items">
                                    <span class="profile__counterup--number" > <span class="js-counter" data-count="129">129</span> K</span>
                                    <span class="profile__counterup--text"> Followers</span>
                                </div>
                                <div class="profile__counterup--items">
                                    <span class="profile__counterup--number" > <span class="js-counter" data-count="20">20</span> K</span>
                                    <span class="profile__counterup--text"> Following</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile__about--content text-center">
                            <h3 class="profile__about--content__title">About Me</h3>
                            <p class="profile__about--content__desc">The UI UX Designer helps create products with a good user experience. They are responsible for understanding what users want from their device and then designing it so they can find all of its features easily without any hassle. They also make sure everything works properly when combined in one package</p>
                            <div class="social__share">
                                <h3 class="social__share--title">Follow me on</h3>
                                <ul class="social__share--wrapper d-flex justify-content-center">
                                    <li class="social__share--list">
                                        <a class="social__share--icon" href="https://www.facebook.com/"><svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" />
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon" href="https://twitter.com/"><svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z" fill="currentColor"/>
                                            </svg>  
                                            <span class="visually-hidden">Twitter</span>                                          
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon" href="https://vimeo.com/"><svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.7793 0.564453C12.6608 0.429036 12.5169 0.327474 12.3477 0.259766C12.1953 0.17513 12.026 0.115885 11.8398 0.0820312C11.6536 0.0481771 11.4674 0.0397135 11.2812 0.0566406C11.0951 0.0566406 10.9173 0.0651042 10.748 0.0820312C10.6296 0.0989583 10.4349 0.166667 10.1641 0.285156C9.91016 0.403646 9.63086 0.572917 9.32617 0.792969C9.03841 1.01302 8.75911 1.29232 8.48828 1.63086C8.21745 1.95247 8.00586 2.35026 7.85352 2.82422C8.12435 2.80729 8.36133 2.80729 8.56445 2.82422C8.76758 2.84115 8.92839 2.89193 9.04688 2.97656C9.18229 3.0612 9.27539 3.19661 9.32617 3.38281C9.39388 3.55208 9.41081 3.7806 9.37695 4.06836C9.36003 4.18685 9.33464 4.3138 9.30078 4.44922C9.26693 4.56771 9.22461 4.69466 9.17383 4.83008C9.12305 4.96549 9.0638 5.10091 8.99609 5.23633C8.94531 5.35482 8.88607 5.48177 8.81836 5.61719C8.73372 5.76953 8.63216 5.9388 8.51367 6.125C8.41211 6.3112 8.28516 6.47201 8.13281 6.60742C7.9974 6.74284 7.83659 6.81901 7.65039 6.83594C7.48112 6.85286 7.30339 6.7513 7.11719 6.53125C6.93099 6.34505 6.78711 6.125 6.68555 5.87109C6.60091 5.60026 6.5332 5.32096 6.48242 5.0332C6.44857 4.74544 6.41471 4.45768 6.38086 4.16992C6.36393 3.86523 6.33854 3.5944 6.30469 3.35742C6.27083 3.22201 6.23698 3.08659 6.20312 2.95117C6.1862 2.79883 6.16081 2.64648 6.12695 2.49414C6.11003 2.3418 6.08464 2.18945 6.05078 2.03711C6.01693 1.88477 5.97461 1.73242 5.92383 1.58008C5.88997 1.46159 5.83919 1.3431 5.77148 1.22461C5.7207 1.08919 5.65299 0.970703 5.56836 0.869141C5.48372 0.767578 5.39062 0.674479 5.28906 0.589844C5.20443 0.505208 5.11133 0.445964 5.00977 0.412109C4.89128 0.378255 4.76432 0.369792 4.62891 0.386719C4.51042 0.386719 4.38346 0.403646 4.24805 0.4375C4.12956 0.454427 4.01107 0.488281 3.89258 0.539062C3.79102 0.589844 3.69792 0.640625 3.61328 0.691406C3.35938 0.84375 3.11393 1.01302 2.87695 1.19922C2.6569 1.38542 2.43685 1.58008 2.2168 1.7832C1.99674 1.9694 1.76823 2.16406 1.53125 2.36719C1.3112 2.55339 1.07422 2.73958 0.820312 2.92578V3.00195C0.904948 3.05273 0.964193 3.10352 0.998047 3.1543C1.04883 3.20508 1.08268 3.25586 1.09961 3.30664C1.13346 3.35742 1.15885 3.39974 1.17578 3.43359C1.20964 3.46745 1.26042 3.49284 1.32812 3.50977C1.4974 3.52669 1.6582 3.50977 1.81055 3.45898C1.96289 3.4082 2.10677 3.36589 2.24219 3.33203C2.3776 3.29818 2.50456 3.29818 2.62305 3.33203C2.75846 3.34896 2.88542 3.44206 3.00391 3.61133C3.07161 3.72982 3.1224 3.84831 3.15625 3.9668C3.20703 4.06836 3.24935 4.17839 3.2832 4.29688C3.31706 4.41536 3.35091 4.53385 3.38477 4.65234C3.41862 4.77083 3.45247 4.88932 3.48633 5.00781C3.55404 5.16016 3.60482 5.32096 3.63867 5.49023C3.68945 5.64258 3.74023 5.80339 3.79102 5.97266C3.8418 6.14193 3.88411 6.31966 3.91797 6.50586C3.96875 6.67513 4.01953 6.8444 4.07031 7.01367C4.13802 7.31836 4.21419 7.6569 4.29883 8.0293C4.40039 8.38477 4.51888 8.73177 4.6543 9.07031C4.78971 9.39193 4.94206 9.68815 5.11133 9.95898C5.29753 10.2129 5.52604 10.3906 5.79688 10.4922C5.93229 10.5599 6.07617 10.5938 6.22852 10.5938C6.39779 10.5768 6.55859 10.5514 6.71094 10.5176C6.88021 10.4837 7.03255 10.4329 7.16797 10.3652C7.32031 10.2975 7.44727 10.2383 7.54883 10.1875C7.81966 10.0182 8.07357 9.84049 8.31055 9.6543C8.56445 9.45117 8.80143 9.23958 9.02148 9.01953C9.25846 8.79948 9.47005 8.57096 9.65625 8.33398C9.85938 8.09701 10.054 7.86003 10.2402 7.62305C10.6634 7.04753 11.0358 6.47201 11.3574 5.89648C11.696 5.30404 11.9753 4.75391 12.1953 4.24609C12.4323 3.72135 12.6185 3.26432 12.7539 2.875C12.8893 2.48568 12.974 2.19792 13.0078 2.01172C13.0247 1.8763 13.0332 1.74935 13.0332 1.63086C13.0501 1.49544 13.0501 1.36849 13.0332 1.25C13.0332 1.13151 13.0078 1.01302 12.957 0.894531C12.9062 0.776042 12.847 0.666016 12.7793 0.564453Z" fill="currentColor" />
                                            </svg> 
                                            <span class="visually-hidden">vimeo</span>                                             
                                        </a>
                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon" href="https://www.pinterest.com/"><svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor" />
                                            </svg>   
                                            <span class="visually-hidden">pinterest</span>                                           
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dashboard container .\ -->



                <?php include 'includes/footer.php' ?>
            </main>
        </div>

        
    </div>



      <!-- Modal Add Contact -->
    <div class="modal fade" id="modaladdcontact" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__contact--main__content">
                <div class="modal__contact--header d-flex align-items-center justify-content-between">
                    <h3 class="modal__contact--header__title">Add Contact</h3>
                    <button type="button" class="modal__contact--close__btn" data-bs-dismiss="modal" aria-label="Close">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.711" height="12.711" viewBox="0 0 12.711 12.711">
                            <g id="Group_7205" data-name="Group 7205" transform="translate(-113.644 -321.644)">
                              <path id="Vector" d="M0,9.883,9.883,0" transform="translate(115.059 323.059)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                              <path id="Vector-2" data-name="Vector" d="M9.883,9.883,0,0" transform="translate(115.059 323.059)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </g>
                          </svg>                                                              
                    </button>
                </div>
                <div class="modal-body modal__contact--body">
                    <div class="modal__contact--form">
                        <form action="#">
                            <div class="modal__contact--form__input mb-20">
                                <label class="modal__contact--input__label" for="name">Contact Name</label>
                                <input class="modal__contact--input__field" placeholder="Enter Name" id="name" type="text">
                            </div>
                            <div class="modal__contact--form__input mb-20">
                                <label class="modal__contact--input__label">Description</label>
                                <textarea class="modal__contact--textarea__field" placeholder="Description"></textarea>
                            </div>
                            <div class="modal__contact--footer">
                                <button class="solid__btn border-0" type="submit">Contact</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
      </div> 


        <!-- Modal Add Calls -->
    <div class="modal fade" id="modaladdcalls" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__contact--main__content">
                <div class="modal-body modal__contact--body">
                    <div class="modal__calling--wrapper">
                        <div class="modal__calling--author">
                            <img class="modal__calling--author__thumb" src="assets/img/dashboard/calling-author.png" alt="img">
                            <h3 class="modal__calling--author__name">William Heineman</h3>
                            <span class="modal__calling--author__subtitle">Calling...</span>
                        </div>
                        <div class="modal__calls--footer d-flex justify-content-center">
                            <button class="call__receive border-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="phone-call" class="lucide lucide-phone-call"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><path d="M14.05 2a9 9 0 0 1 8 7.94"></path><path d="M14.05 6A5 5 0 0 1 18 10"></path></svg>
                            </button>
                            <button class="call__cancel border-0 color-accent-2" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="phone" class="lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </button>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
      </div> 

    <!-- ======= All JS here ======== -->
    <?php include 'includes/js-links.php' ?>


  
</body>

</html>