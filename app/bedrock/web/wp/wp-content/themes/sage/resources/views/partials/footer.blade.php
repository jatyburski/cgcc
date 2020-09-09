<footer class="container-fluid footer">

	{{-- Logo & Locations --}}

	<section class="row no-gutters footer__head">
		@php dynamic_sidebar( 'footer-logo-inverted' ) @endphp

		@php dynamic_sidebar( 'footer-location-1' ) @endphp

		@php dynamic_sidebar( 'footer-location-2' ) @endphp
	</section>

	{{-- Navigation --}}

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
			<div class="col p-0">
				{{ wp_nav_menu( [ 'theme_location' => $menu, 'menu_class' => 'nav' ] ) }}
			</div>
		@endforeach

		<div class="col p-0">
			<h4>{{ bloginfo( 'name' ) }}</h4>

			@php dynamic_sidebar( 'footer-locality' ) @endphp
		</div>
	</section>

	{{-- Colophon --}}

	<section class="row no-gutters footer__colophon">
		<div class="col-md-6">
			<p class="mb-0">
				&copy;{{ date( 'Y' ) }}
				<strong>{{ bloginfo( 'name' ) }}</strong>.
				Design by <a href="https://compulse.com/">Compulse</a>.
			</p>
		</div>
		
		<div class="col-md-6 d-flex justify-content-end">
			@php dynamic_sidebar( 'footer-social-media' ) @endphp

			<a href="/sitemap">Sitemap</a>
		</div>
	</section>

</footer>