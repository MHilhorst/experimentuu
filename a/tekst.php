<!doctype html>
<title>Tekst</title>
<head>
  <meta charset="UTF-8">
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1856294,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
<?php
$naam = $_POST["naam"];
$bestandsnaam = "$naam"." ".date("m-d-Y H.i.s");
$timestamp1 = date("d F Y H:i:s");
$maakbestand = fopen("$bestandsnaam.txt", "w") or die("Unable to open file!"); 
fwrite($maakbestand, "naam: $naam \r\nstarttijd: ".$timestamp1."\r\n"); 
fclose($maakbestand); 
?> 

<style type="text/css">
.txt {
position: absolute;
top: 3%;
padding: 10px;
left: 10%;
right: 10%;
font-size: medium;
font-family: Verdana, Geneva, sans-serif;
text-align: outline;
color: black;
background-color: green;
text-align:justify;
}
</style>
</head>
<body>

<div class="container h-100" style="margin-top:150px;">
  <div class="row h-100 justify-content-center align-items-center">
<div class="col-md-8">

    <p style="line-height:1.4">Kartonnen supporters, omstreden sekspoppen en fans die via een Zoom-verbinding naar een wedstrijd kijken: voetbalclubs doen er van alles aan om de akelig lege tribunes te vullen nu er voorlopig niet met publiek mag worden gespeeld.

De nieuwste ontwikkeling: een app waarmee stadiongeluid kan worden nagebootst, waardoor het lijkt alsof er echt publiek aanwezig is. Elias Andersen, de ontwikkelaar van HearMeCheer, is volop bezig met testen, experimenteren en ontwikkelen.

"De app registreert het gejuich thuis op de bank, combineert dat met het geluid van andere supporters en maakt daar een stadiongeluid van", aldus Andersen. "Dan wordt een wedstrijd in bijvoorbeeld de Bundesliga ook meteen leuker om naar te kijken."

Toen vorige week de Duitse voetbalcompetitie weer begon, konden veel voetbalfans, ondanks de maanden zonder voetbal, niet echt genieten. Het klonk hol en stil tijdens de duels.

Matthijs Keuning van Supporterscollectief Nederland is niet overtuigd van het nut van de app. "Ik zie het vooral als lapmiddel, dus het zal vast wel iets helpen. Maar het is vooral een illusie van beleving. Het is niet de oplossing, maar het kan wel bijdragen aan het verzachten van de pijn."

Zowel in de Zuid-Koreaanse als in de Hongaarse competitie wordt al geexperimenteerd met stadiongeluiden door de speakers tijdens wedstrijden. Freek Bleijenberg verzorgt al het entertainment bij Ajax en is precies op zoek naar zo'n app.

"Het staat boven aan ons lijstje. Als er wordt gescoord, is het voor de spelers ook veel leuker om geluid te horen van de mensen thuis. Als er 52.000 man of meer gaan zingen, creeer je toch meer sfeer. Dan wordt een wedstrijd heel anders om naar te kijken."</p>
  <form method="post" action="thankyou.php">
<input type="hidden" name="bestandsnaam" value="<?php echo $bestandsnaam;?>" />
<center>
<button type="submit" class="btn btn-primary" style="width:100%;padding:25px;text-align:center">Submit</button>
</center>

</form>
</div>
</div>


</body>
</html>