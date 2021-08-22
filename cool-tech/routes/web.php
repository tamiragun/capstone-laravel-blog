<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
 * Route for home page. Takes no argument but passes the five most recent
 * articles from the database to the view.
 */

Route::get('/', function () {
    $articles = DB::table( 'articles' )
                        ->orderBy('created','desc')
                        ->limit(5)
                        ->get();
    return view('home', [ 'articles' =>$articles]);
});

/*
 * Route for article view page. Takes the article id and passes information
 * about the articles with that id from the database. It also passes through 
 * information from the database about which tags that article is associated
 * with.
*/

Route::get( '/article/{id}' , function ($id){
    $articles = DB::table( 'articles' )
                        ->join('categories', 'articles.category_id', '=', 
                                'categories.category_id')
                        ->where( 'article_id' , '=' , $id )
                        ->get();
    $tags = DB::table( 'articles_tags' )
                        ->join('tags', 'articles_tags.tag_id', '=', 'tags.tag_id')
                        ->where( 'article_id' , '=' , $id )
                        ->get();
                        
    return view( 'article' , [ 'id' =>$id, 'articles' =>$articles, 'tags' =>$tags]);
})->name('article');


/*
 * Route for category view page. Takes the category slug and passes information 
 * about the articles with that tag from the database.
 */


Route::get( '/category/{slug}' , function ($slug){
    $articles = DB::table( 'articles' )
    ->join('categories', 'articles.category_id', '=', 'categories.category_id')
    ->where( 'name' , '=' , $slug )
    ->get();
    
    return view( 'category' , [ 'slug' =>$slug, 'articles' =>$articles]);
});

/*
 * Route for tag view page. Takes the tag slug and passes information about the 
 * articles with that tag from the database.
*/

Route::get( '/tag/{slug}' , function ($slug){
    $articles = DB::table( 'articles' )
    ->join('articles_tags', 'articles.article_id', '=', 'articles_tags.article_id')
    ->join('tags', 'articles_tags.tag_id', '=', 'tags.tag_id')
    ->where( 'name' , '=' , $slug )
    ->get();
        
    return view( 'tag' , [ 'slug' =>$slug, 'articles' =>$articles]);
});

/*
 * Route for legal pages, can be either 'tos' or 'privacy'
*/
    
Route::get( '/legal/{subsection}' , function ($subsection){
    return view( 'legal' , [ 'subsection' =>$subsection]);
})->where( 'subsection' , '(tos|privacy)' );


/*
 * Search function, split into 2 routes, one GET to display the page and one POST
 * to handle the form input
*/

Route::get( '/search' , function (){
    return view( 'search');
});

Route::post( '/search' , function (){
    $articles = DB::table( 'articles' )
    ->get();
    return view( 'search_result', [ 'articles' =>$articles]);
})->name('search_result');


