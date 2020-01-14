<?php
require('partials/head.php');
?>
    <div class="container">
        <div class="card mt-6">
            <div class="card-header" >
                <h2>All <?php echo $moduleName; ?></h2>
                <a class="btn btn-info" href="">Create</a>
            </div>
            <div class="card-body" >
                <table class="table table-bordered">
                    <tr>

                        <?php
                        $i=0;
                        foreach ($fields as $field ):
                            if ($field->getApiName() == "Owner") continue; ?>
                            <th><?php echo $fieldNames[] = $field->getApiName();?></th>

                            <?php
                            $i++;
                            if ($i==5) break;
                        endforeach; ?>
                    </tr>


                    <?php foreach($recordsArray as $record): ?>
                        <tr>
                            <?php foreach($fieldNames as $fieldName): ?>


                                <td><?php  echo $record->getFieldValue($fieldName); ?></td>


                            <?php endforeach;?>
                            <td><a class="btn btn-info" href="/<?= $record->getentityId(); ?>">Update</a></td>
                            <td><a class="btn btn-danger" href="<?= $record->getentityId(); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach;?>


                </table>
            </div>
        </div>
    </div>
<?php
require('partials/footer.php');
