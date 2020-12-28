<!doctype html>

<html {!! get_language_attributes() !!}>
	@include('partials.head')

	<body @php body_class() @endphp>

		@php do_action('get_header') @endphp
		@include('partials.header')
		@include('partials.hero')

			<main class="container-fluid">
				@if ( !is_front_page() )
					
					@yield('content')
				
				@else
				
					@include('partials.home.cards')
					@include('partials.home.team')
				
				@endif
			</main>

		@php do_action('get_footer') @endphp
		@include('partials.footer')

		@php wp_footer() @endphp

	</body>

</html>