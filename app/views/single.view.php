<?php
require('partials/head.php');
?>
    <div class="container">
        <div class="card mt-6">
            <div class="card-body" >
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Field</th>
                        <th scope="col">Value</th>

                    </tr>
                    </thead>
                    <tbody>



                        <?php
                        foreach ($record->getData() as $fieldName => $fieldValue): ?>
                            <tr>
                                <td><?php  echo $fieldName; ?></td>
                                <td><?php  echo $fieldValue; ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
require('partials/footer.php');
