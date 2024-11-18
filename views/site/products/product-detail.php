<div class="container container-breadcrumb mt-3 mb-3 p-0">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm </li>
    </ol>
  </nav>
</div>


<style>
  .container-product-detail-image-big img {
    border-radius: 10px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
  }

  .small-image-slider .small-img {
    width: 100%;
    /* height: 150px; */
    cursor: pointer;
    margin: 5px;
    border: 1px solid transparent;
    /* Viền mặc định */
    border-radius: 5px;
    transition: transform 0.3s ease, border-color 0.3s ease;
  }

  .small-image-slider .small-img:hover {
    /* transform: scale(1.1); */
    border-color: purple;
    /* Viền tím khi hover */
  }

  .small-image-slider .slick-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container-product-detail-information-price-main {
    font-weight: bold;
    font-size: 30px;
  }



  .container-product-detail-information-options-price-list .btn {
    border: 2px solid transparent;
    border-radius: 0.25rem;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    line-height: 1;
    transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out;
  }

  .container-product-detail-information-options-price-list .btn.active {
    border-color: #6F42C1;
    position: relative;
  }

  .container-product-detail-information-options-price-list .btn.active::after {
    content: "\f00c";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #6F42C1;
    position: absolute;
    top: 0.15rem;
    right: 0.25rem;
    font-size: 1rem;
  }

  .container-product-detail-information-gift-title {
    margin-left: 20px;
    transform: translateY(-10px);
  }

  .container-product-detail-information-gift-list {
    padding: 30px;
    border: 1px solid #DDDDDD;
    border-radius: 5px;
  }

  /*  */
  .color-circle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: border-color 0.2s;
  }

  .color-circle.selected {
    border-color: #000;
  }

  .container-product-detail-information-button button {
    outline: none;
    border: none;
  }

  /*  */

  .group-list-policy,
  .group-list-you-may-like {
    border: 1px solid #6F42C1;

  }

  .group-list-policy-title,
  .group-list-you-may-like-title {
    padding: 10px;
    height: auto;
  }

  .group-list-policy-content,
  .group-list-you-may-like-content {
    padding: 10px;
  }

  .group-list-policy-content-item {}

  .group-list-policy-content-item img {
    width: 15%;
  }

  .group-list-you-may-like-content-item img {
    width: 20%;
  }

  .group-list-you-may-like-content-item-name-price del {
    font-size: 13px;
    color: #DDDDDD;
  }

  .container-product-tab-description-and-return-policy {

    /* Tab Titles */
    .tab-titles {
      display: flex;
    }

    .tab-title {
      cursor: pointer;
      color: #6a1b9a;
      padding-bottom: 10px;
      position: relative;
      transform: translateY(10px);
    }

    .active-tab {
      border-bottom: 3px solid #6a1b9a;
    }

    /* Separator */
    .separator {
      margin: 0;
    }

    /* Tab Content */
    .tab-contents .tab-content {
      display: none;
    }

    .tab-contents .active-content {
      display: block;
    }

    /* Text Wrapper */
    .text-wrapper {
      max-height: 150px;
      overflow: hidden;
      position: relative;
    }

    .text-wrapper.expanded {
      max-height: none;
      overflow: visible;
    }

    .fade-overlay {
      display: none;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 30px;
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), #fff);
    }

    /* Toggle Button */
    .toggle-btn {
      display: block;
      margin: 10px auto;
      padding: 8px 20px;
      background-color: #6a1b9a;
      color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 14px;
      transition: background-color 0.3s;
    }

    .toggle-btn:hover {
      background-color: #531275;
    }
  }


  /*  */

  .container-specifications-product-detail-title {
    transform: translateY(5px);
  }

  .container-specifications-product-detail-table-button {
    border: none;
    border-radius: 5px;
    padding: 10px;

  }

  .container-comment {
    .container-comment-title h4 {
    }

    .container-comment-hr {
      border-top: 2px solid #4267B2;
    }

    .comment-box {
      margin-top: 10px;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 50px;
      background-color: #f0f2f5;
    }

    .comment-input {
      border: none;
      border-radius: 50px;
      background-color: #f0f2f5;
      padding: 10px 15px;
    }

    .comment-input:focus {
      outline: none;
      background-color: #ffffff;
    }

    .comment-list {
      list-style-type: none;
      padding: 0;
    }

    .comment-item {
      display: flex;
      flex-direction: column;
      padding: 10px;
      margin-top: 10px;
      border-radius: 10px;
      background-color: #f8f9fa;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .comment-author {
      font-weight: bold;
      color: #4267B2;
    }

    .comment-text,
    .reply-text {
      margin-top: 5px;
      color: #333;
    }

    .reply-button {
      color: #4267B2;
      cursor: pointer;
      font-size: 0.9rem;
    }

    .reply-list {
      padding-left: 30px;
    }

    .reply-box {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .reply-input {
      flex: 1;
      padding: 5px 10px;
      border-radius: 20px;
      border: 1px solid #ddd;
      background-color: #f0f2f5;
    }

    .reply-submit-button {
      margin-left: 10px;
      color: #fff;
      background-color: #4267B2;
      border: none;
      padding: 5px 15px;
      border-radius: 20px;
    }
  }
</style>
<div class="container container-product-detail mt-2 pt-3 pb-3 bg-white bdrd-5">
  <div class="row">
    <div class="col-4 container-product-detail-image">
      <div class="container-product-detail-image-big position-relative">
        <img id="main-image" src="assets/images/vivo-x200-pro---xanh_1729834414.jpg.jpg" alt="main" class="w-100 rounded-3" />
        <div class="container-product-detail-image-big-love toggle-icon-button-love position-absolute top-0 start-0 m-2">
          <i class="fa-regular fa-heart c-orange fsz-25-i"></i>
        </div>
        <div class="container-product-detail-image-big-description-sort position-absolute top-0 end-0 m-2">
          <span class="bg-red-2 c-white p-2 bdrd-5">Hàng chính hãng</span>
        </div>
      </div>
      <div class="container-product-detail-image-list-small mt-3">
        <!-- Slider ảnh nhỏ -->
        <div class="small-image-slider">
          <img src="assets/images/vivo-x200-pro---xanh_1729834414.jpg.jpg" alt="small" class="small-img">
          <img src="assets/images/vivo-x200-pro---trắng_1729834413.jpg.jpg" alt="small" class="small-img">
          <img src="assets/images/vivo-x200-pro---den_1729834413.jpg.jpg" alt="small" class="small-img">
          <img src="assets/images/vivo-x200-pro---titan_1729834414.jpg.jpg" alt="small" class="small-img">

        </div>
      </div>
    </div>
    <div class="col-5 container-product-detail-information">
      <!-- Thông tin sản phẩm -->
      <h3 class="fsz-25 c-black"><b>Vivo X200 Pro</b></h3>
      <div class="container-product-detail-information-trademark">
        <span class="fsz-20 c-dark">Thương hiệu: </span>
        <span class="fsz-20 c-purple ">Vivo</span>
        <span class="fsz-20 c-dark ">|</span>
        <span class="fsz-20 c-dark ">Tình trạng: </span>
        <span class="fsz-20 c-purple ">Còn hàng </span>

      </div>
      <div class="container-product-detail-information-price  mt-3">
        <span>Giá:</span>
        <span class="fsz-25 c-red container-product-detail-information-price-main">
          38.000.000₫
        </span>
        <div class="container-product-detail-information-price-others">
          <span class="c-dark ">Giá thị trường: </sp>
            <del class="c-orange  ">42.000.000₫</del>
            <span>Tiết kiệm: </span>
            <span class="c-red">2.000.000₫</span>
            <span>So với giá thị trường </span>
        </div>
      </div>
      <div class="container-product-detail-information-options-price mt-3 d-flex">
        <div class="container-product-detail-information-options-price-list">
          <button type="button" class="btn active">
            256GB
            <div class="container-product-detail-information-options-price-list-detail">
              <span class="c-red">33.990.000₫</span>
            </div>
          </button>
        </div>
        <div class="container-product-detail-information-options-price-list ml-2 mr-2">
          <button type="button" class="btn">
            512GB
            <div class="container-product-detail-information-options-price-list-detail">
              <span class="c-red">35.990.000₫</span>
            </div>
          </button>
        </div>
        <div class="container-product-detail-information-options-price-list">
          <button type="button" class="btn">
            1TB
            <div class="container-product-detail-information-options-price-list-detail">
              <span class="c-red">38.990.000₫</span>
            </div>
          </button>
        </div>
      </div>
      <div class="container-product-detail-information-gift mt-4 position-relative">
        <div class="container-product-detail-information-gift-title position-absolute top-0 start-0">

          <span class="fsz-20 c-white bg-red-2 p-2 bdrd-5 "><i class="fa-solid fa-gift mr-2 fa-beat"></i> Quà tặng và Khuyến mãi</span>
        </div>
        <div class="container-product-detail-information-gift-list">
          <span>
            <i class="fa-solid fa-circle-check c-green "></i>
            <span class="fsz-20 c-dark">Mua Online: Giao hàng tận nhà- Nhận hàng thanh toán</span>
          </span>
        </div>
      </div>
      <div class="container-product-detail-information-status mt-3">
        <span class="fsz-20 c-dark">Tình trạng: </span>
        <span class="fsz-20 c-purple">Còn hàng <i class="fa-solid fa-circle-check c-green "></i></span>
      </div>
      <div class="container-product-detail-information-color mt-3">
        <span class="fsz-20 c-dark">Màu sắc: </span>
        <span class="fsz-20 c-purple selected-color">Xanh</span>
        <div class="container-product-detail-information-color-list d-flex mt-2">
          <!-- Các ô màu sẽ được thêm tự động ở đây -->
        </div>
      </div>
      <div class="container-product-detail-information-button">
        <button class=" bg-purple-2 c-white fsz-20 bdrd-5 p-2 mt-3 w-100"><i class="fa-solid fa-cart-plus fa-bounce"></i></i> MUA NGAY <br>
          <span>Giao hàng tận nơi hoặc nhận ngay tại cửa hàng</span>
        </button>
      </div>
    </div>
    <div class="col-3 ">
      <div class="group-list-policy bdrd-5">
        <div class="group-list-policy-title bg-purple-2 ">
          <h5><b class="c-white">Chính sách của chúng tôi</b></h5>
        </div>
        <div class="group-list-policy-content d-block">
          <div class="group-list-policy-content-item">
            <img src="assets/images/ser_1.webp" class="" alt="">
            <span class="fsz-20 c-dark">Miễn phí vận chuyển tại TP.HCM
            </span>
          </div>
          <hr>
          <div class="group-list-policy-content-item">
            <img src="assets/images/ser_2.webp" class="" alt="">
            <span class="fsz-20 c-dark">Nhận hàng thanh toán</span>
          </div>
          <hr>
          <div class="group-list-policy-content-item">
            <img src="assets/images/ser_3.webp" class="" alt="">
            <span class="fsz-20 c-dark">Bảo hành chính hãng</span>
          </div>
          <hr>
          <div class="group-list-policy-content-item">
            <img src="assets/images/ser_4.webp" class="" alt="">
            <span class="fsz-20 c-dark">Hỗ trợ trả góp 0%</span>
          </div>
        </div>
      </div>
      <div class="group-list-you-may-like bdrd-5 mt-4">
        <div class="group-list-you-may-like-title bg-purple-2 ">
          <h5><b class="c-white">Sản phẩm bạn có thể thích</b></h5>
        </div>
        <div class="group-list-you-may-like-content d-block">
          <div class="group-list-you-may-like-content-item d-flex">
            <img src="assets/images/untitled-3_1693218036.gif.gif" class="" alt="">
            <div class="group-list-you-may-like-content-item-name-price mt-2">
              <span class="fsz-20 c-dark">Tai nghe bluetooth BW74</span>
              <span class="fsz-20 c-red">1.200.000₫ </span><del>1.500.000₫</del>
            </div>
          </div>
          <hr>
          <div class="group-list-you-may-like-content-item d-flex">
            <img src="assets/images/mi-band-6_1617416369.jpg" class="" alt="">
            <div class="group-list-you-may-like-content-item-name-price mt-2">
              <span class="fsz-20 c-dark">Xiaomi Mi Band 6 chính hãng</span>
              <span class="fsz-20 c-red">1.200.000₫ </span><del>1.500.000₫</del>
            </div>
          </div>
          <hr class="">
          <div class="group-list-you-may-like-content-item d-flex">
            <img src="assets/images/mi-band-6_1617416369.jpg" class="" alt="">
            <div class="group-list-you-may-like-content-item-name-price mt-2">
              <span class="fsz-20 c-dark">Xiaomi Mi Band 6 chính hãng</span>
              <span class="fsz-20 c-red">1.200.000₫ </span><del>1.500.000₫</del>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container bg-white">
  <div class="row">
    <div class="col-8 mt-5">
      <div class="container-product-tab-description-and-return-policy">
        <!-- Tab Titles -->
        <div class="tab-titles d-flex">
          <h4 class="tab-title active-tab" data-target="#description-content"><b>Mô tả sản phẩm</b></h4>
          <h4 class="tab-title mx-4" data-target="#return-policy-content"><b>Chính sách đổi trả</b></h4>
        </div>
        <hr class="separator m-0">
        <!-- Tab Content -->
        <div class="tab-contents mt-3">
          <div id="description-content" class="tab-content active-content">
            <div class="text-wrapper">
              <p class="tab-text">
                <i>
                  Vivo X200 Pro là mẫu smartphone thuộc dòng flagship mới nhất từ Vivo, sở hữu hiệu năng rất cao từ con chip Dimensity 9400 đầu tiên trên thế giới. Các thông số khác của máy sẽ ra sao? Mời bạn cùng khám phá qua những đánh giá tổng quan về sản phẩm từ DigiPhone nhé!
                  (Thêm nội dung dài ở đây)
                </i>
              </p>
              <div class="fade-overlay"></div>
            </div>
            <button class="toggle-btn">Xem thêm <i class="fa-solid fa-angles-down fa-bounce"></i></button>
          </div>
          <div id="return-policy-content" class="tab-content">
            <p class="tab-text">+ Sản phẩm lỗi, hỏng do quá trình sản xuất hoặc vận chuyển</p>
            <p>+ Nằm trong chính sách đổi trả sản phẩm của DigiPhone</p>
            <p>+ Sản phẩm còn nguyên tem mác không bị rớt vỡ, vô nước</p>
            <p>+ Thời gian đổi trả nhỏ hơn 15 ngày kể từ ngày nhận hàng</p>
            <p>+ Chi phí bảo hành về sản phẩm, vận chuyển khách hàng chịu chi phí</p>
            <h4><b>Điều kiện đổi trả hàng</b></h4>
            <p>Điều kiện về thời gian đổi trả: trong vòng 07 ngày kể từ khi nhận được hàng và phải liên hệ gọi ngay cho chúng tôi theo số điện thoại trên để được xác nhận đổi trả hàng.</p>
            <p>- Sản phẩm gửi lại phải còn nguyên đai nguyên kiện</p>
            <p>- Phiếu bảo hành (nếu có) và tem của công ty trên sản phẩm còn nguyên vẹn.</p>
            <p>- Sản phẩm đổi/ trả phải còn đầy đủ hộp, giấy hướng dẫn sử dụng và không bị trầy xước, bể.</p>
            <p>- Quý khách chịu chi phí vận chuyển, đóng gói, thu hộ tiền, chi phí liên lạc tối đa tương đương 10% giá trị đơn hàng.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="container-specifications-product-detail my-5">
        <div class="container-specifications-product-detail-title">
          <h4 class="fsz-20 c-purple m-0"><b>Thông số kỹ thuật</b></h4>
          <hr class="container-specifications-product-detail-hr">
        </div>
        <div class="container-specifications-product-detail-table text-center">
          <table class="table table-striped table-hover  table-bordered ">
            <tbody>
              <tr>
                <td><b>Thẻ SIM:</b></td>
                <td class="">2 SIM, 5G</td>
              </tr>
              <tr>
                <td><b>Kiểu thiết kế:</b></td>
                <td class="">Thanh cảm ứng</td>
              </tr>
              <tr>
                <td><b>Màn hình:</b></td>
                <td class="">6.78 inch, LTPO AMOLED, 1B màu, 120Hz, HDR10+, Dolby Vision, 4500 nits (tối đa)</td>
              </tr>
              <tr>
                <td><b>CPU:</b></td>
                <td class="">Mediatek Dimensity 9400 (3 nm)</td>
              </tr>
              <tr>
                <td><b>RAM:</b></td>
                <td class="">12GB/16GB</td>
              </tr>
              <tr>
                <td><b>Bộ nhớ/ Thẻ nhớ:</b></td>
                <td class="">256GB/512GB/1TB</td>
              </tr>
              <tr>
                <td><b>Pin:</b></td>
                <td class="">Si/C 6000 mAh, 90W</td>
              </tr>
            </tbody>
          </table>
          <!-- nút xem thêm màu tím  -->
          <button class="container-specifications-product-detail-table-button bg-purple-2 c-white"
            data-bs-toggle="modal" data-bs-target="#productDetailModal">
            Xem thêm thông tin <i class="fa-solid fa-up-down-left-right fa-beat"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="productDetailModal" d data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="productDetailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title c-purple " id="productDetailModalLabel">Thông tin chi tiết sản phẩm</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Product Details Table -->
                  <table class="table table-striped table-hover table-bordered">
                    <tbody>
                      <tr>
                        <td><b>Thẻ SIM:</b></td>
                        <td>2 SIM, 5G</td>
                      </tr>
                      <tr>
                        <td><b>Kiểu thiết kế:</b></td>
                        <td>Thanh cảm ứng</td>
                      </tr>
                      <tr>
                        <td><b>Màn hình:</b></td>
                        <td>6.78 inch, LTPO AMOLED, 1B màu, 120Hz, HDR10+, Dolby Vision, 4500 nits (tối đa)</td>
                      </tr>
                      <tr>
                        <td><b>CPU:</b></td>
                        <td>Mediatek Dimensity 9400 (3 nm)</td>
                      </tr>
                      <tr>
                        <td><b>RAM:</b></td>
                        <td>12GB/16GB</td>
                      </tr>
                      <tr>
                        <td><b>Bộ nhớ/ Thẻ nhớ:</b></td>
                        <td>256GB/512GB/1TB</td>
                      </tr>
                      <tr>
                        <td><b>Pin:</b></td>
                        <td>Si/C 6000 mAh, 90W</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container container-comment mb-4">
    <div class="container-comment-title">
      <h4 class="fsz-20 c-purple"><b>Hỏi đáp và bình luận</b></h4>
      <hr class="container-comment-hr">
    </div>

    <!-- Comment Input Section -->
    <div class="comment-box d-flex align-items-center">
      <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="rounded-circle me-2 " style="width: 4%;" alt="User Avatar">
      <input type="text" id="comment-input" class="form-control comment-input" placeholder="Viết bình luận...">
      <button id="submit-comment" class="btn btn-primary ms-2">Đăng</button>
    </div>

    <!-- Comment List Section -->
    <ul id="comment-list" class="comment-list mt-3"></ul>
  </div>

  <div class="container-related-products mt-5">
    <div class="container-related-products-title">
      <h4 class="c-purple color-hover-orange m-2"><b>Sản phẩm liên quan</b></h4>
    </div>
    <div class="container-related-products-list">
      <div class="row">
      <div class="col-3 container-products-list m-3 bdrd-5 border ">
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
  </div>
</div>







<script>
  $(document).ready(function() {
    // Khởi tạo Slick Slider cho các ảnh nhỏ với các tùy chọn
    $('.small-image-slider').slick({
      slidesToShow: 3, // Hiển thị 4 ảnh nhỏ cùng lúc
      slidesToScroll: 1,
      arrows: false, // Hiển thị nút điều hướng
      dots: false,
      focusOnSelect: true,
      infinite: false, // Cho phép lặp lại khi kéo đến cuối
      centerMode: false, // Tạo hiệu ứng căn giữa
      centerPadding: '10px',
      draggable: true, // Cho phép kéo (drag)
      responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    });

    // Sự kiện khi nhấn vào ảnh nhỏ
    $('.small-image-slider .small-img').on('click', function() {
      var newImageSrc = $(this).attr('src');
      $('#main-image').attr('src', newImageSrc); // Thay đổi ảnh lớn
    });
  });

  $(document).ready(function() {
    // Xử lý khi bấm vào các nút chọn giá
    $('.container-product-detail-information-options-price-list .btn').on('click', function() {
      // Xóa class 'active' khỏi các nút khác
      $('.container-product-detail-information-options-price-list .btn').removeClass('active');
      // Thêm class 'active' cho nút được bấm
      $(this).addClass('active');

      // Lấy giá từ thẻ <span> trong nút đã chọn
      const selectedPrice = $(this).find('.container-product-detail-information-options-price-list-detail .c-red').text();

      // Cập nhật giá chính trong phần thông tin sản phẩm
      $('.container-product-detail-information-price-main').text(selectedPrice);
    });
  });


  $(document).ready(function() {
    // Danh sách các màu có sẵn
    const colors = [{
        name: 'Xanh',
        code: '#007bff'
      },
      {
        name: 'Đỏ',
        code: '#dc3545'
      },
      {
        name: 'Vàng',
        code: '#ffc107'
      },
      {
        name: 'Xám',
        code: '#6c757d'
      }
    ];

    const colorList = $('.container-product-detail-information-color-list');
    const selectedColorText = $('.selected-color');

    // Tạo các ô màu và thêm vào danh sách
    colors.forEach(color => {
      const colorCircle = $(`<div class="color-circle"></div>`);
      colorCircle.css('background-color', color.code);
      colorCircle.attr('data-color-name', color.name);

      colorCircle.on('click', function() {
        // Thay đổi màu sắc được chọn
        selectedColorText.text($(this).data('color-name'));
        $('.color-circle').removeClass('selected');
        $(this).addClass('selected');
      });

      colorList.append(colorCircle);
    });
  });

  $(document).ready(function() {
    const container = $('.container-product-tab-description-and-return-policy');

    // Tab switching
    container.find('.tab-title').click(function() {
      container.find('.tab-title').removeClass('active-tab');
      $(this).addClass('active-tab');

      container.find('.tab-content').removeClass('active-content');
      $(container.find($(this).data('target'))).addClass('active-content');
    });

    // Toggle content visibility on "See More" click
    container.find('.toggle-btn').click(function() {
      const wrapper = $(this).siblings('.text-wrapper');
      wrapper.toggleClass('expanded');
      wrapper.find('.fade-overlay').toggle(!wrapper.hasClass('expanded'));
      $(this).text(wrapper.hasClass('expanded') ? 'Thu gọn' : 'Xem thêm');
    });
  });


  $(document).ready(function() {
    // Thêm bình luận chính
    $('#submit-comment').on('click', function() {
      var commentText = $('#comment-input').val().trim();
      if (commentText !== '') {
        var commentHTML = `
                    <li class="comment-item">
                        <span class="comment-author">Người dùng</span>
                        <p class="comment-text">` + commentText + `</p>
                        <span class="reply-button">Trả lời</span>
                        <ul class="reply-list list-unstyled"></ul>
                        <div class="reply-box d-none">
                            <input type="text" class="form-control reply-input" placeholder="Viết trả lời...">
                            <button class="btn reply-submit-button">Đăng</button>
                        </div>
                    </li>`;
        $('#comment-list').append(commentHTML);
        $('#comment-input').val('');
      } else {
        alert('Vui lòng nhập bình luận!');
      }
    });

    // Hiển thị form trả lời khi nhấn "Trả lời"
    $(document).on('click', '.reply-button', function() {
      var replyBox = $(this).siblings('.reply-box');
      replyBox.toggleClass('d-none');
      replyBox.find('.reply-input').focus();
    });

    // Thêm trả lời vào bình luận chính
    $(document).on('click', '.reply-submit-button', function() {
      var replyInput = $(this).siblings('.reply-input');
      var replyText = replyInput.val().trim();
      if (replyText !== '') {
        var replyHTML = `
                    <li class="reply-item">
                        <span class="reply-author">Người dùng</span>
                        <p class="reply-text">` + replyText + `</p>
                    </li>`;
        $(this).closest('.comment-item').find('.reply-list').append(replyHTML);
        replyInput.val('');
        $(this).parent('.reply-box').addClass('d-none'); // Ẩn lại hộp trả lời sau khi đăng
      } else {
        alert('Vui lòng nhập nội dung trả lời!');
      }
    });
  });
</script>