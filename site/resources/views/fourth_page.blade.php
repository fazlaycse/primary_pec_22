@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<!-- buildings, building_infos--->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script>
        window.buildings = '<?php echo $instRowObj->buildings; ?>';
        window.building_infos = '<?php echo $instRowObj->building_infos; ?>';
    </script>
    <style>
        select {
            width:auto !important;
        }
    </style>
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}

    <div class="body_table" style="background-color: #b0d4f1;">

        <form class="form-group" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

            <div class="table_third_heading">
                <span style="font-weight: bold; font-size: 17px"> ৩. বিদ্যালয়ের ভবনের তথ্য: </span> <span
                    style=" font-size: 15px"> </span>
                <div class="table_third_one">
                    <!--
                    <nav class="navbar navbar-light bg-light">
                        <div class="navbar-brand">
                            <label for="labelId">মোট ভবন সংখ্যা</label>
                            <input id="labelId" type="number" style="width: 70px; align-content: center"
                                   name="number_of_building" v-model="buildings.number_of_building">
                        </div>
                    </nav>

                    -->
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>

                            <th scope="col">ক্রমিক নম্বর</th>
                            <th scope="col">মালিকানার ধরণ নিচের যেকোন একটি</th>
                            <th scope="col">ভবনটি কত তলা বিশিষ্ট</th>
                            <th scope="col">নির্মানের সন</th>
                            <th scope="col">কত তলার ভিত্তি বিশিষ্ট</th>
                            <th scope="col">কক্ষ সংখ্যা</th>
                            <th scope="col">ভবনের বর্তমান অবস্থা নিচের যেকোন একটি</th>
                            <th scope="col">নির্মানের ধরন নিচের যেকোন একটি</th>
                            <th scope="col">নির্মানের প্রকল্প/প্রোগ্রাম নিচের যেকোন একটি</th>
                            <th scope="col">বিশেষ চাহিদা সম্পন্ন শিশুদের জন্য র‍্যাম্প আছে কি?</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(item, index) in rowData">
                            <td><input type="number" style="width: 40px" name="building_no" v-model="item.building_no=index+1" readonly>
                            </td>
                            <!-- new code start-->
                            <td>
                                <select class="custom-select" style="width:90px" name=""
                                        v-model="item.storied_number" >
                                    <option value="1">১.নিজস্ব</option>
                                    <option value="2">২.ভাড়া</option>
                                </select>
                            </td>
                            <!-- new code end-->
                            <td><input type="number" style="width: 70px" name="storied_number"
                                       v-model="item.storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year" v-model="item.estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"
                                       v-model="item.bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number" v-model="item.room_number">
                            </td>

                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition"
                                        v-model="item.bld_condition">
                                    <option value="0"> -- </option>
                                    <option value="1">১.নতুন/ভালো</option>
                                    <option value="2">২.ব্যাবহারযোগ্য</option>
                                    <option value="3">৩.মেরামতযোগ্য</option>
                                    <option value="4">৪.নির্মানাধীন</option>
                                    <option value="5">৫.পুরানো</option>
                                    <option value="6">৬.জরাজীর্ন</option>
                                    <option value="7">৭.ঝুকিপূর্ন</option>
                                    <option value="8">৮.পরিত্যাক্ত</option>
                                    <option value="9">৯.পরিত্যাক্ত</option>
                                </select>
                            </td>
                            <!-- new code start-->
                            <td>
                                <select class="custom-select" style="width:90px" name=""
                                        v-model="item.bld_projt_name">

                                    <option value="1"> পাকা</option>
                                    <option value="2">আধাপাকা</option>
                                    <option value="3">কাচা</option>
                                    <option value="4">টিনশেড</option>
                                </select>
                            </td>
                            <!-- new code end-->
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name"
                                        v-model="item.bld_projt_name">
                                    <option value="1"> পিডিপি-১ </option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩</option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">পূননির্মান</option>
                                    <option value="6">অন্যান্য প্রকল্প</option>
                                    <option value="7">প্রযোজ্য নয়</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="bld_ramp_yn"
                                        v-model="item.bld_ramp_yn">
                                    <option value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
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

                <input @click="submitFourthPage" type="button" class="btn btn-primary btn-lg"
                       style="text-align:right; margin-top:20px"
                       value="Save and Next">
            </div>
        </form>
    </div>
    <div style="clear: both"></div>
    {{--Include Footer--}}
    @include('common.footer')
    {{--Include Footer End--}}

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/fourthPage.js" type="text/javascript"></script>
</body>
</html>
