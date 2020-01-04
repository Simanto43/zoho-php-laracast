<?php use zcrmsdk\crm\crud\ZCRMModule;

require('partials/head.php'); ?>
<?php

$zcrmModuleIns = ZCRMModule::getInstance("Leads");
$bulkAPIResponse=$zcrmModuleIns->getRecords();
$recordsArray = $bulkAPIResponse->getData();
?>
<div class="container">
    <div class="card mt-6">
        <div class="card-header" style="display: flex;justify-content: space-between">
            <h2>All Leads</h2>
            <a class="btn btn-info" href="create">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Lead source</th>
                    <th>Lead Status</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
                <?php foreach($recordsArray as $record): ?>
                    <tr>
                        <td><?php  echo $record->getentityId();  ?></td>
                        <td><?php  echo $record->getFieldValue('Last_Name');  ?></td>
                        <td><?php  echo $record->getFieldValue('Email'); ?></td>
                        <td><?php  echo $record->getFieldValue('Lead_Source'); ?></td>
                        <td><?php  echo $record->getFieldValue('Lead_Status'); ?></td>
                        <td><?php  echo $record->getFieldValue('Company'); ?></td>
                        <td><a class="btn btn-info" href="update?id=<?= $record->getentityId(); ?>">Update</a></td>
                        <td><a class="btn btn-danger" href="delete?id=<?= $record->getentityId(); ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>


            </table>
        </div>
    </div>
</div>


<?php require('partials/footer.php'); ?>
