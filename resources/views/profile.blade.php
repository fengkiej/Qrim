@extends('layouts.master')

@section('title', 'Profile')
@section('head')
        
@endsection

@section('content')
<<<<<<< HEAD
	<div class="card" style="text-align: center; background-color: #fafafa; margin : 50px 10px 50px 10px;">
		<div style="background-image: "../images/gallery-8.jpg";" class="profile-header img-responsive">
			<span>
			<img src="images/team-3.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#f6f6f6; margin-left:auto; margin-right:auto;">
=======
	<div class="card" style="text-align: center; margin : 0px 16px 50px 16px; border: 2px solid white;">

		<div class="profile-header img-responsive">
			<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto;">
>>>>>>> 1e5b1ad1480a79d95de16efc0ab270417cc90c27
		</div>
		<h3>Shayla Alderson</h3>
		<a style="margin-top:0px; margin-bottom:0px; font-size:2.7vh">qrim.in/shaylaa</a> <br/>
		<form action="transfer" method="get">
		<h3>Rp</h3><input type="text" style="width: 5em; text-align:center; font-size: 2em" name="nominal"> <br/>

		<button class="btn btn-success" style="margin:5px; width: 9em; text-decoration: none;">Qrim</button>
		</form>

<<<<<<< HEAD
		<div class="row" style="margin-left:auto; margin-right:auto; width:95%; border:2px solid #ddd">
			<div style="width:100%; height:275px; border-top:1px solid #ddd; border-bottom:1px solid #ddd; overflow-y:scroll; background:white">
				
			</div>
=======
		<div class="row" style="margin-left:auto; margin-right:auto; width:80%; border:2px solid #ddd">
			<div>Welcome</div>
			<div style="width:100%; height:275px; border-top:1px solid #ddd; border-bottom:1px solid #ddd; overflow-y:auto; background:white"></div>
>>>>>>> 1e5b1ad1480a79d95de16efc0ab270417cc90c27
			<div class="row" style="width:100%; height:30px; margin-left:auto; margin-right:auto; position:inline-block;">
				<form>
					<input type="text" name="text" style="height:30px; width:75%; margin:0px;"><!--
					--><input type="submit" name="submit" value="SEND" style="height:30px; width:25%; margin:0px; font-size:auto">
				</form>
			</div>
		</div>
	</div>
@endsection