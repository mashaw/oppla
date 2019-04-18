<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 *  <input type="checkbox" name="date" id="<?php print $output_stripped; ?>"><label for="<?php print $output_stripped; ?>"><?php print $output; ?></label>
  */
?>


<?php
    global $is_first;
    if(!isset($is_first)) $is_first = true;
    else $is_first = false;
    $output_stripped = str_replace(' ', '', $output);
    $this_node = arg(1);
    $row_node = $row->nid;
?>

 <?php if ( $row_node == $this_node ):  ?>
  <input type="checkbox" name="date" id="<?php print $output_stripped; ?> "><label for="<?php print $output_stripped; ?>"><?php print $output; ?></label>
 <?php else: ?>
  <input type="checkbox" name="date" id="<?php print $output_stripped; ?>"><label for="<?php print $output_stripped; ?>"><?php print $output; ?></label>
  <?php endif; ?>

