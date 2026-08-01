<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Новая заявка M-Core</title>

</head>

<body
    style="
        margin:0;
        padding:40px 20px;
        background:#f4f4f4;
        font-family:Arial,Helvetica,sans-serif;
    "
>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
>

<tr>

<td align="center">

<table
    width="680"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        max-width:680px;
        background:#08110C;
        border-radius:28px;
        overflow:hidden;
        border:1px solid #1D2A22;
    "
>

<tr>

<td
    align="center"
    style="
        padding:50px 40px;
        border-bottom:1px solid #1D2A22;
    "
>

<div
    style="
        font-size:40px;
        letter-spacing:10px;
        font-weight:bold;
        color:#C4B06D;
    "
>

M•CORE

</div>

<div
    style="
        margin-top:18px;
        color:#A3A3A3;
        font-size:17px;
    "
>

Новая заявка с корпоративного сайта

</div>

</td>

</tr>

<tr>

<td style="padding:50px;">

<table
width="100%"
cellpadding="0"
cellspacing="0"
border="0"
>

<tr>

<td style="padding-bottom:24px;">

<div
    style="
        color:#8B8B8B;
        font-size:12px;
        text-transform:uppercase;
        letter-spacing:1px;
        margin-bottom:10px;
    "
>

👤 Имя

</div>

<div
    style="
        background:#101A14;
        border:1px solid #1D2A22;
        border-radius:18px;
        padding:18px 22px;
        color:#E4E1E0;
        font-size:22px;
        font-weight:600;
    "
>

{{ $contact->name }}

</div>

</td>

</tr>

@if($contact->company)

<tr>

<td style="padding-bottom:24px;">

<div
    style="
        color:#8B8B8B;
        font-size:12px;
        text-transform:uppercase;
        letter-spacing:1px;
        margin-bottom:10px;
    "
>

🏢 Компания

</div>

<div
    style="
        background:#101A14;
        border:1px solid #1D2A22;
        border-radius:18px;
        padding:18px 22px;
        color:#E4E1E0;
        font-size:18px;
    "
>

{{ $contact->company }}

</div>

</td>

</tr>

@endif

<tr>

<td style="padding-bottom:24px;">

<div
    style="
        color:#8B8B8B;
        font-size:12px;
        text-transform:uppercase;
        letter-spacing:1px;
        margin-bottom:10px;
    "
>

📞 Телефон

</div>

<div
    style="
        background:#101A14;
        border:1px solid #1D2A22;
        border-radius:18px;
        padding:18px 22px;
        color:#C4B06D;
        font-size:22px;
        font-weight:600;
    "
>

{{ $contact->phone }}

</div>

</td>

</tr>

@if($contact->message)

<tr>

<td>

<div
    style="
        color:#8B8B8B;
        font-size:12px;
        text-transform:uppercase;
        letter-spacing:1px;
        margin-bottom:10px;
    "
>

💬 Сообщение

</div>

<div
    style="
        background:#101A14;
        border:1px solid #1D2A22;
        border-radius:18px;
        padding:22px;
        color:#E4E1E0;
        font-size:16px;
        line-height:1.8;
        white-space:pre-wrap;
    "
>

{!! nl2br(e($contact->message)) !!}

</div>

</td>

</tr>

@endif

</table>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="margin-top:40px;"
>

<tr>

<td align="center">

<a
    href="tel:{{ $contact->phone }}"
    style="
        display:inline-block;
        background:#C4B06D;
        color:#08110C;
        text-decoration:none;
        font-size:16px;
        font-weight:bold;
        padding:16px 34px;
        border-radius:999px;
    "
>

📞 Позвонить клиенту

</a>

</td>

</tr>

@if($contact->phone)

<tr>

<td
    align="center"
    style="padding-top:18px;"
>

<a
    href="https://wa.me/{{ preg_replace('/\D/', '', $contact->phone) }}"
    style="
        display:inline-block;
        background:#101A14;
        color:#E4E1E0;
        text-decoration:none;
        font-size:15px;
        padding:15px 30px;
        border-radius:999px;
        border:1px solid #1D2A22;
    "
>

💬 Открыть WhatsApp

</a>

</td>

</tr>

@endif

</table>

<tr>

<td
    style="
        padding:50px;
        border-top:1px solid #1D2A22;
    "
>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
>

<tr>

<td
    style="
        color:#8B8B8B;
        font-size:12px;
        text-transform:uppercase;
        letter-spacing:1px;
        padding-bottom:14px;
    "
>

Информация о заявке

</td>

</tr>

<tr>

<td>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        background:#101A14;
        border:1px solid #1D2A22;
        border-radius:18px;
    "
>

<tr>

<td
    style="
        padding:20px 24px;
        color:#E4E1E0;
        font-size:14px;
        border-bottom:1px solid #1D2A22;
    "
>

<strong style="color:#C4B06D;">Дата:</strong>

{{ $contact->created_at->format('d.m.Y H:i') }}

</td>

</tr>

<tr>

<td
    style="
        padding:20px 24px;
        color:#E4E1E0;
        font-size:14px;
        border-bottom:1px solid #1D2A22;
    "
>

<strong style="color:#C4B06D;">IP:</strong>

{{ $contact->ip }}

</td>

</tr>

<tr>

<td
    style="
        padding:20px 24px;
        color:#E4E1E0;
        font-size:14px;
    "
>

<strong style="color:#C4B06D;">Браузер:</strong>

{{ $contact->user_agent }}

</td>

</tr>

</table>

</td>

</tr>

<tr>

<td
    align="center"
    style="
        padding-top:40px;
        color:#6F6F6F;
        font-size:13px;
        line-height:1.8;
    "
>

Это письмо сформировано автоматически корпоративным сайтом
<strong style="color:#C4B06D;">M-Core</strong>.

<br><br>

© {{ date('Y') }} M-Core.
Все права защищены.

</td>

</tr>

</table>

</td>

</tr>

</table>

</td>

</tr>

</table>

</body>

</html>
