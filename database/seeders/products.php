<?php

namespace Database\Seeders;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'productsName' => 'เฟรนช์ฟรายส์',
            'productsPrice' => 70,
            'category_id' => 1,
            'product_photo' => 'https://www.matichonacademy.com/wp-content/uploads/2021/06/french-fries.jpg'
        ]);
        product::create([
            'productsName' => 'ไข่กระทะ',
            'productsPrice' => 70,
            'category_id' => 1,
            'product_photo' => 'https://f.ptcdn.info/254/053/000/ov8cdmf55MrwZO4W5ib-o.jpg'
        ]);
        product::create([
            'productsName' => 'สปาเกตตี',
            'productsPrice' => 65,
            'category_id' => 1,
            'product_photo' => 'https://s3.theasianparent.com/tap-assets-prod/wp-content/uploads/sites/25/2021/03/spaghetti1.jpg'
        ]);
        product::create([
            'productsName' => 'แซนด์วิช',
            'productsPrice' => 60,
            'category_id' => 1,
            'product_photo' => 'https://food.mthai.com/app/uploads/2019/11/SW.jpg'
        ]);
        product::create([
            'productsName' => 'สลัด',
            'productsPrice' => 65,
            'category_id' => 1,
            'product_photo' => 'https://www.matichon.co.th/wp-content/uploads/2018/11/fit-and-firm-salad.jpg'
        ]);
        product::create([
            'productsName' => 'มันฝรั่งอบชีส',
            'productsPrice' => 45,
            'category_id' => 1,
            'product_photo' => 'https://food.mthai.com/app/uploads/2017/05/tomato-Baked-Cheese.jpg'
        ]);
        product::create([
            'productsName' => 'สเต๊ก',
            'productsPrice' => 75,
            'category_id' => 1,
            'product_photo' => 'https://i0.wp.com/www.xn--o3cdbr1ab9cle2ccb9c8gta3ivab.com/wp-content/uploads/2020/05/grilled-beef-steak.jpg?fit=1563%2C1043&ssl=1'
        ]);
        product::create([
            'productsName' => 'มันฝรั่งอบชีส',
            'productsPrice' => 45,
            'category_id' => 1,
            'product_photo' => 'https://food.mthai.com/app/uploads/2017/05/tomato-Baked-Cheese.jpg'
        ]);
        product::create([
            'productsName' => 'ฝักโขมอบชีส',
            'productsPrice' => 45,
            'category_id' => 1,
            'product_photo' => 'https://krua.co/wp-content/uploads/2021/02/RI1630_ImageBannerMobile_960x633_New_.jpg'
        ]);
        product::create([
            'productsName' => 'ลาซานญ่า',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://th-images.hellomagazine.com/wp-content/uploads/2011/01/25121635/Feature-Image-1600x750.jpg'
        ]);
        product::create([
            'productsName' => 'เบอร์เกอร์',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://www.ozenx.com/wp-content/uploads/2021/01/delicious-grilled-burgers-scaled.jpg'
        ]);
        product::create([
            'productsName' => 'ข้าวผัด',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://i.ytimg.com/vi/BXWGFeJryGI/maxresdefault.jpg'
        ]);
        product::create([
            'productsName' => 'ข้าวหน้าหมูสไลซ์',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://img.wongnai.com/p/1920x0/2018/06/26/676bcf6e113f469d97ef0d7f59727e85.jpg'
        ]);
        product::create([
            'productsName' => 'ข้าวหน้าเนื้อ',
            'productsPrice' => 65,
            'category_id' => 1,
            'product_photo' => 'https://www.chillpainai.com/src/wewakeup/scoop/images/dc495df4519cc733372005f0035c4cd1c84c071b.jpg'
        ]);
        product::create([
            'productsName' => 'กะเพรา',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://img.wongnai.com/p/1920x0/2020/09/01/67ba09fcb72845bc81fd413036e3f4eb.jpg'
        ]);
        product::create([
            'productsName' => 'ผัดคะน้า',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://img-global.cpcdn.com/recipes/a11590ecc0edd0df/1200x630cq70/photo.jpg'
        ]);
        product::create([
            'productsName' => 'ข้าวแกงกะหรี่',
            'productsPrice' => 50,
            'category_id' => 1,
            'product_photo' => 'https://img-global.cpcdn.com/recipes/713de73c7e1001e2/1200x630cq70/photo.jpg'
        ]);
        product::create([
            'productsName' => 'ข้าวหมูทอดกระเทียม',
            'productsPrice' => 50,
            'category_id' => 1,
            'product_photo' => 'https://www.pholfoodmafia.com/wp-content/uploads/2021/04/8Garlic-and-Pepper-Pork-with-Rice-590x418.jpg'
        ]);
        product::create([
            'productsName' => 'หมูมะนาว',
            'productsPrice' => 60,
            'category_id' => 1,
            'product_photo' => 'https://www.sgethai.com/wp-content/uploads/2022/06/3-25.jpg'
        ]);
        product::create([
            'productsName' => 'ซี่โครงหมูย่าง',
            'productsPrice' => 150,
            'category_id' => 1,
            'product_photo' => 'https://www.siambrasserie.com/wp-content/uploads/2020/10/2.jpg'
        ]);
        product::create([
            'productsName' => 'ไก่ย่าง',
            'productsPrice' => 135,
            'category_id' => 1,
            'product_photo' => 'https://www.unileverfoodsolutions.co.th/dam/global-ufs/mcos/SEA/calcmenu/recipes/TH-recipes/chicken-&-other-poultry-dishes/%E0%B9%84%E0%B8%81%E0%B9%88%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87/%E0%B9%84%E0%B8%81%E0%B9%88%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87_header.jpg'
        ]);
        product::create([
            'productsName' => 'แกงมัสมัน',
            'productsPrice' => 80,
            'category_id' => 1,
            'product_photo' => 'https://almocooking.com/wp-content/uploads/2019/11/customLogo.jpg'
        ]);
        product::create([
            'productsName' => 'ซุปเนื้อตุ๋น',
            'productsPrice' => 75,
            'category_id' => 1,
            'product_photo' => 'https://www.pim.in.th/images/all-side-dish-beef/beef-soup/beef-soup-20.jpg'
        ]);
        product::create([
            'productsName' => 'ซุปหางวัว',
            'productsPrice' => 75,
            'category_id' => 1,
            'product_photo' => 'https://i.gojekapi.com/darkroom/gofood-thailand/v2/images/uploads/b73eb469-d43d-4761-b543-4c38693caa74_file20191004-1-1cvym2c.jpeg'
        ]);
        product::create([
            'productsName' => 'ซุปแซลมอน',
            'productsPrice' => 75,
            'category_id' => 1,
            'product_photo' => 'https://เมนู.net/media/images/recipe/%E0%B8%8B%E0%B8%B8%E0%B8%9B%E0%B8%AA%E0%B8%B2%E0%B8%AB%E0%B8%A3%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%A5%E0%B8%B2%E0%B9%81%E0%B8%8B%E0%B8%A5%E0%B8%A1%E0%B8%AD%E0%B8%99.jpg'
        ]);
        product::create([
            'productsName' => 'แกงเขียวหวาน',
            'productsPrice' => 55,
            'category_id' => 1,
            'product_photo' => 'https://howtocookhub.com/wp-content/uploads/2021/07/%E0%B9%81%E0%B8%81%E0%B8%87%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%A7%E0%B8%AB%E0%B8%A7%E0%B8%B2%E0%B8%99%E0%B9%84%E0%B8%81%E0%B9%88.jpg'
        ]);
        product::create([
            'productsName' => 'ปลากระพง ทอดน้ําปลา',
            'productsPrice' => 150,
            'category_id' => 1,
            'product_photo' => 'https://www.suaheew.com/wp-content/uploads/2020/01/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%97%E0%B8%B3%E0%B8%9B%E0%B8%A5%E0%B8%B2%E0%B8%81%E0%B8%B0%E0%B8%9E%E0%B8%87%E0%B8%97%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%9B%E0%B8%A5%E0%B8%B2-%E0%B8%A2%E0%B9%8D%E0%B8%B2%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87-%E0%B8%AA%E0%B8%AD%E0%B8%99%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A2%E0%B8%B3-1024x576.jpg'
        ]);
        product::create([
            'productsName' => 'ปลาทอด ราดพริกสามรส',
            'productsPrice' => 120,
            'category_id' => 1,
            'product_photo' => 'https://www.easycookingmenu.com/media/k2/items/cache/0aa2526f21d94ec0cf0dfc24eb7661b7_XL.jpg'
        ]);
        product::create([
            'productsName' => 'ปลานิลเผาเกลือ',
            'productsPrice' => 120,
            'category_id' => 1,
            'product_photo' => 'https://i.pinimg.com/originals/9c/0b/55/9c0b55364ba8fbcba24879f2d7590916.jpg'
        ]);
        product::create([
            'productsName' => 'แป๊ะซะปลาช่อน',
            'productsPrice' => 140,
            'category_id' => 1,
            'product_photo' => 'https://www.matichonweekly.com/wp-content/uploads/2022/01/%E0%B8%AD%E0%B8%B2%E0%B8%97%E0%B8%B4%E0%B8%95%E0%B8%A2%E0%B9%8C%E0%B8%A5%E0%B8%B0%E0%B8%A1%E0%B8%B7%E0%B9%89%E0%B8%AD-2160.jpg'
        ]);
        ////////////////////////////////////////////
        ////////////////////////////////////////////
        product::create([
            'productsName' => 'อเมริกาโน่',
            'productsPrice' => 45,
            'category_id' => 2,
            'product_photo' =>'https://s359.kapook.com/pagebuilder/c0fc56f3-1144-44ba-af2d-a3d7d48aa20e.jpg',
        ]);
        product::create([
            'productsName' => 'เอสเปรสโซ่',
            'productsPrice' => 45,
            'category_id' => 2,
            'product_photo' =>'https://santipanich.com/wp-content/uploads/2021/05/closeup-classic-fresh-espresso-served-dark-surface.jpg',
        ]);
        product::create([
            'productsName' => 'คาปูชิโน่',
            'productsPrice' => 45,
            'category_id' => 2,
            'product_photo' =>'https://s359.kapook.com/r/600/auto/pagebuilder/64c1472d-6c6f-4d4b-ad48-5f509288d2b4.jpg',
        ]);
        product::create([
            'productsName' => 'ลาเต้',
            'productsPrice' => 45,
            'category_id' => 2,
            'product_photo' =>'https://s359.kapook.com/pagebuilder/937cadcd-2fed-4cca-a111-8bad7fbd54f8.jpg',
        ]);
        product::create([
            'productsName' => 'มอคค่า',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://s359.kapook.com/pagebuilder/d70a476a-7a33-4bfa-ba67-9b8e265fc9c0.jpg',
        ]);
        product::create([
            'productsName' => 'ชาเขียว',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbpqE7MlBKPb40YfNv1sPC7qwF3zUa2O3DBA&usqp=CAU',
        ]);
        product::create([
            'productsName' => 'ชาไทย',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'http://i2.wp.com/www.thaismescenter.com/wp-content/uploads/2020/07/931.jpg',
        ]);
        product::create([
            'productsName' => 'ชามะนาว',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://img.kapook.com/u/pirawan/Cooking1/melon_1.jpg',
        ]);
        product::create([
            'productsName' => 'ช็อกโกแลต',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://static.thairath.co.th/media/dFQROr7oWzulq5FZUHxCFVxUM8AFjt1nZTSITctqusBVL5TTDvXYE7Q8zcaB6cn1WQp.jpg',
        ]);
        product::create([
            'productsName' => 'โกโก้',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://krua.co/wp-content/uploads/2020/09/RD0198_ImageBannerMobile_960x633_New_-01-scaled.jpg',
        ]);
        product::create([
            'productsName' => 'นมชมพู',
            'productsPrice' => 50,
            'category_id' => 2,
            'product_photo' =>'https://krua.co/wp-content/uploads/2020/07/RD0197_ImageBanner_1140x507-01-scaled.jpg',
        ]);
        product::create([
            'productsName' => 'บลูเบอร์รี่โยเกิร์ตปั่น',
            'productsPrice' => 80,
            'category_id' => 2,
            'product_photo' =>'https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.18169-9/22448649_781643602005297_6315800581314624722_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=YC6GgOnHSFQAX_WfxwA&_nc_ht=scontent.fkkc3-1.fna&oh=00_AT9hsh-sS6n0GWRdxEnN0S4wgMDme8AheNEslkAgeTbpfA&oe=6359CADC',
        ]);
        product::create([
            'productsName' => 'สตอเบอรี่โซดา',
            'productsPrice' => 60,
            'category_id' => 2,
            'product_photo' =>'https://เมนู.net/media/images/recipe/%E0%B8%99%E0%B9%89%E0%B8%B3%E0%B8%A3%E0%B8%B2%E0%B8%AA%E0%B8%9B%E0%B9%8C%E0%B9%80%E0%B8%9A%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B5%E0%B9%88%E0%B8%A1%E0%B8%B0%E0%B8%99%E0%B8%B2%E0%B8%A7%E0%B9%82%E0%B8%8B%E0%B8%94%E0%B8%B2_3ba87cbd0a55d4e9abae9407ca0a75a8.jpg',
        ]);
        product::create([
            'productsName' => 'บลูเบอร์รี่โซดา',
            'productsPrice' => 60,
            'category_id' => 2,
            'product_photo' =>'https://img.kapook.com/u/2020/wanwanat/lem06+.jpg',
        ]);
        product::create([
            'productsName' => 'เสาวรสโซดา',
            'productsPrice' => 60,
            'category_id' => 2,
            'product_photo' =>'https://campus.campus-star.com/app/uploads/2019/05/IMG_2939.jpg',
        ]);
        product::create([
            'productsName' => 'สตอเบอร์รี่โยเกิร์ตปั่น',
            'productsPrice' => 80,
            'category_id' => 2,
            'product_photo' =>'https://www.sgethai.com/wp-content/uploads/2021/07/%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%AD%E0%B9%80%E0%B8%9A%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A3%E0%B8%B5%E0%B9%88%E0%B9%82%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%95-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%97%E0%B8%B3%E0%B8%82%E0%B8%B2%E0%B8%A2%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2%E0%B9%86.jpg',
        ]);
        product::create([
            'productsName' => 'ผลไม้รวมโยเกิร์ตปั่น',
            'productsPrice' => 250,
            'category_id' => 2,
            'product_photo' =>'https://d1sag4ddilekf6.azureedge.net/compressed/merchants/3-CZDXLJNEEPC3TX/hero/0a1c3ebfbf2d4d79890df27047ed4134_1587452172080639368.jpeg',
        ]);
        /////////////////////////////////////////
        /////////////////////////////////////////
        product::create([
            'productsName' =>'เค้ก',
            'productsPrice' => 89,
            'category_id' => 3,
            'product_photo' => 'https://krua.co/wp-content/uploads/2020/10/RB407_ImageBanner_1140x507.jpg'
        ]);
        product::create([
            'productsName' =>'บราวนี่',
            'productsPrice' => 65,
            'category_id' => 3,
            'product_photo' =>'https://krua.co/wp-content/uploads/2020/09/RB0377_ImageBannerMobile_960x633_New_-01.jpg'
        ]);
        product::create([
            'productsName' =>'ฮันนี่โทสต์',
            'productsPrice' => 100,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b1_3.jpg'
        ]);
        product::create([
            'productsName' =>'แพนเค้กกล้วยหอม',
            'productsPrice' => 150,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b3_1.jpg'
        ]);
        product::create([
            'productsName' =>'ไอครีมซันเดย์',
            'productsPrice' => 89,
            'category_id' => 3,
            'product_photo' =>'https://tips.thaiware.com/upload_misc/tips/2020_07/728/1327_20070918550649_104.jpg'
        ]);
        product::create([
            'productsName' =>'ไอศครีมบานาน่าสปริท',
            'productsPrice' => 129,
            'category_id' => 3,
            'product_photo' =>'https://img.wongnai.com/p/1920x0/2017/12/10/244d4926e43d44a0b47a9452e57535e3.jpg'
        ]);
        product::create([
            'productsName' =>'วาฟเฟิลไอศกรีม',
            'productsPrice' => 129,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b5_2.jpg'
        ]);
        product::create([
            'productsName' =>'ช็อกโกแลตลาวา',
            'productsPrice' => 109,
            'category_id' => 3,
            'product_photo' =>'https://www.pim.in.th/images/all-bakery/chocolate-lava/chocolate-lava-17.jpg'
        ]);
        product::create([
            'productsName' =>'เฟรนช์โทสต์สตรอว์เบอร์รี',
            'productsPrice' => 149,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b11_3.jpg'
        ]);
        product::create([
            'productsName' =>'มูสเค้กช็อกโกแลต',
            'productsPrice' => 89,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b12_2.jpg'
        ]);
        product::create([
            'productsName' =>'ชีสพาย',
            'productsPrice' => 89,
            'category_id' => 3,
            'product_photo' =>'https://image.sistacafe.com/w800/images/uploads/summary/image/5037/1449824690-no-bake-blueberry-cheesecake-bars-43-o.jpg'
        ]);
        product::create([
            'productsName' =>'ช็อกโกแลตชีสเค้ก',
            'productsPrice' => 89,
            'category_id' => 3,
            'product_photo' =>'https://img.thaibuffer.com/u/2016/surauch/cook1/b15_1.jpg'
        ]);
        product::create([
            'productsName' =>'บิงซูเมลอน',
            'productsPrice' => 129,
            'category_id' => 3,
            'product_photo' => 'https://img.thaibuffer.com/u/2016/surauch/cook1/b29.jpg'
        ]);
    }
}
