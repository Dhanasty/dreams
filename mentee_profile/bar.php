<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">


	<style>
		*{
			font-family: 'Montserrat';
		}
		/* Apply css properties to h1 element */
		h1 {
			text-align: center;
		}

		/* Create a container using CSS properties */
		.container {
			top: 38%;
			left: 50%;
			position: absolute;
			text-align: center;
			transform: translate(-50%, -50%);
			background-color: #C2ECAE;
			width: 80%;
			border-radius: 20px;
			height: 250px;
		}

		/* Apply CSS properties to ui-widgets class */
		.ui-widgets {
			position: relative;
			display: inline-block;
			width: 10rem;
			height: 10rem;
			border-radius: 9rem;
			margin: 1.5rem;
			border: 1.2rem solid palegreen;
			box-shadow: inset 0 0 7px grey;
			border-left-color: palegreen;
			border-top-color: chartreuse;
			border-right-color: darkgreen;
			border-bottom-color: white;
			text-align: center;
			box-sizing: border-box;
		}

		/* Apply css properties to the second
			child of ui-widgets class */
		.ui-widgets:nth-child(2) {
			border-top-color: chartreuse;
			border-right-color: white;
			border-left-color: palegreen;
			border-bottom-color: white;
		}

		/* Apply css properties to ui-widgets class
			and ui-values class*/
		.ui-widgets .ui-values {
			top: 40px;
			position: absolute;
			left: 10px;
			right: 0;
			font-weight: 700;
			font-size: 2.0rem;

		}

		/* Apply css properties to ui-widgets
			class and ui-labels class*/
		.ui-widgets .ui-labels {
			top: 30px;
			left: 0;
			bottom: -16px;
			text-shadow: 0 0 4px grey;
			color: black;
			position: absolute;
			width: 100%;
			font-size: 16px;
		}

		.container h1{
			font-size: 30px;
		}

	</style>
</head>

<body>

	<!-- Add heading of the page -->

	<!-- Creating of a container class that
		store other useful classes -->
	<div class="container">
	<h1 style="font-weight: bolder;">Percentage of Task Completed</h1>
		<!-- Creating a ui-widgets classes that
			store other useful classes like
			ui-values and ui-labels -->
		<!-- <div class="ui-widgets">
			<div class="ui-values">85%</div>
			<div class="ui-labels">Tasks</div>
		</div> -->

		<div class="ui-widgets">
			<div class="ui-values">50%</div>
			<div class="ui-labels">Tasks</div>
		</div>
		
	</div>
</body>

</html>
