
		<?php
		function connect_database()
            {
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";

            // Create connection
            $GLOBALS['con'] = new mysqli($servername, $username, $password);

            // Check connection
            if ($GLOBALS['con']->connect_error) 
            {
            die("Connection failed: " . $GLOBALS['con']->connect_error);
            } 
            echo "Connected successfully ";
            
            }


            function connect_mysql()
			{
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";

			// Create connection
			$GLOBALS['conn'] = new mysqli($servername, $username, $password);

			// Check connection
			if ($GLOBALS['conn']->connect_error) 
			{
			die("Connection failed: " . $GLOBALS['conn']->connect_error);
			} 
			//echo "Connected successfully ";
			return $GLOBALS['conn'];
			}

			function disconnect()
			{
				
			$GLOBALS['conn']->close();

			}
			

		?>