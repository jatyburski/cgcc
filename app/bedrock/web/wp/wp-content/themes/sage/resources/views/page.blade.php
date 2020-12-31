@extends('layouts.app')

@section('content')
	@while(have_posts()) @php the_post() @endphp
		@include('partials.banner')
		@include('partials.progressive-nav')
		@include('partials.content')
	@endwhile
@endsection