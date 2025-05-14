<?php
require_once '../config/db.php';

// Initialize variables
$errors = [];
$success = '';
?>

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

    // Toggle custom input fields
    function toggleCustomInput(selectId, inputId) {
      const select = document.getElementById(selectId);
      const input = document.getElementById(inputId);
      if (select.value === 'Custom') {
        input.style.display = 'block';
      } else {
        input.style.display = 'none';
        input.value = '';
      }
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
          <button class="predictive__search--button" aria-label="search button"><svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512">
              <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
            </svg></button>
        </form>
      </div>
      <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
        <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443" viewBox="0 0 512 512">
          <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
        </svg>
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
          <!-- Display errors or success message -->
          <?php if (!empty($errors)): ?>
            <div class="error" style="color: red; margin-bottom: 20px;">
              <?php foreach ($errors as $error): ?>
                <p><?php echo htmlspecialchars($error); ?></p>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($success): ?>
            <div class="success" style="color: green; margin-bottom: 20px;">
              <p><?php echo htmlspecialchars($success); ?></p>
            </div>
          <?php endif; ?>
          <form class="add__property--form" method="POST" action="" enctype="multipart/form-data">
            <div class="add__property__inner d-flex">
              <div class="add__property--step left">
                <div class="add__property--step__inner">
                  <div class="add__property--box mb-30">
                    <h3 class="add__property--box__title mb-20">Create Listing</h3>
                    <div class="row">
                      <div class="col-12">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="title">Title</label>
                          <input class="add__listing--input__field" id="title" name="title" placeholder="Your Name" type="text" value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="add__listing--textarea__box mb-15">
                          <label class="add__listing--input__label" for="description">Description</label>
                          <textarea class="add__listing--textarea__field" id="description" name="description" placeholder="Description"><?php echo isset($_POST['description']) ? htmlspecialchars($_POST['description']) : ''; ?></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">Type</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" id="type" name="type" onchange="toggleCustomInput('type', 'custom_type')">
                              <option value="Apartments">Apartments</option>
                              <option value="Office">Office</option>
                              <option value="Condo">Condo</option>
                              <option value="Apartment">Apartment</option>
                              <option value="House">House</option>
                              <option value="Single Family">Single Family</option>
                              <option value="Land">Land</option>
                              <option value="Custom">Custom</option>
                            </select>
                            <input class="add__listing--input__field" id="custom_type" name="custom_type" style="display: none; margin-top: 10px;" placeholder="Enter custom type" type="text" value="<?php echo isset($_POST['custom_type']) ? htmlspecialchars($_POST['custom_type']) : ''; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">Status</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" id="status" name="status">
                              <option value="All Cities">All Cities</option>
                              <option value="Processing">Processing</option>
                              <option value="Published">Published</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="price">Price</label>
                          <input class="add__listing--input__field" id="price" name="price" placeholder="Price" type="text" value="<?php echo isset($_POST['price']) ? htmlspecialchars($_POST['price']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="area">Area</label>
                          <input class="add__listing--input__field" id="area" name="area" placeholder="Description" type="text" value="<?php echo isset($_POST['area']) ? htmlspecialchars($_POST['area']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">Rooms</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" id="rooms" name="rooms" onchange="toggleCustomInput('rooms', 'custom_rooms')">
                              <option value="1">1 Room</option>
                              <option value="2">2 Rooms</option>
                              <option value="3">3 Rooms</option>
                              <option value="4">4 Rooms</option>
                              <option value="5">5 Rooms</option>
                              <option value="Custom">Custom</option>
                            </select>
                            <input class="add__listing--input__field" id="custom_rooms" name="custom_rooms" style="display: none; margin-top: 10px;" placeholder="Enter custom rooms" type="text" value="<?php echo isset($_POST['custom_rooms']) ? htmlspecialchars($_POST['custom_rooms']) : ''; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="add__property--box">
                    <h3 class="add__property--box__title mb-20">Location</h3>
                    <div class="row">
                      <div class="col-12">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="address">Address</label>
                          <input class="add__listing--input__field" id="address" name="address" placeholder="Your Name" type="text" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="add__listing--textarea__box mb-15">
                          <label class="add__listing--input__label" for="county_state">County / State</label>
                          <textarea class="add__listing--textarea__field" id="county_state" name="county_state" placeholder="County / State"><?php echo isset($_POST['county_state']) ? htmlspecialchars($_POST['county_state']) : ''; ?></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">Type</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" name="type_location">
                              <option value="Apartments">Apartments</option>
                              <option value="Office">Office</option>
                              <option value="Condo">Condo</option>
                              <option value="Apartment">Apartment</option>
                              <option value="House">House</option>
                              <option value="Single Family">Single Family</option>
                              <option value="Land">Land</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">City</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" name="city">
                              <option value="New York">New York</option>
                              <option value="San Diego">San Diego</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Spain">Spain</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Turkey">Turkey</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="neighborhood">Neighborhood</label>
                          <input class="add__listing--input__field" id="neighborhood" name="neighborhood" placeholder="Neighborhood" type="text" value="<?php echo isset($_POST['neighborhood']) ? htmlspecialchars($_POST['neighborhood']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label" for="zip">Zip</label>
                          <input class="add__listing--input__field" id="zip" name="zip" placeholder="Zip" type="text" value="<?php echo isset($_POST['zip']) ? htmlspecialchars($_POST['zip']) : ''; ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="add__listing--input__box mb-20">
                          <label class="add__listing--input__label">Country</label>
                          <div class="select position-relative">
                            <select class="add__listing--form__select" id="country" name="country" onchange="toggleCustomInput('country', 'custom_country')">
                              <option value="Portugal">Portugal</option>
                              <option value="Greece">Greece</option>
                              <option value="United">United</option>
                              <option value="Spain">Spain</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Custom">Custom</option>
                            </select>
                            <input class="add__listing--input__field" id="custom_country" name="custom_country" style="display: none; margin-top: 10px;" placeholder="Enter custom country" type="text" value="<?php echo isset($_POST['custom_country']) ? htmlspecialchars($_POST['custom_country']) : ''; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="add__listing--google__map mb-10">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19868.373358018045!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1699801088151!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="add__property--step">
                <div class="add__property--box mb-30">
                  <h3 class="add__property--box__title mb-20">Detailed Information</h3>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="property_id">Property ID</label>
                        <input class="add__listing--input__field" id="property_id" name="property_id" placeholder="Property ID" type="text" value="<?php echo isset($_POST['property_id']) ? htmlspecialchars($_POST['property_id']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="area_size">Area Size</label>
                        <input class="add__listing--input__field" id="area_size" name="area_size" placeholder="Area Size" type="text" value="<?php echo isset($_POST['area_size']) ? htmlspecialchars($_POST['area_size']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="size_prefix">Size Prefix</label>
                        <input class="add__listing--input__field" id="size_prefix" name="size_prefix" placeholder="Size Prefix" type="text" value="<?php echo isset($_POST['size_prefix']) ? htmlspecialchars($_POST['size_prefix']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="land_area">Land Area</label>
                        <input class="add__listing--input__field" id="land_area" name="land_area" placeholder="Land Area" type="text" value="<?php echo isset($_POST['land_area']) ? htmlspecialchars($_POST['land_area']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="land_area_postfix">Land Area Size Postfix</label>
                        <input class="add__listing--input__field" id="land_area_postfix" name="land_area_postfix" placeholder="Land Area Size Postfix" type="text" value="<?php echo isset($_POST['land_area_postfix']) ? htmlspecialchars($_POST['land_area_postfix']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="bedrooms">Bedrooms</label>
                        <input class="add__listing--input__field" id="bedrooms" name="bedrooms" placeholder="Bedrooms" type="text" value="<?php echo isset($_POST['bedrooms']) ? htmlspecialchars($_POST['bedrooms']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="bathrooms">Bathrooms</label>
                        <input class="add__listing--input__field" id="bathrooms" name="bathrooms" placeholder="Bathrooms" type="text" value="<?php echo isset($_POST['bathrooms']) ? htmlspecialchars($_POST['bathrooms']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="garages">Garages</label>
                        <input class="add__listing--input__field" id="garages" name="garages" placeholder="Garages" type="text" value="<?php echo isset($_POST['garages']) ? htmlspecialchars($_POST['garages']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="garages_size">Garages Size</label>
                        <input class="add__listing--input__field" id="garages_size" name="garages_size" placeholder="Garages Size" type="text" value="<?php echo isset($_POST['garages_size']) ? htmlspecialchars($_POST['garages_size']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="year_built">Year Built</label>
                        <input class="add__listing--input__field" id="year_built" name="year_built" placeholder="Year Built" type="text" value="<?php echo isset($_POST['year_built']) ? htmlspecialchars($_POST['year_built']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="video_url">Video URL</label>
                        <input class="add__listing--input__field" id="video_url" name="video_url" placeholder="Video URL" type="text" value="<?php echo isset($_POST['video_url']) ? htmlspecialchars($_POSTmi['video_url']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="virtual_tour">360° Virtual Tour</label>
                        <input class="add__listing--input__field" id="virtual_tour" name="virtual_tour" placeholder="360° Virtual Tour" type="text" value="<?php echo isset($_POST['virtual_tour']) ? htmlspecialchars($_POST['virtual_tour']) : ''; ?>">
                      </div>
                    </div>
                  </div>
                  <h3 class="add__property--box__title pt-0">Amenities and Features</h3>
                  <div class="advance__apeartment--inner d-flex justify-content-between">
                    <ul class="interior__amenities--check">
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check1">Air Conditioning</label>
                        <input class="interior__amenities--check__input" id="check1" name="amenities[]" type="checkbox" value="Air Conditioning" <?php echo isset($_POST['amenities']) && in_array('Air Conditioning', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check2">Swimming Pool</label>
                        <input class="interior__amenities--check__input" id="check2" name="amenities[]" type="checkbox" value="Swimming Pool" <?php echo isset($_POST['amenities']) && in_array('Swimming Pool', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities-- condolabel" for="check3">Outdoor Shower</label>
                        <input class="interior__amenities--check__input" id="check3" name="amenities[]" type="checkbox" value="Outdoor Shower" <?php echo isset($_POST['amenities']) && in_array('Outdoor Shower', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check4">Lawn</label>
                        <input class="interior__amenities--check__input" id="check4" name="amenities[]" type="checkbox" value="Lawn" <?php echo isset($_POST['amenities']) && in_array('Lawn', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                    </ul>
                    <ul class="interior__amenities--check">
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check5">Barbeque</label>
                        <input class="interior__amenities--check__input" id="check5" name="amenities[]" type="checkbox" value="Barbeque" <?php echo isset($_POST['amenities']) && in_array('Barbeque', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check6">Washer</label>
                        <input class="interior__amenities--check__input" id="check6" name="amenities[]" type="checkbox" value="Washer" <?php echo isset($_POST['amenities']) && in_array('Washer', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check7">Microwave</label>
                        <input class="interior__amenities--check__input" id="check7" name="amenities[]" type="checkbox" value="Microwave" <?php echo isset($_POST['amenities']) && in_array('Microwave', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check8">Dryer</label>
                        <input class="interior__amenities--check__input" id="check8" name="amenities[]" type="checkbox" value="Dryer" <?php echo isset($_POST['amenities']) && in_array('Dryer', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                    </ul>
                    <ul class="interior__amenities--check">
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check9">TV Cable</label>
                        <input class="interior__amenities--check__input" id="check9" name="amenities[]" type="checkbox" value="TV Cable" <?php echo isset($_POST['amenities']) && in_array('TV Cable', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check10">Refrigerator</label>
                        <input class="interior__amenities--check__input" id="check10" name="amenities[]" type="checkbox" value="Refrigerator" <?php echo isset($_POST['amenities']) && in_array('Refrigerator', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check11">Laundry</label>
                        <input class="interior__amenities--check__input" id="check11" name="amenities[]" type="checkbox" value="Laundry" <?php echo isset($_POST['amenities']) && in_array('Laundry', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check12">Gym</label>
                        <input class="interior__amenities--check__input" id="check12" name="amenities[]" type="checkbox" value="Gym" <?php echo isset($_POST['amenities']) && in_array('Gym', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                    </ul>
                    <ul class="interior__amenities--check">
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check13">Front yard</label>
                        <input class="interior__amenities--check__input" id="check13" name="amenities[]" type="checkbox" value="Front yard" <?php echo isset($_POST['amenities']) && in_array('Front yard', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check14">WiFi</label>
                        <input class="interior__amenities--check__input" id="check14" name="amenities[]" type="checkbox" value="WiFi" <?php echo isset($_POST['amenities']) && in_array('WiFi', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check15">Sauna</label>
                        <input class="interior__amenities--check__input" id="check15" name="amenities[]" type="checkbox" value="Sauna" <?php echo isset($_POST['amenities']) && in_array('Sauna', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                      <li class="interior__amenities--check__list">
                        <label class="interior__amenities--check__label" for="check16">Wine cellar</label>
                        <input class="interior__amenities--check__input" id="check16" name="amenities[]" type="checkbox" value="Wine cellar" <?php echo isset($_POST['amenities']) && in_array('Wine cellar', $_POST['amenities']) ? 'checked' : ''; ?>>
                        <span class="interior__amenities--checkmark"></span>
                      </li>
                    </ul>
                  </div>
                  <div class="add__listing--input__box mb-20">
                    <label class="add__listing--input__label" for="custom_amenities">Custom Amenities (comma-separated)</label>
                    <input class="add__listing--input__field" id="custom_amenities" name="custom_amenities" placeholder="e.g., Balcony, Fireplace" type="text" value="<?php echo isset($_POST['custom_amenities']) ? htmlspecialchars($_POST['custom_amenities']) : ''; ?>">
                  </div>
                </div>
                <div class="add__property--box mb-30">
                  <h3 class="add__property--box__title mb-20">Property media</h3>
                  <div class="property__media--wrapper d-flex justify-content-between">
                    <div class="browse__file--area position-relative">
                      <button class="browse__file--btn">Choose File</button>
                      <input class="browse__file--input__field" type="file" name="media_file[]" multiple>
                    </div>
                    <div class="browse__file--area position-relative">
                      <button class="browse__file--btn">Select Attachment</button>
                      <input class="browse__file--input__field" type="file" name="attachment">
                    </div>
                  </div>
                </div>
                <div class="add__property--box">
                  <h3 class="add__property--box__title mb-20">Floor Plans</h3>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_description">Plan Description</label>
                        <input class="add__listing--input__field" id="plan_description" name="plan_description" placeholder="Property ID" type="text" value="<?php echo isset($_POST['plan_description']) ? htmlspecialchars($_POST['plan_description']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_bedrooms">Plan Bedrooms</label>
                        <input class="add__listing--input__field" id="plan_bedrooms" name="plan_bedrooms" placeholder="Plan Bedrooms" type="text" value="<?php echo isset($_POST['plan_bedrooms']) ? htmlspecialchars($_POST['plan_bedrooms']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_bathrooms">Plan Bathrooms</label>
                        <input class="add__listing--input__field" id="plan_bathrooms" name="plan_bathrooms" placeholder="Plan Bedrooms" type="text" value="<?php echo isset($_POST['plan_bathrooms']) ? htmlspecialchars($_POST['plan_bathrooms']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_price">Plan Price</label>
                        <input class="add__listing--input__field" id="plan_price" name="plan_price" placeholder="Plan Price" type="text" value="<?php echo isset($_POST['plan_price']) ? htmlspecialchars($_POST['plan_price']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_size_prefix">Size Prefix</label>
                        <input class="add__listing--input__field" id="plan_size_prefix" name="plan_size_prefix" placeholder="Size Prefix" type="text" value="<?php echo isset($_POST['plan_size_prefix']) ? htmlspecialchars($_POST['plan_size_prefix']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_size">Plan Size</label>
                        <input class="add__listing--input__field" id="plan_size" name="plan_size" placeholder="Plan Size" type="text" value="<?php echo isset($_POST['plan_size']) ? htmlspecialchars($_POST['plan_size']) : ''; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="add__listing--input__box mb-20">
                        <label class="add__listing--input__label" for="plan_image">Plan Image</label>
                        <input class="add__listing--input__field" id="plan_image" name="plan_image" placeholder="Plan Image" type="text" value="<?php echo isset($_POST['plan_image']) ? htmlspecialchars($_POST['plan_image']) : ''; ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="solid__btn add__property--btn" type="submit" name="upload_property">Upload Property</button>
          </form>
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