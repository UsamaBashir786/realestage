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
                        <h2 class="reviews__heading--title">My Package</h2>
                        <p class="reviews__heading--desc">We are glad to see you again!</p>
                    </div>
                    <div class="dashboard__reviews--wrapper">
                        <div class="reviews__table table-responsive">
                            <table class="reviews__table--wrapper package_table_wrapper">
                                <thead>
                                    <tr>
                                        <th>Current Package</th>
                                        <th>Properties remaining</th>
                                        <th>Renewal remaining</th>
                                        <th>Storage Space</th>
                                        <th>My Package</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="package__table--body--text">Free</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">0</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">3</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">2 MB / 20 MB</span>
                                        </td>
                                        <td>
                                            <span class="package__table--body--text">December 31, 2020</span>
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