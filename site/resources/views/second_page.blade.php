@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html>
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container kalpurus" id="app">
    <div class="header">
        <div class="front_text">
            <div class="">
                <img class="float-right" style="" src="img/resize.jpg" alt="mujib" height="100px" width="150px">
            </div>
            <div style="clear:both"></div>
            <div class="row">
                <div class="col-12 text-center" style="font-size: 1.2em;">
                    <span> গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
                    <br>
                    <span> শিক্ষা মন্ত্রণালয়</span>
                    <br>
                    <span> বাংলাদেশ শিক্ষা তথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) </span>
                    <br>
                    <span> ১ জহির রায়হান রোড (পলাশী-নীলক্ষেত), ঢাকা-১২০৫</span>
                    <br>
                    <span> www.banbeis.gov.bd</span>
                    <br>
                    <span> e-mail: info@banbeis.gov.bd</span>
                </div>

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
        <a href="#" >প্রথম পাতা</a>
        <a href="#" class="active">দ্বিতীয় পাতা</a>
        <a href="#">তৃতীয় পাতা</a>
        <a href="#">চতুর্থ পাতা</a>
        <a href="#">প্রাক-প্রাথমিক</a>
        <a href="#">প্রথম শ্রেণি</a>
        <a href="#">দ্বিতীয় শ্রেণি</a>
        <a href="#">তৃতীয় শ্রেণি</a>
        <a href="#">চতুর্থ শ্রেণি</a>
        <a href="#">পঞ্চম শ্রেণি</a>
        <a href="#">ষষ্ঠ-অষ্টম শ্রেণি</a>
        <a href="#">শিক্ষক ও কর্মচারী</a>
    </div>

    <div class="first_body">
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
                        <table class="table teacher">
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
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            <tr>
                                <th scope="row">সংযুক্তি(In)</th>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            <tr>
                                <th scope="row">সংযুক্তি(Out)</th>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            <tr>
                                <th scope="row">কর্মরত</th>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            <tr>
                                <th scope="row">অবসর/পিআরএল**</th>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            <tr>
                                <th scope="row">মৃত/ইস্তফা**</th>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
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
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                                <td><input type="number" style="width: 50px" name=""></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right">

        <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px" value="Save and Go Forward">
    </div>
    <div style="clear: both">

    </div>
    </form>
    <hr>
    <div class="footer">
        <div class="row footer">
            <div class="col-md-12"
                 style="text-align:center; padding:5px; font-family: 'Lucida Sans'; background-color: #a1cbef;">
                <span> &copy; Powered by ICT Division, BANBEIS</span> <br>
                <span> Ministry of Education</span>
            </div>
        </div>
    </div>
    <hr>
</div>

<script src="js/app.js" defer></script>
</body>
</html>
