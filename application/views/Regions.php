<?php
foreach($lesRegions as $uneRegion)
{
    echo "<input type='radio' id='Regions' value='".$uneRegion->idRegion."' onclick='Villes($this.val())'>".$uneRegion->nomRegion." <br>";
}
?>