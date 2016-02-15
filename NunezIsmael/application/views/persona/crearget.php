<h1>Crear Persona</h1>

<form method="Post" action="<?= base_url() ?>ex/crearPersonaPost">
<fieldset>
	<legend>Datos personales</legend>
	<label>Nombre Persona</label>
	<br>
	<input type="text" name="nombre">
	<fieldset>
		<legend>Aficiones</legend>
		<?php foreach ($listaAficiones as $aficion):?>
		<input type="checkbox" value="<?=$aficion->idaf?>" name="aficiones[]"><?=$aficion->nombre?>
		<?php endforeach;?>
		
		
		
	</fieldset>


</fieldset>

<input type="submit" class="button" value="enviar">

</form>