<?php include_once("includes/header.php"); ?>

<div class="container-fluid banner inner-banner p-0 position-relative">
    <img src="images/career-banner.png" class="banner-bk">
    <div class="container h-100 position-relative">
        <div class="row h-100">
            <div class="col-12 banner-text d-flex align-items-center">
                <h2>Career at Bengal Beverages</h2>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid py-6 position-relative" style="overflow:hidden;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-12 big-text mb-0">
                <h2 class="text-center">If you're champion at what you do, and are hungry to learn, grow and make an impact, you've passed a level already.</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <img src=" images/Rectangle 60.png" class="launch-bk">
            <div class="col-12 career-wrap career-bt-wrap">
                <div class="col-12 main-heaing m-0">
                    <h2>This is the place where you do not just get a Job, but a lot more that enables you to create and contribute something.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 col-md-8 offset-md-2 main-heaing ">
                <h2 class="text-center">Join the team. Inspire the Work. Actively Looking for</h2>
            </div>
            <div class="col-12 col-md-8 offset-md-2 content mb-3">
                <p class="text-center">The careers highlighted below represents just a glimpse of the possibilities at The Bengal Beverages. To discover a comprehensive list of all positions available</p>
            </div>
            <div class="col-12 col-md-8 offset-md-2">
                <ul class="team-location">
                    <li>
                        <p>Senior Director, Product Management</p>
                        <p class="team-rt"><i class="fas fa-map-marker mr-3"></i>Dankuni<a><i class="fas fa-arrow-right"></i></a></p>
                    </li>
                    <li>
                        <p>Senior Director, Product Management</p>
                        <p class="team-rt"><i class="fas fa-map-marker mr-3"></i>Dankuni<a><i class="fas fa-arrow-right"></i></a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-6 pt-0  position-relative">
    <div class="container">
        <div class="row " style="position: relative;">
            <div class="col-12 col-md-8 offset-md-2 main-heaing ">
                <h2 class="text-center">The cadre to be a part of</h2>
            </div>
            <div class="col-12 col-md-8 offset-md-2 content mb-3">
                <p class="text-center">People are the core of everything we do. Aided with all the modern tools and facilities, our work environment ensures the productivity and vibe never goes away. We all have realized life is more than just about working. We respect that and have all the necessary procedures and flexibilities to ensure you ALSO take care of your family and personal commitments.</p>
            </div>
            <div class="col-12">
                <div class="grid-container">
                    <img src="images/history.png" class="item1 w-100">
                    <img src="images/history.png" class="item2 w-100">
                    <img src="images/history.png" class="item3 w-100">
                    <img src="images/history.png" class="item4 w-100">
                    <img src="images/history.png" class="item5 w-100">
                    <img src="images/history.png" class="item6 w-100">
                    <img src="images/history.png" class="item7 w-100">
                    <img src="images/history.png" class="item8 w-100">
                    <img src="images/history.png" class="item9 w-100">
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