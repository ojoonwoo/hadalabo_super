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
								지야, 이건 함부로
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								붓지 마
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								기보다 촉촉해서, 피부에
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관된다?!
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								지야, 이건 함부로
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								붓지 마
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								기보다 촉촉해서, 피부에
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관된다?!
							</p>
						</li>
						<li>
							<p class="quatrain-node">
								<span class="for-a11y">[수]</span>
								지야, 이건 함부로
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[퍼]</span>
								붓지 마
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[보]</span>
								기보다 촉촉해서, 피부에
							</p>
							<p class="quatrain-node">
								<span class="for-a11y">[습]</span>
								관된다?!
							</p>
						</li>
					</ul>
				</div>
				<p class="info">
					<img src="images/main-section-01-info.png" alt="화면을 스와이프하면 다른 응모작을 더 보실 수 있습니다" class="content-image">
				</p>
				<ul class="buttons">
					<li>
						<a href="event.php" class="btn btn--01">
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
					<li>
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
						<button type="button" class="like">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
					<li>
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
						<button type="button" class="like is-active">
							<span class="for-a11y">좋아요 취소하기</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
					<li>
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
						<button type="button" class="like">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
					<li>
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
						<button type="button" class="like">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
					<li>
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
						<button type="button" class="like">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
					<li>
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
						<button type="button" class="like">
							<span class="for-a11y">좋아요</span>
						</button>
						<a href="#layerDetail" class="more" data-layer="#layerDetail">
							<span class="for-a11y">상세보기</span>
						</a>
					</li>
				</ul>
				<ul class="form">
					<li>
						<select name="selectTestName" id="selectTestId" class="js-selectbox" data-class="ui-select">
							<option value="testVal 01">최신 등록 순</option>
							<option value="testVal 02">좋아요 많은 순</option>
						</select>
					</li>
					<li>
						<input type="text" class="search-input" id="search" placeholder="아이디로 찾기" title="아이디 검색 키워드 입력">
						<button type="button" class="search-submit">
							<span class="for-a11y">검색</span>
						</button>
					</li>
				</ul>
				<ul class="page">
					<li>
						<a href="" class="prev">
							<span class="for-a11y">이전</span>
						</a>
					</li>
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li class="is-active"><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">6</a></li>
					<li><a href="">7</a></li>
					<li><a href="">8</a></li>
					<li><a href="">9</a></li>
					<li><a href="">10</a></li>
					<li>
						<a href="" class="next">
							<span class="for-a11y">다음</span>
						</a>
					</li>
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
					<iframe src="https://www.youtube.com/embed/75YqWL73Yy0" frameborder="0"></iframe>
				</div>
				<p class="more">
					<img src="images/main-section-05-more.png" alt="하다라보 고쿠쥰 더 자세히 만나보기" class="content-image">
				</p>
				<ul class="sns">
					<li>
						<a href="">
							<img src="images/main-section-05-sns-01.png" alt="hadalabo.com">
						</a>
					</li>
					<li>
						<a href="">
							<img src="images/main-section-05-sns-02.png" alt="페이스북">
						</a>
					</li>
					<li>
						<a href="">
							<img src="images/main-section-05-sns-03.png" alt="인스타그램">
						</a>
					</li>
					<li>
						<a href="">
							<img src="images/main-section-05-sns-04.png" alt="유튜브">
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
					#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #3중히알루론산황금비율 #해낸건_또_하다라보고쿠쥰 #속까지_더_깊게_촘촘촉촉 #모찌피부
				</p>
				<ul class="sns">
					<li class="sns-01">
						<button type="button">
							<img src="images/layer-share-sns-01.png" alt="페이스북으로 공유하기">
						</button>
					</li>
					<li class="sns-02">
						<button type="button">
							<img src="images/layer-share-sns-02.png" alt="트위터로 공유하기">
						</button>
					</li>
					<li class="sns-03">
						<button type="button">
							<img src="images/layer-share-sns-03.png" alt="카카오 톡으로 공유하기">
						</button>
					</li>
					<li class="sns-04">
						<button type="button">
							<img src="images/layer-share-sns-04.png" alt="카카오 스토리로 공유하기">
						</button>
					</li>
				</ul>
				<button type="button" class="copy">
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
					<button type="button" class="like is-active">
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
						<button type="button">
							<img src="images/layer-share-sns-01.png" alt="페이스북으로 공유하기">
						</button>
					</li>
					<li class="sns-02">
						<button type="button">
							<img src="images/layer-share-sns-02.png" alt="트위터로 공유하기">
						</button>
					</li>
					<li class="sns-03">
						<button type="button">
							<img src="images/layer-share-sns-03.png" alt="카카오 톡으로 공유하기">
						</button>
					</li>
					<li class="sns-04">
						<button type="button">
							<img src="images/layer-share-sns-04.png" alt="카카오 스토리로 공유하기">
						</button>
					</li>
				</ul>
				<p class="hash">
					#하다라보 #하다라보고쿠쥰 #하다라보수퍼보습 #3중히알루론산황금비율 #해낸건_또_하다라보고쿠쥰 #속까지_더_깊게_촘촘촉촉 #모찌피부
				</p>
				<button type="button" class="copy">
					<img src="images/layer-share-copy.png" alt="해시태그 복사">
				</button>
			</section>
		</div>
	</body>
</html>