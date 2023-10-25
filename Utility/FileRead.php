<?php

use Question\SC_Question;

include '/Users/User/PhpstormProjects/Quiz/Models/Question/SC_Question.php';


echo "<pre>";

var_dump($_FILES);
echo "</pre><hr>";
$_content = "";
if(isset($_FILES["file1"])){
    $content= file_get_contents($_FILES["file1"]["tmp_name"]);
    //echo $content;
    $_content = $content;
    echo "<hr>";
}
//echo $_content;

$content_sorted = explode("]]]", $_content);
$questions = [];

for ($i = 0; $i < count($content_sorted); $i++) {
    echo $i . $content_sorted[$i];
    echo "<br>";
    if (str_contains($content_sorted[$i], "?")) {
        $questions[$i] = new SC_Question($i, array($content_sorted[$i + 2], $content_sorted[$i + 3]), $content_sorted[$i + 1]);
    }
}

echo "Questions:<br>";
/*
for ($j = 0; $j < count($questions); $j++) {
    echo $questions[$i] -> getId();
    echo $questions[$i] -> getrightAnswer();
    for ($k = 0; $k < $questions[$i]; $k++) {
        echo $k . $questions[$i] -> getWrongAnswers()[$k];
    }
}
*/
?>




<form method="post" enctype="multipart/form-data">
    <input type="file" name="file1"/>
    <input type="submit"/>
</form>
