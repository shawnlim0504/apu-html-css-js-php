<?php 

//$fruits=file("fruits.txt");
//var_dump($fruits);

$FileContent=file_get_contents("instructions.txt");
print nl2br($FileContent);

$LongText=<<< HERE
This is my long test
Lorem, ipsum dolor sit amet 
consectetur adipisicing elit. Voluptatum 
fugiat doloremque necessitatibus nesciunt.
 Rem, nobis! Quam eum nesciunt totam repellat deserunt ad illum quisquam neque ab? Voluptatum maiores facilis expedita ducimus modi officia aliquam iusto exercitationem quibusdam vitae, earum quis debitis necessitatibus eveniet, molestiae eligendi similique quos quam et! Autem placeat expedita labore sunt praesentium, quibusdam deleniti laborum. Cupiditate voluptatum suscipit fugiat mollitia aspernatur, sapiente quaerat ullam eveniet quasi dicta repellat molestias natus error sunt velit odio, quisquam incidunt possimus ducimus eaque modi quae veritatis? Facilis perspiciatis, fugit sed dolor excepturi consequuntur vitae labore vero modi saepe. Facere quidem, deleniti non sapiente pariatur dolores tempore voluptatem aliquam quos? Hic blanditiis laudantium architecto perferendis adipisci possimus provident ipsa laborum, at et doloribus asperiores amet accusamus quam dolores culpa veritatis a aperiam temporibus placeat quasi incidunt nam. Totam aliquam culpa facilis, autem eum accusantium odio similique consectetur deserunt doloremque explicabo perspiciatis! Omnis porro facere earum sed ullam iure itaque alias minus unde pariatur vero ipsa eum quibusdam fugit explicabo perspiciatis incidunt cum, quo deleniti nemo debitis distinctio quidem? Quidem eligendi repudiandae inventore unde pariatur repellendus excepturi est, ratione error hic laudantium ut qui numquam accusantium ullam. Dolor temporibus totam quidem excepturi similique sapiente voluptatum, alias, corporis explicabo deserunt itaque possimus in perferendis exercitationem, esse nostrum et ipsa! Quo corrupti esse maiores. Porro in aut illum sit maiores, blanditiis dignissimos commodi odio omnis ratione aliquam incidunt cumque quisquam ex ab aliquid itaque mollitia tempora perspiciatis dolorem atque iste! Rerum, esse? Ut molestiae enim asperiores sapiente, sed sunt veniam voluptatum voluptates, quasi adipisci accusantium quia autem saepe ratione inventore? Consequatur, ducimus sint! Asperiores quod hic magnam, ipsa necessitatibus temporibus, ullam expedita accusantium, voluptates laudantium a quaerat soluta autem consequatur beatae doloremque voluptatem nobis dolores modi. Eius modi quia tempora delectus animi facilis explicabo, exercitationem, perferendis commodi, inventore incidunt. Aliquid sequi excepturi deserunt libero dolorum quia temporibus repudiandae molestias nemo, non tempora veniam illum velit id officiis nobis? Error, ab minima. Maxime delectus pariatur doloribus vel praesentium rem incidunt nam nostrum blanditiis! Nam facilis, minima ipsum quas laudantium dicta numquam ipsam dolore esse similique quos placeat cumque quod deserunt pariatur! Dicta, odit ratione atque blanditiis dolores dolorum laborum nihil? Labore, quisquam? Laboriosam eveniet possimus eius excepturi incidunt minima ab, quidem totam sapiente aut quas cum et, tempore dicta. Consectetur, quidem accusamus perspiciatis error distinctio voluptates molestias blanditiis beatae ullam cum eligendi culpa adipisci nisi provident?
<h1>heading</h1>

HERE;

//print $LongText;
var_dump(file_put_contents("test.html", $LongText, FILE_APPEND));








?>