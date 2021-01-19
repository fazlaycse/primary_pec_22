@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! buildings, building_infos, Special_std_facilities, institute_sanitations, washblocks,water_facilities,ict_multimedias table->
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
        <a href="#" class="active">চতুর্থ পাতা</a>
        <a href="#">প্রাক-প্রাথমিক</a>
        <a href="#">প্রথম শ্রেণি</a>
        <a href="#">দ্বিতীয় শ্রেণি</a>
        <a href="#">তৃতীয় শ্রেণি</a>
        <a href="#">চতুর্থ শ্রেণি</a>
        <a href="#">পঞ্চম শ্রেণি</a>
        <a href="#">ষষ্ঠ-অষ্টম শ্রেণি</a>
        <a href="#">শিক্ষক ও কর্মচারী</a>
    </div>
    <br>
    <div class="body_table" style="background-color: #b0d4f1;">

        <form class="form-group" method="POST" action="buildings_add" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="table_third_heading">
                <span style="font-weight: bold; font-size: 17px"> ৩. বিদ্যালয়ের ভবনের তথ্য: </span> <span
                        style=" font-size: 15px">(শুধুমাত্র বিদ্যালয়ের ধরন: ০১, ০৪, ২৬ এবং ৯৯ এর জন্য প্রযোজ্য) </span>
                <div class="table_third_one">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">মোট ভবন সংখ্যা</th>
                            <th scope="col">ভবনের নম্বর</th>
                            <th scope="col">ভবনটি কত তলা বিশিষ্ট</th>
                            <th scope="col">নির্মানের সাল</th>
                            <th scope="col">ভবনটি কত তলার ভিত্তি বিশিষ্ট</th>
                            <th scope="col">ভবনের কক্ষ সংখ্যা</th>
                            <th scope="col">ভবনের বর্তমান অবস্থা</th>
                            <th scope="col">কোন প্রকল্প/প্রোগ্রামে নির্মিত হয়েছে?</th>
                            <th scope="col">বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য র‍্যাম আছে কি?</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="1"><input type="number" style="width: 70px; align-content: center" name="number_of_building"></td>
                            <td><input type="number" style="width: 70px" name="building_no"></td>
                            <td><input type="number" style="width: 70px" name="storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition">
                                    <option  value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name">
                                    <option  value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩</option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="bld_ramp_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="table_third_heading2new">
                <span style="font-weight: bold; font-size: 17px"> ৪. বিদ্যালয়ের স্যানিটেশন ব্যবস্থা </span> <span
                        style="font-size: 15px "> (ওয়াশব্লক ব্যতীত): </span>
                <div class="table_third_two">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 100px">টয়লেটের ক্রমিক নম্বর</th>
                            <th scope="col">ব্যবহারকারী</th>
                            <th scope="col">বর্তমান অবস্থা</th>
                            <th scope="col">পরিস্কারক দ্রব্যাদি আছে কি?</th>
                            <th scope="col">Hand-Wash/সাবান/হারপিক/ফিনাইল ব্যবহার হয় কি না?</th>
                            <th scope="col">টয়লেটে পানির সরবরাহ</th>
                            <th scope="col">কোন প্রকল্প/প্রোগ্রামে নির্মিত হয়েছে?</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">১.</th>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_user">
                                    <option  value="1">বালক</option>
                                    <option value="2">বালিকা</option>
                                    <option value="3">বালক-বালিকা যৌথ</option>
                                    <option value="4">সহ: শিক্ষক</option>
                                    <option value="5">প্রধান শিক্ষক</option>
                                    <option value="6">শিক্ষকদের যৌথ</option>
                                    <option value="7">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_condition">
                                    <option  value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_wash_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toilet_water_yn">
                                    <option  value="1">আছে</option>
                                    <option value="2">নাই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_project">
                                    <option value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩</option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="table_third_heading2">
                <span style="font-weight: bold; font-size: 18px"> ৫. বিদ্যালয়ের ওয়াশব্লক ব্যবস্থা <span
                            style="font-size: 15px">(বিদ্যালয়ের ওয়াশব্লক নির্মিত বলতে নির্মাণকাজ সম্পন্ন পূর্বক ব্যবহার উপযোগী বুঝাবে):</span> <span
                            style="font-size: 14px; font-weight: normal"> ( শুধুমাত্র বিদ্যালয়ের ধরণ: ০১, ০৪ এবং ৯৯ এর জন্য প্রযোজ্য) </span> </span>
                <div class="table_third_two">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ওয়াশ ব্লকের সংখ্যা</th>
                            <th scope="col">নির্মাণের সাল</th>
                            <th scope="col">ব্যবহারকারী</th>
                            <th scope="col">বর্তমান অবস্থা</th>
                            <th scope="col">ওয়াশ ব্লক শিক্ষার্থী কর্তৃক ব্যবহৃত হচ্ছে কি?</th>
                            <th scope="col">পরিস্কারক দ্রব্যাদি আছে কি?</th>
                            <th scope="col">টয়লেটে পানির সরবরাহ</th>
                            <th scope="col">Hand Washing/সাবান আছে কি না?</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><input type="number" style="width: 70px; align-content: center" name="wsblk_amount">
                            </td>
                            <td><input type="number" style="width: 70px" name="wsblk_estb_year"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_user">
                                    <option  value="1">বালক</option>
                                    <option value="2">বালিকা</option>
                                    <option value="3">পুরুষ শিক্ষক</option>
                                    <option value="4">মহিলা শিক্ষিকা</option>
                                    <option value="5">বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="..." name="wsblk_condition">
                                    <option  value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toilet_water_yn">
                                    <option  value="1">আছে</option>
                                    <option value="2">নাই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_wash_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="table_third_heading3">
                <span style="font-weight: bold; font-size: 18px"> ৬. বিদ্যালয়ের পানীয় জলের ব্যবস্থা: </span>
                <div class="table_third_three">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">বিদ্যালয়ে নিরাপদ ও বিশুদ্ধ খাবার পানির উৎস</th>
                            <th scope="col">উৎসের বর্তমান অবস্থা</th>
                            <th scope="col">মেরামত/সংস্কারযোগ্য</th>
                            <th scope="col">নলকূপের ক্ষেত্রে</th>
                            <th scope="col"> কোন প্রকল্পের আওতায় নির্মিত</th>
                            <th scope="col"> ইকোলায় টেস্ট করা হয়েছে কি না?</th>
                            <th scope="col">নলকূপের পানিতে লবণাক্ততা-১, আয়রণ-২, না থাকলে -০ লিখুন</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" style="width: 150px"><span>সরবরাহ বা সাপ্লাই </span></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="supp_src_condition">
                                    <option value="1" <?php if($instRow->supp_src_condition =='1'){echo "selected";} ?>>ভালো</option>
                                    <option value="2" <?php if($instRow->supp_src_condition =='2'){echo "selected";} ?>>মোটামুটি</option>
                                    <option value="3" <?php if($instRow->supp_src_condition =='3'){echo "selected";} ?>>খারাপ</option>
                                    <option value="4" <?php if($instRow->supp_src_condition =='4'){echo "selected";} ?>>খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->supp_src_condition =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="supp_rpable_yn">
                                    <option  value="1" <?php if($instRow->supp_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->supp_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <!-- for tubewell only-->
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="supp_src_project">
                                    <option value="1" <?php if($instRow->supp_src_project =='1'){echo "selected";} ?>> পিডিপি-১</option>
                                    <option value="2" <?php if($instRow->supp_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->supp_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->supp_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->supp_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="supp_ecoli_test_yn">
                                    <option value="1" <?php if($instRow->supp_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->supp_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td></td> <!-- for tubewell only-->
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>নলকূপ </span></th>
                            <td>
                                <select class="custom-select" style="..." name="tbwell_condition">
                                    <option value="1" <?php if($instRow->tbwell_condition =='1'){echo "selected";} ?>>ভালো</option>
                                    <option value="2" <?php if($instRow->tbwell_condition =='2'){echo "selected";} ?>>মোটামুটি</option>
                                    <option value="3" <?php if($instRow->tbwell_condition =='3'){echo "selected";} ?>>খারাপ</option>
                                    <option value="4" <?php if($instRow->tbwell_condition =='4'){echo "selected";} ?>>খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->tbwell_condition =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="tbwell_rpable_yn">
                                    <option value="1" <?php if($instRow->tbwell_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->tbwell_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:120px" name="tbwell_ars_test_yn">
                                    <option value="1" <?php if($instRow->tbwell_ars_test_yn =='1'){echo "selected";} ?>>আর্সেনিকমুক্ত</option>
                                    <option value="2" <?php if($instRow->tbwell_ars_test_yn =='2'){echo "selected";} ?>>আর্সেনিকযুক্ত</option>
                                    <option value="3" <?php if($instRow->tbwell_ars_test_yn =='3'){echo "selected";} ?>>আর্সেনিক দূষণ এলাকা</option>
                                    <option value="4" <?php if($instRow->tbwell_ars_test_yn =='4'){echo "selected";} ?>>পরীক্ষা করা হয়নি</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="tbwell_project">
                                    <option value="1" <?php if($instRow->tbwell_project =='1'){echo "selected";} ?>> পিডিপি-১</option>
                                    <option value="2" <?php if($instRow->tbwell_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->tbwell_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->tbwell_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->tbwell_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="tbwell_ecoli_test_yn">
                                    <option value="1" <?php if($instRow->tbwell_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->tbwell_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><input type="number" style="width: 70px" name="tbwell_salt_test" value=""{{$instRow->tbwell_salt_test}}""></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>ফিল্টার </span></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="filter_src_condition">
                                    <option value="1" <?php if($instRow->filter_src_condition =='1'){echo "selected";} ?>>ভালো</option>
                                    <option value="2" <?php if($instRow->filter_src_condition =='2'){echo "selected";} ?>>মোটামুটি</option>
                                    <option value="3" <?php if($instRow->filter_src_condition =='3'){echo "selected";} ?>>খারাপ</option>
                                    <option value="4" <?php if($instRow->filter_src_condition =='4'){echo "selected";} ?>>খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->filter_src_condition =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="filter_rpable_yn">
                                    <option value="1" <?php if($instRow->filter_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->filter_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <!-- for tubewell only-->
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="filter_src_project">
                                    <option value="1" <?php if($instRow->filter_src_project =='1'){echo "selected";} ?>> পিডিপি-১</option>
                                    <option value="2" <?php if($instRow->filter_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->filter_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->filter_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->filter_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="filter_ecoli_test_yn">
                                    <option value="1" <?php if($instRow->filter_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->filter_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><!-- for tubewell only--></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>অন্যান্য </span></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="other_src_condition">
                                    <option value="1" <?php if($instRow->other_src_condition =='1'){echo "selected";} ?>>ভালো</option>
                                    <option value="2" <?php if($instRow->other_src_condition =='2'){echo "selected";} ?>>মোটামুটি</option>
                                    <option value="3" <?php if($instRow->other_src_condition =='3'){echo "selected";} ?>>খারাপ</option>
                                    <option value="4" <?php if($instRow->other_src_condition =='4'){echo "selected";} ?>>খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->other_src_condition =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="other_rpable_yn">
                                    <option value="1" <?php if($instRow->other_rpable_yn =='5'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->other_rpable_yn =='5'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <!-- for tubewell only-->
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="other_src_project">
                                    <option value="1" <?php if($instRow->other_src_project =='1'){echo "selected";} ?>> পিডিপি-১</option>
                                    <option value="2" <?php if($instRow->other_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->other_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->other_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->other_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="other_ecoli_test_yn">
                                    <option value="1" <?php if($instRow->other_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->other_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><!-- for tubewell only--></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="table_third_heading4">
                <span style="font-weight: bold; font-size: 18px"> ৭. বিদ্যালয়ের তথ্য প্রযুক্তি, মাল্টিমিডিয়া ও অন্যান্য তথ্য: <span
                            style="font-size: 15px; font-weight: normal"> ( শুধুমাত্র বিদ্যালয়ের ধরণ: ০১, ০৪, ২৬ এবং ৯৯ এর জন্য প্রযোজ্য) </span></span>
                <div class="table_third_four">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width:550px"></th>
                            <th scope="col">আছে কি না?</th>
                            <th scope="col">মোট প্রাপ্ত সংখ্যা লিখুন</th>
                            <th scope="col" style="width:200px">প্রাশিঅ ব্যতীত অন্যান্য উৎস থেকে প্রাপ্ত সংখ্যা লিখুন
                            </th>
                            <th scope="col"> অচল থাকলে (সংখ্যা লিখুন)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" style="width: 150px"><span>বিদ্যালয়ের জন্য কম্পিউটার / ডেস্কটপ </span></th>
                            <td>
                                <select class="custom-select" style="width:80px" name="desktop_yn">
                                    <option value="1" <?php if($instRow->desktop_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->desktop_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><input type="number" style="width: 70px" name="desktop_amount" value="{{ $instRow->desktop_amount}}"></td>
                            <td><input type="number" style="width: 70px" name="dsktp_other_src_amnt" value="{{ $instRow->dsktp_other_src_amnt}}"></td>
                            <td><input type="number" style="width: 70px" name="dsktp_dmg_amnt" value="{{ $instRow->dsktp_dmg_amnt}}"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>বিদ্যালয়ের জন্য ল্যাপটপ </span></th>
                            <td>
                                <select class="custom-select" style="width:80px" name="laptop_yn">
                                    <option  value="1" <?php if($instRow->laptop_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->laptop_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><input type="number" style="width: 70px" name="lptop_amount" value="{{ $instRow->lptop_amount}}"></td>
                            <td><input type="number" style="width: 70px" name="lptop_other_src_amnt" value="{{ $instRow->lptop_other_src_amnt}}"></td>
                            <td><input type="number" style="width: 70px" name="lptop_dmg_amnt" value="{{ $instRow->lptop_dmg_amnt}}"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>ইন্টারনেট সংযোগের ধরণ (ব্রডব্যান্ড-১/ওয়াইফাই-২/মডেম-৩/ব্যবস্থা না থাকলে-৪ লিখুন) </span>
                            </th>
                            <td>
                                <select class="custom-select" style="width:80px" name="internet_type">
                                    <option value="1" <?php if($instRow->internet_type =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->internet_type =='2'){echo "selected";} ?>>না</option>
                                </select>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>তথ্যপ্রযুক্তি ব্যবহারে সক্ষম শিখক আছে কি</span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="ict_known_teacher_yn">
                                    <option value="1" <?php if($instRow->ict_known_teacher_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->ict_known_teacher_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">
                                <span>ডেস্কটপ/ল্যাপটপ শিখন-শিখানো কাজে ব্যবহৃত হয় কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="dsktp_use_yn">
                                    <option value="1" <?php if($instRow->dsktp_use_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->dsktp_use_yn =='2'){echo "selected";} ?>>না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"> ইন্টারনেট শিখন-শিখানো কাজে ব্যবহৃত হয় কি <span></span>
                            </th>
                            <th>
                                <select class="custom-select" style="width:80px" name="internet_use_yn">
                                    <option  value="1" <?php if($instRow->internet_use_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->internet_use_yn =='2'){echo "selected";} ?>>না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">
                                <span>বিদ্যালয়ের শ্রেণিকক্ষে মাল্টিমিডিয়া ব্যবহার হয় কি</span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_use_yn">
                                    <option value="1" <?php if($instRow->mltmdia_use_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_use_yn =='2'){echo "selected";} ?>>না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>মাল্টিমিডিয়া বেইসড ক্লাসরুম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_class_yn">
                                    <option value="1" <?php if($instRow->mltmdia_class_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_class_yn =='2'){echo "selected";} ?>>না</option>
                                </select></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">
                                <span> মাল্টিমিডিয়া ইন্টারএক্টিভ ক্লাসরুম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_intr_class_yn">
                                    <option value="1" <?php if($instRow->mltmdia_intr_class_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_intr_class_yn =='2'){echo "selected";} ?>>না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>সাউন্ড সিস্টেম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="sound_system_yn">
                                    <option value="1" <?php if($instRow->sound_system_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->sound_system_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>শিখন-শিখানো কাজে ইলেকট্রিক ডিভাইস ব্যবহৃত হয় কি না </span>
                            </th>
                            <th>
                                <select class="custom-select" style="width:80px" name="electr_device_pdg_yn">
                                    <option value="1" <?php if($instRow->electr_device_pdg_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->electr_device_pdg_yn =='2'){echo "selected";} ?>>না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pull-right">

                <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                       value="Save and Go Forward">
            </div>
        </form>
    </div>


    <div style="clear: both">

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

</div>
<script src="js/app.js" defer></script>
</body>
</html>
