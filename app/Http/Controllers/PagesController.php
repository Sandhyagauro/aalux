<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Post;
use App\Providers;


class PagesController extends BaseController
{
    protected $post;

    public function _construct(Post $post)
    {
        $this->post = $post;

        $site_data = array(
            'site_contact_email' => 'info@aalux.se',
            'site_number' => '5468641460',
            'site_url' => 'http://www.aalux.com/',
            'site_name' => 'Aalux car service',
            'site_book_email' => 'info@aalux.se',


        );
        \View::share('global_variable', $site_data);

    }


    public function index()
    {
        return view('pages.index');
    }

    public function vacancies()
    {
        return view('pages.vacancies');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function reservation()
    {
        return view('pages.reservation');
    }

    public function fleet()
    {
        return view('pages.fleet');
    }


    public function message()
    {
        return view('message');
    }


    public function postVacanciesForm(Request $request)
    {

//        $Site_contact_email = 'info@aalux.se';
//        $Site_number = '5468641460';
//        $Site_url = 'http://www.aalux.com/';
//        $Site_name = 'Aalux car service';
//        $Site_book_email = 'info@aalux.se';

        $data = array(
            'firstname' => $request->firstname,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'vehiclemade' => $request->vehiclemade,
            'lastname' => $request->lastname,
            'postcode' => $request->postcode,
            'licensenumber' => $request->licensenumber,
            'vehiclemodel' => $request->vehiclemodel,
        );


        $emogrifier = new \Pelago\Emogrifier();
        $emogrifier->setHtml(view('pages/email/vacanciesform', compact('data')));
        $emogrifier->setCss(file_get_contents(app_path() . '/../public/email.css'));

        $contactHtml = $emogrifier->emogrify();
//dd($contactHtml);

        Mail::send([], [], function ($message) use ($data, $contactHtml) {
            $message->from(config('app.site_name'), config('app.name'));
            $message->to(['sandhyagauro123@gmail.com']);
            $message->subject('Form submitted successfully');
            $message->setBody($contactHtml, 'text/html');

        });

        return redirect()->route('message');
    }

    public function postReservationForm(Request $request)
    {


        $data = array(
            'fullname' => $request->fullname,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'passengers' => $request->passengers,
            'luggage' => $request->luggage,
            'child_seats' => $request->child_seats,
            'pickupaddress' => $request->pickupaddress,
            'date' => $request->date,
            'vehicletype' => $request->vehicletype,
            'dropoffaddress' => $request->dropoffaddress,
            'time' => $request->time,
            'servicetype' => $request->servicetype,
            'payment_type' => $request->payment_type,

        );


        $emogrifier = new \Pelago\Emogrifier();
        $emogrifier->setHtml(view('pages/email/reservationform', compact('data')));
        $emogrifier->setCss(file_get_contents(app_path() . '/../public/email.css'));

        $contactHtml = $emogrifier->emogrify();


        Mail::send([], [], function ($message) use ($data, $contactHtml) {
            $message->from(config('app.site_name'), config('app.name'));
            $message->to(['sandhyagauro123@gmail.com']);
            $message->subject('Form submitted successfully');
            $message->setBody($contactHtml, 'text/html');

        });

        return redirect()->route('message');
    }

}