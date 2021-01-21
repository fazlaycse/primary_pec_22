@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<!  washblocks->
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
        <a href="#" >চতুর্থ পাতা</a>
        <a href="#"  >পঞ্চম পাতা</a>
        <a href="#" class="active" >ষষ্ঠ পাতা</a>
        <a href="#" >সপ্তম পাতা</a>
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

        <form class="form-group" method="POST" action="sixth_page_save" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                            <?php $instRow = $instRowObj->washblocks;?>
                            <td><input type="number" style="width: 70px; align-content: center" name="wsblk_amount" value="{{$instRow->wsblk_amount}}"></td>
                            <td><input type="text" style="width: 70px; align-content: center" name="w_es_year" value="{{$instRow->w_es_year}}"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_user">
                                    <option  value="1" <?php if($instRow->wsblk_user =='1'){echo "selected";}?>>বালক</option>
                                    <option value="2"<?php if($instRow->wsblk_user =='2'){echo "selected";}?>>বালিকা</option>
                                    <option value="3"<?php if($instRow->wsblk_user =='3'){echo "selected";}?>>পুরুষ শিক্ষক</option>
                                    <option value="4"<?php if($instRow->wsblk_user =='4'){echo "selected";}?>>মহিলা শিক্ষিকা</option>
                                    <option value="5"<?php if($instRow->wsblk_user =='5'){echo "selected";}?>>বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="..." name="wsblk_condition">
                                    <option value="1"<?php if($instRow->wsblk_condition =='1'){echo "selected";}?>>ভালো</option>
                                    <option value="2"<?php if($instRow->wsblk_condition =='2'){echo "selected";}?>>নির্মাণাধীন</option>
                                    <option value="3"<?php if($instRow->wsblk_condition =='3'){echo "selected";}?>>জরাজীর্ণ</option>
                                    <option value="4"<?php if($instRow->wsblk_condition =='4'){echo "selected";}?>>ঝুকিপূর্ণ</option>
                                    <option value="5"<?php if($instRow->wsblk_condition =='5'){echo "selected";}?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn">
                                    <option  value="1"<?php if($instRow->wsblk_std_yn =='1'){echo "selected";}?>>হ্যাঁ</option>
                                    <option value="2"<?php if($instRow->wsblk_std_yn =='2'){echo "selected";}?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn">
                                    <option  value="1"<?php if($instRow->cleaning_agent_yn =='1'){echo "selected";}?>>হ্যাঁ</option>
                                    <option value="2"<?php if($instRow->cleaning_agent_yn =='2'){echo "selected";}?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toilet_water_yn">
                                    <option  value="1"<?php if($instRow->toilet_water_yn =='1'){echo "selected";}?>>আছে</option>
                                    <option value="2"<?php if($instRow->toilet_water_yn =='2'){echo "selected";}?>>নাই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_wash_yn">
                                    <option  value="1"<?php if($instRow->hand_wash_yn =='1'){echo "selected";}?>>হ্যাঁ</option>
                                    <option value="2"<?php if($instRow->hand_wash_yn =='2'){echo "selected";}?>>না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>


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
