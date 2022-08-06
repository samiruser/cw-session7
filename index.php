<?php

// username: root
// password: root

/*



Students
- name
- father name
- class
- email


Teacher
- name
- email
- phone
- department


CRUD: Create Read Update Delete

INSERT INTO students (email, father_name, class, name) VALUES ('fatemah@yahoo.com', 'Asad Khan', 4, 'Fatemah Asadi');

SELECT * FROM `students`;
SELECT * FROM students WHERE class=4;

UPDATE students SET class=3, name='Ahmad Mohammadi' WHERE name='Ahmad';

DELETE FROM students WHERE class=2;

*/


$db_connection = new mysqli('localhost', 'root', 'root', 'codeweekend');

// $sql_query = ' INSERT INTO teachers (name, email, department) VALUES ("Moner", "moner2022@gmail.com", "SE") ';
// $sql_query = ' UPDATE teachers SET phone="+931234567890" WHERE id=5 ';
// $sql_query = ' DELETE FROM teachers WHERE id=5 ';
// $sql_query = ' SELECT * FROM teachers WHERE department="SE" ';
$sql_query = ' SELECT * FROM teachers ';

$result = $db_connection->query($sql_query);


// echo '<pre>';
// var_dump($result);

// $data = $result->fetch_assoc();
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Department</th>
	</tr>

	<tbody>

		<?php 
			
			foreach($data as $record){

				echo 	'<tr>
							<td>'. $record['id'] .'</td>
							<td>'. $record['name'] .'</td>
							<td>'. $record['email'] .'</td>
							<td>'. $record['phone'] .'</td>
							<td>'. $record['department'] .'</td>
						</tr>';

			}

		?>

	</tbody>
</table>
