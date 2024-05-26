<?php
	function scan_dir($dir) {
	    $ignored = array('.', '..', '.svn', '.htaccess');
	
	    $files = array();    
	    foreach (scandir($dir) as $file) {

	        if (substr($file, -4) != '.txt' || in_array($file, $ignored)) continue;
	        $files[$file] = filemtime($dir . '/' . $file);
	    }
	
	    arsort($files);
	    $files = array_keys($files);
	
	    return $files;
	}
?>
<!doctype html>
<html lang="en">
	<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<title>Table #9</title>

	<style type="text/css">
		.circle {
			display: inline-block;
    		width: 25px;
    		border-radius: 50%;
    		text-align: center;
    		font-size: 14px;
    		color: white;
    		border: 2px solid #666;
			--tw-bg-opacity: 1;
			border-color: transparent;
    		/*border-color: hsl(var(--twc-primary)/var(--twc-primary-opacity,var(--tw-bg-opacity)));*/
    		background-color: hsl(var(--twc-primary)/var(--twc-primary-opacity,var(--tw-bg-opacity)));
		}
		.circle-l {
			--twc-primary: 195.20000000000005 100% 42.5%;
		}
		.circle-em {
			--twc-primary: 228.89999999999998 100% 20.2%;
		}
		.circle-ed {
			--twc-primary: 279.70000000000005 69.4% 38.4%;
		}

		.circle-l-lost {
			--tw-bg-opacity: 0.4;
		}
		.circle-em-lost {
			--tw-bg-opacity: 0.4;
		}
		.circle-ed-lost {
			--tw-bg-opacity: 0.4;
		}

	</style>

	</head>
	
	<body>
		<div class="content">
			<div class="container">
				<h2 class="mb-5">Table #9</h2>
				<div class="table-responsive">
					<table class="table custom-table">
						<thead>
							<tr>
								<th scope="col">
									<label class="control control--checkbox">
										<input type="checkbox" class="js-check-all" />
										<div class="control__indicator"></div>
									</label>
								</th>
								<th scope="col">Type</th>
								<th scope="col">Date</th>
								<th scope="col">4/10 - 10/10 Tirages</th>
								<th scope="col">Sortie officielle</th>
							</tr>
						</thead>
						<tbody>
							<!--<tr>
								<th scope="row">
									<label class="control control--checkbox">
										<input type="checkbox" />
										<div class="control__indicator"></div>
									</label>
								</th>
								<td>Europe & Dreams</td>
								<td>15 April 2024</td>
								<td>
									<span><span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span></span> <br>
									<span><span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span></span> <br>
									<span><span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span></span> <br>
									<span><span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span></span> <br>
								</td>
								<td><span><span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span> <span class="circle circle-ed">12</span></span> <br></td>
							</tr>

							<tr>
								<th scope="row">
									<label class="control control--checkbox">
										<input type="checkbox" />
										<div class="control__indicator"></div>
									</label>
								</th>
								<td>Lolly pop's</td>
								<td>15 April 2024</td>
								<td>
									<span><span class="circle circle-l">12</span> <span class="circle circle-l">15</span> <span class="circle circle-l">13</span> <span class="circle circle-l">40</span> <span class="circle circle-l">33</span></span> <br>
									<span><span class="circle circle-l">12</span> <span class="circle circle-l">15</span> <span class="circle circle-l">13</span> <span class="circle circle-l">40</span> <span class="circle circle-l">33</span></span> <br>
									<span><span class="circle circle-l">12</span> <span class="circle circle-l">15</span> <span class="circle circle-l">13</span> <span class="circle circle-l">40</span> <span class="circle circle-l">33</span></span> <br>
									<span><span class="circle circle-l">12</span> <span class="circle circle-l">15</span> <span class="circle circle-l">13</span> <span class="circle circle-l">40</span> <span class="circle circle-l">33</span></span> <br>

								</td>
								<td><span><span class="circle circle-l">08</span> <span class="circle circle-l">12</span> <span class="circle circle-l">13</span> <span class="circle circle-l">25</span> <span class="circle circle-l">40</span></span> <br></td>
							</tr>

							<tr>
								<th scope="row">
									<label class="control control--checkbox">
										<input type="checkbox" />
										<div class="control__indicator"></div>
									</label>
								</th>
								<td>Millions</td>
								<td>12 April 2024</td>
								<td>
									<span><span class="circle circle-em circle-em circle-em-lost">02</span> <span class="circle circle-em circle-em-lost">05</span> <span class="circle circle-em circle-em-lost">12</span> <span class="circle circle-em">25</span> <span class="circle circle-em">49</span></span> <br>
									<span><span class="circle circle-em circle-em circle-em">12</span> <span class="circle circle-em circle-em-lost">17</span> <span class="circle circle-em circle-em">25</span> <span class="circle circle-em circle-em-lost">35</span> <span class="circle circle-em">49</span></span> <br>

								</td>
								<td><span><span class="circle circle-em">12</span> <span class="circle circle-em">15</span> <span class="circle circle-em">25</span> <span class="circle circle-em">30</span> <span class="circle circle-em">49</span></span> <br></td>
							</tr>-->

							<?php
								$f = scan_dir('.');
 								foreach ($f as $key => $value) {
 									//eurodreams
 									if (substr($value, -13) == 'mytirages.txt' && substr($value, 0, 10) == 'eurodreams'){
 										echo('<tr><th scope="row"><label class="control control--checkbox"><input type="checkbox" /><div class="control__indicator"></div></label></th><td>Europe & Dreams</td>');
 										echo('<td>'.substr($value, 11, 10).'</td>');
 										$date = substr($value, 11, 10);

 										if ($file = fopen($value, "r")) {
 											$myArray = [];
 											while(!feof($file)) {
 												$line = fgets($file);
 												if($line == '') continue;
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												array_push($myArray, explode(',', $line));
 											}
 										}

 										$myArray_res = [];
 										if(file_exists('../eurodreams-'.$date.'-resultat.txt'))
 											if ($file_res = fopen('../eurodreams-'.$date.'-resultat.txt', "r")) {
 												$line = fgets($file_res);
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												$myArray_res = explode(',', $line);
 											}
 										if($myArray_res==[]) $myArray_res = [0,0,0,0,0,0];
 										
 										echo('<td>');
 										foreach ($myArray as $k => $a) {
 											echo('<span>');
 											foreach ($a as $key => $v) {
 												$lost = '';
 												if (!in_array($v, $myArray_res))
 													$lost = 'circle-ed-lost';

 												echo('<span class="circle circle-ed circle-ed '.$lost.'">'.$v.'</span> ');
 											}
 											echo('</span><br>');
 										}

 										echo('<td>');
 										foreach ($myArray_res as $key => $v)
 											echo('<span class="circle circle-ed circle-ed">'.$v.'</span> ');
 										echo('</td></th></tr>');
 									}
 									//loto
 									if (substr($value, -13) == 'mytirages.txt' && substr($value, 0, 4) == 'loto'){
 										echo('<tr><th scope="row"><label class="control control--checkbox"><input type="checkbox" /><div class="control__indicator"></div></label></th><td>Lolly pop\'s</td>');
 										echo('<td>'.substr($value, 5, 10).'</td>');
 										$date = substr($value, 5, 10);

 										if ($file = fopen($value, "r")) {
 											$myArray = [];
 											while(!feof($file)) {
 												$line = fgets($file);
 												if($line == '') continue;
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												array_push($myArray, explode(',', $line));
 											}
 										}

 										$myArray_res = [];
 										if(file_exists('../loto-'.$date.'-resultat.txt'))
 											if ($file_res = fopen('../loto-'.$date.'-resultat.txt', "r")) {
 												$line = fgets($file_res);
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												$myArray_res = explode(',', $line);
 											}
 										if($myArray_res==[]) $myArray_res = [0,0,0,0,0];
 										
 										echo('<td>');
 										foreach ($myArray as $k => $a) {
 											echo('<span>');
 											foreach ($a as $key => $v) {
 												$lost = '';
 												if (!in_array($v, $myArray_res))
 													$lost = 'circle-l-lost';

 												echo('<span class="circle circle-l circle-l '.$lost.'">'.$v.'</span> ');
 											}
 											echo('</span><br>');
 										}

 										echo('<td>');
 										foreach ($myArray_res as $key => $v)
 											echo('<span class="circle circle-l circle-l">'.$v.'</span> ');
 										echo('</td></th></tr>');
 									}

 									//euromillions
 									if (substr($value, -13) == 'mytirages.txt' && substr($value, 0, 12) == 'euromillions'){
 										echo('<tr><th scope="row"><label class="control control--checkbox"><input type="checkbox" /><div class="control__indicator"></div></label></th><td>Millions</td>');
 										echo('<td>'.substr($value, 13, 10).'</td>');
 										$date = substr($value, 13, 10);

 										if ($file = fopen($value, "r")) {
 											$myArray = [];
 											while(!feof($file)) {
 												$line = fgets($file);
 												if($line == '') continue;
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												array_push($myArray, explode(',', $line));
 											}
 										}
 										
 										$myArray_res = [];
 										if(file_exists('../euromillions-'.$date.'-resultat.txt'))
 											if ($file_res = fopen('../euromillions-'.$date.'-resultat.txt', "r")) {
 												$line = fgets($file_res);
 												$line = str_replace('[','',$line);
 												$line = str_replace(']','',$line);
 												$myArray_res = explode(',', $line);
 											}
 										if($myArray_res==[]) $myArray_res = [0,0,0,0,0];
 										
 										echo('<td>');
 										foreach ($myArray as $k => $a) {
 											echo('<span>');
 											foreach ($a as $key => $v) {
 												$lost = '';
 												if (!in_array($v, $myArray_res))
 													$lost = 'circle-em-lost';

 												echo('<span class="circle circle-em circle-em '.$lost.'">'.$v.'</span> ');
 											}
 											echo('</span><br>');
 										}

 										echo('<td>');
 										foreach ($myArray_res as $key => $v)
 											echo('<span class="circle circle-em circle-em">'.$v.'</span> ');
 										echo('</td></th></tr>');
 									}
 								}
							?>					

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>