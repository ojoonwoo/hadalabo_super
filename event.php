<?
	include_once "head.php";
?>
	<body>
		<div class="wrap">
			<div class="event-section event-section--01">
				<div class="event-section__contents">
					<h1 class="title">
						<img src="images/event-section-01-title.png" alt="하다라보 고쿠쥰 4행시 이벤트 내가 쓰는 수퍼보습">
					</h1>
					<p class="text">
						<img src="images/event-section-01-text.png" alt="">
						<span class="for-a11y">
							3중 히알루론산 황금비율로 더 깊어진 보습이라니, 수퍼~보습 내가 쓰는 4행시가 하다라보 광고가 된다니, 수퍼~서프라이즈 지금 ‘수퍼보습’으로 4행시에 도전하세요. 참여만 해도 [수퍼보습 5days KIT] 100% 겟!
						</span>
					</p>
					<ul class="form">
						<li class="form-01">
							<span class="for-a11y">[수]</span>
							<input type="text" id="quatrain01" class="quatrain-input" title="4행시 중 [수]에 대한 내용">
							<label for="quatrain01">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-02">
							<span class="for-a11y">[퍼]</span>
							<input type="text" id="quatrain02" class="quatrain-input" title="4행시 중 [퍼]에 대한 내용">
							<label for="quatrain02">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-03">
							<span class="for-a11y">[보]</span>
							<input type="text" id="quatrain03" class="quatrain-input" title="4행시 중 [보]에 대한 내용">
							<label for="quatrain03">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-04">
							<span class="for-a11y">[습]</span>
							<input type="text" id="quatrain04" class="quatrain-input" title="4행시 중 [습]에 대한 내용">
							<label for="quatrain04">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-05">
							<span class="for-a11y">by</span>
							<input type="text" id="quatrain_name" title="작성자 이름">
							<label for="name">작성자 이름</label>
						</li>
					</ul>
					<ul class="sns">
						<li class="sns-01">
							<button type="button">
								<img src="images/event-section-01-sns-01.png" alt="페이스북으로 공유하기">
							</button>
						</li>
						<li class="sns-02">
							<button type="button">
								<img src="images/event-section-01-sns-02.png" alt="트위터로 공유하기">
							</button>
						</li>
						<li class="sns-03">
							<button type="button">
								<img src="images/event-section-01-sns-03.png" alt="카카오 톡으로 공유하기">
							</button>
						</li>
						<li class="sns-04">
							<button type="button">
								<img src="images/event-section-01-sns-04.png" alt="카카오 스토리로 공유하기">
							</button>
						</li>
					</ul>
					<!-- <button type="button" class="event-submit" onclick="hadalaboUI.layer.open($('#layerEntry'));"> -->
					<button type="button" class="event-submit"><!-- 20180930 : onclick 추가 -->
						<img src="images/event-section-01-submit.png" alt="등록하기">
					</button>
				</div>
			</div>
			<div class="footer footer--event">
				<h1 class="logo">
					<img src="images/footer-logo--event.png" alt="멘소래담">
				</h1>
				<address>
					<strong>한국맨소래담 ㈜</strong>  우)135-080 서울특별시 강남구 언주로 337. 동영문화센터 7층(역삼동)
				</address>
				<p>
					전화번호 : 02-717-1821 &nbsp;&nbsp;ㅣ&nbsp;&nbsp; 팩스번호 : 02-717-0833 &nbsp;&nbsp;ㅣ&nbsp;&nbsp; 사업자등록번호 : 102-84-03171 &nbsp;&nbsp;ㅣ&nbsp;&nbsp; 대표이사 : 신카이청마이클
				</p>
				<address class="copy">
					COPYRIGHT&copy;2016 MENTHOLATUM. ALL RIGHTS RESERVED.
				</address>
			</div>
		</div>

		<!-- 20180930 : layer 추가 -->

		<!-- layer : 응모하기 -->
		<div class="layer-wrap layer-entry" id="layerEntry">
			<div class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">이벤트 참여하기 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-entry-title.png" alt="참여에 감사드립니다!">
				</h1>
				<p class="text">
					<img src="images/layer-entry-text.png" alt="">
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
						<input type="tel" id="mb_phone">
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
					<a href="#layerClause" class="clause" data-layer="#layerClause">
						<img src="images/layer-entry-clause.png" alt="약관보기">
					</a>
				</div>
				<button type="button" class="submit">
					<img src="images/layer-entry-submit.png" alt="확인">
				</button>
				<p class="notice">
					<img src="images/layer-entry-notice.png" alt="">
					<span class="for-a11y">
						[이벤트 유의사항]<br>
						- 샘플은 참여 시 최초 1회만 제공되며, 참여자에 한해 주 1회 발송 됩니다<br>
						- 해당 이벤트는 경품 소진시 조기 종료 될 수 있습니다
					</span>
				</p>
			</div>
		</div>

		<!-- layer : 약관 -->
		<div class="layer-wrap layer-clause" id="layerClause">
			<div class="layer layer--medium">
				<button type="button" class="layer-close js-layer-close">
					<span class="for-a11y">약관 레이어 팝업 닫기</span>
				</button>
				<h1 class="title">
					<img src="images/layer-clause-title.png" alt="개인 정보 수집/이용 및 취급 위탁 약관">
				</h1>
				<h2 class="sub-title">
					<img src="images/layer-clause-sub-title-01.png" alt="개인 정보 수집 및 이용약관">
				</h2>
				<div class="clause">
					멘소래담(이하 "당사"라 한다) 본 이벤트를 위하여 귀하의 개인정보를 수집 및 이용합니다.<br><br>

					• 수집항목 : 이름, 휴대폰번호, 주소<br>
					• 이용목적 : 이벤트 진행을 위한 본인 확인, 경품 제공, 정보 공지<br>
					및 불만 처리 등을 위한 연락처 확보, 이벤트 참여 내용 노출<br>
					• 보유기간 : 이벤트 종료 후 1년 이내 파기<br><br>

					1. 귀하께서 이벤트를 통해 작성하신 내용은 해당 사이트 내에<br>
					2. 귀하께서 이벤트를 통해 작성하신 내용은 해당 사이트 내에<br>
					3. 귀하께서 이벤트를 통해 작성하신 내용은 해당 사이트 내에
				</div>
				<h2 class="sub-title">
					<img src="images/layer-clause-sub-title-02.png" alt="개인 정보 취급 위탁 약관">
				</h2>
				<div class="clause">
					당사는 원활한 행사 진행을 위하여 아래의 전문 업체에 업무를 위탁 처리하고 있습니다.<br><br>

					• 수탁자 : TBWA<br>
					• 위탁하는 업무의 내용 : 이벤트 당첨자 확인, 경품 발송, MMS 발송<br><br>

					수탁업체가 제공받은 귀하의 개인 정보는 당사의 개인 정보보호 정책에 따라 안전하게 관리됩니다.<br>
					수탁업체가 제공받은 귀하의 개인 정보는 당사의 개인 정보보호 정책에 따라 안전하게 관리됩니다.<br>
					수탁업체가 제공받은 귀하의 개인 정보는 당사의 개인 정보보호 정책에 따라 안전하게 관리됩니다.<br>
				</div>
				<button type="button" class="agree">
					<img src="images/layer-clause-agree.png" alt="동의합니다">
				</button>
			</div>
		</div>
		<script>
			$('.quatrain-input').on('keyup', function(e) {
				var thisInputLeng = $(this).val().length;
				if(thisInputLeng > 13) {
//					console.log($(this).val());
					$(this).val($(this).val().substring(0, 13));
					$(this).parent().next().find('.quatrain-input').focus();
				}
			});

			$(".event-submit").on("click", function(){
				var quatrain01		= $("#quatrain01").val();
				var quatrain02		= $("#quatrain02").val();
				var quatrain03		= $("#quatrain03").val();
				var quatrain04		= $("#quatrain04").val();
				var quatrain_name	= $("#quatrain_name").val();

				if (quatrain01 == "" || quatrain02 == "" || quatrain03 == "" || quatrain04 == "" || quatrain_name == "")
				{
					alert("4행시 및 작성자 이름을 모두 입력해 주세요!");
					return false;
				}

			});
		</script>
	</body>
</html>