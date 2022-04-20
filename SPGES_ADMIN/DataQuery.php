<?php
	require("conn.php");

	$mode = $_REQUEST['mode'];

	if($mode=="AddNewSemester"){
		$ASem_Value = $_REQUEST['ASem_Value'];

		$ASem = mysqli_query($conn, "INSERT INTO `tbl_semester`(`semester`) VALUES ('$ASem_Value')");
			if($ASem === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if ($mode == "EditSemester"){
		$ESemID = $_REQUEST['SemID'];
		$ESem   = $_REQUEST['ESem'];

		$EdSem = mysqli_query($conn, "UPDATE `tbl_semester` SET `semester` = '$ESem' WHERE `semID` = '$ESemID'");
			if($EdSem === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode == "DelSemester"){
		$DSemID = $_REQUEST['DSemID'];

		$DSem = mysqli_query($conn, "DELETE FROM `tbl_semester` WHERE `semID` = '$DSemID'");
			if(!$DSem){
				echo 0;
			}else{
				echo 3;
			}
	}else if($mode == "AddNewSy"){
		$ASy_Value = $_REQUEST['ASy_Value'];

		$ASy = mysqli_query($conn, "INSERT INTO `tbl_schoolyear`(`schoolYear`)VALUES('$ASy_Value')");
			if($ASy === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if($mode == "EditSy"){
		$ESyID = $_REQUEST['ESyID'];
		$ESy   = $_REQUEST['ESy'];

		$EdSy = mysqli_query($conn, "UPDATE `tbl_schoolyear` SET `schoolYear` = '$ESy' WHERE `syID` = '$ESyID'");
			if($EdSy === TRUE){
				echo 2;
			}else{
				echo 0;
			};

	}else if ($mode == "DelSy"){
		$DSyID = $_REQUEST['DSyID'];

		$DSy = mysqli_query($conn, "DELETE FROM `tbl_schoolyear` WHERE `syID` = '$DSyID'");
			if(!$DSy){
				echo 0;
			}else{
				echo 3;
			}
	}else if ($mode == "AddNewYear"){
		$AYear_Val = $_REQUEST['AYear'];

		$AYear = mysqli_query($conn, "INSERT INTO `tbl_year`(`yearLevel`)VALUES('$AYear_Val')");
			if($AYear === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if ($mode == "EditYear"){
		$EYearID   = $_REQUEST['EYearID'];
		$EYear_val = $_REQUEST['EYear'];

		$EYear = mysqli_query($conn, "UPDATE `tbl_year` SET `yearLevel` = '$EYear_val' WHERE `yearID` = '$EYearID'");
			if($EYear === TRUE){
				echo 2;
			}else{
				echo 0;
			};

	}else if ($mode =="DelYear"){
		$DYearID = $_REQUEST['DYearID'];

		$DYear = mysqli_query($conn, "DELETE FROM `tbl_year` WHERE `yearID` = '$DYearID'");
			if(!$DYear){
				echo 0;
			}else{
				echo 3;
			}
	}else if ($mode == "EditPeriod"){
		$EPerID = $_REQUEST['EPerID'];
		$ESem	= $_REQUEST['ESem'];
		$ESy 	= $_REQUEST['ESy'];

		$EPeriod = mysqli_query($conn, "UPDATE `tbl_currperiod` SET `curSem` = '$ESem', `curSy` = '$ESy'  WHERE `curID` = '$EPerID'");
			if($EPeriod === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode == "AddNewUser"){
		$AFName = $_REQUEST['AFName'];
		$ALName = $_REQUEST['ALName'];
		$AUName = $_REQUEST['AUName'];
		$APass	= password_hash($_REQUEST['APass'], PASSWORD_DEFAULT);

		$AUser = mysqli_query($conn, "INSERT INTO `tbl_user`(`fname`,`lname`,`userName`,`passWord`)VALUES('$AFName','$ALName','$AUName','$APass')");
			if($AUser === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if ($mode == "EditUser"){
		$EUserID 	= $_REQUEST['EUserID'];
		$EFname		= $_REQUEST['EFname'];
		$ELname 	= $_REQUEST['ELname'];
		$EUname 	= $_REQUEST['EUname'];
		$EPass 		= $_REQUEST['EPass'];

		$EUser = mysqli_query($conn, "UPDATE `tbl_user` SET `fname` = '$EFname', `lname` = '$ELname', `userName` = '$EUname', `passWord` = '$EPass'  WHERE `userID` = '$EUserID'");
			if($EUser === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode =="DelUser"){
		$DUserID = $_REQUEST['DUserID'];

		$DYear = mysqli_query($conn, "DELETE FROM `tbl_user` WHERE `userID` = '$DUserID'");
			if(!$DYear){
				echo 0;
			}else{
				echo 3;
			}
	}else if ($mode == "AddNewCurriculum"){
		$ACurr 	 = $_REQUEST['ACurr'];
		$ASy		 = $_REQUEST['ASy'];

		$ACur = mysqli_query($conn, "INSERT INTO `tbl_curriculum`(`curriculum`,`schoolyear`)VALUES('$ACurr','$ASy')");
			if($ACur === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if ($mode =="DelCur"){
		$DCurID = $_REQUEST['DCurID'];

		$DCur = mysqli_query($conn, "DELETE FROM `tbl_curriculum` WHERE `curriculumID` = '$DCurID'");
			if(!$DCur){
				echo 0;
			}else{
				echo 3;
			}
	}else if ($mode == "EditCur"){
		$ECurID 	= $_REQUEST['ECurID'];
		$ECurr		= $_REQUEST['ECurr'];
		$ESy			= $_REQUEST['ESy'];

		$ECur = mysqli_query($conn, "UPDATE `tbl_curriculum` SET `curriculum` = '$ECurr', `schoolyear` = '$ESy' WHERE `curriculumID` = '$ECurID'");
			if($ECur === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode == "AddNewCourse"){
		$AId 	= $_REQUEST['Aid'];
		$ACode 	= $_REQUEST['code'];
		$ATitle = $_REQUEST['title'];
		$AUnit	= $_REQUEST['unit'];
		$ASem	= $_REQUEST['sem'];
		$AYear	= $_REQUEST['year'];

		$ACourse = mysqli_query($conn, "INSERT INTO `tbl_subject`(`courseSem`,`yearLevel`,`courseCode`,`courseDesc`,`courseUnit`,`currID`)VALUES('$ASem','$AYear','$ACode','$ATitle','$AUnit','$AId')");
			if($ACourse === TRUE){
				echo 1;
			}else{
				echo 0;
			};
	}else if ($mode =="DelCourse"){
		$DCourseID = $_REQUEST['DCourseID'];

		$DCourse = mysqli_query($conn, "DELETE FROM `tbl_subject` WHERE `subjID` = '$DCourseID'");
			if(!$DCourse){
				echo 0;
			}else{
				echo 3;
			}
	}else if ($mode == "EditCourse"){
		$ECourseID 	= $_REQUEST['ECourseID'];
		$ECode		= $_REQUEST['ECode'];
		$ETitle 	= $_REQUEST['ETitle'];
		$EUnit 		= $_REQUEST['EUnit'];
		$ESem 		= $_REQUEST['ESem'];
		$EYear 		= $_REQUEST['EYear'];

		$ECur = mysqli_query($conn, "UPDATE `tbl_subject` SET `courseSem` = '$ESem',`yearLevel` = '$EYear',`courseCode` = '$ECode',`courseDesc` = '$ETitle',`courseUnit` = '$EUnit'  WHERE `subjID` = '$ECourseID'");
			if($ECur === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode == "EditGrade"){
		$EGID 	= $_REQUEST['EGID'];
		$EGrade	= $_REQUEST['EGrade'];

		$EGrad = mysqli_query($conn, "UPDATE `tbl_egrade` SET `gradeCQ` = '$EGrade' WHERE `gradeID` = '$EGID'");
			if($EGrad === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode =="DelProfile"){
		$DProfID = $_REQUEST['DProfID'];

		$DProfile = mysqli_query($conn, "DELETE FROM `tbl_stdprofile` WHERE `recID` = '$DProfID'");
			if(!$DProfile){
				echo 0;
			}else{
				echo 3;
			}
	}else if($mode == "NewRegister"){
		$studNo 	= $_REQUEST['studNo'];
		$lName 		= $_REQUEST['lName'];
		$fName 		= $_REQUEST['fName'];
		$mName 		= $_REQUEST['mName'];
		$extName 	= $_REQUEST['extName'];
		$street		= $_REQUEST['street'];
		$brgy			= $_REQUEST['brgy'];
		$city 		= $_REQUEST['city'];
		$prov 		= $_REQUEST['prov'];
		$address 	= $street .", ". $brgy .", ". $city .", ". $prov;
		$zip 			= $_REQUEST['zip'];
		$count 		= $_REQUEST['count'];
		$email 		= $_REQUEST['email'];
		$mobile 	= $_REQUEST['mobile'];
		$pbirth	 	= $_REQUEST['pbirth'];
		$bday 		= $_REQUEST['bDate'];
		$citi	 	 	= $_REQUEST['citi'];
		$stat 		= $_REQUEST['stat'];
		$sex 			= $_REQUEST['sex'];
		$occu 		= $_REQUEST['occu'];
		$empName 	= $_REQUEST['empName'];
		$estreet 	= $_REQUEST['estreet'];
		$ebrgy 		= $_REQUEST['ebrgy'];
		$ecity 		= $_REQUEST['ecity'];
		$eprov 		= $_REQUEST['eprov'];
		$Eaddress = $estreet .", ". $ebrgy .", ". $ecity .", ". $eprov;
		$ezip 		= $_REQUEST['ezip'];
		$ecount 	= $_REQUEST['ecount'];
		$emobile 	= $_REQUEST['emobile'];
		$plans		= $_REQUEST['plan'];
		$sem 			= $_REQUEST['sem'];
		$sy				= $_REQUEST['sy'];
		$pic			= "user.png";

			$validate = mysqli_query($conn, "SELECT * FROM tbl_stdprofile WHERE `studID` = '$studNo'");
				if(mysqli_num_rows($validate) > 0){
					echo 3;
				}else{
					$cur = mysqli_query($conn,"SELECT * FROM tbl_curriculum WHERE `schoolyear` = '$sy'");
					if(mysqli_num_rows($cur) > 0 ){
						while($row = mysqli_fetch_array($cur)){
							$curID = $row['curriculumID'];
						}
					}else{
						$curID = "0";
					}

					$reg = mysqli_query($conn,"INSERT INTO `tbl_stdprofile`
																		(`studID`, `lastName`, `firstName`, `middleName`, `extName`, `mailingAdd`, `mzipcode`, `mcountry`, `mobileno`, `birthPlace`, `dateofBirth`, `Citizenship`, `Sex`, `civilStatus`, `occupation`, `employer`, `empAdd`, `empzip`, `empcountry`, `empmobile`, `semester`, `schoolyear`,  `compplan`, `curriculumID`, `emailAdd`, `piclink`)
																		VALUES
																		('$studNo','$lName','$fName','$mName','$extName','$address','$zip','$count','$mobile','$pbirth','$bday','$citi','$sex','$stat','$occu','$empName','$Eaddress','$zip','$ecount','$emobile','$sem','$sy','$plans','$curID','$email','$pic')");
					if($reg === TRUE){
						echo 1;
					}else{
						echo 0;
					}
				}
	}else if ($mode == "NewEduc") {
		$educData = count($_POST['txtschoolName']);

		if ($educData > 0){

			$studID = $_POST['studNo'];
			for ($i=0; $i < $educData; $i++) {
				$schName = $_POST['txtschoolName'][$i];
				$schAdd	 = $_POST['txtschoolAdd'][$i];
				$major	 = $_POST['txtmajor'][$i];
				$degree	 = $_POST['txtdegree'][$i];
				$dateR 	 = $_POST['txtdatere'][$i];

				if ($schName == '' AND $schAdd == '') {
					echo 0;
				}else{
					$educ = mysqli_query($conn,"INSERT INTO tbl_educprofile (`studID`,`schoolName`,`schoolAdd`,`major`,`degree`,`dateRec`)
																																	VALUES
																																	('$studID','$schName','$schAdd','$major','$degree','$dateR')");
					if($educ == TRUE){
						echo 1;
					}else{
						echo 0;
					}
				}
			}
		}
	}else if ($mode == "NewPubRes") {
		$pubresData = count($_POST['txttitle']);

		if ($pubresData > 0){

			$studID = $_POST['studNo'];
			for ($i=0; $i < $pubresData; $i++) {
				$artTitle  = $_POST['txttitle'][$i];
				$pubTitle	 = $_POST['txtpub'][$i];
				$pubYear	 = $_POST['txtyearpub'][$i];
					if ($artTitle == '') {
						echo 0;
					}else{
						$pub_res = mysqli_query($conn,"INSERT INTO tbl_publication (`studID`,`artTitle`,`pubTitle`,`pubYear`) VALUES ('$studID','$artTitle','$pubTitle','$pubYear')");
							if($pub_res == TRUE){
								echo 1;
							}else{
								echo 0;
							}
					}
			}
		}
	}else if ($mode == "NewUnPubRes") {
		$unpubresData = count($_POST['txtunpub_res']);

		if ($unpubresData > 0){

			$studID = $_POST['studNo'];
			for ($i=0; $i < $unpubresData; $i++) {
				$unpubTitle  = $_POST['txtunpub_res'][$i];
					if ($unpubTitle == '') {
						echo 0;
					}else{
					$unpub_res = mysqli_query($conn,"INSERT INTO tbl_unpub (`studID`,`desc`) VALUES ('$studID','$unpubTitle')");
						if($unpub_res == TRUE){
							echo 1;
						}else{
							echo 0;
						}
				}
			}
		}
	}else if ($mode == "NewOrgMember") {
		$orgData = count($_POST['txtorg']);

		if ($orgData > 0){
			$studID = $_POST['studNo'];
			for ($i=0; $i < $orgData; $i++) {
				$org  = $_POST['txtorg'][$i];

				if ($org == '') {
					echo 0;
				}else{
					$neworg = mysqli_query($conn,"INSERT INTO tbl_organization (`studID`,`orgdesc`)	VALUES ('$studID','$org')");
						if($neworg == TRUE){
							echo 1;
						}else{
							echo 0;
						}
				}
			}
		}
	}else if ($mode == "NewAwards") {
		$priData = count($_POST['txtprize']);

		if ($priData > 0){
			$studID = $_POST['studNo'];
			for ($i=0; $i < $priData; $i++) {
				$prize  = $_POST['txtprize'][$i];

				if ($prize == '') {
					echo 0;
				}else{
					$new = mysqli_query($conn,"INSERT INTO tbl_award (`studID`,`awarddesc`)	VALUES ('$studID','$prize')");
						if($new == TRUE){
							echo 1;
						}else{
							echo 0;
						}
				}
			}
		}
	}else if ($mode == "NewSeminar") {
		$trainData = count($_POST['txttraining']);

		if ($trainData > 0){
			$studID = $_POST['studNo'];
			for ($i=0; $i < $trainData; $i++) {
				$train  = $_POST['txttraining'][$i];

				if($train == '') {
					echo 0;
				}else{
					$new = mysqli_query($conn,"INSERT INTO tbl_training (`studID`,`trainingdesc`)	VALUES ('$studID','$train')");
						if($new == TRUE){
							echo 1;
						}else{
							echo 0;
						}
				}
			}
		}
	}else if ($mode == "Decrypt"){
		$code = $_REQUEST['code'];

		$val = mysqli_query($conn,"SELECT * FROM tbl_code WHERE `code` = '$code'");
			if(mysqli_num_rows($val) > 0){
				echo 1;
			}else{
				echo 0;
			}
	}else if ($mode == "EditProfile") {
		$studNo 	= $_REQUEST['studNo'];
		$lName 		= $_REQUEST['lName'];
		$fName 		= $_REQUEST['fName'];
		$mName 		= $_REQUEST['mName'];
		$extName 	= $_REQUEST['extName'];
		$street		= $_REQUEST['street'];
		$zip 			= $_REQUEST['zip'];
		$count 		= $_REQUEST['count'];
		$email 		= $_REQUEST['email'];
		$mobile 	= $_REQUEST['mobile'];
		$pbirth	 	= $_REQUEST['pbirth'];
		$bday 		= $_REQUEST['bDate'];
		$citi	 	 	= $_REQUEST['citi'];
		$stat 		= $_REQUEST['stat'];
		$sex 			= $_REQUEST['sex'];
		$occu 		= $_REQUEST['occu'];
		$empName 	= $_REQUEST['empName'];
		$estreet 	= $_REQUEST['estreet'];
		$ezip 		= $_REQUEST['ezip'];
		$ecount 	= $_REQUEST['ecount'];
		$emobile 	= $_REQUEST['emobile'];

		$EProfile = mysqli_query($conn, "UPDATE `tbl_stdprofile` SET `lastName` = '$lName', `firstName` = '$fName', `middleName`= '$mName', `extName`= '$extName', `mailingAdd` = '$street', `mzipcode` = '$zip', `mcountry` = '$count', `mobileno`= '$mobile', `birthPlace` = '$pbirth', `dateofBirth` = '$bday', `Citizenship`= '$citi', `Sex` = '$sex', `civilStatus` = '$stat', `occupation` = '$occu', `employer`= '$empName', `empAdd` = '$estreet', `empzip` = '$ezip', `empcountry` = '$ecount', `empmobile` = '$emobile',`emailAdd` = '$email' WHERE `studID` = '$studNo'");

		if($EProfile === TRUE){
			echo 2;
		}else{
			echo 0;
		};

	}else if($mode == "DelEduc"){
		$DscID = $_REQUEST['DscID'];

		$DEduc = mysqli_query($conn,"DELETE FROM `tbl_educprofile` WHERE `educID` = '$DscID'");

		if(!$DEduc){
			echo 0;
		}else{
			echo 3;
		}
	}elseif ($mode == "EditEduc") {
		$EscID			= $_REQUEST['EscID'];
		$EscName		= $_REQUEST['EscName'];
		$EscAdd			= $_REQUEST['EscAdd'];
		$EscMajor 	= $_REQUEST['EscMajor'];
		$EscDegree	= $_REQUEST['EscDegree'];
		$EscDate		= $_REQUEST['EscDate'];

		$EEDuc = mysqli_query($conn, "UPDATE `tbl_educprofile` SET `schoolName` = '$EscName',`schoolAdd` = '$EscAdd',`major` = '$EscMajor',`degree` = '$EscDegree',`dateRec` = '$EscDate' WHERE `educID` = '$EscID'");

		if($EEDuc === TRUE){
			echo 2;
		}else{
			echo 0;
		};
	}else if ($mode == "DelPubRes"){
		$DPubID = $_REQUEST['DPubID'];

		$DPub = mysqli_query($conn,"DELETE FROM `tbl_publication` WHERE `pubid` = '$DPubID'");

		if(!$DPub){
			echo 0;
		}else{
			echo 3;
		}
	}else if ($mode == "EditPub"){
		$EPubID			= $_REQUEST['EPubID'];
		$EartTitle	= $_REQUEST['EartTitle'];
		$EpubTitle	= $_REQUEST['EpubTitle'];
		$EpubYear		= $_REQUEST['EpubYear'];

		$EPub = mysqli_query($conn,"UPDATE `tbl_publication` SET `artTitle` = '$EartTitle',`pubTitle` = '$EpubTitle',`pubYear` = '$EpubYear' WHERE `pubid` = '$EPubID'");

		if($EPub === TRUE){
			echo 2;
		}else{
			echo 0;
		};
	}else if ($mode == "DelUnPubRes"){
		$DUnpubID = $_REQUEST['DUnpubID'];

		$DUnPub = mysqli_query($conn,"DELETE FROM `tbl_unpub` WHERE `unpubid` = '$DUnpubID'");

		if(!$DUnPub){
			echo 0;
		}else{
			echo 3;
		}
	}else if ($mode == "EditUnPub"){
		$EUnPubID	= $_REQUEST['EUnPubID'];
		$ETitle		= $_REQUEST['ETitle'];

		$EUnpub = mysqli_query($conn,"UPDATE `tbl_unpub` SET `desc` = '$ETitle' WHERE `unpubid` = '$EUnPubID'");

		if($EUnpub === TRUE){
			echo 2;
		}else{
			echo 0;
		}
	}else if ($mode == "DelOrg"){
		$DOrgID = $_REQUEST['DOrgID'];

		$DOrg = mysqli_query($conn, "DELETE FROM tbl_organization WHERE `orgid` = '$DOrgID'");

		if(!$DOrg){
			echo 0;
		}else{
			echo 3;
		}
	}else if($mode == "EditOrg"){
		$EOrgID	= $_REQUEST['EOrgID'];
		$EOrg		= $_REQUEST['EOrg'];

		$EdOrg = mysqli_query($conn,"UPDATE `tbl_organization` SET `orgdesc` = '$EOrg' WHERE `orgid` = '$EOrgID'");

		if($EdOrg === TRUE){
			echo 2;
		}else{
			echo 0;
		}
	}else if($mode == "DelScho"){
		$DSchoID = $_REQUEST['DSchoID'];

		$DScho = mysqli_query($conn,"DELETE FROM `tbl_award` WHERE `awardid` = '$DSchoID'");

		if(!$DScho){
			echo 0;
		}else{
			echo 3;
		}
	}else if($mode == "EditScho"){
		$ESchoID	= $_REQUEST['ESchoID'];
		$EScho		= $_REQUEST['EScho'];

		$EdScho = mysqli_query($conn,"UPDATE `tbl_award` SET `awarddesc` = '$EScho' WHERE `awardid` = '$ESchoID'");

		if($EdScho === TRUE){
			echo 2;
		}else{
			echo 0;
		}
	}else if($mode == "DelSem"){
		$DSemID = $_REQUEST['DSemID'];

		$DSem = mysqli_query($conn,"DELETE FROM `tbl_training` WHERE `trainingid` = '$DSemID'");

		if(!$DSem){
			echo 0;
		}else{
			echo 3;
		}
	}else if($mode == "EditSem"){
		$ESemID	= $_REQUEST['ESemID'];
		$ETrain	= $_REQUEST['ETrain'];

		$EdSem = mysqli_query($conn,"UPDATE `tbl_training` SET `trainingdesc` = '$ETrain' WHERE `trainingid` = '$ESemID'");
		if($EdSem === TRUE){
			echo 2;
		}else{
			echo 0;
		}
	}else if($mode == "EditPlan"){
		$studNo	= $_REQUEST['studNo'];
		$plan		= $_REQUEST['plan'];

		$EPlan = mysqli_query($conn,"UPDATE `tbl_stdprofile` SET `compplan` = '$plan' WHERE `studID` = '$studNo'");
		if($EPlan === TRUE){
			echo 2;
		}else{
			echo 0;
		}
	}else if ($mode == "EditOffer"){
		$EOfferID = $_REQUEST['EOfferID'];
		$ECode		= $_REQUEST['ECode'];
		$ETitle 	= $_REQUEST['ETitle'];
		$EUnit 		= $_REQUEST['EUnit'];
		$ESem 		= $_REQUEST['ESem'];
		$EYear 		= $_REQUEST['EYear'];

		$EOffer = mysqli_query($conn, "UPDATE `tbl_subj_offered` SET `semester` = '$ESem',`schoolyear` = '$EYear',`subjCode` = '$ECode',`subjDesc` = '$ETitle',`subjUnit` = '$EUnit'  WHERE `recID` = '$EOfferID'");
			if($EOffer === TRUE){
				echo 2;
			}else{
				echo 0;
			};
	}else if ($mode =="DelOffer"){
		$DOfferID = $_REQUEST['DOfferID'];

		$DOffer = mysqli_query($conn, "DELETE FROM `tbl_subj_offered` WHERE `recID` = '$DOfferID'");
			if(!$DOffer){
				echo 0;
			}else{
				echo 3;
			}
	}else if($mode == "Offer"){
		$subjID			= $_REQUEST['subjID'];
		$subjCode		= $_REQUEST['subjCode'];
		$subjDesc		= $_REQUEST['subjDesc'];
		$subjUnit		= $_REQUEST['subjUnit'];
		$curID			= $_REQUEST['curID'];

		$currperiod = mysqli_query($conn, "SELECT * FROM tbl_currperiod");
			if(mysqli_num_rows($currperiod) > 0){
				while($row = mysqli_fetch_array($currperiod)){
					$cursem = $row['curSem'];
					$cursy  = $row['curSy'];
				}
			}

		$AOffer	= mysqli_query($conn,"INSERT INTO `tbl_subj_offered` (`curID`, `subjID`, `semester`, `schoolyear`, `subjCode`, `subjDesc`, `subjUnit`)
																																	VALUES
																																	('$curID','$subjID','$cursem','$cursy','$subjCode','$subjDesc','$subjUnit')");
																																	if($AOffer == TRUE){
																																		echo 1;
																																	}else{
																																		echo 0;
																																	}

	}




?>
