Da ich git doch immer wieder vergesse schreibe mal die wesentliche Schritte auf
Nehme das orangeb Projekt, mal sehen ob es jemals fertig wird 

macbook-administrator:orangeb roemke$ git init
Reinitialized existing Git repository in /Applications/XAMPP/xamppfiles/htdocs/orangeb/.git/
-> reinitialisiert, da es ein cake projekt ist, dieses hat schon git "Wurzeln"

macbook-administrator:orangeb roemke$ git add *.*
macbook-administrator:orangeb roemke$ git commit -m 'OrangeB to Git first try'
macbook-administrator:orangeb roemke$ git config --global user.name "Karsten Roemke"
macbook-administrator:orangeb roemke$ git config --global user.email "k.roemke@googlemail.com"
macbook-administrator:orangeb roemke$ git status

-> zeigt einig nicht commited bzw. staged files an

git add * liefert fehler weil dateien durch .gitignore ausgeschlossen sind
das ist doch quark?
git add app
git commit (-a wŸrde das add also staging mit ausfuehren)

dann ein wenig aufgeraeumt, ein .git Verzeichnis in app/Plugins geloescht
paar mal commit , rm , add
git status zeigt jetzt, dass ich mich vom origin/master entfernt habe

# On branch master
# Your branch is ahead of 'origin/master' by 4 commits.
-> liegt daran, dass der master remote lag / war mal cake
git log zeigt eine "endlos-Liste" von Aenderungen an - bezieht sich 
komplett auf cakephp (bis auf meine 4 spielereien) 

git log --all --graph --oneline --decorate
zeigt Informationen

versuch meinen kram zusammen zu fassen 
git rebase -i HEAD~5 
dabei fehler gemacht, master branch verloren, alles weg - autsch
ewig gesucht, http://sethrobertson.github.io/GitFixUm/fixup.html#badrebase
hat die fuer mich passende Loesung - juchu
git rebase --abort

dann noch ein wenig gespielt, um die einzelnen branches zusammen zu bekommen
ende bei zweien, die sich nicht mit rebase vereinen lassen, versuche mal merge
geht auch nicht, vermute das hŠngt damit zusammen, dass ich eine version von
cake bekommen habe, die aus mehreren branches besteht
vielleicht hŠtte ich das besser mal so gelassen :-) naja egal

-----------------------
Kopie auf dem Server anlegen
key vom macbook auf github.com hinterlegt 
Achtung nicht gut
--
git remote add orangeb https://github.com/Roemke/orangeb.git
-> fragt nach username und passwort, dachte das geht so
-> evtl mal aendern 
git remote set-url origin git@github.com:Roemke/orangeb.git
habe den Eindruck, dass er damit das orangeb zum trackig repo gemacht hat
Nein, habe origin geŠndert, ich bin ein Idiot, das war so nicht geplant
--
versuche mal neu: -) repo geloescht auf github und neu angelegt
git remote add orangeb git@github.com:Roemke/orangeb.git
git push -u orangeb master

-> geht

=======
