<?php
session_start();

if (!isset($_SESSION['nom'])) {
    header("Location: inscription.php");
    exit();
}
$nom = htmlspecialchars($_SESSION['nom']);
?>
<?php
ob_start();
$id=htmlspecialchars($_SESSION['id'] ?? 'offre');
$nom = htmlspecialchars($_SESSION['nom'] ?? 'Utilisateur');
$stpost=htmlspecialchars($_SESSION['stpost'] ?? 'postuler');
$space=htmlspecialchars($_SESSION['space'] ?? 'postuler');
$email=htmlspecialchars($_SESSION['email'] ?? 'postuler');
$tel=htmlspecialchars($_SESSION['tel'] ?? 'postuler');
$age=htmlspecialchars($_SESSION['age'] ?? 'postuler');
$success4 = $_SESSION['success4'] ?? '10';
$done=$_SESSION['done'] ?? '10';
$mal=htmlspecialchars($_SESSION['mal'] ?? 'postuler');
$admin = htmlspecialchars($_SESSION['admin'] ?? 'postuler');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidat</title>
    <link rel="stylesheet" href="fichier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
</head>
<body class="boby2">
  <div class="nexist"> 
 <input type="checkbox" id="toggle-modal2" class="modal-state2">
<label for="toggle-modal2" class="modal-open-button2" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"  viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></label> 

<div class="modal-overlay2">
    <div class="modal-box2">
<ul class="side-panel2">
<div class="cv2"><img class="logo22" src="http://localhost/portfolio\logoAvicenne.png">
  <svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor"  viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg><a onclick="showSkills('home')" class="home"><p class="moi1">Home</p></a><br><br><br><br>
                <a onclick="showSkills('post')"  class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
</svg><p class="moi">Postuler</p></a><br><br><br><br>
                <a  onclick="showSkills('suivre')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg><p class="moi"> Suivre la condidature</p></a><br><br><br><br>
                <a  onclick="showSkills('envoyer')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg><p class="moi2">envoyer des messages</p></a><br><br><br><br>
</ul></div></div></div></div>  
<div class="exist">         
<div class="cv2"><img class="logo22" src="http://localhost/portfolio\logoAvicenne.png">
  <svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor"  viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg><a onclick="showSkills('home')" class="home"><p class="moi1">Home</p></a><br><br><br><br>
                <a onclick="showSkills('post')"  class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
</svg><p class="moi">Postuler</p></a><br><br><br><br>
                <a  onclick="showSkills('suivre')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg><p class="moi"> Suivre la condidature</p></a><br><br><br><br>
                <a  onclick="showSkills('envoyer')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg><p class="moi2">envoyer des messages</p></a>
</div></div>
<main>
<?php
$section = $_GET['section'] ?? 'post';
?>              
<div class=cv3> 
    <span class="usser"></span>
    <span class="user3">Espace Candidats</span>
    <span class="navving">
    <a href="http://localhost/cours/inscription.php"><svg xmlns="http://www.w3.org/2000/svg" class="user" width="33" height="33" fill="currentColor" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg></a>
       <svg xmlns="http://www.w3.org/2000/svg" class="user2"  width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg> 
    </span>
</div>
<div class="skills-section " id="post" >
<span class="usser2"></span>
<span class=cv> 
            <form action="recrutement.php" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="form_id" value="form2">
            <p class="profil"> Postulez dès maintenant et bonne chance pour rejoindre la famille de la Clinique Avicenne. </p><hr class="hr"><br>
            <div class="grid2"><label  for="city" ><strong  required>Nom complet:</strong></label><br><br>
            <input  type="text" id="nom" name="nom" class="input1"  value="<?= $nom ?>" ></div>
            <div class="grid2"><label  for="zip-code"><strong  style="margin-top:5px" >Email:</strong></label><br><br>
            <input  type="text" id="email" name="email"  class="input1" placeholder="nom@example.com"></div>
            <div class="grid2"><label  for="zip-code"><strong  style="margin-top:5px" >Contact:</strong></label><br><br>
            <input  type="text" id="tel" name="tel"  class="input1" placeholder="+212601020304"></div>
            <div class="grid2"><label  for="zip-code"><strong  style="margin-top:5px" >Date de naissance:</strong></label><br><br>
            <input  type="text" id="age" name="age"  class="input1" placeholder="2000-01-01"></div><br><br><br><br>
            <p class="stage2">vous postulez pour  :
             <label for="stage"  >Stage</label>
            <input type="radio" id="stage" name="stage" value="stage" required checked  onclick="showSkill('stage44')">
            <label for="emploi" >Emploi</label>
            <input type="radio" id="emploi" name="stage" value="emploi" required  onclick="showSkill('emploi44')"></p>
            <div class="skill-section " id="stage44" style="display:block">
            <div class="grid2"><label  for="space"><strong  style="margin-top:5px" >Votre spécialité :</strong></label><br><br>
            <input  type="text" id="space" name="space"  class="input1" placeholder="votre spécialité"></div>
            <div class="grid21"><label  for="debut"><strong  style="margin-top:5px" >Date Début Stage</strong></label><br><br>
            <input type='hidden' name='success4' value='5'>
            <input  type="date" id="debut" name="debut"  class="input1"></div>
            <div class="grid21"><label  for="fin"><strong  style="margin-top:5px" >Date Fin Stage</strong></label><br><br>
            <input  type="date" id="fin" name="fin"  class="input1"></div>
            <div class="grid2" >
            <label for="stpost" class="stage">Stage souhaité:</label><br><br>
            <select id="stpost" name="stpost" class="stage3" >
           <?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT offre, description ,type FROM offre";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $offre = htmlspecialchars($row['offre']);
            $description = htmlspecialchars($row['description']);
            $type = htmlspecialchars($row['type']);
            if($type=='stage'){
            echo "
                <div>
                <span class='usser25'></span>
                    <p class='offree2'>
                        <strong ><u class='strong'> <option value='$offre'>$offre</option></u><strong><br>
                    </p> </div>";
                    }} }$mysqli->close(); ?> 
            <option value="autre">Autre</option>
            </select></div>
            <div class="grid22"><label  for="si" ><strong  required>Si autre que proposez-vous:</strong></label><br><br>
            <input  type="text" id="si" name="si" class="input1" placeholder="votre proposition"></div>
            <div class="grid23"><label for="cv" class="stage">Déposez votre CV:</label><br><br>
            <input type="file"  name="cv" id="cv" accept=".pdf,.doc,.docx" ><br><br><br></div></div>
            <div class="skill-section " id="emploi44" style="display:none">
              <div class="grid2"><label  for="space2"><strong  style="margin-top:5px" >Votre spécialité :</strong></label><br><br>
            <input  type="text" id="space2" name="space2"  class="input1" placeholder="votre spécialité"></div>
            <div class="grid3"><label  for="debut2"><strong  style="margin-top:5px" >École de formation:

</strong></label><br><br>
            <input type='hidden' name='success4' value='5'>
            <input  type="text" id="debut2" name="debut2"  class="input1"  placeholder="École de formation"></div>
            <div class="grid3"><label  for="fin2"><strong  style="margin-top:5px" >Durée d'expérience: </strong></label><br><br>
            <input  type="text" id="fin2" name="fin2"  class="input1"  placeholder="n ans"></div>
            <div class="grid2" >
            <label for="stpost2" class="stage">Emploi souhaité:</label><br><br>
            <select id="stpost2" name="stpost2" class="stage3" >
            <?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT offre, description ,type FROM offre";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $offre = htmlspecialchars($row['offre']);
            $description = htmlspecialchars($row['description']);
            $type = htmlspecialchars($row['type']);
            if($type=='emploi'){
            echo "
                <div>
                <span class='usser25'></span>
                    <p class='offree2'>
                        <strong ><u class='strong'> <option value='$offre'>$offre</option></u><strong><br>
                    </p> </div>";
                    }} }$mysqli->close(); ?> 
            <option value="autre">Autre</option>
            </select></div>
            <div class="grid22"><label  for="si2" ><strong  required>Si autre que proposez-vous:</strong></label><br><br>
            <input  type="text" id="si2" name="si2" class="input1" placeholder="votre proposition"></div>
            <div class="grid23"><label for="cv2" class="stage">Déposez votre CV :</label><br><br>
            <input type="file"  name="cv2" id="cv2" accept=".pdf,.doc,.docx" ><br><br><br></div></div><hr class="hr">
            <br><button type="submit"  class="button31"  > Postuler</button><br><br><br><br><br><br>
</form></span>
<div class="nothing"><?php
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}

$msg = "";


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['form_id'])) {
    $stageType = $_POST['stage'] ?? "";

    // Cas formulaire stage
    if ($_POST['form_id'] === "form2" && $stageType === "stage") {
        if (
            !empty(trim($_POST['nom'])) &&
            !empty(trim($_POST['email'])) &&
            !empty($_POST['tel']) &&
            !empty($_POST['age']) &&
            !empty($_POST['stpost']) &&
            isset($_POST['si']) &&
            !empty($_POST['space']) &&
            !empty($_POST['debut']) &&
            !empty($_POST['fin']) &&
            !empty($_POST['success4']) &&
            isset($_FILES['cv']) && $_FILES['cv']['error'] === 0
        ) {
            $nom = trim($_POST['nom']);
            $email = trim($_POST['email']);
            $tel = $_POST['tel'];
            $age = $_POST['age'];
            $stage = $_POST['stage'];
            $stpost = $_POST['stpost'];
            $si = $_POST['si'];
            $space = $_POST['space'];
            $debut = $_POST['debut'];
            $fin = $_POST['fin'];
             $success4 = $_POST['success4'];
            $cv_content = file_get_contents($_FILES['cv']['tmp_name']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $_SESSION['msg'] = "❌ Email invalide.";
            } else {
               
                $checkEmail = $mysqli->prepare("SELECT COUNT(*) FROM stage WHERE email = ?");
                $checkEmail->bind_param("s", $email);
                $checkEmail->execute();
                $checkEmail->bind_result($count);
                $checkEmail->fetch();
                $checkEmail->close();

                if ($count > 0) {
                     $_SESSION['msg'] = "❌ Cet email est déjà utilisé pour une candidature.";
                } else {
                    $sql1 = "UPDATE inscription SET success4 = ? WHERE nom = ?";
                            $stmt1 = $mysqli->prepare($sql1);
                            if ($stmt1) {
                        $stmt1->bind_param("ss", $success4, $nom);
                        if ($stmt1->execute()) {
                            $_SESSION['success4'] = $success4;}}
                    $sql = "INSERT INTO stage
                            (nom, email, tel, age, stage, stpost, si, space, debut, fin, cv ) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $mysqli->prepare($sql);
                    if ($stmt) {
                        $stmt->bind_param("sssssssssss", 
                            $nom, $email, $tel, $age, $stage, $stpost, $si, $space, $debut, $fin, $cv_content);
                        if ($stmt->execute()) {
                            $_SESSION['nom'] = $nom;
                            $_SESSION['email'] = $email;
                            $_SESSION['tel'] = $tel;
                            $_SESSION['age'] = $age;
                            $_SESSION['stage'] = $stage;
                            $_SESSION['stpost'] = $stpost;
                            $_SESSION['si'] = $si;
                            $_SESSION['space'] = $space;
                            $_SESSION['debut'] = $debut;
                            $_SESSION['fin'] = $fin;
                            $_SESSION['cv'] = $cv_content;
                              $msg  = "✅ Données enregistrées avec succès.";
                        } else {
                              $msg  = "❌ Erreur lors de l'enregistrement : " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                          $msg  = "❌ Erreur de préparation : " . $mysqli->error;
                    }
                }
            }
        } else {
              $msg  = "❌ Veuillez remplir tous les champs obligatoires (stage).";
        }
    } else if ($_POST['form_id'] === "form2" && $stageType === "emploi") {
        if (
            !empty(trim($_POST['nom'])) &&
            !empty(trim($_POST['email'])) &&
            !empty($_POST['tel']) &&
            !empty($_POST['age']) &&
            !empty($_POST['stpost2']) &&
            isset($_POST['si2']) &&
            !empty($_POST['space2']) &&
            !empty($_POST['debut2']) &&
            !empty($_POST['fin2']) &&
            !empty($_POST['success4']) &&
            isset($_FILES['cv2']) && $_FILES['cv2']['error'] === 0
        ) {
            $nom = trim($_POST['nom']);
            $email = trim($_POST['email']);
            $tel = $_POST['tel'];
            $age = $_POST['age'];
            $stage = $_POST['stage'];
            $stpost2 = $_POST['stpost2'];
            $si2 = $_POST['si2'];
            $space2 = $_POST['space2'];
            $debut2 = $_POST['debut2'];
            $fin2 = $_POST['fin2'];
            $success4 = $_POST['success4'];
            $cv_content2 = file_get_contents($_FILES['cv2']['tmp_name']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $_SESSION['msg'] = "❌ Email invalide.";
            } else {
             $sql1 = "UPDATE inscription SET success4 = ? WHERE nom = ?";
                            $stmt1 = $mysqli->prepare($sql1);
                            if ($stmt1) {
                        $stmt1->bind_param("ss", $success4, $nom);
                        if ($stmt1->execute()) {
                            $_SESSION['success4'] = $success4;}}
                $sql = "INSERT INTO emploi 
                        (nom, email, tel, age, stage, stpost2, si2, space2, debut2, fin2, cv2) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $mysqli->prepare($sql);
                if ($stmt) {
                    $stmt->bind_param("sssssssssss", 
                        $nom, $email, $tel, $age, $stage, $stpost2, $si2, $space2, $debut2, $fin2, $cv_content2);
                    if ($stmt->execute()) {
                        $_SESSION['nom'] = $nom;
                        $_SESSION['email'] = $email;
                        $_SESSION['nom'] = $nom;
                        $_SESSION['email'] = $email;
                    $_SESSION['tel'] = $tel;
                    $_SESSION['age'] = $age;
                    $_SESSION['stage'] = $stage;
                    $_SESSION['stpost2'] = $stpost2;
                    $_SESSION['si2'] = $si2;
                    $_SESSION['space2'] = $space2;
                    $_SESSION['debut2'] = $debut2;
                    $_SESSION['fin2'] = $fin2;
                    $_SESSION['cv2'] = $cv_content2;
                         $msg = "✅ Données enregistrées avec succès.";
                    } else {
                         $_SESSION['msg']= "❌ Erreur lors de l'enregistrement : " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                     $_SESSION['msg'] = "❌ Erreur de préparation : " . $mysqli->error;
                }
            }
        } else {
             $_SESSION['msg'] = "❌ Veuillez remplir tous les champs obligatoires (emploi).";
        }
    header("Location:  ". $_SERVER['PHP_SELF'] . "#post");
    ob_end_flush();
    exit();}
else if(isset($_POST['form_id'])) {
  $msg2 = "";
    if ($_POST['form_id'] === "form1") {

      if (
        isset($_POST['lettre']) )
        {
        $lettre = trim($_POST['lettre']);
        $id = intval($_POST['id_envoyer']);
            $sql = "UPDATE inscription SET lettre = ? WHERE id = ?"; 
            $stmt = $mysqli->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("si" ,
                    $lettre ,$id);

                if ($stmt->execute()) {
                    $_SESSION['lettre'] = $lettre;
                } else {
                     $_SESSION['msg2'] = "❌ Erreur lors de l'enregistrement : " . $stmt->error;
                }
                $stmt->close();
            } else {
                 $_SESSION['msg2'] = "❌ Erreur de préparation : " . $mysqli->error;
            }
        
   }echo $msg2;
}}echo $msg;
 
}
?></div>
</main>



<script>
function showSkills(categoryId) {
  // cacher toutes les sections
  const allSections = document.querySelectorAll('.skills-section');
  allSections.forEach(section => {
    section.style.display = 'none';
  });

  // afficher la bonne
  document.getElementById(categoryId).style.display = 'block';

  localStorage.setItem("activeSection", categoryId);
}
window.onload = function() {
  const savedSection = localStorage.getItem("activeSection") || "home"; 
  showSkills(savedSection);
}
function showSkill(categoryId) { const allSections = document.querySelectorAll('.skill-section'); allSections.forEach(section => { section.style.display = 'none'; }); document.getElementById(categoryId).style.display = 'block'; }
</script>

<div class="root"><div>
    <div class="candidat">
 <div class="skills-section" id="suivre" style="margin-top: 300px;" >
<?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT success4 , done , mal FROM inscription where nom ='$nom'";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $success4 = htmlspecialchars($row['success4']);
            $done = htmlspecialchars($row['done']);
          $mal = htmlspecialchars($row['mal']);}} 
if ($success4 == '5') {
    if ($mal == '5') {
        echo '
    <p class="attentive2">Veuillez suivre attentivement votre candidature</p><hr class="hr3">
  <div class="stepper-box2"> <div class="stepper-step stepper-completed"> <div class="stepper-circle"> 
  <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" >
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
  </path> </svg> </div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Envoi de votre candidature</div>
  <div class="stepper-status">effectué</div>
  </div> </div></div> <div class="stepper-box2">
  <div class="stepper-step stepper-completed"> 
  <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" > 
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
  </path> </svg> </div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Traitement de la candidature</div> 
  <div class="stepper-status">effectué</div> </div></div></div> <div class="stepper-box2"> <div class="stepper-step stepper-completed">
  <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" >
  <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
  </path> </svg> </div> <div class="stepper-content"> <div class="stepper-title">La réponse</div> 
  <div class="stepper-status2">Refuser</div> </div> </div></div>' ;}
elseif ( $done == '5'){
  echo'
 <p class="attentive2">Veuillez suivre attentivement votre candidature</p>
    <hr class="hr3"> <div class="stepper-box"> <div class="stepper-step stepper-completed">
       <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" > 
        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
        </path> </svg> </div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Envoi de votre candidature</div> <div class="stepper-status">effectué</div> 
      </div> </div> </div> <div class="stepper-box2"> 
        <div class="stepper-step stepper-completed"> 
          <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" > 
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
            </path> </svg> </div> <div class="stepper-line"></div> <div class="stepper-content"> 
  <div class="stepper-title">Traitement de la candidature</div> <div class="stepper-status">effectué</div> 
</div></div></div> <div class="stepper-box2"> <div class="stepper-step stepper-completed">
   <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" > 
    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" >
    </path> </svg> </div> <div class="stepper-content"> <div class="stepper-title">La réponse</div> <div class="stepper-status">Accepter</div> </div> </div> </div> ';
} 
else {
  echo'<p class="attentive2">Veuillez suivre attentivement votre candidature</p><hr class="hr3"> <div class="stepper-box"> <div class="stepper-step stepper-completed"> <div class="stepper-circle"> <svg viewBox="0 0 16 16" class="bi bi-check-lg" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" > <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" ></path> </svg> </div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Envoi de votre candidature</div> <div class="stepper-status">effectué</div> </div> </div><br> <div class="stepper-step stepper-active"> <div class="stepper-circle">2</div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Traitement de la candidature</div> <div class="stepper-status">En cours</div> </div></div><br> <div class="stepper-step stepper-pending"> <div class="stepper-circle">3</div> <div class="stepper-content"> <div class="stepper-title">La réponse</div> <div class="stepper-status">En attente</div> </div> </div> <?php endif; ?>
';
}}else{
  echo'<p class="attentive">Veuillez suivre attentivement votre candidature</p><hr class="hr3"> <br><br> <div class="stepper-step stepper-pending"> <div class="stepper-circle">1</div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Envoi de votre candidature</div> <div class="stepper-status">n est pas effectué</div> </div></div> <br> <div class="stepper-step stepper-pending"> <div class="stepper-circle">2</div> <div class="stepper-line"></div> <div class="stepper-content"> <div class="stepper-title">Traitement de la candidature</div> <div class="stepper-status">En attente</div> </div></div><br> <div class="stepper-step stepper-pending"> <div class="stepper-circle">3</div> <div class="stepper-content"> <div class="stepper-title">La réponse</div> <div class="stepper-status">En attente</div> </div> </div>';
}
  ?>
<br> <?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT admin FROM emploi WHERE nom = '$nom'" ;
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $admin = htmlspecialchars($row['admin']);
            if(!empty($admin)){
            echo "
                <p class='admin'> NB: $admin </p>";} }}$mysqli->close(); ?> 
               
                <?php
                 $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }
     $sql1 = "SELECT admin FROM stage WHERE nom = '$nom'" ;
    $result = $mysqli->query($sql1);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $admin = htmlspecialchars($row['admin']);
            if(!empty($admin)){
            echo "
                <p class='admin'> NB: $admin </p>";} }}$mysqli->close(); ?> </div></div>
                <?php
                 $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }
?>
<div id="envoyer" class="skills-section"><div class="candidat2"><?php
$mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }
    $sql = "SELECT id FROM inscription WHERE nom = '$nom'";
    $result = $mysqli->query($sql);
    if ($result && $result->num_rows > 0)  {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id']; 
   echo"
    <div style='margin-top: 220px;' >
    <form id='form1' method='POST'>
        <input type='hidden' name='form_id' value='form1'>
        <input type='hidden' name='id_envoyer' value='$id'>
        <input type='text' name='lettre' class='input100' placeholder='Écrire votre message'>
        <button  type='submit' class='button3'> Envoyer</button>
    </form></div>";}}
    else {
      echo"
    <div  style='margin-top: 220px;'>
    <form id='form1' method='POST'>
        <input type='hidden' name='form_id' value='form1'>
        <input type='hidden' name='id_envoyer' value='$id'>
        <input type='text' name='lettre' class='input100' placeholder='Écrire votre message'>
        <button  type='submit' class='button3'> Envoyer</button>
    </form></div> ";
    }

    ?>

<br><br>

    <?php  
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}
$sql = "SELECT lettre
        FROM inscription 
        WHERE nom = ? 
        ORDER BY id DESC 
        LIMIT 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $nom);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
    if (!empty($row['lettre'])) {  
        $lettre = htmlspecialchars($row['lettre']);
        echo "<p class='dernier' style='margin-top: 10px;'>Dernier message envoyé : $lettre</p>";
    }
}

$stmt->close();
$mysqli->close();
?>
 <?php  
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}
$sql = "SELECT admin2
        FROM inscription 
        WHERE nom = ? 
        ORDER BY id DESC 
        LIMIT 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $nom);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $row = $result->fetch_assoc()) {
    if (!empty($row['admin2'])) {  
        $admin2 = htmlspecialchars($row['admin2']);
        echo "<p class='dernier' style='margin-top: 10px;'>Dernier message envoyé par admin : $admin2</p>";
    }
}

$stmt->close();
$mysqli->close();
?></div></div></div><br><br>
<div  class="skills-section active " id="home"><h2 class="mar">Bienvenue dans votre espace, <?= $nom ?> !</H2></div>
<footer>
<div class=cv4><p class="foot">© 2025 Clinique avicenne. tous les droits sont reservés .</p></div>
</footer>

</body>
</html>