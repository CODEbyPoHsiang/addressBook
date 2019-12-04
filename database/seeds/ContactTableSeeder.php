<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('contacts')->get()->count() == 0) {
            DB::table('contacts')->insert([
                'Fname' => '陳',
                'Lname' => '信宏',
                'Email' => 'mayday@gmail.com',
                'Phone' => '0919055666',
                'Address' => '台北市大安區市政路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/1.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '周',
                'Lname' => '阿倫',
                'Email' => 'jay666@hotmail.com',
                'Phone' => '0919000666',
                'Address' => '新北市中正區中正路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/2.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '王',
                'Lname' => '阿民',
                'Email' => 'wang40@gmail.com',
                'Phone' => '0988000666',
                'Address' => '新竹縣中區中山路12號',
                'ImgPath' => 'http://127.0.0.1:8000/images/3.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '蔡',
                'Lname' => '小琳',
                'Email' => 'jolin888@hotmail.com',
                'Phone' => '0912333666',
                'Address' => '台中市西屯區朝馬路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/4.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '吳',
                'Lname' => '阿憲',
                'Email' => 'jacky999@hotmail.com',
                'Phone' => '0912333666',
                'Address' => '台北市內湖區舊宗路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/5.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '林',
                'Lname' => '阿傑',
                'Email' => '96jay@gmail.com',
                'Phone' => '0919888666',
                'Address' => '高雄市苓雅區中正路14號',
                'ImgPath' => 'http://127.0.0.1:8000/images/6.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '李',
                'Lname' => '義美',
                'Email' => 'mang@hotmail.com',
                'Phone' => '0933000776',
                'Address' => '南投縣埔里正中山路一段3號',
                'ImgPath' => 'http://127.0.0.1:8000/images/7.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '徐',
                'Lname' => '增福',
                'Email' => 'fuhsu@gmail.com',
                'Phone' => '0912060556',
                'Address' => '台南市西區中山路2號',
                'ImgPath' => 'http://127.0.0.1:8000/images/8.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '顏',
                'Lname' => '阿標',
                'Email' => 'yan@hotmail.com',
                'Phone' => '0912033666',
                'Address' => '台中市大甲區中山路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/9.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '羅',
                'Lname' => '名傑',
                'Email' => 'lojay@hotmail.com',
                'Phone' => '0919888656',
                'Address' => '苗栗縣中區中山路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/10.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '葉',
                'Lname' => '阿天',
                'Email' => 'yatin@hotmail.com',
                'Phone' => '0988666556',
                'Address' => '台東縣東區東義路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/1.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '謝',
                'Lname' => '明傑',
                'Email' => 'jaytt@hotmail.com',
                'Phone' => '0918000666',
                'Address' => '嘉義市東區中山路14號',
                'ImgPath' => 'http://127.0.0.1:8000/images/2.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '黃',
                'Lname' => '阿升',
                'Email' => 'haung@hotmail.com',
                'Phone' => '0933665566',
                'Address' => '新竹縣中區中正路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/3.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '劉',
                'Lname' => '阿榮',
                'Email' => 'laulon@hotmail.com',
                'Phone' => '0972333666',
                'Address' => '宜蘭縣西區復興路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/4.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '張',
                'Lname' => '聰明',
                'Email' => 'smart@hotmail.com',
                'Phone' => '0933667666',
                'Address' => '屏東縣東區東門路2號',
                'ImgPath' => 'http://127.0.0.1:8000/images/5.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '李',
                'Lname' => '明福',
                'Email' => 'lifu@hotmail.com',
                'Phone' => '0933667666',
                'Address' => '雲林縣麥寮鄉中山路1號',
                'ImgPath' => 'http://127.0.0.1:8000/images/6.jpg',
            ]);
            DB::table('contacts')->insert([
                'Fname' => '曹',
                'Lname' => '阿山',
                'Email' => 'tsao@hotmail.com',
                'Phone' => '0988665666',
                'Address' => '嘉義縣民雄鄉建國路2號',
                'ImgPath' => 'http://127.0.0.1:8000/images/7.jpg',
            ]);
        }
    }
}
