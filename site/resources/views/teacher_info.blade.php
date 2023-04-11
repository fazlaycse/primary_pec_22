@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script>
        window.teacherData = '<?php echo $instRow; ?>';
    </script>
    <style>
        th, td{

            width: auto !important;
        }

        select {
            width: auto !important;
        }

        .mltipl-select {
            font-size: 14px;
        }

        .select-box-align {
            width: 100px;
            text-align: left;
            margin: 0;
            padding: 0;
        }

        input[type='checkbox'] {
            margin-right: 3px !important;
        }
    </style>
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}

    <form class="form-group">
        {{ csrf_field() }}
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <?php //$instRow = $instRow->teacher_infos;?>
        <div class="teacher_info border" style="overflow: scroll; background-color: #b0d4f1;">

            <div class="teacher_profile">
                <br>
                <div style="font-size: 18px;font-weight: bold;padding:5px">বিদ্যালয়ের শিক্ষকের বিস্তারিত তথ্য:</div>
                <div class="table_third_three">
                    <table class="table table-bordered text-center">
                        <tbody style="background-color: skyblue">

                        <tr style="font-weight: bold;">
                            <td rowspan="2" scope="col">নং</td>
                            <td rowspan="2" scope="col">শিক্ষকের নাম (বাংলা ও ইংরেজি)</td>
                            <td rowspan="2" scope="col">মোবাইল নম্বর</td>
                            <td rowspan="2" scope="col">জন্ম তারিখ(১)</td>
                            <td rowspan="2" scope="col">জেন্ডার</td>
                            <td rowspan="2" scope="col">সর্বোচ্চ অর্জিত ডিগ্রি</td>
                            <td colspan="2" scope="col">পেশাগত যোগ্যতা</td>
                            <td rowspan="2" scope="col">ক্ষুদ্র নৃ-গোষ্ঠী</td>
                            <td rowspan="2" scope="col">পদবী</td>
                            <td rowspan="2" scope="col">এ বিদ্যালয়ে পদায়িত</td>
                            <td rowspan="2" scope="col">এ বিদ্যালয়ে উপস্থিত</td>
                            <td rowspan="2" scope="col">যোগদানের তারিখ</td>
                        </tr>
                        <tr>
                            <td>স্বল্প মেয়াদি</td>
                            <td>দীর্ঘ মেয়াদি</td>
                        </tr>

                        <tr v-for="(item, index) in rowData">
                            <td style="width: 10px">@{{index+1}}</td>
                            <td>
                                <input type="text" style="width: 200px;" placeholder="নাম (বাংলায়):"
                                       name="tname_bangla" v-model="item.tname_bangla"><br><br>
                                <input type="text" style="width: 200px;" placeholder="Name in English:"
                                       name="tname_english" v-model="item.tname_english">
                            </td>

                            <td>
                                <input type="text" style="width: 200px;" placeholder="মোবাইল"
                                       name="tname_bangla" v-model="item.tname_bangla"><br><br>
                            </td>

                            <td>
                                <the-mask :mask="['##/##/####']" type="text" style="width: auto; align-content: center"
                                          name="dob" v-model="item.dob" class="js-date" maxlength="10"
                                          placeholder="dd/mm/yyyy"/>
                            <td>
                                <select class="custom-select" style="width:55px" name="sex" v-model="item.sex">
                                    <option value="male">১.পুরুষ</option>
                                    <option value="female">২.মহিলা</option>
                                </select>
                            </td>


                            <td><select class="custom-select" style="width:95px" name="edu_degree"
                                        v-model="item.edu_degree">
                                    <option value="1">১.এমফিল/পিএইচডি</option>
                                    <option value="2">২.মাস্টার্স</option>
                                    <option value="3">৩.এলএলএম</option>
                                    <option value="4">৪.কামিল</option>
                                    <option value="5">৫.স্নাতক (সম্মান)</option>
                                    <option value="6">৬.স্নাতক(পাশ)</option>
                                    <option value="7">৭.বিএসসি ইঞ্জিনিয়ারিং</option>
                                    <option value="8">৮.পোস্ট গ্রাজুয়েট ডিপ্লোমা</option>
                                    <option value="9">৯.এলএলবি</option>
                                    <option value="10">১০.বিএসএস</option>
                                    <option value="11">১১.বি এস সি ইন এগ্রিকালচার</option>
                                    <option value="12">১২.ডিপ্লোমা ইন এগ্রিকালচার</option>
                                    <option value="13">১৩.বিএড অনার্স</option>
                                    <option value="14">১৪.ফাজিল</option>
                                    <option value="15">১৫.এইচএসসি</option>
                                    <option value="16">১৬.আলিম</option>
                                    <option value="17">১৭.ডিপ্লোমা কোর্স</option>
                                    <option value="18">১৮.নার্সিং</option>
                                    <option value="19">১৯.ম্যাটস </option>
                                    <option value="20">২০.এসএসসি </option>
                                    <option value="21">২১.দাখিল </option>
                                    <option value="22">২২.অষ্টম শ্রেণি </option>
                                    <option value="23">২৩.পঞ্চম শ্রেণি </option>
                                    <option value="24">২৪.পঞ্চম শ্রেণি পাশ করেননি</option>
                                    <option value="25">২৫.অশিক্ষিত</option>
                                </select></td>
                            <td class="mltipl-select">
                                <div class="container select-box-align">
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(বাংলা)</div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(ইংরেজি)</div>
                                        </div>
                                            <div class="row">
                                                <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(গণিত)</div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(বিজ্ঞান)</div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(সমাজ)</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_2" true-value="yes" false-value="no">বিদ্যালয় ব্যাবস্থাপনা
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">প্রাক-প্রাথমিক
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">শারীরিক শিক্ষা
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">লিডারশিপ
                                                </div></div>
                                                <div class="row">
                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">একীভূত শিক্ষা
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">সাবক্লাস্টার
                                                        </div></div>
                                                        <div class="row">
                                                            <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">কারিকুলাম ডিসেমিনেশন
                                                            </div></div>
                                                            <div class="row">
                                                                <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">ডিপ্লোমা ইন কম্পিউটার
                                                                </div></div>
                                                                <div class="row">
                                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">কম্পিউটার কোর্স
                                                                    </div></div>
                                                                    <div class="row">
                                                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">বেসিক ইন সার্ভিস
                                                                        </div></div>
                                                                        <div class="row">
                                                                            <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">আইসিটি ইন এডুকেশন
                                                                            </div></div>
                                                                            <div class="row">
                                                                                <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">এমডব্লিউ টি এল
                                                                                </div></div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">সঙ্গীত
                                                                                    </div></div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">চারুও কারুকলা
                                                                                        </div></div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">প্রশিক্ষণবিহীন
                                                                                            </div></div>
                                                                                            <div class="row">
                                                                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">বৈদেশিক দীর্ঘমেয়াদী
                                                                                                    </div></div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">বৈদেশিক স্বল্পমেয়াদী
                                                                                                    </div></div>





                            </td>
                            <td class="mltipl-select">
                                <div class="container select-box-align">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_2" true-value="yes" false-value="no">ডিপিএড
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_3" true-value="yes" false-value="no">বিএড
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_4" true-value="yes" false-value="no">সিইনএড
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_5" true-value="yes" false-value="no">এমএড
                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="custom-select" style="width:55px" name="ethinicity"
                                        v-model="item.ethinicity">
                                    <option value="0">০.না</option>
                                    <option value="1">১.চাকমা</option>
                                    <option value="2">২.মারমা</option>
                                    <option value="3">৩.ত্রিপুরা</option>
                                    <option value="4">৪.গারো</option>
                                    <option value="5">৫.সাঁওতাল</option>
                                    <option value="6">৬.মনিপুরি</option>
                                    <option value="7">৭.সাদরি(ওরাও)</option>
                                    <option value="8">৮.অন্যান্য</option>
                                </select>

                            </td>

                            <td>
                                <select class="custom-select" style="width:55px" name="deisgnation"
                                        v-model="item.deisgnation">
                                    <option value="1">১.প্রধান শিক্ষক</option>
                                    <option value="2">২.সহকারী শিক্ষক</option>
                                    <option value="3">৩.প্রাক-প্রাথমিক শিক্ষক</option>
                                    <option value="4">৪.প্যারা-শিক্ষক</option>
                                    <option value="5">৫.পুল শিক্ষক</option>
                                </select>
                            </td>


                            <td><select class="custom-select" style="width:55px" name="inst_deisgnated"
                                        v-model="item.inst_deisgnated">
                                    <option value="1">১.পদায়িত/বদলি</option>
                                    <option value="2">২.সংযুক্ত</option>
                                </select></td>
                           {{-- <td>
                                <select class="custom-select" style="width:55px" name="inst_present"
                                        v-model="item.inst_present">
                                    <option value="1">১.উপস্থিত</option>
                                    <option value="2">২.সি-ইন-এড</option>
                                    <option value="3">৩.ডিপিএড</option>
                                    <option value="4">৪.বি-এড</option>
                                    <option value="5">৫.এম-এড</option>
                                    <option value="6">৬.মাতৃত্বকালীন ছুটি</option>
                                    <option value="7">৭.চিকিৎসাজনিত ছুটি</option>
                                    <option value="8">৮.অন্যান্য ছুটি</option>
                                    <option value="9">৯.অন-অনুমোদিত অনুপস্থিত</option>
                                    <option value="10">১০.সাময়িক বরখাস্ত</option>
                                    <option value="11">১১.বিদেশ ভ্রমণ</option>
                                    <option value="12">১২.অন্য বিদ্যালয়ে সংযুক্ত</option>
                                </select>
                            </td>--}}
                            <td><select class="custom-select" style="width:55px" name="class_six_eight"
                                        v-model="item.class_six_eight">
                                    <option value="1">১.হ্যাঁ</option>
                                    <option value="2">২.না</option>
                                </select></td>
                            <td>
                                <the-mask :mask="['##/##/####']" type="text" class="js-date"
                                          style="width: 70px; align-content: center" name="joining_dt"
                                          v-model="item.joining_dt" placeholder="dd/mm/yyyy"/>
                            </td>




                        </tr>
                        </tbody>
                    </table>
                    <input type="button" id="addRow" class="btn btn-success" @click="addItem" value="Add Row"/>
                </div>
            </div>
        </div>

        <div class="body_table">
            <div class="pull-right">

                <input @click="submitTeacherInfo" type="button" class="btn btn-primary btn-lg"
                       style="text-align:right; margin-top:20px"
                       value="Save and Next">
            </div>
            <div style="clear: both">

            </div>
        </div>
    </form>
    <div style="clear: both">

    </div>
    {{--Include Footer--}}
    @include('common.footer')
    {{--Include Footer End--}}

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>

