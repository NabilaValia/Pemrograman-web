<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Nostrum, ex fugiat accusantium, ipsum quos rerum excepturi ab quibusdam ut nam reprehenderit voluptatibus culpa vero porro odit harum esse magni, ullam assumenda ducimus vel? Voluptatum nesciunt repellendus possimus nulla, 
              iure repudiandae doloremque iusto eius amet accusantium, 
              reprehenderit veniam recusandae veritatis totam.";

echo"<p>{$loremIpsum}</p>";
echo"Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo"Panjang kata  : " . str_word_count($loremIpsum) . "<br>";
echo"<p>" . strtoupper($loremIpsum) . "</p>";
echo"<p>" . strtoupper($loremIpsum) . "</p>";

?>
