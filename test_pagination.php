 <?php

    $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
    if(mysqli_errno($conn))
    {
        echo mysqli_errno($conn);
        exit;
    }
    mysqli_select_db($conn,"userdb");
    mysqli_set_charset($conn,'utf8');

    // $value = $_GET["conditions"];
    $value = "Hamilton";

    $sql_cpdp = "select cpdriverrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cpdriverrec";

    // $sql_cpdp = "select cpdriverrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cpdriverrec where dept_city = $value";

    $sql_cppd = "select cppaxrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cppaxrec";
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
        }
        $json_cpdp = json_encode($data_cpdp);
        $response = $json_cpdp;
        echo $response;

    }else{
        echo "failed";
    }

?>