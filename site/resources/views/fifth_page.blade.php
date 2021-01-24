@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! institute_sanitations->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script>
        window.institute_sanitations = '<?php echo $instRowObj->data; ?>';
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
                        <tr v-for="i in rowData">
                            <td><input type="number" style="width: 70px; align-content: center" name="toilet_no" v-model="i.toilet_no"></td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_users" v-model="i.toilet_users">
                                    <option  value="1" >বালক</option>
                                    <option value="2" >বালিকা</option>
                                    <option value="3" >বালক-বালিকা যৌথ</option>
                                    <option value="4" >সহ: শিক্ষক</option>
                                    <option value="5" >প্রধান শিক্ষক</option>
                                    <option value="6" >শিক্ষকদের যৌথ</option>
                                    <option value="7" >বিশেষ চাহিদা সম্পন্ন শিক্ষার্থী</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toilet_curcond" v-model="i.toilet_curcond">
                                    <option  value="1" >ভালো</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">জরাজীর্ণ</option>
                                    <option value="4">ঝুকিপূর্ণ</option>
                                    <option value="5">পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="clean_mat_yn" v-model="i.clean_mat_yn">
                                    <option  value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="hand_soap_yn" v-model="i.hand_soap_yn">
                                    <option  value="1" >হ্যাঁ</option>
                                    <option value="2" >না</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="toi_water_yn" v-model="i.toi_water_yn">
                                    <option  value="1">আছে</option>
                                    <option value="2">নাই</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="toi_project" v-model="i.toi_project">
                                    <option value="1"> পিডিপি-১</option>
                                    <option value="2"> পিডিপি-২</option>
                                    <option value="3"> পিডিপি-৩</option>
                                    <option value="4">পিডিপি-৪</option>
                                    <option value="5">অন্যান্য</option>
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

                <input @click="submitFifthPage" type="button" class="btn btn-primary btn-lg"
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
<script src="js/app.js" defer></script>
<script src="js/fifthPage.js" defer></script>
</body>
</html>
