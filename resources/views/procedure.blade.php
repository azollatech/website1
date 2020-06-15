@extends('layouts.master')

@section('title', __('貸款程序'))

@section('navbar')
	@include('partials.navbar-wrapper')
	@include('partials.sidenav')
@stop

@section('content')
	@include('partials.header-banner', ["image"=>"banner-3-darken.jpg", "title"=>"貸款程序"])
    <section class="py-5" style="background: #fafafa;">
    	<div class="container">
            <div class="mb-5">
                <div class="row">
                    <div class="d-none d-md-block col-md-3 col-lg-4">
						<ul id="vertical-sidebar">
							<li class="{{ Request::path() == 'procedure' ? 'active' : '' }}"><a href="procedure">貸款程序</a></li>
							<li><a href="#apply-now">即時申請</a></li>
						</ul>
                    </div>
                    <div class="d-block col-md-9 col-lg-8" style="font-size: 1rem;">
                        <div>
                            <h2 style="text-align: left;" data-fontsize="34" data-lineheight="50">貸款程序</h2>
                        </div>
                        <div class="separator" style="
                            margin-top: 15px;
                            margin-bottom: 35px;
                            width: 100%;
                            max-width: 170px;
                            min-height: 2px;
                            background: #dddddd;"></div>
                        <div class="mb-5">
                            <div class="procedure-set">
								<div id="procedure-1" class="procedure">
									<div class="procedure-wrapper">
										<div class="procedure-num">1</div>
										<div class="procedure-info even">
											<div class="procedure-info-wrapper">
												<div class="procedure-icon"><img src="{{url('img/procedure-1.png')}}" alt="procedure_icon_1" width="126" height="126"></div>
												<div class="procedure-content-wrapper">
													<div class="h-fix"></div><!--
												 --><div class="procedure-content">提供物業資料並透過電話、傳真、短訊、whatsapp或<br>
親臨本公司辦理申請（準備物業資料以作評估)</div>
												</div>
											</div>
										</div>
										<div class="procedure-arrow"></div>
									</div>
								</div>
																	<div id="procedure-2" class="procedure">
									<div class="procedure-wrapper">
										<div class="procedure-num">2</div>
										<div class="procedure-info odd">
											<div class="procedure-info-wrapper">
												<div class="procedure-icon"><img src="{{url('img/procedure-2.png')}}" alt="procedure_icon_2" width="126" height="126"></div>
												<div class="procedure-content-wrapper">
													<div class="h-fix"></div><!--
												 --><div class="procedure-content">進行初步審批最快只需15分鐘</div>
												</div>
											</div>
										</div>
										<div class="procedure-arrow"></div>
									</div>
								</div>
																	<div id="procedure-3" class="procedure">
									<div class="procedure-wrapper">
										<div class="procedure-num">3</div>
										<div class="procedure-info even">
											<div class="procedure-info-wrapper">
												<div class="procedure-icon"><img src="{{url('img/procedure-3.png')}}" alt="procedure_icon_3" width="126" height="126"></div>
												<div class="procedure-content-wrapper">
													<div class="h-fix"></div><!--
												 --><div class="procedure-content">通知客戶初步審批結果、利息及供款額等資料</div>
												</div>
											</div>
										</div>
										<div class="procedure-arrow"></div>
									</div>
								</div>
																	<div id="procedure-4" class="procedure">
									<div class="procedure-wrapper">
										<div class="procedure-num">4</div>
										<div class="procedure-info odd">
											<div class="procedure-info-wrapper">
												<div class="procedure-icon"><img src="{{url('img/procedure-4.png')}}" alt="procedure_icon_4" width="126" height="126"></div>
												<div class="procedure-content-wrapper">
													<div class="h-fix"></div><!--
												 --><div class="procedure-content">客戶帶同所需文件正本，親臨本公司辦理手續及簽署貸款合約</div>
												</div>
											</div>
										</div>
										<div class="procedure-arrow"></div>
									</div>
								</div>
																	<div id="procedure-5" class="procedure">
									<div class="procedure-wrapper">
										<div class="procedure-num">5</div>
										<div class="procedure-info even">
											<div class="procedure-info-wrapper">
												<div class="procedure-icon"><img src="{{url('img/procedure-5.png')}}" alt="procedure_icon_5" width="126" height="126"></div>
												<div class="procedure-content-wrapper">
													<div class="h-fix"></div><!--
												 --><div class="procedure-content">最快即日於律師事務所簽約及取款</div>
												</div>
											</div>
										</div>
										<div class="procedure-arrow"></div>
									</div>
								</div>
							</div>
						</div>

                    </div>
                </div>
    		</div>
    	</div>
    </section>

    <div class="section-separator bigtriangle" style="padding:0;margin-left:-30px;margin-right:-30px;background: #f5f5f5;">
        <svg class="fusion-big-triangle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#fafafa;padding:0;"><path d="M-1 -1 L50 99 L101 -1 Z"></path></svg>
    </div>

    <section id="apply-now" class="py-5" style="background: #f5f5f5;">
		<div class="container">
			<div class="my-5">
				<div class="text-center">
					<div>
						<h2>申請途徑</h2>
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
						<div class="col-12 col-md-4 text-center mb-5">
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
							    color: #3d405c;">貸款熱線</div>
							<div>最直接的方式，同時我們的顧問可作出專業解答及方案</div>
							<a href="tel://98765432">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #D5382D;">立即致電</button>
							</a>
						</div>
						<div class="col-12 col-md-4 text-center mb-5">
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
							    color: #3d405c;">WHATSAPP</div>
							<div>無論何時何地，只要一機在手，都可以隨時作出查詢，隱密度更高。</div>
							<a href="https://api.whatsapp.com/send?phone=85298765432&text=%E6%88%91%E6%83%B3%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A">
								<button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: green;">立即WHATSAPP</button>
							</a>
						</div>
						<div class="col-12 col-md-4 text-center mb-5">
							<div class="link-area-link-icon link-type-button icon-hover-animation-slide">
								<i class="fontawesome-icon circle-yes fa fa-whatsapp" aria-hidden="true" style="
								    border: 3px solid #03a9f4;
								    background-color: #f7f7f7;
								    box-sizing: content-box;
								    height: 100px;
								    width: 100px;
								    line-height: 100px;
								    border-radius: 50%;
								    color: #03a9f4;
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
							    color: #3d405c;">客戶服務電郵</div>
							<div>相對比較簡接，但同時可將所需文件發出，節省更多時間</div>
							<a href="mailto:contact@example.com"><button class="contact-now-buttons btn btn-primary btn-block mt-3" style="background-color: #028ecf;">立即EMAIL</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('css')
	<style>
	.mortgage-pics {
		width: 253px;
	}
	@media (max-width: 991px) {
		.mortgage-pics {
			width: 200px;
			height: auto;
		}
	}
	@media (max-width: 767px) {
		.mortgage-pics {
			width: 180px;
			height: auto;
		}
	}
	@media (max-width: 575px) {
		.mortgage-pics {
			width: 120px;
			height: auto;
		}
	}

	ul#vertical-sidebar {
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 80%;
	}
	ul#vertical-sidebar > li {
		border-bottom: 1px solid #E8E8E8;
		padding: 8px 16px;
		margin: 0!important;
		width: 100%;
		transition: padding-left .3s ease;
	}
	ul#vertical-sidebar > li:hover,
	ul#vertical-sidebar > li.active {
		padding-left: 20px;
	    border-left: 2px solid #028ecf;
	}

	@include('partials.contact-animation-css')


    .procedure-set {
      margin-top: -9px;
      margin-bottom: 50px;
    }
    .procedure-set .procedure {
      margin-bottom: 9px;
    }
    .procedure-set .procedure .procedure-wrapper {
      position: relative;
      padding-top: 15px;
      padding-bottom: 11px;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-num {
      background: #a1bdca;
      width: 65px;
      height: 65px;
      position: absolute;
      top: 0;
      left: 18px;
      color: #ffffff;
      font-family: 'Open Sans';
      font-size: 48px;
      font-style: italic;
      font-weight: 700;
      line-height: 65px;
      text-align: center;
      word-wrap: break-word;
      overflow: hidden;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info {
      padding-left: 89px;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper {
      min-height: 63px;
      position: relative;
      padding-left: 75px;
      padding-right: 12px;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper .procedure-icon {
      width: 63px;
      height: 63px;
      position: absolute;
      top: 0;
      left: 0;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper .procedure-icon img {
      width: 100%;
      height: auto;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper .procedure-content-wrapper {
      padding-top: 7px;
      padding-bottom: 6px;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper .procedure-content-wrapper .h-fix {
      min-height: 50px;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info .procedure-info-wrapper .procedure-content-wrapper .procedure-content {
      min-height: 25px;
      color: #ffffff;
      font-size: 15px;
      line-height: 25px;
      word-wrap: break-word;
      display: inline-block;
      vertical-align: middle;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info.odd {
      background: #6285c4;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-info.even {
      background: #214a95;
    }
    .procedure-set .procedure .procedure-wrapper .procedure-arrow {
      background: url('img/procedure_arrow.png') no-repeat;
      width: 23px;
      height: 11px;
      position: absolute;
      left: 38px;
      bottom: 0;
    }
    .h-fix {
      width: 0px;
      height: 100%;
      display: inline-block;
      vertical-align: middle;
    }

    </style>
@stop

@section('js')
	<script>
	@include('partials.contact-animation-js')
	</script>
@stop
