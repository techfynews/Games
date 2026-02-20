<?php
function generateMetaTags($title, $description, $keywords, $author, $viewport) {
    $metaTags = "<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"$viewport\">
    <meta name=\"title\" content=\"$title\">
    <meta name=\"description\" content=\"$description\">
    <meta name=\"keywords\" content=\"$keywords\">
    <meta name=\"author\" content=\"$author\">
";
    return $metaTags;
}

// Example usage
$title = "My Blog Post";
$description = "This is a description of my blog post.";
$keywords = "blog, post, example";
$author = "Your Name";
$viewport = "width=device-width, initial-scale=1.0";

echo generateMetaTags($title, $description, $keywords, $author, $viewport);
?>