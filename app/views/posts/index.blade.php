@extends('layouts.master')

@section('content')

<div class="breadcrumb-place" style="background: url(/img/assets/breadcrumb9.jpg) repeat center;">
	<div class="row clearfix">
		<h3 class="page-title"> Computering is Hard </h3>
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/"><i class="icon_house_alt mi"></i> Home </a></li>
				<li> Computering is Hard </li>
			</ul>
		</div><!-- breadcrumbIn -->
	</div><!-- row -->
</div><!-- end breadcrumb place -->

<div class="page-content">
	<div class="row clearfix mbs">
		<div id="masonry-container" class="three-column transitions-enabled centered clearfix">
			<div class="grid_12 posts">
				@foreach ($posts as $post)
					<div class="post">
						<div class="meta_box">
							<h3><a href="#">{{{ $post->title }}}</a></h3>
							<div class="post_meta">
							</div>
						</div>
						<div class="post_content">
							<p>{{{ $post->body}}}</p>
						</div>
					</div> <!-- end post -->
				@endforeach
			</div>
		</div><!-- end masonry -->
	</div><!-- end row -->
				
</div><!-- end page content -->

@stop

