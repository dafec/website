<?PHP 

$client = new MongoDB\Client(
    'mongodb+srv://dafec-admin:M1-apPle-Silicon@dafec.y0s1i.mongodb.net/<dbname>?retryWrites=true&w=majority');

$db = $client->test;

echo "This is my index page";
?>
