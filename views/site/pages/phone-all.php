<style>
  .container-breadcrumb {
    background-color: #F5F5F5;
  }

  .container-product-tag-list-tag-item-button {
    background-color: white;
    border: none;
    color: purple;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin: 5px;
    transition-duration: 0.4s;
  }

  .container-product-tag-list-tag-item-button:hover {
    background-color: #FF901C;
    color: white;
  }

  /* Style for the title */
  .title-custom {
    background-color: #6A0DAD;
    color: white;
    border: 1px solid #6A0DAD;
    font-weight: bold;
    text-align: center;
    font-size: 1.2rem;
    /* Increase font size */
    border-radius: 5px;
  }

  /* Make the list scrollable */
  .scrollable-list {
    max-height: 250px;
    /* Adjust height as needed */
    overflow-y: auto;
    border: 1px solid #6A0DAD;
    border-radius: 5px;
    /* padding: 10px; */
  }

  /* Custom scrollbar styling */
  .scrollable-list::-webkit-scrollbar {
    width: 10px;
  }

  .scrollable-list::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  .scrollable-list::-webkit-scrollbar-thumb {
    background-color: #FF901C;
    border-radius: 10px;
  }

  .scrollable-list::-webkit-scrollbar-thumb:hover {
    background: #FF901C;
  }

  /* Style for checkboxes */
  .checkbox-custom {
    width: 20px;
    height: 20px;
  }

  /* Style for product names */
  .label-custom {
    font-size: 1.1rem;
    font-weight: 500;
    color: #503EB6;
    margin-left: 8px;
  }

  /* Hover effect for list items */
  .list-group-item:hover {
    background-color: #E9D1FF;
    color: #6A0DAD;
  }

  .form-check {
    margin: 3px 9px;
  }

  /* Add smooth transition for hover effects */
  .list-group-item,
  .form-check-input,
  .label-custom {
    transition: 0.3s;
  }

  /* Sticky title */
  .sticky-title {
    position: sticky;
    top: 0;
    z-index: 1;

  }


  .container-products-title-backGround {
    padding: 10px;
  }

  .container-products-title-backGround-docking {
    line-height: 60px;
  }


  /* Định dạng chữ "Sắp xếp" */
  .docking-sort-text {
    /* font-weight: bold; */
    margin-right: 10px;
    cursor: default;
  }

  /* Định dạng cho dropdown */
  .docking-dropdown {
    position: relative;
  }

  .docking-dropdown-toggle {
    cursor: pointer;
    color: #fff;
  }

  /* Định dạng cho menu dropdown */
  .docking-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 1px 0;
    /* margin-top: 5px; */
    min-width: 150px;
    z-index: 1000;
    list-style-type: none;
  }

  /* Hiển thị dropdown khi hover */
  .docking-dropdown:hover .docking-dropdown-menu {
    display: block;
  }

  /* Định dạng cho từng item trong dropdown */
  .docking-dropdown-item {
    display: block;
    /* padding: 8px 15px; */
    padding: 5px;
    color: #333;
    text-decoration: none;
  }

  .docking-dropdown-item:hover {
    background-color: #f0f0f0;
    color: #000;
  }
</style>

<div class="container container-breadcrumb mt-3 mb-3 p-0">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Điện thoại </li>
    </ol>
  </nav>
</div>


<div class="container container-phone-all-banner-sale-2 p-0 mt-4 mb-4">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="#">
        <img src="assets/images/home-m55-10190-12-11.webp" alt="banner-sale-1" class="w-100 bdrd-5">
      </a>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="#">
        <img src="assets/images/home-Galaxy-S24-Ultra-gia-giam-sau.webp" alt="banner-sale-2"
          class="w-100 bdrd-5">
      </a>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <a href="#">
        <img src="assets/images/realme-13+-5g-home-11-11.webp" alt="banner-sale-3" class="w-100 bdrd-5">
      </a>
    </div>

  </div>
</div>



<div class="container container-product-tag-list-tag d-flex c-purple p-0">
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='samsung.php'">Samsung</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='oppo.php'">Oppo</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='xiaomi.php'">Xiaomi</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='realme.php'">Realme</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='vivo.php'">Vivo</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='oneplus.php'">Oneplus</button>
  </div>
  <div class="container-product-tag-list-tag-item">
    <button class="container-product-tag-list-tag-item-button" onclick="location.href='huawei.php'">Huawei</button>
  </div>
</div>




<div class="container container-products p-0 mt-2">
  <div class="row">
    <div class="col-9">
      <div class="container-products-title-backGround w-100 bg-purple-2 bdrd-5 position-relative ">
        <h3 class="c-white">Tất cả sản phẩm</h3>
        <div class="container-products-title-backGround-docking mr-4 position-absolute top-0 end-0 d-flex">
          <p class="docking-sort-text c-white"><i class="fa-solid fa-arrow-down-wide-short"></i> Sắp xếp</p>
          <div class="docking-dropdown">
            <span class="docking-dropdown-toggle">Mặc định<i class="fa-solid fa-chevron-down"></i></span>
            <ul class="docking-dropdown-menu">
              <li><a class="docking-dropdown-item" href="#">A-Z</a></li>
              <li><a class="docking-dropdown-item" href="#">Z-A</a></li>
              <li><a class="docking-dropdown-item" href="#">Giá thấp đến cao</a></li>
              <li><a class="docking-dropdown-item" href="#">Giá cao đến thấp</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">

               <div class="col-3 container-products-list">
          <div class="container-product-sale-list-product-item mt-2 mb-2">
            <div class="container-product-sale-list-product-item-BackGround position-relative">
              <img src="assets/images/vivo-x200-pro---xanh_1729834401.jpg" alt="" class="w-100 " />
              <div class="container-product-sale-list-product-item-info-love position-absolute top-0 start-0 toggle-icon-button-love
                          toggle-icon-button-love">
                <i class="fa-regular fa-heart c-orange"></i>
              </div>
        
              <div class="container-product-sale-list-product-item-info-discount position-absolute top-0 end-0">
                <span class="c-white bg-warning-2 bdrd-5">-10%</span>
              </div>
              <div class="container-product-sale-list-product-item-info">
                <h5 class="c-dark color-hover-orange container-product-sale-list-product-item-info-name" data-name="Vivo X200 Pro 5G Xách tay">
                  Vivo X200 Pro 5G Xách tay</h5>
                <div class="container-product-sale-list-product-item-info-price mt-3 d-flex  justify-content-between">
                  <h3 class="c-red " data-price="28990000"><b>28.990.000₫</b></h3>
        
                  <div class="container-product-sale-list-product-item-info-addCart ">
                    <button class="bg-purple-2">
                      <i class="fa-solid fa-cart-plus c-white"></i>
                    </button>
                  </div>
                </div>
                <del class="c-sliver ">Giảm 1.000.000đ</del>
        
                <div class="container-product-sale-list-product-item-info-describe mt-2 mb-2 ">
                  Củ sạc nhanh Samsung 25W Type C chính hãng
                </div>
                <div class="container-product-sale-list-product-item-info-vote  d-flex  justify-content-between">
                  <div class="container-product-sale-list-product-item-info-vote-star c-orange">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="container-product-sale-list-product-item-info-vote-compare c-purple">
                    <i class="fa-solid fa-code-compare"></i>
                    <span>So sánh</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-3">
      <div id="selected-filters" class="d-flex flex-wrap"></div>
      <a href="#" class="list-group-item   title-custom sticky-title " aria-current="true">
        Loại sản phẩm
      </a>
      <div class="list-group scrollable-list">
        <!-- Title with purple background and border -->

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="VivoX200Pro" value="">
          <label class="form-check-label label-custom" for="VivoX200Pro">
            Vivo X200 Pro
          </label>
        </div>


      </div>



      <a href="#" class="list-group-item   title-custom sticky-title mt-3" aria-current="true">
        Chọn mức giá
      </a>
      <div class="list-group scrollable-list">
        <!-- Title with purple background and border -->

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="2trieu" value="">
          <label class="form-check-label label-custom" for="2trieu">
            Dưới 2 triệu
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="5trieu" value="">
          <label class="form-check-label label-custom" for="5trieu">
            Dưới 5 triệu
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="8trieu" value="">
          <label class="form-check-label label-custom" for="8trieu">
            Dưới 8 triệu
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="10trieu" value="">
          <label class="form-check-label label-custom" for="10trieu">
            Dưới 10 triệu
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="20trieu" value="">
          <label class="form-check-label label-custom" for="20trieu">
            Dưới 20 triệu
          </label>
        </div>

      </div>

      <a href="#" class="list-group-item   title-custom sticky-title mt-3" aria-current="true">
        Tính năng nổi bật
      </a>
      <div class="list-group scrollable-list">
        <!-- Title with purple background and border -->

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="pinKhung" value="">
          <label class="form-check-label label-custom" for="pinKhung">
            Pin khủng
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="cauHinhManh" value="">
          <label class="form-check-label label-custom" for="cauHinhManh">
            Cấu hình mạnh
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="camera" value="">
          <label class="form-check-label label-custom" for="camera">
            Camera chất lượng
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" id="liveTrym" value="">
          <label class="form-check-label label-custom" for="liveTrym">
            Live trym
          </label>
        </div>

        <!-- Checkbox for different phone models -->
        <div class="form-check">
          <input class="form-check-input checkbox-custom" type="checkbox" value="" id="phoneModelCheckbox">
          <label class="form-check-label label-custom" for="phoneModelCheckbox">
            Mượt như Ip mà không phải ip
          </label>
        </div>

      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    // When a checkbox is clicked
    $('.form-check-input').on('change', function() {
      const filterId = $(this).attr('id');
      const filterLabel = $(this).siblings('label').text();

      if ($(this).is(':checked')) {
        // Add selected filter button
        $('#selected-filters').append(`
        <button type="button" class="btn btn-danger btn-sm m-1 filter-btn" data-filter-id="${filterId}">
          ${filterLabel} <span class="ms-1">&times;</span>
        </button>
      `);
      } else {
        // Remove filter button if unchecked
        $(`button[data-filter-id="${filterId}"]`).remove();
      }
    });

    // When the filter button (with 'x') is clicked
    $('#selected-filters').on('click', '.filter-btn', function() {
      const filterId = $(this).data('filter-id');

      // Uncheck the corresponding checkbox
      $(`#${filterId}`).prop('checked', false);

      // Remove the filter button
      $(this).remove();
    });
  });



  
  $(document).ready(function() {
  $('.docking-dropdown-item').on('click', function(event) {
    event.preventDefault();
    let sortType = $(this).text();
    let products = $('.col-3.container-products-list > .container-product-sale-list-product-item').get(); // Get product items

    products.sort(function(a, b) {
      let nameA = $(a).find('.container-product-sale-list-product-item-info-name').data('name').toUpperCase();
      let nameB = $(b).find('.container-product-sale-list-product-item-info-name').data('name').toUpperCase();
      let priceA = parseInt($(a).find('.container-product-sale-list-product-item-info-price h3').data('price'));
      let priceB = parseInt($(b).find('.container-product-sale-list-product-item-info-price h3').data('price'));

      if (sortType === 'A-Z') {
        return nameA.localeCompare(nameB);
      } else if (sortType === 'Z-A') {
        return nameB.localeCompare(nameA);
      } else if (sortType === 'Giá thấp đến cao') {
        return priceA - priceB;
      } else if (sortType === 'Giá cao đến thấp') {
        return priceB - priceA;
      }
    });

    // Empty `.container-products-list` and re-add sorted products within their `.col-3` containers
    $('.container-products-list').empty();
    $.each(products, function(index, product) {
      $('.container-products-list').append($(product).closest('.col-3')); // Re-append each sorted product within its original `.col-3`
    });
  });
});


</script>