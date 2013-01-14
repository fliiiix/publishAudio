<?php 
	/**
	 * Erzeugt ein neues Datenbank-Objekt
	 * @return mysqli connection
	 */
	function DB() {
	    $DB = @new mysqli('localhost', 'root', 'warhammer40k', 'publishAudio');
	    return $DB;
	}

	function Login($username, $passwort)
	{
		$return = false;
		$sql = 'SELECT Id FROM `User` WHERE `username` = ? && `passwort` = ? ';
		$passwortHash = hashPaswort($passwort);
		$DB = DB();

		$SQLAbfrage = $DB->prepare($sql);
		$SQLAbfrage->bind_param('ss', $username, $passwortHash);
		$SQLAbfrage->execute();
		$SQLAbfrage->store_result();
		if ($SQLAbfrage->num_rows == 1) {
			$_SESSION["login"] = true;
			$return = true;
		}

		$SQLAbfrage->close();
		$DB->close();
		return $return;
	}

	function CreatUser($username, $passwort)
	{
		$sql = 'INSERT INTO `User` (`Username`, `Passwort`, `Aktiv`) VALUES (?, ?, 1);';
		$passwortHash = hashPaswort($passwort);
		$DB = DB();

		$SQLAbfrage = $DB->prepare($sql);
		$SQLAbfrage->bind_param('ss', $username, $passwortHash);
		$SQLAbfrage->execute();

		$SQLAbfrage->close();
		$DB->close();
	}

	function DeleteUser()
	{
		$sql = 'DELETE FROM `User` WHERE (`Id` = ?';
		$DB = DB();

		$SQLAbfrage = $DB->prepare($sql);
		$SQLAbfrage->bind_param('i');
		$SQLAbfrage->execute();

		$SQLAbfrage->close();
		$DB->close();
	}

	function HashPaswort($passwort)
	{
		return $passwort;
	}
 ?>