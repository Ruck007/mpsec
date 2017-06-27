<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('get_image_url'))
{
	function get_image_url($imageFolder, $userImage, $defaultImage)
	{ 
		$imageFile = getcwd()."/".$imageFolder.$userImage;
		$defaultImageFile = getcwd()."/".$imageFolder.$defaultImage;

		if( file_exists($imageFile) && $userImage !== null && strlen($userImage) > 0 )
			$imageSrc = base_url().$imageFolder.$userImage;
		else if( file_exists($defaultImageFile) && $defaultImage !== null && strlen($defaultImage) > 0 )
			$imageSrc = base_url().$imageFolder.$defaultImage;
		else
			$imageSrc = "";
		
		return $imageSrc;
	}
}

if(!function_exists('get_image_type'))
{
	function get_image_type($imageName)
	{ 
		if( strlen($imageName) > 0 )
		{
			$imageNameArray = explode(".", $imageName);
		
			return $imageNameArray[1];
		}
		else
			return null;
	}
}

if(!function_exists('get_value'))
{
	function get_value($value=null, $defaultValue)
	{ 
		if( isset($value) && strlen($value) )
			return $value;
		else
			return $defaultValue;
	}
}

if(!function_exists('upload_file'))
{
	function upload_file($controllerObj, $filesArray, $uploadFieldName, $fileName, $filePath)
	{ 
		if(!empty($filesArray[$uploadFieldName]['name'])){
            $config['upload_path'] = $filePath;
            $config['allowed_types'] = "gif|jpg|png|jpeg|pdf|doc|docx|xml|zip|rar|xls|xlsx|csv";
            $config['file_name'] = $fileName;
                
            //Load upload library and initialize configuration
            $controllerObj->load->library('upload');
            $controllerObj->upload->initialize($config);
                
            if($controllerObj->upload->do_upload($uploadFieldName)){
                $uploadData = $controllerObj->upload->data();
                $uploadFileName = $uploadData['file_name'];
            }
            else
            	$uploadFileName = null;
        }
        else
        	$uploadFileName = null;

        return $uploadFileName;
	}
}

if(!function_exists('get_embed_youtube_url'))
{
	function get_embed_youtube_url($youtubeUrl)
	{ 
		$youtubeUrlArray = explode("/", $youtubeUrl);
		$lastParam = sizeof($youtubeUrlArray) - 1;
		$findStr = "v=";
		if( strpos($youtubeUrlArray[$lastParam], $findStr) > 0 )
		{
			$clipIdPosition = strpos($youtubeUrlArray[$lastParam], $findStr) + strlen($findStr);
			$clipID = substr($youtubeUrlArray[$lastParam], $clipIdPosition, 11);
			$youtubeSrc = "https://www.youtube.com/embed/".$clipID;
		}
		else
			$youtubeSrc = "";
		
		return $youtubeSrc;
	}
}

if(!function_exists('sort_page_into_category'))
{
	function sort_page_into_category($pagesList)
	{ 
		$newPagesList = array();

		foreach($pagesList as $pageInfo)
		{
			$newPagesList[$pageInfo['categoryID']][] = $pageInfo;
		}

		return $newPagesList;
	}
}

if(!function_exists('sort_content_into_page'))
{
	function sort_content_into_page($contentsList)
	{ 
		$newContentsList = array();

		foreach($contentsList as $contentInfo)
		{
			$newContentsList[$contentInfo['pageID']][] = $contentInfo;
		}

		return $newContentsList;
	}
}

if(!function_exists('display_post_date'))
{
	function display_post_date($dateTime)
	{ 
		$monthList = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

		$returnStr = "";
		$dateTimeStamp = strtotime($dateTime);
		$day = date("j", $dateTimeStamp);
		$month = $monthList[date("n", $dateTimeStamp)];
		$year = date("Y", $dateTimeStamp) + 543;
		$returnStr = $day." ".$month." ".$year;

		return $returnStr;
	}
}

if(!function_exists('display_inbox_date_time'))
{
	function display_inbox_date_time($dateTime)
	{ 
		$monthList = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

		$returnStr = "";
		$dateTimeStamp = strtotime($dateTime);
		$day = date("j", $dateTimeStamp);
		$month = $monthList[date("n", $dateTimeStamp)];
		$year = date("Y", $dateTimeStamp) + 543;
		$time = date("H:i", $dateTimeStamp);
		$returnStr = "วันที่ ".$day." ".$month." ".$year."<br />เวลา ".$time." น.";

		return $returnStr;
	}
}

if(!function_exists('create_web_page_url'))
{
	function create_web_page_url($pageInfo)
	{ 
		$returnStr = "";

		$createTime = strtotime($pageInfo['createdDate']);
		$year = date("Y", $createTime);
		$month = date("m", $createTime);
		$day = date("d", $createTime);
		//$returnStr = base_url()."page/".$year."/".$month."/".$day."/".$pageInfo['pageFriendlyUrl'];
		$returnStr = base_url()."page/detail/".$pageInfo['pageFriendlyUrl'];

		return $returnStr;
	}
}

if(!function_exists('create_web_content_url'))
{
	function create_web_content_url($contentInfo)
	{ 
		$returnStr = "";

		$createTime = strtotime($contentInfo['createdDate']);
		$year = date("Y", $createTime);
		$month = date("m", $createTime);
		$day = date("d", $createTime);
		$returnStr = base_url()."page/detail/content/".$year."/".$month."/".$day."/".$contentInfo['contentFriendlyUrl'];

		return $returnStr;
	}
}

if(!function_exists('get_data_from_query_array'))
{
	function get_data_from_query_array($queryArray, $dataName)
	{ 
		$returnStr = "";

		foreach( $queryArray as $queryInfo )
		{
			if( isset($queryInfo[$dataName]) )
			{
				if( strlen($returnStr) > 0 )
					$returnStr.= ", ".$queryInfo[$dataName];
				else
					$returnStr = $queryInfo[$dataName];
			}
		}

		return $returnStr;
	}
}



/* End of file login_helper.php */
/* Location: ./application/helpers/login_helper.php */