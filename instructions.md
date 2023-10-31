# Exercice : Validation des Données

## Question 1 :
Validez une adresse email au format standard. L'adresse email doit commencer par une série de lettres, de chiffres, de points, de pourcentages, ou de tirets, suivis par le symbole "@" et un nom de domaine valide (séries de lettres et de chiffres, suivi d'un point, suivi de deux ou trois lettres).
### Tests
john.doe@example.com  
alice.smith@gmail.com  
jane_doe123@yahoo.com  
robert_jones@hotmail.com  
emily.brown@example.org  
mike.johnson@outlook.com  
sarah_adams123@live.com  
david.miller@gmail.com  
lisa.anderson@example.net  
brian_wilson@yahoo.uk  

## Question 2 :
Validez un numéro de téléphone au format américain. Le numéro de téléphone peut être dans l'un des formats suivants : "(123) 456-7890", "123-456-7890", "123 456 7890" ou "123.456.7890".
### Tests
(123) 456-7890  
555-1234  
(555) 555-5555  
800-867-5309  
(123) 555-6789  
123-456-7890
123 456 7890
123.456.7890

## Question 3 :
Validez une adresse IP au format IPv4. L'adresse IP doit être dans la plage de 0.0.0.0 à 255.255.255.255.
### Tests
192.168.0.1  
10.0.0.1  
172.16.0.1  
203.0.113.42  
198.51.100.17  

## Question 4 :
Validez un code postal au format américain. Le code postal peut être soit au format ZIP standard (par exemple, "12345"), soit au format ZIP+4 (par exemple, "12345-6789").

## Question 5 :
Validez une date au format "YYYY-MM-DD". La date doit être dans le format année-mois-jour, où l'année est dans la plage de 1900 à 2099, le mois est dans la plage de 01 à 12, et le jour est dans la plage appropriée pour chaque mois (par exemple, 01 à 31).
