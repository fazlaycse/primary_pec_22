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
        th, td {

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
                            <td rowspan="2" scope="col">জন্ম তারিখ(১)</td>
                            <td rowspan="2" scope="col">লিঙ্গ(২)</td>
                            <td rowspan="2" scope="col">উপজাতি/ক্ষুদ্র নৃ-গোষ্ঠী(৩)</td>
                            <td rowspan="2" scope="col">পদ(৪)</td>
                            <td rowspan="2" scope="col">এ বিদ্যালয়ে পদায়িত(৫)</td>
                            <td rowspan="2" scope="col">এ বিদ্যালয়ে উপস্থিতি(৬)</td>
                            <td rowspan="2" scope="col">শিক্ষকতা যোগ্যতা-সর্বোচ্চ(৭)</td>
                            <td rowspan="2" scope="col">চাকরিতে যোগদানের তারিখ(৮)</td>
                            <td rowspan="2" scope="col">৬ষ্ঠ-৮ম শ্রেণির ক্লাস(৯)</td>
                            <td colspan="2" scope="col">পেশাগত যোগ্যতা(১০)</td>
                            <td rowspan="2" scope="col">বিগত ১২ মাসের প্রশিক্ষণ</td>
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
                                <the-mask :mask="['##/##/####']" type="text" style="width: auto; align-content: center"
                                          name="dob" v-model="item.dob" class="js-date" maxlength="10"
                                          placeholder="dd/mm/yyyy"/>
                            <td>
                                <select class="custom-select" style="width:55px" name="sex" v-model="item.sex">
                                    <option value="male">১.পুরুষ</option>
                                    <option value="female">২.মহিলা</option>
                                </select>
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
                            <td>
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
                            </td>
                            <td><select class="custom-select" style="width:95px" name="edu_degree"
                                        v-model="item.edu_degree">
                                    <option value="1">১.এসএসসি এর নিম্মে</option>
                                    <option value="2">২.এসএসসি</option>
                                    <option value="3">৩.এইচএসসি</option>
                                    <option value="4">৪.বিএ</option>
                                    <option value="5">৫.এমএ</option>
                                    <option value="6">৬.এমফিল/পিএইচডি</option>
                                </select></td>
                            <td>
                                <the-mask :mask="['##/##/####']" type="text" class="js-date"
                                          style="width: 70px; align-content: center" name="joining_dt"
                                          v-model="item.joining_dt" placeholder="dd/mm/yyyy"/>
                            </td>
                            <td><select class="custom-select" style="width:55px" name="class_six_eight"
                                        v-model="item.class_six_eight">
                                    <option value="1">১.হ্যাঁ</option>
                                    <option value="2">২.না</option>
                                </select></td>
                            <td class="mltipl-select">
                                <div class="container select-box-align">
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(১)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_2" true-value="yes" false-value="no">আইসিটি(২)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_3" true-value="yes" false-value="no">প্রাক-প্রাথমিক(৩)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_4" true-value="yes" false-value="no">মাকিং
                                            স্কীম(৪)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_5" true-value="yes" false-value="no">কাব
                                            প্রশিক্ষণ(৫)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.short_tr_6" true-value="yes" false-value="no">অন্যান্য(৬)
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="mltipl-select">
                                <div class="container select-box-align">
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_1" true-value="yes" false-value="no">সিইনএড(১)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_2" true-value="yes" false-value="no">ডিপিএড(২)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_3" true-value="yes" false-value="no">পিইনএড(৩)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_4" true-value="yes" false-value="no">বিএড(৪)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_5" true-value="yes" false-value="no">এমএড(৫)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.long_tr_6" true-value="yes" false-value="no">অন্যান্য(৬)
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="mltipl-select">
                                <div class="container select-box-align">
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_1" true-value="yes" false-value="no">বিষয়ভিত্তিক(১)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_2" true-value="yes" false-value="no">আইসিটি(২)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_3" true-value="yes" false-value="no">প্রাক-প্রাথমিক(৩)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_4" true-value="yes" false-value="no">মাকিং
                                            স্কীম(৪)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_5" true-value="yes" false-value="no">কাব
                                            প্রশিক্ষণ(৫)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><input type="checkbox" v-model="item.tlv_mon_tr_6" true-value="yes" false-value="no">অন্যান্য(৬)
                                        </div>
                                    </div>
                                </div>
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

