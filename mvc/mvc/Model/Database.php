<?php
    class Database {
        private $service = 'localhost'; //127.0.0.1
        private $database = 'mvc';
        private $user = 'root';
        private $password = '';

        public $connect = null;
        public $result = null;

        public function connect() {
            $this->connect = new mysqli($this->service, $this->user, $this->password, $this->database);
            if(!$this->connect) {
                print_r($this->connect->error);// print_r("Kết nối thất bại");
                exit();
            }
            $this->connect->set_charset('utf8');
            return $this->connect;
        }

         // Thưc thi câu lệnh truy vấn
        public function execute($sql) {
            $this->result = $this->connect->query($sql);
            return $this->result;
        }

        // Phương thức để lấy dữ liệu
        public function getData() {
            if(!$this->result){// kiểm tra đã có truy vấn 
                $data =  0;
            }else{
                $data = mysqli_fetch_array($this->result);
            }
            return $data;
        }

        // dếm bản ghi
        public function numberRows() {
            if(!$this->result){// kiểm tra đã có truy vấn hay chưa
                $num =  0;
            }else{
                $num = mysqli_num_rows($this->result);
            }
            return $num;
        }

        // lấy toàn bộ dữ liệu

        public function getALlData($table) {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);

            if($this->numberRows()==0) {
                $data = 0;
            }else{
                while($listData= $this->getData()) {
                    $data[] = $listData;
                }
            }
            return $data;

        }
        // thêm vào dữ liệu
        public function insertData($fullname, $username, $password) {
            $sql = "INSERT INTO user(id,fullname, username,password) VALUES(null, '$fullname','$username','$password') ";
            return $this->execute($sql);
        }

        // Xóa 
        public function delete($table,$id) {
            $sql = "DELETE FROM $table WHERE id = '$id'";
            $this->execute($sql);
        }

        // lấy 1 recode by id
        public function getDataById($table,$id) {
            $sql = "SELECT * FROM $table WHERE ID ='$id'";
            $this->execute($sql);
            if($this->numberRows()!= 0) {
                $data = mysqli_fetch_array($this->result);
            }else {
                $data = 0;
            }
            return $data;
        }
        // Phương thức sửa dữ liệu by id
        public function updateData($id, $username, $fullname, $password) {
            $sql = "UPDATE user SET username = '$username',fullname = '$fullname',password ='$password' WHERE id ='$id'";
            return $this->execute($sql);
        }
    }
?>