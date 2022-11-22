<br>
<?php
include "db.php";

// function check_autorize($log)
// {
//     global $users;
//     return array_key_exists($log, $users);
// }

function check_autorize($log, $pas) {
    global $users;
    return array_key_exists($log, $users) && $pas == $users[$log];
}

function check_admin($log, $pas)
{
    global $users;
    return array_key_exists($log, $users) && $pas == $users["admin"];
}

function check_log($log)
{
    return $log == "admin";
}

function out_arr()
{
    global $doramas;
    // делаем переменную $doramas глобальной
    $arr_out = [];
    $arr_out[] = "<table  class=\"table table-hover text-white-50\">";
    $arr_out[] = "<tr><td>№</td><td>Dorama</td><td>
    Genre</td><td>Year</td><td>Chanel</td><td>Number of episodes</td><td>One episode time</td><td>Producer</td><td>Main actors</td><td>Tags</td></tr>";
    foreach ($doramas as $dorama) {
        static $i = 1;
        //статическая глобальная переменная-счетчик
        $str = "<tr>";
        $str .= "<td>" . $i . "</td>";
        foreach ($dorama as $key => $value) {
            if (!is_array($value)) {
                $str .= "<td>$value</td>";
            } else {
                foreach ($value as $k => $v) {
                    $str .= "<td>$v</td>";
                }

            }

        }
        // $str .= "<td>" . (array_sum($dorama['year']) / count($dorama['year'])) . "</td>";
        // $str .= "</tr>";
        // $arr_out[] = $str;
        // $i++;
    }
    $arr_out[] = "</table>";
    return $arr_out;
}

function name($a, $b)
{ // функция, определяющая способ сортировки (по названию )
    if ($a["name"] < $b["name"]) {
        return -1;
    } elseif ($a["name"] == $b["name"]) {
        return 0;
    } else {
        return 1;
    }

}

function genre($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["genre"] < $b["genre"]) {
        return -1;
    } elseif ($a["genre"] == $b["genre"]) {
        return 0;
    } else {
        return 1;
    }

}
function year($a, $b)
{ // функция, определяющая способ сортировки (по году)
    if ($a["year"]< $b["year"]) {
        return -1;
    } elseif ($a["year"]== $b["year"]) {
        return 0;
    } else {
        return 1;
    }

}
function chanel($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["chanel"] < $b["chanel"]) {
        return -1;
    } elseif ($a["chanel"] == $b["chanel"]) {
        return 0;
    } else {
        return 1;
    }

}
function numberofepisodes($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["number of episodes"] < $b["number of episodes"]) {
        return -1;
    } elseif ($a["number of episodes"] == $b["number of episodes"]) {
        return 0;
    } else {
        return 1;
    }

}
function oneepisodetime($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["one episode time"] < $b["one episode time"]) {
        return -1;
    } elseif ($a["one episode time"] == $b["one episode time"]) {
        return 0;
    } else {
        return 1;
    }

}
function producer($a, $b)
{ // функция, определяющая способ сортировки (по жанру)
    if ($a["producer"] < $b["producer"]) {
        return -1;
    } elseif ($a["producer"] == $b["producer"]) {
        return 0;
    } else {
        return 1;
    }

}

function sorting($p)
{
    global $doramas;
    uasort($doramas, $p);
}

function out_arr_search(array $arr_index = null)
{
    global $doramas; // делаем переменную $doramas глобальной
    $arr_out = array();
    $arr_out[] = "<table  class=\"table table-hover text-white-50\">";
    $arr_out[] = "<tr><td>№</td><td>Dorama</td><td>
    Genre</td><td>Year</td><td>Chanel</td><td>Number of episodes</td><td>One episode time</td><td>Producer</td><td>Main actors</td><td>Tags</td></tr>";
    foreach ($doramas as $index => $dorama) {
        if ($arr_index != null && in_array($index, $arr_index)) {
            static $i = 1;
            $str = "<tr>" . "<td>" . $i . "</td>";
            foreach ($dorama as $key => $value) {
                if (!is_array($value)) {
                    $str .= "<td>$value</td>";
                } else {
                    foreach ($value as $k => $v) {
                        $str .= "<td>$v</td>";
                    }
                }
            }
           
        }
    }
    $arr_out[] = "</table>";
    return $arr_out;
}

function out_search($data)
{
    global $doramas; // делаем переменную $doramas глобальной
    $arr_index = array();
    foreach ($doramas as $dorama_number => $dorama) {
        foreach ($dorama as $key => $value) {
            if (!is_array($value)) {
                if (stristr($value, $data)) {
                    $arr_index[] = $dorama_number;
                }
            } else {
                foreach ($value as $k => $v) {
                    if (stristr($v, $data) || strstr($k, $data)) {
                        $arr_index[] = $dorama_number;
                    }
                }
            }
        }
    }
    return out_arr_search(array_unique($arr_index));
}

function test_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}