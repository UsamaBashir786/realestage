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