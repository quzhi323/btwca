 <?php 
    //个人面显示所有发布的记录 showuserrec.php
    session_start();
    $user_id = $_SESSION['user_id'];

    $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
    if(mysqli_errno($conn))
    {
        echo mysqli_errno($conn);
        exit;
    }
    mysqli_select_db($conn,"userdb");
    mysqli_set_charset($conn,'utf8');

    $sql_cpdp = "select cpdriverrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cpdriverrec where user_id = '$user_id'";
    $sql_cppd = "select cppaxrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cppaxrec where user_id = '$user_id'";
    $result_cpdp = $conn->query($sql_cpdp);
    $result_cppd = $conn->query($sql_cppd);
    $data_cpdp = array();
    $data_cppd = array();

    class cpdfindp
    {
        public $id;
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

    class cppfindd
    {
        public $id;
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


    if($result_cpdp)
    {
        // session_start();

        while ($row = mysqli_fetch_array($result_cpdp, MYSQL_ASSOC))
        {
            $cpdp = new cpdfindp();
            $cpdp->id = $row['cpdriverrec_id'];
            $cpdp->dept_add = $row['dept_add'];
            $cpdp->dept_city = $row['dept_city'];
            $cpdp->dept_prov = $row['dept_prov'];
            $cpdp->dest_add = $row['dest_add'];
            $cpdp->dest_city = $row['dest_city'];
            $cpdp->dest_prov = $row['dest_prov'];
            $cpdp->wechat = $row['wechat'];
            $cpdp->phone = $row['phone'];
            $cpdp->pub_time = $row['pub_time'];
            $cpdp->pax_num = $row['pax_num'];
            $cpdp->descpt = $row['descpt'];
            $cpdp->datetime = $row['datetime'];
            $data_cpdp[]=$cpdp;
            // echo "<tr><td>$user_id</td><td>$username</td></tr>";
        }
        $json_cpdp = json_encode($data_cpdp);
         echo "<script> var cp_drvier_pax = $json_cpdp ;</script>";

    }else{
        echo "failed";
    }


    if($result_cppd)
    {
        // session_start();

        while ($row = mysqli_fetch_array($result_cppd, MYSQL_ASSOC))
        {
            $cppd = new cppfindd();
            $cppd->id = $row['cppaxrec_id'];
            $cppd->dept_add = $row['dept_add'];
            $cppd->dept_city = $row['dept_city'];
            $cppd->dept_prov = $row['dept_prov'];
            $cppd->dest_add = $row['dest_add'];
            $cppd->dest_city = $row['dest_city'];
            $cppd->dest_prov = $row['dest_prov'];
            $cppd->wechat = $row['wechat'];
            $cppd->phone = $row['phone'];
            $cppd->pub_time = $row['pub_time'];
            $cppd->pax_num = $row['pax_num'];
            $cppd->descpt = $row['descpt'];
            $cppd->datetime = $row['datetime'];
            $data_cppd[]=$cppd;
        }
        $json_cppd = json_encode($data_cppd);
         echo "<script> var cp_pax_driver = $json_cppd ;</script>";

    }else{
        echo "failed";
    }
?> 