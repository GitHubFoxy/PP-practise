<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./app.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Волшебные рецепты</title>
</head>
<body>
    <nav class='bg-[#F7F89A] w-full h-16 grid place-content-center'>
    <h1 class='text-xl'>Волшебные рецепты</h1>
    </nav>
    <main class="max-w-[1080px] mx-auto bg-[#D9D9D9] min-h-screen flex flex-col gap-4">
        <div class="p-4 flex flex-col gap-4">
            <?php
            require_once('./connect.php');
            require_once('./fetchdata.php');
            ?>
        </div>
    </main>
</body>
</html>