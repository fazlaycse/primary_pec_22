<html>
<head>
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body class="container" style="background:skyblue">
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
<div class="container">
    <form class="form-group" method="post" action="first_page">
        {{ csrf_field() }}
        Enter EMIS code : <input type="text" value="" placeholder="EMIS Code" name="emis_code"/>
        <input type="submit" value="Submit and go the form"/>
    </form>
</div>


<script src="js/app.js" defer></script>
</body>
</html>
