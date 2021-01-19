@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! General_infos, Curriculums, Special_std_facilities table->
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
        <a href="#" >প্রথম পাতা</a>
        <a href="#">দ্বিতীয় পাতা</a>
        <a href="#" class="active">তৃতীয় পাতা</a>
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
                    <div class="table_heading">
                        <span style="font-weight: bold; font-size: 18px">  ২. ক) বিদ্যালয়ের সাধারণ তথ্যাবলি </span><br>
                    </div>
        </div>
        <form class="form-group" method="POST" action="third_page_save" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="general_info">
            <input type="hidden" name="YEAR" value="2020"/>
            <div class="row border" style="margin:0px">
                <div class="col-md-6 border justify-content-center align-self-center">
                    <table class="table academic">
                        <tbody>
                        <tr>
                            <th scope="row"><label for="academic_function_yn">বিদ্যালয়ে একাডেমিক কার্যক্রম চালু আছে
                                    কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="acdmic_function_yn">
                                    <option value="1" <?php if($instRow->acdmic_function_yn =='1'){echo "selected";} ?> >হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->acdmic_function_yn =='2'){echo "selected";} ?> >না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে প্রাক-প্রাথমিক শ্রেণি চালু আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="pprimary_exist_yn">
                                    <option value="1" <?php if($instRow->pprimary_exist_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->pprimary_exist_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের গ্রেড </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="school_grade">
                                    <option value="A" <?php if($instRow->acdmic_function_yn =='A'){echo "selected";} ?> >এ</option>
                                    <option value="B" <?php if($instRow->acdmic_function_yn =='B'){echo "selected";} ?> >বি</option>
                                    <option value="C" <?php if($instRow->acdmic_function_yn =='C'){echo "selected";} ?> >সি</option>
                                    <option value="D" <?php if($instRow->acdmic_function_yn =='D'){echo "selected";} ?>>ডি</option>
                                    <option value="NA" <?php if($instRow->acdmic_function_yn =='NA'){echo "selected";} ?>>প্রযোজ্য নয়</option>
                                    <option value="NS" <?php if($instRow->acdmic_function_yn =='NS'){echo "selected";} ?>>নির্ধারণ হয়নি</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">নিরাপদ পানীয় জলের ব্যবস্থা আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="safe_water_yn">
                                    <option value="1" <?php if($instRow->safe_water_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->safe_water_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের ভবন সমূহ নিজস্ব সম্পত্তিতে প্রতিষ্ঠিত? </label>
                            </th>
                            <td>
                                <select class="custom-select" style="width:70px" name="blding_own_land_yn">
                                    <option value="1" <?php if($instRow->blding_own_land_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->blding_own_land_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়টি আশ্রয়কেন্দ্র কাম বিদ্যালয় হিসেবে নির্মিত কি?</label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="cycln_shelter_yn">
                                    <option value="1" <?php if($instRow->cycln_shelter_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->cycln_shelter_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">রেজিস্ট্রেশন/ নিবন্ধনের সন </label></th>
                            <td><input type="text" style="width: 70px" name="reg_year" value="{{$instRow->reg_year}}"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যুৎ সংযোগ আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="electricity_yn">
                                    <option value="1" <?php if($instRow->electricity_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->electricity_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col-6 border justify-content-center align-self-center">
                    <table class="table academic">
                        <tbody>
                        <tr>
                            <th scope="row"><label for="academic_function_yn">শিখন মাধ্যম? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="learning_media">
                                    <option value="1" <?php if($instRow->electricity_yn =='1'){echo "selected";} ?>>বাংলা</option>
                                    <option value="2" <?php if($instRow->electricity_yn =='2'){echo "selected";} ?>>ইংরেজি ভার্সন</option>
                                    <option value="3" <?php if($instRow->electricity_yn =='3'){echo "selected";} ?>>উভয়</option>
                                    <option value="4" <?php if($instRow->electricity_yn =='4'){echo "selected";} ?>>ইংরেজি মিডিয়াম</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">শিফট সংখ্যা? </label></th>
                            <td><input type="number" style="width: 90px" name="shift_number" value="{{$instRow->shift_number}}"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে টয়লেট (ওয়াশ ব্লক ব্যতীত) আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_yn">
                                    <option value="1" <?php if($instRow->toilet_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->toilet_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে ওয়াশ ব্লক নির্মিত হয়েছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="wash_block">
                                    <option value="1" <?php if($instRow->wash_block =='1'){echo "selected";} ?>>নির্মিত</option>
                                    <option value="2" <?php if($instRow->wash_block =='2'){echo "selected";} ?>>নির্মাণাধীন</option>
                                    <option value="3" <?php if($instRow->wash_block =='3'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">শহীদ মিনার আছে কি? </label>
                            </th>
                            <td>
                                <select class="custom-select" style="width:90px" name="shaheed_minar_yn">
                                    <option value="1" <?php if($instRow->shaheed_minar_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->shaheed_minar_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">সীমানা প্রাচীর আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="boundary_wall_yn">
                                    <option value="1" <?php if($instRow->boundary_wall_yn =='1'){echo "selected";} ?>>পাকা প্রাচীর</option>
                                    <option value="2" <?php if($instRow->boundary_wall_yn =='2'){echo "selected";} ?>>নাই</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">প্রতিবন্ধি ও অটিস্টিক শিশুদের জন্য র‍্যাম্পসহ উপযুক্ত টয়লেট
                                    আছে কি?</label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="disable_student_toilet_yn">
                                    <option value="1" <?php if($instRow->disable_student_toilet_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->disable_student_toilet_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের ভিতরে ও বাহিরে (ভাইরাস/ব্যাক্টেরিয়ামুক্ত করতে) জীবাণুনাশক ব্যাবহার করা হয় কি না?</label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="sntz_facility_yn">
                                    <option value="1" <?php if($instRow->sntz_facility_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->sntz_facility_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
        <div class="Second_body">
            <div class="curriculum border" style="padding:10px; font-size:14px">
                <span style="font-weight: bold; font-size: 18px"> ২. খ) বিদ্যালয়ের কোন কোন শ্রেণিতে পাঠদান করানো হয় (বর্ণিত শ্রেণি চালু থাকলে হ্যাঁ অথবা না লিখুন)</span>
                <div class="col-md-12 border justify-content-center align-self-center">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">প্রাক-প্রাথমিক</th>
                            <th scope="col">প্রথম শ্রেণি</th>
                            <th scope="col">দ্বিতীয় শ্রেণি</th>
                            <th scope="col">তৃতীয় শ্রেণি</th>
                            <th scope="col">চতুর্থ শ্রেণি</th>
                            <th scope="col">পঞ্চম শ্রেণি</th>
                            <th scope="col">ষষ্ঠ শ্রেণি</th>
                            <th scope="col">সপ্তম শ্রেণি</th>
                            <th scope="col">অষ্টম শ্রেণি</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <select class="custom-select" style="width:80px" name="preprimary_yn">
                                    <option value="1" <?php if($instRow->preprimary_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->preprimary_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_1_yn">
                                    <option value="1" <?php if($instRow->class_1_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_1_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_2_yn">
                                    <option value="1" <?php if($instRow->class_2_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_2_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_3_yn">
                                    <option value="1" <?php if($instRow->class_3_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_3_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_4_yn">
                                    <option value="1" <?php if($instRow->class_4_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_4_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_5_yn">
                                    <option value="1" <?php if($instRow->class_5_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_5_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_6_yn">
                                    <option value="1" <?php if($instRow->class_6_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_6_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_7_yn">
                                    <option value="1" <?php if($instRow->class_7_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_7_yn =='2'){echo "selected";} ?>>না</option>
                                </select>

                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="class_8_yn">
                                    <option value="1" <?php if($instRow->class_8_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->class_8_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="third_body">
            <div class="institute_info border" style="padding:10px; font-size:14px">
                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 18px">  ২. গ) বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর জন্য কোন কোন সুবিধা আছে </span><br>
                </div>
            </div>

            <div class="special_stud_facilities">
                <div class="row border" style="margin:0px">
                    <div class="col-md-6 border justify-content-center align-self-center">
                        <table class="table special">
                            <tbody>
                            <tr>
                                <th scope="row"><label for="academic_function_yn">শারীরিক প্রতিবন্ধিদের জন্য র‍্যাম্প আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="ramp_yn">
                                        <option value="1" <?php if($instRow->ramp_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->ramp_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের গমনোপযোগী ওয়াশব্লক কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="spc_washblock_yn">
                                        <option value="1" <?php if($instRow->spc_washblock_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->spc_washblock_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের হুইল চেয়ার আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="wheel_chair_yn">
                                        <option value="1" <?php if($instRow->wheel_chair_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->wheel_chair_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের ক্রাচ আছে কি না? </label>
                                </th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="cratch_yn">
                                        <option value="1" <?php if($instRow->cratch_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->cratch_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for=""> দৃষ্টি ফেন্সিং আছে কি না?</label></th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="vision_fencing">
                                        <option value="1" <?php if($instRow->vision_fencing =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->vision_fencing =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের কালার কন্ট্রাস্ট আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px" name="clr_contrast_yn">
                                        <option value="1" <?php if($instRow->clr_contrast_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->clr_contrast_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-6 border justify-content-center align-self-center">
                        <table class="table academic">
                            <tbody>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের ডেইজি বুক আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="daisy_book_yn">
                                        <option value="1" <?php if($instRow->daisy_book_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->daisy_book_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের ব্রেইল বই আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="brail_book_yn">
                                        <option value="1" <?php if($instRow->brail_book_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->brail_book_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">বাক প্রতিবন্ধিদের Sign Language Tutor আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="sign_lang_tutor_yn">
                                        <option value="1" <?php if($instRow->sign_lang_tutor_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->sign_lang_tutor_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">বাক প্রতিবন্ধিদের Sign Language Manual আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="sign_lang_manual_yn">
                                        <option value="1" <?php if($instRow->sign_lang_manual_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->sign_lang_manual_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শ্রবণ প্রতিবন্ধিদের নীরব পরিবেশ আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="silent_envr_yn">
                                        <option value="1" <?php if($instRow->silent_envr_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->silent_envr_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শ্রবণ প্রতিবন্ধিদের Hearing Aid আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px" name="hearing_aid_yn">
                                        <option value="1" <?php if($instRow->hearing_aid_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                        <option value="2" <?php if($instRow->hearing_aid_yn =='2'){echo "selected";} ?>>না</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
                <div class="pull-right">
                    <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px" value="Save and Go Forward">
                </div>

            </form>
    </div>
</div>

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
<script src="js/app.js" defer></script>
</body>
</html>
