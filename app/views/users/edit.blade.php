@extends('layouts.master')


@section('topscript')
<style>
	.breadcrumb-place {
		background: url(/img/assets/breadcrumb17.jpg) repeat center;
	}
</style>


@stop

@section('content')

<div class="breadcrumb-place">
	<div class="row clearfix">
		<h3 class="page-title"> Edit User Info </h3>
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/"><i class="icon_house_alt mi"></i> Home </a></li>
				<li><a href="/users"> Users </a></li>
				<li>Edit User</li>
			</ul>
		</div><!-- breadcrumbIn -->
	</div><!-- row -->
</div><!-- end breadcrumb place -->

<div class="page-content">
		<div class="row clearfix">
			<div class="grid_8 contact_c">
				<h3 class="col-title"> Edit User </h3>
				<p> All Fields are Required. </p>

				{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT')) }}
					<div class="clearfix">
						{{ $errors->first('email', '<h3 class=\'col-title\'>Must Have an E-mail.</h3>')}}
						<div class="grid_12 alpha fll">
							
							{{ Form::text('email', $value = null, $attributes = array (
								'placeholder' => 'E-mail *',
								'class' => 'requiredField form-input'
							))}}
						</div>
						<div class="grid_12 alpha fll">
						{{ $errors->first('first_name', '<h3 class=\'col-title\'>Must Have a First Name.</h3>')}}
					    {{ Form::text('first_name', $value = null, $attributes = array (
							'placeholder' => 'First Name *',
							'class' => 'requiredField form-input'
					    ))}}
						</div>
						<div class="grid_12 alpha fll">
					    {{ $errors->first('last_name', '<h3 class=\'col-title\'>Must Have a Last Name.</h3>')}}
					    {{ Form::text('last_name', $value = null, $attributes = array (
							'placeholder' => 'Last Name *',
							'class' => 'requiredField form-input'
					    ))}}
						</div>
						<div class="grid_12 alpha fll">
					    {{ $errors->first('password', '<h3 class=\'col-title\'>Must Have a Password.</h3>')}}
					    {{ Form::password('password', array (
							'placeholder' => 'Password *',
							'class' => 'requiredField form-input'
					    ))}}
						</div>
							
					<input type="submit" class="send-button" name="submit" value="Edit User">
					
				
				{{Form::close()}}
				<a href="#" id="btnDeleteUser" class="send-button fll">Delete Link</a>
					</div>
			</div><!-- grid8 -->

			<div class="grid_4 sidebar">
				<div class="widget">
					<p>Phone: <strong> (530) 435-5775 </strong> <br> Email: <strong>tflatt74@gmail.com</strong></p>
					<iframe height="400" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York,+NY,+United+States&amp;aq=0&amp;oq=New+yok&amp;sll=37.0625,-95.677068&amp;sspn=41.224889,86.044922&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;t=m&amp;z=10&amp;ll=40.714353,-74.005973&amp;output=embed"></iframe>
				</div><!-- widget -->
			</div><!-- sidebar -->

		</div><!-- row -->
	</div><!-- end page content -->

@stop
@section('bottomscript')
<script>

$('#btnDeleteUser').on('click', function(e) {
	e.preventDefault();
	if(confirm('Are you sure you want to delete this user?')) {
		$('#formDeleteUser').submit();
	}
});

</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@stop