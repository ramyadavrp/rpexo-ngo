@extends('frontend.layouts.master')

@section('meta')
    <meta name="description" content="Discover RPEXO – your trusted destination for premium furniture. Explore our wide range of stylish, durable, and affordable furniture for every room. Shop now to upgrade your space!">
    <meta name="keywords" content="RPEXO, furniture, home furniture, premium furniture, modern furniture, bedroom furniture, living room furniture, wooden furniture, stylish furniture, buy furniture online">
    <link rel="icon" href="/favicon.png" type="image/png">
@endsection

@section('title', 'NGO | Premium Quality Furniture for Stylish Living')

@section('main-content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
	<div class="row">
    <div class="col-md-6 col-lg-6 mx-auto">
			<div class="card border-success p-4 justify-content-center">
				<ul class="nav nav-tabs" role="tablist">
				  <li class="nav-item col-sm-6 p-0">
				    <a class="nav-link active btn btn-outline-success btn-block" id="oneTime-tab" data-toggle="tab" href="#one-time">One Time</a>
				  </li>
				  <li class="nav-item col-sm-6 p-0">
				    <a class="nav-link btn btn-outline-dark btn-block" id="monthly-tab" data-toggle="tab" href="#monthly">Monthly</a>
				  </li>
				</ul>

				<div class="tab-content mt-3">
				  <!-- One Time -->
				  <div class="tab-pane fade show active" id="one-time" role="tabpanel">
				    <form>
				    	@csrf
				      <div class="card card-body">
						  	<h5>One Time Donation</h5>
						    <div class="form-group">
						        <div class="row">
						          	<div class="col-sm-4 col-md-4 mb-2">
							            <label class="btn btn-outline-success btn-block">
												    <input type="radio" name="amount" class="amount-btn" data-value="4000" autocomplete="off" hidden> 4000
												  </label>
						          	</div>
						          	<div class="col-sm-4 col-md-4 mb-2">
						            	<label class="btn btn-outline-success btn-block">
						            		<input type="radio" name="amount" class="amount-btn" data-value="2000" autocomplete="off" hidden>2000
						            	</label>
						          	</div>
						          	<div class="col-sm-4 col-md-4 mb-2">
						            	<label class="btn btn-outline-success btn-block">
						            		<input type="radio" name="amount" class="amount-btn" data-value="1000" autocomplete="off" hidden>1000
						            	</label>
						          	</div>
						          	<div class="col-sm-4 col-md-4 mb-2">
						            	<label class="btn btn-outline-success btn-block">
						            		<input type="radio" name="amount" class="amount-btn" data-value="600" autocomplete="off" hidden>600
						            	</label>
						          	</div>
						          	<div class="col-sm-4 col-md-4 mb-2">
						            	<label class="btn btn-outline-success btn-block">
						            		<input type="radio" name="amount" class="amount-btn" data-value="500" autocomplete="off" hidden>500
						            	</label>
						          	</div>
						          	<div class="col-sm-4 col-md-4 mb-2">
						            	<label class="btn btn-outline-success btn-block">
						            		<input type="radio" name="amount" class="amount-btn" data-value="450" autocomplete="off" hidden>450
						            	</label>
						          	</div>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="row">
						          	<div class="col-sm-8 mb-2">
							            <div class="input-group">
							              <input id="" type="text" class="form-control cst-amt" >
							            </div>
						          	</div>
						          	<div class="col-sm-4 mb-2">
							            <div class="dropdown">
							              	<button class="btn btn-outline-secondary btn-block dropdown-toggle" type="button">₹ INR</button>
							              	<div class="dropdown-menu">
							                <a href="dropdown-item">INR<a>
							                <a href="dropdown-item">USD<a>
							              	</div>
							            </div>
						          	</div>
						        </div>
						    </div>
						    <div class="form-group form-check">
					            <input type="checkbox" class="form-check-input" id="dedicateDonation">
					            <label class="form-check-label" for="dedicateDonation">Dedicate this donation</label>
						    </div>
						    <div class="form-group">
						        <div class="row">
						            <div class="col-sm-12 mb-2">
							            <div class="input-group">
							              <input type="text" class="form-control" placeholder="Name of someone special to me">
							            </div>
						          </div>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="row alert alert-warning small mb-2 py-2 px-2">
						            <p>Once You have Donated You will able to add a personal message and send a card.</p>
						        </div>
						    </div>
						    <div class="form-group">
					            <p class="mb-1">Designate to <a href="#">where needed most</a></p>
					            <p><a href="#">Add comment</a></p>
						    </div>
						    <div class="form-group">
						        <div class="row">
						            <div class="col-sm-12 mb-2">
							            <div class="input-group">
							              <button data-type="OneTime" class="btn btn-success btn-block font-weight-bold donateBtn">Donate and Support</button>
							            </div>
						          </div>
						        </div>
						    </div>
							</div>
				    </form>
				  </div>

				  <!-- Monthly -->
				  <div class="tab-pane fade" id="monthly" role="tabpanel">
				    <form>
				    	@csrf
				      <div class="card card-body">
					   		<h5>Monthly Donation</h5>
						    <div class="form-group">
						        <div class="row">
					          	<div class="col-sm-4 col-md-4 mb-2">
						            <label class="btn btn-outline-success btn-block">
											    <input type="radio" name="amount" class="amount-btn" data-value="4000" autocomplete="off" hidden> 4000
											  </label>
					          	</div>
					          	<div class="col-sm-4 col-md-4 mb-2">
					            	<label class="btn btn-outline-success btn-block">
					            		<input type="radio" name="amount" class="amount-btn" data-value="2000" autocomplete="off" hidden>2000
					            	</label>
					          	</div>
					          	<div class="col-sm-4 col-md-4 mb-2">
					            	<label class="btn btn-outline-success btn-block">
					            		<input type="radio" name="amount" class="amount-btn" data-value="1000" autocomplete="off" hidden>1000
					            	</label>
					          	</div>
					          	<div class="col-sm-4 col-md-4 mb-2">
					            	<label class="btn btn-outline-success btn-block">
					            		<input type="radio" name="amount" class="amount-btn" data-value="600" autocomplete="off" hidden>600
					            	</label>
					          	</div>
					          	<div class="col-sm-4 col-md-4 mb-2">
					            	<label class="btn btn-outline-success btn-block">
					            		<input type="radio" name="amount" class="amount-btn" data-value="500" autocomplete="off" hidden>500
					            	</label>
					          	</div>
					          	<div class="col-sm-4 col-md-4 mb-2">
					            	<label class="btn btn-outline-success btn-block">
					            		<input type="radio" name="amount" class="amount-btn" data-value="450" autocomplete="off" hidden>450
					            	</label>
					          	</div>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="row">
						          <div class="col-sm-8 mb-2">
						            <div class="input-group">
						              <input id="" type="text" class="form-control cst-amt" placeholder="900">
						            </div>
						          </div>
						          <div class="col-sm-4 mb-2">
						            <div class="dropdown">
						              <button class="btn btn-outline-secondary btn-block dropdown-toggle" type="button">INR</button>
						              <div class="dropdown-menu">
						                <a href="dropdown-item">INR<a>
						                <a href="dropdown-item">USD<a>
						              </div>
						            </div>
						          </div>
						        </div>
						    </div>
						    <div class="form-group form-check">
						            <input type="checkbox" class="form-check-input" id="dedicateDonation">
						            <label class="form-check-label" for="dedicateDonation">Dedicate this donation</label>
						    </div>
						    <div class="form-group">
						        <div class="row">
						            <div class="col-sm-12 mb-2">
						            <div class="input-group">
						              <input type="text" class="form-control" placeholder="Name of someone special to me">
						            </div>
						          </div>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="row alert alert-warning small mb-2 py-2 px-2">
						            <p>Once You have Donated You will able to add a personal message and send a card.</p>
						        </div>
						    </div>
						    <div class="form-group">
					            <p class="mb-1">Designate to <a href="#">where needed most</a></p>
					            <p><a href="#">Add comment</a></p>
					        </div>
						    <div class="form-group">
						        <div class="row">
						            <div class="col-sm-12 mb-2">
						            <div class="input-group">
						              <button type="button" data-type="monthly" class="btn btn-success btn-block font-weight-bold donateBtn">Donate and Support</button>
						            </div>
						          </div>
						        </div>
						    </div>
							</div>
				    </form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
	$('.amount-btn').on('click', function() {
	    let amount = $(this).data('value');
	    //console.log("Clicked amount:", amount);
	    $('.cst-amt').val(amount);
	});

	
</script>
<script>
	$('.donateBtn').on('click', function(e) {
		e.preventDefault();
	    let donationAmount = $('.cst-amt').val();
	    let type = $(this).data('type');
	    //alert(type);
	    $.ajax({
	        url: '/donate-store',
	        type: 'POST',
	        data: {
	            amount: donationAmount,
	            type: type,
	            _token: '{{ csrf_token() }}' 
	        },
	        success: function(response) {
	            alert(response.amount);
	        },
	        error: function(xhr) {
	            alert("Error: " + xhr.responseText);
	        }
	    });
	});

</script>
@include('frontend.layouts.newsletter')
@endsection

