<?php
session_start();
ob_start();



$nom = htmlspecialchars($_SESSION['nom'] ?? 'Utilisateur');
$stpost=htmlspecialchars($_SESSION['stpost'] ?? 'postuler');
$space=htmlspecialchars($_SESSION['space'] ?? 'postuler');
$email=htmlspecialchars($_SESSION['email'] ?? 'postuler');
$tel=htmlspecialchars($_SESSION['tel'] ?? 'postuler');
$age=htmlspecialchars($_SESSION['age'] ?? 'postuler');
$offre=htmlspecialchars($_SESSION['offre'] ?? 'offre');
$description=htmlspecialchars($_SESSION['description'] ?? 'offre');
$type=htmlspecialchars($_SESSION['type'] ?? 'offre');
$id=htmlspecialchars($_SESSION['id'] ?? 'offre');
$nom = htmlspecialchars($_SESSION['nom'] ?? 'emploi');
$lettre = htmlspecialchars($_SESSION['lettre'] ?? 'emploi');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
</svg><a onclick="showSkills('home')" class="home"><p class="moi1">emploi</p></a><br><br><br><br>
                <a onclick="showSkills('suivre')"  class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
</svg><p class="moi">stage</p></a><br><br><br><br>
                <a  onclick="showSkills('post')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg><p class="moi"> gestion des offres</p></a><br><br><br><br>
                <a  onclick="showSkills('envoyer')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg><p class="moi2">envoyer des messages</p></a><br><br><br><br>
</ul></div></div></div></div>  
<div class="exist">         
<div class="cv2"><img class="logo22" src="http://localhost/portfolio\logoAvicenne.png">
  <svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor"  viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"/>
</svg><a onclick="showSkills('home')" class="home"><p class="moi1">emploi</p></a><br><br><br><br>
                <a onclick="showSkills('suivre')"  class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
  <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
</svg><p class="moi">stage</p></a><br><br><br><br>
                <a  onclick="showSkills('post')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg><p class="moi"> gestion des offres</p></a><br><br><br><br>
                <a  onclick="showSkills('envoyer')" class="home"><svg xmlns="http://www.w3.org/2000/svg" class="homee22" width="26" height="26" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg><p class="moi2">envoyer des messages</p></a><br><br><br><br>
</div></div>
<div class=cv3> 
    <span class="usser"></span>
    <span class="user3">Espace Candidats</span>
    <span class="navving">
    <a href="http://localhost/cours/inscription.php"><svg xmlns="http://www.w3.org/2000/svg" class="user" width="33" height="33" fill="currentColor" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg></a>
       <svg xmlns="http://www.w3.org/2000/svg" class="user2" onclick="showSkills('profil')" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg> 
    </span>
</div>
</main><br><br><br> 
<div class="skills-section" id="gerer">
   <div class="nexist"><br><br><br></div>
    <div class="gestion"><?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT offre, description ,type ,id FROM offre";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $offre = htmlspecialchars($row['offre']);
            $description = htmlspecialchars($row['description']);
            $type = htmlspecialchars($row['type']);
            $id = htmlspecialchars($row['id']);
            echo "
                <div>
                    <p class='offree25'>
                        <strong ><u class='strong'>offre ( $type ) :$offre</u><strong><br>
                        $description
                    </p><br>
                    <form method='POST'>
                <input type='hidden' name='id_supprimer2' value='$id'>
                <button class='btn' name='supprimer2' title='Supprimer2'>
                    <svg viewBox='0 0 15 17.5' height='17.5' width='15' xmlns='http://www.w3.org/2000/svg'>
                        <path transform='translate(-2.5 -1.25)' d='M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z'/>
                    </svg>
                </button>
            </form>
                </div>
            ";
        }
    } else {
        echo "<p class='offree'>Aucune offre disponible pour le moment.</p>";
    }

    $mysqli->close();
    ?>
</div></div>
<span class="usser262"></span><?php
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['supprimer2'])) {
    $id = intval($_POST['id_supprimer2']);
    $stmt = $mysqli->prepare("DELETE FROM offre WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    ob_end_flush();
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['supprimer3'])) {
    $id = intval($_POST['id_supprimer3']);
    $stmt = $mysqli->prepare("DELETE FROM postuler WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    ob_end_flush();
}
   if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['valider'])) {
    $nom = trim($_POST['id_valider']);
    $done =trim($_POST['done']);
    $sql1 = "UPDATE inscription SET done = ? WHERE nom = ?";
    $stmt1 = $mysqli->prepare($sql1);
    if ($stmt1) {
    $stmt1->bind_param("ss", $done, $nom);
    if ($stmt1->execute()) {
    $_SESSION['done'] = $done;}}
    ob_end_flush();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['envoyer'])) {
    $id = intval($_POST['id_envoyer']);
    $admin = htmlspecialchars($_POST['admin']);
    $sql = "UPDATE emploi SET admin = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("si", $admin, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: admin.php");
            exit();
        } else {
            echo "❌ Aucun enregistrement trouvé avec cet ID.";
        }

        $stmt->close();
    } else {
        echo "Erreur préparation : " . $mysqli->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['envoyer3'])) {
    $id = intval($_POST['id_envoyer3']);
    $admin = htmlspecialchars($_POST['admin']);
    $sql = "UPDATE stage SET admin = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("si", $admin, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: admin.php");
            exit();
        } else {
            echo "❌ Aucun enregistrement trouvé avec cet ID.";
        }

        $stmt->close();
    } else {
        echo "Erreur préparation : " . $mysqli->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['envoyer2'])) {
   $id = $_POST['candidat']; 
    $admin2 = htmlspecialchars($_POST['admin2']);
    $sql = "UPDATE inscription SET admin2 = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("si", $admin2, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Succès
            header("Location: admin.php");
            exit();
        } 

        $stmt->close();
    } else {
        echo "Erreur préparation : " . $mysqli->error;
    }
}


else if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['supprimer'])) {
    $id = intval($_POST['id_supprimer']);
    $stmt = $mysqli->prepare("DELETE FROM emploi  WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    ob_end_flush();
}
else if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['refuser'])) {
    $nom = trim($_POST['id_refuser']);
    $mal =trim($_POST['mal']);
    $sql1 = "UPDATE inscription SET mal = ? WHERE nom = ?";
    $stmt1 = $mysqli->prepare($sql1);
    if ($stmt1) {
    $stmt1->bind_param("ss", $mal, $nom);
    if ($stmt1->execute()) {
    $_SESSION['mal'] = $mal;}}
    ob_end_flush();
} ?><div class="exist"><br></div>
 <div  class="skills-section active " id="home"><div class="nexist"><br><br><br></div>
   <span class="usser26"></span>
   <form action="admin.php" method="POST" enctype="multipart/form-data" >
            <div class="grid20" >
            <select id="stpostt2" name="stpostt2" class="stage3" >
               <option value="autre">tous</option>
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
           
            </select></div>
            <br><button type="submit"  class="button30" name='consulter2'> Consulter</button><br><br><br>
</form><?php
$mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);}
    $sql = "SELECT id , nom, email ,tel ,age,stage,stpost2,cv2,space2,debut2,fin2 FROM emploi";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['consulter2'])) {
   $stpostt2 = $_POST['stpostt2'];
   $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);}
    if($stpostt2=="autre"){
      $sql = "SELECT id , nom, email ,tel ,age,stage,stpost2,cv2,space2,debut2,fin2 FROM emploi";
    }
    else{
    $sql = "SELECT id , nom, email ,tel ,age,stage,stpost2,cv2,space2,debut2,fin2 FROM emploi where stpost2= '$stpostt2'";}}
    $result = $mysqli->query($sql);
    if ($result && $result->num_rows > 0)  {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $nom = htmlspecialchars($row['nom']);
            $email = htmlspecialchars($row['email']);
            $tel = htmlspecialchars($row['tel']);
            $age = htmlspecialchars($row['age']);
            $stage = htmlspecialchars($row['stage']);
            $stpost2 = htmlspecialchars($row['stpost2']);
            $space2 = htmlspecialchars($row['space2']);
            $cv2 = htmlspecialchars($row['cv2']);
            $debut2 = htmlspecialchars($row['debut2']);
            $fin2 = htmlspecialchars($row['fin2']);
            $cv2 = htmlspecialchars($row['cv2']);

            echo "
  <span class='card-client'>
        <div class='user-picture'>
        <svg viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'>
            <path d='M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z'></path>
        </svg>
    </div>
    <p class='name-client'>
     $nom 
    <span>$stpost2 </span>
</p>

    <div class='social-media'>
    <a href='download.php?id=$id'>

  <svg xmlns='http://www.w3.org/2000/svg' width='30' height='20' fill='#000' viewBox='0 0 512 512'>
    <path d='M376.3 217.9L272 322.2V24c0-13.3-10.7-24-24-24s-24 10.7-24 24v298.2L135.7 217.9c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l128 128c9.4 9.4 24.6 9.4 33.9 0l128-128c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0zM88 456c-13.3 0-24 10.7-24 24s10.7 24 24 24h336c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z'/>
  </svg>
  <span class='tooltip-social'>voir cv</span>
</a>
 <a href='#'>

  <svg xmlns='http://www.w3.org/2000/svg' width='30' height='20' fill='#000' viewBox='0 0 512 512'>
    <path d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm12-200V136c0-6.6-5.4-12-12-12s-12 5.4-12 12v120c0 4.4 2.4 8.4 6.2 10.6l88 48c5.9 3.2 13.3 1.1 16.5-4.8s1.1-13.3-4.8-16.5l-81.9-44.3z'/>
  </svg>
  <span class='tooltip-social'>$fin2</span>
</a>
 <a href='#'>
  
  <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 640 512' fill='#004080' '>
    <path d='M320 0L576 160v32c0 17.7-14.3 32-32 32h-16v288H416V352H352v160H112V224H96c-17.7 0-32-14.3-32-32v-32L320 0zM240 192a16 16 0 1 0 0 32 16 16 0 1 0 0-32zm80 0a16 16 0 1 0 0 32 16 16 0 1 0 0-32zm80 0a16 16 0 1 0 0 32 16 16 0 1 0 0-32z'/>
  </svg>


  <span class='tooltip-social'>$debut2</span>
</a>

        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' >
    <path d='M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm89.6 32h-17.8c-22.2 10.3-46.9 16-71.8 16s-49.6-5.7-71.8-16H134.4C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z'/>
  </svg>
            <span class='tooltip-social'> $space2 </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' >
    <path d='M96 0C78.3 0 64 14.3 64 32V64H48C21.5 64 0 85.5 0 112V448C0 474.5 21.5 496 48 496H336C362.5 496 384 474.5 384 448V112C384 85.5 362.5 64 336 64H320V32C320 14.3 305.7 0 288 0C270.3 0 256 14.3 256 32V64H128V32C128 14.3 113.7 0 96 0zM336 128V160H48V128C48 110.3 62.3 96 80 96H304C321.7 96 336 110.3 336 128zM48 448V192H336V448C336 465.7 321.7 480 304 480H80C62.3 480 48 465.7 48 448z'/>
  </svg>
             <span class='tooltip-social'> $age </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
    <path d='M320 351.9c-15.7 0-31.1-2.4-45.7-7.1-7.4-2.5-15.7-.6-21.4 4.7l-46.1 34.9c-63.5-33.5-114.4-84.3-148-147.8l35.6-46.1c5.3-5.8 7.1-14 4.7-21.4-4.7-14.6-7.1-30-7.1-45.7 0-11.7-9.5-21.2-21.2-21.2H21.2C9.5 102.2 0 111.6 0 123.3 0 304.1 144 448 324.7 448c11.7 0 21.2-9.5 21.2-21.2v-91.8c0-11.7-9.5-21.1-21.2-21.1z'/>
  </svg>
            <span class='tooltip-social'> $tel </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='15' viewBox='0 0 448 512'>
    <path d='M502.3 190.8L327.4 338.3c-22.2 18.5-55.6 18.5-77.8 0L9.7 190.8C3.9 186 0 178.5 0 170.4V96c0-35.3 28.7-64 64-64h384c35.3 0 64 28.7 64 64v74.4c0 8.1-3.9 15.6-9.7 20.4zM0 215.5V416c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V215.5L361.1 345.3c-35.6 29.6-87.6 29.6-123.2 0L0 215.5z'/>
  </svg>
            <span class='tooltip-social'> $email </span>
        </a></div>
           
               <form method='POST'>
                 <input type='hidden' name='id_supprimer' value='$id'>
                <button id='pick' class='callerBtn2' name='supprimer' title='Supprimer'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1 0-2H5V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2.5a1 1 0 0 1 1 1zM11 4H5v9a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4z'/>
  </svg>
        </button>
        </form>
            <form method='POST'>
            <input type='hidden' name='id_refuser' value='$nom'>
            <input type='hidden' name='mal' value='5'>
            <button id='pick' class='callerBtn' name='refuser' title='refuser'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
                    <path fill-rule='evenodd' d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'></path>
                </svg>
                </button>
        </form>
        <form method='POST'>
        <input type='hidden' name='id_valider' value='$nom'>
        <input type='hidden' name='done' value='5'>
         <button id='pick' class='callerBtn' name='valider' title='valider'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M13.485 1.929a.75.75 0 0 1 1.06 1.06l-8.25 8.25a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 0 1 1.06-1.06L6 9.19l7.485-7.26z'/>
  </svg>
        </button>
        </form>
       

     <form method='POST' class='input-place'>
    <input type='hidden' name='id_envoyer' value='$id'>
    <input placeholder='envoyer un message.' class='send-input0' type='text' name='admin'>
    <button class='send22' name='envoyer' title='envoyer'>
		<svg class='send-icon' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'><g><g><path fill='#6B6C7B' d='M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z'></path></g></g></svg>

   </button></form>
         

</span>"; }} ?>
</div> 
<div  class="skills-section  " id="suivre"><div class="nexist"><br><br><br></div>
   <span class="usser26"></span>
   <form action="admin.php" method="POST" enctype="multipart/form-data" >
            <div class="grid20" >
            <select id="stpost" name="stpostt" class="stage3" >
               <option value="autre">tous</option>
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
           
            </select></div>
            <br><button type="submit"  class="button30" name='consulter'> Consulter </button><br><br><br>
</form>
<?php
   $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }
    $sql = "SELECT id ,nom, email ,tel ,age,stage,stpost,cv,debut,fin FROM stage " ;
    if($_SERVER["REQUEST_METHOD"] === "POST"  && isset($_POST['consulter'])){ 
      $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    } 
       $stpostt = $_POST['stpostt'];
      if($stpostt=="autre" ){
    $sql = "SELECT id ,nom, email ,tel ,age,stage,stpost,cv,debut,fin FROM stage " ;}
    else{
      $sql = "SELECT id ,nom, email ,tel ,age,stage,stpost,cv,debut,fin FROM stage where stpost= '$stpostt'";
    }}
    $result = $mysqli->query($sql);
    if ($result && $result->num_rows > 0)  {
        while ($row = $result->fetch_assoc()) {
           $id = $row['id'];
            $nom = htmlspecialchars($row['nom']);
            $email = htmlspecialchars($row['email']);
            $tel = htmlspecialchars($row['tel']);
            $age = htmlspecialchars($row['age']);
            $stage = htmlspecialchars($row['stage']);
            $stpost = htmlspecialchars($row['stpost']);
            $cv = htmlspecialchars($row['cv']);
            $debut = htmlspecialchars($row['debut']);
            $fin = htmlspecialchars($row['fin']);
            $cv = htmlspecialchars($row['cv']);

            echo "
  <span class='card-client'>
        <div class='user-picture'>
        <svg viewBox='0 0 448 512' xmlns='http://www.w3.org/2000/svg'>
            <path d='M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z'></path>
        </svg>
    </div>
    <p class='name-client'>
     $nom 
    <span>$stpost </span>
</p>

    <div class='social-media'>
    <a href='download.php?id=$id'>

  <svg xmlns='http://www.w3.org/2000/svg' width='30' height='20' fill='#000' viewBox='0 0 512 512'>
    <path d='M376.3 217.9L272 322.2V24c0-13.3-10.7-24-24-24s-24 10.7-24 24v298.2L135.7 217.9c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l128 128c9.4 9.4 24.6 9.4 33.9 0l128-128c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0zM88 456c-13.3 0-24 10.7-24 24s10.7 24 24 24h336c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z'/>
  </svg>
  <span class='tooltip-social'>voir cv</span>
</a>
<a href='#'>

 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-align-start' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5'/>
  <path d='M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z'/>
</svg>
  <span class='tooltip-social'>$fin</span>
</a>
 <a href='#'>
  
  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-align-start' viewBox='0 0 16 16'>
  <path fill-rule='evenodd' d='M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5'/>
  <path d='M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1z'/>
</svg>

  <span class='tooltip-social'>$debut</span>
</a>

        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' >
    <path d='M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm89.6 32h-17.8c-22.2 10.3-46.9 16-71.8 16s-49.6-5.7-71.8-16H134.4C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z'/>
  </svg>
            <span class='tooltip-social'> $stpost </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' >
    <path d='M96 0C78.3 0 64 14.3 64 32V64H48C21.5 64 0 85.5 0 112V448C0 474.5 21.5 496 48 496H336C362.5 496 384 474.5 384 448V112C384 85.5 362.5 64 336 64H320V32C320 14.3 305.7 0 288 0C270.3 0 256 14.3 256 32V64H128V32C128 14.3 113.7 0 96 0zM336 128V160H48V128C48 110.3 62.3 96 80 96H304C321.7 96 336 110.3 336 128zM48 448V192H336V448C336 465.7 321.7 480 304 480H80C62.3 480 48 465.7 48 448z'/>
  </svg>
             <span class='tooltip-social'> $age </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
    <path d='M320 351.9c-15.7 0-31.1-2.4-45.7-7.1-7.4-2.5-15.7-.6-21.4 4.7l-46.1 34.9c-63.5-33.5-114.4-84.3-148-147.8l35.6-46.1c5.3-5.8 7.1-14 4.7-21.4-4.7-14.6-7.1-30-7.1-45.7 0-11.7-9.5-21.2-21.2-21.2H21.2C9.5 102.2 0 111.6 0 123.3 0 304.1 144 448 324.7 448c11.7 0 21.2-9.5 21.2-21.2v-91.8c0-11.7-9.5-21.1-21.2-21.1z'/>
  </svg>
            <span class='tooltip-social'> $tel </span>
        </a>
        <a href='#'>
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='15' viewBox='0 0 448 512'>
    <path d='M502.3 190.8L327.4 338.3c-22.2 18.5-55.6 18.5-77.8 0L9.7 190.8C3.9 186 0 178.5 0 170.4V96c0-35.3 28.7-64 64-64h384c35.3 0 64 28.7 64 64v74.4c0 8.1-3.9 15.6-9.7 20.4zM0 215.5V416c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V215.5L361.1 345.3c-35.6 29.6-87.6 29.6-123.2 0L0 215.5z'/>
  </svg>
            <span class='tooltip-social'> $email </span>
        </a></div>
                 <form method='POST'>
                 <input type='hidden' name='id_supprimer3' value='$id'>
                <button id='pick' class='callerBtn2' name='supprimer3' title='Supprimer3'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1 0-2H5V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2.5a1 1 0 0 1 1 1zM11 4H5v9a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V4z'/>
  </svg>
        </button>
        </form>
            <form method='POST'>
            <input type='hidden' name='id_refuser' value='$nom'>
            <input type='hidden' name='mal' value='5'>
            <button id='pick' class='callerBtn' name='refuser' title='refuser'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
                    <path fill-rule='evenodd' d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'></path>
                </svg>
                </button>
        </form>
        <form method='POST'>
        <input type='hidden' name='id_valider' value='$nom'>
        <input type='hidden' name='done' value='5'>
         <button id='pick' class='callerBtn' name='valider' title='valider'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-telephone-fill' viewBox='0 0 16 16'>
    <path fill-rule='evenodd' d='M13.485 1.929a.75.75 0 0 1 1.06 1.06l-8.25 8.25a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 0 1 1.06-1.06L6 9.19l7.485-7.26z'/>
  </svg>
        </button>
        </form>
       

     <form method='POST' class='input-place'>
    <input type='hidden' name='id_envoyer3' value='$id'>
    <input placeholder='envoyer un message.' class='send-input0' type='text' name='admin'>
    <button class='send22' name='envoyer3' title='envoyer3'>
		<svg class='send-icon' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'><g><g><path fill='#6B6C7B' d='M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z'></path></g></g></svg>

   </button></form>
         
</span>"; }} ?>
</div> 
<style>
.card-client {
    display: inline-block;
  background:#1b4744;
  padding-top: 20px;
  padding-bottom: 50px;
  padding-left: 20px;
  padding-right: 20px;
  border: 4px solid rgb(44, 95, 91);
  box-shadow: 0 6px 10px rgb(44, 95, 91);
  border-radius: 10px;
  text-align: center;
  color: #fff;
  font-family: "Poppins", sans-serif;
  transition: all 0.3s ease;
  float:left;
  margin-right:20px;
   margin-bottom:30px;
  width:250px;
  height:280px

    
}

.card-client:hover {
  transform: translateY(-10px);
}
.user-picture {
  overflow: hidden;
  object-fit: cover;
  width: 5rem;
  height: 5rem;
  border: 4px solid white;
  border-radius: 999px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}

.user-picture svg {
  width: 2.5rem;
  fill: currentColor;
}

.name-client {
  margin: 0;
  margin-top: 20px;
  font-weight: 600;
  font-size: 20px;
}

.name-client span {
  display: block;
  font-weight: 200;
  font-size: 18px;
}

.social-media:before {
  content: " ";
  display: block;
  width: 100%;
  height: 2px;
  margin: 20px 0;
  background: white;
}
.social-media a {
  position: relative;
  margin-right: 15px;
  text-decoration: none;
  color: inherit;
}

.social-media a:last-child {
  margin-right: 0;
}

.social-media a svg {
  width: 1.1rem;
  fill: currentColor;
}

/*-- Tooltip Social Media --*/
.tooltip-social {
  background: #262626;
  display: block;
  position: absolute;
  bottom: 0;
  left: 50%;
  padding: 0.5rem 0.4rem;
  border-radius: 5px;
  font-size: 0.8rem;
  font-weight: 600;
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -90%);
  transition: all 0.2s ease;
  z-index: 1;
}

.tooltip-social:after {
  content: " ";
  position: absolute;
  bottom: 1px;
  left: 50%;
  border: solid;
  border-width: 10px 10px 0 10px;
  border-color: transparent;
  transform: translate(-50%, 100%);
}

.social-media a .tooltip-social:after {
  border-top-color: #262626;
}

.social-media a:hover .tooltip-social {
  opacity: 1;
  transform: translate(-50%, -130%);
}
</style></div>


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
  const savedSection = localStorage.getItem("activeSection") || "emploi"; 
  showSkills(savedSection);
}
function showSkill(categoryId) { const allSections = document.querySelectorAll('.skill-section'); allSections.forEach(section => { section.style.display = 'none'; }); document.getElementById(categoryId).style.display = 'block'; }
</script>
<div class="root">
<?php
$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur de connexion à la base : " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['form_id']) && $_POST['form_id'] === "form2") {

    if (!empty($_POST['type']) && !empty($_POST['offre']) && !empty($_POST['description'])) {

        $type = htmlspecialchars(trim($_POST['type']));
        $offre = htmlspecialchars(trim($_POST['offre']));
        $description = htmlspecialchars(trim($_POST['description']));

        $sql = "INSERT INTO offre (type, offre, description) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $type, $offre, $description);
            if ($stmt->execute()) {
                $_SESSION['msg'] = "<div class='msg'>✅ Données enregistrées avec succès.</div>";
            } else {
                $_SESSION['msg'] = "❌ Erreur lors de l'enregistrement : " . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['msg'] = "❌ Erreur lors de la préparation de la requête.";
        }

    } else {
        $_SESSION['msg'] = '<div class="msg">❌ Veuillez remplir tous les champs obligatoires (stage).</div>';
    }

    // Redirection pour éviter la réinsertion en cas de refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<div class="skills-section " id="post">
<span class="usserr2"></span>
<span class=cvb> <br><br><br><br><br>
            <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="form_id" value="form2"><br><br><br><br><br><br><br><br>
            <p class="profil12"> Annoncez les offres disponibles à la clinique avicenne. </p><hr class="hr2">
            <p class="stagee2">le type de l offre:
             <label for="type"  >Stage</label>
            <input type="radio" id="stage" name="type" value="stage" required checked  >
            <label for="emploi" >Emploi</label>
             <input type="radio" id="emploi" name="type" value="emploi" required ></p>
           <div class="gridd"><label  for="city" ><strong  required>l'offre:</strong></label><br><br>
            <input  type="text" id="ofrre" name="offre" class="input01" placeholder="l'offre disponible"></div>
            <div class="gridd"><label  for="zip-code"><strong  style="margin-top:5px" >description</strong></label><br><br>
            <input  type="text" id="description" name="description"  class="input02" placeholder="description pour ce post"></div><br><br>
            <button type="submit"  class="buttonn3"  > Annoncer</button>
            <a  class="buttonn3"  onclick="showSkills('gerer')"> gerer</a>
            <br><br><br><br></span></div>

<br><br><br><br><br><br><br><br><br><br>
<div class="skills-section" id="envoyer">
<div class="card">
    <div class="chat-header">Chat</div>
      </div>
      <br><br><br><br><div class="nexist"><br><br><br><br><br></div><div class="box"><br><?php
    $mysqli = new mysqli("localhost", "root", "", "avicenne");
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base : " . $mysqli->connect_error);
    }

    $sql = "SELECT nom, lettre ,id FROM inscription";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nom = htmlspecialchars($row['nom']);
            $lettre = htmlspecialchars($row['lettre']);
            $id = htmlspecialchars($row['id']);
            if (!empty($lettre)) {
            echo "
                <div class='import'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' width=4% class='svg'>
    <path d='M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm89.6 32h-17.8c-22.2 10.3-46.9 16-71.8 16s-49.6-5.7-71.8-16H134.4C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z'/>
  </svg><strong ><u class='strongd'>$nom :$lettre
                         </u><strong>
                <br><br>
                    </div> 
            ";
        }
        
         
    }  }

    $mysqli->close();
    ?> </div><br><br><br><br><br>
    
  
    

<?php
$mysqli = new mysqli('localhost', 'root', '', 'avicenne');
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base : ' . $mysqli->connect_error);
}

$sql = "SELECT nom, id, lettre FROM inscription";
$result = $mysqli->query($sql);
?>

<form method="POST">
    <select id="candidat" name="candidat" class="stage33">
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = htmlspecialchars($row['id']);
                $nom = htmlspecialchars($row['nom']);
                $lettre = htmlspecialchars($row['lettre']);

                if (!empty($lettre)) {
                    echo "<option value='$id'>$nom</option>";
                }
            }
        }
        ?>
    </select>

    <div class='input-place2'>
    <input type='hidden' name='id_envoyer2' value='$id'>
    <input placeholder='envoyer un message.' class='send-input' type='text' name='admin2'>
    <button class='send222' name='envoyer2' title='envoyer2'>
		<svg class='send-icon' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'><g><g><path fill='#6B6C7B' d='M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z'></path></g></g></svg>

   </button></div>
</form>




</div>

<footer>
<div class=cv44><p class="foot">© 2025 Clinique avicenne. tous les droits sont reservés .</p></div>
</footer>

</body>
</html>