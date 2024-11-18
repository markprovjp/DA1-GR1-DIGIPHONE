<div class="container container-home-banner mt-4">
    <div class="row">
        <div class="col-9 p-0">
            <div class="container-home-banner-left-slide">
                <div class="main-carousel-home-banner-left">
                    <div class="carousel-item-home-banner-left">
                        <img src="assets/images/tecno-camon-30s-banner-home.webp" alt="Slide 1" class="w-100">
                    </div>
                    <div class="carousel-item-home-banner-left">
                        <img src="assets/images/z9-turbo_1730424003.jpg" alt="Slide 2" class="w-100">
                    </div>
                    <div class="carousel-item-home-banner-left">
                        <img src="assets/images/realme-13+-5g-home-11-11 (1).webp" alt="Slide 3" class="w-100">
                    </div>
                    <div class="carousel-item-home-banner-left">
                        <img src="assets/images/realme-q5-pro_1730777805.jpg" alt="Slide 4" class="w-100">
                    </div>
                </div>

                <div class="carousel-tabs-home-banner-left">
                    <div class="tab-item-home-banner-left">
                        <span class="tab-title-home-banner-left">Vivo X200 Pro</span>
                        <p class="tab-desc-home-banner-left">Flagship mới nhất từ Vivo với camera đột phá</p>
                    </div>
                    <div class="tab-item-home-banner-left">
                        <span class="tab-title-home-banner-left">Samsung Galaxy S24</span>
                        <p class="tab-desc-home-banner-left">Dẫn đầu công nghệ với AI tích hợp</p>
                    </div>
                    <div class="tab-item-home-banner-left">
                        <span class="tab-title-home-banner-left">Xiaomi 14 Pro</span>
                        <p class="tab-desc-home-banner-left">Hiệu năng mạnh mẽ, giá hợp lý</p>
                    </div>
                    <div class="tab-item-home-banner-left">
                        <span class="tab-title-home-banner-left">OPPO Find X7</span>
                        <p class="tab-desc-home-banner-left">Camera chuyên nghiệp, thiết kế sang trọng</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 pl-1 d-block">
            <div class="container-home-banner-right">
                <div class="image-banner-home-right-image image-1 mb-3">
                    <img src="assets/images/note-11-pro-5g_1728786732.jpg" alt="" class="w-100 bdrd-5">
                </div>
                <div class="image-banner-home-right-image image-2 mb-3">
                    <img src="assets/images/q5-pro_1730861464.jpg" alt="" class="w-100 bdrd-5">
                </div>
                <div class="image-banner-home-right-image image-3 mb-3">
                    <img src="assets/images/redmi-12-5g_1730695691.jpg" alt="" class="w-100 bdrd-5">
                </div>
                <div class="image-banner-home-right-image image-3 mb-3">
                    <img src="assets/images/xiaomi-13-banner-slide-mobilecity.jpg (1).webp" alt="" class="w-100 bdrd-5">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main-carousel-home-banner-left .carousel-item-home-banner-left img {
        border-radius: 8px;
        /* width: 20%; */
    }

    .carousel-tabs-home-banner-left {
        display: flex;
        justify-content: space-between;
        /* margin-top: 5px; */
        gap: 15px;
    }

    .tab-item-home-banner-left {
        flex: 1;
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);

    }

    .tab-item-home-banner-left.active {
        background: #503EB6;
        color: white;
    }

    .tab-title-home-banner-left {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .tab-desc-home-banner-left {
        font-size: 14px;
        margin: 0;
        opacity: 0.8;
    }

    .image-banner-home-right-image {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);

    }
</style>
<script>
    $(document).ready(function() {
        // Initialize the main carousel
        $('.main-carousel-home-banner-left').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 3000,
            lazyLoad: 'ondemand',
        });

        // Update active tab on carousel slide change
        $('.main-carousel-home-banner-left').on('afterChange', function(event, slick, currentSlide) {
            $('.tab-item-home-banner-left').removeClass('active');
            $('.tab-item-home-banner-left').eq(currentSlide).addClass('active');
        });

        // Click on tab to switch carousel slide
        $('.tab-item-home-banner-left').on('click', function() {
            const index = $(this).index();
            $('.main-carousel-home-banner-left').slick('slickGoTo', index);
            $('.tab-item-home-banner-left').removeClass('active');
            $(this).addClass('active');
        });

        // Initialize with the first tab active
        $('.tab-item-home-banner-left').first().addClass('active');
    });
</script>