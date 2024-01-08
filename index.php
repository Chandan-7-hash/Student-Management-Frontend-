<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management Page.</title>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contacts</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">

    <label class="img_text">Welcome to Excel University!</label>


    <img class="main_img" src="school_management.jpg">
    </div>

    <div class="container">

    <div class="row">
        <div class="col-md-4">
            <img class="welcome_img" src="school2.jpg">
        </div>
        <div class="col-md-8">

        <h1>Welcome to Excel University.</h1>

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>
    </div>
    </div>

    <center>
        <h1>Our Faculties</h1>
    </center>

    <div class="container">

    <div class="row">

    <div class="col-md-4">

        <img class="teacher" src="teacher1.jpg">
        <p>Faculty1</p>

    </div>

    <div class="col-md-4">

    <img class="teacher" src="teacher2.jpg">
    <p>Faculty2</p>
        
    </div>

    <div class="col-md-4">

    <img class="teacher" src="teacher3.jpg">
    <p>Faculty3</p>
        
    </div>

    </div>
    </div>

    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">

    <div class="row">

    <div class="col-md-4">

        <img class="teacher" src="web.jpg">
        <h3>Web Development</h3>

    </div>

    <div class="col-md-4">

    <img class="teacher" src="graphic.jpg">
    <h3>Graphic Designing</h3>
        
    </div>

    <div class="col-md-4">

    <img class="teacher" src="marketing.jpg">
    <h3>MBA</h3>
        
    </div>

    </div>
    </div>

    <center>
        <h1>Admission Form</h1>
    </center>

    <div align="center" class="admission_form">

    <form>

    <div class="adm_int">
        <label class="label_text">Name</label>
        <input class="input_deg"  type="text" name="">
    </div>

    <div class="adm_int">
        <label class="label_text">Email</label>
        <input class="input_deg" type="text" name="">
    </div>

    <div class="adm_int">
        <label class="label_text">Phone</label>
        <input class="input_deg"  type="text" name="">
    </div>

    <div class="adm_int">
        <label class="label_text">>Message</label>
        <textarea class="input_txt"></textarea>
    </div>

    <div>
        
        <input class="btn btn-primary" id="submit" type="submit" value="apply">
    </div>

    </form>
    </div>
</body>
</html>