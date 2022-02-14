<?php $physique_data_query = "SELECT * FROM physique_data WHERE username = '$username' and student_name = '$student_name'"; ?>
                        <?php $result = mysqli_query($db, $physique_data_query); ?>
                        <?php $last_value = -1; ?>
                        

<?php while ($statistics = mysqli_fetch_assoc($result)) : ?>

<td>
    <?php $new_value = $statistics[$type_stat]; ?>
    <?php if ($last_value > 0) : ?>
        <?php if ($last_value > $new_value) : ?>
            <i class="bi bi-arrow-up" style="color:#32CD32;"></i>
        <?php else : ?>
            <i class="bi bi-arrow-down" style="color:#FF0000;"></i>
        <?php endif ?>
    <?php endif ?>
    <?php $last_value = $new_value; ?>
    <?php echo $new_value; ?>
    </td>
<?php endwhile ?>