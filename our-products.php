<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/product-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Our Products</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 main-heaing">
                <h6 class="text-center">Our Barnds</h6>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme ourbrand">
                    <div class="item">
                        <img src="images/brand (2).png" style="cursor: pointer;" onclick="var position=$('#cocacola').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (3).png" style="cursor: pointer;" onclick="var position=$('#thumsup').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (4).png" style="cursor: pointer;" onclick="var position=$('#limka').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (5).png" style="cursor: pointer;" onclick="var position=$('#sprit').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (6).png" style="cursor: pointer;" onclick="var position=$('#fanta').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (7).png" style="cursor: pointer;" onclick="var position=$('#maaza').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (8).png" style="cursor: pointer;" onclick="var position=$('#kinley').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (9).png" style="cursor: pointer;" onclick="var position=$('#minutemaid').position().top-210; gotoTop(position);"> 
                    </div>
                    <div class="item"> 
                        <img src="images/brand (10).png" style="cursor: pointer;" onclick="var position=$('#georgia').position().top-210; gotoTop(position);">
                    </div>
                    <div class="item">
                        <img src="images/brand (1).png" style="cursor: pointer;" onclick="var position=$('#rimzim').position().top-210; gotoTop(position);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative py-6 pt-0" id="cocacola" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row prd-wrap p-2 p-md-5">
        <div class="col-12 col-md-6 offset-md-3 main-heaing">
                        <h2 class="text-center"><img src="images/image 31.png"></h2>
                    </div>
                    <div class="brev-box text-center">
                        <div class="brev-item">
                            <img src="images/image 7.png">
                            <p>2 Ltr.</p>
                        </div>
                        <div class="brev-item">
                            <img src="images/image 10.png">
                            <p>1 Ltr.</p>
                        </div>
                        <div class="brev-item">
                            <img src="images/image 11.png">
                            <p>50 ml.</p>
                        </div>
                        <div class="brev-item">
                            <img src="images/image 12.png">
                            <p>300 ml.</p>
                        </div>
                        <div class="brev-item">
                            <img src="images/image 13.png">
                            <p>300 ml.</p>
                        </div>
                        <div class="brev-item">
                            <img src="images/image 14.png">
                            <p>300 ml.</p>
                        </div>
                    </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative py-6 pt-0" id="thumsup" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row prd-wrap p-2 p-md-5">
            <div class="col-12 col-md-6 offset-md-3 main-heaing">
                <h2 class="text-center"><img src="images/image 31.png"></h2>
            </div>
            <div class="brev-box text-center">
                <div class="brev-item">
                    <img src="images/image 7.png">
                    <p>2 Ltr.</p>
                </div>
                <div class="brev-item">
                    <img src="images/image 10.png">
                    <p>1 Ltr.</p>
                </div>
                <div class="brev-item">
                    <img src="images/image 11.png">
                    <p>50 ml.</p>
                </div>
                <div class="brev-item">
                    <img src="images/image 12.png">
                    <p>300 ml.</p>
                </div>
                <div class="brev-item">
                    <img src="images/image 13.png">
                    <p>300 ml.</p>
                </div>
                <div class="brev-item">
                    <img src="images/image 14.png">
                    <p>300 ml.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>

</body>
<script>
    $('.ourbrand').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 6
            },
            1000: {
                items: 10
            }
        }
    })

    function gotoTop(top) {
        $("html, body").animate({
            scrollTop: top + "px"
        }, 'slow');
    }
</script>

</html>