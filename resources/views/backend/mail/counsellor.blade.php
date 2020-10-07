<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.session-d
		{
			background-color: rgb(128 155 206);
			padding: 1rem;
			color: #fff;
		}

		@media screen and (min-width: 1200px)
		{
            .custom-theme
			{
				width: 60%;
			}
		}

	</style>
</head>
<body>


	<div class="container custom-theme">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="text-center mt-5">Welcome to I Listen You</h3>
				<div class="customer-name text-center mt-5"><h5>Hi {{$data['name']}} </h5></div>
				<div class="session-d mt-5 mb-0 text-center"><h2>
                <b>Your Session Has been Booked At</b></h2></div>
			</div>
		</div>
		<div class="row mt-5 justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="personal-d">
					<h4 class="mb-3">Your Client Details....</h4>
					<h6 class="mb-3"><b>Your Client Name : </b>{{$data['client_name']}}.</h6>
					<h6 class="mb-3"><b>Your Mobile Number : </b>{{$data['client_mobile_no']}}.</h6>
					<h6 class="mb-3"><b>Session Date : </b>{{$data['pre_date']}}</h6>
					<h6 class="mb-3"><b>Session Time : </b>{{$data['session_time']}}</h6>
					<h6 class="mb-3"><b>Your Client Email is: </b><a href="mailto:{{$data['client_email']}}">{{$data['client_email']}}</a></h6>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-xl-6 offset-xl-3 text-center">
				<div class="info-note">
					<h4 style="color: #999999;">Need Support?</h4>
					<p>Feel free to email us if you have any questions. comments or suggestions. We'll be happy restore all your issues.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
