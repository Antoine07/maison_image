
UPDATE db_options
SET option_value = (replace(option_value, 'http://www.dev.maison-image.eu', 'http://www.maison-images.eu'))
WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE db_posts
SET guid = (replace(guid, 'http://www.dev.maison-image.eu','http://www.maison-images.eu'));

UPDATE db_posts
SET post_content = (replace(post_content, 'http://www.dev.maison-image.eu', 'http://www.maison-images.eu'));

UPDATE db_postmeta
SET meta_value = (replace(meta_value,'http://www.dev.maison-image.eu','http://www.maison-images.eu'));