<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = '188.166.245.155';
$options['db_port'] = '3306';
$options['db_passwd'] = 'UkbhosQAVn';
$options['db_name'] = 'bebinhnewphanmem';
$options['db_user'] = 'bebinhnewphanmem';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.44',
      'description' => 'This platform is running Drupal 7.44',
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'name' => 'standard',
      'filename' => './profiles/standard/standard.profile',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
        'old_short_name' => 'default',
      ),
      'version' => '7.44',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.2',
        'project' => 'views_bulk_operations',
        'datestamp' => '1387798183',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'adaptive_image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/adaptive_image/adaptive_image.module',
      'name' => 'adaptive_image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Adaptive Image',
        'description' => 'Support for adaptive images.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/adaptive-image.css',
          ),
        ),
        'version' => '7.x-1.4',
        'project' => 'adaptive_image',
        'datestamp' => '1330097138',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'ajaxblocks' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ajaxblocks/ajaxblocks.module',
      'name' => 'ajaxblocks',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ajax Blocks',
        'description' => 'Loads dynamic blocks on cached page for anonymous users by performing AJAX request.',
        'package' => 'Cache',
        'core' => '7.x',
        'version' => '7.x-1.3',
        'project' => 'ajaxblocks',
        'datestamp' => '1330085740',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'backup_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
      'name' => 'backup_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup and Migrate',
        'description' => 'Backup the Drupal database and files or migrate them to another environment.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/destinations.inc',
          1 => 'includes/profiles.inc',
          2 => 'includes/schedules.inc',
        ),
        'configure' => 'admin/config/system/backup_migrate',
        'version' => '7.x-3.1',
        'project' => 'backup_migrate',
        'datestamp' => '1431350582',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'bebinh_campaign' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/features/bebinh_campaign/bebinh_campaign.module',
      'name' => 'bebinh_campaign',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bebinh Campaign',
        'description' => 'Bebinh Campaign to send mail marketing to customer',
        'core' => '7.x',
        'package' => 'Bebinh',
        'version' => '7.x-1.1',
        'project' => 'bebinh_campaign',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'file',
          2 => 'options',
          3 => 'taxonomy',
          4 => 'text',
          5 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'body',
            1 => 'field_customer_address',
            2 => 'field_customer_code',
            3 => 'field_customer_contact',
            4 => 'field_customer_ddkh',
            5 => 'field_customer_group',
            6 => 'field_customer_phone',
            7 => 'field_customer_trans',
            8 => 'field_customer_type',
            9 => 'field_email',
            10 => 'field_file_attach',
          ),
          'field_instance' => 
          array (
            0 => 'node-customer-field_customer_address',
            1 => 'node-customer-field_customer_code',
            2 => 'node-customer-field_customer_contact',
            3 => 'node-customer-field_customer_ddkh',
            4 => 'node-customer-field_customer_group',
            5 => 'node-customer-field_customer_phone',
            6 => 'node-customer-field_customer_trans',
            7 => 'node-customer-field_customer_type',
            8 => 'node-customer-field_email',
            9 => 'node-email_campaign-body',
            10 => 'node-email_campaign-field_customer_group',
            11 => 'node-email_campaign-field_file_attach',
          ),
          'node' => 
          array (
            0 => 'customer',
            1 => 'email_campaign',
          ),
          'taxonomy' => 
          array (
            0 => 'customer',
          ),
          'views_view' => 
          array (
            0 => 'manage_campaign',
            1 => 'manage_customer',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
          ),
        ),
        'project path' => 'sites/all/modules/features',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'bebinh_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/features/bebinh_content/bebinh_content.module',
      'name' => 'bebinh_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bebinh Content',
        'description' => 'Bebinh Content slideshow and page',
        'core' => '7.x',
        'package' => 'Bebinh',
        'version' => '7.x-1.1',
        'project' => 'bebinh_content',
        'dependencies' => 
        array (
          0 => 'flexslider',
          1 => 'text',
          2 => 'views',
          3 => 'views_slideshow',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'flexslider:flexslider_default_preset:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_slideshow_image',
          ),
          'field_instance' => 
          array (
            0 => 'node-page-body',
            1 => 'node-slideshow-field_slideshow_image',
          ),
          'flexslider_optionset' => 
          array (
            0 => 'slideshow',
          ),
          'node' => 
          array (
            0 => 'page',
            1 => 'slideshow',
          ),
          'views_view' => 
          array (
            0 => 'manage_contents',
            1 => 'slideshow',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
            'features' => 'features',
            'image' => 'image',
            'bebinh_campaign' => 'bebinh_campaign',
          ),
        ),
        'project path' => 'sites/all/modules/features',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'bebinh_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom/bebinh_migrate/bebinh_migrate.module',
      'name' => 'bebinh_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bebinhco Migrate data',
        'package' => 'Bebinhco',
        'description' => 'Bebinh Migrate data',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'bebinh_product' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/features/bebinh_product/bebinh_product.module',
      'name' => 'bebinh_product',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bebinh Product',
        'description' => 'Bebinh Product type and views',
        'core' => '7.x',
        'package' => 'Bebinh',
        'version' => '7.x-1.1',
        'project' => 'bebinh_product',
        'dependencies' => 
        array (
          0 => 'field_group',
          1 => 'image',
          2 => 'list',
          3 => 'text',
          4 => 'views',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'field_group:field_group:1',
            1 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'field_base' => 
          array (
            0 => 'field_brand',
            1 => 'field_category',
            2 => 'field_is_home',
            3 => 'field_is_promotion',
            4 => 'field_made_in',
            5 => 'field_old_price',
            6 => 'field_product_image',
            7 => 'field_promotion_content',
            8 => 'field_sell_price',
            9 => 'field_size',
          ),
          'field_group' => 
          array (
            0 => 'group_category|node|product|form',
            1 => 'group_detail|node|product|default',
            2 => 'group_image|node|product|default',
            3 => 'group_shortinfo|node|product|default',
          ),
          'field_instance' => 
          array (
            0 => 'node-product-body',
            1 => 'node-product-field_brand',
            2 => 'node-product-field_category',
            3 => 'node-product-field_is_home',
            4 => 'node-product-field_is_promotion',
            5 => 'node-product-field_made_in',
            6 => 'node-product-field_old_price',
            7 => 'node-product-field_product_image',
            8 => 'node-product-field_promotion_content',
            9 => 'node-product-field_sell_price',
            10 => 'node-product-field_size',
          ),
          'node' => 
          array (
            0 => 'product',
          ),
          'taxonomy' => 
          array (
            0 => 'brand',
            1 => 'category',
          ),
          'views_view' => 
          array (
            0 => 'ctaegory_product_list',
            1 => 'manage_product',
            2 => 'product_home',
          ),
        ),
        'features_exclude' => 
        array (
          'dependencies' => 
          array (
            'ctools' => 'ctools',
            'features' => 'features',
            'options' => 'options',
            'taxonomy' => 'taxonomy',
            'bebinh_campaign' => 'bebinh_campaign',
          ),
        ),
        'project path' => 'sites/all/modules/features',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'bebinh_submenu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom/bebinh_submenu/bebinh_submenu.module',
      'name' => 'bebinh_submenu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bebinhco Sub-Ctegory',
        'package' => 'Bebinhco',
        'description' => 'Bebinh sub-category for Category show in left sidebar',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha',
        'files' => 
        array (
          0 => 'captcha.module',
          1 => 'captcha.inc',
          2 => 'captcha.admin.inc',
          3 => 'captcha.install',
          4 => 'captcha.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'captcha',
        'datestamp' => '1404666828',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'cck' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/cck/cck.module',
      'name' => 'cck',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCK',
        'description' => 'Miscellaneous field functions not handled by core.',
        'package' => 'CCK',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'cck.module',
          1 => 'cck.install',
        ),
        'dependencies' => 
        array (
          0 => 'field_ui',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'cck',
        'datestamp' => '1386880109',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha3',
    ),
    'cdn' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/cdn/cdn.module',
      'name' => 'cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7210',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CDN',
        'description' => 'Integrates your site with a CDN, through altering file URLs.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'configure' => 'admin/config/development/cdn',
        'files' => 
        array (
          0 => 'cdn.test',
        ),
        'version' => '7.x-2.6',
        'project' => 'cdn',
        'datestamp' => '1362918918',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.6',
    ),
    'clone' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/node_clone/clone.module',
      'name' => 'clone',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node clone',
        'description' => 'Allows users to clone (copy then edit) an existing node.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/views_handler_field_node_link_clone.inc',
        ),
        'configure' => 'admin/config/content/clone',
        'version' => '7.x-1.0-rc2',
        'project' => 'node_clone',
        'datestamp' => '1386176910',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'colorbox' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/colorbox/colorbox.module',
      'name' => 'colorbox',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Colorbox',
        'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
        'dependencies' => 
        array (
          0 => 'libraries (2.x)',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/media/colorbox',
        'files' => 
        array (
          0 => 'views/colorbox_handler_field_colorbox.inc',
        ),
        'version' => '7.x-2.5',
        'project' => 'colorbox',
        'datestamp' => '1385815706',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.5',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'conditional_fields' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/conditional_fields/conditional_fields.module',
      'name' => 'conditional_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Conditional Fields',
        'description' => 'Define dependencies between fields based on their states and values.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'configure' => 'admin/structure/dependencies',
        'version' => '7.x-3.0-alpha1',
        'project' => 'conditional_fields',
        'datestamp' => '1384798705',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha1',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'content_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/cck/modules/content_migrate/content_migrate.module',
      'name' => 'content_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Migrate',
        'description' => 'Migrate fields and field data from CCK D6 format to the D7 field format. Required to migrate data, can be disabled once all fields have been migrated.',
        'core' => '7.x',
        'package' => 'CCK',
        'files' => 
        array (
          0 => 'content_migrate.module',
          1 => 'content_migrate.api.php',
          2 => 'includes/content_migrate.admin.inc',
          3 => 'includes/content_migrate.values.inc',
          4 => 'includes/content_migrate.drush.inc',
          5 => 'modules/content_migrate.text.inc',
          6 => 'modules/content_migrate.number.inc',
          7 => 'modules/content_migrate.optionwidgets.inc',
          8 => 'modules/content_migrate.filefield.inc',
          9 => 'tests/content_migrate.test',
        ),
        'version' => '7.x-3.0-alpha3',
        'project' => 'cck',
        'datestamp' => '1386880109',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha3',
    ),
    'context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/context/context.module',
      'name' => 'context',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'description' => 'Provide modules with a cache that lasts for a single page request.',
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/context.test',
          1 => 'tests/context.conditions.test',
          2 => 'tests/context.reactions.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'context',
        'datestamp' => '1390931314',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'context_layouts' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
      'name' => 'context_layouts',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context layouts',
        'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/context_layouts_reaction_block.inc',
        ),
        'version' => '7.x-3.2',
        'project' => 'context',
        'datestamp' => '1390931314',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'context_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/context/context_ui/context_ui.module',
      'name' => 'context_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Context UI',
        'description' => 'Provides a simple UI for settings up a site structure using Context.',
        'dependencies' => 
        array (
          0 => 'context',
        ),
        'package' => 'Context',
        'core' => '7.x',
        'configure' => 'admin/structure/context',
        'files' => 
        array (
          0 => 'context.module',
          1 => 'tests/context_ui.test',
        ),
        'version' => '7.x-3.2',
        'project' => 'context',
        'datestamp' => '1390931314',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.2',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6008',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'custom_breadcrumbs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs.module',
      'name' => 'custom_breadcrumbs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs',
        'package' => 'Custom breadcrumbs',
        'description' => 'Allows administrators to define custom breadcrumb trails for node types.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs.admin.inc',
          1 => 'custom_breadcrumbs.install',
          2 => 'custom_breadcrumbs.module',
          3 => 'custom_breadcrumbs_common.inc',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbsapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbsapi/custom_breadcrumbsapi.module',
      'name' => 'custom_breadcrumbsapi',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs API',
        'package' => 'Custom breadcrumbs',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
        ),
        'description' => 'Provides a simple API to set breadcrumbs on module pages not served by other custom breadcrumbs submodules.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'custom_breadcrumbsapi.install',
          1 => 'custom_breadcrumbsapi.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbs_identifiers' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_identifiers/custom_breadcrumbs_identifiers.module',
      'name' => 'custom_breadcrumbs_identifiers',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs identifiers',
        'package' => 'Custom breadcrumbs',
        'description' => 'Provides special identifiers for custom breadcrumbs.',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs_identifiers.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbs_panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_panels/custom_breadcrumbs_panels.module',
      'name' => 'custom_breadcrumbs_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs for panels',
        'package' => 'Custom breadcrumbs',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
          1 => 'panels',
          2 => 'ctools',
          3 => 'page_manager',
        ),
        'description' => 'Provides custom breadcrumbs for panels pages.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs_panels.install',
          1 => 'custom_breadcrumbs_panels.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbs_paths' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_paths/custom_breadcrumbs_paths.module',
      'name' => 'custom_breadcrumbs_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs for paths',
        'package' => 'Custom breadcrumbs',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
        ),
        'description' => 'Provides custom breadcrumbs for specific paths.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs_paths.install',
          1 => 'custom_breadcrumbs_paths.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbs_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_taxonomy/custom_breadcrumbs_taxonomy.module',
      'name' => 'custom_breadcrumbs_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '6200',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs for taxonomy',
        'description' => 'Enables taxonomy based breadcrumbs and allows for node assosciations with taxonomy terms.',
        'package' => 'Custom breadcrumbs',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
          1 => 'taxonomy',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs_taxonomy.admin.inc',
          1 => 'custom_breadcrumbs_taxonomy.inc',
          2 => 'custom_breadcrumbs_taxonomy.install',
          3 => 'custom_breadcrumbs_taxonomy.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'custom_breadcrumbs_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/custom_breadcrumbs/custom_breadcrumbs_views/custom_breadcrumbs_views.module',
      'name' => 'custom_breadcrumbs_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom breadcrumbs for views',
        'package' => 'Custom breadcrumbs',
        'dependencies' => 
        array (
          0 => 'custom_breadcrumbs',
          1 => 'views',
        ),
        'description' => 'Provides custom breadcrumbs for views pages.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/custom-breadcrumbs',
        'files' => 
        array (
          0 => 'custom_breadcrumbs_views.install',
          1 => 'custom_breadcrumbs_views.module',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'custom_breadcrumbs',
        'datestamp' => '1353872502',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.44',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'tests/date_api.test',
          2 => 'tests/date.test',
          3 => 'tests/date_field.test',
          4 => 'tests/date_migrate.test',
          5 => 'tests/date_validation.test',
          6 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'date_all_day' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_sql.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'dependencies' => 
        array (
        ),
      ),
      'version' => '7.x-2.8',
    ),
    'date_context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
          1 => 'plugins/date_context_date_condition.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'features',
          4 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.8',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'tests/date_repeat.test',
          1 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/date/tools',
        'files' => 
        array (
          0 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.8',
    ),
    'date_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'includes/date_views_argument_handler.inc',
          1 => 'includes/date_views_argument_handler_simple.inc',
          2 => 'includes/date_views_filter_handler.inc',
          3 => 'includes/date_views_filter_handler_simple.inc',
          4 => 'includes/date_views.views.inc',
          5 => 'includes/date_views_plugin_pager.inc',
        ),
        'version' => '7.x-2.8',
        'project' => 'date',
        'datestamp' => '1406653438',
      ),
      'version' => '7.x-2.8',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'delta' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/delta/delta.module',
      'name' => 'delta',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Delta API',
        'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
        'package' => 'Theme Tools',
        'core' => '7.x',
        'version' => '7.x-3.0-beta11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'delta',
        'datestamp' => '1343161343',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta11',
    ),
    'delta_blocks' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/delta/delta_blocks/delta_blocks.module',
      'name' => 'delta_blocks',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Delta Blocks',
        'description' => 'Exposes a number of core Drupal elements as blocks.',
        'core' => '7.x',
        'version' => '7.x-3.0-beta11',
        'package' => 'Theme Tools',
        'project' => 'delta',
        'datestamp' => '1343161343',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta11',
    ),
    'delta_color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/delta/delta_color/delta_color.module',
      'name' => 'delta_color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Delta Color',
        'description' => 'Makes the color module available for Delta templates.',
        'core' => '7.x',
        'version' => '7.x-3.0-beta11',
        'package' => 'Theme Tools',
        'dependencies' => 
        array (
          0 => 'delta',
          1 => 'color',
        ),
        'project' => 'delta',
        'datestamp' => '1343161343',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta11',
    ),
    'delta_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/delta/delta_ui/delta_ui.module',
      'name' => 'delta_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Delta UI',
        'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
        'package' => 'Theme Tools',
        'core' => '7.x',
        'version' => '7.x-3.0-beta11',
        'dependencies' => 
        array (
          0 => 'delta',
        ),
        'project' => 'delta',
        'datestamp' => '1343161343',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-beta11',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7006',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'easy_social' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/easy_social/easy_social.module',
      'name' => 'easy_social',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Easy Social',
        'description' => 'Simple module that adds share buttons to nodes. The most common ones are included by defauly and any module can define others.',
        'package' => 'Other',
        'core' => '7.x',
        'configure' => 'admin/config/content/easysocial',
        'tags' => 
        array (
          0 => 'social',
          1 => 'share',
        ),
        'dependencies' => 
        array (
          0 => 'variable',
        ),
        'files' => 
        array (
          0 => 'views/easy_social_handler_field.inc',
        ),
        'version' => '7.x-2.11',
        'project' => 'easy_social',
        'datestamp' => '1392206630',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.11',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'entity',
        'datestamp' => '1396975454',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'entityreference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/entityreference/entityreference.module',
      'name' => 'entityreference',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference',
        'description' => 'Provides a field that can reference other entities.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'entityreference.migrate.inc',
          1 => 'plugins/selection/abstract.inc',
          2 => 'plugins/selection/views.inc',
          3 => 'plugins/behavior/abstract.inc',
          4 => 'views/entityreference_plugin_display.inc',
          5 => 'views/entityreference_plugin_style.inc',
          6 => 'views/entityreference_plugin_row_fields.inc',
          7 => 'tests/entityreference.handlers.test',
          8 => 'tests/entityreference.taxonomy.test',
          9 => 'tests/entityreference.admin.test',
          10 => 'tests/entityreference.feeds.test',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entityreference_behavior_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
      'name' => 'entityreference_behavior_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity Reference Behavior Example',
        'description' => 'Provides some example code for implementing Entity Reference behaviors.',
        'core' => '7.x',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'entityreference',
        ),
        'version' => '7.x-1.1',
        'project' => 'entityreference',
        'datestamp' => '1384973110',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.5',
        'project' => 'entity',
        'datestamp' => '1396975454',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'faq' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/faq/faq.module',
      'name' => 'faq',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Frequently Asked Questions',
        'description' => 'Manages configuration of questions for a FAQ page.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'faq.admin.inc',
          1 => 'faq.install',
          2 => 'faq.module',
          3 => 'faq.test',
          4 => 'includes/faq-category-hide-answer.tpl.php',
          5 => 'includes/faq-category-new-page.tpl.php',
          6 => 'includes/faq-category-questions-inline.tpl.php',
          7 => 'includes/faq-category-questions-top-answers.tpl.php',
          8 => 'includes/faq-category-questions-top.tpl.php',
          9 => 'includes/faq-hide-answer.tpl.php',
          10 => 'includes/faq-new-page.tpl.php',
          11 => 'includes/faq-questions-inline.tpl.php',
          12 => 'includes/faq-questions-top.tpl.php',
          13 => 'includes/faq.hide_answer.inc',
          14 => 'includes/faq.new_page.inc',
          15 => 'includes/faq.questions_inline.inc',
          16 => 'includes/faq.questions_top.inc',
          17 => 'views/faq.views.inc',
        ),
        'configure' => '/admin/config/content/faq',
        'version' => '7.x-1.0-rc2',
        'project' => 'faq',
        'datestamp' => '1329952549',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc2',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.0',
        'project' => 'features',
        'datestamp' => '1382018758',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'field_group' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/field_group/field_group.module',
      'name' => 'field_group',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7007',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Fieldgroup',
        'description' => 'Fieldgroup',
        'package' => 'Fields',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'ctools',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field_group.install',
          1 => 'field_group.module',
          2 => 'field_group.field_ui.inc',
          3 => 'field_group.form.inc',
          4 => 'field_group.features.inc',
          5 => 'tests/field_group.ui.test',
          6 => 'tests/field_group.display.test',
        ),
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'field_group_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/field_group/tests/field_group_test.module',
      'name' => 'field_group_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fieldgroup Test',
        'description' => 'Test module for fieldgroup',
        'core' => '7.x',
        'package' => 'Fieldgroup',
        'version' => '7.x-1.3',
        'project' => 'field_group',
        'datestamp' => '1380124361',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'fivestar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/fivestar/fivestar.module',
      'name' => 'fivestar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Fivestar',
        'description' => 'Enables fivestar ratings on content, users, etc.',
        'package' => 'Voting',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'votingapi',
        ),
        'configure' => 'admin/config/content/fivestar',
        'files' => 
        array (
          0 => 'test/fivestar.base.test',
          1 => 'test/fivestar.field.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'fivestar',
        'datestamp' => '1395087839',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.1',
    ),
    'flexslider' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/flexslider/flexslider.module',
      'name' => 'flexslider',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider',
        'description' => 'Integrate the FlexSlider 2 library with Drupal',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'libraries (>=2.x)',
          1 => 'ctools',
          2 => 'image',
        ),
        'files' => 
        array (
          0 => 'theme/flexslider.theme.inc',
          1 => 'flexslider.test',
        ),
        'configure' => 'admin/config/media/flexslider',
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/flexslider/flexslider_example/flexslider_example.module',
      'name' => 'flexslider_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Example',
        'description' => 'Sample implementation of FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'features',
          2 => 'flexslider',
          3 => 'flexslider_fields',
          4 => 'flexslider_views',
          5 => 'image',
          6 => 'menu',
          7 => 'strongarm',
          8 => 'views',
        ),
        'features' => 
        array (
          'context' => 
          array (
            0 => 'flexslider_example_thumbnail',
          ),
          'ctools' => 
          array (
            0 => 'context:context:3',
            1 => 'flexslider:flexslider_default_preset:1',
            2 => 'strongarm:strongarm:1',
            3 => 'views:views_default:3.0',
          ),
          'features_api' => 
          array (
            0 => 'api:1',
          ),
          'field' => 
          array (
            0 => 'node-flexslider_example-field_flexslider_example_image',
            1 => 'node-flexslider_example-field_flexslider_example_slidesh',
          ),
          'flexslider_optionset' => 
          array (
            0 => 'flexslider_carousel_with_min_and_max_ranges',
            1 => 'flexslider_default_basic_carousel',
            2 => 'flexslider_default_slider_thumbnail_controlnav',
            3 => 'flexslider_default_slider_w_thumbnail_slider',
            4 => 'flexslider_default_thumbnail_captions',
            5 => 'flexslider_default_thumbnail_slider',
          ),
          'menu_custom' => 
          array (
            0 => 'menu-flexslider-example',
          ),
          'node' => 
          array (
            0 => 'flexslider_example',
          ),
          'variable' => 
          array (
            0 => 'field_bundle_settings_node__flexslider_example',
          ),
          'views_view' => 
          array (
            0 => 'flexslider_views_example',
          ),
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_fields' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/flexslider/flexslider_fields/flexslider_fields.module',
      'name' => 'flexslider_fields',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Fields',
        'description' => 'Adds a display mode in Fields for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'flexslider',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'flexslider_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/flexslider/flexslider_views/flexslider_views.module',
      'name' => 'flexslider_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FlexSlider Views Style',
        'description' => 'Adds a Views style plugin for FlexSlider',
        'core' => '7.x',
        'package' => 'FlexSlider',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'flexslider',
        ),
        'files' => 
        array (
          0 => 'flexslider_views.module',
          1 => 'flexslider_views.views.inc',
          2 => 'flexslider_views_plugin_style_flexslider.inc',
        ),
        'version' => '7.x-2.0-alpha3',
        'project' => 'flexslider',
        'datestamp' => '1378663043',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha3',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'galleryformatter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/galleryformatter/galleryformatter.module',
      'name' => 'galleryformatter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Gallery Formatter',
        'description' => 'Provides a jquery gallery CCK formatter for imagefield',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'file',
        ),
        'core' => '7.x',
        'package' => 'User interface',
        'files' => 
        array (
          0 => 'galleryformatter.install',
          1 => 'galleryformatter.module',
          2 => 'includes/galleryformatter.theme.inc',
          3 => 'includes/galleryformatter_imagecache.inc',
          4 => 'theme/galleryformatter.tpl.php',
        ),
        'version' => '7.x-1.3',
        'project' => 'galleryformatter',
        'datestamp' => '1355821655',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/google_analytics/googleanalytics.module',
      'name' => 'googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics',
        'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
        'core' => '7.x',
        'package' => 'Statistics',
        'configure' => 'admin/config/system/googleanalytics',
        'files' => 
        array (
          0 => 'googleanalytics.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'token',
        ),
        'version' => '7.x-1.4',
        'project' => 'google_analytics',
        'datestamp' => '1382021586',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'google_analytics_et' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/google_analytics_et/google_analytics_et.module',
      'name' => 'google_analytics_et',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics Event Tracking',
        'description' => 'Integrates with the Google Analytics module to provide enhanced event tracking.',
        'core' => '7.x',
        'package' => 'Statistics',
        'dependencies' => 
        array (
          0 => 'googleanalytics',
        ),
        'version' => '7.x-1.2',
        'project' => 'google_analytics_et',
        'datestamp' => '1406236728',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'google_analytics_et_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/google_analytics_et/google_analytics_et_example/google_analytics_et_example.module',
      'name' => 'google_analytics_et_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics Event Tracking Example',
        'description' => 'An extremely simple example to demonstraight how to integrate into the Google Analytics Event Tranking Module\'s API\'.',
        'core' => '7.x',
        'package' => 'Statistics',
        'dependencies' => 
        array (
          0 => 'googleanalytics',
          1 => 'google_analytics_et',
        ),
        'version' => '7.x-1.2',
        'project' => 'google_analytics_et',
        'datestamp' => '1406236728',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'hierarchical_select' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/hierarchical_select.module',
      'name' => 'hierarchical_select',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select',
        'description' => 'Simplifies the selection of one or multiple items in a hierarchical tree.',
        'package' => 'Form Elements',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/internals.test',
        ),
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'hs_flatlist' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/modules/hs_flatlist.module',
      'name' => 'hs_flatlist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Flat List',
        'description' => 'Allows Hierarchical Select\'s dropbox to be used for selecting multiple items in a flat list of options.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'hs_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/modules/hs_menu.module',
      'name' => 'hs_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Hierarchical Select Menu',
        'description' => 'Use Hierarchical Select for menu parent selection.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'menu',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'hs_smallhierarchy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/modules/hs_smallhierarchy.module',
      'name' => 'hs_smallhierarchy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Small Hierarchy',
        'description' => 'Allows Hierarchical Select to be used for a hardcoded hierarchy. When it becomes to slow, you should move the hierarchy into the database and write a proper implementation.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'hs_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/modules/hs_taxonomy.module',
      'name' => 'hs_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Taxonomy',
        'description' => 'Use Hierarchical Select for Taxonomy.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'taxonomy',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'hs_taxonomy_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/hierarchical_select/modules/hs_taxonomy_views.module',
      'name' => 'hs_taxonomy_views',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hierarchical Select Taxonomy Views',
        'description' => 'Use Hierarchical Select for Taxonomy exposed filters in Views.',
        'dependencies' => 
        array (
          0 => 'hierarchical_select',
          1 => 'hs_taxonomy',
          2 => 'views',
        ),
        'package' => 'Form Elements',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hs_taxonomy_views_handler_filter_term_node_tid.inc',
        ),
        'version' => '7.x-3.0-alpha6',
        'project' => 'hierarchical_select',
        'datestamp' => '1378129321',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha6',
    ),
    'htmlmail' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/htmlmail/htmlmail.module',
      'name' => 'htmlmail',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '10',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'HTML Mail',
        'description' => 'Enables HTML in system emails.',
        'php' => '5.0',
        'files' => 
        array (
          0 => 'htmlmail.mail.inc',
        ),
        'dependencies' => 
        array (
          0 => 'mailsystem',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/system/htmlmail',
        'version' => '7.x-2.65',
        'project' => 'htmlmail',
        'datestamp' => '1333660850',
      ),
      'version' => '7.x-2.65',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'imageapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imageapi/imageapi.module',
      'name' => 'imageapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI',
        'description' => 'ImageAPI supporting multiple toolkits.',
        'package' => 'ImageAPI',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'imageapi.install',
          1 => 'imageapi.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'imageapi',
        'datestamp' => '1298619411',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'imageapi_gd' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imageapi/imageapi_gd.module',
      'name' => 'imageapi_gd',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI GD2',
        'description' => 'Provides additional operations for PHP\'s built-in GD2 image processing support.',
        'package' => 'ImageAPI',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'imageapi_gd.install',
          1 => 'imageapi_gd.module',
          2 => 'imagefilter.inc',
          3 => 'imagerotate.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'imageapi',
        'datestamp' => '1298619411',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'imageapi_imagemagick' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imageapi/imageapi_imagemagick.module',
      'name' => 'imageapi_imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageAPI ImageMagick',
        'description' => 'Command Line ImageMagick support.',
        'package' => 'ImageAPI',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'imageapi_imagemagick.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'imageapi',
        'datestamp' => '1298619411',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'imagecache_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/imagecache_actions.module',
      'name' => 'imagecache_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Actions',
        'description' => 'Provides a number of additional image effects.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'files' => 
        array (
          0 => 'ImageCacheActionsModuleStreamWrapper.php',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagecache_autorotate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/autorotate/imagecache_autorotate.module',
      'name' => 'imagecache_autorotate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Autorotate',
        'description' => 'Autorotate image based on EXIF Orientation.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagecache_autorotate.install',
          1 => 'imagecache_autorotate.module',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagecache_canvasactions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/canvasactions/imagecache_canvasactions.module',
      'name' => 'imagecache_canvasactions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Canvas Actions',
        'description' => 'Actions for manipulating image canvases layers, including watermark and background effect. Also an aspect switcher (portrait/landscape)',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'canvasactions.inc',
          1 => 'imagecache_canvasactions.install',
          2 => 'imagecache_canvasactions.module',
          3 => 'rounded_corners.inc',
          4 => 'tests/cheap_dropshadow.imagecache_preset.inc',
          5 => 'tests/keyword_positioning.imagecache_preset.inc',
          6 => 'tests/positioned_underlay.imagecache_preset.inc',
          7 => 'tests/rotate_alpha.imagecache_preset.inc',
          8 => 'tests/rotate_alpha_gif.imagecache_preset.inc',
          9 => 'tests/rotate_scale.imagecache_preset.inc',
          10 => 'tests/rotate_scale_alpha.imagecache_preset.inc',
          11 => 'tests/rounded.imagecache_preset.inc',
          12 => 'tests/rounded_bl.imagecache_preset.inc',
          13 => 'tests/rounded_flattened.imagecache_preset.inc',
          14 => 'tests/watermark_100.imagecache_preset.inc',
          15 => 'tests/watermark_50.imagecache_preset.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagecache_coloractions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/coloractions/imagecache_coloractions.module',
      'name' => 'imagecache_coloractions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Color Actions',
        'description' => 'Additional ImageCache actions, providing color-shifting, brightness and alpha transparency effects.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagecache_coloractions.install',
          1 => 'imagecache_coloractions.module',
          2 => 'transparency.inc',
          3 => 'tests/green.imagecache_preset.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagecache_customactions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/customactions/imagecache_customactions.module',
      'name' => 'imagecache_customactions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache Custom Actions',
        'description' => 'Allow direct PHP code manipulation of imagecache images.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
          1 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagecache_customactions.install',
          1 => 'imagecache_customactions.module',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagecache_testsuite' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/tests/imagecache_testsuite.module',
      'name' => 'imagecache_testsuite',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Imagecache_actions Test Suite',
        'description' => 'Displays a collection of demo presets.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagecache_actions',
        ),
        'features' => 
        array (
          'image' => 
          array (
            0 => 'corners_combo',
          ),
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imagemagick' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagemagick/imagemagick.module',
      'name' => 'imagemagick',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageMagick',
        'description' => 'Provides ImageMagick integration.',
        'core' => '7.x',
        'configure' => 'admin/config/media/image-toolkit',
        'version' => '7.x-1.0',
        'project' => 'imagemagick',
        'datestamp' => '1362244511',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'imagemagick_advanced' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagemagick/imagemagick_advanced/imagemagick_advanced.module',
      'name' => 'imagemagick_advanced',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'ImageMagick Advanced',
        'description' => 'Provides advanced ImageMagick effects and options.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imagemagick',
        ),
        'version' => '7.x-1.0',
        'project' => 'imagemagick',
        'datestamp' => '1362244511',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'image_captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/image_captcha',
        'files' => 
        array (
          0 => 'image_captcha.install',
          1 => 'image_captcha.module',
          2 => 'image_captcha.admin.inc',
          3 => 'image_captcha.user.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'captcha',
        'datestamp' => '1404666828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'image_effects_text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text.module',
      'name' => 'image_effects_text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Effects Text',
        'description' => 'Display simple or dynamic captions on images.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'imagecache_actions',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'image_effects_text_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
      'name' => 'image_effects_text_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image Effects Text test',
        'description' => 'Image styles that test the text effect',
        'core' => '7.x',
        'package' => 'Media',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'image_effects_text',
          2 => 'imagecache_canvasactions',
          3 => 'system_stream_wrapper',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'image_styles_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imagecache_actions/image_styles_admin/image_styles_admin.module',
      'name' => 'image_styles_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image styles admin',
        'description' => 'Provides additional administrative image style functionality.',
        'package' => 'Media',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'version' => '7.x-1.4',
        'project' => 'imagecache_actions',
        'datestamp' => '1377368494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'imce' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imce/imce.module',
      'name' => 'imce',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE',
        'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce',
        'version' => '7.x-1.9',
        'project' => 'imce',
        'datestamp' => '1400275428',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'imce_watermark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imce_watermark/imce_watermark.module',
      'name' => 'imce_watermark',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Watermark',
        'description' => 'Adding watermar for IMCE uploaded images.',
        'core' => '7.x',
        'package' => 'Media',
        'configure' => 'admin/config/media/imce/imce_watermark',
        'dependencies' => 
        array (
          0 => 'imce',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_watermark',
        'datestamp' => '1369529462',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'imce_wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/imce_wysiwyg/imce_wysiwyg.module',
      'name' => 'imce_wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'IMCE Wysiwyg API bridge',
        'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
        'package' => 'User interface',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'imce',
          1 => 'wysiwyg',
        ),
        'version' => '7.x-1.0',
        'project' => 'imce_wysiwyg',
        'datestamp' => '1317851503',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'job_scheduler' => 
    array (
      'filename' => false,
      'name' => 'job_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'jquery_plugin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/jquery_plugin/jquery_plugin.module',
      'name' => 'jquery_plugin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery plugins',
        'description' => 'An API and home for miscellaneous jQuery plugins.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_plugin.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'jquery_plugin',
        'datestamp' => '1294280182',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'jquery_update.module',
          1 => 'jquery_update.install',
        ),
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-2.4',
        'project' => 'jquery_update',
        'datestamp' => '1396482246',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'lazyloader' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/lazyloader/lazyloader.module',
      'name' => 'lazyloader',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '3000',
      'info' => 
      array (
        'name' => 'Image Lazyloader',
        'package' => 'Lazyloader',
        'description' => 'Automatically lazyload images on windows scroll, makes sites with multiple images load faster.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'files' => 
        array (
          0 => 'lazyloader.install',
          1 => 'lazyloader.module',
          2 => 'lazyloader.admin.inc',
        ),
        'scripts' => 
        array (
          0 => 'jquery.lazyloader.js',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'lazyloader.css',
          ),
        ),
        'configure' => 'admin/config/media/lazyloader',
        'version' => '7.x-1.3',
        'project' => 'lazyloader',
        'datestamp' => '1343887928',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'lazy_image_loader' => 
    array (
      'filename' => false,
      'name' => 'lazy_image_loader',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.11)',
        ),
        'files' => 
        array (
          0 => 'tests/libraries.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'libraries',
        'datestamp' => '1391965716',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'mailsystem' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/mailsystem/mailsystem.module',
      'name' => 'mailsystem',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'package' => 'Mail',
        'name' => 'Mail System',
        'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
        'php' => '5.0',
        'core' => '7.x',
        'configure' => 'admin/config/system/mailsystem',
        'dependencies' => 
        array (
          0 => 'filter',
        ),
        'version' => '7.x-2.34',
        'project' => 'mailsystem',
        'datestamp' => '1334082653',
      ),
      'version' => '7.x-2.34',
    ),
    'memcache' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/memcache/memcache.module',
      'name' => 'memcache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Memcache',
        'description' => 'High performance integration with memcache.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/memcache.test',
          1 => 'tests/memcache-session.test',
          2 => 'tests/memcache-lock.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'memcache',
        'datestamp' => '1326973845',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'memcache_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/memcache/memcache_admin/memcache_admin.module',
      'name' => 'memcache_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Memcache Admin',
        'description' => 'Adds a User Interface to monitor the Memcache for this site.',
        'core' => '7.x',
        'package' => 'Performance and scalability',
        'version' => '7.x-1.0',
        'project' => 'memcache',
        'datestamp' => '1326973845',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'memcache_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/memcache_storage/memcache_storage.module',
      'name' => 'memcache_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Memcache Storage',
        'description' => 'Provides integration with memcached backend for storing cached data.',
        'package' => 'Performance and scalability',
        'core' => '7.x',
        'configure' => 'admin/config/development/memcache_storage',
        'files' => 
        array (
          0 => 'memcache_storage.api.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'memcache_storage',
        'datestamp' => '1385456005',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'menu_block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu (>7.11)',
        ),
        'configure' => 'admin/config/user-interface/menu-block',
        'version' => '7.x-2.4',
        'project' => 'menu_block',
        'datestamp' => '1399238030',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'menu_block_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/menu_block/menu_block_export.module',
      'name' => 'menu_block_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block Export',
        'description' => 'Provides export interface for Menu block module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu_block',
        ),
        'files' => 
        array (
          0 => 'menu_block_export.module',
          1 => 'menu_block_export.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block/export',
        'version' => '7.x-2.4',
        'project' => 'menu_block',
        'datestamp' => '1399238030',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.4',
    ),
    'metatag' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag.module',
      'name' => 'metatag',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7027',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag',
        'description' => 'Adds support and an API to implement meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.15)',
          1 => 'ctools',
          2 => 'token',
        ),
        'configure' => 'admin/config/search/metatags',
        'files' => 
        array (
          0 => 'metatag.inc',
          1 => 'metatag.migrate.inc',
          2 => 'metatag.test',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_context/metatag_context.module',
      'name' => 'metatag_context',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Context',
        'description' => 'Assigned Metatag using Context definitions, allowing them to be assigned by path and other criteria.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'context',
          1 => 'metatag',
        ),
        'files' => 
        array (
          0 => 'metatag_context.test',
        ),
        'configure' => 'admin/config/search/metatags/context',
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_dc' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.module',
      'name' => 'metatag_dc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Dublin Core',
        'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_devel/metatag_devel.module',
      'name' => 'metatag_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag:Devel',
        'description' => 'Provides development / debugging functionality for the Metatag module. Integrates with Devel Generate.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_facebook' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_facebook/metatag_facebook.module',
      'name' => 'metatag_facebook',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Facebook',
        'description' => 'Provides support for Facebook\'s custom meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_opengraph' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_opengraph/metatag_opengraph.module',
      'name' => 'metatag_opengraph',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag:OpenGraph',
        'description' => 'Provides support for Open Graph Protocol meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_panels/metatag_panels.module',
      'name' => 'metatag_panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Panels',
        'description' => 'Provides Metatag integration within the Panels interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'metatag',
          2 => 'panels',
          3 => 'token',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_twitter_cards' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
      'name' => 'metatag_twitter_cards',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Twitter Cards',
        'description' => 'Provides support for Twitter\'s Card meta tags.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'metatag_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
      'name' => 'metatag_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Metatag: Views',
        'description' => 'Provides Metatag integration within the Views interface.',
        'package' => 'SEO',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'metatag',
          1 => 'views',
        ),
        'files' => 
        array (
          0 => 'metatag_views_plugin_display_extender_metatags.inc',
        ),
        'version' => '7.x-1.0-rc1',
        'project' => 'metatag',
        'datestamp' => '1405170828',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.0-alpha2',
        'project' => 'module_filter',
        'datestamp' => '1386356916',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0-alpha2',
    ),
    'newsletter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/newsletter/newsletter.module',
      'name' => 'newsletter',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Newsletter',
        'description' => 'Send emails to subscribed users.',
        'core' => '7.x',
        'package' => 'Mail',
        'dependencies' => 
        array (
          0 => 'entityreference',
          1 => 'taxonomy',
          2 => 'token',
        ),
        'files' => 
        array (
          0 => 'includes/newsletter.basic.inc',
          1 => 'includes/newsletter.automated.inc',
          2 => 'includes/newsletter.custom.inc',
          3 => 'includes/newsletter.mail.inc',
          4 => 'includes/newsletter.newsletter.controller.inc',
          5 => 'includes/newsletter.subscriber.controller.inc',
          6 => 'includes/newsletter.template.controller.inc',
          7 => 'includes/newsletter.list.controller.inc',
          8 => 'includes/views/handlers/newsletter_handler_field_datetime.inc',
          9 => 'newsletter.test',
        ),
        'configure' => 'admin/config/media/newsletter/configure',
        'version' => '7.x-1.0-beta9',
        'project' => 'newsletter',
        'datestamp' => '1348033762',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta9',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7015',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'node_export' => 
    array (
      'filename' => false,
      'name' => 'node_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'node_export_relation' => 
    array (
      'filename' => false,
      'name' => 'node_export_relation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'on_the_web' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/on_the_web/on_the_web.module',
      'name' => 'on_the_web',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'On The Web',
        'description' => 'A block that provides linked icons to your other presences on the web.',
        'core' => '7.x',
        'configure' => 'admin/config/services/on_the_web',
        'version' => '7.x-1.4',
        'project' => 'on_the_web',
        'datestamp' => '1367196920',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.44',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.2',
        'project' => 'pathauto',
        'datestamp' => '1344525185',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.2',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'popup_announcement' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/popup_announcement/popup_announcement.module',
      'name' => 'popup_announcement',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pop-up announcement',
        'description' => 'Provides a pop-up announcements in the overlay which will appear for the site visitor on the first, second and fifth visit to the site (customable).',
        'core' => '7.x',
        'configure' => 'admin/config/popup_announcement/list',
        'version' => '7.x-1.3',
        'project' => 'popup_announcement',
        'datestamp' => '1400180928',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'quicktabs' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/quicktabs/quicktabs.module',
      'name' => 'quicktabs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quicktabs',
        'description' => 'Render content with tabs and other display styles',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'quicktabs.module',
          1 => 'quicktabs.classes.inc',
          2 => 'includes/quicktabs_style_plugin.inc',
          3 => 'tests/quicktabs.test',
        ),
        'configure' => 'admin/structure/quicktabs',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-3.6',
        'project' => 'quicktabs',
        'datestamp' => '1380731929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'quicktabs_tabstyles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
      'name' => 'quicktabs_tabstyles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Quicktabs Styles',
        'description' => 'Adds predefined tab styles to choose from per Quicktabs instance.',
        'core' => '7.x',
        'configure' => 'admin/structure/quicktabs/styles',
        'dependencies' => 
        array (
          0 => 'quicktabs',
        ),
        'version' => '7.x-3.6',
        'project' => 'quicktabs',
        'datestamp' => '1380731929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'recaptcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/recaptcha/recaptcha.module',
      'name' => 'recaptcha',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA',
        'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/recaptcha',
        'files' => 
        array (
          0 => 'recaptcha.admin.inc',
          1 => 'recaptcha.module',
          2 => 'recaptcha.install',
        ),
        'version' => '7.x-1.11',
        'project' => 'recaptcha',
        'datestamp' => '1391701492',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'recaptcha_mailhide' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/recaptcha/recaptcha_mailhide.module',
      'name' => 'recaptcha_mailhide',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA Mailhide',
        'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'recaptcha_mailhide.module',
        ),
        'version' => '7.x-1.11',
        'project' => 'recaptcha',
        'datestamp' => '1391701492',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'redirect' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/redirect/redirect.module',
      'name' => 'redirect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect',
        'description' => 'Allows users to redirect from old URLs to new URLs.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'redirect.module',
          1 => 'redirect.admin.inc',
          2 => 'redirect.install',
          3 => 'redirect.test',
          4 => 'views/redirect.views.inc',
          5 => 'views/redirect_handler_filter_redirect_type.inc',
          6 => 'views/redirect_handler_field_redirect_source.inc',
          7 => 'views/redirect_handler_field_redirect_redirect.inc',
          8 => 'views/redirect_handler_field_redirect_operations.inc',
          9 => 'views/redirect_handler_field_redirect_link_edit.inc',
          10 => 'views/redirect_handler_field_redirect_link_delete.inc',
        ),
        'configure' => 'admin/config/search/redirect/settings',
        'version' => '7.x-1.0-rc1',
        'project' => 'redirect',
        'datestamp' => '1347989995',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-rc1',
    ),
    'responsive_menus' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/responsive_menus/responsive_menus.module',
      'name' => 'responsive_menus',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Responsive Menus',
        'description' => 'Responsify any menu using CSS Selectors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/responsive_menus',
        'version' => '7.x-1.5',
        'project' => 'responsive_menus',
        'datestamp' => '1391733209',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'rest_server' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/services/servers/rest_server/rest_server.module',
      'name' => 'rest_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'REST Server',
        'description' => 'Provides an REST server.',
        'package' => 'Services - servers',
        'files' => 
        array (
          0 => 'rest_server.module',
          1 => 'includes/RESTServer.inc',
          2 => 'includes/ServicesContentTypeNegotiator.inc',
          3 => 'includes/ServicesRESTServerFactory.inc',
          4 => 'includes/ServicesContext.inc',
          5 => 'includes/ServicesParser.inc',
          6 => 'includes/ServicesFormatter.inc',
          7 => 'tests/ServicesRESTServerTests.test',
          8 => 'tests/rest_server_mock_classes.inc',
          9 => 'lib/bencode.php',
          10 => 'lib/mimeparse.php',
        ),
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'libraries (>=2.x)',
        ),
        'core' => '7.x',
        'version' => '7.x-3.7',
        'project' => 'services',
        'datestamp' => '1391207946',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.7',
    ),
    'rules' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/rules/rules.module',
      'name' => 'rules',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7213',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Rules',
        'description' => 'React on events and conditionally evaluate actions.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules.features.inc',
          1 => 'tests/rules.test',
          2 => 'includes/faces.inc',
          3 => 'includes/rules.core.inc',
          4 => 'includes/rules.event.inc',
          5 => 'includes/rules.processor.inc',
          6 => 'includes/rules.plugins.inc',
          7 => 'includes/rules.state.inc',
          8 => 'includes/rules.dispatcher.inc',
          9 => 'modules/node.eval.inc',
          10 => 'modules/php.eval.inc',
          11 => 'modules/rules_core.eval.inc',
          12 => 'modules/system.eval.inc',
          13 => 'ui/ui.controller.inc',
          14 => 'ui/ui.core.inc',
          15 => 'ui/ui.data.inc',
          16 => 'ui/ui.plugins.inc',
        ),
        'dependencies' => 
        array (
          0 => 'entity_token',
          1 => 'entity',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
      'name' => 'rules_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules UI',
        'description' => 'Administrative interface for managing rules.',
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_admin.module',
          1 => 'rules_admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
      'name' => 'rules_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules translation',
        'description' => 'Allows translating rules.',
        'dependencies' => 
        array (
          0 => 'rules',
          1 => 'i18n_string',
        ),
        'package' => 'Multilingual - Internationalization',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_i18n.i18n.inc',
          1 => 'rules_i18n.rules.inc',
          2 => 'rules_i18n.test',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'rules_scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
      'name' => 'rules_scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Rules Scheduler',
        'description' => 'Schedule the execution of Rules components using actions.',
        'dependencies' => 
        array (
          0 => 'rules',
        ),
        'package' => 'Rules',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rules_scheduler.admin.inc',
          1 => 'rules_scheduler.module',
          2 => 'rules_scheduler.install',
          3 => 'rules_scheduler.rules.inc',
          4 => 'rules_scheduler.test',
          5 => 'includes/rules_scheduler.handler.inc',
          6 => 'includes/rules_scheduler.views_default.inc',
          7 => 'includes/rules_scheduler.views.inc',
          8 => 'includes/rules_scheduler_views_filter.inc',
        ),
        'version' => '7.x-2.7',
        'project' => 'rules',
        'datestamp' => '1399041230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.7',
    ),
    'schemaorg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/schemaorg.module',
      'name' => 'schemaorg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org',
        'description' => 'Allows to annotate content using the schema.org vocabularies',
        'package' => 'Schema.org',
        'dependencies' => 
        array (
          0 => 'rdf',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'schemaorg.test',
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'schemaorg_contrib' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/modules/schemaorg_contrib/schemaorg_contrib.module',
      'name' => 'schemaorg_contrib',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org support for contributed modules',
        'description' => 'Add support for fields from contributed modules such as addressfield and fivestar.',
        'package' => 'Schema.org',
        'dependencies' => 
        array (
          0 => 'schemaorg',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'schemaorg_contrib.test',
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'schemaorg_event' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/example/schemaorg_event/schemaorg_event.module',
      'name' => 'schemaorg_event',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org example: Event',
        'description' => 'Example of an event content type with fields mapped to schema.org',
        'core' => '7.x',
        'package' => 'Schema.org',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'date',
          2 => 'date_api',
          3 => 'date_popup',
          4 => 'date_views',
          5 => 'features',
          6 => 'field_sql_storage',
          7 => 'node',
          8 => 'rdf',
          9 => 'schemaorg',
          10 => 'strongarm',
          11 => 'text',
          12 => 'views',
          13 => 'views_ui',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
            1 => 'views:views_default:3.0',
          ),
          'field' => 
          array (
            0 => 'node-schemaorg_event-field_location',
            1 => 'node-schemaorg_event-field_schemaorg_date',
            2 => 'node-schemaorg_event-field_schemaorg_description',
          ),
          'node' => 
          array (
            0 => 'schemaorg_event',
          ),
          'schemaorg' => 
          array (
            0 => 'node-schemaorg_event',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_schemaorg_event',
            1 => 'comment_default_mode_schemaorg_event',
            2 => 'comment_default_per_page_schemaorg_event',
            3 => 'comment_form_location_schemaorg_event',
            4 => 'comment_preview_schemaorg_event',
            5 => 'comment_schemaorg_event',
            6 => 'comment_subject_field_schemaorg_event',
            7 => 'menu_options_schemaorg_event',
            8 => 'menu_parent_schemaorg_event',
            9 => 'node_options_schemaorg_event',
            10 => 'node_preview_schemaorg_event',
            11 => 'node_submitted_schemaorg_event',
          ),
          'views_view' => 
          array (
            0 => 'events',
          ),
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'schemaorg_person' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/example/schemaorg_person/schemaorg_person.module',
      'name' => 'schemaorg_person',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org example: Person',
        'description' => 'Example of a person content type with fields mapped to schema.org',
        'core' => '7.x',
        'package' => 'Schema.org',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'rdf',
          3 => 'schemaorg',
          4 => 'strongarm',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'field' => 
          array (
            0 => 'node-schemaorg_person-field_schemaorg_affiliation',
            1 => 'node-schemaorg_person-field_schemaorg_bio',
            2 => 'node-schemaorg_person-field_schemaorg_jobtitle',
            3 => 'node-schemaorg_person-field_schemaorg_photo',
          ),
          'node' => 
          array (
            0 => 'schemaorg_person',
          ),
          'schemaorg' => 
          array (
            0 => 'node-schemaorg_person',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_schemaorg_person',
            1 => 'comment_default_mode_schemaorg_person',
            2 => 'comment_default_per_page_schemaorg_person',
            3 => 'comment_form_location_schemaorg_person',
            4 => 'comment_preview_schemaorg_person',
            5 => 'comment_schemaorg_person',
            6 => 'comment_subject_field_schemaorg_person',
            7 => 'menu_options_schemaorg_person',
            8 => 'menu_parent_schemaorg_person',
            9 => 'node_options_schemaorg_person',
            10 => 'node_preview_schemaorg_person',
            11 => 'node_submitted_schemaorg_person',
          ),
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'schemaorg_recipe' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/example/schemaorg_recipe/schemaorg_recipe.module',
      'name' => 'schemaorg_recipe',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org example: Recipe',
        'description' => 'Example of a recipe content type with fields mapped to schema.org',
        'core' => '7.x',
        'package' => 'Schema.org',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'image',
          2 => 'rdf',
          3 => 'recipe',
          4 => 'schemaorg',
        ),
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-recipe-field_schemaorg_image',
          ),
          'schemaorg' => 
          array (
            0 => 'node-recipe',
          ),
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'schemaorg_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/schemaorg/schemaorg_ui/schemaorg_ui.module',
      'name' => 'schemaorg_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Schema.org UI',
        'description' => 'User interface for setting the schema.org module mappings.',
        'package' => 'Schema.org',
        'dependencies' => 
        array (
          0 => 'rdf',
          1 => 'schemaorg',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'schemaorg.test',
        ),
        'version' => '7.x-1.0-beta4',
        'project' => 'schemaorg',
        'datestamp' => '1384874931',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'services' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/services/services.module',
      'name' => 'services',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7400',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Services',
        'description' => 'Provide an API for creating web services.',
        'package' => 'Services',
        'core' => '7.x',
        'php' => '5.x',
        'configure' => 'admin/structure/services',
        'files' => 
        array (
          0 => 'includes/services.runtime.inc',
          1 => 'tests/functional/NoAuthEndpointTestRunner.test',
          2 => 'tests/functional/ServicesResourceNodeTests.test',
          3 => 'tests/functional/ServicesResourceUserTests.test',
          4 => 'tests/functional/ServicesResourceSystemTests.test',
          5 => 'tests/functional/ServicesResourceCommentTests.test',
          6 => 'tests/functional/ServicesResourceTaxonomyTests.test',
          7 => 'tests/functional/ServicesResourceFileTests.test',
          8 => 'tests/functional/ServicesResourceDisabledTests.test',
          9 => 'tests/functional/ServicesEndpointTests.test',
          10 => 'tests/functional/ServicesParserTests.test',
          11 => 'tests/functional/ServicesAliasTests.test',
          12 => 'tests/functional/ServicesXMLRPCTests.test',
          13 => 'tests/functional/ServicesVersionTests.test',
          14 => 'tests/functional/ServicesArgumentsTests.test',
          15 => 'tests/functional/ServicesSecurityTests.test',
          16 => 'tests/unit/ServicesSpycLibraryTests.test',
          17 => 'tests/ui/ServicesUITests.test',
          18 => 'tests/services.test',
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-3.7',
        'project' => 'services',
        'datestamp' => '1391207946',
      ),
      'version' => '7.x-3.7',
    ),
    'services_oauth' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/services/auth/services_oauth/services_oauth.module',
      'name' => 'services_oauth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OAuth Authentication',
        'description' => 'Provides OAuth authentication for the services module',
        'package' => 'Services - authentication',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'oauth_common',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'version' => '7.x-3.7',
        'project' => 'services',
        'datestamp' => '1391207946',
      ),
      'version' => '7.x-3.7',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'site_verify' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/site_verify/site_verify.module',
      'name' => 'site_verify',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '3',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site Verification',
        'description' => 'Verifies ownership of a site for use with search engines.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'site_verify.module',
          1 => 'site_verify.admin.inc',
          2 => 'site_verify.install',
          3 => 'site_verify.test',
        ),
        'configure' => 'admin/config/search/verifications',
        'version' => '7.x-1.1',
        'project' => 'site_verify',
        'datestamp' => '1395656959',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'smtp' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/smtp/smtp.module',
      'name' => 'smtp',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SMTP Authentication Support',
        'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
        'core' => '7.x',
        'package' => 'Mail',
        'configure' => 'admin/config/system/smtp',
        'files' => 
        array (
          0 => 'smtp.mail.inc',
          1 => 'smtp.phpmailer.inc',
          2 => 'smtp.transport.inc',
        ),
        'version' => '7.x-1.0',
        'project' => 'smtp',
        'datestamp' => '1361062292',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'socialmedia' => 
    array (
      'filename' => false,
      'name' => 'socialmedia',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'social_share' => 
    array (
      'filename' => false,
      'name' => 'social_share',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'special_menu_items' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/special_menu_items/special_menu_items.module',
      'name' => 'special_menu_items',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Special menu items',
        'description' => 'Allow users to add placeholder and/or separator menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/system/special_menu_items',
        'version' => '7.x-2.0',
        'project' => 'special_menu_items',
        'datestamp' => '1346788411',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'superfish' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/superfish/superfish.module',
      'name' => 'superfish',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Superfish',
        'description' => 'jQuery Superfish plugin for your Drupal menus.',
        'package' => 'User interface',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'configure' => 'admin/config/user-interface/superfish',
        'core' => '7.x',
        'version' => '7.x-1.9',
        'project' => 'superfish',
        'datestamp' => '1367054112',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.9',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7080',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7011',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'taxonomy_csv' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/taxonomy_csv/taxonomy_csv.module',
      'name' => 'taxonomy_csv',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy CSV import/export',
        'description' => 'Export and import complete taxonomies, hierarchical structure or simple lists of terms and fields to or from a CSV file, url or text.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'package' => 'Taxonomy',
        'project' => 'taxonomy_csv',
        'version' => '7.x-5.10',
        'files' => 
        array (
          0 => 'taxonomy_csv.install',
          1 => 'taxonomy_csv.module',
          2 => 'taxonomy_csv.api.inc',
          3 => 'taxonomy_csv.vocabulary.api.inc',
          4 => 'taxonomy_csv.term.api.inc',
          5 => 'taxonomy_csv.result.inc',
          6 => 'import/taxonomy_csv.import.admin.inc',
          7 => 'import/taxonomy_csv.import.api.inc',
          8 => 'import/taxonomy_csv.import.line.api.inc',
          9 => 'import/taxonomy_csv.import.result.inc',
          10 => 'export/taxonomy_csv.export.admin.inc',
          11 => 'export/taxonomy_csv.export.api.inc',
          12 => 'export/taxonomy_csv.export.result.inc',
        ),
        'datestamp' => '1329924048',
        'php' => '5.2.4',
      ),
      'version' => '7.x-5.10',
    ),
    'taxonomy_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/taxonomy_menu/taxonomy_menu.module',
      'name' => 'taxonomy_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'menu',
        ),
        'description' => 'Adds links to taxonomy terms to a menu.',
        'name' => 'Taxonomy menu',
        'package' => 'Taxonomy menu',
        'files' => 
        array (
          0 => 'taxonomy_menu.batch.inc',
          1 => 'taxonomy_menu.database.inc',
          2 => 'taxonomy_menu.module',
          3 => 'taxonomy_menu.test',
          4 => 'taxonomy_menu.install',
        ),
        'version' => '7.x-1.5',
        'project' => 'taxonomy_menu',
        'datestamp' => '1396359247',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'taxonomy_server' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/taxonomy_xml/taxonomy_server/taxonomy_server.module',
      'name' => 'taxonomy_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Server',
        'description' => 'Publishes full vocabularies in ways that other semantic tools can import.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'taxonomy_xml',
        ),
        'package' => 'Taxonomy',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'taxonomy_server.install',
          1 => 'taxonomy_server.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'taxonomy_xml',
        'datestamp' => '1382146246',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'taxonomy_xml' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/taxonomy_xml/taxonomy_xml.module',
      'name' => 'taxonomy_xml',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy Import/Export via XML',
        'description' => 'Makes it possible to import and export taxonomy terms via XML.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'rdf',
        ),
        'package' => 'Taxonomy',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'csv_format.inc',
          1 => 'csvancestry_format.inc',
          2 => 'lookup_services.inc',
          3 => 'mesh_format.inc',
          4 => 'rdf_format.inc',
          5 => 'taxonomy_xml.install',
          6 => 'taxonomy_xml.module',
          7 => 'taxonomy_xml_rdf.inc',
          8 => 'tcs_format.inc',
          9 => 'xml_format.inc',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'taxonomy_xml',
        'datestamp' => '1382146246',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'test_gateway' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_credit/tests/test_gateway.module',
      'name' => 'test_gateway',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test gateway',
        'description' => 'Adds a credit card gateway that simulates a successful payment for testing checkout.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'token',
        'datestamp' => '1361665026',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.44',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'uc_2checkout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_2checkout/uc_2checkout.module',
      'name' => 'uc_2checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => '2Checkout',
        'description' => 'Processes payments using 2Checkout.com.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_ajax_admin' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_ajax_admin/uc_ajax_admin.module',
      'name' => 'uc_ajax_admin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ubercart Ajax Administration',
        'description' => 'Administrative interface for ajax updates to Ubercart forms.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_attribute' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_attribute/uc_attribute.module',
      'name' => 'uc_attribute',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product attributes',
        'description' => 'Extends product content types to support product variations that customers may select before purchase.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_attribute.test',
          1 => 'tests/uc_attribute_checkout.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_authorizenet' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_authorizenet/uc_authorizenet.module',
      'name' => 'uc_authorizenet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Authorize.net',
        'description' => 'Processes payments using Authorize.net. Supports AIM and ARB.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
          1 => 'uc_credit',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_cart' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_cart/uc_cart.module',
      'name' => 'uc_cart',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart',
        'description' => 'REQUIRED. Controls the shopping cart and checkout for an Ubercart e-commerce site.',
        'dependencies' => 
        array (
          0 => 'uc_order',
          1 => 'uc_product',
        ),
        'package' => 'Ubercart - core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_cart.test',
          1 => 'views/uc_cart_handler_field_cart_user.inc',
          2 => 'uc_cart.controller.inc',
        ),
        'configure' => 'admin/store/settings/cart',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_cart_links' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_cart_links/uc_cart_links.module',
      'name' => 'uc_cart_links',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Cart Links',
        'description' => 'Creates specialized links to purchase products.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - extra',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_cart_links.test',
        ),
        'configure' => 'admin/store/settings/cart-links',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_catalog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_catalog/uc_catalog.module',
      'name' => 'uc_catalog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Catalog',
        'description' => 'Displays a hierarchical product catalog page and block.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'taxonomy',
          2 => 'uc_product',
          3 => 'views',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'classes/treenode.inc',
          1 => 'tests/uc_catalog.test',
        ),
        'configure' => 'admin/store/settings/catalog',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_credit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_credit/uc_credit.module',
      'name' => 'uc_credit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Credit card',
        'description' => 'Enables support for credit card payments at checkout.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_credit.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_cybersource' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_cybersource/uc_cybersource.module',
      'name' => 'uc_cybersource',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CyberSource',
        'description' => 'Processes payments using the CyberSource Silent Order POST and Hosted Order Page services.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'uc_cybersource.soap.inc',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_file/uc_file.module',
      'name' => 'uc_file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File downloads',
        'description' => 'Allows products to be associated with downloadable files.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'uc_file.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'uc_file.js',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_flatrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_flatrate/uc_flatrate.module',
      'name' => 'uc_flatrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Flat rate',
        'description' => 'Assigns a flat shipping rate to an order, plus an optional amount per product.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '7.x',
        'configure' => 'admin/store/settings/quotes/methods',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_googleanalytics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_googleanalytics/uc_googleanalytics.module',
      'name' => 'uc_googleanalytics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Analytics for Ubercart',
        'description' => 'Adds e-commerce tracking to the Google Analytics module.',
        'dependencies' => 
        array (
          0 => 'googleanalytics',
          1 => 'uc_cart',
          2 => 'uc_order',
          3 => 'uc_store',
        ),
        'package' => 'Ubercart - extra',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_google_checkout' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_google_checkout/uc_google_checkout.module',
      'name' => 'uc_google_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Google Checkout',
        'description' => 'This module is obsolete and CANNOT be installed. Uninstall hooks remain so you can remove this module if you previously had it installed.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
          2 => 'uc_quote',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_order' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_order/uc_order.module',
      'name' => 'uc_order',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Order',
        'description' => 'REQUIRED. Receives and manages orders through your website.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'rules',
          2 => 'views',
        ),
        'package' => 'Ubercart - core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'uc_order.module',
          1 => 'tests/uc_order.test',
          2 => 'views/uc_order_handler_field_money_amount.inc',
          3 => 'views/uc_order_handler_field_money_total.inc',
          4 => 'views/uc_order_handler_field_weight_total.inc',
          5 => 'views/uc_order_handler_field_order_weight_total.inc',
          6 => 'views/uc_order_handler_field_order_actions.inc',
          7 => 'views/uc_order_handler_field_order_cc_data.inc',
          8 => 'views/uc_order_handler_field_order_cost.inc',
          9 => 'views/uc_order_handler_field_order_fullname.inc',
          10 => 'views/uc_order_handler_field_order_id.inc',
          11 => 'views/uc_order_handler_field_order_status.inc',
          12 => 'views/uc_order_handler_field_payment_method.inc',
          13 => 'views/uc_order_handler_filter_country.inc',
          14 => 'views/uc_order_handler_filter_order_status.inc',
          15 => 'views/uc_order_handler_filter_payment_method.inc',
          16 => 'views/uc_order_handler_filter_zone.inc',
          17 => 'views/uc_order_handler_filter_total.inc',
          18 => 'views/uc_order_handler_sort_total.inc',
          19 => 'views/uc_order_plugin_argument_validate_user_perm.inc',
          20 => 'views/uc_order_plugin_row_invoice_view.inc',
          21 => 'uc_order.controller.inc',
          22 => 'uc_order.info.inc',
        ),
        'configure' => 'admin/store/settings/orders',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'uc_order.css',
          ),
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_payment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_payment/uc_payment.module',
      'name' => 'uc_payment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment',
        'description' => 'Enables payments to be taken at checkout.',
        'dependencies' => 
        array (
          0 => 'uc_order',
          1 => 'uc_store',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_payment.test',
        ),
        'configure' => 'admin/store/settings/payment',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_payment_pack' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_payment_pack/uc_payment_pack.module',
      'name' => 'uc_payment_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Payment method pack',
        'description' => 'Provides the check/money order, COD, and \'other\' payment methods.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
          1 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_paypal' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/payment/uc_paypal/uc_paypal.module',
      'name' => 'uc_paypal',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PayPal',
        'description' => 'Processes payments using PayPal Website Payments Standard, Website Payments Pro and Express Checkout.',
        'dependencies' => 
        array (
          0 => 'uc_payment',
        ),
        'package' => 'Ubercart - payment',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_product' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_product/uc_product.module',
      'name' => 'uc_product',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product',
        'description' => 'REQUIRED. Provides content types to represent items in an online store.',
        'dependencies' => 
        array (
          0 => 'image',
          1 => 'uc_store',
        ),
        'package' => 'Ubercart - core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_product.test',
          1 => 'views/uc_product_handler_field_addtocart.inc',
          2 => 'views/uc_product_handler_field_buyitnow.inc',
          3 => 'views/uc_product_handler_field_display_price.inc',
          4 => 'views/uc_product_handler_field_length.inc',
          5 => 'views/uc_product_handler_field_price.inc',
          6 => 'views/uc_product_handler_field_weight.inc',
          7 => 'views/uc_product_handler_filter_product.inc',
        ),
        'configure' => 'admin/store/settings/products',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'uc_product.css',
          ),
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_product_kit' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_product_kit/uc_product_kit.module',
      'name' => 'uc_product_kit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Product kit',
        'description' => 'Provides a content type that groups two or more products together, allowing them to be purchased as a bundle with an optional discount.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - extra',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_product_kit.test',
          1 => 'views/uc_product_kit_handler_filter_product_kit.inc',
          2 => 'views/uc_product_kit_handler_filter_product_kit_item.inc',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_quote' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_quote/uc_quote.module',
      'name' => 'uc_quote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping quotes',
        'description' => 'Enables shipping quotes to be calculated and displayed at checkout.',
        'dependencies' => 
        array (
          0 => 'uc_cart',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'configure' => 'admin/store/settings/quotes',
        'files' => 
        array (
          0 => 'tests/uc_quote.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_reports' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_reports/uc_reports.module',
      'name' => 'uc_reports',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Reports',
        'description' => 'Provides reports about your store\'s sales, customers, and products.',
        'dependencies' => 
        array (
          0 => 'uc_order',
          1 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'configure' => 'admin/store/settings/store',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_roles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_roles/uc_roles.module',
      'name' => 'uc_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Roles',
        'description' => 'Assigns permanent or expirable roles based on product purchases.',
        'dependencies' => 
        array (
          0 => 'uc_product',
          1 => 'uc_order',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_roles.test',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_shipping' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_shipping/uc_shipping.module',
      'name' => 'uc_shipping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shipping',
        'description' => 'Gets products ready for physical shipment.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views/uc_shipping_handler_field_shipment_id.inc',
          1 => 'views/uc_shipping_handler_field_package_weight.inc',
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_stock' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_stock/uc_stock.module',
      'name' => 'uc_stock',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stock',
        'description' => 'Manages stock levels of your products.',
        'dependencies' => 
        array (
          0 => 'uc_product',
        ),
        'package' => 'Ubercart - extra',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_stock.test',
          1 => 'views/uc_stock_handler_filter_below_threshold.inc',
        ),
        'configure' => 'admin/store/settings/stock',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_store' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_store/uc_store.module',
      'name' => 'uc_store',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Store',
        'description' => 'REQUIRED. Handles store settings and management of your Ubercart site.',
        'package' => 'Ubercart - core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'classes/mail.inc',
          1 => 'classes/address.inc',
          2 => 'classes/encrypt.inc',
          3 => 'tests/uc_store.test',
          4 => 'tests/uc_address.test',
          5 => 'tests/uc_ajax.test',
        ),
        'configure' => 'admin/store/settings/store',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'uc_store.css',
          ),
        ),
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_taxes' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_taxes/uc_taxes.module',
      'name' => 'uc_taxes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxes',
        'description' => 'Defines tax rates for customers\' geographic locations and products sold.',
        'dependencies' => 
        array (
          0 => 'uc_store',
          1 => 'uc_payment',
          2 => 'uc_product',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tests/uc_taxes.test',
        ),
        'configure' => 'admin/store/settings/taxes',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_tax_report' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/uc_tax_report/uc_tax_report.module',
      'name' => 'uc_tax_report',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tax report',
        'description' => 'Provides a report of sales tax your customers paid.',
        'dependencies' => 
        array (
          0 => 'uc_reports',
          1 => 'uc_taxes',
        ),
        'package' => 'Ubercart - core (optional)',
        'core' => '7.x',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_ups' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_ups/uc_ups.module',
      'name' => 'uc_ups',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UPS',
        'description' => 'Integrates UPS Rates and Services Selection and Shipping Online Tools.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '7.x',
        'configure' => 'admin/store/settings/quotes/settings/ups',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_usps' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_usps/uc_usps.module',
      'name' => 'uc_usps',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'U.S. Postal Service',
        'description' => 'Integrates USPS Rate Calculator and Mail Service Standards Web Tools.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '7.x',
        'configure' => 'admin/store/settings/quotes/settings/usps',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'uc_weightquote' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ubercart/shipping/uc_weightquote/uc_weightquote.module',
      'name' => 'uc_weightquote',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Weight quote',
        'description' => 'Assigns a shipping rate to products based on weight.',
        'dependencies' => 
        array (
          0 => 'uc_quote',
        ),
        'package' => 'Ubercart - fulfillment',
        'core' => '7.x',
        'configure' => 'admin/store/settings/quotes/methods',
        'version' => '7.x-3.6',
        'project' => 'ubercart',
        'datestamp' => '1387304010',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.6',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.44',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'uuid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/uuid/uuid.module',
      'name' => 'uuid',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7102',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Universally Unique ID',
        'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
        'core' => '7.x',
        'package' => 'UUID',
        'configure' => 'admin/config/system/uuid',
        'files' => 
        array (
          0 => 'uuid.test',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'uuid',
        'datestamp' => '1373620283',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'uuid_default_entities_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
      'name' => 'uuid_default_entities_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'features',
          2 => 'uuid',
        ),
        'description' => 'Example feature mainly used for testing.',
        'features' => 
        array (
          'uuid_entities' => 
          array (
            0 => 'deploy_example_plan',
          ),
        ),
        'name' => 'UUID default entities example',
        'package' => 'Features',
        'version' => '7.x-1.0-alpha5',
        'project' => 'uuid',
        'datestamp' => '1373620283',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'uuid_path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/uuid/uuid_path/uuid_path.module',
      'name' => 'uuid_path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Path',
        'description' => 'Provides export functionality for url aliases.',
        'core' => '7.x',
        'package' => 'UUID',
        'dependencies' => 
        array (
          0 => 'uuid',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'uuid',
        'datestamp' => '1373620283',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'uuid_services' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/uuid/uuid_services/uuid_services.module',
      'name' => 'uuid_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services',
        'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
        'core' => '7.x',
        'package' => 'Services - resources',
        'dependencies' => 
        array (
          0 => 'services',
          1 => 'uuid',
          2 => 'entity',
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'uuid',
        'datestamp' => '1373620283',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'uuid_services_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/uuid/uuid_services_example/uuid_services_example.module',
      'name' => 'uuid_services_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'UUID Services Example',
        'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
        'core' => '7.x',
        'package' => 'Features',
        'php' => '5.2.4',
        'dependencies' => 
        array (
          0 => 'rest_server',
          1 => 'services',
          2 => 'uuid',
          3 => 'uuid_services',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'services:services:3',
          ),
          'features_api' => 
          array (
            0 => 'api:2',
          ),
          'services_endpoint' => 
          array (
            0 => 'uuid_services_example',
          ),
        ),
        'version' => '7.x-1.0-alpha5',
        'project' => 'uuid',
        'datestamp' => '1373620283',
      ),
      'version' => '7.x-1.0-alpha5',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_custom.inc',
          19 => 'handlers/views_handler_field_date.inc',
          20 => 'handlers/views_handler_field_entity.inc',
          21 => 'handlers/views_handler_field_markup.inc',
          22 => 'handlers/views_handler_field_math.inc',
          23 => 'handlers/views_handler_field_numeric.inc',
          24 => 'handlers/views_handler_field_prerender_list.inc',
          25 => 'handlers/views_handler_field_time_interval.inc',
          26 => 'handlers/views_handler_field_serialized.inc',
          27 => 'handlers/views_handler_field_machine_name.inc',
          28 => 'handlers/views_handler_field_url.inc',
          29 => 'handlers/views_handler_filter.inc',
          30 => 'handlers/views_handler_filter_boolean_operator.inc',
          31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          32 => 'handlers/views_handler_filter_combine.inc',
          33 => 'handlers/views_handler_filter_date.inc',
          34 => 'handlers/views_handler_filter_equality.inc',
          35 => 'handlers/views_handler_filter_entity_bundle.inc',
          36 => 'handlers/views_handler_filter_group_by_numeric.inc',
          37 => 'handlers/views_handler_filter_in_operator.inc',
          38 => 'handlers/views_handler_filter_many_to_one.inc',
          39 => 'handlers/views_handler_filter_numeric.inc',
          40 => 'handlers/views_handler_filter_string.inc',
          41 => 'handlers/views_handler_filter_fields_compare.inc',
          42 => 'handlers/views_handler_relationship.inc',
          43 => 'handlers/views_handler_relationship_groupwise_max.inc',
          44 => 'handlers/views_handler_sort.inc',
          45 => 'handlers/views_handler_sort_date.inc',
          46 => 'handlers/views_handler_sort_formula.inc',
          47 => 'handlers/views_handler_sort_group_by_numeric.inc',
          48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          49 => 'handlers/views_handler_sort_random.inc',
          50 => 'includes/base.inc',
          51 => 'includes/handlers.inc',
          52 => 'includes/plugins.inc',
          53 => 'includes/view.inc',
          54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          63 => 'modules/book/views_plugin_argument_default_book_root.inc',
          64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          65 => 'modules/comment/views_handler_field_comment.inc',
          66 => 'modules/comment/views_handler_field_comment_depth.inc',
          67 => 'modules/comment/views_handler_field_comment_link.inc',
          68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          72 => 'modules/comment/views_handler_field_comment_node_link.inc',
          73 => 'modules/comment/views_handler_field_comment_username.inc',
          74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          76 => 'modules/comment/views_handler_field_node_comment.inc',
          77 => 'modules/comment/views_handler_field_node_new_comments.inc',
          78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          81 => 'modules/comment/views_handler_filter_node_comment.inc',
          82 => 'modules/comment/views_handler_sort_comment_thread.inc',
          83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          85 => 'modules/comment/views_plugin_row_comment_rss.inc',
          86 => 'modules/comment/views_plugin_row_comment_view.inc',
          87 => 'modules/contact/views_handler_field_contact_link.inc',
          88 => 'modules/field/views_handler_field_field.inc',
          89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          90 => 'modules/field/views_handler_argument_field_list.inc',
          91 => 'modules/field/views_handler_argument_field_list_string.inc',
          92 => 'modules/field/views_handler_filter_field_list.inc',
          93 => 'modules/filter/views_handler_field_filter_format_name.inc',
          94 => 'modules/locale/views_handler_field_node_language.inc',
          95 => 'modules/locale/views_handler_filter_node_language.inc',
          96 => 'modules/locale/views_handler_argument_locale_group.inc',
          97 => 'modules/locale/views_handler_argument_locale_language.inc',
          98 => 'modules/locale/views_handler_field_locale_group.inc',
          99 => 'modules/locale/views_handler_field_locale_language.inc',
          100 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          101 => 'modules/locale/views_handler_filter_locale_group.inc',
          102 => 'modules/locale/views_handler_filter_locale_language.inc',
          103 => 'modules/locale/views_handler_filter_locale_version.inc',
          104 => 'modules/node/views_handler_argument_dates_various.inc',
          105 => 'modules/node/views_handler_argument_node_language.inc',
          106 => 'modules/node/views_handler_argument_node_nid.inc',
          107 => 'modules/node/views_handler_argument_node_type.inc',
          108 => 'modules/node/views_handler_argument_node_vid.inc',
          109 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          110 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          111 => 'modules/node/views_handler_field_node.inc',
          112 => 'modules/node/views_handler_field_node_link.inc',
          113 => 'modules/node/views_handler_field_node_link_delete.inc',
          114 => 'modules/node/views_handler_field_node_link_edit.inc',
          115 => 'modules/node/views_handler_field_node_revision.inc',
          116 => 'modules/node/views_handler_field_node_revision_link.inc',
          117 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          118 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          119 => 'modules/node/views_handler_field_node_path.inc',
          120 => 'modules/node/views_handler_field_node_type.inc',
          121 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          122 => 'modules/node/views_handler_filter_node_access.inc',
          123 => 'modules/node/views_handler_filter_node_status.inc',
          124 => 'modules/node/views_handler_filter_node_type.inc',
          125 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          126 => 'modules/node/views_plugin_argument_default_node.inc',
          127 => 'modules/node/views_plugin_argument_validate_node.inc',
          128 => 'modules/node/views_plugin_row_node_rss.inc',
          129 => 'modules/node/views_plugin_row_node_view.inc',
          130 => 'modules/profile/views_handler_field_profile_date.inc',
          131 => 'modules/profile/views_handler_field_profile_list.inc',
          132 => 'modules/profile/views_handler_filter_profile_selection.inc',
          133 => 'modules/search/views_handler_argument_search.inc',
          134 => 'modules/search/views_handler_field_search_score.inc',
          135 => 'modules/search/views_handler_filter_search.inc',
          136 => 'modules/search/views_handler_sort_search_score.inc',
          137 => 'modules/search/views_plugin_row_search_view.inc',
          138 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          139 => 'modules/system/views_handler_argument_file_fid.inc',
          140 => 'modules/system/views_handler_field_file.inc',
          141 => 'modules/system/views_handler_field_file_extension.inc',
          142 => 'modules/system/views_handler_field_file_filemime.inc',
          143 => 'modules/system/views_handler_field_file_uri.inc',
          144 => 'modules/system/views_handler_field_file_status.inc',
          145 => 'modules/system/views_handler_filter_file_status.inc',
          146 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          147 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          148 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          150 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          151 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          152 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          153 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          154 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          155 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          156 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          157 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          158 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          159 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          160 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          161 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          162 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          163 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          164 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          165 => 'modules/system/views_handler_filter_system_type.inc',
          166 => 'modules/translation/views_handler_argument_node_tnid.inc',
          167 => 'modules/translation/views_handler_field_node_link_translate.inc',
          168 => 'modules/translation/views_handler_field_node_translation_link.inc',
          169 => 'modules/translation/views_handler_filter_node_tnid.inc',
          170 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          171 => 'modules/translation/views_handler_relationship_translation.inc',
          172 => 'modules/user/views_handler_argument_user_uid.inc',
          173 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          174 => 'modules/user/views_handler_field_user.inc',
          175 => 'modules/user/views_handler_field_user_language.inc',
          176 => 'modules/user/views_handler_field_user_link.inc',
          177 => 'modules/user/views_handler_field_user_link_cancel.inc',
          178 => 'modules/user/views_handler_field_user_link_edit.inc',
          179 => 'modules/user/views_handler_field_user_mail.inc',
          180 => 'modules/user/views_handler_field_user_name.inc',
          181 => 'modules/user/views_handler_field_user_permissions.inc',
          182 => 'modules/user/views_handler_field_user_picture.inc',
          183 => 'modules/user/views_handler_field_user_roles.inc',
          184 => 'modules/user/views_handler_filter_user_current.inc',
          185 => 'modules/user/views_handler_filter_user_name.inc',
          186 => 'modules/user/views_handler_filter_user_permissions.inc',
          187 => 'modules/user/views_handler_filter_user_roles.inc',
          188 => 'modules/user/views_plugin_argument_default_current_user.inc',
          189 => 'modules/user/views_plugin_argument_default_user.inc',
          190 => 'modules/user/views_plugin_argument_validate_user.inc',
          191 => 'modules/user/views_plugin_row_user_view.inc',
          192 => 'plugins/views_plugin_access.inc',
          193 => 'plugins/views_plugin_access_none.inc',
          194 => 'plugins/views_plugin_access_perm.inc',
          195 => 'plugins/views_plugin_access_role.inc',
          196 => 'plugins/views_plugin_argument_default.inc',
          197 => 'plugins/views_plugin_argument_default_php.inc',
          198 => 'plugins/views_plugin_argument_default_fixed.inc',
          199 => 'plugins/views_plugin_argument_default_raw.inc',
          200 => 'plugins/views_plugin_argument_validate.inc',
          201 => 'plugins/views_plugin_argument_validate_numeric.inc',
          202 => 'plugins/views_plugin_argument_validate_php.inc',
          203 => 'plugins/views_plugin_cache.inc',
          204 => 'plugins/views_plugin_cache_none.inc',
          205 => 'plugins/views_plugin_cache_time.inc',
          206 => 'plugins/views_plugin_display.inc',
          207 => 'plugins/views_plugin_display_attachment.inc',
          208 => 'plugins/views_plugin_display_block.inc',
          209 => 'plugins/views_plugin_display_default.inc',
          210 => 'plugins/views_plugin_display_embed.inc',
          211 => 'plugins/views_plugin_display_extender.inc',
          212 => 'plugins/views_plugin_display_feed.inc',
          213 => 'plugins/views_plugin_display_page.inc',
          214 => 'plugins/views_plugin_exposed_form_basic.inc',
          215 => 'plugins/views_plugin_exposed_form.inc',
          216 => 'plugins/views_plugin_exposed_form_input_required.inc',
          217 => 'plugins/views_plugin_localization_core.inc',
          218 => 'plugins/views_plugin_localization.inc',
          219 => 'plugins/views_plugin_localization_none.inc',
          220 => 'plugins/views_plugin_pager.inc',
          221 => 'plugins/views_plugin_pager_full.inc',
          222 => 'plugins/views_plugin_pager_mini.inc',
          223 => 'plugins/views_plugin_pager_none.inc',
          224 => 'plugins/views_plugin_pager_some.inc',
          225 => 'plugins/views_plugin_query.inc',
          226 => 'plugins/views_plugin_query_default.inc',
          227 => 'plugins/views_plugin_row.inc',
          228 => 'plugins/views_plugin_row_fields.inc',
          229 => 'plugins/views_plugin_row_rss_fields.inc',
          230 => 'plugins/views_plugin_style.inc',
          231 => 'plugins/views_plugin_style_default.inc',
          232 => 'plugins/views_plugin_style_grid.inc',
          233 => 'plugins/views_plugin_style_list.inc',
          234 => 'plugins/views_plugin_style_jump_menu.inc',
          235 => 'plugins/views_plugin_style_mapping.inc',
          236 => 'plugins/views_plugin_style_rss.inc',
          237 => 'plugins/views_plugin_style_summary.inc',
          238 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          239 => 'plugins/views_plugin_style_summary_unformatted.inc',
          240 => 'plugins/views_plugin_style_table.inc',
          241 => 'tests/handlers/views_handlers.test',
          242 => 'tests/handlers/views_handler_area_text.test',
          243 => 'tests/handlers/views_handler_argument_null.test',
          244 => 'tests/handlers/views_handler_argument_string.test',
          245 => 'tests/handlers/views_handler_field.test',
          246 => 'tests/handlers/views_handler_field_boolean.test',
          247 => 'tests/handlers/views_handler_field_custom.test',
          248 => 'tests/handlers/views_handler_field_counter.test',
          249 => 'tests/handlers/views_handler_field_date.test',
          250 => 'tests/handlers/views_handler_field_file_extension.test',
          251 => 'tests/handlers/views_handler_field_file_size.test',
          252 => 'tests/handlers/views_handler_field_math.test',
          253 => 'tests/handlers/views_handler_field_url.test',
          254 => 'tests/handlers/views_handler_field_xss.test',
          255 => 'tests/handlers/views_handler_filter_combine.test',
          256 => 'tests/handlers/views_handler_filter_date.test',
          257 => 'tests/handlers/views_handler_filter_equality.test',
          258 => 'tests/handlers/views_handler_filter_in_operator.test',
          259 => 'tests/handlers/views_handler_filter_numeric.test',
          260 => 'tests/handlers/views_handler_filter_string.test',
          261 => 'tests/handlers/views_handler_sort_random.test',
          262 => 'tests/handlers/views_handler_sort_date.test',
          263 => 'tests/handlers/views_handler_sort.test',
          264 => 'tests/test_handlers/views_test_area_access.inc',
          265 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          266 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          267 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          268 => 'tests/plugins/views_plugin_display.test',
          269 => 'tests/styles/views_plugin_style_jump_menu.test',
          270 => 'tests/styles/views_plugin_style.test',
          271 => 'tests/styles/views_plugin_style_base.test',
          272 => 'tests/styles/views_plugin_style_mapping.test',
          273 => 'tests/styles/views_plugin_style_unformatted.test',
          274 => 'tests/views_access.test',
          275 => 'tests/views_analyze.test',
          276 => 'tests/views_basic.test',
          277 => 'tests/views_argument_default.test',
          278 => 'tests/views_argument_validator.test',
          279 => 'tests/views_exposed_form.test',
          280 => 'tests/field/views_fieldapi.test',
          281 => 'tests/views_glossary.test',
          282 => 'tests/views_groupby.test',
          283 => 'tests/views_handlers.test',
          284 => 'tests/views_module.test',
          285 => 'tests/views_pager.test',
          286 => 'tests/views_plugin_localization_test.inc',
          287 => 'tests/views_translatable.test',
          288 => 'tests/views_query.test',
          289 => 'tests/views_upgrade.test',
          290 => 'tests/views_test.views_default.inc',
          291 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          292 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          293 => 'tests/node/views_node_revision_relations.test',
          294 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          295 => 'tests/user/views_handler_field_user_name.test',
          296 => 'tests/user/views_user_argument_default.test',
          297 => 'tests/user/views_user_argument_validate.test',
          298 => 'tests/user/views_user.test',
          299 => 'tests/views_cache.test',
          300 => 'tests/views_view.test',
          301 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.8',
        'project' => 'views',
        'datestamp' => '1400618928',
      ),
      'version' => '7.x-3.8',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.2',
        'project' => 'views_bulk_operations',
        'datestamp' => '1387798183',
      ),
      'version' => '7.x-3.2',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.4',
        'project' => 'ctools',
        'datestamp' => '1392220730',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'views_infinite_scroll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_infinite_scroll/views_infinite_scroll.module',
      'name' => 'views_infinite_scroll',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Infinite Scroll',
        'description' => 'Provides an Infinite Scrolling pager for Views',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_infinite_scroll.module',
          1 => 'views_infinite_scroll.views.inc',
          2 => 'views_plugin_pager_infinite_scroll.inc',
          3 => 'drush/views_infinite_scroll.drush.inc',
          4 => 'theme/views_infinite_scroll_theme.inc',
        ),
        'version' => '7.x-1.1',
        'project' => 'views_infinite_scroll',
        'datestamp' => '1335182196',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'views_php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_php/views_php.module',
      'name' => 'views_php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views PHP',
        'description' => 'Allows the usage of PHP to construct a view.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'plugins/views/views_php_handler_area.inc',
          1 => 'plugins/views/views_php_handler_field.inc',
          2 => 'plugins/views/views_php_handler_filter.inc',
          3 => 'plugins/views/views_php_handler_sort.inc',
          4 => 'plugins/views/views_php_plugin_access.inc',
          5 => 'plugins/views/views_php_plugin_cache.inc',
          6 => 'plugins/views/views_php_plugin_pager.inc',
          7 => 'plugins/views/views_php_plugin_query.inc',
          8 => 'plugins/views/views_php_plugin_wrapper.inc',
        ),
        'version' => '7.x-1.0-alpha1',
        'project' => 'views_php',
        'datestamp' => '1390577427',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views (>=3.0)',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow.module',
          1 => 'theme/views_slideshow.theme.inc',
          2 => 'views_slideshow.views.inc',
          3 => 'views_slideshow_plugin_style_slideshow.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_slideshow',
        'datestamp' => '1382584826',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow_cycle.module',
          1 => 'views_slideshow_cycle.views_slideshow.inc',
          2 => 'theme/views_slideshow_cycle.theme.inc',
        ),
        'version' => '7.x-3.1',
        'project' => 'views_slideshow',
        'datestamp' => '1382584826',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'views_tree' => 
    array (
      'filename' => false,
      'name' => 'views_tree',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.8',
        'project' => 'views',
        'datestamp' => '1400618928',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'votingapi' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/votingapi/votingapi.module',
      'name' => 'votingapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Voting API',
        'description' => 'Provides a shared voting API for other modules.',
        'package' => 'Voting',
        'core' => '7.x',
        'configure' => 'admin/config/search/votingapi',
        'files' => 
        array (
          0 => 'tests/votingapi.test',
          1 => 'views/votingapi_views_handler_field_value.inc',
          2 => 'views/votingapi_views_handler_sort_nullable.inc',
          3 => 'views/votingapi_views_handler_relationship.inc',
        ),
        'version' => '7.x-2.11',
        'project' => 'votingapi',
        'datestamp' => '1363989617',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.11',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7321',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_field_webform_status.inc',
          8 => 'views/webform_handler_filter_is_draft.inc',
          9 => 'views/webform_handler_filter_webform_status.inc',
          10 => 'views/webform.views.inc',
          11 => 'tests/components.test',
          12 => 'tests/permissions.test',
          13 => 'tests/submission.test',
          14 => 'tests/webform.test',
        ),
        'version' => '7.x-3.20',
        'project' => 'webform',
        'datestamp' => '1392182305',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.20',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.2',
        'project' => 'wysiwyg',
        'datestamp' => '1349213776',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.2',
    ),
    'xmlrpc_server' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/services/servers/xmlrpc_server/xmlrpc_server.module',
      'name' => 'xmlrpc_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XMLRPC Server',
        'description' => 'Provides a XMLRPC server.',
        'package' => 'Services - servers',
        'files' => 
        array (
          0 => 'xmlrpc_server.module',
        ),
        'dependencies' => 
        array (
          0 => 'services',
        ),
        'core' => '7.x',
        'version' => '7.x-3.7',
        'project' => 'services',
        'datestamp' => '1391207946',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.7',
    ),
    'xmlsitemap' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
      'name' => 'xmlsitemap',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7203',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'XML sitemap',
        'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap.module',
          1 => 'xmlsitemap.inc',
          2 => 'xmlsitemap.admin.inc',
          3 => 'xmlsitemap.drush.inc',
          4 => 'xmlsitemap.generate.inc',
          5 => 'xmlsitemap.xmlsitemap.inc',
          6 => 'xmlsitemap.pages.inc',
          7 => 'xmlsitemap.install',
          8 => 'xmlsitemap.test',
        ),
        'recommends' => 
        array (
          0 => 'robotstxt',
        ),
        'configure' => 'admin/config/search/xmlsitemap',
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_custom' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
      'name' => 'xmlsitemap_custom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap custom',
        'description' => 'Adds user configurable links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_custom.module',
          1 => 'xmlsitemap_custom.admin.inc',
          2 => 'xmlsitemap_custom.install',
          3 => 'xmlsitemap_custom.test',
        ),
        'configure' => 'admin/config/search/xmlsitemap/custom',
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_engines' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
      'name' => 'xmlsitemap_engines',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'XML sitemap engines',
        'description' => 'Submit the sitemap to search engines.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_engines.module',
          1 => 'xmlsitemap_engines.admin.inc',
          2 => 'xmlsitemap_engines.install',
          3 => 'tests/xmlsitemap_engines.test',
        ),
        'recommends' => 
        array (
          0 => 'site_verify',
        ),
        'configure' => 'admin/config/search/xmlsitemap/engines',
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_i18n' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
      'name' => 'xmlsitemap_i18n',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap internationalization',
        'description' => 'Enables multilingual XML sitemaps.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'i18n',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_i18n.module',
          1 => 'xmlsitemap_i18n.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
      'name' => 'xmlsitemap_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap menu',
        'description' => 'Adds menu item links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'menu',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_menu.module',
          1 => 'xmlsitemap_menu.install',
          2 => 'xmlsitemap_menu.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
      'name' => 'xmlsitemap_node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap node',
        'description' => 'Adds content links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_node.module',
          1 => 'xmlsitemap_node.install',
          2 => 'xmlsitemap_node.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
      'name' => 'xmlsitemap_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap taxonomy',
        'description' => 'Add taxonomy term links to the sitemap.',
        'package' => 'XML sitemap',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
          1 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'xmlsitemap_taxonomy.module',
          1 => 'xmlsitemap_taxonomy.install',
          2 => 'xmlsitemap_taxonomy.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'xmlsitemap_user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
      'name' => 'xmlsitemap_user',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML sitemap user',
        'description' => 'Adds user profile links to the sitemap.',
        'package' => 'XML sitemap',
        'dependencies' => 
        array (
          0 => 'xmlsitemap',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'xmlsitemap_user.module',
          1 => 'xmlsitemap_user.install',
          2 => 'xmlsitemap_user.test',
        ),
        'version' => '7.x-2.0',
        'project' => 'xmlsitemap',
        'datestamp' => '1395016731',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
  ),
  'themes' => 
  array (
    'alpha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/omega/alpha/alpha.info',
      'name' => 'alpha',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Alpha',
        'description' => 'Alpha is the core basetheme for <a href="http://drupal.org/project/omega">Omega</a> and all its subthemes. It includes the most basic features of the Omega theme framework. This theme should not be used directly, instead choose one of the Omega or Alpha starterkits.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'version' => '7.x-3.0',
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
        ),
        'zones' => 
        array (
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'alpha-reset.css' => 
          array (
            'name' => 'Reset',
            'description' => 'Created by <a href="http://meyerweb.com/eric/tools/css/reset/">Eric Meyer</a>.',
            'options' => 
            array (
              'weight' => '-20',
            ),
          ),
          'alpha-mobile.css' => 
          array (
            'name' => 'Mobile',
            'description' => 'Default stylesheet for mobile styles.',
            'options' => 
            array (
              'weight' => '-20',
            ),
          ),
          'alpha-alpha.css' => 
          array (
            'name' => 'Alpha',
            'description' => 'Default styles & resets for Alpha/Omega base theme.',
            'options' => 
            array (
              'weight' => '-20',
            ),
          ),
        ),
        'exclude' => 
        array (
          'misc/vertical-tabs.css' => 'This requires a description.',
          'modules/aggregator/aggregator.css' => 'This requires a description.',
          'modules/block/block.css' => 'This requires a description.',
          'modules/dblog/dblog.css' => 'This requires a description.',
          'modules/file/file.css' => 'This requires a description.',
          'modules/filter/filter.css' => 'This requires a description.',
          'modules/help/help.css' => 'This requires a description.',
          'modules/menu/menu.css' => 'This requires a description.',
          'modules/openid/openid.css' => 'This requires a description.',
          'modules/profile/profile.css' => 'This requires a description.',
          'modules/statistics/statistics.css' => 'This requires a description.',
          'modules/syslog/syslog.css' => 'This requires a description.',
          'modules/system/admin.css' => 'This requires a description.',
          'modules/system/maintenance.css' => 'This requires a description.',
          'modules/system/system.css' => 'This requires a description.',
          'modules/system/system.admin.css' => 'This requires a description.',
          'modules/system/system.base.css' => 'This requires a description.',
          'modules/system/system.maintenance.css' => 'This requires a description.',
          'modules/system/system.menus.css' => 'This requires a description.',
          'modules/system/system.messages.css' => 'This requires a description.',
          'modules/system/system.theme.css' => 'This requires a description.',
          'modules/taxonomy/taxonomy.css' => 'This requires a description.',
          'modules/tracker/tracker.css' => 'This requires a description.',
          'modules/update/update.css' => 'This requires a description.',
        ),
        'grids' => 
        array (
          'alpha_default' => 
          array (
            'name' => 'Default (960px)',
            'layouts' => 
            array (
              'fluid' => 'Fluid',
              'narrow' => 'Narrow',
              'normal' => 'Normal',
              'wide' => 'Wide',
            ),
            'columns' => 
            array (
              12 => '12 Columns',
              16 => '16 Columns',
              24 => '24 Columns',
            ),
          ),
          'alpha_fluid' => 
          array (
            'name' => 'Fluid',
            'layouts' => 
            array (
              'normal' => 'Normal',
            ),
            'columns' => 
            array (
              12 => '12 Columns',
              16 => '16 Columns',
              24 => '24 Columns',
            ),
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_header_wrapper' => '',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_content_wrapper' => '',
          'alpha_zone_content_force' => '',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => '',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_footer_wrapper' => '',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '1',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '1',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '1',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_header_force' => '',
          'alpha_region_header_zone' => 'header',
          'alpha_region_header_prefix' => '',
          'alpha_region_header_columns' => '12',
          'alpha_region_header_suffix' => '',
          'alpha_region_header_weight' => '',
          'alpha_region_header_css' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '1',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '2',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_footer_force' => '',
          'alpha_region_footer_zone' => 'footer',
          'alpha_region_footer_prefix' => '',
          'alpha_region_footer_columns' => '12',
          'alpha_region_footer_suffix' => '',
          'alpha_region_footer_weight' => '',
          'alpha_region_footer_css' => '',
        ),
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'bebinh' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/bebinh/bebinh.info',
      'name' => 'bebinh',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BEBINH',
        'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'base theme' => 'omega',
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'user_first' => 'User Bar First',
          'user_second' => 'User Bar Second',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'header_first' => 'Header First',
          'header_second' => 'Header Second',
          'preface_first' => 'Preface First',
          'preface_second' => 'Preface Second',
          'preface_third' => 'Preface Third',
          'postscript_first' => 'Postscript First',
          'postscript_second' => 'Postscript Second',
          'postscript_third' => 'Postscript Third',
          'postscript_fourth' => 'Postscript Fourth',
          'footer_first' => 'Footer First',
          'footer_second' => 'Footer Second',
        ),
        'zones' => 
        array (
          'user' => 'User',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'header' => 'Header',
          'preface' => 'Preface',
          'content' => 'Content',
          'postscript' => 'Postscript',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'global.css' => 
          array (
            'name' => 'Your custom global styles',
            'description' => 'This file holds all the globally active custom CSS of your theme.',
            'options' => 
            array (
              'weight' => '10',
            ),
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_libraries' => 
          array (
            'omega_formalize' => 'omega_formalize',
            'omega_equalheights' => '',
            'omega_mediaqueries' => 'omega_mediaqueries',
          ),
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'omega-text.css' => 'omega-text.css',
            'omega-branding.css' => 'omega-branding.css',
            'omega-menu.css' => 'omega-menu.css',
            'omega-forms.css' => 'omega-forms.css',
            'omega-visuals.css' => 'omega-visuals.css',
            'global.css' => 'global.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_user_equal_height_container' => '',
          'alpha_zone_user_wrapper' => '1',
          'alpha_zone_user_force' => '',
          'alpha_zone_user_section' => 'header',
          'alpha_zone_user_weight' => '1',
          'alpha_zone_user_columns' => '12',
          'alpha_zone_user_primary' => '',
          'alpha_zone_user_css' => '',
          'alpha_zone_user_wrapper_css' => '',
          'alpha_zone_branding_equal_height_container' => '',
          'alpha_zone_branding_wrapper' => '1',
          'alpha_zone_branding_force' => '',
          'alpha_zone_branding_section' => 'header',
          'alpha_zone_branding_weight' => '2',
          'alpha_zone_branding_columns' => '12',
          'alpha_zone_branding_primary' => '',
          'alpha_zone_branding_css' => '',
          'alpha_zone_branding_wrapper_css' => '',
          'alpha_zone_menu_equal_height_container' => '',
          'alpha_zone_menu_wrapper' => '1',
          'alpha_zone_menu_force' => '',
          'alpha_zone_menu_section' => 'header',
          'alpha_zone_menu_weight' => '3',
          'alpha_zone_menu_columns' => '12',
          'alpha_zone_menu_primary' => '',
          'alpha_zone_menu_css' => '',
          'alpha_zone_menu_wrapper_css' => '',
          'alpha_zone_header_equal_height_container' => '',
          'alpha_zone_header_wrapper' => '1',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '4',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_preface_equal_height_container' => '',
          'alpha_zone_preface_wrapper' => '1',
          'alpha_zone_preface_force' => '',
          'alpha_zone_preface_section' => 'content',
          'alpha_zone_preface_weight' => '1',
          'alpha_zone_preface_columns' => '12',
          'alpha_zone_preface_primary' => '',
          'alpha_zone_preface_css' => '',
          'alpha_zone_preface_wrapper_css' => '',
          'alpha_zone_content_equal_height_container' => '',
          'alpha_zone_content_wrapper' => '1',
          'alpha_zone_content_force' => '1',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '2',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => 'content',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_postscript_equal_height_container' => '',
          'alpha_zone_postscript_wrapper' => '1',
          'alpha_zone_postscript_force' => '',
          'alpha_zone_postscript_section' => 'content',
          'alpha_zone_postscript_weight' => '3',
          'alpha_zone_postscript_columns' => '12',
          'alpha_zone_postscript_primary' => '',
          'alpha_zone_postscript_css' => '',
          'alpha_zone_postscript_wrapper_css' => '',
          'alpha_zone_footer_equal_height_container' => '',
          'alpha_zone_footer_wrapper' => '1',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '1',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_sidebar_equal_height_container' => '',
          'alpha_region_dashboard_sidebar_equal_height_element' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '1',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '-50',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_inactive_equal_height_container' => '',
          'alpha_region_dashboard_inactive_equal_height_element' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '1',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '-50',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_main_equal_height_container' => '',
          'alpha_region_dashboard_main_equal_height_element' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '1',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '-50',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_user_first_equal_height_container' => '',
          'alpha_region_user_first_equal_height_element' => '',
          'alpha_region_user_first_force' => '',
          'alpha_region_user_first_zone' => 'user',
          'alpha_region_user_first_prefix' => '',
          'alpha_region_user_first_columns' => '8',
          'alpha_region_user_first_suffix' => '',
          'alpha_region_user_first_weight' => '1',
          'alpha_region_user_first_css' => '',
          'alpha_region_user_second_equal_height_container' => '',
          'alpha_region_user_second_equal_height_element' => '',
          'alpha_region_user_second_force' => '',
          'alpha_region_user_second_zone' => 'user',
          'alpha_region_user_second_prefix' => '',
          'alpha_region_user_second_columns' => '4',
          'alpha_region_user_second_suffix' => '',
          'alpha_region_user_second_weight' => '2',
          'alpha_region_user_second_css' => '',
          'alpha_region_branding_equal_height_container' => '',
          'alpha_region_branding_equal_height_element' => '',
          'alpha_region_branding_force' => '1',
          'alpha_region_branding_zone' => 'branding',
          'alpha_region_branding_prefix' => '',
          'alpha_region_branding_columns' => '12',
          'alpha_region_branding_suffix' => '',
          'alpha_region_branding_weight' => '1',
          'alpha_region_branding_css' => '',
          'alpha_region_menu_equal_height_container' => '',
          'alpha_region_menu_equal_height_element' => '',
          'alpha_region_menu_force' => '1',
          'alpha_region_menu_zone' => 'menu',
          'alpha_region_menu_prefix' => '',
          'alpha_region_menu_columns' => '12',
          'alpha_region_menu_suffix' => '',
          'alpha_region_menu_weight' => '1',
          'alpha_region_menu_css' => '',
          'alpha_region_header_first_equal_height_container' => '',
          'alpha_region_header_first_equal_height_element' => '',
          'alpha_region_header_first_force' => '',
          'alpha_region_header_first_zone' => 'header',
          'alpha_region_header_first_prefix' => '',
          'alpha_region_header_first_columns' => '6',
          'alpha_region_header_first_suffix' => '',
          'alpha_region_header_first_weight' => '1',
          'alpha_region_header_first_css' => '',
          'alpha_region_header_second_equal_height_container' => '',
          'alpha_region_header_second_equal_height_element' => '',
          'alpha_region_header_second_force' => '',
          'alpha_region_header_second_zone' => 'header',
          'alpha_region_header_second_prefix' => '',
          'alpha_region_header_second_columns' => '6',
          'alpha_region_header_second_suffix' => '',
          'alpha_region_header_second_weight' => '2',
          'alpha_region_header_second_css' => '',
          'alpha_region_preface_first_equal_height_container' => '',
          'alpha_region_preface_first_equal_height_element' => '',
          'alpha_region_preface_first_force' => '',
          'alpha_region_preface_first_zone' => 'preface',
          'alpha_region_preface_first_prefix' => '',
          'alpha_region_preface_first_columns' => '4',
          'alpha_region_preface_first_suffix' => '',
          'alpha_region_preface_first_weight' => '1',
          'alpha_region_preface_first_css' => '',
          'alpha_region_preface_second_equal_height_container' => '',
          'alpha_region_preface_second_equal_height_element' => '',
          'alpha_region_preface_second_force' => '',
          'alpha_region_preface_second_zone' => 'preface',
          'alpha_region_preface_second_prefix' => '',
          'alpha_region_preface_second_columns' => '4',
          'alpha_region_preface_second_suffix' => '',
          'alpha_region_preface_second_weight' => '2',
          'alpha_region_preface_second_css' => '',
          'alpha_region_preface_third_equal_height_container' => '',
          'alpha_region_preface_third_equal_height_element' => '',
          'alpha_region_preface_third_force' => '',
          'alpha_region_preface_third_zone' => 'preface',
          'alpha_region_preface_third_prefix' => '',
          'alpha_region_preface_third_columns' => '4',
          'alpha_region_preface_third_suffix' => '',
          'alpha_region_preface_third_weight' => '3',
          'alpha_region_preface_third_css' => '',
          'alpha_region_content_equal_height_container' => '',
          'alpha_region_content_equal_height_element' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '2',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_equal_height_container' => '',
          'alpha_region_sidebar_first_equal_height_element' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '1',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_equal_height_container' => '',
          'alpha_region_sidebar_second_equal_height_element' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_postscript_first_equal_height_container' => '',
          'alpha_region_postscript_first_equal_height_element' => '',
          'alpha_region_postscript_first_force' => '',
          'alpha_region_postscript_first_zone' => 'postscript',
          'alpha_region_postscript_first_prefix' => '',
          'alpha_region_postscript_first_columns' => '3',
          'alpha_region_postscript_first_suffix' => '',
          'alpha_region_postscript_first_weight' => '1',
          'alpha_region_postscript_first_css' => '',
          'alpha_region_postscript_second_equal_height_container' => '',
          'alpha_region_postscript_second_equal_height_element' => '',
          'alpha_region_postscript_second_force' => '',
          'alpha_region_postscript_second_zone' => 'postscript',
          'alpha_region_postscript_second_prefix' => '',
          'alpha_region_postscript_second_columns' => '3',
          'alpha_region_postscript_second_suffix' => '',
          'alpha_region_postscript_second_weight' => '2',
          'alpha_region_postscript_second_css' => '',
          'alpha_region_postscript_third_equal_height_container' => '',
          'alpha_region_postscript_third_equal_height_element' => '',
          'alpha_region_postscript_third_force' => '',
          'alpha_region_postscript_third_zone' => 'postscript',
          'alpha_region_postscript_third_prefix' => '',
          'alpha_region_postscript_third_columns' => '3',
          'alpha_region_postscript_third_suffix' => '',
          'alpha_region_postscript_third_weight' => '3',
          'alpha_region_postscript_third_css' => '',
          'alpha_region_postscript_fourth_equal_height_container' => '',
          'alpha_region_postscript_fourth_equal_height_element' => '',
          'alpha_region_postscript_fourth_force' => '',
          'alpha_region_postscript_fourth_zone' => 'postscript',
          'alpha_region_postscript_fourth_prefix' => '',
          'alpha_region_postscript_fourth_columns' => '3',
          'alpha_region_postscript_fourth_suffix' => '',
          'alpha_region_postscript_fourth_weight' => '4',
          'alpha_region_postscript_fourth_css' => '',
          'alpha_region_footer_first_equal_height_container' => '',
          'alpha_region_footer_first_equal_height_element' => '',
          'alpha_region_footer_first_force' => '',
          'alpha_region_footer_first_zone' => 'footer',
          'alpha_region_footer_first_prefix' => '',
          'alpha_region_footer_first_columns' => '12',
          'alpha_region_footer_first_suffix' => '',
          'alpha_region_footer_first_weight' => '1',
          'alpha_region_footer_first_css' => '',
          'alpha_region_footer_second_equal_height_container' => '',
          'alpha_region_footer_second_equal_height_element' => '',
          'alpha_region_footer_second_force' => '',
          'alpha_region_footer_second_zone' => 'footer',
          'alpha_region_footer_second_prefix' => '',
          'alpha_region_footer_second_columns' => '12',
          'alpha_region_footer_second_suffix' => '',
          'alpha_region_footer_second_weight' => '2',
          'alpha_region_footer_second_css' => '',
        ),
        'version' => '7.x-3.0',
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'ishopping' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/ishopping/ishopping.info',
      'name' => 'ishopping',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'iShopping',
        'description' => 'iShopping. Requires the <a href="http://drupal.org/project/nucleus">Nucleus</a> base theme.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'base theme' => 'nucleus',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/html-elements.css',
            1 => 'css/forms.css',
            2 => 'css/tables.css',
            3 => 'css/page.css',
            4 => 'css/articles.css',
            5 => 'css/comments.css',
            6 => 'css/fields.css',
            7 => 'css/blocks.css',
            8 => 'css/panel-panes.css',
            9 => 'css/navigation.css',
            10 => 'css/forum.css',
            11 => 'css/fonts.css',
            12 => 'css/css3.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'stylesheets-conditional' => 
        array (
          'IE' => 
          array (
            'all' => 
            array (
              0 => 'css/ie.css',
            ),
          ),
          'IE 7' => 
          array (
            'all' => 
            array (
              0 => 'css/ie7.css',
            ),
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/ishopping.js',
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'header' => 'Header',
          'menu_bar' => 'Menu bar',
          'slideshow' => 'Slideshow',
          'highlighted' => 'Highlighted',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'panel_first_1' => 'Panel first column 1',
          'panel_first_2' => 'Panel first column 2',
          'panel_first_3' => 'Panel first column 3',
          'panel_first_4' => 'Panel first column 4',
          'panel_second_1' => 'Panel second column 1',
          'panel_second_2' => 'Panel second column 2',
          'panel_second_3' => 'Panel second column 3',
          'panel_second_4' => 'Panel second column 4',
        ),
        'pages' => 
        array (
          'default' => 'Normal page',
          'main-left' => 'Main content on the left',
          'main-right' => 'Main content on the right',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'go_to_top_button',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'breadcrumb_display' => 'yes',
          'breadcrumb_separator' => ' &#187; ',
          'breadcrumb_home' => '1',
          'grid' => 'fluid-grid-24',
          'layout_width' => '960px',
          'page_layout' => 'default',
          'sidebar_first_width' => '6',
          'sidebar_second_width' => '0',
          'panel_first_1_width' => '6',
          'panel_first_2_width' => '6',
          'panel_first_3_width' => '6',
          'panel_first_4_width' => '6',
          'panel_second_1_width' => '6',
          'panel_second_2_width' => '6',
          'panel_second_3_width' => '6',
          'panel_second_4_width' => '6',
          'hide_frontpage_main_content' => '1',
          'superfish_extend_style_1' => 'ishopping',
          'superfish_extend_style_2' => 'ishopping',
          'quicktabs_extend_style_quicktabs' => 'ishopping',
          'show_skins_menu' => '0',
          'region_slideshow_extend_class' => 'default_group slideshow-pager',
          'region_panel_second_1_extend_class' => 'custom_group block-custom-links',
          'region_panel_second_2_extend_class' => 'custom_group block-custom-address',
          'region_panel_second_3_extend_class' => 'custom_group block-custom-paypal',
          'region_panel_second_4_extend_class' => 'custom_group block-custom-form',
          'base_font' => 'bf-a',
          'site_name_font' => '',
          'site_slogan_font' => '',
          'page_title_font' => '',
          'node_title_font' => '',
          'comment_title_font' => '',
          'block_title_font' => '',
          'page_title_font_type' => 'gwf',
          'page_title_font_gwf' => 'Archivo Narrow',
          'node_title_font_type' => 'gwf',
          'node_title_font_gwf' => 'Archivo Narrow',
          'block_title_font_type' => 'gwf',
          'block_title_font_gwf' => 'Archivo Narrow',
          'font_size' => 'fs-medium',
        ),
        'default_fonts' => 
        array (
          'sss' => 'Calibri, Candara, Helvetica Neue, Trebuchet MS, Arial, Helvetica, sans-serif',
          'ssl' => 'Verdana, Geneva, Arial, Helvetica, sans-serif',
          'a' => 'Arial, Helvetica, sans-serif',
          'ss' => 'Garamond, Perpetua, Times New Roman, serif',
          'sl' => 'Georgia, Baskerville, Palatino, Palatino Linotype, Book Antiqua, Times New Roman, serif',
          'm' => 'Segoe UI, Myriad Pro, Myriad, Arial, Helvetica, sans-serif;',
          'l' => 'Lucida Sans Unicode, Lucida Sans, Lucida Grande, Verdana, Geneva, sans-serif',
          'ms' => 'Consolas, Monaco, Courier New, Courier, monospace',
          'tahoma' => 'Tahoma, sans-serif',
        ),
        'block_extend_classes' => 
        array (
          'slideshow-pager' => 'Main Slideshow',
          'block-custom-social' => 'Social Block',
          'block-custom-paypal' => 'Paypal Block',
          'block-custom-links' => 'Links Block',
          'block-custom-address' => 'Address Block',
          'block-custom-form' => 'Form Block',
          'block-custom-last' => 'Last Block',
        ),
        'block_extended_class_groups' => 
        array (
          'custom_group' => 
          array (
            'group_title' => 'Custom Block',
            'classes' => 'block-custom-social, block-custom-paypal, block-custom-links, block-custom-address, block-custom-form, block-custom-last',
          ),
        ),
        'superfish_styles' => 
        array (
          'ishopping' => 'iShopping Style for Superfish',
        ),
        'quicktabs_styles' => 
        array (
          'ishopping' => 'iShopping Style for Quicktabs',
        ),
        'skins' => 
        array (
          'default' => 'Default',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'nucleus' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/nucleus/nucleus/nucleus.info',
      'name' => 'nucleus',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'nucleus',
        'description' => 'Base theme for Drupal',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/messages.css',
          ),
          'only screen' => 
          array (
            0 => 'css/responsive/responsive.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.cookie.js',
        ),
        'stylesheets-conditional' => 
        array (
          'IE 7' => 
          array (
            'all' => 
            array (
              0 => 'css/ie7.css',
            ),
          ),
          'IE' => 
          array (
            'all' => 
            array (
              0 => 'css/ie.css',
            ),
          ),
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'header' => 'Header',
          'menu_bar' => 'Menu bar',
          'highlighted' => 'Highlighted',
          'slideshow' => 'Slideshow',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'panel_first_1' => 'Panel first column 1',
          'panel_first_2' => 'Panel first column 2',
          'panel_first_3' => 'Panel first column 3',
          'panel_first_4' => 'Panel first column 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'go_to_top_button',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'breadcrumb_display' => 'yes',
          'breadcrumb_separator' => ' &#187; ',
          'breadcrumb_home' => '1',
          'grid' => 'fluid-grid-24',
          'layout_width' => '960px',
          'page_layout' => 'default',
          'sidebar_first_width' => '6',
          'sidebar_second_width' => '6',
          'panel_first_1_width' => '6',
          'panel_first_2_width' => '6',
          'panel_first_3_width' => '6',
          'panel_first_4_width' => '6',
          'panel_second_1_width' => '6',
          'panel_second_2_width' => '6',
          'panel_second_3_width' => '6',
          'panel_second_4_width' => '6',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'font_size' => 'fs-medium',
          'show_skins_menu' => '1',
        ),
        'pages' => 
        array (
          'default' => 'Normal page',
        ),
        'supported_grids' => 
        array (
          12 => '12 columns',
          16 => '16 columns',
          24 => '24 columns',
          'min' => '2',
          'max' => '100',
          'delta' => '2',
        ),
        'version' => '7.x-1.4',
        'project' => 'nucleus',
        'datestamp' => '1375072568',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'nucleus_starter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/nucleus/nucleus_starter/nucleus_starter.info',
      'name' => 'nucleus_starter',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'nucleus_starter',
        'description' => 'Starter theme for nucleus base theme.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'base theme' => 'nucleus',
        'screenshot' => 'screenshot.png',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/html-elements.css',
            1 => 'css/forms.css',
            2 => 'css/page.css',
            3 => 'css/articles.css',
            4 => 'css/comments.css',
            5 => 'css/forum.css',
            6 => 'css/fields.css',
            7 => 'css/blocks.css',
            8 => 'css/panel-panes.css',
            9 => 'css/navigation.css',
            10 => 'css/fonts.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'content' => 'Main content',
          'header' => 'Header',
          'menu_bar' => 'Menu bar',
          'slideshow' => 'Slideshow',
          'highlighted' => 'Highlighted',
          'footer' => 'Footer',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'panel_first_1' => 'Panel first column 1',
          'panel_first_2' => 'Panel first column 2',
          'panel_first_3' => 'Panel first column 3',
          'panel_first_4' => 'Panel first column 4',
          'panel_second_1' => 'Panel second column 1',
          'panel_second_2' => 'Panel second column 2',
          'panel_second_3' => 'Panel second column 3',
          'panel_second_4' => 'Panel second column 4',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'name',
          2 => 'slogan',
          3 => 'node_user_picture',
          4 => 'comment_user_picture',
          5 => 'comment_user_verification',
          6 => 'favicon',
          7 => 'go_to_top_button',
          8 => 'secondary_menu',
        ),
        'settings' => 
        array (
          'breadcrumb_display' => 'yes',
          'breadcrumb_separator' => ' &#187; ',
          'breadcrumb_home' => '1',
          'grid' => 'fluid-grid-24',
          'layout_width' => '960px',
          'page_layout' => 'default',
          'sidebar_first_width' => '6',
          'sidebar_second_width' => '6',
          'panel_first_1_width' => '6',
          'panel_first_2_width' => '6',
          'panel_first_3_width' => '6',
          'panel_first_4_width' => '6',
          'panel_second_1_width' => '6',
          'panel_second_2_width' => '6',
          'panel_second_3_width' => '6',
          'panel_second_4_width' => '6',
          'base_font' => 'bf-sss',
          'site_name_font' => 'snf-sl',
          'site_slogan_font' => 'ssf-sl',
          'page_title_font' => 'ptf-sl',
          'node_title_font' => 'ntf-sl',
          'comment_title_font' => 'ctf-sl',
          'block_title_font' => 'btf-sl',
          'font_size' => 'fs-medium',
        ),
        'default_fonts' => 
        array (
          'sss' => 'Calibri, Candara, Helvetica Neue, Trebuchet MS, Arial, Helvetica, sans-serif',
          'ssl' => 'Verdana, Geneva, Arial, Helvetica, sans-serif',
          'a' => 'Arial, Helvetica, sans-serif',
          'ss' => 'Garamond, Perpetua, Times New Roman, serif',
          'sl' => 'Georgia, Baskerville, Palatino, Palatino Linotype, Book Antiqua, Times New Roman, serif',
          'm' => 'Segoe UI, Myriad Pro, Myriad, Arial, Helvetica, sans-serif;',
          'l' => 'Lucida Sans Unicode, Lucida Sans, Lucida Grande, Verdana, Geneva, sans-serif',
          'ms' => 'Consolas, Monaco, Courier New, Courier, monospace',
        ),
        'superfish_styles' => 
        array (
          'starter' => 'Starter Style for Superfish',
        ),
        'quicktabs_styles' => 
        array (
          'starter' => 'Starter style for Quicktabs',
        ),
        'version' => '7.x-1.4',
        'project' => 'nucleus',
        'datestamp' => '1375072568',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'omega' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/omega/omega/omega.info',
      'name' => 'omega',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Omega',
        'description' => '<a href="http://drupal.org/project/omega">Omega</a> extends the Omega theme framework with some additional features and makes them availabe to its subthemes. This theme should not be used directly, instead choose one of the Omega or Alpha starterkits.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'version' => '7.x-3.0',
        'base theme' => 'alpha',
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'user_first' => 'User Bar First',
          'user_second' => 'User Bar Second',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'header_first' => 'Header First',
          'header_second' => 'Header Second',
          'preface_first' => 'Preface First',
          'preface_second' => 'Preface Second',
          'preface_third' => 'Preface Third',
          'postscript_first' => 'Postscript First',
          'postscript_second' => 'Postscript Second',
          'postscript_third' => 'Postscript Third',
          'postscript_fourth' => 'Postscript Fourth',
          'footer_first' => 'Footer First',
          'footer_second' => 'Footer Second',
        ),
        'zones' => 
        array (
          'user' => 'User',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'header' => 'Header',
          'preface' => 'Preface',
          'content' => 'Content',
          'postscript' => 'Postscript',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'omega-text.css' => 
          array (
            'name' => 'Text Styles',
            'description' => 'Default text styles for Omega.',
            'options' => 
            array (
              'weight' => '-10',
            ),
          ),
          'omega-branding.css' => 
          array (
            'name' => 'Branding Styles',
            'description' => 'Provides positioning for the logo, title and slogan.',
            'options' => 
            array (
              'weight' => '-10',
            ),
          ),
          'omega-menu.css' => 
          array (
            'name' => 'Menu Styles',
            'description' => 'Provides positoning and basic CSS for primary and secondary menus.',
            'options' => 
            array (
              'weight' => '-10',
            ),
          ),
          'omega-forms.css' => 
          array (
            'name' => 'Form Styles',
            'description' => 'Provides basic form styles.',
            'options' => 
            array (
              'weight' => '-10',
            ),
          ),
          'omega-visuals.css' => 
          array (
            'name' => 'Omega Styles',
            'description' => 'Custom visual styles for Omega. (pagers, menus, etc.)',
            'options' => 
            array (
              'weight' => '-10',
            ),
          ),
        ),
        'libraries' => 
        array (
          'omega_formalize' => 
          array (
            'name' => 'Formalize',
            'description' => 'Formalize is a framework by <a href="http://formalize.me/" title="Formalize">Nathan Smith</a> for neat looking cross-browser forms with extended functionality.',
            'js' => 
            array (
              0 => 
              array (
                'file' => 'jquery.formalize.js',
                'options' => 
                array (
                  'weight' => '-20',
                ),
              ),
            ),
            'css' => 
            array (
              0 => 
              array (
                'file' => 'formalize.css',
                'options' => 
                array (
                  'weight' => '-20',
                ),
              ),
            ),
          ),
          'omega_mediaqueries' => 
          array (
            'name' => 'Media queries',
            'description' => 'Provides a tiny JavaScript library that can be used in your custom JavaScript.',
            'js' => 
            array (
              0 => 
              array (
                'file' => 'omega-mediaqueries.js',
                'options' => 
                array (
                  'weight' => '-19',
                ),
              ),
            ),
          ),
          'omega_equalheights' => 
          array (
            'name' => 'Equal heights',
            'description' => 'Allows you to force all regions of a zone or all blocks of a region to be of equal size. <span class="marker">This library reveals a corresponding checkbox on every region and zone configuration panel if activated.</span>',
            'js' => 
            array (
              0 => 
              array (
                'file' => 'omega-equalheights.js',
                'options' => 
                array (
                  'weight' => '-18',
                ),
              ),
            ),
          ),
        ),
        'plugins' => 
        array (
          'panels' => 
          array (
            'layouts' => 'panels/layouts',
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_libraries' => 
          array (
            'omega_formalize' => 'omega_formalize',
            'omega_equalheights' => '',
            'omega_mediaqueries' => 'omega_mediaqueries',
          ),
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'omega-text.css' => 'omega-text.css',
            'omega-branding.css' => 'omega-branding.css',
            'omega-menu.css' => 'omega-menu.css',
            'omega-forms.css' => 'omega-forms.css',
            'omega-visuals.css' => 'omega-visuals.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_user_equal_height_container' => '',
          'alpha_zone_user_wrapper' => '1',
          'alpha_zone_user_force' => '',
          'alpha_zone_user_section' => 'header',
          'alpha_zone_user_weight' => '1',
          'alpha_zone_user_columns' => '12',
          'alpha_zone_user_primary' => '',
          'alpha_zone_user_css' => '',
          'alpha_zone_user_wrapper_css' => '',
          'alpha_zone_branding_equal_height_container' => '',
          'alpha_zone_branding_wrapper' => '1',
          'alpha_zone_branding_force' => '',
          'alpha_zone_branding_section' => 'header',
          'alpha_zone_branding_weight' => '2',
          'alpha_zone_branding_columns' => '12',
          'alpha_zone_branding_primary' => '',
          'alpha_zone_branding_css' => '',
          'alpha_zone_branding_wrapper_css' => '',
          'alpha_zone_menu_equal_height_container' => '',
          'alpha_zone_menu_wrapper' => '1',
          'alpha_zone_menu_force' => '',
          'alpha_zone_menu_section' => 'header',
          'alpha_zone_menu_weight' => '3',
          'alpha_zone_menu_columns' => '12',
          'alpha_zone_menu_primary' => '',
          'alpha_zone_menu_css' => '',
          'alpha_zone_menu_wrapper_css' => '',
          'alpha_zone_header_equal_height_container' => '',
          'alpha_zone_header_wrapper' => '1',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '4',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_preface_equal_height_container' => '',
          'alpha_zone_preface_wrapper' => '1',
          'alpha_zone_preface_force' => '',
          'alpha_zone_preface_section' => 'content',
          'alpha_zone_preface_weight' => '1',
          'alpha_zone_preface_columns' => '12',
          'alpha_zone_preface_primary' => '',
          'alpha_zone_preface_css' => '',
          'alpha_zone_preface_wrapper_css' => '',
          'alpha_zone_content_equal_height_container' => '',
          'alpha_zone_content_wrapper' => '1',
          'alpha_zone_content_force' => '1',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '2',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => 'content',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_postscript_equal_height_container' => '',
          'alpha_zone_postscript_wrapper' => '1',
          'alpha_zone_postscript_force' => '',
          'alpha_zone_postscript_section' => 'content',
          'alpha_zone_postscript_weight' => '3',
          'alpha_zone_postscript_columns' => '12',
          'alpha_zone_postscript_primary' => '',
          'alpha_zone_postscript_css' => '',
          'alpha_zone_postscript_wrapper_css' => '',
          'alpha_zone_footer_equal_height_container' => '',
          'alpha_zone_footer_wrapper' => '1',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '1',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_sidebar_equal_height_container' => '',
          'alpha_region_dashboard_sidebar_equal_height_element' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '1',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '-50',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_inactive_equal_height_container' => '',
          'alpha_region_dashboard_inactive_equal_height_element' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '1',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '-50',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_main_equal_height_container' => '',
          'alpha_region_dashboard_main_equal_height_element' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '1',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '-50',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_user_first_equal_height_container' => '',
          'alpha_region_user_first_equal_height_element' => '',
          'alpha_region_user_first_force' => '',
          'alpha_region_user_first_zone' => 'user',
          'alpha_region_user_first_prefix' => '',
          'alpha_region_user_first_columns' => '8',
          'alpha_region_user_first_suffix' => '',
          'alpha_region_user_first_weight' => '1',
          'alpha_region_user_first_css' => '',
          'alpha_region_user_second_equal_height_container' => '',
          'alpha_region_user_second_equal_height_element' => '',
          'alpha_region_user_second_force' => '',
          'alpha_region_user_second_zone' => 'user',
          'alpha_region_user_second_prefix' => '',
          'alpha_region_user_second_columns' => '4',
          'alpha_region_user_second_suffix' => '',
          'alpha_region_user_second_weight' => '2',
          'alpha_region_user_second_css' => '',
          'alpha_region_branding_equal_height_container' => '',
          'alpha_region_branding_equal_height_element' => '',
          'alpha_region_branding_force' => '1',
          'alpha_region_branding_zone' => 'branding',
          'alpha_region_branding_prefix' => '',
          'alpha_region_branding_columns' => '12',
          'alpha_region_branding_suffix' => '',
          'alpha_region_branding_weight' => '1',
          'alpha_region_branding_css' => '',
          'alpha_region_menu_equal_height_container' => '',
          'alpha_region_menu_equal_height_element' => '',
          'alpha_region_menu_force' => '1',
          'alpha_region_menu_zone' => 'menu',
          'alpha_region_menu_prefix' => '',
          'alpha_region_menu_columns' => '12',
          'alpha_region_menu_suffix' => '',
          'alpha_region_menu_weight' => '1',
          'alpha_region_menu_css' => '',
          'alpha_region_header_first_equal_height_container' => '',
          'alpha_region_header_first_equal_height_element' => '',
          'alpha_region_header_first_force' => '',
          'alpha_region_header_first_zone' => 'header',
          'alpha_region_header_first_prefix' => '',
          'alpha_region_header_first_columns' => '6',
          'alpha_region_header_first_suffix' => '',
          'alpha_region_header_first_weight' => '1',
          'alpha_region_header_first_css' => '',
          'alpha_region_header_second_equal_height_container' => '',
          'alpha_region_header_second_equal_height_element' => '',
          'alpha_region_header_second_force' => '',
          'alpha_region_header_second_zone' => 'header',
          'alpha_region_header_second_prefix' => '',
          'alpha_region_header_second_columns' => '6',
          'alpha_region_header_second_suffix' => '',
          'alpha_region_header_second_weight' => '2',
          'alpha_region_header_second_css' => '',
          'alpha_region_preface_first_equal_height_container' => '',
          'alpha_region_preface_first_equal_height_element' => '',
          'alpha_region_preface_first_force' => '',
          'alpha_region_preface_first_zone' => 'preface',
          'alpha_region_preface_first_prefix' => '',
          'alpha_region_preface_first_columns' => '4',
          'alpha_region_preface_first_suffix' => '',
          'alpha_region_preface_first_weight' => '1',
          'alpha_region_preface_first_css' => '',
          'alpha_region_preface_second_equal_height_container' => '',
          'alpha_region_preface_second_equal_height_element' => '',
          'alpha_region_preface_second_force' => '',
          'alpha_region_preface_second_zone' => 'preface',
          'alpha_region_preface_second_prefix' => '',
          'alpha_region_preface_second_columns' => '4',
          'alpha_region_preface_second_suffix' => '',
          'alpha_region_preface_second_weight' => '2',
          'alpha_region_preface_second_css' => '',
          'alpha_region_preface_third_equal_height_container' => '',
          'alpha_region_preface_third_equal_height_element' => '',
          'alpha_region_preface_third_force' => '',
          'alpha_region_preface_third_zone' => 'preface',
          'alpha_region_preface_third_prefix' => '',
          'alpha_region_preface_third_columns' => '4',
          'alpha_region_preface_third_suffix' => '',
          'alpha_region_preface_third_weight' => '3',
          'alpha_region_preface_third_css' => '',
          'alpha_region_content_equal_height_container' => '',
          'alpha_region_content_equal_height_element' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '2',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_equal_height_container' => '',
          'alpha_region_sidebar_first_equal_height_element' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '1',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_equal_height_container' => '',
          'alpha_region_sidebar_second_equal_height_element' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_postscript_first_equal_height_container' => '',
          'alpha_region_postscript_first_equal_height_element' => '',
          'alpha_region_postscript_first_force' => '',
          'alpha_region_postscript_first_zone' => 'postscript',
          'alpha_region_postscript_first_prefix' => '',
          'alpha_region_postscript_first_columns' => '3',
          'alpha_region_postscript_first_suffix' => '',
          'alpha_region_postscript_first_weight' => '1',
          'alpha_region_postscript_first_css' => '',
          'alpha_region_postscript_second_equal_height_container' => '',
          'alpha_region_postscript_second_equal_height_element' => '',
          'alpha_region_postscript_second_force' => '',
          'alpha_region_postscript_second_zone' => 'postscript',
          'alpha_region_postscript_second_prefix' => '',
          'alpha_region_postscript_second_columns' => '3',
          'alpha_region_postscript_second_suffix' => '',
          'alpha_region_postscript_second_weight' => '2',
          'alpha_region_postscript_second_css' => '',
          'alpha_region_postscript_third_equal_height_container' => '',
          'alpha_region_postscript_third_equal_height_element' => '',
          'alpha_region_postscript_third_force' => '',
          'alpha_region_postscript_third_zone' => 'postscript',
          'alpha_region_postscript_third_prefix' => '',
          'alpha_region_postscript_third_columns' => '3',
          'alpha_region_postscript_third_suffix' => '',
          'alpha_region_postscript_third_weight' => '3',
          'alpha_region_postscript_third_css' => '',
          'alpha_region_postscript_fourth_equal_height_container' => '',
          'alpha_region_postscript_fourth_equal_height_element' => '',
          'alpha_region_postscript_fourth_force' => '',
          'alpha_region_postscript_fourth_zone' => 'postscript',
          'alpha_region_postscript_fourth_prefix' => '',
          'alpha_region_postscript_fourth_columns' => '3',
          'alpha_region_postscript_fourth_suffix' => '',
          'alpha_region_postscript_fourth_weight' => '4',
          'alpha_region_postscript_fourth_css' => '',
          'alpha_region_footer_first_equal_height_container' => '',
          'alpha_region_footer_first_equal_height_element' => '',
          'alpha_region_footer_first_force' => '',
          'alpha_region_footer_first_zone' => 'footer',
          'alpha_region_footer_first_prefix' => '',
          'alpha_region_footer_first_columns' => '12',
          'alpha_region_footer_first_suffix' => '',
          'alpha_region_footer_first_weight' => '1',
          'alpha_region_footer_first_css' => '',
          'alpha_region_footer_second_equal_height_container' => '',
          'alpha_region_footer_second_equal_height_element' => '',
          'alpha_region_footer_second_force' => '',
          'alpha_region_footer_second_zone' => 'footer',
          'alpha_region_footer_second_prefix' => '',
          'alpha_region_footer_second_columns' => '12',
          'alpha_region_footer_second_suffix' => '',
          'alpha_region_footer_second_weight' => '2',
          'alpha_region_footer_second_css' => '',
        ),
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.44',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1466022211',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.44',
    ),
    'starterkit_alpha_xhtml' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/omega/starterkits/alpha-xhtml/starterkit_alpha_xhtml.info',
      'name' => 'starterkit_alpha_xhtml',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Alpha XHTML Starterkit',
        'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Alpha</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'base theme' => 'alpha',
        'hidden' => true,
        'starterkit' => true,
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
        ),
        'zones' => 
        array (
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'global.css' => 
          array (
            'name' => 'Your custom global styles',
            'description' => 'This file holds all the globally active custom CSS of your theme.',
            'options' => 
            array (
              'weight' => '10',
            ),
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
            'global.css' => 'global.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_header_wrapper' => '',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_order' => '0',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_content_wrapper' => '',
          'alpha_zone_content_force' => '',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => '',
          'alpha_zone_content_order' => '0',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_footer_wrapper' => '',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_order' => '0',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '',
          'alpha_region_dashboard_inactive_position' => '',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '',
          'alpha_region_dashboard_sidebar_position' => '',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '',
          'alpha_region_dashboard_main_position' => '',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_header_force' => '',
          'alpha_region_header_zone' => 'header',
          'alpha_region_header_prefix' => '',
          'alpha_region_header_columns' => '12',
          'alpha_region_header_suffix' => '',
          'alpha_region_header_weight' => '',
          'alpha_region_header_position' => '1',
          'alpha_region_header_css' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '1',
          'alpha_region_content_position' => '2',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '2',
          'alpha_region_sidebar_first_position' => '1',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_position' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_footer_force' => '',
          'alpha_region_footer_zone' => 'footer',
          'alpha_region_footer_prefix' => '',
          'alpha_region_footer_columns' => '12',
          'alpha_region_footer_suffix' => '',
          'alpha_region_footer_weight' => '1',
          'alpha_region_footer_css' => '',
        ),
        'version' => '7.x-3.0',
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'starterkit_omega_html5' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/omega/starterkits/omega-html5/starterkit_omega_html5.info',
      'name' => 'starterkit_omega_html5',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Omega HTML5 Starterkit',
        'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'base theme' => 'omega',
        'hidden' => true,
        'starterkit' => true,
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'user_first' => 'User Bar First',
          'user_second' => 'User Bar Second',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'header_first' => 'Header First',
          'header_second' => 'Header Second',
          'preface_first' => 'Preface First',
          'preface_second' => 'Preface Second',
          'preface_third' => 'Preface Third',
          'postscript_first' => 'Postscript First',
          'postscript_second' => 'Postscript Second',
          'postscript_third' => 'Postscript Third',
          'postscript_fourth' => 'Postscript Fourth',
          'footer_first' => 'Footer First',
          'footer_second' => 'Footer Second',
        ),
        'zones' => 
        array (
          'user' => 'User',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'header' => 'Header',
          'preface' => 'Preface',
          'content' => 'Content',
          'postscript' => 'Postscript',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'global.css' => 
          array (
            'name' => 'Your custom global styles',
            'description' => 'This file holds all the globally active custom CSS of your theme.',
            'options' => 
            array (
              'weight' => '10',
            ),
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_libraries' => 
          array (
            'omega_formalize' => 'omega_formalize',
            'omega_equalheights' => '',
            'omega_mediaqueries' => 'omega_mediaqueries',
          ),
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'omega-text.css' => 'omega-text.css',
            'omega-branding.css' => 'omega-branding.css',
            'omega-menu.css' => 'omega-menu.css',
            'omega-forms.css' => 'omega-forms.css',
            'omega-visuals.css' => 'omega-visuals.css',
            'global.css' => 'global.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_user_equal_height_container' => '',
          'alpha_zone_user_wrapper' => '1',
          'alpha_zone_user_force' => '',
          'alpha_zone_user_section' => 'header',
          'alpha_zone_user_weight' => '1',
          'alpha_zone_user_columns' => '12',
          'alpha_zone_user_primary' => '',
          'alpha_zone_user_css' => '',
          'alpha_zone_user_wrapper_css' => '',
          'alpha_zone_branding_equal_height_container' => '',
          'alpha_zone_branding_wrapper' => '1',
          'alpha_zone_branding_force' => '',
          'alpha_zone_branding_section' => 'header',
          'alpha_zone_branding_weight' => '2',
          'alpha_zone_branding_columns' => '12',
          'alpha_zone_branding_primary' => '',
          'alpha_zone_branding_css' => '',
          'alpha_zone_branding_wrapper_css' => '',
          'alpha_zone_menu_equal_height_container' => '',
          'alpha_zone_menu_wrapper' => '1',
          'alpha_zone_menu_force' => '',
          'alpha_zone_menu_section' => 'header',
          'alpha_zone_menu_weight' => '3',
          'alpha_zone_menu_columns' => '12',
          'alpha_zone_menu_primary' => '',
          'alpha_zone_menu_css' => '',
          'alpha_zone_menu_wrapper_css' => '',
          'alpha_zone_header_equal_height_container' => '',
          'alpha_zone_header_wrapper' => '1',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '4',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_preface_equal_height_container' => '',
          'alpha_zone_preface_wrapper' => '1',
          'alpha_zone_preface_force' => '',
          'alpha_zone_preface_section' => 'content',
          'alpha_zone_preface_weight' => '1',
          'alpha_zone_preface_columns' => '12',
          'alpha_zone_preface_primary' => '',
          'alpha_zone_preface_css' => '',
          'alpha_zone_preface_wrapper_css' => '',
          'alpha_zone_content_equal_height_container' => '',
          'alpha_zone_content_wrapper' => '1',
          'alpha_zone_content_force' => '1',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '2',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => 'content',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_postscript_equal_height_container' => '',
          'alpha_zone_postscript_wrapper' => '1',
          'alpha_zone_postscript_force' => '',
          'alpha_zone_postscript_section' => 'content',
          'alpha_zone_postscript_weight' => '3',
          'alpha_zone_postscript_columns' => '12',
          'alpha_zone_postscript_primary' => '',
          'alpha_zone_postscript_css' => '',
          'alpha_zone_postscript_wrapper_css' => '',
          'alpha_zone_footer_equal_height_container' => '',
          'alpha_zone_footer_wrapper' => '1',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '1',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_sidebar_equal_height_container' => '',
          'alpha_region_dashboard_sidebar_equal_height_element' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '1',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '-50',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_inactive_equal_height_container' => '',
          'alpha_region_dashboard_inactive_equal_height_element' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '1',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '-50',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_main_equal_height_container' => '',
          'alpha_region_dashboard_main_equal_height_element' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '1',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '-50',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_user_first_equal_height_container' => '',
          'alpha_region_user_first_equal_height_element' => '',
          'alpha_region_user_first_force' => '',
          'alpha_region_user_first_zone' => 'user',
          'alpha_region_user_first_prefix' => '',
          'alpha_region_user_first_columns' => '8',
          'alpha_region_user_first_suffix' => '',
          'alpha_region_user_first_weight' => '1',
          'alpha_region_user_first_css' => '',
          'alpha_region_user_second_equal_height_container' => '',
          'alpha_region_user_second_equal_height_element' => '',
          'alpha_region_user_second_force' => '',
          'alpha_region_user_second_zone' => 'user',
          'alpha_region_user_second_prefix' => '',
          'alpha_region_user_second_columns' => '4',
          'alpha_region_user_second_suffix' => '',
          'alpha_region_user_second_weight' => '2',
          'alpha_region_user_second_css' => '',
          'alpha_region_branding_equal_height_container' => '',
          'alpha_region_branding_equal_height_element' => '',
          'alpha_region_branding_force' => '1',
          'alpha_region_branding_zone' => 'branding',
          'alpha_region_branding_prefix' => '',
          'alpha_region_branding_columns' => '12',
          'alpha_region_branding_suffix' => '',
          'alpha_region_branding_weight' => '1',
          'alpha_region_branding_css' => '',
          'alpha_region_menu_equal_height_container' => '',
          'alpha_region_menu_equal_height_element' => '',
          'alpha_region_menu_force' => '1',
          'alpha_region_menu_zone' => 'menu',
          'alpha_region_menu_prefix' => '',
          'alpha_region_menu_columns' => '12',
          'alpha_region_menu_suffix' => '',
          'alpha_region_menu_weight' => '1',
          'alpha_region_menu_css' => '',
          'alpha_region_header_first_equal_height_container' => '',
          'alpha_region_header_first_equal_height_element' => '',
          'alpha_region_header_first_force' => '',
          'alpha_region_header_first_zone' => 'header',
          'alpha_region_header_first_prefix' => '',
          'alpha_region_header_first_columns' => '6',
          'alpha_region_header_first_suffix' => '',
          'alpha_region_header_first_weight' => '1',
          'alpha_region_header_first_css' => '',
          'alpha_region_header_second_equal_height_container' => '',
          'alpha_region_header_second_equal_height_element' => '',
          'alpha_region_header_second_force' => '',
          'alpha_region_header_second_zone' => 'header',
          'alpha_region_header_second_prefix' => '',
          'alpha_region_header_second_columns' => '6',
          'alpha_region_header_second_suffix' => '',
          'alpha_region_header_second_weight' => '2',
          'alpha_region_header_second_css' => '',
          'alpha_region_preface_first_equal_height_container' => '',
          'alpha_region_preface_first_equal_height_element' => '',
          'alpha_region_preface_first_force' => '',
          'alpha_region_preface_first_zone' => 'preface',
          'alpha_region_preface_first_prefix' => '',
          'alpha_region_preface_first_columns' => '4',
          'alpha_region_preface_first_suffix' => '',
          'alpha_region_preface_first_weight' => '1',
          'alpha_region_preface_first_css' => '',
          'alpha_region_preface_second_equal_height_container' => '',
          'alpha_region_preface_second_equal_height_element' => '',
          'alpha_region_preface_second_force' => '',
          'alpha_region_preface_second_zone' => 'preface',
          'alpha_region_preface_second_prefix' => '',
          'alpha_region_preface_second_columns' => '4',
          'alpha_region_preface_second_suffix' => '',
          'alpha_region_preface_second_weight' => '2',
          'alpha_region_preface_second_css' => '',
          'alpha_region_preface_third_equal_height_container' => '',
          'alpha_region_preface_third_equal_height_element' => '',
          'alpha_region_preface_third_force' => '',
          'alpha_region_preface_third_zone' => 'preface',
          'alpha_region_preface_third_prefix' => '',
          'alpha_region_preface_third_columns' => '4',
          'alpha_region_preface_third_suffix' => '',
          'alpha_region_preface_third_weight' => '3',
          'alpha_region_preface_third_css' => '',
          'alpha_region_content_equal_height_container' => '',
          'alpha_region_content_equal_height_element' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '2',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_equal_height_container' => '',
          'alpha_region_sidebar_first_equal_height_element' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '1',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_equal_height_container' => '',
          'alpha_region_sidebar_second_equal_height_element' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_postscript_first_equal_height_container' => '',
          'alpha_region_postscript_first_equal_height_element' => '',
          'alpha_region_postscript_first_force' => '',
          'alpha_region_postscript_first_zone' => 'postscript',
          'alpha_region_postscript_first_prefix' => '',
          'alpha_region_postscript_first_columns' => '3',
          'alpha_region_postscript_first_suffix' => '',
          'alpha_region_postscript_first_weight' => '1',
          'alpha_region_postscript_first_css' => '',
          'alpha_region_postscript_second_equal_height_container' => '',
          'alpha_region_postscript_second_equal_height_element' => '',
          'alpha_region_postscript_second_force' => '',
          'alpha_region_postscript_second_zone' => 'postscript',
          'alpha_region_postscript_second_prefix' => '',
          'alpha_region_postscript_second_columns' => '3',
          'alpha_region_postscript_second_suffix' => '',
          'alpha_region_postscript_second_weight' => '2',
          'alpha_region_postscript_second_css' => '',
          'alpha_region_postscript_third_equal_height_container' => '',
          'alpha_region_postscript_third_equal_height_element' => '',
          'alpha_region_postscript_third_force' => '',
          'alpha_region_postscript_third_zone' => 'postscript',
          'alpha_region_postscript_third_prefix' => '',
          'alpha_region_postscript_third_columns' => '3',
          'alpha_region_postscript_third_suffix' => '',
          'alpha_region_postscript_third_weight' => '3',
          'alpha_region_postscript_third_css' => '',
          'alpha_region_postscript_fourth_equal_height_container' => '',
          'alpha_region_postscript_fourth_equal_height_element' => '',
          'alpha_region_postscript_fourth_force' => '',
          'alpha_region_postscript_fourth_zone' => 'postscript',
          'alpha_region_postscript_fourth_prefix' => '',
          'alpha_region_postscript_fourth_columns' => '3',
          'alpha_region_postscript_fourth_suffix' => '',
          'alpha_region_postscript_fourth_weight' => '4',
          'alpha_region_postscript_fourth_css' => '',
          'alpha_region_footer_first_equal_height_container' => '',
          'alpha_region_footer_first_equal_height_element' => '',
          'alpha_region_footer_first_force' => '',
          'alpha_region_footer_first_zone' => 'footer',
          'alpha_region_footer_first_prefix' => '',
          'alpha_region_footer_first_columns' => '12',
          'alpha_region_footer_first_suffix' => '',
          'alpha_region_footer_first_weight' => '1',
          'alpha_region_footer_first_css' => '',
          'alpha_region_footer_second_equal_height_container' => '',
          'alpha_region_footer_second_equal_height_element' => '',
          'alpha_region_footer_second_force' => '',
          'alpha_region_footer_second_zone' => 'footer',
          'alpha_region_footer_second_prefix' => '',
          'alpha_region_footer_second_columns' => '12',
          'alpha_region_footer_second_suffix' => '',
          'alpha_region_footer_second_weight' => '2',
          'alpha_region_footer_second_css' => '',
        ),
        'version' => '7.x-3.0',
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
    'starterkit_omega_xhtml' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.44/sites/all/themes/omega/starterkits/omega-xhtml/starterkit_omega_xhtml.info',
      'name' => 'starterkit_omega_xhtml',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Omega XHTML Starter Kit',
        'description' => 'Default XHTML starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'screenshot' => 'screenshot.png',
        'base theme' => 'omega',
        'hidden' => true,
        'starterkit' => true,
        'regions' => 
        array (
          'page_top' => 'Page Top',
          'page_bottom' => 'Page Bottom',
          'content' => 'Content',
          'user_first' => 'User Bar First',
          'user_second' => 'User Bar Second',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'sidebar_first' => 'Sidebar First',
          'sidebar_second' => 'Sidebar Second',
          'header_first' => 'Header First',
          'header_second' => 'Header Second',
          'preface_first' => 'Preface First',
          'preface_second' => 'Preface Second',
          'preface_third' => 'Preface Third',
          'postscript_first' => 'Postscript First',
          'postscript_second' => 'Postscript Second',
          'postscript_third' => 'Postscript Third',
          'postscript_fourth' => 'Postscript Fourth',
          'footer_first' => 'Footer First',
          'footer_second' => 'Footer Second',
        ),
        'zones' => 
        array (
          'user' => 'User',
          'branding' => 'Branding',
          'menu' => 'Menu',
          'header' => 'Header',
          'preface' => 'Preface',
          'content' => 'Content',
          'postscript' => 'Postscript',
          'footer' => 'Footer',
        ),
        'css' => 
        array (
          'global.css' => 
          array (
            'name' => 'Your custom global styles',
            'description' => 'This file holds all the globally active custom CSS of your theme.',
            'options' => 
            array (
              'weight' => '10',
            ),
          ),
        ),
        'settings' => 
        array (
          'alpha_grid' => 'alpha_default',
          'alpha_primary_alpha_default' => 'normal',
          'alpha_responsive' => '1',
          'alpha_layouts_alpha_fluid_primary' => 'normal',
          'alpha_layouts_alpha_fluid_normal_responsive' => '0',
          'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_primary' => 'normal',
          'alpha_layouts_alpha_default_fluid_responsive' => '0',
          'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_fluid_weight' => '0',
          'alpha_layouts_alpha_default_narrow_responsive' => '1',
          'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_narrow_weight' => '1',
          'alpha_layouts_alpha_default_normal_responsive' => '1',
          'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
          'alpha_layouts_alpha_default_normal_weight' => '2',
          'alpha_layouts_alpha_default_wide_responsive' => '1',
          'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
          'alpha_layouts_alpha_default_wide_weight' => '3',
          'alpha_viewport' => '1',
          'alpha_viewport_initial_scale' => '1',
          'alpha_viewport_min_scale' => '1',
          'alpha_viewport_max_scale' => '1',
          'alpha_viewport_user_scaleable' => '',
          'alpha_libraries' => 
          array (
            'omega_formalize' => 'omega_formalize',
            'omega_equalheights' => '',
            'omega_mediaqueries' => 'omega_mediaqueries',
          ),
          'alpha_css' => 
          array (
            'alpha-reset.css' => 'alpha-reset.css',
            'alpha-mobile.css' => 'alpha-mobile.css',
            'alpha-alpha.css' => 'alpha-alpha.css',
            'omega-text.css' => 'omega-text.css',
            'omega-branding.css' => 'omega-branding.css',
            'omega-menu.css' => 'omega-menu.css',
            'omega-forms.css' => 'omega-forms.css',
            'omega-visuals.css' => 'omega-visuals.css',
            'global.css' => 'global.css',
          ),
          'alpha_debug_block_toggle' => '1',
          'alpha_debug_block_active' => '1',
          'alpha_debug_grid_toggle' => '1',
          'alpha_debug_grid_active' => '1',
          'alpha_debug_grid_roles' => 
          array (
            1 => '1',
            2 => '2',
            3 => '3',
          ),
          'alpha_toggle_messages' => '1',
          'alpha_toggle_action_links' => '1',
          'alpha_toggle_tabs' => '1',
          'alpha_toggle_breadcrumb' => '1',
          'alpha_toggle_page_title' => '1',
          'alpha_toggle_feed_icons' => '1',
          'alpha_hidden_title' => '',
          'alpha_hidden_site_name' => '',
          'alpha_hidden_site_slogan' => '',
          'alpha_zone_user_equal_height_container' => '',
          'alpha_zone_user_wrapper' => '1',
          'alpha_zone_user_force' => '',
          'alpha_zone_user_section' => 'header',
          'alpha_zone_user_weight' => '1',
          'alpha_zone_user_columns' => '12',
          'alpha_zone_user_primary' => '',
          'alpha_zone_user_css' => '',
          'alpha_zone_user_wrapper_css' => '',
          'alpha_zone_branding_equal_height_container' => '',
          'alpha_zone_branding_wrapper' => '1',
          'alpha_zone_branding_force' => '',
          'alpha_zone_branding_section' => 'header',
          'alpha_zone_branding_weight' => '2',
          'alpha_zone_branding_columns' => '12',
          'alpha_zone_branding_primary' => '',
          'alpha_zone_branding_css' => '',
          'alpha_zone_branding_wrapper_css' => '',
          'alpha_zone_menu_equal_height_container' => '',
          'alpha_zone_menu_wrapper' => '1',
          'alpha_zone_menu_force' => '',
          'alpha_zone_menu_section' => 'header',
          'alpha_zone_menu_weight' => '3',
          'alpha_zone_menu_columns' => '12',
          'alpha_zone_menu_primary' => '',
          'alpha_zone_menu_css' => '',
          'alpha_zone_menu_wrapper_css' => '',
          'alpha_zone_header_equal_height_container' => '',
          'alpha_zone_header_wrapper' => '1',
          'alpha_zone_header_force' => '',
          'alpha_zone_header_section' => 'header',
          'alpha_zone_header_weight' => '4',
          'alpha_zone_header_columns' => '12',
          'alpha_zone_header_primary' => '',
          'alpha_zone_header_css' => '',
          'alpha_zone_header_wrapper_css' => '',
          'alpha_zone_preface_equal_height_container' => '',
          'alpha_zone_preface_wrapper' => '1',
          'alpha_zone_preface_force' => '',
          'alpha_zone_preface_section' => 'content',
          'alpha_zone_preface_weight' => '1',
          'alpha_zone_preface_columns' => '12',
          'alpha_zone_preface_primary' => '',
          'alpha_zone_preface_css' => '',
          'alpha_zone_preface_wrapper_css' => '',
          'alpha_zone_content_equal_height_container' => '',
          'alpha_zone_content_wrapper' => '1',
          'alpha_zone_content_force' => '1',
          'alpha_zone_content_section' => 'content',
          'alpha_zone_content_weight' => '2',
          'alpha_zone_content_columns' => '12',
          'alpha_zone_content_primary' => 'content',
          'alpha_zone_content_css' => '',
          'alpha_zone_content_wrapper_css' => '',
          'alpha_zone_postscript_equal_height_container' => '',
          'alpha_zone_postscript_wrapper' => '1',
          'alpha_zone_postscript_force' => '',
          'alpha_zone_postscript_section' => 'content',
          'alpha_zone_postscript_weight' => '3',
          'alpha_zone_postscript_columns' => '12',
          'alpha_zone_postscript_primary' => '',
          'alpha_zone_postscript_css' => '',
          'alpha_zone_postscript_wrapper_css' => '',
          'alpha_zone_footer_equal_height_container' => '',
          'alpha_zone_footer_wrapper' => '1',
          'alpha_zone_footer_force' => '',
          'alpha_zone_footer_section' => 'footer',
          'alpha_zone_footer_weight' => '1',
          'alpha_zone_footer_columns' => '12',
          'alpha_zone_footer_primary' => '',
          'alpha_zone_footer_css' => '',
          'alpha_zone_footer_wrapper_css' => '',
          'alpha_region_dashboard_sidebar_equal_height_container' => '',
          'alpha_region_dashboard_sidebar_equal_height_element' => '',
          'alpha_region_dashboard_sidebar_force' => '',
          'alpha_region_dashboard_sidebar_zone' => '',
          'alpha_region_dashboard_sidebar_prefix' => '',
          'alpha_region_dashboard_sidebar_columns' => '1',
          'alpha_region_dashboard_sidebar_suffix' => '',
          'alpha_region_dashboard_sidebar_weight' => '-50',
          'alpha_region_dashboard_sidebar_css' => '',
          'alpha_region_dashboard_inactive_equal_height_container' => '',
          'alpha_region_dashboard_inactive_equal_height_element' => '',
          'alpha_region_dashboard_inactive_force' => '',
          'alpha_region_dashboard_inactive_zone' => '',
          'alpha_region_dashboard_inactive_prefix' => '',
          'alpha_region_dashboard_inactive_columns' => '1',
          'alpha_region_dashboard_inactive_suffix' => '',
          'alpha_region_dashboard_inactive_weight' => '-50',
          'alpha_region_dashboard_inactive_css' => '',
          'alpha_region_dashboard_main_equal_height_container' => '',
          'alpha_region_dashboard_main_equal_height_element' => '',
          'alpha_region_dashboard_main_force' => '',
          'alpha_region_dashboard_main_zone' => '',
          'alpha_region_dashboard_main_prefix' => '',
          'alpha_region_dashboard_main_columns' => '1',
          'alpha_region_dashboard_main_suffix' => '',
          'alpha_region_dashboard_main_weight' => '-50',
          'alpha_region_dashboard_main_css' => '',
          'alpha_region_user_first_equal_height_container' => '',
          'alpha_region_user_first_equal_height_element' => '',
          'alpha_region_user_first_force' => '',
          'alpha_region_user_first_zone' => 'user',
          'alpha_region_user_first_prefix' => '',
          'alpha_region_user_first_columns' => '8',
          'alpha_region_user_first_suffix' => '',
          'alpha_region_user_first_weight' => '1',
          'alpha_region_user_first_css' => '',
          'alpha_region_user_second_equal_height_container' => '',
          'alpha_region_user_second_equal_height_element' => '',
          'alpha_region_user_second_force' => '',
          'alpha_region_user_second_zone' => 'user',
          'alpha_region_user_second_prefix' => '',
          'alpha_region_user_second_columns' => '4',
          'alpha_region_user_second_suffix' => '',
          'alpha_region_user_second_weight' => '2',
          'alpha_region_user_second_css' => '',
          'alpha_region_branding_equal_height_container' => '',
          'alpha_region_branding_equal_height_element' => '',
          'alpha_region_branding_force' => '1',
          'alpha_region_branding_zone' => 'branding',
          'alpha_region_branding_prefix' => '',
          'alpha_region_branding_columns' => '12',
          'alpha_region_branding_suffix' => '',
          'alpha_region_branding_weight' => '1',
          'alpha_region_branding_css' => '',
          'alpha_region_menu_equal_height_container' => '',
          'alpha_region_menu_equal_height_element' => '',
          'alpha_region_menu_force' => '1',
          'alpha_region_menu_zone' => 'menu',
          'alpha_region_menu_prefix' => '',
          'alpha_region_menu_columns' => '12',
          'alpha_region_menu_suffix' => '',
          'alpha_region_menu_weight' => '1',
          'alpha_region_menu_css' => '',
          'alpha_region_header_first_equal_height_container' => '',
          'alpha_region_header_first_equal_height_element' => '',
          'alpha_region_header_first_force' => '',
          'alpha_region_header_first_zone' => 'header',
          'alpha_region_header_first_prefix' => '',
          'alpha_region_header_first_columns' => '6',
          'alpha_region_header_first_suffix' => '',
          'alpha_region_header_first_weight' => '1',
          'alpha_region_header_first_css' => '',
          'alpha_region_header_second_equal_height_container' => '',
          'alpha_region_header_second_equal_height_element' => '',
          'alpha_region_header_second_force' => '',
          'alpha_region_header_second_zone' => 'header',
          'alpha_region_header_second_prefix' => '',
          'alpha_region_header_second_columns' => '6',
          'alpha_region_header_second_suffix' => '',
          'alpha_region_header_second_weight' => '2',
          'alpha_region_header_second_css' => '',
          'alpha_region_preface_first_equal_height_container' => '',
          'alpha_region_preface_first_equal_height_element' => '',
          'alpha_region_preface_first_force' => '',
          'alpha_region_preface_first_zone' => 'preface',
          'alpha_region_preface_first_prefix' => '',
          'alpha_region_preface_first_columns' => '4',
          'alpha_region_preface_first_suffix' => '',
          'alpha_region_preface_first_weight' => '1',
          'alpha_region_preface_first_css' => '',
          'alpha_region_preface_second_equal_height_container' => '',
          'alpha_region_preface_second_equal_height_element' => '',
          'alpha_region_preface_second_force' => '',
          'alpha_region_preface_second_zone' => 'preface',
          'alpha_region_preface_second_prefix' => '',
          'alpha_region_preface_second_columns' => '4',
          'alpha_region_preface_second_suffix' => '',
          'alpha_region_preface_second_weight' => '2',
          'alpha_region_preface_second_css' => '',
          'alpha_region_preface_third_equal_height_container' => '',
          'alpha_region_preface_third_equal_height_element' => '',
          'alpha_region_preface_third_force' => '',
          'alpha_region_preface_third_zone' => 'preface',
          'alpha_region_preface_third_prefix' => '',
          'alpha_region_preface_third_columns' => '4',
          'alpha_region_preface_third_suffix' => '',
          'alpha_region_preface_third_weight' => '3',
          'alpha_region_preface_third_css' => '',
          'alpha_region_content_equal_height_container' => '',
          'alpha_region_content_equal_height_element' => '',
          'alpha_region_content_force' => '',
          'alpha_region_content_zone' => 'content',
          'alpha_region_content_prefix' => '',
          'alpha_region_content_columns' => '6',
          'alpha_region_content_suffix' => '',
          'alpha_region_content_weight' => '2',
          'alpha_region_content_css' => '',
          'alpha_region_sidebar_first_equal_height_container' => '',
          'alpha_region_sidebar_first_equal_height_element' => '',
          'alpha_region_sidebar_first_force' => '',
          'alpha_region_sidebar_first_zone' => 'content',
          'alpha_region_sidebar_first_prefix' => '',
          'alpha_region_sidebar_first_columns' => '3',
          'alpha_region_sidebar_first_suffix' => '',
          'alpha_region_sidebar_first_weight' => '1',
          'alpha_region_sidebar_first_css' => '',
          'alpha_region_sidebar_second_equal_height_container' => '',
          'alpha_region_sidebar_second_equal_height_element' => '',
          'alpha_region_sidebar_second_force' => '',
          'alpha_region_sidebar_second_zone' => 'content',
          'alpha_region_sidebar_second_prefix' => '',
          'alpha_region_sidebar_second_columns' => '3',
          'alpha_region_sidebar_second_suffix' => '',
          'alpha_region_sidebar_second_weight' => '3',
          'alpha_region_sidebar_second_css' => '',
          'alpha_region_postscript_first_equal_height_container' => '',
          'alpha_region_postscript_first_equal_height_element' => '',
          'alpha_region_postscript_first_force' => '',
          'alpha_region_postscript_first_zone' => 'postscript',
          'alpha_region_postscript_first_prefix' => '',
          'alpha_region_postscript_first_columns' => '3',
          'alpha_region_postscript_first_suffix' => '',
          'alpha_region_postscript_first_weight' => '1',
          'alpha_region_postscript_first_css' => '',
          'alpha_region_postscript_second_equal_height_container' => '',
          'alpha_region_postscript_second_equal_height_element' => '',
          'alpha_region_postscript_second_force' => '',
          'alpha_region_postscript_second_zone' => 'postscript',
          'alpha_region_postscript_second_prefix' => '',
          'alpha_region_postscript_second_columns' => '3',
          'alpha_region_postscript_second_suffix' => '',
          'alpha_region_postscript_second_weight' => '2',
          'alpha_region_postscript_second_css' => '',
          'alpha_region_postscript_third_equal_height_container' => '',
          'alpha_region_postscript_third_equal_height_element' => '',
          'alpha_region_postscript_third_force' => '',
          'alpha_region_postscript_third_zone' => 'postscript',
          'alpha_region_postscript_third_prefix' => '',
          'alpha_region_postscript_third_columns' => '3',
          'alpha_region_postscript_third_suffix' => '',
          'alpha_region_postscript_third_weight' => '3',
          'alpha_region_postscript_third_css' => '',
          'alpha_region_postscript_fourth_equal_height_container' => '',
          'alpha_region_postscript_fourth_equal_height_element' => '',
          'alpha_region_postscript_fourth_force' => '',
          'alpha_region_postscript_fourth_zone' => 'postscript',
          'alpha_region_postscript_fourth_prefix' => '',
          'alpha_region_postscript_fourth_columns' => '3',
          'alpha_region_postscript_fourth_suffix' => '',
          'alpha_region_postscript_fourth_weight' => '4',
          'alpha_region_postscript_fourth_css' => '',
          'alpha_region_footer_first_equal_height_container' => '',
          'alpha_region_footer_first_equal_height_element' => '',
          'alpha_region_footer_first_force' => '',
          'alpha_region_footer_first_zone' => 'footer',
          'alpha_region_footer_first_prefix' => '',
          'alpha_region_footer_first_columns' => '12',
          'alpha_region_footer_first_suffix' => '',
          'alpha_region_footer_first_weight' => '1',
          'alpha_region_footer_first_css' => '',
          'alpha_region_footer_second_equal_height_container' => '',
          'alpha_region_footer_second_equal_height_element' => '',
          'alpha_region_footer_second_force' => '',
          'alpha_region_footer_second_zone' => 'footer',
          'alpha_region_footer_second_prefix' => '',
          'alpha_region_footer_second_columns' => '12',
          'alpha_region_footer_second_suffix' => '',
          'alpha_region_footer_second_weight' => '2',
          'alpha_region_footer_second_css' => '',
        ),
        'version' => '7.x-3.0',
        'project' => 'omega',
        'datestamp' => '1314088930',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0',
    ),
  ),
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/platforms/drupal-7.44/sites/bebinhnew.phanmemquanli.com/local.drushrc.php');
