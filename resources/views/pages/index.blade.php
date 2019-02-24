@extends('layouts.master')

@section('content')
	<!-- Start Sidebar + content -->
		<div class="container margin-top-20">
			<div class="row">
				<div class="col-md-4">
					<ul class="list-group">
					  <li class="list-group-item">First item</li>
					  <li class="list-group-item">Second item</li>
					  <li class="list-group-item">Third item</li>
					</ul> 
				</div>
				<div class="col-md-8">
					<div class="widget">
						<h3>Featured Products</h3>
						<div class="row">
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card">
									<img class="card-img-top featured-img" src="{{ asset('images/products/'.'samsung_galaxy.jpeg') }}" alt="Card image">
									<div class="card-body">
										<h4 class="card-title">Samsung</h4>
										<p class="card-text">Some emample text.</p>
										<a href="#" class="btn btn-outline-warning">Add to cart</a>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Sidebar + content -->
@endsection