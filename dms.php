<?php

function get_header() {
  return '<!DOCTYPE html>
  <html lang="ua" class="scroll-smooth">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>
        Tailwind Kaleidoscope
      </title>
      <script src="https://cdn-tailwindcss.vercel.app/"></script>
    </head>
    <body class=text-white">';
}

function get_footer() {
  return '</body>
  </html>';
}

echo get_header();
$string = file_get_contents("./index.json");
$content = json_decode($string, true);
print_r($content);
echo get_footer();