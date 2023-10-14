<?php
require_once('./connect.php');
$id = $_GET['id'];
$sql = "SELECT * from recipes WHERE id = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
            $row = $result->fetch_assoc();
            echo "<!DOCTYPE html>";
            echo '<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://cdn.tailwindcss.com"></script>';
            echo "<title>" . $row['name'] . "</title>";
            echo '</head>';
            echo '<body>';
            echo "<nav class='bg-[#F7F89A] w-full h-16 grid place-content-center'>
            <a href='./' class='text-xl'>Волшебные рецепты</a>
            </nav>";
            echo '<main class="max-w-[1080px] mx-auto bg-[#D9D9D9] min-h-screen p-12 items-center flex flex-col gap-4">';
            echo '<div class="flex flex-col items-center mt-2 max-w-[900px]">';
            echo '<img class="rounded-md aspect-video w-[900px] object-cover" src="'.$row['image_link'] .'" alt="">';
            echo '<h1 class="text-2xl mt-4">'.$row['name'].'</h1>';
            echo '<h2 class="px-12 py-2">'.$row['descr'].'</h2>';
            echo '<p class="font-bold self-start ml-12">Количество шагов: '.$row['steps'].' | Время: '. $row['time'].'</p>';
            echo '<p class="text-lg">Продукты: '.$row['products'].'</p>';
            echo '<p class="text-xl mb-12 ">Ход работы: '.$row['todo'].'</p>';
            echo '<br><a href="./">Назад</a>';
            echo '</div>';
            echo '</main>';
            echo '</body>';
            echo '</html>';

    
}
?>