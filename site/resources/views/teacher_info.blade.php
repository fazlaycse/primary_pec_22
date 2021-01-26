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
                                    <option value="male">পুরুষ (১)</option>
                                    <option value="female">মহিলা (২)</option>
                                </select>
                            </td>

                            <td>
                                <select class="custom-select" style="width:55px" name="ethinicity"
                                        v-model="item.ethinicity">
                                    <option value="0">না(০)</option>
                                    <option value="1">চাকমা(১)</option>
                                    <option value="2">মারমা(২)</option>
                                    <option value="3">ত্রিপুরা(৩)</option>
                                    <option value="4">গারো(৪)</option>
                                    <option value="5">সাঁওতাল(৫)</option>
                                    <option value="6">মনিপুরি(৬)</option>
                                    <option value="7">সাদরি(ওরাও)(৭)</option>
                                    <option value="8">অন্যান্য(৮)</option>
                                </select>

                            </td>


                            <td>
                                <select class="custom-select" style="width:55px" name="deisgnation"
                                        v-model="item.deisgnation">
                                    <option value="1">প্রধান শিক্ষক(১)</option>
                                    <option value="2">সহকারী শিক্ষক(২)</option>
                                    <option value="3">প্রাক-প্রাথমিক শিক্ষক(৩)</option>
                                    <option value="4">প্যারা-শিক্ষক(৪)</option>
                                    <option value="5">পুল শিক্ষক(৫)</option>
                                </select>
                            </td>


                            <td><select class="custom-select" style="width:55px" name="inst_deisgnated"
                                        v-model="item.inst_deisgnated">
                                    <option value="1">পদায়িত/বদলি(১)</option>
                                    <option value="2">সংযুক্ত(২)</option>
                                </select></td>
                            <td>
                                <select class="custom-select" style="width:55px" name="inst_present"
                                        v-model="item.inst_present">
                                    <option value="1">উপস্থিত(১)</option>
                                    <option value="2">সি-ইন-এড(২)</option>
                                    <option value="3">ডিপিএড(৩)</option>
                                    <option value="4">বি-এড(৪)</option>
                                    <option value="5">এম-এড(৫)</option>
                                    <option value="6">মাতৃত্বকালীন ছুটি(৬)</option>
                                    <option value="7">চিকিৎসাজনিত ছুটি(৭)</option>
                                    <option value="8">অন্যান্য ছুটি(৮)</option>
                                    <option value="9">অন-অনুমোদিত অনুপস্থিত (৯)</option>
                                    <option value="10">সাময়িক বরখাস্ত (১০)</option>
                                    <option value="11">বিদেশ ভ্রমণ (১১)</option>
                                    <option value="12">অন্য বিদ্যালয়ে সংযুক্ত (১২)</option>
                                </select>
                            </td>
                            <td><select class="custom-select" style="width:95px" name="edu_degree"
                                        v-model="item.edu_degree">
                                    <option value="1">এসএসসি এর নিম্মে(১)</option>
                                    <option value="2">এসএসসি(২)</option>
                                    <option value="3">এইচএসসি(৩)</option>
                                    <option value="4">বিএ(৪)</option>
                                    <option value="5">এমএ(৫)</option>
                                    <option value="6">এমফিল/পিএইচডি(৬)</option>
                                </select></td>
                            <td>
                                <the-mask :mask="['##/##/####']" type="text" class="js-date"
                                          style="width: 70px; align-content: center" name="joining_dt"
                                          v-model="item.joining_dt" placeholder="dd/mm/yyyy"/>
                            </td>
                            <td><select class="custom-select" style="width:55px" name="class_six_eight"
                                        v-model="item.class_six_eight">
                                    <option value="1">হ্যাঁ(১)</option>
                                    <option value="2">না(২)</option>
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

