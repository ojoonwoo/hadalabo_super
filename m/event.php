<?
	include_once "head.php";
?>
	<body>
		<div class="wrap sub-p">
			<div class="logo-area">
				<div class="logo-wrap">
					<a href="index.php">
						<img src="./images/HADALABO_logo.png" alt="홈으로">
					</a>
				</div>
			</div>
			<section class="event-section event-section--01">
				<h1 class="title">
					<img src="images/event-section-01-title.png" alt="하다라보 고쿠쥰 4행시 이벤트 내가 쓰는 수퍼보습" class="content-image">
				</h1>
				<p class="text">
					<img src="images/event-section-01-text.png" alt="" class="content-image">
					<span class="for-a11y">
						지금 ‘수퍼보습’으로 4행시에 도전하세요.<br>
						참여만 해도 [수퍼보습 5days KIT] 100% 겟!
					</span>
				</p>
				<ul class="form">
					<li class="form-01">
						<span class="for-a11y">[수]</span>
						<input type="text" id="quatrain01" class="quatrain-input quatrain-check" title="4행시 중 [수]에 대한 내용" placeholder="13자 이내로 입력해주세요">
					</li>
					<li class="form-02">
						<span class="for-a11y">[퍼]</span>
						<input type="text" id="quatrain02" class="quatrain-input quatrain-check" title="4행시 중 [퍼]에 대한 내용" placeholder="13자 이내로 입력해주세요">
					</li>
					<li class="form-03">
						<span class="for-a11y">[보]</span>
						<input type="text" id="quatrain03" class="quatrain-input quatrain-check" title="4행시 중 [보]에 대한 내용" placeholder="13자 이내로 입력해주세요">
					</li>
					<li class="form-04">
						<span class="for-a11y">[습]</span>
						<input type="text" id="quatrain04" class="quatrain-input quatrain-check" title="4행시 중 [습]에 대한 내용" placeholder="13자 이내로 입력해주세요">
					</li>
					<li class="form-05">
						<span class="for-a11y">by</span>
						<input type="text" id="quatrain_name" class="quatrain-check" title="작성자 이름" placeholder="작성자 이름">
					</li>
				</ul>
				<!-- <button type="button" class="event-submit" onclick="hadalaboUI.layer.open($('#layerEntry'));"> -->
				<button type="button" class="event-submit">
					<img src="images/event-section-01-submit.png" alt="등록하기">
				</button>
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
		<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:9999;-webkit-overflow-scrolling:touch;">
			<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="width:7%;cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()" alt="닫기 버튼">
		</div>
		<script>
			Kakao.init('996645db5157a953e8db96181cbccf2d');
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
					url: "../main_exec.php",
					success: function(response){
						console.log(response);
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
				// sample2_execDaumPostcode();
				element_layer = document.getElementById('layer');

				new daum.Postcode({
					oncomplete: function(data) {
						// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
			
						// 각 주소의 노출 규칙에 따라 주소를 조합한다.
						// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
						var fullAddr = data.address; // 최종 주소 변수
						var extraAddr = ''; // 조합형 주소 변수
			
						// 기본 주소가 도로명 타입일때 조합한다.
						if(data.addressType === 'R'){
							//법정동명이 있을 경우 추가한다.
							if(data.bname !== ''){
								extraAddr += data.bname;
							}
							// 건물명이 있을 경우 추가한다.
							if(data.buildingName !== ''){
								extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
							}
							// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
							fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
						}
			
						zipcode	= data.zonecode;
						addr1		= fullAddr;
						// document.getElementById('mb_zipcode').value = data.zonecode; //5자리 새우편번호 사용
						// document.getElementById('mb_addr1').value = "("+zipcode+") "+addr1;
						// document.getElementById('mb_addr1').value = addr1;
						document.getElementById('mb_addr1').value 	= "(" + data.zonecode + ") " + addr1;
						// document.getElementById('mb_addr1').value 	= addr1;
						search_zipcode 	= data.zonecode;
						search_addr1 	= addr1;
			
						// iframe을 넣은 element를 안보이게 한다.
						// (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
						element_layer.style.display = 'none';
					},
					width : '100%',
					height : '100%'
				}).embed(element_layer);
			
				// iframe을 넣은 element를 보이게 한다.
				element_layer.style.display = 'block';
			
				// iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
				initLayerPosition();
			
			});

			function closeDaumPostcode() {
				// iframe을 넣은 element를 안보이게 한다.
				element_layer.style.display = 'none';
			}

			function initLayerPosition(){
				// var width = 300; //우편번호서비스가 들어갈 element의 width
				var width = $(window).width()*0.94; //우편번호서비스가 들어갈 element의 width
				var height = 360; //우편번호서비스가 들어갈 element의 height
				var borderWidth = 5; //샘플에서 사용하는 border의 두께

				// 위에서 선언한 값들을 실제 element에 넣는다.
				element_layer.style.width = width + 'px';
				element_layer.style.height = height + 'px';
				element_layer.style.border = borderWidth + 'px solid';
				// 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
				element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2) + 'px';
				element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 60 + 'px';
			}

			function agreeCheck()
			{
				$("input:checkbox[id='layerEntryAgree']").prop("checked", true);
			}
		</script>
	</body>
</html>