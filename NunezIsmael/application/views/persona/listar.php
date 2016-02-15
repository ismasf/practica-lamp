<h1>Listar</h1>
<table>
  <tr>
    <th>Nombre</th>
    <th>Núm.afic</th>
   
  </tr>
  
  	<?php foreach ($a as $v):?>
  <tr>
  	<td><?=$v[0]?></td>
  	<td><?=$v[1]?></td>
  	
  </tr>
  <?php endforeach;?>
  
</table>




