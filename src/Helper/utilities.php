<?php
    use App\Service\Singleton\MysqlConnection;
?>

<?php
function dbConnection():PDO {
    return MysqlConnection::instance();
}
function posts():array {
    $uri = "https://jsonplaceholder.typicode.com/posts";
    $request = curl_init($uri);
    $options = [
        CURLOPT_RETURNTRANSFER => true ,
        CURLOPT_CUSTOMREQUEST => "GET" ,
    ];
    curl_setopt_array($request,$options);
    $response = curl_exec($request);
    return json_decode($response);
}
function articleQuery(string $text):string {
    return "insert into `texts` (`text`) value (\"{$text}\");";
}
