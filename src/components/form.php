<?php

$virheet = [];
$virheViesti = '';

if (!empty($_POST)) {
   $nimi = $_POST['nimi'];
   $email = $_POST['email'];
   $viesti = $_POST['viesti'];

   if (empty($nimi)) {
       $virheet[] = 'Nimikenttä on tyhjä.';
   }

   if (empty($email)) {
       $virheet[] = 'Syötä sähköposti.';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $virheet[] = 'Sähköposti ei ole kelvollinen.';
   }

   if (empty($viesti)) {
       $virheet[] = 'Viestikenttä on tyhjä.';
   }

   if (empty($virheet)) {
       $toEmail = 'info@sirushairsaloon.fi';
       $emailSubject = "Siru's Hairsaloon - Yhteydenottolomake";
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Nimi: {$nimi} \n" . "\n", "Email: {$email} \n" . "\n", "\n Viesti:", $viesti];
       $body = join(PHP_EOL, $bodyParagraphs);
     
       if (mail($toEmail, $emailSubject, $body, $headers))  

           echo "Kiitos yhteydenotosta, palaamme sinulle mahdollisimman pian!";

       } else {
           $virheViesti = 'Hups, jotain meni pieleen. Ole hyvä ja yritä myöhemmin uudelleen.';
       
       }
   } else {

       $allVirheet = join('<br/>', $virheet);
       $virheViesti = "<p style='color: red;'>{$allVirheet}</p>";
   } 

?>
<hr>
 <form  method="post" id="contact-form">
      <h2 style='margin-left: -5px;'>Yhteydenottolomake</h2>
        <p>
          Olemme täällä sinua varten, jos jokin asia mietityttää<br>
          ja haluaisit lisää tietoa, niin lähetä meille viesti.
        </p>
        <div class='space-div'></div>
        <?php echo((!empty($virheViesti)) ? $virheViesti : '') ?>
        <div class='form-input-text'>
            <label>Nimi:</label>
            <input name="nimi" type="text"/>
       </div>
        <div class='form-input-text'>
            <label>Email:</label>
            <input name="email" type="text"/>
        </div>
        <div class='form-textarea'>
            <label>Viesti:</label>
            <textarea name="viesti"></textarea>
        </div>
        <p>
            <input type="submit" value="Lähetä"/>
        </p>
 </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

<script>
   const constraints = {
       nimi: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       viesti: {
           presence: { allowEmpty: false }
       }
   };

   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         nimi: form.elements.nimi.value,
         email: form.elements.email.value,
         viesti: form.elements.viesti.value
     };

     const virheet = validate(formValues, constraints);

     if (virheet) {
       event.preventDefault();
       const virheViesti = Object
           .values(virheet)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(virheViesti);
     }
   }, false);

</script>