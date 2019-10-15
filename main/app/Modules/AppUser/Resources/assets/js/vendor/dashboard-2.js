$( function () {
	// Chart Area 1
	var chartjs1 = $( '#chart-area' );
	if ( chartjs1.length ) {
		new Chart( chartjs1, {
			type: 'line',
			data: {
				labels: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul' ],
				datasets: [ {
					data: [ 900, 1220, 700, 1300, 1616, 1400, 1200, 950 ],
					backgroundColor: 'rgba(101,39,178,0.1)',
					fill: true,
					borderWidth: 3,
					borderColor: 'rgba(101,39,178,1)'
				} ]
			},
			options: {
				legend: {
					display: false,
					labels: {
						display: false
					}
				},
				scales: {
					yAxes: [ {
						display: false,
						ticks: {
							beginAtZero: true,
							fontSize: 12
						}
					} ],
					xAxes: [ {
						display: false,
						ticks: {
							beginAtZero: true,
							fontSize: 14
						}
					} ]
				}
			}
		} );
	}

	// morris line
	if ( $( '#morris-line-1' ).length ) {
		new Morris.Line( {
			element: 'morris-line-1',
			data: [ {
					y: '8:00 AM',
					a: 120
				},
				{
					y: '10:00 AM',
					a: 720
				},
				{
					y: '12:00 AM',
					a: 800
				},
				{
					y: '1:00 PM',
					a: 50
				},
				{
					y: '3:00 PM',
					a: 250
				},
				{
					y: '5:00 PM',
					a: 380
				},
				{
					y: '7:00 PM',
					a: 600
				},
				{
					y: '9:00 PM',
					a: 550
				},
				{
					y: '11:00 PM',
					a: 700
				},
			],
			xkey: 'y',
			ykeys: [ 'a' ],
			labels: [ 'Value' ],
			lineColors: [ '#F7931A' ],
			lineWidth: 2,
			grid: false,
			axes: false,
			gridTextSize: 10,
			padding: 5,
			hideHover: 'auto',
			resize: true,
			pointSize: 0
		} );
	}

	if ( $( '#morris-line-2' ).length ) {
		// morris line
		new Morris.Line( {
			element: 'morris-line-2',
			data: [ {
					y: '8:00 AM',
					a: 120
				},
				{
					y: '10:00 AM',
					a: 720
				},
				{
					y: '12:00 AM',
					a: 800
				},
				{
					y: '1:00 PM',
					a: 50
				},
				{
					y: '3:00 PM',
					a: 250
				},
				{
					y: '5:00 PM',
					a: 380
				},
				{
					y: '7:00 PM',
					a: 600
				},
				{
					y: '9:00 PM',
					a: 550
				},
				{
					y: '11:00 PM',
					a: 700
				},
			],
			xkey: 'y',
			ykeys: [ 'a' ],
			labels: [ 'Value' ],
			lineColors: [ '#BA9F33' ],
			lineWidth: 2,
			grid: false,
			axes: false,
			gridTextSize: 10,
			padding: 5,
			hideHover: 'auto',
			resize: true,
			pointSize: 0
		} );
	}
	if ( $( '#morris-line-3' ).length ) {
		// morris line
		new Morris.Line( {
			element: 'morris-line-3',
			data: [ {
					y: '8:00 AM',
					a: 80
				},
				{
					y: '10:00 AM',
					a: 160
				},
				{
					y: '12:00 AM',
					a: 80
				},
				{
					y: '1:00 PM',
					a: 160
				},
				{
					y: '3:00 PM',
					a: 80
				},
				{
					y: '5:00 PM',
					a: 160
				},
				{
					y: '7:00 PM',
					a: 80
				},
				{
					y: '9:00 PM',
					a: 160
				},
				{
					y: '11:00 PM',
					a: 80
				},
			],
			xkey: 'y',
			ykeys: [ 'a' ],
			labels: [ 'Value' ],
			lineColors: [ '#346AA9' ],
			lineWidth: 2,
			grid: false,
			axes: false,
			gridTextSize: 10,
			padding: 5,
			hideHover: 'auto',
			resize: true,
			pointSize: 0
		} );
	}

	// Chart Donut
	var chartjs2 = $( '#chart-donut' );
	if ( chartjs2.length ) {
		new Chart( chartjs2, {
			type: 'doughnut',
			data: {
				labels: [ "BTC", "ETH", "XRP" ],
				datasets: [ {
					label: "Portfolio",
					data: [ 66, 25, 9 ],
					backgroundColor: [
						"#3e2bce",
						"#3AA4F5",
						"#DB3847"
					],
					borderColor: [
						"#fff",
						"#fff",
						"#fff"
					],
					borderWidth: 0,
					hoverBorderColor: 'transparent'
				} ]
			},
			options: {
				cutoutPercentage: 80,
				responsive: true,
				maintainAspectRatio: false,
				title: {
					display: false,
					position: "top",
					text: "Pie Chart",
					fontSize: 18,
					fontColor: "#333"
				},
				legend: {
					display: false,
					position: "bottom",
					labels: {
						fontColor: "#666",
						fontSize: 12
					}
				},
			}
		} );
	}
} )
