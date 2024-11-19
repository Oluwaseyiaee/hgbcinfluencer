<?php
$title = "Special Events | Higher Ground Baptist Church";
include('template/header.php');
?>



<!-- Banner Area Start -->
<style>
    .sermon_background {
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/bg/sermon-banner.png');
        height: 50vh;
        background-size: cover;
    }

    @media (max-width: 1024px) {

        /* Adjust the breakpoint as needed */
        .sermon_background {
            height: 30vh;
            /* Reduce height for smaller devices */
        }
    }

    @media (max-width: 768px) {

        /* Adjust the breakpoint as needed */
        .sermon_background {
            height: 30vh;
            /* Reduce height for smaller devices */
        }

    }
</style>


<div class="sermon_background">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="page__banner-content">
                    <h2>Special Events</h2>
                    <span><a href="index.php">Home</a>
                        <span>|</span>
                        Special Events
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







<style>
    .event-date {
        font-weight: bold;
        color: #888;
    }

    .event-time {
        font-size: 0.9rem;
        color: #888;
    }

    .event-card {
        display: flex;
        flex-direction: row;
        margin-top: 20px;
        align-items: center;
        gap: 15px;

        padding-bottom: 20px;
    }

    .divider {
        border-left: 2px solid #f26522;
        padding-left: 20px;
        flex: 1;
    }

    .timeline-dot {
        height: 10px;
        width: 10px;
        background-color: #f26522;
        border-radius: 50%;
        margin: 10px auto;
    }

    .view-more {
        color: #f26522;
        font-weight: bold;
    }

    .event-card img {
        width: 200px;
        height: auto;
        border-radius: 5px;
        margin-left: 15px;
    }

    .date-container {
        width: 120px;
        text-align: right;
        padding-right: 10px;
    }

    .view-more {
        padding: 8px 16px;
        background-color: #f26522;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        transition: background-color 0.3s, transform 0.3s;
    }

    .view-more:hover {
        background-color: #d9541e;
        transform: scale(1.05);
    }

    /* Mobile responsiveness */
    @media (max-width: 767px) {
        .event-card {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .event-card img {
            width: 100%;
            margin-top: 0;
        }

        .date-container {
            text-align: left;
            width: auto;
            margin-top: 10px;
        }

        .divider {
            border-left: none;
            border-top: 2px solid #f26522;
            padding-left: 0;
            padding-top: 10px;
            margin-top: 10px;
            width: 100%;
        }

        .divider h4,
        .divider p,
        .view-more {
            margin-top: 10px;
        }
    }
</style>
<div class="blog__one section-padding pt-120">
    <div class="container custom_container">

        <div class="row align-items-end work-process-area__one-title mb-5">
            <div class="col-xl-7 col-lg-7">
                <div class="work-process-area__one-content-left">
                    <h2>Special Events</h2>
                    <p>
                        Nurture your faith through our ministries. Check out our calendar below and stay updated
                        with upcoming events.
                    </p>
                </div>
            </div>
        </div>

        <!-- Event 1 -->
        <div class="event-card">
            <img src="assets/img/image-1.jpg" alt="Family Life Conference Image">
            <div class="date-container">
                <p class="event-date">13 FEB 2024</p>
                <p class="event-time">FRI 05:00PM</p>
            </div>
            <div class="divider">
                <h4>Photizo</h4>
                <p>Empower Your Influence at PHOTIZO.
                    Our annual conference brings together men of purpose to shape our trajectory across:
                    Politics, Economy, Education, Science & Technology, Media & Sport, Fashion, Entertainment, Religion,
                    and Family.
                    Participate in dynamic general sessions and collaborative syndicate groups.</p>
                <button class="view-more">Know More</button>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="event-card">
            <img src="assets/img/image-1.jpg" alt="The Catalyst Image">
            <div class="date-container">
                <p class="event-date">28 NOV 2024</p>
                <p class="event-time">THUR 05:00PM</p>
            </div>
            <div class="divider">
                <h4>Global Leadership Summit - GLS</h4>
                <p>
                    The Global Leadership Summit (GLS) is an annual event by the Global Leadership Network that equips
                    leaders to inspire change in their communities. It reaches over 120 countries and offers year-round
                    resources to support leaders in ministry, business, and beyond.</p>
                <button class="view-more">Know More</button>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="event-card">
            <img src="assets/img/image-1.jpg" alt="Rain Conference Image">
            <div class="date-container">
                <p class="event-date">28 NOV 2024</p>
                <p class="event-time">THUR 05:00PM</p>
            </div>
            <div class="divider">
                <h4>Business and Investment Summit - BISUM</h4>
                <p>BISUM is an annual event that presents you the priceless opportunity to elevate your entrepreneurial
                    spirit. At BISUM, Business and Investment Summit, visionaries, experts, and change-makers are
                    brought together to share insights, strategies, and connections that drive business excellence and
                    sustainable growth.</p>
                <button class="view-more">Know More</button>
            </div>
        </div>

    </div>
</div>

<?php include('template/footer.php') ?>