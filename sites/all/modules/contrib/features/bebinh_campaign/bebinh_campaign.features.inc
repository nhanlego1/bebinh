<?php
/**
 * @file
 * bebinh_campaign.features.inc
 */

/**
 * Implements hook_views_api().
 */
function bebinh_campaign_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function bebinh_campaign_node_info() {
  $items = array(
    'customer' => array(
      'name' => t('Customer'),
      'base' => 'node_content',
      'description' => t('Customer content type'),
      'has_title' => '1',
      'title_label' => t('Tên khách hàng'),
      'help' => '',
    ),
    'email_campaign' => array(
      'name' => t('Email Campaign'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Campaign name'),
      'help' => '',
    ),
  );
  return $items;
}
