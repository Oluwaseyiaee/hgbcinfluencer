<?php
$title = "Watch us Live | Higher Ground Baptist Church";
include('template/header.php');
?>
<!-- Banner Area Start -->
<style>
    .watch-live_background {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/bg/giving-banner.png');
        height: 50vh;
        background-size: cover;
    }
</style>


<div class="watch-live_background">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="page__banner-content">
                    <h2>Watch us Live</h2>
                    <span><a href="index.php">Home</a>
                        <span>|</span>
                        Watch us Live
                    </span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="page__banner-img">
                    <img src="assets/img/sermon/image-1.jpg" alt="image" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner Area End -->


<!-- Live Stream Area Start -->


<style>
    .live-container {
        display: flex;
        align-items: center;
        justify-content: center;
        align-items: center;
    }

    .icons a {
        display: inline-flex;
        width: 200px;
        height: 200px;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 60px;
        margin: 10px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);


        background-size: 100% 200%;
        background-position: 0% 5%;
        transition: background-position 0.5s, color 0.5s;
    }

    .icons a:nth-child(1) {
        color: #1976d3;
        background-image: linear-gradient(#fff 50%, #1976d3 50%);
    }

    .icons a:nth-child(2) {
        color: #0088cc;
        background-image: linear-gradient(#fff 50%, #0088cc 50%);
    }

    .icons a:nth-child(3) {
        color: #f44236;
        background-image: linear-gradient(#fff 50%, #f44236 50%);
    }

    .icons a:nth-child(4) {
        color: #fd1d1d;
        background-image: linear-gradient(#fff 50%, #fd1d1d 50%);
    }


    .icons a:hover {
        background-position: 0% 100%;
        color: #fff;
    }

    /* Center icons on smaller devices */
    @media (max-width: 768px) {
        .live-container {
            flex-direction: column;
            align-items: center;
        }

        .icons a {
            width: 150px;
            /* Adjust size if necessary */
            height: 150px;
            font-size: 40px;
            /* Adjust font size */
        }
    }
</style>


<div class="section-padding">
    <div class="container custom_container">
        <div class="row align-items-end work-process-area__one-title mb-5">
            <div class="col-xl-7 col-lg-7">
                <div class="work-process-area__one-content-left">
                    <h2>Join us Live</h2>
                    <p>
                        Connect with us live, anywhere, anytime. Join outr global community, no matter where you live.
                    </p>
                </div>
            </div>
        </div>
        <div class="live-container">

            <div class="icons">
                <a href="https://www.facebook.com/hgbcinfluencers" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://t.me/hgbcinfluencers" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="https://www.youtube.com/@hgbcinfluencers" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/hgbcinfluencers" target="_blank"><i
                        class="fab fa-instagram-square"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Live Stream Area End-->



<?php include('template/footer.php') ?>