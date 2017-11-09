<?php
/**
 * 初次写爬虫程序
 * 也就是为了好玩，哈哈
 * 希望可以有一个新的突破
 * 也希望可以留给别人一个好的例子，哈哈
 * 
 *逻辑：打开种子网页-》获取内容-》抓取页面的URL-》写到文件里面并且打开这个url重复前面的操作
 *
 * PS：真的写得很烂，哈哈哈
 */


/**
 * 开始程序
 * 
 * @param string $web_content 
 * @return array 
 */
function startPoj($condition) {
    $url = $condition['url'];
    //访问某一网页
    $content = file_get_contents($url);
//  print_r($content);
    //抓取其URL内容
    $urlArr = getHtml($content);
//  print_r($urlArr[0]);
    foreach($urlArr[1] as $k=>$v){
//      print_r($v);
//      echo "</br>";
        $file = fopen($arr['file'], "a");
        fwrite($file, $v);
        fclose($file);
        $arr = array();
        $arr['url'] = $v;
        $arr['file'] = "test01.txt";
        startPoj($arr);
    }
       
} 

function getHtml($content){
    $reg_tag_a = '/<[a|A].*?href=[\'\"]{0,1}([^>\'\"\ ]*).*?>/';
    $la = preg_match_all($reg_tag_a,$content,$martch);
    return $martch; 
}

$arr = array();
$arr['url'] = "http://www.hao123.com";
$arr['file'] = "test01.txt";
startPoj($arr);



