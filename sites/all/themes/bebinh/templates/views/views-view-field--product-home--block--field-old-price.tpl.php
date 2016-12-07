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
 */
//dsm($row);
$node = $row->_field_data['nid']['entity'];
?>
<?php if ($field->last_render && $node->field_is_promotion[LANGUAGE_NONE][0]['value'] == 1): ?>
    <span>Giá cũ:&nbsp;&nbsp;&nbsp;&nbsp;<?php print number_format($field->last_render, 0); ?> VND</span>
<?php endif; ?>
<?php if ($node->field_is_promotion[LANGUAGE_NONE][0]['value'] == 1): ?>
    <div class="promotion-mark"></div>
<?php endif; ?>
