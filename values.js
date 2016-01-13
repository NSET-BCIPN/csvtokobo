/*
This file contatins the variable values required for the application to run.
The values correspend to the following
1. 'id' = form's id string [not id number] of the form that the data is being uploaded to
2. 'file_name' = the name of the CSV file that is being uploaded 
	[Note: that the file should be in CSV (Comma Delimited) format]
	[Note2: to avoid cross domain errors place the csv file next to the html file or at least within the KOBO]
3. 'log_column' = the header of column that you want to log in the table
*/

var id = "form_id";
var file_name = "to_upload.csv";
var log_column = "ID";
