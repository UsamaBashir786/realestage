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
            <?php include 'includes/navbar.php'; ?>

            <!-- End header area -->
            <main class="main__content_wrapper">
                <!-- dashboard container -->
                <div class="dashboard__container dashboard__reviews--container">
                    <div class="reviews__heading mb-30">
                        <h2 class="reviews__heading--title">My Reviews</h2>
                        <p class="reviews__heading--desc">We are glad to see you again!</p>
                    </div>
                    <div class="dashboard__reviews--wrapper">
                        <div class="reviews__topbar d-flex align-items-center justify-content-between">
                            <div class="search__box">
                                <form class="search__box--form laptop__hidden" action="#">
                                    <input class="search__box--input__field" placeholder="Search for ...." type="text">
                                    <span class="search__box--icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.79171 8.74992C6.97783 8.74992 8.75004 6.97771 8.75004 4.79159C8.75004 2.60546 6.97783 0.833252 4.79171 0.833252C2.60558 0.833252 0.833374 2.60546 0.833374 4.79159C0.833374 6.97771 2.60558 8.74992 4.79171 8.74992Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.16671 9.16659L8.33337 8.33325" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </form>
                                <button class="search__btn--field hidden__btn" type="submit"><svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_46_1375)">
                                    <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"></path>
                                    <path d="M19.762 18.6124L15.1007 13.9511C14.7831 13.6335 14.2687 13.6335 13.9511 13.9511C13.6335 14.2684 13.6335 14.7834 13.9511 15.1007L18.6124 19.762C18.7711 19.9208 18.979 20.0002 19.1872 20.0002C19.395 20.0002 19.6031 19.9208 19.762 19.762C20.0796 19.4446 20.0796 18.9297 19.762 18.6124Z" fill="currentColor"></path>
                                    </g>
                                    <defs>
                                    <clipPath >
                                    <rect width="20" height="20" fill="currentColor"></rect>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                </button>
                            </div>
                            <ul class="reviews__account d-flex">
                                <li class="reviews__account--list">
                                    <button class="reviews__account--btn">
                                        <span class="reviews__account--import__btn"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.3304 6.67505C15.0304 6.90755 16.1329 8.29505 16.1329 11.3325V11.43C16.1329 14.7825 14.7904 16.125 11.4379 16.125H6.55535C3.20285 16.125 1.86035 14.7825 1.86035 11.43V11.3325C1.86035 8.31755 2.94785 6.93005 5.60285 6.68255" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 1.5V11.16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.5123 9.48755L8.9998 12L6.4873 9.48755" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        Import
                                        <span class="reviews__account--arrow__btn"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99962 4.97656L1.87462 0.851563L0.696289 2.0299L5.99962 7.33323L11.303 2.0299L10.1246 0.851563L5.99962 4.97656Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                                <li class="reviews__account--list">
                                    <button class="reviews__account--btn">
                                        <span class="reviews__account--export__btn"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.66965 11.325C2.96965 11.0925 1.86715 9.70495 1.86715 6.66745L1.86715 6.56995C1.86715 3.21745 3.20965 1.87495 6.56215 1.87495L11.4446 1.87495C14.7971 1.87495 16.1396 3.21745 16.1396 6.56995L16.1396 6.66745C16.1396 9.68245 15.0521 11.07 12.3971 11.3175" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 16.5L9 6.84" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.48769 8.51245L9.00019 5.99995L11.5127 8.51245" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </span>
                                        Export
                                        <span class="reviews__account--arrow__btn"><svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.99962 4.97656L1.87462 0.851563L0.696289 2.0299L5.99962 7.33323L11.303 2.0299L10.1246 0.851563L5.99962 4.97656Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                                <li class="reviews__account--list">
                                    <button class="reviews__account--btn">
                                        <span class="reviews__account--export__btn"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 3.375H15.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.44531 7.125H12.5553" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M2.25 10.875H15.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.44531 14.625H12.5553" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                                                                       
                                        </span>
                                        Filter
                                        <span class="reviews__account--badge">3</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="reviews__table table-responsive">
                            <table class="reviews__table--wrapper">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                        <th>Review Rate</th>
                                        <th>Posted Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/reviews-author.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Not what I expected, needs improvement."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author3.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Jennifer Lawrence</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Absolutely love it! Best purchase ever."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author4.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Denzel Washington</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Satisfied with the purchase, good quality."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author5.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Not what I expected, needs improvement."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author6.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Average performance, could be better."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author7.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Jennifer</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Great product, excellent build quality."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author8.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Margaret</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Decent product, but has some flaws."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author9.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Jacqueline</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Good value for money, works as expected."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author1.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Not worth the price, disappointed."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author2.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Geraldine</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Outstanding product, exceeded my expectat</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author3.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Not what I expected, needs improvement."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="reviews__author--wrapper">
                                                <div class="reviews__author--check position-relative">
                                                    <input class="reviews__author--check__input" name="1" type="radio">
                                                    <span class="reviews__author--checkmark"></span>
                                                </div>
                                                <div class="reviews__author d-flex align-items-center">
                                                    <div class="reviews__author--thumb">
                                                        <img src="assets/img/dashboard/inbox-author4.png" alt="img">
                                                    </div>
                                                    <div class="reviews__author--text">
                                                        <h3 class="reviews__author--title">Marie Prohaska</h3>
                                                        <p class="reviews__author--subtitle">Product:High-Performance Laptop</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__table--body__text">"Decent product, but has some flaws."</span>
                                        </td>
                                        <td>
                                            <div class="reviews__ratting">
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" fill="#FFC600"/>
                                                    </svg>
                                                </span>
                                                <span class="reviews__ratting--icon"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.58156 2.19365L9.68156 4.39365C9.83156 4.6999 10.2316 4.99365 10.5691 5.0499L12.5628 5.38115C13.8378 5.59365 14.1378 6.51865 13.2191 7.43115L11.6691 8.98115C11.4066 9.24365 11.2628 9.7499 11.3441 10.1124L11.7878 12.0312C12.1378 13.5499 11.3316 14.1374 9.98781 13.3437L8.11906 12.2374C7.78156 12.0374 7.22531 12.0374 6.88156 12.2374L5.01281 13.3437C3.67531 14.1374 2.86281 13.5437 3.21281 12.0312L3.65656 10.1124C3.73781 9.7499 3.59406 9.24365 3.33156 8.98115L1.78156 7.43115C0.869059 6.51865 1.16281 5.59365 2.43781 5.38115L4.43156 5.0499C4.76281 4.99365 5.16281 4.6999 5.31281 4.39365L6.41281 2.19365C7.01281 0.999902 7.98781 0.999902 8.58156 2.19365Z" stroke="#61646A" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>                                                    
                                                </span>
                                                <span class="reviews__ratting--text">(4.1+)</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="reviews__date">Thu Jun 2021</span>
                                        </td>
                                        <td>
                                            <div class="reviews__action--wrapper position-relative">
                                                <button class="reviews__action--btn" aria-label="action button" type="button" aria-expanded="true" data-bs-toggle="dropdown"><svg width="3" height="17" viewBox="0 0 3 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="8.5" r="1.5" fill="currentColor"/>
                                                    <circle cx="1.5" cy="15.5" r="1.5" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu sold-out__user--dropdown " data-popper-placement="bottom-start">
                                                    <li><a data-bs-toggle="modal" href="#">Edit</a></li>
                                                    <li><a data-bs-toggle="modal" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination__area">
                            <nav class="pagination justify-content-center">
                                <ul class="pagination__menu d-flex align-items-center justify-content-center">
                                    <li class="pagination__menu--items pagination__arrow d-flex">
                                        <a href="#" class="pagination__arrow-icon link">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.583 20.5832L0.999675 10.9998L10.583 1.4165" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                                    
                                            <span class="visually-hidden">page left arrow</span>
                                        </a>
                                        <span class="pagination__arrow-icon">
                                            <svg width="3" height="22" viewBox="0 0 3 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.50098 1L1.50098 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                        </span>
                                        <a href="#" class="pagination__arrow-icon link">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.001 20.5832L1.41764 10.9998L11.001 1.4165" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>                                                                                                        
                                            <span class="visually-hidden">page left arrow</span>
                                        </a>
                                    </li>
                                    <li class="pagination__menu--items"><a href="#" class="pagination__menu--link">01</a></li>
                                    <li class="pagination__menu--items"><a href="#" class="pagination__menu--link active color-accent-1">02</a></li>
                                    <li class="pagination__menu--items"><a href="#" class="pagination__menu--link">03</a></li>
                                    <li class="pagination__menu--items pagination__arrow d-flex">
                                        <a href="#" class="pagination__arrow-icon link">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.00098 20.5832L10.5843 10.9998L1.00098 1.4165" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                                                                                      
                                            <span class="visually-hidden">page right arrow</span>
                                        </a>
                                        <span class="pagination__arrow-icon">
                                            <svg width="3" height="22" viewBox="0 0 3 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.50098 1L1.50098 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                        </span>
                                        <a href="#" class="pagination__arrow-icon link">
                                            <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.41895 20.5832L11.0023 10.9998L1.41895 1.4165" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                                                                                         
                                            <span class="visually-hidden">page right arrow</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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