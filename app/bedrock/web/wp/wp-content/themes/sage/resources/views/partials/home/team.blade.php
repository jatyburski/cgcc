{{-- Team --}}

<section class="row no-gutters team">
	<div class="col-lg-8">
		<h2 class="position-relative text-center accent team__title">
			<span class="d-block font-weight-bold text-uppercase">{{ the_field('subtitle') }}</span>
			{{ the_field('title') }}
		</h2>

		<ul class="d-flex p-0">

			@php $query = new WP_Query ('posts_per_page=-1&order=ASC&post_type=staff'); @endphp
			@if ( $query->have_posts() )

				@while ( $query->have_posts() ) : $query->the_post()

					<li class="col team__member">
						<a href="{{ the_permalink() }}">
							{{ the_post_thumbnail('large') }}
							{{ the_title('<h3>', '</h3>') }}
							{{ the_excerpt() }}
						</a>
					</li>

				@endwhile

			@endif

		</ul>

		<a class="d-inline-block m-auto btn btn__primary btn__primary--purple" href="">
			
		</a>
	</div>
</section>