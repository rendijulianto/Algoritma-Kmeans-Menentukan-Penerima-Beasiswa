// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 1 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  "use strict";
  // -----------------------------------------------------------------------
  // PRODUCTS YEARLY SALES Charts
  // -----------------------------------------------------------------------

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
      height: 342,
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

  // // -----------------------------------------------------------------------
  // // Week Sales Chart
  // // -----------------------------------------------------------------------
  var option_Week_Sales = {
    series: [
      {
        name: "",
        data: [32, 16, 44, 72, 12, 38, 24],
      },
    ],
    chart: {
      type: "bar",
      height: 310,
      fontFamily: "inherit",
      toolbar: {
        show: false,
      },
      stacked: true,
      sparkline: {
        enabled: true,
      },
      offsetY: 20,
      style: {
        fontSize: '12px',
        colors: ["#304758"]
      }
    },
    colors: ["rgba(255,255,255,0.7)"],
    fill: {
      type: 'gradient',
      gradient: {
        opacityFrom: 0.4,
        opacityTo: 0.5,
      }
    },
    grid: {
      show: true,
      borderColor: "rgba(255,255,255,0.1)",
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
      padding: {
        top: 50,
        right: 25,
        bottom: 0,
        left: 18
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "40%",
        borderRadius: 5,
        dataLabels: {
          position: 'top', // top, center, bottom
        },
      },
    },
    dataLabels: {
      enabled: true,
      formatter: function (val) {
        return val + "K";
      },
      offsetY: -30,
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
      }
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

  var chart_column_crypto2 = new ApexCharts(
    document.querySelector("#week-sales"),
    option_Week_Sales
  );
  chart_column_crypto2.render();

  // // -----------------------------------------------------------------------
  // // Sunday
  // // -----------------------------------------------------------------------

  var option_Wallet_Balance = {
    series: [
      {
        name: "Site A ",
        type: "area",
        data: [50, 160, 110, 60, 130, 200, 100],
      },
      {
        name: "Site B ",
        type: "area",
        data: [0, 100, 60, 200, 150, 90, 150],
      },
    ],
    chart: {
      type: "line",
      height: 70,
      fontFamily: "inherit",
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
    grid: {
      show: false,
    },
    dataLabels: {
      enabled: false,
    },
    colors: ["#79e580", "#2cabe3"],
    stroke: {
      curve: "smooth",
      lineCap: "round",
      width: 2,
      colors: ["#79e580", "#2cabe3"],
    },
    xaxis: {
      categories: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
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
    markers: {
      size: 0,
    },
    fill: {
      type: "solid",
      colors: ["#79e580", "#2cabe3"],
      opacity: 0.1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "13px",
        fontFamily: "inherit",
      },
      colors: ["#79e580", "#2cabe3"],
      x: {
        show: true,
      },
      y: {
        formatter: undefined,
      },
      marker: {
        show: true,
      },
      followCursor: true,
    },
    legend: {
      show: false,
    },
  };

  var chart_area_basic = new ApexCharts(
    document.querySelector("#wallet-balance"),
    option_Wallet_Balance
  );
  chart_area_basic.render();

  // // -----------------------------------------------------------------------
  // // Minimal Demo Dashboard Init Js
  // // -----------------------------------------------------------------------
});
