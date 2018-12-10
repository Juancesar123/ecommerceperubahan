<?php
class Database {
   protected $link;

   public function __construct( $dbHost, $dbUser, $dbPass, $dbName ) {
      $this->link = @mysql_connect( $dbHost, $dbUser, $dbPass );
      mysql_select_db( $dbName, $this->link );
   }

   public function query( $sql ) {
      $result = mysql_query( $sql, $this->link );
      return is_resource( $result ) ? $this->fetch( $result ) : $result;
   }

   public function quote( $text ) {
      return '"' . mysql_real_escape_string( $text ) . '"';
   }

   public function escape( $text ) {
      return mysql_real_escape_string( $text );
   }

   public function getError() {
      return 'Database error: (' . mysql_errno( $this->link ) . ')' . mysql_error();
   }

   public function getLastId() {
      return mysql_insert_id( $this->link );
   }
   
   public function JumlahData() {
      return mysql_num_rows( $this->link );
   }

   protected function fetch( $result, $mode = MYSQL_ASSOC ) {
      if ( is_resource( $result ) ) {
         $rows = array();
         while ( $row = mysql_fetch_array( $result, $mode ) ) {
            $rows[] = $row;
         }
         return $rows;
      }

      return false;
   }
}
function anti_xss($d)
{
	$f=stripslashes(strip_tags(htmlspecialchars($d,ENT_QUOTES)));
	return $f;
}
?>