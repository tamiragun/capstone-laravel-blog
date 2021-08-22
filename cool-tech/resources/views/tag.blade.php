
<!-- Helper function to convert slugs to full names. -->
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
?>

<!doctype html>
<html >
    <head >
    	<title > {{tagName($slug)}} </title >
    	<link rel="stylesheet" href="/app.css">
    </head >

    <!-- Fall-back for if someone passes an incorrect tag name into the url.-->

    @if (tagName($slug) === 'Unknown tag')
   	 <header>
         <h1>Cool Tech</h1>
         <h2>Error!</h2>
     </header>
     <body>
         <main>
           	 <p>That's not one of our blog tags. Try one of these:</p>
           	 <ul>
           	 	<li><a href= " {{ url('/tag/ai') }} " >
           	 					Artificial intelligence</a></li>
           	 	<li><a href= " {{ url('/tag/google') }} " >
           	 					Google</a></li>
           	 	<li><a href= " {{ url('/tag/high-performance-computing') }} " >
           	 					High performance computing</a></li>
           	 	<li><a href= " {{ url('/tag/singularity') }} " >
           	 					Singularity</a></li>
           	 	<li><a href= " {{ url('/tag/coding-101') }} " >
           	 					Coding 101</a></li>
           	 </ul>
         </main>
     </body>
    @else
    <header>
       <h1>Cool Tech</h1>
       <h2 > Tag: {{tagName($slug)}} </h2 >
    </header>
    <body>
   		<main>
           <!-- Loop through all articles with this category and list them here, with a link-->
           @foreach( $articles as $article )
                <h3><a href=" {{ url('/article', [$article->article_id]) }} ">
                				{{ $article -> title }}</a></h3>
                <p>{{ $article -> created }}</p>
           @endforeach
   		</main>
   </body>
   @endif
    </main>
    </body >	
	
    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>

</html >