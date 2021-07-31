$(document).ready(function () {
    pasienDiagnosisKerja();
})

function pasienDiagnosisKerja() {
    let url

    url = baseUrl + 'api/dashboard-api/diagnosis-kerja';
    $.get(url, // url
        function (data, textStatus, jqXHR) { // success callback
            let chartTutupKasusCanvas = document.getElementById("chartTutupKasus");

            let chartTutupKasus = new Chart(chartTutupKasusCanvas, {
                type: 'pie',
                data: data,
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: false,
                    legendCallback: function (chart) {
                        let elem = [];
                        elem.push('<ul class="custom-legends">');
                        for (let i = 0; i < chart.data.datasets[0].data.length; i++) {
                            elem.push('<li><span class="dot" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
                            if (chart.data.labels[i]) {
                                elem.push(chart.data.labels[i] + '<div class="float-right badge" style="color: #ffffff; background-color: ' + chart.data.datasets[0].backgroundColor[i] + '"><a href="">' + chart.data.datasets[0].data[i] + '</a></div>');
                            }
                            elem.push('</li>');
                        }
                        elem.push('</ul>');
                        return elem.join("");
                    },
                    title: {
                        display: true,
                        text: 'Pasien Diagonosis'
                    }
                }
            })

            let legentElement = document.getElementById("legendTutupKasus");
            /* insert custom HTML inside custom div */
            legentElement.innerHTML = chartTutupKasus.generateLegend();

        });
}

let refreshChartPasienSelesaiTutupKasus = (e, ini) => {
    $(ini).children('i').addClass('fa-spin')
    pasienDiagnosisKerja()
    $(ini).children('i').removeClass('fa-spin')
  }