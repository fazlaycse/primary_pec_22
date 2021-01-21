@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<!-- buildings, building_infos--->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header');
    {{--Include Header End--}}
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
        <a href="#" class="active">চতুর্থ পাতা</a>
        <a href="#" >পঞ্চম পাতা</a>
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

        <form class="form-group" method="POST" action="fourth_page_save" enctype="multipart/form-data">
            {{ csrf_field() }}
            <?php $instRow = $instRowObj->buildings;?>
            <div class="table_third_heading">
                <span style="font-weight: bold; font-size: 17px"> ৩. বিদ্যালয়ের ভবনের তথ্য: </span> <span
                        style=" font-size: 15px">(শুধুমাত্র বিদ্যালয়ের ধরন: ০১, ০৪, ২৬ এবং ৯৯ এর জন্য প্রযোজ্য) </span>
                <div class="table_third_one">
                    <table class="table table-bordered" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">মোট ভবন সংখ্যা</th>
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
                        <tr>

                            <td rowspan="3"><input type="number" style="width: 70px; align-content: center" name="number_of_building" value="{{$instRow->number_of_building}}"></td>
                            <?php $instRow = $instRowObj->building_infos;?>
                            <td><input type="number" style="width: 70px" name="building_no" value="{{$instRow->building_no}}"></td>
                            <td><input type="number" style="width: 70px" name="storied_number" value="{{$instRow->storied_number}}"></td>
                            <td><input type="number" style="width: 70px" name="estb_year" value="{{$instRow->estb_year}}"></td>
                            <td><input type="number" style="width: 70px" name="bld_foundation" value="{{$instRow->bld_foundation}}"></td>
                            <td><input type="number" style="width: 70px" name="room_number" value="{{$instRow->room_number}}"></td>

                            <td>
                                <select class="custom-select" style="width:90px" name="bld_condition">
                                    <option  value="1" <?php if($instRow->bld_condition =='1'){echo "selected";} ?>>ভালো</option>
                                    <option value="2" <?php if($instRow->bld_condition =='2'){echo "selected";} ?>>নির্মাণাধীন</option>
                                    <option value="3" <?php if($instRow->bld_condition =='3'){echo "selected";} ?>>জরাজীর্ণ</option>
                                    <option value="4" <?php if($instRow->bld_condition =='4'){echo "selected";} ?>>ঝুকিপূর্ণ</option>
                                    <option value="5" <?php if($instRow->bld_condition =='5'){echo "selected";} ?>>পরিত্যক্ত</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:90px" name="bld_projt_name">
                                    <option  value="1" <?php if($instRow->bld_projt_name =='1'){echo "selected";} ?>> পিডিপি-১</option>
                                    <option value="2" <?php if($instRow->bld_projt_name =='2'){echo "selected";} ?>> পিডিপি-২</option>
                                    <option value="3" <?php if($instRow->bld_projt_name =='3'){echo "selected";} ?>> পিডিপি-৩</option>
                                    <option value="4" <?php if($instRow->bld_projt_name =='4'){echo "selected";} ?>>পিডিপি-৪</option>
                                    <option value="5" <?php if($instRow->bld_projt_name =='5'){echo "selected";} ?>>অন্যান্য</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select" style="width:80px" name="bld_ramp_yn">
                                    <option  value="1" <?php if($instRow->bld_ramp_yn =='1'){echo "selected";} ?>>হ্যাঁ</option>
                                    <option value="2" <?php if($instRow->bld_ramp_yn =='2'){echo "selected";} ?>>না</option>
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

    {{--Include Footer--}}
    @include('common.footer');
    {{--Include Footer End--}}

</div>
<script src="js/app.js" defer></script>
</body>
</html>
