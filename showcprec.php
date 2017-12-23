 <?php 
    $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
    if(mysqli_errno($conn))
    {
        echo mysqli_errno($conn);
        exit;
    }
    mysqli_select_db($conn,"userdb");
    mysqli_set_charset($conn,'utf8');

    $sql_dp = "select cpdriverrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cpdriverrec";
    $sql_pd = "select cppaxrec_id, dept_add, dept_city, dept_prov, dest_add, dest_city, dest_prov, wechat, phone, pub_time, pax_num, descpt, datetime from cppaxrec";
    $result_dp = $conn->query($sql_dp);
    $result_pd = $conn->query($sql_pd);
    $data_dp = array();
    $data_pd = array();

    class dfindp
    {
        public $cpdriverrec_id;
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
        public $cppaxrec_id;
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
            $dp->cpdriverrec_id = $row['cpdriverrec_id'];
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
            $pd->cppaxrec_id = $row['cppaxrec_id'];
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