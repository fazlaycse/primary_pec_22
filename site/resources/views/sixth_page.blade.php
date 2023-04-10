@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! washblocks->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script type="text/javascript">
        window.washbolocks = '<?php echo $instRowObj->data; ?>';
    </script>
    <style>
        select{
            width: auto !important;
        }
    </style>
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}

    <div class="body_table" style="background-color: #b0d4f1;">

        <form class="form-group" method="POST" action="sixth_page_save" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

            <hr>
            <div class="table_third_heading2">
                <span style="font-weight: bold; font-size: 18px"> ৪। বিদ্যালয়ের ওয়াশব্লক ব্যবস্থার তথ্য</span>

                <div class="table_third_two">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ক্রমিক নং</th>
                            <th scope="col">নির্মাণের সাল</th>
                            <th scope="col">ব্যবহারকারীর ধরণ নিচের যেকোন একটি</th>
                            <th scope="col">বর্তমান অবস্থা নিচের যেকোন একটি</th>
                            <th scope="col">ওয়াশ ব্লক ব্যবহৃত</th>
                            <th scope="col">পরিস্কারক দ্রব্যাদি</th>
                            <th scope="col">পানির সরবরাহ</th>
                            <th scope="col">হ্যন্ড ওয়াশ/সাবান</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="(i, index) in rowData">
                            <td><input type="number" style="width: 70px; align-content: center" name="wsblk_amount"
                                       v-model="i.wsblk_amount"></td>
                            <td><input type="text" style="width: 70px; align-content: center" name="w_es_year"
                                       v-model="i.w_es_year"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_user"
                                        v-model="i.wsblk_user">
                                    <option value="1">১.বালক</option>
                                    <option value="2">২.বালিকা</option>
                                    <option value="3">৩.বালক ও বালিকা</option>
                                    <option value="4">৪.শিক্ষক</option>
                                    <option value="5">৫ শিক্ষিকা</option>
                                    <option value="6">৬। পুরুষ ও মহিলা শিক্ষক</option>
                                    <option value="7">৭. সার্বজনীন</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="..." name="wsblk_condition"
                                        v-model="i.wsblk_condition">
                                    <option value="1">১.নতুন/ভালো</option>
                                    <option value="2">২.ব্যাবহারযোগ্য</option>
                                    <option value="3">৩ মেরামতযোগ্য</option>
                                    <option value="4">৪.নির্মানাধীন</option>
                                    <option value="5">৫.পুরানো</option>
                                    <option value="6">৬.জয়ারাজীর্ণ</option>
                                    <option value="7">৭.ঝুকিপূর্ণ</option>
                                    <option value="8">৮.পরিত্যাক্ত</option>
                                    <option value="9">৯.অজানা</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn" v-model="i.wsblk_std_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn" v-model="i.cleaning_agent_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toilet_water_yn" v-model="i.toilet_water_yn">
                                    <option value="1">আছে
                                    </option>
                                    <option value="2">নাই
                                    </option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_wash_yn" v-model="i.hand_wash_yn">
                                    <option value="1">হ্যাঁ
                                    </option>
                                    <option value="2">না
                                    </option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="button" id="addRow" class="btn btn-success" @click="addItem" value="Add Row"/>

                </div>
            </div>
            <hr>



        </form>
    </div>
    <div class="body_table" style="background-color: #b0d4f1;">

        <form class="form-group" method="POST" action="sixth_page_save" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

            <hr>
            <div class="table_third_heading2">
                <span style="font-weight: bold; font-size: 18px"> ৫। বিদ্যালয়ের পানীয় জলের ব্যাবস্থার তথ্য</span>

                <div class="table_third_two">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ক্রমিক নং</th>
                            <th scope="col">নিরাপদ পানির উৎস নিচের যেকোন একটি</th>
                            <th scope="col">বর্তমান অবস্থা নিচের যেকোন একটি</th>
                            <th scope="col">আর্সেনিক মুক্ত</th>
                            <th scope="col">নির্মানের প্রকল্প/প্রোগ্রাম</th>
                            <th scope="col">ই-কোলাই টেস্ট</th>
                            <th scope="col">লবণাক্ততা/আয়রন</th>
                            <th scope="col">স্থাপনের বছর</th>
                        </tr>
                        </thead>
                        <tbody>
<!--নতুন কোড-->
                        <tr v-for="(i, index) in rowData">
                            <td><input type="number" style="width: 70px; align-content: center" name="wsblk_amount"
                                       v-model="i.wsblk_amount"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="wsblk_user"
                                        v-model="i.wsblk_user">
                                    <option value="1">১.টিউবওয়েল</option>
                                    <option value="2">২.সাপ্লাই ওয়াটার</option>
                                    <option value="3">৩.ডিপ টিউবয়েল</option>
                                    <option value="4">৪.কুয়া</option>
                                    <option value="5">৫. পুকুর/নদী</option>
                                    <option value="6">৬. সংগৃহীত বৃষ্টির পানি</option>
                                    <option value="7">৭. টারা পাম্প</option>
                                    <option value="8">৮.অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn" v-model="i.wsblk_std_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn" v-model="i.wsblk_std_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="wsblk_std_yn" v-model="i.wsblk_std_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn" v-model="i.cleaning_agent_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="cleaning_agent_yn" v-model="i.cleaning_agent_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td><input type="number" style="width: 70px; align-content: center" name="wsblk_amount"
                                       v-model="i.wsblk_amount"></td>

                        </tr>
                        </tbody>
                    </table>
                    <input type="button" id="addRow" class="btn btn-success" @click="addItem" value="Add Row"/>

                </div>
            </div>
            <hr>


            <div class="pull-right">

                <input @click="submitSixthPage" type="button" class="btn btn-primary btn-lg"
                       style="text-align:right; margin-top:20px"
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
<script src="js/sixthPage.js" defer></script>
</body>
</html>
