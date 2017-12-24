<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link href="static/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="static/js/html5shiv.js"></script>
    <script src="static/js/respond.min.js"></script>
    <script src="static/js/moment-with-locales.js"></script>
    <script src="static/js/bootstrap-datetimepicker.js"></script>
    <script src="static/js/distpicker.data.js"></script>
    <script src="static/js/distpicker.js"></script>
    <script src="static/js/distpicker_main.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <h4 style="color: ghostwhite;margin-top: 8%;font-family: STKaiti ">加拿大华人互助平台</h4>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 30%">
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="  ">
                    </div>
                    <button type="submit" class="btn btn-info">Search</button>
                </form>
                <!--<li><a href="#" style="color: ghostwhite"> Username</a></li>-->
                <button type="button" class="btn btn-primary navbar-btn" onclick="Sign()">Sign in</button>
                <button type="button" class="btn btn-primary navbar-btn" onclick="Sign()">Register</button>

                <!--<li><a href="#" style="color: ghostwhite"> Sign Out</a></li>-->
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid" style="margin-top: 5%">
    <div class="row-fluid">
        <div class="col-lg-2">
            1
        </div>
        <div class="col-lg-8" id="test">
            <legend><strong>正在进行的活动</strong></legend>








        </div>
        <div class="col-lg-2">
            3
        </div>
    </div>
</div>

<?php include 'showuserrec.php';?>

<script>
    
    var t = document.getElementById("test");

    for (var i = 0; i < cp_drvier_pax.length;i++){

        t.append(cp_drvier_pax[i].id);
    }




</script>






</body>
</html>