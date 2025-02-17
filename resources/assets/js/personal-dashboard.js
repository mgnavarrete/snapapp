/* Water Tracking Chart */
var element = document.getElementById("waterTrack");
if (element !== null) {
  element.innerHTML = "";
  var options = {
    series: [{
      data: [98, 110, 80, 145, 105, 112, 87, 148, 102]
    }],
    chart: {
      height: 115,
      type: 'area',
      fontFamily: 'Roboto, Arial, sans-serif',
      foreColor: '#5d6162',
      zoom: {
        enabled: false
      },
      sparkline: {
        enabled: true
      }
    },
    tooltip: {
      enabled: true,
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return ''
          }
        }
      },
      marker: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: undefined,
    },
    grid: {
      borderColor: 'transparent',
    },
    xaxis: {
      crosshairs: {
        show: false,
      }
    },
    colors: ["rgb(132, 90, 223)"],
    stroke: {
      width: [1],
    },
    fill: {
      type: 'gradient',
      gradient: {
        opacityFrom: 0.5,
        opacityTo: 0.2,
        stops: [0, 60],
      }
    },
  };
  var chart1 = new ApexCharts(document.querySelector("#waterTrack"), options);
  chart1.render();
}

export function waterTrack(myVarVal) {
  chart1.updateOptions({
    colors: ["rgb(" + myVarVal + ")"],
  })
}
/* Water Tracking Chart */

/* Sleep Tracking Chart */
var element = document.getElementById("sleepTrack");
if (element !== null) {
  element.innerHTML = "";
  var options = {
    series: [{
      data: [102, 148, 87, 112, 105, 145, 80, 110, 98]
    }],
    chart: {
      height: 115,
      type: 'area',
      fontFamily: 'Roboto, Arial, sans-serif',
      foreColor: '#5d6162',
      zoom: {
        enabled: false
      },
      sparkline: {
        enabled: true
      }
    },
    tooltip: {
      enabled: true,
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function (seriesName) {
            return ''
          }
        }
      },
      marker: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: undefined,
    },
    grid: {
      borderColor: 'transparent',
    },
    xaxis: {
      crosshairs: {
        show: false,
      }
    },
    colors: ["#64af6d"],
    stroke: {
      width: [1],
    },
    fill: {
      type: 'gradient',
      gradient: {
        opacityFrom: 0.5,
        opacityTo: 0.2,
        stops: [0, 60],
      }
    },
  };
  var chart = new ApexCharts(document.querySelector("#sleepTrack"), options);
  chart.render();
}
/* Sleep Tracking Chart */