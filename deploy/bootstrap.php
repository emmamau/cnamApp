<?php
	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;
	date_default_timezone_set('America/Lima');
	require_once "vendor/autoload.php";
	$isDevMode = true;
	$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);
	$conn = array(
	'host' => 'dpg-ctn62ibtq21c73fe3g2g-a.oregon-postgres.render.com',
	'driver' => 'pdo_pgsql',
	'user' =>'cnam_db_v095_user',
	'password' => 'HGxvDFcFWxo8U6RGVMhraHKFoU0ggJKF',
	'dbname' => 'cnam_db_v095',
	'port' => '5432'
	);


	$entityManager = EntityManager::create($conn, $config);
