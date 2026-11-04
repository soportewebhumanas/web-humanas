/*
 Template Name: Fonik - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Dashboard js
 */

!function ($) {
    "use strict";

    var Dashboard = function () {
    };
        //creates Bar chart
        Dashboard.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
            Morris.Bar({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                gridLineColor: 'rgba(255,255,255,0.1)',
                gridTextColor: '#98a6ad',
                barSizeRatio: 0.2,
                resize: true,
                hideHover: 'auto',
                barColors: lineColors
            });
        },

        //creates area chart
        Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
            Morris.Area({
                element: element,
                pointSize: 0,
                lineWidth: 0,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                resize: true,
                gridLineColor: '#eee',
                hideHover: 'auto',
                lineColors: lineColors,
                fillOpacity: .6,
                behaveLikeLine: true
            });
        },

        //creates Donut chart
        Dashboard.prototype.createDonutChart = function (element, data, colors) {
            Morris.Donut({
                element: element,
                data: data,
                resize: true,
                colors: colors,
            });
        },

        Dashboard.prototype.init = function () {

            //creating bar chart
            var $barData = [
                {y: '2020-10-01', a: 100, b: 90},
                {y: '2020-10-02', a: 75, b: 65},
                {y: '2020-10-03', a: 50, b: 40},
                {y: '2020-10-04', a: 75, b: 65},
                {y: '2020-10-05', a: 50, b: 40},
                {y: '2020-10-06', a: 75, b: 65},
                {y: '2020-10-07', a: 100, b: 90},
                {y: '2020-10-08', a: 90, b: 75},
                {y: '2020-10-09', a: 75, b: 65},
                {y: '2020-10-10', a: 50, b: 40},
                {y: '2020-10-11', a: 75, b: 65},
                {y: '2020-10-12', a: 92, b: 90},
                {y: '2020-10-13', a: 60, b: 80},
                {y: '2020-10-14', a: 100, b: 90},
            ];
            this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Visitas', 'Contactos'], ['#2f8ee0','#4bbbce']);

        },
        //init
        $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.Dashboard.init();
    }(window.jQuery);