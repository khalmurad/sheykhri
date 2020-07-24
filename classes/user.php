<?php

class USER
{

	private $user_id, $db;
	
	public function __construct($db)
	{
		$this->db = $db;
		
	}
	
	public function setUserId($user_id)
	{
		$this->user_id = $user_id;
	}
	
	public function set($type, $value)
	{
		$insert = [
			$type => $value,
			'chat_id' => $this->user_id,
		];
		$this->db->update('users_list', $insert);
	}
	
	public function get($type, $info = '')
	{
		$result = $this->db->search(['users_list' => $type, 'chat_id' => $this->user_id]);
		if (isset($info)) {
			if ($result == $info) return $result;
			return false;
		}
		return $result;
	}
	
	public function __destruct()
	{
		foreach ($this as $key => $value) { 
			unset($this->$key);
		}
	}
	
}