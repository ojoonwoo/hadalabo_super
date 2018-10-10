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
							<input type="text" id="quatrain01" class="quatrain-input quatrain-check" title="4행시 중 [수]에 대한 내용">
							<label for="quatrain01">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-02">
							<span class="for-a11y">[퍼]</span>
							<input type="text" id="quatrain02" class="quatrain-input quatrain-check" title="4행시 중 [퍼]에 대한 내용">
							<label for="quatrain02">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-03">
							<span class="for-a11y">[보]</span>
							<input type="text" id="quatrain03" class="quatrain-input quatrain-check" title="4행시 중 [보]에 대한 내용">
							<label for="quatrain03">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-04">
							<span class="for-a11y">[습]</span>
							<input type="text" id="quatrain04" class="quatrain-input quatrain-check" title="4행시 중 [습]에 대한 내용">
							<label for="quatrain04">13자 이내로 입력해주세요</label>
						</li>
						<li class="form-05">
							<span class="for-a11y">by</span>
							<input type="text" id="quatrain_name" class="quatrain-check" title="작성자 이름">
							<label for="quatrain_name">작성자 이름</label>
						</li>
					</ul>
					<ul class="sns">
						<li class="sns-01">
							<button type="button" onclick="sns_share('fb', 'event')">
								<img src="images/event-section-01-sns-01.png" alt="페이스북으로 공유하기">
							</button>
						</li>
						<li class="sns-02">
							<button type="button" onclick="sns_share('tw', 'event')">
								<img src="images/event-section-01-sns-02.png" alt="트위터로 공유하기">
							</button>
						</li>
						<li class="sns-03">
							<button type="button" onclick="sns_share('kt', 'event')">
								<img src="images/event-section-01-sns-03.png" alt="카카오 톡으로 공유하기">
							</button>
						</li>
						<li class="sns-04">
							<button type="button" onclick="sns_share('ks', 'event')">
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
						<input type="text" id="mb_addr1" class="address-01" title="주소1" readonly>
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
					한국 멘소래담(주)(이하 "당사"라 한다)는 본 이벤트를 위하여 귀하의 개인정보를 수집 및 이용합니다.<br><br>

					• 수집항목 : 이름, 휴대폰번호, 주소<br>
					• 이용목적 : 이벤트 진행을 위한 본인 확인, 당첨자 선정 및 경품 제공,<br>
					정보 공지 및 불만 처리 등을 위한 연락처 확보, 이벤트 참여 내용 노출<br>
					• 보유기간 : 이벤트 종료 후 6개월 이내 파기
				</div>
				<h2 class="sub-title">
					<img src="images/layer-clause-sub-title-02.png" alt="개인 정보 취급 위탁 약관">
				</h2>
				<div class="clause">
					당사는 원활한 행사 진행을 위하여 아래의 전문 업체에 업무를 위탁 처리하고 있습니다.<br><br>

					• 수탁자 : TBWA<br>
					• 위탁하는 업무의 내용 : 이벤트 당첨자 확인, 경품 발송, MMS 발송
				</div>
				<button type="button" class="agree" onclick="agreeCheck()">
					<img src="images/layer-clause-agree.png" alt="동의합니다">
				</button>
			</div>
		</div>
		<script>
			var search_zipcode 	= "";
			var search_addr1 	= "";
			var quatrain01		= "";
			var quatrain02		= "";
			var quatrain03		= "";
			var quatrain04		= "";
			var quatrain_name	= "";
			var tabooWordArr	= new Array(
				"식약처", "파라벤", "유해성분", "유해", "성분", "회수", "리콜", "환불", "유해성분", "발암물질", "방사능", "발암성분", "유해물질"
			);

			$('.quatrain-input').on('keyup', function(e) {
				var thisInputLeng = $(this).val().length;
				if(thisInputLeng > 13) {
//					console.log($(this).val());
					$(this).val($(this).val().substring(0, 13));
					$(this).parent().next().find('.quatrain-input').focus();
				}
			});

			$(".event-submit").on("click", function(){
				var isTaboo		= false;
				var tabooWords	= [];
				quatrain01		= $("#quatrain01").val();
				quatrain02		= $("#quatrain02").val();
				quatrain03		= $("#quatrain03").val();
				quatrain04		= $("#quatrain04").val();
				quatrain_name	= $("#quatrain_name").val();

				if (quatrain01 == "" || quatrain02 == "" || quatrain03 == "" || quatrain04 == "" || quatrain_name == "")
				{
					alert("4행시 및 작성자 이름을 모두 입력해 주세요!");
					return false;
				}
				$('.quatrain-check').each(function() {
					var value = $(this).val();
					tabooWordArr.forEach(function(word) {
						if(value.indexOf(word) !== -1) {
							isTaboo = true;
							tabooWords.push(word);
						}
					});
				});
				
				if(isTaboo) {
					alert(tabooWords.toString()+ "은(는) 사용불가능한 단어입니다.");
				} else {
					hadalaboUI.layer.open($('#layerEntry'));
				}
				
			});

			$(".submit").on("click", function(){
				var mb_name		= $("#mb_name").val();
				var mb_phone		= $("#mb_phone").val();
				var mb_addr2		= $("#mb_addr2").val();

				if (mb_name == "")
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}

				if (mb_phone == "")
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}
				
				if (search_addr1 == "")
				{
					alert("이름/연락처/주소 모두 입력해주세요");
					return false;
				}
				
				if (mb_addr2 == "")
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
						"quatrain01"		: quatrain01,
						"quatrain02"		: quatrain02,
						"quatrain03"		: quatrain03,
						"quatrain04"		: quatrain04,
						"quatrain_name"		: quatrain_name
					},
					url: "./main_exec.php",
					success: function(response){
						if (response == "Y")
						{
							alert("신청이 완료되었습니다. 다음주 월요일 발송됩니다.");
							location.href = "index.php";
						}else if (response == "D"){
							alert("이미 샘플신청이 완료된 참여자입니다.");
							location.href = "index.php";
						}else{
							alert("사용자가 많아 참여가 지연되고 있습니다. 다시 참여 부탁드립니다.");
							location.reload();
						}
					}
				});
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
		</script>
	</body>
</html>