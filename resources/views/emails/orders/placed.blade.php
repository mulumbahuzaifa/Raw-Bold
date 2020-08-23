@component('mail::message')
    # Order Received

    Thank you for your order

    **Order ID:** {{ $order->id }}

    **Order Email:** {{ $order->billing_email }}

    **Order Billing Name:** {{ $order->billing_name }}

    **Order Total:** ${{ round($order->billing_total / 100, 2) }}

    **Item Ordered**

    @foreach($order->products as $product)
        Name:{{ $product->name }}<br>
        Price:{{ round($product->price / 100, 2) }}<br>
        Quantity:{{ $product->pivot->quatity }}<br>
    @endforeach

    You can get further details about your order by logging into our website.

    @component('mail::button',['url' => config('app.url'), 'color' =>'green'])
        Go to website.
    @endcomponent


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent


