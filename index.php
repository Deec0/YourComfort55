<?php
include 'boot.php';
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
		<link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/swiper-bundle.min.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/style.css">

		<title>ВашКомфорт55</title>
	</head>
	<body>

		<!-- Sprite -->
		<svg style="display: none;">

			<symbol id="user" viewBox="0 0 24 24">
				<g>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12,0.1c-3,0-5.5,2.5-5.5,5.5S9,11.1,12,11.1c3,0,5.5-2.5,5.5-5.5S15,0.1,12,0.1z M8.2,5.6
						c0-2.1,1.7-3.8,3.8-3.8s3.8,1.7,3.8,3.8S14.1,9.4,12,9.4S8.2,7.7,8.2,5.6z"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12,12.9c-2.4,0-4.5,0.5-6.2,1.5c-1.6,0.9-2.8,2.3-2.8,4c0,1.7,1.2,3.1,2.8,4c1.6,0.9,3.8,1.5,6.2,1.5
						c2.4,0,4.5-0.5,6.2-1.5c1.6-0.9,2.8-2.3,2.8-4c0-1.7-1.2-3.1-2.8-4C16.5,13.4,14.4,12.9,12,12.9z M4.8,18.4c0-0.8,0.6-1.8,1.9-2.5
						c1.3-0.8,3.2-1.2,5.3-1.2s4,0.5,5.3,1.2c1.3,0.8,1.9,1.7,1.9,2.5c0,0.8-0.6,1.8-1.9,2.5c-1.3,0.8-3.2,1.2-5.3,1.2s-4-0.5-5.3-1.2
						C5.4,20.1,4.8,19.2,4.8,18.4z"/>
				</g>
			</symbol>

			<symbol id="call" viewBox="0 0 24 24">
				<g>
					<path d="M12.3,0.9c0.1-0.5,0.5-0.8,1-0.8c0,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.4,0.1c0.4,0.1,0.9,0.3,1.5,0.6c1.2,0.6,2.8,1.5,4.5,3.2
						s2.6,3.3,3.2,4.5c0.3,0.6,0.4,1.1,0.6,1.5c0.1,0.2,0.1,0.3,0.1,0.4c0,0.1,0,0.1,0,0.1l0,0c0.1,0.5-0.3,1-0.7,1.1
						c-0.5,0.1-1-0.3-1-0.7c0,0,0,0,0-0.1c0-0.1,0-0.2-0.1-0.3c-0.1-0.3-0.2-0.7-0.5-1.2c-0.5-1-1.3-2.5-2.8-4c-1.5-1.5-2.9-2.4-4-2.8
						c-0.5-0.2-0.9-0.4-1.2-0.5C13.3,2,13.1,2,13.1,2C12.6,1.9,12.2,1.4,12.3,0.9z"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.6,5.1c0.1-0.5,0.6-0.8,1.1-0.6l-0.3,0.9c0.3-0.9,0.3-0.9,0.3-0.9l0,0l0,0l0,0l0,0l0,0c0,0,0,0,0.1,0
						c0.1,0,0.1,0,0.2,0.1c0.2,0.1,0.4,0.2,0.7,0.4c0.6,0.4,1.4,0.9,2.4,1.9c1,1,1.5,1.8,1.9,2.4c0.2,0.3,0.3,0.5,0.4,0.7
						c0,0.1,0.1,0.2,0.1,0.2c0,0,0,0.1,0,0.1l0,0l0,0l0,0l0,0c0,0,0,0-0.9,0.3l0.9-0.3c0.1,0.5-0.1,1-0.6,1.1c-0.5,0.1-1-0.1-1.1-0.6l0,0
						c0,0,0-0.1,0-0.1c0-0.1-0.1-0.3-0.3-0.5c-0.3-0.5-0.8-1.1-1.6-2c-0.8-0.8-1.5-1.3-2-1.6c-0.2-0.1-0.4-0.2-0.5-0.3
						c-0.1,0-0.1,0-0.1,0l0,0C12.7,6.1,12.5,5.6,12.6,5.1z"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M2.3,4c2-2,5.5-1.9,6.9,0.7L10,6.1c0.9,1.7,0.5,3.8-0.8,5.1c0,0-0.1,0.2-0.1,0.4c0,0.3,0.1,1,1.2,2.1
						c1.1,1.1,1.8,1.2,2.1,1.2c0.2,0,0.4-0.1,0.4-0.1c1.4-1.4,3.5-1.8,5.1-0.8l1.4,0.8c2.5,1.4,2.7,4.9,0.7,6.9c-1.1,1.1-2.5,2.1-4.2,2.1
						c-2.5,0.1-6.7-0.6-10.9-4.7C0.7,15,0.1,10.8,0.2,8.2C0.2,6.5,1.2,5.1,2.3,4z M7.6,5.5c-0.7-1.3-2.7-1.6-4-0.3C2.6,6.2,2,7.3,2,8.3
						c-0.1,2.1,0.4,5.8,4.2,9.5c3.7,3.7,7.4,4.3,9.5,4.2c1,0,2.1-0.7,3-1.6c1.3-1.3,1-3.3-0.3-4L17,15.6c-0.9-0.5-2.1-0.3-3,0.5
						c-0.1,0.1-0.6,0.6-1.6,0.6c-1,0-2.2-0.4-3.5-1.7c-1.3-1.3-1.8-2.5-1.7-3.5c0-1,0.6-1.5,0.6-1.6c0.9-0.9,1-2.1,0.5-3L7.6,5.5z"/>
				</g>
			</symbol>

			<symbol id="moneyStacks" viewBox="0 0 24 24">
				<g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">
					<path d="M111.8,5081.9c-9.7-1-19.4-3.5-26-6.7c-6.1-3-10.7-7.2-10.7-9.9c0-4.9,7-10.4,17.4-13.6c25.7-8.2,63.7-4.1,75.3,8
						c4.6,4.7,3.1,9.2-4.4,13.7C152.5,5080.1,130,5083.8,111.8,5081.9z"/>
					<path d="M75.1,5041.3v-9l3.3-3.1c3.9-3.7,11.8-7.3,21.6-9.6c5.9-1.3,9.2-1.6,23-1.6c14.2-0.1,16.9,0.1,22.8,1.6
						c8.6,2.2,14,4.3,18.9,7.4c5.3,3.5,6.2,5.8,6.2,15.5c0,4.3-0.1,7.9-0.4,7.9s-1.9-1-3.9-2.2c-9.3-5.7-26-9.2-43.6-9.2
						c-17.4,0-30.7,2.6-41.7,8.1l-6.2,3.1L75.1,5041.3L75.1,5041.3z"/>
					<path d="M30.5,5042c-17.2-2.8-30.2-9.8-30.2-16.2c0-6.7,13.8-13.8,31.8-16.5c6.6-1,25.6-1,31.4-0.1l3.7,0.6l0.2,15.8
						c0.1,14.6,0.1,15.9-1.1,16.4C63.8,5043,36.9,5043,30.5,5042z"/>
					<path d="M75.1,5011.6c0-8.8,0-9,2.2-11.4c6.2-7.1,24.7-12.5,42.8-12.5h8.1l1.9,4c3,5.8,6.1,10.2,10.7,15c3.7,3.8,4,4.3,2.2,3.9
						c-5.8-1.3-20.6-1.9-29.3-1.3c-14.9,1.3-25.1,3.9-34,8.8l-4.7,2.5V5011.6z"/>
					<path d="M176.5,5017.9c-29.1-6.1-48.3-31.8-44.5-59.9c1.6-12.9,6.7-22.9,16-32.1c10.5-10.4,22.6-15.3,37.5-15.3
						c21.4,0,39.4,11.1,48.6,30.3c7.5,15.4,7.5,31.7-0.1,47.4c-2.8,6-4.4,8.1-10.2,13.9c-11.2,11.2-23,16.2-38.2,16
						C181.4,5018.2,177.3,5018,176.5,5017.9z M196.7,4994.8c4.6-1.3,8.8-4.7,11-8.8c2.3-4.5,2.3-13,0-17.9
						c-3.7-7.5-10.2-11.1-21.5-11.7c-7.3-0.4-7.5-0.4-7.5-2.3c0-1.9,0.1-1.9,7.3-2.1l7.3-0.2v-2.5v-2.5l-7.3-0.2l-7.3-0.2l-0.2-6.4
						c-0.1-3.9-0.6-6.5-1.1-6.9c-1.4-0.9-8.4-0.7-9.4,0.3c-0.5,0.5-0.9,3.3-0.9,7.1v6.2h-2.6c-2.5,0-2.6,0.1-2.6,2.6
						c0,2.5,0.1,2.6,2.6,2.6h2.6v20.6v20.6l1.7,1.1c2.1,1.3,13.3,2.5,19.6,2.1C190.9,4995.9,194.7,4995.3,196.7,4994.8z"/>
					<path d="M181,4987.1l-2.2-0.5l-0.2-10.7l-0.2-10.6h5.3c9.5,0,13.6,3.1,14.1,10.7c0.2,3.9,0.1,4.9-1.3,6.7
						c-0.9,1.1-2.5,2.5-3.7,3.1C190.1,4987.1,184.1,4987.7,181,4987.1z"/>
					<path d="M0.3,5002.6v-9l2.7-3c7.7-8.5,32.4-14,54.2-12c5.1,0.4,9.6,1,9.9,1.2c0.3,0.2,0.6,5.1,0.6,10.8v10.5l-5-0.6
						c-8.8-1-27.7-0.6-35,0.8c-10.8,2-18.7,4.7-24.3,8.3l-3,1.9V5002.6z"/>
					<path d="M75.1,4981.7c0-8.8,0-9,2.2-11.4c5.9-6.7,24.4-12.5,40.3-12.5h6.4v6.6c0,3.6,0.2,8.2,0.6,10.3l0.5,3.8l-7.6,0.5
						c-16.6,1.1-27.8,3.7-37,8.7l-5.5,2.9V4981.7z"/>
					<path d="M0.3,4972.5v-9.1l3.7-3.5c4.3-4.2,11.7-7.3,23.3-9.7c6.3-1.3,10.2-1.6,20.5-1.6c7,0.1,14.2,0.4,16.1,0.7l3.4,0.7l0.2,10.6
						l0.2,10.7l-5.1-0.6c-8.6-1-27.7-0.6-35.2,0.8c-9,1.6-17.9,4.6-23,7.6l-4,2.5V4972.5z"/>
					<path d="M75.1,4951.6c0-8.7,0-8.8,2.2-11.3c6.7-7.6,24.8-12.6,45.9-12.6c6.1,0,11.2,0.2,11.4,0.4c0.2,0.2-1.1,3.1-2.9,6.6
						c-1.9,3.4-3.9,8-4.6,10l-1.2,3.8l-11.4,0.9c-13.9,1-24,3.4-32.8,7.9l-6.6,3.2L75.1,4951.6L75.1,4951.6z"/>
					<path d="M0.3,4943.1c0-10.1,0.5-11.4,5.9-15.1c10.4-7.1,32.3-11.1,50.9-9.3c5.1,0.5,9.4,1.1,9.8,1.3c0.4,0.2,0.7,5.1,0.7,10.8
						v10.5l-3.9-0.6c-2.2-0.3-10-0.6-17.4-0.5c-10.8,0.1-15,0.4-21.2,1.7c-8.8,1.9-17.8,5.1-21.9,7.9l-2.8,1.9V4943.1z"/>
					<path d="M75.1,4921.8v-8.9l2.6-2.8c10.1-11.3,45-15.9,70.5-9.5c6.5,1.6,15.2,5,15.2,5.9c0,0.1-1.8,1.2-4,2.2
						c-4,1.8-10.4,6-15.1,9.9l-2.3,1.9l-8.2-0.8c-19.1-1.9-40.8,1.5-53.9,8.6l-4.7,2.5L75.1,4921.8L75.1,4921.8z"/>
				</g>
			</symbol>

			<symbol id="creditCard" viewBox="0 0 24 24">
				<g>
					<path d="M23.1,3.4H4.5c-0.5,0-0.9,0.4-0.9,0.9v1.9H1.2C0.6,6.3,0,6.8,0,7.5v11.8c0,0.7,0.6,1.2,1.2,1.2h18.6c0.7,0,1.2-0.6,1.2-1.2
						v-2.2h2c0.5,0,0.9-0.4,0.9-0.9V4.4C24,3.9,23.6,3.4,23.1,3.4z M4.6,18.9H1.7v-1.5h2.9L4.6,18.9L4.6,18.9z M8.3,18.9H5.4v-1.5h2.9
						V18.9z M12,18.9H9.1v-1.5H12V18.9z M13.8,12.4c0,0.8,0.3,1.6,0.9,2.1c-0.3,0.2-0.7,0.3-1.2,0.3c-1.3,0-2.4-1.1-2.4-2.4
						c0-1.3,1.1-2.4,2.4-2.4c0.4,0,0.8,0.1,1.2,0.3C14.2,10.8,13.8,11.6,13.8,12.4z M16.8,10c1.3,0,2.4,1.1,2.4,2.4
						c0,1.3-1.1,2.4-2.4,2.4c-1.3,0-2.4-1.1-2.4-2.4C14.4,11.1,15.5,10,16.8,10z M15.7,18.9h-2.9v-1.5h2.9V18.9z M19.4,18.9h-2.9v-1.5
						h2.9V18.9z M22.2,15.3h-1.1v-4.4h1.1V15.3z M22.2,7.1H21c-0.2-0.5-0.6-0.8-1.2-0.8H5.4v-1h16.8L22.2,7.1L22.2,7.1z"/>
				</g>
			</symbol>

			<symbol id="telegram" viewBox="0 0 24 24">
				<g>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
				</g>
			</symbol>

			<symbol id="viber" viewBox="0 0 24 24">
				<g>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.892 13.745s.427.038.656-.247l.448-.563c.216-.28.738-.458 1.249-.174.676.382 1.55.982 2.149 1.541.33.278.407.688.182 1.121l-.002.009c-.232.408-.541.791-.932 1.148l-.009.006c-.44.367-.946.58-1.487.404l-.01-.014c-.972-.275-3.304-1.464-4.79-2.649-2.431-1.918-4.159-5.082-4.637-6.778l-.015-.01c-.176-.543.039-1.049.404-1.488l.007-.008c.357-.391.739-.701 1.148-.932l.009-.002c.432-.225.842-.149 1.121.182.367.379 1.056 1.291 1.54 2.149.284.51.106 1.033-.173 1.248l-.564.448c-.284.23-.247.657-.247.657s.834 3.156 3.953 3.952zm4.907-2.616c-.167 0-.303-.135-.304-.302-.014-1.83-.564-3.288-1.634-4.332-1.072-1.045-2.427-1.581-4.027-1.592-.168-.001-.303-.138-.301-.306.001-.167.136-.301.303-.301h.002c1.762.012 3.258.606 4.447 1.764 1.19 1.162 1.802 2.765 1.817 4.763.001.167-.133.304-.301.306h-.002zm-1.595-.624h-.007c-.168-.004-.301-.143-.297-.31.024-1.038-.273-1.878-.906-2.569-.63-.689-1.495-1.065-2.645-1.149-.167-.013-.293-.158-.281-.325.013-.167.158-.293.325-.281 1.294.095 2.32.548 3.049 1.345.733.8 1.092 1.807 1.065 2.992-.004.165-.139.297-.303.297zm-1.558-.522c-.161 0-.295-.126-.303-.289-.051-1.03-.537-1.534-1.527-1.588-.168-.009-.296-.152-.287-.319.009-.168.151-.296.319-.287 1.308.07 2.034.819 2.101 2.164.009.167-.12.31-.288.318l-.015.001zm6.817 3.469c-.605 4.877-4.172 5.185-4.83 5.396-.28.09-2.882.737-6.152.524 0 0-2.438 2.94-3.199 3.705-.119.119-.258.167-.352.145-.131-.032-.167-.188-.165-.414l.02-4.016v-.001c-4.762-1.323-4.485-6.295-4.431-8.898.054-2.603.543-4.736 1.996-6.17 2.61-2.364 7.987-2.011 7.987-2.011 4.541.02 6.717 1.387 7.222 1.845 1.675 1.434 2.528 4.867 1.904 9.895zm-.652-11.113c-.597-.548-3.007-2.298-8.375-2.322 0 0-6.33-.382-9.416 2.45-1.718 1.718-2.322 4.231-2.386 7.348-.063 3.118-.146 8.958 5.484 10.542l.006.002-.004 2.416s-.035.979.609 1.179c.779.241 1.236-.502 1.981-1.304.408-.44.971-1.086 1.397-1.58 3.851.322 6.812-.417 7.149-.526.777-.253 5.177-.816 5.893-6.657.738-6.022-.358-9.83-2.338-11.548z"/>
				</g>
			</symbol>

			<symbol id="whatsapp" viewBox="0 0 24 24">
				<g>
					<path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
				</g>
			</symbol>

			<symbol id="fileImage" viewBox="0 0 24 24">
				<g>
					<path d="M21,3H3C1.4,3,0,4.3,0,6v12c0,1.5,1.2,2.8,2.7,3c0.1,0,0.2,0,0.3,0h18c0.1,0,0.2,0,0.3,0c0,0,0.1,0,0.1,0
						c1.5-0.2,2.6-1.4,2.6-3V6C24,4.3,22.6,3,21,3z M22,16.5l-2.2-4.4c-0.2-0.5-0.7-0.9-1.2-1C18.4,11,18.2,11,18,11
						c-0.4,0-0.7,0.1-1,0.3L10.6,15l-2.5-1.7C7.8,13.1,7.4,13,7,13c-0.5,0-1,0.2-1.4,0.6L2,17.2V6c0-0.6,0.5-1,1-1h18c0.5,0,1,0.4,1,1
						V16.5z"/>
					<circle cx="11" cy="10" r="2"/>
				</g>
			</symbol>

		</svg>

		<div class="wrapper">

			<!-- Header -->
			<header class="header" id="header">
				<div class="container">
					<div class="header__row d-flex align-items-center justify-content-between">
						<div class="header__top d-flex align-items-center justify-content-between">
							<div class="header__top-row d-flex align-items-center justify-content-between">
								<a class="header__logo" href="#"><img src="img/logo-YourComfort55.svg" alt="логотип ВашКофморт55 Омск"></a>
								<a class="header__tel d-lg-none" href="tel:+79222000302">
									<span class='icon'><svg class='icon__item'><use xlink:href='#call'></use></svg></span>
									<span>+7 (922) 200 03-02</span>
								</a>
							</div>
							<button class="nav-button d-flex align-items-center d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navToggle" aria-expanded="false" aria-controls="navToggle">
								<div class="nav-anim"><span></span><span></span><span></span><span></span></div>
							</button>
						</div>
						<nav class="header__menu menu d-none d-lg-block">
							<ul class="menu__list d-flex align-items-center justify-content-end">
								<li><a href="#" data-scroll="#services"><span>Наши услуги</span></a></li>
								<li><a href="#" data-scroll="#advantages"><span>Преимущества</span></a></li>
								<li><a href="#" data-scroll="#reviews"><span>Отзывы</span></a></li>
								<li><a href="#" data-scroll="#about"><span>О нас</span></a></li>
								<li><a href="#" data-scroll="#contacts"><span>Контакты</span></a></li>

								<?php if ($_SESSION['user_id'] == 1) { ?>
									<li class="menu__btn"><a href="admin-panel.php"><div class='icon'><svg class='icon__item'><use xlink:href='#user'></use></svg></div><span>Админ</span></a></li>	
								<?php } else if(isset($_SESSION['username']) && $_SESSION['username'] != '') { ?>
									<li class="menu__btn"><a href="do_logout.php"><div class='icon'><svg class='icon__item'><use xlink:href='#user'></use></svg></div><span>Выйти</span></a></li>
								<?php } else { ?>
									<li class="menu__btn"><a data-bs-toggle="modal" href="#modalAuth" role="button"><div class='icon'><svg class='icon__item'><use xlink:href='#user'></use></svg></div><span>Войти</span></a></li>
										<?php } ?>

							</ul>
						</nav>
					</div>
				</div>

				<div class="header__nav nav collapse d-lg-none" id="navToggle">
					<div class="nav__wrapper">
						<ul class="nav__list">
							<?php if ($_SESSION['user_id'] == 1) { ?>
								<li><a href="do_logout.php"><span>Выйти</span></a></li>
							<?php } else if(isset($_SESSION['username']) && $_SESSION['username'] != ''){ ?>
								<li><a href="admin-panel.php"><span>Админ</span></a></li>
							<?php } else { ?>
								<li><a data-bs-toggle="modal" href="#modalAuth" role="button"><span>Войти</span></a></li>
									<?php } ?>
							<li><a href="#" data-scroll="#services"><span>Наши услуги</span></a></li>
							<li><a href="#" data-scroll="#advantages"><span>Преимущества</span></a></li>
							<li><a href="#" data-scroll="#reviews"><span>Отзывы</span></a></li>
							<li><a href="#" data-scroll="#about"><span>О нас</span></a></li>
							<li><a href="#" data-scroll="#contacts"><span>Контакты</span></a></li>
						</ul>
					</div>
				</div>

			</header> <!-- /header -->

			<main class="main">

				<!-- Auth -->
				<div class="auth modal fade" id="modalAuth" aria-hidden="true" aria-labelledby="modalAuthLabel" tabindex="-1">
					<div class="auth__dialog modal-dialog modal-dialog-centered">
						<div class="auth__wrapper modal-content">

							<div class="auth__content" id="modalAuthContent">
								<div class="auth__header modal-header">
									<h5 class="auth__title modal-title" id="modalAuthLabel">Авторизация</h5>
									<button class="auth__close btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="auth__body modal-body">
									<form class="auth__form" id="form_login">
										<div class="auth__error" id="form_login_error"></div>
										<div class="auth__input-wrapper">
											<div class="auth__wrap">
												<input class="auth__input input-en input-space" name="username" type="text" placeholder="Логин" maxlength="" required>
											</div>
											<div class="auth__wrap">
												<input class="auth__input input-en input-space" name="password" type="password" placeholder="Пароль" maxlength="" required>
											</div>
										</div>
										<div class="auth__question">
											Нет аккаунта?
											<button type="button" id="modalRegLink">Зарегистрироваться</button>
										</div>
										<button class="auth__btn btn-main" type="submit">Войти</button>
									</form>
								</div>
							</div>

							<div class="auth__content" id="modalRegContent">
								<div class="auth__header modal-header">
									<h5 class="auth__title modal-title" id="modalAuthLabel">Регистрация</h5>
									<button class="auth__close btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="auth__body modal-body">
									<form class="auth__form" id="reg_form">
										<div class="auth__error" id="form_reg_error"></div>
										<div class="auth__input-wrapper">
											<div class="auth__wrap">
												<input class="auth__input input-ru input-space" id="name" name="name" type="text" placeholder="Ваше имя" maxlength="50" required>
											</div>
											<div class="auth__wrap">
												<input class="auth__input input-en input-space" id="username" name="username" type="text" placeholder="Логин" maxlength="50" required>
											</div>
											<div class="auth__wrap">
												<input class="auth__input input-en input-space" id="password" name="password" type="password" placeholder="Пароль" maxlength="50" required>
											</div>
										</div>
										<div class="auth__question">
											Есть аккаунт?
											<button type="button" id="modalAuthLink">Войти</button>
										</div>
										<button class="auth__btn btn-main" type="submit">Зарегистрироваться</button>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Intro -->
				<section class="intro" id="intro">
					<img class="intro__bg d-none d-lg-block" src="img/main_bg.svg" alt="">
					<div class="container">
						<div class="intro__body">
							<div class="intro__col">
								<div class="intro__main">
									<h1 class="intro__title">Ваш Комфорт — Ремонт бытовой техники в Омске</h1>
									<h2 class="intro__subtitle">Мы делаем ваш быт проще и комфортнее</h2>
									<div class="intro__text">
										<p>
											Наши мастера в кратчайшие сроки починят вашу технику, чтобы вы, как и прежде, чувствовали себя комфортно.
										</p>
										<p>
											Мы занимаемся всеми видами техники, а также устанавливаем и обслуживаем кондиционеры.
										</p>
									</div>
									<a class="intro__btn btn-main" href="https://api.whatsapp.com/send/?phone=79222000302" target="_blank">Вызвать мастера</a>
								</div>
							</div>
							<div class="intro__col d-none d-lg-block">
								<div class="intro__img">
									<img src="img/appliances.png" alt="Бытовая техника">
								</div>
							</div>
						</div>
					</div>
				</section> <!-- ./intro -->

				<!-- Services -->
				<section class="services" id="services">
					<div class="container">
						<h2 class="title">Наши услуги</h2>
						<h3 class="subtitle">
							Выезд на адрес и диагностика — <span>бесплатно</span>
							<div>*при осуществлении мастером ремонта</div>
						</h3>
						<div class="services__row row">
							<div class="services__col col-12 col-sm-6">
								<div class="services__item item-yel">
									<div class="services__header">
										<h4 class="services__title">Холодильники</h4>
									</div>
									<div class="services__body row">
										<div class="services__col-list col-12 col-xl-6">
											<ul class="services__list">
												<li>
													<h5>Замена компрессора</h5>
													<div class="services__price"><span>6500</span> ₽</div>
												</li>
												<li>
													<h5>Заправка фреоном</h5>
													<div class="services__price"><span>1200</span> ₽</div>
												</li>
												<li>
													<h5>Диагностика со вскрытием контура</h5>
													<div class="services__price"><span>1200</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 d-none col-xl-6 d-xl-block">
											<div class="services__img">
												<img src="img/services/холодильник.png" alt="холодильник">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services__col col-12 col-sm-6">
								<div class="services__item item-dark">
									<div class="services__header">
										<h4 class="services__title">Стиральные машины</h4>
									</div>
									<div class="services__body row">
										<div class="services__col-list col-12 col-xl-6">
											<ul class="services__list">
												<li>
													<h5>Ремонт платы</h5>
													<div class="services__price"><span>5800</span> ₽</div>
												</li>
												<li>
													<h5>Ремонт бака</h5>
													<div class="services__price">от <span>5000</span> ₽</div>
												</li>
												<li>
													<h5>Замена электро двигателя</h5>
													<div class="services__price">от <span>1500</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 d-none col-xl-6 d-xl-block">
											<div class="services__img">
												<img src="img/services/стиральная_машина.png" alt="стиральная машина">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services__col col-12 col-sm-6">
								<div class="services__item item-lime">
									<div class="services__header">
										<h4 class="services__title">Варочные панели</h4>
									</div>
									<div class="services__body row">
										<div class="services__col-list col-12 col-xl-6">
											<ul class="services__list">
												<li>
													<h5>Замена лампочки</h5>
													<div class="services__price"><span>500</span> ₽</div>
												</li>
												<li>
													<h5>Замена конфорки</h5>
													<div class="services__price">от <span>2000</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 d-none col-xl-6 d-xl-block">
											<div class="services__img">
												<img src="img/services/плита.png" alt="варочная панель">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services__col col-12 col-sm-6">
								<div class="services__item item-aqua">
									<div class="services__header">
										<h4 class="services__title">Кофемашины</h4>
									</div>
									<div class="services__body row">
										<div class="services__col-list col-12 col-xl-6">
											<ul class="services__list">
												<li>
													<h5>Декальцинация</h5>
													<div class="services__price">от <span>1500</span> ₽</div>
												</li>
												<li>
													<h5>Очистка гидросистемы от накипи</h5>
													<div class="services__price"><span>2900</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 d-none col-xl-6 d-xl-block">
											<div class="services__img">
												<img src="img/services/кофемашина.png" alt="кофемашина">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services__col services__col_large col-12">
								<div class="services__item item-lilac">
									<div class="services__header">
										<h4 class="services__title">Посудомоечные машины</h4>
									</div>
									<div class="services__body row">
										<div class="services__col-list col-12 col-sm-6 col-lg-4 col-xl-3">
											<ul class="services__list">
												<li>
													<h5>Ремонт рециркуляционного насоса</h5>
													<div class="services__price">от <span>1500</span> ₽</div>
												</li>
												<li>
													<h5>Чистка засора в трудно доступных местах</h5>
													<div class="services__price"><span>1500</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 col-sm-6 col-lg-4 col-xl-3">
											<ul class="services__list">
												<li>
													<h5>Очистка техники спец средствами</h5>
													<div class="services__price">от <span>1500</span> ₽</div>
												</li>
												<li>
													<h5>Введение в эксплуатацию</h5>
													<div class="services__price">от <span>1500</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 col-sm-6 col-lg-4 col-xl-3">
											<ul class="services__list">
												<li>
													<h5>Замена сливного насоса</h5>
													<div class="services__price"><span>500</span> ₽</div>
												</li>
												<li>
													<h5>Сброс ошибок</h5>
													<div class="services__price"><span>1900</span> ₽</div>
												</li>
											</ul>
										</div>
										<div class="services__col-list col-12 d-none col-xl-3 d-xl-block">
											<div class="services__img">
												<img src="img/services/посудомоечная_машина.png" alt="посудомоечная машина">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="services__col services__col_large col-12">
								<div class="services__item item-coral">
									<div class="services__header m-0">
										<h4 class="services__title">Купим вашу сломанную технику и сами вывезем за 500 ₽</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!-- ./services -->

				<!-- Payment -->
				<section class="payment" id="payment">
					<div class="container">
						<div class="payment__body row align-items-center justify-content-between">
							<div class="payment__main col-12 col-md-7 col-lg-8">
								<h2 class="title">Стоимость ремонта и оплата</h2>
								<h3 class="subtitle">Вы оплачиваете только по результату выполненных работ!</h3>
								<div class="payment__text">
									<p>
										Сначала мы обязательно согласовываем стоимость работ с вами, а только потом приступаем к ремонту. Окончательная цена зависит от объёма работ, сложности поломки и количества необходимых деталей.
									</p>
								</div>
							</div>
							<div class="col-12 col-md-5 col-lg-4 d-flex justify-content-md-end">
								<div class="payment__btn-group">
									<div class="payment__btn-wrap">
										<div class="payment__btn">
											<div class='icon'><svg class='icon__item'><use xlink:href='#moneyStacks'></use></svg></div>
											<span>Оплата наличными</span>
										</div>
									</div>
									<div class="payment__btn-wrap">
										<div class="payment__btn">
											<div class='icon'><svg class='icon__item'><use xlink:href='#creditCard'></use></svg></div>
											<span>Оплата картой</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!-- ./payment -->

				<!-- Advantages -->
				<section class="advantages" id="advantages">
					<div class="container">
						<h2 class="title">Почему стоит обратиться именно к нам?</h2>
						<div class="advantages__row row">
							<div class="advantages__col col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="advantages__item item-yel">
									<div class="advantages__header">
										<h4 class="advantages__title">Опытные мастера</h4>
									</div>
									<div class="advantages__body">
										<div class="advantages__text">
											<p>
												У нас только опытные и квалифицированные мастера
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="advantages__col col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="advantages__item item-lime">
									<div class="advantages__header">
										<h4 class="advantages__title">Гарантия</h4>
									</div>
									<div class="advantages__body">
										<div class="advantages__text">
											<p>
												Действует как на выполненные работы, так и на установленные детали.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="advantages__col col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="advantages__item item-aqua">
									<div class="advantages__header">
										<h4 class="advantages__title">Бесплатная диагностика</h4>
									</div>
									<div class="advantages__body">
										<div class="advantages__text">
											<p>
												Бесплатная диагностика техники для выявления причины неисправности
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="advantages__col col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="advantages__item item-lilac">
									<div class="advantages__header">
										<h4 class="advantages__title">Скидка льготникам</h4>
									</div>
									<div class="advantages__body">
										<div class="advantages__text">
											<p>
												Пенсионерам, инвалидам и ветеранам скидка 10%
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-wrap">
							<a class="btn-main" href="https://api.whatsapp.com/send/?phone=79222000302" target="_blank">Вызвать мастера</a>
						</div>
					</div>
				</section> <!-- ./advantages -->

				<!-- Reviews -->
				<section class="reviews" id="reviews">
					<div class="container">
						<h2 class="title">Отзывы наших клиентов</h2>
						<h3 class="subtitle">Спасибо всем, кто соглашается оставить отзыв!</h3>

						<div class="reviews__alert">
							<div class="subtitle">Пока что здесь пусто. Станьте первым, кто оставит отзыв о нашей работе!</div>
						</div>

						<div class="reviews__slider-body">
							<div class="reviews__slider reviews-slider swiper-container">
								<div class="reviews-slider__wrapper swiper-wrapper" id="reviews-pizdec">
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>

						<div class="btn-wrap">
							<? if($_SESSION['username'] != '' && isset($_SESSION['username'])){
								?><button class="reviews__btn btn-main" type="button" data-bs-toggle="modal" href="#modalReview" role="button">Оставить отзыв</button>
							<? } else { ?>
									<div class="reviews__error">
										Для того чтобы оставить отзыв, 
										<button type="button" data-bs-toggle="modal" href="#modalAuth" role="button">войдите / зарегистрируйтесь</button>
									</div>
								<? } ?>
						</div>

						<div class="auth modal fade" id="modalReview" aria-hidden="true" aria-labelledby="modalReviewLabel" tabindex="-1">
							<div class="auth__dialog modal-dialog modal-dialog-centered">
								<div class="auth__wrapper modal-content">
									<div class="auth__content" id="modalReviewContent">
										<div class="auth__header modal-header">
											<h5 class="auth__title modal-title" id="modalReviewLabel">Оставить отзыв</h5>
											<button class="auth__close btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="auth__body modal-body">
											<form class="auth__form" id="reviewForm" action="do_review.php" method="POST" enctype="multipart/form-data">
												<div class="auth__error" id="form_review_error"></div>
												<div class="auth__input-wrapper">
													<div class="auth__wrap">
														<div class="upload-file">
															<div class="upload-file__wrapper">
																<input class="upload-file__input" type="file" name="image" id="upload-file__input_1" accept=".jpg, .jpeg, .png, .webp">
																<label class="upload-file__label" for="upload-file__input_1">
																	<div class='icon upload-file__icon'><svg class='icon__item'><use xlink:href='#fileImage'></use></svg></div>
																	<span class="upload-file__text">Загрузить фото</span>
																</label>
															</div>
														</div>
													</div>
													<div class="auth__wrap">
														<textarea class="auth__input" name="comment" id="comment" type="text" placeholder="Напишите свой отзыв" maxlength="1024" required></textarea>
													</div>
												</div>
												<button class="auth__btn btn-main" type="submit">Отправить</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section> <!-- ./reviews -->

				<!-- About -->
				<section class="about" id="about">
					<div class="container">
						<div class="about__body row">
							<div class="about__col col-12 col-md-6">
								<div class="about__main">
									<h2 class="title">О нас</h2>
									<div class="about__text">
										<p>
											Более 5 лет мы занимаемся ремонтом различной бытовой техники. У нас работают только квалифицированные специалисты на профессиональном оборудовании. <br>
											Мы уверены в качестве своей работы, поэтому предоставляем гарантию, которая действует как на выполненные работы, так и на установленные детали. <br>
											С каждым из наших клиентов мы работаем только по договору как с физическими, так и с юридическими лицами. <br>
											Пенсионерам, инвалидам и ветеранам предоставляется скидка в размере 10% на все наши услуги.
										</p>
									</div>
								</div>
							</div>
							<div class="about__col col-12 col-md-6 d-flex">
								<div class="about__img">
									<img src="img/about.jpg" alt="фотография мастера ВашКомофрт55">
								</div>
							</div>
						</div>
					</div>
				</section> <!-- ./about -->

				<!-- Team -->
				<section class="team" id="team">
					<div class="container">
						<h2 class="title">Наша команда профессионалов</h2>

						<div class="team__slider-body">
							<div class="team__slider team-slider swiper-container">
								<div class="team-slider__wrapper swiper-wrapper">
									<div class="team-slider__slide swiper-slide">
										<div class="team-slider__item">
											<a class="team-slider__img" href="img/team/Сергей.jpg" data-fancybox="Team" data-caption="Мастер Сергей">
												<img src="img/team/Сергей.jpg" alt="мастер Сергей | ВашКомофрт55">
											</a>
											<h4 class="team-slider__name">Сергей</h4>
										</div>
									</div>
									<div class="team-slider__slide swiper-slide">
										<div class="team-slider__item">
											<a class="team-slider__img" href="img/team/Владимир.jpg" data-fancybox="Team" data-caption="Мастер Владимир">
												<img src="img/team/Владимир.jpg" alt="мастер Владимир | ВашКомофрт55">
											</a>
											<h4 class="team-slider__name">Владимир</h4>
										</div>
									</div>
									<div class="team-slider__slide swiper-slide">
										<div class="team-slider__item">
											<a class="team-slider__img" href="img/team/Кирилл.jpg" data-fancybox="Team" data-caption="Мастер Кирилл">
												<img src="img/team/Кирилл.jpg" alt="мастер Кирилл | ВашКомофрт55">
											</a>
											<h4 class="team-slider__name">Кирилл</h4>
										</div>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>

						<div class="btn-wrap">
							<a class="btn-main" href="https://api.whatsapp.com/send/?phone=79222000302" target="_blank">Вызвать мастера</a>
						</div>
					</div>
				</section> <!-- ./team -->

				<!-- Сertificates -->
				<section class="certificates" id="certificates">
					<div class="container">
						<h2 class="title">Сертификаты</h2>
						<h3 class="subtitle">Наши мастера профессионалы своего дела и имеют настоящие свидетельства, подтверждающие их мастерство</h3>

						<div class="certificates__slider-body">
							<div class="certificates__slider certificates-slider swiper-container">
								<div class="certificates-slider__wrapper swiper-wrapper">
									<div class="certificates-slider__slide swiper-slide">
										<div class="certificates-slider__item">
											<a class="certificates-slider__img" href="img/certificates/01.jpg" data-fancybox="Сertificates" data-caption="">
												<img src="img/certificates/01.jpg" alt="свидетельство | ВашКомофрт55">
											</a>
										</div>
									</div>
									<div class="certificates-slider__slide swiper-slide">
										<div class="certificates-slider__item">
											<a class="certificates-slider__img" href="img/certificates/02.jpg" data-fancybox="Сertificates" data-caption="">
												<img src="img/certificates/02.jpg" alt="свидетельство | ВашКомофрт55">
											</a>
										</div>
									</div>
									<div class="certificates-slider__slide swiper-slide">
										<div class="certificates-slider__item">
											<a class="certificates-slider__img" href="img/certificates/03.jpg" data-fancybox="Сertificates" data-caption="">
												<img src="img/certificates/03.jpg" alt="свидетельство | ВашКомофрт55">
											</a>
										</div>
									</div>
									<div class="certificates-slider__slide swiper-slide">
										<div class="certificates-slider__item">
											<a class="certificates-slider__img" href="img/certificates/04.jpg" data-fancybox="Сertificates" data-caption="">
												<img src="img/certificates/04.jpg" alt="свидетельство | ВашКомофрт55">
											</a>
										</div>
									</div>
								</div>
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div>
						</div>

					</div>
				</section> <!-- ./certificates -->

				<!-- Contacts -->
				<section class="contacts" id="contacts">
					<div class="contacts__body">
						<div class="container">
							<div class="contacts__card">
								<div class="contacts__info">
									<h2 class="title">Контакты</h2>
									<div class="contacts__wrap">
										<div class="contacts__label">Контактный телефон</div>
										<div class="contacts__text">
											<a href="tel:+79222000302">+7 (922) 200 03-02</a>
										</div>
									</div>
									<div class="contacts__wrap">
										<div class="contacts__label">Адрес</div>
										<div class="contacts__text">
											<p>г. Омск, ул. Красный Путь, 143а, оф. 110, 1 этаж</p>
										</div>
									</div>
									<div class="contacts__wrap">
										<div class="contacts__label">Режим работы:</div>
										<div class="contacts__text">
											<p>Пн-Вс 10:00-22:00</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="contacts__map" id="map"></div>
				</section>

			</main>

			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-5 order-2 order-md-1">
							<a class="header__logo" href="#"><img src="img/logo-YourComfort55(white).svg" alt="логотип ВашКофморт55 Омск"></a>
							<div class="footer__copyright">2022 © вашкомфорт55.рф Все права защищены</div>
						</div>
						<div class="col-12 order-1 col-md-7 order-md-2 d-flex flex-column align-items-md-end justify-content-md-end">
							<div class="footer__contacts d-flex align-items-center">
								<div class="footer__socials">
									<a class='icon' href="#"><svg class='icon__item'><use xlink:href='#whatsapp'></use></svg></a>
									<a class='icon' href="#"><svg class='icon__item'><use xlink:href='#viber'></use></svg></a>
									<a class='icon' href="#"><svg class='icon__item'><use xlink:href='#telegram'></use></svg></a>
								</div>
								<a class="footer__tel" href="tel:+79222000302">
									<span class='icon'><svg class='icon__item'><use xlink:href='#call'></use></svg></span>
									<span>+7 (922) 200 03-02</span>
								</a>
							</div>
							<address class="footer__address">г. Омск, ул. Красный Путь, 143а, оф. 110, 1 этаж</address>
							<div class="footer__developer">
								Сайт разработан:
								<a class="footer__tel" href="https://t.me/Deeco03" target="_blank">
									<span class='icon'><svg class='icon__item'><use xlink:href='#telegram'></use></svg></span>
									<span>@Deeco03</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div> <!-- ./wrapper -->

		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/swiper-bundle.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="https://api-maps.yandex.ru/2.1/?apikey=8380631a-bfca-44e8-8398-2bb89e9c2be3&lang=ru_RU"></script>
		<script src="js/app.js"></script>
		<script>
		    $('#form_login').submit((e)=> {
				e.preventDefault();
				var data = JSON.stringify($("#form_login").serializeObject());
				$.ajax({
					url: 'do_login.php',
					type: 'POST',
					dataType: "json",
					data: data,
					success: function(res) {
						if(res.status == 195){
							location = 'admin-panel.php';
						}else if (res.status == 201) {
							location.reload();
						} else {
							console.log('okk');
							$('#form_login_error').html(res.message);
							$('#form_login_error').show();
						}
					}
				})
			});

			$('#reg_form').submit((e)=> {
				e.preventDefault();
				var data = JSON.stringify($("#reg_form").serializeObject());
				$.ajax({
					url: 'do_register.php',
					type: 'POST',
					dataType: "json",
					data: data,
					success: function(res) {
						if (res.status == 201) {
							location.reload();
						} else {
							console.log('okk');
							$('#form_reg_error').html(res.message);
							$('#form_reg_error').show();
						}
					}
				})
			});

			$('#reviewForm').submit((e)=> {
				e.preventDefault();
				var data = JSON.stringify($("#reviewForm").serializeObject());
				var inp = $("#upload-file__input_1");
				var fd = new FormData;

				fd.append('image', inp.prop('files')[0]);
				fd.append('comment', $('#comment').val());
				$.ajax({
					url: 'do_review.php',
					processData: false,
					contentType: false,
					type: 'POST',
					data: fd,
					success: function(res) {
						if (res.status == 201) {
							location.reload();
						} else {
							console.log('okk');
							$('#form_review_error').html(res.message);
							$('#form_review_error').show();
						}
					}
				})
			});

			$.get('/get_all_review.php', (data)=> {
				let d = JSON.parse(data);
				if(d.status == 404){
					$('.reviews__alert').show();
				} else {
					$.each(JSON.parse(data), function(key, val) {
						let block = `<div class="reviews-slider__slide swiper-slide"><div class="reviews-slider__item"><div class="reviews-slider__photo"><a class="reviews-slider__img" href="img/upload/`+val.image+`"><img src="img/upload/`+val.image+`" alt="" data-fancybox="Reviews" data-caption=""></a></div><div class="reviews-slider__review"><div class="reviews-slider__username">`+val.name+`</div><div class="reviews-slider__comment">`+val.comment+`</div></div></div></div>`;
						$('#reviews-pizdec').prepend(block);
					})
				}
			})

			// Validation form
			$('.input-space').keypress(function(e) {
				return e.which !== 32;
			});
			
			$('body').on('input', '.input-ru', function() {
				this.value = this.value.replace(/[^а-яё\s]/gi, '');
			});
			
			$('.input-en').keypress(function(event){
				var ew = event.which;
				if(ew == 32)
					return true;
				if(48 <= ew && ew <= 57)
					return true;
				if(65 <= ew && ew <= 90)
					return true;
				if(97 <= ew && ew <= 122)
					return true;
				return false;
			});
		</script>
	</body>
</html>