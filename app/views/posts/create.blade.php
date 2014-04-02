@extends('layouts.master')


@section('topscript')
<style>
	.breadcrumb-place {
		background: url(/img/assets/breadcrumb8.jpg) repeat center;
	}
</style>


@stop

@section('content')

<div class="breadcrumb-place">
	<div class="row clearfix">
		<h3 class="page-title"> Create New Blog Post </h3>
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/"><i class="icon_house_alt mi"></i> Home </a></li>
				<li><a href="/blog"> Blog </a></li>
				<li>Create New Post</li>
			</ul>
		</div><!-- breadcrumbIn -->
	</div><!-- row -->
</div><!-- end breadcrumb place -->

<div class="page-content">
		<div class="row clearfix">
			<div class="grid_8 contact_c">
				<h3 class="col-title"> Create New Post </h3>
				<p> Title and Body fields are required. </p>

				{{ Form::model(new Post(), array('action' => 'PostsController@store',
												 'files' => true )) }}
					<div class="clearfix">
						{{ $errors->first('title', '<h3 class=\'col-title\'>Must have a title.</h3>')}}
						@include('posts/form')
					<input type="submit" class="send-button" name="submit" value="Create Post">
					<span>Add Image to Post (Optional):</span><br/>
					{{ Form::file('image', array('class' => 'send-button fll')) }}
					{{ Form::close()}}
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