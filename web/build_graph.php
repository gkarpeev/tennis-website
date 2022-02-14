<div id="chartContainer_<?php echo $type_stat?>" style="height: 50px; width: 100px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.addEventListener('load', function () {

var chart_<?php echo $type_stat?> = new CanvasJS.Chart("chartContainer_<?php echo $type_stat?>", {
    animationEnabled: true,
    theme: "light2",
    title:{
    },
    axisX:{
        gridThickness: 0,
        tickLength: 0,
        labelFormatter: function(e) {
            return "";
        }
    },
    axisY:{
        gridThickness: 0,
        tickLength: 0,
        labelFormatter: function(e) {
            return "";
        }
    },
    data: [{        
        type: "line",
        indexLabelFontSize: 0,
        dataPoints: [
            <?php $physique_data_query = "SELECT * FROM physique_data WHERE username = '$username' and student_name = '$student_name'"; ?>
            <?php $result = mysqli_query($db, $physique_data_query); ?>
            <?php while ($statistics = mysqli_fetch_assoc($result)) : ?>
            <?php $new_value = $statistics[$type_stat]; ?>
            { y : <?php echo $new_value ?> },
            <?php endwhile ?>
        ]
    }]
});
chart_<?php echo $type_stat?>.render();

});
</script>