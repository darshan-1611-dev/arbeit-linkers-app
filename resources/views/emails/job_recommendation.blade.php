<x-mail::message>
Dear Freelancer,

We hope this email finds you well. We noticed that you recently searched for <b>{{ $search_text }}</b> on our
website,
but were unable to find any job openings that matched your criteria. We're sorry that we couldn't assist you at the
time, but we wanted to follow up with some job recommendations that we believe may be of interest to you.<br>

Here are some jobs that we recommend based on your search criteria:<br>

<x-mail::panel>
<b>Job Title        :</b> {{ $job_details[0]->project_title }} <br><br>
<b>Job description  :</b> {{ $job_details[0]->project_description }} <br><br>
<b>Price Range      :</b> &#8377;{{ $job_details[0]->min_salary }} - &#8377;{{ $job_details[0]->max_salary }}
</x-mail::panel>

<x-mail::button :url="$job_detail_url">
Bid Now
</x-mail::button>

<br>
We hope that these recommendations are helpful to you in your job search. If you have any questions or would like
additional assistance, please don't hesitate to reach out to us.<br>

Thank you for using our website, and we wish you the best of luck in your job search.<br>

Sincerely,<br>
{{ config('app.name') }}

This email acknowledges the user's previous unsuccessful search attempt, but provides them with job recommendations
that may match their search criteria. It also offers assistance and support if the user has any questions or needs
additional help.

</x-mail::message>
