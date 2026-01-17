// // revenuegrowth
var options = {
  series: [
    {
      name: 'Account Booking',
      data: [31, 40, 28, 51, 42, 109, 100, 120, 80, 95, 110, 140]
    },
    {
      name: 'Cash Booking',
      data: [11, 32, 45, 32, 34, 52, 41, 60, 40, 30, 45, 50]
    }
  ],

  colors: ['#006666', '#FFAE1A'],

  chart: {
    type: 'area',
    height: 380,
    toolbar: {
      show: false
    }
  },

  // fill: {
  //   gradient: {
  //     opacityFrom: 0.2,
  //     opacityTo: 0,
  //     shadeIntensity: 0.2
  //   }
  // },

  stroke: {
    curve: 'smooth'
  },
  legend: {
    show: false
  },

  // dataLabels: {
  //   enabled: false
  // },

  // grid: {
  //   show: true,
  //   strokeDashArray: 3,
  //   borderColor: ['var(--chart-border)'],
  //   xaxis: { lines: { show: true } },
  //   yaxis: { lines: { show: true } }
  // },

  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    // labels: {
    //   style: {
    //     colors: Array(12).fill('var(--body-font-color)')
    //   }
    // },
    // axisTicks: { show: false },
    // axisBorder: { show: false }
  },

  // yaxis: {
  //   labels: {
  //     style: {
  //       colors: ['var(--body-font-color)']
  //     }
  //   }
  // },

  // tooltip: {
  //   shared: true,
  //   intersect: false
  // },

  // legend: {
  //   show: false
  // },

  responsive: [{
    breakpoint: 425,
    options: {
      series: [
        {
          name: 'Account Booking',
          data: [31, 40, 28, 51, 42, 109, 100]
        },
        {
          name: 'Cash Booking',
          data: [11, 32, 45, 32, 34, 52, 41]
        }
      ]
    }
  }]
};

var revenuegrowth = new ApexCharts(
  document.querySelector("#revenuegrowth"),
  options
);
revenuegrowth.render();
  
  //  visitsCharts
  
  // var options = {
  //   series: [{
  //   name: 'Chrome',
  //   data: [44, 55, 41, 37, 22, 43, 21]
  // }, {
  //   name: 'Firefox',
  //   data: [53, 32, 33, 52, 13, 43, 32]
  // }, { 
  //   name: 'Firefox',
  //   data: [12, 17, 11, 9, 15, 11, 20]
  // }],
  //   colors:['var(--theme-deafult)' ,'#80B3B3' ,'#CCE0E0'],
  //   chart: { 
  //   type: 'bar',
  //   height: 325,
  //   stacked: true, 
  //   toolbar: {
  //     show: false,
  //     tools: {
  //       download: false,
  //     }
  //   }, 
  //   zoom: {
  //     enabled: true,
  //   } 
  // },
  //   responsive: [{
  //     breakpoint: 480,
  //     options: {
  //       legend: {
  //         position: 'bottom',
  //         offsetY: 2,
  //       }
  //     } 
  //   }], 
  //   plotOptions: {
  //     bar: {
  //       horizontal: true,
  //       barHeight: '28%',
  //     },
  //   },
  //   dataLabels: {
  //     enabled: false,
  //   },
  //   xaxis: {
  //     categories: ['Mon', 'Tue', 'Wed', 'Thu','Fri', 'Sat' ,'Sun'
  //     ],
  //     labels:{
  //       show: false,
  //     },
  //     axisTicks:{
  //       show: false,
  //     },
  //   },
  //   legend: {
  //     show: false,
  //   },
  //   fill: { 
  //     opacity: 1 
  //   },
  //   grid: {
  //     show: false,
  //   }
  // };
  // var  visitsCharts = new ApexCharts(document.querySelector("#visitsCharts"), options);
  //  visitsCharts.render();
  
  // echart-polar
  
  require([
    'echarts'
  ], function (echarts) {
  
    var chart = echarts.init(document.getElementById('echart-polar'));
    chart.setOption({
      polar: {
        radius: [30, '80%']
      },
      angleAxis: {
        max: 4,
        startAngle: 90
      },
      radiusAxis: {
        type: 'category',
      },
      tooltip: {},
      series: {
        type: 'bar',
        data: [
          {value : 2, itemStyle: { color:'#86909C'},},
          {value : 2.2, itemStyle: { color:'#FF8367'},},
          {value : 2.4, itemStyle: { color:'#FFAE1A'},},
          {value : 3.4, itemStyle: { color:'#006666'},},
        ],
        coordinateSystem: 'polar',
        label: {
          show: true,
          position: 'middle',
          formatter: '{b}: {c}' 
        }
      }
    });
    chart.on('click', function (params) { 
        console.log(params);
    });
    window.onresize = chart.resize;
  });