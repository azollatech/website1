@extends('layouts.master')

@section('title', __('Contact Us'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-5-darken.jpg", "title"=>"債務舒緩"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">債務舒緩</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-4">
                            <p><h5 style="color: #3d405c;">IVA 個人自願安排 (INDIVIDUAL VOLUNTARY ARRANGEMENT)</h5></p>

                            <p>根據《破產條例》第6章第20條， 債務人須經由會計師及律師向其所有債權人提出償還解決債項的建議書，要經過法庭聆訊及頒佈臨時命令，並獲佔債務未償還總額75%以上債權人同意並可通過其建議書，確保債務人的資產可獲妥善分派給債權人。</p>
							<p>IVA需透過專業執照人（例如會計師，律師，註冊會計師），憑著豐富的債務處理經驗，為債務人的個人及債務狀況重新整理其債項後，為客戶制定合適閣下的還款計劃書，向法庭及債權人提出新的還款方案，並召開債權人會議為該方案進行協商。達成新還款協議後，經法庭頒令， 讓債務人按照新的還款方案將其債項完全清還。</p>
                        </div>

                        <div class="mb-5">
                            <p style="font-weight: 700;">債務重組VS破產，兩者哪個服務比較好？債務重組和破產的分別是什麼？對於債務重組和破產抱有種種疑問的您，我們為您準備了以下資料，令您一眼洞穿兩者的分別！</p>
                        </div>

                        <div class="mb-2">&nbsp;</div>

						<div class="mb-4">
							<h5 class="mb-5" style="font-size: 1.6rem;">IVA與破產比較表</h5>
							<div class="row">
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;"><b>IVA《個人自願安排》</b></div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">《個人破產》</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">需要有穩定的職業及收入</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">沒有穩定收入及欠缺還款能力</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">提供現時的資產及負債狀況</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">法庭需要合理交代近年之資產轉移</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可能需要解釋有關新借貸之原因</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可能需要對半年內之新借貸負上法律責任</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">沒有破產身份</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">有破產身份</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">不會知會僱主，現職不會受到影響</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">如屬敏感性行業 (如: 紀律部隊或金融業)，需要知會僱主，現職不一定得到保留</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">每月供還定額款項，入息餘額可自由運用</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">入息扣除基本生活費後，餘額由破產官安排還債</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">代名人處理還款事宜</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">破產官監察日常生活</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可出任管理階層</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">不可出任管理階層</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可繼續經營生意</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">不可經營生意</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可以保留現有的專業牌照</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">多項專業牌照(如:會計師或律師牌)不能保留</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">多數申請人可保留現有物業</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">物業將交由破產管理處變賣</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可保留及申請銀行賬戶</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">只能開立一個新銀行賬戶以作出糧之用</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可繼續保險供款</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">需停止保險供款</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">避免再作借貸, 而一般銀行或財務機構均不會接納其貸款申請</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">根據法例，如借貸一百元以上，須申報其破產身份</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">享有出入境自由</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">離境受到限制，需向破產官交代行程並得到同意</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">可自費旅遊</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">不可自費旅遊</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">一般為期三年至七年，視乎欠債及還款額</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">一般為期四年，可延長為八年，視乎破產期間紀律</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">代名人會每年檢視債務人之收入與財務狀況, 然後向債權人報告</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">每年需由自己填寫一份詳細的收支說明書予破產官</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">沒有破產記錄，信貸評級影響較少</div>
								<div class="col-6 pb-4 mb-4" style="border-bottom: 1px solid #ccc;">永久保留破產記錄，嚴重影響信貸評級</div>
							</div>
                        </div>

						<div class="mb-2">&nbsp;</div>

						<h5 class="mb-4" style="font-size: 1.6rem;">DRP債務舒緩計劃</h5>
						<p>是債務重組當中之一方案，這是個人自願安排（IVA）的簡化版，因為它與 IVA 的最大分別在於債務舒緩不需要透過法律程序來安排，也可以與個別的債權人直接商談還款協議，使欠債人避免進行破產及法律程序也能解決債務問題</p>

						<h5 class="mb-3" style="text-decoration: underline;">DRP債務舒緩計劃好處</h5>
						<ul>
							<li class="mb-2"><b>避免破產 - </b>申請人可以避免破產及不需要透過法律程序。</li>
							<li class="mb-2"><b>減低利息 - </b>減少大部份利息開支，從而減低每月供款金額。</li>
							<li class="mb-2"><b>可保留部份信用卡 - </b>DRP獨立向個別債權人商討還款協議，可重組部份債項。</li>
							<li class="mb-2"><b>現職不受影響 - </b>不需要通知僱主，適合所有人士包括敏感行業。</li>
						</ul>

                    </div>
                    <div class="col-2">
                    </div>
                </div>
    		</div>
    	</div>
    </section>
	<section class="py-5" style="background: #fafafa;">
		<div class="container">
			<div class="mb-5">
				<div class="text-center">
					<div class="fusion-text">
						<h2 data-fontsize="34" data-lineheight="50">了解更多</h2>
					</div>
					<div class="separator" style="
						margin: auto;
						margin-top: 15px;
						margin-bottom: 35px;
						width: 100%;
						max-width: 170px;
						min-height: 2px;
						background: #dddddd;"></div>

					<div class="row">
						<div class="col-12 col-md-6 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-mobile" aria-hidden="true" style="
								    border: 3px solid #f44336;
								    background-color: #f7f7f7;
								    box-sizing: content-box;
								    height: 100px;
								    width: 100px;
								    line-height: 100px;
								    border-radius: 50%;
								    color: #f44336;
								    font-size: 80px;"></i>
							</div>
							<div style="
							    font-size: 26px;
							    line-height: 31px;
								font-weight: 700;
							    line-height: 50px;
							    letter-spacing: 0px;
							    font-style: normal;
								margin-top: 4px;
							    color: #3d405c;">一鍵電話查詢</div>
							<a href="tel://98765432">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #D5382D;">立即致電</button>
							</a>
						</div>
						<div class="col-12 col-md-6 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-whatsapp" aria-hidden="true" style="
								    border: 3px solid #8bc34a;
								    background-color: #f7f7f7;
								    box-sizing: content-box;
								    height: 100px;
								    width: 100px;
								    line-height: 100px;
								    border-radius: 50%;
								    color: #8bc34a;
								    font-size: 50px;"></i>
							</div>
							<div style="
							    font-size: 26px;
							    line-height: 31px;
								font-weight: 700;
							    line-height: 50px;
							    letter-spacing: 0px;
							    font-style: normal;
								margin-top: 4px;
							    color: #3d405c;">一鍵WHATSAPP查詢</div>
							<a href="https://api.whatsapp.com/send?phone=85298765432&text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: green;">立即WHATSAPP</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('css')
    <style>
    </style>
@stop

@section('js')
	<script>
	$( document ).ready(function() {

	});
	</script>
@stop
