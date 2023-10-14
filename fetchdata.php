<?php
require_once('./connect.php');
$sql = "SELECT * FROM `recipes`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   echo '<form action="./currentpage.php" method="GET"><button type="submit" class="w-full hover:cursor-pointer hover:bg-[#A1A1A1] transition-colors p-4 rounded-md bg-[#C1C0C0] flex gap-4"><input name="id" value="'.$row['id'].'" class="hidden"><img class="rounded-md aspect-square w-[150px] object-cover" src="'.$row['image_link'] .'" alt=""><div class="flex flex-col gap-4 w-full"><h1 class="text-center w-full">'.$row['name'].'</h1><p>'.$row['descr'].'</p></button></form>';
  }
} else {
  echo "Нет рецептов";
}
$conn->close();
?>