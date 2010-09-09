CREATE TABLE `jos_slideshow_images` (
  `slideshow_image_id` SERIAL,
  `title` varchar(128) NOT NULL default '',
  `filename` varchar(128) NOT NULL default '',
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  
  `slideshow_category_id` bigint(20) unsigned NOT NULL default '0',
  
  PRIMARY KEY  (`slideshow_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `jos_slideshow_categories` (
  `slideshow_category_id` SERIAL,
  `title` varchar(128) NOT NULL default '',
  
  PRIMARY KEY  (`slideshow_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE OR REPLACE VIEW `jos_slideshow_view_images` AS
select tbl.*, c.title as slideshow_category_title
from `jos_slideshow_images` as tbl
left join `jos_slideshow_categories` as c on c.slideshow_category_id=tbl.slideshow_category_id;