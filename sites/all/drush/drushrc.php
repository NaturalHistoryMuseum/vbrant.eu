<?php 


$options['sites'] = array (
  0 => 'vbrant.eu',
);
$options['profiles'] = array (
  0 => 'default',
  1 => 'sandbox_profile',
  2 => 'scratchpad_profile',
  3 => 'emonocot_profile',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Enables threaded discussions about general topics.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.37',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.37',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent posts for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'upload' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'throttle' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'blogapi' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.37',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.37',
      ),
      'ping' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.37',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.37',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.37',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6055',
        'version' => '6.37',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.37',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.37',
      ),
      'notifications_feed' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_feed/notifications_feed.module',
        'basename' => 'notifications_feed.module',
        'name' => 'notifications_feed',
        'info' => 
        array (
          'name' => 'FeedAPI Subscriptions',
          'description' => 'Allows users to subscribe to feeds and be notified when they are updated',
          'package' => 'Notifications',
          'dependencies' => 'notifications feedapi',
          'version' => '6.x-1.1',
          'core' => '6.x',
          'project' => 'notifications',
          'datestamp' => '1233503432',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'notifications_autosubscribe' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_autosubscribe/notifications_autosubscribe.module',
        'basename' => 'notifications_autosubscribe.module',
        'name' => 'notifications_autosubscribe',
        'info' => 
        array (
          'name' => 'Notifications Autosubscribe',
          'description' => 'Provides automatic notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
            1 => 'notifications_content',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_content' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_content/notifications_content.module',
        'basename' => 'notifications_content.module',
        'name' => 'notifications_content',
        'info' => 
        array (
          'name' => 'Content Notifications',
          'description' => 'Allows users to subscribe to content related events.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.3',
      ),
      'notifications_tags' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_tags/notifications_tags.module',
        'basename' => 'notifications_tags.module',
        'name' => 'notifications_tags',
        'info' => 
        array (
          'name' => 'Taxonomy Notifications',
          'description' => 'Allows users to subscribe to taxonomy terms.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications_content',
            1 => 'taxonomy',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_views/notifications_views.module',
        'basename' => 'notifications_views.module',
        'name' => 'notifications_views',
        'info' => 
        array (
          'name' => 'Notifications Views',
          'description' => 'Views integration for Notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_ui/notifications_ui.module',
        'basename' => 'notifications_ui.module',
        'name' => 'notifications_ui',
        'info' => 
        array (
          'name' => 'Notifications UI',
          'description' => 'Provides an UI to notifications',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.3',
      ),
      'notifications_lite' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_lite/notifications_lite.module',
        'basename' => 'notifications_lite.module',
        'name' => 'notifications_lite',
        'info' => 
        array (
          'name' => 'Notifications Lite',
          'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
          'package' => 'Notifications',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications.module',
        'basename' => 'notifications.module',
        'name' => 'notifications',
        'info' => 
        array (
          'name' => 'Notifications',
          'description' => 'The basic notifications framework',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'token',
          ),
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
        ),
        'schema_version' => '6004',
        'version' => '6.x-2.3',
      ),
      'contemplate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/contemplate/contemplate.module',
        'basename' => 'contemplate.module',
        'name' => 'contemplate',
        'info' => 
        array (
          'name' => 'Content Templates',
          'description' => 'Create templates to customize output of teaser and body content.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'contemplate',
          'datestamp' => '1243961728',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '2',
        'version' => '6.x-1.1',
      ),
      'remote_issue_tab' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/remote_issue_tab/remote_issue_tab.module',
        'basename' => 'remote_issue_tab.module',
        'name' => 'remote_issue_tab',
        'info' => 
        array (
          'name' => 'Remote Issue Tab',
          'description' => 'Integrates with the \'Project Issue\' module on another site to display it on this site.',
          'package' => 'EDIT',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'aggregator',
            1 => 'uwho_client',
          ),
          'project' => 'remote_issue_tab',
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.0',
      ),
      'content_copy' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/content_copy/content_copy.module',
        'basename' => 'content_copy.module',
        'name' => 'content_copy',
        'info' => 
        array (
          'name' => 'Content Copy',
          'description' => 'Enables ability to import/export field definitions.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.8',
      ),
      'userreference' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/userreference/userreference.module',
        'basename' => 'userreference.module',
        'name' => 'userreference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-2.8',
      ),
      'fieldgroup' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
        'basename' => 'fieldgroup.module',
        'name' => 'fieldgroup',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Create display groups for CCK fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.x-2.8',
      ),
      'content_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
        'basename' => 'content_permissions.module',
        'name' => 'content_permissions',
        'info' => 
        array (
          'name' => 'Content Permissions',
          'description' => 'Set field-level permissions for CCK fields.',
          'package' => 'CCK',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.8',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'version' => '6.x-2.8',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.x-2.8',
      ),
      'optionwidgets' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
        'basename' => 'optionwidgets.module',
        'name' => 'optionwidgets',
        'info' => 
        array (
          'name' => 'Option Widgets',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.8',
      ),
      'nodereference' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/nodereference/nodereference.module',
        'basename' => 'nodereference.module',
        'name' => 'nodereference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.8',
      ),
      'content' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/content.module',
        'basename' => 'content.module',
        'name' => 'content',
        'info' => 
        array (
          'name' => 'Content',
          'description' => 'Allows administrators to define new content types.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6010',
        'version' => '6.x-2.8',
      ),
      'help_example' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'version' => '6.x-1.2',
          'project' => 'advanced_help',
          'datestamp' => '1238954409',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.2',
      ),
      'advanced_help' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'advanced_help',
          'datestamp' => '1238954409',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.2',
      ),
      'mollom' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '6.x',
          'version' => '6.x-1.16',
          'project' => 'mollom',
          'datestamp' => '1310217719',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6121',
        'version' => '6.x-1.16',
      ),
      'og_user_roles' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og_user_roles/og_user_roles.module',
        'basename' => 'og_user_roles.module',
        'name' => 'og_user_roles',
        'info' => 
        array (
          'name' => 'Organic groups user roles',
          'description' => 'Assign additional user roles to members of organic groups within the group context.',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'og_views',
          ),
          'package' => 'Organic groups',
          'core' => '6.x',
          'version' => '6.x-4.1',
          'project' => 'og_user_roles',
          'datestamp' => '1268286609',
          'php' => '4.3.5',
        ),
        'schema_version' => '6204',
        'version' => '6.x-4.1',
      ),
      'og_forum' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og_forum/og_forum.module',
        'basename' => 'og_forum.module',
        'name' => 'og_forum',
        'info' => 
        array (
          'name' => 'OG forum',
          'description' => 'Creates forums within organic groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'og',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ajax_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/ajax_ui/ajax_ui.module',
        'basename' => 'ajax_ui.module',
        'name' => 'ajax_ui',
        'info' => 
        array (
          'name' => 'Ajax ui',
          'description' => 'RECOMMENDED: User Interface for Ajax forms. You will not be able to manage Ajax forms without this module.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.15',
      ),
      'ajax_quicktabs' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/quicktabs/ajax_quicktabs.module',
        'basename' => 'ajax_quicktabs.module',
        'name' => 'ajax_quicktabs',
        'info' => 
        array (
          'name' => 'Ajax plugin - quicktabs',
          'description' => 'Enhances AJAX functionality for quicktabs.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'quicktabs',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/captcha/ajax_captcha.module',
        'basename' => 'ajax_captcha.module',
        'name' => 'ajax_captcha',
        'info' => 
        array (
          'name' => 'Ajax plugin - captcha',
          'description' => 'Enables AJAX functionality with CAPTCHA-enabled forms. This module requires that the patches in \'ajax/plugins/captcha/patches\' be applied to the CAPTCHA module.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'captcha',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_fckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/fckeditor/ajax_fckeditor.module',
        'basename' => 'ajax_fckeditor.module',
        'name' => 'ajax_fckeditor',
        'info' => 
        array (
          'name' => 'Ajax plugin - fckeditor',
          'description' => 'Enables AJAX functionality for FCKEditor',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'fckeditor',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_comment' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/comment/ajax_comment.module',
        'basename' => 'ajax_comment.module',
        'name' => 'ajax_comment',
        'info' => 
        array (
          'name' => 'Ajax plugin - comment',
          'description' => 'Enables ajax functionality for comment forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'comment',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_tinymce' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/tinymce/ajax_tinymce.module',
        'basename' => 'ajax_tinymce.module',
        'name' => 'ajax_tinymce',
        'info' => 
        array (
          'name' => 'Ajax plugin - tinymce',
          'description' => 'Enables AJAX functionality for tinymce',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'tinymce',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_webform' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/webform/ajax_webform.module',
        'basename' => 'ajax_webform.module',
        'name' => 'ajax_webform',
        'info' => 
        array (
          'name' => 'Ajax plugin - webform',
          'description' => 'Enables AJAX functionality for webforms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'webform',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_disable_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/disable_redirect/ajax_disable_redirect.module',
        'basename' => 'ajax_disable_redirect.module',
        'name' => 'ajax_disable_redirect',
        'info' => 
        array (
          'name' => 'Ajax plugin - disable_redirect',
          'description' => 'Allows form redirections to be disabled for Ajax forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'ajax_ui',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_scroller' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/scroller/ajax_scroller.module',
        'basename' => 'ajax_scroller.module',
        'name' => 'ajax_scroller',
        'info' => 
        array (
          'name' => 'Ajax plugin - scroller',
          'description' => 'RECOMMENDED: Allows a form to scroll up after an Ajax form submission.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_thickbox' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/thickbox/ajax_thickbox.module',
        'basename' => 'ajax_thickbox.module',
        'name' => 'ajax_thickbox',
        'info' => 
        array (
          'name' => 'Ajax plugin - thickbox',
          'description' => 'Enhances AJAX functionality for thickbox.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_logintoboggan' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/loggintoboggan/ajax_logintoboggan.module',
        'basename' => 'ajax_logintoboggan.module',
        'name' => 'ajax_logintoboggan',
        'info' => 
        array (
          'name' => 'Ajax plugin - logintoboggan',
          'description' => 'Enables AJAX functionality for LoginToboggan forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'logintoboggan',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/wysiwyg/ajax_wysiwyg.module',
        'basename' => 'ajax_wysiwyg.module',
        'name' => 'ajax_wysiwyg',
        'info' => 
        array (
          'name' => 'Ajax plugin - wysiwyg',
          'description' => 'Enables AJAX functionality for wysiwyg API',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'wysiwyg',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/ajax.module',
        'basename' => 'ajax.module',
        'name' => 'ajax',
        'info' => 
        array (
          'name' => 'Ajax',
          'description' => 'Automatically validates and submits any Drupal form using AJAX.',
          'package' => 'Ajax',
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.15',
      ),
      'uwho_client' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/uwho/uwho_client.module',
        'basename' => 'uwho_client.module',
        'name' => 'uwho_client',
        'info' => 
        array (
          'name' => 'UWho - Client',
          'description' => 'Provides an easy way of generating the relevant URLs to provide a mechanism to create/signin a user to another site',
          'package' => 'UWho',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'project' => 'uwho',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'uwho_site' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/uwho/uwho_site.module',
        'basename' => 'uwho_site.module',
        'name' => 'uwho_site',
        'info' => 
        array (
          'name' => 'UWho - Site',
          'description' => 'Enables the creation of Users, and automatic logging from a URL.  Security is provided by a key system, which helps to ensure that no unwanted access can be provided',
          'package' => 'UWho',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'project' => 'uwho',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.0',
      ),
      'node_import' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/node_import/node_import.module',
        'basename' => 'node_import.module',
        'name' => 'node_import',
        'info' => 
        array (
          'name' => 'Node import',
          'description' => 'Allows users to import node content from a CSV or TSV file.',
          'package' => 'Development',
          'core' => '6.x',
          'php' => '5',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'advanced_help',
          ),
          'version' => '6.x-1.0-rc4',
          'project' => 'node_import',
          'datestamp' => '1235601068',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.0-rc4',
      ),
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
        'basename' => 'scratchpad_apply.module',
        'name' => 'scratchpad_apply',
        'info' => 
        array (
          'name' => 'Scratchpad Application form Service',
          'description' => 'Provides the data from the Scratchpad application form.  Used by the Aegir site installer',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'scratchpad' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
        'info' => 
        array (
          'name' => 'Scratchpad',
          'description' => 'Defines whether or not a Drupal site is a Scratchpad. Reports to a central location to enable lists of other Scratchpads, and also to report stats about the site.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'scratchpad',
          'project status url' => 'http://modules.scratchpads.eu',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0',
      ),
      'imce' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '6.x',
          'version' => '6.x-1.4',
          'project' => 'imce',
          'datestamp' => '1275099907',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-1.4',
      ),
      'nagger' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/nagger/nagger.module',
        'basename' => 'nagger.module',
        'name' => 'nagger',
        'info' => 
        array (
          'name' => 'Nagger',
          'description' => 'A module which implements node access AFTER og_access.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'nagger',
          'project status url' => 'http://modules.scratchpads.eu',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'calendar_ical' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/calendar_ical/calendar_ical.module',
        'basename' => 'calendar_ical.module',
        'name' => 'calendar_ical',
        'info' => 
        array (
          'name' => 'Calendar iCal',
          'description' => 'Adds ical functionality to Calendar views.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'calendar',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.x-2.2',
      ),
      'jcalendar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/jcalendar/jcalendar.module',
        'basename' => 'jcalendar.module',
        'name' => 'jcalendar',
        'info' => 
        array (
          'name' => 'Calendar Popup',
          'description' => 'Replaces the links to calendar items with a javascript popup that gracefully regresses if javascript is not enabled',
          'dependencies' => 
          array (
            0 => 'calendar',
            1 => 'views',
          ),
          'core' => '6.x',
          'package' => 'Date/Time',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.2',
      ),
      'calendar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-2.2',
      ),
      'twitterscript' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/twitterscript/twitterscript.module',
        'basename' => 'twitterscript.module',
        'name' => 'twitterscript',
        'info' => 
        array (
          'name' => 'Twitter Script (twitterscript)',
          'description' => 'Adds scripts to a page that allows a user to easily embed specific twitter feeds.',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'path_redirect',
          ),
          'version' => '6.x-1.5',
          'project' => 'pathauto',
          'datestamp' => '1286469664',
          'php' => '4.3.5',
        ),
        'schema_version' => '7',
        'version' => '6.x-1.5',
      ),
      'scratchpads_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpads_migrate/scratchpads_migrate.module',
        'basename' => 'scratchpads_migrate.module',
        'name' => 'scratchpads_migrate',
        'info' => 
        array (
          'name' => 'Scratchpads migrate',
          'description' => 'Migration settings',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'filefield_meta' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
        'basename' => 'filefield_meta.module',
        'name' => 'filefield_meta',
        'info' => 
        array (
          'name' => 'FileField Meta',
          'description' => 'Add metadata gathering and storage to FileField.',
          'dependencies' => 
          array (
            0 => 'filefield',
            1 => 'getid3',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.12',
          'project' => 'filefield',
          'datestamp' => '1392169125',
        ),
        'schema_version' => '6100',
        'version' => '6.x-3.12',
      ),
      'filefield' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/filefield/filefield.module',
        'basename' => 'filefield.module',
        'name' => 'filefield',
        'info' => 
        array (
          'name' => 'FileField',
          'description' => 'Defines a file field type.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.12',
          'project' => 'filefield',
          'datestamp' => '1392169125',
        ),
        'schema_version' => '6104',
        'version' => '6.x-3.12',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '6.x',
          'package' => 'Webform',
          'php' => '5.1',
          'version' => '6.x-3.20',
          'project' => 'webform',
          'datestamp' => '1392182051',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6331',
        'version' => '6.x-3.20',
      ),
      'path_redirect_generate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/path_redirect/generate/path_redirect_generate.module',
        'basename' => 'path_redirect_generate.module',
        'name' => 'path_redirect_generate',
        'info' => 
        array (
          'name' => 'Path redirect generate',
          'description' => 'Bulk create redirects for testing.',
          'package' => 'Development',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'path_redirect',
            1 => 'devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0-rc2',
      ),
      'path_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/path_redirect/path_redirect.module',
        'basename' => 'path_redirect.module',
        'name' => 'path_redirect',
        'info' => 
        array (
          'name' => 'Path redirect',
          'description' => 'Redirect users from one URL to another.',
          'core' => '6.x',
          'enhances' => 
          array (
            0 => 'pathauto',
          ),
          'suggests' => 
          array (
            0 => 'global_redirect',
          ),
          'recommends' => 
          array (
            0 => 'elements',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.0-rc2',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'name' => 'Views exporter',
          'description' => 'Allows exporting multiple views at once.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.16',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6013',
        'version' => '6.x-2.16',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.16',
      ),
      'nodereferencebiblio' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/nodereferencebiblio/nodereferencebiblio.module',
        'basename' => 'nodereferencebiblio.module',
        'name' => 'nodereferencebiblio',
        'info' => 
        array (
          'name' => 'Nodereference display as bibliographic citation (nodereferencebiblio)',
          'description' => 'Enable an additional display format for a nodereference field, wherby it is displayed as a bibliographic citation. No checks are done to ensure that the referenced field is of a biblio format.',
          'package' => 'EDIT',
          'dependencies' => 
          array (
            0 => 'nodereference',
            1 => 'biblio',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'content_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy.module',
        'basename' => 'content_taxonomy.module',
        'name' => 'content_taxonomy',
        'info' => 
        array (
          'name' => 'Content Taxonomy',
          'description' => 'Defines a field type for taxonomy terms',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'taxonomy',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => NULL,
      ),
      'content_taxonomy_autocomplete' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy_autocomplete.module',
        'basename' => 'content_taxonomy_autocomplete.module',
        'name' => 'content_taxonomy_autocomplete',
        'info' => 
        array (
          'name' => 'Content Taxonomy Autocomplete',
          'description' => 'Defines a autocomplete widget type for content_taxonomy',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'content_taxonomy',
            2 => 'taxonomy',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'content_taxonomy_options' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy_options.module',
        'basename' => 'content_taxonomy_options.module',
        'name' => 'content_taxonomy_options',
        'info' => 
        array (
          'name' => 'Content Taxonomy Options',
          'description' => 'Defines a option widget type for content_taxonomy for selects, radios/checkboxes',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'content_taxonomy',
            2 => 'taxonomy',
            3 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'og_notifications' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_notifications/og_notifications.module',
        'basename' => 'og_notifications.module',
        'name' => 'og_notifications',
        'info' => 
        array (
          'name' => 'Organic Groups Notifications',
          'description' => 'Allows users to receive notifications and subscribe to group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'notifications',
            2 => 'notifications_content',
            3 => 'notifications_lite',
            4 => 'messaging',
            5 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.4',
      ),
      'og_access' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private posts and private groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'version' => '6.x-2.4',
      ),
      'og_actions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_actions/og_actions.module',
        'basename' => 'og_actions.module',
        'name' => 'og_actions',
        'info' => 
        array (
          'name' => 'Organic groups actions',
          'description' => 'Provides actions for use with Organic Groups and Trigger.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'og_views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_views/og_views.module',
        'basename' => 'og_views.module',
        'name' => 'og_views',
        'info' => 
        array (
          'name' => 'Organic groups Views integration',
          'description' => '<strong>Highly recommended.</strong>. Use Views to search and display organic groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'og' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'Enable users to create and manage groups.  OG Views integration module is recommended for best experience.',
          'package' => 'Organic groups',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6205',
        'version' => '6.x-2.4',
      ),
      'imagefield' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imagefield/imagefield.module',
        'basename' => 'imagefield.module',
        'name' => 'imagefield',
        'info' => 
        array (
          'name' => 'ImageField',
          'description' => 'Defines an image field type.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'filefield',
          ),
          'package' => 'CCK',
          'version' => '6.x-3.7',
          'project' => 'imagefield',
          'datestamp' => '1277942710',
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'version' => '6.x-3.7',
      ),
      'comment_upload' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/comment_upload/comment_upload.module',
        'basename' => 'comment_upload.module',
        'name' => 'comment_upload',
        'info' => 
        array (
          'name' => 'Comment upload',
          'description' => 'Enables file attachments on comments',
          'dependencies' => 
          array (
            0 => 'upload',
          ),
          'core' => '6.x',
          'version' => '6.x-1.0-alpha5',
          'project' => 'comment_upload',
          'datestamp' => '1244253911',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-1.0-alpha5',
      ),
      'commentmail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/commentmail/commentmail.module',
        'basename' => 'commentmail.module',
        'name' => 'commentmail',
        'info' => 
        array (
          'name' => 'Comment Mail',
          'description' => 'Sends an email message when comments are posted to the site.',
          'core' => '6.x',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'version' => '6.x-1.0-beta1',
          'project' => 'commentmail',
          'datestamp' => '1227795306',
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'version' => '6.x-1.0-beta1',
      ),
      'biblio_pm' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio/pubmed/biblio_pm.module',
        'basename' => 'biblio_pm.module',
        'name' => 'biblio_pm',
        'info' => 
        array (
          'name' => 'Biblio - PubMed',
          'description' => 'Adds PubMed import and search to the Biblio module.',
          'core' => '6.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'version' => '6.x-1.17',
          'project' => 'biblio',
          'datestamp' => '1327343438',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.17',
      ),
      'biblio' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio/biblio.module',
        'basename' => 'biblio.module',
        'name' => 'biblio',
        'info' => 
        array (
          'name' => 'Biblio',
          'description' => 'Maintains bibliographic lists.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Biblio',
          'version' => '6.x-1.17',
          'project' => 'biblio',
          'datestamp' => '1327343438',
          'php' => '4.3.5',
        ),
        'schema_version' => '6027',
        'version' => '6.x-1.17',
      ),
      'globalredirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'core' => '6.x',
          'version' => '6.x-1.4',
          'project' => 'globalredirect',
          'datestamp' => '1324428084',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.4',
      ),
      'messaging_notify' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_notify/messaging_notify.module',
        'basename' => 'messaging_notify.module',
        'name' => 'messaging_notify',
        'info' => 
        array (
          'name' => 'Message notifications',
          'description' => 'Get notifications about received messages by a different channel',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'messaging',
          'datestamp' => '1233503431',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'messaging_twitter' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_twitter/messaging_twitter.module',
        'basename' => 'messaging_twitter.module',
        'name' => 'messaging_twitter',
        'info' => 
        array (
          'name' => 'Twitter Messaging',
          'description' => 'Sending method for messaging that uses Twitter',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'twitter',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_debug' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_debug/messaging_debug.module',
        'basename' => 'messaging_debug.module',
        'name' => 'messaging_debug',
        'info' => 
        array (
          'name' => 'Messaging debug',
          'description' => 'Debugging and development utilities for messaging package.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_xmpp' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_xmpp/messaging_xmpp.module',
        'basename' => 'messaging_xmpp.module',
        'name' => 'messaging_xmpp',
        'info' => 
        array (
          'name' => 'Messaging XMPP',
          'description' => 'XMPP Sending Method: Integration with XMPP Framework',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'xmppframework',
            2 => 'xmpp_user',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_sms' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_sms/messaging_sms.module',
        'basename' => 'messaging_sms.module',
        'name' => 'messaging_sms',
        'info' => 
        array (
          'name' => 'SMS Messaging',
          'description' => 'Sending Method: SMS',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'sms',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_mime_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_mime_mail/messaging_mime_mail.module',
        'basename' => 'messaging_mime_mail.module',
        'name' => 'messaging_mime_mail',
        'info' => 
        array (
          'name' => 'Messaging Mime Mail',
          'description' => 'Mail Sending Method: Integration with Mime Mail module (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'mimemail',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_simple' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_simple/messaging_simple.module',
        'basename' => 'messaging_simple.module',
        'name' => 'messaging_simple',
        'info' => 
        array (
          'name' => 'Simple messaging',
          'description' => 'Sending Method: Show messages on user\'s page',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_phpmailer' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_phpmailer/messaging_phpmailer.module',
        'basename' => 'messaging_phpmailer.module',
        'name' => 'messaging_phpmailer',
        'info' => 
        array (
          'name' => 'Messaging PHPMailer',
          'description' => 'Mail Sending Method: Integration with PHPMailer for HTML Mail',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_mail/messaging_mail.module',
        'basename' => 'messaging_mail.module',
        'name' => 'messaging_mail',
        'info' => 
        array (
          'name' => 'Simple Mail',
          'description' => 'Mail Sending Method: Integration with Drupal mail API',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_privatemsg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_privatemsg/messaging_privatemsg.module',
        'basename' => 'messaging_privatemsg.module',
        'name' => 'messaging_privatemsg',
        'info' => 
        array (
          'name' => 'Messaging Privatemsg',
          'description' => 'Sending Method: Integration with Privatemsg (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'privatemsg',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging.module',
        'basename' => 'messaging.module',
        'name' => 'messaging',
        'info' => 
        array (
          'name' => 'Messaging',
          'description' => 'Messaging system. This is the base module for the Messaging Framework',
          'package' => 'Messaging',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.x-2.4',
      ),
      'content_profile_registration' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/modules/content_profile_registration.module',
        'basename' => 'content_profile_registration.module',
        'name' => 'content_profile_registration',
        'info' => 
        array (
          'name' => 'Content Profile User Registration',
          'description' => 'Enable content profile features during user registration',
          'package' => 'Content Profile',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content_profile',
          ),
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-1.x-dev',
      ),
      'content_profile_tokens' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/modules/content_profile_tokens.module',
        'basename' => 'content_profile_tokens.module',
        'name' => 'content_profile_tokens',
        'info' => 
        array (
          'name' => 'Content Profile Tokens',
          'description' => 'Add user tokens for content profiles.',
          'package' => 'Content Profile',
          'dependencies' => 
          array (
            0 => 'content_profile',
            1 => 'token',
            2 => 'content',
          ),
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.x-dev',
      ),
      'content_profile' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/content_profile.module',
        'basename' => 'content_profile.module',
        'name' => 'content_profile',
        'info' => 
        array (
          'name' => 'Content Profile',
          'description' => 'Use content types for user profiles.',
          'package' => 'Content Profile',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6004',
        'version' => '6.x-1.x-dev',
      ),
      'jstools' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/jstools/jstools.module',
        'basename' => 'jstools.module',
        'name' => 'jstools',
        'info' => 
        array (
          'name' => 'Javascript tools',
          'description' => 'Provides common JavaScript methods used by other modules.',
          'package' => 'User Interface',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'jstools',
          'datestamp' => '1208192722',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'femail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/femail/femail.module',
        'basename' => 'femail.module',
        'name' => 'femail',
        'info' => 
        array (
          'name' => 'Forum e-mail (femail)',
          'description' => 'Adds e-mail messages to the forum',
          'dependencies' => 
          array (
            0 => 'forum',
          ),
          'core' => '6.x',
          'version' => '6.x-1.6',
          'project' => 'femail',
          'datestamp' => '1302866215',
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.6',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'version' => '6.x-1.18',
      ),
      'token_actions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/token_actions.module',
        'basename' => 'token_actions.module',
        'name' => 'token_actions',
        'info' => 
        array (
          'name' => 'Token actions',
          'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.18',
      ),
      'tokenSTARTER' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/tokenSTARTER.module',
        'basename' => 'tokenSTARTER.module',
        'name' => 'tokenSTARTER',
        'info' => 
        array (
          'name' => 'TokenSTARTER',
          'description' => 'Provides additional tokens and a base on which to build your own tokens.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.18',
      ),
      'jquery_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/jquery_ui/jquery_ui.module',
        'basename' => 'jquery_ui.module',
        'name' => 'jquery_ui',
        'info' => 
        array (
          'name' => 'jQuery UI',
          'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-1.5',
          'project' => 'jquery_ui',
          'datestamp' => '1308323216',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.5',
      ),
      'vertical_tabs' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/vertical_tabs/vertical_tabs.module',
        'basename' => 'vertical_tabs.module',
        'name' => 'vertical_tabs',
        'info' => 
        array (
          'name' => 'Vertical Tabs',
          'description' => 'Provides vertical tabs for the node form.',
          'core' => '6.x',
          'version' => '6.x-1.0-beta7',
          'project' => 'vertical_tabs',
          'datestamp' => '1251002152',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0-beta7',
      ),
      'roleassign' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/roleassign/roleassign.module',
        'basename' => 'roleassign.module',
        'name' => 'roleassign',
        'info' => 
        array (
          'name' => 'RoleAssign',
          'description' => 'Allows site administrators to further delegate the task of managing user\'s roles.',
          'core' => '6.x',
          'version' => '6.x-1.0-beta3',
          'project' => 'roleassign',
          'datestamp' => '1240342368',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0-beta3',
      ),
      'date_timezone' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_timezone/date_timezone.module',
        'basename' => 'date_timezone.module',
        'name' => 'date_timezone',
        'info' => 
        array (
          'name' => 'Date Timezone',
          'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '5200',
        'version' => '6.x-2.9',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_locale' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_locale/date_locale.module',
        'basename' => 'date_locale.module',
        'name' => 'date_locale',
        'info' => 
        array (
          'name' => 'Date Locale',
          'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'locale',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.9',
      ),
      'date_php4' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_php4/date_php4.module',
        'basename' => 'date_php4.module',
        'name' => 'date_php4',
        'info' => 
        array (
          'name' => 'Date PHP4',
          'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Defines CCK date/time fields and widgets.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.x-2.9',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'version' => '6.x-2.9',
      ),
      'foundation' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/foundation/foundation.module',
        'basename' => 'foundation.module',
        'name' => 'foundation',
        'info' => 
        array (
          'name' => 'Forum improver',
          'description' => 'Improves the visual appearance of the Forum, without adding ANY extra pizazz',
          'package' => 'EDIT',
          'dependencies' => 
          array (
            0 => 'forum',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'print_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print_mail/print_mail.module',
        'basename' => 'print_mail.module',
        'name' => 'print_mail',
        'info' => 
        array (
          'name' => 'Send by email',
          'description' => 'Provides the capability to send the web page by email',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.17',
      ),
      'print_pdf' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print_pdf/print_pdf.module',
        'basename' => 'print_pdf.module',
        'name' => 'print_pdf',
        'info' => 
        array (
          'name' => 'PDF version',
          'description' => 'Adds the capability to export pages as PDF.',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.x-1.17',
      ),
      'print' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print.module',
        'basename' => 'print.module',
        'name' => 'print',
        'info' => 
        array (
          'name' => 'Printer-friendly pages',
          'description' => 'Adds a printer-friendly version link to content and administrative pages.',
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.17',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows users to edit contents with client-side editors.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'wysiwyg',
          'datestamp' => '1268063714',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'version' => '6.x-2.1',
      ),
      'biblio_scholar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio_scholar/biblio_scholar.module',
        'basename' => 'biblio_scholar.module',
        'name' => 'biblio_scholar',
        'info' => 
        array (
          'name' => 'Biblio Scholar',
          'description' => 'Adds Google Scholar metatags to Biblio nodes.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'package' => 'Biblio',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'imce_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imce_wysiwyg/imce_wysiwyg.module',
        'basename' => 'imce_wysiwyg.module',
        'name' => 'imce_wysiwyg',
        'info' => 
        array (
          'name' => 'IMCE Wysiwyg API bridge',
          'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
          'package' => 'User interface',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'imce',
            1 => 'wysiwyg',
          ),
          'version' => '6.x-1.1',
          'project' => 'imce_wysiwyg',
          'datestamp' => '1268433606',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
        'info' => 
        array (
          'name' => 'Memcache Admin',
          'description' => 'Adds a User Interface to monitor the Memcache for this site.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.9',
          'project' => 'memcache',
          'datestamp' => '1305178916',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-1.9',
      ),
      'memcache' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
        'info' => 
        array (
          'name' => 'Memcache',
          'description' => 'High performance integration with memcache.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.9',
          'project' => 'memcache',
          'datestamp' => '1305178916',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.9',
      ),
      'views_bonus_panels' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/panels/views_bonus_panels.module',
        'basename' => 'views_bonus_panels.module',
        'name' => 'views_bonus_panels',
        'info' => 
        array (
          'name' => 'Bonus: Panels',
          'description' => 'Various views style plugins to put views nodes in panels',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'panels',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'views_bonus_export' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/export/views_bonus_export.module',
        'basename' => 'views_bonus_export.module',
        'name' => 'views_bonus_export',
        'info' => 
        array (
          'name' => 'Bonus: Views Export',
          'description' => 'Plugin to export views a couple of formats including Comma Separated Values(CSV), Doc or XML',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'views_bonus_paged_feed' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/paged_feed/views_bonus_paged_feed.module',
        'basename' => 'views_bonus_paged_feed.module',
        'name' => 'views_bonus_paged_feed',
        'info' => 
        array (
          'name' => 'Bonus: Paged Feed',
          'description' => 'Like a feed display on it pages. How cool!',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
    ),
    'themes' => 
    array (
      'pushbutton' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.37',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/platforms/vbrant.eu/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
      'bluemarine' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.37',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/platforms/vbrant.eu/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
      'minnelli' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.37',
          'core' => '6.x',
          'base theme' => 'garland',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'minnelli.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.37',
          'core' => '6.x',
          'engine' => 'phptemplate',
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
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/platforms/vbrant.eu/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
      ),
      'marvin' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.37',
          'core' => '6.x',
          'base theme' => 'chameleon',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
      ),
      'chameleon' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.37',
        'description' => 'This platform is running Drupal 6.37',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'filename' => './profiles/default/default.profile',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '6.37',
      ),
      'sandbox_profile' => 
      array (
        'name' => 'sandbox_profile',
        'filename' => './profiles/sandbox_profile/sandbox_profile.profile',
        'info' => 
        array (
          'name' => 'Scratchpad Sandbox',
          'description' => 'Provides the Scratchpad Sandbox.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '6.37',
      ),
      'scratchpad_profile' => 
      array (
        'name' => 'scratchpad_profile',
        'filename' => './profiles/scratchpad_profile/scratchpad_profile.profile',
        'info' => 
        array (
          'name' => 'Scratchpad',
          'description' => 'Select this profile to enable a whole suite of modules to make entering biodiversity and taxonomic information on to your site easier.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '6.37',
      ),
      'emonocot_profile' => 
      array (
        'name' => 'emonocot_profile',
        'filename' => './profiles/emonocot_profile/emonocot_profile.profile',
        'info' => 
        array (
          'name' => 'eMonocot Scratchpad',
          'description' => 'Provides a customised Scratchpad for the eMonocot project.',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '6.37',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'notifications_feed' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_feed/notifications_feed.module',
        'basename' => 'notifications_feed.module',
        'name' => 'notifications_feed',
        'info' => 
        array (
          'name' => 'FeedAPI Subscriptions',
          'description' => 'Allows users to subscribe to feeds and be notified when they are updated',
          'package' => 'Notifications',
          'dependencies' => 'notifications feedapi',
          'version' => '6.x-1.1',
          'core' => '6.x',
          'project' => 'notifications',
          'datestamp' => '1233503432',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'notifications_autosubscribe' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_autosubscribe/notifications_autosubscribe.module',
        'basename' => 'notifications_autosubscribe.module',
        'name' => 'notifications_autosubscribe',
        'info' => 
        array (
          'name' => 'Notifications Autosubscribe',
          'description' => 'Provides automatic notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
            1 => 'notifications_content',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_content' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_content/notifications_content.module',
        'basename' => 'notifications_content.module',
        'name' => 'notifications_content',
        'info' => 
        array (
          'name' => 'Content Notifications',
          'description' => 'Allows users to subscribe to content related events.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.3',
      ),
      'notifications_tags' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_tags/notifications_tags.module',
        'basename' => 'notifications_tags.module',
        'name' => 'notifications_tags',
        'info' => 
        array (
          'name' => 'Taxonomy Notifications',
          'description' => 'Allows users to subscribe to taxonomy terms.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications_content',
            1 => 'taxonomy',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_views/notifications_views.module',
        'basename' => 'notifications_views.module',
        'name' => 'notifications_views',
        'info' => 
        array (
          'name' => 'Notifications Views',
          'description' => 'Views integration for Notifications.',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_ui/notifications_ui.module',
        'basename' => 'notifications_ui.module',
        'name' => 'notifications_ui',
        'info' => 
        array (
          'name' => 'Notifications UI',
          'description' => 'Provides an UI to notifications',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.3',
      ),
      'notifications_lite' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications_lite/notifications_lite.module',
        'basename' => 'notifications_lite.module',
        'name' => 'notifications_lite',
        'info' => 
        array (
          'name' => 'Notifications Lite',
          'description' => 'Extra Simple Notifications API. Enable only when required by other modules.',
          'package' => 'Notifications',
          'core' => '6.x',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.3',
      ),
      'notifications' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/notifications/notifications.module',
        'basename' => 'notifications.module',
        'name' => 'notifications',
        'info' => 
        array (
          'name' => 'Notifications',
          'description' => 'The basic notifications framework',
          'package' => 'Notifications',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'token',
          ),
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-2.3',
          'project' => 'notifications',
          'datestamp' => '1287647170',
        ),
        'schema_version' => '6004',
        'version' => '6.x-2.3',
      ),
      'contemplate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/contemplate/contemplate.module',
        'basename' => 'contemplate.module',
        'name' => 'contemplate',
        'info' => 
        array (
          'name' => 'Content Templates',
          'description' => 'Create templates to customize output of teaser and body content.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'contemplate',
          'datestamp' => '1243961728',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '2',
        'version' => '6.x-1.1',
      ),
      'remote_issue_tab' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/remote_issue_tab/remote_issue_tab.module',
        'basename' => 'remote_issue_tab.module',
        'name' => 'remote_issue_tab',
        'info' => 
        array (
          'name' => 'Remote Issue Tab',
          'description' => 'Integrates with the \'Project Issue\' module on another site to display it on this site.',
          'package' => 'EDIT',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'aggregator',
            1 => 'uwho_client',
          ),
          'project' => 'remote_issue_tab',
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.0',
      ),
      'content_copy' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/content_copy/content_copy.module',
        'basename' => 'content_copy.module',
        'name' => 'content_copy',
        'info' => 
        array (
          'name' => 'Content Copy',
          'description' => 'Enables ability to import/export field definitions.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.8',
      ),
      'userreference' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/userreference/userreference.module',
        'basename' => 'userreference.module',
        'name' => 'userreference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-2.8',
      ),
      'fieldgroup' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/fieldgroup/fieldgroup.module',
        'basename' => 'fieldgroup.module',
        'name' => 'fieldgroup',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Create display groups for CCK fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.x-2.8',
      ),
      'content_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/content_permissions/content_permissions.module',
        'basename' => 'content_permissions.module',
        'name' => 'content_permissions',
        'info' => 
        array (
          'name' => 'Content Permissions',
          'description' => 'Set field-level permissions for CCK fields.',
          'package' => 'CCK',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.8',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6003',
        'version' => '6.x-2.8',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.x-2.8',
      ),
      'optionwidgets' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/optionwidgets/optionwidgets.module',
        'basename' => 'optionwidgets.module',
        'name' => 'optionwidgets',
        'info' => 
        array (
          'name' => 'Option Widgets',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.8',
      ),
      'nodereference' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/modules/nodereference/nodereference.module',
        'basename' => 'nodereference.module',
        'name' => 'nodereference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'text',
            2 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.8',
      ),
      'content' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/cck/content.module',
        'basename' => 'content.module',
        'name' => 'content',
        'info' => 
        array (
          'name' => 'Content',
          'description' => 'Allows administrators to define new content types.',
          'package' => 'CCK',
          'core' => '6.x',
          'version' => '6.x-2.8',
          'project' => 'cck',
          'datestamp' => '1281570988',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6010',
        'version' => '6.x-2.8',
      ),
      'help_example' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'version' => '6.x-1.2',
          'project' => 'advanced_help',
          'datestamp' => '1238954409',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.2',
      ),
      'advanced_help' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '6.x',
          'version' => '6.x-1.2',
          'project' => 'advanced_help',
          'datestamp' => '1238954409',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.2',
      ),
      'mollom' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '6.x',
          'version' => '6.x-1.16',
          'project' => 'mollom',
          'datestamp' => '1310217719',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6121',
        'version' => '6.x-1.16',
      ),
      'og_user_roles' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og_user_roles/og_user_roles.module',
        'basename' => 'og_user_roles.module',
        'name' => 'og_user_roles',
        'info' => 
        array (
          'name' => 'Organic groups user roles',
          'description' => 'Assign additional user roles to members of organic groups within the group context.',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'og_views',
          ),
          'package' => 'Organic groups',
          'core' => '6.x',
          'version' => '6.x-4.1',
          'project' => 'og_user_roles',
          'datestamp' => '1268286609',
          'php' => '4.3.5',
        ),
        'schema_version' => '6204',
        'version' => '6.x-4.1',
      ),
      'og_forum' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og_forum/og_forum.module',
        'basename' => 'og_forum.module',
        'name' => 'og_forum',
        'info' => 
        array (
          'name' => 'OG forum',
          'description' => 'Creates forums within organic groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'og',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'ajax_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/ajax_ui/ajax_ui.module',
        'basename' => 'ajax_ui.module',
        'name' => 'ajax_ui',
        'info' => 
        array (
          'name' => 'Ajax ui',
          'description' => 'RECOMMENDED: User Interface for Ajax forms. You will not be able to manage Ajax forms without this module.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.15',
      ),
      'ajax_quicktabs' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/quicktabs/ajax_quicktabs.module',
        'basename' => 'ajax_quicktabs.module',
        'name' => 'ajax_quicktabs',
        'info' => 
        array (
          'name' => 'Ajax plugin - quicktabs',
          'description' => 'Enhances AJAX functionality for quicktabs.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'quicktabs',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/captcha/ajax_captcha.module',
        'basename' => 'ajax_captcha.module',
        'name' => 'ajax_captcha',
        'info' => 
        array (
          'name' => 'Ajax plugin - captcha',
          'description' => 'Enables AJAX functionality with CAPTCHA-enabled forms. This module requires that the patches in \'ajax/plugins/captcha/patches\' be applied to the CAPTCHA module.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'captcha',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_fckeditor' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/fckeditor/ajax_fckeditor.module',
        'basename' => 'ajax_fckeditor.module',
        'name' => 'ajax_fckeditor',
        'info' => 
        array (
          'name' => 'Ajax plugin - fckeditor',
          'description' => 'Enables AJAX functionality for FCKEditor',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'fckeditor',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_comment' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/comment/ajax_comment.module',
        'basename' => 'ajax_comment.module',
        'name' => 'ajax_comment',
        'info' => 
        array (
          'name' => 'Ajax plugin - comment',
          'description' => 'Enables ajax functionality for comment forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'comment',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_tinymce' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/tinymce/ajax_tinymce.module',
        'basename' => 'ajax_tinymce.module',
        'name' => 'ajax_tinymce',
        'info' => 
        array (
          'name' => 'Ajax plugin - tinymce',
          'description' => 'Enables AJAX functionality for tinymce',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'tinymce',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_webform' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/webform/ajax_webform.module',
        'basename' => 'ajax_webform.module',
        'name' => 'ajax_webform',
        'info' => 
        array (
          'name' => 'Ajax plugin - webform',
          'description' => 'Enables AJAX functionality for webforms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'webform',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_disable_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/disable_redirect/ajax_disable_redirect.module',
        'basename' => 'ajax_disable_redirect.module',
        'name' => 'ajax_disable_redirect',
        'info' => 
        array (
          'name' => 'Ajax plugin - disable_redirect',
          'description' => 'Allows form redirections to be disabled for Ajax forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'ajax_ui',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_scroller' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/scroller/ajax_scroller.module',
        'basename' => 'ajax_scroller.module',
        'name' => 'ajax_scroller',
        'info' => 
        array (
          'name' => 'Ajax plugin - scroller',
          'description' => 'RECOMMENDED: Allows a form to scroll up after an Ajax form submission.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_thickbox' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/thickbox/ajax_thickbox.module',
        'basename' => 'ajax_thickbox.module',
        'name' => 'ajax_thickbox',
        'info' => 
        array (
          'name' => 'Ajax plugin - thickbox',
          'description' => 'Enhances AJAX functionality for thickbox.',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_logintoboggan' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/loggintoboggan/ajax_logintoboggan.module',
        'basename' => 'ajax_logintoboggan.module',
        'name' => 'ajax_logintoboggan',
        'info' => 
        array (
          'name' => 'Ajax plugin - logintoboggan',
          'description' => 'Enables AJAX functionality for LoginToboggan forms',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'logintoboggan',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/plugins/wysiwyg/ajax_wysiwyg.module',
        'basename' => 'ajax_wysiwyg.module',
        'name' => 'ajax_wysiwyg',
        'info' => 
        array (
          'name' => 'Ajax plugin - wysiwyg',
          'description' => 'Enables AJAX functionality for wysiwyg API',
          'package' => 'Ajax',
          'dependencies' => 
          array (
            0 => 'ajax',
            1 => 'wysiwyg',
          ),
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.15',
      ),
      'ajax' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/ajax/ajax.module',
        'basename' => 'ajax.module',
        'name' => 'ajax',
        'info' => 
        array (
          'name' => 'Ajax',
          'description' => 'Automatically validates and submits any Drupal form using AJAX.',
          'package' => 'Ajax',
          'core' => '6.x',
          'version' => '6.x-1.15',
          'project' => 'ajax',
          'datestamp' => '1327131337',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.15',
      ),
      'uwho_client' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/uwho/uwho_client.module',
        'basename' => 'uwho_client.module',
        'name' => 'uwho_client',
        'info' => 
        array (
          'name' => 'UWho - Client',
          'description' => 'Provides an easy way of generating the relevant URLs to provide a mechanism to create/signin a user to another site',
          'package' => 'UWho',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'project' => 'uwho',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'uwho_site' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/uwho/uwho_site.module',
        'basename' => 'uwho_site.module',
        'name' => 'uwho_site',
        'info' => 
        array (
          'name' => 'UWho - Site',
          'description' => 'Enables the creation of Users, and automatic logging from a URL.  Security is provided by a key system, which helps to ensure that no unwanted access can be provided',
          'package' => 'UWho',
          'version' => '6.x-1.0',
          'core' => '6.x',
          'project' => 'uwho',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.0',
      ),
      'node_import' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/node_import/node_import.module',
        'basename' => 'node_import.module',
        'name' => 'node_import',
        'info' => 
        array (
          'name' => 'Node import',
          'description' => 'Allows users to import node content from a CSV or TSV file.',
          'package' => 'Development',
          'core' => '6.x',
          'php' => '5',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'advanced_help',
          ),
          'version' => '6.x-1.0-rc4',
          'project' => 'node_import',
          'datestamp' => '1235601068',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.0-rc4',
      ),
      'scratchpad_apply' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpad/scratchpad_apply/scratchpad_apply.module',
        'basename' => 'scratchpad_apply.module',
        'name' => 'scratchpad_apply',
        'info' => 
        array (
          'name' => 'Scratchpad Application form Service',
          'description' => 'Provides the data from the Scratchpad application form.  Used by the Aegir site installer',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'scratchpad' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpad/scratchpad.module',
        'basename' => 'scratchpad.module',
        'name' => 'scratchpad',
        'info' => 
        array (
          'name' => 'Scratchpad',
          'description' => 'Defines whether or not a Drupal site is a Scratchpad. Reports to a central location to enable lists of other Scratchpads, and also to report stats about the site.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'scratchpad',
          'project status url' => 'http://modules.scratchpads.eu',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0',
      ),
      'imce' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '6.x',
          'version' => '6.x-1.4',
          'project' => 'imce',
          'datestamp' => '1275099907',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-1.4',
      ),
      'nagger' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/nagger/nagger.module',
        'basename' => 'nagger.module',
        'name' => 'nagger',
        'info' => 
        array (
          'name' => 'Nagger',
          'description' => 'A module which implements node access AFTER og_access.',
          'package' => 'EDIT',
          'core' => '6.x',
          'project' => 'nagger',
          'project status url' => 'http://modules.scratchpads.eu',
          'version' => '6.x-1.0',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'calendar_ical' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/calendar_ical/calendar_ical.module',
        'basename' => 'calendar_ical.module',
        'name' => 'calendar_ical',
        'info' => 
        array (
          'name' => 'Calendar iCal',
          'description' => 'Adds ical functionality to Calendar views.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'calendar',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'version' => '6.x-2.2',
      ),
      'jcalendar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/jcalendar/jcalendar.module',
        'basename' => 'jcalendar.module',
        'name' => 'jcalendar',
        'info' => 
        array (
          'name' => 'Calendar Popup',
          'description' => 'Replaces the links to calendar items with a javascript popup that gracefully regresses if javascript is not enabled',
          'dependencies' => 
          array (
            0 => 'calendar',
            1 => 'views',
          ),
          'core' => '6.x',
          'package' => 'Date/Time',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.2',
      ),
      'calendar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.2',
          'project' => 'calendar',
          'datestamp' => '1248867038',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-2.2',
      ),
      'twitterscript' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/twitterscript/twitterscript.module',
        'basename' => 'twitterscript.module',
        'name' => 'twitterscript',
        'info' => 
        array (
          'name' => 'Twitter Script (twitterscript)',
          'description' => 'Adds scripts to a page that allows a user to easily embed specific twitter feeds.',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '6.x',
          'recommends' => 
          array (
            0 => 'path_redirect',
          ),
          'version' => '6.x-1.5',
          'project' => 'pathauto',
          'datestamp' => '1286469664',
          'php' => '4.3.5',
        ),
        'schema_version' => '7',
        'version' => '6.x-1.5',
      ),
      'scratchpads_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/scratchpads_migrate/scratchpads_migrate.module',
        'basename' => 'scratchpads_migrate.module',
        'name' => 'scratchpads_migrate',
        'info' => 
        array (
          'name' => 'Scratchpads migrate',
          'description' => 'Migration settings',
          'package' => 'EDIT',
          'core' => '6.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'filefield_meta' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/filefield/filefield_meta/filefield_meta.module',
        'basename' => 'filefield_meta.module',
        'name' => 'filefield_meta',
        'info' => 
        array (
          'name' => 'FileField Meta',
          'description' => 'Add metadata gathering and storage to FileField.',
          'dependencies' => 
          array (
            0 => 'filefield',
            1 => 'getid3',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.12',
          'project' => 'filefield',
          'datestamp' => '1392169125',
        ),
        'schema_version' => '6100',
        'version' => '6.x-3.12',
      ),
      'filefield' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/filefield/filefield.module',
        'basename' => 'filefield.module',
        'name' => 'filefield',
        'info' => 
        array (
          'name' => 'FileField',
          'description' => 'Defines a file field type.',
          'dependencies' => 
          array (
            0 => 'content',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'php' => '5.0',
          'version' => '6.x-3.12',
          'project' => 'filefield',
          'datestamp' => '1392169125',
        ),
        'schema_version' => '6104',
        'version' => '6.x-3.12',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '6.x',
          'package' => 'Webform',
          'php' => '5.1',
          'version' => '6.x-3.20',
          'project' => 'webform',
          'datestamp' => '1392182051',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '6331',
        'version' => '6.x-3.20',
      ),
      'path_redirect_generate' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/path_redirect/generate/path_redirect_generate.module',
        'basename' => 'path_redirect_generate.module',
        'name' => 'path_redirect_generate',
        'info' => 
        array (
          'name' => 'Path redirect generate',
          'description' => 'Bulk create redirects for testing.',
          'package' => 'Development',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'path_redirect',
            1 => 'devel_generate',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0-rc2',
      ),
      'path_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/path_redirect/path_redirect.module',
        'basename' => 'path_redirect.module',
        'name' => 'path_redirect',
        'info' => 
        array (
          'name' => 'Path redirect',
          'description' => 'Redirect users from one URL to another.',
          'core' => '6.x',
          'enhances' => 
          array (
            0 => 'pathauto',
          ),
          'suggests' => 
          array (
            0 => 'global_redirect',
          ),
          'recommends' => 
          array (
            0 => 'elements',
          ),
          'version' => '6.x-1.0-rc2',
          'project' => 'path_redirect',
          'datestamp' => '1291583783',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.0-rc2',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'name' => 'Views exporter',
          'description' => 'Allows exporting multiple views at once.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.16',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6013',
        'version' => '6.x-2.16',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '6.x-2.16',
          'project' => 'views',
          'datestamp' => '1321305946',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.16',
      ),
      'nodereferencebiblio' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/nodereferencebiblio/nodereferencebiblio.module',
        'basename' => 'nodereferencebiblio.module',
        'name' => 'nodereferencebiblio',
        'info' => 
        array (
          'name' => 'Nodereference display as bibliographic citation (nodereferencebiblio)',
          'description' => 'Enable an additional display format for a nodereference field, wherby it is displayed as a bibliographic citation. No checks are done to ensure that the referenced field is of a biblio format.',
          'package' => 'EDIT',
          'dependencies' => 
          array (
            0 => 'nodereference',
            1 => 'biblio',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'content_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy.module',
        'basename' => 'content_taxonomy.module',
        'name' => 'content_taxonomy',
        'info' => 
        array (
          'name' => 'Content Taxonomy',
          'description' => 'Defines a field type for taxonomy terms',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'taxonomy',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => NULL,
      ),
      'content_taxonomy_autocomplete' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy_autocomplete.module',
        'basename' => 'content_taxonomy_autocomplete.module',
        'name' => 'content_taxonomy_autocomplete',
        'info' => 
        array (
          'name' => 'Content Taxonomy Autocomplete',
          'description' => 'Defines a autocomplete widget type for content_taxonomy',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'content_taxonomy',
            2 => 'taxonomy',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'content_taxonomy_options' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_taxonomy/content_taxonomy_options.module',
        'basename' => 'content_taxonomy_options.module',
        'name' => 'content_taxonomy_options',
        'info' => 
        array (
          'name' => 'Content Taxonomy Options',
          'description' => 'Defines a option widget type for content_taxonomy for selects, radios/checkboxes',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'content_taxonomy',
            2 => 'taxonomy',
            3 => 'optionwidgets',
          ),
          'package' => 'CCK',
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'og_notifications' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_notifications/og_notifications.module',
        'basename' => 'og_notifications.module',
        'name' => 'og_notifications',
        'info' => 
        array (
          'name' => 'Organic Groups Notifications',
          'description' => 'Allows users to receive notifications and subscribe to group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'notifications',
            2 => 'notifications_content',
            3 => 'notifications_lite',
            4 => 'messaging',
            5 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.4',
      ),
      'og_access' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private posts and private groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => '6201',
        'version' => '6.x-2.4',
      ),
      'og_actions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_actions/og_actions.module',
        'basename' => 'og_actions.module',
        'name' => 'og_actions',
        'info' => 
        array (
          'name' => 'Organic groups actions',
          'description' => 'Provides actions for use with Organic Groups and Trigger.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'og_views' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/modules/og_views/og_views.module',
        'basename' => 'og_views.module',
        'name' => 'og_views',
        'info' => 
        array (
          'name' => 'Organic groups Views integration',
          'description' => '<strong>Highly recommended.</strong>. Use Views to search and display organic groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'og' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'Enable users to create and manage groups.  OG Views integration module is recommended for best experience.',
          'package' => 'Organic groups',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'og',
          'datestamp' => '1339005718',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6205',
        'version' => '6.x-2.4',
      ),
      'imagefield' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imagefield/imagefield.module',
        'basename' => 'imagefield.module',
        'name' => 'imagefield',
        'info' => 
        array (
          'name' => 'ImageField',
          'description' => 'Defines an image field type.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'filefield',
          ),
          'package' => 'CCK',
          'version' => '6.x-3.7',
          'project' => 'imagefield',
          'datestamp' => '1277942710',
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'version' => '6.x-3.7',
      ),
      'comment_upload' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/comment_upload/comment_upload.module',
        'basename' => 'comment_upload.module',
        'name' => 'comment_upload',
        'info' => 
        array (
          'name' => 'Comment upload',
          'description' => 'Enables file attachments on comments',
          'dependencies' => 
          array (
            0 => 'upload',
          ),
          'core' => '6.x',
          'version' => '6.x-1.0-alpha5',
          'project' => 'comment_upload',
          'datestamp' => '1244253911',
          'php' => '4.3.5',
        ),
        'schema_version' => '6002',
        'version' => '6.x-1.0-alpha5',
      ),
      'commentmail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/commentmail/commentmail.module',
        'basename' => 'commentmail.module',
        'name' => 'commentmail',
        'info' => 
        array (
          'name' => 'Comment Mail',
          'description' => 'Sends an email message when comments are posted to the site.',
          'core' => '6.x',
          'package' => 'Mail',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'version' => '6.x-1.0-beta1',
          'project' => 'commentmail',
          'datestamp' => '1227795306',
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'version' => '6.x-1.0-beta1',
      ),
      'biblio_pm' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio/pubmed/biblio_pm.module',
        'basename' => 'biblio_pm.module',
        'name' => 'biblio_pm',
        'info' => 
        array (
          'name' => 'Biblio - PubMed',
          'description' => 'Adds PubMed import and search to the Biblio module.',
          'core' => '6.x',
          'package' => 'Biblio',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'version' => '6.x-1.17',
          'project' => 'biblio',
          'datestamp' => '1327343438',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.17',
      ),
      'biblio' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio/biblio.module',
        'basename' => 'biblio.module',
        'name' => 'biblio',
        'info' => 
        array (
          'name' => 'Biblio',
          'description' => 'Maintains bibliographic lists.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Biblio',
          'version' => '6.x-1.17',
          'project' => 'biblio',
          'datestamp' => '1327343438',
          'php' => '4.3.5',
        ),
        'schema_version' => '6027',
        'version' => '6.x-1.17',
      ),
      'globalredirect' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'core' => '6.x',
          'version' => '6.x-1.4',
          'project' => 'globalredirect',
          'datestamp' => '1324428084',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6101',
        'version' => '6.x-1.4',
      ),
      'messaging_notify' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_notify/messaging_notify.module',
        'basename' => 'messaging_notify.module',
        'name' => 'messaging_notify',
        'info' => 
        array (
          'name' => 'Message notifications',
          'description' => 'Get notifications about received messages by a different channel',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'notifications',
          ),
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'messaging',
          'datestamp' => '1233503431',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'messaging_twitter' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_twitter/messaging_twitter.module',
        'basename' => 'messaging_twitter.module',
        'name' => 'messaging_twitter',
        'info' => 
        array (
          'name' => 'Twitter Messaging',
          'description' => 'Sending method for messaging that uses Twitter',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'twitter',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_debug' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_debug/messaging_debug.module',
        'basename' => 'messaging_debug.module',
        'name' => 'messaging_debug',
        'info' => 
        array (
          'name' => 'Messaging debug',
          'description' => 'Debugging and development utilities for messaging package.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_xmpp' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_xmpp/messaging_xmpp.module',
        'basename' => 'messaging_xmpp.module',
        'name' => 'messaging_xmpp',
        'info' => 
        array (
          'name' => 'Messaging XMPP',
          'description' => 'XMPP Sending Method: Integration with XMPP Framework',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'xmppframework',
            2 => 'xmpp_user',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_sms' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_sms/messaging_sms.module',
        'basename' => 'messaging_sms.module',
        'name' => 'messaging_sms',
        'info' => 
        array (
          'name' => 'SMS Messaging',
          'description' => 'Sending Method: SMS',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'sms',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_mime_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_mime_mail/messaging_mime_mail.module',
        'basename' => 'messaging_mime_mail.module',
        'name' => 'messaging_mime_mail',
        'info' => 
        array (
          'name' => 'Messaging Mime Mail',
          'description' => 'Mail Sending Method: Integration with Mime Mail module (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'mimemail',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_simple' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_simple/messaging_simple.module',
        'basename' => 'messaging_simple.module',
        'name' => 'messaging_simple',
        'info' => 
        array (
          'name' => 'Simple messaging',
          'description' => 'Sending Method: Show messages on user\'s page',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_phpmailer' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_phpmailer/messaging_phpmailer.module',
        'basename' => 'messaging_phpmailer.module',
        'name' => 'messaging_phpmailer',
        'info' => 
        array (
          'name' => 'Messaging PHPMailer',
          'description' => 'Mail Sending Method: Integration with PHPMailer for HTML Mail',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_mail/messaging_mail.module',
        'basename' => 'messaging_mail.module',
        'name' => 'messaging_mail',
        'info' => 
        array (
          'name' => 'Simple Mail',
          'description' => 'Mail Sending Method: Integration with Drupal mail API',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging_privatemsg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging_privatemsg/messaging_privatemsg.module',
        'basename' => 'messaging_privatemsg.module',
        'name' => 'messaging_privatemsg',
        'info' => 
        array (
          'name' => 'Messaging Privatemsg',
          'description' => 'Sending Method: Integration with Privatemsg (Beta)',
          'package' => 'Messaging',
          'dependencies' => 
          array (
            0 => 'messaging',
            1 => 'privatemsg',
          ),
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.4',
      ),
      'messaging' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/messaging/messaging.module',
        'basename' => 'messaging.module',
        'name' => 'messaging',
        'info' => 
        array (
          'name' => 'Messaging',
          'description' => 'Messaging system. This is the base module for the Messaging Framework',
          'package' => 'Messaging',
          'core' => '6.x',
          'version' => '6.x-2.4',
          'project' => 'messaging',
          'datestamp' => '1297899425',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.x-2.4',
      ),
      'content_profile_registration' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/modules/content_profile_registration.module',
        'basename' => 'content_profile_registration.module',
        'name' => 'content_profile_registration',
        'info' => 
        array (
          'name' => 'Content Profile User Registration',
          'description' => 'Enable content profile features during user registration',
          'package' => 'Content Profile',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'content_profile',
          ),
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-1.x-dev',
      ),
      'content_profile_tokens' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/modules/content_profile_tokens.module',
        'basename' => 'content_profile_tokens.module',
        'name' => 'content_profile_tokens',
        'info' => 
        array (
          'name' => 'Content Profile Tokens',
          'description' => 'Add user tokens for content profiles.',
          'package' => 'Content Profile',
          'dependencies' => 
          array (
            0 => 'content_profile',
            1 => 'token',
            2 => 'content',
          ),
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.x-dev',
      ),
      'content_profile' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/content_profile/content_profile.module',
        'basename' => 'content_profile.module',
        'name' => 'content_profile',
        'info' => 
        array (
          'name' => 'Content Profile',
          'description' => 'Use content types for user profiles.',
          'package' => 'Content Profile',
          'core' => '6.x',
          'version' => '6.x-1.x-dev',
          'project' => 'content_profile',
          'datestamp' => '1279541044',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6004',
        'version' => '6.x-1.x-dev',
      ),
      'jstools' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/jstools/jstools.module',
        'basename' => 'jstools.module',
        'name' => 'jstools',
        'info' => 
        array (
          'name' => 'Javascript tools',
          'description' => 'Provides common JavaScript methods used by other modules.',
          'package' => 'User Interface',
          'core' => '6.x',
          'version' => '6.x-1.0',
          'project' => 'jstools',
          'datestamp' => '1208192722',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0',
      ),
      'femail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/femail/femail.module',
        'basename' => 'femail.module',
        'name' => 'femail',
        'info' => 
        array (
          'name' => 'Forum e-mail (femail)',
          'description' => 'Adds e-mail messages to the forum',
          'dependencies' => 
          array (
            0 => 'forum',
          ),
          'core' => '6.x',
          'version' => '6.x-1.6',
          'project' => 'femail',
          'datestamp' => '1302866215',
          'php' => '4.3.5',
        ),
        'schema_version' => '6103',
        'version' => '6.x-1.6',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a shared API for replacement of textual placeholders with actual data.',
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '1',
        'version' => '6.x-1.18',
      ),
      'token_actions' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/token_actions.module',
        'basename' => 'token_actions.module',
        'name' => 'token_actions',
        'info' => 
        array (
          'name' => 'Token actions',
          'description' => 'Provides enhanced versions of core Drupal actions using the Token module.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.18',
      ),
      'tokenSTARTER' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/token/tokenSTARTER.module',
        'basename' => 'tokenSTARTER.module',
        'name' => 'tokenSTARTER',
        'info' => 
        array (
          'name' => 'TokenSTARTER',
          'description' => 'Provides additional tokens and a base on which to build your own tokens.',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'core' => '6.x',
          'version' => '6.x-1.18',
          'project' => 'token',
          'datestamp' => '1320336935',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.18',
      ),
      'jquery_ui' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/jquery_ui/jquery_ui.module',
        'basename' => 'jquery_ui.module',
        'name' => 'jquery_ui',
        'info' => 
        array (
          'name' => 'jQuery UI',
          'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-1.5',
          'project' => 'jquery_ui',
          'datestamp' => '1308323216',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.5',
      ),
      'vertical_tabs' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/vertical_tabs/vertical_tabs.module',
        'basename' => 'vertical_tabs.module',
        'name' => 'vertical_tabs',
        'info' => 
        array (
          'name' => 'Vertical Tabs',
          'description' => 'Provides vertical tabs for the node form.',
          'core' => '6.x',
          'version' => '6.x-1.0-beta7',
          'project' => 'vertical_tabs',
          'datestamp' => '1251002152',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6102',
        'version' => '6.x-1.0-beta7',
      ),
      'roleassign' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/roleassign/roleassign.module',
        'basename' => 'roleassign.module',
        'name' => 'roleassign',
        'info' => 
        array (
          'name' => 'RoleAssign',
          'description' => 'Allows site administrators to further delegate the task of managing user\'s roles.',
          'core' => '6.x',
          'version' => '6.x-1.0-beta3',
          'project' => 'roleassign',
          'datestamp' => '1240342368',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.0-beta3',
      ),
      'date_timezone' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_timezone/date_timezone.module',
        'basename' => 'date_timezone.module',
        'name' => 'date_timezone',
        'info' => 
        array (
          'name' => 'Date Timezone',
          'description' => 'Needed when using Date API. Overrides site and user timezone handling to set timezone names instead of offsets.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '5200',
        'version' => '6.x-2.9',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_locale' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_locale/date_locale.module',
        'basename' => 'date_locale.module',
        'name' => 'date_locale',
        'info' => 
        array (
          'name' => 'Date Locale',
          'description' => 'Allows the site admin to configure multiple formats for date/time display to tailor dates for a specific locale or audience.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'locale',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-2.9',
      ),
      'date_php4' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_php4/date_php4.module',
        'basename' => 'date_php4.module',
        'name' => 'date_php4',
        'info' => 
        array (
          'name' => 'Date PHP4',
          'description' => 'Emulate PHP 5.2 date functions in PHP 4.x, PHP 5.0, and PHP 5.1. Required when using the Date API with PHP versions less than PHP 5.2.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-2.9',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Defines CCK date/time fields and widgets.',
          'dependencies' => 
          array (
            0 => 'content',
            1 => 'date_api',
            2 => 'date_timezone',
          ),
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'version' => '6.x-2.9',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/date/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '6.x',
          'version' => '6.x-2.9',
          'project' => 'date',
          'datestamp' => '1335549078',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6006',
        'version' => '6.x-2.9',
      ),
      'foundation' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/foundation/foundation.module',
        'basename' => 'foundation.module',
        'name' => 'foundation',
        'info' => 
        array (
          'name' => 'Forum improver',
          'description' => 'Improves the visual appearance of the Forum, without adding ANY extra pizazz',
          'package' => 'EDIT',
          'dependencies' => 
          array (
            0 => 'forum',
          ),
          'core' => '6.x',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'print_mail' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print_mail/print_mail.module',
        'basename' => 'print_mail.module',
        'name' => 'print_mail',
        'info' => 
        array (
          'name' => 'Send by email',
          'description' => 'Provides the capability to send the web page by email',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.17',
      ),
      'print_pdf' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print_pdf/print_pdf.module',
        'basename' => 'print_pdf.module',
        'name' => 'print_pdf',
        'info' => 
        array (
          'name' => 'PDF version',
          'description' => 'Adds the capability to export pages as PDF.',
          'dependencies' => 
          array (
            0 => 'print',
          ),
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'version' => '6.x-1.17',
      ),
      'print' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/print/print.module',
        'basename' => 'print.module',
        'name' => 'print',
        'info' => 
        array (
          'name' => 'Printer-friendly pages',
          'description' => 'Adds a printer-friendly version link to content and administrative pages.',
          'core' => '6.x',
          'package' => 'Printer, email and PDF versions',
          'version' => '6.x-1.17',
          'project' => 'print',
          'datestamp' => '1337901688',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6100',
        'version' => '6.x-1.17',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows users to edit contents with client-side editors.',
          'package' => 'User interface',
          'core' => '6.x',
          'version' => '6.x-2.1',
          'project' => 'wysiwyg',
          'datestamp' => '1268063714',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6200',
        'version' => '6.x-2.1',
      ),
      'biblio_scholar' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/biblio_scholar/biblio_scholar.module',
        'basename' => 'biblio_scholar.module',
        'name' => 'biblio_scholar',
        'info' => 
        array (
          'name' => 'Biblio Scholar',
          'description' => 'Adds Google Scholar metatags to Biblio nodes.',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'biblio',
          ),
          'package' => 'Biblio',
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'imce_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/imce_wysiwyg/imce_wysiwyg.module',
        'basename' => 'imce_wysiwyg.module',
        'name' => 'imce_wysiwyg',
        'info' => 
        array (
          'name' => 'IMCE Wysiwyg API bridge',
          'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
          'package' => 'User interface',
          'core' => '6.x',
          'dependencies' => 
          array (
            0 => 'imce',
            1 => 'wysiwyg',
          ),
          'version' => '6.x-1.1',
          'project' => 'imce_wysiwyg',
          'datestamp' => '1268433606',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'memcache_admin' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/memcache/memcache_admin/memcache_admin.module',
        'basename' => 'memcache_admin.module',
        'name' => 'memcache_admin',
        'info' => 
        array (
          'name' => 'Memcache Admin',
          'description' => 'Adds a User Interface to monitor the Memcache for this site.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.9',
          'project' => 'memcache',
          'datestamp' => '1305178916',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'version' => '6.x-1.9',
      ),
      'memcache' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/memcache/memcache.module',
        'basename' => 'memcache.module',
        'name' => 'memcache',
        'info' => 
        array (
          'name' => 'Memcache',
          'description' => 'High performance integration with memcache.',
          'package' => 'Performance and scalability',
          'core' => '6.x',
          'version' => '6.x-1.9',
          'project' => 'memcache',
          'datestamp' => '1305178916',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.9',
      ),
      'views_bonus_panels' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/panels/views_bonus_panels.module',
        'basename' => 'views_bonus_panels.module',
        'name' => 'views_bonus_panels',
        'info' => 
        array (
          'name' => 'Bonus: Panels',
          'description' => 'Various views style plugins to put views nodes in panels',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'panels',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'views_bonus_export' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/export/views_bonus_export.module',
        'basename' => 'views_bonus_export.module',
        'name' => 'views_bonus_export',
        'info' => 
        array (
          'name' => 'Bonus: Views Export',
          'description' => 'Plugin to export views a couple of formats including Comma Separated Values(CSV), Doc or XML',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
      'views_bonus_paged_feed' => 
      array (
        'filename' => '/var/aegir/platforms/vbrant.eu/sites/all/modules/views_bonus/paged_feed/views_bonus_paged_feed.module',
        'basename' => 'views_bonus_paged_feed.module',
        'name' => 'views_bonus_paged_feed',
        'info' => 
        array (
          'name' => 'Bonus: Paged Feed',
          'description' => 'Like a feed display on it pages. How cool!',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '6.x',
          'version' => '6.x-1.1',
          'project' => 'views_bonus',
          'datestamp' => '1276701909',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'version' => '6.x-1.1',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'sandbox_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'scratchpad_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'emonocot_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
        'theme080' => 
        array (
          'filename' => '/var/aegir/platforms/vbrant.eu/profiles/emonocot_profile/themes/theme080/theme080.info',
          'basename' => 'theme080.info',
          'name' => 'theme080',
          'info' => 
          array (
            'name' => 'theme080',
            'description' => 'this template is made by template-help.com.',
            'version' => '6.4',
            'core' => '6.x',
            'engine' => 'phptemplate',
            'project' => 'drupal',
            'datestamp' => '1202913006',
            'php' => '4.3.5',
            'regions' => 
            array (
              'header' => 'Header',
              'left' => 'Left sidebar',
              'right' => 'Right sidebar',
              'content' => 'content',
              'footer' => 'Footer',
              'custom' => 'Custom',
            ),
          ),
        ),
        'emonocot_sp' => 
        array (
          'filename' => '/var/aegir/platforms/vbrant.eu/profiles/emonocot_profile/themes/emonocot_sp/emonocot_sp.info',
          'basename' => 'emonocot_sp.info',
          'name' => 'emonocot_sp',
          'info' => 
          array (
            'name' => 'emonocot_sp',
            'description' => 'The e-monocot.org theme',
            'core' => '6.x',
            'base theme' => 'theme080',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'emonocot_sp.css',
              ),
            ),
            'regions' => 
            array (
              'left' => 'Left sidebar',
              'right' => 'Right sidebar',
              'header' => 'Header',
              'content' => 'content',
              'footer' => 'Footer',
              'custom' => 'Custom',
            ),
          ),
        ),
      ),
    ),
  ),
);