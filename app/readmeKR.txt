Datenbank nach konventionen aufgesetzt
User für orangeb dazu soweit fertig gestellt
redundanz in lesson geplant, da im Export von untis vorhanden

Anpassung an der database.php vorgenommen

beachte: Pfad muss fuer cake bake gesetzt werden,
sonst nimmt er die systemeigene php nicht die 
xampp php
export PATH=/Applications/XAMPP/bin/:$PATH

jetzt nach und nach die Anwendung bauen.
mac-roem-wlan:app roemke$ ../lib/Cake/Console/cake bake

uups beim generieren des ersten Model schon Fehler,
wahrscheinlich ist Class reserviert

Passwort-Feld f�r Lehrer dazu,

Historie dazu in lessons_students und eintragenden Lehrer
akzeptiere hier redundanz, es werden nicht oft mehrere Eintr�ge
kommen.

bei lessons_teachers analog, packe den Inhalt dort hinein, kann eine historie
f�hren.

Generiere jetzt nochmal neu

course Associations:
	Course hasMany Lesson

Associations:
	Lesson belongsTo Course
	Lesson hasAndBelongsToMany Student
	Lesson hasAndBelongsToMany Teacher
	Lesson hasAndBelongsToMany Sclass

Associations:
	Sclass hasAndBelongsToMany Lesson
	Sclass hasAndBelongsToMany Student

Associations:
	Student hasAndBelongsToMany Lesson
	Student hasAndBelongsToMany Sclass

Associations:
	Teacher hasAndBelongsToMany Lesson


weiter mit den controllern, ebenfalls bake
wahrscheinlich w�re auch ACL sinnvoll

Controller Name:
	Courses
Helpers:
	Time
Components:
	Paginator, Acl, Security

Controller Name:
	Lessons
Helpers:
	Time
Components:
	Paginator, Acl, Security

Controller Name:
	Sclasses
Components:
	Paginator, Acl, Security

Controller Name:
	Students
Helpers:
	Time
Components:
	Paginator, Acl, Security

Controller Name:
	Teachers
Helpers:
	Time
Components:
	Paginator, Acl, Security

Nochmal nachgelesen - soweit ich es verstandne habe unterstuetzt
das hasmanybelongsto modell nicht die M�glichkeit zusatzdaten bei der
Beziehungs-Entit�t zu speichern - man muss anscheinend ein eigenes
Model daraus bauen - doch es geht, mal ausprobieren
siehe unique auf keepExisting

import Teacher ist umgesetzt
import Students -> Fehler bei validation, warum wird der nicht angezeigt?

fuer lessons_students und lessons_teachers ist das aber n�tig, 
daher werde ich das nochmal neu bauen muessen
pech
wie oben, lasse aber die habtm raus
baue auch die Models f�r die zwischentabellen
bei lesson haben wir damit die Situation, dass sowohl die cake habtm relationen
benutzt werden (sclass) als auch beziehungen, die separat modelliert werden m�ssen
f�r die beziehungstypen ohne eigene Daten (sclasse_lessons, sclasses_students) 
generiere ich die Models ohne beziehungen

dannn import csv - verschiedenes angeschaut, klappt nicht, mal sehen,
ob es mit den cake utils funktioniert
gut, das geht besser, allerdings musste der Code etwas erweitert werden, siehe dort

-> Lehrerimport geht

