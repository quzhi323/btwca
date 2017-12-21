<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>ByTheWay</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Bootstrap Css -->
    <link href="static/bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" media="screen" href="static/css/bootstrap.min.css"/>
    <link href="static/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script type="text/javascript" src="static/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

    <script src="static/js/html5shiv.js"></script>
    <script src="static/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="static/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

    <script src="static/js/moment-with-locales.js"></script>
    <script src="static/js/bootstrap-datetimepicker.js"></script>

    <script src="static/js/distpicker.data.js"></script>
    <script src="static/js/distpicker.js"></script>
    <script src="static/js/distpicker_main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#timepicker').datetimepicker();
            document.getElementById("timepicker").value = $("#timepicker").val();

            $("#submit").click(function () {

                var time = $("#timepicker").val();
                var timestamp = Date.parse(new Date(time));
                timestamp = timestamp / 1000;
                var add_time = document.getElementById("datetime");
                add_time.value = timestamp;

                var dept_add = document.getElementById("dept_add");
                dept_add.value = $("#district option:selected").val();

                var dept_city = document.getElementById("dept_city");
                dept_city.value = $("#city option:selected").val();

                var dept_prov = document.getElementById("dept_prov");
                dept_prov.value = $("#province option:selected").val();

                var dest_add = document.getElementById("dest_add");
                dest_add.value = $("#target-district option:selected").val();

                var dest_city = document.getElementById("dest_city");
                dest_city.value = $("#target-city option:selected").val();

                var dest_prov = document.getElementById("dest_prov");
                dest_prov.value = $("#target-province option:selected").val();

//                var radio = document.getElementsByName("flag");
//                for (i = 0; i < radio.length; i++) {
//                    if (radio[i].checked) {
//                        alert(radio[i].value)
//                    }
//                }
                var pax_num = document.getElementById("pax_num");

                pax_num.value = $("#pax_num_sel option:selected").val();

                var descpt = document.getElementById("descpt");

                descpt.value = $("#descpt_input").val();

            });



//            createRecord("carpool-findall")
//
//            function createRecord(parent_id) {
//
//                var parent = document.getElementById(parent_id)
//
//            }
//



        });
        function Sign() {
            window.location.href = 'login.html';
        }
        
        




    </script>

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
            <img height="200" width="220" style="margin-left: -8%; " src="static/images/logo.jpg" class="img-rounded"/>
        </div>
        <div class="col-lg-8">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="tabbable" id="tabs-87669">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#carpool" data-toggle="tab">顺风车</a>
                                </li>
                                <li>
                                    <a href="#deliver" data-toggle="tab">带物</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="carpool">
                                    <div class="accordion">
                                        <div class="well well-lg">
                                            <div class="tabbable" id="carpool_list">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#carpool-findall" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-th"
                                                                aria-hidden="true">全部</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#carpool-findpax" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-bullhorn"
                                                                aria-hidden="true">车找人</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#carpool-findcar" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-bullhorn"
                                                                aria-hidden="true">人找车</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#carpool-pubinfo" data-toggle="tab"><span
                                                                class="glyphicon glyphicon-pencil"
                                                                aria-hidden="true">发布信息</span></a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="carpool-findall">
                                                        all
                                                    </div>
                                                    <div class="tab-pane" id="carpool-findpax">

                                                        找人
                                                    </div>
                                                    <div class="tab-pane" id="carpool-findcar">
                                                        找车

                                                    </div>
                                                    <div class="tab-pane" id="carpool-pubinfo">

                                                        <form action="/bytheway/pubrec.php" method="post"
                                                              style="margin-top: 5%">

                                                            <div class="row">

                                                                <div class="row">

                                                                    <div class="col-lg-3">

                                                                    </div>

                                                                    <div class=" col-lg-3">
                                                                        <input checked="true" type="radio" name="flag"
                                                                               value="0"/>
                                                                        我要发车
                                                                    </div>
                                                                    <div class=" col-lg-3">
                                                                        <input type="radio" name="flag" value="1"/>

                                                                        我要坐车
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <div class="col-lg-2">
                                                                    出发时间*
                                                                </div>

                                                                <div class=" col-lg-4">
                                                                    <input type="text" class="form-control"
                                                                           id="timepicker" Name="timepicker"
                                                                           placeholder="点击选择时间">
                                                                    <input type="hidden" id="datetime" Name="datetime"
                                                                           value="test">
                                                                </div>

                                                            </div>
                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    出发地*
                                                                </div>


                                                                <div class=" col-lg-8">
                                                                    <div class="docs-methods">
                                                                        <div class="form-inline">
                                                                            <div id="distpicker">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="province">Province</label>
                                                                                    <select class="form-control"
                                                                                            id="province"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="city">City</label>
                                                                                    <select class="form-control"
                                                                                            id="city"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="district">District</label>
                                                                                    <select class="form-control"
                                                                                            id="district"></select>
                                                                                    <!--为了隐私 要不就不要用户输入地址了， 直接选个区-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="dept_add" Name="dept_add"
                                                                           value="test">
                                                                    <input type="hidden" id="dept_city" Name="dept_city"
                                                                           value="test">
                                                                    <input type="hidden" id="dept_prov" Name="dept_prov"
                                                                           value="test">
                                                                </div>


                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    目的地*
                                                                </div>
                                                                <div class=" col-lg-8">
                                                                    <div class="docs-methods">
                                                                        <div class="form-inline">
                                                                            <div data-toggle="distpicker">
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="province">Province</label>
                                                                                    <select class="form-control"
                                                                                            id="target-province"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only" for="city">City</label>
                                                                                    <select class="form-control"
                                                                                            id="target-city"></select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="sr-only"
                                                                                           for="district">District</label>
                                                                                    <select class="form-control"
                                                                                            id="target-district"></select>
                                                                                    <!--为了隐私 要不就不要用户输入地址了， 直接选个区-->
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="dest_add" Name="dest_add"
                                                                           value="test">
                                                                    <input type="hidden" id="dest_city" Name="dest_city"
                                                                           value="test">
                                                                    <input type="hidden" id="dest_prov" Name="dest_prov"
                                                                           value="test">
                                                                </div>


                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    人数*
                                                                </div>

                                                                <div class=" col-lg-2">
                                                                    <div class="form-group">
                                                                        <select class="form-control" id="pax_num_sel">
                                                                            <option>1</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                            <option>6</option>
                                                                        </select>
                                                                        <input type="hidden" id="pax_num" Name="pax_num"
                                                                               value="test">
                                                                    </div>

                                                                </div>
                                                            </div>



                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    手机号*
                                                                </div>

                                                                <div class=" col-lg-2">

                                                                    <input type="text" Name="phone"  required="">


                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    微信号
                                                                </div>

                                                                <div class=" col-lg-2">

                                                                    <input type="text" Name="wechat" >

                                                                </div>
                                                            </div>

                                                            <br>

                                                            <div class="row">

                                                                <div class="col-lg-2">
                                                                    描述
                                                                </div>

                                                                <div class=" col-lg-4">
                                                                    <textarea id="descpt_input"
                                                                              style="width:380px;height:80px;"
                                                                              ></textarea>
                                                                    <input type="hidden" id="descpt" Name="descpt"
                                                                           value="">
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <!--<button class="btn btn-block btn-primary" type="button"-->
                                                            <!--id="submit">发布-->
                                                            <!--</button>-->

                                                            <input type="submit" class="btn btn-block btn-primary"
                                                                   id="submit" Name="submit" value="Publish">


                                                        </form>

                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="deliver">
                                    <p>
                                        Deliver
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <img height="160" width="220" style="margin-left:-10% " src="static/images/ad_nike.jpeg"
                 class="img-rounded"/>
            <br>
            <img height="160" width="220" style="margin-left:-10% " src="static/images/ad_aj.jpg" class="img-rounded"/>
            <br>
            <img height="160" width="220" style="margin-left:-10% " src="static/images/ad_mr.gao.jpg"
                 class="img-rounded"/>

        </div>
    </div>
</div>

<?php
        $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
        if(mysqli_errno($conn))
        {
            echo mysqli_errno($conn);
            exit;
        }
        mysqli_select_db($conn,"userdb");
        mysqli_set_charset($conn,'utf8');

        $sql_dp = "select dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from driverrec";
        $sql_pd = "select dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from paxrec";
        $result_dp = $conn->query($sql_dp);
        $result_pd = $conn->query($sql_pd);
        $data_dp = array();
        $data_pd = array();

        class dfindp
        {
            public $dept_add;
            public $dept_city;
            public $dept_prov;
            public $dest_add;
            public $dest_city;
            public $dest_prov;
            public $wechat;
            public $phone;
            public $pub_time;
            public $pax_num;
            public $descpt;
            public $datetime;
        }

        class pfindd
        {
            public $dept_add;
            public $dept_city;
            public $dept_prov;
            public $dest_add;
            public $dest_city;
            public $dest_prov;
            public $wechat;
            public $phone;
            public $pub_time;
            public $pax_num;
            public $descpt;
            public $datetime;
        }


        if($result_dp)
        {
            // session_start();

            while ($row = mysqli_fetch_array($result_dp, MYSQL_ASSOC))
            {
                $dp = new dfindp();
                $dp->dept_add = $row['dept_add'];
                $dp->dept_city = $row['dept_city'];
                $dp->dept_prov = $row['dept_prov'];
                $dp->dest_add = $row['dest_add'];
                $dp->dest_city = $row['dest_city'];
                $dp->dest_prov = $row['dest_prov'];
                $dp->wechat = $row['wechat'];
                $dp->phone = $row['phone'];
                $dp->pub_time = $row['pub_time'];
                $dp->pax_num = $row['pax_num'];
                $dp->descpt = $row['descpt'];
                $dp->datetime = $row['datetime'];
                $data_dp[]=$dp;
                // echo "<tr><td>$user_id</td><td>$username</td></tr>";
            }
            $json_dp = json_encode($data_dp);
             echo "<script> var drvier_pax = $json_dp ;</script>";

        }else{
            echo "failed";
        }


        if($result_pd)
        {
            // session_start();

            while ($row = mysqli_fetch_array($result_pd, MYSQL_ASSOC))
            {
                $pd = new pfindd();
                $pd->dept_add = $row['dept_add'];
                $pd->dept_city = $row['dept_city'];
                $pd->dept_prov = $row['dept_prov'];
                $pd->dest_add = $row['dest_add'];
                $pd->dest_city = $row['dest_city'];
                $pd->dest_prov = $row['dest_prov'];
                $pd->wechat = $row['wechat'];
                $pd->phone = $row['phone'];
                $pd->pub_time = $row['pub_time'];
                $pd->pax_num = $row['pax_num'];
                $pd->descpt = $row['descpt'];
                $pd->datetime = $row['datetime'];
                $data_pd[]=$pd;
            }
            $json_pd = json_encode($data_pd);
             echo "<script> var pax_driver = $json_pd ;</script>";

        }else{
            echo "failed";
        }
    ?>





<script>




    createRecord(drvier_pax,"carpool-findpax");
    createRecord(pax_driver,"carpool-findcar");


        function createRecord(record_list,parent_id) {
            var carpool_record =document.getElementById(parent_id);
            var table = document.createElement("table");
            table.setAttribute("className","table");
            var tbody = document.createElement("tbody");

            var thead=document.createElement("thead");
            var tr=document.createElement("tr");
            var th1=document.createElement("th");
            th1.innerHTML="出发地";
            tr.append(th1);

            var th2=document.createElement("th");
            th2.innerHTML="目的地";
            tr.append(th2);
            var th3=document.createElement("th");
            th3.innerHTML="时间";
            tr.append(th3);

            thead.append(tr);
            table.append(thead);

            for (var i = 0; i <record_list.length;i++){

                var tr = document.createElement("tr");

                var td1= document.createElement("td");
                td1.innerHTML=record_list[i].dept_add;
                tr.append(td1);

                var td2= document.createElement("td");
                td2.innerHTML=record_list[i].dest_add;
                tr.append(td2);

                var td3= document.createElement("td");
                td3.innerHTML=record_list[i].datetime;
                tr.append(td3);
                tbody.append(tr);
            }
            table.append(tbody);
            carpool_record.append(table);

        }









    


</script>

</body>
</html>