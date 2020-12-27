<section class="container-fluid">
	<div class="flex-column justify-content-center row banner" style="background: url({{ the_post_thumbnail_url() }});">
		@if (!is_front_page()) 

			{{-- Sub Pages --}}	

			{{ the_title('<h1>', '</h1>') }}

		@else

			{{-- Home Page --}}	

			{{ the_content() }}

		@endif
	</div>
</section>