# memoria
Memoria is an information system created for nationwide application. It aims to eliminate bureaucracy and corruptness while ensuring the security of the data by unifying all the public sector services' platforms into one. This project was created for the "Software engineering" class at University of Macedonia taught by Alexander Chatzigeorgiou.

# Generally

The system consists of 2 parts. A MySQL database and an Apache HTTP Server containing the web based GUI. Both were designed and implemented with modularity and abstraction as the main objectives.

# How it works

Every citizen has a unique card, representing a unique ID in the database, substituting all other forms of identification per service (driving license, health insurance number, public transport card, ID etc.) So, every citizen is registered in the database and has his own unique profile of data, from medical subscription history to driving licences and real estate ownership. According to the country's public sector departments, every public servant has a certain set of privilages depending on his department and rank. As a result a doctor logged into the system can only see,edit or append the medical part of a citizen's data profile, an accountant the estate part, a police officer his respective part etc.

Moreover, every public servant's activity is recorded into the database, subsequently every public servant has an action history (as shown in the images below) in order to prevent immoral and illegal/illicit manifestation/corruptness. In addition, since the data is centralized into one system, it is easier to maintain and secure than 10 or 15 systems, depending on the public departments each country has. Finally, this centralization enables complex searches such as "All the citizens with the name 'George' that were hospitalized the last 4 hours in radius 'x' of this 'point'"  or  "All the citizens that are in possesion of more than 'x' real estates and declare lower than 'x' income in the tax returns" from accounts who have the privilages to see the respective data.

# GUI

The web based interface consists of 5 basic panels that remain the same regardless the country of implementation, and 2 more, whose content varies depending on the country's respective public sector servants' activities and privilages. The GUI was created with raw html+php , having in mind the known hardware limitations of most nations' public sectors equipment. We also aimed for minimalism and simplicity of use in order to achieve the lowest possible learning curve, considering the technological illiteracy of the users that this system is aimed for.

5 basic panels:

The 'login' panel

The 'home' panel

The 'scanner' pannel

The 'advanced search' panel

The 'citizen profile' panel

2 dynamic panels:

The 'register' panel

The 'other actions' panel

# Database

The database (MySQL) implementation is the core of memoria. The database schema must be flexible(modular and abstract) in order for the system to be able to adapt to all countries in spite of the differences they may have. It must be also easy to understand in favor of maintenance and every other technical,or not, need that may emerge.
