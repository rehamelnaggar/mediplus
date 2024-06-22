@extends('layouts.main')

@section ('content')
<!-- Slider Area -->
@include('includes.slider')
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		@include('includes.schedule')
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		@include('includes.feautes')
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		@include('includes.funFacts')
		<!--/ End Fun-facts -->
		
		<!-- Start Why choose -->
		@include('includes.whyChoose')
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		@include('includes.callToAction')
		<!--/ End Call to action -->
		
		<!-- Start portfolio -->
		@include('includes.portFolio')
		<!--/ End portfolio -->
		
		<!-- Start service -->
		@include('includes.service')
		<!--/ End service -->
		
		<!-- Pricing Table -->
		@include('includes.pricingTable')
		<!--/ End Pricing Table -->
		
		
		
		<!-- Start Blog Area -->
		@include('includes.blogArea')
		<!-- End Blog Area -->
		
		<!-- Start clients -->
		@include('includes.clients')
		<!--/Ens clients -->
		
		<!-- Start Appointment -->
		@include('includes.appointment')
		<!-- End Appointment -->
		
		<!-- Start Newsletter Area -->
		@include('includes.newsLetter')
		<!-- /End Newsletter Area -->
		@endsection