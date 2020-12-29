{{-- Call to Action --}}

<section class="row no-gutters">
	<div class="col-lg-5">
		<h2 class="position-relative text-center accent team__title">
			<span class="d-block font-weight-bold text-uppercase">{{ the_field('subtitle') }}</span>
			{{ the_field('title') }}
		</h2>

		{{ the_field('description') }}

		{{ the_field('button') }}
	</div>

	<div class="col-lg-7">
		@php $img = get_field('image'); @endphp
		{{ wp_get_attachment_image($img, 'large') }}

		<blockquote>
			{{ the_field('quote') }}
		</blockquote>
	</div>
</section>