@extends('website.layouts.master')
@section('title', 'Beranda')

@push('additional_css')
<link rel="stylesheet" type="text/css" href="{{ asset('website/css/slick.css') }}">
@endpush

@section('pages')
<section>
	<div class="block no-padding">
		<div class="container fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-featured-sec">
						<div class="new-slide-3 primary-bg-image">
							<div class="overlay-bg"></div>
							{{-- <img src="{{ asset('website/images/prabowo1.png') }}" alt="" style="width: 400px" /> --}}
						</div>
						<div class="job-search-sec">
							<div class="job-search">
								<h3>{{ AIIASetting::getValue('home_header_title') }}</h3>
								<span>{{ AIIASetting::getValue('home_header_sub_title') }}</span>
							</div>
						</div>
						<div class="scroll-to">
							<a href="#section-about" title=""><i class="la la-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <section id="section-job-list">
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading">
						<h2>Lowongan Tersedia</h2>
						<span>Cari posisi yang sesuai dengan kualifikasi anda.</span>
					</div><!-- Heading -->
					<div class="job-listings-sec">
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">Web Designer / Developer</a></h3>
								<span>Massimo Artemisis</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">Marketing Director</a></h3>
								<span>Tix Dog</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
								<span>StarHealth</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">Application Developer For Android</a></h3>
								<span>Altes Bank</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">Regional Sales Manager South east Asia</a></h3>
								<span>Vincent</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
						<div class="job-listing">
							<div class="job-title-sec">
								<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
								<h3><a href="#" title="">Social Media and Public Relation Executive </a></h3>
								<span>MediaLab</span>
							</div>
							<a href="#"><span class="job-is fl">APPLY</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="browse-all-cat">
						<a href="#" title="">Tampilkan Lebih Banyak</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<section id="section-about">
	<div class="block">
		<div class="container">
			 <div class="row">
			 	<div class="col-lg-12">
			 		<div class="about-us">
			 			<div class="row">
			 				<div class="col-lg-12">
			 					<h4>{{ $about ? $about->title : '' }}<br><br></h4>
			 				</div>
			 				<div class="col-lg-7">
			 					{!! $about ? $about->content : '' !!}
			 				</div>
			 				<div class="col-lg-5">
			 					<div class="slick-img">
			 						@if($about)
			 						@foreach($about->images as $image)
								  	<div><img src="{{ asset('storage/pages/' . $image) }}" alt="{{ $about->title }}" /></div>
								  	@endforeach
								  	@endif
								</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		</div>
	</div>
</section>
<section>
	<div class="block no-padding">
		<div class="container fluid">
			<div class="row">
				<div class="col-lg-12">
					<a href="{{ route('job-vacancies.index') }}">
						<div class="simple-text">
							<h3>Lowongan Kerja</h3>
							<span>Saat ini kami sedang membuka lowongan untuk beberapa posisi</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('additional_js')
<script type="text/javascript" src="{{ asset('website/js/slick.min.js') }}"></script>
<script type="text/javascript">
	$(function() {
		$('.slick-img').slick({
		  	dots: false,
		  	infinite: true,
		  	speed: 500,
		  	fade: true,
		  	cssEase: 'linear'
		});

		@if(session()->has('need_login'))
		$('.signin-popup-box').fadeIn('fast');
		@endif

		@if(session()->has('reset_password'))
		{{-- Form Change Password terdapat di layout master --}}
		$('#modal-change-password-reset').fadeIn('fast');
		@endif
	});
</script>
@endpush