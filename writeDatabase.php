<?php
    require 'vendor/autoload.php';
    use Aws\DynamoDb\DynamoDbClient;

    $client = DynamoDbClient::factory(array(
        'region' => 'us-east-1',
        'version' => 'latest'
        
      ));

    $tableName = "CotissDB";

    $response = $client->putItem(array(
      'TableName' => $tableName,
      'Item' => $client->formatAttributes(array(
        'message' => $_POST['message']
        ))
      ));

   header('Location: index.php');
?>
