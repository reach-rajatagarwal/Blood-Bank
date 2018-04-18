Process Of Installation:

Step1:  All the files within the zipped folder should be extracted to xampp/htdocs/bloodbank.
        Note: I have Used XAMPP server for deployment.
Step2:  An empty databse have to be created within Mysql with name ("blood_bank") by executing the command:-
       create database blood_bank ;
Step3:  The (.sql) file should be imported to the database (the attached .sql file that contains all tables and data).



Process Of Operation:

Step1:  Open Google Chrome or any other Web Browser.
Step2:  On the URL part, write "localhost/blood_bank/index.php"   
        Note: index.php is the landing Page where both the Hospital and the receiver could view all the available blood from respective hospitals.
              To Send a request for particular blood from the available pool, the receiver has to logIn. (Onclick of "Send Request" button, it will be redirected to receiver's Login page).
              Both Receiver and Hospital can SignUp or LogIn from the link provided at the header of Index page.
Step3:  Receivers can directly sign up by hitting the url: "localhost/bloodbank/receiver_sgnup.php" (The entered credentials will be stored in receiver_login             table in blood_bank databse).
        Hospitals can directly sign up by hitting the url: "localhost/bloodbank/hsptl_sgnup.php" (The entered credentials will be stored in hospital_login       table in blood_bank databse).

        Sample Log in credentials for receiver: 
            Username: reachrajatagarwal@gmail.com
            password: 1234abcd

        Sample Log in credentials for hospital: 
            Username: rajatagarwal@gmail.com
            password: 1234abcd




Step4:  Receivers can directly Log In by hitting the url: "localhost/bloodbank/receiver_login.php" (The entered credentials will be checked from receiver_login           table in blood_bank databse). On successful Log In, the page will be redirected to receiver_homepage.php
        Hospitals can directly Log In by hitting the url: "localhost/bloodbank/hsptl_login.php" (The entered credentials will be checked from hospital_login      table in blood_bank databse). On successful Log In, the page will be redirected to hsptl_homepage.php
Step5:  After successful Log In(receiver_homepage.php), the receiver can now send requests for particular blood to respective hospitals.
        After successful Log In(hsptl_homepage.php), the hospital can view the requests and the 'receiver's details' for particular blood.
Step6:  Hospital also has the option to "add available blood info" from the link provided in the header of (hsptl_homepage.php).
Step7:  Hospital can also view their every "available blood posts" till date.
Step8:  Log Out option has been provided which when clicked will redirect to (receiver_login.php or hsptl_login.php) respectively.
        
