<?php
if (!defined('ABSPATH')) die('No direct access allowed');

$GLOBALS['wpo_cache_config'] = json_decode('{"enable_page_caching":true,"page_cache_length_value":24,"page_cache_length_unit":"hours","page_cache_length":86400,"cache_exception_conditional_tags":[""],"cache_exception_urls":[""],"cache_exception_cookies":[""],"cache_exception_browser_agents":[""],"enable_sitemap_preload":false,"enable_schedule_preload":"0","preload_schedule_type":"wpo_use_cache_lifespan","enable_mobile_caching":"0","enable_user_caching":"0","site_url":"http:\\/\\/localhost\\/Planty\\/wordpress\\/","enable_cache_per_country":false,"permalink_structure":"\\/%year%\\/%monthnum%\\/%day%\\/%postname%\\/","uploads":"C:\\/MAMP\\/htdocs\\/Planty\\/wordpress\\/wp-content\\/uploads","gmt_offset":1,"timezone_string":"Europe\\/Paris","date_format":"d\\/m\\/Y","time_format":"H:i","use_webp_images":false,"enable_browser_cache":"false","browser_cache_expire_days":"28","browser_cache_expire_hours":"0","wpo_cache_cookies":[],"wpo_cache_query_variables":[]}', true);