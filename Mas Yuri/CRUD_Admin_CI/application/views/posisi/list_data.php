<?php
  $no = 1;
  foreach ($dataPosisi as $posisi) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $posisi->nama; ?></td>
      <td style="text-align: center;">
          <button class="btn btn-warning update-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
          <button class="btn btn-danger hapus-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>