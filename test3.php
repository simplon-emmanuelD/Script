
 <fieldset>
               <legend>Vos coordonnées</legend>
        <p>


<form action="resultat.php" method="post">
Entrez votre prénom : <input type="text" name="prenom" />
</form>

<form action="resultat.php" method="post">
Entrez votre Mail <input type="text" name="mail" />
    </br>
</br>
    <form action="resultat.php" method="post">
        Question:
        <input type="text" name="question" style="height:180px;" />
           
        <p></br></p>
    <input type="submit" value="Valider" style="height:50px;"/>

    





<font size="2" face="Arial">Le texte en HTML</font>
<?php
// le code PHP ---------
$heure = date("H\hi");
print("<font size=\"2\" face=\"Arial\"> et celui en PHP.</font>");
?>
<!-- retour au code HTML -->
<br><font size="2" face="Arial">Il est <?php echo $heure; ?>.</font>
</body>
</html>
    
</form></fieldset>
