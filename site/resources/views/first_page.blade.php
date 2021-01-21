@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! institutes table->
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header');
    {{--Include Header End--}}

    <div class="first_body">
        <div class="institute_info border" style="padding:10px; font-size:14px">
            <form class="form-group" method="POST" action="first_page_save">

                {{ csrf_field() }}
                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 15px"> ১. ক) বিদ্যালয়ের নাম ও ঠিকানা:</span>
                </div>
                <div class="row">
                    <div class="col-6 form-group form-inline">
                        <label for="school_code" class="label-text">বিদ্যালয়ের EMIS কোড:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="emis_code" id="school_code"
                               value="{{$instRow->emis_code}}" readonly>
                    </div>
                    <div class="col-4 form-group form-inline">
                        <label class="label-text" for="school_type">বিদ্যালয়ের ধরণ:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="inst_type" id="school_type"
                               value="{{$instRow->inst_type}}">
                    </div>
                </div>
                <div class="row border" style="margin:0px">
                    <div class="col-md-1 border text-center">
                        <span style="font-weight: bold; font-size: 14px">বিদ্যালয়ের নাম (গেজেট অনুযায়ী):</span>
                    </div>
                    <div class="col-11 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="bangla_name" style="width:80px">বাংলায়: </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="name_bangla"
                                   id="bangla_name" value="{{$instRow->name_bangla}}">
                        </div>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="english_name" style="width:80px"> In English </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="name_english"
                                   id="english_name" value="{{$instRow->name_english}}">
                        </div>
                    </div>

                </div>

                <br>

                <div class="row border" style="margin:0px">

                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="thana" style="width:120px">উপজেলা/থানা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="thana_id" id="thana"
                                   value="{{$instRow->thana_id}}">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="village" style="width:120px"> গ্রাম/ওয়ার্ড: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="village_word" id="village"
                                   value="{{$instRow->village_word}}">
                        </div>
                    </div>
                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="union" style="width:150px"> ইউনিয়ন/পৌরসভা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="union_id" id="union"
                                   value="{{$instRow->union_id}}">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> ক্লাস্টার: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="cluster" id="cluster"
                                   value="{{$instRow->cluster}}">
                        </div>
                    </div>
                </div>
                <br>


                <div class="pull-right">

                    <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                           value="Save and Go Forward">
                </div>
                <div style="clear: both">

                </div>
            </form>

            {{--Include Footer--}}
            @include('common.footer');
            {{--Include Footer End--}}
        </div>
    </div>
</div>


<script src="js/app.js" type="text/javascript" defer></script>
</body>
</html>
