# appointmentSystem
A simple appointment System using php, mysql, html, css, js
https://testcar001.000webhostapp.com

-----------------

There is a car workshop where there are around 5 senior mechanics works. And each mechanic
is allowed to get assign on maximum 4 active cars(clients) everyday. So whenever a mechanic is
occupied with maximum no. of client’s car the manager assigns the next car to the other
mechanic whoever is free. For this reasons clients are not getting their desire mechanics whom
they want to investigate their car and sometimes a chaos occurs.
So now the management plans to build an online appointment system where the client can go
to the link of the application select their desire mechanic and get the appointment if he is
already not occupied without coming to workshop physically.
The system should have 2 parts.
1. User Panel
a. A client visiting to the web application should be able to entry their Name,
Address, Phone, Car License number, Car Engine Number, appointment date and
can select their desire mechanic from the list of the available mechanics.
2. Admin Panel
a. Admin can see the list of the appoints
i. In the list table admin should able to see the client name, phone, Car
registration number, appointment date, and mechanic name.
b. If admin wants he can change the date of appointment and also the assigned
mechanic name with any other available mechanic for any specific client.
#### Reg panel
![image](https://github.com/cosmicray001/appointmentSystem/blob/master/github_img/a002.png)<br>
At first one have to sign up in this system to get the membership.
#### Log in:
![image](https://github.com/cosmicray001/appointmentSystem/blob/master/github_img/a001.png)<br>
Andmin and user have to use the same lon in panel but their UI will be different.

#### User panel
![image](https://github.com/cosmicray001/appointmentSystem/blob/master/github_img/a003.png)<br>
In user panel, one user can book slot which is not already booked by other user.
![image](https://github.com/cosmicray001/appointmentSystem/blob/master/github_img/a004.png)<br>
To book a slot, one have to select a date then under that date free slot and booked shlot will be show. Then by clicking the free slot one can book the slot.
#### Admin panel
![image](https://github.com/cosmicray001/appointmentSystem/blob/master/github_img/a005.png)<br>
In admin panel, admin will be able to see all the booked and non-booked slot and clients info. Moreover, andmin can delete and change slot.