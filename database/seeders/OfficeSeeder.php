<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create( [
            'office_code'=>'1',
            'city'=>'San Francisco',
            'phone'=>'+1 650 219 4782',
            'address'=>'100 Market Street, Suite 300',
            'state'=>'CA',
            'country'=>'USA',
            'postal_code'=>'94080',
            'territory'=>'NA'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'2',
            'city'=>'Boston',
            'phone'=>'+1 215 837 0825',
            'address'=>'1550 Court Place, Suite 102',
            'state'=>'MA',
            'country'=>'USA',
            'postal_code'=>'02107',
            'territory'=>'NA'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'3',
            'city'=>'NYC',
            'phone'=>'+1 212 555 3000',
            'address'=>'523 East 53rd Street, apt. 5A',
            'state'=>'NY',
            'country'=>'USA',
            'postal_code'=>'10022',
            'territory'=>'NA'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'4',
            'city'=>'Paris',
            'phone'=>'+33 14 723 4404',
            'address'=>'43 Rue Jouffroy D\'abbans',
            'state'=>NULL,
            'country'=>'France',
            'postal_code'=>'75017',
            'territory'=>'EMEA'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'5',
            'city'=>'Tokyo',
            'phone'=>'+81 33 224 5000',
            'address'=>'4-1 Kioicho',
            'state'=>'Chiyoda-Ku',
            'country'=>'Japan',
            'postal_code'=>'102-8578',
            'territory'=>'Japan'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'6',
            'city'=>'Sydney',
            'phone'=>'+61 2 9264 2451',
            'address'=>'5-11 Wentworth Avenue, Floor #2',
            'state'=>NULL,
            'country'=>'Australia',
            'postal_code'=>'NSW 2010',
            'territory'=>'APAC'
            ] );
            
            
                        
            Office::create( [
            'office_code'=>'7',
            'city'=>'London',
            'phone'=>'+44 20 7877 2041',
            'address'=>'25 Old Broad Street, Level 7',
            'state'=>NULL,
            'country'=>'UK',
            'postal_code'=>'EC2N 1HN',
            'territory'=>'EMEA'
            ] );
    }
}
