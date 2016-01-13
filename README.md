# csvtokobo
######project to upload csv file to the kobotoolbox servers 

#####Contents
1.  Introduction<br>
2.  Getting Started<br>
3.  Dependencies<br>

####1.  Introduction
This project was started with the intended use of KOBO submission API to submit data that we have collected offline and generated CSV or generally have data unrelated to ODK system that we want to upload to kobotoolbox. Lets say you have a set of following data :<br>
a. name<br>
b. age<br>
c. location<br>
and you want to submit this data to kobotoolbox for storing online or any other reason then it is easier to use this rather than fill the form manually of data that you already have on (possibly) spreadsheet or any database.<br>

####2.  Getting Started
Follow the following steps to get started <br>
1.  Set up your php server (<a href ='https://www.apachefriends.org/index.html'>XAMPP</a> or <a href ='http://www.wampserver.com/en/'>WAMPP</a> or something equivalent)<br>
2.  download the whole folder csvtokobo and place it where you place all the scripts (for eg htdocs in XAMPP and www in WAMPP<br>
3.  Edit values to match your case in "csvtokobo/values.js"<br>
4.  Start server <br>
5.  Run the page (by going to localhost/csvtokobo/ or sth equivalent to your case)<br>
6.  Click the start button and watch it happen!

####3.  Dependencies
The dependencies (libraries) are placed in the "libs" folder and are<br>
1.  <a href ='https://jquery.com/'>jquery</a><br>
2.  <a href ='https://code.google.com/p/jquery-csv/'>jquery-csv</a><br>
3.  <a href ='http://getbootstrap.com/'>bootstrap</a><br>
