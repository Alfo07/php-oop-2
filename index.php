<?php
require_once __DIR__.'/Classes/User.php';
require_once __DIR__.'/Classes/Product.php';
require_once __DIR__.'/Classes/UserLogin.php';

$user1 = new User('Francesco', 'Rossi', 'Via Armando Diaz 14, Arezzo');
try{
    $user1->setEmail('FrancescoR@gmail.com');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}
try{
    $user1->setCardExpiration('2023/08');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}

$user2 = new UserLogin('Giulio', 'Bonsignore', 'Via Giulio Cesare 18, Firenze');
$user2->setCardNumber('981728');
try{
    $user1->setEmail('GiulioB@gmail.com');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}
try{
    $user1->setCardExpiration('2023/04');
} catch (Exception $e) {
    echo 'Error: '.$e->getMessage();
}

$product1 = new Product('cuccia', 'Zolia', 'cane', '50€');
$product2 = new Product('sabbietta', 'Domus','gatto', '16€');
$product3 = new Product('gamberetti', 'Zolia', 'tartaruga', '5€');
$product4 = new Product('tiragraffi', 'Domus', 'gatto', '30€');
$product5 = new Product('osso', 'Zolia', 'cane', '13€');

$user1->setShopping($product2);
$user1->setShopping($product4);
$user2->setShopping($product1);
$user2->setShopping($product3);
$user2->setShopping($product5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Store</title>
</head>
<body>
    <div>
        <h2><?php echo $user1->getName().' '.$user1->getSurname(); ?></h2>
        <h3>Type of user: <?php echo $user1->registration; ?></h3>
        <h3>Cart products: <?php foreach($user1->getShopping() as $key => $item){ ?></h3><?php echo $item->getProduct().' per '.$item->getAnimal().' della '.$item->getBrand().' dal costo di '.$item->getPrice().'<br/>'; } ?>
    </div>
    <div>
        <h2><?php echo $user2->getName().' '.$user2->getSurname(); ?></h2>
        <h3>Type of user: <?php echo $user2->registration; ?></h3>
        <h3>Cart products: <?php foreach($user2->getShopping() as $key => $item){ ?></h3><?php echo $item->getProduct().' per '.$item->getAnimal().' della '.$item->getBrand().' dal costo di '.$item->getPrice().'<br/>'; } ?>
    </div>
</body>
</html>