{{-- Content Image Right --}}

<section class="row no-gutters">
	<div class="col-12">
		<h2 class="position-relative text-center accent content__title">
			<span class="d-block font-weight-bold text-uppercase">
				{{ the_sub_field('subtitle') }}
			</span>
			{{ the_sub_field('title') }}
		</h2>
	</div>

	<div class="col-lg-6 content content--left">
		{{ the_sub_field('content') }}
	</div>

	<div class="col-lg-6 content__img content__img--right">
		@php $images = get_sub_field('gallery'); @endphp
		{{ wp_get_attachment_image($image, 'large') }}
	</div>
</section>