    <thead align="center">
    <tr style=color:#00477C >
      <th><output style=font-size:14px;><?=DateThai($row["date_case"]);?></output></th>
       <th><output style=font-size:14px;><?=$row["genre_case"];?> </output></th>
       <th><output style=font-size:14px;><?=$row["system_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["input_case"];?></output></th>
       <th><output style=font-size:14px;><?=$row["output_case"];?></output></th>

          <?php
          if($row['status_case']=='ผ่าน'){?>
            <th><a class="outline-primary" ><i class="fas fa-check"></i></a></th>
            <?php
          }else{?>
            <th><a class="btn btn-outline-danger" ><i class="fa fa-times"></i></a></th>
            <?php } ?>

            <?php
          if($row['note_case']=='ปกติ'){?>
            <th><a class="outline-dark" ><i class="fa fa-minus"></i></a></th>
            <?php
          }else{?>
            <th><output style=font-size:14px;><?=$row["note_case"];?></output></th>
            <?php } ?>
       
       

       <th>
       <?php
        if($row['img_case']!=='' &&$row['img_case']!=null){
            ?>
            <a class="btn btn-info" href="images_test/<?=$row['img_case'];?>" target="_blank"><i class="fa fa-eye"></i></a>
            <?php
          }
          elseif($row['img_case']==''&&$row['img_case']==null){
            ?>
          <a class="btn btn-outline-dark" ><i class="fa fa-minus"></i></a>
            <?php
          }
          ?>
       </th>
       <th>
       <a class="btn btn-outline-primary" href="edit_input.php?ID=<?=$row['id_case'];?>&genre_case=<?=$row['genre_case'];?>&system_case=<?=$row['system_case'];?>&input_case=<?=$row['input_case'];?>&output_case=<?=$row['output_case'];?>&status_case=<?=$row['status_case'];?>&note_case=<?=$row['note_case'];?>&img_case=<?=$row['img_case'];?>&rights_case=<?=$row['rights_case'];?>&system_test=<?=$row['system_test'];?>" onclick="return confirm('แก้ไขข้อมูล');"><i class="fas fa-pencil-alt"></i></a>
       </th>
       <th><a class="btn btn-danger" href="delete.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>" onclick="return confirm('ยืนยันลบข้อมูล');"><i class="fa fa-trash"></i></a></th>
       <?php
        if($row['note_case'] !== 'ปกติ'){
           if($row['status_case'] == 'ผ่าน'){
        ?>
       <th align="center"><a class="btn btn-outline-warning"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></th> 
        <?php
      }
      elseif($row['status_case'] !== 'ผ่าน'){
          ?>
          <th align="center"><a class="btn btn-outline-danger"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></a></th>
          <?php
        }
      }
    if($row['note_case'] == 'ปกติ'){
      if($row['status_case'] == 'ผ่าน'){
        ?>
         <th align="center"><a class="btn btn-outline-info"><i class="fa fa-check"></i></a></th>
        <?php
      }
      else{
        ?>
             <th align="center"><a class="btn btn-outline-danger"  href="police.php?ID=<?=$row['id_case'];?>&system_test=<?=$row['system_test'];?>&rights_case=<?=$row['rights_case'];?>&check_case=<?=$row['check_case'];?>" onclick="return confirm('ยืนยันแก้ไข');"><i class="fa fa-exclamation-triangle"></i></a></th>
        <?php
      }
    }
       
     ?>
      </tr>
      </thead>
      