{{-- Content Image Left --}}

<section class="row no-gutters">
	<div class="col-12">
		<h2 class="position-relative text-center accent content__title">
			<span class="d-block font-weight-bold text-uppercase">
				{{ the_sub_field('subtitle') }}
			</span>
			{{ the_sub_field('title') }}
		</h2>
	</div>

	<div class="col-lg-6 content__img content__img--left">

		@php $images = get_sub_field('gallery'); @endphp
		@foreach ( $images  as $image )

			{{ wp_get_attachment_image($image, 'large') }}

		@endforeach
		
	</div>

	<div class="col-lg-6 content content--right">
		{{ the_sub_field('content') }}

		@php $buttons = get_field('buttons') @endphp
		@foreach ( $buttons as $button )

			<a class="btn btn__primary" href="{{ $button['url'] }}">
				{{ $button['title'] }}
			</a>

		@endforeach
	</div>
</section>