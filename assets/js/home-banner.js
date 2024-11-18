
    /* JavaScript */
    $(document).ready(function () {
        function updateCountdown() {
            const now = new Date();
            let targetTime = new Date(now);

            // Xác định target time dựa vào thời gian hiện tại
            if (now.getHours() < 12) {
                targetTime.setHours(12, 0, 0, 0);
            } else {
                targetTime.setHours(24, 0, 0, 0);
            }

            // Tính thời gian còn lại
            let timeDiff = targetTime - now;

            const hours = Math.floor(timeDiff / (1000 * 60 * 60));
            timeDiff -= hours * (1000 * 60 * 60);

            const minutes = Math.floor(timeDiff / (1000 * 60));
            timeDiff -= minutes * (1000 * 60);

            const seconds = Math.floor(timeDiff / 1000);

            // Cập nhật UI
            const timeBoxes = $('.container-product-sale-title-clock-item-time h3');
            $(timeBoxes[0]).text(hours.toString().padStart(2, '0'));
            $(timeBoxes[1]).text(minutes.toString().padStart(2, '0'));
            $(timeBoxes[2]).text(seconds.toString().padStart(2, '0'));

            // Cập nhật trạng thái tab và active class
            if (now.getHours() < 12) {
                $('.container-product-sale-tab-1-clock span').text('đang diễn ra');
                $('.container-product-sale-tab-2-clock span').text('sắp diễn ra');
                $('.container-product-sale-tab-1-clock').addClass('active');
                $('.container-product-sale-tab-2-clock').removeClass('active');
            } else {
                $('.container-product-sale-tab-1-clock span').text('sắp diễn ra');
                $('.container-product-sale-tab-2-clock span').text('đang diễn ra');
                $('.container-product-sale-tab-1-clock').removeClass('active');
                $('.container-product-sale-tab-2-clock').addClass('active');
            }
        }

        // Cập nhật mỗi giây
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });

    $('.toggle-icon-button-love').on('click', function() {
        var icon = $(this).find('i');
        icon.toggleClass('fa-regular fa-solid'); // Chuyển đổi giữa fa-regular và fa-solid
    });