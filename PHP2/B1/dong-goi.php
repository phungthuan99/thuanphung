<?php

class LopCha{
    //private: chỉ lấy được ở lớp định nghĩa
    //protected: lấy được ở lớp kế thừa
    //public: lấy được ở mọi lớp
    //=> modifier
    private $taisan = 1000;
    public function getTaisan(){
        echo $this->taisan;
    }
}
class LopCon extends LopCha{
    private function demo(){
        return 1;
    }
}
$thuan = new LopCon();
// $thuan->getTaisan();
echo $thuan->getTaisan();

?>