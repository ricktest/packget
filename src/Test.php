<?php 

namespace Virtualorz\Hellow;

use Illuminate\Support\Facades\DB;

class Test
{
    public function test()
    {
        echo 'asdasdasdasdasda';
    }

    public function dbTest()
    {
        $data = DB::table('member_info')->get();
        dd($data);
    }
}
?>