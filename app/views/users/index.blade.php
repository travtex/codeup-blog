@extends('layouts.master')

@section('topscript')
<style>
.breadcrumb-place {
	background: url(/img/assets/breadcrumb11.jpg) repeat center;

}
</style>
@stop

@section('content')

<div class="breadcrumb-place">
	<div class="row clearfix">
		<h3 class="page-title"> Blog Users </h3>
		<div class="breadcrumbIn">
			<ul>
				<li><a href="/"><i class="icon_house_alt mi"></i> Home </a></li>
				<li> Users </li>
			</ul>
		</div><!-- breadcrumbIn -->
	</div><!-- row -->
</div><!-- end breadcrumb place -->

<div class="page-content">

		<div class="row clearfix mbs">
			<div class="grid_9 alpha">
				<h3 class="col-title mb">Users</h3>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">E-Mail</th>
							<th scope="col">Name</th>
							<th scope="col">Admin</th>
							<th scope="col">Edit</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{$user->email}}</td>
								<td>{{$user->first_name . ' ' . $user->last_name}}</td>
								@if($user->is_admin)
									<td>Yes</td>
								@else
									<td>No</td>
								@endif
								<td><a href="{{{ action('UsersController@edit', $user->id)}}}"><i class="fa-pencil-square-o fa-2"></i></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>

				@if (Auth::check())
				<a href="{{{ action('UsersController@create')}}}" class="send-button">Create New User</a>
				@endif
				<div class="pagination-tt clearfix">
					{{ $users->links() }}
					
				</div><!-- pagination -->
			</div><!-- posts -->

			<div class="grid_3 sidebar">
				<div class="widget">
					<form action="" id="searchwidget" method="get">
						<input name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
						<button type="submit"><i class="fa-search"></i></button>
					</form><!-- end form -->
				</div><!-- widget search -->

				<div class="widget widget_social">
					<ul>
						<li><a class="fb" href="http://www.facebook.com/theme20"><span>25602 Likes</span><i class="social_facebook"></i></a></li>
						<li><a href="https://twitter.com/StudioQuixotic" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @StudioQuixotic</a></a></li>
					</ul>
				</div><!-- widget social -->

				<div class="widget">
					<h3 class="col-title"> Post Categories </h3>
					<ul class="list">
						<li><a href="#"><i class="icon-caret-right"></i> News and updates <span>(7)</span> </a></li>
						<li><a href="#"><i class="icon-caret-right"></i> Interviews <span>(13)</span></a></li>
						<li><a href="#"><i class="icon-caret-right"></i> Graphic and web design <span>(34)</span></a></li>
						<li><a href="#"><i class="icon-caret-right"></i> Wordpress Hacks <span>(19)</span></a></li>
						<li><a href="#"><i class="icon-caret-right"></i> Freebie's <span>(17)</span></a></li>
						<li><a href="#"><i class="icon-caret-right"></i> Themes and Templates <span>(49)</span></a></li>
					</ul><!-- end list -->
				</div><!-- widget list -->

				<div class="widget tags">
					<h3 class="col-title"> Tags </h3>
					<a href="#" title="17 topic"><i class="icon-tag"></i> corporate </a>
					<a href="#" title="44 topic"><i class="icon-tag"></i> theme </a>
					<a href="#" title="10 topic"><i class="icon-tag"></i> css3 </a>
					<a href="#" title="2 topic"><i class="icon-tag"></i> premium </a>
					<a href="#" title="29 topic"><i class="icon-tag"></i> html5 </a>
					<a href="#" title="4 topic"><i class="icon-tag"></i> business </a>
					<a href="#" title="20 topic"><i class="icon-tag"></i> all purpose </a>
					<a href="#" title="14 topic"><i class="icon-tag"></i> jquery </a>
					<a href="#" title="1 topic"><i class="icon-tag"></i> muse template </a>
					<a href="#" title="4 topic"><i class="icon-tag"></i> minimalist </a>
				</div><!-- widget tags -->

				<div class="widget">
					<ul class="tabs">
						<li><a href="#popular" class="active">Popular Posts</a></li>
						<li><a href="#comments">Recent Comments</a></li>
					</ul><!-- tabs -->

					<ul class="tabs-content">
						<li id="popular" class="active">
							<ul class="tab-content-items">
								<li class="clearfix">
									<a class="post-thumbnail" href="blog_single_slider.html"><img width="60" height="60" src="/img/assets/portfolio1.jpg" alt="#"></a>
									<h3><a href="blog_single_slider.html">Next Elections Resolutions: What could be the worst?</a></h3>
									<div class="post-meta"><span>27 January 2014</span></div>
								</li>
								<li class="clearfix">
									<a class="post-thumbnail" href="blog_single_image.html"><img width="60" height="60" src="/img/assets/portfolio2.jpg" alt="#"></a>
									<h3><a href="blog_single_image.html">Praesent adipiscing mi eget ipsum imperdiet</a></h3>
									<div class="post-meta"><span>24 January 2014</span></div>
								</li>
								<li class="clearfix">
									<a class="post-thumbnail" href="blog_single_video.html"><img width="60" height="60" src="/img/assets/portfolio3.jpg" alt="#"></a>
									<h3><a href="blog_single_video.html">Paul Thomson on Post with SoundCloud</a></h3>
									<div class="post-meta"><span>22 January 2014</span></div>
								</li>
								<li class="clearfix">
									<a class="post-thumbnail" href="blog_single_video.html"><img width="60" height="60" src="/img/assets/portfolio4.jpg" alt="#"></a>
									<h3><a href="blog_single_video.html">Jackson on Post with Audio Track</a></h3>
									<div class="post-meta"><span>30 January 2014</span></div>
								</li>
							</ul>
						</li><!-- popular content -->
						<li id="comments">
							<ul class="tab-content-items">
								<li class="clearfix">
									<a class="post-thumbnail" href="#"><img width="60" height="60" src="/img/assets/avatar1.jpg" alt="#"></a>
									<p><strong><a href="#">Alexander</a> <i>says:</i></strong> Itaque earum rerum hic tenetur a sapiente delectus</p>
								</li>
								<li class="clearfix">
									<a class="post-thumbnail" href="#"><img width="60" height="60" src="/img/assets/avatar2.jpg" alt="#"></a>
									<p><strong><a href="#">Xina</a> <i>says:</i></strong> Sapiente delectus, ut aut reiciendis itaque earum vem.</p>
								</li>
								<li class="clearfix">
									<a class="post-thumbnail" href="#"><img width="60" height="60" src="/img/assets/avatar3.jpg" alt="#"></a>
									<p><strong><a href="#">Michele</a> <i>says:</i></strong> Tenetur a sapiente delectus, ut aut </p>
								</li>
							</ul>
						</li><!-- tab content -->
					</ul><!-- end tabs -->
				</div><!-- widget tabs -->

			</div><!-- sidebar -->

		</div><!-- row -->
		
	</div><!-- end page content -->

@stop
@section('bottomscript')
		
@stop

