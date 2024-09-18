<?php
$db	=	new mysqli('localhost','root','','trial');
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit();
}
?>

<table align="center" width="800" border="1" style="border-collapse:collapse; border:1px solid #ddd;" cellpadding="5" cellspacing="0">
	<thead>
		<tr bgcolor="#FFCC00">
			<th>Country Code</th>
			<th>Country Name</th>
			<th>Currency Code</th>
			<th>Population</th>
			<th>Fips Code</th>
			<th>ISO Numeric</th>
			<th>North</th>
			<th>South</th>
			<th>East</th>
			<th>West</th>
			<th>Capital</th>
			<th>Continent Name</th>
			<th>Continent</th>
			<th>Area In Sq Km</th>
			<th>ISO Alpha 3</th>
			<th>Geoname Id</th>
		</tr>
	</thead>
	<tbody>
	<?php
if(($handle		=	fopen("countries.csv", "r")) !== FALSE){
	$n			=	1;
	while(($row	=	fgetcsv($handle)) !== FALSE){
		$db->query('INSERT INTO `countries`(`countryCode`, `countryName`, `currencyCode`, `population`, `fipsCode`, `isoNumeric`, `north`, `south`, `east`, `west`, `capital`, `continentName`, `continent`, `areaInSqKm`, `isoAlpha3`, `geonameId`) VALUES ("'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'","'.$row[6].'","'.$row[7].'","'.$row[8].'","'.$row[9].'","'.$row[10].'","'.$row[11].'","'.$row[12].'","'.$row[13].'","'.$row[14].'","'.$row[15].'","'.$row[16].'")');
		if($n>1){
				?>
				<tr>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
					<td><?php echo $row[7];?></td>
					<td><?php echo $row[8];?></td>
					<td><?php echo $row[9];?></td>
					<td><?php echo $row[10];?></td>
					<td><?php echo $row[11];?></td>
					<td><?php echo $row[12];?></td>
					<td><?php echo $row[13];?></td>
					<td><?php echo $row[14];?></td>
					<td><?php echo $row[15];?></td>
					<td><?php echo $row[16];?></td>
				</tr>
				<?php
			}
			$n++;
		}
		fclose($handle);
	}
	?>
	</tbody>
</table>