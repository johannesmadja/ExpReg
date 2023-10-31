## Les expressions régulières 

Les expressions régulières, aussi appelées `regex` ou `regexp`, sont des séquences de caractères qui forment un motif de recherche. Elles sont utilisées pour rechercher, manipuler et éditer du texte en fonction de caractères règles définies.

## Basique de Regexp 

### Correspondance exacte 
Consiste à rechercher le texte de manière exacte à un éditeur de texte classic 
ex : /John/ ==> rechercher John uniquement "John" dans le texte
    /Bonjour/ ==> rechercher Bonjour uniquement "Bonjour" dans le texte

### Les classes de caratères : 
Rechercher un caractère optionnel parmi les caractères entre les crochets 
[abc]  : correspond à un caractère parmi a, b ou c
[^abc] : correspond à un caratère sauf a, b, ou c 
[a-z]  : correspond aux caratères de minuscule allant de a - z
[0-9]  : correspond à tous les chiffres de 0 à 9

Sélection ces deux éléments : abc@gmail.com john@gmail.com // [a-z]+@gmail.com

### Les métacaractères 
Les métacaractères en expresssion régulières sont des caractères spéciaux qui ont une signification particulière. Ils donnent eux regex leur puissance et leur flexibilité en permemttant de définir des motifs de rechercher complexes. Voici quelques-uns des métacaractères les plus couramment utilisés : 
1. `.` (point) : correspond à n'importe quel caractère sauf un saut de ligne. Exemple :: `a.b` correspond à `aab`, `axb` mais pas à `a\nb`
2. `*` (astérisque) : correspond à zéro ou plusieurs occurences du motif précédent. Exemple : `ab*c` correspond à `ac`, `abc`, `abbc` etc.
3. `+` (plus) : correspond à un ou plusieurs occurences du motif précédent. Exemple : `ab+c` correspond à `abc`, `abbc` etc.
4. `?` (point d'interrogation) : correspond à zéro ou une occurence du motif précédent. Exemple : `ab?c` correspond à `abc` à `ac` mais pas à `abbc`
5. `\` (antislash) : permet d'échapper un métacaractère. Souvent utilisé pour échapper le délimiteur slash (/)
6. `|` (barre verticale) : correspond à l'utilisateur "OU". Exemple : `a|b` correspond à "a" ou "b"
7. `^` (circonflexe) : correspond au début d'une ligne. Exemple : `^abc` correspond à "abc" seulement s'il est situé en début de ligne 
8. `$` (dollar) : correspond à la fin d'une ligne. Exemple : `abc$` correspond à "abc" seulement s'il est situé à la fin d'une ligne
9. `()` (parathèses) : crée un groupe de capture et permet d'extraire des sous-partie du motif correspondant.
10. `\b` (limite de mot, en : boundary) : correspond à une limite d'un mot. Exemple : `\bword\b` correspond à "word" en tant que mot complet et partie d'une mot plus long 


### Autres métacaractères 
- `\w` : correspond aux caractères alphanumériques en plus du "_"(tiret de 8) [a-zA-Z0-9_]
- `\W` : contraire de \w
- `\s` : correspond à un espace 
- `\S` : contraire de \s
- `\d` : correspond à un chiffre [0-9]

### Quantificateur 
Les quantificateurs en Regex sont des métacaractères qui spécifie le nombre d'occurence d'un élément à rechercher. Ils définissent la quantité de caractère ou de groupe de caratère auquel une expression régulière doit correspondre pour être considérée comme une correspondance. Voici quelques-uns : 
1. * (astérique)
2. + (plus) 
3. ? (point d'interrogation) 
4. {n} : correspond à exactement "n" occurences du motif précédent. Par exemple, a{3} correspond à "aaa"
5. {n,} : correspond à au moins "n" occurences du motif précédent. Exemple : a{2,} correspond à "aa", "aaa", "aaa" et plus
6. {n, m} : correspond entre "n" et "m" de l'occurence du motif précédent. Exemple : a{2,4} correspond à "aa", "aaa", "aaaa".
 
### Les Groupes de captures 
Il s'agit de parathèses utilisées pour définir les sous-parties d'une exprssion régulière




Sélection ces deux élément : 
johndoe@gmail.com => [a-zA-Z]+@gmail\.com  
JohnDoe@gmail.com => [a-zA-Z]+@gmail\.com 
johnDoe@gmail.com => [a-zA-Z]+@gmail\.com 

// Second 
johnDoe134@gmail.com => [a-zA-Z0-9]+@gmail\.com 

// Third
johnDoe134@hotmail.com => [a-zA-Z0-9]+@[a-z]+\.com 
johnDoe134@yahoo.com => [a-zA-Z0-9]+@[a-z]+\.com 
johnDoe134@outlook.com => [a-zA-Z0-9]+@[a-z]+\.com 
johnDoe134@test.com => [a-zA-Z0-9]+@[a-z]+\.com 
johnDoe134@gmail.com => [a-zA-Z0-9]+[a-z]+\.com 

// Four 
email : tiburce.kouagou@3wa.io => [a-zA-Z0-9]+[.]*[a-zzA-Z0-9]+@[a-zA-Z0-9]+\.[a-z]+
email : tiburce.kouagou@3wa.io => [a-zA-Z0-9-_.]@[a-zA-Z0-9]+\.[a-z]+

// Five 
Numéro : +29965685845 => \+?[0-9]+
Numéro : 29965685845 => \+?[0-9]+

// Six 
le site : http://highfive.bj  https?:\/\/[a-zA-Z0-9]\.[a-z]+
le site : https://highfive.bj https?:\/\/[a-zA-Z0-9]\.[a-z]+
le site : http://w3shools.com https?:\/\/[a-zA-Z0-9]\.[a-z]+
le site : https://devdocs.io https?:\/\/[a-zA-Z0-9]\.[a-z]+

// Sept 
Salut tout le monde 
Salut à tous 