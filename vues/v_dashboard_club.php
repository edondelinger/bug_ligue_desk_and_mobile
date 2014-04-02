
<div id="liste_tickets">
    <h2>Tickets en cours</h2>
<table><tr><th></th><th>Numéro</th><th>Date</th><th>Technicien</th><th>Produits concernés</th></tr>
    <?php
foreach ($bugs_en_cours as $bug) {
    if ($bug->getEngineer() != null){
        $engineer = $bug->getEngineer()->getName();
    }else{
        $engineer = "non affecté";
    }
    echo "<tr>";
    echo "<td><img src='./images/en_cours.png' width='30px' height='30px'/></td>";
    echo "<td class='colonneid'>".$bug->getId()."</td>";
    echo "<td class='colonnedate'>".$bug->getCreated()->format('d.m.Y')."</td>";
    echo "<td class='colonnetech'>".$engineer."</td>";
    echo "<td class='colonneprod'>";
    foreach ($bug->getProducts() as $product) {
        echo "- ".$product->getName()." ";
    }
    echo "</td>";
    //echo "<li>".$bug->getDescription()."</li>";
    echo "</tr>";
}
?>
</table>
</div>

<div id="liste_tickets">
    <h2>Tickets fermés</h2>
    <table><tr><th></th><th>Numéro</th><th>Date</th><th>Technicien</th><th>Produits concernés</th></tr>
    <?php
    foreach ($bugs_fermes as $bug) {
        if ($bug->getEngineer() != null){
            $engineer = $bug->getEngineer()->getName();
        }else{
            $engineer = "non affecté";
        }
        echo "<tr>";
        echo "<td><img src='./images/ferme.png' width='30px' height='30px'/></td>";
        echo "<td class='colonneid'>".$bug->getId()."</td>";
        echo "<td class='colonnedate'>".$bug->getCreated()->format('d.m.Y')."</td>";
        echo "<td class='colonnetech'>".$engineer."</td>";
        echo "<td class='colonneprod'>";
        foreach ($bug->getProducts() as $product) {
            echo "- ".$product->getName()." ";
        }
        echo "</td>";
        //echo "<td>".$bug->getDescription()."</td>";
        echo "</tr>";
    }
    ?>
</table>
</div>

<div id="detail_ticket">

</div>