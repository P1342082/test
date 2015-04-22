  <?php
		/*入出力確認*/
		$kusernumber = isset($_POST['kusernumber']) ? htmlspecialchars($_POST['kusernumber']) : null;
		$kusername = isset($_POST['kusername']) ? htmlspecialchars($_POST['kusername']) : null;
                $kseibetu = isset($_POST['kseibetu']) ? htmlspecialchars($_POST['kseibetu']) : null;
                $knengappi = isset($_POST['knengappi']) ? htmlspecialchars($_POST['knengappi']) : null;
                $kjuusyo = isset($_POST['kjuusyo']) ? htmlspecialchars($_POST['kjuusyo']) : null;
                $kdenban = isset($_POST['kdenban']) ? htmlspecialchars($_POST['kdenban']) : null;
                $kmailad = isset($_POST['kmailad']) ? htmlspecialchars($_POST['kmailad']) : null;
                
		
		
		/*ＩＤとパスワード照合*/
                require_once 'database_conf.php';
                require_once 'h.php';
                

		try{
                    $db = new PDO($dsn, $dbUser, $dbPass);
                    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                    
		    $sql = 'select * from cinfo';
                    foreach ($db->query($sql) as $row) {
    			if(($row['usernumber'] == $kusernumber)||( $row['username'] == $kusername)||($row['seibetu'] == $kseibetu)||($row['nengappi'] == $knengappi)||($row['juusyo'] == $kjuusyo)||($row['denban'] == $kdenban)||($row['mailad'] == $kmailad)){
    				echo $row;
    			}
		    }
		}catch (PDOException $e){
			header("Location: error.php");
                    die();
		}
		$db = null;
            ?>

