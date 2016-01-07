<?php
namespace App\Classes;

class Application {

	public static function getR($colorHex) {
		return hexdec(substr($colorHex, 1, 2));
	}

	public static function getG($colorHex) {
		return hexdec(substr($colorHex, 3, 2));
	}

	public static function getB($colorHex) {
		return hexdec(substr($colorHex, 5, 2));
	}

	public static function getH($rgb) {
		$r = hexdec(substr($rgb, 1, 2)) / 100;
		$g = hexdec(substr($rgb, 3, 2)) / 100;
		$b = hexdec(substr($rgb, 5, 2)) / 100;
		$h = '';
		$max = max($r, $g, $b);
		$min = min($r, $g, $b);
		switch (true) {
		case $min == $max:
			$h = 0;
			return $h;
			break;
		case $max == $g:
			$h = 60 * ($b - $r) / ($max - $min) + 120;
			return $h;
			break;
		case $max == $b:
			$h = 60 * ($r - $g) / ($max - $min) + 240;
			return $h;
			break;
		case ($max == $r) && ($g >= $b):
			$h = 60 * ($g - $b) / ($max - $min) + 0;
			return $h;
			break;
		case ($max == $r) && ($g < $b):
			$h = 60 * ($g - $b) / ($max - $min) + 360;
			return $h;
			break;
		}
	}

	public static function getL($rgb) {
		$r = hexdec(substr($rgb, 1, 2)) / 100;
		$g = hexdec(substr($rgb, 3, 2)) / 100;
		$b = hexdec(substr($rgb, 5, 2)) / 100;
		$max = max($r, $g, $b);
		$min = min($r, $g, $b);
		return 0.5 * ($max + $min);
	}

	public static function getS($rgb) {
		$r = hexdec(substr($rgb, 1, 2)) / 100;
		$g = hexdec(substr($rgb, 3, 2)) / 100;
		$b = hexdec(substr($rgb, 5, 2)) / 100;
		$max = max($r, $g, $b);
		$min = min($r, $g, $b);
		$s = '';
		$l = self::getL($rgb);
		switch (true) {
		case (0 == $l) || ($min == $max):
			$s = 0;
			return $s;
			break;
		case ($l > 0) && ($l <= 0.5):
			$s = ($max - $min) / (2 * $l);
			return $s;
			break;
		case ($l > 0.5) && ($l < 1):
			$s = ($max - $min) / (2 - 2 * $l);
			return $s;
			break;
		}
	}

	/**
	 * @param $fileName
	 */
	public static function createFile($fileName) {
		if (!file_exists($fileName)) {
			$res = fopen($fileName, 'a');
			fclose($res);

		}
	}

	public static function createTimestampFronInputDatelocal($inputDate) {
		return date_create_from_format('Y-m-d\TH:i', $inputDate)->getTimestamp();
	}

	public static function catchException(EException $e) {
		$logger = new Logger();
		$logger->error($e->getMessage(), ['code' => $e->getCode(), 'info' => $e->getInfo(), 'trace' => array_shift($e->getTrace())]);
		$e->view->message = $e->getMessage();
		$e->view->display($e->path . 'exception.php');
	}

	public static function outputStdClassObject($obj, $level) {
		foreach ($obj as $key => $value) {
			if ((is_a($value, 'stdClass') || (is_array($value)))) {
				for ($i = 1; ($i <= $level); $i++) {
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				}
				echo $key . ': <br>';
				++$level;
				self::outputStdClassObject($value, $level);
			} else {
				for ($i = 1; ($i <= $level); $i++) {
					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				}
				echo $key . ' = ' . $value . '<br>';
			}
		}
	}

	public static function fetchLogByTerm($logBegin, $logEnd) {
		$logPath = realpath(__DIR__ . '/../logs');
		$arrFiles = scandir($logPath);
		foreach ($arrFiles as $log) {
			$logFile = $logPath . DIRECTORY_SEPARATOR . $log;
			if (($log >= $logBegin) && ($log <= $logEnd)) {
				$json = file_get_contents($logFile);
				$obj = new \stdClass();
				$obj = json_decode($json);
				self::outputStdClassObject($obj, 1);
				echo '<br><br>';
			}
		}
	}

	public static function getCurrentByKey($key) {
		return $_SESSION[$key];
	}

	public static function setCurrentByKey($array) {
		foreach ($array as $key => $value) {
			$_SESSION[$key] = $value;
		}
	}

	public static function unsetCurrentByKey($key) {
		unset($_SESSION[$key]);
	}

}