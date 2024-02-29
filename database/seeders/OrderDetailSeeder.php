<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
            'order_number' => 10100,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 30,
            'price_each' => '136.00',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10100,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 50,
            'price_each' => '55.09',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10100,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 22,
            'price_each' => '75.46',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10100,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 49,
            'price_each' => '35.29',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10101,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 25,
            'price_each' => '108.06',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10101,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 26,
            'price_each' => '167.06',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10101,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 45,
            'price_each' => '32.53',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10101,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 46,
            'price_each' => '44.35',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10102,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 39,
            'price_each' => '95.55',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10102,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 41,
            'price_each' => '43.13',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 26,
            'price_each' => '214.30',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 42,
            'price_each' => '119.67',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 27,
            'price_each' => '121.64',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 35,
            'price_each' => '94.50',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 22,
            'price_each' => '58.34',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 27,
            'price_each' => '92.19',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 35,
            'price_each' => '61.84',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 25,
            'price_each' => '86.92',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 46,
            'price_each' => '86.31',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 36,
            'price_each' => '98.07',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 41,
            'price_each' => '40.75',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 36,
            'price_each' => '107.34',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 25,
            'price_each' => '88.62',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 31,
            'price_each' => '92.46',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 45,
            'price_each' => '63.35',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10103,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 42,
            'price_each' => '94.07',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 34,
            'price_each' => '131.44',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 41,
            'price_each' => '111.39',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 24,
            'price_each' => '135.90',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 29,
            'price_each' => '122.73',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 23,
            'price_each' => '165.95',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 38,
            'price_each' => '119.20',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 35,
            'price_each' => '52.02',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 44,
            'price_each' => '30.41',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 26,
            'price_each' => '106.45',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 35,
            'price_each' => '51.95',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 49,
            'price_each' => '56.55',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 33,
            'price_each' => '114.59',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10104,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 32,
            'price_each' => '53.31',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 50,
            'price_each' => '127.84',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 41,
            'price_each' => '205.72',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 29,
            'price_each' => '141.88',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 22,
            'price_each' => '136.59',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 38,
            'price_each' => '87.73',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 41,
            'price_each' => '75.48',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 43,
            'price_each' => '117.97',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 44,
            'price_each' => '73.46',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 50,
            'price_each' => '75.47',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 41,
            'price_each' => '54.00',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 29,
            'price_each' => '86.61',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 31,
            'price_each' => '60.72',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 39,
            'price_each' => '92.16',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 22,
            'price_each' => '99.31',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10105,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 25,
            'price_each' => '44.77',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 36,
            'price_each' => '134.04',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 34,
            'price_each' => '81.10',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 41,
            'price_each' => '80.86',
            'order_line_number' => 18
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 41,
            'price_each' => '94.22',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 28,
            'price_each' => '107.23',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 49,
            'price_each' => '65.77',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 31,
            'price_each' => '55.89',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 50,
            'price_each' => '55.96',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 26,
            'price_each' => '71.00',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 33,
            'price_each' => '65.35',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 39,
            'price_each' => '35.78',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 31,
            'price_each' => '91.34',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 30,
            'price_each' => '85.09',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 34,
            'price_each' => '99.72',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 32,
            'price_each' => '113.90',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 44,
            'price_each' => '76.00',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 48,
            'price_each' => '70.33',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10106,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 48,
            'price_each' => '43.70',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 30,
            'price_each' => '81.35',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 39,
            'price_each' => '105.86',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 27,
            'price_each' => '172.36',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 21,
            'price_each' => '122.00',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 29,
            'price_each' => '52.70',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 25,
            'price_each' => '96.92',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 38,
            'price_each' => '73.12',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10107,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 20,
            'price_each' => '88.90',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 33,
            'price_each' => '165.38',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 45,
            'price_each' => '96.30',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 39,
            'price_each' => '75.81',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 36,
            'price_each' => '107.10',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 38,
            'price_each' => '67.76',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 26,
            'price_each' => '73.17',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 29,
            'price_each' => '132.29',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 43,
            'price_each' => '52.84',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 44,
            'price_each' => '139.87',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 35,
            'price_each' => '64.41',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 30,
            'price_each' => '60.01',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 40,
            'price_each' => '132.00',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 31,
            'price_each' => '67.10',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 27,
            'price_each' => '36.21',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 31,
            'price_each' => '87.76',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10108,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 34,
            'price_each' => '74.85',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 26,
            'price_each' => '117.48',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 38,
            'price_each' => '137.98',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 26,
            'price_each' => '126.72',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 46,
            'price_each' => '160.87',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 47,
            'price_each' => '125.74',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10109,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 29,
            'price_each' => '32.10',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 37,
            'price_each' => '118.22',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 42,
            'price_each' => '153.00',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 32,
            'price_each' => '51.46',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 33,
            'price_each' => '115.69',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 31,
            'price_each' => '163.69',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 28,
            'price_each' => '81.91',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 42,
            'price_each' => '62.00',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 36,
            'price_each' => '72.02',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 29,
            'price_each' => '43.27',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 20,
            'price_each' => '28.88',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 39,
            'price_each' => '40.77',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 43,
            'price_each' => '82.69',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 46,
            'price_each' => '112.74',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 27,
            'price_each' => '80.47',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 37,
            'price_each' => '96.37',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10110,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 48,
            'price_each' => '35.29',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 33,
            'price_each' => '87.33',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 48,
            'price_each' => '48.52',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 28,
            'price_each' => '53.09',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 43,
            'price_each' => '94.25',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 39,
            'price_each' => '91.27',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10111,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 26,
            'price_each' => '85.70',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10112,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 29,
            'price_each' => '197.16',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10112,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 23,
            'price_each' => '85.10',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10113,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 21,
            'price_each' => '121.64',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10113,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 49,
            'price_each' => '101.50',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10113,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 50,
            'price_each' => '43.27',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10113,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 23,
            'price_each' => '58.82',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 31,
            'price_each' => '128.53',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 39,
            'price_each' => '106.78',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 45,
            'price_each' => '53.48',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 48,
            'price_each' => '169.34',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 41,
            'price_each' => '105.34',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 21,
            'price_each' => '102.23',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 24,
            'price_each' => '28.64',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 32,
            'price_each' => '88.61',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 28,
            'price_each' => '43.83',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10114,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 42,
            'price_each' => '82.94',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10115,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 46,
            'price_each' => '111.39',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10115,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 46,
            'price_each' => '140.81',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10115,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 47,
            'price_each' => '56.64',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10115,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 44,
            'price_each' => '106.45',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10115,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 27,
            'price_each' => '100.70',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10116,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 27,
            'price_each' => '60.28',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 33,
            'price_each' => '195.33',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 43,
            'price_each' => '148.06',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 39,
            'price_each' => '173.02',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 26,
            'price_each' => '121.57',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 21,
            'price_each' => '81.68',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 22,
            'price_each' => '122.08',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 23,
            'price_each' => '73.73',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 41,
            'price_each' => '119.20',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 21,
            'price_each' => '55.65',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 38,
            'price_each' => '75.35',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 45,
            'price_each' => '89.38',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10117,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 50,
            'price_each' => '52.42',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10118,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 36,
            'price_each' => '86.15',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 46,
            'price_each' => '112.88',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 43,
            'price_each' => '151.38',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 21,
            'price_each' => '74.84',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 27,
            'price_each' => '95.28',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 41,
            'price_each' => '64.40',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 35,
            'price_each' => '72.58',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 20,
            'price_each' => '63.12',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 35,
            'price_each' => '82.18',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 28,
            'price_each' => '62.10',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 25,
            'price_each' => '57.34',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 29,
            'price_each' => '74.23',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 38,
            'price_each' => '67.22',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 26,
            'price_each' => '63.67',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10119,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 28,
            'price_each' => '40.22',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 29,
            'price_each' => '118.94',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 46,
            'price_each' => '158.80',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 29,
            'price_each' => '82.79',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 46,
            'price_each' => '57.54',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 35,
            'price_each' => '110.45',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 39,
            'price_each' => '93.01',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 34,
            'price_each' => '72.36',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 29,
            'price_each' => '71.73',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 22,
            'price_each' => '94.90',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 29,
            'price_each' => '68.79',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 49,
            'price_each' => '41.46',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 47,
            'price_each' => '91.34',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 24,
            'price_each' => '81.77',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 24,
            'price_each' => '106.79',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10120,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 43,
            'price_each' => '72.00',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10121,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 34,
            'price_each' => '86.13',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10121,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 50,
            'price_each' => '126.52',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10121,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 32,
            'price_each' => '58.18',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10121,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 25,
            'price_each' => '95.93',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10121,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 44,
            'price_each' => '72.41',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 42,
            'price_each' => '155.66',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 37,
            'price_each' => '113.92',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 32,
            'price_each' => '65.44',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 20,
            'price_each' => '104.80',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 34,
            'price_each' => '114.65',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 43,
            'price_each' => '62.37',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 31,
            'price_each' => '113.80',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 25,
            'price_each' => '137.17',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 21,
            'price_each' => '69.15',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 21,
            'price_each' => '133.76',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 35,
            'price_each' => '59.06',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 28,
            'price_each' => '145.82',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 39,
            'price_each' => '34.74',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 34,
            'price_each' => '50.82',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 43,
            'price_each' => '136.22',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 29,
            'price_each' => '67.10',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10122,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 31,
            'price_each' => '33.79',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10123,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 26,
            'price_each' => '120.71',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10123,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 46,
            'price_each' => '114.84',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10123,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 34,
            'price_each' => '117.26',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10123,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 50,
            'price_each' => '43.27',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 21,
            'price_each' => '153.00',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 42,
            'price_each' => '58.12',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 42,
            'price_each' => '111.87',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 36,
            'price_each' => '75.46',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 23,
            'price_each' => '66.28',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 22,
            'price_each' => '62.47',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 45,
            'price_each' => '30.53',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 22,
            'price_each' => '36.29',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 32,
            'price_each' => '74.51',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 25,
            'price_each' => '93.95',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 49,
            'price_each' => '76.19',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 43,
            'price_each' => '101.73',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10124,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 46,
            'price_each' => '36.11',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10125,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 32,
            'price_each' => '89.38',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10125,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 34,
            'price_each' => '138.38',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 38,
            'price_each' => '205.73',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 22,
            'price_each' => '122.62',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 21,
            'price_each' => '135.30',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 38,
            'price_each' => '116.67',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 42,
            'price_each' => '51.21',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 43,
            'price_each' => '51.05',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 31,
            'price_each' => '93.21',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 46,
            'price_each' => '61.84',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 30,
            'price_each' => '93.20',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 38,
            'price_each' => '94.25',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 50,
            'price_each' => '102.92',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 43,
            'price_each' => '47.29',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 27,
            'price_each' => '122.68',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 34,
            'price_each' => '83.76',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 43,
            'price_each' => '82.83',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 26,
            'price_each' => '62.05',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10126,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 45,
            'price_each' => '97.10',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 46,
            'price_each' => '193.25',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 46,
            'price_each' => '140.50',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 42,
            'price_each' => '169.56',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 24,
            'price_each' => '100.73',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 45,
            'price_each' => '140.81',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 45,
            'price_each' => '114.14',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 22,
            'price_each' => '149.02',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 25,
            'price_each' => '126.39',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 20,
            'price_each' => '50.86',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 39,
            'price_each' => '34.30',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 20,
            'price_each' => '107.63',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 45,
            'price_each' => '46.53',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 29,
            'price_each' => '60.90',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 46,
            'price_each' => '111.12',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10127,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 46,
            'price_each' => '55.65',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10128,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 41,
            'price_each' => '120.20',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10128,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 41,
            'price_each' => '80.67',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10128,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 43,
            'price_each' => '77.24',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10128,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 32,
            'price_each' => '72.75',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 33,
            'price_each' => '123.76',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 45,
            'price_each' => '113.06',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 41,
            'price_each' => '81.43',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 50,
            'price_each' => '76.31',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 31,
            'price_each' => '58.67',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 45,
            'price_each' => '72.28',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 42,
            'price_each' => '90.15',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 30,
            'price_each' => '94.34',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10129,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 32,
            'price_each' => '44.23',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10130,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 40,
            'price_each' => '68.82',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10130,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 33,
            'price_each' => '99.52',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 21,
            'price_each' => '141.92',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 35,
            'price_each' => '60.97',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 29,
            'price_each' => '52.60',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 50,
            'price_each' => '54.59',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 22,
            'price_each' => '76.94',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 40,
            'price_each' => '86.76',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 26,
            'price_each' => '63.67',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10131,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 21,
            'price_each' => '40.22',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10132,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 36,
            'price_each' => '80.00',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 49,
            'price_each' => '80.26',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 41,
            'price_each' => '109.42',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 46,
            'price_each' => '61.58',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 23,
            'price_each' => '80.91',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 49,
            'price_each' => '67.41',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 27,
            'price_each' => '37.09',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 24,
            'price_each' => '76.73',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10133,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 27,
            'price_each' => '115.09',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 41,
            'price_each' => '90.92',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 27,
            'price_each' => '116.56',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 31,
            'price_each' => '187.85',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 20,
            'price_each' => '131.04',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 30,
            'price_each' => '51.48',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 35,
            'price_each' => '94.67',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10134,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 43,
            'price_each' => '75.41',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 42,
            'price_each' => '173.17',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 48,
            'price_each' => '110.39',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 24,
            'price_each' => '72.62',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 29,
            'price_each' => '103.64',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 48,
            'price_each' => '66.99',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 45,
            'price_each' => '65.94',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 42,
            'price_each' => '139.64',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 45,
            'price_each' => '49.74',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 31,
            'price_each' => '133.92',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 29,
            'price_each' => '67.18',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 20,
            'price_each' => '34.36',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 27,
            'price_each' => '52.05',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 47,
            'price_each' => '139.03',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 23,
            'price_each' => '76.80',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 33,
            'price_each' => '38.62',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 30,
            'price_each' => '91.85',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10135,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 44,
            'price_each' => '78.92',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10136,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 25,
            'price_each' => '117.48',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10136,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 36,
            'price_each' => '120.91',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10136,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 41,
            'price_each' => '169.34',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10137,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 44,
            'price_each' => '115.73',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10137,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 37,
            'price_each' => '110.88',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10137,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 31,
            'price_each' => '118.68',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10137,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 26,
            'price_each' => '40.25',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 33,
            'price_each' => '149.60',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 22,
            'price_each' => '51.46',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 38,
            'price_each' => '114.42',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 47,
            'price_each' => '79.15',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 23,
            'price_each' => '64.86',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 45,
            'price_each' => '59.53',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 22,
            'price_each' => '33.19',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 33,
            'price_each' => '38.53',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 28,
            'price_each' => '73.60',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 30,
            'price_each' => '96.30',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 49,
            'price_each' => '77.05',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 21,
            'price_each' => '99.58',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10138,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 29,
            'price_each' => '32.82',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 31,
            'price_each' => '89.38',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 49,
            'price_each' => '52.83',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 41,
            'price_each' => '151.88',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 46,
            'price_each' => '91.18',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 20,
            'price_each' => '52.47',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 20,
            'price_each' => '101.58',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 30,
            'price_each' => '81.35',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10139,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 29,
            'price_each' => '93.49',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 37,
            'price_each' => '186.44',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 26,
            'price_each' => '131.49',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 38,
            'price_each' => '118.90',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 32,
            'price_each' => '95.67',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 46,
            'price_each' => '51.05',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 40,
            'price_each' => '100.50',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 29,
            'price_each' => '40.25',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 47,
            'price_each' => '118.84',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 26,
            'price_each' => '87.64',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 28,
            'price_each' => '62.05',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10140,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 36,
            'price_each' => '101.15',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 21,
            'price_each' => '114.95',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 39,
            'price_each' => '160.46',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 47,
            'price_each' => '103.09',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 34,
            'price_each' => '143.94',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 20,
            'price_each' => '50.86',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 21,
            'price_each' => '32.18',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 40,
            'price_each' => '104.09',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 24,
            'price_each' => '53.03',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10141,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 44,
            'price_each' => '94.92',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 33,
            'price_each' => '166.24',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 33,
            'price_each' => '140.50',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 46,
            'price_each' => '167.83',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 47,
            'price_each' => '129.76',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 22,
            'price_each' => '95.80',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 24,
            'price_each' => '122.08',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 24,
            'price_each' => '79.87',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 33,
            'price_each' => '114.29',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 49,
            'price_each' => '74.35',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 42,
            'price_each' => '60.90',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 42,
            'price_each' => '56.24',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 41,
            'price_each' => '55.34',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 43,
            'price_each' => '77.08',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 21,
            'price_each' => '92.16',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 38,
            'price_each' => '91.37',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10142,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 39,
            'price_each' => '46.96',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 49,
            'price_each' => '133.28',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 32,
            'price_each' => '126.15',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 46,
            'price_each' => '70.54',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 34,
            'price_each' => '99.52',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 27,
            'price_each' => '63.71',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 33,
            'price_each' => '59.83',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 23,
            'price_each' => '74.64',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 28,
            'price_each' => '55.96',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 34,
            'price_each' => '34.91',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 36,
            'price_each' => '86.77',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 26,
            'price_each' => '87.80',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 26,
            'price_each' => '79.78',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 31,
            'price_each' => '69.39',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 28,
            'price_each' => '70.40',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 34,
            'price_each' => '65.15',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10143,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 37,
            'price_each' => '49.66',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10144,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 20,
            'price_each' => '56.41',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 45,
            'price_each' => '76.56',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 37,
            'price_each' => '104.67',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 33,
            'price_each' => '154.93',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 49,
            'price_each' => '146.10',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 30,
            'price_each' => '71.81',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 30,
            'price_each' => '52.70',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 43,
            'price_each' => '103.68',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 40,
            'price_each' => '87.54',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 47,
            'price_each' => '63.98',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 27,
            'price_each' => '56.10',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 33,
            'price_each' => '71.73',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 33,
            'price_each' => '99.89',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 31,
            'price_each' => '39.43',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 27,
            'price_each' => '95.93',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 38,
            'price_each' => '73.22',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10145,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 20,
            'price_each' => '113.90',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10146,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 47,
            'price_each' => '60.30',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10146,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 29,
            'price_each' => '130.94',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 48,
            'price_each' => '161.49',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 31,
            'price_each' => '110.39',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 21,
            'price_each' => '74.21',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 33,
            'price_each' => '97.89',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 26,
            'price_each' => '70.84',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 36,
            'price_each' => '74.78',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 37,
            'price_each' => '129.35',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 25,
            'price_each' => '33.23',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 30,
            'price_each' => '48.98',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 23,
            'price_each' => '123.58',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10147,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 31,
            'price_each' => '72.76',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 23,
            'price_each' => '114.65',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 47,
            'price_each' => '108.26',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 25,
            'price_each' => '136.56',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 27,
            'price_each' => '113.52',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 32,
            'price_each' => '143.94',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 28,
            'price_each' => '135.63',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 34,
            'price_each' => '83.75',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 29,
            'price_each' => '66.28',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 25,
            'price_each' => '65.41',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 47,
            'price_each' => '46.29',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 21,
            'price_each' => '77.24',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 34,
            'price_each' => '115.09',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 31,
            'price_each' => '71.91',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10148,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 27,
            'price_each' => '96.37',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 50,
            'price_each' => '87.33',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 30,
            'price_each' => '48.52',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 34,
            'price_each' => '156.40',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 24,
            'price_each' => '50.85',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 33,
            'price_each' => '125.86',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 23,
            'price_each' => '167.06',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 42,
            'price_each' => '89.29',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 36,
            'price_each' => '31.20',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 49,
            'price_each' => '39.87',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 26,
            'price_each' => '38.57',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10149,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 20,
            'price_each' => '90.57',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 45,
            'price_each' => '182.16',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 20,
            'price_each' => '121.15',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 30,
            'price_each' => '135.30',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 34,
            'price_each' => '95.67',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 47,
            'price_each' => '93.21',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 30,
            'price_each' => '56.21',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 26,
            'price_each' => '97.39',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 49,
            'price_each' => '111.39',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 30,
            'price_each' => '47.29',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 49,
            'price_each' => '62.05',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10150,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 20,
            'price_each' => '95.08',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 24,
            'price_each' => '114.95',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 43,
            'price_each' => '152.27',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 49,
            'price_each' => '106.78',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 39,
            'price_each' => '58.34',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 21,
            'price_each' => '167.65',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 42,
            'price_each' => '109.90',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 30,
            'price_each' => '29.35',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 27,
            'price_each' => '84.75',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 41,
            'price_each' => '43.29',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10151,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 26,
            'price_each' => '108.81',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10152,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 35,
            'price_each' => '117.77',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10152,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 25,
            'price_each' => '49.13',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10152,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 23,
            'price_each' => '112.37',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10152,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 33,
            'price_each' => '57.17',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 20,
            'price_each' => '201.57',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 42,
            'price_each' => '128.42',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 49,
            'price_each' => '155.72',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 31,
            'price_each' => '125.66',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 29,
            'price_each' => '82.69',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 22,
            'price_each' => '82.50',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 40,
            'price_each' => '111.83',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 31,
            'price_each' => '53.31',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 43,
            'price_each' => '58.00',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 31,
            'price_each' => '80.55',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 50,
            'price_each' => '87.15',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 20,
            'price_each' => '85.41',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10153,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 50,
            'price_each' => '51.87',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10154,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 31,
            'price_each' => '75.23',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10154,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 36,
            'price_each' => '59.27',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 32,
            'price_each' => '129.20',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 38,
            'price_each' => '138.77',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 44,
            'price_each' => '83.44',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 29,
            'price_each' => '105.87',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 23,
            'price_each' => '62.34',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 34,
            'price_each' => '56.55',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 37,
            'price_each' => '76.31',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 44,
            'price_each' => '58.69',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 32,
            'price_each' => '89.61',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 20,
            'price_each' => '87.75',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 43,
            'price_each' => '76.80',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 44,
            'price_each' => '70.33',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10155,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 34,
            'price_each' => '49.16',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10156,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 20,
            'price_each' => '43.64',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10156,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 48,
            'price_each' => '77.64',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 33,
            'price_each' => '69.27',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 40,
            'price_each' => '89.72',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 33,
            'price_each' => '66.65',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 34,
            'price_each' => '83.91',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 28,
            'price_each' => '56.41',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10157,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 48,
            'price_each' => '109.16',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10158,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 22,
            'price_each' => '67.79',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 49,
            'price_each' => '81.35',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 37,
            'price_each' => '101.10',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 22,
            'price_each' => '170.42',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 41,
            'price_each' => '188.73',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 38,
            'price_each' => '131.04',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 24,
            'price_each' => '67.03',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 42,
            'price_each' => '51.48',
            'order_line_number' => 18
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 21,
            'price_each' => '66.74',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 25,
            'price_each' => '129.35',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 21,
            'price_each' => '54.71',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 32,
            'price_each' => '142.85',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 44,
            'price_each' => '100.30',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 27,
            'price_each' => '67.18',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 50,
            'price_each' => '49.60',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 23,
            'price_each' => '80.84',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 35,
            'price_each' => '39.43',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 23,
            'price_each' => '86.74',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10159,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 31,
            'price_each' => '78.11',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 46,
            'price_each' => '96.30',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 50,
            'price_each' => '93.28',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 38,
            'price_each' => '70.84',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 20,
            'price_each' => '140.55',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 42,
            'price_each' => '30.59',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10160,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 35,
            'price_each' => '130.60',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 28,
            'price_each' => '121.72',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 43,
            'price_each' => '102.04',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 48,
            'price_each' => '139.41',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 23,
            'price_each' => '125.40',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 36,
            'price_each' => '132.80',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 25,
            'price_each' => '62.72',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 37,
            'price_each' => '73.49',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 23,
            'price_each' => '47.29',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 20,
            'price_each' => '82.69',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 25,
            'price_each' => '108.04',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 20,
            'price_each' => '72.77',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10161,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 30,
            'price_each' => '94.23',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 48,
            'price_each' => '87.33',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 45,
            'price_each' => '45.28',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 29,
            'price_each' => '141.10',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 27,
            'price_each' => '53.28',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 38,
            'price_each' => '113.15',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 48,
            'price_each' => '156.94',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 39,
            'price_each' => '86.51',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 37,
            'price_each' => '27.55',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 43,
            'price_each' => '38.98',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10162,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 37,
            'price_each' => '32.82',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 21,
            'price_each' => '212.16',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 31,
            'price_each' => '101.31',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 48,
            'price_each' => '59.96',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 40,
            'price_each' => '101.58',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 43,
            'price_each' => '80.36',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10163,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 42,
            'price_each' => '96.42',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 21,
            'price_each' => '143.31',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 49,
            'price_each' => '121.64',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 36,
            'price_each' => '103.84',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 45,
            'price_each' => '107.76',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 25,
            'price_each' => '46.29',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 24,
            'price_each' => '91.49',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 49,
            'price_each' => '57.53',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10164,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 39,
            'price_each' => '86.99',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 44,
            'price_each' => '168.32',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 34,
            'price_each' => '123.89',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 27,
            'price_each' => '152.26',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 48,
            'price_each' => '109.02',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 29,
            'price_each' => '134.26',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 46,
            'price_each' => '120.28',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 31,
            'price_each' => '60.77',
            'order_line_number' => 18
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 47,
            'price_each' => '154.10',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 50,
            'price_each' => '84.71',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 28,
            'price_each' => '123.51',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 25,
            'price_each' => '46.82',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 32,
            'price_each' => '117.57',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 27,
            'price_each' => '31.12',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 24,
            'price_each' => '106.45',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 48,
            'price_each' => '50.86',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 44,
            'price_each' => '55.30',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 48,
            'price_each' => '106.49',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10165,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 38,
            'price_each' => '49.21',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10166,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 43,
            'price_each' => '136.59',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10166,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 26,
            'price_each' => '72.85',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10166,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 29,
            'price_each' => '76.22',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 44,
            'price_each' => '123.76',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 43,
            'price_each' => '141.92',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 46,
            'price_each' => '69.68',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 34,
            'price_each' => '84.70',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 33,
            'price_each' => '110.60',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 21,
            'price_each' => '54.81',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 20,
            'price_each' => '77.00',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 32,
            'price_each' => '64.44',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 29,
            'price_each' => '73.80',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 43,
            'price_each' => '66.00',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 29,
            'price_each' => '87.80',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 46,
            'price_each' => '62.16',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 24,
            'price_each' => '85.14',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 28,
            'price_each' => '83.42',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 40,
            'price_each' => '42.71',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10167,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 38,
            'price_each' => '43.68',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 36,
            'price_each' => '94.74',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 27,
            'price_each' => '97.53',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 20,
            'price_each' => '160.74',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 21,
            'price_each' => '75.19',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 46,
            'price_each' => '49.06',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 50,
            'price_each' => '103.68',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 49,
            'price_each' => '93.01',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 29,
            'price_each' => '72.36',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 27,
            'price_each' => '57.32',
            'order_line_number' => 18
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 48,
            'price_each' => '68.10',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 28,
            'price_each' => '89.90',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 31,
            'price_each' => '57.78',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 48,
            'price_each' => '39.71',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 28,
            'price_each' => '91.34',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 31,
            'price_each' => '87.75',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 36,
            'price_each' => '94.92',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 48,
            'price_each' => '72.00',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10168,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 39,
            'price_each' => '67.37',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 30,
            'price_each' => '163.44',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 35,
            'price_each' => '126.52',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 36,
            'price_each' => '71.82',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 32,
            'price_each' => '65.13',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 36,
            'price_each' => '136.70',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 38,
            'price_each' => '52.84',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 33,
            'price_each' => '120.53',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 38,
            'price_each' => '66.49',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 34,
            'price_each' => '53.27',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 24,
            'price_each' => '77.61',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 26,
            'price_each' => '37.01',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 34,
            'price_each' => '83.68',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10169,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 48,
            'price_each' => '75.66',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10170,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 47,
            'price_each' => '116.27',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10170,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 41,
            'price_each' => '93.28',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10170,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 20,
            'price_each' => '70.07',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10170,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 34,
            'price_each' => '130.60',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10171,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 35,
            'price_each' => '134.46',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10171,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 35,
            'price_each' => '128.03',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10171,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 39,
            'price_each' => '165.95',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10171,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 36,
            'price_each' => '34.74',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 42,
            'price_each' => '109.51',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 39,
            'price_each' => '117.48',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 48,
            'price_each' => '139.87',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S24_1046',
            'quantity_ordered' => 32,
            'price_each' => '61.00',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 34,
            'price_each' => '43.27',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S24_2766',
            'quantity_ordered' => 22,
            'price_each' => '79.97',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S24_3191',
            'quantity_ordered' => 24,
            'price_each' => '77.91',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10172,
            'product_code' => 'S24_3432',
            'quantity_ordered' => 22,
            'price_each' => '87.81',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_1342',
            'quantity_ordered' => 43,
            'price_each' => '101.71',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_1367',
            'quantity_ordered' => 48,
            'price_each' => '51.75',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_1749',
            'quantity_ordered' => 24,
            'price_each' => '168.30',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_2248',
            'quantity_ordered' => 26,
            'price_each' => '55.09',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_2325',
            'quantity_ordered' => 31,
            'price_each' => '127.13',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_2795',
            'quantity_ordered' => 22,
            'price_each' => '140.06',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_2957',
            'quantity_ordered' => 28,
            'price_each' => '56.84',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_3136',
            'quantity_ordered' => 31,
            'price_each' => '86.92',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_3320',
            'quantity_ordered' => 29,
            'price_each' => '90.28',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_4409',
            'quantity_ordered' => 21,
            'price_each' => '77.31',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S18_4933',
            'quantity_ordered' => 39,
            'price_each' => '58.44',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S24_1937',
            'quantity_ordered' => 31,
            'price_each' => '29.87',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S24_2022',
            'quantity_ordered' => 27,
            'price_each' => '39.42',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S24_2887',
            'quantity_ordered' => 23,
            'price_each' => '98.65',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S24_3969',
            'quantity_ordered' => 35,
            'price_each' => '35.70',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10173,
            'product_code' => 'S24_4258',
            'quantity_ordered' => 22,
            'price_each' => '93.49',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10174,
            'product_code' => 'S10_1949',
            'quantity_ordered' => 34,
            'price_each' => '207.87',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10174,
            'product_code' => 'S12_1666',
            'quantity_ordered' => 43,
            'price_each' => '113.44',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10174,
            'product_code' => 'S18_1097',
            'quantity_ordered' => 48,
            'price_each' => '108.50',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10174,
            'product_code' => 'S18_2949',
            'quantity_ordered' => 46,
            'price_each' => '100.30',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10174,
            'product_code' => 'S18_4668',
            'quantity_ordered' => 49,
            'price_each' => '44.27',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S10_4962',
            'quantity_ordered' => 33,
            'price_each' => '119.67',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S12_4473',
            'quantity_ordered' => 26,
            'price_each' => '109.02',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S18_2319',
            'quantity_ordered' => 48,
            'price_each' => '101.87',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S18_2432',
            'quantity_ordered' => 41,
            'price_each' => '59.55',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 29,
            'price_each' => '150.71',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S18_4600',
            'quantity_ordered' => 47,
            'price_each' => '102.92',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S24_2300',
            'quantity_ordered' => 28,
            'price_each' => '121.40',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S24_2840',
            'quantity_ordered' => 37,
            'price_each' => '32.18',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S32_1268',
            'quantity_ordered' => 22,
            'price_each' => '89.57',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S32_2509',
            'quantity_ordered' => 50,
            'price_each' => '50.86',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S32_3522',
            'quantity_ordered' => 29,
            'price_each' => '56.24',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10175,
            'product_code' => 'S700_2824',
            'quantity_ordered' => 42,
            'price_each' => '80.92',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S12_1108',
            'quantity_ordered' => 33,
            'price_each' => '166.24',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S12_3148',
            'quantity_ordered' => 47,
            'price_each' => '145.04',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S12_3891',
            'quantity_ordered' => 50,
            'price_each' => '160.91',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S18_2238',
            'quantity_ordered' => 20,
            'price_each' => '139.17',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S18_4027',
            'quantity_ordered' => 36,
            'price_each' => '140.75',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S24_1444',
            'quantity_ordered' => 27,
            'price_each' => '55.49',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S24_4048',
            'quantity_ordered' => 29,
            'price_each' => '101.72',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S32_3207',
            'quantity_ordered' => 22,
            'price_each' => '62.14',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S50_1392',
            'quantity_ordered' => 23,
            'price_each' => '109.96',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10176,
            'product_code' => 'S50_1514',
            'quantity_ordered' => 38,
            'price_each' => '52.14',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S18_3140',
            'quantity_ordered' => 23,
            'price_each' => '113.37',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S18_3259',
            'quantity_ordered' => 29,
            'price_each' => '92.77',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S18_4522',
            'quantity_ordered' => 35,
            'price_each' => '82.50',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S24_2011',
            'quantity_ordered' => 50,
            'price_each' => '115.52',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S24_3151',
            'quantity_ordered' => 45,
            'price_each' => '79.66',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S700_1138',
            'quantity_ordered' => 24,
            'price_each' => '58.67',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S700_1938',
            'quantity_ordered' => 31,
            'price_each' => '77.95',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S700_2610',
            'quantity_ordered' => 32,
            'price_each' => '64.33',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S700_3505',
            'quantity_ordered' => 44,
            'price_each' => '88.15',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S700_3962',
            'quantity_ordered' => 24,
            'price_each' => '83.42',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10177,
            'product_code' => 'S72_3212',
            'quantity_ordered' => 40,
            'price_each' => '52.96',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S10_4757',
            'quantity_ordered' => 24,
            'price_each' => '131.92',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S18_1662',
            'quantity_ordered' => 42,
            'price_each' => '127.73',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S18_3029',
            'quantity_ordered' => 41,
            'price_each' => '70.54',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S18_3856',
            'quantity_ordered' => 48,
            'price_each' => '104.81',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S24_2841',
            'quantity_ordered' => 34,
            'price_each' => '67.82',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S24_3420',
            'quantity_ordered' => 27,
            'price_each' => '65.75',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S24_3816',
            'quantity_ordered' => 21,
            'price_each' => '68.77',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S24_3949',
            'quantity_ordered' => 30,
            'price_each' => '64.15',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S700_2047',
            'quantity_ordered' => 34,
            'price_each' => '86.90',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S700_2466',
            'quantity_ordered' => 22,
            'price_each' => '91.74',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S700_4002',
            'quantity_ordered' => 45,
            'price_each' => '68.11',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10178,
            'product_code' => 'S72_1253',
            'quantity_ordered' => 45,
            'price_each' => '41.71',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S18_2581',
            'quantity_ordered' => 24,
            'price_each' => '82.79',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S24_1785',
            'quantity_ordered' => 47,
            'price_each' => '105.04',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S24_4278',
            'quantity_ordered' => 27,
            'price_each' => '66.65',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S32_1374',
            'quantity_ordered' => 45,
            'price_each' => '86.90',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S32_4289',
            'quantity_ordered' => 24,
            'price_each' => '63.97',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S50_1341',
            'quantity_ordered' => 34,
            'price_each' => '43.20',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S700_1691',
            'quantity_ordered' => 23,
            'price_each' => '75.81',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S700_2834',
            'quantity_ordered' => 25,
            'price_each' => '98.48',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10179,
            'product_code' => 'S700_3167',
            'quantity_ordered' => 39,
            'price_each' => '80.00',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S10_1678',
            'quantity_ordered' => 29,
            'price_each' => '76.56',
            'order_line_number' => 9
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S10_2016',
            'quantity_ordered' => 42,
            'price_each' => '99.91',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S10_4698',
            'quantity_ordered' => 41,
            'price_each' => '164.61',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S12_2823',
            'quantity_ordered' => 40,
            'price_each' => '131.04',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S18_2625',
            'quantity_ordered' => 25,
            'price_each' => '48.46',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S18_3782',
            'quantity_ordered' => 21,
            'price_each' => '59.06',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S18_4721',
            'quantity_ordered' => 44,
            'price_each' => '147.31',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S24_1578',
            'quantity_ordered' => 48,
            'price_each' => '98.05',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S24_2000',
            'quantity_ordered' => 28,
            'price_each' => '61.70',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S24_2360',
            'quantity_ordered' => 35,
            'price_each' => '60.95',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S24_4620',
            'quantity_ordered' => 28,
            'price_each' => '68.71',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S32_2206',
            'quantity_ordered' => 34,
            'price_each' => '33.39',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S32_4485',
            'quantity_ordered' => 22,
            'price_each' => '102.05',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10180,
            'product_code' => 'S50_4713',
            'quantity_ordered' => 21,
            'price_each' => '74.85',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S12_1099',
            'quantity_ordered' => 27,
            'price_each' => '155.66',
            'order_line_number' => 14
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S12_3380',
            'quantity_ordered' => 28,
            'price_each' => '113.92',
            'order_line_number' => 12
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S12_3990',
            'quantity_ordered' => 20,
            'price_each' => '67.03',
            'order_line_number' => 15
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S12_4675',
            'quantity_ordered' => 36,
            'price_each' => '107.10',
            'order_line_number' => 11
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_1129',
            'quantity_ordered' => 44,
            'price_each' => '124.56',
            'order_line_number' => 6
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_1589',
            'quantity_ordered' => 42,
            'price_each' => '124.44',
            'order_line_number' => 2
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_1889',
            'quantity_ordered' => 22,
            'price_each' => '74.69',
            'order_line_number' => 10
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_1984',
            'quantity_ordered' => 21,
            'price_each' => '129.45',
            'order_line_number' => 5
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_2870',
            'quantity_ordered' => 27,
            'price_each' => '130.68',
            'order_line_number' => 3
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_3232',
            'quantity_ordered' => 45,
            'price_each' => '147.33',
            'order_line_number' => 7
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_3278',
            'quantity_ordered' => 30,
            'price_each' => '73.17',
            'order_line_number' => 17
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_3482',
            'quantity_ordered' => 22,
            'price_each' => '120.53',
            'order_line_number' => 16
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S18_3685',
            'quantity_ordered' => 39,
            'price_each' => '137.04',
            'order_line_number' => 4
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S24_1628',
            'quantity_ordered' => 34,
            'price_each' => '45.28',
            'order_line_number' => 1
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S24_2972',
            'quantity_ordered' => 37,
            'price_each' => '32.85',
            'order_line_number' => 8
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S24_3371',
            'quantity_ordered' => 23,
            'price_each' => '54.49',
            'order_line_number' => 13
        ]);



        OrderDetail::create([
            'order_number' => 10181,
            'product_code' => 'S24_3856',
            'quantity_ordered' => 25,
            'price_each' => '122.17',
            'order_line_number' => 9
        ]);

        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_1342', 'quantity_ordered' => 25, 'price_each' => '83.22', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_1367', 'quantity_ordered' => 32, 'price_each' => '44.21', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_1749', 'quantity_ordered' => 44, 'price_each' => '159.80', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_2248', 'quantity_ordered' => 38, 'price_each' => '54.49', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_2325', 'quantity_ordered' => 20, 'price_each' => '105.52', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_2795', 'quantity_ordered' => 21, 'price_each' => '135.00', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_3320', 'quantity_ordered' => 33, 'price_each' => '86.31', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_4409', 'quantity_ordered' => 36, 'price_each' => '88.35', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S18_4933', 'quantity_ordered' => 44, 'price_each' => '61.29', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_1046', 'quantity_ordered' => 47, 'price_each' => '63.20', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_1937', 'quantity_ordered' => 39, 'price_each' => '31.86', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_2022', 'quantity_ordered' => 31, 'price_each' => '39.87', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_2766', 'quantity_ordered' => 36, 'price_each' => '87.24', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_2887', 'quantity_ordered' => 20, 'price_each' => '116.27', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_3191', 'quantity_ordered' => 33, 'price_each' => '73.62', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_3432', 'quantity_ordered' => 49, 'price_each' => '95.30', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10182, 'product_code' => 'S24_3969', 'quantity_ordered' => 23, 'price_each' => '34.88', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S10_1949', 'quantity_ordered' => 23, 'price_each' => '180.01', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S10_4962', 'quantity_ordered' => 28, 'price_each' => '127.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S12_1666', 'quantity_ordered' => 41, 'price_each' => '114.80', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_1097', 'quantity_ordered' => 21, 'price_each' => '108.50', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_2949', 'quantity_ordered' => 37, 'price_each' => '91.18', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_2957', 'quantity_ordered' => 39, 'price_each' => '51.22', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_3136', 'quantity_ordered' => 22, 'price_each' => '90.06', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_4600', 'quantity_ordered' => 21, 'price_each' => '118.66', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S18_4668', 'quantity_ordered' => 40, 'price_each' => '42.26', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S24_4258', 'quantity_ordered' => 47, 'price_each' => '81.81', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S32_3522', 'quantity_ordered' => 49, 'price_each' => '52.36', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10183, 'product_code' => 'S700_2824', 'quantity_ordered' => 23, 'price_each' => '85.98', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S12_4473', 'quantity_ordered' => 37, 'price_each' => '105.47', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S18_2238', 'quantity_ordered' => 46, 'price_each' => '145.72', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S18_2319', 'quantity_ordered' => 46, 'price_each' => '119.05', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S18_2432', 'quantity_ordered' => 44, 'price_each' => '60.77', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S18_3232', 'quantity_ordered' => 28, 'price_each' => '165.95', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S24_1444', 'quantity_ordered' => 31, 'price_each' => '57.22', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S24_2300', 'quantity_ordered' => 24, 'price_each' => '117.57', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S24_2840', 'quantity_ordered' => 42, 'price_each' => '30.06', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S24_4048', 'quantity_ordered' => 49, 'price_each' => '114.73', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S32_1268', 'quantity_ordered' => 46, 'price_each' => '84.75', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S32_2509', 'quantity_ordered' => 33, 'price_each' => '52.49', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S32_3207', 'quantity_ordered' => 48, 'price_each' => '59.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10184, 'product_code' => 'S50_1392', 'quantity_ordered' => 45, 'price_each' => '92.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S12_1108', 'quantity_ordered' => 21, 'price_each' => '195.33', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S12_3148', 'quantity_ordered' => 33, 'price_each' => '146.55', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S12_3891', 'quantity_ordered' => 43, 'price_each' => '147.07', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S18_3140', 'quantity_ordered' => 28, 'price_each' => '124.30', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S18_3259', 'quantity_ordered' => 49, 'price_each' => '94.79', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S18_4027', 'quantity_ordered' => 39, 'price_each' => '127.82', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S18_4522', 'quantity_ordered' => 47, 'price_each' => '87.77', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S24_2011', 'quantity_ordered' => 30, 'price_each' => '105.69', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S24_3151', 'quantity_ordered' => 33, 'price_each' => '83.20', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S50_1514', 'quantity_ordered' => 20, 'price_each' => '46.86', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S700_1138', 'quantity_ordered' => 21, 'price_each' => '64.67', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S700_1938', 'quantity_ordered' => 30, 'price_each' => '79.68', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S700_2610', 'quantity_ordered' => 39, 'price_each' => '61.44', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S700_3505', 'quantity_ordered' => 37, 'price_each' => '99.17', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S700_3962', 'quantity_ordered' => 22, 'price_each' => '93.35', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10185, 'product_code' => 'S72_3212', 'quantity_ordered' => 28, 'price_each' => '47.50', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S10_4757', 'quantity_ordered' => 26, 'price_each' => '108.80', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S18_1662', 'quantity_ordered' => 32, 'price_each' => '137.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S18_3029', 'quantity_ordered' => 32, 'price_each' => '73.12', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S18_3856', 'quantity_ordered' => 46, 'price_each' => '98.46', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S24_2841', 'quantity_ordered' => 22, 'price_each' => '60.29', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S24_3420', 'quantity_ordered' => 21, 'price_each' => '59.83', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S24_3816', 'quantity_ordered' => 36, 'price_each' => '68.77', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S700_2047', 'quantity_ordered' => 24, 'price_each' => '80.56', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10186, 'product_code' => 'S72_1253', 'quantity_ordered' => 28, 'price_each' => '42.71', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S18_2581', 'quantity_ordered' => 45, 'price_each' => '70.12', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S24_1785', 'quantity_ordered' => 46, 'price_each' => '96.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S24_3949', 'quantity_ordered' => 43, 'price_each' => '55.96', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S24_4278', 'quantity_ordered' => 33, 'price_each' => '64.48', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S32_4289', 'quantity_ordered' => 31, 'price_each' => '61.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S50_1341', 'quantity_ordered' => 41, 'price_each' => '39.71', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S700_1691', 'quantity_ordered' => 34, 'price_each' => '84.95', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S700_2466', 'quantity_ordered' => 44, 'price_each' => '95.73', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S700_3167', 'quantity_ordered' => 34, 'price_each' => '72.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10187, 'product_code' => 'S700_4002', 'quantity_ordered' => 44, 'price_each' => '70.33', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S10_1678', 'quantity_ordered' => 48, 'price_each' => '95.70', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S10_2016', 'quantity_ordered' => 38, 'price_each' => '111.80', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S10_4698', 'quantity_ordered' => 45, 'price_each' => '182.04', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S18_2625', 'quantity_ordered' => 32, 'price_each' => '52.09', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S24_1578', 'quantity_ordered' => 25, 'price_each' => '95.80', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S24_2000', 'quantity_ordered' => 40, 'price_each' => '61.70', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S32_1374', 'quantity_ordered' => 44, 'price_each' => '81.91', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10188, 'product_code' => 'S700_2834', 'quantity_ordered' => 29, 'price_each' => '96.11', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10189, 'product_code' => 'S12_2823', 'quantity_ordered' => 28, 'price_each' => '138.57', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10190, 'product_code' => 'S24_2360', 'quantity_ordered' => 42, 'price_each' => '58.87', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10190, 'product_code' => 'S32_2206', 'quantity_ordered' => 46, 'price_each' => '38.62', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10190, 'product_code' => 'S32_4485', 'quantity_ordered' => 42, 'price_each' => '89.80', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10190, 'product_code' => 'S50_4713', 'quantity_ordered' => 40, 'price_each' => '67.53', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S12_1099', 'quantity_ordered' => 21, 'price_each' => '155.66', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S12_3380', 'quantity_ordered' => 40, 'price_each' => '104.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S12_3990', 'quantity_ordered' => 30, 'price_each' => '70.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S18_3278', 'quantity_ordered' => 36, 'price_each' => '75.59', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S18_3482', 'quantity_ordered' => 23, 'price_each' => '119.06', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S18_3782', 'quantity_ordered' => 43, 'price_each' => '60.93', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S18_4721', 'quantity_ordered' => 32, 'price_each' => '136.90', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S24_3371', 'quantity_ordered' => 48, 'price_each' => '53.27', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10191, 'product_code' => 'S24_4620', 'quantity_ordered' => 44, 'price_each' => '77.61', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S12_4675', 'quantity_ordered' => 27, 'price_each' => '99.04', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_1129', 'quantity_ordered' => 22, 'price_each' => '140.12', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_1589', 'quantity_ordered' => 29, 'price_each' => '100.80', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_1889', 'quantity_ordered' => 45, 'price_each' => '70.84', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_1984', 'quantity_ordered' => 47, 'price_each' => '128.03', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_2870', 'quantity_ordered' => 38, 'price_each' => '110.88', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_3232', 'quantity_ordered' => 26, 'price_each' => '137.17', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S18_3685', 'quantity_ordered' => 45, 'price_each' => '125.74', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_1046', 'quantity_ordered' => 37, 'price_each' => '72.02', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_1628', 'quantity_ordered' => 47, 'price_each' => '49.30', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_2766', 'quantity_ordered' => 46, 'price_each' => '86.33', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_2887', 'quantity_ordered' => 23, 'price_each' => '112.74', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_2972', 'quantity_ordered' => 30, 'price_each' => '33.23', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_3191', 'quantity_ordered' => 32, 'price_each' => '69.34', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_3432', 'quantity_ordered' => 46, 'price_each' => '93.16', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10192, 'product_code' => 'S24_3856', 'quantity_ordered' => 45, 'price_each' => '112.34', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_1342', 'quantity_ordered' => 28, 'price_each' => '92.47', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_1367', 'quantity_ordered' => 46, 'price_each' => '46.36', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_1749', 'quantity_ordered' => 21, 'price_each' => '153.00', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_2248', 'quantity_ordered' => 42, 'price_each' => '60.54', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_2325', 'quantity_ordered' => 44, 'price_each' => '115.69', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_2795', 'quantity_ordered' => 22, 'price_each' => '143.44', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_2949', 'quantity_ordered' => 28, 'price_each' => '87.13', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_2957', 'quantity_ordered' => 24, 'price_each' => '53.09', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_3136', 'quantity_ordered' => 23, 'price_each' => '97.39', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_3320', 'quantity_ordered' => 32, 'price_each' => '79.37', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_4409', 'quantity_ordered' => 24, 'price_each' => '92.03', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S18_4933', 'quantity_ordered' => 25, 'price_each' => '66.28', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S24_1937', 'quantity_ordered' => 26, 'price_each' => '32.19', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S24_2022', 'quantity_ordered' => 20, 'price_each' => '44.80', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S24_3969', 'quantity_ordered' => 22, 'price_each' => '38.16', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10193, 'product_code' => 'S24_4258', 'quantity_ordered' => 20, 'price_each' => '92.52', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S10_1949', 'quantity_ordered' => 42, 'price_each' => '203.59', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S10_4962', 'quantity_ordered' => 26, 'price_each' => '134.44', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S12_1666', 'quantity_ordered' => 38, 'price_each' => '124.37', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S18_1097', 'quantity_ordered' => 21, 'price_each' => '103.84', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S18_2432', 'quantity_ordered' => 45, 'price_each' => '51.05', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S18_4600', 'quantity_ordered' => 32, 'price_each' => '113.82', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S18_4668', 'quantity_ordered' => 41, 'price_each' => '47.79', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S24_2300', 'quantity_ordered' => 49, 'price_each' => '112.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S32_1268', 'quantity_ordered' => 37, 'price_each' => '77.05', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S32_3522', 'quantity_ordered' => 39, 'price_each' => '61.41', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10194, 'product_code' => 'S700_2824', 'quantity_ordered' => 26, 'price_each' => '80.92', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S12_4473', 'quantity_ordered' => 49, 'price_each' => '118.50', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S18_2238', 'quantity_ordered' => 27, 'price_each' => '139.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S18_2319', 'quantity_ordered' => 35, 'price_each' => '112.91', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S18_3232', 'quantity_ordered' => 50, 'price_each' => '150.71', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S24_1444', 'quantity_ordered' => 44, 'price_each' => '54.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S24_2840', 'quantity_ordered' => 32, 'price_each' => '31.82', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S24_4048', 'quantity_ordered' => 34, 'price_each' => '95.81', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S32_2509', 'quantity_ordered' => 32, 'price_each' => '51.95', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S32_3207', 'quantity_ordered' => 33, 'price_each' => '59.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10195, 'product_code' => 'S50_1392', 'quantity_ordered' => 49, 'price_each' => '97.23', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S12_1108', 'quantity_ordered' => 47, 'price_each' => '203.64', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S12_3148', 'quantity_ordered' => 24, 'price_each' => '151.08', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S12_3891', 'quantity_ordered' => 38, 'price_each' => '147.07', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S18_3140', 'quantity_ordered' => 49, 'price_each' => '127.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S18_3259', 'quantity_ordered' => 35, 'price_each' => '81.68', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S18_4027', 'quantity_ordered' => 27, 'price_each' => '126.39', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S50_1514', 'quantity_ordered' => 46, 'price_each' => '56.82', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10196, 'product_code' => 'S700_1938', 'quantity_ordered' => 50, 'price_each' => '84.88', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S10_4757', 'quantity_ordered' => 45, 'price_each' => '118.32', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S18_3029', 'quantity_ordered' => 46, 'price_each' => '83.44', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S18_3856', 'quantity_ordered' => 22, 'price_each' => '85.75', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S18_4522', 'quantity_ordered' => 50, 'price_each' => '78.99', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S24_2011', 'quantity_ordered' => 41, 'price_each' => '109.37', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S24_3151', 'quantity_ordered' => 47, 'price_each' => '83.20', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S24_3816', 'quantity_ordered' => 22, 'price_each' => '67.93', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S700_1138', 'quantity_ordered' => 23, 'price_each' => '60.00', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S700_2047', 'quantity_ordered' => 24, 'price_each' => '78.75', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S700_2610', 'quantity_ordered' => 50, 'price_each' => '66.50', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S700_3505', 'quantity_ordered' => 27, 'price_each' => '100.17', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S700_3962', 'quantity_ordered' => 35, 'price_each' => '88.39', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S72_1253', 'quantity_ordered' => 29, 'price_each' => '39.73', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10197, 'product_code' => 'S72_3212', 'quantity_ordered' => 42, 'price_each' => '48.59', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S18_1662', 'quantity_ordered' => 42, 'price_each' => '149.81', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S24_2841', 'quantity_ordered' => 48, 'price_each' => '60.97', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S24_3420', 'quantity_ordered' => 27, 'price_each' => '61.81', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S24_3949', 'quantity_ordered' => 43, 'price_each' => '65.51', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S700_2466', 'quantity_ordered' => 42, 'price_each' => '94.73', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10198, 'product_code' => 'S700_4002', 'quantity_ordered' => 40, 'price_each' => '74.03', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10199, 'product_code' => 'S50_1341', 'quantity_ordered' => 29, 'price_each' => '37.97', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10199, 'product_code' => 'S700_1691', 'quantity_ordered' => 48, 'price_each' => '81.29', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10199, 'product_code' => 'S700_3167', 'quantity_ordered' => 38, 'price_each' => '70.40', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S18_2581', 'quantity_ordered' => 28, 'price_each' => '74.34', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S24_1785', 'quantity_ordered' => 33, 'price_each' => '99.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S24_4278', 'quantity_ordered' => 39, 'price_each' => '70.28', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S32_1374', 'quantity_ordered' => 35, 'price_each' => '80.91', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S32_4289', 'quantity_ordered' => 27, 'price_each' => '65.35', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10200, 'product_code' => 'S700_2834', 'quantity_ordered' => 39, 'price_each' => '115.09', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S10_1678', 'quantity_ordered' => 22, 'price_each' => '82.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S10_2016', 'quantity_ordered' => 24, 'price_each' => '116.56', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S10_4698', 'quantity_ordered' => 49, 'price_each' => '191.72', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S12_2823', 'quantity_ordered' => 25, 'price_each' => '126.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S18_2625', 'quantity_ordered' => 30, 'price_each' => '48.46', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S24_1578', 'quantity_ordered' => 39, 'price_each' => '93.54', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10201, 'product_code' => 'S24_2000', 'quantity_ordered' => 25, 'price_each' => '66.27', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S18_3782', 'quantity_ordered' => 30, 'price_each' => '55.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S18_4721', 'quantity_ordered' => 43, 'price_each' => '124.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S24_2360', 'quantity_ordered' => 50, 'price_each' => '56.10', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S24_4620', 'quantity_ordered' => 50, 'price_each' => '75.18', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S32_2206', 'quantity_ordered' => 27, 'price_each' => '33.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S32_4485', 'quantity_ordered' => 31, 'price_each' => '81.64', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10202, 'product_code' => 'S50_4713', 'quantity_ordered' => 40, 'price_each' => '79.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S12_1099', 'quantity_ordered' => 20, 'price_each' => '161.49', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S12_3380', 'quantity_ordered' => 20, 'price_each' => '111.57', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S12_3990', 'quantity_ordered' => 44, 'price_each' => '63.84', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S12_4675', 'quantity_ordered' => 47, 'price_each' => '115.16', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S18_1889', 'quantity_ordered' => 45, 'price_each' => '73.15', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S18_3232', 'quantity_ordered' => 48, 'price_each' => '157.49', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S18_3278', 'quantity_ordered' => 33, 'price_each' => '66.74', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S18_3482', 'quantity_ordered' => 32, 'price_each' => '127.88', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S24_2972', 'quantity_ordered' => 21, 'price_each' => '33.23', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S24_3371', 'quantity_ordered' => 34, 'price_each' => '56.94', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10203, 'product_code' => 'S24_3856', 'quantity_ordered' => 47, 'price_each' => '140.43', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_1129', 'quantity_ordered' => 42, 'price_each' => '114.65', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_1589', 'quantity_ordered' => 40, 'price_each' => '113.24', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_1749', 'quantity_ordered' => 33, 'price_each' => '153.00', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_1984', 'quantity_ordered' => 38, 'price_each' => '133.72', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_2248', 'quantity_ordered' => 23, 'price_each' => '59.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_2325', 'quantity_ordered' => 26, 'price_each' => '119.50', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_2870', 'quantity_ordered' => 27, 'price_each' => '106.92', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_3685', 'quantity_ordered' => 35, 'price_each' => '132.80', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_4409', 'quantity_ordered' => 29, 'price_each' => '83.75', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S18_4933', 'quantity_ordered' => 45, 'price_each' => '69.84', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_1046', 'quantity_ordered' => 20, 'price_each' => '69.82', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_1628', 'quantity_ordered' => 45, 'price_each' => '46.79', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_2766', 'quantity_ordered' => 47, 'price_each' => '79.06', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_2887', 'quantity_ordered' => 42, 'price_each' => '112.74', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_3191', 'quantity_ordered' => 40, 'price_each' => '84.75', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_3432', 'quantity_ordered' => 48, 'price_each' => '104.94', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10204, 'product_code' => 'S24_3969', 'quantity_ordered' => 39, 'price_each' => '34.88', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10205, 'product_code' => 'S18_1342', 'quantity_ordered' => 36, 'price_each' => '98.63', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10205, 'product_code' => 'S18_1367', 'quantity_ordered' => 48, 'price_each' => '45.82', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10205, 'product_code' => 'S18_2795', 'quantity_ordered' => 40, 'price_each' => '138.38', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10205, 'product_code' => 'S24_1937', 'quantity_ordered' => 32, 'price_each' => '27.88', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10205, 'product_code' => 'S24_2022', 'quantity_ordered' => 24, 'price_each' => '36.74', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S10_1949', 'quantity_ordered' => 47, 'price_each' => '203.59', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S12_1666', 'quantity_ordered' => 28, 'price_each' => '109.34', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_1097', 'quantity_ordered' => 34, 'price_each' => '115.50', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_2949', 'quantity_ordered' => 37, 'price_each' => '98.27', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_2957', 'quantity_ordered' => 28, 'price_each' => '51.84', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_3136', 'quantity_ordered' => 30, 'price_each' => '102.63', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_3320', 'quantity_ordered' => 28, 'price_each' => '99.21', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S18_4668', 'quantity_ordered' => 21, 'price_each' => '45.78', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '95.44', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S32_3522', 'quantity_ordered' => 36, 'price_each' => '54.94', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10206, 'product_code' => 'S700_2824', 'quantity_ordered' => 33, 'price_each' => '89.01', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S10_4962', 'quantity_ordered' => 31, 'price_each' => '125.58', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S12_4473', 'quantity_ordered' => 34, 'price_each' => '95.99', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_2238', 'quantity_ordered' => 44, 'price_each' => '140.81', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_2319', 'quantity_ordered' => 43, 'price_each' => '109.23', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_2432', 'quantity_ordered' => 37, 'price_each' => '60.77', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_3232', 'quantity_ordered' => 25, 'price_each' => '140.55', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_4027', 'quantity_ordered' => 40, 'price_each' => '143.62', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S18_4600', 'quantity_ordered' => 47, 'price_each' => '119.87', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S24_1444', 'quantity_ordered' => 49, 'price_each' => '57.80', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S24_2300', 'quantity_ordered' => 46, 'price_each' => '127.79', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S24_2840', 'quantity_ordered' => 42, 'price_each' => '30.76', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S24_4048', 'quantity_ordered' => 28, 'price_each' => '108.82', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S32_1268', 'quantity_ordered' => 49, 'price_each' => '84.75', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S32_2509', 'quantity_ordered' => 27, 'price_each' => '51.95', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S32_3207', 'quantity_ordered' => 45, 'price_each' => '55.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10207, 'product_code' => 'S50_1392', 'quantity_ordered' => 28, 'price_each' => '106.49', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S12_1108', 'quantity_ordered' => 46, 'price_each' => '176.63', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S12_3148', 'quantity_ordered' => 26, 'price_each' => '128.42', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S12_3891', 'quantity_ordered' => 20, 'price_each' => '152.26', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S18_3140', 'quantity_ordered' => 24, 'price_each' => '117.47', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S18_3259', 'quantity_ordered' => 48, 'price_each' => '96.81', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S18_4522', 'quantity_ordered' => 45, 'price_each' => '72.85', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S24_2011', 'quantity_ordered' => 35, 'price_each' => '122.89', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S24_3151', 'quantity_ordered' => 20, 'price_each' => '80.54', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S50_1514', 'quantity_ordered' => 30, 'price_each' => '57.99', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S700_1138', 'quantity_ordered' => 38, 'price_each' => '56.67', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S700_1938', 'quantity_ordered' => 40, 'price_each' => '73.62', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S700_2610', 'quantity_ordered' => 46, 'price_each' => '63.61', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S700_3505', 'quantity_ordered' => 37, 'price_each' => '95.16', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S700_3962', 'quantity_ordered' => 33, 'price_each' => '95.34', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10208, 'product_code' => 'S72_3212', 'quantity_ordered' => 42, 'price_each' => '48.05', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S10_4757', 'quantity_ordered' => 39, 'price_each' => '129.20', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S18_3029', 'quantity_ordered' => 28, 'price_each' => '82.58', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S18_3856', 'quantity_ordered' => 20, 'price_each' => '97.40', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S24_2841', 'quantity_ordered' => 43, 'price_each' => '66.45', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S24_3420', 'quantity_ordered' => 36, 'price_each' => '56.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S24_3816', 'quantity_ordered' => 22, 'price_each' => '79.67', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S700_2047', 'quantity_ordered' => 33, 'price_each' => '90.52', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10209, 'product_code' => 'S72_1253', 'quantity_ordered' => 48, 'price_each' => '44.20', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S10_2016', 'quantity_ordered' => 23, 'price_each' => '112.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S10_4698', 'quantity_ordered' => 34, 'price_each' => '189.79', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S18_1662', 'quantity_ordered' => 31, 'price_each' => '141.92', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S18_2581', 'quantity_ordered' => 50, 'price_each' => '68.43', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S18_2625', 'quantity_ordered' => 40, 'price_each' => '51.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S24_1785', 'quantity_ordered' => 27, 'price_each' => '100.67', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S24_2000', 'quantity_ordered' => 30, 'price_each' => '63.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S24_3949', 'quantity_ordered' => 29, 'price_each' => '56.64', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S24_4278', 'quantity_ordered' => 40, 'price_each' => '68.10', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S32_1374', 'quantity_ordered' => 46, 'price_each' => '84.91', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S32_4289', 'quantity_ordered' => 39, 'price_each' => '57.10', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S50_1341', 'quantity_ordered' => 43, 'price_each' => '43.20', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S700_1691', 'quantity_ordered' => 21, 'price_each' => '87.69', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S700_2466', 'quantity_ordered' => 26, 'price_each' => '93.74', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S700_2834', 'quantity_ordered' => 25, 'price_each' => '98.48', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S700_3167', 'quantity_ordered' => 31, 'price_each' => '64.00', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10210, 'product_code' => 'S700_4002', 'quantity_ordered' => 42, 'price_each' => '60.70', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S10_1678', 'quantity_ordered' => 41, 'price_each' => '90.92', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S12_1099', 'quantity_ordered' => 41, 'price_each' => '171.22', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S12_2823', 'quantity_ordered' => 36, 'price_each' => '126.52', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S12_3990', 'quantity_ordered' => 28, 'price_each' => '79.80', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S18_3278', 'quantity_ordered' => 35, 'price_each' => '73.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S18_3482', 'quantity_ordered' => 28, 'price_each' => '138.17', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S18_3782', 'quantity_ordered' => 46, 'price_each' => '60.30', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S18_4721', 'quantity_ordered' => 41, 'price_each' => '148.80', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S24_1578', 'quantity_ordered' => 25, 'price_each' => '109.32', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S24_2360', 'quantity_ordered' => 21, 'price_each' => '62.33', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S24_3371', 'quantity_ordered' => 48, 'price_each' => '52.66', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S24_4620', 'quantity_ordered' => 22, 'price_each' => '80.84', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S32_2206', 'quantity_ordered' => 41, 'price_each' => '39.83', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S32_4485', 'quantity_ordered' => 37, 'price_each' => '94.91', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10211, 'product_code' => 'S50_4713', 'quantity_ordered' => 40, 'price_each' => '70.78', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S12_3380', 'quantity_ordered' => 39, 'price_each' => '99.82', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S12_4675', 'quantity_ordered' => 33, 'price_each' => '110.55', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_1129', 'quantity_ordered' => 29, 'price_each' => '117.48', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_1589', 'quantity_ordered' => 38, 'price_each' => '105.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_1889', 'quantity_ordered' => 20, 'price_each' => '64.68', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_1984', 'quantity_ordered' => 41, 'price_each' => '133.72', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_2870', 'quantity_ordered' => 40, 'price_each' => '117.48', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_3232', 'quantity_ordered' => 40, 'price_each' => '155.79', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S18_3685', 'quantity_ordered' => 45, 'price_each' => '115.85', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_1046', 'quantity_ordered' => 41, 'price_each' => '61.73', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_1628', 'quantity_ordered' => 45, 'price_each' => '43.27', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_2766', 'quantity_ordered' => 45, 'price_each' => '81.78', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_2972', 'quantity_ordered' => 34, 'price_each' => '37.38', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_3191', 'quantity_ordered' => 27, 'price_each' => '77.91', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_3432', 'quantity_ordered' => 46, 'price_each' => '100.66', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10212, 'product_code' => 'S24_3856', 'quantity_ordered' => 49, 'price_each' => '117.96', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10213, 'product_code' => 'S18_4409', 'quantity_ordered' => 38, 'price_each' => '84.67', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10213, 'product_code' => 'S18_4933', 'quantity_ordered' => 25, 'price_each' => '58.44', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10213, 'product_code' => 'S24_2887', 'quantity_ordered' => 27, 'price_each' => '97.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S18_1749', 'quantity_ordered' => 30, 'price_each' => '166.60', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S18_2248', 'quantity_ordered' => 21, 'price_each' => '53.28', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S18_2325', 'quantity_ordered' => 27, 'price_each' => '125.86', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S18_2795', 'quantity_ordered' => 50, 'price_each' => '167.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S24_1937', 'quantity_ordered' => 20, 'price_each' => '32.19', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S24_2022', 'quantity_ordered' => 49, 'price_each' => '39.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10214, 'product_code' => 'S24_3969', 'quantity_ordered' => 44, 'price_each' => '38.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S10_1949', 'quantity_ordered' => 35, 'price_each' => '205.73', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_1097', 'quantity_ordered' => 46, 'price_each' => '100.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_1342', 'quantity_ordered' => 27, 'price_each' => '92.47', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_1367', 'quantity_ordered' => 33, 'price_each' => '53.91', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_2949', 'quantity_ordered' => 49, 'price_each' => '97.26', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_2957', 'quantity_ordered' => 31, 'price_each' => '56.21', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_3136', 'quantity_ordered' => 49, 'price_each' => '89.01', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_3320', 'quantity_ordered' => 41, 'price_each' => '84.33', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S18_4668', 'quantity_ordered' => 46, 'price_each' => '42.76', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10215, 'product_code' => 'S24_4258', 'quantity_ordered' => 39, 'price_each' => '94.47', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10216, 'product_code' => 'S12_1666', 'quantity_ordered' => 43, 'price_each' => '133.94', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S10_4962', 'quantity_ordered' => 48, 'price_each' => '132.97', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S18_2432', 'quantity_ordered' => 35, 'price_each' => '58.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S18_4600', 'quantity_ordered' => 38, 'price_each' => '118.66', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S24_2300', 'quantity_ordered' => 28, 'price_each' => '103.51', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S32_1268', 'quantity_ordered' => 21, 'price_each' => '78.97', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S32_3522', 'quantity_ordered' => 39, 'price_each' => '56.24', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10217, 'product_code' => 'S700_2824', 'quantity_ordered' => 31, 'price_each' => '90.02', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10218, 'product_code' => 'S18_2319', 'quantity_ordered' => 22, 'price_each' => '110.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10218, 'product_code' => 'S18_3232', 'quantity_ordered' => 34, 'price_each' => '152.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10219, 'product_code' => 'S12_4473', 'quantity_ordered' => 48, 'price_each' => '94.80', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10219, 'product_code' => 'S18_2238', 'quantity_ordered' => 43, 'price_each' => '132.62', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10219, 'product_code' => 'S24_2840', 'quantity_ordered' => 21, 'price_each' => '31.12', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10219, 'product_code' => 'S32_2509', 'quantity_ordered' => 35, 'price_each' => '47.62', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S12_1108', 'quantity_ordered' => 32, 'price_each' => '189.10', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S12_3148', 'quantity_ordered' => 30, 'price_each' => '151.08', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S12_3891', 'quantity_ordered' => 27, 'price_each' => '166.10', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S18_4027', 'quantity_ordered' => 50, 'price_each' => '126.39', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S24_1444', 'quantity_ordered' => 26, 'price_each' => '48.55', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S24_4048', 'quantity_ordered' => 37, 'price_each' => '101.72', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S32_3207', 'quantity_ordered' => 20, 'price_each' => '49.71', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S50_1392', 'quantity_ordered' => 37, 'price_each' => '92.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10220, 'product_code' => 'S50_1514', 'quantity_ordered' => 30, 'price_each' => '56.82', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10221, 'product_code' => 'S18_3140', 'quantity_ordered' => 33, 'price_each' => '133.86', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10221, 'product_code' => 'S18_3259', 'quantity_ordered' => 23, 'price_each' => '89.75', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10221, 'product_code' => 'S18_4522', 'quantity_ordered' => 39, 'price_each' => '84.26', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10221, 'product_code' => 'S24_2011', 'quantity_ordered' => 49, 'price_each' => '113.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10221, 'product_code' => 'S700_1938', 'quantity_ordered' => 23, 'price_each' => '69.29', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S10_4757', 'quantity_ordered' => 49, 'price_each' => '133.28', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S18_1662', 'quantity_ordered' => 49, 'price_each' => '137.19', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S18_3029', 'quantity_ordered' => 49, 'price_each' => '79.14', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S18_3856', 'quantity_ordered' => 45, 'price_each' => '88.93', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S24_2841', 'quantity_ordered' => 32, 'price_each' => '56.86', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S24_3151', 'quantity_ordered' => 47, 'price_each' => '74.35', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S24_3420', 'quantity_ordered' => 43, 'price_each' => '61.15', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S24_3816', 'quantity_ordered' => 46, 'price_each' => '77.99', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S24_3949', 'quantity_ordered' => 48, 'price_each' => '55.27', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_1138', 'quantity_ordered' => 31, 'price_each' => '58.67', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_2047', 'quantity_ordered' => 26, 'price_each' => '80.56', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_2466', 'quantity_ordered' => 37, 'price_each' => '90.75', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_2610', 'quantity_ordered' => 36, 'price_each' => '69.39', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_3505', 'quantity_ordered' => 38, 'price_each' => '84.14', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_3962', 'quantity_ordered' => 31, 'price_each' => '81.43', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S700_4002', 'quantity_ordered' => 43, 'price_each' => '66.63', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S72_1253', 'quantity_ordered' => 31, 'price_each' => '45.19', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10222, 'product_code' => 'S72_3212', 'quantity_ordered' => 36, 'price_each' => '48.59', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S10_1678', 'quantity_ordered' => 37, 'price_each' => '80.39', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S10_2016', 'quantity_ordered' => 47, 'price_each' => '110.61', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S10_4698', 'quantity_ordered' => 49, 'price_each' => '189.79', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S18_2581', 'quantity_ordered' => 47, 'price_each' => '67.58', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S18_2625', 'quantity_ordered' => 28, 'price_each' => '58.75', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S24_1578', 'quantity_ordered' => 32, 'price_each' => '104.81', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S24_1785', 'quantity_ordered' => 34, 'price_each' => '87.54', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S24_2000', 'quantity_ordered' => 38, 'price_each' => '60.94', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S24_4278', 'quantity_ordered' => 23, 'price_each' => '68.10', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S32_1374', 'quantity_ordered' => 21, 'price_each' => '90.90', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S32_4289', 'quantity_ordered' => 20, 'price_each' => '66.73', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S50_1341', 'quantity_ordered' => 41, 'price_each' => '41.02', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S700_1691', 'quantity_ordered' => 25, 'price_each' => '84.03', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S700_2834', 'quantity_ordered' => 29, 'price_each' => '113.90', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10223, 'product_code' => 'S700_3167', 'quantity_ordered' => 26, 'price_each' => '79.20', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S12_2823', 'quantity_ordered' => 43, 'price_each' => '141.58', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S18_3782', 'quantity_ordered' => 38, 'price_each' => '57.20', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S24_2360', 'quantity_ordered' => 37, 'price_each' => '60.26', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S32_2206', 'quantity_ordered' => 43, 'price_each' => '37.01', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S32_4485', 'quantity_ordered' => 30, 'price_each' => '94.91', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10224, 'product_code' => 'S50_4713', 'quantity_ordered' => 50, 'price_each' => '81.36', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S12_1099', 'quantity_ordered' => 27, 'price_each' => '157.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S12_3380', 'quantity_ordered' => 25, 'price_each' => '101.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S12_3990', 'quantity_ordered' => 37, 'price_each' => '64.64', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S12_4675', 'quantity_ordered' => 21, 'price_each' => '100.19', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_1129', 'quantity_ordered' => 32, 'price_each' => '116.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_1889', 'quantity_ordered' => 47, 'price_each' => '71.61', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_3232', 'quantity_ordered' => 43, 'price_each' => '162.57', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_3278', 'quantity_ordered' => 37, 'price_each' => '69.96', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_3482', 'quantity_ordered' => 27, 'price_each' => '119.06', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S18_4721', 'quantity_ordered' => 35, 'price_each' => '135.41', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S24_2972', 'quantity_ordered' => 42, 'price_each' => '34.74', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S24_3371', 'quantity_ordered' => 24, 'price_each' => '51.43', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S24_3856', 'quantity_ordered' => 40, 'price_each' => '130.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10225, 'product_code' => 'S24_4620', 'quantity_ordered' => 46, 'price_each' => '77.61', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S18_1589', 'quantity_ordered' => 38, 'price_each' => '108.26', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S18_1984', 'quantity_ordered' => 24, 'price_each' => '129.45', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S18_2870', 'quantity_ordered' => 24, 'price_each' => '125.40', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S18_3685', 'quantity_ordered' => 46, 'price_each' => '122.91', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S24_1046', 'quantity_ordered' => 21, 'price_each' => '65.41', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S24_1628', 'quantity_ordered' => 36, 'price_each' => '47.79', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10226, 'product_code' => 'S24_3432', 'quantity_ordered' => 48, 'price_each' => '95.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_1342', 'quantity_ordered' => 25, 'price_each' => '85.27', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_1367', 'quantity_ordered' => 31, 'price_each' => '50.14', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_1749', 'quantity_ordered' => 26, 'price_each' => '136.00', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_2248', 'quantity_ordered' => 28, 'price_each' => '59.93', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_2325', 'quantity_ordered' => 46, 'price_each' => '118.23', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_2795', 'quantity_ordered' => 29, 'price_each' => '146.81', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_3320', 'quantity_ordered' => 33, 'price_each' => '99.21', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_4409', 'quantity_ordered' => 34, 'price_each' => '87.43', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S18_4933', 'quantity_ordered' => 37, 'price_each' => '70.56', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_1937', 'quantity_ordered' => 42, 'price_each' => '27.22', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_2022', 'quantity_ordered' => 24, 'price_each' => '39.42', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_2766', 'quantity_ordered' => 47, 'price_each' => '84.51', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_2887', 'quantity_ordered' => 33, 'price_each' => '102.17', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_3191', 'quantity_ordered' => 40, 'price_each' => '78.76', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10227, 'product_code' => 'S24_3969', 'quantity_ordered' => 27, 'price_each' => '34.88', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S10_1949', 'quantity_ordered' => 29, 'price_each' => '214.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S18_1097', 'quantity_ordered' => 32, 'price_each' => '100.34', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S18_2949', 'quantity_ordered' => 24, 'price_each' => '101.31', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S18_2957', 'quantity_ordered' => 45, 'price_each' => '57.46', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S18_3136', 'quantity_ordered' => 31, 'price_each' => '100.53', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10228, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '84.73', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S10_4962', 'quantity_ordered' => 50, 'price_each' => '138.88', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S12_1666', 'quantity_ordered' => 25, 'price_each' => '110.70', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S12_4473', 'quantity_ordered' => 36, 'price_each' => '95.99', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S18_2319', 'quantity_ordered' => 26, 'price_each' => '104.32', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S18_2432', 'quantity_ordered' => 28, 'price_each' => '53.48', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S18_3232', 'quantity_ordered' => 22, 'price_each' => '157.49', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S18_4600', 'quantity_ordered' => 41, 'price_each' => '119.87', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S18_4668', 'quantity_ordered' => 39, 'price_each' => '43.77', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S24_2300', 'quantity_ordered' => 48, 'price_each' => '115.01', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S24_2840', 'quantity_ordered' => 33, 'price_each' => '34.65', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S32_1268', 'quantity_ordered' => 25, 'price_each' => '78.97', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S32_2509', 'quantity_ordered' => 23, 'price_each' => '49.78', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S32_3522', 'quantity_ordered' => 30, 'price_each' => '52.36', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10229, 'product_code' => 'S700_2824', 'quantity_ordered' => 50, 'price_each' => '91.04', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S12_3148', 'quantity_ordered' => 43, 'price_each' => '128.42', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S18_2238', 'quantity_ordered' => 49, 'price_each' => '153.91', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S18_4027', 'quantity_ordered' => 42, 'price_each' => '142.18', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S24_1444', 'quantity_ordered' => 36, 'price_each' => '47.40', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S24_4048', 'quantity_ordered' => 45, 'price_each' => '99.36', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S32_3207', 'quantity_ordered' => 46, 'price_each' => '59.03', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S50_1392', 'quantity_ordered' => 34, 'price_each' => '100.70', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10230, 'product_code' => 'S50_1514', 'quantity_ordered' => 43, 'price_each' => '57.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10231, 'product_code' => 'S12_1108', 'quantity_ordered' => 42, 'price_each' => '193.25', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10231, 'product_code' => 'S12_3891', 'quantity_ordered' => 49, 'price_each' => '147.07', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S18_3140', 'quantity_ordered' => 22, 'price_each' => '133.86', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S18_3259', 'quantity_ordered' => 48, 'price_each' => '97.81', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S18_4522', 'quantity_ordered' => 23, 'price_each' => '78.12', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S24_2011', 'quantity_ordered' => 46, 'price_each' => '113.06', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S700_1938', 'quantity_ordered' => 26, 'price_each' => '84.88', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S700_3505', 'quantity_ordered' => 48, 'price_each' => '86.15', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S700_3962', 'quantity_ordered' => 35, 'price_each' => '81.43', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10232, 'product_code' => 'S72_3212', 'quantity_ordered' => 24, 'price_each' => '48.59', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10233, 'product_code' => 'S24_3151', 'quantity_ordered' => 40, 'price_each' => '70.81', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10233, 'product_code' => 'S700_1138', 'quantity_ordered' => 36, 'price_each' => '66.00', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10233, 'product_code' => 'S700_2610', 'quantity_ordered' => 29, 'price_each' => '67.94', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S10_4757', 'quantity_ordered' => 48, 'price_each' => '118.32', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S18_1662', 'quantity_ordered' => 50, 'price_each' => '146.65', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S18_3029', 'quantity_ordered' => 48, 'price_each' => '84.30', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S18_3856', 'quantity_ordered' => 39, 'price_each' => '85.75', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S24_2841', 'quantity_ordered' => 44, 'price_each' => '67.14', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S24_3420', 'quantity_ordered' => 25, 'price_each' => '65.09', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S24_3816', 'quantity_ordered' => 31, 'price_each' => '78.83', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S700_2047', 'quantity_ordered' => 29, 'price_each' => '83.28', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10234, 'product_code' => 'S72_1253', 'quantity_ordered' => 40, 'price_each' => '45.69', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S18_2581', 'quantity_ordered' => 24, 'price_each' => '81.95', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S24_1785', 'quantity_ordered' => 23, 'price_each' => '89.72', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S24_3949', 'quantity_ordered' => 33, 'price_each' => '55.27', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S24_4278', 'quantity_ordered' => 40, 'price_each' => '63.03', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S32_1374', 'quantity_ordered' => 41, 'price_each' => '90.90', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S32_4289', 'quantity_ordered' => 34, 'price_each' => '66.73', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S50_1341', 'quantity_ordered' => 41, 'price_each' => '37.09', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S700_1691', 'quantity_ordered' => 25, 'price_each' => '88.60', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S700_2466', 'quantity_ordered' => 38, 'price_each' => '92.74', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S700_2834', 'quantity_ordered' => 25, 'price_each' => '116.28', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S700_3167', 'quantity_ordered' => 32, 'price_each' => '73.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10235, 'product_code' => 'S700_4002', 'quantity_ordered' => 34, 'price_each' => '70.33', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10236, 'product_code' => 'S10_2016', 'quantity_ordered' => 22, 'price_each' => '105.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10236, 'product_code' => 'S18_2625', 'quantity_ordered' => 23, 'price_each' => '52.70', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10236, 'product_code' => 'S24_2000', 'quantity_ordered' => 36, 'price_each' => '65.51', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S10_1678', 'quantity_ordered' => 23, 'price_each' => '91.87', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S10_4698', 'quantity_ordered' => 39, 'price_each' => '158.80', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S12_2823', 'quantity_ordered' => 32, 'price_each' => '129.53', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S18_3782', 'quantity_ordered' => 26, 'price_each' => '49.74', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S24_1578', 'quantity_ordered' => 20, 'price_each' => '109.32', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S24_2360', 'quantity_ordered' => 26, 'price_each' => '62.33', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S32_2206', 'quantity_ordered' => 26, 'price_each' => '35.00', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S32_4485', 'quantity_ordered' => 27, 'price_each' => '94.91', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10237, 'product_code' => 'S50_4713', 'quantity_ordered' => 20, 'price_each' => '78.92', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S12_1099', 'quantity_ordered' => 28, 'price_each' => '161.49', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S12_3380', 'quantity_ordered' => 29, 'price_each' => '104.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S12_3990', 'quantity_ordered' => 20, 'price_each' => '73.42', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S18_3278', 'quantity_ordered' => 41, 'price_each' => '68.35', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S18_3482', 'quantity_ordered' => 49, 'price_each' => '144.05', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S18_4721', 'quantity_ordered' => 44, 'price_each' => '120.53', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S24_3371', 'quantity_ordered' => 47, 'price_each' => '53.88', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10238, 'product_code' => 'S24_4620', 'quantity_ordered' => 22, 'price_each' => '67.91', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10239, 'product_code' => 'S12_4675', 'quantity_ordered' => 21, 'price_each' => '100.19', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10239, 'product_code' => 'S18_1889', 'quantity_ordered' => 46, 'price_each' => '70.07', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10239, 'product_code' => 'S18_3232', 'quantity_ordered' => 47, 'price_each' => '135.47', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10239, 'product_code' => 'S24_2972', 'quantity_ordered' => 20, 'price_each' => '32.47', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10239, 'product_code' => 'S24_3856', 'quantity_ordered' => 29, 'price_each' => '133.41', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10240, 'product_code' => 'S18_1129', 'quantity_ordered' => 41, 'price_each' => '125.97', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10240, 'product_code' => 'S18_1984', 'quantity_ordered' => 37, 'price_each' => '136.56', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10240, 'product_code' => 'S18_3685', 'quantity_ordered' => 37, 'price_each' => '134.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_1589', 'quantity_ordered' => 21, 'price_each' => '119.46', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_1749', 'quantity_ordered' => 41, 'price_each' => '153.00', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_2248', 'quantity_ordered' => 33, 'price_each' => '55.70', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_2870', 'quantity_ordered' => 44, 'price_each' => '126.72', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_4409', 'quantity_ordered' => 42, 'price_each' => '77.31', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S18_4933', 'quantity_ordered' => 30, 'price_each' => '62.72', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_1046', 'quantity_ordered' => 22, 'price_each' => '72.02', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_1628', 'quantity_ordered' => 21, 'price_each' => '47.29', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_2766', 'quantity_ordered' => 47, 'price_each' => '89.05', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_2887', 'quantity_ordered' => 28, 'price_each' => '117.44', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_3191', 'quantity_ordered' => 26, 'price_each' => '69.34', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10241, 'product_code' => 'S24_3432', 'quantity_ordered' => 27, 'price_each' => '107.08', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10242, 'product_code' => 'S24_3969', 'quantity_ordered' => 46, 'price_each' => '36.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10243, 'product_code' => 'S18_2325', 'quantity_ordered' => 47, 'price_each' => '111.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10243, 'product_code' => 'S24_1937', 'quantity_ordered' => 33, 'price_each' => '30.87', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_1342', 'quantity_ordered' => 40, 'price_each' => '99.66', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_1367', 'quantity_ordered' => 20, 'price_each' => '48.52', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_2795', 'quantity_ordered' => 43, 'price_each' => '141.75', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_2949', 'quantity_ordered' => 30, 'price_each' => '87.13', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_2957', 'quantity_ordered' => 24, 'price_each' => '54.96', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_3136', 'quantity_ordered' => 29, 'price_each' => '85.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S18_3320', 'quantity_ordered' => 36, 'price_each' => '87.30', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S24_2022', 'quantity_ordered' => 39, 'price_each' => '42.11', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10244, 'product_code' => 'S24_4258', 'quantity_ordered' => 40, 'price_each' => '97.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S10_1949', 'quantity_ordered' => 34, 'price_each' => '195.01', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S10_4962', 'quantity_ordered' => 28, 'price_each' => '147.74', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S12_1666', 'quantity_ordered' => 38, 'price_each' => '120.27', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S18_1097', 'quantity_ordered' => 29, 'price_each' => '114.34', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S18_4600', 'quantity_ordered' => 21, 'price_each' => '111.39', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S18_4668', 'quantity_ordered' => 45, 'price_each' => '48.80', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S32_1268', 'quantity_ordered' => 37, 'price_each' => '81.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S32_3522', 'quantity_ordered' => 44, 'price_each' => '54.94', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10245, 'product_code' => 'S700_2824', 'quantity_ordered' => 44, 'price_each' => '81.93', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S12_4473', 'quantity_ordered' => 46, 'price_each' => '99.54', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S18_2238', 'quantity_ordered' => 40, 'price_each' => '144.08', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S18_2319', 'quantity_ordered' => 22, 'price_each' => '100.64', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S18_2432', 'quantity_ordered' => 30, 'price_each' => '57.73', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S18_3232', 'quantity_ordered' => 36, 'price_each' => '145.63', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S24_1444', 'quantity_ordered' => 44, 'price_each' => '46.24', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S24_2300', 'quantity_ordered' => 29, 'price_each' => '118.84', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S24_2840', 'quantity_ordered' => 49, 'price_each' => '34.65', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S24_4048', 'quantity_ordered' => 46, 'price_each' => '100.54', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S32_2509', 'quantity_ordered' => 35, 'price_each' => '45.45', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10246, 'product_code' => 'S50_1392', 'quantity_ordered' => 22, 'price_each' => '113.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S12_1108', 'quantity_ordered' => 44, 'price_each' => '195.33', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S12_3148', 'quantity_ordered' => 25, 'price_each' => '140.50', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S12_3891', 'quantity_ordered' => 27, 'price_each' => '167.83', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S18_4027', 'quantity_ordered' => 48, 'price_each' => '143.62', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S32_3207', 'quantity_ordered' => 40, 'price_each' => '58.41', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10247, 'product_code' => 'S50_1514', 'quantity_ordered' => 49, 'price_each' => '51.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S10_4757', 'quantity_ordered' => 20, 'price_each' => '126.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S18_3029', 'quantity_ordered' => 21, 'price_each' => '80.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S18_3140', 'quantity_ordered' => 32, 'price_each' => '133.86', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S18_3259', 'quantity_ordered' => 42, 'price_each' => '95.80', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S18_4522', 'quantity_ordered' => 42, 'price_each' => '87.77', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S24_2011', 'quantity_ordered' => 48, 'price_each' => '122.89', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S24_3151', 'quantity_ordered' => 30, 'price_each' => '85.85', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S24_3816', 'quantity_ordered' => 23, 'price_each' => '83.02', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S700_1138', 'quantity_ordered' => 36, 'price_each' => '66.00', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S700_1938', 'quantity_ordered' => 40, 'price_each' => '81.41', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S700_2610', 'quantity_ordered' => 32, 'price_each' => '69.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S700_3505', 'quantity_ordered' => 30, 'price_each' => '84.14', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S700_3962', 'quantity_ordered' => 35, 'price_each' => '92.36', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10248, 'product_code' => 'S72_3212', 'quantity_ordered' => 23, 'price_each' => '53.51', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10249, 'product_code' => 'S18_3856', 'quantity_ordered' => 46, 'price_each' => '88.93', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10249, 'product_code' => 'S24_2841', 'quantity_ordered' => 20, 'price_each' => '54.81', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10249, 'product_code' => 'S24_3420', 'quantity_ordered' => 25, 'price_each' => '65.75', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10249, 'product_code' => 'S700_2047', 'quantity_ordered' => 40, 'price_each' => '85.99', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10249, 'product_code' => 'S72_1253', 'quantity_ordered' => 32, 'price_each' => '49.16', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S18_1662', 'quantity_ordered' => 45, 'price_each' => '148.23', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S18_2581', 'quantity_ordered' => 27, 'price_each' => '84.48', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S24_1785', 'quantity_ordered' => 31, 'price_each' => '95.20', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S24_2000', 'quantity_ordered' => 32, 'price_each' => '63.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S24_3949', 'quantity_ordered' => 40, 'price_each' => '61.42', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S24_4278', 'quantity_ordered' => 37, 'price_each' => '72.45', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S32_1374', 'quantity_ordered' => 31, 'price_each' => '99.89', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S32_4289', 'quantity_ordered' => 50, 'price_each' => '62.60', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S50_1341', 'quantity_ordered' => 36, 'price_each' => '36.66', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S700_1691', 'quantity_ordered' => 31, 'price_each' => '91.34', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S700_2466', 'quantity_ordered' => 35, 'price_each' => '90.75', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S700_2834', 'quantity_ordered' => 44, 'price_each' => '98.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S700_3167', 'quantity_ordered' => 44, 'price_each' => '76.00', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10250, 'product_code' => 'S700_4002', 'quantity_ordered' => 38, 'price_each' => '65.89', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S10_1678', 'quantity_ordered' => 59, 'price_each' => '93.79', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S10_2016', 'quantity_ordered' => 44, 'price_each' => '115.37', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S10_4698', 'quantity_ordered' => 43, 'price_each' => '172.36', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S12_2823', 'quantity_ordered' => 46, 'price_each' => '129.53', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S18_2625', 'quantity_ordered' => 44, 'price_each' => '58.15', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10251, 'product_code' => 'S24_1578', 'quantity_ordered' => 50, 'price_each' => '91.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S18_3278', 'quantity_ordered' => 20, 'price_each' => '74.78', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S18_3482', 'quantity_ordered' => 41, 'price_each' => '145.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S18_3782', 'quantity_ordered' => 31, 'price_each' => '50.36', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S18_4721', 'quantity_ordered' => 26, 'price_each' => '127.97', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S24_2360', 'quantity_ordered' => 47, 'price_each' => '63.03', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S24_4620', 'quantity_ordered' => 38, 'price_each' => '69.52', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S32_2206', 'quantity_ordered' => 36, 'price_each' => '36.21', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S32_4485', 'quantity_ordered' => 25, 'price_each' => '93.89', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10252, 'product_code' => 'S50_4713', 'quantity_ordered' => 48, 'price_each' => '72.41', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S12_1099', 'quantity_ordered' => 24, 'price_each' => '157.60', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S12_3380', 'quantity_ordered' => 22, 'price_each' => '102.17', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S12_3990', 'quantity_ordered' => 25, 'price_each' => '67.03', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S12_4675', 'quantity_ordered' => 41, 'price_each' => '109.40', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_1129', 'quantity_ordered' => 26, 'price_each' => '130.22', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_1589', 'quantity_ordered' => 24, 'price_each' => '103.29', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_1889', 'quantity_ordered' => 23, 'price_each' => '67.76', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_1984', 'quantity_ordered' => 33, 'price_each' => '130.87', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_2870', 'quantity_ordered' => 37, 'price_each' => '114.84', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_3232', 'quantity_ordered' => 40, 'price_each' => '145.63', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S18_3685', 'quantity_ordered' => 31, 'price_each' => '139.87', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S24_2972', 'quantity_ordered' => 40, 'price_each' => '34.74', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S24_3371', 'quantity_ordered' => 24, 'price_each' => '50.82', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10253, 'product_code' => 'S24_3856', 'quantity_ordered' => 39, 'price_each' => '115.15', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S18_1749', 'quantity_ordered' => 49, 'price_each' => '137.70', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S18_2248', 'quantity_ordered' => 36, 'price_each' => '55.09', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S18_2325', 'quantity_ordered' => 41, 'price_each' => '102.98', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S18_4409', 'quantity_ordered' => 34, 'price_each' => '80.99', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S18_4933', 'quantity_ordered' => 30, 'price_each' => '59.87', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_1046', 'quantity_ordered' => 34, 'price_each' => '66.88', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_1628', 'quantity_ordered' => 32, 'price_each' => '43.27', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_1937', 'quantity_ordered' => 38, 'price_each' => '28.88', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_2766', 'quantity_ordered' => 31, 'price_each' => '85.42', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_2887', 'quantity_ordered' => 33, 'price_each' => '111.57', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_3191', 'quantity_ordered' => 42, 'price_each' => '69.34', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_3432', 'quantity_ordered' => 49, 'price_each' => '101.73', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10254, 'product_code' => 'S24_3969', 'quantity_ordered' => 20, 'price_each' => '39.80', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10255, 'product_code' => 'S18_2795', 'quantity_ordered' => 24, 'price_each' => '135.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10255, 'product_code' => 'S24_2022', 'quantity_ordered' => 37, 'price_each' => '37.63', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10256, 'product_code' => 'S18_1342', 'quantity_ordered' => 34, 'price_each' => '93.49', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10256, 'product_code' => 'S18_1367', 'quantity_ordered' => 29, 'price_each' => '52.83', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10257, 'product_code' => 'S18_2949', 'quantity_ordered' => 50, 'price_each' => '92.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10257, 'product_code' => 'S18_2957', 'quantity_ordered' => 49, 'price_each' => '59.34', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10257, 'product_code' => 'S18_3136', 'quantity_ordered' => 37, 'price_each' => '83.78', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10257, 'product_code' => 'S18_3320', 'quantity_ordered' => 26, 'price_each' => '91.27', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10257, 'product_code' => 'S24_4258', 'quantity_ordered' => 46, 'price_each' => '81.81', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S10_1949', 'quantity_ordered' => 32, 'price_each' => '177.87', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S12_1666', 'quantity_ordered' => 41, 'price_each' => '133.94', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S18_1097', 'quantity_ordered' => 41, 'price_each' => '113.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S18_4668', 'quantity_ordered' => 21, 'price_each' => '49.81', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S32_3522', 'quantity_ordered' => 20, 'price_each' => '62.70', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10258, 'product_code' => 'S700_2824', 'quantity_ordered' => 45, 'price_each' => '86.99', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S10_4962', 'quantity_ordered' => 26, 'price_each' => '121.15', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S12_4473', 'quantity_ordered' => 46, 'price_each' => '117.32', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S18_2238', 'quantity_ordered' => 30, 'price_each' => '134.26', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S18_2319', 'quantity_ordered' => 34, 'price_each' => '120.28', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S18_2432', 'quantity_ordered' => 30, 'price_each' => '59.55', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S18_3232', 'quantity_ordered' => 27, 'price_each' => '152.41', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S18_4600', 'quantity_ordered' => 41, 'price_each' => '107.76', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S24_1444', 'quantity_ordered' => 28, 'price_each' => '46.82', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S24_2300', 'quantity_ordered' => 47, 'price_each' => '121.40', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S24_2840', 'quantity_ordered' => 31, 'price_each' => '31.47', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S32_1268', 'quantity_ordered' => 45, 'price_each' => '95.35', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S32_2509', 'quantity_ordered' => 40, 'price_each' => '45.99', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10259, 'product_code' => 'S50_1392', 'quantity_ordered' => 29, 'price_each' => '105.33', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S12_1108', 'quantity_ordered' => 46, 'price_each' => '180.79', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S12_3148', 'quantity_ordered' => 30, 'price_each' => '140.50', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S12_3891', 'quantity_ordered' => 44, 'price_each' => '169.56', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S18_3140', 'quantity_ordered' => 32, 'price_each' => '121.57', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S18_3259', 'quantity_ordered' => 29, 'price_each' => '92.77', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S18_4027', 'quantity_ordered' => 23, 'price_each' => '137.88', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S24_4048', 'quantity_ordered' => 23, 'price_each' => '117.10', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S32_3207', 'quantity_ordered' => 27, 'price_each' => '55.30', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S50_1514', 'quantity_ordered' => 21, 'price_each' => '56.24', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10260, 'product_code' => 'S700_1938', 'quantity_ordered' => 33, 'price_each' => '80.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S10_4757', 'quantity_ordered' => 27, 'price_each' => '116.96', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S18_4522', 'quantity_ordered' => 20, 'price_each' => '80.75', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S24_2011', 'quantity_ordered' => 36, 'price_each' => '105.69', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S24_3151', 'quantity_ordered' => 22, 'price_each' => '79.66', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S700_1138', 'quantity_ordered' => 34, 'price_each' => '64.00', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S700_2610', 'quantity_ordered' => 44, 'price_each' => '58.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S700_3505', 'quantity_ordered' => 25, 'price_each' => '89.15', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S700_3962', 'quantity_ordered' => 50, 'price_each' => '88.39', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10261, 'product_code' => 'S72_3212', 'quantity_ordered' => 29, 'price_each' => '43.68', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S18_1662', 'quantity_ordered' => 49, 'price_each' => '157.69', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S18_3029', 'quantity_ordered' => 32, 'price_each' => '81.72', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S18_3856', 'quantity_ordered' => 34, 'price_each' => '85.75', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S24_1785', 'quantity_ordered' => 34, 'price_each' => '98.48', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S24_2841', 'quantity_ordered' => 24, 'price_each' => '63.71', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S24_3420', 'quantity_ordered' => 46, 'price_each' => '65.75', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S24_3816', 'quantity_ordered' => 49, 'price_each' => '82.18', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S24_3949', 'quantity_ordered' => 48, 'price_each' => '58.69', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S32_4289', 'quantity_ordered' => 40, 'price_each' => '63.97', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S50_1341', 'quantity_ordered' => 49, 'price_each' => '35.78', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S700_1691', 'quantity_ordered' => 40, 'price_each' => '87.69', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S700_2047', 'quantity_ordered' => 44, 'price_each' => '83.28', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S700_2466', 'quantity_ordered' => 33, 'price_each' => '81.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S700_3167', 'quantity_ordered' => 27, 'price_each' => '64.80', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S700_4002', 'quantity_ordered' => 35, 'price_each' => '64.41', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10262, 'product_code' => 'S72_1253', 'quantity_ordered' => 21, 'price_each' => '41.71', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S10_1678', 'quantity_ordered' => 34, 'price_each' => '89.00', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S10_2016', 'quantity_ordered' => 40, 'price_each' => '107.05', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S10_4698', 'quantity_ordered' => 41, 'price_each' => '193.66', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S12_2823', 'quantity_ordered' => 48, 'price_each' => '123.51', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S18_2581', 'quantity_ordered' => 33, 'price_each' => '67.58', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S18_2625', 'quantity_ordered' => 34, 'price_each' => '50.27', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S24_1578', 'quantity_ordered' => 42, 'price_each' => '109.32', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S24_2000', 'quantity_ordered' => 37, 'price_each' => '67.03', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S24_4278', 'quantity_ordered' => 24, 'price_each' => '59.41', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S32_1374', 'quantity_ordered' => 31, 'price_each' => '93.90', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10263, 'product_code' => 'S700_2834', 'quantity_ordered' => 47, 'price_each' => '117.46', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S18_3782', 'quantity_ordered' => 48, 'price_each' => '58.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S18_4721', 'quantity_ordered' => 20, 'price_each' => '124.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S24_2360', 'quantity_ordered' => 37, 'price_each' => '61.64', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S24_4620', 'quantity_ordered' => 47, 'price_each' => '75.18', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S32_2206', 'quantity_ordered' => 20, 'price_each' => '39.02', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S32_4485', 'quantity_ordered' => 34, 'price_each' => '100.01', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10264, 'product_code' => 'S50_4713', 'quantity_ordered' => 47, 'price_each' => '67.53', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10265, 'product_code' => 'S18_3278', 'quantity_ordered' => 45, 'price_each' => '74.78', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10265, 'product_code' => 'S18_3482', 'quantity_ordered' => 49, 'price_each' => '123.47', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S12_1099', 'quantity_ordered' => 44, 'price_each' => '188.73', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S12_3380', 'quantity_ordered' => 22, 'price_each' => '110.39', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S12_3990', 'quantity_ordered' => 35, 'price_each' => '67.83', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S12_4675', 'quantity_ordered' => 40, 'price_each' => '112.86', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_1129', 'quantity_ordered' => 21, 'price_each' => '131.63', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_1589', 'quantity_ordered' => 36, 'price_each' => '99.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_1889', 'quantity_ordered' => 33, 'price_each' => '77.00', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_1984', 'quantity_ordered' => 49, 'price_each' => '139.41', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_2870', 'quantity_ordered' => 20, 'price_each' => '113.52', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_3232', 'quantity_ordered' => 29, 'price_each' => '137.17', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S18_3685', 'quantity_ordered' => 33, 'price_each' => '127.15', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S24_1628', 'quantity_ordered' => 28, 'price_each' => '40.25', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S24_2972', 'quantity_ordered' => 34, 'price_each' => '35.12', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S24_3371', 'quantity_ordered' => 47, 'price_each' => '56.33', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10266, 'product_code' => 'S24_3856', 'quantity_ordered' => 24, 'price_each' => '119.37', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S18_4933', 'quantity_ordered' => 36, 'price_each' => '71.27', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S24_1046', 'quantity_ordered' => 40, 'price_each' => '72.02', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S24_2766', 'quantity_ordered' => 38, 'price_each' => '76.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S24_2887', 'quantity_ordered' => 43, 'price_each' => '93.95', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S24_3191', 'quantity_ordered' => 44, 'price_each' => '83.90', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10267, 'product_code' => 'S24_3432', 'quantity_ordered' => 43, 'price_each' => '98.51', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_1342', 'quantity_ordered' => 49, 'price_each' => '93.49', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_1367', 'quantity_ordered' => 26, 'price_each' => '45.82', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_1749', 'quantity_ordered' => 34, 'price_each' => '164.90', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_2248', 'quantity_ordered' => 31, 'price_each' => '60.54', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_2325', 'quantity_ordered' => 50, 'price_each' => '124.59', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_2795', 'quantity_ordered' => 35, 'price_each' => '148.50', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_3320', 'quantity_ordered' => 39, 'price_each' => '96.23', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S18_4409', 'quantity_ordered' => 35, 'price_each' => '84.67', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S24_1937', 'quantity_ordered' => 33, 'price_each' => '31.86', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S24_2022', 'quantity_ordered' => 40, 'price_each' => '36.29', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10268, 'product_code' => 'S24_3969', 'quantity_ordered' => 30, 'price_each' => '37.75', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10269, 'product_code' => 'S18_2957', 'quantity_ordered' => 32, 'price_each' => '57.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10269, 'product_code' => 'S24_4258', 'quantity_ordered' => 48, 'price_each' => '95.44', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S10_1949', 'quantity_ordered' => 21, 'price_each' => '171.44', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S10_4962', 'quantity_ordered' => 32, 'price_each' => '124.10', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S12_1666', 'quantity_ordered' => 28, 'price_each' => '135.30', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S18_1097', 'quantity_ordered' => 43, 'price_each' => '94.50', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S18_2949', 'quantity_ordered' => 31, 'price_each' => '81.05', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S18_3136', 'quantity_ordered' => 38, 'price_each' => '85.87', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S18_4600', 'quantity_ordered' => 38, 'price_each' => '107.76', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S18_4668', 'quantity_ordered' => 44, 'price_each' => '40.25', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S32_1268', 'quantity_ordered' => 32, 'price_each' => '93.42', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S32_3522', 'quantity_ordered' => 21, 'price_each' => '52.36', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10270, 'product_code' => 'S700_2824', 'quantity_ordered' => 46, 'price_each' => '101.15', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S12_4473', 'quantity_ordered' => 31, 'price_each' => '99.54', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S18_2238', 'quantity_ordered' => 50, 'price_each' => '147.36', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S18_2319', 'quantity_ordered' => 50, 'price_each' => '121.50', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S18_2432', 'quantity_ordered' => 25, 'price_each' => '59.55', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S18_3232', 'quantity_ordered' => 20, 'price_each' => '169.34', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S24_1444', 'quantity_ordered' => 45, 'price_each' => '49.71', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S24_2300', 'quantity_ordered' => 43, 'price_each' => '122.68', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S24_2840', 'quantity_ordered' => 38, 'price_each' => '28.64', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S24_4048', 'quantity_ordered' => 22, 'price_each' => '110.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S32_2509', 'quantity_ordered' => 35, 'price_each' => '51.95', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10271, 'product_code' => 'S50_1392', 'quantity_ordered' => 34, 'price_each' => '93.76', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S12_1108', 'quantity_ordered' => 35, 'price_each' => '187.02', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S12_3148', 'quantity_ordered' => 27, 'price_each' => '123.89', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S12_3891', 'quantity_ordered' => 39, 'price_each' => '148.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S18_4027', 'quantity_ordered' => 25, 'price_each' => '126.39', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S32_3207', 'quantity_ordered' => 45, 'price_each' => '56.55', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10272, 'product_code' => 'S50_1514', 'quantity_ordered' => 43, 'price_each' => '53.89', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S10_4757', 'quantity_ordered' => 30, 'price_each' => '136.00', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S18_3029', 'quantity_ordered' => 34, 'price_each' => '84.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S18_3140', 'quantity_ordered' => 40, 'price_each' => '117.47', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S18_3259', 'quantity_ordered' => 47, 'price_each' => '87.73', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S18_3856', 'quantity_ordered' => 50, 'price_each' => '105.87', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S18_4522', 'quantity_ordered' => 33, 'price_each' => '72.85', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S24_2011', 'quantity_ordered' => 22, 'price_each' => '103.23', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S24_3151', 'quantity_ordered' => 27, 'price_each' => '84.08', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S24_3816', 'quantity_ordered' => 48, 'price_each' => '83.86', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S700_1138', 'quantity_ordered' => 21, 'price_each' => '66.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S700_1938', 'quantity_ordered' => 21, 'price_each' => '77.95', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S700_2610', 'quantity_ordered' => 42, 'price_each' => '57.82', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S700_3505', 'quantity_ordered' => 40, 'price_each' => '91.15', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S700_3962', 'quantity_ordered' => 26, 'price_each' => '89.38', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10273, 'product_code' => 'S72_3212', 'quantity_ordered' => 37, 'price_each' => '51.32', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10274, 'product_code' => 'S18_1662', 'quantity_ordered' => 41, 'price_each' => '129.31', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10274, 'product_code' => 'S24_2841', 'quantity_ordered' => 40, 'price_each' => '56.86', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10274, 'product_code' => 'S24_3420', 'quantity_ordered' => 24, 'price_each' => '65.09', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10274, 'product_code' => 'S700_2047', 'quantity_ordered' => 24, 'price_each' => '75.13', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10274, 'product_code' => 'S72_1253', 'quantity_ordered' => 32, 'price_each' => '49.66', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S10_1678', 'quantity_ordered' => 45, 'price_each' => '81.35', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S10_2016', 'quantity_ordered' => 22, 'price_each' => '115.37', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S10_4698', 'quantity_ordered' => 36, 'price_each' => '154.93', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S18_2581', 'quantity_ordered' => 35, 'price_each' => '70.12', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S18_2625', 'quantity_ordered' => 37, 'price_each' => '52.09', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S24_1578', 'quantity_ordered' => 21, 'price_each' => '105.94', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S24_1785', 'quantity_ordered' => 25, 'price_each' => '97.38', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S24_2000', 'quantity_ordered' => 30, 'price_each' => '61.70', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S24_3949', 'quantity_ordered' => 41, 'price_each' => '58.00', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S24_4278', 'quantity_ordered' => 27, 'price_each' => '67.38', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S32_1374', 'quantity_ordered' => 23, 'price_each' => '89.90', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S32_4289', 'quantity_ordered' => 28, 'price_each' => '58.47', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S50_1341', 'quantity_ordered' => 38, 'price_each' => '40.15', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S700_1691', 'quantity_ordered' => 32, 'price_each' => '85.86', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S700_2466', 'quantity_ordered' => 39, 'price_each' => '82.77', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S700_2834', 'quantity_ordered' => 48, 'price_each' => '102.04', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S700_3167', 'quantity_ordered' => 43, 'price_each' => '72.00', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10275, 'product_code' => 'S700_4002', 'quantity_ordered' => 31, 'price_each' => '59.96', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S12_1099', 'quantity_ordered' => 50, 'price_each' => '184.84', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S12_2823', 'quantity_ordered' => 43, 'price_each' => '150.62', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S12_3380', 'quantity_ordered' => 47, 'price_each' => '104.52', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S12_3990', 'quantity_ordered' => 38, 'price_each' => '67.83', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S18_3278', 'quantity_ordered' => 38, 'price_each' => '78.00', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S18_3482', 'quantity_ordered' => 30, 'price_each' => '139.64', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S18_3782', 'quantity_ordered' => 33, 'price_each' => '54.71', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S18_4721', 'quantity_ordered' => 48, 'price_each' => '120.53', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S24_2360', 'quantity_ordered' => 46, 'price_each' => '61.64', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S24_3371', 'quantity_ordered' => 20, 'price_each' => '58.17', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S24_4620', 'quantity_ordered' => 48, 'price_each' => '67.10', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S32_2206', 'quantity_ordered' => 27, 'price_each' => '35.40', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S32_4485', 'quantity_ordered' => 38, 'price_each' => '94.91', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10276, 'product_code' => 'S50_4713', 'quantity_ordered' => 21, 'price_each' => '67.53', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10277, 'product_code' => 'S12_4675', 'quantity_ordered' => 28, 'price_each' => '93.28', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_1129', 'quantity_ordered' => 34, 'price_each' => '114.65', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_1589', 'quantity_ordered' => 23, 'price_each' => '107.02', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_1889', 'quantity_ordered' => 29, 'price_each' => '73.15', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_1984', 'quantity_ordered' => 29, 'price_each' => '118.07', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_2870', 'quantity_ordered' => 39, 'price_each' => '117.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_3232', 'quantity_ordered' => 42, 'price_each' => '167.65', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S18_3685', 'quantity_ordered' => 31, 'price_each' => '114.44', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S24_1628', 'quantity_ordered' => 35, 'price_each' => '48.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S24_2972', 'quantity_ordered' => 31, 'price_each' => '37.38', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10278, 'product_code' => 'S24_3856', 'quantity_ordered' => 25, 'price_each' => '136.22', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S18_4933', 'quantity_ordered' => 26, 'price_each' => '68.42', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S24_1046', 'quantity_ordered' => 32, 'price_each' => '68.35', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S24_2766', 'quantity_ordered' => 49, 'price_each' => '76.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S24_2887', 'quantity_ordered' => 48, 'price_each' => '106.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S24_3191', 'quantity_ordered' => 33, 'price_each' => '78.76', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10279, 'product_code' => 'S24_3432', 'quantity_ordered' => 48, 'price_each' => '95.30', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S10_1949', 'quantity_ordered' => 34, 'price_each' => '205.73', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_1097', 'quantity_ordered' => 24, 'price_each' => '98.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_1342', 'quantity_ordered' => 50, 'price_each' => '87.33', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_1367', 'quantity_ordered' => 27, 'price_each' => '47.44', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_1749', 'quantity_ordered' => 26, 'price_each' => '161.50', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_2248', 'quantity_ordered' => 25, 'price_each' => '53.28', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_2325', 'quantity_ordered' => 37, 'price_each' => '109.33', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_2795', 'quantity_ordered' => 22, 'price_each' => '158.63', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_2949', 'quantity_ordered' => 46, 'price_each' => '82.06', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_2957', 'quantity_ordered' => 43, 'price_each' => '54.34', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_3136', 'quantity_ordered' => 29, 'price_each' => '102.63', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_3320', 'quantity_ordered' => 34, 'price_each' => '99.21', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S18_4409', 'quantity_ordered' => 35, 'price_each' => '77.31', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S24_1937', 'quantity_ordered' => 20, 'price_each' => '29.87', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S24_2022', 'quantity_ordered' => 45, 'price_each' => '36.29', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S24_3969', 'quantity_ordered' => 33, 'price_each' => '35.29', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10280, 'product_code' => 'S24_4258', 'quantity_ordered' => 21, 'price_each' => '79.86', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S10_4962', 'quantity_ordered' => 44, 'price_each' => '132.97', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S12_1666', 'quantity_ordered' => 25, 'price_each' => '127.10', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S12_4473', 'quantity_ordered' => 41, 'price_each' => '98.36', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S18_2319', 'quantity_ordered' => 48, 'price_each' => '114.14', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S18_2432', 'quantity_ordered' => 29, 'price_each' => '56.52', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S18_3232', 'quantity_ordered' => 25, 'price_each' => '135.47', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S18_4600', 'quantity_ordered' => 25, 'price_each' => '96.86', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S18_4668', 'quantity_ordered' => 44, 'price_each' => '42.76', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S24_2300', 'quantity_ordered' => 25, 'price_each' => '112.46', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S24_2840', 'quantity_ordered' => 20, 'price_each' => '33.95', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S32_1268', 'quantity_ordered' => 29, 'price_each' => '80.90', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S32_2509', 'quantity_ordered' => 31, 'price_each' => '44.91', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S32_3522', 'quantity_ordered' => 36, 'price_each' => '59.47', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10281, 'product_code' => 'S700_2824', 'quantity_ordered' => 27, 'price_each' => '89.01', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S12_1108', 'quantity_ordered' => 41, 'price_each' => '176.63', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S12_3148', 'quantity_ordered' => 27, 'price_each' => '142.02', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S12_3891', 'quantity_ordered' => 24, 'price_each' => '169.56', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S18_2238', 'quantity_ordered' => 23, 'price_each' => '147.36', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S18_3140', 'quantity_ordered' => 43, 'price_each' => '122.93', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S18_3259', 'quantity_ordered' => 36, 'price_each' => '88.74', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S18_4027', 'quantity_ordered' => 31, 'price_each' => '132.13', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S24_1444', 'quantity_ordered' => 29, 'price_each' => '49.71', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S24_4048', 'quantity_ordered' => 39, 'price_each' => '96.99', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S32_3207', 'quantity_ordered' => 36, 'price_each' => '51.58', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S50_1392', 'quantity_ordered' => 38, 'price_each' => '114.59', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S50_1514', 'quantity_ordered' => 37, 'price_each' => '56.24', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10282, 'product_code' => 'S700_1938', 'quantity_ordered' => 43, 'price_each' => '77.95', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S10_4757', 'quantity_ordered' => 25, 'price_each' => '130.56', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S18_3029', 'quantity_ordered' => 21, 'price_each' => '78.28', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S18_3856', 'quantity_ordered' => 46, 'price_each' => '100.58', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S18_4522', 'quantity_ordered' => 34, 'price_each' => '71.97', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S24_2011', 'quantity_ordered' => 42, 'price_each' => '99.54', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S24_3151', 'quantity_ordered' => 34, 'price_each' => '80.54', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S24_3816', 'quantity_ordered' => 33, 'price_each' => '77.15', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S700_1138', 'quantity_ordered' => 45, 'price_each' => '62.00', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S700_2047', 'quantity_ordered' => 20, 'price_each' => '74.23', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S700_2610', 'quantity_ordered' => 47, 'price_each' => '68.67', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S700_3505', 'quantity_ordered' => 22, 'price_each' => '88.15', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S700_3962', 'quantity_ordered' => 38, 'price_each' => '85.41', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S72_1253', 'quantity_ordered' => 43, 'price_each' => '41.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10283, 'product_code' => 'S72_3212', 'quantity_ordered' => 33, 'price_each' => '49.14', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S18_1662', 'quantity_ordered' => 45, 'price_each' => '137.19', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S18_2581', 'quantity_ordered' => 31, 'price_each' => '68.43', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S24_1785', 'quantity_ordered' => 22, 'price_each' => '101.76', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S24_2841', 'quantity_ordered' => 30, 'price_each' => '65.08', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S24_3420', 'quantity_ordered' => 39, 'price_each' => '59.83', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S24_3949', 'quantity_ordered' => 21, 'price_each' => '65.51', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S24_4278', 'quantity_ordered' => 21, 'price_each' => '66.65', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S32_4289', 'quantity_ordered' => 50, 'price_each' => '60.54', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S50_1341', 'quantity_ordered' => 33, 'price_each' => '35.78', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S700_1691', 'quantity_ordered' => 24, 'price_each' => '87.69', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S700_2466', 'quantity_ordered' => 45, 'price_each' => '95.73', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S700_3167', 'quantity_ordered' => 25, 'price_each' => '68.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10284, 'product_code' => 'S700_4002', 'quantity_ordered' => 32, 'price_each' => '73.29', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S10_1678', 'quantity_ordered' => 36, 'price_each' => '95.70', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S10_2016', 'quantity_ordered' => 47, 'price_each' => '110.61', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S10_4698', 'quantity_ordered' => 27, 'price_each' => '166.55', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S12_2823', 'quantity_ordered' => 49, 'price_each' => '131.04', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S18_2625', 'quantity_ordered' => 20, 'price_each' => '50.88', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S24_1578', 'quantity_ordered' => 34, 'price_each' => '91.29', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S24_2000', 'quantity_ordered' => 39, 'price_each' => '61.70', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S24_2360', 'quantity_ordered' => 38, 'price_each' => '64.41', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S32_1374', 'quantity_ordered' => 37, 'price_each' => '82.91', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S32_2206', 'quantity_ordered' => 37, 'price_each' => '36.61', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S32_4485', 'quantity_ordered' => 26, 'price_each' => '100.01', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S50_4713', 'quantity_ordered' => 39, 'price_each' => '76.48', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10285, 'product_code' => 'S700_2834', 'quantity_ordered' => 45, 'price_each' => '102.04', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10286, 'product_code' => 'S18_3782', 'quantity_ordered' => 38, 'price_each' => '51.60', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S12_1099', 'quantity_ordered' => 21, 'price_each' => '190.68', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S12_3380', 'quantity_ordered' => 45, 'price_each' => '117.44', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S12_3990', 'quantity_ordered' => 41, 'price_each' => '74.21', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S12_4675', 'quantity_ordered' => 23, 'price_each' => '107.10', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_1129', 'quantity_ordered' => 41, 'price_each' => '113.23', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_1889', 'quantity_ordered' => 44, 'price_each' => '61.60', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_1984', 'quantity_ordered' => 24, 'price_each' => '123.76', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_2870', 'quantity_ordered' => 44, 'price_each' => '114.84', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_3232', 'quantity_ordered' => 36, 'price_each' => '137.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_3278', 'quantity_ordered' => 43, 'price_each' => '68.35', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_3482', 'quantity_ordered' => 40, 'price_each' => '127.88', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_3685', 'quantity_ordered' => 27, 'price_each' => '139.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S18_4721', 'quantity_ordered' => 34, 'price_each' => '119.04', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S24_2972', 'quantity_ordered' => 36, 'price_each' => '31.34', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S24_3371', 'quantity_ordered' => 20, 'price_each' => '58.17', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S24_3856', 'quantity_ordered' => 36, 'price_each' => '137.62', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10287, 'product_code' => 'S24_4620', 'quantity_ordered' => 40, 'price_each' => '79.22', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_1589', 'quantity_ordered' => 20, 'price_each' => '120.71', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_1749', 'quantity_ordered' => 32, 'price_each' => '168.30', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_2248', 'quantity_ordered' => 28, 'price_each' => '50.25', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_2325', 'quantity_ordered' => 31, 'price_each' => '102.98', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_4409', 'quantity_ordered' => 35, 'price_each' => '90.19', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S18_4933', 'quantity_ordered' => 23, 'price_each' => '57.02', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_1046', 'quantity_ordered' => 36, 'price_each' => '66.88', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_1628', 'quantity_ordered' => 50, 'price_each' => '49.30', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_1937', 'quantity_ordered' => 29, 'price_each' => '32.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_2766', 'quantity_ordered' => 35, 'price_each' => '81.78', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_2887', 'quantity_ordered' => 48, 'price_each' => '109.22', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_3191', 'quantity_ordered' => 34, 'price_each' => '76.19', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_3432', 'quantity_ordered' => 41, 'price_each' => '101.73', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10288, 'product_code' => 'S24_3969', 'quantity_ordered' => 33, 'price_each' => '37.75', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10289, 'product_code' => 'S18_1342', 'quantity_ordered' => 38, 'price_each' => '92.47', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10289, 'product_code' => 'S18_1367', 'quantity_ordered' => 24, 'price_each' => '44.75', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10289, 'product_code' => 'S18_2795', 'quantity_ordered' => 43, 'price_each' => '141.75', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10289, 'product_code' => 'S24_2022', 'quantity_ordered' => 45, 'price_each' => '41.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10290, 'product_code' => 'S18_3320', 'quantity_ordered' => 26, 'price_each' => '80.36', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10290, 'product_code' => 'S24_4258', 'quantity_ordered' => 45, 'price_each' => '83.76', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S10_1949', 'quantity_ordered' => 37, 'price_each' => '210.01', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S10_4962', 'quantity_ordered' => 30, 'price_each' => '141.83', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S12_1666', 'quantity_ordered' => 41, 'price_each' => '123.00', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_1097', 'quantity_ordered' => 41, 'price_each' => '96.84', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_2432', 'quantity_ordered' => 26, 'price_each' => '52.26', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_2949', 'quantity_ordered' => 47, 'price_each' => '99.28', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_2957', 'quantity_ordered' => 37, 'price_each' => '56.21', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_3136', 'quantity_ordered' => 23, 'price_each' => '93.20', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_4600', 'quantity_ordered' => 48, 'price_each' => '96.86', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S18_4668', 'quantity_ordered' => 29, 'price_each' => '45.28', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S24_2300', 'quantity_ordered' => 48, 'price_each' => '109.90', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S32_1268', 'quantity_ordered' => 26, 'price_each' => '82.83', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S32_3522', 'quantity_ordered' => 32, 'price_each' => '53.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10291, 'product_code' => 'S700_2824', 'quantity_ordered' => 28, 'price_each' => '86.99', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S12_4473', 'quantity_ordered' => 21, 'price_each' => '94.80', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S18_2238', 'quantity_ordered' => 26, 'price_each' => '140.81', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S18_2319', 'quantity_ordered' => 41, 'price_each' => '103.09', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S18_3232', 'quantity_ordered' => 21, 'price_each' => '147.33', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S18_4027', 'quantity_ordered' => 44, 'price_each' => '114.90', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S24_1444', 'quantity_ordered' => 40, 'price_each' => '48.55', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S24_2840', 'quantity_ordered' => 39, 'price_each' => '34.30', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S24_4048', 'quantity_ordered' => 27, 'price_each' => '113.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S32_2509', 'quantity_ordered' => 50, 'price_each' => '54.11', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S32_3207', 'quantity_ordered' => 31, 'price_each' => '59.65', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S50_1392', 'quantity_ordered' => 41, 'price_each' => '113.44', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10292, 'product_code' => 'S50_1514', 'quantity_ordered' => 35, 'price_each' => '49.79', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S12_1108', 'quantity_ordered' => 46, 'price_each' => '187.02', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S12_3148', 'quantity_ordered' => 24, 'price_each' => '129.93', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S12_3891', 'quantity_ordered' => 45, 'price_each' => '171.29', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S18_3140', 'quantity_ordered' => 24, 'price_each' => '110.64', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S18_3259', 'quantity_ordered' => 22, 'price_each' => '91.76', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S18_4522', 'quantity_ordered' => 49, 'price_each' => '72.85', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S24_2011', 'quantity_ordered' => 21, 'price_each' => '111.83', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S700_1938', 'quantity_ordered' => 29, 'price_each' => '77.95', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10293, 'product_code' => 'S72_3212', 'quantity_ordered' => 32, 'price_each' => '51.32', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10294, 'product_code' => 'S700_3962', 'quantity_ordered' => 45, 'price_each' => '98.32', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10295, 'product_code' => 'S10_4757', 'quantity_ordered' => 24, 'price_each' => '136.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10295, 'product_code' => 'S24_3151', 'quantity_ordered' => 46, 'price_each' => '84.08', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10295, 'product_code' => 'S700_1138', 'quantity_ordered' => 26, 'price_each' => '62.00', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10295, 'product_code' => 'S700_2610', 'quantity_ordered' => 44, 'price_each' => '71.56', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10295, 'product_code' => 'S700_3505', 'quantity_ordered' => 34, 'price_each' => '93.16', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S18_1662', 'quantity_ordered' => 36, 'price_each' => '146.65', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S18_3029', 'quantity_ordered' => 21, 'price_each' => '69.68', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S18_3856', 'quantity_ordered' => 22, 'price_each' => '105.87', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S24_2841', 'quantity_ordered' => 21, 'price_each' => '60.97', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S24_3420', 'quantity_ordered' => 31, 'price_each' => '63.78', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S24_3816', 'quantity_ordered' => 22, 'price_each' => '83.02', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S24_3949', 'quantity_ordered' => 32, 'price_each' => '63.46', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S50_1341', 'quantity_ordered' => 26, 'price_each' => '41.02', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S700_1691', 'quantity_ordered' => 42, 'price_each' => '75.81', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S700_2047', 'quantity_ordered' => 34, 'price_each' => '89.61', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S700_2466', 'quantity_ordered' => 24, 'price_each' => '96.73', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S700_3167', 'quantity_ordered' => 22, 'price_each' => '74.40', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S700_4002', 'quantity_ordered' => 47, 'price_each' => '61.44', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10296, 'product_code' => 'S72_1253', 'quantity_ordered' => 21, 'price_each' => '46.68', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S18_2581', 'quantity_ordered' => 25, 'price_each' => '81.95', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S24_1785', 'quantity_ordered' => 32, 'price_each' => '107.23', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S24_2000', 'quantity_ordered' => 32, 'price_each' => '70.08', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S24_4278', 'quantity_ordered' => 23, 'price_each' => '71.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S32_1374', 'quantity_ordered' => 26, 'price_each' => '88.90', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S32_4289', 'quantity_ordered' => 28, 'price_each' => '63.29', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10297, 'product_code' => 'S700_2834', 'quantity_ordered' => 35, 'price_each' => '111.53', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10298, 'product_code' => 'S10_2016', 'quantity_ordered' => 39, 'price_each' => '105.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10298, 'product_code' => 'S18_2625', 'quantity_ordered' => 32, 'price_each' => '60.57', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S10_1678', 'quantity_ordered' => 23, 'price_each' => '76.56', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S10_4698', 'quantity_ordered' => 29, 'price_each' => '164.61', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S12_2823', 'quantity_ordered' => 24, 'price_each' => '123.51', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S18_3782', 'quantity_ordered' => 39, 'price_each' => '62.17', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S18_4721', 'quantity_ordered' => 49, 'price_each' => '119.04', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S24_1578', 'quantity_ordered' => 47, 'price_each' => '107.07', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S24_2360', 'quantity_ordered' => 33, 'price_each' => '58.87', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S24_4620', 'quantity_ordered' => 32, 'price_each' => '66.29', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S32_2206', 'quantity_ordered' => 24, 'price_each' => '36.21', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S32_4485', 'quantity_ordered' => 38, 'price_each' => '84.70', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10299, 'product_code' => 'S50_4713', 'quantity_ordered' => 44, 'price_each' => '77.29', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S12_1099', 'quantity_ordered' => 33, 'price_each' => '184.84', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S12_3380', 'quantity_ordered' => 29, 'price_each' => '116.27', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S12_3990', 'quantity_ordered' => 22, 'price_each' => '76.61', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S12_4675', 'quantity_ordered' => 23, 'price_each' => '95.58', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S18_1889', 'quantity_ordered' => 41, 'price_each' => '63.14', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S18_3278', 'quantity_ordered' => 49, 'price_each' => '65.94', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S18_3482', 'quantity_ordered' => 23, 'price_each' => '144.05', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10300, 'product_code' => 'S24_3371', 'quantity_ordered' => 31, 'price_each' => '52.05', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_1129', 'quantity_ordered' => 37, 'price_each' => '114.65', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_1589', 'quantity_ordered' => 32, 'price_each' => '118.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_1984', 'quantity_ordered' => 47, 'price_each' => '119.49', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_2870', 'quantity_ordered' => 22, 'price_each' => '113.52', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_3232', 'quantity_ordered' => 23, 'price_each' => '135.47', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S18_3685', 'quantity_ordered' => 39, 'price_each' => '137.04', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S24_1046', 'quantity_ordered' => 27, 'price_each' => '64.67', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S24_1628', 'quantity_ordered' => 22, 'price_each' => '40.75', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S24_2972', 'quantity_ordered' => 48, 'price_each' => '32.10', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S24_3432', 'quantity_ordered' => 22, 'price_each' => '86.73', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10301, 'product_code' => 'S24_3856', 'quantity_ordered' => 50, 'price_each' => '122.17', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S18_1749', 'quantity_ordered' => 43, 'price_each' => '166.60', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S18_4409', 'quantity_ordered' => 38, 'price_each' => '82.83', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S18_4933', 'quantity_ordered' => 23, 'price_each' => '70.56', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S24_2766', 'quantity_ordered' => 49, 'price_each' => '75.42', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S24_2887', 'quantity_ordered' => 45, 'price_each' => '104.52', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10302, 'product_code' => 'S24_3191', 'quantity_ordered' => 48, 'price_each' => '74.48', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10303, 'product_code' => 'S18_2248', 'quantity_ordered' => 46, 'price_each' => '56.91', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10303, 'product_code' => 'S24_3969', 'quantity_ordered' => 24, 'price_each' => '35.70', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S10_1949', 'quantity_ordered' => 47, 'price_each' => '201.44', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S12_1666', 'quantity_ordered' => 39, 'price_each' => '117.54', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_1097', 'quantity_ordered' => 46, 'price_each' => '106.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_1342', 'quantity_ordered' => 37, 'price_each' => '95.55', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_1367', 'quantity_ordered' => 37, 'price_each' => '46.90', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_2325', 'quantity_ordered' => 24, 'price_each' => '102.98', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_2795', 'quantity_ordered' => 20, 'price_each' => '141.75', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_2949', 'quantity_ordered' => 46, 'price_each' => '98.27', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_2957', 'quantity_ordered' => 24, 'price_each' => '54.34', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_3136', 'quantity_ordered' => 26, 'price_each' => '90.06', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_3320', 'quantity_ordered' => 38, 'price_each' => '95.24', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S18_4668', 'quantity_ordered' => 34, 'price_each' => '44.27', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S24_1937', 'quantity_ordered' => 23, 'price_each' => '29.21', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S24_2022', 'quantity_ordered' => 44, 'price_each' => '42.11', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '80.83', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S32_3522', 'quantity_ordered' => 36, 'price_each' => '52.36', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10304, 'product_code' => 'S700_2824', 'quantity_ordered' => 40, 'price_each' => '80.92', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S10_4962', 'quantity_ordered' => 38, 'price_each' => '130.01', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S12_4473', 'quantity_ordered' => 38, 'price_each' => '107.84', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S18_2238', 'quantity_ordered' => 27, 'price_each' => '132.62', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S18_2319', 'quantity_ordered' => 36, 'price_each' => '117.82', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S18_2432', 'quantity_ordered' => 41, 'price_each' => '58.95', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S18_3232', 'quantity_ordered' => 37, 'price_each' => '160.87', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S18_4600', 'quantity_ordered' => 22, 'price_each' => '112.60', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S24_1444', 'quantity_ordered' => 45, 'price_each' => '48.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S24_2300', 'quantity_ordered' => 24, 'price_each' => '107.34', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S24_2840', 'quantity_ordered' => 48, 'price_each' => '30.76', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S24_4048', 'quantity_ordered' => 36, 'price_each' => '118.28', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S32_1268', 'quantity_ordered' => 28, 'price_each' => '94.38', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S32_2509', 'quantity_ordered' => 40, 'price_each' => '48.70', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10305, 'product_code' => 'S50_1392', 'quantity_ordered' => 42, 'price_each' => '109.96', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S12_1108', 'quantity_ordered' => 31, 'price_each' => '182.86', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S12_3148', 'quantity_ordered' => 34, 'price_each' => '145.04', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S12_3891', 'quantity_ordered' => 20, 'price_each' => '145.34', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S18_3140', 'quantity_ordered' => 32, 'price_each' => '114.74', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S18_3259', 'quantity_ordered' => 40, 'price_each' => '83.70', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S18_4027', 'quantity_ordered' => 23, 'price_each' => '126.39', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S18_4522', 'quantity_ordered' => 39, 'price_each' => '85.14', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S24_2011', 'quantity_ordered' => 29, 'price_each' => '109.37', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S24_3151', 'quantity_ordered' => 31, 'price_each' => '76.12', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S32_3207', 'quantity_ordered' => 46, 'price_each' => '60.28', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S50_1514', 'quantity_ordered' => 34, 'price_each' => '51.55', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S700_1138', 'quantity_ordered' => 50, 'price_each' => '61.34', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S700_1938', 'quantity_ordered' => 38, 'price_each' => '73.62', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S700_2610', 'quantity_ordered' => 43, 'price_each' => '62.16', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S700_3505', 'quantity_ordered' => 32, 'price_each' => '99.17', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S700_3962', 'quantity_ordered' => 30, 'price_each' => '87.39', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10306, 'product_code' => 'S72_3212', 'quantity_ordered' => 35, 'price_each' => '48.05', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S10_4757', 'quantity_ordered' => 22, 'price_each' => '118.32', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S18_1662', 'quantity_ordered' => 39, 'price_each' => '135.61', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S18_3029', 'quantity_ordered' => 31, 'price_each' => '71.40', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S18_3856', 'quantity_ordered' => 48, 'price_each' => '92.11', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S24_2841', 'quantity_ordered' => 25, 'price_each' => '58.23', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S24_3420', 'quantity_ordered' => 22, 'price_each' => '64.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S24_3816', 'quantity_ordered' => 22, 'price_each' => '75.47', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S700_2047', 'quantity_ordered' => 34, 'price_each' => '81.47', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10307, 'product_code' => 'S72_1253', 'quantity_ordered' => 34, 'price_each' => '44.20', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S10_2016', 'quantity_ordered' => 34, 'price_each' => '115.37', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S10_4698', 'quantity_ordered' => 20, 'price_each' => '187.85', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S18_2581', 'quantity_ordered' => 27, 'price_each' => '81.95', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S18_2625', 'quantity_ordered' => 34, 'price_each' => '48.46', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S24_1785', 'quantity_ordered' => 31, 'price_each' => '99.57', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S24_2000', 'quantity_ordered' => 47, 'price_each' => '68.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S24_3949', 'quantity_ordered' => 43, 'price_each' => '58.00', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S24_4278', 'quantity_ordered' => 44, 'price_each' => '71.73', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S32_1374', 'quantity_ordered' => 24, 'price_each' => '99.89', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S32_4289', 'quantity_ordered' => 46, 'price_each' => '61.22', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S50_1341', 'quantity_ordered' => 47, 'price_each' => '37.09', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S700_1691', 'quantity_ordered' => 21, 'price_each' => '73.07', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S700_2466', 'quantity_ordered' => 35, 'price_each' => '88.75', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S700_2834', 'quantity_ordered' => 31, 'price_each' => '100.85', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S700_3167', 'quantity_ordered' => 21, 'price_each' => '79.20', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10308, 'product_code' => 'S700_4002', 'quantity_ordered' => 39, 'price_each' => '62.93', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S10_1678', 'quantity_ordered' => 41, 'price_each' => '94.74', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S12_2823', 'quantity_ordered' => 26, 'price_each' => '144.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S24_1578', 'quantity_ordered' => 21, 'price_each' => '96.92', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S24_2360', 'quantity_ordered' => 24, 'price_each' => '59.56', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S32_4485', 'quantity_ordered' => 50, 'price_each' => '93.89', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10309, 'product_code' => 'S50_4713', 'quantity_ordered' => 28, 'price_each' => '74.04', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S12_1099', 'quantity_ordered' => 33, 'price_each' => '165.38', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S12_3380', 'quantity_ordered' => 24, 'price_each' => '105.70', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S12_3990', 'quantity_ordered' => 49, 'price_each' => '77.41', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S12_4675', 'quantity_ordered' => 25, 'price_each' => '101.34', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_1129', 'quantity_ordered' => 37, 'price_each' => '128.80', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_1889', 'quantity_ordered' => 20, 'price_each' => '66.99', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_1984', 'quantity_ordered' => 24, 'price_each' => '129.45', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_3232', 'quantity_ordered' => 48, 'price_each' => '159.18', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_3278', 'quantity_ordered' => 27, 'price_each' => '70.76', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_3482', 'quantity_ordered' => 49, 'price_each' => '122.00', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_3782', 'quantity_ordered' => 42, 'price_each' => '59.06', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S18_4721', 'quantity_ordered' => 40, 'price_each' => '133.92', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S24_2972', 'quantity_ordered' => 33, 'price_each' => '33.23', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S24_3371', 'quantity_ordered' => 38, 'price_each' => '50.21', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S24_3856', 'quantity_ordered' => 45, 'price_each' => '139.03', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S24_4620', 'quantity_ordered' => 49, 'price_each' => '75.18', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10310, 'product_code' => 'S32_2206', 'quantity_ordered' => 36, 'price_each' => '38.62', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S18_1589', 'quantity_ordered' => 29, 'price_each' => '124.44', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S18_2870', 'quantity_ordered' => 43, 'price_each' => '114.84', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S18_3685', 'quantity_ordered' => 32, 'price_each' => '134.22', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S18_4409', 'quantity_ordered' => 41, 'price_each' => '92.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S18_4933', 'quantity_ordered' => 25, 'price_each' => '66.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_1046', 'quantity_ordered' => 26, 'price_each' => '70.55', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_1628', 'quantity_ordered' => 45, 'price_each' => '48.80', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_2766', 'quantity_ordered' => 28, 'price_each' => '89.05', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_2887', 'quantity_ordered' => 43, 'price_each' => '116.27', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_3191', 'quantity_ordered' => 25, 'price_each' => '85.61', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10311, 'product_code' => 'S24_3432', 'quantity_ordered' => 46, 'price_each' => '91.02', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S10_1949', 'quantity_ordered' => 48, 'price_each' => '214.30', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_1097', 'quantity_ordered' => 32, 'price_each' => '101.50', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_1342', 'quantity_ordered' => 43, 'price_each' => '102.74', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_1367', 'quantity_ordered' => 25, 'price_each' => '43.67', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_1749', 'quantity_ordered' => 48, 'price_each' => '146.20', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_2248', 'quantity_ordered' => 30, 'price_each' => '48.43', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_2325', 'quantity_ordered' => 31, 'price_each' => '111.87', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_2795', 'quantity_ordered' => 25, 'price_each' => '150.19', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_2949', 'quantity_ordered' => 37, 'price_each' => '91.18', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_2957', 'quantity_ordered' => 35, 'price_each' => '54.34', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_3136', 'quantity_ordered' => 38, 'price_each' => '93.20', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_3320', 'quantity_ordered' => 33, 'price_each' => '84.33', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S18_4668', 'quantity_ordered' => 39, 'price_each' => '44.27', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S24_1937', 'quantity_ordered' => 39, 'price_each' => '27.88', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S24_2022', 'quantity_ordered' => 23, 'price_each' => '43.46', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S24_3969', 'quantity_ordered' => 31, 'price_each' => '40.21', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10312, 'product_code' => 'S24_4258', 'quantity_ordered' => 44, 'price_each' => '96.42', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S10_4962', 'quantity_ordered' => 40, 'price_each' => '141.83', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S12_1666', 'quantity_ordered' => 21, 'price_each' => '131.20', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S18_2319', 'quantity_ordered' => 29, 'price_each' => '109.23', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S18_2432', 'quantity_ordered' => 34, 'price_each' => '52.87', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S18_3232', 'quantity_ordered' => 25, 'price_each' => '143.94', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S18_4600', 'quantity_ordered' => 28, 'price_each' => '110.18', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S24_2300', 'quantity_ordered' => 42, 'price_each' => '102.23', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S32_1268', 'quantity_ordered' => 27, 'price_each' => '96.31', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S32_2509', 'quantity_ordered' => 38, 'price_each' => '48.70', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S32_3522', 'quantity_ordered' => 34, 'price_each' => '55.59', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10313, 'product_code' => 'S700_2824', 'quantity_ordered' => 30, 'price_each' => '96.09', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S12_1108', 'quantity_ordered' => 38, 'price_each' => '176.63', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S12_3148', 'quantity_ordered' => 46, 'price_each' => '125.40', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S12_3891', 'quantity_ordered' => 36, 'price_each' => '169.56', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S12_4473', 'quantity_ordered' => 45, 'price_each' => '95.99', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S18_2238', 'quantity_ordered' => 42, 'price_each' => '135.90', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S18_3140', 'quantity_ordered' => 20, 'price_each' => '129.76', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S18_3259', 'quantity_ordered' => 23, 'price_each' => '84.71', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S18_4027', 'quantity_ordered' => 29, 'price_each' => '129.26', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S24_1444', 'quantity_ordered' => 44, 'price_each' => '51.44', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S24_2840', 'quantity_ordered' => 39, 'price_each' => '31.82', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S24_4048', 'quantity_ordered' => 38, 'price_each' => '111.18', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S32_3207', 'quantity_ordered' => 35, 'price_each' => '58.41', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S50_1392', 'quantity_ordered' => 28, 'price_each' => '115.75', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S50_1514', 'quantity_ordered' => 38, 'price_each' => '50.38', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10314, 'product_code' => 'S700_1938', 'quantity_ordered' => 23, 'price_each' => '83.15', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S18_4522', 'quantity_ordered' => 36, 'price_each' => '78.12', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S24_2011', 'quantity_ordered' => 35, 'price_each' => '111.83', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S24_3151', 'quantity_ordered' => 24, 'price_each' => '78.77', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S700_1138', 'quantity_ordered' => 41, 'price_each' => '60.67', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S700_3505', 'quantity_ordered' => 31, 'price_each' => '99.17', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S700_3962', 'quantity_ordered' => 37, 'price_each' => '88.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10315, 'product_code' => 'S72_3212', 'quantity_ordered' => 40, 'price_each' => '51.32', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S10_4757', 'quantity_ordered' => 33, 'price_each' => '126.48', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S18_1662', 'quantity_ordered' => 27, 'price_each' => '140.34', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S18_3029', 'quantity_ordered' => 21, 'price_each' => '72.26', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S18_3856', 'quantity_ordered' => 47, 'price_each' => '89.99', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S24_1785', 'quantity_ordered' => 25, 'price_each' => '93.01', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S24_2841', 'quantity_ordered' => 34, 'price_each' => '67.14', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S24_3420', 'quantity_ordered' => 47, 'price_each' => '55.23', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S24_3816', 'quantity_ordered' => 25, 'price_each' => '77.15', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S24_3949', 'quantity_ordered' => 30, 'price_each' => '67.56', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S32_4289', 'quantity_ordered' => 24, 'price_each' => '59.16', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S50_1341', 'quantity_ordered' => 34, 'price_each' => '36.66', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_1691', 'quantity_ordered' => 34, 'price_each' => '74.90', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_2047', 'quantity_ordered' => 45, 'price_each' => '73.32', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_2466', 'quantity_ordered' => 23, 'price_each' => '85.76', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_2610', 'quantity_ordered' => 48, 'price_each' => '67.22', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_3167', 'quantity_ordered' => 48, 'price_each' => '77.60', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S700_4002', 'quantity_ordered' => 44, 'price_each' => '68.11', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10316, 'product_code' => 'S72_1253', 'quantity_ordered' => 34, 'price_each' => '43.70', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10317, 'product_code' => 'S24_4278', 'quantity_ordered' => 35, 'price_each' => '69.55', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S10_1678', 'quantity_ordered' => 46, 'price_each' => '84.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S10_2016', 'quantity_ordered' => 45, 'price_each' => '102.29', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S10_4698', 'quantity_ordered' => 37, 'price_each' => '189.79', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S18_2581', 'quantity_ordered' => 31, 'price_each' => '81.95', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S18_2625', 'quantity_ordered' => 42, 'price_each' => '49.67', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S24_1578', 'quantity_ordered' => 48, 'price_each' => '93.54', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S24_2000', 'quantity_ordered' => 26, 'price_each' => '60.94', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S32_1374', 'quantity_ordered' => 47, 'price_each' => '81.91', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10318, 'product_code' => 'S700_2834', 'quantity_ordered' => 50, 'price_each' => '102.04', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S12_2823', 'quantity_ordered' => 30, 'price_each' => '134.05', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S18_3278', 'quantity_ordered' => 46, 'price_each' => '77.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S18_3782', 'quantity_ordered' => 44, 'price_each' => '54.71', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S18_4721', 'quantity_ordered' => 45, 'price_each' => '120.53', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S24_2360', 'quantity_ordered' => 31, 'price_each' => '65.80', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S24_4620', 'quantity_ordered' => 43, 'price_each' => '78.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S32_2206', 'quantity_ordered' => 29, 'price_each' => '35.00', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S32_4485', 'quantity_ordered' => 22, 'price_each' => '96.95', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10319, 'product_code' => 'S50_4713', 'quantity_ordered' => 45, 'price_each' => '79.73', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10320, 'product_code' => 'S12_1099', 'quantity_ordered' => 31, 'price_each' => '184.84', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10320, 'product_code' => 'S12_3380', 'quantity_ordered' => 35, 'price_each' => '102.17', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10320, 'product_code' => 'S12_3990', 'quantity_ordered' => 38, 'price_each' => '63.84', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10320, 'product_code' => 'S18_3482', 'quantity_ordered' => 25, 'price_each' => '139.64', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10320, 'product_code' => 'S24_3371', 'quantity_ordered' => 26, 'price_each' => '60.62', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S12_4675', 'quantity_ordered' => 24, 'price_each' => '105.95', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_1129', 'quantity_ordered' => 41, 'price_each' => '123.14', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_1589', 'quantity_ordered' => 44, 'price_each' => '120.71', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_1889', 'quantity_ordered' => 37, 'price_each' => '73.92', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_1984', 'quantity_ordered' => 25, 'price_each' => '142.25', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_2870', 'quantity_ordered' => 27, 'price_each' => '126.72', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_3232', 'quantity_ordered' => 33, 'price_each' => '164.26', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S18_3685', 'quantity_ordered' => 28, 'price_each' => '138.45', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_1046', 'quantity_ordered' => 30, 'price_each' => '68.35', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_1628', 'quantity_ordered' => 48, 'price_each' => '42.76', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_2766', 'quantity_ordered' => 30, 'price_each' => '74.51', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_2972', 'quantity_ordered' => 37, 'price_each' => '31.72', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_3191', 'quantity_ordered' => 39, 'price_each' => '81.33', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_3432', 'quantity_ordered' => 21, 'price_each' => '103.87', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10321, 'product_code' => 'S24_3856', 'quantity_ordered' => 26, 'price_each' => '137.62', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S10_1949', 'quantity_ordered' => 40, 'price_each' => '180.01', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S10_4962', 'quantity_ordered' => 46, 'price_each' => '141.83', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S12_1666', 'quantity_ordered' => 27, 'price_each' => '136.67', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_1097', 'quantity_ordered' => 22, 'price_each' => '101.50', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_1342', 'quantity_ordered' => 43, 'price_each' => '92.47', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_1367', 'quantity_ordered' => 41, 'price_each' => '44.21', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_2325', 'quantity_ordered' => 50, 'price_each' => '120.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_2432', 'quantity_ordered' => 35, 'price_each' => '57.12', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_2795', 'quantity_ordered' => 36, 'price_each' => '158.63', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_2949', 'quantity_ordered' => 33, 'price_each' => '100.30', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_2957', 'quantity_ordered' => 41, 'price_each' => '54.34', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S18_3136', 'quantity_ordered' => 48, 'price_each' => '90.06', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S24_1937', 'quantity_ordered' => 20, 'price_each' => '26.55', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10322, 'product_code' => 'S24_2022', 'quantity_ordered' => 30, 'price_each' => '40.77', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10323, 'product_code' => 'S18_3320', 'quantity_ordered' => 33, 'price_each' => '88.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10323, 'product_code' => 'S18_4600', 'quantity_ordered' => 47, 'price_each' => '96.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S12_3148', 'quantity_ordered' => 27, 'price_each' => '148.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S12_4473', 'quantity_ordered' => 26, 'price_each' => '100.73', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S18_2238', 'quantity_ordered' => 47, 'price_each' => '142.45', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S18_2319', 'quantity_ordered' => 33, 'price_each' => '105.55', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S18_3232', 'quantity_ordered' => 27, 'price_each' => '137.17', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S18_4027', 'quantity_ordered' => 49, 'price_each' => '120.64', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S18_4668', 'quantity_ordered' => 38, 'price_each' => '49.81', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S24_1444', 'quantity_ordered' => 25, 'price_each' => '49.71', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S24_2300', 'quantity_ordered' => 31, 'price_each' => '107.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S24_2840', 'quantity_ordered' => 30, 'price_each' => '29.35', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '95.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S32_1268', 'quantity_ordered' => 20, 'price_each' => '91.49', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S32_3522', 'quantity_ordered' => 48, 'price_each' => '60.76', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10324, 'product_code' => 'S700_2824', 'quantity_ordered' => 34, 'price_each' => '80.92', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S10_4757', 'quantity_ordered' => 47, 'price_each' => '111.52', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S12_1108', 'quantity_ordered' => 42, 'price_each' => '193.25', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S12_3891', 'quantity_ordered' => 24, 'price_each' => '166.10', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S18_3140', 'quantity_ordered' => 24, 'price_each' => '114.74', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S24_4048', 'quantity_ordered' => 44, 'price_each' => '114.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S32_2509', 'quantity_ordered' => 38, 'price_each' => '44.37', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S32_3207', 'quantity_ordered' => 28, 'price_each' => '55.30', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S50_1392', 'quantity_ordered' => 38, 'price_each' => '99.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10325, 'product_code' => 'S50_1514', 'quantity_ordered' => 44, 'price_each' => '56.24', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S18_3259', 'quantity_ordered' => 32, 'price_each' => '94.79', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S18_4522', 'quantity_ordered' => 50, 'price_each' => '73.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S24_2011', 'quantity_ordered' => 41, 'price_each' => '120.43', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S24_3151', 'quantity_ordered' => 41, 'price_each' => '86.74', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S24_3816', 'quantity_ordered' => 20, 'price_each' => '81.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10326, 'product_code' => 'S700_1138', 'quantity_ordered' => 39, 'price_each' => '60.67', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S18_1662', 'quantity_ordered' => 25, 'price_each' => '154.54', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S18_2581', 'quantity_ordered' => 45, 'price_each' => '74.34', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S18_3029', 'quantity_ordered' => 25, 'price_each' => '74.84', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S700_1938', 'quantity_ordered' => 20, 'price_each' => '79.68', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S700_2610', 'quantity_ordered' => 21, 'price_each' => '65.05', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S700_3505', 'quantity_ordered' => 43, 'price_each' => '85.14', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S700_3962', 'quantity_ordered' => 37, 'price_each' => '83.42', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10327, 'product_code' => 'S72_3212', 'quantity_ordered' => 37, 'price_each' => '48.05', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S18_3856', 'quantity_ordered' => 34, 'price_each' => '104.81', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S24_1785', 'quantity_ordered' => 47, 'price_each' => '87.54', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S24_2841', 'quantity_ordered' => 48, 'price_each' => '67.82', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S24_3420', 'quantity_ordered' => 20, 'price_each' => '56.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S24_3949', 'quantity_ordered' => 35, 'price_each' => '55.96', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S24_4278', 'quantity_ordered' => 43, 'price_each' => '69.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S32_4289', 'quantity_ordered' => 24, 'price_each' => '57.10', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S50_1341', 'quantity_ordered' => 34, 'price_each' => '42.33', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_1691', 'quantity_ordered' => 27, 'price_each' => '84.03', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_2047', 'quantity_ordered' => 41, 'price_each' => '75.13', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_2466', 'quantity_ordered' => 37, 'price_each' => '95.73', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_2834', 'quantity_ordered' => 33, 'price_each' => '117.46', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_3167', 'quantity_ordered' => 33, 'price_each' => '71.20', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10328, 'product_code' => 'S700_4002', 'quantity_ordered' => 39, 'price_each' => '69.59', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S10_1678', 'quantity_ordered' => 42, 'price_each' => '80.39', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S10_2016', 'quantity_ordered' => 20, 'price_each' => '109.42', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S10_4698', 'quantity_ordered' => 26, 'price_each' => '164.61', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S12_1099', 'quantity_ordered' => 41, 'price_each' => '182.90', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S12_2823', 'quantity_ordered' => 24, 'price_each' => '128.03', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S12_3380', 'quantity_ordered' => 46, 'price_each' => '117.44', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S12_3990', 'quantity_ordered' => 33, 'price_each' => '74.21', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S12_4675', 'quantity_ordered' => 39, 'price_each' => '102.49', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S18_1889', 'quantity_ordered' => 29, 'price_each' => '66.22', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S18_2625', 'quantity_ordered' => 38, 'price_each' => '55.72', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S18_3278', 'quantity_ordered' => 38, 'price_each' => '65.13', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S24_1578', 'quantity_ordered' => 30, 'price_each' => '104.81', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S24_2000', 'quantity_ordered' => 37, 'price_each' => '71.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S32_1374', 'quantity_ordered' => 45, 'price_each' => '80.91', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10329, 'product_code' => 'S72_1253', 'quantity_ordered' => 44, 'price_each' => '41.22', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10330, 'product_code' => 'S18_3482', 'quantity_ordered' => 37, 'price_each' => '136.70', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10330, 'product_code' => 'S18_3782', 'quantity_ordered' => 29, 'price_each' => '59.06', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10330, 'product_code' => 'S18_4721', 'quantity_ordered' => 50, 'price_each' => '133.92', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10330, 'product_code' => 'S24_2360', 'quantity_ordered' => 42, 'price_each' => '56.10', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_1129', 'quantity_ordered' => 46, 'price_each' => '120.31', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_1589', 'quantity_ordered' => 44, 'price_each' => '99.55', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_1749', 'quantity_ordered' => 44, 'price_each' => '154.70', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_1984', 'quantity_ordered' => 30, 'price_each' => '135.14', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_2870', 'quantity_ordered' => 26, 'price_each' => '130.68', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_3232', 'quantity_ordered' => 27, 'price_each' => '169.34', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S18_3685', 'quantity_ordered' => 26, 'price_each' => '132.80', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S24_2972', 'quantity_ordered' => 27, 'price_each' => '37.00', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S24_3371', 'quantity_ordered' => 25, 'price_each' => '55.11', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S24_3856', 'quantity_ordered' => 21, 'price_each' => '139.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S24_4620', 'quantity_ordered' => 41, 'price_each' => '70.33', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S32_2206', 'quantity_ordered' => 28, 'price_each' => '33.39', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S32_4485', 'quantity_ordered' => 32, 'price_each' => '100.01', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10331, 'product_code' => 'S50_4713', 'quantity_ordered' => 20, 'price_each' => '74.04', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_1342', 'quantity_ordered' => 46, 'price_each' => '89.38', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_1367', 'quantity_ordered' => 27, 'price_each' => '51.21', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_2248', 'quantity_ordered' => 38, 'price_each' => '53.88', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_2325', 'quantity_ordered' => 35, 'price_each' => '116.96', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_2795', 'quantity_ordered' => 24, 'price_each' => '138.38', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_2957', 'quantity_ordered' => 26, 'price_each' => '53.09', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_3136', 'quantity_ordered' => 40, 'price_each' => '100.53', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_4409', 'quantity_ordered' => 50, 'price_each' => '92.03', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S18_4933', 'quantity_ordered' => 21, 'price_each' => '70.56', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_1046', 'quantity_ordered' => 23, 'price_each' => '61.73', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_1628', 'quantity_ordered' => 20, 'price_each' => '47.29', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_1937', 'quantity_ordered' => 45, 'price_each' => '29.87', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_2022', 'quantity_ordered' => 26, 'price_each' => '43.01', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_2766', 'quantity_ordered' => 39, 'price_each' => '84.51', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_2887', 'quantity_ordered' => 44, 'price_each' => '108.04', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_3191', 'quantity_ordered' => 45, 'price_each' => '77.91', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_3432', 'quantity_ordered' => 31, 'price_each' => '94.23', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10332, 'product_code' => 'S24_3969', 'quantity_ordered' => 41, 'price_each' => '34.47', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S10_1949', 'quantity_ordered' => 26, 'price_each' => '188.58', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S12_1666', 'quantity_ordered' => 33, 'price_each' => '121.64', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S18_1097', 'quantity_ordered' => 29, 'price_each' => '110.84', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S18_2949', 'quantity_ordered' => 31, 'price_each' => '95.23', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S18_3320', 'quantity_ordered' => 46, 'price_each' => '95.24', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S18_4668', 'quantity_ordered' => 24, 'price_each' => '42.26', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S24_4258', 'quantity_ordered' => 39, 'price_each' => '95.44', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10333, 'product_code' => 'S32_3522', 'quantity_ordered' => 33, 'price_each' => '62.05', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S10_4962', 'quantity_ordered' => 26, 'price_each' => '130.01', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S18_2319', 'quantity_ordered' => 46, 'price_each' => '108.00', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S18_2432', 'quantity_ordered' => 34, 'price_each' => '52.87', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S18_3232', 'quantity_ordered' => 20, 'price_each' => '147.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S18_4600', 'quantity_ordered' => 49, 'price_each' => '101.71', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10334, 'product_code' => 'S24_2300', 'quantity_ordered' => 42, 'price_each' => '117.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10335, 'product_code' => 'S24_2840', 'quantity_ordered' => 33, 'price_each' => '32.88', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10335, 'product_code' => 'S32_1268', 'quantity_ordered' => 44, 'price_each' => '77.05', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10335, 'product_code' => 'S32_2509', 'quantity_ordered' => 40, 'price_each' => '49.78', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S12_1108', 'quantity_ordered' => 33, 'price_each' => '176.63', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S12_3148', 'quantity_ordered' => 33, 'price_each' => '126.91', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S12_3891', 'quantity_ordered' => 49, 'price_each' => '141.88', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S12_4473', 'quantity_ordered' => 38, 'price_each' => '95.99', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S18_2238', 'quantity_ordered' => 49, 'price_each' => '153.91', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S18_3140', 'quantity_ordered' => 48, 'price_each' => '135.22', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S18_3259', 'quantity_ordered' => 21, 'price_each' => '100.84', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S24_1444', 'quantity_ordered' => 45, 'price_each' => '49.71', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S24_4048', 'quantity_ordered' => 31, 'price_each' => '113.55', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S32_3207', 'quantity_ordered' => 31, 'price_each' => '59.03', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S50_1392', 'quantity_ordered' => 23, 'price_each' => '109.96', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10336, 'product_code' => 'S700_2824', 'quantity_ordered' => 46, 'price_each' => '94.07', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S10_4757', 'quantity_ordered' => 25, 'price_each' => '131.92', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S18_4027', 'quantity_ordered' => 36, 'price_each' => '140.75', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S18_4522', 'quantity_ordered' => 29, 'price_each' => '76.36', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S24_2011', 'quantity_ordered' => 29, 'price_each' => '119.20', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S50_1514', 'quantity_ordered' => 21, 'price_each' => '54.48', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S700_1938', 'quantity_ordered' => 36, 'price_each' => '73.62', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S700_3505', 'quantity_ordered' => 31, 'price_each' => '84.14', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S700_3962', 'quantity_ordered' => 36, 'price_each' => '83.42', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10337, 'product_code' => 'S72_3212', 'quantity_ordered' => 42, 'price_each' => '49.14', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10338, 'product_code' => 'S18_1662', 'quantity_ordered' => 41, 'price_each' => '137.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10338, 'product_code' => 'S18_3029', 'quantity_ordered' => 28, 'price_each' => '80.86', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10338, 'product_code' => 'S18_3856', 'quantity_ordered' => 45, 'price_each' => '93.17', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S10_2016', 'quantity_ordered' => 40, 'price_each' => '117.75', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S10_4698', 'quantity_ordered' => 39, 'price_each' => '178.17', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S18_2581', 'quantity_ordered' => 27, 'price_each' => '79.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S18_2625', 'quantity_ordered' => 30, 'price_each' => '48.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_1578', 'quantity_ordered' => 27, 'price_each' => '96.92', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_1785', 'quantity_ordered' => 21, 'price_each' => '106.14', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_2841', 'quantity_ordered' => 55, 'price_each' => '67.82', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_3151', 'quantity_ordered' => 55, 'price_each' => '73.46', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_3420', 'quantity_ordered' => 29, 'price_each' => '57.86', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_3816', 'quantity_ordered' => 42, 'price_each' => '72.96', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S24_3949', 'quantity_ordered' => 45, 'price_each' => '57.32', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S700_1138', 'quantity_ordered' => 22, 'price_each' => '53.34', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S700_2047', 'quantity_ordered' => 55, 'price_each' => '86.90', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S700_2610', 'quantity_ordered' => 50, 'price_each' => '62.16', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S700_4002', 'quantity_ordered' => 50, 'price_each' => '66.63', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10339, 'product_code' => 'S72_1253', 'quantity_ordered' => 27, 'price_each' => '49.66', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S24_2000', 'quantity_ordered' => 55, 'price_each' => '62.46', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S24_4278', 'quantity_ordered' => 40, 'price_each' => '63.76', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S32_1374', 'quantity_ordered' => 55, 'price_each' => '95.89', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S32_4289', 'quantity_ordered' => 39, 'price_each' => '67.41', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S50_1341', 'quantity_ordered' => 40, 'price_each' => '37.09', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S700_1691', 'quantity_ordered' => 30, 'price_each' => '73.99', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S700_2466', 'quantity_ordered' => 55, 'price_each' => '81.77', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10340, 'product_code' => 'S700_2834', 'quantity_ordered' => 29, 'price_each' => '98.48', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S10_1678', 'quantity_ordered' => 41, 'price_each' => '84.22', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S12_1099', 'quantity_ordered' => 45, 'price_each' => '192.62', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S12_2823', 'quantity_ordered' => 55, 'price_each' => '120.50', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S12_3380', 'quantity_ordered' => 44, 'price_each' => '111.57', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S12_3990', 'quantity_ordered' => 36, 'price_each' => '77.41', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S12_4675', 'quantity_ordered' => 55, 'price_each' => '109.40', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S24_2360', 'quantity_ordered' => 32, 'price_each' => '63.03', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S32_4485', 'quantity_ordered' => 31, 'price_each' => '95.93', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S50_4713', 'quantity_ordered' => 38, 'price_each' => '78.11', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10341, 'product_code' => 'S700_3167', 'quantity_ordered' => 34, 'price_each' => '70.40', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_1129', 'quantity_ordered' => 40, 'price_each' => '118.89', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_1889', 'quantity_ordered' => 55, 'price_each' => '63.14', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_1984', 'quantity_ordered' => 22, 'price_each' => '115.22', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_3232', 'quantity_ordered' => 30, 'price_each' => '167.65', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_3278', 'quantity_ordered' => 25, 'price_each' => '76.39', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_3482', 'quantity_ordered' => 55, 'price_each' => '136.70', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_3782', 'quantity_ordered' => 26, 'price_each' => '57.82', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S18_4721', 'quantity_ordered' => 38, 'price_each' => '124.99', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S24_2972', 'quantity_ordered' => 39, 'price_each' => '30.59', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S24_3371', 'quantity_ordered' => 48, 'price_each' => '60.01', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10342, 'product_code' => 'S24_3856', 'quantity_ordered' => 42, 'price_each' => '112.34', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S18_1589', 'quantity_ordered' => 36, 'price_each' => '109.51', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S18_2870', 'quantity_ordered' => 25, 'price_each' => '118.80', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S18_3685', 'quantity_ordered' => 44, 'price_each' => '127.15', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S24_1628', 'quantity_ordered' => 27, 'price_each' => '44.78', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S24_4620', 'quantity_ordered' => 30, 'price_each' => '76.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10343, 'product_code' => 'S32_2206', 'quantity_ordered' => 29, 'price_each' => '37.41', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S18_1749', 'quantity_ordered' => 45, 'price_each' => '168.30', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S18_2248', 'quantity_ordered' => 40, 'price_each' => '49.04', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S18_2325', 'quantity_ordered' => 30, 'price_each' => '118.23', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S18_4409', 'quantity_ordered' => 21, 'price_each' => '80.99', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S18_4933', 'quantity_ordered' => 26, 'price_each' => '68.42', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S24_1046', 'quantity_ordered' => 29, 'price_each' => '61.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10344, 'product_code' => 'S24_1937', 'quantity_ordered' => 20, 'price_each' => '27.88', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10345, 'product_code' => 'S24_2022', 'quantity_ordered' => 43, 'price_each' => '38.98', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S18_1342', 'quantity_ordered' => 42, 'price_each' => '88.36', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S24_2766', 'quantity_ordered' => 25, 'price_each' => '87.24', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S24_2887', 'quantity_ordered' => 24, 'price_each' => '117.44', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S24_3191', 'quantity_ordered' => 24, 'price_each' => '80.47', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S24_3432', 'quantity_ordered' => 26, 'price_each' => '103.87', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10346, 'product_code' => 'S24_3969', 'quantity_ordered' => 22, 'price_each' => '38.57', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S10_1949', 'quantity_ordered' => 30, 'price_each' => '188.58', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S10_4962', 'quantity_ordered' => 27, 'price_each' => '132.97', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S12_1666', 'quantity_ordered' => 29, 'price_each' => '132.57', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_1097', 'quantity_ordered' => 42, 'price_each' => '113.17', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_1367', 'quantity_ordered' => 21, 'price_each' => '46.36', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_2432', 'quantity_ordered' => 50, 'price_each' => '51.05', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_2795', 'quantity_ordered' => 21, 'price_each' => '136.69', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_2949', 'quantity_ordered' => 48, 'price_each' => '84.09', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_2957', 'quantity_ordered' => 34, 'price_each' => '60.59', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_3136', 'quantity_ordered' => 45, 'price_each' => '95.30', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_3320', 'quantity_ordered' => 26, 'price_each' => '84.33', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10347, 'product_code' => 'S18_4600', 'quantity_ordered' => 45, 'price_each' => '115.03', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S12_1108', 'quantity_ordered' => 48, 'price_each' => '207.80', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S12_3148', 'quantity_ordered' => 47, 'price_each' => '122.37', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S18_4668', 'quantity_ordered' => 29, 'price_each' => '43.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S24_2300', 'quantity_ordered' => 37, 'price_each' => '107.34', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S24_4258', 'quantity_ordered' => 39, 'price_each' => '82.78', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S32_1268', 'quantity_ordered' => 42, 'price_each' => '90.53', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S32_3522', 'quantity_ordered' => 31, 'price_each' => '62.70', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10348, 'product_code' => 'S700_2824', 'quantity_ordered' => 32, 'price_each' => '100.14', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S12_3891', 'quantity_ordered' => 26, 'price_each' => '166.10', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S12_4473', 'quantity_ordered' => 48, 'price_each' => '114.95', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S18_2238', 'quantity_ordered' => 38, 'price_each' => '142.45', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S18_2319', 'quantity_ordered' => 38, 'price_each' => '117.82', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S18_3232', 'quantity_ordered' => 48, 'price_each' => '164.26', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S18_4027', 'quantity_ordered' => 34, 'price_each' => '140.75', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S24_1444', 'quantity_ordered' => 48, 'price_each' => '50.29', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S24_2840', 'quantity_ordered' => 36, 'price_each' => '31.47', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S24_4048', 'quantity_ordered' => 23, 'price_each' => '111.18', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10349, 'product_code' => 'S32_2509', 'quantity_ordered' => 33, 'price_each' => '44.37', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S10_4757', 'quantity_ordered' => 26, 'price_each' => '110.16', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S18_3029', 'quantity_ordered' => 43, 'price_each' => '84.30', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S18_3140', 'quantity_ordered' => 44, 'price_each' => '135.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S18_3259', 'quantity_ordered' => 41, 'price_each' => '94.79', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S18_4522', 'quantity_ordered' => 30, 'price_each' => '70.22', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S24_2011', 'quantity_ordered' => 34, 'price_each' => '98.31', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S24_3151', 'quantity_ordered' => 30, 'price_each' => '86.74', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S24_3816', 'quantity_ordered' => 25, 'price_each' => '77.15', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S32_3207', 'quantity_ordered' => 27, 'price_each' => '61.52', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S50_1392', 'quantity_ordered' => 31, 'price_each' => '104.18', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S50_1514', 'quantity_ordered' => 44, 'price_each' => '56.82', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S700_1138', 'quantity_ordered' => 46, 'price_each' => '56.00', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S700_1938', 'quantity_ordered' => 28, 'price_each' => '76.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S700_2610', 'quantity_ordered' => 29, 'price_each' => '68.67', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S700_3505', 'quantity_ordered' => 31, 'price_each' => '87.15', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S700_3962', 'quantity_ordered' => 25, 'price_each' => '97.32', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10350, 'product_code' => 'S72_3212', 'quantity_ordered' => 20, 'price_each' => '48.05', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10351, 'product_code' => 'S18_1662', 'quantity_ordered' => 39, 'price_each' => '143.50', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10351, 'product_code' => 'S18_3856', 'quantity_ordered' => 20, 'price_each' => '104.81', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10351, 'product_code' => 'S24_2841', 'quantity_ordered' => 25, 'price_each' => '64.40', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10351, 'product_code' => 'S24_3420', 'quantity_ordered' => 38, 'price_each' => '53.92', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10351, 'product_code' => 'S24_3949', 'quantity_ordered' => 34, 'price_each' => '68.24', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10352, 'product_code' => 'S700_2047', 'quantity_ordered' => 23, 'price_each' => '75.13', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10352, 'product_code' => 'S700_2466', 'quantity_ordered' => 49, 'price_each' => '87.75', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10352, 'product_code' => 'S700_4002', 'quantity_ordered' => 22, 'price_each' => '62.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10352, 'product_code' => 'S72_1253', 'quantity_ordered' => 49, 'price_each' => '46.18', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S18_2581', 'quantity_ordered' => 27, 'price_each' => '71.81', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S24_1785', 'quantity_ordered' => 28, 'price_each' => '107.23', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S24_4278', 'quantity_ordered' => 35, 'price_each' => '69.55', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S32_1374', 'quantity_ordered' => 46, 'price_each' => '86.90', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S32_4289', 'quantity_ordered' => 40, 'price_each' => '68.10', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S50_1341', 'quantity_ordered' => 40, 'price_each' => '35.78', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S700_1691', 'quantity_ordered' => 39, 'price_each' => '73.07', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S700_2834', 'quantity_ordered' => 48, 'price_each' => '98.48', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10353, 'product_code' => 'S700_3167', 'quantity_ordered' => 43, 'price_each' => '74.40', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S10_1678', 'quantity_ordered' => 42, 'price_each' => '84.22', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S10_2016', 'quantity_ordered' => 20, 'price_each' => '95.15', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S10_4698', 'quantity_ordered' => 42, 'price_each' => '178.17', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S12_1099', 'quantity_ordered' => 31, 'price_each' => '157.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S12_2823', 'quantity_ordered' => 35, 'price_each' => '141.58', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S12_3380', 'quantity_ordered' => 29, 'price_each' => '98.65', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S12_3990', 'quantity_ordered' => 23, 'price_each' => '76.61', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S12_4675', 'quantity_ordered' => 28, 'price_each' => '100.19', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S18_1889', 'quantity_ordered' => 21, 'price_each' => '76.23', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S18_2625', 'quantity_ordered' => 28, 'price_each' => '49.06', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S18_3278', 'quantity_ordered' => 36, 'price_each' => '69.15', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S24_1578', 'quantity_ordered' => 21, 'price_each' => '96.92', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10354, 'product_code' => 'S24_2000', 'quantity_ordered' => 28, 'price_each' => '62.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S18_3482', 'quantity_ordered' => 23, 'price_each' => '117.59', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S18_3782', 'quantity_ordered' => 31, 'price_each' => '60.30', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S18_4721', 'quantity_ordered' => 25, 'price_each' => '124.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S24_2360', 'quantity_ordered' => 41, 'price_each' => '56.10', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S24_2972', 'quantity_ordered' => 36, 'price_each' => '37.38', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S24_3371', 'quantity_ordered' => 44, 'price_each' => '60.62', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S24_3856', 'quantity_ordered' => 32, 'price_each' => '137.62', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S24_4620', 'quantity_ordered' => 28, 'price_each' => '75.18', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S32_2206', 'quantity_ordered' => 38, 'price_each' => '32.99', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10355, 'product_code' => 'S32_4485', 'quantity_ordered' => 40, 'price_each' => '93.89', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_1129', 'quantity_ordered' => 43, 'price_each' => '120.31', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_1342', 'quantity_ordered' => 50, 'price_each' => '82.19', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_1367', 'quantity_ordered' => 22, 'price_each' => '44.75', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_1984', 'quantity_ordered' => 27, 'price_each' => '130.87', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_2325', 'quantity_ordered' => 29, 'price_each' => '106.79', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S18_2795', 'quantity_ordered' => 30, 'price_each' => '158.63', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S24_1937', 'quantity_ordered' => 48, 'price_each' => '31.86', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S24_2022', 'quantity_ordered' => 26, 'price_each' => '42.11', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10356, 'product_code' => 'S50_4713', 'quantity_ordered' => 26, 'price_each' => '78.11', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S10_1949', 'quantity_ordered' => 32, 'price_each' => '199.30', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S10_4962', 'quantity_ordered' => 43, 'price_each' => '135.92', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S12_1666', 'quantity_ordered' => 49, 'price_each' => '109.34', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_1097', 'quantity_ordered' => 39, 'price_each' => '112.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_2432', 'quantity_ordered' => 41, 'price_each' => '58.95', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_2949', 'quantity_ordered' => 41, 'price_each' => '91.18', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_2957', 'quantity_ordered' => 49, 'price_each' => '59.34', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_3136', 'quantity_ordered' => 44, 'price_each' => '104.72', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_3320', 'quantity_ordered' => 25, 'price_each' => '84.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10357, 'product_code' => 'S18_4600', 'quantity_ordered' => 28, 'price_each' => '105.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S12_3148', 'quantity_ordered' => 49, 'price_each' => '129.93', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S12_4473', 'quantity_ordered' => 42, 'price_each' => '98.36', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S18_2238', 'quantity_ordered' => 20, 'price_each' => '142.45', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S18_2319', 'quantity_ordered' => 20, 'price_each' => '99.41', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S18_3232', 'quantity_ordered' => 32, 'price_each' => '137.17', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S18_4027', 'quantity_ordered' => 25, 'price_each' => '117.77', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S18_4668', 'quantity_ordered' => 30, 'price_each' => '46.29', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S24_1444', 'quantity_ordered' => 44, 'price_each' => '56.07', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S24_2300', 'quantity_ordered' => 41, 'price_each' => '127.79', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S24_2840', 'quantity_ordered' => 36, 'price_each' => '33.59', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S24_4258', 'quantity_ordered' => 41, 'price_each' => '88.62', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S32_1268', 'quantity_ordered' => 41, 'price_each' => '82.83', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S32_3522', 'quantity_ordered' => 36, 'price_each' => '51.71', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10358, 'product_code' => 'S700_2824', 'quantity_ordered' => 27, 'price_each' => '85.98', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S10_4757', 'quantity_ordered' => 48, 'price_each' => '122.40', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S12_1108', 'quantity_ordered' => 42, 'price_each' => '180.79', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S12_3891', 'quantity_ordered' => 49, 'price_each' => '162.64', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S24_4048', 'quantity_ordered' => 22, 'price_each' => '108.82', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S32_2509', 'quantity_ordered' => 36, 'price_each' => '45.45', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S32_3207', 'quantity_ordered' => 22, 'price_each' => '62.14', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S50_1392', 'quantity_ordered' => 46, 'price_each' => '99.55', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10359, 'product_code' => 'S50_1514', 'quantity_ordered' => 25, 'price_each' => '47.45', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_1662', 'quantity_ordered' => 50, 'price_each' => '126.15', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_2581', 'quantity_ordered' => 41, 'price_each' => '68.43', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_3029', 'quantity_ordered' => 46, 'price_each' => '71.40', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_3140', 'quantity_ordered' => 29, 'price_each' => '122.93', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_3259', 'quantity_ordered' => 29, 'price_each' => '94.79', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_3856', 'quantity_ordered' => 40, 'price_each' => '101.64', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S18_4522', 'quantity_ordered' => 40, 'price_each' => '76.36', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S24_1785', 'quantity_ordered' => 22, 'price_each' => '106.14', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S24_2011', 'quantity_ordered' => 31, 'price_each' => '100.77', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S24_2841', 'quantity_ordered' => 49, 'price_each' => '55.49', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S24_3151', 'quantity_ordered' => 36, 'price_each' => '70.81', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S24_3816', 'quantity_ordered' => 22, 'price_each' => '78.83', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S700_1138', 'quantity_ordered' => 32, 'price_each' => '64.67', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S700_1938', 'quantity_ordered' => 26, 'price_each' => '86.61', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S700_2610', 'quantity_ordered' => 30, 'price_each' => '70.11', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S700_3505', 'quantity_ordered' => 35, 'price_each' => '83.14', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S700_3962', 'quantity_ordered' => 31, 'price_each' => '92.36', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10360, 'product_code' => 'S72_3212', 'quantity_ordered' => 31, 'price_each' => '54.05', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S10_1678', 'quantity_ordered' => 20, 'price_each' => '92.83', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S10_2016', 'quantity_ordered' => 26, 'price_each' => '114.18', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S24_3420', 'quantity_ordered' => 34, 'price_each' => '62.46', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S24_3949', 'quantity_ordered' => 26, 'price_each' => '61.42', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S24_4278', 'quantity_ordered' => 25, 'price_each' => '68.83', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S32_4289', 'quantity_ordered' => 49, 'price_each' => '56.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S50_1341', 'quantity_ordered' => 33, 'price_each' => '35.78', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_1691', 'quantity_ordered' => 20, 'price_each' => '88.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_2047', 'quantity_ordered' => 24, 'price_each' => '85.99', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_2466', 'quantity_ordered' => 26, 'price_each' => '91.74', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_2834', 'quantity_ordered' => 44, 'price_each' => '107.97', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_3167', 'quantity_ordered' => 44, 'price_each' => '76.80', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S700_4002', 'quantity_ordered' => 35, 'price_each' => '62.19', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10361, 'product_code' => 'S72_1253', 'quantity_ordered' => 23, 'price_each' => '47.67', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10362, 'product_code' => 'S10_4698', 'quantity_ordered' => 22, 'price_each' => '182.04', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10362, 'product_code' => 'S12_2823', 'quantity_ordered' => 22, 'price_each' => '131.04', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10362, 'product_code' => 'S18_2625', 'quantity_ordered' => 23, 'price_each' => '53.91', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10362, 'product_code' => 'S24_1578', 'quantity_ordered' => 50, 'price_each' => '91.29', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S12_1099', 'quantity_ordered' => 33, 'price_each' => '180.95', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S12_3380', 'quantity_ordered' => 34, 'price_each' => '106.87', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S12_3990', 'quantity_ordered' => 34, 'price_each' => '68.63', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S12_4675', 'quantity_ordered' => 46, 'price_each' => '103.64', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S18_1889', 'quantity_ordered' => 22, 'price_each' => '61.60', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S18_3278', 'quantity_ordered' => 46, 'price_each' => '69.15', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S18_3482', 'quantity_ordered' => 24, 'price_each' => '124.94', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S18_3782', 'quantity_ordered' => 32, 'price_each' => '52.22', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S18_4721', 'quantity_ordered' => 28, 'price_each' => '123.50', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S24_2000', 'quantity_ordered' => 21, 'price_each' => '70.08', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S24_2360', 'quantity_ordered' => 43, 'price_each' => '56.10', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S24_3371', 'quantity_ordered' => 21, 'price_each' => '52.05', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S24_3856', 'quantity_ordered' => 31, 'price_each' => '113.75', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S24_4620', 'quantity_ordered' => 43, 'price_each' => '75.99', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10363, 'product_code' => 'S32_1374', 'quantity_ordered' => 50, 'price_each' => '92.90', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10364, 'product_code' => 'S32_2206', 'quantity_ordered' => 48, 'price_each' => '38.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10365, 'product_code' => 'S18_1129', 'quantity_ordered' => 30, 'price_each' => '116.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10365, 'product_code' => 'S32_4485', 'quantity_ordered' => 22, 'price_each' => '82.66', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10365, 'product_code' => 'S50_4713', 'quantity_ordered' => 44, 'price_each' => '68.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10366, 'product_code' => 'S18_1984', 'quantity_ordered' => 34, 'price_each' => '116.65', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10366, 'product_code' => 'S18_2870', 'quantity_ordered' => 49, 'price_each' => '105.60', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10366, 'product_code' => 'S18_3232', 'quantity_ordered' => 34, 'price_each' => '154.10', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_1589', 'quantity_ordered' => 49, 'price_each' => '105.77', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_1749', 'quantity_ordered' => 37, 'price_each' => '144.50', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_2248', 'quantity_ordered' => 45, 'price_each' => '50.25', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_2325', 'quantity_ordered' => 27, 'price_each' => '124.59', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_2795', 'quantity_ordered' => 32, 'price_each' => '140.06', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_3685', 'quantity_ordered' => 46, 'price_each' => '131.39', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_4409', 'quantity_ordered' => 43, 'price_each' => '77.31', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S18_4933', 'quantity_ordered' => 44, 'price_each' => '66.99', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S24_1046', 'quantity_ordered' => 21, 'price_each' => '72.76', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S24_1628', 'quantity_ordered' => 38, 'price_each' => '50.31', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S24_1937', 'quantity_ordered' => 23, 'price_each' => '29.54', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S24_2022', 'quantity_ordered' => 28, 'price_each' => '43.01', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10367, 'product_code' => 'S24_2972', 'quantity_ordered' => 36, 'price_each' => '36.25', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10368, 'product_code' => 'S24_2766', 'quantity_ordered' => 40, 'price_each' => '73.60', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10368, 'product_code' => 'S24_2887', 'quantity_ordered' => 31, 'price_each' => '115.09', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10368, 'product_code' => 'S24_3191', 'quantity_ordered' => 46, 'price_each' => '83.04', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10368, 'product_code' => 'S24_3432', 'quantity_ordered' => 20, 'price_each' => '93.16', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10368, 'product_code' => 'S24_3969', 'quantity_ordered' => 46, 'price_each' => '36.52', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S10_1949', 'quantity_ordered' => 41, 'price_each' => '195.01', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_1342', 'quantity_ordered' => 44, 'price_each' => '89.38', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_1367', 'quantity_ordered' => 32, 'price_each' => '46.36', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_2949', 'quantity_ordered' => 42, 'price_each' => '100.30', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_2957', 'quantity_ordered' => 28, 'price_each' => '51.84', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_3136', 'quantity_ordered' => 21, 'price_each' => '90.06', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S18_3320', 'quantity_ordered' => 45, 'price_each' => '80.36', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10369, 'product_code' => 'S24_4258', 'quantity_ordered' => 40, 'price_each' => '93.49', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S10_4962', 'quantity_ordered' => 35, 'price_each' => '128.53', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S12_1666', 'quantity_ordered' => 49, 'price_each' => '128.47', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_1097', 'quantity_ordered' => 27, 'price_each' => '100.34', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_2319', 'quantity_ordered' => 22, 'price_each' => '101.87', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_2432', 'quantity_ordered' => 22, 'price_each' => '60.16', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_3232', 'quantity_ordered' => 27, 'price_each' => '167.65', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_4600', 'quantity_ordered' => 29, 'price_each' => '105.34', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S18_4668', 'quantity_ordered' => 20, 'price_each' => '41.76', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10370, 'product_code' => 'S32_3522', 'quantity_ordered' => 25, 'price_each' => '63.99', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S12_1108', 'quantity_ordered' => 32, 'price_each' => '178.71', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S12_4473', 'quantity_ordered' => 49, 'price_each' => '104.28', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S18_2238', 'quantity_ordered' => 25, 'price_each' => '160.46', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S24_1444', 'quantity_ordered' => 25, 'price_each' => '53.75', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S24_2300', 'quantity_ordered' => 20, 'price_each' => '126.51', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S24_2840', 'quantity_ordered' => 45, 'price_each' => '35.01', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S24_4048', 'quantity_ordered' => 28, 'price_each' => '95.81', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S32_1268', 'quantity_ordered' => 26, 'price_each' => '82.83', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S32_2509', 'quantity_ordered' => 20, 'price_each' => '44.37', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S32_3207', 'quantity_ordered' => 30, 'price_each' => '53.44', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S50_1392', 'quantity_ordered' => 48, 'price_each' => '97.23', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10371, 'product_code' => 'S700_2824', 'quantity_ordered' => 34, 'price_each' => '83.95', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S12_3148', 'quantity_ordered' => 40, 'price_each' => '146.55', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S12_3891', 'quantity_ordered' => 34, 'price_each' => '140.15', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S18_3140', 'quantity_ordered' => 28, 'price_each' => '131.13', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S18_3259', 'quantity_ordered' => 25, 'price_each' => '91.76', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S18_4027', 'quantity_ordered' => 48, 'price_each' => '119.20', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S18_4522', 'quantity_ordered' => 41, 'price_each' => '78.99', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S24_2011', 'quantity_ordered' => 37, 'price_each' => '102.00', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S50_1514', 'quantity_ordered' => 24, 'price_each' => '56.82', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10372, 'product_code' => 'S700_1938', 'quantity_ordered' => 44, 'price_each' => '74.48', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S10_4757', 'quantity_ordered' => 39, 'price_each' => '118.32', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S18_1662', 'quantity_ordered' => 28, 'price_each' => '143.50', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S18_3029', 'quantity_ordered' => 22, 'price_each' => '75.70', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S18_3856', 'quantity_ordered' => 50, 'price_each' => '99.52', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S24_2841', 'quantity_ordered' => 38, 'price_each' => '58.92', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S24_3151', 'quantity_ordered' => 33, 'price_each' => '82.31', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S24_3420', 'quantity_ordered' => 46, 'price_each' => '53.92', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S24_3816', 'quantity_ordered' => 23, 'price_each' => '83.86', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S24_3949', 'quantity_ordered' => 39, 'price_each' => '62.10', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_1138', 'quantity_ordered' => 44, 'price_each' => '58.00', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_2047', 'quantity_ordered' => 32, 'price_each' => '76.94', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_2610', 'quantity_ordered' => 41, 'price_each' => '69.39', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_3505', 'quantity_ordered' => 34, 'price_each' => '94.16', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_3962', 'quantity_ordered' => 37, 'price_each' => '83.42', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S700_4002', 'quantity_ordered' => 45, 'price_each' => '68.11', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S72_1253', 'quantity_ordered' => 25, 'price_each' => '44.20', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10373, 'product_code' => 'S72_3212', 'quantity_ordered' => 29, 'price_each' => '48.05', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S10_2016', 'quantity_ordered' => 39, 'price_each' => '115.37', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S10_4698', 'quantity_ordered' => 22, 'price_each' => '158.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S18_2581', 'quantity_ordered' => 42, 'price_each' => '75.19', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S18_2625', 'quantity_ordered' => 22, 'price_each' => '48.46', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S24_1578', 'quantity_ordered' => 38, 'price_each' => '112.70', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10374, 'product_code' => 'S24_1785', 'quantity_ordered' => 46, 'price_each' => '107.23', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S10_1678', 'quantity_ordered' => 21, 'price_each' => '76.56', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S12_1099', 'quantity_ordered' => 45, 'price_each' => '184.84', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S12_2823', 'quantity_ordered' => 49, 'price_each' => '150.62', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S24_2000', 'quantity_ordered' => 23, 'price_each' => '67.03', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S24_2360', 'quantity_ordered' => 20, 'price_each' => '60.26', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S24_4278', 'quantity_ordered' => 43, 'price_each' => '60.13', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S32_1374', 'quantity_ordered' => 37, 'price_each' => '87.90', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S32_4289', 'quantity_ordered' => 44, 'price_each' => '59.85', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S32_4485', 'quantity_ordered' => 41, 'price_each' => '96.95', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S50_1341', 'quantity_ordered' => 49, 'price_each' => '36.22', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S50_4713', 'quantity_ordered' => 49, 'price_each' => '69.16', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S700_1691', 'quantity_ordered' => 37, 'price_each' => '86.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S700_2466', 'quantity_ordered' => 33, 'price_each' => '94.73', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S700_2834', 'quantity_ordered' => 25, 'price_each' => '98.48', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10375, 'product_code' => 'S700_3167', 'quantity_ordered' => 44, 'price_each' => '69.60', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10376, 'product_code' => 'S12_3380', 'quantity_ordered' => 35, 'price_each' => '98.65', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S12_3990', 'quantity_ordered' => 24, 'price_each' => '65.44', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S12_4675', 'quantity_ordered' => 50, 'price_each' => '112.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S18_1129', 'quantity_ordered' => 35, 'price_each' => '124.56', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S18_1889', 'quantity_ordered' => 31, 'price_each' => '61.60', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S18_1984', 'quantity_ordered' => 36, 'price_each' => '125.18', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10377, 'product_code' => 'S18_3232', 'quantity_ordered' => 39, 'price_each' => '143.94', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S18_1589', 'quantity_ordered' => 34, 'price_each' => '121.95', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S18_3278', 'quantity_ordered' => 22, 'price_each' => '66.74', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S18_3482', 'quantity_ordered' => 43, 'price_each' => '146.99', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S18_3782', 'quantity_ordered' => 28, 'price_each' => '60.30', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S18_4721', 'quantity_ordered' => 49, 'price_each' => '122.02', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S24_2972', 'quantity_ordered' => 41, 'price_each' => '30.59', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S24_3371', 'quantity_ordered' => 46, 'price_each' => '52.66', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S24_3856', 'quantity_ordered' => 33, 'price_each' => '129.20', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S24_4620', 'quantity_ordered' => 41, 'price_each' => '80.84', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10378, 'product_code' => 'S32_2206', 'quantity_ordered' => 40, 'price_each' => '35.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10379, 'product_code' => 'S18_1749', 'quantity_ordered' => 39, 'price_each' => '156.40', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10379, 'product_code' => 'S18_2248', 'quantity_ordered' => 27, 'price_each' => '50.85', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10379, 'product_code' => 'S18_2870', 'quantity_ordered' => 29, 'price_each' => '113.52', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10379, 'product_code' => 'S18_3685', 'quantity_ordered' => 32, 'price_each' => '134.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10379, 'product_code' => 'S24_1628', 'quantity_ordered' => 32, 'price_each' => '48.80', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S18_1342', 'quantity_ordered' => 27, 'price_each' => '88.36', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S18_2325', 'quantity_ordered' => 40, 'price_each' => '119.50', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S18_2795', 'quantity_ordered' => 21, 'price_each' => '156.94', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S18_4409', 'quantity_ordered' => 32, 'price_each' => '78.23', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S18_4933', 'quantity_ordered' => 24, 'price_each' => '66.99', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_1046', 'quantity_ordered' => 34, 'price_each' => '66.88', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_1937', 'quantity_ordered' => 32, 'price_each' => '29.87', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_2022', 'quantity_ordered' => 27, 'price_each' => '37.63', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_2766', 'quantity_ordered' => 36, 'price_each' => '77.24', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_2887', 'quantity_ordered' => 44, 'price_each' => '111.57', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_3191', 'quantity_ordered' => 44, 'price_each' => '77.05', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_3432', 'quantity_ordered' => 34, 'price_each' => '91.02', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10380, 'product_code' => 'S24_3969', 'quantity_ordered' => 43, 'price_each' => '32.82', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S10_1949', 'quantity_ordered' => 36, 'price_each' => '182.16', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S10_4962', 'quantity_ordered' => 37, 'price_each' => '138.88', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S12_1666', 'quantity_ordered' => 20, 'price_each' => '132.57', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_1097', 'quantity_ordered' => 48, 'price_each' => '114.34', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_1367', 'quantity_ordered' => 25, 'price_each' => '49.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_2432', 'quantity_ordered' => 35, 'price_each' => '60.77', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_2949', 'quantity_ordered' => 41, 'price_each' => '100.30', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_2957', 'quantity_ordered' => 40, 'price_each' => '51.22', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10381, 'product_code' => 'S18_3136', 'quantity_ordered' => 35, 'price_each' => '93.20', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S12_1108', 'quantity_ordered' => 34, 'price_each' => '166.24', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S12_3148', 'quantity_ordered' => 37, 'price_each' => '145.04', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S12_3891', 'quantity_ordered' => 34, 'price_each' => '143.61', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S12_4473', 'quantity_ordered' => 32, 'price_each' => '103.10', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S18_2238', 'quantity_ordered' => 25, 'price_each' => '160.46', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S18_3320', 'quantity_ordered' => 50, 'price_each' => '84.33', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S18_4600', 'quantity_ordered' => 39, 'price_each' => '115.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S18_4668', 'quantity_ordered' => 39, 'price_each' => '46.29', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S24_2300', 'quantity_ordered' => 20, 'price_each' => '120.12', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '97.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S32_1268', 'quantity_ordered' => 26, 'price_each' => '85.72', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S32_3522', 'quantity_ordered' => 48, 'price_each' => '57.53', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10382, 'product_code' => 'S700_2824', 'quantity_ordered' => 34, 'price_each' => '101.15', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_2319', 'quantity_ordered' => 27, 'price_each' => '119.05', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_3140', 'quantity_ordered' => 24, 'price_each' => '125.66', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_3232', 'quantity_ordered' => 47, 'price_each' => '155.79', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_3259', 'quantity_ordered' => 26, 'price_each' => '83.70', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_4027', 'quantity_ordered' => 38, 'price_each' => '137.88', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S18_4522', 'quantity_ordered' => 28, 'price_each' => '77.24', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S24_1444', 'quantity_ordered' => 22, 'price_each' => '52.60', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S24_2840', 'quantity_ordered' => 40, 'price_each' => '33.24', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S24_4048', 'quantity_ordered' => 21, 'price_each' => '117.10', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S32_2509', 'quantity_ordered' => 32, 'price_each' => '53.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S32_3207', 'quantity_ordered' => 44, 'price_each' => '55.93', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S50_1392', 'quantity_ordered' => 29, 'price_each' => '94.92', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10383, 'product_code' => 'S50_1514', 'quantity_ordered' => 38, 'price_each' => '48.62', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10384, 'product_code' => 'S10_4757', 'quantity_ordered' => 34, 'price_each' => '129.20', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10384, 'product_code' => 'S24_2011', 'quantity_ordered' => 28, 'price_each' => '114.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10384, 'product_code' => 'S24_3151', 'quantity_ordered' => 43, 'price_each' => '71.69', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10384, 'product_code' => 'S700_1938', 'quantity_ordered' => 49, 'price_each' => '71.02', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10385, 'product_code' => 'S24_3816', 'quantity_ordered' => 37, 'price_each' => '78.83', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10385, 'product_code' => 'S700_1138', 'quantity_ordered' => 25, 'price_each' => '62.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S18_1662', 'quantity_ordered' => 25, 'price_each' => '130.88', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S18_2581', 'quantity_ordered' => 21, 'price_each' => '72.65', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S18_3029', 'quantity_ordered' => 37, 'price_each' => '73.12', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S18_3856', 'quantity_ordered' => 22, 'price_each' => '100.58', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S24_1785', 'quantity_ordered' => 33, 'price_each' => '101.76', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S24_2841', 'quantity_ordered' => 39, 'price_each' => '56.86', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S24_3420', 'quantity_ordered' => 35, 'price_each' => '54.57', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S24_3949', 'quantity_ordered' => 41, 'price_each' => '55.96', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S24_4278', 'quantity_ordered' => 50, 'price_each' => '71.73', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_2047', 'quantity_ordered' => 29, 'price_each' => '85.09', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_2466', 'quantity_ordered' => 37, 'price_each' => '90.75', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_2610', 'quantity_ordered' => 37, 'price_each' => '67.22', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_3167', 'quantity_ordered' => 32, 'price_each' => '68.00', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_3505', 'quantity_ordered' => 45, 'price_each' => '83.14', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_3962', 'quantity_ordered' => 30, 'price_each' => '80.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S700_4002', 'quantity_ordered' => 44, 'price_each' => '59.22', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S72_1253', 'quantity_ordered' => 50, 'price_each' => '47.67', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10386, 'product_code' => 'S72_3212', 'quantity_ordered' => 43, 'price_each' => '52.42', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10387, 'product_code' => 'S32_1374', 'quantity_ordered' => 44, 'price_each' => '79.91', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S10_1678', 'quantity_ordered' => 42, 'price_each' => '80.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S10_2016', 'quantity_ordered' => 50, 'price_each' => '118.94', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S10_4698', 'quantity_ordered' => 21, 'price_each' => '156.86', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S12_2823', 'quantity_ordered' => 44, 'price_each' => '125.01', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S32_4289', 'quantity_ordered' => 35, 'price_each' => '58.47', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S50_1341', 'quantity_ordered' => 27, 'price_each' => '41.02', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S700_1691', 'quantity_ordered' => 46, 'price_each' => '74.90', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10388, 'product_code' => 'S700_2834', 'quantity_ordered' => 50, 'price_each' => '111.53', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S12_1099', 'quantity_ordered' => 26, 'price_each' => '182.90', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S12_3380', 'quantity_ordered' => 25, 'price_each' => '95.13', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S12_3990', 'quantity_ordered' => 36, 'price_each' => '76.61', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S12_4675', 'quantity_ordered' => 47, 'price_each' => '102.49', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S18_1889', 'quantity_ordered' => 49, 'price_each' => '63.91', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S18_2625', 'quantity_ordered' => 39, 'price_each' => '52.09', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S24_1578', 'quantity_ordered' => 45, 'price_each' => '112.70', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10389, 'product_code' => 'S24_2000', 'quantity_ordered' => 49, 'price_each' => '61.70', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_1129', 'quantity_ordered' => 36, 'price_each' => '117.48', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_1984', 'quantity_ordered' => 34, 'price_each' => '132.29', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_2325', 'quantity_ordered' => 31, 'price_each' => '102.98', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_2795', 'quantity_ordered' => 26, 'price_each' => '162.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_3278', 'quantity_ordered' => 40, 'price_each' => '75.59', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_3482', 'quantity_ordered' => 50, 'price_each' => '135.23', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_3782', 'quantity_ordered' => 36, 'price_each' => '54.09', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S18_4721', 'quantity_ordered' => 49, 'price_each' => '122.02', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S24_2360', 'quantity_ordered' => 35, 'price_each' => '67.87', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S24_2972', 'quantity_ordered' => 37, 'price_each' => '35.87', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S24_3371', 'quantity_ordered' => 46, 'price_each' => '51.43', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S24_3856', 'quantity_ordered' => 45, 'price_each' => '134.81', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S24_4620', 'quantity_ordered' => 30, 'price_each' => '66.29', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S32_2206', 'quantity_ordered' => 41, 'price_each' => '39.02', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S32_4485', 'quantity_ordered' => 45, 'price_each' => '101.03', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10390, 'product_code' => 'S50_4713', 'quantity_ordered' => 22, 'price_each' => '81.36', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S10_1949', 'quantity_ordered' => 24, 'price_each' => '195.01', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S10_4962', 'quantity_ordered' => 37, 'price_each' => '121.15', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S12_1666', 'quantity_ordered' => 39, 'price_each' => '110.70', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S18_1097', 'quantity_ordered' => 29, 'price_each' => '114.34', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S18_1342', 'quantity_ordered' => 35, 'price_each' => '102.74', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S18_1367', 'quantity_ordered' => 42, 'price_each' => '47.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S18_2432', 'quantity_ordered' => 44, 'price_each' => '57.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S18_2949', 'quantity_ordered' => 32, 'price_each' => '99.28', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S24_1937', 'quantity_ordered' => 33, 'price_each' => '26.55', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10391, 'product_code' => 'S24_2022', 'quantity_ordered' => 24, 'price_each' => '36.29', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10392, 'product_code' => 'S18_2957', 'quantity_ordered' => 37, 'price_each' => '61.21', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10392, 'product_code' => 'S18_3136', 'quantity_ordered' => 29, 'price_each' => '103.67', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10392, 'product_code' => 'S18_3320', 'quantity_ordered' => 36, 'price_each' => '98.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S12_3148', 'quantity_ordered' => 35, 'price_each' => '145.04', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S12_4473', 'quantity_ordered' => 32, 'price_each' => '99.54', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S18_2238', 'quantity_ordered' => 20, 'price_each' => '137.53', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S18_2319', 'quantity_ordered' => 38, 'price_each' => '104.32', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S18_4600', 'quantity_ordered' => 30, 'price_each' => '106.55', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S18_4668', 'quantity_ordered' => 44, 'price_each' => '41.76', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S24_2300', 'quantity_ordered' => 33, 'price_each' => '112.46', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S24_4258', 'quantity_ordered' => 33, 'price_each' => '88.62', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S32_1268', 'quantity_ordered' => 38, 'price_each' => '84.75', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S32_3522', 'quantity_ordered' => 31, 'price_each' => '63.35', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10393, 'product_code' => 'S700_2824', 'quantity_ordered' => 21, 'price_each' => '83.95', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S18_3232', 'quantity_ordered' => 22, 'price_each' => '135.47', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S18_4027', 'quantity_ordered' => 37, 'price_each' => '124.95', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S24_1444', 'quantity_ordered' => 31, 'price_each' => '53.18', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S24_2840', 'quantity_ordered' => 46, 'price_each' => '35.36', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S24_4048', 'quantity_ordered' => 37, 'price_each' => '104.09', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S32_2509', 'quantity_ordered' => 36, 'price_each' => '47.08', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10394, 'product_code' => 'S32_3207', 'quantity_ordered' => 30, 'price_each' => '55.93', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10395, 'product_code' => 'S10_4757', 'quantity_ordered' => 32, 'price_each' => '125.12', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10395, 'product_code' => 'S12_1108', 'quantity_ordered' => 33, 'price_each' => '205.72', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10395, 'product_code' => 'S50_1392', 'quantity_ordered' => 46, 'price_each' => '98.39', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10395, 'product_code' => 'S50_1514', 'quantity_ordered' => 45, 'price_each' => '57.99', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S12_3891', 'quantity_ordered' => 33, 'price_each' => '155.72', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S18_3140', 'quantity_ordered' => 33, 'price_each' => '129.76', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S18_3259', 'quantity_ordered' => 24, 'price_each' => '91.76', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S18_4522', 'quantity_ordered' => 45, 'price_each' => '83.38', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S24_2011', 'quantity_ordered' => 49, 'price_each' => '100.77', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S24_3151', 'quantity_ordered' => 27, 'price_each' => '77.00', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S24_3816', 'quantity_ordered' => 37, 'price_each' => '77.99', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10396, 'product_code' => 'S700_1138', 'quantity_ordered' => 39, 'price_each' => '62.00', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10397, 'product_code' => 'S700_1938', 'quantity_ordered' => 32, 'price_each' => '69.29', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10397, 'product_code' => 'S700_2610', 'quantity_ordered' => 22, 'price_each' => '62.88', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10397, 'product_code' => 'S700_3505', 'quantity_ordered' => 48, 'price_each' => '86.15', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10397, 'product_code' => 'S700_3962', 'quantity_ordered' => 36, 'price_each' => '80.44', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10397, 'product_code' => 'S72_3212', 'quantity_ordered' => 34, 'price_each' => '52.96', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S18_1662', 'quantity_ordered' => 33, 'price_each' => '130.88', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S18_2581', 'quantity_ordered' => 34, 'price_each' => '82.79', 'order_line_number' => 15]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S18_3029', 'quantity_ordered' => 28, 'price_each' => '70.54', 'order_line_number' => 18]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S18_3856', 'quantity_ordered' => 45, 'price_each' => '92.11', 'order_line_number' => 17]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S24_1785', 'quantity_ordered' => 43, 'price_each' => '100.67', 'order_line_number' => 16]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S24_2841', 'quantity_ordered' => 28, 'price_each' => '60.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S24_3420', 'quantity_ordered' => 34, 'price_each' => '61.15', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S24_3949', 'quantity_ordered' => 41, 'price_each' => '56.64', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S24_4278', 'quantity_ordered' => 45, 'price_each' => '65.93', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S32_4289', 'quantity_ordered' => 22, 'price_each' => '60.54', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S50_1341', 'quantity_ordered' => 49, 'price_each' => '38.84', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_1691', 'quantity_ordered' => 47, 'price_each' => '78.55', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_2047', 'quantity_ordered' => 36, 'price_each' => '75.13', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_2466', 'quantity_ordered' => 22, 'price_each' => '98.72', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_2834', 'quantity_ordered' => 23, 'price_each' => '102.04', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_3167', 'quantity_ordered' => 29, 'price_each' => '76.80', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S700_4002', 'quantity_ordered' => 36, 'price_each' => '62.19', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10398, 'product_code' => 'S72_1253', 'quantity_ordered' => 34, 'price_each' => '41.22', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S10_1678', 'quantity_ordered' => 40, 'price_each' => '77.52', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S10_2016', 'quantity_ordered' => 51, 'price_each' => '99.91', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S10_4698', 'quantity_ordered' => 22, 'price_each' => '156.86', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S12_2823', 'quantity_ordered' => 29, 'price_each' => '123.51', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S18_2625', 'quantity_ordered' => 30, 'price_each' => '51.48', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S24_1578', 'quantity_ordered' => 57, 'price_each' => '104.81', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S24_2000', 'quantity_ordered' => 58, 'price_each' => '75.41', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10399, 'product_code' => 'S32_1374', 'quantity_ordered' => 32, 'price_each' => '97.89', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S10_4757', 'quantity_ordered' => 64, 'price_each' => '134.64', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S18_1662', 'quantity_ordered' => 34, 'price_each' => '129.31', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S18_3029', 'quantity_ordered' => 30, 'price_each' => '74.84', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S18_3856', 'quantity_ordered' => 58, 'price_each' => '88.93', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S24_2841', 'quantity_ordered' => 24, 'price_each' => '55.49', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S24_3420', 'quantity_ordered' => 38, 'price_each' => '59.18', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S24_3816', 'quantity_ordered' => 42, 'price_each' => '74.64', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S700_2047', 'quantity_ordered' => 46, 'price_each' => '82.37', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10400, 'product_code' => 'S72_1253', 'quantity_ordered' => 20, 'price_each' => '41.71', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S18_2581', 'quantity_ordered' => 42, 'price_each' => '75.19', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S24_1785', 'quantity_ordered' => 38, 'price_each' => '87.54', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S24_3949', 'quantity_ordered' => 64, 'price_each' => '59.37', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S24_4278', 'quantity_ordered' => 52, 'price_each' => '65.93', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S32_1374', 'quantity_ordered' => 49, 'price_each' => '81.91', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S32_4289', 'quantity_ordered' => 62, 'price_each' => '62.60', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S50_1341', 'quantity_ordered' => 56, 'price_each' => '41.46', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S700_1691', 'quantity_ordered' => 11, 'price_each' => '77.64', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S700_2466', 'quantity_ordered' => 85, 'price_each' => '98.72', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S700_2834', 'quantity_ordered' => 21, 'price_each' => '96.11', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S700_3167', 'quantity_ordered' => 77, 'price_each' => '73.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10401, 'product_code' => 'S700_4002', 'quantity_ordered' => 40, 'price_each' => '66.63', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10402, 'product_code' => 'S10_2016', 'quantity_ordered' => 45, 'price_each' => '118.94', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10402, 'product_code' => 'S18_2625', 'quantity_ordered' => 55, 'price_each' => '58.15', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10402, 'product_code' => 'S24_2000', 'quantity_ordered' => 59, 'price_each' => '61.70', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S10_1678', 'quantity_ordered' => 24, 'price_each' => '85.17', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S10_4698', 'quantity_ordered' => 66, 'price_each' => '174.29', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S12_2823', 'quantity_ordered' => 66, 'price_each' => '122.00', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S18_3782', 'quantity_ordered' => 36, 'price_each' => '55.33', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S24_1578', 'quantity_ordered' => 46, 'price_each' => '109.32', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S24_2360', 'quantity_ordered' => 27, 'price_each' => '57.49', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S32_2206', 'quantity_ordered' => 30, 'price_each' => '35.80', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S32_4485', 'quantity_ordered' => 45, 'price_each' => '88.78', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10403, 'product_code' => 'S50_4713', 'quantity_ordered' => 31, 'price_each' => '65.09', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S12_1099', 'quantity_ordered' => 64, 'price_each' => '163.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S12_3380', 'quantity_ordered' => 43, 'price_each' => '102.17', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S12_3990', 'quantity_ordered' => 77, 'price_each' => '67.03', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S18_3278', 'quantity_ordered' => 90, 'price_each' => '67.54', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S18_3482', 'quantity_ordered' => 28, 'price_each' => '127.88', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S18_4721', 'quantity_ordered' => 48, 'price_each' => '124.99', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S24_3371', 'quantity_ordered' => 49, 'price_each' => '53.27', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10404, 'product_code' => 'S24_4620', 'quantity_ordered' => 48, 'price_each' => '65.48', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10405, 'product_code' => 'S12_4675', 'quantity_ordered' => 97, 'price_each' => '115.16', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10405, 'product_code' => 'S18_1889', 'quantity_ordered' => 61, 'price_each' => '72.38', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10405, 'product_code' => 'S18_3232', 'quantity_ordered' => 55, 'price_each' => '147.33', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10405, 'product_code' => 'S24_2972', 'quantity_ordered' => 47, 'price_each' => '37.38', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10405, 'product_code' => 'S24_3856', 'quantity_ordered' => 76, 'price_each' => '127.79', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10406, 'product_code' => 'S18_1129', 'quantity_ordered' => 61, 'price_each' => '124.56', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10406, 'product_code' => 'S18_1984', 'quantity_ordered' => 48, 'price_each' => '133.72', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10406, 'product_code' => 'S18_3685', 'quantity_ordered' => 65, 'price_each' => '117.26', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_1589', 'quantity_ordered' => 59, 'price_each' => '114.48', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_1749', 'quantity_ordered' => 76, 'price_each' => '141.10', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_2248', 'quantity_ordered' => 42, 'price_each' => '58.12', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_2870', 'quantity_ordered' => 41, 'price_each' => '132.00', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_4409', 'quantity_ordered' => 6, 'price_each' => '91.11', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S18_4933', 'quantity_ordered' => 66, 'price_each' => '64.14', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_1046', 'quantity_ordered' => 26, 'price_each' => '68.35', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_1628', 'quantity_ordered' => 64, 'price_each' => '45.78', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_2766', 'quantity_ordered' => 76, 'price_each' => '81.78', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_2887', 'quantity_ordered' => 59, 'price_each' => '98.65', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_3191', 'quantity_ordered' => 13, 'price_each' => '77.05', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10407, 'product_code' => 'S24_3432', 'quantity_ordered' => 43, 'price_each' => '101.73', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10408, 'product_code' => 'S24_3969', 'quantity_ordered' => 15, 'price_each' => '41.03', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10409, 'product_code' => 'S18_2325', 'quantity_ordered' => 6, 'price_each' => '104.25', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10409, 'product_code' => 'S24_1937', 'quantity_ordered' => 61, 'price_each' => '27.88', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_1342', 'quantity_ordered' => 65, 'price_each' => '99.66', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_1367', 'quantity_ordered' => 44, 'price_each' => '51.21', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_2795', 'quantity_ordered' => 56, 'price_each' => '145.13', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_2949', 'quantity_ordered' => 47, 'price_each' => '93.21', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_2957', 'quantity_ordered' => 53, 'price_each' => '49.97', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_3136', 'quantity_ordered' => 34, 'price_each' => '84.82', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S18_3320', 'quantity_ordered' => 44, 'price_each' => '81.35', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S24_2022', 'quantity_ordered' => 31, 'price_each' => '42.56', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10410, 'product_code' => 'S24_4258', 'quantity_ordered' => 50, 'price_each' => '95.44', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S10_1949', 'quantity_ordered' => 23, 'price_each' => '205.73', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S10_4962', 'quantity_ordered' => 27, 'price_each' => '144.79', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S12_1666', 'quantity_ordered' => 40, 'price_each' => '110.70', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S18_1097', 'quantity_ordered' => 27, 'price_each' => '109.67', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S18_4600', 'quantity_ordered' => 46, 'price_each' => '106.55', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S18_4668', 'quantity_ordered' => 35, 'price_each' => '41.25', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S32_1268', 'quantity_ordered' => 26, 'price_each' => '78.01', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S32_3522', 'quantity_ordered' => 27, 'price_each' => '60.76', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10411, 'product_code' => 'S700_2824', 'quantity_ordered' => 34, 'price_each' => '89.01', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S12_4473', 'quantity_ordered' => 54, 'price_each' => '100.73', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S18_2238', 'quantity_ordered' => 41, 'price_each' => '150.63', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S18_2319', 'quantity_ordered' => 56, 'price_each' => '120.28', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S18_2432', 'quantity_ordered' => 47, 'price_each' => '49.83', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S18_3232', 'quantity_ordered' => 60, 'price_each' => '157.49', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S24_1444', 'quantity_ordered' => 21, 'price_each' => '47.40', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S24_2300', 'quantity_ordered' => 70, 'price_each' => '109.90', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S24_2840', 'quantity_ordered' => 30, 'price_each' => '32.88', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S24_4048', 'quantity_ordered' => 31, 'price_each' => '108.82', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S32_2509', 'quantity_ordered' => 19, 'price_each' => '50.86', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10412, 'product_code' => 'S50_1392', 'quantity_ordered' => 26, 'price_each' => '105.33', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S12_1108', 'quantity_ordered' => 36, 'price_each' => '201.57', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S12_3148', 'quantity_ordered' => 47, 'price_each' => '145.04', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S12_3891', 'quantity_ordered' => 22, 'price_each' => '173.02', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S18_4027', 'quantity_ordered' => 49, 'price_each' => '133.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S32_3207', 'quantity_ordered' => 24, 'price_each' => '56.55', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10413, 'product_code' => 'S50_1514', 'quantity_ordered' => 51, 'price_each' => '53.31', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S10_4757', 'quantity_ordered' => 49, 'price_each' => '114.24', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S18_3029', 'quantity_ordered' => 44, 'price_each' => '77.42', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S18_3140', 'quantity_ordered' => 41, 'price_each' => '128.39', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S18_3259', 'quantity_ordered' => 48, 'price_each' => '85.71', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S18_4522', 'quantity_ordered' => 56, 'price_each' => '83.38', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S24_2011', 'quantity_ordered' => 43, 'price_each' => '108.14', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S24_3151', 'quantity_ordered' => 60, 'price_each' => '72.58', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S24_3816', 'quantity_ordered' => 51, 'price_each' => '72.96', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S700_1138', 'quantity_ordered' => 37, 'price_each' => '62.00', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S700_1938', 'quantity_ordered' => 34, 'price_each' => '74.48', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S700_2610', 'quantity_ordered' => 31, 'price_each' => '61.44', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S700_3505', 'quantity_ordered' => 28, 'price_each' => '84.14', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S700_3962', 'quantity_ordered' => 40, 'price_each' => '84.41', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10414, 'product_code' => 'S72_3212', 'quantity_ordered' => 47, 'price_each' => '54.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10415, 'product_code' => 'S18_3856', 'quantity_ordered' => 51, 'price_each' => '86.81', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10415, 'product_code' => 'S24_2841', 'quantity_ordered' => 21, 'price_each' => '60.97', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10415, 'product_code' => 'S24_3420', 'quantity_ordered' => 18, 'price_each' => '59.83', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10415, 'product_code' => 'S700_2047', 'quantity_ordered' => 32, 'price_each' => '73.32', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10415, 'product_code' => 'S72_1253', 'quantity_ordered' => 42, 'price_each' => '43.20', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S18_1662', 'quantity_ordered' => 24, 'price_each' => '129.31', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S18_2581', 'quantity_ordered' => 15, 'price_each' => '70.96', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S24_1785', 'quantity_ordered' => 47, 'price_each' => '90.82', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S24_2000', 'quantity_ordered' => 32, 'price_each' => '62.46', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S24_3949', 'quantity_ordered' => 18, 'price_each' => '64.83', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S24_4278', 'quantity_ordered' => 48, 'price_each' => '70.28', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S32_1374', 'quantity_ordered' => 45, 'price_each' => '86.90', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S32_4289', 'quantity_ordered' => 26, 'price_each' => '68.10', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S50_1341', 'quantity_ordered' => 37, 'price_each' => '39.71', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S700_1691', 'quantity_ordered' => 23, 'price_each' => '88.60', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S700_2466', 'quantity_ordered' => 22, 'price_each' => '84.76', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S700_2834', 'quantity_ordered' => 41, 'price_each' => '98.48', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S700_3167', 'quantity_ordered' => 39, 'price_each' => '65.60', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10416, 'product_code' => 'S700_4002', 'quantity_ordered' => 43, 'price_each' => '63.67', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S10_1678', 'quantity_ordered' => 66, 'price_each' => '79.43', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S10_2016', 'quantity_ordered' => 45, 'price_each' => '116.56', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S10_4698', 'quantity_ordered' => 56, 'price_each' => '162.67', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S12_2823', 'quantity_ordered' => 21, 'price_each' => '144.60', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S18_2625', 'quantity_ordered' => 36, 'price_each' => '58.75', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10417, 'product_code' => 'S24_1578', 'quantity_ordered' => 35, 'price_each' => '109.32', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S18_3278', 'quantity_ordered' => 16, 'price_each' => '70.76', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S18_3482', 'quantity_ordered' => 27, 'price_each' => '139.64', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S18_3782', 'quantity_ordered' => 33, 'price_each' => '56.57', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S18_4721', 'quantity_ordered' => 28, 'price_each' => '120.53', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S24_2360', 'quantity_ordered' => 52, 'price_each' => '64.41', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S24_4620', 'quantity_ordered' => 10, 'price_each' => '66.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S32_2206', 'quantity_ordered' => 43, 'price_each' => '36.61', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S32_4485', 'quantity_ordered' => 50, 'price_each' => '100.01', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10418, 'product_code' => 'S50_4713', 'quantity_ordered' => 40, 'price_each' => '72.41', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S12_1099', 'quantity_ordered' => 12, 'price_each' => '182.90', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S12_3380', 'quantity_ordered' => 10, 'price_each' => '111.57', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S12_3990', 'quantity_ordered' => 34, 'price_each' => '64.64', 'order_line_number' => 14]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S12_4675', 'quantity_ordered' => 32, 'price_each' => '99.04', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_1129', 'quantity_ordered' => 38, 'price_each' => '117.48', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_1589', 'quantity_ordered' => 37, 'price_each' => '100.80', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_1889', 'quantity_ordered' => 39, 'price_each' => '67.76', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_1984', 'quantity_ordered' => 34, 'price_each' => '133.72', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_2870', 'quantity_ordered' => 55, 'price_each' => '116.16', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_3232', 'quantity_ordered' => 35, 'price_each' => '165.95', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S18_3685', 'quantity_ordered' => 43, 'price_each' => '114.44', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S24_2972', 'quantity_ordered' => 15, 'price_each' => '32.10', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S24_3371', 'quantity_ordered' => 55, 'price_each' => '52.66', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10419, 'product_code' => 'S24_3856', 'quantity_ordered' => 70, 'price_each' => '112.34', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S18_1749', 'quantity_ordered' => 37, 'price_each' => '153.00', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S18_2248', 'quantity_ordered' => 36, 'price_each' => '52.06', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S18_2325', 'quantity_ordered' => 45, 'price_each' => '116.96', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S18_4409', 'quantity_ordered' => 66, 'price_each' => '73.62', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S18_4933', 'quantity_ordered' => 36, 'price_each' => '68.42', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_1046', 'quantity_ordered' => 60, 'price_each' => '60.26', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_1628', 'quantity_ordered' => 37, 'price_each' => '48.80', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_1937', 'quantity_ordered' => 45, 'price_each' => '32.19', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_2766', 'quantity_ordered' => 39, 'price_each' => '76.33', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_2887', 'quantity_ordered' => 55, 'price_each' => '115.09', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_3191', 'quantity_ordered' => 35, 'price_each' => '77.05', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_3432', 'quantity_ordered' => 26, 'price_each' => '104.94', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10420, 'product_code' => 'S24_3969', 'quantity_ordered' => 15, 'price_each' => '35.29', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10421, 'product_code' => 'S18_2795', 'quantity_ordered' => 35, 'price_each' => '167.06', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10421, 'product_code' => 'S24_2022', 'quantity_ordered' => 40, 'price_each' => '44.80', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10422, 'product_code' => 'S18_1342', 'quantity_ordered' => 51, 'price_each' => '91.44', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10422, 'product_code' => 'S18_1367', 'quantity_ordered' => 25, 'price_each' => '47.44', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10423, 'product_code' => 'S18_2949', 'quantity_ordered' => 10, 'price_each' => '89.15', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10423, 'product_code' => 'S18_2957', 'quantity_ordered' => 31, 'price_each' => '56.21', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10423, 'product_code' => 'S18_3136', 'quantity_ordered' => 21, 'price_each' => '98.44', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10423, 'product_code' => 'S18_3320', 'quantity_ordered' => 21, 'price_each' => '80.36', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10423, 'product_code' => 'S24_4258', 'quantity_ordered' => 28, 'price_each' => '78.89', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S10_1949', 'quantity_ordered' => 50, 'price_each' => '201.44', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S12_1666', 'quantity_ordered' => 49, 'price_each' => '121.64', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S18_1097', 'quantity_ordered' => 54, 'price_each' => '108.50', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S18_4668', 'quantity_ordered' => 26, 'price_each' => '40.25', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S32_3522', 'quantity_ordered' => 44, 'price_each' => '54.94', 'order_line_number' => 2]);
        OrderDetail::create(['order_number' => 10424, 'product_code' => 'S700_2824', 'quantity_ordered' => 46, 'price_each' => '85.98', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S10_4962', 'quantity_ordered' => 38, 'price_each' => '131.49', 'order_line_number' => 12]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S12_4473', 'quantity_ordered' => 33, 'price_each' => '95.99', 'order_line_number' => 4]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S18_2238', 'quantity_ordered' => 28, 'price_each' => '147.36', 'order_line_number' => 3]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S18_2319', 'quantity_ordered' => 38, 'price_each' => '117.82', 'order_line_number' => 7]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S18_2432', 'quantity_ordered' => 19, 'price_each' => '48.62', 'order_line_number' => 10]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S18_3232', 'quantity_ordered' => 28, 'price_each' => '140.55', 'order_line_number' => 8]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S18_4600', 'quantity_ordered' => 38, 'price_each' => '107.76', 'order_line_number' => 13]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S24_1444', 'quantity_ordered' => 55, 'price_each' => '53.75', 'order_line_number' => 1]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S24_2300', 'quantity_ordered' => 49, 'price_each' => '127.79', 'order_line_number' => 9]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S24_2840', 'quantity_ordered' => 31, 'price_each' => '31.82', 'order_line_number' => 5]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S32_1268', 'quantity_ordered' => 41, 'price_each' => '83.79', 'order_line_number' => 11]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S32_2509', 'quantity_ordered' => 11, 'price_each' => '50.32', 'order_line_number' => 6]);
        OrderDetail::create(['order_number' => 10425, 'product_code' => 'S50_1392', 'quantity_ordered' => 18, 'price_each' => '94.92', 'order_line_number' => 2]);
    }
}
