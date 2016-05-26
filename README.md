# memoria
Memoria is an information system created for nationwide application. It aims to eliminate bureaucracy and corruptness while ensuring the security of the data by unifying all the public sector services' platforms into one. This project was created for the "Software engineering" class at University of Macedonia taught by Alexander Chatzigeorgiou.

# Generally

The system consists of 2 parts. A MySQL database and an Apache HTTP Server containing the web based GUI. Both were designed and implemented with modularity and abstraction as the main objectives.

# GUI

The web based interface consists of 5 basic panels that remain the same regardless the country of implementation, and 2 more, whose content varies depending on the country's respective public sector servants' activities and privilages. The GUI was created with raw html+php , having in mind the known hardware limitations of most coyntries' public sectors equipment. We also aimed for minimalism and simplicity of use in order to achieve the lowest possible learning curve, considering the technological illiteracy of the users that this system is aimed for.

# How it works

Every citizen is registered in the database and has his own unique profile of data, from meds subscription history to driving licences and real estate ownership. According to the country's public sector departments, every public servant has certain set of privilages depending on his department and rank. As a result a doctor logged into the system can only see,edit or append the medical part of a citizen's data profile, an accountant the estate part, a police officer his respective part etc.

Moreover, every public servant's activity is recorded into the database, subsequently every public servant has an action history (as shown in the images below) in order to prevent immoral and illegal/illicit manifestation/corruptness.
