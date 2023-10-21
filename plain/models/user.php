<?php
namespace Models;

class User {
    private $id;
    private $username;
    private $image;

    public function __construct($id, $username, $image) {
        $this->id = $id;
        $this->username = $username;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getImage(){
        $binaryData = $this->image;
        $mimeType = 'image/jpeg';
        if (substr($binaryData, 0, 4) === "\x89PNG") {
            $mimeType = 'image/png';
        }
        $base64Data = base64_encode($binaryData);
        return 'data:' . $mimeType . ';base64,' . $base64Data;
    }
}
