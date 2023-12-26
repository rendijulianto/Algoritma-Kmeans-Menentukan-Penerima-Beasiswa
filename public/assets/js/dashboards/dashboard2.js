// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 2 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  "use strict";

  // -----------------------------------------------------------------------
  // Expense Charts
  // -----------------------------------------------------------------------

  var option_Expense = {
    series: [
      {
        name: "",
        data: [5, 10, 8, 15, 30, 20, 35, 60, 30, 10, 35, 10, 12, 10, 12, 10, 15, 13, 10, 5, 30, 40, 75, 30, 20]
      },

      {
        name: "",
        data: [8, 14, 13, 20, 38, 25, 40, 68, 38, 16, 40, 15, 18, 15, 16, 15, 20, 18, 16, 12, 38, 48, 85, 40, 30]
      },

    ],

    chart: {
      fontFamily: "inherit",
      height: 135,
      type: "area",
      // stacked: true,
      foreColor: '#adb0bb',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      }
    },
    colors: ["rgba(255,255,255,0.8)", "rgba(255,255,255,0.3)"],
    stroke: {
      curve: 'smooth',
      width: 2
    },
    fill: {
      type: 'gradient',
      gradient: {
        colors: '#fff',
        opacityFrom: 0.08,
        opacityTo: 0.03,
      }
    },
    grid: {
      show: true,
      borderColor: "rgba(255,255,255,0.3)",
      strokeDashArray: 4,
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
      enabled: false
    },
    legend: {
      show: false
    },
    xaxis: {
      axisBorder: {
        show: true
      },
      axisTicks: {
        show: false
      }
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

  var chart_area_Expense = new ApexCharts(
    document.querySelector("#Expense"),
    option_Expense
  );
  chart_area_Expense.render();



  // -----------------------------------------------------------------------
  // Sales Charts
  // -----------------------------------------------------------------------

  var option_Sales = {
    series: [35, 15, 15, 105],
    labels: ["March", "Febuary", "January", "April"],
    chart: {
      type: "donut",
      height: 330,
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
        donut: {
          size: "88",
          labels: {
            show: true,
            name: {
              show: true,
              offsetY: -10,
              fontSize: "28px",
              fontFamily: "inherit",
              fontWeight: 600,
              color: "#000",

            },
            value: {
              show: true,
              fontSize: "14px",
              fontFamily: "inherit",
              fontWeight: 600,
              color: "#adb0bb",
              offsetY: 5,
              formatter: function (val) {
                return val + " TOTAL";
              },
            },
            total: {
              show: true,
              label: "April",
              fontSize: "28px",
              fontFamily: "inherit",
              fontWeight: 600,
              color: "#000",

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
  // Guage Chart
  // -----------------------------------------------------------------------

  var options_Finance = {
    series: [30, 55, 100],
    chart: {
      height: 320,
      type: "radialBar",
      foreColor: "#adb0bb",
    },
    colors: ["var(--bs-purple)", "var(--bs-secondary)", "#efeff0"],
    plotOptions: {
      borderRadius: 5,
      radialBar: {
        dataLabels: {
          name: {
            offsetY: 5,
            fontSize: "22px",
            show: true,
          },
          value: {
            fontSize: "16px",
            offsetY: 12,
            color: "#adb0bb",
            fontFamily: "inherit",
            fontWeight: 600,
            formatter: function (val) {
              return "Million";
            },
          },
          total: {
            show: true,
            label: "428",
            color: "#adb0bb",
            fontSize: "20px",
            fontFamily: "inherit",
            fontWeight: 600,
            formatter: function () { },
          },
        },
        track: {
          show: true,
          startAngle: 270,
          background: "transparent",
          strokeWidth: "0",
          opacity: 1,
          margin: 5,
        }
      },
    },
    labels: ["250", "300", "428"],
    tooltip: {
      enabled: true,
      theme: "dark",
      fillSeriesColor: false,
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

  var chart = new ApexCharts(
    document.querySelector("#finance"),
    options_Finance
  );
  chart.render();

  // -----------------------------------------------------------------------
  // ct-main-balance-chart Charts
  // -----------------------------------------------------------------------

  // total sales
  var option_Total_Income = {
    series: [
      {
        name: "",
        labels: [],
        data: [1, 1, 15, 14, 25, 12, 20],
      },
    ],
    chart: {
      height: 70,
      type: "area",
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    fill: {
      type: 'gradient',
      gradient: {
        colors: '#fff',
        opacityFrom: 0.08,
        opacityTo: 0.03,
      }
    },
    colors: ["rgba(255,255,255,0.5)", "rgba(255,255,255,0.3)"],
    grid: {
      show: false,
    },
    stroke: {
      curve: "smooth",
      width: 2,
    },
    markers: {
      size: 0,
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
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "10px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
      marker: {
        show: true,
      },
      followCursor: true,
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#total-income"),
    option_Total_Income
  );
  chart_column_basic.render();

  // -----------------------------------------------------------------------
  // monthly sales Charts
  // -----------------------------------------------------------------------

  // yearly sales
  var options_Yearly_Sales = {
    series: [
      {
        name: "",
        labels: [],
        data: [1, 10, 5, 8, 7, 6, 8, 6, 7, 5, 8, 20, 15, 16, 15, 16, 6, 15],
      },
    ],
    chart: {
      height: 70,
      type: "area",
      foreColor: "#adb0bb",
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    fill: {
      type: 'gradient',
      gradient: {
        colors: '#fff',
        opacityFrom: 0,
        opacityTo: 0,
      }
    },
    colors: ["var(--bs-secondary)"],
    grid: {
      show: false,
    },
    stroke: {
      curve: "smooth",
      width: 2,
    },
    markers: {
      size: 0,
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
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "10px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
      marker: {
        show: true,
      },
      followCursor: true,
    },

  };

  var chart = new ApexCharts(
    document.querySelector("#yearly-sales"),
    options_Yearly_Sales
  );
  chart.render();

  // monthly sales
  var options_Monthly_Sales = {


    series: [
      {
        name: "",
        data: [8, 8, 12, 14, 6, 22, 5, 8, 17],
      },
    ],
    chart: {
      type: "bar",
      height: 70,
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
        borderRadius: 4,
        columnWidth: "50%",
        barHeight: "100%",
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 0,
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

  var chart = new ApexCharts(
    document.querySelector("#monthly-sales"),
    options_Monthly_Sales
  );
  chart.render();

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
});
