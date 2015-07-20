<?php
$taskmaneger = $_GET['task'];
$array = array(
    'First element',
    'Search me',
    'I love ZaraLab',
    'I\'m going to become PHP expert!'
);
//task1
if($taskmaneger == NULL){
  $search = array_search("Search me",$array);
  echo "Task Array Search:".$search;
  echo "</br>"."<a href='?task=task2'>Task2</a>";
}
else {
    if($taskmaneger == "task2"){
      //task2
      $search2 = array_search('I\'m going to become PHP expert!',$array);
      $rowarray = $array[$search2];
      $replace = str_replace("PHP","SOFTWARE",$rowarray);
      echo $replace;
      echo "</br>"."<a href='app.php'>Task1</a>";
  }
}
