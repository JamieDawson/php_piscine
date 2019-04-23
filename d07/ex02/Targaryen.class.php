<?php
class Targaryen {

	public function getBurned() {
		switch($this->resistsFire()){
			case 0:
				return "emerges naked but unharmed";
				break;
			case 1:
				return "burns alive";
				break;
		}
	}

	public function resistsFire() {
		return False;
	}
}
?>