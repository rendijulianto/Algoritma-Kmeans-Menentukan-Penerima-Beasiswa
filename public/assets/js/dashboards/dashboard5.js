// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 5 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  "use strict";

  // -----------------------------------------------------------------------
  // Ct Barchart
  // -----------------------------------------------------------------------

  // weeksales-bar
  var options_Weekly_Usage = {
    series: [
      {
        name: "",
        data: [32, 16, 44, 72, 12, 38, 24],
      },
    ],
    chart: {
      type: "bar",
      height: 330,
      fontFamily: "inherit",
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
      offsetY: 20,

    },
    grid: {
      show: false,
    },
    colors: ["var(--bs-secondary)"],
    dataLabels: {
      enabled: false,
    },
    fill: {
      opacity: 1,
    },
    plotOptions: {
      bar: {
        columnWidth: "30%",
        barHeight: "100%",
        borderRadius: [5],
        dataLabels: {
          position: 'top',
        },

      },
    },
    stroke: {
      show: true,
      colors: "transparent",
      width: 8,
    },
    dataLabels: {

      enabled: true,
      formatter: function (val) {
        return val + "K";
      },
      offsetY: -30,
      style: {
        fontSize: '12px',
        fontWeight: 700,
        colors: ["#adb0bb"]
      },
    },

    grid: {
      show: true,
      borderColor: "rgba(0,0,0,0.1)",
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
    xaxis: {
      type: "category",
      categories: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"],
      labels: {
        show: true,
        fontFamily: "inherit",
        style: {
          colors: "#a1aab2",
          fontWeight: 600,
          fontSize: "12px",
        },
        opacity: 1,
        offsetX: 0,
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      show: false,
    },
    tooltip: {
      theme: "dark",
    },
    responsive: [
      {
        breakpoint: 426,
        options: {
          stroke: {
            width: 3,
          },
        },
      },
    ],
  };

  var chart = new ApexCharts(
    document.querySelector("#weekly-usage"),
    options_Weekly_Usage
  );
  chart.render();

  // -----------------------------------------------------------------------
  // Sales Charts
  // -----------------------------------------------------------------------

  var option_Sales = {
    series: [35, 15, 15, 105],
    labels: ["Mar", "Feb", "Jan", "Apr"],
    chart: {
      type: "donut",
      height: 270,
      fontFamily: "inherit",
      foreColor: "#adb0bb",
    },
    dataLabels: {
      enabled: false,
    },
    fill: {
      opacity: 1,
    },
    plotOptions: {
      pie: {
        expandOnClick: true,
        startAngle: 40,
        donut: {
          size: "85",
          labels: {
            show: true,
            name: {
              show: true,
              offsetY: -10,
              fontSize: "30px",
              fontFamily: "inherit",
              fontWeight: 500,
              color: "#a1aab2",
            },
            value: {
              show: true,
              fontSize: "18px",
              fontFamily: "inherit",
              fontWeight: 400,
              color: "#a1aab2",
            },
            total: {
              show: true,
              label: "Apr",
              fontSize: "30px",
              fontFamily: "inherit",
              fontWeight: 500,
              color: "#a1aab2",
            },
          },
        },
      },
    },
    colors: ["var(--bs-success)", "var(--bs-warning)", "var(--bs-primary)", "var(--bs-secondary)"],
    tooltip: {
      show: true,
      theme: "dark",
      fillSeriesColor: false,
    },
    legend: {
      show: false,
    },
    stroke:{
      colors:['transparent']
     },
    responsive: [
      {
        breakpoint: 426,
        options: {
          chart: {
            height: 250,
            width: 250,
            offsetX: -20,
          },
        },
      },
    ],
  };

  var chart_pie_donut = new ApexCharts(
    document.querySelector("#sales"),
    option_Sales
  );
  chart_pie_donut.render();

  // -----------------------------------------------------------------------
  // ct-bar-chart Charts
  // -----------------------------------------------------------------------
  var option_Total_Income = {
    series: [
      {
        name: "",
        data: [6, 9, 6, 9, 2, 6, 12],
      },
    ],
    chart: {
      type: "bar",
      fontFamily: "inherit",
      height: 55,
      offsetX: 7,
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["var(--bs-secondary)"],
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
        horizontal: false,
        startingShape: "flat",
        endingShape: "flat",
        columnWidth: "80%",
        barHeight: "100%",
        borderRadius: [4]
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
    document.querySelector("#total-income"),
    option_Total_Income
  );
  chart_column_basic.render();

  // -----------------------------------------------------------------------
  // Guage Chart
  // -----------------------------------------------------------------------

   // meter chart
   var option_Mothly_Usage = {
    chart: {
      height: 400,
      foreColor: "#adb0bb",
      type: "radialBar",
      fontFamily: "inherit",
      sparkline: {
        enabled: true,
      },
    },
    series: [60],
    colors: ["var(--bs-secondary)"],
    plotOptions: {
      radialBar: {
        startAngle: -90,
        endAngle: 90,
        track: {
          background: "#EFEFF0",
          startAngle: -90,
          endAngle: 90,
        },
        hollow: {
          size: "65%",
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: false,
          },
        },
      },
    },
    fill: {
      type: "solid",
    },
    stroke: {
      lineCap: "butt",
    },
    labels: ["Progress"],
    tooltip: {
      enabled: true,
      theme: "dark",
      fillSeriesColor: false,
    },
  };

  new ApexCharts(
    document.querySelector("#monthly-usage"),
    option_Mothly_Usage
  ).render();

  // -----------------------------------------------------------------------
  // ct-main-balance-chart Charts
  // -----------------------------------------------------------------------
  var options_Yearly_Sales = {
    series: [
      {
        name: "series1",
        data: [1, 2, 5, 3, 4, 2.5, 5, 3, 1],
      },
      {
        name: "series2",
        data: [1, 4, 2, 5, 2, 5.5, 3, 4, 1],
      },
    ],
    chart: {
      height: 50,
      type: "area",
      foreColor: "#adb0bb",
      fontFamily: "inherit",
      sparkline: {
        enabled: true,
      },
    },
    colors: ["rgba(23, 129, 253, 0.2)", "rgba(23, 129, 253, 0.5)"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
      width: 1,
      dashArray: 3,
    },
    fill: {
      type: "solid",
      opacity: 1,
    },
    xaxis: {
      show: false,
    },
    tooltip: {
      x: {
        show: false,
      },
      theme: "dark",
    },
    legend: {
      show: false,
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#yearly-sales"),
    options_Yearly_Sales
  );
  chart.render();

  // -----------------------------------------------------------------------
  // monthly sales Charts
  // -----------------------------------------------------------------------

  var options_Monthly_Sales = {
    series: [
      {
        name: "",
        data: [1, -2, 5, 3, 0, 2.5],
      },
    ],
    chart: {
      height: 60,
      fontFamily: "inherit",
      foreColor: "#adb0bb",
      type: "line",
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
      width: 4,
      dashArray: 3,
    },
    colors: ["var(--bs-secondary)"],
    markers: {
      size: 4,
      strokeColors: "transparent",
    },
    grid: {
      show: true,
      borderColor: "rgba(0,0,0,0.07)",
      position: "back",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: true,
        },
      },
    },
    tooltip: {
      theme: "dark",
    },
  };

  var chart = new ApexCharts(
    document.querySelector("#monthly-sales"),
    options_Monthly_Sales
  );
  chart.render();

  // -----------------------------------------------------------------------
  // PRODUCTS YEARLY SALES Charts
  // -----------------------------------------------------------------------

  var option_Expense = {
    series: [
      {
        name: "Xtreme",
        data: [5, 2, 7, 4, 5, 3, 5, 4],
      },
      {
        name: "Ample",
        data: [2, 5, 2, 6, 2, 5, 2, 4],
      },
    ],
    chart: {
      fontFamily: "inherit",
      height: 235,
      type: "area",
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
    },
    grid: {
      show: true,
      borderColor: "rgba(0,0,0,.1)",
      strokeDashArray: 3,
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: true,
        },
      },
    },
    colors: ["#F33E5A", "#1781FD"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
      width: 2,
    },
    markers: {
      size: 3,
      strokeColors: "transparent",
    },
    xaxis: {
      categories: [
        "2008",
        "2009",
        "2010",
        "2011",
        "2012",
        "2013",
        "2014",
        "2015",
      ],
      labels: {
        style: {
          colors: "#a1aab2",
        },
      },
    },
    yaxis: {
      labels: {
        style: {
          colors: "#a1aab2",
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
    document.querySelector("#Expense"),
    option_Expense
  );
  chart_area_spline.render();
});
