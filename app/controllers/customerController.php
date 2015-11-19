<?php require __DIR__ . '/../init.php';


// SWITCH HERE
switch($_POST['type']) {
    case 'add':
        if(addContact(
            $_POST['name'],
            $_POST['address'],
            $_POST['housenumber'],
            $_POST['postcode'],
            $_POST['city'],
            $_POST['country'],
            $_POST['phone'],
            $_POST['email'],
            $_POST['limit'])) {
            header('location:' . ROOT . 'public/views/customers/index.php');
        } else {
            header('location:' . ROOT . 'public/views/customers/create.php');
        }

        break;

    case 'edit':
        if (editContact (
            $_POST['id'],
            $_POST['name'],
            $_POST['address'],
            $_POST['housenumber'],
            $_POST['postcode'],
            $_POST['city'],
            $_POST['country'],
            $_POST['phone'],
            $_POST['email'],
            $_POST['limit'])) {
            header('location:' . ROOT . 'public/views/customers/index.php');
        } else {
            header('location:' . ROOT . 'public/views/customers/edit.php');
        }

    default:

        break;

}

// FUNCTIONS HERE

function addContact($name, $address, $housenumber, $postcode, $city, $country, $phone, $email, $limit) {
    global $db, $messageBag;

    if ( empty($name || $email)) {
        $messageBag->add('a', 'One or more required fields are not completed');
        return false;
    }

    $sql = "SELECT * FROM tbl_customers WHERE email = :email";
    $q = $db->prepare($sql);
    $q->bindParam(':email', $email);
    $q->execute();

    if ($q->rowCount() > 0) {
        $messageBag->add('a', 'This user already exists');
        return false;
    }

    $lastname = $_SESSION['user']['username'];

    $sql = "SELECT id FROM tbl_users WHERE lastname = '$lastname'";
    $q = $db->prepare($sql);
    $q->execute();

    $user_id = $q->fetch();


    $sql = "INSERT INTO tbl_customers (name, address, housenumber, postcode, city, country, phone, email, customerLimit, tbl_users_id)
            VALUES (:name, :address, :housenumber, :postcode, :city, :country, :phone, :email, :customerLimit, '$user_id[0]')";

    $q = $db->prepare($sql);
    $q->bindParam(':name', $name);
    $q->bindParam(':address', $address);
    $q->bindParam(':housenumber', $housenumber);
    $q->bindParam(':postcode', $postcode);
    $q->bindParam(':city', $city);
    $q->bindParam(':country', $country);
    $q->bindParam(':phone', $phone);
    $q->bindParam(':email', $email);
    $q->bindParam(':customerLimit', $limit);
    $q->execute();

    return true;
}

function editContact($id, $name, $address, $housenumber, $postcode, $city, $country, $phone, $email, $limit) {
    global $db, $messageBag;

    if ( empty($name || $email)) {
        $messageBag->add('a', 'One or more required fields are not completed');
        return false;
    }

    $sql = "UPDATE tbl_customers SET name = :name,
                                address = :address,
                                housenumber = :housenumber,
                                postcode = :postcode,
                                city = :city,
                                country = :country,
                                phone = :phone,
                                email = :email,
                                customerLimit = :limit
                                WHERE id = :id";

    $q = $db->prepare($sql);
    $q->bindParam(':id', $id);
    $q->bindParam(':name', $name);
    $q->bindParam(':address', $address);
    $q->bindParam(':housenumber', $housenumber);
    $q->bindParam(':postcode', $postcode);
    $q->bindParam(':city', $city);
    $q->bindParam(':country', $country);
    $q->bindParam(':phone', $phone);
    $q->bindParam(':email', $email);
    $q->bindParam(':limit', $limit);
    $q->execute();

    return true;
}
