<?php 
session_start();
function get_PDO():PDO{
    $host = '127.0.0.1';
    $db   = 'projet_account';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // Set PDO options
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    ];

    try {
        // Create a PDO instance (connect to the database)
    return $pdo = new PDO($dsn, $user, $pass, $options);
    
    } catch (\PDOException $e) {
       // throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function sign_up($mail,$password,$firstname,$lastname){
    if (check_user_not_exist($mail)) {
        $pdo = get_PDO();
        $password = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO users (mail, pass, firstname, lastname) VALUES (?,?,?,?)";
        $stmt = $pdo -> prepare($query);
        if ($stmt -> execute([$mail,$password,$firstname,$lastname])) {
         
        $_SESSION['connected'] = true;
        $_SESSION['firstname'] = $firstname;
        header("location:account.php");   
        }
    }else {
        header("location:mail_error.php");
    }
}

function sign_in($mail, $password){
    $pdo = get_PDO();
    $query = "SELECT * FROM users WHERE mail = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$mail]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['pass'])) {
        $_SESSION['connected'] = true;
        $_SESSION['firstname'] = $user['firstname'];
        header("location:account.php");
    } else {
        header("location:sign_in_error.php");
    }
}


function check_user_not_exist($mail){
    $pdo = get_PDO();
    $query = "SELECT mail FROM users WHERE mail = ?";
    $stmt = $pdo -> prepare($query);
    $stmt -> execute([$mail]);
    $nombreUtilisateur = $stmt -> fetchColumn();
    if ($nombreUtilisateur > 0) {
        return false;
    }else {
        return true;
    }
}


// Fonction pour afficher tous les contenus de la base de données
function afficherContenus() {
    // Connexion à la base de données
    $pdo = get_PDO();

    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($resultats) {
        echo "<h2>Contenu de la base de données :</h2>";
        foreach ($resultats as $row) {
            echo "ID : " . $row['id'] . "<br>";
            echo "Nom : " . $row['lastname'] . "<br>";
            echo "Prénom : " . $row['firstname'] . "<br>";
            // Affichez d'autres colonnes si nécessaire
            echo "<hr>";
        }
    } else {
        echo "Aucun contenu trouvé dans la base de données.";
    }

    // Fermeture de la connexion
    $pdo = null;
}