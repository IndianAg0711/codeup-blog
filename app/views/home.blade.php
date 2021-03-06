@extends('layouts.master')

@section('title')
<title>Welcome</title>
@stop

@section('content')
	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold">Joseph Villafranca</h1>
					<h4 class="font-thin">Web Developer</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><img src="images/s02.png"></div><span>PROFESSIONAL</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="3"><img src="images/s01.png"></div><span>FRIENDLY</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><img src="images/s03.png"></div><span>SUITABLE</span></div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->



@stop