<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Team;
use App\Models\Service;
use App\Models\Company;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $company = new Company();
        $company->name = 'Alfari Studio';
        $company->description = 'Alfari Studio telah melayani customer sejak 2018. Alfari Studio melayani jasa web developer dan graphics designer, kepuasaan customer adalah motto dan tanggung jawab kami memberikan pelayanan terbaik dan produk yang berkualitas adalah kewajiban kami dalam melayani customer.';
        $company->address = 'Jl. Ngagel Tirto IIB No.2, Ngagelrejo, Kec. Wonokromo, Kota SBY, Jawa Timur 60245';
        $company->email = 'alfaristudio@gmail.com';
        $company->phone = '+62 82322442293';
        $company->instagram = 'https://www.instagram.com/alfaristudio/';
        $company->save();

        $team = new Team();
        $team->name = 'Aliffathur Risqi Hidayat';
        $team->position = 'Chief Executive Officer';
        $team->description = 'Berpengalaman dalam bidang web programming. Menguasai bahasa pemrograman PHP dan framework Laravel';
        $team->join_date = Carbon::now();
        $team->image = 'team-1.jpg';
        $team->whatsapp = '+6282322442293';
        $team->github = 'https://github.com/aliffathurrisqi';
        $team->linkedin = 'https://www.linkedin.com/in/aliffathurrisqi';
        $team->save();

        $service = new Service();
        $service->name = 'Web Aplication';
        $service->description = 'Aplikasi Web custom sesuai kebutuhan Anda, dengan penyimpanan database untuk memenuhi kebutuhan webiste Anda';
        $service->icon = 'bi bi-layout-text-window-reverse';
        $service->save();

        $service = new Service();
        $service->name = 'Web Landing Page';
        $service->description = 'Company profile untuk memperkenalkan bisnis anda, dengan fitur customize yang dapat disesuaikan dengan keperluan company';
        $service->icon = 'bi bi-building-gear';
        $service->save();

        $service = new Service();
        $service->name = 'Social Media Post';
        $service->description = 'Desain posting untuk mengomptimalkan social media Anda. Jadikan sosial media bisnis Anda lebih menarik dan profesional';
        $service->icon = 'bi bi-chat-square-heart';
        $service->save();

    }
}
