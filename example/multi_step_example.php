<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Perform some backend processing with the submitted data
    $stage = $_POST['stage'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($stage == 1) {
      $response = '
        <div>
          <label for="email" class="block font-medium">Email:</label>
          <input type="email" id="email" name="email" required class="border border-gray-300 rounded-md px-4 py-2 w-full" />
        </div>

        <input type="hidden" name="stage" value="2" />
        <input type="hidden" name="name" value="' . $name . '" />

        <button type="submit" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
      ';
    } elseif ($stage == 2) {
      // return a message including the submitted data
      $response = '
        <p class="text-xl">Thank you for submitting your information!</p>
        <p class="text-lg">Name: ' . $name . '</p>
        <p class="text-lg">Email: ' . $email . '</p>
      ';
    }

    echo $response;
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TaPHtX Examples - Multi Stage Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://unpkg.com/htmx.org@1.9.2"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="container mx-auto p-4">
      <h1 class="text-2xl font-bold mb-4">Multi Stage Form</h1>

      <form hx-post="/multi_step_example.php" hx-target="this" hx-swap="innerHTML" class="space-y-4">
        <div>
          <label for="name" class="block font-medium">Name:</label>
          <input type="text" id="name" name="name" required class="border border-gray-300 rounded-md px-4 py-2 w-full" />
        </div>

        <input type="hidden" name="stage" value="1" />

        <button type="submit" class="bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600">Submit</button>
      </form>
    </div>
  </body>
</html>
