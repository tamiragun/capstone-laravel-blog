<!doctype html>
<html>

    <head>
    	<title>Search</title>
    	<link rel="stylesheet" href="/app.css">
    </head>
    
	<header>
   
        <h1>Cool Tech</h1>
        <h2>Search:</h2>
        
    </header>
    
    <body>
    <main>
    	<!-- Three search fields, posting different values. The action takes 
    	place on a different route, so as to allow for the GET method here
    	and the POST method there-->
        <form method='POST' action="{{route('search_result')}}" >
            @csrf
            <label for="article_id">Search by article ID:</label><br>
            <input type="number" id="article_id" name="article_id" min="0" max="6">
            <input type="submit" value="Search"><br><br>
        </form>
        
        <form method='POST' action="{{route('search_result')}}" >
            @csrf
            <label for="category">Search by article category:</label><br>
            <select id="category" name="category">
              <option value="hardware-reviews">Hardware reviews</option>
              <option value="opinion-pieces">Opinion pieces</option>
              <option value="software-reviews">Software reviews</option>
              <option value="tech-news">Tech news</option>
              <option value="learning-resources">Learning resources</option>
            </select>
            <input type="submit" value="Search"><br><br>
        </form>
        
        <form method='POST' action="{{route('search_result')}}" >
            @csrf
            <label for="tag">Search by article tag:</label><br>
            <select id="tag" name="tag">
              <option value="ai">Artificial intelligence</option>
              <option value="google">Google</option>
              <option value="high-performance-computing">
              						High performance computing</option>
              <option value="singularity">Singularity</option>
              <option value="coding-101">Coding 101</option>
            </select>
            <input type="submit" value="Search"><br><br>
        </form>

    </main>
    </body>
    

    <footer>
        <x-alert/>
    	<x-footer/>
	</footer>

</html>

