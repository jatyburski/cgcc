@if ( have_rows('section') )

	@while ( have_rows('section') )

		@php 
			the_row();
			layout_get_component( get_row_layout('partials') );
		@endphp
		
	@endwhile

@endif