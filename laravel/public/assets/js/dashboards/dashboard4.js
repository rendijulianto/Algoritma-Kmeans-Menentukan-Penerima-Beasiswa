// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 4 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------

// -----------------------------------------------------------------------
// Minimal Demo Dashboard Init Js
// -----------------------------------------------------------------------
$(function () {
  "use strict";


  var option_Revenue = {
    series: [
      {
        name: "",
        data: [10,20,15, 8, 15,10,8,13],
      },
    ],
    chart: {
      type: "bar",
      height: 95,
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["var(--bs-primary)"],
    grid: {
      show: false,
      padding: {
        top: 0,
        right: -10,
        bottom: 0,
        left:-10
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        startingShape: "flat",
        endingShape: "flat",
        columnWidth: "50%",
        barHeight: "100%",
        borderRadius: [5]
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 4,
      colors: ["transparent"],
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: false,
      },
    },
    axisBorder: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "12px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#Revenue"),
    option_Revenue
  );
  chart_column_basic.render();


  var option_Products_Yearly_Sales = {
    series: [
      {
        name: "Mac",
        data: [13, 18, 16, 17, 10, 4, 5, 3, 5],
      },
      {
        name: "Windows",
        data: [13, 18, 16, 17, 10, 8, 14, 12, 18],
      },
    ],

    chart: {
      fontFamily: "inherit",
      height:410,
      type: "area",
      foreColor: '#adb0bb',
      toolbar: {
        show: false,
      },
      stacked: true,
    },
    colors: ["var(--bs-primary)", "var(--bs-secondary)"],
    fill: {
      type: 'gradient',
      gradient: {
        shadeIntensity: 0,
        inverseColors: false,
        opacityFrom: 0.3,
        opacityTo: 0,
      }
    },
    grid: {
      show: true,
      borderColor: "rgba(0,0,0,.1)",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: false,
        },
      },
      yaxis: {
        lines: {
          show: true,
        },
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    markers: {
      show: false,
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      categories: [
        "2015",
        "2016",
        "2017",
        "2018",
        "2019",
        "2020",
        "2021",
        "2022",
        "2023",
      ],
      labels: {
        style: {
          colors: "#adb0bb",
        },
      },
    },
    yaxis: {
      labels: {
        style: {
          colors: "#adb0bb",
        },
      },

    },
    tooltip: {
      x: {
        format: "dd/MM/yy HH:mm",
      },
      theme: "dark",
    },
    legend: {
      show: false,
    },
  };

  var chart_area_spline = new ApexCharts(
    document.querySelector("#products-yearly-sales"),
    option_Products_Yearly_Sales
  );
  chart_area_spline.render();


});
