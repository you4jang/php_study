<?php
function team($name, ...$members):string {
    $list = implode(", ", $members);
    return "{$name} : {$list}";
}

$team1 = team("퍼스트팀", "루니", "포그바", "로호");
echo $team1;

