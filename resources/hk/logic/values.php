<?php 

namespace values;
class Contact{

	public function mail(): string
    {
		return "";
	}

	public array $my_contact = array(
		"mail" => ['mail@hassankajila.com',"dev.haspro@gmail.com","mail@r.hassankajila.com"],
		"phone" => [],
		"address" => ["Congo - kinshasa"],
	);

}


class Link{
    static string $github = "https://github.com/lordyhas";
    static string $twitter = "https://twitter.com/lordyhas";
    static string $insta = "https://instagram.com/lordyhas";
    static string $linktree = "https://linktr.ee/hassankajila";

}


