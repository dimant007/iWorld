<?php
require_once 'vendor/autoload.php';


$EntityFactory = new App\EntityFactory();

class EntityFactory
{
    static function create($objectName, $data, PDO $pdo)
    {
        if (!class_exists($objectName)) {
            throw new Exception("Class $objectName doesn't exist");
        }

        if (is_subclass_of($objectName, "EntityFactory")) {
            throw new Exception("Class $objectName must be a child of an Entity");
        }

        return array_map(function($item) use ($pdo, $objectName) {
            return new $objectName($item, $pdo);
        }, $data);
    }
}

abstract class Entity
{
    /**
     * @var PDO
     */
    protected $db;

    function __construct(array $data = [], PDO $db)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
        $this->db = $db;
    }

}

class Color extends Entity {}

class Type extends Entity {}

class Model extends Entity
{
    function getColors()
    {
        $stmt = $this->db->prepare("SELECT * FROM iphoneColors WHERE `model_id` = :model_id");
        $stmt->execute([':model_id' => $this->id]);

        return EntityFactory::create('Color', $stmt->fetchAll(PDO::FETCH_ASSOC), $this->db);
    }
    function getTypes()
    {
        $stmt = $this->db->prepare("SELECT * FROM iphoneType WHERE `model_id` = :model_id");
        $stmt->execute([':model_id' => $this->id]);

        return EntityFactory::create('Type', $stmt->fetchAll(PDO::FETCH_ASSOC), $this->db);
    }
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=iworld", "root", "");
} catch (PDOException $e) {
    echo "Error: Could not connect. " . $e->getMessage();
}

$stmt = $pdo->prepare("SELECT * FROM iPhoneModels");
$stmt->execute();

$models = EntityFactory::create('Model', $stmt->fetchAll(PDO::FETCH_ASSOC), $pdo);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));

echo $twig->render('home.twig', array('models' => $models));
