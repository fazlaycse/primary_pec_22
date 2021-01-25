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
                        style=" font-size: 15px">(শুধুমাত্র বিদ্যালয়ের ধরন: ০১, ০৪, ২৬ এবং ৯৯ এর জন্য প্রযোজ্য) </span>
                <div class="table_third_one">
                    <nav class="navbar navbar-light bg-light">
                        <div class="navbar-brand">
                            <label for="labelId">মোট ভবন সংখ্যা</label>
                            <input id="labelId" type="number" style="width: 70px; align-content: center"
                                   name="number_of_building" v-model="buildings.number_of_building">
                        </div>
                    </nav>

                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>

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
<<<<<<< HEAD
                        <tr>
                            <td rowspan="3"><input type="number" style="width: 70px; align-content: center" name="number_of_building"></td>
                            <td><input type="number" style="width: 70px" name="building_no"></td>
                            <td><input type="number" style="width: 70px" name="storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition">
                                    <option selected value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name">
                                    <option selected value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩ </option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="bld_ramp_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="number" style="width: 70px" name="building_no"></td>
                            <td><input type="number" style="width: 70px" name="storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition">
                                    <option selected value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name">
                                    <option selected value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩ </option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
                                </select>
=======
                        <tr v-for="item in rowData">
                            <td><input type="number" style="width: 70px" name="building_no" v-model="item.building_no">
>>>>>>> a8cdfaac38ae75341e151ef21f053d1d96966c14
                            </td>
                            <td><input type="number" style="width: 70px" name="storied_number"
                                       v-model="item.storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year" v-model="item.estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"
                                       v-model="item.bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number" v-model="item.room_number">
                            </td>
<<<<<<< HEAD
                        </tr>
                        <tr>
                            <td><input type="number" style="width: 70px" name="building_no"></td>
                            <td><input type="number" style="width: 70px" name="storied_number"></td>
                            <td><input type="number" style="width: 70px" name="estb_year"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation"></td>
                            <td><input type="number" style="width: 70px" name="room_number"></td>
=======

>>>>>>> a8cdfaac38ae75341e151ef21f053d1d96966c14
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition"
                                        v-model="item.bld_condition">
                                    <option value="1">ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name"
                                        v-model="item.bld_projt_name">
                                    <option value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩</option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
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
                       value="Save and Go Forward">
            </div>
        </form>
    </div>
    <div style="clear: both"></div>
    {{--Include Footer--}}
    @include('common.footer');
    {{--Include Footer End--}}

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/fourthPage.js" type="text/javascript"></script>
</body>
</html>
