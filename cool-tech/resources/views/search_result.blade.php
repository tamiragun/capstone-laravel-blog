
<!-- This redirects the user to the correct page depending on the input 
they gave in the search field on the initial search page -->

<?php

if ($_SERVER[ 'REQUEST_METHOD' ] === 'POST' ){
    if (isset($_POST[ 'article_id' ])){
        $article_id = $_POST[ 'article_id' ];
        header("Location: /article/" . $article_id);
        exit();
    } else if (isset($_POST[ 'category' ])) {
        $category = $_POST[ 'category' ];
        header("Location: /category/" . $category);
        exit();
    } else if (isset($_POST[ 'tag' ])) {
        $tag = $_POST[ 'tag' ];
        header("Location: /tag/" . $tag);
        exit();
    }

}

?>
        

