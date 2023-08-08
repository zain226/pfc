@component('mail::message')
# Congratulations! You have successfully subscribed to our newsletter

Dear {{$data['name'] ?? ''}},

We are thrilled to inform you that you have successfully subscribed to our newsletter.
Thank you for joining our community of "Pakistan Feline Club" enthusiasts who are passionate about cats.

From now on, you will receive regular updates from us, including exclusive content, promotions, product launches, industry news, and much more.
We promise to keep you informed and entertained with valuable insights, tips, and resources that you can use to enhance your hobby.

To ensure that you receive our emails, please add our email address "info@pakistankennelclub.com.pk" to your contact list or whitelist.
This will prevent our messages from going to your spam folder and keep you up-to-date with the latest news from us.

If you have any questions or feedback about our newsletter, please don't hesitate to contact us at "info@pakistankennelclub.com.pk".
We value your opinion and want to hear from you.

Thank you for joining us, and we look forward to sharing our exciting updates with you.

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
