<?php

namespace App\Http\Controllers;

use Zttp\Zttp;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SettingsController extends Controller
{
    public function index()
    {
        \SEO::setTitle("AgroSword - Settings");
        $response = Zttp::withHeaders(['Authorization' => 'Bearer sk_test_1fb1273f1921b844564ce51ad29d2f570c855ad4'])->get('https://api.paystack.co/bank');
        return view('settings.index', ['user' => auth()->user(), 'banks' => $response->json()['data']]);
    }

    public function updateBasic(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        auth()->user()->update($data);

        return back()->with('status', 'Basic Details updated succesfully.');
    }

    public function updateBank(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'account_number' => 'required'
        ]);

        $response = Zttp::withHeaders(['Authorization' => 'Bearer sk_test_1fb1273f1921b844564ce51ad29d2f570c855ad4'])->get("https://api.paystack.co/bank/resolve?account_number={$data['account_number']}&bank_code={$data['code']}");

        if (!$response->json()['status']) {
            throw ValidationException::withMessages([
                'account_number' => ['Please confirm your account details and try again']
            ]);
        }

        $rec_response = Zttp::withHeaders(['Authorization' => 'Bearer sk_test_1fb1273f1921b844564ce51ad29d2f570c855ad4'])
                    ->post('https://api.paystack.co/transferrecipient', [
                        'type' => 'nuban',
                        'name' => auth()->user()->name,
                        'account_number' => $data['account_number'],
                        'bank_code' => $data['code']
                    ]);

        if (auth()->user()->bank) {
            auth()->user()->bank()->update([
                'account_number' => $data['account_number'],
                'account_name' => $response->json()['data']['account_name'],
                'bank_code' => $data['code'],
                'bank_name' =>$rec_response->json()['data']['details']['bank_name'],
                'recipient_code' => $rec_response->json()['data']['recipient_code'],
            ]);
        } else {
            auth()->user()->bank()->create([
                'account_number' => $data['account_number'],
                'account_name' => $response->json()['data']['account_name'],
                'bank_code' => $data['code'],
                'bank_name' =>$rec_response->json()['data']['details']['bank_name'],
                'recipient_code' => $rec_response->json()['data']['recipient_code'],
            ]);
        }

        return back()->with('status', 'Bank Details updated succesfully.');
    }
}
