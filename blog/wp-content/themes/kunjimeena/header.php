<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Kunji Meena"/>
    <meta name="revisit-after" content="3 days">
    <meta name="language" content="English">
    <meta name="reply-to" content="hellokunjimeena@gmail.com"/>


    <title>
    	<?php
    		if(is_single()){
    			the_title(); echo " By Kunji Meena";
    		}
    		else{
    			bloginfo('name'); echo " - Kunji Meena"; 
    		}
    	?>	
    </title>
    <meta name="description" content="
    	<?php 
    		if(is_single()){
    			single_post_title('', true); echo " By Kunji Meena, a Freelance web developer and designer based in new delhi, India";
    		}
    		else{
    			bloginfo('description');
    		}
    	?>
    "/>

    <?php 
        if(is_single()){
            echo "<meta property='og:url' content='"; the_permalink(); echo "'/>";
            echo "<meta property='og:type' content='article'/>";
            echo "<meta property='og:title' content='"; the_title(); echo"'/>";
            echo "<meta property='og:description' content='"; the_excerpt(); echo "'/>";
            echo "<meta property='og:image' content='"; the_post_thumbnail_url('large'); echo "'/>";
        }
        else{
            echo "<meta property='og:url' content='http://www.kunjimeena.com/blog/' />";
            echo "<meta property='og:type' content='website'/>";
            echo "<meta property='og:title' content='"; bloginfo('name'); echo " - Kunji Meena'/>";
            echo "<meta property='og:description' content='"; bloginfo('description'); echo "'/>";
            echo "<meta property='og:image' content='http://www.kunjimeena.com/public/img/kunji-meena-fb-blog.jpg'/>";
        }
    ?>
    <!--custum styles and scripts -->
    <link rel="shortcut icon" href="http://www.kunjimeena.com/public/img/favicon.ico"/>

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header_main">
			<a class="hm_brand" href="/">
				<span>Kunji Meena</span>
			</a>
			<div class="hm_menu">
				<a href="/">Home</a>
				<a href="/portfolio">Portfolio</a>
				<a href="/about">About</a>
				<a class="hml_active" href="/blog">Blog</a>
				<a href="/contact">Contact</a>
			</div>
			<button id="ham_menu" class="header_menu">
				<span id="hm_bit1" class="bit_regular bit_regular1"></span>
				<span id="hm_bit2" class="bit_regular bit_regular2"></span>
				<span id="hm_bit3" class="bit_regular bit_regular3"></span>
			</button>
		</div>
	</header>
