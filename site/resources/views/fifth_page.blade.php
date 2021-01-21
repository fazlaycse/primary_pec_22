@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! institute_sanitations->
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
        <a href="#" class="active" >পঞ্চম পাতা</a>
        <a href="#" >ষষ্ঠ পাতা</a>
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

        <form class="form-group" method="POST" action="fifth_page_save" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                            <?php $instRow = $instRowObj->institute_sanitations;?>
                            <td><input type="number" style="width: 70px; align-content: center" name="toilet_no" value="{{$instRow->toilet_no}}"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_users">
                                    <option  value="1" <?php if($instRow->toilet_users =='1'){echo "selected";}?> >বালক</option>
                                    <option value="2" <?php if($instRow->toilet_users =='2'){echo "selected";}?>>বালিকা</option>
                                    <option value="3" <?php if($instRow->toilet_users =='3'){echo "selected";}?>>বালক-বালিকা যৌথ</option>
                                    <option value="4" <?php if($instRow->toilet_users =='4'){echo "selected";}?>>সহ: শিক্ষক</option>
                                    <option value="5" <?php if($instRow->toilet_users =='5'){echo "selected";}?>>প্রধান শিক্ষক</option>
                                    <option value="6" <?php if($instRow->toilet_users =='6'){echo "selected";}?>>শিক্ষকদের যৌথ</option>
                                    <option value="7"<?php if($instRow->toilet_users =='7'){echo "selected";}?>>বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_curcond">
                                    <option  value="1" <?php if($instRow->toilet_curcond =='1'){echo "selected";}?>>ভালো</option>
                                    <option value="2"<?php if($instRow->toilet_curcond =='2'){echo "selected";} ?>>নির্মাণাধীন</option>
                                    <option value="3"<?php if($instRow->toilet_curcond =='3'){echo "selected";} ?>>জরাজীর্ণ</option>
                                    <option value="4"<?php if($instRow->toilet_curcond =='4'){echo "selected";} ?>>ঝুকিপূর্ণ</option>
                                    <option value="5"<?php if($instRow->toilet_curcond =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="clean_mat_yn">
                                    <option  value="1" > <?php if($instRow->clean_mat_yn =='1'){echo "selected";}?>হ্যাঁ</option>
                                    <option value="2"  <?php if($instRow->clean_mat_yn =='2'){echo "selected";}?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_soap_yn">
                                    <option  value="1" <?php if($instRow->hand_soap_yn =='1'){echo "selected";}?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->hand_soap_yn =='2'){echo "selected";}?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toilet_water_yn">
                                    <option  value="1"<?php if($instRow->toi_water_yn =='1'){echo "selected";}?>>আছে</option>
                                    <option value="2"<?php if($instRow->toi_water_yn =='2'){echo "selected";}?>>নাই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_project">
                                    <option value="1"<?php if($instRow->toi_project =='1'){echo "selected";}?>> পিডিপি-১</option>
                                    <option value="2"<?php if($instRow->toi_project =='2'){echo "selected";}?>> পিডিপি-২</option>
                                    <option value="3"<?php if($instRow->toi_project =='3'){echo "selected";}?>> পিডিপি-৩</option>
                                    <option value="4"<?php if($instRow->toi_project =='4'){echo "selected";}?>>পিডিপি-৪</option>
                                    <option value="5"<?php if($instRow->toi_project =='5'){echo "selected";}?>>অন্যান্য</option>
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
