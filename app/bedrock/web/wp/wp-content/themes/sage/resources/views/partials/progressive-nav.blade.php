{{-- Progressively Collapsing Navigation --}}

<nav class="row no-gutters bg-white position-relative nav__container">
	<input type="checkbox" id="more" aria-hidden="true" tabindex="-1" class="invisible position-absolute" />
	
	<div class="d-flex nav__inner">
		@php $children = get_pages( 'child_of=' . $post->ID ); @endphp

		@if ( is_page() && $post->post_parent )

			@php $id = $post->post_parent; @endphp

		@else

			@php $id = get_the_ID(); @endphp
			
		@endif

		<ul class="bg-white border-right-0 border-top-0 flex-wrap nav m-0 p-0">
			{{ wp_list_pages(
				array(
					'title_li'    	=> '',
					'child_of'		=> $id
				))
			}}
		</ul>

		<div class="d-block position-relative nav__toggle">
			<label for="more" aria-hidden="true" class="nav__label">More</label>
		</div>
	</div>
</nav>