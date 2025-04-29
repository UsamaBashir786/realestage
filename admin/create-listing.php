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
                <div class="dashboard__container add__property--container">
                    <div class="add__property--heading mb-30">
                        <h2 class="add__property--heading__title">Add New Property</h2>
                        <p class="add__property--desc">We are glad to see you again!</p>
                    </div>
                    <div class="add__property__inner d-flex">
                        <div class="add__property--step left">
                            <div class="add__property--step__inner">
                                <div class="add__property--box mb-30">
                                    <h3 class="add__property--box__title mb-20">Create Listing</h3>
                                    <form class="add__property--form" action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="input1">Title</label>
                                                    <input class="add__listing--input__field" id="input1" placeholder="Your Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="add__listing--textarea__box mb-15">
                                                    <label class="add__listing--input__label" for="input2">Description</label>
                                                    <textarea class="add__listing--textarea__field" id="input2" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label">Type</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1">Apartments</option>
                                                            <option value="2">Office</option>
                                                            <option value="3">Condo</option>
                                                            <option value="4">Apartment</option>
                                                            <option value="5">House</option>
                                                            <option value="6">Single Family</option>
                                                            <option value="7">Land</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label"> Status</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1">All Cities</option>
                                                            <option value="2">Processing</option>
                                                            <option value="3">Published</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="input3">Price</label>
                                                    <input class="add__listing--input__field" id="input3" placeholder="Price" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="input4">Area</label>
                                                    <input class="add__listing--input__field" id="input4" placeholder="Description" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label"> Rooms</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1">Rooms</option>
                                                            <option value="2">Rooms 3</option>
                                                            <option value="3">Rooms 4</option>
                                                            <option value="4">Rooms 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="solid__btn add__property--btn">Save</button>
                                    </form>
                                </div>
                                <div class="add__property--box">
                                    <h3 class="add__property--box__title mb-20">Location</h3>
                                    <form class="add__property--form" action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="input5">Address</label>
                                                    <input class="add__listing--input__field" id="input5" placeholder="Your Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="add__listing--textarea__box mb-15">
                                                    <label class="add__listing--input__label" for="input6">County / State</label>
                                                    <textarea class="add__listing--textarea__field" id="input6" placeholder="County / State"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label">Type</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1">Apartments</option>
                                                            <option value="2">Office</option>
                                                            <option value="3">Condo</option>
                                                            <option value="4">Apartment</option>
                                                            <option value="5">House</option>
                                                            <option value="6">Single Family</option>
                                                            <option value="7">Land</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label"> City</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1"> New York</option>
                                                            <option value="2">San Diego</option>
                                                            <option value="3">Portugal</option>
                                                            <option value="4">Spain</option>
                                                            <option value="5">Iraq</option>
                                                            <option value="6">Turkey</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="neighborhood">Neighborhood</label>
                                                    <input class="add__listing--input__field" id="neighborhood" placeholder="Neighborhood" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label" for="input7">Zip</label>
                                                    <input class="add__listing--input__field" id="input7" placeholder="Zip" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="add__listing--input__box mb-20">
                                                    <label class="add__listing--input__label"> Country</label>
                                                    <div class="select position-relative">
                                                        <select class="add__listing--form__select">
                                                            <option selected="" value="1">Portugal</option>
                                                            <option value="2">Greece</option>
                                                            <option value="3">United</option>
                                                            <option value="4">Spain</option>
                                                            <option value="5">Iraq</option>
                                                            <option value="6">Turkey</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="add__listing--google__map mb-10">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19868.373358018045!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1699801088151!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="solid__btn add__property--btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="add__property--step">
                            <div class="add__property--box mb-30">
                                <h3 class="add__property--box__title mb-20">Detailed Information</h3>
                                <form class="add__property--form" action="#">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="property">Property ID</label>
                                                <input class="add__listing--input__field" id="property" placeholder="Property ID" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="size">Area Size</label>
                                                <input class="add__listing--input__field" id="size" placeholder="Area Size" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="prefix">Size Prefix</label>
                                                <input class="add__listing--input__field" id="prefix" placeholder="Size Prefix" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="area">Land Area</label>
                                                <input class="add__listing--input__field" id="area" placeholder="Land Area" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="landarea">Land Area Size Postfix</label>
                                                <input class="add__listing--input__field" id="landarea" placeholder="Land Area Size Postfix" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="bedrooms">Bedrooms</label>
                                                <input class="add__listing--input__field" id="bedrooms" placeholder="Bedrooms" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="bathrooms">Bathrooms</label>
                                                <input class="add__listing--input__field" id="bathrooms" placeholder="Bathrooms" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="garages">Garages</label>
                                                <input class="add__listing--input__field" id="garages" placeholder="Garages" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="garagessize">Garages Size</label>
                                                <input class="add__listing--input__field" id="garagessize" placeholder="Garages Size" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="built">Year Built</label>
                                                <input class="add__listing--input__field" id="built" placeholder="Year Built" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="video">Video URL</label>
                                                <input class="add__listing--input__field" id="video" placeholder="Video URL" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="virtual">360° Virtual Tour</label>
                                                <input class="add__listing--input__field" id="virtual" placeholder="360° Virtual Tour" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="solid__btn add__property--btn">Save</button>
                                </form>
                                <h3 class="add__property--box__title pt-0">Amenities and Features</h3>
                                <div class="advance__apeartment--inner d-flex justify-content-between">
                                    <ul class="interior__amenities--check">
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check1">Air Conditioning</label>
                                            <input class="interior__amenities--check__input" id="check1" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check2">Swimming Pool</label>
                                            <input class="interior__amenities--check__input" id="check2" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check3">Outdoor Shower</label>
                                            <input class="interior__amenities--check__input" id="check3" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check4">Lawn</label>
                                            <input class="interior__amenities--check__input" id="check4" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                    </ul>
                                    <ul class="interior__amenities--check">
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check5">Barbeque</label>
                                            <input class="interior__amenities--check__input" id="check5" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check6">Washer</label>
                                            <input class="interior__amenities--check__input" id="check6" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check7">Microwave</label>
                                            <input class="interior__amenities--check__input" id="check7" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check8">Dryer</label>
                                            <input class="interior__amenities--check__input" id="check8" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                    </ul>
                                    <ul class="interior__amenities--check">
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check9">TV Cable</label>
                                            <input class="interior__amenities--check__input" id="check9" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check10">Refrigerator</label>
                                            <input class="interior__amenities--check__input" id="check10" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check11">Laundry</label>
                                            <input class="interior__amenities--check__input" id="check11" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check12">Gym</label>
                                            <input class="interior__amenities--check__input" id="check12" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                    </ul>
                                    <ul class="interior__amenities--check">
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check13">Front yard</label>
                                            <input class="interior__amenities--check__input" id="check13" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check14">WiFi</label>
                                            <input class="interior__amenities--check__input" id="check14" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check15">Sauna</label>
                                            <input class="interior__amenities--check__input" id="check15" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                        <li class="interior__amenities--check__list">
                                            <label class="interior__amenities--check__label" for="check16">Wine cellar</label>
                                            <input class="interior__amenities--check__input" id="check16" type="checkbox">
                                            <span class="interior__amenities--checkmark"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add__property--box mb-30">
                                <h3 class="add__property--box__title mb-20">Property media</h3>
                                <div class="property__media--wrapper d-flex justify-content-between">
                                    <div class="browse__file--area position-relative">
                                        <button class="browse__file--btn">Choose File</button>
                                        <input class="browse__file--input__field" type="file">
                                    </div>
                                    <div class="browse__file--area position-relative">
                                        <button class="browse__file--btn">Select Attachment</button>
                                        <input class="browse__file--input__field" type="file">
                                    </div>
                                    <button class="solid__btn add__property--btn">Save</button>
                                </div>
                            </div>
                            <div class="add__property--box">
                                <h3 class="add__property--box__title mb-20">Floor Plans</h3>
                                <form class="add__property--form" action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan1">Plan Description</label>
                                                <input class="add__listing--input__field" id="plan1" placeholder="Property ID" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan2">Plan Bedrooms</label>
                                                <input class="add__listing--input__field" id="plan2" placeholder="Plan Bedrooms" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan3">Plan Bathrooms</label>
                                                <input class="add__listing--input__field" id="plan3" placeholder="Plan Bedrooms" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan4">Plan Price</label>
                                                <input class="add__listing--input__field" id="plan4" placeholder="Plan Price" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan5">Size Prefix</label>
                                                <input class="add__listing--input__field" id="plan5" placeholder="Size Prefix" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan6">Plan Size</label>
                                                <input class="add__listing--input__field" id="plan6" placeholder="Plan Size" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="plan7">Plan Image</label>
                                                <input class="add__listing--input__field" id="plan7" placeholder="Plan Image" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="solid__btn add__property--btn">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- dashboard container .\ -->

                <?php include 'includes/footer.php' ?>
            </main>
        </div>

        
    </div>

    <!-- ======= All JS here ======== -->
    <?php include 'includes/js-links.php' ?>


  
</body>

</html>