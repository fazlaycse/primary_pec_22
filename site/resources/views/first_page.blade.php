@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container kalpurus" id="app">
    <div class="header">
        <div class="front_text">
            <div class="">
                <img class="float-right" style="" src="img/resize.jpg" alt="mujib" height="100px" width="150px">
            </div>
            <div style="clear:both"></div>
            <div class="row">
                <div class="col-12 text-center" style="font-size: 1.2em;">
                    <span> গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
                    <br>
                    <span> শিক্ষা মন্ত্রণালয়</span>
                    <br>
                    <span> বাংলাদেশ শিক্ষা তথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) </span>
                    <br>
                    <span> ১ জহির রায়হান রোড (পলাশী-নীলক্ষেত), ঢাকা-১২০৫</span>
                    <br>
                    <span> www.banbeis.gov.bd</span>
                    <br>
                    <span> e-mail: info@banbeis.gov.bd</span>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="form_name">
        <div class="heading col-md-12">
            <h4 style="text-align:center"> বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২০ এর পিইসি তথ্য সংগ্রহ ফরম </h4>
        </div>
    </div>
    <hr>

    <div class="topnav">
        <a href="#" class="active">প্রথম পাতা</a>
        <a href="#">দ্বিতীয় পাতা</a>
        <a href="#">তৃতীয় পাতা</a>
        <a href="#">চতুর্থ পাতা</a>
        <a href="#">প্রাক-প্রাথমিক</a>
        <a href="#">প্রথম শ্রেণি</a>
        <a href="#">দ্বিতীয় শ্রেণি</a>
        <a href="#">তৃতীয় শ্রেণি</a>
        <a href="#">চতুর্থ শ্রেণি</a>
        <a href="#">পঞ্চম শ্রেণি</a>
        <a href="#">ষষ্ঠ-অষ্টম শ্রেণি</a>
        <a href="#">শিক্ষক ও কর্মচারী</a>
    </div>

    <div class="first_body">
        <div class="institute_info border" style="padding:10px; font-size:14px">
            <form class="form-group" method="POST" action="institutteadd">

                {{ csrf_field() }}
                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 15px"> ১. ক) বিদ্যালয়ের নাম ও ঠিকানা:</span>
                </div>
                <div class="row">
                    <div class="col-6 form-group form-inline">
                        <label for="school_code" class="label-text">বিদ্যালয়ের EMIS কোড:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="emis_code" id="school_code">
                    </div>
                    <div class="col-4 form-group form-inline">
                        <label class="label-text" for="school_type">বিদ্যালয়ের ধরণ:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="inst_type" id="school_type">
                    </div>
                </div>
                <div class="row border" style="margin:0px">
                    <div class="col-md-1 border text-center">
                        <span style="font-weight: bold; font-size: 14px">বিদ্যালয়ের নাম (গেজেট অনুযায়ী):</span>
                    </div>
                    <div class="col-11 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="bangla_name" style="width:80px">বাংলায়: </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="name_bangla"
                                   id="bangla_name">
                        </div>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="english_name" style="width:80px"> In English </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="name_english"
                                   id="english_name">
                        </div>
                    </div>

                </div>

                <br>

                <div class="row border" style="margin:0px">

                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="thana" style="width:120px">উপজেলা/থানা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="thana_id" id="thana">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="village" style="width:120px"> গ্রাম/ওয়ার্ড: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="village_word" id="village">
                        </div>
                    </div>
                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="union" style="width:150px"> ইউনিয়ন/পৌরসভা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="union_id" id="union">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> ক্লাস্টার: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="cluster" id="cluster">
                        </div>
                    </div>
                </div>
                <br>


    <div class="pull-right">

            <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px" value="Save and Go Forward">
    </div>
    <div style="clear: both">

    </div>
    </form>

    <hr>
    <div class="footer">
        <div class="row footer">
            <div class="col-md-12"
                 style="text-align:center; padding:5px; font-family: 'Lucida Sans'; background-color: #a1cbef;">
                <span> &copy; Powered by ICT Division, BANBEIS</span> <br>
                <span> Ministry of Education</span>
            </div>
        </div>
    </div>
    <hr>
</div>
</div>
</div>


<script src="js/app.js" type="text/javascript" defer></script>
</body>
</html>
