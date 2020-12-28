@php $cards = get_field('cards') @endphp

{{-- Cards --}}

<section class="row no-gutters card__container">
	<ul clas="m-0 p-0">

		@foreach ($cards as $card)

			<li class="bg-white border-0 col-lg-4 m-0 position-relative card">
				<h2 class="position-relative text-center accent card__title">
					<span class="d-block font-weight-bold text-uppercase">{{ $card['subtitle'] }}</span>
					{{ $card['title'] }}
				</h2>

				@php $img = $card['image'] @endphp
				<img class="card__img" src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />

				@php echo $card['description'] @endphp

				@php $btn = $card['button'] @endphp
				<a class="d-inline-block m-auto btn btn__secondary btn__secondary--teal" href="{{ $btn['url'] }}">{{ $btn['title'] }}</a>
			</li>

		@endforeach	

	</ul>
</section>