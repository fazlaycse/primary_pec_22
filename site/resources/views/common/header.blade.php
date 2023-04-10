<div class="header">
    <div class="col-12 text-center" style="font-size: 1.2em;">
        <span> গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
        <br>
        <span> শিক্ষা মন্ত্রণালয়</span>
        <br>
        <span> বাংলাদেশ শিক্ষা তথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) </span>
    </div>
    <div style="text-align: right;height: 0px;">
        <img class="" style="position: relative; top: -150px; right: 150px;" src="img/mujib_borsho.png" alt="mujib"
             height="100px" width="150px">
    </div>
</div>
<div class="form_name">
    <div class="heading col-md-12">
        <h4 style="text-align:center"> বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২১ এর পিইসি তথ্য সংগ্রহ ফরম </h4>
    </div>
</div>
<div class="topnav">
    <?php use Illuminate\Support\Facades\Request; $slug = Request::segment(count(Request::segments()));?>
    <a href="#" <?php if ($slug == 'first_page') echo 'class="active"' ?>>প্রথম পাতা</a>
    <a href="#" <?php if ($slug == 'second_page') echo 'class="active"' ?>>দ্বিতীয় পাতা</a>
    <a href="#" <?php if ($slug == 'third_page') echo 'class="active"' ?>>তৃতীয় পাতা</a>
    <a href="#" <?php if ($slug == 'fourth_page') echo 'class="active"' ?>>চতুর্থ পাতা</a>
    <a href="#" <?php if ($slug == 'fifth_page') echo 'class="active"' ?>>পঞ্চম পাতা</a>
    <a href="#" <?php if ($slug == 'sixth_page') echo 'class="active"' ?>>ষষ্ঠ পাতা</a>
    <a href="#" <?php if ($slug == 'seventh_page') echo 'class="active"' ?>>সপ্তম পাতা</a>
    <a href="#" <?php if ($slug == 'pre_primary') echo 'class="active"' ?>>প্রাক-প্রাথমিক</a>
    <a href="#" <?php if ($slug == 'class_one') echo 'class="active"' ?>>প্রথম শ্রেণি</a>
    <a href="#" <?php if ($slug == 'class_two') echo 'class="active"' ?>>দ্বিতীয় শ্রেণি</a>
    <a href="#" <?php if ($slug == 'class_three') echo 'class="active"' ?>>তৃতীয় শ্রেণি</a>
    <a href="#" <?php if ($slug == 'class_four') echo 'class="active"' ?>>চতুর্থ শ্রেণি</a>
    <a href="#" <?php if ($slug == 'class_five') echo 'class="active"' ?>>পঞ্চম শ্রেণি</a>
    <a href="#" <?php if ($slug == 'class_six') echo 'class="active"' ?>>ষষ্ঠ-অষ্টম শ্রেণি</a>
    <a href="#" <?php if ($slug == 'teacher_info') echo 'class="active"' ?>>শিক্ষক ও কর্মচারী</a>
</div>
