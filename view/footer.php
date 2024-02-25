<footer class="grid footer">
    <div class="grid wide">
        <div class="row">
            <div class="col l-4 c-12 m-12">
                <img src="./assets/img/logo_milem_text.png" alt="" class="footer_logo">
                <p class="footer_text">
                    04 Nguyễn Thúy - Hòa Minh - Liên Chiểu - Đà Nẵng
                </p>
                <p class="footer_text">
                    Email: info@milem.vn
                </p>
                <p class="footer_text">
                    Hotline: 0932 981 560
                </p>
                <p class="footer_text">
                    Giờ làm việc
                </p>
                <p class="footer_text">
                    Thứ 2 - Thứ 7: 10:00 - 21:30
                </p>
                <p class="footer_text">
                    Chủ Nhật: 12:30 - 21:30
                </p>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--separate"><i class="fa-brands fa-facebook"></i>
                    </li>
                    <li class="header__navbar-item header__navbar-item--separate"><i class="fa-brands fa-instagram"></i></li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-title--no-pointer"><i class="fa-solid fa-envelope"></i></span>
                    </li>
                </ul>
            </div>
            <div class="col l-2 c-12 m-12">
                <h1 class="footer_heading">Menu</h1>
                <a href="#" class="footer_text">
                    Trang chủ
                </a>
                <a href="#" class="footer_text">
                    Giới thiệu
                </a>
                <a href="#" class="footer_text">
                    Sản phẩm
                </a>
                <a href="#" class="footer_text">
                    Tin tức
                </a>
                <a href="#" class="footer_text">
                    Liên hệ
                </a>
            </div>
            <div class="col l-3 c-12 m-12">
                <h1 class="footer_heading">Thông tin và hướng dẫn</h1>
                <a href="#" class="footer_text">
                    Hình thức thanh toán
                </a>
                <a href="#" class="footer_text">
                    Chính sách bảo mật
                </a>
                <a href="#" class="footer_text">
                    Điều khoản sử dụng
                </a>
            </div>
            <div class="col l-3 c-0 m-0">
                <div class="footer_fb">
                    <div id="footer-fb-page" data-callback="loadFbPage" class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/milem.vn/" data-tabs="timeline" data-width="282" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=231871597516863&amp;container_width=255&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmilem.vn%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=300">
                        <span style="vertical-align: bottom; width: 282px; height: 250px;"><iframe name="f368cbcf0fe4e2" width="px" height="250px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.1/plugins/page.php?adapt_container_width=true&amp;app_id=231871597516863&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1502a3e044eb78%26domain%3Dwww.milem.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.milem.vn%252Ff1bf13f7dfd7d38%26relation%3Dparent.parent&amp;container_width=255&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmilem.vn%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=300" style="border: none; visibility: visible; width: 255px; height: 250px;" class=""></iframe></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="text-center">Copyright 2018 © by MILEM | Your Skincare Friend. All rights reserved.
            </div>
        </div>
    </div>
</footer>
</div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./assets/js/slide.js"></script>
<script src="./assets/js/slick.js"></script>
<script src="./assets/js/scroll.js"></script>
<script src="./assets/js/modal.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.slider_products-thumb a').click(function(e) {
            e.preventDefault();
            $('.imgBox img').attr("src", $(this).attr("href"));
        })
    })
    $(document).on('click', '.slider_products-list', function() {
        $(this).addClass('active').siblings().removeClass('active');
    });

    $(document).on('click', '.products_detail-tab-item', function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

    $(document).on('click', '.products_content-bottom-item', function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

    function loginNow(text) {
        return confirm(text);
    }
    function del(name) {
    return confirm("Bạn có chắc chắn là muốn hủy " + name + " không?");
  }
  function tb(name) {
    return confirm("Bạn có muốn cập nhật trạng thái đơn hàng " + name + " không?");
  }
    const js_left_click1 = document.querySelector('.js_left-click1');
    const js_left_show1 = document.querySelector('.js_left-show1');
    const js_left_remove1 = document.querySelector('.js_left-remove1');

    const js_left_click2 = document.querySelector('.js_left-click2');
    const js_left_show2 = document.querySelector('.js_left-show2');
    const js_left_remove2 = document.querySelector('.js_left-remove2');

    const js_left_click3 = document.querySelector('.js_left-click3');
    const js_left_show3 = document.querySelector('.js_left-show3');
    const js_left_remove3 = document.querySelector('.js_left-remove3');

    const js_left_click4 = document.querySelector('.js_left-click4');
    const js_left_show4 = document.querySelector('.js_left-show4');
    const js_left_remove4 = document.querySelector('.js_left-remove4');

    const js_left_rotate1 = document.querySelector('.js_left-rotate1');
    const js_left_rotate2 = document.querySelector('.js_left-rotate2');
    const js_left_rotate3 = document.querySelector('.js_left-rotate3');
    const js_left_rotate4 = document.querySelector('.js_left-rotate4');


    function addOpen1() {
        js_left_show1.classList.add('open')
        js_left_rotate1.classList.add('open')
        document.querySelector('.js_left-remove1').style.display = 'block';
    }

    function addOpen2() {
        js_left_show2.classList.add('open')
        js_left_rotate2.classList.add('open')
        document.querySelector('.js_left-remove2').style.display = 'block';

    }

    function addOpen3() {
        js_left_show3.classList.add('open')
        js_left_rotate3.classList.add('open')
        document.querySelector('.js_left-remove3').style.display = 'block';

    }

    function addOpen4() {
        js_left_show4.classList.add('open')
        js_left_rotate4.classList.add('open')
        document.querySelector('.js_left-remove4').style.display = 'block';
    }



    function removeOpen1() {
        js_left_show1.classList.remove('open')
        js_left_rotate1.classList.remove('open')
        document.querySelector('.js_left-remove1').style.display = 'none';
    }

    function removeOpen2() {
        js_left_show2.classList.remove('open')
        js_left_rotate2.classList.remove('open')
        document.querySelector('.js_left-remove2').style.display = 'none';
    }

    function removeOpen3() {
        js_left_show3.classList.remove('open')
        js_left_rotate3.classList.remove('open')
        document.querySelector('.js_left-remove3').style.display = 'none';
    }

    function removeOpen4() {
        js_left_show4.classList.remove('open')
        js_left_rotate4.classList.remove('open')
        document.querySelector('.js_left-remove4').style.display = 'none';
    }


    js_left_click1.addEventListener('click', addOpen1);
    js_left_remove1.addEventListener('click', removeOpen1);

    js_left_click2.addEventListener('click', addOpen2);
    js_left_remove2.addEventListener('click', removeOpen2);

    js_left_click3.addEventListener('click', addOpen3);
    js_left_remove3.addEventListener('click', removeOpen3);

    js_left_click4.addEventListener('click', addOpen4);
    js_left_remove4.addEventListener('click', removeOpen4);
</script>
<script>
    const modal_cart = document.querySelector('.products_detail-cart');
    const modal_cart_section = document.querySelector('.cart_modal-section');
    const btn_product_close = document.querySelector('.close_product_btn');
    const btn_product_add = document.querySelector('.products_detail-fixed-btn-add');
    const btn_product_add_main = document.querySelector('.products_detail-btn-add');

    function addOpen() {
        modal_cart.classList.add('open');
    }

    function removeOpen() {
        modal_cart.classList.remove('open');
    }
    btn_product_add.addEventListener('click', addOpen);
    btn_product_add_main.addEventListener('click', addOpen);
    btn_product_close.addEventListener('click', removeOpen);
    modal_cart.addEventListener('click', removeOpen);
    modal_cart_section.addEventListener('click', function(event) {
        event.stopPropagation();
    })
</script>
<script>
    const myInput = document.getElementById("my-input");

    function stepper(btn) {
        let id = btn.getAttribute("id");
        let min = myInput.getAttribute("min");
        let max = myInput.getAttribute("max");
        let step = myInput.getAttribute("step");
        let val = myInput.getAttribute("value");
        let calcStep = (id == "increment") ? (step * 1) : (step * -1);
        let newValue = parseInt(val) + calcStep;

        if (newValue >= min && newValue <= max) {
            myInput.setAttribute("value", newValue);
        }
    }
</script>

</body>

</html>