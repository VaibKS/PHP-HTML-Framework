<?php
require_once "element.php";
header("Content-Type: text/html");

function e($s) {
    return Element($s);
}

/*
    Set the style tag, using setStyle function
*/

setStyle("body", [
    "background" => "#000",
    "color" => "#fff",
    "margin" => "0",
    "font-family" => "Cabin, Helvetica, Arial"
]);

/* 

    The HTML

*/

$html = e("html");

    $head = e("head");
        $title = e("title")->text("Testing my Framework");
        $fonts = e("link")->mattr([
            "rel" => "stylesheet",
            "href" => "https://fonts.googleapis.com/css?family=Cabin|Varela+Round"
        ]);
    $head->madd([$title, $fonts]);

    $body = e("body");
        $h1 = e("h1")->text("Hello, World!")->mcss([
            'text-align' => 'center',
            'padding' => '20px 0'
        ]);
        $para = e("p")->mcss([
            "display" => "block",
            "width" => "90%",
            "max-width" => "450px",
            "margin" => "30px auto"
        ]);
        $para->text(
            "
                Here's a paragraph!<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, enim. Aliquid voluptatum repellat adipisci, reprehenderit commodi ut velit aut dolorum, perspiciatis rerum vitae debitis laudantium rem facilis quasi autem consequuntur.
            "
        );
    $body->madd([$h1, $para]);

$html->madd([$head, $body]);



echo $html->html();

?>