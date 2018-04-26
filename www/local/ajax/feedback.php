<?	
if (isset($_POST['user_name']) || isset($_POST['user_lastid']) ||
		isset($_POST['MESSAGE']) || isset($_POST['user_name_required'])) { 
		
		$CUR_TIME =	date("d.m.Y H:i:s");	
		$LASTID = $_POST['user_lastid'];

		$MESSAGE = (isset($_POST['MESSAGE'])) ? $_POST['MESSAGE'] : $_POST['MESSAGE_required'];

		$ERR = "";

		if(!$LASTID){

			$TEL = $_POST['user_tel'];
			$NAME = (isset($_POST['user_name'])) ? $_POST['user_name'] : $_POST['user_name_required'];
			$EMAIL = (isset($_POST['user_email'])) ? $_POST['user_email'] : $_POST['user_email_required'];

			if (isset($_POST['user_name_required']) && strlen($NAME) == 0) $ERR .= "<b>Имя</b><br>";		
			if (isset($_POST['user_email_required']) && strlen($EMAIL) == 0) $ERR .= "<b>Email</b><br>";
			if (isset($_POST['MESSAGE_required']) && strlen($MESSAGE) == 0) $ERR .= "<b>Сообщение</b><br>";			
		}
		else {
			if (isset($_POST['MESSAGE_required']) && strlen($MESSAGE) == 0) $ERR .= "<b>Сообщение</b><br>";
		}

		if (strlen($ERR) != 0) {
			$ERR = "<div class='error'>Не заполнены обязательные поля:<br>".$ERR."</div>";
			echo $ERR;
		}
		else{
			require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");	
			CModule::IncludeModule('iblock');
			global $APPLICATION;
			$iblock_id = 5;
			$el = new CIBlockElement;
			$PROP = array();

			if(!$LASTID) {
			 
			    $section_id = false;
			    $section_id[$i] = $_POST['section_id']; 			    

			    $PROP['EMAIL'] = $EMAIL; 
			    $PROP['TEL'] = $TEL; 
			   
			    $fields = array(
			        "DATE_CREATE" => $CUR_TIME, 
			        "CREATED_BY" => $GLOBALS['USER']->GetID(),    
			        "IBLOCK_ID" => $iblock_id,
			        "PROPERTY_VALUES" => $PROP, 
			        "NAME" => $NAME,
			        "ACTIVE" => "Y", 
            		"DATE_ACTIVE_FROM"  => $CUR_TIME,  
			        "PREVIEW_TEXT" => $MESSAGE 
			    );
			    			    
			    if ($ID = $el->Add($fields)) {
			        echo "Ваш запрос отправлен. Номер обращения: ". $ID;
			    }		
			}
			else {
												
				$res = CIBlockElement::GetByID($LASTID);
				if($ar_res = $res->GetNext()){
					$NEW_MESS = strip_tags($ar_res['PREVIEW_TEXT']) ."\n==================================\nДобавлено ". $CUR_TIME ."\n". $MESSAGE ."\n";

					$arLoadProductArray = Array(
					  "MODIFIED_BY"    => $USER->GetID(), 
					  "DATE_ACTIVE_FROM"  => $CUR_TIME,  
					  "PREVIEW_TEXT" =>  $NEW_MESS 
				  	);	
					
					$res = $el->Update($LASTID, $arLoadProductArray);
					echo "Ваш запрос обновлен. Номер обращения: ". $LASTID;
				}
				else{
					echo "Такого обращения нет!";
				}
			}
		}			
}
?>