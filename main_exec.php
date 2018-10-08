<?php
include_once "./include/autoload.php";

switch ($_REQUEST['exec'])
{
    case "insert_member_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $mb_name            = trim($_REQUEST["mb_name"]);
        $mb_phone           = trim($_REQUEST["mb_phone"]);
        $mb_zipcode         = $_REQUEST["mb_zipcode"];
        $mb_addr1           = $_REQUEST["mb_addr1"];
        $mb_addr2           = trim($_REQUEST["mb_addr2"]);
        $quatrain01         = trim($_REQUEST["quatrain01"]);
        $quatrain02         = trim($_REQUEST["quatrain02"]);
        $quatrain03         = trim($_REQUEST["quatrain03"]);
        $quatrain04         = trim($_REQUEST["quatrain04"]);
        $quatrain_name      = trim($_REQUEST["quatrain_name"]);

        $dupli_query	= "SELECT * FROM member_info WHERE mb_phone='".$mb_phone."' OR (mb_addr1='".$mb_addr1."' AND mb_addr2='".$mb_addr2."')";
		$dupli_result 	= mysqli_query($my_db, $dupli_query);
		$dupli_num		= mysqli_num_rows($dupli_result);

        if ($dupli_num > 0)
        {
            $flag = "D";
        }else{
			$query		= "INSERT INTO member_info(mb_ipaddr, mb_name, mb_phone, quatrain01, quatrain02, quatrain03, quatrain04, quatrain_name, mb_zipcode, mb_addr1, mb_addr2, mb_gubun, mb_media, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".$quatrain01."','".$quatrain02."','".$quatrain03."','".$quatrain04."','".$quatrain_name."','".$mb_zipcode."','".$mb_addr1."','".$mb_addr2."','".$gubun."','".$_SESSION['ss_media']."',now())";
            $result		= mysqli_query($my_db, $query);

            if ($result)
                $flag = "Y";
            else
                $flag = "N";
        }

		echo $flag;
    break;
    
    case "insert_share_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();
        $sns_media		= $_REQUEST['sns_media'];

        $query 		= "INSERT INTO share_info(sns_media, sns_gubun, sns_ipaddr, inner_media, sns_regdate) values('".$sns_media."','".$gubun."','".$_SERVER['REMOTE_ADDR']."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
        $result 	= mysqli_query($my_db, $query);

    break;

    case "insert_click_info" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        $gubun          = $mnv_f->MobileCheck();

        $click_name		= $_REQUEST['click_name'];

        $query 		= "INSERT INTO click_info(click_name, click_refferer, click_ipaddr, click_gubun, click_media, click_date) values('".$click_name."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".$_SESSION['ss_media']."','".date("Y-m-d H:i:s")."')";
        $result 	= mysqli_query($my_db, $query);

    break;

    case "draw_winner" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();
        // $gubun          = $mnv_f->MobileCheck();

        $draw_array      = array("Y","N","N","N","N","N","N","N","N","N");
    //    $draw_array      = array("Y");
		shuffle($draw_array);

        echo $draw_array[0];
    break;

    case "like_member" :
        $mnv_f          = new mnv_function();
        $my_db          = $mnv_f->Connect_MySQL();

        $mb_idx         = $_REQUEST["mb_idx"];
        $plusMinus      = $_REQUEST["plusMinus"];


        $query 		= "UPDATE member_info SET mb_like = mb_like ".$plusMinus." 1 WHERE idx='".$mb_idx."'";
        $result 	= mysqli_query($my_db, $query);

        if ($result)
            $flag = "Y";
        else
            $flag = "N";

        echo $flag;
    break;
}