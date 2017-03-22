
UPDATE db_options
SET option_value = (replace(option_value, 'http://www.maison-images.eu', 'http://www.maison-image.eu'))
WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE db_posts
SET guid = (replace(guid, 'http://www.maison-images.eu','http://www.maison-image.eu'));

UPDATE db_posts
SET post_content = (replace(post_content, 'http://www.maison-images.eu', 'http://www.maison-image.eu'));

UPDATE db_postmeta
SET meta_value = (replace(meta_value,'http://www.maison-images.eu','http://www.maison-image.eu'));