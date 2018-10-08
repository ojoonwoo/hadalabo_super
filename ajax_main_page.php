<?
include_once "./include/autoload.php";

$mnv_f 			= new mnv_function();
$my_db         = $mnv_f->Connect_MySQL();

if(isset($_REQUEST['pageNum']) == false)
	$pg = "1";
else
	$pg = $_REQUEST['pageNum'];
//	$pg = $_REQUEST['pg'];

if(isset($_REQUEST['orderBy']) == false)
	$orderby = "ORDER BY idx DESC";
else
	$orderby = "ORDER BY ".$_REQUEST['orderBy']." DESC";

//$pg = $_REQUEST['pageNum'];
$page_size = 8;	// 한 페이지에 나타날 개수
$block_size = 10;	// 한 화면에 나타낼 페이지 번호 개수
//$orderby = "";

$member_count_query = "SELECT count(*) FROM member_info WHERE 1";
list($member_count) = @mysqli_fetch_array(mysqli_query($my_db, $member_count_query));

$PAGE_CLASS = new mnv_page($pg,$member_count,$page_size,$block_size);
$BLOCK_LIST = $PAGE_CLASS->blockList5();
$PAGE_UNCOUNT = $PAGE_CLASS->page_uncount;


$member_list_query = "SELECT * FROM member_info WHERE 1 $orderby LIMIT $PAGE_CLASS->page_start, $page_size";
//print_r($member_list_query);
$res = mysqli_query($my_db, $member_list_query);
$output = "";
while($member_data = mysqli_fetch_array($res))
{
	$output .= "<li>
					<p class='name'>".$member_data["quatrain_name"]." 님</p>
					<p class='node'><span class='for-a11y'>[수]</span>".$member_data["quatrain01"]."</p>
					<p class='node'><span class='for-a11y'>[퍼]</span>".$member_data["quatrain02"]."</p>
					<p class='node'><span class='for-a11y'>[보]</span>".$member_data["quatrain03"]."</p>
					<p class='node'><span class='for-a11y'>[습]</span>".$member_data["quatrain04"]."</p>
					<button type='button' class='like'><span class='for-a11y'>좋아요</span></button>
					<a href='#layerDetail' class='more' data-layer='#layerDetail' onclick='quatrainDataStore(this)'><span class='for-a11y'>상세보기</span></a>
				</li>";
}

$output .= "||".$BLOCK_LIST;

echo $output;
//echo $member_list_query;
?>