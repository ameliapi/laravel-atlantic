@extends('layout')

@section('content')

	<header class="">

		<div class = "logoContainer">
			<div class="logo">
				Your Atlantic
			</div>
		</div>

		<div class = "menuContainer">
			<li class="menu">Popular</li>
			<li class="menu">Latest</li>
			<li class="menu">Sections</li>
			<li class="menu">Magazine</li>
			<li class="menu">More</li>
			<li class="menu">Subscribe</li>
			<i class="fa fa-search" aria-hidden="true" style="color:white;"></i>
		</div>

	</header>


	<section class="heroContainer">
		<div class="heroLeft">
			<ul>
		    <?php foreach ($artLeft as $article): ?>
		        <li class="artL">
		        	<img class="avatarLeft" src="<?php echo $article->header_img; ?>" alt=""/><br/>
		            <h4><?php echo $article->title; ?></h4><br/>
		            <h6><?php echo $article->abstract; ?></h6>
	      			<h6><?php echo $article->user->name; ?></h6>

		        </li>
		    <?php endforeach; ?>
	    	</ul>
		</div>

		<div class="heroCenter">
			<ul>
		    <?php foreach ($artCenter as $article): ?>
		        <li class="artC">
		        	<img class="avatarCenter" src="<?php echo $article->header_img; ?>" alt=""/><br/>
		            <h2><?php echo $article->title; ?></h2><br/>
		            <h6><?php echo $article->abstract; ?></h6>
	      			<h6><?php echo $article->user->name; ?></h6>
		        </li>
		    <?php endforeach; ?>
	    	</ul>
		</div>

		<div class="heroRight">
			<ul>
		    <?php foreach ($artRight as $article): ?>
		        <li class="artR">
		        	<div class="artInfo-s">
		        		
			            <h6><?php echo $article->title; ?></h6><br/>
			            <?php echo $article->abstract; ?>
		      			<?php echo $article->user->name; ?>
		      			
	      			</div>

	      			<div class="avatarRight">
		        		<img id="icon-s" src="<?php echo $article->header_img; ?>" alt=""/><br/>
		        	</div>		        	
		        </li>
		    <?php endforeach; ?>
	    	</ul>
		</div>

	</section>

@endsection