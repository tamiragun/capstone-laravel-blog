
<!-- Helper function to convert slugs to full names. -->
<?php
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
    	<title > {{categoryName($slug)}} </title >
    	<link rel="stylesheet" href="/app.css">
    </head >
   
    <!-- Fall-back for if someone passes an incorrect category name into the url.-->
    @if (categoryName($slug) === 'Unknown category')
   	 <header>
         <h1>Cool Tech</h1>
         <h2>Error!</h2>
     </header>
     <body>
     
     <main>
         <p>That's not one of our blog categories. Try one of these:</p>
         <ul>
           	 <li><a href= " {{ url('/category/hardware-reviews') }} " >
           	 				Hardware reviews</a></li>
           	 <li><a href= " {{ url('/category/opinion-pieces') }} " >
           	 				Opinion pieces</a></li>
           	 <li><a href= " {{ url('/category/software-reviews') }} " >
           	 				Software reviews</a></li>
           	 <li><a href= " {{ url('/category/tech-news') }} " >
           	 				Tech news</a></li>
           	 <li><a href= " {{ url('/category/learning-resources') }} " >
           	 				Learning resources</a></li>
         </ul>
     </main>
     </body>
    @else
     <header>
        <h1>Cool Tech</h1>
        <h2 > Category: {{categoryName($slug)}} </h2 >
     </header>
     <body>
         <!-- Loop through all articles with this category and list them here, with a link-->
         <main>
            @foreach( $articles as $article )
                <h3><a href=" {{ url('/article', [$article->article_id]) }} ">
                {{ $article -> title }}</a></h3>
                <p>{{ $article -> created }}</p>
            @endforeach
         </main>
     </body>
    @endif

    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>
	
</html >