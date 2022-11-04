@extends('layouts.master')
@section('title', 'About US')
<style>
    .about_background{
        background-image: url('/images/enjoyment-1869206_1920.jpg');
        background-repeat: no-repeat;
        background-position: right;
        background-position-y: 0;
        background-size: cover;
        height: 30em;
    }
    .card.card-body{
        border: none;
    }
    .custombtn,
    .custombtn:hover,
    .custombtn:focus,
    .custombtn:visited{
        text-align: left !important;;
        background-color: #48494a !important;
        border-color: #48494a !important;;
        width: 100% !important;
        box-shadow: none !important;
    }
</style>
@section('content')
    <div class="container-fluid">

    </div>
    <div class="container">
        <br>
        <p>ABOUT US</p>
        <h1>
            Established in 2000, GlobalLove Media is a leading niche online dating network. We operate a variety of niche dating sites based on ethnicity, religion, physical appearance, special interests, lifestyle and more.
        </h1>
        <p>
            We are international market leaders in many of our chosen niche markets and the company has helped over 30 million people look for love across the world, covering North and South America, Europe, Asia Pacific and the Middle East.
        </p>
        <p>
            Our sites are equipped with the latest and most progressive technology to make online dating an enjoyable and interactive experience. Our user-friendly site designs, multilingual interfaces and language translation tools break down the traditional barriers faced by people when looking for love, whether it be next door or halfway across the world.
        </p>

        <div class="collapse_section">
            <p>
                <a class="btn btn-primary custombtn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Our Corporate Objective
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <b>
                        <p>Our Vision</p>
                    </b>
                    <p>
                        To remain a market leader and experience continued growth through an increasing customer base and a larger number of niche dating services.
                    </p>
                    <b>
                        <p>Our Mission</p>
                    </b>
                    <p>
                        To meet and exceed customer satisfaction by continuing to provide safe, interactive, affordable and technologically progressive dating services to a growing membership base across the world.
                    </p>
                </div>
            </div>


            <p>
                <a class="btn btn-primary custombtn" data-bs-toggle="collapse" href="#OurCompanyPhilosophy" role="button" aria-expanded="false" aria-controls="OurCompanyPhilosophy">
                    Our Company Philosophy
                </a>
            </p>
            <div class="collapse" id="OurCompanyPhilosophy">
                <div class="card card-body">
                    <p>
                        GlobalLove Media's company philosophy includes the salient points that we believe will help us create and retain a loyal membership base while maintaining high ethical standards to achieve profitable growth.
                    </p>
                    <b>
                        <p>Outstanding Service Delivery</p>
                    </b>
                    <p>
                        We believe in offering the best dating services within our niche markets. At GlobalLove Media, we provide highly advanced, modern dating services to our customers. In addition, our staff is constantly working on improvements and advancements with the ultimate goal of enhancing the customer experience.
                    </p>
                    <b>
                        <p>Online Safety</p>
                    </b>
                    <p>
                        We believe our customers deserve peace of mind. GlobalLove Media undertakes every possible method necessary to ensure a secure environment within which members can look for a potential partner. We use an advanced fraud prevention system and routine member checks to provide the highest level of internet protection possible on a dating service.
                    </p>
                    <b>
                        <p>
                            Skilled and Trained Workforce
                        </p>
                    </b>
                    <p>
                        We believe employing a good set of people is essential for customer satisfaction and the company's advancement. We employ a skilled set of people in every department, who are further trained to become professionals in their field.
                    </p>
                    <b>
                        <p>
                            Excellent Customer Relations
                        </p>
                    </b>
                    <p>
                        We believe our customers are our first priority. GlobalLove Media takes pride in offering an excellent support system to our customers through progressive communication methods and a staff trained in the major languages of the world.
                    </p>
                    <b>
                        <p>
                            Continued Growth
                        </p>
                    </b>
                    <p>
                        We believe in growth that is profitable for the customer and for the company. We are a market leader and work towards maintaining that position. We hope to achieve further growth through new sites, technological advancements, an increased membership base and profitable alliances.
                    </p>
                </div>
            </div>


            <p>
                <a class="btn btn-primary custombtn" data-bs-toggle="collapse" href="#CareerOpportunities" role="button" aria-expanded="false" aria-controls="CareerOpportunities">
                    Career Opportunities
                </a>
            </p>
            <div class="collapse" id="CareerOpportunities">
                <div class="card card-body">
                    <p>
                        GlobalLove Media is a young and dynamic company and employs over 50 focused highly skilled, multicultural staff members who all share a passion for e-commerce.
                    </p>
                    <p>
                        We are always interested to hear from motivated team players who are:
                        <br>
                        Bilingual in a major foreign language or
                        <br>
                        Have a background in web site design, programming, graphic design or online marketing
                    </p>
                    <p>
                        If you are currently living in Australia and think you are a suitable fit, please forward your resume to us clearly outlining what position you are interested in and someone will be in touch if you meet our criteria.
                    </p>
                    <p>
                        To see current job openings, click here
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
