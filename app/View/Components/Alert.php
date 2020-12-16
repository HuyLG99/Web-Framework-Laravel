<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        //
//    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
//    public function render()
//    {
//        return view('components.alert');
//    }

    public $message; //nội dunh câu thông báo
    public $type;//loại thông báo

    public function __construct($type, $message)//khi khai báo sử dụng component thì phải truyền giá trị cho type và message
        //vì đây là hàm khởi tạo
    {
        $this->type = $type;
        $this->message = $message;
    }
    public function render()
    {
        return view('components.alert'); // render tới view alert nằm trong thư mục components
    }
}
