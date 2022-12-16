<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
 <body>
     <form action = "writeDatabase.php" method = "post">
         <input type - "text" input - "message" placeholder - "Feedback" name - "message">
         <br>
         <button type = "submit" name = "submit">Submit</button>
     </form>
<?php
    require 'vendor/autoload.php';
    use Aws\DynamoDb\DynamoDbClient;

     $client = DynamoDbClient::factory(array(
        'region' => 'us-east-1',
        'version' => 'latest'
    ));

    $tableName = "CotissDB";

    $response = $client->scan(array(
      'TableName' -> $tableName
      ));
    
    $items - $response->('Items');

    $feedback - $items[array_rand($items)];
    
    echo '<p>' . $feedback['message']['S'] . '</p>';
?>
    </body>
</html>
