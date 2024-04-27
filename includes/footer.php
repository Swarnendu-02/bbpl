<div style="background: #FF0000;
    padding: 15px 0;width: 100%;
    overflow: hidden;">
    <div class="owl-carousel textslide owl-theme">
        <div class="item">Your here</div>
        <div class="item">Your text </div>
        <div class="item"> text here</div>
        <div class="item">Your here</div>
        <div class="item">Your text </div>
        <div class="item"> text here</div>
        <div class="item">Your here</div>
        <div class="item">Your text </div>
        <div class="item"> text here</div>
        <div class="item">Your here</div>
        <div class="item">Your text </div>
        <div class="item"> text here</div>
    </div>
</div>
<style>
    .textslide .item {
        color: white;
        text-align: center;
        position: relative;
        font-size: 12px;
    }

    .textslide .item::before {
        content: '';
        background-image: url("images/vector.png");
        width: 10px;
        height: 10px;
        position: absolute;
        left: 0;
        top: 4px;
    }
</style>
<script>
    $('.textslide').owlCarousel({
        center: true,
        items: 6,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
</script>
<footer class="container-fluid py-4">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 ft-lft">
                <img src="images/fooyer-logo.png">
                <div>
                    <h5>BENGAL BEVERAGES PVT. LTD.</h5>
                    <p>Authorised Bottler of the Coca - Cola Company<br>
                        Durgapur Expressway, <br>P.O: Dankuni Coal Complex, Dankuni, <br>Dist: Hooghly, West Bengal, INDIA, <br>PIN - 712310</p>
                </div>
            </div>
            <div class="col-12 col-md-6 ft-rt">
                <h4>Navigation</h4>
                <ul>
                    <li><a>Our Company</a><a>Core values</a><a>Our Story</a></li>
                    <li><a>Achievements</a><a>Community</a><a>Sustainability</a></li>
                    <li><a>Career at BBPL</a><a>Coke Sathi</a><a>Locate us</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ft-lft sm-ft">
                <p class="mr-md-" style="border-top: 3px solid;font-size: 17px;width: 120px;margin-right: 25px;  padding-top: 20px;">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </p>
                <p class="d-flex d-md-block flex-column" style="gap: 10px;">
                    <a href="#">Privacy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Accessibility & Disclosure</a>
                    <a href="#">Learn More About BBPL</a>
                </p>
            </div>
            <div class="col-12 col-md-6 sm-ft">
                <p class="text-md-right">@ Copywrite Bengal Beverages Pvt Ltd 2024. All rights reserved</p>
            </div>
        </div>
    </div>
</div>