<?
    include_once "../include/autoload.php";

    $mnv_f 			= new mnv_function();
   	$my_db         = $mnv_f->Connect_MySQL();
    $mobileYN      = $mnv_f->MobileCheck();
    // $obYN          = $mnv_f->BrowserCheck();
    $IEYN          = $mnv_f->IECheck();
    $SafariYN          = $mnv_f->SafariCheck();
    // print_r($_SERVER["HTTP_USER_AGENT"]);
    if ($mobileYN == "PC")
    {
        echo "<script>location.href='../index.php?media=".$_REQUEST["media"]."';</script>";
    }else{
        $saveMedia     = $mnv_f->SaveMedia();
        $rs_tracking   = $mnv_f->InsertTrackingInfo($mobileYN);
    }

	include_once "head.php";
?>	
	<body>
		<div class="wrap">
			<div class="logo-area">
				<div class="logo-wrap">
					<a href="index.php">
						<img src="./images/HADALABO_logo.png" alt="홈으로">
					</a>
				</div>
			</div>
			<section class="main-section main-section--01">
				<div class="light-01"></div>
				<div class="light-02"></div>
				<div class="product"></div>
				<div class="drop-01"></div>
				<div class="drop-02"></div>
				<div class="drop-03"></div>
				<div class="model"></div>
				<h1 class="title">
					<img src="images/main-section-01-title.png" alt="하다라보 고쿠쥰 4행시 이벤트 내가 쓰는 수퍼보습" class="content-image">
				</h1>
				<p class="text">
					<img src="images/main-section-01-text.png" alt="" class="content-image">
					<span class="for-a11y">
						지금 ‘수퍼보습’으로 4행시에 도전하세요<br>
						참여만 해도 [수퍼보습 5days KIT] 100% 겟!<br>
						참여기간 : 2018.10.15 (월) ~ 2018.11.11 (일)<br>
						당첨자 발표 : 2018.11.14 (수)
					</span>
				</p>
				<div class="main-section-01-slide">
					<ul>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								분이 속 깊이 스며들고
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								펙트하게 마무리하여
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								습을 압도하다
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관을 바꾸세요 수퍼보습으로
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								분이 부족할 땐
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								펙트한 보습이 필요해
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								습을 넘어 하다라보 수퍼보습
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관을 바꿔 촉촉해져봐!
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								분이 속 깊이
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								지는
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								습은 오직 하다라보 수퍼보습 뿐
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관 되면 피부가 달라질 걸
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								고했어 오늘도
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								퍽한 보습하느라
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								습이 수퍼, 수퍼보습으로
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관을 체인지, 수퍼보습으로
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								분이 차고 넘쳐
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								펙트 말을 잃어
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								습을 뛰어 넘어
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관을 바꿔 버려
							</p>
						</li>
					</ul>
				</div>
				<p class="info">
					<img src="images/main-section-01-info.png" alt="화면을 스와이프하면 다른 응모작을 더 보실 수 있습니다" class="content-image">
				</p>
				<ul class="buttons">
					<li>
						<!-- <a href="event.php" class="btn btn--01"> -->
						<a href="javascript:void(0)" class="btn btn--01" onclick="end_event();">
							<img src="images/main-section-01-button-01.png" alt="4행시 도전">
						</a>
					</li>
					<li>
						<button type="button" class="btn btn--02" data-layer="#layerShare">
							<img src="images/main-section-01-button-02.png" alt="이벤트 공유하기">
						</button>
					</li>
				</ul>
			</section>
			<section class="main-section main-section--02">
				<button type="button" class="js-main-down">
					<span class="for-a11y">
						내용 아래로
					</span>
				</button>
				<h1 class="title">
					<img src="images/main-section-02-title.png" alt="내가 쓴 4행시가 하다라보 광고가 된다!" class="content-image">
				</h1>
				<h2 class="sub-title">
					<img src="images/main-section-02-sub-title-01.png" alt="참여방법" class="content-image">
				</h2>
				<ul class="step">
					<li>
						<img src="images/main-section-02-step-01.png" alt="step 1. 하다라보 수퍼보습 4행시 도전">
					</li>
					<li>
						<img src="images/main-section-02-step-02.png" alt="step 2. 이벤트 팝업창에서 주소 입력">
					</li>
					<li>
						<img src="images/main-section-02-step-03.png" alt="step 3. 하다라보 고쿠쥰 [수퍼보습 5days KIT] 수령">
					</li>
				</ul>
				<h2 class="sub-title">
					<img src="images/main-section-02-sub-title-02.png" alt="경품" class="content-image">
				</h2>
				<ul class="product">
					<li>
						<img src="images/main-section-02-product-01.png" alt="참여자 중 50명에게 하다라보 고쿠쥰 로션 정품 증정">
					</li>
					<li>
						<img src="images/main-section-02-product-02.png" alt="참여자 100% 전원 [수퍼보습 5days KIT] 증정">
					</li>
					<li>
						<img src="images/main-section-02-product-03.png" alt="최종 수상작 서울시내 버스쉘터 광고 게재">
					</li>
				</ul>
				<p class="notice">
					<img src="images/main-section-02-notice.png" alt="" class="content-image">
					<span class="for-a11y">
						[NOTICE]<br>
						- 당첨작 선정은 좋아요 순위 (50%)와 에디터 심사 (50%)에 의해 이루어집니다<br>
						- 광고로 게재되는 선정작은 참여작은 하다라보 SNS 채널에서 추후 공개됩니다
					</span>
				</p>
			</section>
			<section class="main-section main-section--03">
				<h1 class="title">
					<img src="images/main-section-03-title.png" alt="하다라보 보습을 넘어 하다라보 수퍼보습" class="content-image">
				</h1>
				<p class="text">
					<img src="images/main-section-03-text.png" alt="" class="content-image">
					<span class="for-a11y">
						수분을 싹 흡수시키고, 쭉 유지시키는 수퍼 히알루론산의 힘!<br>
						하다라보, 수퍼 히알루론산 강화로 3중 히알루론산의 황금비율을 찾아<br>
						마침내 더 깊어진 하다라보 수퍼보습을 완성하다
					</span>
				</p>
				<p class="hash">
					<img src="images/main-section-03-hash.png" alt="#속보습부스터">
				</p>
				<ul class="info">
					<li>
						<img src="images/main-section-03-info-01.png" alt="1g당 6L의 수분을 끌어당기는 히알루론산">
					</li>
					<li>
						<img src="images/main-section-03-info-02.png" alt="히알루론산 2배의 수분을 보유할 수 있는 수퍼 히알루론산">
					</li>
					<li>
						<img src="images/main-section-03-info-03.png" alt="1/200 작은 크기로 피부 속 깊이 침투하는 초미세 히알루론산">
					</li>
				</ul>
			</section>
			<section class="main-section main-section--04">
				<ul class="entry-list">
<?
	if(isset($_REQUEST['pg']) == false)
		$pg = "1";
	else
		$pg = $_REQUEST['pg'];

	if (!$pg)
		$pg = "1";
	if(isset($pg) == false) $pg = 1;	// $pg가 없으면 1로 생성

	$page_size = 6;	// 한 페이지에 나타날 개수
	$block_size = 10;	// 한 화면에 나타낼 페이지 번호 개수

	$where = "";

	// if ($sDate != "")
	// 	$where	.= " AND winner_date >= '".$sDate."' AND winner_date <= '".$eDate." 23:59:59'";
	
	// if ($search_txt != "")
	// 	$where	.= " AND ".$search_type." like '%".$search_txt."%'";

	$member_count_query = "SELECT count(*) FROM member_info WHERE 1".$where."";

	list($member_count) = @mysqli_fetch_array(mysqli_query($my_db, $member_count_query));

	$PAGE_CLASS = new mnv_page($pg,$member_count,$page_size,$block_size);
  
	$BLOCK_LIST = $PAGE_CLASS->blockList6();
	$PAGE_UNCOUNT = $PAGE_CLASS->page_uncount;
	$total_page = ceil($member_count/$page_size);

	$member_list_query = "SELECT * FROM member_info WHERE 1".$where." Order by idx DESC LIMIT $PAGE_CLASS->page_start, $page_size";
//print_r($member_list_query);
	$res = mysqli_query($my_db, $member_list_query);

	while($member_data = @mysqli_fetch_array($res))
	{
?>						
					<li>
						<p class="name first"><?=$member_data["quatrain_name"]?> 님</p>
						<p class="node first">
							<span class="for-a11y">[수]</span><?=$member_data["quatrain01"]?>
						</p>
						<p class="node first">
							<span class="for-a11y">[퍼]</span><?=$member_data["quatrain02"]?>
						</p>
						<p class="node first">
							<span class="for-a11y">[보]</span><?=$member_data["quatrain03"]?>
						</p>
						<p class="node first">
							<span class="for-a11y">[습]</span><?=$member_data["quatrain04"]?>
						</p>
						<button type="button" class="like" id="like_<?=$member_data['idx']?>" onclick="likeOn('page','<?=$member_data['idx']?>')">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail" data-id="<?=$member_data['idx']?>" onclick="quatrainDataStore(this);">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
<?
	}
?>						
				</ul>
				<ul class="form">
					<li>
						<select name="selectTestName" id="selectTestId" class="js-selectbox" data-class="ui-select">
							<option value="idx">최신 등록 순</option>
							<option value="mb_like">좋아요 많은 순</option>
						</select>
					</li>
					<li>
						<input type="text" class="search-input" id="search" placeholder="작성자 이름" title="아이디 검색 키워드 입력">
						<button type="button" class="search-submit">
							<span class="for-a11y">검색</span>
						</button>
						<button type="button" class="search-reset">
							<span class="for-a11y">초기화</span>
						</button>
					</li>
				</ul>
				<input type="hidden" id="orderby" value="idx">
				<ul class="page">
					<!-- <li>
						<a href="javascript:void(0)" class="prev" onclick="pageRun('', 'prev')">
							<span class="for-a11y">이전</span>
						</a>
					</li> -->
					<? echo $BLOCK_LIST ?>
					<!-- <li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li class="is-active"><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">7</a></li>
					<li><a href="">8</a></li>
					<li><a href="">9</a></li>
					<li><a href="">10</a></li> -->
					<!-- <li>
						<a href="javascript:void(0)" class="next" onclick="pageRun('', 'next')">
							<span class="for-a11y">다음</span>
						</a>
					</li> -->
				</ul>
			</section>
			<section class="main-section main-section--05">
				<h1 class="title">
					<img src="images/main-section-05-title.png" alt="하다라보 보습만 4년째 정유미가 추천하는 수퍼보습" class="content-image">
				</h1>
				<p class="text">
					<img src="images/main-section-05-text.png" alt="" class="content-image">
					<span class="for-a11y">
						속 깊은 보습 - 수퍼보습을 완성한 건, 역시 하다라보 고쿠쥰<br>
						하다라보 4년차 모델 정유미가 추천하는 수퍼보습의 힘을 TV광고로 먼저 확인하세요
					</span>
				</p>
				<div class="video">
					<iframe src="https://www.youtube.com/embed/xs9RrNrRffg" frameborder="0"></iframe>
				</div>
				<p class="more">
					<img src="images/main-section-05-more.png" alt="하다라보 고쿠쥰 더 자세히 만나보기" class="content-image">
				</p>
				<ul class="sns">
					<li>
						<a href="http://www.mentholatum-hadalabo.co.kr/product/gocojun_oli_cleansing.php" target="_blank">
							<img src="images/main-section-05-sns-01.png" alt="hadalabo.com">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/HadaLaboKorea/" target="_blank">
							<img src="images/main-section-05-sns-02.png" alt="페이스북">
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/hadalabo_korea/" target="_blank">
							<img src="images/main-section-05-sns-03.png" alt="인스타그램">
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCsq93AwlyafoGFMNPzQgOiQ" target="_blank">
							<img src="images/main-section-05-sns-04.png" alt="유튜브">
						</a>
					</li>
					<li class="buy-link">
						<a href="https://smartstore.naver.com/cosnique/products/264931382" target="_blank">
							<img src="./images/main-section-05-link.png" alt="">
						</a>
					</li>
				</ul>
			</section>
			<footer class="footer">
				<h1 class="logo">
					<img src="images/footer-logo.png" alt="멘소래담">
				</h1>
				<address>
					<strong>한국맨소래담</strong> ㈜ &nbsp;우)135-080 서울특별시 강남구 언주로 337. 동영문화센터 7층(역삼동)
				</address>
				<p>
					전화번호 : 02-717-1821 &nbsp;&nbsp;ㅣ&nbsp;&nbsp; 팩스번호 : 02-717-0833<br>
					사업자등록번호 : 102-84-03171 &nbsp;&nbsp;ㅣ&nbsp;&nbsp; 대표이사 : 신카이청마이클
				</p>
				<address class="copy">
					COPYRIGHT&copy;2016 MENTHOLATUM. ALL RIGHTS RESERVED.
				</address>
			</footer>
		</div>

		<!-- layer : 이벤트 공유하기 -->
		<div class="layer-wrap layer-share" id="layerShare">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">이벤트 공유하기 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-share-title.png" alt="하다라보 수퍼보습 이벤트를 공유하세요!" class="popup-image">
				</h1>
				<p class="text">
					<img src="images/layer-share-text.png" alt="" class="popup-image">
					<span class="for-a11y">
						아래 해시태그와 함께 하다라보 고쿠쥰의 '내가 쓰는 수퍼보습' 이벤트를 친구들에게도 알려주세요!<br>
						[수퍼보습 5days KIT]를 100% 드립니다
					</span>
				</p>
				<p class="hash">
					#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #속보습부스터 #건성피부 #고보습 #수퍼보습 #스킨케어 #스킨 #모찌피부 #이벤트 #스킨로션추천 #고보습스킨
				</p>
				<ul class="sns">
					<li class="sns-01">
						<button type="button" onclick="sns_share('fb', 'main')">
							<img src="images/layer-share-sns-01.png" alt="페이스북으로 공유하기">
						</button>
					</li>
					<li class="sns-02">
						<button type="button" onclick="sns_share('tw', 'main')">
							<img src="images/layer-share-sns-02.png" alt="트위터로 공유하기">
						</button>
					</li>
					<li class="sns-03">
						<button type="button" onclick="sns_share('kt', 'main')">
							<img src="images/layer-share-sns-03.png" alt="카카오 톡으로 공유하기">
						</button>
					</li>
					<li class="sns-04">
						<button type="button" onclick="sns_share('ks', 'main')">
							<img src="images/layer-share-sns-04.png" alt="카카오 스토리로 공유하기">
						</button>
					</li>
				</ul>
				<button type="button" class="copy _copy1">
					<img src="images/layer-share-copy.png" alt="해시태그 복사">
				</button>
			</section>
		</div>

		<!-- layer : 응모작 상세보기 -->
		<div class="layer-wrap layer-detail" id="layerDetail">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">응모작 상세보기 레이어 팝업 닫기</span>
				</button>
				<h1 class="for-a11y">
					응모작 상세보기
				</h1>
				<div class="card">
					<p class="name">박규리 님</p>
					<p class="node">
						<span class="for-a11y">[수]</span>퍼보습 하다라보하다라보
					</p>
					<p class="node">
						<span class="for-a11y">[퍼]</span>펙트한 얼굴을 위해
					</p>
					<p class="node">
						<span class="for-a11y">[보]</span>습빵빵 하다라보
					</p>
					<p class="node">
						<span class="for-a11y">[습]</span>관적으로 발라주자!
					</p>
					<!-- <button type="button" class="like is-active"> -->
					<button type="button" class="like">
						<span class="for-a11y">좋아요 취소하기</span>
					</button>
				</div>
				<button type="button" class="prev">
					<span class="for-a11y">이전</span>
				</button>
				<button type="button" class="next">
					<span class="for-a11y">다음</span>
				</button>
				<p class="text">
					<img src="images/layer-detail-text.png" alt="하다라보 수퍼보습 공유하기" class="popup-image">
				</p>
				<ul class="sns">
					<li class="sns-01">
						<button type="button" onclick="sns_share('fb', 'main')">
							<img src="images/layer-share-sns-01.png" alt="페이스북으로 공유하기">
						</button>
					</li>
					<li class="sns-02">
						<button type="button" onclick="sns_share('tw', 'main')">
							<img src="images/layer-share-sns-02.png" alt="트위터로 공유하기">
						</button>
					</li>
					<li class="sns-03">
						<button type="button" onclick="sns_share('kt', 'main')">
							<img src="images/layer-share-sns-03.png" alt="카카오 톡으로 공유하기">
						</button>
					</li>
					<li class="sns-04">
						<button type="button" onclick="sns_share('ks', 'main')">
							<img src="images/layer-share-sns-04.png" alt="카카오 스토리로 공유하기">
						</button>
					</li>
				</ul>
				<p class="hash">
					#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #속보습부스터 #건성피부 #고보습 #수퍼보습 #스킨케어 #스킨 #모찌피부 #이벤트 #스킨로션추천 #고보습스킨
				</p>
				<button type="button" class="copy _copy2">
					<img src="images/layer-share-copy.png" alt="해시태그 복사">
				</button>
			</section>
		</div>
		
		<!-- layer : 좋아요 클릭 (참여유도) -->
		<div class="layer-wrap layer-lead" id="layerLead">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">참여유도 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-lead-title.png" alt="4행시 도전하고  수퍼보습 5Days Kit 100% 겟!">
				</h1>
				<div class="btn-wrap">
					<a href="event.php">
						<button type="button" class="">
							<img src="images/layer-lead-btn-01.png" alt="4행시 도전">
						</button>
					</a>
					<button type="button" class="js-layer-close">
						<img src="images/layer-lead-btn-02.png" alt="되돌아가기">
					</button>
				</div>
			</section>
		</div>
		
		<!-- layer : 응모하기 -->
		<div class="layer-wrap layer-entry" id="layerEntry" data-layer-options="documentClose: false;">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">이벤트 참여하기 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-entry-title.png" alt="참여에 감사드립니다!" class="popup-image">
				</h1>
				<p class="text">
					<img src="images/layer-entry-text.png" alt="" class="popup-image">
					<span class="for-a11y">
						[수퍼보습 5days KIT] 통해 더 깊어진 하다라보 고쿠쥰의 힘을 느껴보세요!
					</span>
				</p>
				<dl class="form">
					<dt>
						<label for="layerEntryName">
							<img src="images/layer-entry-name.png" alt="이 름">
						</label>
					</dt>
					<dd>
						<!-- <input type="text" id="layerEntryName"> -->
						<input type="text" id="mb_name">
					</dd>
					<dt>
						<label for="layerEntryTel">
							<img src="images/layer-entry-tel.png" alt="연락처">
						</label>
					</dt>
					<dd>
						<!-- <input type="tel" id="layerEntryTel"> -->
						<input type="tel" id="mb_phone" onkeyup="only_num(this);chk_len(this,11)" placeholder="'-'없이 적어주세요">
					</dd>
					<dt>
						<label for="layerEntryAddress">
							<img src="images/layer-entry-address.png" alt="주소">
						</label>
					</dt>
					<dd>
						<!-- <input type="text" id="layerEntryAddress" class="address-01" title="주소1"> -->
						<input type="text" id="mb_addr1" class="address-01" title="주소1">
						<button type="button" class="search">
							<img src="images/layer-entry-search.png" alt="우편번호 검색">
						</button>
						<!-- <input type="text" class="address-02" title="나머지 주소"> -->
						<input type="text" id="mb_addr2" class="address-02" title="나머지 주소">
					</dd>
				</dl>
				<div class="agree">
					<input type="checkbox" id="layerEntryAgree">
					<label for="layerEntryAgree">
						<img src="images/layer-entry-agree.png" alt="개인 정보 수집/이용 및 취급 위탁 동의">
					</label>
					<a href="#layerClause" class="clause" data-layer="#layerClause" data-layer-options="allClose: false; append: false;">
						<img src="images/layer-entry-clause.png" alt="약관보기">
					</a>
				</div>
				<button type="button" class="submit">
					<img src="images/layer-entry-submit.png" alt="확인">
				</button>
				<p class="notice">
					<img src="images/layer-entry-notice.png" alt="" class="popup-image">
					<span class="for-a11y">
						[이벤트 유의사항]<br>
						- 샘플은 참여 시 최초 1회만 제공되며, 참여자에 한해 주 1회 발송 됩니다<br>
						- 해당 이벤트는 경품 소진시 조기 종료 될 수 있습니다
					</span>
				</p>
			</section>
		</div>

		<!-- layer : 약관 -->
		<div class="layer-wrap layer-clause" id="layerClause">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">약관 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-clause-title.png" alt="개인 정보 수집/이용 및 취급 위탁 약관" class="popup-image">
				</h1>
				<h2 class="sub-title">
					<img src="images/layer-clause-sub-title-01.png" alt="개인 정보 수집 및 이용약관" class="popup-image">
				</h2>
				<div class="clause">
					한국멘소래담(주)(이하 "당사"라 한다)는 본 이벤트를 위하여 귀하의 개인정보를 수집 및 이용합니다.<br><br>

					• 수집항목 : 이름, 휴대폰번호, 주소<br>
					• 이용목적 : 이벤트 진행을 위한 본인 확인, 당첨자 선정 및 경품 제공,<br>
					정보 공지 및 불만 처리 등을 위한 연락처 확보, 이벤트 참여 내용 노출<br>
					• 보유기간 : 이벤트 종료 후 6개월 이내 파기
				</div>
				<h2 class="sub-title">
					<img src="images/layer-clause-sub-title-02.png" alt="개인 정보 취급 위탁 약관" class="popup-image">
				</h2>
				<div class="clause">
					당사는 원활한 행사 진행을 위하여 아래의 전문 업체에 업무를 위탁 처리하고 있습니다.<br><br>

					• 수탁자 : TBWA<br>
					• 위탁하는 업무의 내용 : 이벤트 당첨자 확인, 경품 발송, MMS 발송
				</div>
				<button type="button" class="agree close-agree-button" onclick="agreeCheck()">
					<img src="images/layer-clause-agree.png" alt="동의합니다">
				</button>
			</section>
		</div>

		<!-- layer : 참여완료 -->
		<div class="layer-wrap layer-complete" id="layerComplete">
			<section class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close" onclick="location.href='./index.php'">
					<span class="for-a11y">참여완료 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-complete-title.png" alt="신청이 완료되었습니다! 5dayz KIT는 매주 월요일 순차적으로 발송됩니다" class="popup-image">
				</h1>
				<div class="btn-wrap">
					<button type="button" class="btn-ok" onclick="location.href='./index.php'">
						<img src="images/layer-complete-btn-01.png" alt="확인">
					</button>
					<button type="button" class="btn-sale" onclick="location.href='https://smartstore.naver.com/cosnique/products/264931382'" target="_blank">
						<img src="images/layer-complete-btn-02.png" alt="고쿠쥰 로션 만나보기">
					</button>
				</div>
			</section>
		</div>
		
		<!-- layer : 좋아요 참여 팝업 -->
		<div class="layer-wrap layer-like" id="layerLike">
			<section class="layer layer--medium">
				<!--				<button type="button" class="layer-close" onclick="location.href='./index.php'">-->
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">좋아요참여 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-like-title.png" alt="" class="popup-image">
				</h1>
				<div class="product-image">
					<img src="./images/layer-like-product.png" alt="">
				</div>
				<div class="btn-wrap">
					<!--					<button type="button" class="btn-ok" onclick="location.href='./index.php'">-->
					<button type="button" class="btn-ok">
						<img src="images/layer-like-btn-01.png" alt="확인">
					</button>
					<button type="button" class="btn-sale js-layer-close">
						<img src="images/layer-like-btn-02.png" alt="55%할인 효과 고쿠쥰 로션&밀크 특별 할인 구매">
					</button>
				</div>
			</section>
		</div>

		<!-- layer : 이벤트 진행 팝업 -->
		<div class="layer-wrap layer-continue" id="layerContinue">
			<section class="layer layer--medium">
				<!--				<button type="button" class="layer-close" onclick="location.href='./index.php'">-->
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">이벤트진행 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-continue-title.png" alt="" class="popup-image">
				</h1>
				<!-- <div class="product-image">
					<img src="./images/layer-like-product.png" alt="">
				</div> -->
				<div class="btn-wrap">
					<!--					<button type="button" class="btn-ok" onclick="location.href='./index.php'">-->
					<button type="button" class="btn-ok">
						<img src="images/layer-continue-btn.png" alt="확인">
					</button>
					<div class="line"></div>
					<button type="button" class="btn-winner">
						<img src="images/layer-continue-btn-02.png" alt="확인">
					</button>
					<!-- <button type="button" class="btn-sale js-layer-close">
						<img src="images/layer-like-btn-02.png" alt="55%할인 효과 고쿠쥰 로션&밀크 특별 할인 구매">
					</button> -->
				</div>
			</section>
		</div>

		<!-- layer : 당첨자 팝업 -->
		<div class="layer-wrap layer-winner" id="layerWinner">
			<section class="layer layer--medium">
				<!--				<button type="button" class="layer-close" onclick="location.href='./index.php'">-->
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">당첨자 레이어 팝업 닫기</span>
				</button>
				<div class="list-area">
					<div class="block _1st">
						<div class="list">
							<div class="inner">
								<span>김*미 (010-****-9095)</span>
								<span>김*준 (010-****-6327)</span>
								<span>방*영 (010-****-2306)</span>
								<span>오*비 (010-****-2054)</span>
								<span>이*예 (010-****-6790)</span>
								<span>이*희 (010-****-1997)</span>
								<span>정*영 (010-****-5121)</span>
								<span>조*주 (010-****-6838)</span>
								<span>조*주 (010-****-8086)</span>
								<span>황*정 (010-****-3140)</span>
							</div>
						</div>
					</div>
					<div class="block _2nd">
						<div class="list">
							<div class="inner">
								<span>김*정 (010-****-6884)</span>
								<span>김*지 (010-****-8329)</span>
								<span>김*진 (010-****-4250)</span>
								<span>김*현 (010-****-8311)</span>
								<span>김*현 (010-****-4740)</span>
								<span>김*혜 (010-****-2127)</span>
								<span>김*환 (010-****-4117)</span>
								<span>김*희 (010-****-7159)</span>
								<span>노*기 (010-****-1662)</span>
								<span>박*경 (010-****-4770)</span>
								<span>박*린 (010-****-7933)</span>
								<span>박*미 (010-****-8796)</span>
								<span>박*비 (010-****-3408)</span>
								<span>백*영 (010-****-1157)</span>
								<span>송*이 (010-****-5830)</span>
								<span>신*수 (010-****-0030)</span>
								<span>신*호 (010-****-3767)</span>
								<span>오*람 (010-****-1331)</span>
								<span>원*현 (010-****-4070)</span>
								<span>이* (010-****-3929)</span>
								<span>이*만 (010-****-5478)</span>
								<span>이*민 (010-****-7024)</span>
								<span>이*실 (010-****-1062)</span>
								<span>이*옥 (010-****-5685)</span>
								<span>이*완 (010-****-4346)</span>
								<span>이*혜 (010-****-1613)</span>
								<span>임*리 (010-****-5592)</span>
								<span>임*영 (010-****-5094)</span>
								<span>전*연 (010-****-8315)</span>
								<span>전*정 (010-****-3113)</span>
								<span>전*진 (010-****-2067)</span>
								<span>정*선 (010-****-8292)</span>
								<span>정*염 (010-****-0468)</span>
								<span>정*철 (010-****-1779)</span>
								<span>정*혜 (010-****-5322)</span>
								<span>정*화 (010-****-5418)</span>
								<span>조*은 (010-****-0470)</span>
								<span>최*영 (010-****-1700)</span>
								<span>최*원 (010-****-9572)</span>
								<span>최*지 (010-****-8202)</span>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:9999;-webkit-overflow-scrolling:touch;">
			<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="width:7%;cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">
		</div>
		<script>
			Kakao.init('996645db5157a953e8db96181cbccf2d');

			var detailPopupData = new Array();
			var like_arr = new Array();
			var totalPage = <?=$total_page?>;
			localStorage.clear();
			var clipboard = new ClipboardJS('._copy1', {
				text: function() {
					return '#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #속보습부스터 #건성피부 #고보습 #수퍼보습 #스킨케어 #스킨 #모찌피부 #이벤트 #스킨로션추천 #고보습스킨';
				}
			});
			var clipboard2 = new ClipboardJS('._copy2', {
				text: function() {
					return '#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #속보습부스터 #건성피부 #고보습 #수퍼보습 #스킨케어 #스킨 #모찌피부 #이벤트 #스킨로션추천 #고보습스킨';
				}
			});

			clipboard.on('success', function(e) {
				console.info('Action:', e.action);
				console.info('Text:', e.text);
				console.info('Trigger:', e.trigger);

				e.clearSelection();
				alert("해시태그가 복사되었습니다");
			});
			// clipboard.on('error', function(e) {
			// 	console.error('Action:', e.action);
			// 	console.error('Trigger:', e.trigger);
			// });
			clipboard2.on('success', function(e) {
				// e.clearSelection();
				alert("해시태그가 복사되었습니다");
			});
			function pageRun(pageNum, direction) {
				var pageNum = pageNum;
				if(direction) {
					var currentPage = parseInt($('.entry-list').attr('data-current-page'));
					// var totalPage = <?=$total_page?>;
					switch(direction) {
						case "prev" :
							if(currentPage > 1) {
								pageNum = currentPage-1;
							} else {
								alert("처음 페이지입니다.");
								return;
							}
							break;
						case "next" :
							if(currentPage < totalPage) {
							   	pageNum = currentPage+1;
							} else {
								alert("마지막 페이지입니다.");
								return;
							}
							break;
					}
				}
//				게시물 스타트 * 블록갯수 (=> 가져올 게시물들 / 현재 소팅값으로 쿼리 order by)
//				$.ajax({
//					type: "POST",
//					data: {
//						"pageNum": pageNum
//					},
//					url: "./ajax_main_page.php",
//					success: function(rs) {
////						console.log(rs);
//						$('.entry-list').html(rs);
//						$('.page li').each(function() {
//							if($(this).find('a').text() == pageNum) {
//								$(this).addClass('is-active');
//							} else {
//								$(this).removeClass('is-active');
//							}
//						});
//					}
//				});
				listChange(pageNum);
			}
			$('#selectTestId').on('change', function() {
				$('#orderby').val($(this).val());
				listChange('1', $(this).val());
			});
			$(".search-submit").on('click', function() {
				listChange('1', 'submit');
			});
			$('.search-reset').on('click', function() {
				$('#search').val('');
				listChange($('.entry-list').data('current-page'));
			});
			$('.search-input').on('keyup', function(e) {
				if($(this).val().length>0) {
					$(this).siblings('.search-reset').addClass('visible');
				} else {
					$(this).siblings('.search-reset').removeClass('visible');
				}
			});
			$('.search-input').on('click', function() {
				if($(this).val().length>0)
					$('.search-reset').addClass('visible');
			})
			$('.search-input').on('blur', function() {
				$('.search-reset').removeClass('visible');
			})
			function listChange(pageNum, submit) {
				var orderBy = $('#orderby').val();
				var searchName = submit ? $("#search").val() : '';
//				모바일 현재 팝업 오픈코드 전용
				$('body').append($('#layerDetail'));
				$.ajax({
					type: "POST",
					data: {
						"pageNum": pageNum,
						"orderBy": orderBy,
						"searchName": searchName
					},
					url: "./ajax_main_page.php",
					success: function(rs) {
						var rs = rs.split("||");
//						console.log(rs[2]);
						if(!rs[0]) {
							alert("검색결과가 없습니다");
							return;
						} else {
							$('.entry-list').html(rs[0]).attr('data-current-page', pageNum);
							// <li><a href="javascript:void(0)" class="prev" onclick="pageRun('', 'prev')"><span class="for-a11y">이전</span></a></li>

							$('.page').replaceWith(rs[1]);
	//						$('.page').html(rs[1]);
	//						console.log(rs[2]);
	//						console.log(rs[3]);
							totalPage = rs[2];
							$(".entry-list").find('li').each(function(idx, el) {
								var output = localStorage.getItem("like_idx");
								if (output)
								{
									var getLikeArr  = JSON.parse(output);
									$.each(getLikeArr,function(index, item){
										if ($(el).find('.like').attr("id") == "like_"+item)
										{
											$(el).find('.like').addClass("is-liked");
											return false;
										}else{
											$(el).find('.like').removeClass("is-liked");
										}
									});
								}
							});
						}
					}
				});
			}
			function quatrainDataStore(el) {
				var $el = $(el);
				var $parent = $el.closest('li');
				detailPopupData.push($parent.find('p.name.first').text()); 
				// detailPopupData.push($parent.find('button').attr("onclick")); 
				detailPopupData.push($el.attr('data-id')); 
				$parent.find('p.node.first').each(function(idx, el) {
					detailPopupData.push($(el).html());
				});
			}
			function likeOn(flag, idx)
			{
				// var $el = $(el);
				// var gubun = "";
				// if (flag == "popup")
				// 	gubun = "pop";

				// if ($("#like_"+gubun+idx).hasClass("is-active"))
				if ($("#like_"+idx).hasClass("is-liked"))
					var plusMinus	= "-";
				else
					var plusMinus	= "+";

				$.ajax({
					type: "POST",
					data: {
						"exec": "like_member",
						"mb_idx": idx,
						"plusMinus": plusMinus
					},
					url: "../main_exec.php",
					success: function(rs) {
						if (rs == "Y")
						{
							if ($("#like_"+idx).hasClass("is-liked")) {
								$("#like_"+idx).removeClass("is-liked");
								$("#like_pop_"+idx).removeClass("is-liked");
								var getLikeArr  = JSON.parse(localStorage.getItem('like_idx'));
								$.each(getLikeArr,function(index, item){
									if (idx == item)
									{
										getLikeArr.pop(item);
										localStorage.setItem("like_idx", JSON.stringify(getLikeArr));
										return;
									}
								});
							}else{
								$("#like_"+idx).addClass("is-liked");
								$("#like_pop_"+idx).addClass("is-liked");
								like_arr.push(idx);
								localStorage.setItem("like_idx", JSON.stringify(like_arr));
								
								// 좋아요 누를시 참여팝업 나오게 수정 181102
								if($("#like_"+idx).hasClass("is-liked") || $("#like_pop_"+idx).hasClass("is-liked")) {
									hadalaboUI.layer.open($('#layerEntry'));
								}
							}
						}
					}
				});
			}
			
			var search_zipcode 	= "";
			var search_addr1 	= "";

			$(".submit").on("click", function(){
				var mb_name		= $("#mb_name").val();
				var mb_phone		= $("#mb_phone").val();
				var mb_addr2		= $("#mb_addr2").val();

				if (mb_name.trim().length < 1)
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}

				if (mb_phone.trim().length < 1)
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}

				if (search_addr1.trim().length < 1)
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}

				if (mb_addr2.trim().length < 1)
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}

				if ($("#layerEntryAgree").is(":checked") === false)
				{
					alert('개인정보 수집/이용 및 취급 위탁약관에 동의하셔야만 이벤트 참여가 가능합니다.');
					return false;
				}

				$.ajax({
					type:"POST",
					data:{
						"exec"				: "insert_member_info",
						"mb_name"			: mb_name,
						"mb_phone"			: mb_phone,
						// "mb_mail"			: mb_mail,
						"mb_zipcode"		: search_zipcode,
						"mb_addr1"			: search_addr1,
						"mb_addr2"			: mb_addr2,
						"rq_type"			: "like"
					},
					url: "../main_exec.php",
					success: function(response){
						if (response == "Y")
						{
							//							alert("신청이 완료되었습니다. 매주 월요일에 순차적으로 발송됩니다.");
							//							location.href = "index.php";
							hadalaboUI.layer.close($('#layerEntry'));
							hadalaboUI.layer.open($('#layerComplete'));
						}else if (response == "D"){
							alert("이미 참여해주셨습니다! 샘플은 1인당 1회에 한합니다.");
							//							location.href = "index.php";
							hadalaboUI.layer.close($('#layerEntry'));
						}else{
							alert("사용자가 많아 참여가 지연되고 있습니다. 다시 참여 부탁드립니다.");
							location.reload();
						}
						// 정보입력 인풋값 초기화
						$('#layerEntry #mb_name').val('');
						$('#layerEntry #mb_phone').val('');
						$('#layerEntry #mb_addr1').val('');
						$('#layerEntry #mb_addr2').val('');
						$('#layerEntry #layerEntryAgree').prop('checked', false);
					}
				});
			});

			$('#layerComplete .btn-ok').on('click', function() {
				hadalaboUI.layer.close($('#layerComplete'));
			});
			$('#layerLike .btn-ok').on('click', function() {
				hadalaboUI.layer.close($('#layerLike'));
				$('html, body').animate({
					scrollTop: $('.main-section--04').offset().top
				}, 1300);
			});
			$('#layerContinue .btn-ok').on('click', function() {
				hadalaboUI.layer.close($('#layerContinue'));
				$('html, body').animate({
					scrollTop: $('.main-section--04').offset().top
				}, 1300);
			});
			$('#layerContinue .btn-winner').on('click', function() {
				hadalaboUI.layer.close($('#layerContinue'));
				hadalaboUI.layer.open($('#layerWinner'));
				
			});

			$(".search").on("click", function(){
				new daum.Postcode({
					oncomplete: function(data) {
						// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

						// 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
						// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
						var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
						var extraRoadAddr = ''; // 도로명 조합형 주소 변수

						// 법정동명이 있을 경우 추가한다. (법정리는 제외)
						// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
						if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
							extraRoadAddr += data.bname;
						}
						// 건물명이 있고, 공동주택일 경우 추가한다.
						if(data.buildingName !== '' && data.apartment === 'Y'){
							extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
						}
						// 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
						if(extraRoadAddr !== ''){
							extraRoadAddr = ' (' + extraRoadAddr + ')';
						}
						// 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
						if(fullRoadAddr !== ''){
							fullRoadAddr += extraRoadAddr;
						}

						// 우편번호와 주소 정보를 해당 필드에 넣는다.
						// document.getElementById('mb_zipcode').value = data.zonecode; //5자리 새우편번호 사용
						document.getElementById('mb_addr1').value 	= "(" + data.zonecode + ") " + fullRoadAddr;
						search_zipcode 	= data.zonecode;
						search_addr1 	= fullRoadAddr;
					}
				}).open();
			});

			function agreeCheck()
			{
				$("input:checkbox[id='layerEntryAgree']").prop("checked", true);
				hadalaboUI.layer.close($('#layerClause'));
			}
			$(window).on('load', function() {
				hadalaboUI.layer.open($('#layerContinue'));
			});
			function end_event()
			{
				alert("4행시 이벤트는 종료되었으며,\r참여작에 '좋아요' 투표하시면 수퍼보습 5days kit을 드립니다");
				$('html, body').animate({
					scrollTop: $('.main-section--04').offset().top
				}, 1300);
			}
		</script>
	</body>
</html>