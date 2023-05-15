<script src="<?php base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php base_url('vendor/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php base_url('vendor/chart.js/chartjs-plugin-colorschemes.min.js'); ?>"></script>

<script>
    $(document).ready(function() {

        new Chart(document.getElementById("karyawan-chart"), {
            type: 'pie',
            data: {
                labels: ["Valid", "Invalid"],
                datasets: [{
                    label: "Status",
                    data: [
                        <?= $status[0] ?>,
                        <?= $status[1] ?>
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "white",
                        fontSize: 12
                    }
                },
                plugins: {
                    colorschemes: {
                        scheme: 'brewer.Paired12'
                    }
                }
            }
        });
    });
</script>