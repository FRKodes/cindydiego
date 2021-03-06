<?php namespace App\Http\Controllers;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index(){
		return view('pages.index');
	}

	public function recomendaciones(){
		return View('pages.recomendaciones');
	}

	public function mesa(){
		return View('pages.mesa');
	}
	public function rsvp(){
		return View('pages.rsvp');
	}
	public function mapas(){
		return View('pages.mapas');
	}
	public function programa(){
		return View('pages.programa');
	}
	public function sendmail(){
		Mail::send('emails.contacto', [], function($message){
			$message->to('cindybouquetboda@hotmail.com')->subject('CindyBouquet Boda');
		});
	}
}
