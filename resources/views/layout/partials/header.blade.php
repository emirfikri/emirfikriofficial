<!-- start header -->
<link href="{!! asset('img/favicon.ico') !!}" rel="stylesheet" />
<link href="{!! asset('my/css/bootstrap.min.css') !!}" rel="stylesheet" />
		<header>
			<!-- <div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +62 088 999 123</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search" title="Click to start searching"></span>
								</form>
							</div>


						</div>
					</div>
				</div>
			</div> -->


			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a  href="{{route('index')}}"><img class="img-responsive" src="img/logo.png" style="max-height: 100px;"></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
						<li><a href="{{route('cv')}}">Resume</a></li>
						<li><a href="{{route('gallery')}}">Project Gallery</a></li>
						</ul>
					</div>
				</div>
			</div>
			

		</header>

		<!-- end header -->