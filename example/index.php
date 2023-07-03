<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $greeting = "Hello, " . $name . "!";

      // Output the greeting message
      echo $greeting;
      exit;
    }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
    <script src="https://unpkg.com/htmx.org@1.9.2"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container mx-auto mt-8">
      <h1 class="text-4xl mb-4">HTMX and Tailwind Example</h1>

      <form hx-post="/" hx-target="#greeting" hx-swap="innerHTML">
        <div class="flex mb-4">
          <input
            id="nameInput"
            type="text"
            name="name"
            class="border p-2 flex-grow"
            placeholder="Enter your name"
          />
          <button
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4"
          >
            Submit
          </button>
        </div>
      </form>

      <div id="greeting" class="bg-gray-200 p-4 mt-4">Waiting for input...</div>
    </div>
  </body>
</html>
