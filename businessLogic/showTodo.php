<?php
function showTodo(){
  global $todolist;

  foreach ($todolist as $number => $value){
    echo "$number. $value" .PHP_EOL;
  }
}
?>
