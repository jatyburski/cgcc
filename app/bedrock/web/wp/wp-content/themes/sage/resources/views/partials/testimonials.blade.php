{{-- Testimonials --}}

<section class="row no-gutters team">
	<div class="col-lg-8">
		<h2 class="position-relative text-center accent team__title">
			<span class="d-block font-weight-bold text-uppercase">{{ the_field('subtitle') }}</span>
			{{ the_field('title') }}
		</h2>

		<div class="col-lg-6">
			
		</div>

		<ul class="carousel-inner col-lg-6 m-0 p-0 position-relative">

			@php $slides = get_field( 'testimonials' ) @endphp
	
			@foreach ( $slides as $index => $slide )
				<li class="carousel-item{{ $index == 0 ? ' active' : '' }}">
					<blockquote>
						{{ $slide[ 'quote' ] }}
					</blockquote>
				</li>
			@endforeach
	
		</ul>
	</div>
</section>