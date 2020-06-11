@extends('layouts.master')

@section('title', __('TU重組方案'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-1-darken.jpg", "title"=>"TU重組方案"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">TU重組方案</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-5">
							<div class="row">
								<div class="col-12 col-sm-6 col-md-8">
		                            <p><h5 style="color: #3d405c;">減低還款利息 提升TU信貸評級</h5></p>
		                            <p>重組TU供款正正係可以幫你解決信貸紀錄差嘅問題，可以令到你信貸紀錄上升 H升上C不再是難度，解決曬你所有貴息嘅供款問題</p>
								</div>
								<div class="col-12 col-sm-6 col-md-4">
									<img src="{{url('img/tugrade.png')}}" style="max-width: 100%;">
								</div>
							</div>
                        </div>

						<div class="py-5 mb-5">
							<table class="table" style="background: #EAF6FD; border-bottom: 1px solid #666;">
								<tr>
									<td colspan="2" class="text-center" style="background: rgba(0,0,0,0.04); border-top: 1px solid #666;">信用卡結欠還款計算機</td>
								</tr>
								<tr>
									<td>結欠金額</td>
									<td class="text-right float-right">
										{{-- <input class="text-right" type="text" id="outstanding-loanAmount" data-min-value="100" data-max-value="10000000" maxlength="8" autocomplete="off"></input> --}}
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">HK$</span>
											</div>
											<input type="number" id="balance" onkeydown="entera()" maxlength="11" class="form-control" aria-describedby="balanceErrMsg" autocomplete="off" aria-label="Amount (to the nearest dollar)" style="width: 120px; border-top-right-radius: .25rem; border-bottom-right-radius: .25rem;">
											<a href="javascript:calculateResult();" class="btn btn-primary ml-2">計算</a>
										</div>
										<small class="is-error" id="balanceErrMsg" style="color: red;"></small>
									</td>
								</tr>
								<tr>
									<td>月息</td>
									<td class="text-right" id="rate">3%</td>
								</tr>
								<tr>
									<td>最低還款額</td>
									<td class="text-right">剩餘結欠之5%</td>
								</tr>
								<tr style="background: rgba(0,0,0,0.04)">
									<td style="border-top: 1px solid #666;">還清結欠金額時間</td>
									<td style="border-top: 1px solid #666;" class="text-right"><span id="totalMonth">0</span>個月</td>
								</tr>
								<tr style="background: rgba(0,0,0,0.04)">
									<td>償還之總數</td>
									<td class="text-right">HK$<span id="FP">0.00</span></td>
								</tr>
							</table>
						</div>

                        <div class="mb-5">
                            <h5 class="mb-3" style="text-decoration: underline;">TU重組供款方案的好處</h5>
                            <ol>
                                <li>每月供款壓力下降 ----- 利息下降</li>
                                <li>避免破產污名</li>
                                <li>沒有破產條例般限制</li>
                                <li>毋須通知僱主及家人</li>
                                <li>過程所需時間較破產程序短</li>
                            </ol>
                        </div>

                        <div class="mb-5">
                            <h5 class="mb-3" style="text-decoration: underline;">申請過程簡單&nbsp;&nbsp;&nbsp;&nbsp;不用律師、會計師見證</h5>
                            <p>只需簡單提供入息證明、銀行自動轉帳紀錄等相關文件，我們通過合作財務公司為你一次性還清所有債務。往後的還款期和利息更有優惠提供予客戶。</p>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
    		</div>
    	</div>
    </section>

	<div class="section-separator bigtriangle" style="padding:0;margin-left:-30px;margin-right:-30px;background: #f5f5f5;">
		<svg class="fusion-big-triangle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#fafafa;padding:0;"><path d="M-1 -1 L50 99 L101 -1 Z"></path></svg>
	</div>

	<section class="py-5" style="background: #f5f5f5;">
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
	@include('partials.contact-animation-css')
    </style>
@stop

@section('js')
	<script>
	@include('partials.contact-animation-js')
	var msg1 = "請輸入信用卡結欠";
	var msg2 = "貸款額必須為HK$1至HK$1,000,000之間";
	var msg3 = "請輸入財務費用年利率";
	var msg4 = "財務費用年利率必順為數字";
	var msg5 = "財務費用年利率必須為5%至48%之間";

	function entera(){
		if (event.keyCode==13){
			calculateResult();
		}
	}

	function validCalculator(){

		var isValid = true;

		$('#balanceErrMsg').text('');
		// $('#rateErrMsg').text('');
		//removeErrmsg(document.getElementById('balance'));
		//removeErrmsg(document.getElementById('rate'));

		// var balance = $('#balance').val().trim();

		if ($('#balance').val().trim() == '') {
			isValid = false;
			$('#balanceErrMsg').text(msg1);
		}else{
			if(!$.isNumeric($('#balance').val().trim())){
				isValid = false;
				$('#balanceErrMsg').text('Outstanding Balance must be numeric');
			}else if($('#balance').val().trim() < 1 || $('#balance').val().trim() > 1000000){
				isValid = false;
				$('#balanceErrMsg').text(msg2);
			}
		}

		// if ($('#rate').val().trim() == '') {
		// 	isValid = false;
		// 	$('#rateErrMsg').text(msg3);
		// }else{
		// 	if(!$.isNumeric($('#rate').val().trim())){
		// 		isValid = false;
		// 		$('#rateErrMsg').text(msg4);
		// 	}else if($('#rate').val().trim() < 5 || $('#rate').val().trim() > 48){
		// 		isValid = false;
		// 		$('#rateErrMsg').text(msg5 );
		// 	}
		// }

		return isValid;

	}


	function CCF(a1, b1, c1) {
		return a1 * c1 * Math.pow((1 + a1), b1) / (1 - Math.pow((1 + a1), b1));
	}


	// function Calform(ccbalance, ccrate, ccmonth, ccresult) {
	// 	var minPay = 200;
	// 	var a1 = parseFloat($('#' + ccrate).val().trim() / 12 / 100);
	// 	var b1 = 36;
	// 	var c1 = parseFloat($('#' + ccbalance).val().trim());
	// 	var ccf = CCF(a1, b1, -c1);
	// 	var mp1 = (ccf > minPay) ? ccf : minPay;
	// 	$('#mp').text(Math.round((mp1)*100)/100);
	//
	// 	var fpay = 0;
	// 	var month = 0;
	// 	while (c1 > 0) {
	// 		var int = c1 * a1;
	// 		var ac1 = c1 + int;
	// 		var finalmp = (ac1 > mp1) ? mp1 : ac1;
	//
	// 		month++;
	//
	// 		fpay += finalmp;
	// 		c1 = ac1 - finalmp;
	// 	}
	// 	$('#FP2').text(Math.round((fpay)*100)/100);
	// 	if (mp1 > minPay) {
	// 		$('.result1').show();
	// 		$('.result2').show();
	// 		$('.result3').show();
	// 		$('.result4').show();
	// 		$('.result5').hide();
	// 	} else {
	// 		$('.result1').show();
	// 		$('.result2').hide();
	// 		$('.result3').hide();
	// 		$('.result4').hide();
	// 		$('.result5').show();
	// 	}
	// }
	//
	// function Cal1() {
	// 	Calform('balance', 'rate', 'mths', 'pay');
	// }
	//
	// function Cal2() {
	// 	Cal1();
	// }

	function mp() {
		// Input Value
		var purchase = parseFloat($('#balance').val().trim());
		var rate = 36;

		// Background
		var balance = purchase;
		var minPayPercentage = 1 / 100;
		// var minPay = 200;
		var monthlyRate = rate / 12 / 100;

		var tenor = 0;
		var fee = 0;
		var payment = 0;
		var principalRepaid = 0;
		var interest = 0;
		var cashFlow = 0;

		while (balance > 0) {
			tenor++;
			payment = Math.max(230, interest+(purchase - principalRepaid)*minPayPercentage);
			principalRepaid = principalRepaid + payment - interest;
			interest = balance * monthlyRate;
			payment = (balance + interest + fee) < payment ? (balance + interest + fee) : payment;
			balance = balance + interest + fee - payment;
			cashFlow += payment;
		}

		$('#totalMonth').text(tenor);
		$('#FP').text(Math.round(cashFlow*100)/100);
	}


	function calculateResult(){
		if(validCalculator()){
			mp();
		}
	}

	// function resetAll(){
	// 	$('#cal-result').hide();
	// 	$('#print-btn').hide();
	// 	$('#balance').val('');
	// 	$('#rate').val('');
	// 	$('#balanceErrMsg').text('');
	// 	$('#rateErrMsg').text('');
	// }
	</script>
@stop
