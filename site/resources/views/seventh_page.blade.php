@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! water_facilities, ict_multimedias table->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}
    <div class="body_table" style="background-color: #b0d4f1;">

        <form class="form-group" method="POST" action="seventh_page_save" enctype="multipart/form-data">

          {{--  {{ csrf_field() }}

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
                            <th scope="col">কোন প্রকল্পের আওতায় নির্মিত</th>
                            <th scope="col"> ইকোলায় টেস্ট করা হয়েছে কি না?</th>
                            <th scope="col">নলকূপের পানিতে লবণাক্ততা-১, আয়রণ-২, না থাকলে -০ লিখুন</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" style="width: 150px"><span>১. সরবরাহ বা সাপ্লাই </span></th>
                            <td>
                                <?php $instRow = $instRowObj->water_facilities;?>
                                <select class="custom-select" style="width:90px" name="supp_src_condition">
                                    <option></option>
                                    <option value="1" <?php if($instRow->supp_src_condition =='1'){echo "selected";} ?>>১.ভালো</option>
                                    <option value="2" <?php if($instRow->supp_src_condition =='2'){echo "selected";} ?>>২.মোটামুটি</option>
                                    <option value="3" <?php if($instRow->supp_src_condition =='3'){echo "selected";} ?>>৩.খারাপ</option>
                                    <option value="4" <?php if($instRow->supp_src_condition =='4'){echo "selected";} ?>>৪.খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->supp_src_condition =='5'){echo "selected";} ?>>৫.পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="supp_rpable_yn">
                                    <option></option>

                                    <option  value="1" <?php if($instRow->supp_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->supp_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>

                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="supp_src_project">
                                    <option></option>

                                    <option value="2" <?php if($instRow->supp_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->supp_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->supp_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->supp_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="supp_ecoli_test_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->supp_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->supp_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td></td> <!-- for tubewell only-->
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>২. নলকূপ </span></th>
                            <td>
                                <select class="custom-select" style="..." name="tbwell_condition">
                                    <option></option>

                                    <option value="1" <?php if($instRow->tbwell_condition =='1'){echo "selected";} ?>>১.ভালো</option>
                                    <option value="2" <?php if($instRow->tbwell_condition =='2'){echo "selected";} ?>>২.মোটামুটি</option>
                                    <option value="3" <?php if($instRow->tbwell_condition =='3'){echo "selected";} ?>>৩.খারাপ</option>
                                    <option value="4" <?php if($instRow->tbwell_condition =='4'){echo "selected";} ?>>৪.খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->tbwell_condition =='5'){echo "selected";} ?>>৫.পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="tbwell_rpable_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->tbwell_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->tbwell_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:120px" name="tbwell_ars_test_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->tbwell_ars_test_yn =='1'){echo "selected";} ?>>১.আর্সেনিকমুক্ত</option>
                                    <option value="2" <?php if($instRow->tbwell_ars_test_yn =='2'){echo "selected";} ?>>২.আর্সেনিকযুক্ত</option>
                                    <option value="3" <?php if($instRow->tbwell_ars_test_yn =='3'){echo "selected";} ?>>৩.আর্সেনিক দূষণ এলাকা অথবা পরীক্ষা করা হয়নি</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="tbwell_project">
                                    <option></option>

                                    <option value="2" <?php if($instRow->tbwell_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->tbwell_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->tbwell_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->tbwell_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="tbwell_ecoli_test_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->tbwell_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->tbwell_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><input type="number" style="width: 70px" name="tbwell_salt_test" value="{{$instRow->tbwell_salt_test}}"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>৩. ফিল্টার </span></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="filter_src_condition">
                                    <option></option>

                                    <option value="1" <?php if($instRow->filter_src_condition =='1'){echo "selected";} ?>>১.ভালো</option>
                                    <option value="2" <?php if($instRow->filter_src_condition =='2'){echo "selected";} ?>>২.মোটামুটি</option>
                                    <option value="3" <?php if($instRow->filter_src_condition =='3'){echo "selected";} ?>>৩.খারাপ</option>
                                    <option value="4" <?php if($instRow->filter_src_condition =='4'){echo "selected";} ?>>৪.খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->filter_src_condition =='5'){echo "selected";} ?>>৫.পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="filter_rpable_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->filter_rpable_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->filter_rpable_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <!-- for tubewell only-->
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="filter_src_project">
                                    <option></option>

                                    <option value="2" <?php if($instRow->filter_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->filter_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->filter_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->filter_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="filter_ecoli_test_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->filter_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->filter_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><!-- for tubewell only--></td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>৪. অন্যান্য </span></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="other_src_condition">
                                    <option></option>

                                    <option value="1" <?php if($instRow->other_src_condition =='1'){echo "selected";} ?>>১.ভালো</option>
                                    <option value="2" <?php if($instRow->other_src_condition =='2'){echo "selected";} ?>>২.মোটামুটি</option>
                                    <option value="3" <?php if($instRow->other_src_condition =='3'){echo "selected";} ?>>৩.খারাপ</option>
                                    <option value="4" <?php if($instRow->other_src_condition =='4'){echo "selected";} ?>>৪.খনন/নির্মাণ চলমান</option>
                                    <option value="5" <?php if($instRow->other_src_condition =='5'){echo "selected";} ?>>৫.পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="other_rpable_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->other_rpable_yn =='5'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->other_rpable_yn =='5'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td>
                                <!-- for tubewell only-->
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="other_src_project">
                                    <option></option>

                                    <option value="2" <?php if($instRow->other_src_project =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->other_src_project =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->other_src_project =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->other_src_project =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="other_ecoli_test_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->other_ecoli_test_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->other_ecoli_test_yn =='2'){echo "selected";} ?>>না</option>
                                </select>
                            </td>
                            <td><!-- for tubewell only--></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>--}}





            <hr>
            <div class="table_third_heading4">
                <span style="font-weight: bold; font-size: 18px"> ৭. বিদ্যালয়ের তথ্য প্রযুক্তি, মাল্টিমিডিয়া ও অন্যান্য তথ্য: <span
                            style="font-size: 15px; font-weight: normal">  </span></span>
                <div class="table_third_four">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width:550px"></th>
                            <th scope="col">আছে কি না?</th>
                            <th scope="col">মোট প্রাপ্ত সংখ্যা </th>
                            <th scope="col" style="width:200px">প্রাশিঅ ব্যতীত অন্যান্য উৎস থেকে প্রাপ্ত সংখ্যা
                            </th>
                            <th scope="col"> অচল থাকলে সংখ্যা</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $instRow = $instRowObj->ict_multimedias;?>



                        <tr>
                            <th scope="row" style="width: 150px"><span>১. ইন্টারনেট সংযোগের ধরন </span>
                            </th>
                            <td>
                                <select class="custom-select" style="width:80px" name="internet_type">
                                    <option></option>

                                    <option value="1" <?php if($instRow->internet_type =='1'){echo "selected";} ?>>১.ব্রডব্যান্ড</option>
                                    <option value="2" <?php if($instRow->internet_type =='2'){echo "selected";} ?>>২.ওয়্যারলেস</option>
                                    <option value="3" <?php if($instRow->internet_type =='3'){echo "selected";} ?>>৩.টিএন্ডটি</option>
                                    <option value="4" <?php if($instRow->internet_type =='4'){echo "selected";} ?>>৪.নেই</option>
                                </select>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>২. তথ্যপ্রযুক্তি ব্যবহারে সক্ষম শিখক আছে কি</span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="ict_known_teacher_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->ict_known_teacher_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->ict_known_teacher_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select>
                            </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">
                                <span>৩. ডেস্কটপ/ল্যাপটপ শিখন-শিখানো কাজে ব্যবহৃত হয় কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="dsktp_use_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->dsktp_use_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->dsktp_use_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">৪. ইন্টারনেট শিখন-শিখানো কাজে ব্যবহৃত হয় কি <span></span>
                            </th>
                            <th>
                                <select class="custom-select" style="width:80px" name="internet_use_yn">
                                    <option></option>

                                    <option  value="1" <?php if($instRow->internet_use_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->internet_use_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px">
                                <span>৫. বিদ্যালয়ের শ্রেণিকক্ষে মাল্টিমিডিয়া ব্যবহার হয় কি</span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_use_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->mltmdia_use_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_use_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>৬. মাল্টিমিডিয়া বেইসড ক্লাসরুম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_class_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->mltmdia_class_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_class_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>


                        <tr>
                            <th scope="row" style="width: 150px">
                                <span>৭. মাল্টিমিডিয়া ইন্টারএক্টিভ ক্লাসরুম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="mltmdia_intr_class_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->mltmdia_intr_class_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->mltmdia_intr_class_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select> </th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 150px"><span>৮. সাউন্ড সিস্টেম আছে কি </span></th>
                            <th>
                                <select class="custom-select" style="width:80px" name="sound_system_yn">
                                    <option></option>

                                    <option value="1" <?php if($instRow->sound_system_yn =='1'){echo "selected";} ?>>১.হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->sound_system_yn =='2'){echo "selected";} ?>>২.না</option>
                                </select>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                            <th scope="row"><span>প্রযোজ্য নয় </span></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


           {{-- <?php $instRow = $instRowObj->special_std_facilities; ?>--}}
            <div class="third_body">
                <div class="institute_info border" style="padding:10px; font-size:14px">
                    <div class="table_heading">
                        <span style="font-weight: bold; font-size: 18px"> ৮।  বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর জন্য সুবিধাসমূহ</span><br>
                    </div>
                </div>

                <div class="special_stud_facilities">
                    <div class="row border" style="margin:0px">
                        <div class="col-md-6 border justify-content-center align-self-center">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="academic_function_yn">১. শারীরিক প্রতিবন্ধিদের জন্য
                                            র‍্যাম্প আছে কি না? </label></th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="ramp_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->ramp_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->ramp_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">২. শারীরিক প্রতিবন্ধিদের গমনোপযোগী ওয়াশব্লক কি
                                            না? </label></th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="spc_washblock_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->spc_washblock_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->spc_washblock_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr> <!-- নতুন কোড-->
                                    <th scope="row"><label for="">৩. প্রতিবন্ধি ও অটিস্টিক শুশুদের জন্য র‍্যাম্পসহ উপযুক্ত টয়লেট </label></th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="spc_washblock_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->spc_washblock_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->spc_washblock_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr> <!-- নতুন কোড-->

                                <tr>
                                    <th scope="row"><label for="">৪. শারীরিক প্রতিবন্ধিদের হুইল চেয়ার আছে কি
                                            না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="wheel_chair_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->wheel_chair_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->wheel_chair_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">৫. শারীরিক প্রতিবন্ধিদের ক্রাচ আছে কি না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="cratch_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->cratch_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->cratch_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">৬. দৃষ্টি ফেন্সিং আছে কি না?</label></th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="vision_fencing">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->vision_fencing == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->vision_fencing == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">৭. দৃষ্টি প্রতিবন্ধিদের কালার কন্ট্রাস্ট আছে কি
                                            না? </label></th>
                                    <td>
                                        <select class="custom-select" style="width:70px" name="clr_contrast_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->clr_contrast_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->clr_contrast_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-6 border justify-content-center align-self-center">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row"><label for="">৮. দৃষ্টি প্রতিবন্ধিদের ডেইজি বুক আছে কি না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="daisy_book_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->daisy_book_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->daisy_book_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">৯. দৃষ্টি প্রতিবন্ধিদের ব্রেইল বই আছে কি না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="brail_book_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->brail_book_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->brail_book_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">১০. বাক প্রতিবন্ধিদের Sign Language Tutor আছে কি
                                            না? </label></th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="sign_lang_tutor_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->sign_lang_tutor_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->sign_lang_tutor_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">১১. বাক প্রতিবন্ধিদের Sign Language Manual আছে কি
                                            না? </label></th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="sign_lang_manual_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->sign_lang_manual_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->sign_lang_manual_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">১২. শ্রবণ প্রতিবন্ধিদের নীরব পরিবেশ আছে কি
                                            না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="silent_envr_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->silent_envr_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->silent_envr_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="">১৩. শ্রবণ প্রতিবন্ধিদের Hearing Aid আছে কি
                                            না? </label>
                                    </th>
                                    <td>
                                        <select class="custom-select" style="width:90px" name="hearing_aid_yn">
                                            <option></option>

                                            <option value="1" <?php if ($instRow->hearing_aid_yn == '1') {
                                                echo "selected";
                                            } ?>>হ্যাঁ
                                            </option>
                                            <option value="2" <?php if ($instRow->hearing_aid_yn == '2') {
                                                echo "selected";
                                            } ?>>না
                                            </option>
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

                <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                       value="Save and Next">
            </div>
        </form>
    </div>


    <div style="clear: both">

    </div>

    <div style="clear: both">

    </div>

    {{--Include Footer--}}
    @include('common.footer')
    {{--Include Footer End--}}

</div>
<script src="js/app.js" defer></script>
</body>
</html>
