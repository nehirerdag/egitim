!function(n){"use strict";n(function(){if(Chart.defaults.global.defaultFontColor="#7b919e",Chart.defaults.scale.gridLines.color="rgba(123, 145, 158,0.1)",
n("#lineChart").length){
	var e=n("#lineChart").get(0).getContext("2d");
	new Chart(e,{
		type:"line", 
		data:{
			labels:["Eylül","Ekim","Kasım","Aralık","Ocak","Şubat","Mart","Nisan"],
			datasets:[{
				label:"Öğrenci",
				data:[60,80,55,78,60,78,40,80],
				borderColor:["#f96565"],
				borderWidth:3,
				fill:!1,
				pointBackgroundColor:"#ffffff",
				pointBorderColor:"#f96565"},{
					label:"Genel",data:[50,60,35,58,40,58,20,60],
					borderColor:["#7c8a96"],
					borderWidth:3,
					fill:!1,
					pointBackgroundColor:"#ffffff",
					pointBorderColor:"#7c8a96"}]},
					options:{
						scales:{
							yAxes:[{
								gridLines:{
									drawBorder:!1,
									borderDash:[3,3],
									zeroLineColor:"#7b919e"}, 
									title: {text: '%'},
ticks:{min:0,color:"#7b919e"}, }],
xAxes:[{
	gridLines:{
		display:!1,
		drawBorder:!1,
		color:"#ffffff"}}]},
		elements:{
			line:{
				tension:.2},
				point:{
					radius:4}},
					stepsize:1}})}




















if(n("#barChart").length){var a=n("#barChart").get(0).getContext("2d");new Chart(a,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],datasets:[{label:"Apple",data:[46,57,59,54,62,58,64,60,66],backgroundColor:"#eff2f7"},{label:"Samsung",data:[74,83,102,97,86,106,93,114,94],backgroundColor:"#f96565"},{label:"Oppo",data:[37,42,38,26,47,50,54,55,43],backgroundColor:"#3051d3"}]},options:{responsive:!0,maintainAspectRatio:!0,scales:{yAxes:[{display:!1,gridLines:{drawBorder:!1},ticks:{fontColor:"#686868"}}],xAxes:[{barPercentage:.7,categoryPercentage:.5,ticks:{fontColor:"#7b919e"},gridLines:{display:!1,drawBorder:!1}}]},elements:{point:{radius:0}}}})}if(n("#areaChart").length){var r=n("#areaChart").get(0).getContext("2d");new Chart(r,{type:"line",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{data:[22,23,28,20,27,20,20,24,10,35,20,25],backgroundColor:["#f96565"],borderColor:["#f96565"],borderWidth:2,fill:"origin",label:"Upcube"},{data:[50,40,48,70,50,63,63,42,42,51,35,35],backgroundColor:["rgba(0, 167, 225, 0.3)"],borderColor:["#00a7e1"],borderWidth:1,fill:"origin",label:"Zinzer"},{data:[95,75,90,105,95,95,95,100,75,95,90,105],backgroundColor:["rgba(223, 227, 233, 0.2)"],borderColor:["#dfe3e9"],borderWidth:1,fill:"origin",label:"Drixo"}]},options:{responsive:!0,maintainAspectRatio:!0,plugins:{filler:{propagate:!1}},scales:{xAxes:[{gridLines:{display:!1,drawBorder:!1,color:"transparent",zeroLineColor:"#eeeeee"}}],yAxes:[{gridLines:{drawBorder:!1,borderDash:[3,3]}}]},legend:{display:!1},tooltips:{enabled:!0},elements:{line:{tension:0},point:{radius:0}}}})}if(areaChart,n("#pieChart").length){var o=n("#pieChart").get(0).getContext("2d");new Chart(o,{type:"pie",data:{datasets:[{data:[21,16,48,31],backgroundColor:["#f96565","#3051d3","#00a7e1","#e4cc37"],borderColor:["#f96565","#3051d3","#00a7e1","#e4cc37"]}],labels:["Drixo","Upcube","Vakavia","Devazo"]},options:{responsive:!0,animation:{animateScale:!0,animateRotate:!0}}})}if(n("#donut-chart").length)o=n("#donut-chart").get(0).getContext("2d"),new Chart(o,{type:"pie",data:{datasets:[{data:[21,16,48,31],backgroundColor:["#3051d3","#00a7e1","#f96565","#e4cc37"],borderColor:["#3051d3","#00a7e1","#f96565","#e4cc37"]}],labels:["Drixo","Upcube","Vakavia","Devazo"]},options:{responsive:!0,cutoutPercentage:70,animation:{animateScale:!0,animateRotate:!0}}});if(n("#radar-chart").length){var t=n("#radar-chart").get(0).getContext("2d");new Chart(t,{type:"radar",data:{datasets:[{label:"Unhealthy",backgroundColor:"rgba(223, 227, 233, 0.2)",borderColor:"#dfe3e9",borderWidth:1,pointBackgroundColor:"#dfe3e9",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"#dfe3e9",data:[65,59,90,81,56,55,40]},{label:"Healthy",backgroundColor:"rgba(48, 81, 211, 0.2)",borderColor:"#3051d3",borderWidth:1,pointBackgroundColor:"#3051d3",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"#3051d3",data:[28,48,40,19,96,27,100]}],labels:["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"]},options:{responsive:!0,cutoutPercentage:70,animation:{animateScale:!0,animateRotate:!0}}})}})}(jQuery);