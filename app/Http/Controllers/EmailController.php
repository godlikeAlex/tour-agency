<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class EmailController extends Controller
{
    public function sendEmail($language)
    {
        $data = request()->json()->all();
        $mailData['name'] = $data['name'];
        $mailData['email'] = $data['mail'];
        $mailData['body'] = $data['body'];
        Mail::send('emails.contact', $mailData, function($message) {

            $message->to('info@uzbek-now.mcdir.ru', 'Письмо с сайта Amodi')
                    ->subject('Письмо с сайта Asia Voyage');
            $message->from('info@uzbek-now.mcdir.ru', 'Письмо с сайта Amodi ');

        });

        if (Mail::failures()) {
          $errMess = 'Ой, что-то пошло не так...';
          if($language == 'en') {
            $errMess = 'Whoops something went wrong...';
          }
          return response($errMess, 400);
        }else{
          $success = 'Ваше сообщение было доставлено.';
          if($language == 'en') {
            $success = 'Your message has been delivered.';
          }
          return response($success, 200);
        }
    }

    public function sendTourRequest($language)
    {
      $data = request()->json()->all();
      $mailData['name'] = $data['name'];
      $mailData['surname'] = $data['surname'];
      $mailData['email'] = $data['email'];
      $mailData['phone'] = $data['phone'];
      $mailData['peoples'] = $data['peoples'];
      $mailData['tour'] = $data['tour_name'];

      $mailData['starts'] = isset($data['starts']) ? $data['starts'] : '0';
      $mailData['ends'] = isset($data['ends']) ? $data['ends'] : '0';
      $mailData['price'] = isset($data['price']) ? $data['price'] : '0';

      Mail::send('emails.tour', $mailData, function($message) {

          $message->to('info@uzbek-now.mcdir.ru', 'Amodi- Заявка')
                  ->subject('Amodi - Заявка');
                  $message->from('info@uzbek-now.mcdir.ru	', 'Amodi - Заявка');
      });

      if (Mail::failures()) {
        $errMess = 'Ой, что-то пошло не так...';
        if($language == 'en') {
          $errMess = 'Whoops something went wrong...';
        }
        return response($errMess, 400);
      }else{
        $success = 'Ваше сообщение было доставлено.';
        if($language == 'en') {
          $success = 'Your message has been delivered.';
        }
        return response($success, 200);
      }
    }
}
