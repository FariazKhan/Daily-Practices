@component('mail::message')
Hello **User**,  {{-- use double space for line break --}}
Thank you for choosing GNB!
 View Yahoo Website Now
@component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent
Sincerely,  
GNB team.
@endcomponent