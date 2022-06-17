# DTU Shuttle Website- Project Outline.

  *This is the document for the project outline.*

# DTU-Shuttle website:
Website that tracks the college transit in real time.

Project Mentor-
Prof. Uma Nangia, EE Dept.


# Project Details:
This project has the following areas:
# 1.	Front-end(UI)development:				
Languages used: HTML 5, CSS 3, JS es6, Bootstrap 4.

# 2. Database:							
Languages:SQL, MongoDB
1. Storing the location of the shuttle in coordinates from it's gps module. in geohash format every 2 minutes. 
	2. Storing account details of user.
	3. Storing route information etc. 
Deadline: 20th June.
# 3. Back-end:							
Languages: node.js, TBD 
	1. Processing location of user-
1. The shuttle will move on a predefined route. User's location is used to calculate the distance from the nearest pickup point from the user. There will be limited number of pickup points at areas of significance for eg. -Main gate, MechC, Mic Mac, Electrical Department.
2. location of user has no more significance once he is in the vicinity of a pickup point.
	2. Calculation of ETA:
		1. Shuttle location is obtained from database and decoded.
		2. Distance from nearest pickup point is calculated from the coordinates of the shuttle using haversine formula.
		3. By getting the values of speed, The Estimated Time of Arrival is calculated by using the simple formula distance/speed.

  	
