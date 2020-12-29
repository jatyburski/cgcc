{{-- Pre Footer --}}

<section class="row no-gutters pre-footer">
	<div class="offset-1 col-lg-4">
		<h2 class="position-relative text-center accent pre-footer__title">
			<span class="d-block font-weight-bold text-uppercase">{{ the_field('subtitle') }}</span>
			{{ the_field('title') }}
		</h2>

		@if ( !is_front_page() )

			{{ the_field('description') }}

			@php $btn = get_field('button'); @endphp
			<a class="btn btn__primary btn__primary--purple" href="{{ $btn['url'] }}">
				{{ $btn['title'] }}
			</a>

		@else

			<ul class="d-flex">
				@php $locations = get_field('locations', 'options'); @endphp
				@foreach ( $locations as $location )	

					<li class="col">
						<h3>{{ $location['city'] }} Office</h3>

						<address>
							{{ $location['address'] }}<br />
							{{ $location['city'], $location['state'] $location['zip'] }}
						</address>

						<a 
							class="d-inline-block m-auto btn btn__secondary btn__secondary--purple" 
							href="{{ $location['address'] }}" 
							target="_blank">
							Visit Location
						</a>
					</li>

				@endforeach
			</ul>

		@endif
	</div>

	<div class="offset-1 col-lg-6 cta__image">
		@php $img = get_field('image'); @endphp
		{{ wp_get_attachment_image( $img, 'large' ) }}

		<blockquote>
			{{ the_field('quote') }}
		</blockquote>
	</div>
</section>