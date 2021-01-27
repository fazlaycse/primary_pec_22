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
                                    <option value="3">৩.পুরুষ শিক্ষক</option>
                                    <option value="4">৪.মহিলা শিক্ষিকা</option>
                                    <option value="5">৫.বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                    <option value="6">৬.বালক-বালিকা উভয়ই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="..." name="wsblk_condition"
                                        v-model="i.wsblk_condition">
                                    <option value="1">১.ভালো</option>
                                    <option value="2">২.নির্মাণাধীন</option>
                                    <option value="3">৩.জরাজীর্ণ,মেরামত প্রয়োজন</option>
                                    <option value="5">৪.পরিত্যক্ত</option>
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
