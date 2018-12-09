<?php

use think\Db;

Class Test {
	public function getWeather($cityName){
		//$result_set = DB::table('ins_county')->where('county_name', $cityName)->select();
		//$cityCode = $result_set['weather_code'];
		$url = 'http://wthrcdn.etouch.cn/weather_mini?city=' . $cityName;
		$content = file_get_contents($url);
      	$content = gzdecode($content);
      	//var_dump($content);
      	$obj = (array) json_decode($content, true);
      	//var_dump($obj);
      	$str = "(地点：" . $obj["data"]["city"] . ")" .
          "(时间：" . $obj["data"]["forecast"][0]["date"] . ")" .
          "(天气：" .  $obj["data"]["forecast"][0]["type"] . ")" .
          "(温度：" .  $obj["data"]["wendu"] . "℃)";
      	return $str;
      	//var_dump($str);
	}
}