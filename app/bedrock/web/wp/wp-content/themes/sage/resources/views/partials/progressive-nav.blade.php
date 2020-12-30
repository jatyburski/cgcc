{{-- Progressively Collapsing Navigation --}}

<nav class="row no-gutters position-relative nav__container">
	<input type="checkbox" id="more" aria-hidden="true" tabindex="-1" class="invisible position-absolute" />
	
	<div class="nav__inner">
		@php $children = get_pages( 'child_of=' . $post->ID ); @endphp

		@if ( is_page() && $post->post_parent )

			@php $id = $post->post_parent; @endphp

		@else

			@php $id = get_the_ID(); @endphp
			
		@endif

		<ul class="nav">
			{{ wp_list_pages(
				array(
					'title_li'    	=> '',
					'child_of'		=> $id
				))
			}}
		</ul>

		<div class="nav__toggle">
			<label for="more" aria-hidden="true" class="nav__label">More</label>
		</div>
	</div>
</nav>