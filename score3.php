<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML to PDF Eample</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="html2pdf.bundle.min.js"></script>
    <script>
      function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("invoice");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
      }
    </script>
</head>
<body>
	<div id="invoice" style="margin: 12px;">
		<?php include 'score1.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score4.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score5.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score6.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score7.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score8.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include 'score9.php'; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
<button onclick="generatePDF()">Download as PDF</button>
</body>
</html>