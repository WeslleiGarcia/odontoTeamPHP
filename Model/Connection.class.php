<?php
	class Connection extends PDO {
		private $dsn = 'mysql:dbname=testes;host=127.0.0.1';
		private $user = 'root';
		private $password = 'wes635689';
		public $handle = null;

		function __construct( ) {
			try {
				if ( $this->handle == null ) {
					$dbh = parent::__construct( $this->dsn , $this->user , $this->password );
					$this->handle = $dbh;
					return $this->handle;
				}
			}
			catch ( PDOException $e ) {
				echo 'Connection failed: ' . $e->getMessage( );
				return false;
			}
		}

		function __destruct( ) {
			$this->handle = NULL;
		}
	}
?>