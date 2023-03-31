<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Detail;
use App\Models\plan;
use App\Models\pspercentage;
use App\Models\PtooPAcc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\rpercentage;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        rpercentage::truncate();
        pspercentage::truncate();
        Detail::truncate();
        Announcement::truncate();
        PtooPAcc::truncate();
        plan::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'nOfDeposit' => 0,
            'name' => 'Admin',
            'number' => '03123456789',
            // 'deposit_wallet' => 0,
            // 'lifetime_investment' => 0,
            // 'profit' => 0,
            // 'package' => 'Admin',
            // 'lifetime_withdrawal' => 0,
            // 'reward_income' => 0,
            // 'referral_earnings' => 0,
            // 'total_teammembers' => 0,
            // 'total_teaminvestment' => 0,
            // 'team_profitbonus' => 0,
            // 'your_ownership' => 0,
            // 'lifetime_earnings' => 0,
            // 'level' => 1,
            'email' => 'admin@admin.com',
            'ref_email' => Null,
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user = User::create([
            'nOfDeposit' => 0,
            'name' => 'User',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '11',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user@user.com',
            'ref_email' => Null,
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);
        
        $user1 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User1',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '10',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user1@user.com',
            'ref_email' => 'user@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user2 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User2',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '9',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user2@user.com',
            'ref_email' => 'user1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user3 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User3',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '8',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user3@user.com',
            'ref_email' => 'user2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user4 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User4',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '7',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user4@user.com',
            'ref_email' => 'user3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user5 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User5',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '6',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user5@user.com',
            'ref_email' => 'user4@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user6 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User6',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '5',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user6@user.com',
            'ref_email' => 'user5@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user7 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User7',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '4',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user7@user.com',
            'ref_email' => 'user6@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user8 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User8',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '3',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user8@user.com',
            'ref_email' => 'user7@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user9 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User9',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '2',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user9@user.com',
            'ref_email' => 'user8@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user10 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User10',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '1',
            'totalreferrals' => '1',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user10@user.com',
            'ref_email' => 'user9@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $user11 = User::create([
            'nOfDeposit' => 0,
            'name' => 'User11',
            'number' => '03123456789',
            'country' => 'Pakistan',
            'numberofwithdrawals' => '0',
            'lud' => '0',
            'now' => '0',
            'referrals' => '0',
            'totalreferrals' => '0',
            'package' => '',
            'investment' => 0,
            'ltinvestment' => 0,
            'profit' => 0,
            'ltwithdrawal' => 0,
            'rewardincome' => 0,
            'referralearnings' => 0,
            'teaminvestment' => 0,
            'teamprofitbonus' => 0,'ownership' => 0,
            'ltearnings' => 0,
            'email' => 'user11@user.com',
            'ref_email' => 'user10@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);
        

        Announcement::create([
        ]);
        
        PtooPAcc::create([
            'Accountname' => 'Abdul Qasim',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'yes',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 5,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Qasim Rehman',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'no',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 4,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Usman',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'no',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'yes',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 5,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Ali Raza',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'no',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'no',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 3,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Hanzala',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'yes',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 2,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Tahir',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'yes',
            'upaisa' => 'no',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 1,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Abdullah',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'no',
            'amountpkr' => '285',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 4,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Ahsan',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'yes',
            'amountpkr' => '280',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 5,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Tariq',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'no',
            'banktransfer' => 'yes',
            'jazzcash' => 'no',
            'upaisa' => 'yes',
            'amountpkr' => '287',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 3,
        ]);
        PtooPAcc::create([
            'Accountname' => 'Mohsin',
            'Accountnumber' => '0541004120205430',
            'bank' => 'Meezan',
            'easypaisa' => 'yes',
            'banktransfer' => 'yes',
            'jazzcash' => 'yes',
            'upaisa' => 'yes',
            'amountpkr' => '286',
            'usdt' => '10000',
            'min' => '10000',
            'max' => '100000',
            'stars' => 2,
        ]);
        Detail::create([
            'usdtprice' => 240,
            'minwithdrawal' => 100,
            'companyTO' => 10000000,
            'totalInvestment' => 0,
            'totalWithdrawal' => 0,
            'trcCharge' => 4,
            'wtbr' => 1,
            'activate' => 1,
            'wallet' => 'asds21242424ads2d24as24D',
            'qrcode' => '/app/public/qrcode.jpg',
        ]);
        pspercentage::create([
            'lvl1' => 5,
            'lvl2' => 5,
            'lvl3' => 5,
            'lvl4' => 5,
            'lvl5' => 5,
            'lvl6' => 0.5,
            'lvl7' => 0.5,
            'lvl8' => 0.5,
            'lvl9' => 0.5,
            'lvl10' => 0.5,
        ]);
        rpercentage::create([
            'lvl1' => 5,
            'lvl2' => 5,
            'lvl3' => 5,
            'lvl4' => 5,
            'lvl5' => 5,
            'lvl6' => 0.5,
            'lvl7' => 0.5,
            'lvl8' => 0.5,
            'lvl9' => 0.5,
            'lvl10' => 0.5,
        ]);
        plan::create([
            'min' => 25,
            'max' => 200,
            'months' => 21,
            'name' => 'Bronze',
            'image' => '/app/public/plans/bronze.jpg',
            'total' => 300,
            'tper' => 8,
            'eper' => 15,
            'sper' => 12,
        ]);
        plan::create([
            'min' => 201,
            'max' => 1000,
            'months' => 21,
            'name' => 'Silver',
            'image' => '/app/public/plans/silver.jpg',
            'total' => 300,
            'tper' => 10,
            'eper' => 25,
            'sper' => 18,
        ]);
        plan::create([
            'min' => 1001,
            'max' => 2000,
            'months' => 21,
            'name' => 'Gold',
            'image' => '/app/public/plans/gold.jpg',
            'total' => 300,
            'tper' => 12,
            'eper' => 30,
            'sper' => 21,
        ]);
        plan::create([
            'min' => 2001,
            'max' => 5000,
            'months' => 21,
            'name' => 'Platinum',
            'image' => '/app/public/plans/platinum.jpg',
            'total' => 300,
            'tper' => 15,
            'eper' => 35,
            'sper' => 25,
        ]);
        plan::create([
            'min' => 5001,
            'max' => 10000,
            'months' => 24,
            'name' => 'Ruby',
            'image' => '/app/public/plans/ruby.jpg',
            'total' => 300,
            'tper' => 17,
            'eper' => 40,
            'sper' => 28,
        ]);
        plan::create([
            'min' => 10001,
            'max' => 100000000,
            'months' => 30,
            'name' => 'Diamond',
            'image' => '/app/public/plans/diamond.jpg',
            'total' => 300,
            'tper' => 20,
            'eper' => 50,
            'sper' => 35,
        ]);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $user1->roles()->attach($userRole);
        $user2->roles()->attach($userRole);
        $user3->roles()->attach($userRole);
        $user4->roles()->attach($userRole);
        $user5->roles()->attach($userRole);
        $user6->roles()->attach($userRole);
        $user7->roles()->attach($userRole);
        $user8->roles()->attach($userRole);
        $user9->roles()->attach($userRole);
        $user10->roles()->attach($userRole);
        $user11->roles()->attach($userRole);
        
        
    }
}
