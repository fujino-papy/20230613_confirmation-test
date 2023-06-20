<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<main>
    <div class="confirm__content">
        <div class="confirm__heading">
        <h2>内容確認</h2>
        </div>
        <form class="form" action="/contacts" method="post">
            @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">お名前</th>
                <td class="confirm-table__text">
                <input type="text" name="family_name" value="{{ $contact ['family_name']}}" readonly />
                <input type="text" name="given_name" value="{{ $contact['given_name']}}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                    <input class="radio__btn" type="text" name="gender" value="{{ $contact['gender']}}" readonly/>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">郵便番号</th>
                <td class="confirm-table__text">
                <input type="postcode" name="postcode" value="{{ $contact['postcode'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                <input type="adsress" name="address" value="{{ $contact['address'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                <input type="address" name="building_name" value="{{ $contact['building_name'] }}" readonly />
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">ご意見</th>
                <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                </td>
            </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class='fix__button'>
            <button type="submit" name="back" value="back" class='fix__button-submit' >修正する</button>
        </div>
        </form>
    </div>
    </main>
</body>

</html>