<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <Title>
    IPSSI PARIS SPORT
  </Title>
  <link rel="stylesheet" type="text/css" href="css\contact.css" />
</head>


<body>
  <?php include("code_header.php"); ?>
  <div class="container">
    <form action="action_page.php">

      <label for="name">Prénom</label>
      <input type="text" id="name" name="Prénom" placeholder="Prénom">

      <label for="lname">Nom de famille</label>
      <input type="text" id="lname" name="Nom de famille" placeholder="Nom de famille">

      <label for="country">Pays</label>
      <select id="country" name="Pays">
        <option value="France">France</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Sujet</label>
      <textarea id="subject" name="subject" placeholder="Ecrivez votre message.." style="height:200px"></textarea>

      <input type="submit" value="Envoyer">

    </form>
  </div>
</body>

</html>