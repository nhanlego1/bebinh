<?php
/**
 * @file
 * bebinh_product.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function bebinh_product_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function bebinh_product_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function bebinh_product_node_info() {
  $items = array(
    'product' => array(
      'name' => t('Product'),
      'base' => 'node_content',
      'description' => t('Add new product'),
      'has_title' => '1',
      'title_label' => t('Tên sản phẩm'),
      'help' => '',
    ),
  );
  return $items;
}
