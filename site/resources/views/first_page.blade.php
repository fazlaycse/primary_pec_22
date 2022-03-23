@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! institutes table->
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script>
        window.thana_id = '{{$instRow->thana_id}}';
        window.union_id = '{{$instRow->union_id}}';
    </script>

</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}

    <div class="first_body">
        <div class="institute_info border" style="padding:10px; font-size:14px">
            <form class="form-group" method="POST" action="first_page_save">

                {{ csrf_field() }}
                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 15px"> ১. ক) বিদ্যালয়ের নাম ও ঠিকানা:</span>
                </div>
                <br>
                <div class="row" style="">
                    <div class="col-4 form-group form-inline">
                        <label for="school_code" class="label-text">বিদ্যালয়ের EMIS কোড:</label> &nbsp;
                        <input type="text" style="width:150px;" class="form-control" name="emis_code" id="school_code"
                               value="{{$instRow->emis_code}}" readonly>
                    </div>
                    <div class="col-2 form-group form-inline">
                        <label class="label-text" for="school_type">বিদ্যালয়ের ধরণ:</label> &nbsp;
                        <input type="text" style="width:50px" class="form-control" name="inst_type" id="school_type"
                               value="{{$instRow->inst_type}}" maxlength="2" required>
                    </div>
                </div>

                <div class="row border" style="box-shadow: rgb(113, 158, 206) 0px 0px 10px !important; padding: 10px;margin:0px">
                    <div class="col-md-10">
                        <span style="font-weight: bold; font-size: 14px">বিদ্যালয়ের নাম (গেজেট অনুযায়ী):</span>

                        <div class="row form-group form-inline">
                            <label class="label-text" for="bangla_name" style="width:80px">বাংলায়: </label> &nbsp;
                            <input type="text" style="width:290px" class="form-control" name="name_bangla"
                                   id="bangla_name" value="{{$instRow->name_bangla}}">
                        </div>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="english_name" style="width:80px"> In English </label> &nbsp;
                            <input type="text" style="width:290px" class="form-control" name="name_english"
                                   id="english_name" value="{{$instRow->name_english}}">
                        </div>
                    </div>

                </div>

                <br>

                <div class="row " style="box-shadow: rgb(113, 158, 206) 0px 0px 10px !important; padding: 10px;margin:0px">

                    <div class="col-6 ">
                        <span style="font-weight: bold; font-size: 14px">বিদ্যালয়ের ঠিকানা:</span>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="thana" style="width:120px">উপজেলা/থানা: </label> &nbsp;
                            <select v-model="selected_thana" style="width:250px" class="form-control" name="thana_id"
                                    id="thana"
                                    @change="changeThanaId">
                                <option v-for="option in options_thana" v-bind:value="option.value">
                                    @{{ option.text }}
                                </option>
                            </select>
                        </div>
                        <div class="row form-group form-inline"
                             style="/*border-top: 1px solid darkgrey;*/ padding-top: 5px;">
                            <label class="label-text" for="village" style="width:120px"> গ্রাম/ওয়ার্ড: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="village_word" id="village"
                                   value="{{$instRow->village_word}}">
                        </div>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="union" style="width:150px">মোবাইল </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="mobile" id="mobile"
                                   value="{{$instRow->mobile}}">
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="union" style="width:150px"> ইউনিয়ন/পৌরসভা: </label> &nbsp;
                            <select v-model="selected_union" style="width:250px" class="form-control" name="union_id"
                                    id="union">
                                <option v-for="(option, index) in options_union" v-bind:value="index">
                                    @{{ option }}
                                </option>
                            </select>
                        </div>
                        <div class="row form-group form-inline"
                             style="/*border-top: 1px solid darkgrey;*/ padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> ক্লাস্টার: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="cluster" id="cluster"
                                   value="{{$instRow->cluster}}">
                        </div>
                        <div class="row form-group form-inline"
                             style="/*border-top: 1px solid darkgrey;*/ padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> প্রধান শিক্ষকের নাম </label>
                            <input type="text" name="head_master_name" style="width:250px" class="form-control"
                                   value="{{$instRow->head_master_name}}">
                        </div>

                        <div class="row form-group"
                             style="/*border-top: 1px solid darkgrey;*/ padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> ডাটা এন্ট্রি অপারেটরের নাম </label>
                            <input type="text" style="width:250px" class="form-control"
                                   value="{{$instRow->deo_name}}">
                        </div>
                    </div>

                </div>
                <br>


                <div class="pull-right">

                    <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                           value="Save and Next">
                </div>
                <div style="clear: both">

                </div>
            </form>

            {{--Include Footer--}}
            @include('common.footer')
            {{--Include Footer End--}}
        </div>
    </div>
</div>


<script src="js/app.js" type="text/javascript" defer></script>
<script src="js/firstPage.js" defer></script>

</body>
</html>
