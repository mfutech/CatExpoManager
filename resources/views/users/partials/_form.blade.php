
{!!	BootForm::open(['model'=>$cat, 'update' => 'cats.update', 'store'=> 'cats.store']) !!}

{!!	BootForm::text('name', 'Nom:', null, $options ) !!}
{!! BootForm::text('race', 'Race:', null, $options ) !!}
{!! BootForm::text('color', 'Couleur:', null, $options ) !!}
{!! BootForm::text('birthdate', 'N&eacute;(e) le:', null, $options ) !!}
{!! BootForm::text('eyes_color', 'Couleur des yeux:', null, $options ) !!}
{!! BootForm::text('origin_book', 'Livre des origines:', null, $options ) !!}
{!! BootForm::text('breeder', 'Eleveur:', null, $options ) !!}
{!! BootForm::text('father', 'Père:', null, $options ) !!}
{!! BootForm::text('mother', 'Mère:', null, $options ) !!}

@if($submit_text)
{!! BootForm::submit($submit_text) !!}
@endif
{!!	BootForm::close() !!}


+----------------+------------------+------+-----+---------------------+----------------+
| Field          | Type             | Null | Key | Default             | Extra          |
+----------------+------------------+------+-----+---------------------+----------------+
| id             | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| name           | varchar(255)     | NO   |     | NULL                |                |
| email          | varchar(255)     | NO   | UNI | NULL                |                |
| password       | varchar(60)      | NO   |     | NULL                |                |
| remember_token | varchar(100)     | YES  |     | NULL                |                |
| created_at     | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| updated_at     | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| phone          | varchar(15)      | NO   |     | NULL                |                |
| url            | varchar(50)      | NO   |     | NULL                |                |
| firstname      | varchar(30)      | NO   |     | NULL                |                |
| lastname       | varchar(30)      | NO   |     | NULL                |                |
| affiliation    | varchar(50)      | NO   |     | NULL                |                |
| is_exposant    | tinyint(1)       | NO   |     | NULL                |                |
| address        | varchar(255)     | NO   |     | NULL                |                |
| CP_city        | varchar(255)     | NO   |     | NULL                |                |
| country        | varchar(255)     | NO   |     | NULL                |                |
| is_admin       | varchar(255)     | NO   |     | NULL                |                |
| is_clubmanager | varchar(255)     | NO   |     | NULL                |                |
| club           | varchar(255)     | NO   |     | NULL                |                |
+----------------+------------------+------+-----+---------------------+----------------+
19 rows in set (0.04 sec)