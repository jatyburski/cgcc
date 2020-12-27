<header class="container-fluid header">
	<div class="row align-items-center">
		<div class="col">
			@php dynamic_sidebar( 'header-logo' ) @endphp
		</div>

		<nav class="col-9 d-flex flex-column">
			<div class="col d-flex justify-content-end">
				@php wp_nav_menu( [ 'theme_location' => 'quick_links', 'menu_class' => 'nav' ] ) @endphp
			</div>

			<div class="col d-flex flex-row justify-content-end">
				@php
					$menus = array(
						'blood_disorders',
						'cancer_diagnoses',
						'becoming_a_patient',
						'for_patients',
						'about_cgcc',
					);
				@endphp

				@foreach ( $menus as $menu )
					<div class="col p-0">
						{{ wp_nav_menu( [ 'theme_location' => $menu, 'menu_class' => 'nav' ] ) }}
					</div>
				@endforeach
			</div>
		</nav>
	</div>
</header>