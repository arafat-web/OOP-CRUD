<?php

include 'config/database.php';

$data = new Databases();

//////////// Uncomment this to Insert data ///////////
// $arrayName = array('name' => 'Arafat Hossain', 'age' => '23', 'email' => 'arafat.122260@gmail.com');
// $data->addData("user", $arrayName);

//////////// Uncomment this to View data ///////////
// $post_data = $data->viewData("user", "name", "21");
// foreach ($post_data as $post) {
//     echo $post["name"];
//     echo "<br>";
// }

//////////// Uncomment this to Update data ///////////
// $arrayName = array('name' => 'Arafat Hossain', 'age' => '20', 'email' => 'admin@gmail.com');
// $data->updateData("user", $arrayName, '18');

//////////// Uncomment this to Delete data ///////////
// $data->deleteData("user", "id", "21");