@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<head>
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <style>
        .customSize {
            border: 1px solid black;
            padding: 5px;
            height: 150px;
            width: 250px;
        }

        @media only screen and (max-width: 440px) {
            /* styles for narrow screens */
            .top_slider img {
                height: 350px;
                width: 100px;
            }
        }

    </style>

</head>
<body>
<div class="container kalpurus" style="">
    <div class="navHeader"
         style="background-color: #ebf6f9;-webkit-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75); box-shadow: 10px 10px 18px 0px rgba(0,0,0,0.75);">
        <div class="top_slider">
            <img src="img/header 01.jpg" class="img-responsive" style="width:100%; height: 100px; margin-top: 10px">
        </div>
        <!-- top menu begins -->
        <div class="topmenu container">
            <nav class="row" style="padding: 10px;background:grey;">
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#ban_info">ব্যানবেইস
                    পরিচিতি
                </button> &nbsp;
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#uitrce_info">UITRCE
                </button>
                <div id="ban_info" class="collapse text-justify mt-2 text-white">
                    বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) দেশের শিক্ষা ব্যবস্থাপনায় শিক্ষাতথ্য ও
                    পরিসংখ্যান সংগ্রহ, সংরক্ষণ, বিতরণ ও প্রচারের
                    একমাত্র সরকারি সংস্থা। ১৯৭৬-৭৭ অর্থ বৎসরে শিক্ষা মন্ত্রণালয়ের সংযুক্ত দপ্তর হিসাবে সংস্থাটি কাজ শুরু
                    করে।
                    পরবর্তীতে সংস্থাটি শিক্ষাক্ষেত্রে ধারাবাহিক উন্নয়নের সাথে সম্পৃক্ত হয়ে শিক্ষাতথ্য বিনির্মাণ ও সরবরাহ
                    করে জাতীয় ও আন্তজার্তিক সংস্থাসমূহের
                    কাছে সমাদৃত হয়েছে। বর্তমানে প্রতিষ্ঠানটি শিক্ষাতথ্য ও পরিসংখ্যান কার্যক্রম ছাড়াও শিক্ষা সেক্টরে
                    আই.সি.টি. প্রশিক্ষন ও
                    আই.সি.টি. শিক্ষার প্রসারে ব্যাপক ভূমিকা রাখছে।
                </div>
                <div id="uitrce_info" class="collapse text-justify mt-2 text-white">

                </div>
            </nav>
        </div>

        <!-- topmenu ends -->

        <!-- slide begins -->
        <div class="slider">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/Banner_2 (1).jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="font-weight: bold;">বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস)</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Banner_01 (3).jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="font-weight: bold;">বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস)</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/Educatipon GIS.jpg" alt="Third slide">
                    </div>
{{--                    <div class="carousel-item">--}}
{{--                        <img class="d-block w-100" src="img/Publication.jpg" alt="Third slide">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img class="d-block w-100" src="img/E serve525852.jpg" alt="Third slide">--}}
{{--                    </div>--}}
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/UITRCE Training (1).jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- slider ends here  -->
    <!-- PEC heading -->
    <hr>


    <div class="container">
        <div class="pec" style="text-align:center; background-color:#80b1b3; padding: 5px 5px 5px 5px;">
            <h4> বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২০ এর পিইসি তথ্য সংগ্রহ ফরম </h4>
        </div>
        <div class="registration">
            <div class="heading" style="text-align: center;">
                <h5 class="font-weight-bold" style="text-align: center">বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২০ এর পিইসি তথ্য
                    সংগ্রহ ফরম পূরণের জন্য
                    EMIS কোড দিয়ে "Submit and go to the form" এ ক্লিক করুন</h5>
                <form class="form-group" method="post" action="first_page">
                    {{ csrf_field() }}
                    Enter EMIS code : <input type="text" value="" placeholder="EMIS Code" name="emis_code"  style="width:150px;" required/>
                    User Name : <input type="text" value="" placeholder="User Name" name="email" style="width:150px;" required/>
                    Password : <input type="text" value="" placeholder="Password" name="password" style="width:150px;" required/>
                    <input class="" type="submit" value="Submit"/>

                </form>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h3>Error List:</h3>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
<br>
    <!-- footer starts -->
    <div class="footer" style="background-color: #ebf6f9;padding: 10px;">
<hr>
        <div class="row">

            <div class="col-lg-4">
                <h5><b>গুরুত্বপূর্ণ লিংকসমূহ</b></h5>
                <ul class="foonav">
                    <li><a href="http://banbeis.gov.bd/" target="_blank">BANBEIS</a></li>
                    <li><a href="http://www.moedu.gov.bd/" target="_blank">Ministry of Education</a></li>
                    <li><a href="http://www.educationboard.gov.bd/" target="_blank">Education Boards Bangladesh</a></li>
                    <li><a href="http://www.dshe.gov.bd/" target="_blank">Directorate of Secondary and Higher
                            Education</a></li>
                    <li><a href="http://www.mopme.gov.bd/" target="_blank">Ministry of Primary and Mass Education</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5><b>যোগাযোগ</b></h5>
                <div class="text">
                    <span class="foonav">
                                BANBEIS, 1 Zahir Raihan Road ( Palashi-Nilkhet),
                                <br>Dhaka - 1205<br>
                                Email: info@banbeis.gov.bd<br>
                                Web Site: www.banbeis.gov.bd
                    </span>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="text">
                    <span class="foonav">

                           <b>© Developed by ICT DIVISION, BANBEIS. <br>Ministry of Education. <br>All rights
                               reserved.</b>

                    </span>
                </div>
            </div>

        </div>


    </div>

    <!-- footer ends -->
</div>

<script src="js/app.js"></script>
</body>
</html>
