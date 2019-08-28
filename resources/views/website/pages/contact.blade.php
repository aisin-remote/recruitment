@extends('website.layouts.master')
@section('title', 'Contact')

@section('pages')
@include('website.includes.sub_header', [
	'title' => 'Kontak Kami',
	'sub_title' => 'Kami akan memberi tanggapan secepatnya',
	'breadcrumbs' => [
		[
			'url' => route('home'),
			'title' => 'Home'
		],
		[
			'url' => '#',
			'title' => 'Kontak'
		],
	]
])
<section>
	<div class="block remove-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-map">
						<iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=aisin%20indonesia%20automotive+(PT%20Aisin%20Indonesia%20Automotive)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="block">
		<div class="container">
			 <div class="row">
			 	<div class="col-lg-6 column">
			 		<div class="contact-form">
			 			<h4>Tinggalkan Pesan <br><br></h4>
			 			<form>
			 				<div class="row">
			 					<div class="col-lg-12">
			 						<span class="pf-title">Nama Lengkap</span>
			 						<div class="pf-field">
			 							<input type="text" placeholder="Nama Lengkap" />
			 						</div>
			 					</div>
			 					<div class="col-lg-12">
			 						<span class="pf-title">E-mail</span>
			 						<div class="pf-field">
			 							<input type="text" placeholder="E-mail" />
			 						</div>
			 					</div>
			 					<div class="col-lg-12">
			 						<span class="pf-title">Subjek</span>
			 						<div class="pf-field">
			 							<input type="text" placeholder="Subjek" />
			 						</div>
			 					</div>
			 					<div class="col-lg-12">
			 						<span class="pf-title">Pesan</span>
			 						<div class="pf-field">
			 							<textarea placeholder="Pesan"></textarea>
			 						</div>
			 					</div>
			 					<div class="col-lg-12">
			 						<button type="submit">Kirim</button>
			 					</div>
			 				</div>
			 			</form>
			 		</div>
			 	</div>
			 	<div class="col-lg-6 column">
				 	<div class="contact-textinfo style2">
				 		<h3>PT AISIN INDONESIA AUTOMOTIVE</h3>
				 		<ul>
				 			<li><i class="fa fa-map-marker"></i><span>Jl. Harapan VIII Lot. LL No.9-10. Kawasan KIIC Karawang. Jawa Barat, Indonesia</span>
							</li>
				 			<li><i class="fa fa-phone"></i><span>(0267) 8643131</span></li>
				 			<li><i class="la la-envelope-o"></i><span>recruitment@aiia.co.id</span></li>
				 		</ul>
				 	</div>
				</div>
			 </div>
		</div>
	</div>
</section>
@endsection