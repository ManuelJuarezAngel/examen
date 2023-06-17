<?php 
session_start();
class Session {
    public function setAtributo($attribute, $value) {
        $_SESSION[$attribute] = $value;
    }

    public function getAtributo($attribute) {
        if (isset($_SESSION[$attribute])) {
            return $_SESSION[$attribute];
        } else {
            return null;
        }
    }

    public function deleteAtributo($attribute) {
        if (isset($_SESSION[$attribute])) {
            unset($_SESSION[$attribute]);
        }
    }

    public function destroySession() {
        session_destroy();
    }
}
?>

<?php 

$session = new Session();

$session->setAtributo('nombreUsuario', 'Manuel Juarez');

$username = $session->getAtributo('nombreUsuario');
echo $username; 

$session->deleteAtributo('nombreUsuario');

$session->destroySession();
?>
