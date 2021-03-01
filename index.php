<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php

$navbar = ["indtroduzione" , "norme sulla privacy", "termini di servizio", "tecnologie", "domande frequenti"];



$google =[
  [
      "faq" =>"Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",

      "ansewer" =>"La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
  ],

  [
      "faq" =>"Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",

      "ansewer" =>"Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
  ],

  [
    "faq" =>"Perché il mio account è associato a un paese?",
    "ansewer" =>"Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:

    1. La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:

      A. Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.

      B. Google LLC, con sede negli Stati Uniti, per il resto del mondo.

    2. La versione dei termini che regola il nostro rapporto, che può variare in  base alle leggi locali.

    Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.

    Stabilire il paese associato al tuo account
   Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.

   I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.

   Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."

  ]

];




 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="dist/app.css">
   </head>
   <body>

     <div class="navbar">

      <?php for($i = 0; $i < count($navbar); $i++) { ?>
      <ul>
        <li><?php echo $navbar[$i] ?></li>
      </ul>

      <?php } ?>


     </div>


     <?php foreach ($google as $element)  { ?>
       <h1><?php echo $element["faq"] ?></h1>
       <span><?php echo $element["ansewer"] ?></span>
      <?php } ?>

   </body>
 </html>
