<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'order_number' => 10100,
            'order_date' => '2003-01-06',
            'required_date' => '2003-01-13',
            'shipped_date' => '2003-01-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 363
        ]);

        Order::create([
            'order_number' => 10101,
            'order_date' => '2003-01-09',
            'required_date' => '2003-01-18',
            'shipped_date' => '2003-01-11',
            'status' => 'Shipped',
            'comments' => 'Check on availability.',
            'customer_number' => 128
        ]);

        Order::create([
            'order_number' => 10102,
            'order_date' => '2003-01-10',
            'required_date' => '2003-01-18',
            'shipped_date' => '2003-01-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 181
        ]);

        Order::create([
            'order_number' => 10103,
            'order_date' => '2003-01-29',
            'required_date' => '2003-02-07',
            'shipped_date' => '2003-02-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 121
        ]);

        Order::create([
            'order_number' => 10104,
            'order_date' => '2003-01-31',
            'required_date' => '2003-02-09',
            'shipped_date' => '2003-02-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10105,
            'order_date' => '2003-02-11',
            'required_date' => '2003-02-21',
            'shipped_date' => '2003-02-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 145
        ]);

        Order::create([
            'order_number' => 10106,
            'order_date' => '2003-02-17',
            'required_date' => '2003-02-24',
            'shipped_date' => '2003-02-21',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 278
        ]);

        Order::create([
            'order_number' => 10107,
            'order_date' => '2003-02-24',
            'required_date' => '2003-03-03',
            'shipped_date' => '2003-02-26',
            'status' => 'Shipped',
            'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
            'customer_number' => 131
        ]);

        Order::create([
            'order_number' => 10108,
            'order_date' => '2003-03-03',
            'required_date' => '2003-03-12',
            'shipped_date' => '2003-03-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 385
        ]);

        Order::create([
            'order_number' => 10109,
            'order_date' => '2003-03-10',
            'required_date' => '2003-03-19',
            'shipped_date' => '2003-03-11',
            'status' => 'Shipped',
            'comments' => 'Customer requested that FedEx Ground is used for this shipping',
            'customer_number' => 486
        ]);

        Order::create([
            'order_number' => 10110,
            'order_date' => '2003-03-18',
            'required_date' => '2003-03-24',
            'shipped_date' => '2003-03-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 187
        ]);

        Order::create([
            'order_number' => 10111,
            'order_date' => '2003-03-25',
            'required_date' => '2003-03-31',
            'shipped_date' => '2003-03-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 129
        ]);

        Order::create([
            'order_number' => 10112,
            'order_date' => '2003-03-24',
            'required_date' => '2003-04-03',
            'shipped_date' => '2003-03-29',
            'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
            'customer_number' => 144
        ]);

        Order::create([
            'order_number' => 10113,
            'order_date' => '2003-03-26',
            'required_date' => '2003-04-02',
            'shipped_date' => '2003-03-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10114,
            'order_date' => '2003-04-01',
            'required_date' => '2003-04-07',
            'shipped_date' => '2003-04-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 172
        ]);

        Order::create([
            'order_number' => 10115,
            'order_date' => '2003-04-04',
            'required_date' => '2003-04-12',
            'shipped_date' => '2003-04-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 424
        ]);

        Order::create([
            'order_number' => 10116,
            'order_date' => '2003-04-11',
            'required_date' => '2003-04-19',
            'shipped_date' => '2003-04-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 381
        ]);

        Order::create([
            'order_number' => 10117,
            'order_date' => '2003-04-16',
            'required_date' => '2003-04-24',
            'shipped_date' => '2003-04-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 148
        ]);

        Order::create([
            'order_number' => 10118,
            'order_date' => '2003-04-21',
            'required_date' => '2003-04-29',
            'shipped_date' => '2003-04-26',
            'status' => 'Shipped',
            'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
            'customer_number' => 216
        ]);

        Order::create([
            'order_number' => 10119,
            'order_date' => '2003-04-28',
            'required_date' => '2003-05-05',
            'shipped_date' => '2003-05-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 382
        ]);

        Order::create([
            'order_number' => 10120,
            'order_date' => '2003-04-29',
            'required_date' => '2003-05-08',
            'shipped_date' => '2003-05-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 114
        ]);

        Order::create([
            'order_number' => 10121,
            'order_date' => '2003-05-07',
            'required_date' => '2003-05-13',
            'shipped_date' => '2003-05-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 353
        ]);

        Order::create([
            'order_number' => 10122,
            'order_date' => '2003-05-08',
            'required_date' => '2003-05-16',
            'shipped_date' => '2003-05-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 350
        ]);

        Order::create([
            'order_number' => 10123,
            'order_date' => '2003-05-20',
            'required_date' => '2003-05-29',
            'shipped_date' => '2003-05-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 103
        ]);

        Order::create([
            'order_number' => 10124,
            'order_date' => '2003-05-21',
            'required_date' => '2003-05-29',
            'shipped_date' => '2003-05-25',
            'status' => 'Shipped',
            'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
            'customer_number' => 112
        ]);

        Order::create([
            'order_number' => 10125,
            'order_date' => '2003-05-21',
            'required_date' => '2003-05-27',
            'shipped_date' => '2003-05-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 114
        ]);

        Order::create([
            'order_number' => 10126,
            'order_date' => '2003-05-28',
            'required_date' => '2003-06-07',
            'shipped_date' => '2003-06-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 458
        ]);

        Order::create([
            'order_number' => 10127,
            'order_date' => '2003-06-03',
            'required_date' => '2003-06-09',
            'shipped_date' => '2003-06-06',
            'status' => 'Shipped',
            'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
            'customer_number' => 151
        ]);

        Order::create([
            'order_number' => 10128,
            'order_date' => '2003-06-06',
            'required_date' => '2003-06-12',
            'shipped_date' => '2003-06-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10129,
            'order_date' => '2003-06-12',
            'required_date' => '2003-06-18',
            'shipped_date' => '2003-06-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 324
        ]);

        Order::create([
            'order_number' => 10130,
            'order_date' => '2003-06-16',
            'required_date' => '2003-06-24',
            'shipped_date' => '2003-06-21',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 198
        ]);

        Order::create([
            'order_number' => 10131,
            'order_date' => '2003-06-16',
            'required_date' => '2003-06-25',
            'shipped_date' => '2003-06-21',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 447
        ]);

        Order::create([
            'order_number' => 10132,
            'order_date' => '2003-06-25',
            'required_date' => '2003-07-01',
            'shipped_date' => '2003-06-28',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 323
        ]);

        Order::create([
            'order_number' => 10133,
            'order_date' => '2003-06-27',
            'required_date' => '2003-07-04',
            'shipped_date' => '2003-07-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10134,
            'order_date' => '2003-07-01',
            'required_date' => '2003-07-10',
            'shipped_date' => '2003-07-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 250
        ]);

        Order::create([
            'order_number' => 10135,
            'order_date' => '2003-07-02',
            'required_date' => '2003-07-12',
            'shipped_date' => '2003-07-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10136,
            'order_date' => '2003-07-04',
            'required_date' => '2003-07-14',
            'shipped_date' => '2003-07-06',
            'status' => 'Shipped',
            'comments' => 'Customer is interested in buying more Ferrari models',
            'customer_number' => 242
        ]);

        Order::create([
            'order_number' => 10137,
            'order_date' => '2003-07-10',
            'required_date' => '2003-07-20',
            'shipped_date' => '2003-07-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 353
        ]);

        Order::create([
            'order_number' => 10138,
            'order_date' => '2003-07-07',
            'required_date' => '2003-07-16',
            'shipped_date' => '2003-07-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 496
        ]);

        Order::create([
            'order_number' => 10139,
            'order_date' => '2003-07-16',
            'required_date' => '2003-07-23',
            'shipped_date' => '2003-07-21',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 282
        ]);

        Order::create([
            'order_number' => 10140,
            'order_date' => '2003-07-24',
            'required_date' => '2003-08-02',
            'shipped_date' => '2003-07-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 161
        ]);

        Order::create([
            'order_number' => 10141,
            'order_date' => '2003-08-01',
            'required_date' => '2003-08-09',
            'shipped_date' => '2003-08-04',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 334
        ]);

        Order::create([
            'order_number' => 10142,
            'order_date' => '2003-08-08',
            'required_date' => '2003-08-16',
            'shipped_date' => '2003-08-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10143,
            'order_date' => '2003-08-10',
            'required_date' => '2003-08-18',
            'shipped_date' => '2003-08-12',
            'status' => 'Shipped',
            'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
            'customer_number' => 320
        ]);

        Order::create([
            'order_number' => 10144,
            'order_date' => '2003-08-13',
            'required_date' => '2003-08-21',
            'shipped_date' => '2003-08-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 381
        ]);

        Order::create([
            'order_number' => 10145,
            'order_date' => '2003-08-25',
            'required_date' => '2003-09-02',
            'shipped_date' => '2003-08-31',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 205
        ]);

        Order::create([
            'order_number' => 10146,
            'order_date' => '2003-09-03',
            'required_date' => '2003-09-13',
            'shipped_date' => '2003-09-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 447
        ]);

        Order::create([
            'order_number' => 10147,
            'order_date' => '2003-09-05',
            'required_date' => '2003-09-12',
            'shipped_date' => '2003-09-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 379
        ]);

        Order::create([
            'order_number' => 10148,
            'order_date' => '2003-09-11',
            'required_date' => '2003-09-21',
            'shipped_date' => '2003-09-15',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 276
        ]);

        Order::create([
            'order_number' => 10149,
            'order_date' => '2003-09-12',
            'required_date' => '2003-09-18',
            'shipped_date' => '2003-09-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 487
        ]);

        Order::create([
            'order_number' => 10150,
            'order_date' => '2003-09-19',
            'required_date' => '2003-09-27',
            'shipped_date' => '2003-09-21',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 148
        ]);

        Order::create([
            'order_number' => 10151,
            'order_date' => '2003-09-21',
            'required_date' => '2003-09-30',
            'shipped_date' => '2003-09-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 311
        ]);

        Order::create([
            'order_number' => 10152,
            'order_date' => '2003-09-25',
            'required_date' => '2003-10-03',
            'shipped_date' => '2003-10-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 333
        ]);

        Order::create([
            'order_number' => 10153,
            'order_date' => '2003-09-28',
            'required_date' => '2003-10-05',
            'shipped_date' => '2003-10-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10154,
            'order_date' => '2003-10-02',
            'required_date' => '2003-10-12',
            'shipped_date' => '2003-10-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 219
        ]);

        Order::create([
            'order_number' => 10155,
            'order_date' => '2003-10-06',
            'required_date' => '2003-10-13',
            'shipped_date' => '2003-10-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 186
        ]);

        Order::create([
            'order_number' => 10156,
            'order_date' => '2003-10-08',
            'required_date' => '2003-10-17',
            'shipped_date' => '2003-10-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10157,
            'order_date' => '2003-10-09',
            'required_date' => '2003-10-15',
            'shipped_date' => '2003-10-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 473
        ]);

        Order::create([
            'order_number' => 10158,
            'order_date' => '2003-10-10',
            'required_date' => '2003-10-18',
            'shipped_date' => '2003-10-15',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 121
        ]);

        Order::create([
            'order_number' => 10159,
            'order_date' => '2003-10-10',
            'required_date' => '2003-10-19',
            'shipped_date' => '2003-10-16',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 321
        ]);

        Order::create([
            'order_number' => 10160,
            'order_date' => '2003-10-11',
            'required_date' => '2003-10-17',
            'shipped_date' => '2003-10-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 347
        ]);

        Order::create([
            'order_number' => 10161,
            'order_date' => '2003-10-17',
            'required_date' => '2003-10-25',
            'shipped_date' => '2003-10-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 227
        ]);

        Order::create([
            'order_number' => 10162,
            'order_date' => '2003-10-18',
            'required_date' => '2003-10-26',
            'shipped_date' => '2003-10-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 321
        ]);

        Order::create([
            'order_number' => 10163,
            'order_date' => '2003-10-20',
            'required_date' => '2003-10-27',
            'shipped_date' => '2003-10-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 424
        ]);

        Order::create([
            'order_number' => 10164,
            'order_date' => '2003-10-21',
            'required_date' => '2003-10-30',
            'shipped_date' => '2003-10-23',
            'status' => 'Resolved',
            'comments' => 'This order was disputed, but resolved on 11/1/2003; Customer doesn\'t like the colors and precision of the models.',
            'customer_number' => 452
        ]);

        Order::create([
            'order_number' => 10165,
            'order_date' => '2003-10-22',
            'required_date' => '2003-10-31',
            'shipped_date' => '2003-12-26',
            'status' => 'Shipped',
            'comments' => 'This order was on hold because customers\'s credit limit had been exceeded. Order will ship when payment is received',
            'customer_number' => 148
        ]);

        Order::create([
            'order_number' => 10166,
            'order_date' => '2003-10-21',
            'required_date' => '2003-10-30',
            'shipped_date' => '2003-10-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 462
        ]);

        Order::create([
            'order_number' => 10167,
            'order_date' => '2003-10-23',
            'required_date' => '2003-10-30',
            'shipped_date' => NULL,
            'status' => 'Cancelled',
            'comments' => 'Customer called to cancel. The warehouse was notified in time and the order didn\'t ship. They have a new VP of Sales and are shifting their sales model. Our VP of Sales should contact them.',
            'customer_number' => 448
        ]);

        Order::create([
            'order_number' => 10168,
            'order_date' => '2003-10-28',
            'required_date' => '2003-11-03',
            'shipped_date' => '2003-11-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 161
        ]);

        Order::create([
            'order_number' => 10169,
            'order_date' => '2003-11-04',
            'required_date' => '2003-11-14',
            'shipped_date' => '2003-11-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 276
        ]);

        Order::create([
            'order_number' => 10170,
            'order_date' => '2003-11-04',
            'required_date' => '2003-11-12',
            'shipped_date' => '2003-11-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 452
        ]);

        Order::create([
            'order_number' => 10171,
            'order_date' => '2003-11-05',
            'required_date' => '2003-11-13',
            'shipped_date' => '2003-11-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 233
        ]);

        Order::create([
            'order_number' => 10172,
            'order_date' => '2003-11-05',
            'required_date' => '2003-11-14',
            'shipped_date' => '2003-11-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 175
        ]);

        Order::create([
            'order_number' => 10173,
            'order_date' => '2003-11-05',
            'required_date' => '2003-11-15',
            'shipped_date' => '2003-11-09',
            'status' => 'Shipped',
            'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
            'customer_number' => 278
        ]);

        Order::create([
            'order_number' => 10174,
            'order_date' => '2003-11-06',
            'required_date' => '2003-11-15',
            'shipped_date' => '2003-11-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 333
        ]);

        Order::create([
            'order_number' => 10175,
            'order_date' => '2003-11-06',
            'required_date' => '2003-11-14',
            'shipped_date' => '2003-11-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 324
        ]);

        Order::create([
            'order_number' => 10176,
            'order_date' => '2003-11-06',
            'required_date' => '2003-11-15',
            'shipped_date' => '2003-11-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 386
        ]);

        Order::create([
            'order_number' => 10177,
            'order_date' => '2003-11-07',
            'required_date' => '2003-11-17',
            'shipped_date' => '2003-11-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 344
        ]);

        Order::create([
            'order_number' => 10178,
            'order_date' => '2003-11-08',
            'required_date' => '2003-11-16',
            'shipped_date' => '2003-11-10',
            'status' => 'Shipped',
            'comments' => 'Custom shipping instructions sent to warehouse',
            'customer_number' => 242
        ]);

        Order::create([
            'order_number' => 10179,
            'order_date' => '2003-11-11',
            'required_date' => '2003-11-17',
            'shipped_date' => '2003-11-13',
            'status' => 'Cancelled',
            'comments' => 'Customer cancelled due to urgent budgeting issues. Must be cautious when dealing with them in the future. Since order shipped already we must discuss who would cover the shipping charges.',
            'customer_number' => 496
        ]);

        Order::create([
            'order_number' => 10180,
            'order_date' => '2003-11-11',
            'required_date' => '2003-11-19',
            'shipped_date' => '2003-11-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 171
        ]);

        Order::create([
            'order_number' => 10181,
            'order_date' => '2003-11-12',
            'required_date' => '2003-11-19',
            'shipped_date' => '2003-11-15',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 167
        ]);

        Order::create([
            'order_number' => 10182,
            'order_date' => '2003-11-12',
            'required_date' => '2003-11-21',
            'shipped_date' => '2003-11-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10183,
            'order_date' => '2003-11-13',
            'required_date' => '2003-11-22',
            'shipped_date' => '2003-11-15',
            'status' => 'Shipped',
            'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
            'customer_number' => 339
        ]);

        Order::create([
            'order_number' => 10184,
            'order_date' => '2003-11-14',
            'required_date' => '2003-11-22',
            'shipped_date' => '2003-11-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 484
        ]);

        Order::create([
            'order_number' => 10185,
            'order_date' => '2003-11-14',
            'required_date' => '2003-11-21',
            'shipped_date' => '2003-11-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 320
        ]);

        Order::create([
            'order_number' => 10186,
            'order_date' => '2003-11-14',
            'required_date' => '2003-11-20',
            'shipped_date' => '2003-11-18',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with the VP of Sales',
            'customer_number' => 489
        ]);

        Order::create([
            'order_number' => 10187,
            'order_date' => '2003-11-15',
            'required_date' => '2003-11-24',
            'shipped_date' => '2003-11-16',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 211
        ]);

        Order::create([
            'order_number' => 10188,
            'order_date' => '2003-11-18',
            'required_date' => '2003-11-26',
            'shipped_date' => '2003-11-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 167
        ]);

        Order::create([
            'order_number' => 10189,
            'order_date' => '2003-11-18',
            'required_date' => '2003-11-25',
            'shipped_date' => '2003-11-24',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 205
        ]);

        Order::create([
            'order_number' => 10190,
            'order_date' => '2003-11-19',
            'required_date' => '2003-11-29',
            'shipped_date' => '2003-11-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10191,
            'order_date' => '2003-11-20',
            'required_date' => '2003-11-30',
            'shipped_date' => '2003-11-24',
            'status' => 'Shipped',
            'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
            'customer_number' => 259
        ]);

        Order::create([
            'order_number' => 10192,
            'order_date' => '2003-11-20',
            'required_date' => '2003-11-29',
            'shipped_date' => '2003-11-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 363
        ]);

        Order::create([
            'order_number' => 10193,
            'order_date' => '2003-11-21',
            'required_date' => '2003-11-28',
            'shipped_date' => '2003-11-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 471
        ]);

        Order::create([
            'order_number' => 10194,
            'order_date' => '2003-11-25',
            'required_date' => '2003-12-02',
            'shipped_date' => '2003-11-26',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 146
        ]);

        Order::create([
            'order_number' => 10195,
            'order_date' => '2003-11-25',
            'required_date' => '2003-12-01',
            'shipped_date' => '2003-11-28',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 319
        ]);

        Order::create([
            'order_number' => 10196,
            'order_date' => '2003-11-26',
            'required_date' => '2003-12-03',
            'shipped_date' => '2003-12-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 455
        ]);

        Order::create([
            'order_number' => 10197,
            'order_date' => '2003-11-26',
            'required_date' => '2003-12-02',
            'shipped_date' => '2003-12-01',
            'status' => 'Shipped',
            'comments' => 'Customer inquired about remote controlled models and gold models.',
            'customer_number' => 216
        ]);

        Order::create([
            'order_number' => 10198,
            'order_date' => '2003-11-27',
            'required_date' => '2003-12-06',
            'shipped_date' => '2003-12-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 385
        ]);

        Order::create([
            'order_number' => 10199,
            'order_date' => '2003-12-01',
            'required_date' => '2003-12-10',
            'shipped_date' => '2003-12-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 475
        ]);

        Order::create([
            'order_number' => 10200,
            'order_date' => '2003-12-01',
            'required_date' => '2003-12-09',
            'shipped_date' => '2003-12-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 211
        ]);

        Order::create([
            'order_number' => 10201,
            'order_date' => '2003-12-01',
            'required_date' => '2003-12-11',
            'shipped_date' => '2003-12-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 129
        ]);

        Order::create([
            'order_number' => 10202,
            'order_date' => '2003-12-02',
            'required_date' => '2003-12-09',
            'shipped_date' => '2003-12-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 357
        ]);

        Order::create([
            'order_number' => 10203,
            'order_date' => '2003-12-02',
            'required_date' => '2003-12-11',
            'shipped_date' => '2003-12-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10204,
            'order_date' => '2003-12-02',
            'required_date' => '2003-12-10',
            'shipped_date' => '2003-12-04',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 151
        ]);

        Order::create([
            'order_number' => 10205,
            'order_date' => '2003-12-03',
            'required_date' => '2003-12-09',
            'shipped_date' => '2003-12-07',
            'status' => 'Shipped',
            'comments' => ' I need all the information I can get on our competitors.',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10206,
            'order_date' => '2003-12-05',
            'required_date' => '2003-12-13',
            'shipped_date' => '2003-12-08',
            'status' => 'Shipped',
            'comments' => 'Can we renegotiate this one?',
            'customer_number' => 202
        ]);

        Order::create([
            'order_number' => 10207,
            'order_date' => '2003-12-09',
            'required_date' => '2003-12-17',
            'shipped_date' => '2003-12-11',
            'status' => 'Shipped',
            'comments' => 'Check on availability.',
            'customer_number' => 495
        ]);

        Order::create([
            'order_number' => 10208,
            'order_date' => '2004-01-02',
            'required_date' => '2004-01-11',
            'shipped_date' => '2004-01-04',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 146
        ]);

        Order::create([
            'order_number' => 10209,
            'order_date' => '2004-01-09',
            'required_date' => '2004-01-15',
            'shipped_date' => '2004-01-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 347
        ]);

        Order::create([
            'order_number' => 10210,
            'order_date' => '2004-01-12',
            'required_date' => '2004-01-22',
            'shipped_date' => '2004-01-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 177
        ]);

        Order::create([
            'order_number' => 10211,
            'order_date' => '2004-01-15',
            'required_date' => '2004-01-25',
            'shipped_date' => '2004-01-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 406
        ]);

        Order::create([
            'order_number' => 10212,
            'order_date' => '2004-01-16',
            'required_date' => '2004-01-24',
            'shipped_date' => '2004-01-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10213,
            'order_date' => '2004-01-22',
            'required_date' => '2004-01-28',
            'shipped_date' => '2004-01-27',
            'status' => 'Shipped',
            'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
            'customer_number' => 489
        ]);

        Order::create([
            'order_number' => 10214,
            'order_date' => '2004-01-26',
            'required_date' => '2004-02-04',
            'shipped_date' => '2004-01-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 458
        ]);

        Order::create([
            'order_number' => 10215,
            'order_date' => '2004-01-29',
            'required_date' => '2004-02-08',
            'shipped_date' => '2004-02-01',
            'status' => 'Shipped',
            'comments' => 'Customer requested that FedEx Ground is used for this shipping',
            'customer_number' => 475
        ]);

        Order::create([
            'order_number' => 10216,
            'order_date' => '2004-02-02',
            'required_date' => '2004-02-10',
            'shipped_date' => '2004-02-04',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 256
        ]);

        Order::create([
            'order_number' => 10217,
            'order_date' => '2004-02-04',
            'required_date' => '2004-02-14',
            'shipped_date' => '2004-02-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 166
        ]);

        Order::create([
            'order_number' => 10218,
            'order_date' => '2004-02-09',
            'required_date' => '2004-02-16',
            'shipped_date' => '2004-02-11',
            'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
            'customer_number' => 473
        ]);

        Order::create([
            'order_number' => 10219,
            'order_date' => '2004-02-10',
            'required_date' => '2004-02-17',
            'shipped_date' => '2004-02-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 487
        ]);

        Order::create([
            'order_number' => 10220,
            'order_date' => '2004-02-12',
            'required_date' => '2004-02-19',
            'shipped_date' => '2004-02-16',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 189
        ]);

        Order::create([
            'order_number' => 10221,
            'order_date' => '2004-02-18',
            'required_date' => '2004-02-26',
            'shipped_date' => '2004-02-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 314
        ]);

        Order::create([
            'order_number' => 10222,
            'order_date' => '2004-02-19',
            'required_date' => '2004-02-27',
            'shipped_date' => '2004-02-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 239
        ]);

        Order::create([
            'order_number' => 10223,
            'order_date' => '2004-02-20',
            'required_date' => '2004-02-29',
            'shipped_date' => '2004-02-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 114
        ]);

        Order::create([
            'order_number' => 10224,
            'order_date' => '2004-02-21',
            'required_date' => '2004-03-02',
            'shipped_date' => '2004-02-26',
            'status' => 'Shipped',
            'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
            'customer_number' => 171
        ]);

        Order::create([
            'order_number' => 10225,
            'order_date' => '2004-02-22',
            'required_date' => '2004-03-01',
            'shipped_date' => '2004-02-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 298
        ]);

        Order::create([
            'order_number' => 10226,
            'order_date' => '2004-02-26',
            'required_date' => '2004-03-06',
            'shipped_date' => '2004-03-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 239
        ]);

        Order::create([
            'order_number' => 10227,
            'order_date' => '2004-03-02',
            'required_date' => '2004-03-12',
            'shipped_date' => '2004-03-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 146
        ]);

        Order::create([
            'order_number' => 10228,
            'order_date' => '2004-03-10',
            'required_date' => '2004-03-18',
            'shipped_date' => '2004-03-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 173
        ]);

        Order::create([
            'order_number' => 10229,
            'order_date' => '2004-03-11',
            'required_date' => '2004-03-20',
            'shipped_date' => '2004-03-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10230,
            'order_date' => '2004-03-15',
            'required_date' => '2004-03-24',
            'shipped_date' => '2004-03-20',
            'status' => 'Shipped',
            'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
            'customer_number' => 128
        ]);

        Order::create([
            'order_number' => 10231,
            'order_date' => '2004-03-19',
            'required_date' => '2004-03-26',
            'shipped_date' => '2004-03-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 344
        ]);

        Order::create([
            'order_number' => 10232,
            'order_date' => '2004-03-20',
            'required_date' => '2004-03-30',
            'shipped_date' => '2004-03-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 240
        ]);

        Order::create([
            'order_number' => 10233,
            'order_date' => '2004-03-29',
            'required_date' => '2004-04-04',
            'shipped_date' => '2004-04-02',
            'status' => 'Shipped',
            'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
            'customer_number' => 328
        ]);

        Order::create([
            'order_number' => 10234,
            'order_date' => '2004-03-30',
            'required_date' => '2004-04-05',
            'shipped_date' => '2004-04-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 412
        ]);

        Order::create([
            'order_number' => 10235,
            'order_date' => '2004-04-02',
            'required_date' => '2004-04-12',
            'shipped_date' => '2004-04-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 260
        ]);

        Order::create([
            'order_number' => 10236,
            'order_date' => '2004-04-03',
            'required_date' => '2004-04-11',
            'shipped_date' => '2004-04-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 486
        ]);

        Order::create([
            'order_number' => 10237,
            'order_date' => '2004-04-05',
            'required_date' => '2004-04-12',
            'shipped_date' => '2004-04-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 181
        ]);

        Order::create([
            'order_number' => 10238,
            'order_date' => '2004-04-09',
            'required_date' => '2004-04-16',
            'shipped_date' => '2004-04-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 145
        ]);

        Order::create([
            'order_number' => 10239,
            'order_date' => '2004-04-12',
            'required_date' => '2004-04-21',
            'shipped_date' => '2004-04-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 311
        ]);

        Order::create([
            'order_number' => 10240,
            'order_date' => '2004-04-13',
            'required_date' => '2004-04-20',
            'shipped_date' => '2004-04-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 177
        ]);

        Order::create([
            'order_number' => 10241,
            'order_date' => '2004-04-13',
            'required_date' => '2004-04-20',
            'shipped_date' => '2004-04-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 209
        ]);

        Order::create([
            'order_number' => 10242,
            'order_date' => '2004-04-20',
            'required_date' => '2004-04-28',
            'shipped_date' => '2004-04-25',
            'status' => 'Shipped',
            'comments' => 'Customer is interested in buying more Ferrari models',
            'customer_number' => 456
        ]);

        Order::create([
            'order_number' => 10243,
            'order_date' => '2004-04-26',
            'required_date' => '2004-05-03',
            'shipped_date' => '2004-04-28',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 495
        ]);

        Order::create([
            'order_number' => 10244,
            'order_date' => '2004-04-29',
            'required_date' => '2004-05-09',
            'shipped_date' => '2004-05-04',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10245,
            'order_date' => '2004-05-04',
            'required_date' => '2004-05-12',
            'shipped_date' => '2004-05-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 455
        ]);

        Order::create([
            'order_number' => 10246,
            'order_date' => '2004-05-05',
            'required_date' => '2004-05-13',
            'shipped_date' => '2004-05-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10247,
            'order_date' => '2004-05-05',
            'required_date' => '2004-05-11',
            'shipped_date' => '2004-05-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 334
        ]);

        Order::create([
            'order_number' => 10248,
            'order_date' => '2004-05-07',
            'required_date' => '2004-05-14',
            'shipped_date' => NULL,
            'status' => 'Cancelled',
            'comments' => 'Order was mistakenly placed. The warehouse noticed the lack of documentation.',
            'customer_number' => 131
        ]);

        Order::create([
            'order_number' => 10249,
            'order_date' => '2004-05-08',
            'required_date' => '2004-05-17',
            'shipped_date' => '2004-05-11',
            'status' => 'Shipped',
            'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
            'customer_number' => 173
        ]);

        Order::create([
            'order_number' => 10250,
            'order_date' => '2004-05-11',
            'required_date' => '2004-05-19',
            'shipped_date' => '2004-05-15',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 450
        ]);

        Order::create([
            'order_number' => 10251,
            'order_date' => '2004-05-18',
            'required_date' => '2004-05-24',
            'shipped_date' => '2004-05-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 328
        ]);

        Order::create([
            'order_number' => 10252,
            'order_date' => '2004-05-26',
            'required_date' => '2004-06-04',
            'shipped_date' => '2004-05-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 406
        ]);

        Order::create([
            'order_number' => 10253,
            'order_date' => '2004-06-01',
            'required_date' => '2004-06-09',
            'shipped_date' => '2004-06-02',
            'status' => 'Cancelled',
            'comments' => 'Customer disputed the order and we agreed to cancel it. We must be more cautions with this customer going forward, since they are very hard to please. We must cover the shipping fees.',
            'customer_number' => 201
        ]);

        Order::create([
            'order_number' => 10254,
            'order_date' => '2004-06-03',
            'required_date' => '2004-06-13',
            'shipped_date' => '2004-06-04',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 323
        ]);

        Order::create([
            'order_number' => 10255,
            'order_date' => '2004-06-04',
            'required_date' => '2004-06-12',
            'shipped_date' => '2004-06-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 209
        ]);

        Order::create([
            'order_number' => 10256,
            'order_date' => '2004-06-08',
            'required_date' => '2004-06-16',
            'shipped_date' => '2004-06-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 145
        ]);

        Order::create([
            'order_number' => 10257,
            'order_date' => '2004-06-14',
            'required_date' => '2004-06-24',
            'shipped_date' => '2004-06-15',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 450
        ]);

        Order::create([
            'order_number' => 10258,
            'order_date' => '2004-06-15',
            'required_date' => '2004-06-25',
            'shipped_date' => '2004-06-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 398
        ]);

        Order::create([
            'order_number' => 10259,
            'order_date' => '2004-06-15',
            'required_date' => '2004-06-22',
            'shipped_date' => '2004-06-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 166
        ]);

        Order::create([
            'order_number' => 10260,
            'order_date' => '2004-06-16',
            'required_date' => '2004-06-22',
            'shipped_date' => NULL,
            'status' => 'Cancelled',
            'comments' => 'Customer heard complaints from their customers and called to cancel this order. Will notify the Sales Manager.',
            'customer_number' => 357
        ]);

        Order::create([
            'order_number' => 10261,
            'order_date' => '2004-06-17',
            'required_date' => '2004-06-25',
            'shipped_date' => '2004-06-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 233
        ]);

        Order::create([
            'order_number' => 10262,
            'order_date' => '2004-06-24',
            'required_date' => '2004-07-01',
            'shipped_date' => NULL,
            'status' => 'Cancelled',
            'comments' => 'This customer found a better offer from one of our competitors. Will call back to renegotiate.',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10263,
            'order_date' => '2004-06-28',
            'required_date' => '2004-07-04',
            'shipped_date' => '2004-07-02',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 175
        ]);

        Order::create([
            'order_number' => 10264,
            'order_date' => '2004-06-30',
            'required_date' => '2004-07-06',
            'shipped_date' => '2004-07-01',
            'status' => 'Shipped',
            'comments' => 'Customer will send a truck to our local warehouse on 7/1/2004',
            'customer_number' => 362
        ]);

        Order::create([
            'order_number' => 10265,
            'order_date' => '2004-07-02',
            'required_date' => '2004-07-09',
            'shipped_date' => '2004-07-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 471
        ]);

        Order::create([
            'order_number' => 10266,
            'order_date' => '2004-07-06',
            'required_date' => '2004-07-14',
            'shipped_date' => '2004-07-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 386
        ]);

        Order::create([
            'order_number' => 10267,
            'order_date' => '2004-07-07',
            'required_date' => '2004-07-17',
            'shipped_date' => '2004-07-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 151
        ]);

        Order::create([
            'order_number' => 10268,
            'order_date' => '2004-07-12',
            'required_date' => '2004-07-18',
            'shipped_date' => '2004-07-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 412
        ]);

        Order::create([
            'order_number' => 10269,
            'order_date' => '2004-07-16',
            'required_date' => '2004-07-22',
            'shipped_date' => '2004-07-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 382
        ]);

        Order::create([
            'order_number' => 10270,
            'order_date' => '2004-07-19',
            'required_date' => '2004-07-27',
            'shipped_date' => '2004-07-24',
            'status' => 'Shipped',
            'comments' => 'Can we renegotiate this one?',
            'customer_number' => 282
        ]);

        Order::create([
            'order_number' => 10271,
            'order_date' => '2004-07-20',
            'required_date' => '2004-07-29',
            'shipped_date' => '2004-07-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10272,
            'order_date' => '2004-07-20',
            'required_date' => '2004-07-26',
            'shipped_date' => '2004-07-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 157
        ]);

        Order::create([
            'order_number' => 10273,
            'order_date' => '2004-07-21',
            'required_date' => '2004-07-28',
            'shipped_date' => '2004-07-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 314
        ]);

        Order::create([
            'order_number' => 10274,
            'order_date' => '2004-07-21',
            'required_date' => '2004-07-29',
            'shipped_date' => '2004-07-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 379
        ]);

        Order::create([
            'order_number' => 10275,
            'order_date' => '2004-07-23',
            'required_date' => '2004-08-02',
            'shipped_date' => '2004-07-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 119
        ]);

        Order::create([
            'order_number' => 10276,
            'order_date' => '2004-08-02',
            'required_date' => '2004-08-11',
            'shipped_date' => '2004-08-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 204
        ]);

        Order::create([
            'order_number' => 10277,
            'order_date' => '2004-08-04',
            'required_date' => '2004-08-12',
            'shipped_date' => '2004-08-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 148
        ]);

        Order::create([
            'order_number' => 10278,
            'order_date' => '2004-08-06',
            'required_date' => '2004-08-16',
            'shipped_date' => '2004-08-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 112
        ]);

        Order::create([
            'order_number' => 10279,
            'order_date' => '2004-08-09',
            'required_date' => '2004-08-19',
            'shipped_date' => '2004-08-15',
            'status' => 'Shipped',
            'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10280,
            'order_date' => '2004-08-17',
            'required_date' => '2004-08-27',
            'shipped_date' => '2004-08-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 249
        ]);

        Order::create([
            'order_number' => 10281,
            'order_date' => '2004-08-19',
            'required_date' => '2004-08-28',
            'shipped_date' => '2004-08-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 157
        ]);

        Order::create([
            'order_number' => 10282,
            'order_date' => '2004-08-20',
            'required_date' => '2004-08-26',
            'shipped_date' => '2004-08-22',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10283,
            'order_date' => '2004-08-20',
            'required_date' => '2004-08-30',
            'shipped_date' => '2004-08-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 260
        ]);

        Order::create([
            'order_number' => 10284,
            'order_date' => '2004-08-21',
            'required_date' => '2004-08-29',
            'shipped_date' => '2004-08-26',
            'status' => 'Shipped',
            'comments' => 'Custom shipping instructions sent to warehouse',
            'customer_number' => 299
        ]);

        Order::create([
            'order_number' => 10285,
            'order_date' => '2004-08-27',
            'required_date' => '2004-09-04',
            'shipped_date' => '2004-08-31',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 286
        ]);

        Order::create([
            'order_number' => 10286,
            'order_date' => '2004-08-28',
            'required_date' => '2004-09-06',
            'shipped_date' => '2004-09-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 172
        ]);

        Order::create([
            'order_number' => 10287,
            'order_date' => '2004-08-30',
            'required_date' => '2004-09-06',
            'shipped_date' => '2004-09-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 298
        ]);

        Order::create([
            'order_number' => 10288,
            'order_date' => '2004-09-01',
            'required_date' => '2004-09-11',
            'shipped_date' => '2004-09-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 166
        ]);

        Order::create([
            'order_number' => 10289,
            'order_date' => '2004-09-03',
            'required_date' => '2004-09-13',
            'shipped_date' => '2004-09-04',
            'status' => 'Shipped',
            'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
            'customer_number' => 167
        ]);

        Order::create([
            'order_number' => 10290,
            'order_date' => '2004-09-07',
            'required_date' => '2004-09-15',
            'shipped_date' => '2004-09-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 198
        ]);

        Order::create([
            'order_number' => 10291,
            'order_date' => '2004-09-08',
            'required_date' => '2004-09-17',
            'shipped_date' => '2004-09-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 448
        ]);

        Order::create([
            'order_number' => 10292,
            'order_date' => '2004-09-08',
            'required_date' => '2004-09-18',
            'shipped_date' => '2004-09-11',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 131
        ]);

        Order::create([
            'order_number' => 10293,
            'order_date' => '2004-09-09',
            'required_date' => '2004-09-18',
            'shipped_date' => '2004-09-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 249
        ]);

        Order::create([
            'order_number' => 10294,
            'order_date' => '2004-09-10',
            'required_date' => '2004-09-17',
            'shipped_date' => '2004-09-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 204
        ]);

        Order::create([
            'order_number' => 10295,
            'order_date' => '2004-09-10',
            'required_date' => '2004-09-17',
            'shipped_date' => '2004-09-14',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 362
        ]);

        Order::create([
            'order_number' => 10296,
            'order_date' => '2004-09-15',
            'required_date' => '2004-09-22',
            'shipped_date' => '2004-09-16',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 415
        ]);

        Order::create([
            'order_number' => 10297,
            'order_date' => '2004-09-16',
            'required_date' => '2004-09-22',
            'shipped_date' => '2004-09-21',
            'status' => 'Shipped',
            'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
            'customer_number' => 189
        ]);

        Order::create([
            'order_number' => 10298,
            'order_date' => '2004-09-27',
            'required_date' => '2004-10-05',
            'shipped_date' => '2004-10-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 103
        ]);

        Order::create([
            'order_number' => 10299,
            'order_date' => '2004-09-30',
            'required_date' => '2004-10-10',
            'shipped_date' => '2004-10-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 186
        ]);

        Order::create([
            'order_number' => 10300,
            'order_date' => '2003-10-04',
            'required_date' => '2003-10-13',
            'shipped_date' => '2003-10-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 128
        ]);

        Order::create([
            'order_number' => 10301,
            'order_date' => '2003-10-05',
            'required_date' => '2003-10-15',
            'shipped_date' => '2003-10-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 299
        ]);

        Order::create([
            'order_number' => 10302,
            'order_date' => '2003-10-06',
            'required_date' => '2003-10-16',
            'shipped_date' => '2003-10-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 201
        ]);

        Order::create([
            'order_number' => 10303,
            'order_date' => '2004-10-06',
            'required_date' => '2004-10-14',
            'shipped_date' => '2004-10-09',
            'status' => 'Shipped',
            'comments' => 'Customer inquired about remote controlled models and gold models.',
            'customer_number' => 484
        ]);

        Order::create([
            'order_number' => 10304,
            'order_date' => '2004-10-11',
            'required_date' => '2004-10-20',
            'shipped_date' => '2004-10-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 256
        ]);

        Order::create([
            'order_number' => 10305,
            'order_date' => '2004-10-13',
            'required_date' => '2004-10-22',
            'shipped_date' => '2004-10-15',
            'status' => 'Shipped',
            'comments' => 'Check on availability.',
            'customer_number' => 286
        ]);

        Order::create([
            'order_number' => 10306,
            'order_date' => '2004-10-14',
            'required_date' => '2004-10-21',
            'shipped_date' => '2004-10-17',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 187
        ]);

        Order::create([
            'order_number' => 10307,
            'order_date' => '2004-10-14',
            'required_date' => '2004-10-23',
            'shipped_date' => '2004-10-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 339
        ]);

        Order::create([
            'order_number' => 10308,
            'order_date' => '2004-10-15',
            'required_date' => '2004-10-24',
            'shipped_date' => '2004-10-20',
            'status' => 'Shipped',
            'comments' => 'Customer requested that FedEx Ground is used for this shipping',
            'customer_number' => 319
        ]);

        Order::create([
            'order_number' => 10309,
            'order_date' => '2004-10-15',
            'required_date' => '2004-10-24',
            'shipped_date' => '2004-10-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 121
        ]);

        Order::create([
            'order_number' => 10310,
            'order_date' => '2004-10-16',
            'required_date' => '2004-10-24',
            'shipped_date' => '2004-10-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 259
        ]);

        Order::create([
            'order_number' => 10311,
            'order_date' => '2004-10-16',
            'required_date' => '2004-10-23',
            'shipped_date' => '2004-10-20',
            'status' => 'Shipped',
            'comments' => 'Difficult to negotiate with customer. We need more marketing materials',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10312,
            'order_date' => '2004-10-21',
            'required_date' => '2004-10-27',
            'shipped_date' => '2004-10-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10313,
            'order_date' => '2004-10-22',
            'required_date' => '2004-10-28',
            'shipped_date' => '2004-10-25',
            'status' => 'Shipped',
            'comments' => 'Customer requested that FedEx Ground is used for this shipping',
            'customer_number' => 202
        ]);

        Order::create([
            'order_number' => 10314,
            'order_date' => '2004-10-22',
            'required_date' => '2004-11-01',
            'shipped_date' => '2004-10-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 227
        ]);

        Order::create([
            'order_number' => 10315,
            'order_date' => '2004-10-29',
            'required_date' => '2004-11-08',
            'shipped_date' => '2004-10-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 119
        ]);

        Order::create([
            'order_number' => 10316,
            'order_date' => '2004-11-01',
            'required_date' => '2004-11-09',
            'shipped_date' => '2004-11-07',
            'status' => 'Shipped',
            'comments' => 'Customer requested that ad materials (such as posters, pamphlets) be included in the shippment',
            'customer_number' => 240
        ]);

        Order::create([
            'order_number' => 10317,
            'order_date' => '2004-11-02',
            'required_date' => '2004-11-12',
            'shipped_date' => '2004-11-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 161
        ]);

        Order::create([
            'order_number' => 10318,
            'order_date' => '2004-11-02',
            'required_date' => '2004-11-09',
            'shipped_date' => '2004-11-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 157
        ]);

        Order::create([
            'order_number' => 10319,
            'order_date' => '2004-11-03',
            'required_date' => '2004-11-11',
            'shipped_date' => '2004-11-06',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 456
        ]);

        Order::create([
            'order_number' => 10320,
            'order_date' => '2004-11-03',
            'required_date' => '2004-11-13',
            'shipped_date' => '2004-11-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 144
        ]);

        Order::create([
            'order_number' => 10321,
            'order_date' => '2004-11-04',
            'required_date' => '2004-11-12',
            'shipped_date' => '2004-11-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 462
        ]);

        Order::create([
            'order_number' => 10322,
            'order_date' => '2004-11-04',
            'required_date' => '2004-11-12',
            'shipped_date' => '2004-11-10',
            'status' => 'Shipped',
            'comments' => 'Customer has worked with some of our vendors in the past and is aware of their MSRP',
            'customer_number' => 363
        ]);

        Order::create([
            'order_number' => 10323,
            'order_date' => '2004-11-05',
            'required_date' => '2004-11-12',
            'shipped_date' => '2004-11-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 128
        ]);

        Order::create([
            'order_number' => 10324,
            'order_date' => '2004-11-05',
            'required_date' => '2004-11-11',
            'shipped_date' => '2004-11-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 181
        ]);

        Order::create([
            'order_number' => 10325,
            'order_date' => '2004-11-05',
            'required_date' => '2004-11-13',
            'shipped_date' => '2004-11-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 121
        ]);

        Order::create([
            'order_number' => 10326,
            'order_date' => '2004-11-09',
            'required_date' => '2004-11-16',
            'shipped_date' => '2004-11-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 144
        ]);

        Order::create([
            'order_number' => 10327,
            'order_date' => '2004-11-10',
            'required_date' => '2004-11-19',
            'shipped_date' => '2004-11-13',
            'status' => 'Resolved',
            'comments' => 'Order was disputed and resolved on 12/1/04. The Sales Manager was involved. Customer claims the scales of the models don\'t match what was discussed.',
            'customer_number' => 145
        ]);

        Order::create([
            'order_number' => 10328,
            'order_date' => '2004-11-12',
            'required_date' => '2004-11-21',
            'shipped_date' => '2004-11-18',
            'status' => 'Shipped',
            'comments' => 'Customer very concerned about the exact color of the models. There is high risk that he may dispute the order because there is a slight color mismatch',
            'customer_number' => 278
        ]);

        Order::create([
            'order_number' => 10329,
            'order_date' => '2004-11-15',
            'required_date' => '2004-11-24',
            'shipped_date' => '2004-11-16',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 131
        ]);

        Order::create([
            'order_number' => 10330,
            'order_date' => '2004-11-16',
            'required_date' => '2004-11-25',
            'shipped_date' => '2004-11-21',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 385
        ]);

        Order::create([
            'order_number' => 10331,
            'order_date' => '2004-11-17',
            'required_date' => '2004-11-23',
            'shipped_date' => '2004-11-23',
            'status' => 'Shipped',
            'comments' => 'Customer requested special shippment. The instructions were passed along to the warehouse',
            'customer_number' => 486
        ]);

        Order::create([
            'order_number' => 10332,
            'order_date' => '2004-11-17',
            'required_date' => '2004-11-25',
            'shipped_date' => '2004-11-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 187
        ]);

        Order::create([
            'order_number' => 10333,
            'order_date' => '2004-11-18',
            'required_date' => '2004-11-27',
            'shipped_date' => '2004-11-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 129
        ]);

        Order::create([
            'order_number' => 10334,
            'order_date' => '2004-11-19',
            'required_date' => '2004-11-28',
            'shipped_date' => NULL,
            'status' => 'On Hold',
            'comments' => 'The outstaniding balance for this customer exceeds their credit limit. Order will be shipped when a payment is received.',
            'customer_number' => 144
        ]);

        Order::create([
            'order_number' => 10335,
            'order_date' => '2004-11-19',
            'required_date' => '2004-11-29',
            'shipped_date' => '2004-11-23',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10336,
            'order_date' => '2004-11-20',
            'required_date' => '2004-11-26',
            'shipped_date' => '2004-11-24',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 172
        ]);

        Order::create([
            'order_number' => 10337,
            'order_date' => '2004-11-21',
            'required_date' => '2004-11-30',
            'shipped_date' => '2004-11-26',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 424
        ]);

        Order::create([
            'order_number' => 10338,
            'order_date' => '2004-11-22',
            'required_date' => '2004-12-02',
            'shipped_date' => '2004-11-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 381
        ]);

        Order::create([
            'order_number' => 10339,
            'order_date' => '2004-11-23',
            'required_date' => '2004-11-30',
            'shipped_date' => '2004-11-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 398
        ]);

        Order::create([
            'order_number' => 10340,
            'order_date' => '2004-11-24',
            'required_date' => '2004-12-01',
            'shipped_date' => '2004-11-25',
            'status' => 'Shipped',
            'comments' => 'Customer is interested in buying more Ferrari models',
            'customer_number' => 216
        ]);

        Order::create([
            'order_number' => 10341,
            'order_date' => '2004-11-24',
            'required_date' => '2004-12-01',
            'shipped_date' => '2004-11-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 382
        ]);

        Order::create([
            'order_number' => 10342,
            'order_date' => '2004-11-24',
            'required_date' => '2004-12-01',
            'shipped_date' => '2004-11-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 114
        ]);

        Order::create([
            'order_number' => 10343,
            'order_date' => '2004-11-24',
            'required_date' => '2004-12-01',
            'shipped_date' => '2004-11-26',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 353
        ]);

        Order::create([
            'order_number' => 10344,
            'order_date' => '2004-11-25',
            'required_date' => '2004-12-02',
            'shipped_date' => '2004-11-29',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 350
        ]);

        Order::create([
            'order_number' => 10345,
            'order_date' => '2004-11-25',
            'required_date' => '2004-12-01',
            'shipped_date' => '2004-11-26',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 103
        ]);

        Order::create([
            'order_number' => 10346,
            'order_date' => '2004-11-29',
            'required_date' => '2004-12-05',
            'shipped_date' => '2004-11-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 112
        ]);

        Order::create([
            'order_number' => 10347,
            'order_date' => '2004-11-29',
            'required_date' => '2004-12-07',
            'shipped_date' => '2004-11-30',
            'status' => 'Shipped',
            'comments' => 'Can we deliver the new Ford Mustang models by end-of-quarter?',
            'customer_number' => 114
        ]);

        Order::create([
            'order_number' => 10348,
            'order_date' => '2004-11-01',
            'required_date' => '2004-11-08',
            'shipped_date' => '2004-11-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 458
        ]);

        Order::create([
            'order_number' => 10349,
            'order_date' => '2004-12-01',
            'required_date' => '2004-12-07',
            'shipped_date' => '2004-12-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 151
        ]);

        Order::create([
            'order_number' => 10350,
            'order_date' => '2004-12-02',
            'required_date' => '2004-12-08',
            'shipped_date' => '2004-12-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10351,
            'order_date' => '2004-12-03',
            'required_date' => '2004-12-11',
            'shipped_date' => '2004-12-07',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 324
        ]);

        Order::create([
            'order_number' => 10352,
            'order_date' => '2004-12-03',
            'required_date' => '2004-12-12',
            'shipped_date' => '2004-12-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 198
        ]);

        Order::create([
            'order_number' => 10353,
            'order_date' => '2004-12-04',
            'required_date' => '2004-12-11',
            'shipped_date' => '2004-12-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 447
        ]);

        Order::create([
            'order_number' => 10354,
            'order_date' => '2004-12-04',
            'required_date' => '2004-12-10',
            'shipped_date' => '2004-12-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 323
        ]);

        Order::create([
            'order_number' => 10355,
            'order_date' => '2004-12-07',
            'required_date' => '2004-12-14',
            'shipped_date' => '2004-12-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10356,
            'order_date' => '2004-12-09',
            'required_date' => '2004-12-15',
            'shipped_date' => '2004-12-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 250
        ]);

        Order::create([
            'order_number' => 10357,
            'order_date' => '2004-12-10',
            'required_date' => '2004-12-16',
            'shipped_date' => '2004-12-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10358,
            'order_date' => '2004-12-10',
            'required_date' => '2004-12-16',
            'shipped_date' => '2004-12-16',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10359,
            'order_date' => '2004-12-15',
            'required_date' => '2004-12-23',
            'shipped_date' => '2004-12-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 353
        ]);

        Order::create([
            'order_number' => 10360,
            'order_date' => '2004-12-16',
            'required_date' => '2004-12-22',
            'shipped_date' => '2004-12-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 496
        ]);

        Order::create([
            'order_number' => 10361,
            'order_date' => '2004-12-17',
            'required_date' => '2004-12-24',
            'shipped_date' => '2004-12-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 282
        ]);

        Order::create([
            'order_number' => 10362,
            'order_date' => '2005-01-05',
            'required_date' => '2005-01-16',
            'shipped_date' => '2005-01-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 161
        ]);

        Order::create([
            'order_number' => 10363,
            'order_date' => '2005-01-06',
            'required_date' => '2005-01-12',
            'shipped_date' => '2005-01-10',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 334
        ]);

        Order::create([
            'order_number' => 10364,
            'order_date' => '2005-01-06',
            'required_date' => '2005-01-17',
            'shipped_date' => '2005-01-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 350
        ]);

        Order::create([
            'order_number' => 10365,
            'order_date' => '2005-01-07',
            'required_date' => '2005-01-18',
            'shipped_date' => '2005-01-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 320
        ]);

        Order::create([
            'order_number' => 10366,
            'order_date' => '2005-01-10',
            'required_date' => '2005-01-19',
            'shipped_date' => '2005-01-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 381
        ]);

        Order::create([
            'order_number' => 10367,
            'order_date' => '2005-01-12',
            'required_date' => '2005-01-21',
            'shipped_date' => '2005-01-16',
            'status' => 'Resolved',
            'comments' => 'This order was disputed and resolved on 2/1/2005. Customer claimed that container with shipment was damaged. FedEx\'s investigation proved this wrong.',
            'customer_number' => 205
        ]);

        Order::create([
            'order_number' => 10368,
            'order_date' => '2005-01-19',
            'required_date' => '2005-01-27',
            'shipped_date' => '2005-01-24',
            'status' => 'Shipped',
            'comments' => 'Can we renegotiate this one?',
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10369,
            'order_date' => '2005-01-20',
            'required_date' => '2005-01-28',
            'shipped_date' => '2005-01-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 379
        ]);

        Order::create([
            'order_number' => 10370,
            'order_date' => '2005-01-20',
            'required_date' => '2005-02-01',
            'shipped_date' => '2005-01-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 276
        ]);

        Order::create([
            'order_number' => 10371,
            'order_date' => '2005-01-23',
            'required_date' => '2005-02-03',
            'shipped_date' => '2005-01-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10372,
            'order_date' => '2005-01-26',
            'required_date' => '2005-02-05',
            'shipped_date' => '2005-01-28',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 398
        ]);

        Order::create([
            'order_number' => 10373,
            'order_date' => '2005-01-31',
            'required_date' => '2005-02-08',
            'shipped_date' => '2005-02-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 311
        ]);

        Order::create([
            'order_number' => 10374,
            'order_date' => '2005-02-02',
            'required_date' => '2005-02-09',
            'shipped_date' => '2005-02-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 333
        ]);

        Order::create([
            'order_number' => 10375,
            'order_date' => '2005-02-03',
            'required_date' => '2005-02-10',
            'shipped_date' => '2005-02-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 119
        ]);

        Order::create([
            'order_number' => 10376,
            'order_date' => '2005-02-08',
            'required_date' => '2005-02-18',
            'shipped_date' => '2005-02-13',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 219
        ]);

        Order::create([
            'order_number' => 10377,
            'order_date' => '2005-02-09',
            'required_date' => '2005-02-21',
            'shipped_date' => '2005-02-12',
            'status' => 'Shipped',
            'comments' => 'Cautious optimism. We have happy customers here, if we can keep them well stocked.  I need all the information I can get on the planned shippments of Porches',
            'customer_number' => 186
        ]);

        Order::create([
            'order_number' => 10378,
            'order_date' => '2005-02-10',
            'required_date' => '2005-02-18',
            'shipped_date' => '2005-02-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10379,
            'order_date' => '2005-02-10',
            'required_date' => '2005-02-18',
            'shipped_date' => '2005-02-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10380,
            'order_date' => '2005-02-16',
            'required_date' => '2005-02-24',
            'shipped_date' => '2005-02-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10381,
            'order_date' => '2005-02-17',
            'required_date' => '2005-02-25',
            'shipped_date' => '2005-02-18',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 321
        ]);

        Order::create([
            'order_number' => 10382,
            'order_date' => '2005-02-17',
            'required_date' => '2005-02-23',
            'shipped_date' => '2005-02-18',
            'status' => 'Shipped',
            'comments' => 'Custom shipping instructions sent to warehouse',
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10383,
            'order_date' => '2005-02-22',
            'required_date' => '2005-03-02',
            'shipped_date' => '2005-02-25',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10384,
            'order_date' => '2005-02-23',
            'required_date' => '2005-03-06',
            'shipped_date' => '2005-02-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 321
        ]);

        Order::create([
            'order_number' => 10385,
            'order_date' => '2005-02-28',
            'required_date' => '2005-03-09',
            'shipped_date' => '2005-03-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10386,
            'order_date' => '2005-03-01',
            'required_date' => '2005-03-09',
            'shipped_date' => '2005-03-06',
            'status' => 'Resolved',
            'comments' => 'Disputed then Resolved on 3/15/2005. Customer doesn\'t like the craftsmaship of the models.',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10387,
            'order_date' => '2005-03-02',
            'required_date' => '2005-03-09',
            'shipped_date' => '2005-03-06',
            'status' => 'Shipped',
            'comments' => 'We need to keep in close contact with their Marketing VP. He is the decision maker for all their purchases.',
            'customer_number' => 148
        ]);

        Order::create([
            'order_number' => 10388,
            'order_date' => '2005-03-03',
            'required_date' => '2005-03-11',
            'shipped_date' => '2005-03-09',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 462
        ]);

        Order::create([
            'order_number' => 10389,
            'order_date' => '2005-03-03',
            'required_date' => '2005-03-09',
            'shipped_date' => '2005-03-08',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 448
        ]);

        Order::create([
            'order_number' => 10390,
            'order_date' => '2005-03-04',
            'required_date' => '2005-03-11',
            'shipped_date' => '2005-03-07',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10391,
            'order_date' => '2005-03-09',
            'required_date' => '2005-03-20',
            'shipped_date' => '2005-03-15',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 276
        ]);

        Order::create([
            'order_number' => 10392,
            'order_date' => '2005-03-10',
            'required_date' => '2005-03-18',
            'shipped_date' => '2005-03-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 452
        ]);

        Order::create([
            'order_number' => 10393,
            'order_date' => '2005-03-11',
            'required_date' => '2005-03-22',
            'shipped_date' => '2005-03-14',
            'status' => 'Shipped',
            'comments' => 'They want to reevaluate their terms agreement with Finance.',
            'customer_number' => 323
        ]);

        Order::create([
            'order_number' => 10394,
            'order_date' => '2005-03-15',
            'required_date' => '2005-03-25',
            'shipped_date' => '2005-03-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10395,
            'order_date' => '2005-03-17',
            'required_date' => '2005-03-24',
            'shipped_date' => '2005-03-23',
            'status' => 'Shipped',
            'comments' => 'We must be cautions with this customer. Their VP of Sales resigned. Company may be heading down.',
            'customer_number' => 250
        ]);

        Order::create([
            'order_number' => 10396,
            'order_date' => '2005-03-23',
            'required_date' => '2005-04-02',
            'shipped_date' => '2005-03-28',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10397,
            'order_date' => '2005-03-28',
            'required_date' => '2005-04-09',
            'shipped_date' => '2005-04-01',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 242
        ]);

        Order::create([
            'order_number' => 10398,
            'order_date' => '2005-03-30',
            'required_date' => '2005-04-09',
            'shipped_date' => '2005-03-31',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 353
        ]);

        Order::create([
            'order_number' => 10399,
            'order_date' => '2005-04-01',
            'required_date' => '2005-04-12',
            'shipped_date' => '2005-04-03',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 496
        ]);

        Order::create([
            'order_number' => 10400,
            'order_date' => '2005-04-01',
            'required_date' => '2005-04-11',
            'shipped_date' => '2005-04-04',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 450
        ]);

        Order::create([
            'order_number' => 10401,
            'order_date' => '2005-04-03',
            'required_date' => '2005-04-14',
            'shipped_date' => NULL,
            'status' => 'On Hold',
            'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
            'customer_number' => 328
        ]);

        Order::create([
            'order_number' => 10402,
            'order_date' => '2005-04-07',
            'required_date' => '2005-04-14',
            'shipped_date' => '2005-04-12',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 406
        ]);

        Order::create([
            'order_number' => 10403,
            'order_date' => '2005-04-08',
            'required_date' => '2005-04-18',
            'shipped_date' => '2005-04-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 201
        ]);

        Order::create([
            'order_number' => 10404,
            'order_date' => '2005-04-08',
            'required_date' => '2005-04-14',
            'shipped_date' => '2005-04-11',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 323
        ]);

        Order::create([
            'order_number' => 10405,
            'order_date' => '2005-04-14',
            'required_date' => '2005-04-24',
            'shipped_date' => '2005-04-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 209
        ]);

        Order::create([
            'order_number' => 10406,
            'order_date' => '2005-04-15',
            'required_date' => '2005-04-25',
            'shipped_date' => '2005-04-21',
            'status' => 'Disputed',
            'comments' => 'Customer claims container with shipment was damaged during shipping and some items were missing. I am talking to FedEx about this.',
            'customer_number' => 145
        ]);

        Order::create([
            'order_number' => 10407,
            'order_date' => '2005-04-22',
            'required_date' => '2005-05-04',
            'shipped_date' => NULL,
            'status' => 'On Hold',
            'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
            'customer_number' => 450
        ]);

        Order::create([
            'order_number' => 10408,
            'order_date' => '2005-04-22',
            'required_date' => '2005-04-29',
            'shipped_date' => '2005-04-27',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 398
        ]);

        Order::create([
            'order_number' => 10409,
            'order_date' => '2005-04-23',
            'required_date' => '2005-05-05',
            'shipped_date' => '2005-04-24',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 166
        ]);

        Order::create([
            'order_number' => 10410,
            'order_date' => '2005-04-29',
            'required_date' => '2005-05-10',
            'shipped_date' => '2005-04-30',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 357
        ]);

        Order::create([
            'order_number' => 10411,
            'order_date' => '2005-05-01',
            'required_date' => '2005-05-08',
            'shipped_date' => '2005-05-06',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 233
        ]);

        Order::create([
            'order_number' => 10412,
            'order_date' => '2005-05-03',
            'required_date' => '2005-05-13',
            'shipped_date' => '2005-05-05',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10413,
            'order_date' => '2005-05-05',
            'required_date' => '2005-05-14',
            'shipped_date' => '2005-05-09',
            'status' => 'Shipped',
            'comments' => 'Customer requested that DHL is used for this shipping',
            'customer_number' => 175
        ]);

        Order::create([
            'order_number' => 10414,
            'order_date' => '2005-05-06',
            'required_date' => '2005-05-13',
            'shipped_date' => NULL,
            'status' => 'On Hold',
            'comments' => 'Customer credit limit exceeded. Will ship when a payment is received.',
            'customer_number' => 362
        ]);

        Order::create([
            'order_number' => 10415,
            'order_date' => '2005-05-09',
            'required_date' => '2005-05-20',
            'shipped_date' => '2005-05-12',
            'status' => 'Disputed',
            'comments' => 'Customer claims the scales of the models don\'t match what was discussed. I keep all the paperwork though to prove otherwise',
            'customer_number' => 471
        ]);

        Order::create([
            'order_number' => 10416,
            'order_date' => '2005-05-10',
            'required_date' => '2005-05-16',
            'shipped_date' => '2005-05-14',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 386
        ]);

        Order::create([
            'order_number' => 10417,
            'order_date' => '2005-05-13',
            'required_date' => '2005-05-19',
            'shipped_date' => '2005-05-19',
            'status' => 'Disputed',
            'comments' => 'Customer doesn\'t like the colors and precision of the models.',
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10418,
            'order_date' => '2005-05-16',
            'required_date' => '2005-05-24',
            'shipped_date' => '2005-05-20',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 412
        ]);

        Order::create([
            'order_number' => 10419,
            'order_date' => '2005-05-17',
            'required_date' => '2005-05-28',
            'shipped_date' => '2005-05-19',
            'status' => 'Shipped',
            'comments' => NULL,
            'customer_number' => 382
        ]);

        Order::create([
            'order_number' => 10420,
            'order_date' => '2005-05-29',
            'required_date' => '2005-06-07',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => NULL,
            'customer_number' => 282
        ]);

        Order::create([
            'order_number' => 10421,
            'order_date' => '2005-05-29',
            'required_date' => '2005-06-06',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => 'Custom shipping instructions were sent to warehouse',
            'customer_number' => 124
        ]);

        Order::create([
            'order_number' => 10422,
            'order_date' => '2005-05-30',
            'required_date' => '2005-06-11',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => NULL,
            'customer_number' => 157
        ]);

        Order::create([
            'order_number' => 10423,
            'order_date' => '2005-05-30',
            'required_date' => '2005-06-05',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => NULL,
            'customer_number' => 314
        ]);

        Order::create([
            'order_number' => 10424,
            'order_date' => '2005-05-31',
            'required_date' => '2005-06-08',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => NULL,
            'customer_number' => 141
        ]);

        Order::create([
            'order_number' => 10425,
            'order_date' => '2005-05-31',
            'required_date' => '2005-06-07',
            'shipped_date' => NULL,
            'status' => 'In Process',
            'comments' => NULL,
            'customer_number' => 119
        ]);
    }
}
