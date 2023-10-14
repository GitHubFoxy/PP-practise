<?php
require_once('./connect.php');
echo "<!DOCTYPE html>";
echo '<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>';
echo "<title>Admin</title>";
echo '</head>';
echo '<body>';
echo "<nav class='bg-[#F7F89A] w-full h-16 grid place-content-center'>
<a href='./' class='text-xl'>Волшебные рецепты - Админ панель</a>
</nav>";
echo '<main class="max-w-[1080px] mx-auto bg-[#D9D9D9] min-h-screen p-12 items-center flex flex-col gap-4">';
echo '<div class="bg-[#887E7E] w-full p-4 h-screen rounded-md">';
echo '<h1 class="text-center text-xl text-white mb-4">Добавление рецепта</h1>';
echo '<form action="./additem.php" method="POST" class="flex flex-col items-center gap-2">';
echo '<div class="w-full grid grid-cols-3 gap-2">';
echo '<div class="flex flex-col gap-2">';
echo '<input name="name" class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Имя"><input name="steps"class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Кол-во шагов">';
echo '<input name="time" class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Сколько времени ">';
echo '</div>';
echo '<textarea name="products" class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Продукты"></textarea>';
echo '<textarea name="descr" class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Описание"></textarea>';
echo '</div>';
echo '<div class="w-full flex flex-col gap-2">';
echo '<textarea name="todo" class="py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Что делать"></textarea>';
echo '<input name="image_link" class="w-full py-2 px-4 rounded-md bg-[#D9D9D9] transition-colors cursor-pointer hover:bg-[#A1a1a1]" placeholder="Ссылка на картинку">';
echo '</div>';
echo '<button type="submit" class="py-2 px-6 bg-[#D9D9D9]">Добавить</button>';
echo '</form>';
echo '</main>';
echo '</body>';
echo '</html>';

    
?>