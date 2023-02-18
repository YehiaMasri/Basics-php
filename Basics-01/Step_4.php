<?php
//first method
$name='Gaby';
$position='tech consultant';
$github_url='https://github.com/gk-git';
echo "Hello, I'm  ".$name.", I'm a ".$position." please check my github link". $github_url."\n";

//second method

echo "Hello, I'm {$name}, I'm a {$position} please check my github link: {$github_url} \n";

//third method 

echo 'Hello, I m '.$name.' Im a '.$position.'please check my github link:'.$github_url. '\n';
?>