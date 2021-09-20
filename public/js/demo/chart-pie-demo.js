let css_percent = $('#css_percent').val();
let not_css_percent = 100 - css_percent;

let js_percent = $('#js_percent').val();
let not_js_percent = 100 - js_percent;

let jquery_percent = $('#jquery_percent').val();
let not_jquery_percent = 100 - jquery_percent;

let php_percent = $('#php_percent').val();
let not_php_percent = 100 - php_percent;

let laravel_percent = $('#laravel_percent').val();
let not_laravel_percent = 100 - laravel_percent;

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


// Pie Chart Example
let ctx_css = $("#CSSPieChart");
let cssPieChart = new Chart(ctx_css, {
    type: 'doughnut',
    data: {
        labels: ["達成済み", "未達成"],
        datasets: [{
            data: [css_percent, not_css_percent],
            backgroundColor: ['#36b9cc', '#eee'],
            hoverBackgroundColor: ['#2c9faf', '#ddd'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
// Pie Chart Example
let ctx_js = $("#jsPieChart");
let jsPieChart = new Chart(ctx_js, {
    type: 'doughnut',
    data: {
        labels: ["達成済み", "未達成"],
        datasets: [{
            data: [js_percent, not_js_percent],
            backgroundColor: ['#36b9cc', '#eee'],
            hoverBackgroundColor: ['#2c9faf', '#ddd'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
// Pie Chart Example
let ctx_jquery = $("#jqueryPieChart");
let jqueryPieChart = new Chart(ctx_jquery, {
    type: 'doughnut',
    data: {
        labels: ["達成済み", "未達成"],
        datasets: [{
            data: [jquery_percent, not_jquery_percent],
            backgroundColor: ['#36b9cc', '#eee'],
            hoverBackgroundColor: ['#2c9faf', '#ddd'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
// Pie Chart Example
let ctx_php = $("#phpPieChart");
let phpPieChart = new Chart(ctx_php, {
    type: 'doughnut',
    data: {
        labels: ["達成済み", "未達成"],
        datasets: [{
            data: [php_percent, not_php_percent],
            backgroundColor: ['#36b9cc', '#eee'],
            hoverBackgroundColor: ['#2c9faf', '#ddd'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
// Pie Chart Example
let ctx_laravel = $("#laravelPieChart");
let laravelPieChart = new Chart(ctx_laravel, {
    type: 'doughnut',
    data: {
        labels: ["達成済み", "未達成"],
        datasets: [{
            data: [laravel_percent, not_laravel_percent],
            backgroundColor: ['#36b9cc', '#eee'],
            hoverBackgroundColor: ['#2c9faf', '#ddd'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});