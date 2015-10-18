This application shows the session times for movies showing in cinemas.

The main logic of the application is in the App/Http/Controllers/CinemaController class.

Currently, it will take one parameter (id) and will return all the session times for the movies showing in the cinema of that ID. 

The MySQL database that it connects to has the following schema:

+-------------------+
| Tables_in_cinemas |
+-------------------+
| cinema            |
| movies            |
| session_times     |
+-------------------+

+---------+--------------+------+-----+---------+-------+
| Field   | Type         | Null | Key | Default | Extra |
+---------+--------------+------+-----+---------+-------+
| ID      | int(11)      | YES  |     | NULL    |       |
| name    | varchar(255) | YES  |     | NULL    |       |
| address | varchar(255) | YES  |     | NULL    |       |
+---------+--------------+------+-----+---------+-------+

+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(11)      | YES  |     | NULL    |       |
| title | varchar(255) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+

+-----------+-----------+------+-----+-------------------+-----------------------------+
| Field     | Type      | Null | Key | Default           | Extra                       |
+-----------+-----------+------+-----+-------------------+-----------------------------+
| id        | int(11)   | YES  |     | NULL              |                             |
| movie_id  | int(11)   | YES  |     | NULL              |                             |
| cinema_id | int(11)   | YES  |     | NULL              |                             |
| date_time | timestamp | NO   |     | CURRENT_TIMESTAMP | on update CURRENT_TIMESTAMP |
+-----------+-----------+------+-----+-------------------+-----------------------------+
