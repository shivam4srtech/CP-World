<?php
if($_POST){
    require('fpdf/fpdf.php');
    $name = $_POST['usname'];
    $dob = $_POST['dob'];
    $job = $_POST['job'];
    $title = 'User Report';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($job)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Name:', 1, 0, 'C');
    $pdf->Cell($w, 10, $name, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'DOB:', 1, 0, 'C');
    $pdf->Cell($w, 10, $dob, 1, 1, 'C');

    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'Job:', 1, 0, 'C');
    $pdf->Cell($w, 10, $job, 1, 1, 'C');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Add New Users
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="usname" placeholder="Name" required>
                <input type="text" name="dob" placeholder="DOB" required>
                <input type="text" name="job" placeholder="Current Job" required>
                <input type="submit" value="Add User">
            </form>
        </div>
        <div class="footer">
            <p>Developed by <a href="https://vicodemedia.com" target="_blank">Vicode Media</a></p>
        </div>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>