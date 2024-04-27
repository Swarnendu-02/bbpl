<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/inner-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Our Achievements</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12 big-text " >
                <h2 class="text-center">Triumphs Unveiled: A chronicle of excellence, milestones, and success stories that define our journey toward remarkable achievements and unparalleled success</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12">
                <div class="extra-logo">
                    <div class="item">
                        <img src="images/achi-logo (2).png">
                    </div>
                    <div class="item">
                        <img src="images/achi-logo (3).png">
                    </div>
                    <div class="item">
                        <img src="images/achi-logo (1).png">
                    </div>
                    <div class="item">
                        <img src="images/achi-logo (2).png">
                    </div>
                    <div class="item">
                        <img src="images/achi-logo (1).png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12 award-grid-rt">
                <div class="owl-carousel owl-theme blogbanner">
                    <div class="item">
                        <img src="images/award (2).png">
                        <h4>Awards name</h4>
                        <p>Some store or description of this awards . Some store or description of this awards . Some store or description of this awards .</p>
                    </div>
                    <div class="item">
                        <img src="images/award (1).png">
                        <h4>Awards name</h4>
                        <p>Some store or description of this awards . Some store or description of this awards . Some store or description of this awards .</p>
                    </div>
                    <div class="item">
                        <img src="images/award (2).png">
                        <h4>Awards name</h4>
                        <p>Some store or description of this awards . Some store or description of this awards . Some store or description of this awards .</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid p-0 h-auto position-relative">
    <img src="images/achi-bottom.png" class="w-100">

</div>

<?php include_once("includes/footer.php"); ?>

</body>
<script>
    $('.homebanner').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('.blogbanner').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    })
    $('.pillarbanner').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

</html>