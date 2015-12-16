<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Final_350
 */

get_header(); ?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    font-size: 3em;
}

#panel {
    padding: 50px;
    display: none;
    font-size: 3em;
}
</style>
</head>
<body>
 
<div id="flip">Click to show what our next trip is!!!! </div>
<div id="panel"> Our next trip is: THE NORTH POLE! </div>

</body>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<style type="text/css">
img {
	width: 450px;
	height: 300px;
	margin-left: 40px;

}
.trip{
	display: inline-block;
	width: 33%;

}
</style>
<body>
<div class="trip">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Colosseum_in_Rome,_Italy_-_April_2007.jpg/1280px-Colosseum_in_Rome,_Italy_-_April_2007.jpg">

	<p>
	Location: 
	<br>
	Date:
	<br>
	Price:
	<br>
	ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


	<p>
</div>
<div class="trip">
	<img src="http://assets.fodors.com/destinations/2869/tower-bridge-london-england_main.jpg">

	<p>
	Location: 
	<br>
	Date:
	<br>
	Price:
	<br>
	ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


	<p>
</div>
<div class="trip">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Australia_Day.jpg/1280px-Australia_Day.jpg">

	<p>
	Location: 
	<br>
	Date:
	<br>
	Price:
	<br>
	ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


	<p>
</div>

</body>
		</main><!-- #main -->
	</div><!-- #primary -->

