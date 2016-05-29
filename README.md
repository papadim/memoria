# memoria
Memoria is an information system created for nationwide application. It aims to eliminate bureaucracy and corruptness while ensuring the security of the data by unifying all the public sector services' platforms into one. This (incomplete)project was created for the "Software engineering" class at University of Macedonia taught by Alexander Chatzigeorgiou.

# Generally

The system consists of 2 parts. A MySQL database and an Apache HTTP Server containing the web based GUI. Both were designed and implemented with modularity and abstraction as the main objectives.

# How it works

Every citizen has a unique card, representing a unique ID in the database, substituting all other forms of identification per service (driving license, health insurance number, public transport card, ID etc.) So, every citizen is registered in the database and has his own unique profile of data, from medical subscription history to driving licences and real estate ownership. According to the country's public sector departments, every public servant has a certain set of privilages depending on his department and rank. As a result a doctor logged into the system can only see,edit or append the medical part of a citizen's data profile, an accountant the estate part, a police officer his respective part etc.

Moreover, every public servant's activity is recorded into the database, subsequently every public servant has an action history (as shown in the images below) in order to prevent immoral and illegal/illicit manifestation/corruptness. In addition, since the data is centralized into one system, it is easier to maintain and secure than 10 or 15 systems, depending on the public departments each country has. Finally, this centralization enables complex searches such as "All the citizens with the name 'George' that were hospitalized the last 4 hours in radius 'x' of this 'point'"  or  "All the citizens that are in possesion of more than 'x' real estates and declare lower than 'x' income in the tax returns" from accounts who have the privilages to see the respective data.

# GUI

The web based interface consists of 5 basic panels that remain the same regardless the country of implementation, and 2 more, whose content varies depending on the country's respective public sector servants' activities and privilages. The GUI was created with raw html+php , having in mind the known hardware limitations of most nations' public sectors equipment. We also aimed for minimalism and simplicity of use in order to achieve the lowest possible learning curve, considering the technological illiteracy of the users that this system is aimed for.

5 basic panels:

The 'login' panel
 ![screenshot 36](https://cloud.githubusercontent.com/assets/16741917/15634535/0ede151c-25cf-11e6-81c5-a35841a502e0.png)
 
The 'home' panel
 ![screenshot 38](https://cloud.githubusercontent.com/assets/16741917/15634536/0ee0aeee-25cf-11e6-8005-72d6f7036573.png)
 
The 'scanner' pannel
 ![screenshot 35](https://cloud.githubusercontent.com/assets/16741917/15634534/0edaf7c4-25cf-11e6-98e1-4ca6cce4fdc5.png)
 
The 'advanced search' panel

 (Has not yet been designed since it's up to the country, that the system in being implemented on, public sector construction
 
The 'citizen profile' panel (here as seen by a doctor)
 ![screenshot 41](https://cloud.githubusercontent.com/assets/16741917/15634533/0ed7ca68-25cf-11e6-8b4b-6bce1eb22fbd.png)


2 dynamic panels:

The 'register' panel(here as seem by a police officer)
 ![screenshot 43](https://cloud.githubusercontent.com/assets/16741917/15634538/0f1f1724-25cf-11e6-98fe-40c0102104d6.png)
 

The 'other actions' panel (here as seen by a department's chief)
 ![screenshot 40](https://cloud.githubusercontent.com/assets/16741917/15634531/0ed24c46-25cf-11e6-967f-fa6c4baa67d1.png)
 

# Database

The database (MySQL) implementation is the core of memoria. The database schema is flexible(modular and abstract) in order for the system to be able to adapt to all countries in spite of the differences they may have. It is also easy to understand in favor of maintenance and every other technical,or not, need that may emerge.
