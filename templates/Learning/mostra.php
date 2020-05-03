 <table>
     <tr>
        <th>Name-Flowers</th>
        <th>Occasions</th>
        <th>Description</th>
        </tr>
    <?php
         foreach ($query as $riga) {
        echo "<tr>";
        echo "<td>" . $riga->name . "</td>";
        echo "<td>" . $riga->Occasions['name'] . "</td>";
        echo "<td>" . $riga->Occasions['description'] . "</td>";
        echo "</tr>";
         }
    ?>
</table>
  



 