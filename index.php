<?php
$angka = [1,2,3,4,5,6,7,8,9,10];


?>
<h1>Tabel Bilangan</h1>
<table border="1">
  <tr>
         <td>Bilangan</td>
         <td>Jenis</td>
  </tr>
  <tr>
        <td><?php echo "$angka[0]" ?></td>
        <td>
          <?php
          if(1 + 0 == 1){
            echo "Bilangan Ganjil";
        }
        ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[1]" ?></td>
        <td>
          <?php
         if(1 + 1 == 2){
            echo "Bilangan Genap";
        }
          ?>
        </td>
  </tr>
  <tr>
        <td><?php echo "$angka[2]" ?></td>
        <td>
          <?php
          if(1 + 2 == 3){
            echo "Bilangan Ganjil";
        }
          ?>
        </td>
  </tr>
  <tr>
 <td><?php echo "$angka[3]" ?></td>
 <td>
        <?php
        if(1 + 3 == 4){
            echo "Bilangan Genap";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[4]" ?></td>
 <td>
        <?php
        if(1 + 4 == 5){
            echo "Bilangan Ganjil";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[5]" ?></td>
 <td>
        <?php
        if(1 + 5 == 6){
            echo "Bilangan Genap";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[6]" ?></td>
 <td>
        <?php
        if(1 + 6 == 7){
            echo "Bilangan Ganjil";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[7]" ?></td>
 <td>
        <?php
        if(1 + 7 == 8){
            echo "Bilangan Genap";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[8]" ?></td>
 <td>
        <?php
        if(1 + 8 == 9){
            echo "Bilangan Ganjil";
        }
        ?>
 </td>
</tr>
<tr>
 <td><?php echo "$angka[9]" ?></td>
 <td>
        <?php
        if(1 + 9 == 10){
            echo "Bilangan Genap";
        }
        ?>
 </td>
</tr>
</table>