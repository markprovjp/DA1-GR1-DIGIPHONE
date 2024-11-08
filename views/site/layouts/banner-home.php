<div class="container container-home-banner mt-4">
    <div class="row">
        <div class="col-9 p-0">
            <!-- Main carousel -->
            <div id="mainCarousel" class="carousel">
                <div><img src="./assets/images/banner-redmi-note-14.jpg.webp" alt="Carousel Image 1"></div>
                <div><img src="./assets/images/banner-vivo-iqoo-z9-z9x-z9-turbo.jpg.webp" alt="Carousel Image 2"></div>
                <div><img src="./assets/images/xiaomi-13-banner-slide-mobilecity.jpg.webp" alt="Carousel Image 3"></div>
            </div>

            <!-- Description carousel -->
            <div id="descriptionCarousel" class="carousel mt-0 ">
                <div class="description-item w-90" data-slide="0">
                    <div class="d-flex flex-row justify-content-start align-items-center  ">
                        <div class="mt-0 ">
                            <h5>Xiaomi 13</h5>
                            <p>Giá chỉ từ 9.xxx triệu</p>
                        </div>
                    </div>
                </div>

                <div class="description-item w-90" data-slide="2">
                    <div class="d-flex flex-row justify-content-start align-items-center ">
                        <div class="mt-0">
                            <h5>Iqoo Z9 Tubor </h5>
                            <p>Giá chỉ từ 7.xxx triệu</p>
                        </div>
                    </div>
                </div>
                <div class="description-item w-90" data-slide="1">
                    <div class="d-flex flex-row justify-content-start align-items-center ">
                        <div class="mt-0">
                            <h5>Redmi note 14 Series </h5>
                            <p>Siêu phẩm trong tầm giá</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 p-0">
            <div class="row ">
                <div class="col-12 p-0   image-banner-home-right">
                    <img src="./assets/images/banner_right_1.webp" alt="Banner 1" class=" image-banner-home-right-image">
                </div>
                <div class="col-12 p-0  ">
                    <img src="./assets/images/banner_right_2.webp" alt="Banner 1" class=" image-banner-home-right-image image-2">
                </div>
                <div class="col-12 p-0  ">
                    <img src="./assets/images/banner_right_3.webp" alt="Banner 1" class=" image-banner-home-right-image">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Khởi tạo băng chuyền chính
        $('#mainCarousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
        });

        // Khởi tạo băng chuyền mô tả
        $('#descriptionCarousel').slick({
            slidesToShow: 3,
            focusOnSelect: true,
            arrows: false,
            adaptiveHeight: true,
            infinite: false,
            draggable: false,
            swipe: false,
        });

        // Thêm lớp hoạt động vào mục mô tả đầu tiên trên tải trang
        $('#descriptionCarousel .description-item').first().addClass('active');

        // Nhấp vào sự kiện để điều hướng băng chuyền chính dựa trên mô tả đã chọn
        $('.description-item').on('click', function() {
            const slideIndex = $(this).data('slide');
            $('#mainCarousel').slick('slickGoTo', slideIndex);
        });

        // Đồng bộ hóa mô tả với slide chính mà không di chuyển slide mô tả
        $('#mainCarousel').on('afterChange', function(event, slick, currentSlide) {
            $('#descriptionCarousel .description-item').removeClass('active');
            $('#descriptionCarousel .description-item[data-slide="' + currentSlide + '"]').addClass('active');
        });
    });
</script>