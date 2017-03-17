
UPDATE db_options
SET option_value = replace(option_value, 'dev.maison-images.eu', 'maison-images.eu')
WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE db_posts
SET guid = replace(guid, 'dev.maison-images.eu','maison-images.eu');

UPDATE db_posts
SET post_content = replace(post_content, 'dev.maison-images.eu', 'maison-images.eu');

UPDATE db_postmeta
SET meta_value = replace(meta_value,'dev.maison-images.eu','maison-images.eu');