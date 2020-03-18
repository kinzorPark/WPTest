# Infiniti Airlines
**This is the source code for FBLA Website Design 2019-2020.**

Requirements: 

>Create a website for a new discount airline. This airline serves the states surrounding the one in which you live. The airline has hired you to create a website. The website must include:
>* Airline name and theme/slogan
>* Introduction to the airline that includes animation
>* Flight schedules, with the ability to book flights
>* Information on the frequent flyer program
>* How to apply for a job with the airline
>* Social media links (NOTE: No live social media accounts should be created for this event.)

>Skills: The ability to communicate ideas and concepts and to deliver value to customers, using the Internet and related technologies is an important element in a business’ success. This event recognizes FBLA members who have developed proficiency in the creation and design of websites.
## Cloning Directions
Install git, and don't be installing any of those ugly visual git clients. If you don't use Git CLI, I will respectfully ask you to leave and never come back you uncultured swine. Why do you even exist?

This is a Wordpress project so you should install Wordpress. Reference the directions below if you have not already done so.

CD into desired folder (CMD in Windows, Terminal on OSX), and if you don't know how to do that, I advise to hit this page with a swift CTRL(⌘)+W. Once you've gotten to your desired folder, type this:
```
git clone git@github.com:kinzorPark/Infiniti-Airlines.git
```
## Install Directions - macOS 10.10+
1. Visit the MAMP Webiste and [download MAMP for macOS](https://www.mamp.info/en/downloads/?m=1581611990&).
2. Just follow the normal installation procedure by mashing that continue button on the installer. *(1.53 GB)*
3. Once installation has completed, open MAMP, **_NOT MAMP Pro_**. The very subpar people at MAMP install both the free and paid version at the same time. If you want to uninstall MAMP Pro, figure it out yourself.
4. Open MAMP preferences (⌘,) and navigate to the "Ports menu". There, change the Apache port from 8888 to 80. What this allows you to do is access the website at http://localhost instead of http://localhost:8888 (first world problems :roll_eyes:). This will also require you to enter admin credentials every time you start up MAMP services. 
5. The next step is to set the document root folder. This will be the folder where you store your webiste. By default, MAMP uses /Applications/MAMP/htdocs/ (I recommend just using this folder) but you may want to change to a more easily accessible folder. Open MAMP preferences (⌘,) and navigate to the "Web Server" menu. Next to where it says "Document Root:" click the "Select" button and choose the desired folder.  
6. Now that we have MAMP set up, we want to [install Wordpress from this webiste](https://wordpress.org/download/).
7. Open the installation file (it should have automatically unzipped that package for you) and move it to the document root folder you set for the MAMP server. 
