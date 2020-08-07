<?php

function serializeData($data) {
	return base64_encode(gzcompress(serialize($data),9));
}

function unserializeData($data) {
	return unserialize(gzuncompress(base64_decode($data)));
}

function thaibahttext($input){
	$input_number = $input;

	$digit=array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ','สิบเอ็ด');
	$digit2=array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');

	$explode_number = explode(".",$input_number);
	$num0=$explode_number[0]; // เลขจำนวนเต็ม
	$num1=isset($explode_number[1]) ? $explode_number[1] : NULL; // หลักทศนิยม


	// เลขจำนวนเต็ม
	$didit2_chk=strlen($num0)-1;
	$bathtext = '';
	for($i=0;$i<=strlen($num0)-1;$i++){
	 
	  $cut_input_number=substr($num0,$i,1);
	  
	  if($cut_input_number==0){ // ถ้าเลข 0 ไม่ต้องใส่ค่าอะไร
	   $bathtext.=''."".$digit2[$didit2_chk]; 
	  }elseif($cut_input_number==2 && $didit2_chk==1){ // ถ้าเลข 2 อยู่หลักสิบ
	   $bathtext.='ยี่'."".$digit2[$didit2_chk]; 
	  }elseif($cut_input_number==1 && $didit2_chk==1){ // ถ้าเลข 1 อยู่หลักสิบ
	   $bathtext.= ''."".$digit2[$didit2_chk]; 
	  }elseif($cut_input_number==1 && $didit2_chk==0){ // ถ้าเลข 1 อยู่หลักหน่วย
	   if(substr($num0,$i-1,1)==0){
		$bathtext.= 'หนึ่ง'."".$digit2[$didit2_chk];
	   }else{
		$bathtext.= 'เอ็ด'."".$digit2[$didit2_chk];
	   } 
		 
	  }else{
	   $bathtext.= $digit[$cut_input_number]."".$digit2[$didit2_chk];
	  }
	  
	  
	  $didit2_chk=$didit2_chk-1;
	}
	$bathtext.='บาทถ้วน';
	return $bathtext;
}

function base64url_encode($data) { 
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
} 

function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
}

function get_clientip(){
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
}

function TimeAgo($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function GETmod($query,$data=null,$url = null){
	$uri = !empty($url) ? $url : $_SERVER['REQUEST_URI'];
	$explode = explode('?', $uri);
	if(isset($explode[1])){ //  isset ?
		$uri = !empty($url) ? $url : basename($_SERVER['PHP_SELF']).'?';
		if(!empty($explode[1])){ //  ?xxxx
			$amount = count($_GET);
			$amountquery = is_array($query) ? count($query) : null;
			$result = '';
			$check = 0;
			$i = 0;
			if(is_array($query)){
				$m = 0;
				$checkreplace = 0;
				if(count($query) >= count($_GET)){
					foreach($query as $q2 => $d2){
						$m++;
							$rs = '';
							foreach($_GET as $qname => $qdata){
								$loop = $qname == $q2 ? $q2.'='.$d2 : '';
								$rs .= $loop;
							}
							$result .= !empty($rs) ? $rs : $q2.'='.$d2;
							$i++;
						if($m < $amountquery){
							$result .= '&';
						}
					}
				}else{
					foreach($_GET as $q2 => $d2){
						$m++;
							$rs = '';
							foreach($query as $qname => $qdata){
								$loop = $qname == $q2 ? $qname.'='.$qdata : '';
								$rs .= $loop;
							}
							$result .= !empty($rs) ? $rs : $q2.'='.$d2;
							$i++;
						if($m < $amount){
							$result .= '&';
						}
					}
				}
			}else{
				foreach($_GET as $qname => $qdata){
					$i++;
						$result .= $qname == $query ? $query.'='.$data : $qname.'='.$qdata;
						$check = $qname == $query ? $check+1 : $check;
					if($i < $amount){
						$result .= '&';
					}
				}
			}
			parse_str($result,$array);
			$return = $check == 0 && !is_array($query) ? $result.'&'.$query.'='.$data : $result;
			return $uri.$return;
		}else{ //  ?......
			return $uri.$query.'='.$data;
		}
	}else{ //  NOT isset ?
		return $uri.'?'.$query.'='.$data;
	}
}

function GETremove($query, $url=null){
	$uri = !empty($url) ? $url : $_SERVER['REQUEST_URI'];
	$explode = explode('?', $uri);
	if(isset($explode[1])){ //  isset ?
		$uri = !empty($url) ? $url : basename($_SERVER['PHP_SELF']).'?';
		if(!empty($explode[1])){ //  ?xxxx
			$amount = count($_GET);
			$result = '';
			$checkdel = 0;
			$remove = 0;
			$i = 0;
			foreach($_GET as $qname => $qdata){
				$i++;
				$check = $qname == $query ? 1 : 0;
				if($i > 1 && $i <= $amount){
					if($i == 2 && $checkdel > 0){
						$result .= '';
						$checkdel = 0;
					}else{
						if($check > 0){
							$result .= '';
						}else{
							$result .= '&';
						}
					}
				}
				$result .= $qname == $query ? '' : $qname.'='.$qdata;
				$checkdel .= $qname == $query ? 1 : $checkdel;
			}
			parse_str($result,$array);
			return $uri.$result;
		}
	}
}

function GETreturn($url=null){
	return empty($url) ? basename($_SERVER['REQUEST_URI']) : $url;
}

function PRINTR($input){
	echo '<pre>'.print_r($input,TRUE).'</pre>';
}

function POST($post){
	foreach($post as $key => $val){
		echo '$'.$key.' = $_POST["'.$key.'"];<br/>';
	}
}

function POSTesc($post){
	foreach($post as $key => $val){
		echo '$'.$key.' = mysqli_real_escape_string($dbc,$_POST["'.$key.'"]);<br/>';
	}
}

function ifTrueEcho($title,$text,$output)
{
	if($title == $text){
		echo $output;
	}
}

function Tel($tel){
	$num = array(
		substr($tel, 0, 3),
		substr($tel, 3, 3),
		substr($tel, 6, 4),
	);
	return $num[0].'-'.$num[1].'-'.$num[2];
}

function IDcard($id){
	$idnum = strlen((string)$id);
	if($idnum == 13){
		return substr($id,0,1).'-'.substr($id,1,4).'-'.substr($id,5,5).'-'.substr($id,10,2).'-'.substr($id,12,1);
	}else{
		return $id;
	}
}

function THdate($strDate){
	if($strDate != '-' && $strDate != '0' && !empty($strDate)){
		if (strpos($strDate, '/') !== false) {
			$strDate = explode("/",$strDate);
			if(strlen((string)$strDate[0]) == 4){
				$strDate['date'] = $strDate[2];
				$strDate['month'] = $strDate[1];
				$strDate['year'] = $strDate[0];
			}else{
				$strDate['date'] = $strDate[0];
				$strDate['month'] = $strDate[1];
				$strDate['year'] = $strDate[2];
			}
		}elseif (strpos($strDate, '-') !== false) {
			$strDate = explode("-",$strDate);
			if(strlen((string)$strDate[0]) == 4){
				$strDate['date'] = $strDate[2];
				$strDate['month'] = $strDate[1];
				$strDate['year'] = $strDate[0];
			}else{
				$strDate['date'] = $strDate[0];
				$strDate['month'] = $strDate[1];
				$strDate['year'] = $strDate[2];
			}
		}
		if($strDate['year'] >= 2300){$strDate['year'] = $strDate['year'] - 543;}
		$strYear = $strDate['year']+543;
		$strMonth= (int)$strDate['month'];
		$strDay= $strDate['date'];
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai = $strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}else{
		return $strDate;
	}
}

	
function THyear($strYear)
	{
		$strYear += 543;
		return "$strYear";
	}

function THdatetime($strDate, $format = 'datetime', $type = 'short')
{
	$thMonths = array('', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
	$thShortMonths = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    if ($format === 'datetime') {
        $arr = explode(' ', $strDate);
        $strDate = $arr[0];
        if (isset($arr[1])) {
            $time = $arr[1];
            $timeArr = explode(':', $time);
            $time = $timeArr[0].':'.$timeArr[1];
        }
    }
    $dateArr = explode('-', $strDate);
    $y = (int) $dateArr[0];
    $m = (int) $dateArr[1];
    $d = (int) $dateArr[2];
    if ($y <= 2300) $y += 543;
    return $d . ' ' . ($type === 'long' ? $thMonths[$m] : $thShortMonths[$m]) . ' ' . $y.(isset($time) ? ', '.$time.' น.' : '');
}

// function THdatetime($strDate, $format='datetime') {
// 	if(!empty($strDate) && $strDate != '-'){
// 		if(date("Y",strtotime($strDate)) >= 2300){
// 			$year = date("Y",strtotime($strDate)) - 543;
// 		}else{
// 			$year = date("Y",strtotime($strDate));
// 		}
// 		$strYear = $year+543;
// 		$strMonth= date("n",strtotime($strDate));
// 		$strDay= date("j",strtotime($strDate));
// 		$strHour= date("H",strtotime($strDate));
// 		$strMinute= date("i",strtotime($strDate));
// 		$strSeconds= date("s",strtotime($strDate));
// 		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
// 		$strMonthThai=$strMonthCut[$strMonth];
// 		if($format == 'datetime'){
// 			return "$strDay $strMonthThai $strYear, $strHour:$strMinute น.";
// 		}elseif($format == 'date'){
// 			return "$strDay $strMonthThai $strYear";
// 		}else{
// 			return false;
// 		}
// 	}else{
// 		return $strDate;
// 	}
// }

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function trim_text($input,$width) {
	if(empty($input)) return $input ;
	
	if (strlen($input) <= $width) {
		return $input;
	}
	
	$output = substr($input,0,$width);
	
	//normals words are seldom more than 30 chars
	$pos = 0 ;
	$found = false ;
	
	for($i = $width ; $i >= 0 ; $i--) {
		 if(ctype_space($output[$i])) {
			$found = true ;
			break ;
		 }
		 $pos++ ;
	}
	
	if($found && ($pos > 0)) {
		$output = substr($output,0,($width-$pos));
		$output = rtrim($output) ;
	}
	
	$output .= '...' ;
	return $output;
	
}

function short($string, $max = 255){
   if(mb_strlen($string, 'utf-8') >= $max){
       $string = mb_substr($string, 0, $max - 5, 'utf-8').'...';
   } return $string;
}
?>
