<!-- Helper functions to convert slugs to full names. -->

<?php
function tagName ($ss){
    if ($ss === 'ai' ){
        return 'Artificial intelligence' ;
    } else if ($ss === 'google' ){
        return 'Google' ;
    } else if ($ss === 'high-performance-computing' ){
        return 'High performance computing' ;
    } else if ($ss === 'singularity' ){
        return 'Singularity' ;
    } else if ($ss === 'coding-101' ){
        return 'Coding 101';
    } else {
        return 'Unknown tag';
    }
}

function categoryName ($ss){
    if ($ss === 'hardware-reviews' ){
        return 'Hardware reviews' ;
    } else if ($ss === 'opinion-pieces' ){
        return 'Opinion pieces' ;
    } else if ($ss === 'software-reviews' ){
        return 'Software reviews' ;
    } else if ($ss === 'tech-news' ){
        return 'Tech news' ;
    } else if ($ss === 'learning-resources' ){
        return 'Learning resources';
    } else {
        return 'Unknown category';
    }
}
?>

<!doctype html>
<html >

    <head >
    	@foreach($articles as $article)
        	<title>{{$article -> title }}</title>
        @endforeach
        <link rel="stylesheet" href="/app.css">
    </head >
    <header>
    	<h1>Cool Tech</h1>
    </header>
    
    <body >
     <main>
     
     	<!-- Loop through the article with the given id, and display the results-->
     	
        @foreach($articles as $article)
            <article> 
                <h2>{{$article -> title }}</h2>
                <p><strong>Created:</strong> {{$article -> created }}</p>
                <!-- The category is also a link to the category page, and is 
                converted into the full name instead of the slug -->
                <p><strong>Category: </strong><a href=" {{ url('/category', 
                [$article->name]) }} ">{{categoryName($article -> name) }}</a></p>
                <p>{{$article -> content }}</p>
                <p><strong>Tags:</strong></p>
                <ul>
                     @foreach($tags as $tag)
                     	<!-- The tag is also a link to the category page, and is 
                        converted into the full name instead of the slug -->
                     	<li><a href=" {{ url('/tag', [$tag->name]) }} ">
                     			{{tagName($tag->name)}}</a></li>
                     @endforeach
                </ul>
            </article>
        @endforeach
    </main>
    </body >
    
    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>

</html >
        