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

function get_form() {
  return '<!-- Form -->
  <section class="bg-white w-full flex flex-col justify-center items-center pt-14 pb-16">
    <div class="container mx-auto flex flex-col items-center pb-8">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Manage your Web application design!
      </h1>
      <form class="w-3/4 mx-auto px-12" method="post" action="/">
        <label for="primary_color" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Primary color <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank">*</a>
        </label>
        <select name="primary_color" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option>random</option>
          <option>slate</option>
          <option>gray</option>
          <option>neutral</option>
          <option>stone</option>
          <option>red</option>
          <option>orange</option>
          <option>amber</option>
          <option>yellow</option>
          <option>lime</option>
          <option>green</option>
          <option>emerald</option>
          <option>teal</option>
          <option>cyan</option>
          <option>sky</option>
          <option>blue</option>
          <option>indigo</option>
          <option>violet</option>
          <option>purple</option>
          <option>fuchsia</option>
          <option>pink</option>
          <option>rose</option>
        </select>
        <label for="secondary_color" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Secondary/Background color <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank">*</a>
        </label>
        <select name="secondary_color" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option>random</option>
          <option>slate</option>
          <option>gray</option>
          <option>neutral</option>
          <option>stone</option>
          <option>red</option>
          <option>orange</option>
          <option>amber</option>
          <option>yellow</option>
          <option>lime</option>
          <option>green</option>
          <option>emerald</option>
          <option>teal</option>
          <option>cyan</option>
          <option>sky</option>
          <option>blue</option>
          <option>indigo</option>
          <option>violet</option>
          <option>purple</option>
          <option>fuchsia</option>
          <option>pink</option>
          <option>rose</option>
        </select>
        <label for="hero_type" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Hero type <a href="https://daisyui.com/components/hero/" target="_blank">*</a>
        </label>
        <select name="hero_type" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option value="random">Random</option>
          <option value="center">Centered hero</option>
          <option value="left">Hero with figure</option>
          <option value="right">Hero with figure but reverse order</option>
          <option value="overlay">Hero with overlay image</option>
        </select>
        <label for="hero_type" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Text size
        </label>
        <select name="text_size" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option value="random">Random</option>
          <option value=0>Small</option>
          <option value=1>Medium</option>
          <option value=2>Large</option>
        </select>
        <label for="hero_type" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Color Mode
        </label>
        <select name="color_mode" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option value="random">Random</option>
          <option value=0>Light</option>
          <option value=1>Dark</option>
        </select>
        <label for="hero_type" class="inline-flex mb-4 mt-8 text-2xl text-gray-800 space-y-8">
          Photo topic (low case, coma separated without spaces)
        </label>
        <input name="photo_topic" type="text" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
        <input type="submit" name="action" value="Generate" class="mx-auto lg:mx-0 hover:underline hover:bg-red-primary bg-black text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out space-y-8 mt-8" />
      </form>
    </div>
  </section>';
}

function get_next($settings) {
  return "<!-- Form next -->
  <section class='bg-white w-full flex flex-col justify-center items-center pt-14 pb-16'>
    <div class='container mx-auto flex flex-col items-center pb-8'>
      <form class='w-3/4 mx-auto px-12' method='post' action='/'>
        <input name='primary_color' type='hidden' value='" . $_POST['primary_color'] . "'>
        <input name='secondary_color' type='hidden' value='" . $_POST['secondary_color'] . "'>
        <input name='hero_type' type='hidden' value='" . $_POST['hero_type'] . "'>
        <input name='text_size' type='hidden' value='" . $_POST['text_size'] . "'>
        <input name='color_mode' type='hidden' value='" . $_POST['color_mode'] . "'>
        <input name='photo_topic' type='hidden' value='" . $_POST['photo_topic'] . "'>
        <input name='settings' type='hidden' value='" . serialize($settings) . "'>
        <input type='submit' name='action' value='Next' class='mx-auto lg:mx-0 hover:underline hover:bg-red-primary bg-black text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out space-y-8' />
        <input type='submit' name='action' value='Save' class='mx-auto lg:mx-0 hover:underline hover:bg-red-primary bg-black text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out space-y-8' />
      </form>
    </div>
  </section>";
}

/*function get_save($settings) {
  return "<!-- Form save -->
  <section class='bg-white w-full flex flex-col justify-center items-center pt-14 pb-16'>
    <div class='container mx-auto flex flex-col items-center pb-8'>
      <form class='w-3/4 mx-auto px-12' method='post' action='/'>
        <input name='settings' type='hidden' value='" . serialize($settings) . "'>
        <input type='submit' value='Save' class='mx-auto lg:mx-0 hover:underline hover:bg-red-primary bg-black text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out space-y-8' />
      </form>
    </div>
  </section>";
}*/

function get_settings($primary_color, $secondary_color, $hero_type, $text_size, $color_mode, $photo_topic) {
  $colors = [
    'slate',
    'gray',
    'neutral',
    'stone',
    'red',
    'orange',
    'amber',
    'yellow',
    'lime',
    'green',
    'emerald',
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose'
  ];
  $h_types = [
    'center',
    'left',
    'right',
    'overlay'
  ];
  $title_size_mobile = [
    'text-2xl',
    'text-3xl',
    'text-4xl',
  ];
  $title_size_desktop = [
    'text-3xl',
    'text-4xl',
    'text-5xl',
  ];
  $txt_size = [
    'text-base',
    'text-lg',
    'text-xl',
  ];
  $light_palete = [100, 200, 300];
  $dark_palete = [600, 700, 800];
  $color_mode = $color_mode != 'random' ? $color_mode : rand(0,1);
  return [
    'primary_color' => $primary_color != 'random' ? $primary_color : $colors[array_rand($colors)],
    'secondary_color' => $secondary_color != 'random' ? $secondary_color : $colors[array_rand($colors)],
    'primary_palete' => $color_mode ? $light_palete[array_rand($light_palete)] : $dark_palete[array_rand($dark_palete)],
    'secondary_palete' => $color_mode ? $dark_palete[array_rand($dark_palete)] : $light_palete[array_rand($light_palete)],
    'hero_type' => $hero_type != 'random' ? $hero_type : $h_types[array_rand($h_types)],
    'title_size_mobile' => $text_size != 'random' ? $title_size_mobile[$text_size] : $title_size_mobile[array_rand($title_size_mobile)],
    'title_size_desktop' => $text_size != 'random' ? $title_size_desktop[$text_size] : $title_size_desktop[array_rand($title_size_desktop)],
    'txt_size' => $text_size != 'random' ? $txt_size[$text_size] : $txt_size[array_rand($txt_size)],
    'photo_topic' => $photo_topic,
  ];
}

function get_hero($settings) {
  $output = '';
  $primary = $settings['primary_color'];
  $secondary = $settings['secondary_color'];
  $primary_palete = $settings['primary_palete'];
  $primary_palete_hover = $primary_palete + 100;
  $secondary_palete = $settings['secondary_palete'];
  $title_size_mobile = $settings['title_size_mobile'];
  $title_size_desktop = $settings['title_size_desktop'];
  $txt_size = $settings['txt_size'];
  $photo_topic = $settings['photo_topic'];
  switch ($settings['hero_type']) {
    case 'center':
      $output = '<!-- Hero center -->
      <div class="w-full h-screen bg-' . $secondary . '-' . $secondary_palete . '">
        <div class="w-full h-screen flex justify-center items-center relative">
            <div class="mx-4 text-center lg:w-1/2">
              <img class="object-cover w-48 h-48 rounded-full mx-auto mb-8" src="https://source.unsplash.com/random/600x600?' . $photo_topic . '" alt="Placeholder photo">
              <h1 class="' . $title_size_mobile . ' tracking-wide text-' . $primary . '-' . $primary_palete . ' lg:' . $title_size_desktop . '">Set your title</h1>
              <p class="mt-4 ' . $txt_size . ' text-' . $primary . '-' . $primary_palete . '">Lorem ipsum, dolor sit amet consectetur
              adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
              laudantium quod rem voluptatem eos accusantium cumque.</p>
            </div>
            <div class="absolute bottom-14">
              <a href="#" class="block px-3 py-2 font-semibold text-center ' . $txt_size . ' text-' . $secondary . '-' . $secondary_palete . ' transition-colors duration-200 transform bg-' . $primary . '-' . $primary_palete . ' rounded-md lg:inline hover:bg-' . $primary . '-' . $primary_palete_hover . '">Download
              </a>
            </div>
        </div>
      </div>';
        break;
    case 'left':
    case 'right':
      $case = $settings['hero_type'] == 'left' ? 'lg:flex-row' : 'lg:flex-row-reverse';
      $output = '<!-- Hero left/right -->
      <div class="bg-' . $secondary . '-' . $secondary_palete . '">
          <div class="container flex px-6 py-4 mx-auto lg:h-128 lg:py-16 ' . $case . '">
              <div class="flex flex-col items-center w-full ' . $case . ' lg:w-1/2">
                  <div class="max-w-lg">
                      <h1 class="' . $title_size_mobile . ' tracking-wide text-' . $primary . '-' . $primary_palete . ' lg:' . $title_size_desktop . '">Set your title</h1>
                      <p class="mt-4 ' . $txt_size . ' text-' . $primary . '-' . $primary_palete . '">Lorem ipsum, dolor sit amet consectetur
                          adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                          laudantium quod rem voluptatem eos accusantium cumque.</p>
                      <div class="mt-6">
                          <a href="#" class="block px-3 py-2 font-semibold text-center ' . $txt_size . ' text-' . $secondary . '-' . $secondary_palete . ' transition-colors duration-200 transform bg-' . $primary . '-' . $primary_palete . ' rounded-md lg:inline hover:bg-' . $primary . '-' . $primary_palete_hover . '">Download
                          </a>
                      </div>
                  </div>
              </div>

              <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                  <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://source.unsplash.com/random/1600x900?' . $photo_topic . '" alt="Placeholder photo">
              </div>
          </div>
      </div>';
        break;
    case 'overlay':
      if ($secondary_palete < 500) {
        $bg_color = 'white';
      }
      else {
        $bg_color = 'black';
      }
      $output = '<!-- Hero overlay -->
        <div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url(https://source.unsplash.com/random/1600x900?' . $photo_topic . ');">
          <div class="w-full h-screen bg-opacity-60 bg-' . $bg_color . ' flex justify-center items-center relative">
              <div class="mx-4 text-center lg:w-1/2">
                <h1 class="' . $title_size_mobile . ' tracking-wide text-' . $primary . '-' . $primary_palete . ' lg:' . $title_size_desktop . '">Set your title</h1>
                <p class="mt-4 ' . $txt_size . ' text-' . $primary . '-' . $primary_palete . '">Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                laudantium quod rem voluptatem eos accusantium cumque.</p>
              </div>
              <div class="absolute bottom-14">
                <a href="#" class="block px-3 py-2 font-semibold text-center ' . $txt_size . ' text-' . $secondary . '-' . $secondary_palete . ' transition-colors duration-200 transform bg-' . $primary . '-' . $primary_palete . ' rounded-md lg:inline hover:bg-' . $primary . '-' . $primary_palete_hover . '">Download
                </a>
              </div>
          </div>
      </div>';
        break;
  }
  return $output;
}

echo get_header();
if (isset($_POST['primary_color'])) {
  if ($_POST['action'] == 'Save') {
    $settings = unserialize($_POST['settings']);
    if(file_put_contents(time() . '.html', get_header() . get_hero($settings) . get_footer())) {
      echo '<!-- Form -->
      <section class="bg-green w-full flex flex-col justify-center items-center pt-14 pb-16" id="form">
        <div class="container mx-auto flex flex-col items-center pb-8">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            The markup was saved!
          </h2>
        </div>
      </section>';
    }
    else {
      echo '<!-- Form -->
      <section class="bg-red w-full flex flex-col justify-center items-center pt-14 pb-16" id="form">
        <div class="container mx-auto flex flex-col items-center pb-8">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            File error!
          </h2>
        </div>
      </section>';
    }
  }
  else {
    $settings = get_settings($_POST['primary_color'], $_POST['secondary_color'], $_POST['hero_type'], $_POST['text_size'], $_POST['color_mode'], $_POST['photo_topic']);
  }
  echo get_hero($settings);
  echo get_next($settings);
}
else {
  echo get_form();
}
echo get_footer();