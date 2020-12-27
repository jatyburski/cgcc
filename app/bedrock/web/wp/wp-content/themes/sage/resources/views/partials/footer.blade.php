<footer class="container-fluid position-relative footer">

	<img src="app/uploads/2020/12/gettyimages-1162215096-2048x2048-1.jpg" alt="" class="position-absolute h-100 w-100 footer__bg" />

	{{-- Logo & Locations --}}

	<section class="row no-gutters footer__head">
		@php dynamic_sidebar( 'footer-logo' ) @endphp
	</section>

	{{-- Navigation & About --}}

	<section class="row no-gutters flex-wrap footer__nav">
		@php
			$menus = array(
				'blood_disorders',
				'cancer_diagnoses',
				'becoming_a_patient',
				'for_patients',
				'about_cgcc',
				'quick_links'
			);
		@endphp

		@foreach ( $menus as $menu )
			<nav class="col p-0">
				{{ wp_nav_menu( [ 'theme_location' => $menu, 'menu_class' => 'nav' ] ) }}
			</nav>
		@endforeach

		@php dynamic_sidebar( 'footer-locality' ) @endphp
	</section>

	{{-- Colophon --}}

	<section class="row no-gutters footer__colophon">
		<div class="col-6">
			<p class="mb-0">
				&copy;{{ date( 'Y' ) }}
				<strong>{{ bloginfo( 'name' ) }}</strong>.
				Design by <a href="https://compulse.com/">Compulse</a>.
			</p>
		</div>
		
		<div class="col-6 d-flex align-items-center justify-content-end">
			{{ wp_nav_menu( [ 'theme_location' => 'social_media', 'menu_class' => 'nav' ] ) }}

			<p><a class="font-weight-normal" href="/sitemap">Sitemap</a></p>
		</div>
	</section>

</footer>