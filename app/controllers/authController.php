<?php require __DIR__ . '/../init.php';


// SWITCH HERE
switch($_POST['type']) {
    case 'login':
        if (login(  $_POST['email'],
                    $_POST['password'])) {
            header('location:' . ROOT . 'public/views/dashboard.php');
        } else {
            header('location:' . ROOT . 'public/views/auth/login.php');
        }
        break;
    case 'register':
        if (register(   $_POST['lastname'],
                        $_POST['insertion'],
                        $_POST['firstname'],
                        $_POST['email'],
                        $_POST['role'],
                        $_POST['password'])) {
            header('location:' . ROOT . 'public/views/auth/login.php');
        } else {
            header('location:' . ROOT . 'public/views/auth/register.php');
        }
        break;
    default:

        break;
}


// FUNCTIONS HERE

function login($email, $password) {
    global $db, $messageBag;

    if (empty($email) || empty($password)) {
        $messageBag->add('a', 'One or more required fields are not completed');
        return false;
    }
    $sql = "SELECT * FROM tbl_users WHERE email = :email";

    $q = $db->prepare($sql);
    $q->bindParam('email', $email);
    $q->execute();

    if ($q->rowCount() > 0 ) {
        $user = $q->fetch();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user']['username'] = $user['lastname'];
            $_SESSION['user']['id'] = $user['id'];
            $messageBag->add('s', 'Welkom ' . $_SESSION['user']['username']);
            return true;
        }
        $messageBag->add('a', 'Please check your email and password');
        return false;
    }
    return false;
}

function register($lastname, $insertion, $firstname, $email, $role, $password) {

    global $db, $messageBag;

    $sql = "SELECT * FROM tbl_users WHERE email = :email";
    $q = $db->prepare($sql);
    $q->bindParam(':email', $email);
    $q->execute();

    if ($q->rowCount() > 0) {
        $messageBag->add('a', 'This user already exists');
        return false;
    }

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_users (lastname, insertion, firstname, email, password, tbl_role_id)
            VALUES (:lastname, :insertion, :firstname, :email, '$hashed' , :role_id)";

    $q = $db->prepare($sql);
    $q->bindParam(':lastname', $lastname);
    $q->bindParam(':insertion', $insertion);
    $q->bindParam(':firstname', $firstname);
    $q->bindParam(':email', $email);
    $q->bindParam(':role_id', $role);
    $q->execute();

    return true;
}