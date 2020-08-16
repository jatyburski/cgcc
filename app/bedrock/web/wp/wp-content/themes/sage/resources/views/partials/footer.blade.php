<footer class="container-fluid footer">

	{{-- Logo & Locations --}}

	<section class="row footer__head">
		@php dynamic_sidebar( 'sidebar-logo-inverted' ) @endphp

		@php dynamic_sidebar( 'sidebar-location-1' ) @endphp

		@php dynamic_sidebar( 'sidebar-location-2' ) @endphp
	</section>

	{{-- Navigation --}}

	<section class="row flex-wrap footer__nav">
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
			<div class="col">
				{{ wp_nav_menu( ['theme_location' => $menu, 'menu_class' => 'nav'] ) }}
			</div>
		@endforeach

		<div class="col">
			<h4>{{ get_bloginfo( 'name', 'display' ) }}</h4>

			@php dynamic_sidebar( 'sidebar-seo' ) @endphp
		</div>
	</section>

	{{-- Colophon --}}

	<section class="row footer__colophon">
		<div class="col-6">
			<p>
				&copy;{{ date( 'Y' ) }}
				<strong>{{ get_bloginfo( 'name', 'display' ) }}</strong>.
				Design by <a href="https://compulse.com/">Compulse</a>.
			</p>
		</div>
		
		<div class="col-6 d-flex justify-content-end">
			@php dynamic_sidebar( 'sidebar-social-media' ) @endphp

			<a href="/sitemap">Sitemap</a>
		</div>
	</section>

</footer>