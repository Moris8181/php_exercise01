<?php

echo '$pointの値を入力してください: ';
$point = trim(fgets(STDIN));

// ここに処理を記述
if($point%2===0){
    echo "Xは群数です。";
}else{
    echo "Xは奇数です。";
}
