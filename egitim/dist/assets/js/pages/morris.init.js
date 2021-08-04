$(function(){"use strict";$("#morris-line-example").length&&Morris.Line({element:"morris-line-example",gridLineColor:"rgba(108, 120, 151, 0.1)",lineColors:["#3051d3","#f96565"],xkey:"y",ykeys:["a","b"],hideHover:"auto",resize:!0,lineWidth:2,labels:["Series A","Series B"],data:[{y:"2010",a:110,b:125},{y:"2011",a:170,b:190},{y:"2012",a:120,b:140},{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:110,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}]}),$("#morris-bar-example").length&&Morris.Bar({element:"morris-bar-example",barColors:["#eff2f7","#00a7e1"],data:[{y:"2010",a:110,b:125},{y:"2011",a:170,b:190},{y:"2012",a:120,b:140},{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:110,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}],xkey:"y",ykeys:["a","b"],hideHover:"auto",gridLineColor:"rgba(108, 120, 151, 0.1)",resize:!0,barSizeRatio:.3,preUnits:"$",labels:["Series A","Series B"]}),$("#morris-area-example").length&&Morris.Area({element:"morris-area-example",lineColors:["#3051d3","#7c8a96"],data:[{y:"2013",a:50,b:60},{y:"2014",a:60,b:70},{y:"2015",a:80,b:90},{y:"2016",a:85,b:45},{y:"2017",a:78,b:46},{y:"2018",a:70,b:79},{y:"2019",a:79,b:46}],xkey:"y",ykeys:["a","b"],hideHover:"auto",gridLineColor:"rgba(108, 120, 151, 0.1)",resize:!0,fillOpacity:.4,lineWidth:2,labels:["Genel","Öğrenci"]}),$("#morris-donut-example").length&&Morris.Donut({element:"morris-donut-example",resize:!0,colors:["#00a7e1","#f96565"],data:[{label:"Öğrenci",value:55},{label:"Genel",value:45}]}),$("#morris-stacked-example").length&&Morris.Bar({element:"morris-stacked-example",barColors:["#f96565","#eff2f7"],data:[{y:"2010",a:110,b:125},{y:"2011",a:170,b:190},{y:"2012",a:120,b:140},{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:110,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}],xkey:"y",ykeys:["a","b"],hideHover:"auto",gridLineColor:"rgba(108, 120, 151, 0.1)",resize:!0,barSizeRatio:.3,preUnits:"$",stacked:!0,labels:["Series A","Series B"]}),$("#morris-line-straight-example").length&&Morris.Line({element:"morris-line-straight-example",gridLineColor:"rgba(108, 120, 151, 0.1)",lineColors:["#3051d3","#7c8a96"],xkey:"y",ykeys:["a","b"],hideHover:"auto",resize:!0,lineWidth:2,smooth:!1,labels:["Genel","Öğrenci"],data:[{y:"2010",a:50,b:70},{y:"2011",a:60,b:70},{y:"2012",a:120,b:140},{y:"2013",a:80,b:100},{y:"2014",a:110,b:130},{y:"2015",a:90,b:110},{y:"2016",a:120,b:140},{y:"2017",a:50,b:125},{y:"2018",a:170,b:190},{y:"2019",a:120,b:140}]})});