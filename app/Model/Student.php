<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Lesson $Lesson
 * @property Sclass $Sclass
 */
class Student extends AppModel {
    public $actsAs = array(
        'Utils.CsvImport' => array(
            'hasHeader' => false,
            'importKeys' => array('id','name','vname','gebdat','Sclass')
        ),
     );
        /*erweiterung CsvImportBehaviour - welche Felder sind zu füllen. */
   
   //Anzeigen in Listen und Sortierung
    public $virtualFields = array(
            'dname' => 'CONCAT(Student.name, ", ", Student.vname, " (" , Student.gebdat, ")")'
        );
        
    public $order = array("Student.name" => "asc", "Student.vname" => "asc");
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'dname';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'vname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gebdat' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Lesson' => array(
			'className' => 'Lesson',
			'joinTable' => 'lessons_students',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'lesson_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Sclass' => array(
			'className' => 'Sclass',
			'joinTable' => 'sclasses_students',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'sclass_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    //muss das Datum und die Klasse anpassen
    public function beforeImport($data)
    {       
        $geb = explode('.',$data['Student']['gebdat']);
        $data['Student']['gebdat']=$geb[2].'-'.$geb[1].'-'.$geb[0];
        $sclass = ClassRegistry::init("Sclass");
        $other = $sclass->findByBezeichnung($data['Student']['Sclass']);
        
        if (count($other)==0)
        {//einfuegen der Klasse
            $cdata = array("Sclass" =>
                array(
                    'bezeichnung' => $data['Student']['Sclass']
                ));
            $sclass->create();
            $sclass->save($cdata);
            $other=$sclass->findById($sclass->id);
        }
        //und einbauen der Information in das Array
        $data['Sclass']=array($other['Sclass']['id']);
        //hinzufügen der Klassen funktioniert, Einbau in Beziehungstyp sclasses_students nicht,
        //doch, wie oben geht es 
        return $data;
    }

}
