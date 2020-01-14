<?php
require('partials/head.php');
?>
    <div class="container">
        <div class="card mt-6">
            <div class="card-body" >
                <form>
                    <div class="form-group">
                        <?php
                            foreach ($record->getData() as $fieldName => $fieldValue): ?>
                                <label for="<?php  echo $fieldName; ?>"><?php  echo $fieldName; ?></label>
                                <input type="email" class="form-control" id="<?php  echo $fieldName; ?>" value="<?php  echo "$fieldValue"; ?>">
                            <?php endforeach; ?>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
require 'partials/footer.php';
