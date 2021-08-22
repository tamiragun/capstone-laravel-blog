<!doctype html>

<html>
    <head>
    	<title>Cool Tech</title>
    	<link rel="stylesheet" href="/app.css">
    </head>
    
    <header>
        <h1>Cool Tech</h1>
        <h2>Our 5 latest blog posts:</h2>
    </header>
    
    <body>
    <main>
    
            <!-- Loop through the database items provided by the route, and 
            print out their titel, a hyperlink, and the first paragraph. -->
            @foreach( $articles as $article )
            <h3><a href=" {{ url('/article', [$article->article_id]) }} ">
            {{ $article -> title }}</a></h3>
            <p>{{ $article -> content }}</p>
            @endforeach

    
    </main>
    </body>
    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>
</html>