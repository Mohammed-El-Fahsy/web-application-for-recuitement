<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['form_id'])) {
    if ($_POST['form_id'] === "form1") {
        if (isset($_POST['nom'], $_POST['email'], $_POST['mdp'])) {
            $nom = trim($_POST['nom']);
            $email = trim($_POST['email']);
            $mdp = $_POST['mdp'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message = "❌ Email invalide !";
            } elseif (
                strlen($mdp) < 8 ||
                !preg_match("/[A-Z]/", $mdp) ||
                !preg_match("/[a-z]/", $mdp) ||
                !preg_match("/[0-9]/", $mdp) ||
                !preg_match("/[^A-Za-z0-9]/", $mdp)
            ) {
                $message = "❌ Le mot de passe est invalide !";
            } else {
                $checkStmt = $mysqli->prepare("SELECT id FROM inscription WHERE email = ?");
                $checkStmt->bind_param("s", $email);
                $checkStmt->execute();
                $checkStmt->store_result();

                if ($checkStmt->num_rows > 0) {
                    $message = "❌ Cet email est déjà utilisé.";
                } else {
                    $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO inscription (nom, email, mdp) VALUES (?, ?, ?)";
                    $stmt = $mysqli->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("sss", $nom, $email, $hashedPassword);
                        if ($stmt->execute()) {
                            $_SESSION['nom'] = $nom;  
                            $_SESSION['email'] = $email;
                            header("Location: bienvenu.php");
                            exit();
                        } else {
                            $message = "❌ Erreur lors de l'enregistrement.";
                        }
                        $stmt->close();
                    } else {
                        $message = "❌ Erreur de préparation : " . $mysqli->error;
                    }
                }
                $checkStmt->close();
            }
        } else {
            $message = "❌ Veuillez remplir tous les champs.";
        }
    } elseif ($_POST['form_id'] === "form2") {
        $email = trim($_POST['email']);
        $mdp = $_POST['mdp'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = "❌ Email invalide.";
        } else {
            $stmt = $mysqli->prepare("SELECT id, nom, mdp FROM inscription WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
                if (password_verify($mdp, $row['mdp'])) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['nom'] = $row['nom'];
                    $_SESSION['email'] = $email;
                    $_SESSION['success4'] = '10';
                    $_SESSION['done'] = '10';
                    $_SESSION['mal'] = '10';
                    header("Location: recrutement.php");
                    exit();
                } else {
                    $message = "❌ Mot de passe incorrect.";
                }
            } else {
                $message = "❌ Aucun compte trouvé avec cet email.";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
   <link rel="stylesheet" href="fichier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
</head>
<body>

<main>
  <div class="connextion">
    <div class="skills-section " id="inscrire" class="connex">
    <div class="inscrit "><br><br>
        <div class="loading">
  <svg width="64px" height="48px">
      <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
    <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
  </svg>
</div>
    <strong><p class="inscrit3" >Rejoignez notre communauté </p>
    <p class="inscrit2" >Rejoignez notre communauté pour postuler à nos<br> offres et suivre l’avancement de votre candidature.</p><strong>
<button class="inscrit4" onclick="showSkills('connecter')">Se connecter</button></div>
    <div id="form" >
            <form action="" method="POST" class="contact"  ><br>
             <input type="hidden" name="form_id" value="form1">
            <img class="logo" src="http://localhost/portfolio\logoAvicenne.png">
            <div class="hi">
            <p class="profil33">Connectez-vous pour accéder à votre profil.</p><BR>
            <label for="city" ><strong class="nom">Nom complet:</strong> </label><br><br>
            <input class="contact-elm"  type="text" id="nom" name="nom" placeholder="votre nom et prénom" required><br>
            <br>
            <label  for="city"><strong class="nom">Email:</strong></label><br><br>
            <input  class="contact-elm" type="text" id="email" name="email" placeholder="nom@example.com" required><br>
            <br>
            <label  for="zip-code"><strong class="nom" style="margin-top:5px">Mot de passe:</strong></label><br><br>
            <input class="contact-elm" type="text" id="mdp" name="mdp" placeholder="Abc20@#?" required>
            <p>Minimum 8 caractères avec majuscule, minuscule, chiffre et symbole</p><br><br>
             <button type="submit" class="inscriree" placeholder="Abc20@#?" > Créer un compte</button>
            </form>
    </div>
     
    </div>
</div>
<div class="skills-section active" id="connecter">
<div class="inscrit"><br><br>
    <div class="loading">
  <svg width="64px" height="48px">
      <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
    <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
  </svg>
</div>
    <strong><p class="inscrit3" >Vous n’avez pas de compte ? </p>
    <p class="inscrit2" >Créer un compte maintenant pour postuler à nos offres et suivre l’avancement de votre candidature. </p><strong>
<button class="inscrit44" onclick="showSkills('inscrire')">S'inscrire</button></div>
    <div id="actualiser">
            <form action="" method="POST" class="contact"  ><br>
             <input type="hidden" name="form_id" value="form2">
            <img class="logo" src="http://localhost/portfolio\logoAvicenne.png">
            <div class="hi">
            <p class="profil33">Connectez-vous pour accéder à votre espace personnel.</p><BR>
            <label  for="city" ><strong class="nom" required>Email:</strong></label><br><br>
            <input  class="contact-elm" type="text" id="email" name="email" placeholder="nom@example.com" ><br>
            <br>
            <label  for="zip-code"><strong class="nom" style="margin-top:5px" >Mot de passe:</strong></label><br><br>
            <input class="contact-elm" type="password" id="mdp" name="mdp" placeholder="Abc20@#?" >
            <p>Minimum 8 caractères avec majuscule, minuscule, chiffre et symbole</p><br><br>
            <button type="submit" class="inscriree22" placeholder="Abc20@#?" > Se connecter</button>
            </form>
    </div>
</div>
</div></div>
<div class="inscription">
  <div class="skill-section active " id="inscrir">
    <div id="form" >
      <form action="" method="POST" class="contact">
        <input type="hidden" name="form_id" value="form1">

        <img class="logo" src="http://localhost/portfolio/logoAvicenne.png" alt="Logo">

        <div class="hi">
          <p class="profil33">Connectez-vous pour accéder à votre profil.</p>

          <label for="nom"><strong class="nom">Nom complet:</strong></label><br><br>
          <input class="contact-elm" type="text" id="nom" name="nom" placeholder="Votre nom et prénom" required><br><br>

          <label for="email"><strong class="nom">Email:</strong></label><br><br>
          <input class="contact-elm" type="text" id="email" name="email" placeholder="nom@example.com" required><br><br>

          <label for="mdp"><strong class="nom">Mot de passe:</strong></label><br><br>
          <input class="contact-elm" type="password" id="mdp" name="mdp" placeholder="Abc20@#?" required>
          <p>Minimum 8 caractères avec majuscule, minuscule, chiffre et symbole</p>
          <div >Voulez vous connecter à votre profil ? <a  onclick="showSkill('connecte')" style="color:blue">Se connecter</a></div><br><br><br>
          <button type="submit" class="inscriree">Créer un compte</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="skill-section" id="connecte">
  <div id="actualiser">
    <form action="" method="POST" class="contact">
      <input type="hidden" name="form_id" value="form2">

      <img class="logo" src="http://localhost/portfolio/logoAvicenne.png" alt="Logo">

      <div class="hi">
        <p class="profil33">Connectez-vous pour accéder à votre espace personnel.</p>

        <label for="email2"><strong class="nom">Email:</strong></label><br><br>
        <input class="contact-elm" type="text" id="email2" name="email" placeholder="nom@example.com" required><br><br>

        <label for="mdp2"><strong class="nom">Mot de passe:</strong></label><br><br>
        <input class="contact-elm" type="password" id="mdp2" name="mdp" placeholder="Abc20@#?" required>
        <p>Minimum 8 caractères avec majuscule, minuscule, chiffre et symbole</p>
        <div>Vous n’avez pas de compte ?<a  onclick="showSkill('inscrir')" style="color:blue">S'inscrire</a></div><br><br><br>
        <button type="submit" class="inscriree22">Se connecter</button>
      </div>
    </form>
    
  </div>
</div>

 <script>
    function showSkills(categoryId) {
      const allSections = document.querySelectorAll('.skills-section');
      allSections.forEach(section => {
        section.classList.remove('active');
      });
      document.getElementById(categoryId).classList.add('active');
    }
    function showSkill(categoryId) {
      const allSections = document.querySelectorAll('.skill-section');
      allSections.forEach(section => {
        section.classList.remove('active');
      });
      document.getElementById(categoryId).classList.add('active');
    }
</script>
     


</main>

<?php if ($message): ?>
    <div class="message"><?= htmlspecialchars($message) ?></div>
<?php endif; ?>

</body>
</html>
