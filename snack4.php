<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
<p>
    
    <?php 
        $paragrafo = "Lo Shiba Inu è un cane dall'anima duale: controllato in casa ed incline al movimento. Dimostra grande intelligenza ed è in grado di regalare momenti di interazione incredibilmente felici. Non si spaventa davanti agli sconosciuti e può anche diventare piuttosto competitivo con altri cani, ma è molto calmo e tranquillo in quasi ogni contesto. Lo Shiba è una razza autoctona del Giappone fin dai tempi antichi; nella terra d’origine la parola “shiba” indica qualcosa di “piccolo”, un “piccolo cane”: nell’habitat dello Shiba, la zona montana prospiciente il Mar del Giappone, questo cane era utilizzato per la caccia a piccoli animali o uccelli. Ora lo Shiba è considerato un cane da compagnia che ha però perfette qualità di buon avvisatore. È una razza di piccola taglia che ha un mantello esterno ruvido e diritto, sottopelo soffice e fitto; pelo della coda leggermente più lungo e sollevato. Nel mantello è presente l'urajiro, come nell'Akita, ossia pelo biancastro sui lati del muso e sulle guance, sul lato inferiore della mascella e collo, sul petto e stomaco e la parte inferiore della coda, e nella parte interna degli arti.";
        $sezioniParagrafo = explode('.', $paragrafo);

        echo $sezioniParagrafo[0]; 
        echo $sezioniParagrafo[1];
        echo $sezioniParagrafo[2];
        echo $sezioniParagrafo[3];
    ?>

</p>
</body>
</html>