{{-- List Items --}}

<section class="row no-gutters">
	<div class="col-12">
		<h2 class="position-relative text-center accent list-item__title">
			<span class="d-block font-weight-bold text-uppercase">
				{{ the_sub_field('subtitle') }}
			</span>
			{{ the_sub_field('title') }}
		</h2>

		{{ the_sub_field('description') }}
	</div>

	<div class="offset-1 offset-lg-2 col-10 col-lg-8 d-flex">

		@foreach ( $items as $item )

			<div class="col list-item__card{{ $type == true ? ' list-item__card--purple' : ' list-item__card--teal' }}">

				@if ( $type == true )

					<h3>{{ $item['title'] }}</h3>
					{{ $item['description'] }}

				@else

					<h3>{{ $item['title'] }}</h3>

				@endif
				
			</div>

		@endforeach

	</div>
</section>