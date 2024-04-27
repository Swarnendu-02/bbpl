<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/community-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Our Community</h2>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12 big-text">
                <h2 class="text-center">We Uphold Ethical Business Practices: Committed to Integrity, Transparency, and Responsibility</h2>
                <h4 class="text-center mt-5">
                    We take pride in actively contributing to the betterment of our local communities, fostering lasting positive impact. Committed to long-term investment, we strive for shared success and prosperity.
                    <br><br>
                    We work to make a positive difference in our communities through employee volunteerism and programming with a particular focus that aligns to our four Community Pillars.
                </h4>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid  position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            
            <div class="col-12">
                <div class="owl-carousel owl-theme blogbanner community-bottom">
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Diversity and Inclusion</h4>
                        <p>How we support our communities in developing programs that support diversity and drive inclusion.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Youth Employability</h4>
                        <p>How we support our communities in developing programs that support diversity and drive inclusion.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Environmental Sustainability</h4>
                        <p>How we support our communities in developing programs that support diversity and drive inclusion.</p>
                    </div>
                    <div class="item">
                        <img src="images/Ellipse 2.png">
                        <h4>Economic Contribution</h4>
                        <p>How we support our communities in developing programs that support diversity and drive inclusion.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6   position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <img src=" images/Rectangle 6.png" class="launch-bk">
            <div class="col-12 career-wrap community-bt-wrap">
                <div class="col-12 main-heaing m-0">
                    <h6>Contribution</h6>
                    <h2>Support and donations</h2>
                    <a href="#" class="box-btn mt-3">Contact Us</a>
                    <p class="community-last">Through programming, partnerships, and employee volunteerism, we support local organizations that align with our community pillars throughout the year. </p>
                </div>
            </div>
        </div>
    </div>
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
        loop: true,
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