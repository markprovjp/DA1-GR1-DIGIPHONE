<!-- Phần Danh mục sản phẩm -->
<div class="container-fluid container-nav ">
  <div class="container">
    <div class="row nav-list">
      <div class="col-2 nav-list-product">
        <div class="nav-list-product-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions">
          <div class="nav-list-product-item-bg-i">
            <i class="fa-solid fa-bars c-white"></i>
          </div>
          <p class="c-white nav-list-product-item-text">Danh mục sản phẩm</p>
        </div>
      </div>
      <div class="col-8 nav-list-product-hot">
        <div class="nav-list-product-hot-item-list">
          <p class="c-dark  nav-list-product-hot-item-label">Sản phẩm HOT</p>
          <div class="nav-list-product-hot-item">
            <div class="nav-list-product-hot-item-text">
              <a href="#" class="c-nav-animation text-decoration-none">OnePlus 13 Ultra</a>
              <div class="nav-list-product-hot-item-tick">
              </div>
            </div>
            <div class="nav-list-product-hot-item-text">
              <a href="#" class="c-nav-animation text-decoration-none">Galaxy S24 Ultra</a>
              <div class="nav-list-product-hot-item-tick">
              </div>
            </div>
            <div class="nav-list-product-hot-item-text">
              <a href="#" class="c-nav-animation text-decoration-none">Vivo X200 Pro Mini</a>
              <div class="nav-list-product-hot-item-tick">
              </div>
            </div>
            <div class="nav-list-product-hot-item-text">
              <a href="#" class="c-nav-animation text-decoration-none">Huawei Pura 70 Ultra</a>
              <div class="nav-list-product-hot-item-tick">
              </div>
            </div>
            <div class="nav-list-product-hot-item-text">
              <a href="#" class="c-nav-animation text-decoration-none">Lenovo Y700</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1 nav-list-product-icon">
        <div class="nav-list-product-search-icon-item ">

          <i class="fa-regular fa-user"></i>
        </div>
        <div class="nav-list-product-search-icon-item position-relative">
          <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-warning-2 ">
            0
            <!-- <span class="visually-hidden">unread messages</span> -->
          </span>
          <i class="fa-solid fa-rotate "></i>
        </div>
        <div class="nav-list-product-search-icon-item position-relative">
          <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-warning-2 ">
            0
            <!-- <span class="visually-hidden">unread messages</span> -->
          </span>
          <i class="fa-regular fa-heart"></i>
        </div>

        <div class="nav-list-product-search-icon-item position-relative">
          <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-warning-2 ">
            0
            <!-- <span class="visually-hidden">unread messages</span> -->
          </span>
          <i class="fa-solid fa-cart-shopping"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Offcanvas cho danh mục sản phẩm -->
<div class="offcanvas offcanvas-start nav-list-product-active" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header nav-list-product-active-header bg-purple-2 p-2 m-3 bdrd-5 c-orange">
    <h5 class="offcanvas-title nav-list-product-active-title" id="offcanvasWithBothOptionsLabel">Danh mục sản phẩm</h5>
    <button type="button" class="btn-close nav-list-product-active-title-button mr-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body nav-list-product-active-body">

    <!-- Nhóm: Điện thoại -->
    <div class="category-item mb-3" >
      <div class="d-flex align-items-center justify-content-between">
        <span class="c-purple " >Điện thoại</span>
        <button class="btn btn-link p-0" data-bs-toggle="collapse" data-bs-target="#phoneCategory" aria-expanded="false" aria-controls="phoneCategory">
          <i class="fa-solid fa-chevron-down"></i>
        </button>
      </div>
      <!-- Danh sách sản phẩm trong nhóm Điện thoại -->
      <div class="collapse" id="phoneCategory">
        <div class="ms-3">
          <p><a href="phone-all" class="text-decoration-none c-orange ">Tất cả</a></p>
          <p><a href="" class="text-decoration-none c-orange ">Vivo</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Samsung</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Xiaomi</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Realme</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">OnePlus</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Huawei</a></p>
        </div>
      </div>
    </div>

    <!-- Nhóm: Phụ kiện điện thoại -->
    <div class="category-item mb-3" >
      <div class="d-flex align-items-center justify-content-between">
        <span class="c-purple ">Phụ kiện điện thoại</span>
        <button class="btn btn-link p-0"data-bs-toggle="collapse" data-bs-target="#accessoryCategory" aria-expanded="false" aria-controls="accessoryCategory">
          <i class="fa-solid fa-chevron-down"></i>
        </button>
      </div>
      <!-- Danh sách sản phẩm trong nhóm Phụ kiện điện thoại -->
      <div class="collapse" id="accessoryCategory">
        <div class="ms-3">
          <p><a href="#" class="text-decoration-none c-orange">Ốp lưng</a></p>
          <p><a href="#" class="text-decoration-none c-orange">Sạc dự phòng</a></p>
          <p><a href="#" class="text-decoration-none c-orange">Tai nghe</a></p>
          <p><a href="#" class="text-decoration-none c-orange">Cáp sạc</a></p>
        </div>
      </div>
    </div>

    <!-- Nhóm: Tin tức -->
    <div class="category-item mb-3">
      <div class="d-flex align-items-center justify-content-between">
        <span class="c-purple ">Tin tức</span>
        <button class="btn btn-link p-0" data-bs-toggle="collapse" data-bs-target="#newsCategory" aria-expanded="false" aria-controls="newsCategory">
          <i class="fa-solid fa-chevron-down"></i>
        </button>
      </div>
      <!-- Danh sách bài viết trong nhóm Tin tức -->
      <div class="collapse" id="newsCategory">
        <div class="ms-3">
          <p><a href="#" class="text-decoration-none c-orange ">Tin khuyến mãi</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Sản phẩm mới</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Xu hướng công nghệ</a></p>
          <p><a href="#" class="text-decoration-none c-orange ">Đánh giá sản phẩm</a></p>
        </div>
      </div>
    </div>

  </div>
</div>