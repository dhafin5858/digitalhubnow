<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;

class LandingPageController extends Controller
{
    // Display the landing page
    public function index()
    {
        return view('landing');
    }

    // Handle the checkout process
    public function checkout(Request $request)
    {
        // Define transaction details
        $transactionDetails = [
            'order_id' => 'ORDER-' . rand(10000, 99999), // Unique order ID
            'gross_amount' => 500000, // Rp 500.000
        ];

        // Define customer details
        $customerDetails = [
            'first_name' => 'Customer',
            'email' => 'customer@example.com',
        ];

        // Define item details
        $itemDetails = [
            [
                'id' => 'ITEM1',
                'price' => 500000,
                'quantity' => 1,
                'name' => 'Jasa Pembuatan Website',
            ],
        ];

        // Combine all details into the payload
        $payload = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
            'item_details' => $itemDetails,
        ];

        try {
            // Create Snap token
            $snapToken = Snap::getSnapToken($payload);

            // Log the Snap token for debugging
            \Log::info('Snap Token:', ['token' => $snapToken]);

            // Redirect to Midtrans payment page
            return redirect(Snap::createTransaction(['snap_token' => $snapToken])->redirect_url);
        } catch (\Exception $e) {
            // Log any errors
            \Log::error('Midtrans Error:', ['message' => $e->getMessage()]);
            return back()->withErrors(['error' => 'An error occurred while processing your payment. Please try again.']);
        }
    }

    // Payment success page
    public function paymentSuccess()
    {
        return view('payment-success');
    }

    // Payment failed page
    public function paymentFailed()
    {
        return view('payment-failed');
    }

    // Handle Midtrans webhook notifications
    public function handleWebhook(Request $request)
    {
        $notification = $request->all();
        $orderId = $notification['order_id'];
        $transactionStatus = $notification['transaction_status'];

        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            // Payment successful
            // Update database or trigger other actions
        } elseif ($transactionStatus == 'deny' || $transactionStatus == 'expire' || $transactionStatus == 'cancel') {
            // Payment failed
        }

        return response()->json(['status' => 'success']);
    }
}
