<?php

function TableComponent($header, $data, $btn1, $btn2, $btn3)
{

    ob_start();
?>
    <div class="mt-4 px-2">
        <table id="example" class="table table-striped table-hover">
            <thead>
                <tr>
                    <?php foreach ($header as $col) : ?>
                        <th><?php echo ucfirst(str_replace('_', ' ', $col)); ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <?php foreach ($header as $col) : ?>
                            <td><?php echo $row[$col]; ?></td>
                        <?php endforeach; ?>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-3">
                                <!-- Edit form -->
                                <form method="POST">
                                    <input type="hidden" name="idNum" value="<?php echo $row[$header[0]]; ?>" />
                                    <button type="submit" name="view" class="btn text-white" style="background-color: rgba(0, 166, 81, 1)"><?php echo $btn1  ?></button>
                                </form>
                                <form method="POST">
                                    <input type="hidden" name="idNum" value="<?php echo $row[$header[0]]; ?>" />
                                    <button type="submit" name="edit" class="btn btn-primary"><?php echo $btn2  ?></button>
                                </form>

                                <!-- Delete form -->
                                <form method="POST" class="delete-form">
                                    <input type="hidden" name="idNum" value="<?php echo $row[$header[0]]; ?>" />
                                    <button type="submit" name="deletePatient" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Patient?')">
                                        <?php echo $btn3; ?>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php
    // Return the captured HTML
    return ob_get_clean();
}
?>