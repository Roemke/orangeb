<div class="import index">
	<h2><?php echo __('Import'); ?></h2>
	Alle Import-Dateien m&uuml;ssen im utf-8 Format ohne Header-Zeilen vorliegen. <br>
	Als Separator ist das Semikolon zu w&auml;hlen, die einzelnen Eintr&auml;ge sind mit 
	Anf&uuml;hrungszeichen gekennzeichnet.
	<?php

		   echo $this->form->create("Teacher", array(
	       'type' => 'file',
	       'url' => array('controller' => 'teachers', 'action' => 'import'),
	       ));
           echo $this->form->input('Datei',array(
              'label'=>'Lehrer[innen], Aufbau "Nachname";"Vorname";"Kuerzel"', 
              'type'=>'file',
              'div'=>false)); 
           echo $this->form->end(array('label'=>'Import ausführen'));

           echo '<br><hr><br>';
           echo $this->form->create("Student", array(
           'type' => 'file',
           'url' => array('controller' => 'students', 'action' => 'import'),
           ));
           echo $this->form->input('Datei',array(
              'label'=>'Schüler[innen], Aufbau "Id";"Nachname";"Vorname";"Geburtsdatum";"Klasse"', 
              'type'=>'file',
              'div'=>false)); 
           echo $this->form->end(array('label'=>'Import ausführen'));

           echo '<br><hr><br>';
           echo 'Folgender csv-Aufbau etwas anders, da aus dem Untis-Export einzulesen';
           echo $this->form->create("Lesson", array(
           'type' => 'file',
           'url' => array('controller' => 'lessons', 'action' => 'import'),
           ));
           echo $this->form->input('Datei',array(
              'label'=>'Stunden, Aufbau  LuL-Id/Kuerzel,Jahr,Monat,Tag,Stunde (Nr),Fach'.
                       ',Klasse,Raum,unklare 0,leer,unklare Numer,Uhrzeit,Dauer', 
              'type'=>'file',
              'div'=>false)); 
           echo $this->form->end(array('label'=>'Import ausführen'));
	?>
</div>
<div class="actions">
	<h3><?php echo __('Go'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller'=>'teachers','action' => 'index')); ?></li>
	</ul>
</div>
