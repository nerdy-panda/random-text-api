<?php require_once __DIR__."/vendor/autoload.php"; ?>
<?php
$connection = dbConnection();
$articles = posts();
$connection->exec("truncate table `texts`");

foreach ($articles as $article){
    $connection->exec(articleQuery($article->title));
    $connection->exec(articleQuery($article->title." ".nl2br($article->body)));
}
