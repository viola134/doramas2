<?php

include "header.php";

include "action2.php";


if (isset($_POST["go"])) {
    $login = $_POST["login"];
    $password = $_POST["pass"];
    if (check_autorize($login, $password)) {
        echo "Hello, $login!";
        if (check_admin($login, $password)) {
            echo "<a href='hello.php?login=$login'>Viewing a Report</a>";
        }
    } else {
        echo "You are not registred!";
    }
}
$str_form = '
<div class="container" id="container2">
  <h3 class= "my-2" id="login">Sign in to know more information about the best k-dramas:</h3>
  <form class="form-inline" action="index.php#login" method="post" onsubmit="return verify(this)">
    <label for="login" class="m-2">Login:</label> <input type="text" name="login" class="form-control my-2" id="login" placeholder="Enter login">
    <label for="pass" class="m-2">Password:</label> <input type="password" name="pass" id="pass" class="form-control my-2" placeholder="Enter password" >
    <input type="submit" value="OK" name="go" class="btn btn-secondary m-2">
  </form>
  <span id="massage"></span>
</div>';
echo $str_form;

 //$out = out_arr();

// if (count($out) > 0) {
//     foreach ($out as $row) {
//         echo $row;
//     }
// } else {
//     echo "No data...";
// }
include "second_block.php";
// include "slideshow.php";
$str_form_s = '
<div class="container" id="details">
  <h3 class= "my-2" id="sortby">Sort by:</h3>
  <form action="index.php#sortby" method="post" name="sort_form">
  <select name="sort" id="sort" size="1">
    <option value="name">name</option>
    <option value="genre">genre</option>
    <option value="year">year</option>
    <option value="chanel">chanel</option>
    <option value="numberofepisodes">number of episodes</option>
    <option value="oneepisodetime">one episode time</option>
    <option value="producer">producer</option>
  </select>
  <input type="submit" name="submit" value="OK" class="btn btn-secondary my-2" >
  </form>
</div>';
echo $str_form_s;

if (isset($_POST['sort'])) {
    $how_to_sort = $_POST['sort'];
    sorting($how_to_sort);
}

$out = out_arr();

if (count($out) > 0) {
    foreach ($out as $row) {
        echo $row;
    }
} else {
    echo "No data...";
}

$str_form_search = "
<div class=\"container\" id='search'>
  <h3>Search:</h3>
	<form  name='searchForm' action='index.php#search' method='post' onSubmit='return overify_login(this);' >
 		<input type='text' name='search' class='form-control' >
 		<input type='submit' name='gosearch' value='Confirm'  class='btn btn-secondary my-2'>
 		<input type='reset' name='clear' value='Reset'  class='btn btn-secondary my-2'>
 	</form>
</div>";

echo $str_form_search;
$nothing ="Nothing found...";
if (isset($_POST['gosearch'])) {
    $data = test_input($_POST['search']);
    $out = out_search($data);

// ?????????? ?????????????? out_arr() ???? action.php ?????? ?????????????????? ??????????????
    if (count($out) > 0) {
        foreach ($out as $row) { //?????????? ?????????????? ??????????????????
            echo $row;
        }
    } else// ???????? ?????? ????????????
    {
        echo $nothing;
    }
}

include "footer.php";