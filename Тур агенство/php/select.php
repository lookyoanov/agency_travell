 <?php //Вывод карточек с турами
    $query = ('SELECT * FROM `tur` ORDER BY `id_tur` DESC');
	$result = mysqli_query($link, $query);

	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	$count = array_key_last($data);  
	for($i=0;$i<=$count; $i++){
		echo '<div class="col-4">';
		echo '<div class="card" style="width: 300px;">';
		echo '<img src="img/6картинка.jpg" class="card-img-top" alt="...">';
		echo '<div class="card-body">';
		echo '<h5 class="card-title">'.($data[$i][name]).'</h5>';
		echo '<p class="card-text">'.($data[$i][description]).'</p>';
		echo '<a href="#" class="btn btn-primary">Приобрести</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
?>