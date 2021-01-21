@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<! institute_summaries table->
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
        <form class="form-group" method="POST" action="second_page_save">
            {{ csrf_field() }}
            <div class="institute_info border" style="padding:10px; font-size:14px">

                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 15px"> ১. খ) বিদ্যালয়ের শিক্ষক ও কর্মচারী সংখ্যা এবং ভবন, কক্ষ ও ওয়াশব্লক সংখ্যা:</span>
                </div>
                <div class="row border" style="margin:0px">
                    <div class="col-md-1 border justify-content-center align-self-center">
                        <span style="font-weight: bold; font-size: 16px">বিদ্যালয়ের শিক্ষক সংখ্যা </span>
                    </div>
                    <div class="col-6 border">
                        <div class="teacher_number">
                            <table class="table teacher" style="text-align: center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">ধরণ</th>
                                    <th scope="col">প্রধান শিক্ষক</th>
                                    <th scope="col">সহকারী শিক্ষক</th>
                                    <th scope="col">প্রাক-প্রাথমিক শিক্ষক</th>
                                    <th scope="col">দপ্তরী কাম প্রহরী</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">অনুমোদিত</th>
                                    <td><input type="number" style="width: 50px" name="onu_head_teacher" value="{{$instRow->onu_head_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="onu_ast_teacher" value="{{$instRow->onu_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="onu_pprimary_teacher" value="{{$instRow->onu_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="onu_sg" value="{{$instRow->onu_sg}}"></td>
                                </tr>
                                <tr>
                                    <th scope="row">সংযুক্তি(In)</th>
                                    <td><input type="number" style="width: 50px" name="att_in_head_teacher" value="{{$instRow->att_in_head_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_in_ast_teacher" value="{{$instRow->att_in_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_in_pprimary_teacher" value="{{$instRow->att_in_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_in_sg" value="{{$instRow->att_in_sg}}"></td>
                                </tr>
                                <tr>
                                    <th scope="row">সংযুক্তি(Out)</th>
                                    <td><input type="number" style="width: 50px" name="att_out_hd_teacher" value="{{$instRow->att_out_hd_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_out_ast_teacher" value="{{$instRow->att_out_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_out_pprimary_teacher" value="{{$instRow->att_out_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="att_out_sg" value="{{$instRow->att_out_sg}}"></td>
                                </tr>
                                <tr>
                                    <th scope="row">কর্মরত</th>
                                    <td><input type="number" style="width: 50px" name="wk_hd_teacher" value="{{$instRow->wk_hd_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="wk_ast_teacher" value="{{$instRow->wk_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="wk_pprimary_teacher" value="{{$instRow->wk_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="working_sg" value="{{$instRow->working_sg}}"></td>
                                </tr>
                                <tr>
                                    <th scope="row">অবসর/পিআরএল**</th>
                                    <td><input type="number" style="width: 50px" name="prl_hd_teacher" value="{{$instRow->prl_hd_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="prl_ast_teacher" value="{{$instRow->prl_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="prl_pprimary_teacher" value="{{$instRow->prl_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="prl_sg" value="{{$instRow->prl_sg}}"></td>
                                </tr>
                                <tr>
                                    <th scope="row">মৃত/ইস্তফা**</th>
                                    <td><input type="number" style="width: 50px" name="dd_hd_teacher" value="{{$instRow->dd_hd_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="dd_ast_teacher" value="{{$instRow->dd_ast_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="dd_pprimary_teacher" value="{{$instRow->dd_pprimary_teacher}}"></td>
                                    <td><input type="number" style="width: 50px" name="dead_sg" value="{{$instRow->dead_sg}}"></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="col-md-1 border justify-content-center align-self-center">
                        <span style="font-weight: bold; font-size: 16px"> ভবন ও কক্ষ সংক্রান্ত তথ্য </span>
                    </div>
                    <div class="col-4 border justify-content-center align-self-center">
                        <div class="building_number">
                            <table class="table teacher">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">ভবন সংখ্যা</th>
                                    <th scope="col">কক্ষ সংখ্যা</th>
                                    <th scope="col">ওয়াশব্লক সংখ্যা</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="number" style="width: 50px" name="building_number" value="{{$instRow->building_number}}"></td>
                                    <td><input type="number" style="width: 50px" name="room_number" value="{{$instRow->room_number}}"></td>
                                    <td><input type="number" style="width: 50px" name="washblock_number" value="{{$instRow->washblock_number}}"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px"
                       value="Save and Go Forward">
            </div>
        </form>
        <div style="clear: both"></div>
        {{--Include Footer--}}
        @include('common.footer');
        {{--Include Footer End--}}
    </div>
</div>
    <script src="js/app.js" defer></script>
</body>
</html>
