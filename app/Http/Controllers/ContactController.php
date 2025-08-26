<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "message" => "required|string|max:1000",
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    "success" => false,
                    "errors" => $validator->errors(),
                ],
                422,
            );
        }

        try {
            $address = config("contact.email_to");

            Mail::to($address)->send(
                new ContactFormMail([
                    "name" => $request->input('name'),
                    "email" => $request->input('email'),
                    "message" => $request->input('message'),
                ]),
            );

            return response()->json([
                "success" => true,
                "message" => __("Thank you! Your message has been sent successfully!"),
            ]);
        } catch (\Exception $e) {
            Log::error("Contact form error: " . $e->getMessage());

            return response()->json(
                [
                    "success" => false,
                    "message" => __("Sorry, there was an error sending your message. Please try again later."),
                ],
                500,
            );
        }
    }
}