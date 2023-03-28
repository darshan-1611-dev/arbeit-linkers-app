<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobRecommendation extends Mailable
{
    use Queueable, SerializesModels;

    public $job_details;
    public $job_detail_url;
    public $search_text;

    /**
     * Create a new message instance.
     *
     * @param $job_details
     * @param $search_text
     */
    public function __construct($job_details, $search_text)
    {
        $this->job_details = $job_details;
        $this->job_detail_url = 'http://127.0.0.1:8000/detail-view-job/' . $job_details[0]->id . '';
        $this->search_text = $search_text;
    }

    /**
     * Get the message envelope.
     *
     * @return Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Job Recommendation',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.job_recommendation',
            with: [
                'job_detail_url' => $this->job_detail_url,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
