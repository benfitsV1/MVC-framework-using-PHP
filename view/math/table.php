
<table border="1">
    <?php for($row=1; $row<=$rows; $row++): ?>
        <tr>
            <?php for($col=1; $col<=$cols; $col++): ?>
                <td>
                    <?= $row * $col ?>
                </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>
