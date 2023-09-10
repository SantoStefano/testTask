<table>
      <tr>
        <th>Название</th>
        <th>Год выпуска</th>
        <th>Издательство</th>
      </tr>

      <?php

          for ($i=0; $i<count($result); $i++) {
            echo '<tr>';
            echo '<td>'.$result[$i]['title'].'</td>';
            echo '<td>'.$result[$i]['year'].' г.'.'</td>';
            echo "<td><a href='/publisher?name=".$result[$i]['publisher']."'>".$result[$i]['publisher']."</a></td>";
            echo '</tr>'; 
          }
      ?>
    </table>                           