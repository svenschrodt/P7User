<?php declare(strict_types = 1);


require_once 'Bootstrap.php';

// $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
$hash = \P7User\Auth::getHashFromPassword('Sven Schrodt');
// $hash = password_hash(, );
if (\P7User\Auth::verifyPassword('Sven Schrodt', $hash)) {
    echo 'Valides Passwort!';
} else {
    echo 'Invalides Passwort.';
}
echo '<br><br><br><br>' . $hash;
