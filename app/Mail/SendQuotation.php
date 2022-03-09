<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;

class SendQuotation extends Mailable
{
    use Queueable, SerializesModels;

    
    public $data;
    public $d;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
        $d;
        foreach ($data->input() as $key => $value) {
            $d[$key] = $value;
        }
        if (!array_key_exists('full_load', $d)) {
            $d['full_load'] = 0;
        }

        if (!array_key_exists('part_load', $d)) {
            $d['part_load'] = 0;
        }

        if (!array_key_exists('use_lift_loading', $d)) {
            $d['use_lift_loading'] = 0;
        }

        if (!array_key_exists('use_lift_unloading', $d)) {
            $d['use_lift_unloading'] = 0;
        }

        $this->d = $d;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = PDF::loadView('emails.quotationPdf', ['d' => $this->d]);
        return $this->subject('Quotation From 1st Shivam Trans Movers')->view('emails.quotationE')->attachData($pdf->output(), 'quotation.pdf');
    }
}
