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
