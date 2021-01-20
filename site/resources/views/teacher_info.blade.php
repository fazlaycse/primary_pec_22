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
                <div class="col-12 text-center">
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
        <a href="#">প্রথম পাতা</a>
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
        <a href="#" class="active">শিক্ষক ও কর্মচারী</a>
    </div>
    <br>
    <form class="form-group" method="POST" action="teacher_info_page_save" enctype="multipart/form-data">
        {{ csrf_field() }}
        <?php //$instRow = $instRow->teacher_infos;?>
        <div class="teacher_info border" style="background-color: #b0d4f1;">
            <hr>
            <div class="teacher_profile">
                <span style="font-size: 18px"> বিদ্যালয়ের শিক্ষকের বিস্তারিত তথ্য: </span>
                <div class="table_third_three">
                    <table class="table table-bordered text-center">
                        <thead class="bg-primary">
                        <tr>
                            <th rowspan="3" scope="col">ক্রমিক নম্বর</th>
                            <th rowspan="3" scope="col">শিক্ষকের নাম (বাংলা ও ইংরেজি)</th>
                            <th rowspan="2" scope="col">১</th>
                            <th rowspan="2" scope="col">২</th>
                            <th rowspan="2" scope="col">৩</th>
                            <th rowspan="2" scope="col">৪</th>
                            <th rowspan="2" scope="col">৫</th>
                            <th rowspan="2" scope="col">৬</th>
                            <th rowspan="2" scope="col">৭</th>
                            <th rowspan="2" scope="col">৮</th>
                            <th rowspan="2" scope="col">৯</th>
                            <th colspan="2" rowspan="2" scope="col">১০</th>
                            <th rowspan="2" scope="col">১১</th>
                        </tr>
                        </thead>
                        <tbody style="background-color: skyblue">
                        <tr>
                            <th rowspan="2"></th>
                            <th rowspan="2"></th>
                            <th rowspan="2" scope="col">জন্ম তারিখ</th>
                            <th rowspan="2" scope="col">লিঙ্গ</th>
                            <th rowspan="2" scope="col">উপজাতি/ক্ষুদ্র নৃ-গোষ্ঠী</th>
                            <th rowspan="2" scope="col">পদ</th>
                            <th rowspan="2" scope="col">এ বিদ্যালয়ে পদোন্নতি</th>
                            <th rowspan="2" scope="col">এ বিদ্যালয়ে উপস্থিতি</th>
                            <th rowspan="2" scope="col">শিক্ষকতা যোগ্যতা-সর্বোচ্চ</th>
                            <th rowspan="2" scope="col">চাকরিতে যোগদানের তারিখ</th>
                            <th rowspan="2" scope="col">৬ষ্ঠ-৮ম শ্রেণির ক্লাস</th>
                            <th colspan="2" scope="col">পেশাগত যোগ্যতা</th>
                            <th rowspan="2" scope="col">বিগত ১২ মাসের প্রশিক্ষণ</th>
                        </tr>
                        <tr>
                            <th scope="col">স্বল্প মেয়াদি</th>
                            <th scope="col">দীর্ঘ মেয়াদি</th>
                        </tr>
                        <tr>
                            <td style="width: 10px">#</td>
                            <td>
                                Name in Bangla : <input type="text" style="width: 120px;" placeholder="নাম"
                                                        name="tname_bangla" value="{{$instRow->tname_bangla}}"><br>
                                Name in English : <input type="text" style="width: 120px;" placeholder="Name"
                                                         name="tname_english" value="{{$instRow->tname_english}}">
                            </td>
                            <td><input type="text" style="width: 70px; align-content: center" name="dob"></td>
                            <td><select class="custom-select" style="width:55px" name="sex">
                                    <option selected value="1" <?php if($instRow->sex =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->sex =='2'){echo "selected";} ?>>না</option>
                                </select></td>
                            <td><input type="text" style="width: 70px; align-content: center" name="ethinicity" value="{{$instRow->ethinicity}}"></td>
                            <td><input type="text" style="width: 90px; align-content: center" name="deisgnation" value="{{$instRow->deisgnation}}"></td>
                            <td><select class="custom-select" style="width:55px" name="inst_deisgnated">
                                    <option selected value="1" <?php if($instRow->inst_deisgnated =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->inst_deisgnated =='2'){echo "selected";} ?>>না</option>
                                </select></td>
                            <td><input type="text" style="width: 70px; align-content: center" name="inst_present" value="{{$instRow->inst_present}}"></td>
                            <td><select class="custom-select" style="width:95px" name="edu_degree">
                                    <option selected value="1" <?php if($instRow->edu_degree =='1'){echo "selected";} ?>>ডিগ্রী(পাশ)</option>
                                    <option value="2"<?php if($instRow->edu_degree =='2'){echo "selected";} ?>>স্নাতক(সম্মান)</option>
                                    <option value="3" <?php if($instRow->edu_degree =='3'){echo "selected";} ?>>স্নাতকোত্তর</option>
                                    <option value="4" <?php if($instRow->edu_degree =='4'){echo "selected";} ?>>উচ্চ মাধ্যমিক</option>
                                    <option value="5" <?php if($instRow->edu_degree =='5'){echo "selected";} ?>>মাধ্যমিক</option>
                                </select></td>
                            <td>
                                <input type="text" style="width: 70px; align-content: center" name="joining_dt" value="{{$instRow->joining_dt}}">
                            </td>
                            <td><select class="custom-select" style="width:55px" name="class_six_eight">
                                    <option selected value="1" <?php if($instRow->class_six_eight =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_six_eight =='2'){echo "selected";} ?>>না</option>
                                </select></td>
                            <td><input type="text" style="width: 70px; align-content: center" name="short_training" value="{{$instRow->short_training}}">
                            </td>
                            <td><input type="text" style="width: 70px; align-content: center" name="long_training" value="{{$instRow->long_training}}"></td>
                            <td><input type="text" style="width: 70px; align-content: center"
                                       name="twelve_month_training" value="{{$instRow->twelve_month_training}}"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="body_table">
            <div class="pull-right">

                <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                       value="Save and Go Forward">
            </div>
            <div style="clear: both">

            </div>
        </div>
    </form>
    <div style="clear: both">

    </div>
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
<script src="js/app.js" defer></script>
</body>
</html>

