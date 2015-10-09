
<?php
//标题
$title   = $_POST['title'];
$author  = $_POST['author'];
$urls    = $_POST['url'];
$blog    = array();

$file_name       = time();
$file_name_json  = $file_name.'.json';
$file            = fopen($file_name_json,"w");
foreach ($urls as $key => $value) {

    $blog['title'] = $value;
    $blog['url']   = $value;        
    fwrite($file, json_encode($blog)."\n");

}
fclose($file);


    $recipe = <<<EOT
# -*- coding:utf-8 -*-
from calibre.web.feeds.recipes import BasicNewsRecipe
import json
class Git_Pocket_Guide(BasicNewsRecipe):
    title = '$title'
    description = '$author'
    cover_url = 'http://upload.jianshu.io/daily_images/images/-yxy6Bo7FmVnyPszqYdF.jpg'
    no_stylesheets = True
    keep_only_tags = [{ 'class': 'article' }]
    
    def read_json(self):
        f = open('/www/web/html2mobi/$file_name_json','r')
        lines = []
        for line in f:
            s          = {}
            t          = json.loads(line)
            s['title'] = t['title']
            s['url']   = t['url']
            lines.append(s)
        f.close
        return lines
    def parse_index(self):

        links = self.read_json()
        ans = [('$title', links)]
        return ans
EOT;

    $file_name_recipe = $file_name.'.recipe';
    $recipe_handle        = fopen($file_name_recipe,"w");
    fwrite($recipe_handle, $recipe);
    fclose($recipe_handle);
    header("Content-type: text/html; charset=utf-8"); 
    $file_name_epub = $file_name.".epub";
    exec('/home/calibre/calibre/ebook-convert '. $file_name_recipe .'  '. $file_name_epub);
    echo "您的电子书新鲜出炉，点击下载<a href= '/".$file_name_epub."''>".$file_name_epub."</a>";    


?>