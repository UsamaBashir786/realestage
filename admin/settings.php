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
                <div class="dashboard__container setting__container">
                    <div class="add__property--heading mb-30">
                        <h2 class="add__property--heading__title">Settings Page</h2>
                        <p class="add__property--desc">We are glad to see you again!</p>
                    </div>
                    <div class="setting__page--inner d-flex">
                        <div class="setting__profile my-profile">
                            <div class="setting__my--profile">
                                <h3 class="setting__profile--title">My Profile</h3>
                                <div class="setting__profile--author d-flex align-items-center">
                                    <div class="setting__profile--author__thumb">
                                        <img src="assets/img/dashboard/edit-photo.png" alt="img">
                                    </div>
                                    <div class="setting__profile--author__text">
                                        <h3 class="setting__profile--author__name">Edit your photo</h3>
                                        <div class="setting__profile--author__btn d-flex">
                                            <button class="delete">Delete</button>
                                            <button class="update">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting__profile--inner">
                                    <div class="add__listing--textarea__box mb-15">
                                        <label class="add__listing--input__label" for="bio">Bio</label>
                                        <textarea class="add__listing--textarea__field" id="bio" placeholder="Type Bio Here.........."></textarea>
                                    </div>
                                    <div class="add__listing--input__box mb-20">
                                        <label class="add__listing--input__label" for="email">Email-Address</label>
                                        <input class="add__listing--input__field" id="email" placeholder="Email-Address" type="email">
                                    </div>
                                    <div class="add__listing--input__box mb-20">
                                        <label class="add__listing--input__label" for="password">Password</label>
                                        <input class="add__listing--input__field" id="password" placeholder="Password" type="password">
                                    </div>
                                    <div class="add__listing--input__box mb-20">
                                        <label class="add__listing--input__label" for="website">Website</label>
                                        <input class="add__listing--input__field" id="website" placeholder="Website" type="text">
                                    </div>
                                    <button class="solid__btn add__property--btn">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="setting__profile edit-profile">
                            <div class="edit__profile--step">
                                <h3 class="setting__profile--title">Edit Profile</h3>
                                <div class="setting__profile--inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="name1">First Name</label>
                                                <input class="add__listing--input__field" id="name1" placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="name2">Last Name</label>
                                                <input class="add__listing--input__field" id="name2" placeholder="Last Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="add__listing--input__box">
                                                <label class="add__listing--input__label" for="user">User Name</label>
                                                <input class="add__listing--input__field" id="user" placeholder="user2413@gmail.com" type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit__profile--step">
                                <h3 class="setting__profile--title">Personal information :</h3>
                                <div class="setting__profile--inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="email2">Email Address :</label>
                                                <input class="add__listing--input__field" id="email2" placeholder="Email Address" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="contact">Contact Details :</label>
                                                <input class="add__listing--input__field" id="contact" placeholder="Contact Details " type="text">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="user2">User Name</label>
                                                <input class="add__listing--input__field" id="user2" placeholder="user2413@gmail.com" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label">Language:</label>
                                                <div class="select position-relative">
                                                    <select class="add__listing--form__select">
                                                        <option selected="" value="1">English</option>
                                                        <option value="2">Arabic</option>
                                                        <option value="3">Bangla</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label">Country:</label>
                                                <div class="select position-relative">
                                                    <select class="add__listing--form__select">
                                                        <option selected="" value="1">United</option>
                                                        <option value="2">Arabic</option>
                                                        <option value="3">Bangladesh</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="add__listing--textarea__box mb-15">
                                                <label class="add__listing--input__label" for="about">About Me</label>
                                                <textarea class="add__listing--textarea__field" id="about" placeholder="Enter About description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit__profile--button d-flex justify-content-end">
                                        <button class="edit__profile--default__btn">Restore Default</button>
                                        <button class="edit__profile--update__btn solid__btn">Update Profile</button>
                                    </div>
                                </div>
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